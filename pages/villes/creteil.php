<?php
$page        = 'ville-creteil';
$base        = '../../';
$title       = 'Nettoyage professionnel à Créteil — Baldonedo Nettoyage';
$description = 'Baldonedo Nettoyage assure l\'entretien de vos bureaux, immeubles et logements à Créteil (94). Préfecture du Val-de-Marne, devis gratuit sous 24h.';
include '../../includes/header.php';
include '../../includes/nav.php';
?>

<main>

<!-- ════════════════════════════════════════
     PAGE HERO
════════════════════════════════════════ -->
<section class="page-hero" aria-label="Nettoyage professionnel à Créteil">
    <div class="page-hero-inner container">
        <div class="page-hero-content">
            <nav class="page-breadcrumb" aria-label="Fil d'Ariane">
                <a href="<?= $base ?>index.php">Accueil</a>
                <span aria-hidden="true">›</span>
                <span>Zones d'intervention</span>
                <span aria-hidden="true">›</span>
                <span aria-current="page">Créteil</span>
            </nav>
            <span class="section-label">Val-de-Marne — 94000</span>
            <h1>Nettoyage professionnel à <em>Créteil</em></h1>
            <p>
                Préfecture du Val-de-Marne, Créteil abrite des administrations, un hôpital
                universitaire (Henri-Mondor), l'université Paris-Est Créteil et le centre commercial
                Créteil Soleil. Cette diversité de sites implique des besoins en nettoyage variés et exigeants.
                Baldonedo Nettoyage, basé à Orly à quelques minutes, répond à ces besoins avec
                des équipes spécialisées et des protocoles adaptés à chaque type d'environnement.
            </p>
            <div class="cta-actions" style="margin-top:2rem;">
                <a href="<?= $base ?>pages/contact.php" class="btn btn--primary">Demander un devis gratuit</a>
                <a href="tel:+330148531061" class="cta-phone">📞 01 48 53 10 61</a>
            </div>
        </div>
        <div class="page-hero-image" aria-hidden="true">
            <img src="<?= $base ?>assets/images/bureaux-paris.png"
                 alt="Nettoyage professionnel à Créteil par Baldonedo"
                 width="580" height="480" loading="eager">
        </div>
    </div>
</section>

<!-- ════════════════════════════════════════
     NOS SERVICES À CRÉTEIL
════════════════════════════════════════ -->
<section class="section" aria-labelledby="services-creteil-title">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Ce que nous faisons à Créteil</span>
            <h2 class="section-title" id="services-creteil-title">Nos services à Créteil</h2>
            <p class="section-subtitle">
                Des locaux administratifs aux résidences modernes du lac de Créteil, en passant
                par les espaces commerciaux — nous avons le savoir-faire pour chaque situation.
            </p>
        </div>
        <div class="services-grid">

            <article class="service-card">
                <div class="service-card-img">
                    <img src="<?= $base ?>assets/images/societe-bureaux.png"
                         alt="Nettoyage de bureaux à Créteil" loading="lazy">
                </div>
                <div class="service-icon" aria-hidden="true">🏢</div>
                <h3>Bureaux &amp; locaux administratifs</h3>
                <p>
                    Entretien des open spaces, salles de réunion et espaces d'accueil dans les
                    immeubles de bureaux cristoliens. Horaires flexibles pour ne pas perturber
                    vos équipes ni les usagers de vos services.
                </p>
                <a href="<?= $base ?>pages/services/bureaux.php" class="btn btn--outline-dark" style="margin-top:1rem;">
                    En savoir plus
                </a>
            </article>

            <article class="service-card">
                <div class="service-card-img">
                    <img src="<?= $base ?>assets/images/haussmanien.png"
                         alt="Nettoyage de parties communes à Créteil" loading="lazy">
                </div>
                <div class="service-icon" aria-hidden="true">🏛️</div>
                <h3>Immeubles &amp; copropriétés</h3>
                <p>
                    Nettoyage des halls, paliers, cages d'escalier et parkings dans les nombreuses
                    copropriétés de Créteil. Contrats hebdomadaires ou mensuels, adaptés aux besoins
                    des syndics et bailleurs du Val-de-Marne.
                </p>
                <a href="<?= $base ?>pages/services/immeuble.php" class="btn btn--outline-dark" style="margin-top:1rem;">
                    En savoir plus
                </a>
            </article>

            <article class="service-card">
                <div class="service-card-img">
                    <img src="<?= $base ?>assets/images/piece.png"
                         alt="Nettoyage d'appartement à Créteil" loading="lazy">
                </div>
                <div class="service-icon" aria-hidden="true">🏠</div>
                <h3>Maison &amp; Appartement</h3>
                <p>
                    Ménage régulier, grand nettoyage ou remise en état avant état des lieux.
                    Nous intervenons dans les logements de Créteil avec professionnalisme
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
     POURQUOI BALDONEDO À CRÉTEIL
