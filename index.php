<?php
$page  = 'home';
$base  = '';
$title = 'Baldonedo Nettoyage — Entreprise de nettoyage professionnel à Orly';
$description = 'Baldonedo Nettoyage, entreprise de nettoyage professionnel à Orly. Bureaux, immeubles, maisons et appartements. Devis gratuit en 24h pour toute l\'Île-de-France.';
include 'includes/header.php';
include 'includes/nav.php';
?>

<!-- ════════════════════════════════════════
     HERO
════════════════════════════════════════ -->
<main>
<section class="hero" aria-label="Section d'introduction">
    <div class="hero-bg"></div>
    <div class="hero-pattern"></div>
    <div class="container">
        <div class="hero-inner">
            <div class="hero-content">
                <div class="hero-eyebrow">Nettoyage Professionnel</div>
                <h1>Un espace propre,<br>une <em>image soignée</em></h1>
                <p class="hero-desc">
                    Baldonedo Nettoyage intervient sur vos bureaux, immeubles et logements
                    avec des équipes qualifiées, des produits écologiques et un service
                    irréprochable — depuis Orly, pour toute l'Île-de-France.
                </p>
                <div class="hero-cta">
                    <a href="pages/contact.php" class="btn btn--primary">Demander un devis gratuit</a>
                    <a href="#services" class="btn btn--outline">Nos services</a>
                </div>
                <div class="hero-stats">
                    <div>
                        <div class="hero-stat-value">10+</div>
                        <div class="hero-stat-label">Années d'expérience</div>
                    </div>
                    <div>
                        <div class="hero-stat-value">500+</div>
                        <div class="hero-stat-label">Clients satisfaits</div>
                    </div>
                    <div>
                        <div class="hero-stat-value">3</div>
                        <div class="hero-stat-label">Types de services</div>
                    </div>
                </div>
            </div>
            <div class="hero-image" aria-hidden="true">
                <div class="hero-image-frame">
                    <img src="assets/images/agents.png" alt="Agent Baldonedo en action" width="520" height="520">
                    <div class="hero-image-badge">
                        <img src="assets/images/ecolabel.png" alt="Éco-label" width="64" height="64">
                        <span>Produits<br>écologiques</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ════════════════════════════════════════
     SERVICES
════════════════════════════════════════ -->
<section class="section" id="services" aria-labelledby="services-title">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Ce que nous faisons</span>
            <h2 class="section-title" id="services-title">Nos services de nettoyage</h2>
            <p class="section-subtitle">
                Des prestations adaptées à chaque environnement, réalisées par des professionnels formés et équipés.
            </p>
        </div>

        <div class="services-grid">

            <article class="service-card">
                <div class="service-card-img">
                    <img src="assets/images/nettoyage-bureaux.png" alt="Nettoyage de bureaux professionnels" loading="lazy">
                </div>
                <div class="service-icon" aria-hidden="true">🏢</div>
                <h3>Bureaux</h3>
                <p>
                    Entretien régulier de vos espaces de travail : sols, vitres, sanitaires,
                    cuisine et zones communes. Interventions en dehors des heures d'ouverture
                    pour ne pas perturber votre activité.
                </p>
            </article>

            <article class="service-card">
                <div class="service-card-img">
                    <img src="assets/images/haussmanien.png" alt="Nettoyage de parties communes d'immeuble" loading="lazy">
                </div>
                <div class="service-icon" aria-hidden="true">🏛️</div>
                <h3>Immeuble</h3>
                <p>
                    Nettoyage des parties communes, cages d'escalier, halls d'entrée,
                    locaux poubelles et parkings. Contrats hebdomadaires ou mensuels
                    sur mesure pour copropriétés et bailleurs.
                </p>
            </article>

            <article class="service-card">
                <div class="service-card-img">
                    <img src="assets/images/appartement.png" alt="Nettoyage de maison et appartement" loading="lazy">
                </div>
                <div class="service-icon" aria-hidden="true">🏠</div>
                <h3>Maison &amp; Appartement</h3>
                <p>
                    Nettoyage de fond, entretien courant ou remise en état après travaux.
                    Nous intervenons dans vos maisons et appartements avec discrétion,
                    soin et efficacité.
                </p>
            </article>

        </div>
    </div>
</section>

<!-- ════════════════════════════════════════
     COMMENT ÇA MARCHE
