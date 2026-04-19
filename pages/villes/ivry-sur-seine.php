<?php
$page        = 'ville-ivry';
$base        = '../../';
$title       = 'Nettoyage professionnel à Ivry-sur-Seine — Baldonedo Nettoyage';
$description = 'Baldonedo Nettoyage assure le nettoyage de vos bureaux, immeubles et appartements à Ivry-sur-Seine (94200). Proche Paris 13e, devis gratuit sous 24h.';
include '../../includes/header.php';
include '../../includes/nav.php';
?>

<main>

<!-- ════════════════════════════════════════
     PAGE HERO
════════════════════════════════════════ -->
<section class="page-hero" aria-label="Nettoyage professionnel à Ivry-sur-Seine">
    <div class="page-hero-inner container">
        <div class="page-hero-content">
            <nav class="page-breadcrumb" aria-label="Fil d'Ariane">
                <a href="<?= $base ?>index.php">Accueil</a>
                <span aria-hidden="true">›</span>
                <span>Zones d'intervention</span>
                <span aria-hidden="true">›</span>
                <span aria-current="page">Ivry-sur-Seine</span>
            </nav>
            <span class="section-label">Val-de-Marne — 94200</span>
            <h1>Nettoyage professionnel à <em>Ivry-sur-Seine</em></h1>
            <p>
                Porte d'entrée du Val-de-Marne en venant de Paris, Ivry-sur-Seine partage une frontière
                directe avec le 13e arrondissement. Cette position stratégique en fait l'une des communes
                les plus actives du département : nombreuses entreprises, immeubles de bureau en bord de Seine,
                résidences récentes et quartiers populaires densément peuplés. Baldonedo Nettoyage,
                basé à Orly, intervient à Ivry-sur-Seine pour des prestations de nettoyage professionnelles,
                fiables et sur mesure.
            </p>
            <div class="cta-actions" style="margin-top:2rem;">
                <a href="<?= $base ?>pages/contact.php" class="btn btn--primary">Demander un devis gratuit</a>
                <a href="tel:+330148531061" class="cta-phone">📞 01 48 53 10 61</a>
            </div>
        </div>
        <div class="page-hero-image" aria-hidden="true">
            <img src="<?= $base ?>assets/images/societe-bureaux.png"
                 alt="Nettoyage professionnel à Ivry-sur-Seine par Baldonedo"
                 width="580" height="480" loading="eager">
        </div>
    </div>
</section>

<!-- ════════════════════════════════════════
     NOS SERVICES À IVRY
════════════════════════════════════════ -->
<section class="section" aria-labelledby="services-ivry-title">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Ce que nous faisons à Ivry-sur-Seine</span>
            <h2 class="section-title" id="services-ivry-title">Nos services à Ivry-sur-Seine</h2>
            <p class="section-subtitle">
                Du siège social en bord de Seine à la résidence du quartier Joliot-Curie,
                nos équipes s'adaptent à chaque environnement avec méthode et professionnalisme.
            </p>
        </div>
        <div class="services-grid">

            <article class="service-card">
                <div class="service-card-img">
                    <img src="<?= $base ?>assets/images/bureaux-paris07.png"
                         alt="Nettoyage de bureaux à Ivry-sur-Seine" loading="lazy">
                </div>
                <div class="service-icon" aria-hidden="true">🏢</div>
                <h3>Bureaux &amp; locaux professionnels</h3>
                <p>
                    Entretien complet de vos espaces de travail à Ivry-sur-Seine : sols, vitres, sanitaires,
                    cuisines, salles de réunion. Nos agents interviennent tôt le matin ou en soirée
                    selon vos contraintes opérationnelles.
                </p>
                <a href="<?= $base ?>pages/services/bureaux.php" class="btn btn--outline-dark" style="margin-top:1rem;">
                    En savoir plus
                </a>
            </article>

            <article class="service-card">
                <div class="service-card-img">
                    <img src="<?= $base ?>assets/images/entree-immeuble.png"
                         alt="Nettoyage de parties communes à Ivry-sur-Seine" loading="lazy">
                </div>
                <div class="service-icon" aria-hidden="true">🏛️</div>
                <h3>Immeubles &amp; copropriétés</h3>
                <p>
                    Ivry-sur-Seine compte un parc immobilier résidentiel dense. Nous assurons l'entretien
                    des parties communes — halls, couloirs, escaliers, locaux poubelles et parkings —
                    avec des fréquences adaptées à chaque copropriété.
                </p>
                <a href="<?= $base ?>pages/services/immeuble.php" class="btn btn--outline-dark" style="margin-top:1rem;">
                    En savoir plus
                </a>
            </article>

            <article class="service-card">
                <div class="service-card-img">
                    <img src="<?= $base ?>assets/images/canape.png"
                         alt="Nettoyage d'appartement à Ivry-sur-Seine" loading="lazy">
                </div>
                <div class="service-icon" aria-hidden="true">🏠</div>
                <h3>Maison &amp; Appartement</h3>
                <p>
                    Ménage régulier, nettoyage après emménagement ou avant restitution au bailleur.
                    Nous intervenons dans vos appartements et maisons d'Ivry-sur-Seine avec
                    ponctualité et respect de votre espace de vie.
                </p>
                <a href="<?= $base ?>pages/services/maison-appartement.php" class="btn btn--outline-dark" style="margin-top:1rem;">
                    En savoir plus
                </a>
            </article>

        </div>
    </div>
</section>

