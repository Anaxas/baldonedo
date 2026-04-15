<?php
$page        = 'service-bureaux';
$base        = '../../';
$title       = 'Nettoyage de bureaux professionnel en Île-de-France — Baldonedo Nettoyage';
$description = 'Baldonedo Nettoyage assure l\'entretien de vos bureaux, open spaces et locaux professionnels en Île-de-France. Sols, vitres, sanitaires, cuisine — devis gratuit sous 24h.';
include '../../includes/header.php';
include '../../includes/nav.php';
?>

<!-- Schema.org Service — Nettoyage de bureaux -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "serviceType": "Nettoyage de bureaux professionnel",
  "name": "Nettoyage de bureaux et locaux professionnels",
  "description": "Entretien régulier et nettoyage en profondeur de bureaux, open spaces, sanitaires, cuisines et espaces communs en Île-de-France.",
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
    "description": "Devis gratuit personnalisé sous 24h"
  },
  "breadcrumb": {
    "@type": "BreadcrumbList",
    "itemListElement": [
      {"@type": "ListItem", "position": 1, "name": "Accueil", "item": "https://www.baldonedo.com/"},
      {"@type": "ListItem", "position": 2, "name": "Services", "item": "https://www.baldonedo.com/index.php#services"},
      {"@type": "ListItem", "position": 3, "name": "Bureaux", "item": "https://www.baldonedo.com/pages/services/bureaux.php"}
    ]
  }
}
</script>

<main>

<!-- ════════════════════════════════════════
     PAGE HERO
════════════════════════════════════════ -->
<section class="page-hero" aria-label="Nettoyage de bureaux professionnels">
    <div class="page-hero-inner container">
        <div class="page-hero-content">
            <nav class="page-breadcrumb" aria-label="Fil d'Ariane">
                <a href="<?= $base ?>index.php">Accueil</a>
                <span aria-hidden="true">›</span>
                <a href="<?= $base ?>index.php#services">Services</a>
                <span aria-hidden="true">›</span>
                <span aria-current="page">Bureaux</span>
            </nav>
            <span class="section-label">Locaux professionnels</span>
            <h1>Nettoyage de bureaux <em>professionnel</em> en Île-de-France</h1>
            <p>
                Un environnement de travail propre améliore la productivité, renforce
                votre image de marque et protège la santé de vos collaborateurs.
                Baldonedo Nettoyage intervient dans vos bureaux, open spaces et locaux
                professionnels avec des équipes qualifiées et des produits éco-labellisés,
                en dehors de vos heures d'ouverture.
            </p>
            <div class="cta-actions" style="margin-top:2rem;">
                <a href="<?= $base ?>pages/contact.php" class="btn btn--primary">Demander un devis gratuit</a>
                <a href="tel:+330148531061" class="cta-phone">📞 01 48 53 10 61</a>
            </div>
        </div>
        <div class="page-hero-image" aria-hidden="true">
            <img src="<?= $base ?>assets/images/nettoyage-bureaux.png"
                 alt="Agent Baldonedo effectuant le nettoyage de bureaux professionnels"
                 width="580" height="480" loading="eager">
        </div>
    </div>
</section>

<!-- ════════════════════════════════════════
     PRESTATIONS INCLUSES
