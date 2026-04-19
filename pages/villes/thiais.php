<?php
$page        = 'ville-thiais';
$base        = '../../';
$title       = 'Nettoyage professionnel à Thiais — Baldonedo Nettoyage';
$description = 'Baldonedo Nettoyage intervient à Thiais pour le nettoyage de vos bureaux, commerces et logements. Commune voisine d\'Orly et de Belle Épine, devis gratuit sous 24h.';
include '../../includes/header.php';
include '../../includes/nav.php';
?>

<main>

<!-- ════════════════════════════════════════
     PAGE HERO
════════════════════════════════════════ -->
<section class="page-hero" aria-label="Nettoyage professionnel à Thiais">
    <div class="page-hero-inner container">
        <div class="page-hero-content">
            <nav class="page-breadcrumb" aria-label="Fil d'Ariane">
                <a href="<?= $base ?>index.php">Accueil</a>
                <span aria-hidden="true">›</span>
                <span>Zones d'intervention</span>
                <span aria-hidden="true">›</span>
                <span aria-current="page">Thiais</span>
            </nav>
            <span class="section-label">Val-de-Marne — 94320</span>
            <h1>Nettoyage professionnel à <em>Thiais</em></h1>
            <p>
                Thiais est une commune stratégique du Val-de-Marne, directement adjacente
                à l'aéroport d'Orly et bordée par le centre commercial Belle Épine — l'un
                des plus grands de la région parisienne. Ce positionnement attire des entreprises
                logistiques, des commerces de services et des résidences en développement constant.
                Baldonedo Nettoyage, dont le siège est situé à Orly à quelques centaines de mètres,
                est votre partenaire naturel pour l'entretien professionnel de tous vos locaux à Thiais.
            </p>
            <div class="cta-actions" style="margin-top:2rem;">
                <a href="<?= $base ?>pages/contact.php" class="btn btn--primary">Demander un devis gratuit</a>
                <a href="tel:+330148531061" class="cta-phone">📞 01 48 53 10 61</a>
            </div>
        </div>
        <div class="page-hero-image" aria-hidden="true">
            <img src="<?= $base ?>assets/images/nettoyage-bureaux.png"
                 alt="Nettoyage professionnel à Thiais par Baldonedo"
                 width="580" height="480" loading="eager">
        </div>
    </div>
</section>

<!-- ════════════════════════════════════════
     NOS SERVICES À THIAIS
════════════════════════════════════════ -->
<section class="section" aria-labelledby="services-thiais-title">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Ce que nous faisons à Thiais</span>
            <h2 class="section-title" id="services-thiais-title">Nos services à Thiais</h2>
            <p class="section-subtitle">
                Zones commerciales, entrepôts logistiques liés à l'activité aéroportuaire
                et quartiers résidentiels — nos équipes couvrent tous les environnements thiaisiens.
            </p>
        </div>
        <div class="services-grid">

            <article class="service-card">
                <div class="service-card-img">
                    <img src="<?= $base ?>assets/images/locaux.png"
                         alt="Nettoyage de bureaux et locaux à Thiais" loading="lazy">
                </div>
                <div class="service-icon" aria-hidden="true">🏢</div>
                <h3>Bureaux &amp; locaux d'entreprise</h3>
                <p>
                    Entretien des bureaux, agences et locaux professionnels à Thiais.
                    Nos interventions sont planifiées hors heures d'ouverture pour garantir
                    la discrétion et ne pas perturber votre activité quotidienne.
                </p>
                <a href="<?= $base ?>pages/services/bureaux.php" class="btn btn--outline-dark" style="margin-top:1rem;">
                    En savoir plus
                </a>
            </article>

            <article class="service-card">
                <div class="service-card-img">
                    <img src="<?= $base ?>assets/images/haussmanien.png"
                         alt="Nettoyage de parties communes à Thiais" loading="lazy">
                </div>
                <div class="service-icon" aria-hidden="true">🏛️</div>
                <h3>Immeubles &amp; copropriétés</h3>
                <p>
                    Nettoyage des parties communes, escaliers, halls et parkings dans les
                    résidences de Thiais. Contrats sur mesure pour syndics et bailleurs,
                    avec des fréquences adaptées à la taille de chaque copropriété.
                </p>
                <a href="<?= $base ?>pages/services/immeuble.php" class="btn btn--outline-dark" style="margin-top:1rem;">
                    En savoir plus
                </a>
            </article>

            <article class="service-card">
                <div class="service-card-img">
                    <img src="<?= $base ?>assets/images/appartement.png"
                         alt="Nettoyage d'appartement et maison à Thiais" loading="lazy">
                </div>
                <div class="service-icon" aria-hidden="true">🏠</div>
                <h3>Maison &amp; Appartement</h3>
                <p>
                    Ménage hebdomadaire, nettoyage complet avant remise des clés ou entretien
                    ponctuel. Nous intervenons dans vos logements de Thiais avec fiabilité
                    et respect de votre espace de vie.
                </p>
                <a href="<?= $base ?>pages/services/maison-appartement.php" class="btn btn--outline-dark" style="margin-top:1rem;">
                    En savoir plus
                </a>
            </article>

        </div>
    </div>
</section>

<!-- ════════════════════════════════════════
     POURQUOI BALDONEDO À THIAIS