════════════════════════════════════════ -->
<section class="section section--alt" id="comment-ca-marche" aria-labelledby="process-title">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Simple &amp; rapide</span>
            <h2 class="section-title" id="process-title">Comment ça marche ?</h2>
            <p class="section-subtitle">
                Obtenir un devis et démarrer votre contrat ne prend que quelques minutes.
            </p>
        </div>
        <div class="process-grid">

            <div class="process-step">
                <div class="process-img">
                    <img src="assets/images/demande-devis.png" alt="Demande de devis en ligne" loading="lazy">
                </div>
                <div class="process-num">01</div>
                <h3>Demandez un devis</h3>
                <p>Remplissez notre formulaire en ligne ou appelez-nous. Décrivez votre besoin et nous vous répondons sous 24 h.</p>
            </div>

            <div class="process-step">
                <div class="process-img">
                    <img src="assets/images/tel.png" alt="Contact téléphonique pour votre devis" loading="lazy">
                </div>
                <div class="process-num">02</div>
                <h3>On vous rappelle</h3>
                <p>Notre équipe vous contacte pour affiner votre demande, évaluer vos locaux et établir un devis personnalisé gratuit.</p>
            </div>

            <div class="process-step">
                <div class="process-img">
                    <img src="assets/images/bureaux-paris.png" alt="Prise de rendez-vous pour le nettoyage" loading="lazy">
                </div>
                <div class="process-num">03</div>
                <h3>On intervient</h3>
                <p>Dès votre accord, nos agents interviennent selon le planning convenu, avec professionnalisme et discrétion.</p>
            </div>

        </div>
    </div>
</section>

<!-- ════════════════════════════════════════
     POURQUOI NOUS
════════════════════════════════════════ -->
<section class="section" id="pourquoi-nous" aria-labelledby="whyus-title">
    <div class="container">
        <div class="why-us-inner">

            <div class="why-us-visual">
                <div class="why-us-photo">
                    <img src="assets/images/cleaning-man.png" alt="Agent de nettoyage Baldonedo au travail" loading="lazy">
                </div>
                <div class="why-us-badge">
                    <div class="why-us-badge-num">100%</div>
                    <div class="why-us-badge-text">Satisfaction garantie</div>
                </div>
                <div class="why-us-certs">
                    <img src="assets/images/fep.png" alt="Membre FEP" title="Fédération des Entreprises de Propreté" loading="lazy">
                    <img src="assets/images/ecolabel.png" alt="Éco-label européen" title="Produits éco-labellisés" loading="lazy">
                </div>
            </div>

            <div>
                <span class="section-label">Pourquoi nous choisir</span>
                <h2 class="section-title" id="whyus-title" style="text-align:left; max-width:440px;">
                    La propreté est notre engagement quotidien
                </h2>
                <div class="features-list" style="margin-top: 1.5rem;">

                    <div class="feature-item">
                        <div class="feature-icon" aria-hidden="true">✅</div>
                        <div>
                            <h4>Personnel qualifié &amp; formé</h4>
                            <p>Chaque membre de notre équipe est formé aux techniques professionnelles et aux règles de sécurité en vigueur.</p>
                        </div>
                    </div>

                    <div class="feature-item">
                        <div class="feature-icon" aria-hidden="true">🌿</div>
                        <div>
                            <h4>Produits écologiques</h4>
                            <p>Nous utilisons des produits labellisés respectueux de l'environnement et sans danger pour les occupants.</p>
                        </div>
                    </div>

                    <div class="feature-item">
                        <div class="feature-icon" aria-hidden="true">🕐</div>
                        <div>
                            <h4>Ponctualité &amp; fiabilité</h4>
                            <p>Nous respectons les horaires convenus et intervenons avec régularité pour que vous puissiez compter sur nous.</p>
                        </div>
                    </div>

                    <div class="feature-item">
                        <div class="feature-icon" aria-hidden="true">💼</div>
                        <div>
                            <h4>Devis gratuit &amp; sans engagement</h4>
                            <p>Contactez-nous pour obtenir un devis personnalisé en moins de 24 h, sans aucun engagement de votre part.</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- ════════════════════════════════════════
     TÉMOIGNAGES
