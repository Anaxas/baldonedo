<?php
$page        = 'ville-villejuif';
$base        = '../../';
$title       = 'Nettoyage professionnel à Villejuif — Baldonedo Nettoyage';
$description = 'Baldonedo Nettoyage intervient à Villejuif pour le nettoyage de vos bureaux, locaux médicaux et résidences. À proximité de Gustave Roussy, devis gratuit sous 24h.';
include '../../includes/header.php';
include '../../includes/nav.php';
?>

<main>

<!-- ════════════════════════════════════════
     PAGE HERO
════════════════════════════════════════ -->
<section class="page-hero" aria-label="Nettoyage professionnel à Villejuif">
    <div class="page-hero-inner container">
        <div class="page-hero-content">
            <nav class="page-breadcrumb" aria-label="Fil d'Ariane">
                <a href="<?= $base ?>index.php">Accueil</a>
                <span aria-hidden="true">›</span>
                <span>Zones d'intervention</span>
                <span aria-hidden="true">›</span>
                <span aria-current="page">Villejuif</span>
            </nav>
            <span class="section-label">Val-de-Marne — 94800</span>
            <h1>Nettoyage professionnel à <em>Villejuif</em></h1>
            <p>
                Villejuif est connue dans le monde entier pour l'Institut Gustave Roussy,
                premier centre européen de lutte contre le cancer. Cette réputation d'excellence
                médicale et scientifique irrigue l'ensemble de la ville : laboratoires,
                cabinets paramédicaux, résidences pour personnels soignants et un quartier
                d'affaires en plein développement. Dans cet environnement où la propreté
                est une exigence avant d'être une option, Baldonedo Nettoyage apporte
                son expertise professionnelle avec des protocoles adaptés.
            </p>
            <div class="cta-actions" style="margin-top:2rem;">
                <a href="<?= $base ?>pages/contact.php" class="btn btn--primary">Demander un devis gratuit</a>
                <a href="tel:+330148531061" class="cta-phone">📞 01 48 53 10 61</a>
            </div>
        </div>
        <div class="page-hero-image" aria-hidden="true">
            <img src="<?= $base ?>assets/images/proprete.png"
                 alt="Nettoyage professionnel à Villejuif par Baldonedo"
                 width="580" height="480" loading="eager">
        </div>
    </div>
</section>

<!-- ════════════════════════════════════════
     NOS SERVICES À VILLEJUIF
════════════════════════════════════════ -->
<section class="section" aria-labelledby="services-villejuif-title">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Ce que nous faisons à Villejuif</span>
            <h2 class="section-title" id="services-villejuif-title">Nos services à Villejuif</h2>
            <p class="section-subtitle">
                Des locaux médicaux aux bureaux du quartier d'affaires Paul-Vaillant-Couturier,
                en passant par les résidences — nous intervenons sur tous les types de sites à Villejuif.
            </p>
        </div>
        <div class="services-grid">

            <article class="service-card">
                <div class="service-card-img">
                    <img src="<?= $base ?>assets/images/bureaux-paris.png"
                         alt="Nettoyage de bureaux et locaux professionnels à Villejuif" loading="lazy">
                </div>
                <div class="service-icon" aria-hidden="true">🏢</div>
                <h3>Bureaux &amp; locaux professionnels</h3>
                <p>
                    Entretien des espaces de travail à Villejuif : cabinets médicaux, bureaux
                    d'études, laboratoires de recherche et locaux tertiaires. Protocoles
                    renforcés disponibles pour les environnements sensibles.
                </p>
                <a href="<?= $base ?>pages/services/bureaux.php" class="btn btn--outline-dark" style="margin-top:1rem;">
                    En savoir plus
                </a>
            </article>

            <article class="service-card">
                <div class="service-card-img">
                    <img src="<?= $base ?>assets/images/entree-immeuble.png"
                         alt="Nettoyage de parties communes à Villejuif" loading="lazy">
                </div>
                <div class="service-icon" aria-hidden="true">🏛️</div>
                <h3>Immeubles &amp; résidences</h3>
                <p>
                    Entretien des parties communes dans les immeubles résidentiels de Villejuif.
                    Halls, escaliers, boîtes aux lettres, parkings — un service régulier
                    qui valorise votre patrimoine immobilier.
                </p>
                <a href="<?= $base ?>pages/services/immeuble.php" class="btn btn--outline-dark" style="margin-top:1rem;">
                    En savoir plus
                </a>
            </article>

            <article class="service-card">
                <div class="service-card-img">
                    <img src="<?= $base ?>assets/images/piece.png"
                         alt="Nettoyage d'appartement à Villejuif" loading="lazy">
                </div>
                <div class="service-icon" aria-hidden="true">🏠</div>
                <h3>Maison &amp; Appartement</h3>
                <p>
                    Ménage à domicile, nettoyage en profondeur ou remise en état après
                    déménagement. Nos équipes interviennent dans vos logements villejuifois
                    avec discrétion et efficacité.
                </p>
                <a href="<?= $base ?>pages/services/maison-appartement.php" class="btn btn--outline-dark" style="margin-top:1rem;">
                    En savoir plus
                </a>
            </article>

        </div>
    </div>
</section>

<!-- ════════════════════════════════════════
     POURQUOI BALDONEDO À VILLEJUIF