<!-- ════════════════════════════════════════
     POURQUOI BALDONEDO À IVRY
════════════════════════════════════════ -->
<section class="section section--alt" aria-labelledby="whyus-ivry-title">
    <div class="container">
        <div class="why-us-inner">
            <div class="why-us-visual">
                <div class="why-us-photo">
                    <img src="<?= $base ?>assets/images/proprete.png"
                         alt="Nettoyage professionnel à Ivry-sur-Seine"
                         loading="lazy">
                </div>
                <div class="why-us-badge">
                    <div class="why-us-badge-num">500+</div>
                    <div class="why-us-badge-text">Clients satisfaits</div>
                </div>
            </div>
            <div>
                <span class="section-label">Pourquoi nous choisir à Ivry-sur-Seine</span>
                <h2 class="section-title" id="whyus-ivry-title" style="text-align:left; max-width:460px;">
                    L'énergie d'Ivry, la propreté en plus
                </h2>
                <p style="margin: 1rem 0 1.5rem; color: var(--text-muted, #666);">
                    Ivry-sur-Seine est une ville à forte densité d'activité économique.
                    Les entreprises qui s'y installent — startups, PME, grandes enseignes —
                    exigent des partenaires de nettoyage réactifs, discrets et fiables.
                    Baldonedo Nettoyage répond à ces attentes avec des équipes expérimentées,
                    un interlocuteur dédié et des contrats flexibles.
                </p>
                <div class="features-list">
                    <div class="feature-item">
                        <div class="feature-icon" aria-hidden="true">🚀</div>
                        <div>
                            <h4>Réactivité en zone urbaine dense</h4>
                            <p>Dans un environnement aussi actif qu'Ivry-sur-Seine, la réactivité est primordiale. Nos équipes sont mobilisables rapidement, même en cas de demande urgente ou ponctuelle.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon" aria-hidden="true">🔐</div>
                        <div>
                            <h4>Agents formés &amp; assermentés</h4>
                            <p>Chaque agent Baldonedo est formé aux règles de sécurité et à la confidentialité. Ils interviennent dans vos locaux avec le respect que méritent votre activité et vos équipes.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon" aria-hidden="true">📋</div>
                        <div>
                            <h4>Suivi qualité &amp; reporting</h4>
                            <p>Après chaque intervention, vous recevez un compte rendu détaillé. Vous suivez l'avancement des prestations et pouvez ajuster le cahier des charges à tout moment.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon" aria-hidden="true">🌿</div>
                        <div>
                            <h4>Engagement écologique</h4>
                            <p>Nos produits certifiés éco-label et nos méthodes économes en eau s'intègrent dans la politique RSE de nombreuses entreprises implantées à Ivry-sur-Seine.</p>
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
<section class="section" aria-labelledby="zone-ivry-title">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Autour d'Ivry-sur-Seine</span>
            <h2 class="section-title" id="zone-ivry-title">Ivry-sur-Seine et les communes voisines</h2>
            <p class="section-subtitle">
                Notre présence à Ivry-sur-Seine s'inscrit dans une couverture plus large
                du Val-de-Marne et de Paris.
            </p>
        </div>
        <div class="features-grid">
            <div class="features-grid-item">
                <div class="feature-icon" aria-hidden="true">📍</div>
                <h3>Paris 13e arrondissement</h3>
                <p>Immédiatement au nord d'Ivry, le 13e arrondissement est couvert sans délai supplémentaire par nos équipes.</p>
            </div>
            <div class="features-grid-item">
                <div class="feature-icon" aria-hidden="true">📍</div>
                <h3>Vitry-sur-Seine &amp; Choisy-le-Roi</h3>
                <p>Communes voisines au sud-est, nous y intervenons avec la même réactivité et le même niveau de service.</p>
            </div>
            <div class="features-grid-item">
                <div class="feature-icon" aria-hidden="true">📍</div>
                <h3>Villejuif &amp; Kremlin-Bicêtre</h3>
                <p>À quelques minutes vers l'ouest, ces communes font partie de notre zone d'action habituelle dans le Val-de-Marne.</p>
            </div>
        </div>
    </div>
</section>

<!-- ════════════════════════════════════════
     CTA BANNER
════════════════════════════════════════ -->
<section class="cta-banner" aria-labelledby="cta-ivry-title">
    <div class="container">
        <h2 id="cta-ivry-title">Vos locaux à Ivry-sur-Seine, impeccables à chaque intervention</h2>
        <p>Demandez un devis gratuit à Baldonedo Nettoyage. Réponse sous 24h, intervention dans tout Ivry-sur-Seine et alentours.</p>
        <div class="cta-actions">
            <a href="<?= $base ?>pages/contact.php" class="btn btn--outline">Demander un devis</a>
            <a href="tel:+330148531061" class="cta-phone">📞 01 48 53 10 61</a>
        </div>
    </div>
</section>

</main>

<!-- Schema.org LocalBusiness — Ivry-sur-Seine -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "CleaningService",
  "name": "Baldonedo Nettoyage",
  "url": "https://www.baldonedo.com/pages/villes/ivry-sur-seine.php",
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
    "name": "Ivry-sur-Seine"
  },
  "description": "Nettoyage professionnel à Ivry-sur-Seine : bureaux, immeubles et appartements dans le Val-de-Marne. Devis gratuit sous 24h.",
  "priceRange": "€€",
  "openingHours": "Mo-Sa 07:00-20:00"
}
</script>

<?php include '../../includes/footer.php'; ?>
