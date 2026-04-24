<?php
$page        = 'ville-choisy';
$base        = '../../';
$title       = 'Nettoyage professionnel à Choisy-le-Roi — Baldonedo Nettoyage';
$description = 'Baldonedo Nettoyage intervient à Choisy-le-Roi pour le nettoyage de vos appartements, bureaux et parties communes. Commune de bord de Seine, devis gratuit sous 24h.';
include '../../includes/header.php';
include '../../includes/nav.php';
?>

<main>

<!-- ════════════════════════════════════════
     PAGE HERO
════════════════════════════════════════ -->
<section class="page-hero" aria-label="Nettoyage professionnel à Choisy-le-Roi">
    <div class="page-hero-inner container">
        <div class="page-hero-content">
            <nav class="page-breadcrumb" aria-label="Fil d'Ariane">
                <a href="<?= $base ?>index.php">Accueil</a>
                <span aria-hidden="true">›</span>
                <span>Zones d'intervention</span>
                <span aria-hidden="true">›</span>
                <span aria-current="page">Choisy-le-Roi</span>
            </nav>
            <span class="section-label">Val-de-Marne — 94600</span>
            <h1>Nettoyage professionnel à <em>Choisy-le-Roi</em></h1>
            <p>
                Lovée dans un méandre de la Seine entre Orly et Ivry-sur-Seine, Choisy-le-Roi
                est une ville à taille humaine mêlant résidences familiales, commerces de centre-ville
                et petites entreprises. Ce cadre de vie agréable appelle un entretien régulier
                et soigné des espaces communs et des logements. Baldonedo Nettoyage, dont le siège
                est situé tout près à Orly, accompagne les habitants et entreprises choisyens
                avec des prestations adaptées à ce contexte pavillonnaire et résidentiel.
            </p>
            <div class="cta-actions" style="margin-top:2rem;">
                <a href="<?= $base ?>pages/contact.php" class="btn btn--primary">Demander un devis gratuit</a>
                <a href="tel:+330148531061" class="cta-phone">📞 01 48 53 10 61</a>
            </div>
        </div>
        <div class="page-hero-image" aria-hidden="true">
            <img src="<?= $base ?>assets/images/appartement.png"
                 alt="Nettoyage professionnel à Choisy-le-Roi par Baldonedo"
                 width="580" height="480" loading="eager">
        </div>
    </div>
</section>

<!-- ════════════════════════════════════════
     NOS SERVICES À CHOISY-LE-ROI
════════════════════════════════════════ -->
<section class="section" aria-labelledby="services-choisy-title">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Ce que nous faisons à Choisy-le-Roi</span>
            <h2 class="section-title" id="services-choisy-title">Nos services à Choisy-le-Roi</h2>
            <p class="section-subtitle">
                Maisons individuelles, petites copropriétés, commerces locaux et locaux associatifs —
                nous répondons à tous les besoins de propreté à Choisy-le-Roi et ses alentours.
            </p>
        </div>
        <div class="services-grid">

            <article class="service-card">
                <div class="service-card-img">
                    <img src="<?= $base ?>assets/images/agent.png"
                         alt="Nettoyage de bureaux à Choisy-le-Roi" loading="lazy">
                </div>
                <div class="service-icon" aria-hidden="true">🏢</div>
                <h3>Bureaux &amp; commerces</h3>
                <p>
                    Entretien des bureaux, cabinets médicaux, commerces et locaux associatifs
                    de Choisy-le-Roi. Nous intervenons en dehors de vos heures d'ouverture
                    pour ne jamais gêner votre clientèle ni vos collaborateurs.
                </p>
                <a href="<?= $base ?>pages/services/bureaux.php" class="btn btn--outline-dark" style="margin-top:1rem;">
                    En savoir plus
                </a>
            </article>

            <article class="service-card">
                <div class="service-card-img">
                    <img src="<?= $base ?>assets/images/haussmanien.png"
                         alt="Nettoyage de parties communes à Choisy-le-Roi" loading="lazy">
                </div>
                <div class="service-icon" aria-hidden="true">🏛️</div>
                <h3>Immeubles &amp; copropriétés</h3>
                <p>
                    Entretien des halls, escaliers, caves et parkings dans les résidences
                    de Choisy-le-Roi. Nos contrats sont adaptés aux petites et moyennes
                    copropriétés avec des tarifs transparents.
                </p>
                <a href="<?= $base ?>pages/services/immeuble.php" class="btn btn--outline-dark" style="margin-top:1rem;">
                    En savoir plus
                </a>
            </article>

            <article class="service-card">
                <div class="service-card-img">
                    <img src="<?= $base ?>assets/images/maison.png"
                         alt="Nettoyage de maison à Choisy-le-Roi" loading="lazy">
                </div>
                <div class="service-icon" aria-hidden="true">🏠</div>
                <h3>Maison &amp; Appartement</h3>
                <p>
                    Ménage hebdomadaire, nettoyage complet avant emménagement ou grand nettoyage
                    de printemps. À Choisy-le-Roi, nous prenons soin de votre intérieur avec
                    la même rigueur que pour les plus grands comptes.
                </p>
                <a href="<?= $base ?>pages/services/maison-appartement.php" class="btn btn--outline-dark" style="margin-top:1rem;">
                    En savoir plus
                </a>
            </article>

        </div>
    </div>
</section>

<!-- ════════════════════════════════════════
     POURQUOI BALDONEDO À CHOISY