════════════════════════════════════════ -->
<section class="section section--alt" aria-labelledby="whyus-villejuif-title">
    <div class="container">
        <div class="why-us-inner">
            <div class="why-us-visual">
                <div class="why-us-photo">
                    <img src="<?= $base ?>assets/images/experience.png"
                         alt="Nettoyage professionnel de locaux à Villejuif"
                         loading="lazy">
                </div>
                <div class="why-us-badge">
                    <div class="why-us-badge-num">10+</div>
                    <div class="why-us-badge-text">Années d'expertise</div>
                </div>
            </div>
            <div>
                <span class="section-label">Pourquoi nous choisir à Villejuif</span>
                <h2 class="section-title" id="whyus-villejuif-title" style="text-align:left; max-width:460px;">
                    L'excellence médicale de Villejuif inspire notre exigence
                </h2>
                <p style="margin: 1rem 0 1.5rem; color: var(--text-muted, #666);">
                    Dans une ville marquée par la rigueur scientifique et médicale, nos prestations
                    de nettoyage s'inscrivent dans la même culture de l'excellence. Protocoles
                    documentés, produits certifiés, personnel formé et supervisé — chez Baldonedo,
                    la qualité n'est pas un argument commercial, c'est notre méthode de travail quotidienne.
                </p>
                <div class="features-list">
                    <div class="feature-item">
                        <div class="feature-icon" aria-hidden="true">🧬</div>
                        <div>
                            <h4>Protocoles pour environnements médicaux &amp; de recherche</h4>
                            <p>Désinfection de surfaces critiques, gestion des déchets conformément aux réglementations, produits bactéricides homologués — nous intervenons en toute sécurité dans les espaces sensibles.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon" aria-hidden="true">🌿</div>
                        <div>
                            <h4>Produits éco-certifiés</h4>
                            <p>Nos formules éco-labellisées sont sans danger pour les patients, les personnels soignants et les visiteurs. Un engagement environnemental compatible avec toutes les politiques RSE.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon" aria-hidden="true">📋</div>
                        <div>
                            <h4>Traçabilité complète</h4>
                            <p>Chaque intervention est tracée et documentée. Fiches produits, rapports de passage, registre de présence — nous fournissons l'ensemble des documents nécessaires à vos contrôles.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon" aria-hidden="true">🔐</div>
                        <div>
                            <h4>Discrétion absolue</h4>
                            <p>Dans les établissements médicaux et de recherche, la confidentialité est primordiale. Nos agents signent une charte de discrétion et respectent strictement les zones d'accès autorisées.</p>
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
<section class="section" aria-labelledby="zone-villejuif-title">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Autour de Villejuif</span>
            <h2 class="section-title" id="zone-villejuif-title">Villejuif et les communes voisines</h2>
            <p class="section-subtitle">
                Notre présence à Villejuif s'intègre dans notre couverture globale du Val-de-Marne et du sud de Paris.
            </p>
        </div>
        <div class="features-grid">
            <div class="features-grid-item">
                <div class="feature-icon" aria-hidden="true">📍</div>
                <h3>Le Kremlin-Bicêtre &amp; L'Haÿ-les-Roses</h3>
                <p>Communes immédiatement voisines, à haute densité médicale et résidentielle — couvertes sans délai supplémentaire.</p>
            </div>
            <div class="features-grid-item">
                <div class="feature-icon" aria-hidden="true">📍</div>
                <h3>Vitry-sur-Seine &amp; Chevilly-Larue</h3>
                <p>Vers le sud et l'est, nous intervenons dans ces communes avec les mêmes standards et la même réactivité.</p>
            </div>
            <div class="features-grid-item">
                <div class="feature-icon" aria-hidden="true">📍</div>
                <h3>Paris 13e &amp; 14e arrondissements</h3>
                <p>Aux portes de Paris, nos équipes franchissent le périphérique sans surcoût pour les clients situés dans ces arrondissements.</p>
            </div>
        </div>
    </div>
</section>

<!-- ════════════════════════════════════════
     CTA BANNER
════════════════════════════════════════ -->
<section class="cta-banner" aria-labelledby="cta-villejuif-title">
    <div class="container">
        <h2 id="cta-villejuif-title">Des locaux villejuifois toujours impeccables</h2>
        <p>Confiez l'entretien de vos locaux à Baldonedo Nettoyage. Devis gratuit sous 24h, intervention dans tout Villejuif et communes voisines.</p>
        <div class="cta-actions">
            <a href="<?= $base ?>pages/contact.php" class="btn btn--outline">Demander un devis</a>
            <a href="tel:+330148531061" class="cta-phone">📞 01 48 53 10 61</a>
        </div>
    </div>
</section>

</main>

<!-- Schema.org LocalBusiness — Villejuif -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "CleaningService",
  "name": "Baldonedo Nettoyage",
  "url": "https://www.baldonedo.com/pages/villes/villejuif.php",
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
    "name": "Villejuif"
  },
  "description": "Nettoyage professionnel à Villejuif : bureaux, locaux médicaux, immeubles et appartements dans le Val-de-Marne. Devis gratuit sous 24h.",
  "priceRange": "€€",
  "openingHours": "Mo-Sa 07:00-20:00"
}
</script>

<?php include '../../includes/footer.php'; ?>
