<?php
$page = 'realisations';
$base = '../';
$title = 'Nos réalisations — Baldonedo Nettoyage';
$description = 'Découvrez les réalisations de Baldonedo Nettoyage : nettoyage de bureaux, immeubles, parkings et logements en Île-de-France. Photos et témoignages.';
include '../includes/header.php';
include '../includes/nav.php';
?>

<main>

<!-- ════════════════════════════════════════
     PAGE HERO
════════════════════════════════════════ -->
<section class="page-hero" aria-label="En-tête — Nos réalisations">
    <div class="page-hero-inner">
        <div class="page-hero-content">
            <nav class="page-breadcrumb ml3" aria-label="Fil d'Ariane">
                <a href="../index.php">Accueil</a>
                <span aria-hidden="true"> › </span>
                <span aria-current="page">Réalisations</span>
            </nav>
            <h1 class="ml3">Nos réalisations</h1>
            <p class="ml3">
                Depuis plus de 15 ans, Baldonedo Nettoyage intervient auprès de professionnels et de particuliers
                en Île-de-France. Découvrez une sélection de nos chantiers réalisés dans les domaines
                du tertiaire, de la copropriété et du logement.
            </p>
        </div>
        <div class="page-hero-image">
            <img
                src="../assets/images/nettoyage-paris.png"
                alt="Équipe Baldonedo Nettoyage en intervention à Paris"
                width="640"
                height="480"
                loading="eager"
            >
        </div>
    </div>
</section>

<!-- ════════════════════════════════════════
     RÉALISATIONS — BUREAUX
════════════════════════════════════════ -->
<section class="section" aria-labelledby="titre-bureaux">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Tertiaire</span>
            <h2 class="section-title" id="titre-bureaux">Bureaux & espaces professionnels</h2>
            <p class="section-subtitle">
                Entretien régulier, remise en état et nettoyage approfondi de locaux professionnels
                partout en Île-de-France.
            </p>
        </div>

        <div class="realisations-grid">

            <!-- Carte 1 -->
            <article class="realisation-card">
                <img
                    src="../assets/images/open-space.png"
                    alt="Open space nettoyé — Paris 13e"
                    width="600"
                    height="400"
                    loading="lazy"
                >
                <div class="realisation-card-body">
                    <h3>Nettoyage de bureaux — Paris 13e</h3>
                    <p>Entretien hebdomadaire de 800 m² de bureaux open space : sols, vitres intérieures, sanitaires et espaces communs pour une société d'ingénierie.</p>
                </div>
            </article>

            <!-- Carte 2 -->
            <article class="realisation-card">
                <img
                    src="../assets/images/bureaux-paris.png"
                    alt="Bureaux haussmanniens nettoyés — Paris 8e"
                    width="600"
                    height="400"
                    loading="lazy"
                >
                <div class="realisation-card-body">
                    <h3>Locaux haussmanniens — Paris 8e</h3>
                    <p>Nettoyage biquotidien de 450 m² de bureaux classés dans un immeuble haussmannien, avec traitement spécifique des parquets anciens et des boiseries.</p>
                </div>
            </article>

            <!-- Carte 3 -->
            <article class="realisation-card">
                <img
                    src="../assets/images/societe-bureaux.png"
                    alt="Locaux d'entreprise entretenus — Créteil"
                    width="600"
                    height="400"
                    loading="lazy"
                >
                <div class="realisation-card-body">
                    <h3>Siège social — Créteil</h3>
                    <p>Nettoyage quotidien de 1 200 m² de locaux d'entreprise répartis sur trois niveaux : salles de réunion, open spaces, cafétéria et accueil.</p>
                </div>
            </article>

            <!-- Carte 4 -->
            <article class="realisation-card">
                <img
                    src="../assets/images/bureaux-paris07.png"
                    alt="Bureaux remis en état — Paris 7e"
                    width="600"
                    height="400"
                    loading="lazy"
                >
                <div class="realisation-card-body">
                    <h3>Remise en état fin de bail — Paris 7e</h3>
                    <p>Nettoyage complet de remise en état pour 320 m² de bureaux en fin de location : décapage des sols vinyle, détartrage, nettoyage des plafonds et murs.</p>
                </div>
            </article>

        </div>
    </div>
</section>

<!-- ════════════════════════════════════════
     RÉALISATIONS — IMMEUBLES
