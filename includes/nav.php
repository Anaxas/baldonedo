<?php
$base = ($page === 'contact') ? '../' : '';
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
                <li><a href="<?= $base ?>index.php#services" class="nav-link">Services</a></li>
                <li><a href="<?= $base ?>index.php#comment-ca-marche" class="nav-link">Comment ça marche</a></li>
                <li><a href="<?= $base ?>index.php#pourquoi-nous" class="nav-link">Pourquoi nous</a></li>
                <li><a href="<?= $base ?>pages/contact.php" class="nav-link nav-link--cta <?= $page === 'contact' ? 'active' : '' ?>">Nous contacter</a></li>
            </ul>
        </nav>
    </div>
</header>