════════════════════════════════════════ -->
<section class="section" aria-labelledby="prestations-title">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Ce qui est inclus</span>
            <h2 class="section-title" id="prestations-title">Un entretien complet de vos locaux</h2>
            <p class="section-subtitle">
                Chaque intervention couvre l'intégralité de votre espace de travail, pièce par pièce,
                selon un protocole rigoureux adapté à votre activité.
            </p>
        </div>

        <div class="features-grid">

            <div class="features-grid-item">
                <div class="feature-icon" aria-hidden="true">🧹</div>
                <h3>Sols &amp; surfaces</h3>
                <p>
                    Aspiration et lavage des moquettes, parquets, carrelages et dalles vinyle.
                    Dépoussiérage des plinthes, radiateurs, rebords de fenêtres et mobilier.
                    Lustrage des sols durs selon leur nature.
                </p>
            </div>

            <div class="features-grid-item">
                <div class="feature-icon" aria-hidden="true">🪟</div>
                <h3>Vitres &amp; cloisons vitrées</h3>
                <p>
                    Nettoyage des vitres intérieures, cloisons en verre et portes vitrées.
                    Élimination des traces de doigts, projections et dépôts calcaires
                    pour un rendu impeccable qui valorise vos espaces.
                </p>
            </div>

            <div class="features-grid-item">
                <div class="feature-icon" aria-hidden="true">🚻</div>
                <h3>Sanitaires &amp; vestiaires</h3>
                <p>
                    Désinfection complète des WC, lavabos, robinetterie et carrelage.
                    Remplissage des consommables (savon, papier, essuie-mains).
                    Nettoyage des miroirs et évacuations. Ventilation et désodorisation.
                </p>
            </div>

            <div class="features-grid-item">
                <div class="feature-icon" aria-hidden="true">☕</div>
                <h3>Cuisine &amp; espace repas</h3>
                <p>
                    Nettoyage des plans de travail, éviers, micro-ondes, réfrigérateurs
                    et équipements de cuisine. Dégraissage des surfaces, entretien des
                    appareils électroménagers et vidange des poubelles.
                </p>
            </div>

            <div class="features-grid-item">
                <div class="feature-icon" aria-hidden="true">🏢</div>
                <h3>Open spaces &amp; salles de réunion</h3>
                <p>
                    Dépoussiérage et désinfection des postes de travail, claviers, écrans
                    et téléphones. Nettoyage des tableaux blancs, mobilier de réunion,
                    chaises et espaces collaboratifs.
                </p>
            </div>

            <div class="features-grid-item">
                <div class="feature-icon" aria-hidden="true">🚪</div>
                <h3>Halls &amp; espaces communs</h3>
                <p>
                    Entretien des entrées, couloirs, ascenseurs et salles d'attente.
                    Nettoyage des portes d'entrée, boîtes aux lettres, interphones
                    et signalétiques. Vidange des corbeilles et tri sélectif.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- ════════════════════════════════════════
     FRÉQUENCES D'INTERVENTION
════════════════════════════════════════ -->
<section class="section section--alt" aria-labelledby="frequences-title">
    <div class="container">
        <div class="why-us-inner">

            <div class="why-us-visual">
                <div class="why-us-photo">
                    <img src="<?= $base ?>assets/images/societe-bureaux.png"
                         alt="Nettoyage de locaux professionnels à Paris et en Île-de-France"
                         loading="lazy">
                </div>
                <div class="why-us-badge">
                    <div class="why-us-badge-num">24h</div>
                    <div class="why-us-badge-text">Devis gratuit</div>
                </div>
            </div>

            <div>
                <span class="section-label">Contrats sur mesure</span>
                <h2 class="section-title" id="frequences-title" style="text-align:left; max-width:460px;">
                    Une fréquence adaptée à votre rythme
                </h2>
                <p style="margin: 1rem 0 1.5rem; color: var(--text-muted, #666);">
                    Qu'il s'agisse d'un nettoyage quotidien pour un grand open space ou
                    d'un passage hebdomadaire pour une petite structure, nous construisons
                    un planning qui s'intègre parfaitement dans votre organisation.
                </p>
                <div class="features-list">

                    <div class="feature-item">
                        <div class="feature-icon" aria-hidden="true">📅</div>
                        <div>
                            <h4>Nettoyage quotidien</h4>
                            <p>Idéal pour les grandes entreprises, open spaces de plus de 200 m² et sites recevant du public. Intervention chaque matin avant l'ouverture ou chaque soir après fermeture.</p>
                        </div>
                    </div>

                    <div class="feature-item">
                        <div class="feature-icon" aria-hidden="true">🗓️</div>
                        <div>
                            <h4>Nettoyage hebdomadaire ou bi-hebdomadaire</h4>
                            <p>Solution économique pour les PME, cabinets et agences. Passage 1 à 3 fois par semaine, aux jours et horaires que vous choisissez.</p>
                        </div>
                    </div>

                    <div class="feature-item">
                        <div class="feature-icon" aria-hidden="true">🔍</div>
                        <div>
                            <h4>Grand nettoyage ponctuel</h4>
                            <p>Remise en état après travaux, nettoyage avant emménagement ou avant audit. Intervention intensive pour restituer vos locaux dans un état irréprochable.</p>
                        </div>
                    </div>

                    <div class="feature-item">
                        <div class="feature-icon" aria-hidden="true">🌙</div>
                        <div>
                            <h4>Interventions hors horaires de bureau</h4>
                            <p>Nos équipes interviennent tôt le matin, en soirée ou le week-end pour ne jamais interrompre votre activité ni gêner vos équipes.</p>
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
<section class="section" aria-labelledby="galerie-bureaux-title">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Nos réalisations</span>
            <h2 class="section-title" id="galerie-bureaux-title">Bureaux entretenus par Baldonedo</h2>
            <p class="section-subtitle">Un aperçu de la qualité de nos interventions sur différents types de locaux professionnels.</p>
        </div>
        <div class="service-gallery">
            <figure>
                <img src="<?= $base ?>assets/images/open-space.png"
                     alt="Open space nettoyé par Baldonedo en Île-de-France"
                     loading="lazy">
                <figcaption>Open space — Paris 13e</figcaption>
            </figure>
            <figure>
                <img src="<?= $base ?>assets/images/bureau.png"
                     alt="Bureau individuel propre et désinfecté"
                     loading="lazy">
                <figcaption>Bureau individuel — Vitry-sur-Seine</figcaption>
            </figure>
            <figure>
                <img src="<?= $base ?>assets/images/bureaux-paris07.png"
                     alt="Bureaux professionnels à Paris 7 entretenus par Baldonedo"
                     loading="lazy">
                <figcaption>Bureaux — Paris 7e</figcaption>
            </figure>
        </div>
    </div>
