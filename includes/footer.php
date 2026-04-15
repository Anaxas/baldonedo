<?php $base = ($page === 'contact') ? '../' : ''; ?>
<footer class="site-footer">
    <div class="container footer-grid">

        <div class="footer-brand">
            <a href="<?= $base ?>index.php" class="logo logo--light" aria-label="Baldonedo Nettoyage">
                <span class="logo-icon">✦</span>
                <span class="logo-text">Baldonedo <em>Nettoyage</em></span>
            </a>
            <p class="footer-tagline">Propreté professionnelle, confiance durable.</p>
        </div>

        <div class="footer-services">
            <h3 class="footer-heading">Nos services</h3>
            <ul>
                <li><a href="<?= $base ?>index.php#services">Bureaux</a></li>
                <li><a href="<?= $base ?>index.php#services">Immeubles</a></li>
                <li><a href="<?= $base ?>index.php#services">Maisons &amp; Appartements</a></li>
            </ul>
        </div>

        <div class="footer-contact">
            <h3 class="footer-heading">Contact</h3>
            <address>
                <p><a href="https://maps.google.com/?q=61+Av.+de+la+Victoire,+94310+Orly,+France" target="_blank" rel="noopener">61 Av. de la Victoire<br>94310 Orly, France</a></p>
                <p><a href="tel:+330148531061">+33 01 48 53 10 61</a></p>
                <p><a href="mailto:contact@baldonedo.com">contact@baldonedo.com</a></p>
            </address>
        </div>

        <div class="footer-nav">
            <h3 class="footer-heading">Navigation</h3>
            <ul>
                <li><a href="<?= $base ?>index.php">Accueil</a></li>
                <li><a href="<?= $base ?>index.php#services">Services</a></li>
                <li><a href="<?= $base ?>index.php#pourquoi-nous">Pourquoi nous</a></li>
                <li><a href="<?= $base ?>pages/contact.php">Contact</a></li>
            </ul>
        </div>

    </div>

    <div class="footer-bottom">
        <div class="container">
            <p>&copy; <?= date('Y') ?> Baldonedo Nettoyage. Tous droits réservés.</p>
        </div>
    </div>
</footer>

<script src="<?= $base ?>assets/js/main.js"></script>
</body>
</html>
