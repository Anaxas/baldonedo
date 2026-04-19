<?php
$page        = 'ville-vitry';
$base        = '../../';
$title       = 'Nettoyage professionnel à Vitry-sur-Seine — Baldonedo Nettoyage';
$description = 'Baldonedo Nettoyage intervient à Vitry-sur-Seine pour le nettoyage de vos bureaux, zones industrielles et logements. Devis gratuit sous 24h, Val-de-Marne.';
include '../../includes/header.php';
include '../../includes/nav.php';
?>

<main>

<!-- ════════════════════════════════════════
     PAGE HERO
════════════════════════════════════════ -->
<section class="page-hero" aria-label="Nettoyage professionnel à Vitry-sur-Seine">
    <div class="page-hero-inner container">
        <div class="page-hero-content">
            <nav class="page-breadcrumb" aria-label="Fil d'Ariane">
                <a href="<?= $base ?>index.php">Accueil</a>
                <span aria-hidden="true">›</span>
                <span>Zones d'intervention</span>
                <span aria-hidden="true">›</span>
                <span aria-current="page">Vitry-sur-Seine</span>
            </nav>
            <span class="section-label">Val-de-Marne — 94400</span>
            <h1>Nettoyage professionnel à <em>Vitry-sur-Seine</em></h1>
            <p>
                Vitry-sur-Seine est l'une des communes les plus peuplées du Val-de-Marne.
                Elle associe de vastes zones d'activités industrielles (ZAC), des quartiers résidentiels
                en pleine mutation et un district culturel reconnu — le Mac Val, Les Frigos, les ateliers
                d'artistes. Cette diversité urbaine génère des besoins en nettoyage multiples que
                Baldonedo Nettoyage, implanté à Orly, est parfaitement équipé pour satisfaire.
            </p>
            <div class="cta-actions" style="margin-top:2rem;">
                <a href="<?= $base ?>pages/contact.php" class="btn btn--primary">Demander un devis gratuit</a>
                <a href="tel:+330148531061" class="cta-phone">📞 01 48 53 10 61</a>
            </div>
        </div>
        <div class="page-hero-image" aria-hidden="true">
            <img src="<?= $base ?>assets/images/general.png"
                 alt="Nettoyage professionnel à Vitry-sur-Seine par Baldonedo"
                 width="580" height="480" loading="eager">
        </div>
    </div>
</section>

<!-- ════════════════════════════════════════
     NOS SERVICES À VITRY-SUR-SEINE
════════════════════════════════════════ -->
<section class="section" aria-labelledby="services-vitry-title">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Ce que nous faisons à Vitry-sur-Seine</span>
            <h2 class="section-title" id="services-vitry-title">Nos services à Vitry-sur-Seine</h2>
            <p class="section-subtitle">
                Des zones industrielles aux résidences des bords de Seine, nous intervenons sur
                l'ensemble du territoire vitriote avec le même niveau d'exigence.
            </p>
        </div>
        <div class="services-grid">

            <article class="service-card">
                <div class="service-card-img">
                    <img src="<?= $base ?>assets/images/bureaux-paris.png"
                         alt="Nettoyage de bureaux à Vitry-sur-Seine" loading="lazy">
                </div>
                <div class="service-icon" aria-hidden="true">🏢</div>
                <h3>Bureaux &amp; locaux d'entreprise</h3>
                <p>
                    Entretien des espaces de travail dans les zones d'activités de Vitry : open spaces,
                    salles de réunion, accueils et sanitaires. Interventions hors heures de bureau
                    pour préserver la continuité de votre activité.
                </p>
                <a href="<?= $base ?>pages/services/bureaux.php" class="btn btn--outline-dark" style="margin-top:1rem;">
                    En savoir plus
                </a>
            </article>

            <article class="service-card">
                <div class="service-card-img">
                    <img src="<?= $base ?>assets/images/haussmanien.png"
                         alt="Nettoyage de parties communes à Vitry-sur-Seine" loading="lazy">
                </div>
                <div class="service-icon" aria-hidden="true">🏛️</div>
                <h3>Immeubles &amp; résidences</h3>
                <p>
                    Entretien des parties communes dans les nombreuses résidences de Vitry-sur-Seine.
                    Halls, escaliers, parkings souterrains et locaux techniques — contrats
                    sur mesure pour syndics et offices HLM.
                </p>
                <a href="<?= $base ?>pages/services/immeuble.php" class="btn btn--outline-dark" style="margin-top:1rem;">
                    En savoir plus
                </a>
            </article>

            <article class="service-card">
                <div class="service-card-img">
                    <img src="<?= $base ?>assets/images/maison.png"
                         alt="Nettoyage de maison à Vitry-sur-Seine" loading="lazy">
                </div>
                <div class="service-icon" aria-hidden="true">🏠</div>
                <h3>Maison &amp; Appartement</h3>
                <p>
                    Entretien régulier, nettoyage de printemps ou remise en état après déménagement.
                    Nous intervenons dans les logements de Vitry-sur-Seine avec flexibilité
                    et discrétion.
                </p>
                <a href="<?= $base ?>pages/services/maison-appartement.php" class="btn btn--outline-dark" style="margin-top:1rem;">
                    En savoir plus
                </a>
            </article>

        </div>
    </div>
</section>

<!-- ════════════════════════════════════════
     POURQUOI BALDONEDO À VITRY
