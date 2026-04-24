/* ============================================================
   Baldonedo Nettoyage — main.js
   ============================================================ */

(function () {
    'use strict';

    /* ── Sticky header shadow ──────────────────────────────── */
    const header = document.getElementById('site-header');
    if (header) {
        const onScroll = () => {
            header.classList.toggle('scrolled', window.scrollY > 20);
        };
        window.addEventListener('scroll', onScroll, { passive: true });
        onScroll();
    }

    /* ── Mobile nav toggle ─────────────────────────────────── */
    const navToggle = document.getElementById('nav-toggle');
    const mainNav   = document.getElementById('main-nav');

    if (navToggle && mainNav) {
        navToggle.addEventListener('click', () => {
            const isOpen = mainNav.classList.toggle('open');
            navToggle.setAttribute('aria-expanded', String(isOpen));
            navToggle.setAttribute('aria-label', isOpen ? 'Fermer le menu' : 'Ouvrir le menu');
        });

        // Close nav on link click (mobile)
        mainNav.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', () => {
                mainNav.classList.remove('open');
                navToggle.setAttribute('aria-expanded', 'false');
                navToggle.setAttribute('aria-label', 'Ouvrir le menu');
            });
        });

        // Close on outside click
        document.addEventListener('click', e => {
            if (!header.contains(e.target) && mainNav.classList.contains('open')) {
                mainNav.classList.remove('open');
                navToggle.setAttribute('aria-expanded', 'false');
            }
        });
    }

    /* ── Mobile dropdown toggle ────────────────────────────── */
    document.querySelectorAll('.nav-item.has-dropdown .nav-link--drop').forEach(link => {
        link.addEventListener('click', function (e) {
            if (window.innerWidth < 768) {
                e.preventDefault();
                const item = this.closest('.nav-item');
                item.classList.toggle('open');
            }
        });
    });

    /* ── Contact form — AJAX submission ────────────────────── */
    const form      = document.getElementById('contact-form');
    const msgBox    = document.getElementById('form-message');
    const submitBtn = document.getElementById('submit-btn');

    if (form) {
        form.addEventListener('submit', async function (e) {
            e.preventDefault();

            // Basic client-side validation
            const nom     = form.nom.value.trim();
            const email   = form.email.value.trim();
            const message = form.message.value.trim();

            if (!nom || !email || !message) {
                showMessage('Veuillez remplir tous les champs obligatoires.', 'error');
                return;
            }
            if (!isValidEmail(email)) {
                showMessage('Veuillez saisir une adresse e-mail valide.', 'error');
                return;
            }

            // Loading state
            setLoading(true);

            try {
                const body = new FormData(form);

                // Determine correct path to send-mail.php
                const isInPagesDir = window.location.pathname.includes('/pages/');
                const mailUrl = isInPagesDir ? '../send-mail.php' : 'send-mail.php';

                const response = await fetch(mailUrl, {
                    method: 'POST',
                    body,
                });

                const data = await response.json();

                if (data.success) {
                    showMessage(data.message, 'success');
                    form.reset();
                } else {
                    showMessage(data.message || 'Une erreur est survenue.', 'error');
                }
            } catch (err) {
                showMessage('Impossible de contacter le serveur. Veuillez réessayer.', 'error');
            } finally {
                setLoading(false);
            }
        });
    }

    function showMessage(text, type) {
        if (!msgBox) return;
        msgBox.textContent = type === 'success' ? '✅ ' + text : '⚠️ ' + text;
        msgBox.className = 'form-message ' + type;
        msgBox.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }

    function setLoading(loading) {
        if (!submitBtn) return;
        const label   = submitBtn.querySelector('.btn-label');
        const spinner = submitBtn.querySelector('.btn-spinner');
        submitBtn.disabled = loading;
        if (label)   label.textContent = loading ? 'Envoi en cours…' : 'Envoyer le message';
        if (spinner) spinner.hidden = !loading;
    }

    function isValidEmail(email) {
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
    }

    /* ── Smooth scroll for anchor links ────────────────────── */
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                e.preventDefault();
                const offset = header ? header.offsetHeight : 0;
                const top = target.getBoundingClientRect().top + window.scrollY - offset - 16;
                window.scrollTo({ top, behavior: 'smooth' });
            }
        });
    });

    /* ── Intersection Observer — fade-in on scroll ─────────── */
    const observerOptions = {
        threshold: 0.12,
        rootMargin: '0px 0px -40px 0px',
    };

    const fadeElements = document.querySelectorAll(
        '.service-card, .feature-item, .testimonial-card, .contact-info-card, .contact-form-wrap'
    );

    if ('IntersectionObserver' in window && fadeElements.length) {
        fadeElements.forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(24px)';
            el.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
        });

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        fadeElements.forEach((el, i) => {
            el.style.transitionDelay = (i % 3) * 0.1 + 's';
            observer.observe(el);
        });
    }

    /* ── Video controls (réalisations) ─────────────────────── */
    const SVG_MUTED = `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="18" height="18" aria-hidden="true"><path d="M16.5 12c0-1.77-1.02-3.29-2.5-4.03v2.21l2.45 2.45c.03-.2.05-.41.05-.63zm2.5 0c0 .94-.2 1.82-.54 2.64l1.51 1.51C20.63 14.91 21 13.5 21 12c0-4.28-2.99-7.86-7-8.77v2.06c2.89.86 5 3.54 5 6.71zM4.27 3L3 4.27 7.73 9H3v6h4l5 5v-6.73l4.25 4.25c-.67.52-1.42.93-2.25 1.18v2.06c1.38-.31 2.63-.95 3.69-1.81L19.73 21 21 19.73l-9-9L4.27 3zM12 4L9.91 6.09 12 8.18V4z"/></svg>`;
    const SVG_SOUND = `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="18" height="18" aria-hidden="true"><path d="M3 9v6h4l5 5V4L7 9H3zm13.5 3c0-1.77-1.02-3.29-2.5-4.03v8.05c1.48-.73 2.5-2.25 2.5-4.02zM14 3.23v2.06c2.89.86 5 3.54 5 6.71s-2.11 5.85-5 6.71v2.06c4.01-.91 7-4.49 7-8.77s-2.99-7.86-7-8.77z"/></svg>`;

    document.querySelectorAll('.video-wrapper').forEach(wrapper => {
        const video     = wrapper.querySelector('video');
        const muteBtn   = wrapper.querySelector('.video-btn--mute');
        const replayBtn = wrapper.querySelector('.video-btn--replay');
        if (!video || !muteBtn) return;

        const updateMuteIcon = () => {
            muteBtn.innerHTML = video.muted ? SVG_MUTED : SVG_SOUND;
            muteBtn.setAttribute('aria-label', video.muted ? 'Activer le son' : 'Couper le son');
        };

        muteBtn.addEventListener('click', () => {
            video.muted = !video.muted;
            updateMuteIcon();
        });

        if (replayBtn) {
            replayBtn.addEventListener('click', () => {
                video.currentTime = 0;
                video.play();
            });
        }

        const fullscreenBtn = wrapper.querySelector('.video-btn--fullscreen');
        if (fullscreenBtn) {
            fullscreenBtn.addEventListener('click', () => {
                const src = video.querySelector('source')
                    ? video.querySelector('source').src
                    : video.src;
                openVideoLightbox(src);
            });
        }

        // Show replay button prominently when video ends
        video.addEventListener('ended', () => {
            if (replayBtn) {
                replayBtn.style.background = 'rgba(255,255,255,0.35)';
                replayBtn.style.transform  = 'scale(1.2)';
            }
        });

        video.addEventListener('play', () => {
            if (replayBtn) {
                replayBtn.style.background = '';
                replayBtn.style.transform  = '';
            }
        });

        updateMuteIcon(); // set correct icon on load
    });

    /* ── Video lightbox ─────────────────────────────────────── */
    const lightbox       = document.getElementById('video-lightbox');
    const lightboxPlayer = lightbox && lightbox.querySelector('.video-lightbox-player');
    const lightboxClose  = lightbox && lightbox.querySelector('.video-lightbox-close');
    const lightboxBack   = lightbox && lightbox.querySelector('.video-lightbox-backdrop');

    function openVideoLightbox(src) {
        if (!lightbox || !lightboxPlayer) return;
        lightboxPlayer.src = src;
        lightboxPlayer.currentTime = 0;
        lightbox.hidden = false;
        lightboxPlayer.play();
        document.body.style.overflow = 'hidden';
    }

    function closeVideoLightbox() {
        if (!lightbox || !lightboxPlayer) return;
        lightboxPlayer.pause();
        lightboxPlayer.src = '';
        lightbox.hidden = true;
        document.body.style.overflow = '';
    }

    if (lightboxClose) lightboxClose.addEventListener('click', closeVideoLightbox);
    if (lightboxBack)  lightboxBack.addEventListener('click', closeVideoLightbox);
    document.addEventListener('keydown', e => {
        if (e.key === 'Escape' && lightbox && !lightbox.hidden) closeVideoLightbox();
    });

})();
