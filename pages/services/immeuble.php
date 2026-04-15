<?php
$page        = 'service-immeuble';
$base        = '../../';
$title       = 'Nettoyage d\'immeuble et parties communes en Île-de-France — Baldonedo Nettoyage';
$description = 'Baldonedo Nettoyage assure l\'entretien des parties communes, cages d\'escalier, halls, parkings et locaux poubelles pour copropriétés et bailleurs en Île-de-France. Devis gratuit.';
include '../../includes/header.php';
include '../../includes/nav.php';
?>

<!-- Schema.org Service — Nettoyage d'immeuble -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "serviceType": "Nettoyage d'immeuble et parties communes",
  "name": "Entretien des parties communes d'immeuble et copropriété",
  "description": "Nettoyage des halls d'entrée, cages d'escalier, parkings, locaux poubelles et espaces communs pour copropriétés, syndics et bailleurs sociaux en Île-de-France.",
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
    "description": "Contrats hebdomadaires, bimensuels ou mensuels — devis gratuit sous 24h"
  },
  "breadcrumb": {
    "@type": "BreadcrumbList",
    "itemListElement": [
      {"@type": "ListItem", "position": 1, "name": "Accueil", "item": "https://www.baldonedo.com/"},
      {"@type": "ListItem", "position": 2, "name": "Services", "item": "https://www.baldonedo.com/index.php#services"},
      {"@type": "ListItem", "position": 3, "name": "Immeubles", "item": "https://www.baldonedo.com/pages/services/immeuble.php"}
    ]
  }
}
</script>

<main>

<!-- ════════════════════════════════════════
     PAGE HERO
════════════════════════════════════════ -->
<section class="page-hero" aria-label="Nettoyage d'immeuble et parties communes">
    <div class="page-hero-inner container">
        <div class="page-hero-content">
            <nav class="page-breadcrumb" aria-label="Fil d'Ariane">
                <a href="<?= $base ?>index.php">Accueil</a>
                <span aria-hidden="true">›</span>
                <a href="<?= $base ?>index.php#services">Services</a>
                <span aria-hidden="true">›</span>
                <span aria-current="page">Immeubles</span>
            </nav>
            <span class="section-label">Copropriétés &amp; bailleurs</span>
            <h1>Nettoyage d'immeuble et <em>parties communes</em></h1>
            <p>
                Les parties communes sont le reflet de votre immeuble : un hall propre,
                une cage d'escalier entretenue et un parking impeccable renforcent le
                bien-vivre des résidents et la valeur du patrimoine immobilier.
                Baldonedo Nettoyage propose des contrats sur mesure aux syndics,
                copropriétés et bailleurs sociaux de toute l'Île-de-France.
            </p>
            <div class="cta-actions" style="margin-top:2rem;">
                <a href="<?= $base ?>pages/contact.php" class="btn btn--primary">Demander un devis gratuit</a>
                <a href="tel:+330148531061" class="cta-phone">📞 01 48 53 10 61</a>
            </div>
        </div>
        <div class="page-hero-image" aria-hidden="true">
            <img src="<?= $base ?>assets/images/haussmanien.png"
                 alt="Immeuble haussmannien dont les parties communes sont entretenues par Baldonedo"
                 width="580" height="480" loading="eager">
        </div>
    </div>
</section>

<!-- ════════════════════════════════════════
     PÉRIMÈTRE D'INTERVENTION