════════════════════════════════════════ -->
<section class="section section--alt" aria-labelledby="whyus-creteil-title">
    <div class="container">
        <div class="why-us-inner">
            <div class="why-us-visual">
                <div class="why-us-photo">
                    <img src="<?= $base ?>assets/images/agent-nettoyage.png"
                         alt="Agent Baldonedo en intervention à Créteil"
                         loading="lazy">
                </div>
                <div class="why-us-badge">
                    <div class="why-us-badge-num">100%</div>
                    <div class="why-us-badge-text">Satisfaction garantie</div>
                </div>
            </div>
            <div>
                <span class="section-label">Pourquoi nous choisir à Créteil</span>
                <h2 class="section-title" id="whyus-creteil-title" style="text-align:left; max-width:460px;">
                    Un partenaire local, réactif et fiable
                </h2>
                <p style="margin: 1rem 0 1.5rem; color: var(--text-muted, #666);">
                    Créteil est une ville dynamique avec des environnements très différents : bureaux
                    administratifs, résidences étudiantes, commerces de proximité, structures de santé.
                    Baldonedo Nettoyage maîtrise ces contextes variés et propose des prestations
                    calibrées à chaque type de site, avec un interlocuteur dédié pour chaque contrat.
                </p>
                <div class="features-list">
                    <div class="feature-item">
                        <div class="feature-icon" aria-hidden="true">🏥</div>
                        <div>
                            <h4>Protocoles adaptés aux environnements sensibles</h4>
                            <p>Aux abords des zones médicales et administratives, nos équipes respectent des protocoles de désinfection renforcés, conformes aux normes en vigueur.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon" aria-hidden="true">📅</div>
                        <div>
                            <h4>Plannings flexibles</h4>
                            <p>Nous calons nos interventions sur vos contraintes : avant l'ouverture, après la fermeture, en week-end. La continuité de votre activité passe avant tout.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon" aria-hidden="true">🤝</div>
                        <div>
                            <h4>Interlocuteur unique &amp; réactif</h4>
                            <p>Chaque client bénéficie d'un référent dédié chez Baldonedo. Une question, un ajustement, une urgence — vous joignez directement la bonne personne.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon" aria-hidden="true">🌿</div>
                        <div>
                            <h4>Engagement environnemental</h4>
                            <p>Produits éco-labellisés, matériels réutilisables, gestion raisonnée des consommables. Notre démarche respectueuse de l'environnement s'inscrit dans la durée.</p>
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
<section class="section" aria-labelledby="zone-creteil-title">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Autour de Créteil</span>
            <h2 class="section-title" id="zone-creteil-title">Nous intervenons aussi dans les communes voisines</h2>
            <p class="section-subtitle">
                Notre zone d'action couvre Créteil et ses environs immédiats dans le Val-de-Marne.
            </p>
        </div>
        <div class="features-grid">
            <div class="features-grid-item">
                <div class="feature-icon" aria-hidden="true">📍</div>
                <h3>Val-de-Marne proche</h3>
                <p>Maisons-Alfort, Alfortville, Bonneuil-sur-Marne, Limeil-Brévannes, Valenton, Villeneuve-Saint-Georges.</p>
            </div>
            <div class="features-grid-item">
                <div class="feature-icon" aria-hidden="true">📍</div>
                <h3>Sud parisien</h3>
                <p>Orly, Thiais, Rungis, Vitry-sur-Seine, Choisy-le-Roi — toute la ceinture sud de Paris desservie depuis notre siège.</p>
            </div>
            <div class="features-grid-item">
                <div class="feature-icon" aria-hidden="true">📍</div>
                <h3>Paris 12e</h3>
                <p>À la frontière du 12e arrondissement, nos équipes assurent une continuité de service sans rupture géographique.</p>
            </div>
        </div>
    </div>
</section>

<!-- ════════════════════════════════════════
     CTA BANNER
════════════════════════════════════════ -->
<section class="cta-banner" aria-labelledby="cta-creteil-title">
    <div class="container">
        <h2 id="cta-creteil-title">Un environnement propre à Créteil, c'est notre mission</h2>
        <p>Contactez Baldonedo Nettoyage pour un devis gratuit et personnalisé sous 24 heures. Intervention rapide depuis Orly.</p>
        <div class="cta-actions">
            <a href="<?= $base ?>pages/contact.php" class="btn btn--outline">Demander un devis</a>
            <a href="tel:+330148531061" class="cta-phone">📞 01 48 53 10 61</a>
        </div>
    </div>
</section>

</main>

<!-- Schema.org LocalBusiness — Créteil -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "CleaningService",
  "name": "Baldonedo Nettoyage",
  "url": "https://www.baldonedo.com/pages/villes/creteil.php",
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
    "name": "Créteil"
  },
  "description": "Nettoyage professionnel à Créteil : bureaux, immeubles et appartements dans le Val-de-Marne. Devis gratuit sous 24h.",
  "priceRange": "€€",
  "openingHours": "Mo-Sa 07:00-20:00"
}
</script>

<?php include '../../includes/footer.php'; ?>
