<?php
$page        = 'ville-paris';
$base        = '../../';
$title       = 'Nettoyage professionnel à Paris — Baldonedo Nettoyage';
$description = 'Baldonedo Nettoyage intervient à Paris pour l\'entretien de vos bureaux, immeubles et logements. Entreprise qualifiée depuis Orly, devis gratuit sous 24h.';
include '../../includes/header.php';
include '../../includes/nav.php';
?>

<main>

<!-- ════════════════════════════════════════
     PAGE HERO
════════════════════════════════════════ -->
<section class="page-hero" aria-label="Nettoyage professionnel à Paris">
    <div class="page-hero-inner container">
        <div class="page-hero-content">
            <nav class="page-breadcrumb" aria-label="Fil d'Ariane">
                <a href="<?= $base ?>index.php">Accueil</a>
                <span aria-hidden="true">›</span>
                <span>Zones d'intervention</span>
                <span aria-hidden="true">›</span>
                <span aria-current="page">Paris</span>
            </nav>
            <span class="section-label">Île-de-France — 75</span>
            <h1>Nettoyage professionnel à <em>Paris</em></h1>
            <p>
                Paris concentre une densité exceptionnelle de bureaux, immeubles haussmanniens,
                résidences et établissements recevant du public. Depuis notre base à Orly,
                Baldonedo Nettoyage intervient dans tous les arrondissements — avec une présence
                forte dans les 13e, 14e et 15e — pour offrir aux entreprises et copropriétés
                parisiennes un service d'entretien à la hauteur de leurs exigences.
            </p>
            <div class="cta-actions" style="margin-top:2rem;">
                <a href="<?= $base ?>pages/contact.php" class="btn btn--primary">Demander un devis gratuit</a>
                <a href="tel:+330148531061" class="cta-phone">📞 01 48 53 10 61</a>
            </div>
        </div>
        <div class="page-hero-image" aria-hidden="true">
            <img src="<?= $base ?>assets/images/nettoyage-paris.png"
                 alt="Nettoyage professionnel à Paris par Baldonedo"
                 width="580" height="480" loading="eager">
        </div>
    </div>
</section>

<!-- ════════════════════════════════════════
     NOS SERVICES À PARIS
════════════════════════════════════════ -->
<section class="section" aria-labelledby="services-paris-title">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Ce que nous faisons à Paris</span>
            <h2 class="section-title" id="services-paris-title">Nos services à Paris</h2>
            <p class="section-subtitle">
                Bureaux dans les tours de la Défense ou cabinets du 8e, immeubles haussmanniens
                du 16e ou résidences modernes du 13e — nous adaptons notre intervention à chaque contexte.
            </p>
        </div>
        <div class="services-grid">

            <article class="service-card">
                <div class="service-card-img">
                    <img src="<?= $base ?>assets/images/bureaux-paris.png"
                         alt="Nettoyage de bureaux à Paris" loading="lazy">
                </div>
                <div class="service-icon" aria-hidden="true">🏢</div>
                <h3>Bureaux &amp; locaux professionnels</h3>
                <p>
                    Entretien régulier des open spaces, salles de réunion, sanitaires et cuisines.
                    Interventions tôt le matin ou en soirée pour ne pas perturber votre activité.
                </p>
                <a href="<?= $base ?>pages/services/bureaux.php" class="btn btn--outline-dark" style="margin-top:1rem;">
                    En savoir plus
                </a>
            </article>

            <article class="service-card">
                <div class="service-card-img">
                    <img src="<?= $base ?>assets/images/entree-immeuble.png"
                         alt="Nettoyage de parties communes à Paris" loading="lazy">
                </div>
                <div class="service-icon" aria-hidden="true">🏛️</div>
                <h3>Immeubles &amp; copropriétés</h3>
                <p>
                    Halls, cages d'escalier, caves et locaux poubelles dans les immeubles parisiens.
                    Contrats adaptés aux syndics et gestionnaires, avec fréquences sur mesure.
                </p>
                <a href="<?= $base ?>pages/services/immeuble.php" class="btn btn--outline-dark" style="margin-top:1rem;">
                    En savoir plus
                </a>
            </article>

            <article class="service-card">
                <div class="service-card-img">
                    <img src="<?= $base ?>assets/images/appartement.png"
                         alt="Nettoyage d'appartement à Paris" loading="lazy">
                </div>
                <div class="service-icon" aria-hidden="true">🏠</div>
                <h3>Maison &amp; Appartement</h3>
                <p>
                    Nettoyage de fond, remise en état entre locataires ou entretien courant.
                    Interventions dans vos appartements parisiens avec discrétion et fiabilité.
                </p>
                <a href="<?= $base ?>pages/services/maison-appartement.php" class="btn btn--outline-dark" style="margin-top:1rem;">
                    En savoir plus
                </a>
            </article>

        </div>
    </div>
</section>

<!-- ════════════════════════════════════════
     POURQUOI BALDONEDO À PARIS
