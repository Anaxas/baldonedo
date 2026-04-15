<?php
$page        = 'ville-rungis';
$base        = '../../';
$title       = 'Nettoyage professionnel à Rungis — Baldonedo Nettoyage';
$description = 'Baldonedo Nettoyage intervient à Rungis pour l\'entretien de vos locaux industriels, entrepôts et bureaux. Hygiène renforcée pour le MIN de Rungis et ses entreprises. Devis gratuit.';
include '../../includes/header.php';
include '../../includes/nav.php';
?>

<main>

<!-- ════════════════════════════════════════
     PAGE HERO
════════════════════════════════════════ -->
<section class="page-hero" aria-label="Nettoyage professionnel à Rungis">
    <div class="page-hero-inner container">
        <div class="page-hero-content">
            <nav class="page-breadcrumb" aria-label="Fil d'Ariane">
                <a href="<?= $base ?>index.php">Accueil</a>
                <span aria-hidden="true">›</span>
                <span>Zones d'intervention</span>
                <span aria-hidden="true">›</span>
                <span aria-current="page">Rungis</span>
            </nav>
            <span class="section-label">Val-de-Marne — 94150</span>
            <h1>Nettoyage professionnel à <em>Rungis</em></h1>
            <p>
                Rungis est connue dans le monde entier pour son Marché d'Intérêt National — le MIN de Rungis —,
                plus grand marché de produits frais au monde. Cette ville concentre également de nombreuses
                entreprises logistiques, agroalimentaires et des parcs tertiaires. Dans ce contexte,
                les exigences en matière d'hygiène sont parmi les plus élevées. Baldonedo Nettoyage,
                voisin direct depuis Orly, apporte des solutions de nettoyage professionnelles et rigoureuses,
                adaptées aux normes du secteur alimentaire et industriel.
            </p>
            <div class="cta-actions" style="margin-top:2rem;">
                <a href="<?= $base ?>pages/contact.php" class="btn btn--primary">Demander un devis gratuit</a>
                <a href="tel:+330148531061" class="cta-phone">📞 01 48 53 10 61</a>
            </div>
        </div>
        <div class="page-hero-image" aria-hidden="true">
            <img src="<?= $base ?>assets/images/locaux.png"
                 alt="Nettoyage professionnel de locaux à Rungis par Baldonedo"
                 width="580" height="480" loading="eager">
        </div>
    </div>
</section>

<!-- ════════════════════════════════════════
     NOS SERVICES À RUNGIS
════════════════════════════════════════ -->
<section class="section" aria-labelledby="services-rungis-title">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Ce que nous faisons à Rungis</span>
            <h2 class="section-title" id="services-rungis-title">Nos services à Rungis</h2>
            <p class="section-subtitle">
                Entrepôts frigorifiques, bureaux de négoce, parcs d'activités — nos prestations
                s'adaptent aux contraintes spécifiques du secteur agroalimentaire et logistique rungissois.
            </p>
        </div>
        <div class="services-grid">

            <article class="service-card">
                <div class="service-card-img">
                    <img src="<?= $base ?>assets/images/open-space.png"
                         alt="Nettoyage de bureaux à Rungis" loading="lazy">
                </div>
                <div class="service-icon" aria-hidden="true">🏢</div>
                <h3>Bureaux &amp; espaces tertiaires</h3>
                <p>
                    Entretien des bureaux administratifs, salles de réunion et espaces d'accueil
                    dans les parcs d'activités de Rungis. Plannings adaptés aux horaires décalés
                    des entreprises du MIN.
                </p>
                <a href="<?= $base ?>pages/services/bureaux.php" class="btn btn--outline-dark" style="margin-top:1rem;">
                    En savoir plus
                </a>
            </article>

            <article class="service-card">
                <div class="service-card-img">
                    <img src="<?= $base ?>assets/images/general.png"
                         alt="Nettoyage de locaux industriels à Rungis" loading="lazy">
                </div>
                <div class="service-icon" aria-hidden="true">🏭</div>
                <h3>Locaux industriels &amp; entrepôts</h3>
                <p>
                    Nettoyage approfondi des zones de stockage, quais de chargement, vestiaires
                    et réfectoires. Protocoles de désinfection conformes aux normes alimentaires
                    HACCP et aux exigences de traçabilité.
                </p>
                <a href="<?= $base ?>pages/services/bureaux.php" class="btn btn--outline-dark" style="margin-top:1rem;">
                    En savoir plus
                </a>
            </article>

            <article class="service-card">
                <div class="service-card-img">
                    <img src="<?= $base ?>assets/images/entree-immeuble.png"
                         alt="Nettoyage de parties communes à Rungis" loading="lazy">
                </div>
                <div class="service-icon" aria-hidden="true">🏛️</div>
                <h3>Parties communes &amp; copropriétés</h3>
                <p>
                    Pour les immeubles résidentiels et mixtes de Rungis, nous assurons l'entretien
                    des halls, escaliers et parkings avec régularité et soin.
                </p>
                <a href="<?= $base ?>pages/services/immeuble.php" class="btn btn--outline-dark" style="margin-top:1rem;">
                    En savoir plus
                </a>
            </article>

        </div>
    </div>
</section>

<!-- ════════════════════════════════════════
     CONTEXTE RUNGIS / HYGIENE
