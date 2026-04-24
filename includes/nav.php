<?php
$base = $base ?? '';
?>
<header class="site-header" id="site-header">
    <div class="container header-inner">
        <a href="<?= $base ?>index.php" class="logo" aria-label="Baldonedo Nettoyage — Accueil">
            <img src="<?= $base ?>assets/images/logo-baldonedo.png" alt="Baldonedo Nettoyage" class="logo-img">
        </a>

        <button class="nav-toggle" id="nav-toggle" aria-label="Ouvrir le menu" aria-expanded="false" aria-controls="main-nav">
            <span></span><span></span><span></span>
        </button>

        <nav class="main-nav" id="main-nav" aria-label="Navigation principale">
            <ul class="nav-list">
                <li><a href="<?= $base ?>index.php" class="nav-link <?= $page === 'home' ? 'active' : '' ?>">Accueil</a></li>

                <li class="nav-item has-dropdown">
                    <a href="<?= $base ?>index.php#services" class="nav-link nav-link--drop <?= str_starts_with($page, 'service-') ? 'active' : '' ?>">
                        Services <span class="nav-caret" aria-hidden="true">▾</span>
                    </a>
                    <ul class="nav-dropdown" aria-label="Sous-menu services">
                        <li><a href="<?= $base ?>pages/services/bureaux.php" class="nav-dropdown-link <?= $page === 'service-bureaux' ? 'active' : '' ?>">🏢 Bureaux et Magasins</a></li>
                        <li><a href="<?= $base ?>pages/services/immeuble.php" class="nav-dropdown-link <?= $page === 'service-immeuble' ? 'active' : '' ?>">🏛️ Immeubles</a></li>
                        <li><a href="<?= $base ?>pages/services/maison-appartement.php" class="nav-dropdown-link <?= $page === 'service-maison' ? 'active' : '' ?>">🏠 Maison &amp; Appartement</a></li>
                    </ul>
                </li>

                <li><a href="<?= $base ?>index.php#comment-ca-marche" class="nav-link">Comment ça marche</a></li>
                <li><a href="<?= $base ?>pages/realisations.php" class="nav-link <?= $page === 'realisations' ? 'active' : '' ?>">Réalisations</a></li>
                <li><a href="<?= $base ?>pages/contact.php" class="nav-link nav-link--cta <?= $page === 'contact' ? 'active' : '' ?>">Nous contacter</a></li>
            </ul>
        </nav>
    </div>
</header>
