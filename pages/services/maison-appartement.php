<?php
$page        = 'service-maison';
$base        = '../../';
$title       = 'Nettoyage de maison et appartement à domicile en Île-de-France — Baldonedo Nettoyage';
$description = 'Baldonedo Nettoyage intervient à domicile pour le nettoyage de maisons et appartements en Île-de-France : entretien courant, grand ménage, nettoyage après travaux. Devis gratuit 24h.';
include '../../includes/header.php';
include '../../includes/nav.php';
?>

<!-- Schema.org Service — Nettoyage à domicile -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "serviceType": "Nettoyage de maison et appartement à domicile",
  "name": "Ménage professionnel à domicile — maison et appartement",
  "description": "Nettoyage professionnel de maisons et appartements en Île-de-France : entretien régulier, grand ménage de printemps, remise en état après travaux ou emménagement. Discret, flexible et efficace.",
  "provider": {
    "@type": "CleaningService",
    "name": "Baldonedo Nettoyage",
    "url": "https://www.baldonedo.com",
    "telephone": "+33148531061",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "61 Avenue de la Victoire",
      "addressLocality": "Orly",
      "postalCode": "94310",
      "addressCountry": "FR"
    }
  },
  "areaServed": {
    "@type": "AdministrativeArea",
    "name": "Île-de-France"
  },
  "offers": {
    "@type": "Offer",
    "priceCurrency": "EUR",
    "availability": "https://schema.org/InStock",
    "description": "Devis gratuit personnalisé sous 24h — intervention flexible selon vos disponibilités"
  },
  "breadcrumb": {
    "@type": "BreadcrumbList",
    "itemListElement": [
      {"@type": "ListItem", "position": 1, "name": "Accueil", "item": "https://www.baldonedo.com/"},
      {"@type": "ListItem", "position": 2, "name": "Services", "item": "https://www.baldonedo.com/index.php#services"},
      {"@type": "ListItem", "position": 3, "name": "Maison & Appartement", "item": "https://www.baldonedo.com/pages/services/maison-appartement.php"}
    ]
  }
}
</script>

<main>

<!-- ════════════════════════════════════════
     PAGE HERO
════════════════════════════════════════ -->
<section class="page-hero" aria-label="Nettoyage de maison et appartement à domicile">
    <div class="page-hero-inner container">
        <div class="page-hero-content">
            <nav class="page-breadcrumb" aria-label="Fil d'Ariane">
                <a href="<?= $base ?>index.php">Accueil</a>
                <span aria-hidden="true">›</span>
                <a href="<?= $base ?>index.php#services">Services</a>
                <span aria-hidden="true">›</span>
                <span aria-current="page">Maison &amp; Appartement</span>
            </nav>
            <span class="section-label">À domicile</span>
            <h1>Nettoyage de maison et <em>appartement</em> à domicile</h1>
            <p>
                Votre domicile est votre espace de vie. Confier son entretien à des
                professionnels vous libère du temps tout en garantissant un résultat
                impeccable. Baldonedo Nettoyage intervient dans votre maison ou
                appartement avec discrétion, soin et les meilleurs produits éco-labellisés,
                selon vos disponibilités et votre budget.
            </p>
            <div class="cta-actions" style="margin-top:2rem;">
                <a href="<?= $base ?>pages/contact.php" class="btn btn--primary">Demander un devis gratuit</a>
                <a href="tel:+330148531061" class="cta-phone">📞 01 48 53 10 61</a>
            </div>
        </div>
        <div class="page-hero-image" aria-hidden="true">
            <img src="<?= $base ?>assets/images/piece.png"
                 alt="Pièce de maison propre et lumineuse nettoyée par Baldonedo"
                 width="580" height="480" loading="eager">
        </div>
    </div>
</section>

<!-- ════════════════════════════════════════
     TYPES DE PRESTATIONS