════════════════════════════════════════ -->
<section class="section section--alt" aria-labelledby="whyus-vitry-title">
    <div class="container">
        <div class="why-us-inner">
            <div class="why-us-visual">
                <div class="why-us-photo">
                    <img src="<?= $base ?>assets/images/agents.png"
                         alt="Équipe Baldonedo Nettoyage à Vitry-sur-Seine"
                         loading="lazy">
                </div>
                <div class="why-us-badge">
                    <div class="why-us-badge-num">10+</div>
                    <div class="why-us-badge-text">Années d'expérience</div>
                </div>
            </div>
            <div>
                <span class="section-label">Pourquoi nous choisir à Vitry-sur-Seine</span>
                <h2 class="section-title" id="whyus-vitry-title" style="text-align:left; max-width:460px;">
                    Une ville en transformation, un prestataire à la hauteur
                </h2>
                <p style="margin: 1rem 0 1.5rem; color: var(--text-muted, #666);">
                    Vitry-sur-Seine se réinvente : nouveaux programmes immobiliers, réhabilitation
                    de friches industrielles, essor de la scène culturelle. Dans ce contexte de
                    mutation urbaine, Baldonedo Nettoyage accompagne entreprises, bailleurs et
                    particuliers avec des solutions d'entretien évolutives et fiables.
                </p>
                <div class="features-list">
                    <div class="feature-item">
                        <div class="feature-icon" aria-hidden="true">🏗️</div>
                        <div>
                            <h4>Remise en état après travaux</h4>
                            <p>Vitry connaît de nombreux chantiers de réhabilitation. Nos équipes interviennent après les travaux pour restituer les locaux dans un état irréprochable, prêts à accueillir occupants et visiteurs.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon" aria-hidden="true">🏭</div>
                        <div>
                            <h4>Expertise industrielle et tertiaire</h4>
                            <p>De l'atelier de production aux bureaux de direction, nous adaptons nos méthodes et produits aux contraintes propres à chaque environnement de travail vitriote.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon" aria-hidden="true">🌿</div>
                        <div>
                            <h4>Produits éco-responsables</h4>
                            <p>Nos produits éco-labellisés s'inscrivent dans la démarche de développement durable portée par de nombreuses entreprises implantées à Vitry-sur-Seine.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon" aria-hidden="true">📞</div>
                        <div>
                            <h4>Réactivité garantie</h4>
                            <p>Depuis notre siège d'Orly, nous rejoignons Vitry-sur-Seine en quelques minutes. En cas de besoin urgent, notre équipe peut intervenir le jour même.</p>
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
<section class="section" aria-labelledby="zone-vitry-title">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Autour de Vitry-sur-Seine</span>
            <h2 class="section-title" id="zone-vitry-title">Nous intervenons aussi dans les communes voisines</h2>
            <p class="section-subtitle">
                Vitry-sur-Seine est au cœur de notre zone d'intervention dans le sud du Val-de-Marne.
            </p>
        </div>
        <div class="features-grid">
            <div class="features-grid-item">
                <div class="feature-icon" aria-hidden="true">📍</div>
                <h3>Ivry-sur-Seine &amp; Villejuif</h3>
                <p>Communes voisines au nord, accessibles rapidement. Bureaux et immeubles résidentiels entretenus avec la même rigueur.</p>
            </div>
            <div class="features-grid-item">
                <div class="feature-icon" aria-hidden="true">📍</div>
                <h3>Choisy-le-Roi &amp; Orly</h3>
                <p>Au sud de Vitry, notre siège d'Orly assure une réactivité maximale pour toutes les interventions.</p>
            </div>
            <div class="features-grid-item">
                <div class="feature-icon" aria-hidden="true">📍</div>
                <h3>Paris 13e &amp; 15e</h3>
                <p>Limitrophe du 13e arrondissement, Vitry est à deux pas de Paris. Nos équipes couvrent les deux côtés du périphérique.</p>
            </div>
        </div>
    </div>
</section>

<!-- ════════════════════════════════════════
     CTA BANNER
════════════════════════════════════════ -->
<section class="cta-banner" aria-labelledby="cta-vitry-title">
    <div class="container">
        <h2 id="cta-vitry-title">Vos locaux à Vitry-sur-Seine entre de bonnes mains</h2>
        <p>Contactez Baldonedo Nettoyage pour un devis gratuit et adapté à votre situation. Réponse garantie sous 24 heures.</p>
        <div class="cta-actions">
            <a href="<?= $base ?>pages/contact.php" class="btn btn--outline">Demander un devis</a>
            <a href="tel:+330148531061" class="cta-phone">📞 01 48 53 10 61</a>
        </div>
    </div>
</section>

</main>

<!-- Schema.org LocalBusiness — Vitry-sur-Seine -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "CleaningService",
  "name": "Baldonedo Nettoyage",
  "url": "https://www.baldonedo.com/pages/villes/vitry-sur-seine.php",
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
    "name": "Vitry-sur-Seine"
  },
  "description": "Nettoyage professionnel à Vitry-sur-Seine : bureaux, immeubles résidentiels et locaux industriels dans le Val-de-Marne. Devis gratuit sous 24h.",
  "priceRange": "€€",
  "openingHours": "Mo-Sa 07:00-20:00"
}
</script>

<?php include '../../includes/footer.php'; ?>
