<?php
$page  = 'contact';
$base  = '../';
$title = 'Contact — Demandez un devis gratuit — Baldonedo Nettoyage';
$description = 'Contactez Baldonedo Nettoyage pour un devis gratuit en moins de 24h. Nettoyage professionnel de bureaux, immeubles et logements en Île-de-France.';
include '../includes/header.php';
include '../includes/nav.php';
?>

<main>

<!-- ════════════════════════════════════════
     CONTACT HERO
════════════════════════════════════════ -->
<section class="contact-hero" aria-label="En-tête de la page contact">
    <div class="container">
        <span class="section-label" style="margin-bottom:.75rem;">Parlons de votre projet</span>
        <h1>Contactez-nous</h1>
        <p>Nous répondons à toutes les demandes sous 24 heures ouvrées.</p>
    </div>
</section>

<!-- ════════════════════════════════════════
     CONTACT LAYOUT
════════════════════════════════════════ -->
<section class="section">
    <div class="container">
        <div class="contact-layout">

            <!-- ── Formulaire ─────────────────────────── -->
            <div class="contact-form-wrap">
                <h2>Envoyez-nous un message</h2>

                <form id="contact-form" novalidate aria-label="Formulaire de contact">
                    <div class="form-grid">

                        <div class="form-group">
                            <label for="nom">Nom complet <span aria-hidden="true">*</span></label>
                            <input
                                type="text"
                                id="nom"
                                name="nom"
                                placeholder="Jean Dupont"
                                required
                                autocomplete="name"
                                aria-required="true"
                            >
                        </div>

                        <div class="form-group">
                            <label for="email">Adresse e-mail <span aria-hidden="true">*</span></label>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                placeholder="jean.dupont@exemple.fr"
                                required
                                autocomplete="email"
                                aria-required="true"
                            >
                        </div>

                        <div class="form-group">
                            <label for="telephone">Téléphone</label>
                            <input
                                type="tel"
                                id="telephone"
                                name="telephone"
                                placeholder="+33 6 00 00 00 00"
                                autocomplete="tel"
                            >
                        </div>

                        <div class="form-group">
                            <label for="sujet">Sujet</label>
                            <input
                                type="text"
                                id="sujet"
                                name="sujet"
                                placeholder="Demande de devis — Bureaux"
                            >
                        </div>

                        <div class="form-group col-2">
                            <label for="message">Message <span aria-hidden="true">*</span></label>
                            <textarea
                                id="message"
                                name="message"
                                placeholder="Décrivez votre besoin : type de locaux, surface approximative, fréquence souhaitée…"
                                required
                                aria-required="true"
                                rows="6"
                            ></textarea>
                        </div>

                    </div>

                    <div class="form-submit">
                        <button type="submit" class="btn btn--primary" id="submit-btn">
                            <span class="btn-label">Envoyer le message</span>
                            <span class="btn-spinner" aria-hidden="true" hidden>⏳</span>
                        </button>
                    </div>

                    <div class="form-message" id="form-message" role="alert" aria-live="polite"></div>
                </form>
            </div>

            <!-- ── Informations ───────────────────────── -->
            <aside class="contact-info" aria-label="Informations de contact">

                <div class="contact-info-card">
                    <h3><span aria-hidden="true">📍</span> Nous trouver</h3>
                    <div class="contact-detail">
                        <div class="contact-detail-item">
                            <div class="icon" aria-hidden="true">🏠</div>
                            <div>
                                <strong>Baldonedo Nettoyage</strong><br>
                                61 Av. de la Victoire<br>
                                94310 Orly, France
                            </div>
                        </div>
                    </div>
                </div>

                <div class="contact-info-card">
                    <h3><span aria-hidden="true">📞</span> Nous appeler</h3>
                    <div class="contact-detail">
                        <div class="contact-detail-item">
                            <div class="icon" aria-hidden="true">📱</div>
                            <a href="tel:+330148531061">+33 01 48 53 10 61</a>
                        </div>
                        <div class="contact-detail-item">
                            <div class="icon" aria-hidden="true">✉️</div>
                            <a href="mailto:contact@baldonedo.com">contact@baldonedo.com</a>
                        </div>
                    </div>
                </div>

                <!-- Google Maps embed placeholder -->
                <div class="map-embed" aria-label="Carte Google Maps — Baldonedo Nettoyage">
                    <iframe
                        title="Localisation Baldonedo Nettoyage"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2628.143!2d2.3896!3d48.7450!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e671c7b4f0b8e3%3A0x1!2s61+Av.+de+la+Victoire%2C+94310+Orly%2C+France!5e0!3m2!1sfr!2sfr!4v1700000000000"
                        allowfullscreen
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                    ></iframe>
                </div>

            </aside>

        </div>
    </div>
</section>

</main>

<?php include '../includes/footer.php'; ?>