════════════════════════════════════════ -->
<section class="section section--alt" aria-labelledby="whyus-paris-title">
    <div class="container">
        <div class="why-us-inner">
            <div class="why-us-visual">
                <div class="why-us-photo">
                    <img src="<?= $base ?>assets/images/open-space.png"
                         alt="Agent Baldonedo nettoyant un open space parisien"
                         loading="lazy">
                </div>
                <div class="why-us-badge">
                    <div class="why-us-badge-num">24h</div>
                    <div class="why-us-badge-text">Devis gratuit</div>
                </div>
            </div>
            <div>
                <span class="section-label">Pourquoi nous choisir à Paris</span>
                <h2 class="section-title" id="whyus-paris-title" style="text-align:left; max-width:460px;">
                    La rigueur parisienne, sans compromis
                </h2>
                <p style="margin: 1rem 0 1.5rem; color: var(--text-muted, #666);">
                    À Paris, les standards sont élevés. Vos clients, vos partenaires et vos collaborateurs
                    jugent votre image dès le seuil de la porte. Depuis notre siège d'Orly, nous atteignons
                    rapidement tous les arrondissements et nous nous engageons sur des résultats visibles,
                    vérifiables et constants.
                </p>
                <div class="features-list">
                    <div class="feature-item">
                        <div class="feature-icon" aria-hidden="true">🗺️</div>
                        <div>
                            <h4>Connaissance du terrain parisien</h4>
                            <p>Nos équipes connaissent les contraintes de la capitale : accès restreints, horaires de livraison, gardiens d'immeuble. Nous nous adaptons sans effort à votre contexte.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon" aria-hidden="true">🌿</div>
                        <div>
                            <h4>Produits éco-labellisés, conformes aux exigences parisiennes</h4>
                            <p>Nous utilisons exclusivement des produits certifiés éco-label européen, sans danger pour les occupants ni pour l'environnement urbain dense.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon" aria-hidden="true">🔐</div>
                        <div>
                            <h4>Discrétion &amp; confidentialité</h4>
                            <p>Nos agents sont formés à intervenir dans des environnements sensibles : cabinets d'avocats, sièges sociaux, espaces confidentiels. Charte de discrétion garantie.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon" aria-hidden="true">⚡</div>
                        <div>
                            <h4>Réactivité depuis Orly</h4>
                            <p>Situés à Orly, à quelques minutes du périphérique parisien, nous intervenons rapidement sur l'ensemble de Paris, y compris en cas d'urgence ou de demande ponctuelle.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ════════════════════════════════════════
     ZONE D'INTERVENTION
════════════════════════════════════════ -->
<section class="section" aria-labelledby="zone-paris-title">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Périmètre d'action</span>
            <h2 class="section-title" id="zone-paris-title">Paris et ses communes limitrophes</h2>
            <p class="section-subtitle">
                Nous intervenons à Paris mais aussi dans toutes les villes voisines du Val-de-Marne et au-delà.
            </p>
        </div>
        <div class="features-grid">
            <div class="features-grid-item">
                <div class="feature-icon" aria-hidden="true">📍</div>
                <h3>Val-de-Marne (94)</h3>
                <p>Ivry-sur-Seine, Vitry-sur-Seine, Créteil, Choisy-le-Roi, Orly, Rungis, Thiais, Villejuif et l'ensemble du département.</p>
            </div>
            <div class="features-grid-item">
                <div class="feature-icon" aria-hidden="true">📍</div>
                <h3>Paris Sud (75)</h3>
                <p>13e, 14e, 15e arrondissements prioritairement, avec interventions dans l'ensemble des 20 arrondissements selon disponibilités.</p>
            </div>
            <div class="features-grid-item">
                <div class="feature-icon" aria-hidden="true">📍</div>
                <h3>Île-de-France</h3>
                <p>Essonne, Seine-et-Marne, Hauts-de-Seine — nous étudions toute demande en dehors de notre zone habituelle.</p>
            </div>
        </div>
    </div>
</section>

<!-- ════════════════════════════════════════
     CTA BANNER
════════════════════════════════════════ -->
<section class="cta-banner" aria-labelledby="cta-paris-title">
    <div class="container">
        <h2 id="cta-paris-title">Votre entreprise parisienne mérite un entretien irréprochable</h2>
        <p>Obtenez un devis gratuit et personnalisé sous 24 heures. Baldonedo intervient à Paris et dans tout le Val-de-Marne.</p>
        <div class="cta-actions">
            <a href="<?= $base ?>pages/contact.php" class="btn btn--outline">Demander un devis</a>
            <a href="tel:+330148531061" class="cta-phone">📞 01 48 53 10 61</a>
        </div>
    </div>
</section>

</main>

<!-- Schema.org LocalBusiness — Paris -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "CleaningService",
  "name": "Baldonedo Nettoyage",
  "url": "https://www.baldonedo.com/pages/villes/paris.php",
  "telephone": "+33148531061",
  "email": "contact@baldonedo.com",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "61 Avenue de la Victoire",
    "addressLocality": "Orly",
    "postalCode": "94310",
    "addressCountry": "FR"
  },
  "areaServed": {
    "@type": "City",
    "name": "Paris"
  },
  "description": "Nettoyage professionnel à Paris : bureaux, immeubles et appartements. Devis gratuit sous 24h.",
  "priceRange": "€€",
  "openingHours": "Mo-Sa 07:00-20:00"
}
</script>

<?php include '../../includes/footer.php'; ?>
