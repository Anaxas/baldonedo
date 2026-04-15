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

})();