════════════════════════════════════════ -->
<section class="section" aria-labelledby="types-title">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Nos formules</span>
            <h2 class="section-title" id="types-title">Un service adapté à chaque besoin</h2>
            <p class="section-subtitle">
                Que vous souhaitiez un entretien régulier ou une intervention ponctuelle,
                nous proposons une gamme complète de prestations ménagères professionnelles.
            </p>
        </div>

        <div class="features-grid">

            <div class="features-grid-item">
                <div class="feature-icon" aria-hidden="true">🧽</div>
                <h3>Entretien courant</h3>
                <p>
                    Passage régulier (hebdomadaire ou bimensuel) pour maintenir votre domicile
                    dans un état de propreté constant : aspiration, lavage des sols, dépoussiérage,
                    nettoyage des surfaces et sanitaires, cuisine et salle de bains.
                </p>
            </div>

            <div class="features-grid-item">
                <div class="feature-icon" aria-hidden="true">✨</div>
                <h3>Grand ménage de fond</h3>
                <p>
                    Nettoyage intensif et complet de votre logement : intérieur des placards,
                    derrière les meubles, nettoyage vapeur des carrelages, dégraissage
                    en profondeur de la cuisine, détartrage et désinfection complète des
                    salles d'eau. Idéal avant ou après une location.
                </p>
            </div>

            <div class="features-grid-item">
                <div class="feature-icon" aria-hidden="true">🔨</div>
                <h3>Nettoyage après travaux</h3>
                <p>
                    Élimination des poussières de plâtre, résidus de peinture, sciure
                    et gravats. Nettoyage de toutes les surfaces, vitres, sols et
                    menuiseries. Remise en état complète de votre logement, prêt à
                    être occupé ou livré.
                </p>
            </div>

            <div class="features-grid-item">
                <div class="feature-icon" aria-hidden="true">🏠</div>
                <h3>Nettoyage avant / après location</h3>
                <p>
                    Préparation d'un logement avant état des lieux d'entrée ou remise
                    en état après l'occupation d'un locataire. Nettoyage complet,
                    désinfection et détartrage pour restituer le bien dans son état
                    d'origine.
                </p>
            </div>

            <div class="features-grid-item">
                <div class="feature-icon" aria-hidden="true">🛋️</div>
                <h3>Nettoyage de canapés &amp; moquettes</h3>
                <p>
                    Nettoyage par injection-extraction de vos canapés, fauteuils,
                    moquettes et tapis. Élimination des taches, odeurs, acariens
                    et allergènes pour un intérieur sain et rafraîchi.
                </p>
            </div>

            <div class="features-grid-item">
                <div class="feature-icon" aria-hidden="true">🪟</div>
                <h3>Nettoyage des vitres</h3>
                <p>
                    Nettoyage intérieur et extérieur de toutes vos fenêtres, baies vitrées,
                    vélux et vérandas. Équipement professionnel (perche télescopique,
                    raclette) pour des vitres impeccables sans trace ni auréole.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- ════════════════════════════════════════
     NETTOYAGE APRÈS TRAVAUX — FOCUS
════════════════════════════════════════ -->
<section class="section section--alt" aria-labelledby="apres-travaux-title">
    <div class="container">
        <div class="why-us-inner">

            <div class="why-us-visual">
                <div class="why-us-photo">
                    <img src="<?= $base ?>assets/images/echelle.png"
                         alt="Agent Baldonedo effectuant un nettoyage après travaux en hauteur"
                         loading="lazy">
                </div>
                <div class="why-us-badge">
                    <div class="why-us-badge-num">48h</div>
                    <div class="why-us-badge-text">Intervention rapide</div>
                </div>
            </div>

            <div>
                <span class="section-label">Spécialité</span>
                <h2 class="section-title" id="apres-travaux-title" style="text-align:left; max-width:460px;">
                    Expert en nettoyage après travaux de rénovation
                </h2>
                <p style="margin: 1rem 0 1.5rem; color: var(--text-muted, #666);">
                    La poussière de chantier est tenace et s'infiltre partout : ventilation,
                    armoires, sous les parquets. Notre équipe spécialisée dispose du matériel
                    et du savoir-faire pour débarrasser votre logement de tous les résidus
                    de travaux et vous remettre les clés d'un bien prêt à être habité.
                </p>
                <div class="features-list">

                    <div class="feature-item">
                        <div class="feature-icon" aria-hidden="true">🌫️</div>
                        <div>
                            <h4>Élimination des poussières fines</h4>
                            <p>Aspiration puissante avec filtres HEPA, nettoyage de toutes les surfaces horizontales et verticales, intérieur des ventilations et des placards.</p>
                        </div>
                    </div>

                    <div class="feature-item">
                        <div class="feature-icon" aria-hidden="true">🎨</div>
                        <div>
                            <h4>Résidus de peinture &amp; enduits</h4>
                            <p>Retrait des projections de peinture sur les vitres, sols et sanitaires. Nettoyage des interrupteurs, prises, plinthes et boiseries.</p>
                        </div>
                    </div>

                    <div class="feature-item">
                        <div class="feature-icon" aria-hidden="true">🪵</div>
                        <div>
                            <h4>Sols neufs &amp; menuiseries</h4>
                            <p>Premier nettoyage des parquets neufs, carrelages et stratifiés. Protection et entretien initial des menuiseries et huisseries pour préserver leur état.</p>
                        </div>
                    </div>

                    <div class="feature-item">
                        <div class="feature-icon" aria-hidden="true">💧</div>
                        <div>
                            <h4>Sanitaires &amp; cuisine neufs</h4>
                            <p>Détartrage et désinfection des installations sanitaires et de cuisine toutes neuves. Retrait des films de protection et premiers soins des équipements.</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- ════════════════════════════════════════
     GALERIE