════════════════════════════════════════ -->
<section class="section section--alt" aria-labelledby="titre-immeubles">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Copropriété</span>
            <h2 class="section-title" id="titre-immeubles">Immeubles & parties communes</h2>
            <p class="section-subtitle">
                Entretien des halls, cages d'escalier, couloirs, sous-sols et parkings pour les syndics
                et gestionnaires de copropriétés en Île-de-France.
            </p>
        </div>

        <div class="realisations-grid">

            <!-- Carte 5 -->
            <article class="realisation-card">
                <img
                    src="../assets/images/entree-immeuble.png"
                    alt="Hall d'entrée d'immeuble nettoyé — Ivry-sur-Seine"
                    width="600"
                    height="400"
                    loading="lazy"
                >
                <div class="realisation-card-body">
                    <h3>Copropriété — Ivry-sur-Seine</h3>
                    <p>Nettoyage bihebdomadaire des parties communes d'un immeuble de 48 lots : hall d'entrée, 6 paliers, cage d'escalier et local à vélos.</p>
                </div>
            </article>

            <!-- Carte 6 -->
            <article class="realisation-card">
                <img
                    src="../assets/images/parking-autolaveuse.png"
                    alt="Nettoyage de parking à l'autolaveuse — Rungis"
                    width="600"
                    height="400"
                    loading="lazy"
                >
                <div class="realisation-card-body">
                    <h3>Parking souterrain — Rungis</h3>
                    <p>Lavage mensuel au karcher et à l'autolaveuse de 3 500 m² de dalle parking sur deux niveaux, incluant le traitement des taches d'huile et la signalisation au sol.</p>
                </div>
            </article>

            <!-- Carte 7 -->
            <article class="realisation-card">
                <img
                    src="../assets/images/haussmanien.png"
                    alt="Immeuble haussmannien entretenu — Paris 15e"
                    width="600"
                    height="400"
                    loading="lazy"
                >
                <div class="realisation-card-body">
                    <h3>Résidence haussmannienne — Paris 15e</h3>
                    <p>Entretien hebdomadaire des parties communes d'une résidence de 72 appartements : nettoyage des sols en marbre, des vitres de la verrière et des boîtes aux lettres.</p>
                </div>
            </article>

            <!-- Carte 8 -->
            <article class="realisation-card">
                <img
                    src="../assets/images/parking.png"
                    alt="Parking extérieur nettoyé — Orly"
                    width="600"
                    height="400"
                    loading="lazy"
                >
                <div class="realisation-card-body">
                    <h3>Parking extérieur — Orly</h3>
                    <p>Nettoyage trimestriel et démoussage d'un parking extérieur de 200 places, avec traitement herbicide des joints et remise en état de la peinture de sol.</p>
                </div>
            </article>

        </div>
    </div>
</section>

<!-- ════════════════════════════════════════
     RÉALISATIONS — LOGEMENTS