════════════════════════════════════════ -->
<section class="section section--alt" aria-labelledby="temoignages-title">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Ils nous font confiance</span>
            <h2 class="section-title" id="temoignages-title">Ce que disent nos clients</h2>
        </div>

        <div class="testimonials-grid">

            <div class="testimonial-card">
                <div class="testimonial-stars" aria-label="5 étoiles">★★★★★</div>
                <p class="testimonial-text">
                    « Excellente prestation, équipe sérieuse et discrète. Nos locaux n'ont jamais
                    été aussi propres. Nous faisons appel à Baldonedo chaque semaine depuis deux ans. »
                </p>
                <div class="testimonial-author">
                    <div class="testimonial-avatar">
                        <img src="assets/images/dame.png" alt="Marie L." loading="lazy">
                    </div>
                    <div>
                        <div class="testimonial-name">Marie L.</div>
                        <div class="testimonial-role">Responsable administrative, PME</div>
                    </div>
                </div>
            </div>

            <div class="testimonial-card">
                <div class="testimonial-stars" aria-label="5 étoiles">★★★★★</div>
                <p class="testimonial-text">
                    « Service impeccable pour notre copropriété. Les parties communes sont entretenues
                    avec soin et le personnel est toujours ponctuel et courtois. »
                </p>
                <div class="testimonial-author">
                    <div class="testimonial-avatar">
                        <img src="assets/images/homme.png" alt="Jean-François M." loading="lazy">
                    </div>
                    <div>
                        <div class="testimonial-name">Jean-François M.</div>
                        <div class="testimonial-role">Syndic de copropriété</div>
                    </div>
                </div>
            </div>

            <div class="testimonial-card">
                <div class="testimonial-stars" aria-label="5 étoiles">★★★★★</div>
                <p class="testimonial-text">
                    « Nettoyage après travaux réalisé rapidement et parfaitement. Je recommande
                    vivement Baldonedo Nettoyage pour sa réactivité et son professionnalisme. »
                </p>
                <div class="testimonial-author">
                    <div class="testimonial-avatar">
                        <img src="assets/images/brune.png" alt="Sophie B." loading="lazy">
                    </div>
                    <div>
                        <div class="testimonial-name">Sophie B.</div>
                        <div class="testimonial-role">Propriétaire</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ════════════════════════════════════════
     NOS CLIENTS
════════════════════════════════════════ -->
<section class="section clients-section" aria-labelledby="clients-title">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Références</span>
            <h2 class="section-title" id="clients-title">Ils nous font confiance</h2>
            <p class="section-subtitle">Parmi nos clients : entreprises, enseignes nationales et gestionnaires immobiliers.</p>
        </div>
        <div class="clients-grid">
            <div class="client-logo"><img src="assets/images/logo-citroen.png" alt="Citroën" loading="lazy"></div>
            <div class="client-logo"><img src="assets/images/logo-carrefour.png" alt="Carrefour" loading="lazy"></div>
            <div class="client-logo"><img src="assets/images/logo-foncia.png" alt="Foncia" loading="lazy"></div>
            <div class="client-logo"><img src="assets/images/logo-notaires.png" alt="Notaires" loading="lazy"></div>
            <div class="client-logo"><img src="assets/images/logo-loiselet.png" alt="Loiselet" loading="lazy"></div>
            <div class="client-logo"><img src="assets/images/logo-oralia.png" alt="Oralia" loading="lazy"></div>
            <div class="client-logo"><img src="assets/images/logo-pathe-gaumont.png" alt="Pathé" loading="lazy"></div>
            <div class="client-logo"><img src="assets/images/logo-letrier.png" alt="Étrier" loading="lazy"></div>
        </div>
    </div>
</section>

<!-- ════════════════════════════════════════
     CTA BANNER
════════════════════════════════════════ -->
<section class="cta-banner" aria-labelledby="cta-title">
    <div class="container">
        <h2 id="cta-title">Prêt à travailler avec nous ?</h2>
        <p>Obtenez un devis gratuit en moins de 24 heures. Notre équipe est disponible pour répondre à toutes vos questions.</p>
        <div class="cta-actions">
            <a href="pages/contact.php" class="btn btn--outline">Demander un devis</a>
            <a href="tel:+330148531061" class="cta-phone">📞 +33 01 48 53 10 61</a>
        </div>
    </div>
</section>
</main>

<?php include 'includes/footer.php'; ?>
