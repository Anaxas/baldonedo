<?php $base = $base ?? ''; ?>
<footer class="site-footer">
    <div class="container footer-grid">

        <div class="footer-brand">
            <a href="<?= $base ?>index.php" class="logo" aria-label="Baldonedo Nettoyage">
                <img src="<?= $base ?>assets/images/logo-baldonedo.png" alt="Baldonedo Nettoyage" class="logo-img logo-img--footer">
            </a>
            <p class="footer-tagline">Propreté professionnelle, confiance durable.</p>
            <div class="footer-certs">
                <img src="<?= $base ?>assets/images/fep.png" alt="Membre FEP" title="Fédération des Entreprises de Propreté">
                <img src="<?= $base ?>assets/images/ecolabel.png" alt="Éco-label européen" title="Produits éco-labellisés">
            </div>
        </div>

        <div class="footer-services">
            <h3 class="footer-heading">Nos services</h3>
            <ul>
                <li><a href="<?= $base ?>pages/services/bureaux.php">Nettoyage Bureaux</a></li>
                <li><a href="<?= $base ?>pages/services/immeuble.php">Nettoyage Immeubles</a></li>
                <li><a href="<?= $base ?>pages/services/maison-appartement.php">Maisons &amp; Appartements</a></li>
                <li><a href="<?= $base ?>pages/realisations.php">Nos Réalisations</a></li>
            </ul>
        </div>

        <div class="footer-villes">
            <h3 class="footer-heading">Zones desservies</h3>
            <ul>
                <li><a href="<?= $base ?>pages/villes/paris.php">Paris</a></li>
                <li><a href="<?= $base ?>pages/villes/creteil.php">Créteil</a></li>
                <li><a href="<?= $base ?>pages/villes/rungis.php">Rungis</a></li>
                <li><a href="<?= $base ?>pages/villes/vitry-sur-seine.php">Vitry-sur-Seine</a></li>
                <li><a href="<?= $base ?>pages/villes/ivry-sur-seine.php">Ivry-sur-Seine</a></li>
                <li><a href="<?= $base ?>pages/villes/choisy-le-roi.php">Choisy-le-Roi</a></li>
                <li><a href="<?= $base ?>pages/villes/villejuif.php">Villejuif</a></li>
                <li><a href="<?= $base ?>pages/villes/thiais.php">Thiais</a></li>
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