════════════════════════════════════════ -->
<section class="section" aria-labelledby="titre-logements">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Résidentiel</span>
            <h2 class="section-title" id="titre-logements">Maisons & appartements</h2>
            <p class="section-subtitle">
                Nettoyage de fin de chantier, remise en état entre deux locataires ou grand nettoyage
                ponctuel pour les particuliers et les agences immobilières.
            </p>
        </div>

        <div class="realisations-grid">

            <!-- Carte 9 -->
            <article class="realisation-card">
                <img
                    src="../assets/images/appartement.png"
                    alt="Appartement remis en état entre locataires — Vitry-sur-Seine"
                    width="600"
                    height="400"
                    loading="lazy"
                >
                <div class="realisation-card-body">
                    <h3>État des lieux sortant — Vitry-sur-Seine</h3>
                    <p>Remise en état complète d'un appartement T4 de 85 m² entre deux locataires : nettoyage four, hotte, sanitaires, joints de carrelage et shampoing des moquettes.</p>
                </div>
            </article>

            <!-- Carte 10 -->
            <article class="realisation-card">
                <img
                    src="../assets/images/piece.png"
                    alt="Pièce à vivre après nettoyage professionnel — Choisy-le-Roi"
                    width="600"
                    height="400"
                    loading="lazy"
                >
                <div class="realisation-card-body">
                    <h3>Grand nettoyage de printemps — Choisy-le-Roi</h3>
                    <p>Nettoyage approfondi d'une maison individuelle de 140 m² : lessivage des murs, nettoyage des fenêtres intérieur/extérieur, décapage et protection des parquets.</p>
                </div>
            </article>

            <!-- Carte 11 -->
            <article class="realisation-card">
                <img
                    src="../assets/images/canape.png"
                    alt="Salon nettoyé après chantier — L'Haÿ-les-Roses"
                    width="600"
                    height="400"
                    loading="lazy"
                >
                <div class="realisation-card-body">
                    <h3>Nettoyage fin de chantier — L'Haÿ-les-Roses</h3>
                    <p>Nettoyage après travaux d'un appartement neuf de 65 m² : élimination des résidus de plâtre et de peinture, nettoyage des menuiseries et des vitres, remise en brillant des sols.</p>
                </div>
            </article>

            <!-- Carte 12 -->
            <article class="realisation-card">
                <div class="video-wrapper">
                    <video autoplay muted playsinline>
                        <source src="../assets/videos/sols.mp4" type="video/mp4">
                        Votre navigateur ne supporte pas la lecture de vidéos.
                    </video>
                    <div class="video-controls">
                        <button class="video-btn video-btn--mute" aria-label="Activer le son"></button>
                        <button class="video-btn video-btn--replay" aria-label="Rejouer">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="18" height="18" aria-hidden="true">
                                <path d="M12 5V1L7 6l5 5V7c3.31 0 6 2.69 6 6s-2.69 6-6 6-6-2.69-6-6H4c0 4.42 3.58 8 8 8s8-3.58 8-8-3.58-8-8-8z"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="realisation-card-body">
                    <h3>Décapage de parquet — Paris 1er</h3>
                    <p>Remise en état de sol et décapage du parquet dans un salon de coiffure.</p>
                </div>
            </article>

            <!-- Carte 14 -->
            <article class="realisation-card">
                <div class="video-wrapper">
                    <video autoplay muted playsinline>
                        <source src="../assets/videos/revue.mp4" type="video/mp4">
                        Votre navigateur ne supporte pas la lecture de vidéos.
                    </video>
                    <div class="video-controls">
                        <button class="video-btn video-btn--mute" aria-label="Activer le son"></button>
                        <button class="video-btn video-btn--replay" aria-label="Rejouer">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="18" height="18" aria-hidden="true">
                                <path d="M12 5V1L7 6l5 5V7c3.31 0 6 2.69 6 6s-2.69 6-6 6-6-2.69-6-6H4c0 4.42 3.58 8 8 8s8-3.58 8-8-3.58-8-8-8z"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="realisation-card-body">
                    <h3>Salon de coiffure après nettoyage — Paris 1er</h3>
                    <p>Remise en état après travaux.</p>
                </div>
            </article>

            <!-- Carte 13 -->
            <article class="realisation-card">
                <div class="video-wrapper">
                    <video autoplay muted playsinline>
                        <source src="../assets/videos/balais.mp4" type="video/mp4">
                        Votre navigateur ne supporte pas la lecture de vidéos.
                    </video>
                    <div class="video-controls">
                        <button class="video-btn video-btn--mute" aria-label="Activer le son"></button>
                        <button class="video-btn video-btn--replay" aria-label="Rejouer">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="18" height="18" aria-hidden="true">
                                <path d="M12 5V1L7 6l5 5V7c3.31 0 6 2.69 6 6s-2.69 6-6 6-6-2.69-6-6H4c0 4.42 3.58 8 8 8s8-3.58 8-8-3.58-8-8-8z"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="realisation-card-body">
                    <h3>Nettoyage cabinet de notaire — Paris 14</h3>
                    <p>Entretien régulier d'un cabinet de notaire.</p>
                </div>
            </article>

            <!-- Carte 15 -->
            <article class="realisation-card">
                <div class="video-wrapper">
                    <video autoplay muted playsinline>
                        <source src="../assets/videos/supermarche.mp4" type="video/mp4">
                        Votre navigateur ne supporte pas la lecture de vidéos.
                    </video>
                    <div class="video-controls">
                        <button class="video-btn video-btn--mute" aria-label="Activer le son"></button>
                        <button class="video-btn video-btn--replay" aria-label="Rejouer">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="18" height="18" aria-hidden="true">
                                <path d="M12 5V1L7 6l5 5V7c3.31 0 6 2.69 6 6s-2.69 6-6 6-6-2.69-6-6H4c0 4.42 3.58 8 8 8s8-3.58 8-8-3.58-8-8-8z"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="realisation-card-body">
                    <h3>Nettoyage des allées — Choisy-le-Roi</h3>
                    <p>Nettoyage des allées de magasin.</p>
                </div>
            </article>

            <!-- Carte 16 -->
            <article class="realisation-card">
                <div class="video-wrapper">
                    <video autoplay muted playsinline>
                        <source src="../assets/videos/marbre.mp4" type="video/mp4">
                        Votre navigateur ne supporte pas la lecture de vidéos.
                    </video>
                    <div class="video-controls">
                        <button class="video-btn video-btn--mute" aria-label="Activer le son"></button>
                        <button class="video-btn video-btn--replay" aria-label="Rejouer">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="18" height="18" aria-hidden="true">
                                <path d="M12 5V1L7 6l5 5V7c3.31 0 6 2.69 6 6s-2.69 6-6 6-6-2.69-6-6H4c0 4.42 3.58 8 8 8s8-3.58 8-8-3.58-8-8-8z"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="realisation-card-body">
                    <h3>Mise en brillance du marbre — Paris 2ème</h3>
                    <p>Mise en brillance du marbre d'une brasserie près de l'Opéra.</p>
                </div>
            </article>

            <!-- Carte 17 -->
            <article class="realisation-card">
                <div class="video-wrapper">
                    <video autoplay muted playsinline>
                        <source src="../assets/videos/hypermarche.mp4" type="video/mp4">
                        Votre navigateur ne supporte pas la lecture de vidéos.
                    </video>
                    <div class="video-controls">
                        <button class="video-btn video-btn--mute" aria-label="Activer le son"></button>
                        <button class="video-btn video-btn--replay" aria-label="Rejouer">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="18" height="18" aria-hidden="true">
                                <path d="M12 5V1L7 6l5 5V7c3.31 0 6 2.69 6 6s-2.69 6-6 6-6-2.69-6-6H4c0 4.42 3.58 8 8 8s8-3.58 8-8-3.58-8-8-8z"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="realisation-card-body">
                    <h3>Nettoyage à l'autolaveuse — Choisy-le-Roi</h3>
                    <p>Nettoyage à l'autolaveuse des allées d'un supermarché.</p>
                </div>
            </article>

            <!-- Carte 18 -->
            <article class="realisation-card">
                <div class="video-wrapper">
                    <video autoplay muted playsinline>
                        <source src="../assets/videos/voiture-balai.mp4" type="video/mp4">
                        Votre navigateur ne supporte pas la lecture de vidéos.
                    </video>
                    <div class="video-controls">
                        <button class="video-btn video-btn--mute" aria-label="Activer le son"></button>
                        <button class="video-btn video-btn--replay" aria-label="Rejouer">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="18" height="18" aria-hidden="true">
                                <path d="M12 5V1L7 6l5 5V7c3.31 0 6 2.69 6 6s-2.69 6-6 6-6-2.69-6-6H4c0 4.42 3.58 8 8 8s8-3.58 8-8-3.58-8-8-8z"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="realisation-card-body">
                    <h3>Entretien d'école — Orly</h3>
                    <p>Nettoyage à l'autolaveuse autoportée d'une école.</p>
                </div>
            </article>

            <!-- Carte 19 -->
            <article class="realisation-card">
                <div class="video-wrapper">
                    <video autoplay muted playsinline>
                        <source src="../assets/videos/vitre.mp4" type="video/mp4">
                        Votre navigateur ne supporte pas la lecture de vidéos.
                    </video>
                    <div class="video-controls">
                        <button class="video-btn video-btn--mute" aria-label="Activer le son"></button>
                        <button class="video-btn video-btn--replay" aria-label="Rejouer">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="18" height="18" aria-hidden="true">
                                <path d="M12 5V1L7 6l5 5V7c3.31 0 6 2.69 6 6s-2.69 6-6 6-6-2.69-6-6H4c0 4.42 3.58 8 8 8s8-3.58 8-8-3.58-8-8-8z"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="realisation-card-body">
                    <h3>Nettoyage de vitrerie — Paris 15</h3>
                    <p>Nettoyage de vitrerie de bureau en hauteur.</p>
                </div>
            </article>

            <!-- Carte 20 -->
            <article class="realisation-card">
                <div class="video-wrapper">
                    <video autoplay muted playsinline>
                        <source src="../assets/videos/grue.mp4" type="video/mp4">
                        Votre navigateur ne supporte pas la lecture de vidéos.
                    </video>
                    <div class="video-controls">
                        <button class="video-btn video-btn--mute" aria-label="Activer le son"></button>
                        <button class="video-btn video-btn--replay" aria-label="Rejouer">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="18" height="18" aria-hidden="true">
                                <path d="M12 5V1L7 6l5 5V7c3.31 0 6 2.69 6 6s-2.69 6-6 6-6-2.69-6-6H4c0 4.42 3.58 8 8 8s8-3.58 8-8-3.58-8-8-8z"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="realisation-card-body">
                    <h3>Nettoyage véranda — Paris 1er</h3>
                    <p>Nettoyage d'une marquise au-dessus d'une brasserie avec une nacelle. Passage au Karcher.</p>
                </div>
            </article>

            <!-- Carte 21 -->
            <article class="realisation-card">
                <div class="video-wrapper">
                    <video autoplay muted playsinline>
                        <source src="../assets/videos/jet.mp4" type="video/mp4">
                        Votre navigateur ne supporte pas la lecture de vidéos.
                    </video>
                    <div class="video-controls">
                        <button class="video-btn video-btn--mute" aria-label="Activer le son"></button>
                        <button class="video-btn video-btn--replay" aria-label="Rejouer">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="18" height="18" aria-hidden="true">
                                <path d="M12 5V1L7 6l5 5V7c3.31 0 6 2.69 6 6s-2.69 6-6 6-6-2.69-6-6H4c0 4.42 3.58 8 8 8s8-3.58 8-8-3.58-8-8-8z"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="realisation-card-body">
                    <h3>Nettoyage courette — Paris 10</h3>
                    <p>Nettoyage d'une courette avec Karcher haute pression.</p>
                </div>
            </article>

            <!-- Carte 22 -->
            <!-- <article class="realisation-card">
                <div class="video-wrapper">
                    <video autoplay muted playsinline>
                        <source src="../assets/videos/chantier.mp4" type="video/mp4">
                        Votre navigateur ne supporte pas la lecture de vidéos.
                    </video>
                    <div class="video-controls">
                        <button class="video-btn video-btn--mute" aria-label="Activer le son"></button>
                        <button class="video-btn video-btn--replay" aria-label="Rejouer">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="18" height="18" aria-hidden="true">
                                <path d="M12 5V1L7 6l5 5V7c3.31 0 6 2.69 6 6s-2.69 6-6 6-6-2.69-6-6H4c0 4.42 3.58 8 8 8s8-3.58 8-8-3.58-8-8-8z"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="realisation-card-body">
                    <h3>Carte 22 Chantier électricité — Lieu XXX</h3>
                    <p>Chantier électricité.</p>
                </div>
            </article> -->

        </div>
    </div>