</section>

<!-- ════════════════════════════════════════
     POURQUOI NOUS — MINI
════════════════════════════════════════ -->
<section class="section section--alt" aria-labelledby="whyus-bureaux-title">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Nos engagements</span>
            <h2 class="section-title" id="whyus-bureaux-title">Pourquoi confier vos bureaux à Baldonedo ?</h2>
        </div>
        <div class="features-grid">

            <div class="features-grid-item">
                <div class="feature-icon" aria-hidden="true">🌿</div>
                <h3>Produits certifiés éco-label</h3>
                <p>Nous n'utilisons que des produits éco-labellisés, sans danger pour vos collaborateurs et respectueux de l'environnement. Parfait pour les entreprises engagées dans une démarche RSE.</p>
            </div>

            <div class="features-grid-item">
                <div class="feature-icon" aria-hidden="true">🔐</div>
                <h3>Discrétion &amp; confidentialité</h3>
                <p>Nos agents sont assermentés et soumis à une charte de confidentialité stricte. Vos documents, équipements et données restent en sécurité lors de chaque intervention.</p>
            </div>

            <div class="features-grid-item">
                <div class="feature-icon" aria-hidden="true">📋</div>
                <h3>Rapport d'intervention</h3>
                <p>À chaque passage, un rapport détaillé vous est transmis. Vous suivez en temps réel les prestations effectuées et signalez facilement toute demande complémentaire.</p>
            </div>

            <div class="features-grid-item">
                <div class="feature-icon" aria-hidden="true">🏅</div>
                <h3>Membre de la FEP</h3>
                <p>Baldonedo Nettoyage est membre de la Fédération des Entreprises de Propreté, gage de sérieux, de formation continue et de respect des conventions collectives du secteur.</p>
            </div>

        </div>
    </div>
</section>

<!-- ════════════════════════════════════════
     NOS AUTRES SERVICES
════════════════════════════════════════ -->
<section class="section" aria-labelledby="autres-services-title">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Découvrez aussi</span>
            <h2 class="section-title" id="autres-services-title">Nos autres services</h2>
            <p class="section-subtitle">Baldonedo Nettoyage intervient sur tous types d'environnements en Île-de-France.</p>
        </div>

        <div class="services-grid">

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

            <article class="service-card">
                <div class="service-card-img">
                    <img src="<?= $base ?>assets/images/appartement.png"
                         alt="Nettoyage de maison et appartement à domicile"
                         loading="lazy">
                </div>
                <div class="service-icon" aria-hidden="true">🏠</div>
                <h3>Maison &amp; Appartement</h3>
                <p>
                    Entretien courant, nettoyage de fond ou remise en état après travaux.
                    Interventions à domicile avec discrétion et flexibilité.
                </p>
                <a href="<?= $base ?>pages/services/maison-appartement.php" class="btn btn--outline-dark" style="margin-top:1rem;">
                    En savoir plus
                </a>
            </article>

        </div>
    </div>
</section>

<!-- ════════════════════════════════════════
     CTA BANNER
════════════════════════════════════════ -->
<section class="cta-banner" aria-labelledby="cta-bureaux-title">
    <div class="container">
        <h2 id="cta-bureaux-title">Vos bureaux méritent le meilleur entretien</h2>
        <p>
            Contactez-nous dès aujourd'hui pour un devis gratuit et personnalisé sous 24 heures.
            Nous intervenons dans tout le Val-de-Marne et Paris.
        </p>
        <div class="cta-actions">
            <a href="<?= $base ?>pages/contact.php" class="btn btn--outline">Demander un devis gratuit</a>
            <a href="tel:+330148531061" class="cta-phone">📞 01 48 53 10 61</a>
        </div>
    </div>
</section>

</main>

<?php include '../../includes/footer.php'; ?>