════════════════════════════════════════ -->
<section class="section" aria-labelledby="galerie-maison-title">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Nos réalisations</span>
            <h2 class="section-title" id="galerie-maison-title">Logements entretenus par Baldonedo</h2>
            <p class="section-subtitle">Des appartements et maisons rendus impeccables grâce à notre intervention professionnelle.</p>
        </div>
        <div class="service-gallery">
            <figure>
                <img src="<?= $base ?>assets/images/appartement.png"
                     alt="Appartement propre et bien entretenu après intervention Baldonedo"
                     loading="lazy">
                <figcaption>Appartement — Villejuif</figcaption>
            </figure>
            <figure>
                <img src="<?= $base ?>assets/images/canape.png"
                     alt="Canapé nettoyé par injection-extraction par Baldonedo"
                     loading="lazy">
                <figcaption>Nettoyage canapé — Choisy-le-Roi</figcaption>
            </figure>
            <figure>
                <img src="<?= $base ?>assets/images/maison.png"
                     alt="Maison individuelle entretenue par Baldonedo Nettoyage en Île-de-France"
                     loading="lazy">
                <figcaption>Maison individuelle — Thiais</figcaption>
            </figure>
        </div>
    </div>
</section>

<!-- ════════════════════════════════════════
     POURQUOI NOUS — MINI
════════════════════════════════════════ -->
<section class="section section--alt" aria-labelledby="whyus-maison-title">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Nos engagements</span>
            <h2 class="section-title" id="whyus-maison-title">Pourquoi choisir Baldonedo pour votre domicile ?</h2>
        </div>
        <div class="features-grid">

            <div class="features-grid-item">
                <div class="feature-icon" aria-hidden="true">🔒</div>
                <h3>Discrétion &amp; respect de l'intimité</h3>
                <p>Nos agents sont sélectionnés avec soin, présentés avant la première intervention et soumis à une charte de confidentialité. Votre domicile est entre de bonnes mains.</p>
            </div>

            <div class="features-grid-item">
                <div class="feature-icon" aria-hidden="true">🕐</div>
                <h3>Flexibilité des horaires</h3>
                <p>Nous nous adaptons à votre agenda : matin, après-midi, en semaine ou le week-end. Vous n'avez pas besoin d'être présent si vous faites confiance à nos agents.</p>
            </div>

            <div class="features-grid-item">
                <div class="feature-icon" aria-hidden="true">🌿</div>
                <h3>Produits sûrs pour toute la famille</h3>
                <p>Nous utilisons exclusivement des produits éco-labellisés, sans danger pour les enfants, les animaux de compagnie et les personnes allergiques ou asthmatiques.</p>
            </div>

            <div class="features-grid-item">
                <div class="feature-icon" aria-hidden="true">💶</div>
                <h3>Tarif transparent, devis gratuit</h3>
                <p>Pas de frais cachés ni de surprise à la facturation. Notre devis détaillé précise les prestations, la durée et le coût exact avant toute intervention.</p>
            </div>

        </div>
    </div>
</section>

<!-- ════════════════════════════════════════
     NOS AUTRES SERVICES
════════════════════════════════════════ -->
<section class="section" aria-labelledby="autres-services-maison-title">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Découvrez aussi</span>
            <h2 class="section-title" id="autres-services-maison-title">Nos autres services</h2>
            <p class="section-subtitle">Baldonedo Nettoyage intervient sur tous types d'environnements en Île-de-France.</p>
        </div>

        <div class="services-grid">

            <article class="service-card">
                <div class="service-card-img">
                    <img src="<?= $base ?>assets/images/nettoyage-bureaux.png"
                         alt="Nettoyage de bureaux et locaux professionnels"
                         loading="lazy">
                </div>
                <div class="service-icon" aria-hidden="true">🏢</div>
                <h3>Bureaux &amp; locaux professionnels</h3>
                <p>
                    Entretien régulier de vos espaces de travail : open spaces, sanitaires,
                    cuisine et zones communes. Intervention hors heures de bureau.
                </p>
                <a href="<?= $base ?>pages/services/bureaux.php" class="btn btn--outline-dark" style="margin-top:1rem;">
                    En savoir plus
                </a>
            </article>

            <article class="service-card">
                <div class="service-card-img">
                    <img src="<?= $base ?>assets/images/haussmanien.png"
                         alt="Nettoyage de parties communes d'immeuble"
                         loading="lazy">
                </div>
                <div class="service-icon" aria-hidden="true">🏛️</div>
                <h3>Immeubles &amp; parties communes</h3>
                <p>
                    Halls, cages d'escalier, parkings et locaux poubelles. Contrats
                    sur mesure pour syndics, copropriétés et bailleurs sociaux.
                </p>
                <a href="<?= $base ?>pages/services/immeuble.php" class="btn btn--outline-dark" style="margin-top:1rem;">
                    En savoir plus
                </a>
            </article>

        </div>
    </div>
</section>

<!-- ════════════════════════════════════════
     CTA BANNER
════════════════════════════════════════ -->
<section class="cta-banner" aria-labelledby="cta-maison-title">
    <div class="container">
        <h2 id="cta-maison-title">Offrez-vous un intérieur impeccable</h2>
        <p>
            Demandez votre devis gratuit aujourd'hui. Nos équipes interviennent
            dans toute l'Île-de-France selon vos disponibilités.
        </p>
        <div class="cta-actions">
            <a href="<?= $base ?>pages/contact.php" class="btn btn--outline">Demander un devis gratuit</a>
            <a href="tel:+330148531061" class="cta-phone">📞 01 48 53 10 61</a>
        </div>
    </div>
</section>

</main>

<?php include '../../includes/footer.php'; ?>