════════════════════════════════════════ -->
<section class="section" aria-labelledby="perimetre-title">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Zones traitées</span>
            <h2 class="section-title" id="perimetre-title">Un entretien complet de votre immeuble</h2>
            <p class="section-subtitle">
                Nos agents prennent en charge l'ensemble des espaces partagés, des locaux techniques
                au dernier étage, selon un protocole de nettoyage adapté à chaque zone.
            </p>
        </div>

        <div class="features-grid">

            <div class="features-grid-item">
                <div class="feature-icon" aria-hidden="true">🚪</div>
                <h3>Hall d'entrée &amp; digicode</h3>
                <p>
                    Nettoyage des sols (marbre, carrelage, béton ciré), des murs et boiseries,
                    désinfection des digicodes, interphones et boîtes aux lettres.
                    Lustrage des métaux et entretien des miroirs.
                </p>
            </div>

            <div class="features-grid-item">
                <div class="feature-icon" aria-hidden="true">🪜</div>
                <h3>Cages d'escalier &amp; paliers</h3>
                <p>
                    Balayage humide et lavage de chaque marche, palier et rampe d'escalier.
                    Dépoussiérage des plafonds, luminaires, portes palières et fenêtres
                    de cage. Traitement anti-traces sur les mains courantes.
                </p>
            </div>

            <div class="features-grid-item">
                <div class="feature-icon" aria-hidden="true">🛗</div>
                <h3>Ascenseurs</h3>
                <p>
                    Nettoyage et désinfection des cabines d'ascenseur : sols, parois,
                    portes intérieures et extérieures, miroirs et boutons de commande.
                    Élimination des traces et odeurs après chaque passage.
                </p>
            </div>

            <div class="features-grid-item">
                <div class="feature-icon" aria-hidden="true">🅿️</div>
                <h3>Parkings souterrains</h3>
                <p>
                    Balayage mécanisé et lavage haute pression des dalles de parking.
                    Nettoyage des murs, colonnes, signalétiques et locaux techniques.
                    Disponibilité d'autolaveuses pour les grandes surfaces.
                </p>
            </div>

            <div class="features-grid-item">
                <div class="feature-icon" aria-hidden="true">🗑️</div>
                <h3>Locaux poubelles &amp; vide-ordures</h3>
                <p>
                    Désinfection et désodorisation des locaux poubelles, containers
                    et vide-ordures. Nettoyage des parois, sols et portes. Traitement
                    anti-odeurs et anti-bactérien pour un espace sain et conforme.
                </p>
            </div>

            <div class="features-grid-item">
                <div class="feature-icon" aria-hidden="true">🌿</div>
                <h3>Espaces extérieurs &amp; abords</h3>
                <p>
                    Nettoyage des accès extérieurs, rampes d'accès, portes de garage
                    et espaces verts attenants aux parties communes. Désherbage des
                    dalles et traitement des tags sur demande.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- ════════════════════════════════════════
     CONTRATS & FRÉQUENCES
════════════════════════════════════════ -->
<section class="section section--alt" aria-labelledby="contrats-title">
    <div class="container">
        <div class="why-us-inner">

            <div class="why-us-visual">
                <div class="why-us-photo">
                    <img src="<?= $base ?>assets/images/locaux.png"
                         alt="Locaux propres entretenus par Baldonedo Nettoyage"
                         loading="lazy">
                </div>
                <div class="why-us-badge">
                    <div class="why-us-badge-num">500+</div>
                    <div class="why-us-badge-text">Clients satisfaits</div>
                </div>
                <div class="why-us-certs">
                    <img src="<?= $base ?>assets/images/fep.png" alt="Membre FEP" title="Fédération des Entreprises de Propreté" loading="lazy">
                    <img src="<?= $base ?>assets/images/ecolabel.png" alt="Éco-label européen" title="Produits éco-labellisés" loading="lazy">
                </div>
            </div>

            <div>
                <span class="section-label">Formules de contrat</span>
                <h2 class="section-title" id="contrats-title" style="text-align:left; max-width:460px;">
                    Des contrats flexibles adaptés à chaque copropriété
                </h2>
                <p style="margin: 1rem 0 1.5rem; color: var(--text-muted, #666);">
                    Chaque immeuble est unique. Nous construisons avec vous un planning
                    d'intervention calibré selon la taille de votre immeuble, le nombre
                    de lots, la fréquentation et le niveau de prestations attendu.
                </p>
                <div class="features-list">

                    <div class="feature-item">
                        <div class="feature-icon" aria-hidden="true">📅</div>
                        <div>
                            <h4>Contrat hebdomadaire</h4>
                            <p>Passage une fois par semaine, idéal pour les immeubles de moins de 20 lots avec une circulation modérée. Comprend l'ensemble des parties communes intérieures.</p>
                        </div>
                    </div>

                    <div class="feature-item">
                        <div class="feature-icon" aria-hidden="true">🗓️</div>
                        <div>
                            <h4>Contrat bi-hebdomadaire</h4>
                            <p>Deux passages par semaine pour les résidences à fort trafic, avec enfants ou animaux. Idéal pour maintenir un niveau de propreté constant tout au long de la semaine.</p>
                        </div>
                    </div>

                    <div class="feature-item">
                        <div class="feature-icon" aria-hidden="true">🔁</div>
                        <div>
                            <h4>Contrat mensuel &amp; prestations ponctuelles</h4>
                            <p>Pour les petites copropriétés ou les besoins ponctuels : nettoyage mensuel des parties communes ou intervention unique avant assemblée générale ou état des lieux.</p>
                        </div>
                    </div>

                    <div class="feature-item">
                        <div class="feature-icon" aria-hidden="true">🤝</div>
                        <div>
                            <h4>Partenariat syndic &amp; bailleur</h4>
                            <p>Nous proposons des tarifs préférentiels pour les gestionnaires gérant plusieurs immeubles. Un interlocuteur dédié, une facturation groupée et des rapports d'intervention réguliers.</p>
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
<section class="section" aria-labelledby="galerie-immeuble-title">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Nos réalisations</span>
            <h2 class="section-title" id="galerie-immeuble-title">Immeubles entretenus par Baldonedo</h2>
            <p class="section-subtitle">Halls d'entrée, parkings, cages d'escalier — un entretien irréprochable pour valoriser votre patrimoine.</p>
        </div>
        <div class="service-gallery">
            <figure>
                <img src="<?= $base ?>assets/images/entree-immeuble.png"
                     alt="Entrée d'immeuble propre et entretenue par Baldonedo Nettoyage"
                     loading="lazy">
                <figcaption>Hall d'entrée — Créteil</figcaption>
            </figure>
            <figure>
                <img src="<?= $base ?>assets/images/parking.png"
                     alt="Parking souterrain nettoyé par Baldonedo en Île-de-France"
                     loading="lazy">
                <figcaption>Parking souterrain — Ivry-sur-Seine</figcaption>
            </figure>
            <figure>
                <img src="<?= $base ?>assets/images/parking-autolaveuse.png"
                     alt="Nettoyage de parking avec autolaveuse par Baldonedo Nettoyage"
                     loading="lazy">
                <figcaption>Nettoyage à l'autolaveuse — Orly</figcaption>
            </figure>
        </div>
    </div>