</section>

<!-- ════════════════════════════════════════
     TÉMOIGNAGES
════════════════════════════════════════ -->
<section class="section section--alt" aria-labelledby="titre-temoignages">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Avis clients</span>
            <h2 class="section-title" id="titre-temoignages">Ce que disent nos clients</h2>
            <p class="section-subtitle">
                La satisfaction de nos clients est notre priorité absolue. Voici quelques retours
                de professionnels et de particuliers qui nous font confiance.
            </p>
        </div>

        <div class="testimonials-grid">

            <!-- Témoignage 1 -->
            <div class="testimonial-card">
                <div class="testimonial-stars" aria-label="5 étoiles sur 5">
                    <span aria-hidden="true">★★★★★</span>
                </div>
                <blockquote class="testimonial-text">
                    "Nous faisons appel à Baldonedo Nettoyage pour l'entretien de nos bureaux depuis trois ans.
                    Le travail est irréprochable, les équipes sont ponctuelles et discrètes.
                    Nos collaborateurs apprécient de travailler dans des locaux toujours impeccables."
                </blockquote>
                <div class="testimonial-author">
                    <div class="testimonial-avatar">
                        <img
                            src="../assets/images/dame.png"
                            alt="Photo de Sophie M."
                            width="56"
                            height="56"
                            loading="lazy"
                        >
                    </div>
                    <div>
                        <div class="testimonial-name">Sophie M.</div>
                        <div class="testimonial-role">Directrice administrative — Cabinet d'avocats, Paris 8e</div>
                    </div>
                </div>
            </div>

            <!-- Témoignage 2 -->
            <div class="testimonial-card">
                <div class="testimonial-stars" aria-label="5 étoiles sur 5">
                    <span aria-hidden="true">★★★★★</span>
                </div>
                <blockquote class="testimonial-text">
                    "En tant que syndic de copropriété, j'ai confié plusieurs immeubles à Baldonedo.
                    Le rapport qualité-prix est excellent et le responsable est toujours disponible
                    en cas de besoin urgent. Je recommande sans hésitation."
                </blockquote>
                <div class="testimonial-author">
                    <div class="testimonial-avatar">
                        <img
                            src="../assets/images/homme.png"
                            alt="Photo de Laurent D."
                            width="56"
                            height="56"
                            loading="lazy"
                        >
                    </div>
                    <div>
                        <div class="testimonial-name">Laurent D.</div>
                        <div class="testimonial-role">Gestionnaire de copropriété — Foncia, Val-de-Marne</div>
                    </div>
                </div>
            </div>

            <!-- Témoignage 3 -->
            <div class="testimonial-card">
                <div class="testimonial-stars" aria-label="5 étoiles sur 5">
                    <span aria-hidden="true">★★★★★</span>
                </div>
                <blockquote class="testimonial-text">
                    "J'ai fait appel à Baldonedo pour la remise en état de mon appartement avant l'état
                    des lieux de sortie. Résultat parfait en un seul passage ! Le propriétaire a été
                    impressionné et la caution m'a été restituée intégralement."
                </blockquote>
                <div class="testimonial-author">
                    <div class="testimonial-avatar">
                        <img
                            src="../assets/images/brune.png"
                            alt="Photo de Camille R."
                            width="56"
                            height="56"
                            loading="lazy"
                        >
                    </div>
                    <div>
                        <div class="testimonial-name">Camille R.</div>
                        <div class="testimonial-role">Particulière — Villejuif</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ════════════════════════════════════════
     NOS CLIENTS