════════════════════════════════════════ -->
<section class="section section--alt" aria-labelledby="whyus-rungis-title">
    <div class="container">
        <div class="why-us-inner">
            <div class="why-us-visual">
                <div class="why-us-photo">
                    <img src="<?= $base ?>assets/images/cleaning-man.png"
                         alt="Agent de nettoyage Baldonedo dans un local de Rungis"
                         loading="lazy">
                </div>
                <div class="why-us-badge">
                    <div class="why-us-badge-num">HACCP</div>
                    <div class="why-us-badge-text">Protocoles conformes</div>
                </div>
            </div>
            <div>
                <span class="section-label">L'hygiène avant tout</span>
                <h2 class="section-title" id="whyus-rungis-title" style="text-align:left; max-width:460px;">
                    Le nettoyage professionnel à la hauteur du MIN de Rungis
                </h2>
                <p style="margin: 1rem 0 1.5rem; color: var(--text-muted, #666);">
                    Sur la zone de Rungis, la propreté n'est pas une option — c'est une obligation
                    réglementaire et commerciale. Nos équipes sont formées aux protocoles de nettoyage
                    des environnements alimentaires, avec des produits désinfectants homologués,
                    une traçabilité des interventions et un suivi de la qualité à chaque passage.
                </p>
                <div class="features-list">
                    <div class="feature-item">
                        <div class="feature-icon" aria-hidden="true">🧪</div>
                        <div>
                            <h4>Produits désinfectants homologués</h4>
                            <p>Nous utilisons des désinfectants adaptés aux surfaces en contact avec les denrées alimentaires, conformes aux réglementations européennes en vigueur.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon" aria-hidden="true">📋</div>
                        <div>
                            <h4>Traçabilité &amp; rapports d'intervention</h4>
                            <p>Chaque passage fait l'objet d'un rapport détaillé transmis à votre responsable hygiène. Une documentation complète pour vos audits et contrôles sanitaires.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon" aria-hidden="true">🌙</div>
                        <div>
                            <h4>Horaires adaptés au MIN</h4>
                            <p>Les activités du marché de Rungis démarrent tôt — parfois dès 4h du matin. Nous organisons nos interventions en dehors des créneaux d'activité pour ne jamais vous gêner.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon" aria-hidden="true">📍</div>
                        <div>
                            <h4>Proximité depuis Orly</h4>
                            <p>Notre siège est situé à Orly, à moins de 5 minutes de Rungis. Cette proximité garantit des interventions rapides, même en urgence, à toute heure.</p>
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
<section class="section" aria-labelledby="zone-rungis-title">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Autour de Rungis</span>
            <h2 class="section-title" id="zone-rungis-title">Rungis et les zones d'activités voisines</h2>
            <p class="section-subtitle">
                Notre intervention ne s'arrête pas aux frontières de Rungis — nous couvrons l'ensemble
                de la zone aéroportuaire et logistique du sud du Val-de-Marne.
            </p>
        </div>
        <div class="features-grid">
            <div class="features-grid-item">
                <div class="feature-icon" aria-hidden="true">📍</div>
                <h3>Zone d'Orly &amp; Orly aéroport</h3>
                <p>Locaux logistiques, entrepôts de fret, bureaux de sociétés aéronautiques et de services.</p>
            </div>
            <div class="features-grid-item">
                <div class="feature-icon" aria-hidden="true">📍</div>
                <h3>Thiais &amp; Chevilly-Larue</h3>
                <p>Zones industrielles et commerciales limitrophes, bureaux et entrepôts desservis avec la même rigueur.</p>
            </div>
            <div class="features-grid-item">
                <div class="feature-icon" aria-hidden="true">📍</div>
                <h3>Villejuif &amp; Vitry-sur-Seine</h3>
                <p>Parcs d'activités, laboratoires et locaux tertiaires du nord du Val-de-Marne, à portée de notre équipe.</p>
            </div>
        </div>
    </div>
</section>

<!-- ════════════════════════════════════════
     CTA BANNER
════════════════════════════════════════ -->
<section class="cta-banner" aria-labelledby="cta-rungis-title">
    <div class="container">
        <h2 id="cta-rungis-title">Hygiène irréprochable pour vos locaux à Rungis</h2>
        <p>Baldonedo Nettoyage, votre partenaire de confiance pour un nettoyage professionnel à Rungis. Devis gratuit sous 24h.</p>
        <div class="cta-actions">
            <a href="<?= $base ?>pages/contact.php" class="btn btn--outline">Demander un devis</a>
            <a href="tel:+330148531061" class="cta-phone">📞 01 48 53 10 61</a>
        </div>
    </div>
</section>

</main>

<!-- Schema.org LocalBusiness — Rungis -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "CleaningService",
  "name": "Baldonedo Nettoyage",
  "url": "https://www.baldonedo.com/pages/villes/rungis.php",
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
    "name": "Rungis"
  },
  "description": "Nettoyage professionnel à Rungis : bureaux, entrepôts et locaux industriels près du MIN de Rungis. Protocoles hygiène renforcés, devis gratuit sous 24h.",
  "priceRange": "€€",
  "openingHours": "Mo-Sa 07:00-20:00"
}
</script>

<?php include '../../includes/footer.php'; ?>