════════════════════════════════════════ -->
<section class="section section--alt" aria-labelledby="whyus-thiais-title">
    <div class="container">
        <div class="why-us-inner">
            <div class="why-us-visual">
                <div class="why-us-photo">
                    <img src="<?= $base ?>assets/images/agent-nettoyage.png"
                         alt="Agent Baldonedo Nettoyage en intervention à Thiais"
                         loading="lazy">
                </div>
                <div class="why-us-badge">
                    <div class="why-us-badge-num">5 min</div>
                    <div class="why-us-badge-text">Depuis Orly</div>
                </div>
            </div>
            <div>
                <span class="section-label">Pourquoi nous choisir à Thiais</span>
                <h2 class="section-title" id="whyus-thiais-title" style="text-align:left; max-width:460px;">
                    Le prestataire le plus proche de Thiais, le plus réactif
                </h2>
                <p style="margin: 1rem 0 1.5rem; color: var(--text-muted, #666);">
                    Notre siège à Orly nous place littéralement à la porte de Thiais.
                    Cette proximité unique se traduit par une réactivité imbattable : devis sur place,
                    intervention d'urgence le jour même, suivi régulier par un responsable de secteur
                    que vous pouvez joindre directement. Pour les entreprises de la zone d'Orly
                    et les habitants de Thiais, nous sommes le partenaire de nettoyage de référence.
                </p>
                <div class="features-list">
                    <div class="feature-item">
                        <div class="feature-icon" aria-hidden="true">✈️</div>
                        <div>
                            <h4>Expertise en zones d'activités aéroportuaires</h4>
                            <p>Les entreprises proches d'Orly ont des contraintes spécifiques : horaires atypiques, accès sécurisés, exigences de présentation. Nos équipes sont rodées à ces environnements particuliers.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon" aria-hidden="true">🛒</div>
                        <div>
                            <h4>Expérience en zones commerciales</h4>
                            <p>À deux pas de Belle Épine, nous connaissons les rythmes des activités commerciales. Nettoyage avant ouverture, en coupure ou après fermeture — nous nous adaptons à vos flux.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon" aria-hidden="true">🌿</div>
                        <div>
                            <h4>Produits éco-labellisés</h4>
                            <p>Nos produits certifiés respectent les personnes et l'environnement. Un avantage concret pour votre démarche RSE et pour la santé des occupants de vos locaux.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon" aria-hidden="true">💼</div>
                        <div>
                            <h4>Devis gratuit &amp; contrat flexible</h4>
                            <p>Pas d'engagement à long terme imposé. Nous construisons un contrat à votre mesure, avec la possibilité de faire évoluer les prestations selon vos besoins du moment.</p>
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
<section class="section" aria-labelledby="zone-thiais-title">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Autour de Thiais</span>
            <h2 class="section-title" id="zone-thiais-title">Thiais et ses communes voisines</h2>
            <p class="section-subtitle">
                Notre ancrage à Orly nous permet d'intervenir rapidement sur toute la zone sud du Val-de-Marne.
            </p>
        </div>
        <div class="features-grid">
            <div class="features-grid-item">
                <div class="feature-icon" aria-hidden="true">📍</div>
                <h3>Orly &amp; Rungis</h3>
                <p>Notre siège est à Orly, commune limitrophe. Rungis et son marché international font partie de notre zone d'intervention quotidienne.</p>
            </div>
            <div class="features-grid-item">
                <div class="feature-icon" aria-hidden="true">📍</div>
                <h3>Chevilly-Larue &amp; L'Haÿ-les-Roses</h3>
                <p>Ces communes proches sont couvertes dans nos tournées habituelles, sans délai ni surcoût pour les clients de Thiais.</p>
            </div>
            <div class="features-grid-item">
                <div class="feature-icon" aria-hidden="true">📍</div>
                <h3>Choisy-le-Roi &amp; Villeneuve-le-Roi</h3>
                <p>Au bord de la Seine, ces villes font partie de notre périmètre d'action régulier dans le Val-de-Marne.</p>
            </div>
        </div>
    </div>
</section>

<!-- ════════════════════════════════════════
     CTA BANNER
════════════════════════════════════════ -->
<section class="cta-banner" aria-labelledby="cta-thiais-title">
    <div class="container">
        <h2 id="cta-thiais-title">Vos locaux à Thiais, entretenus par votre voisin de confiance</h2>
        <p>Baldonedo Nettoyage est basé à Orly, à 5 minutes de Thiais. Demandez un devis gratuit dès aujourd'hui — réponse sous 24 heures.</p>
        <div class="cta-actions">
            <a href="<?= $base ?>pages/contact.php" class="btn btn--outline">Demander un devis</a>
            <a href="tel:+330148531061" class="cta-phone">📞 01 48 53 10 61</a>
        </div>
    </div>
</section>

</main>

<!-- Schema.org LocalBusiness — Thiais -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "CleaningService",
  "name": "Baldonedo Nettoyage",
  "url": "https://www.baldonedo.com/pages/villes/thiais.php",
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
    "name": "Thiais"
  },
  "description": "Nettoyage professionnel à Thiais : bureaux, immeubles et logements à deux pas de l'aéroport d'Orly. Devis gratuit sous 24h.",
  "priceRange": "€€",
  "openingHours": "Mo-Sa 07:00-20:00"
}
</script>

<?php include '../../includes/footer.php'; ?>