</section>

<!-- ════════════════════════════════════════
     POURQUOI NOUS — MINI
════════════════════════════════════════ -->
<section class="section section--alt" aria-labelledby="whyus-immeuble-title">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Notre expertise</span>
            <h2 class="section-title" id="whyus-immeuble-title">Pourquoi les syndics nous choisissent</h2>
        </div>
        <div class="features-grid">

            <div class="features-grid-item">
                <div class="feature-icon" aria-hidden="true">📑</div>
                <h3>Contrats clairs &amp; transparents</h3>
                <p>Chaque prestation est détaillée dans un contrat précis : zones traitées, fréquences, produits utilisés et modalités d'intervention. Aucune mauvaise surprise.</p>
            </div>

            <div class="features-grid-item">
                <div class="feature-icon" aria-hidden="true">🔧</div>
                <h3>Matériel professionnel</h3>
                <p>Autolaveuses, aspirateurs industriels, nettoyeurs haute pression : nous disposons de l'équipement adapté aux grandes surfaces et aux contraintes spécifiques de chaque immeuble.</p>
            </div>

            <div class="features-grid-item">
                <div class="feature-icon" aria-hidden="true">📞</div>
                <h3>Interlocuteur dédié</h3>
                <p>Un responsable de compte unique pour toutes vos demandes : modification de planning, signalement d'anomalie, demande d'intervention urgente. Réponse garantie sous 4 heures.</p>
            </div>

            <div class="features-grid-item">
                <div class="feature-icon" aria-hidden="true">✅</div>
                <h3>Conformité réglementaire</h3>
                <p>Nos interventions respectent les obligations légales des parties communes, les normes d'hygiène en vigueur et les recommandations de la Fédération des Entreprises de Propreté.</p>
            </div>

        </div>
    </div>
</section>

<!-- ════════════════════════════════════════
     NOS AUTRES SERVICES
════════════════════════════════════════ -->
<section class="section" aria-labelledby="autres-services-immeuble-title">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Découvrez aussi</span>
            <h2 class="section-title" id="autres-services-immeuble-title">Nos autres services</h2>
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
<section class="cta-banner" aria-labelledby="cta-immeuble-title">
    <div class="container">
        <h2 id="cta-immeuble-title">Un immeuble propre, des résidents satisfaits</h2>
        <p>
            Contactez-nous pour obtenir un devis gratuit adapté à votre copropriété ou
            votre parc immobilier. Réponse garantie sous 24 heures.
        </p>
        <div class="cta-actions">
            <a href="<?= $base ?>pages/contact.php" class="btn btn--outline">Demander un devis gratuit</a>
            <a href="tel:+330148531061" class="cta-phone">📞 01 48 53 10 61</a>
        </div>
    </div>
</section>

</main>

<?php include '../../includes/footer.php'; ?>