════════════════════════════════════════ -->
<section class="section" aria-labelledby="titre-clients">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Ils nous font confiance</span>
            <h2 class="section-title" id="titre-clients">Nos clients</h2>
            <p class="section-subtitle">
                Entreprises, agences immobilières, enseignes nationales et acteurs locaux :
                ils ont choisi Baldonedo Nettoyage pour la propreté de leurs locaux.
            </p>
        </div>

        <div class="clients-grid" aria-label="Logos de nos clients">

            <div class="client-logo">
                <img
                    src="../assets/images/logo-citroen.png"
                    alt="Citroën"
                    width="160"
                    height="80"
                    loading="lazy"
                >
            </div>

            <div class="client-logo">
                <img
                    src="../assets/images/logo-carrefour.png"
                    alt="Carrefour"
                    width="160"
                    height="80"
                    loading="lazy"
                >
            </div>

            <div class="client-logo">
                <img
                    src="../assets/images/logo-foncia.png"
                    alt="Foncia"
                    width="160"
                    height="80"
                    loading="lazy"
                >
            </div>

            <div class="client-logo">
                <img
                    src="../assets/images/logo-notaires.png"
                    alt="Chambre des notaires"
                    width="160"
                    height="80"
                    loading="lazy"
                >
            </div>

            <div class="client-logo">
                <img
                    src="../assets/images/logo-loiselet.png"
                    alt="Loiselet & Daigremont"
                    width="160"
                    height="80"
                    loading="lazy"
                >
            </div>

            <div class="client-logo">
                <img
                    src="../assets/images/logo-oralia.png"
                    alt="Oralia"
                    width="160"
                    height="80"
                    loading="lazy"
                >
            </div>

            <div class="client-logo">
                <img
                    src="../assets/images/logo-pathe-gaumont.png"
                    alt="Pathé"
                    width="160"
                    height="80"
                    loading="lazy"
                >
            </div>

            <div class="client-logo">
                <img
                    src="../assets/images/logo-letrier.png"
                    alt="L'Étrier"
                    width="160"
                    height="80"
                    loading="lazy"
                >
            </div>

        </div>
    </div>
</section>

<!-- ════════════════════════════════════════
     CTA BANNER
════════════════════════════════════════ -->
<section class="cta-banner" aria-label="Appel à l'action">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Vous souhaitez un résultat similaire ?</h2>
            <p class="section-subtitle">
                Contactez-nous dès aujourd'hui pour un devis gratuit et personnalisé,
                établi sous 24 heures ouvrées.
            </p>
        </div>
        <div class="cta-actions">
            <a href="contact.php" class="btn btn--primary">Demander un devis gratuit</a>
            <a href="tel:+330148531061" class="btn btn--outline cta-phone">01 48 53 10 61</a>
        </div>
    </div>
</section>

</main>

<?php include '../includes/footer.php'; ?>