════════════════════════════════════════ -->
<section class="section section--alt" aria-labelledby="whyus-choisy-title">
    <div class="container">
        <div class="why-us-inner">
            <div class="why-us-visual">
                <div class="why-us-photo">
                    <img src="<?= $base ?>assets/images/cleaning-man.png"
                         alt="Agent de nettoyage Baldonedo à Choisy-le-Roi"
                         loading="lazy">
                </div>
                <div class="why-us-badge">
                    <div class="why-us-badge-num">24h</div>
                    <div class="why-us-badge-text">Devis gratuit</div>
                </div>
            </div>
            <div>
                <span class="section-label">Pourquoi nous choisir à Choisy-le-Roi</span>
                <h2 class="section-title" id="whyus-choisy-title" style="text-align:left; max-width:460px;">
                    Un service de proximité, à l'échelle de votre ville
                </h2>
                <p style="margin: 1rem 0 1.5rem; color: var(--text-muted, #666);">
                    À Choisy-le-Roi, les relations de confiance comptent autant que la qualité du service.
                    Baldonedo Nettoyage construit des partenariats durables avec les particuliers
                    et les professionnels de la ville. Nos agents sont stables dans leurs missions,
                    vous les connaissez, ils connaissent votre espace — un gage de tranquillité.
                </p>
                <div class="features-list">
                    <div class="feature-item">
                        <div class="feature-icon" aria-hidden="true">🤝</div>
                        <div>
                            <h4>Relation de confiance durable</h4>
                            <p>Nous affectons les mêmes agents à vos missions dans la durée. Pas de turnover surprenant — vous bénéficiez d'une équipe qui connaît vos habitudes et vos exigences.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon" aria-hidden="true">🏠</div>
                        <div>
                            <h4>Adapté aux maisons individuelles</h4>
                            <p>Choisy-le-Roi compte de nombreuses maisons et pavillons. Nos équipes s'y adaptent : jardins, terrasses, véranda, caves — tout ce qui fait votre maison peut bénéficier de notre expertise.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon" aria-hidden="true">📍</div>
                        <div>
                            <h4>Proximité géographique depuis Orly</h4>
                            <p>Notre siège à Orly est à moins de 5 minutes de Choisy-le-Roi. Nos équipes arrivent à l'heure convenue, sans délai lié à la distance, même pour une demande de dernière minute.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon" aria-hidden="true">💬</div>
                        <div>
                            <h4>Devis simple et transparent</h4>
                            <p>Pas de frais cachés, pas de clauses complexes. Nous vous proposons un tarif clair et un contrat lisible, adapté à votre besoin réel — qu'il s'agisse d'un passage mensuel ou d'un chantier ponctuel.</p>
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
<section class="section" aria-labelledby="zone-choisy-title">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Autour de Choisy-le-Roi</span>
            <h2 class="section-title" id="zone-choisy-title">Choisy-le-Roi et ses communes voisines</h2>
            <p class="section-subtitle">
                Nous intervenons également dans les villes proches de Choisy-le-Roi, dans le Val-de-Marne.
            </p>
        </div>
        <div class="features-grid">
            <div class="features-grid-item">
                <div class="feature-icon" aria-hidden="true">📍</div>
                <h3>Orly &amp; Rungis</h3>
                <p>Tout proches à l'ouest, Orly et Rungis font partie de notre périmètre d'intervention quotidien depuis notre siège.</p>
            </div>
            <div class="features-grid-item">
                <div class="feature-icon" aria-hidden="true">📍</div>
                <h3>Ivry-sur-Seine &amp; Vitry-sur-Seine</h3>
                <p>Au nord de Choisy, ces communes dynamiques sont couvertes par nos équipes avec les mêmes standards de qualité.</p>
            </div>
            <div class="features-grid-item">
                <div class="feature-icon" aria-hidden="true">📍</div>
                <h3>Villeneuve-le-Roi &amp; Ablon-sur-Seine</h3>
                <p>Plus au sud le long de la Seine, nous étendons notre zone d'action sur demande pour répondre à vos besoins.</p>
            </div>
        </div>
    </div>
</section>

<!-- ════════════════════════════════════════
     CTA BANNER
════════════════════════════════════════ -->
<section class="cta-banner" aria-labelledby="cta-choisy-title">
    <div class="container">
        <h2 id="cta-choisy-title">Un intérieur propre à Choisy-le-Roi, c'est possible dès maintenant</h2>
        <p>Baldonedo Nettoyage vous propose un devis gratuit sous 24 heures. Contactez-nous par téléphone ou formulaire.</p>
        <div class="cta-actions">
            <a href="<?= $base ?>pages/contact.php" class="btn btn--outline">Demander un devis</a>
            <a href="tel:+330148531061" class="cta-phone">📞 01 48 53 10 61</a>
        </div>
    </div>
</section>

</main>

<!-- Schema.org LocalBusiness — Choisy-le-Roi -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "CleaningService",
  "name": "Baldonedo Nettoyage",
  "url": "https://www.baldonedo.com/pages/villes/choisy-le-roi.php",
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
    "name": "Choisy-le-Roi"
  },
  "description": "Nettoyage professionnel à Choisy-le-Roi : maisons, appartements, bureaux et parties communes. Service de proximité depuis Orly, devis gratuit sous 24h.",
  "priceRange": "€€",
  "openingHours": "Mo-Sa 07:00-20:00"
}
</script>

<?php include '../../includes/footer.php'; ?>
