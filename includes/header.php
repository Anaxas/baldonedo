<?php
$page  = $page  ?? 'home';
$base  = $base  ?? '';
$title = $title ?? 'Baldonedo Nettoyage — Entreprise de nettoyage professionnel à Orly';
$description = $description ?? 'Baldonedo Nettoyage — Entreprise de nettoyage professionnel à Orly. Bureaux, immeubles, maisons et appartements en Île-de-France.';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= htmlspecialchars($description) ?>">
    <title><?= htmlspecialchars($title) ?></title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:ital,wght@0,300;0,400;0,500;0,700;1,400&family=Oswald:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?= $base ?>assets/css/style.css">

    <!-- Canonical -->
    <link rel="canonical" href="https://www.baldonedo.com/<?= ltrim($_SERVER['REQUEST_URI'] ?? '', '/') ?>">

    <!-- Schema.org LocalBusiness -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "CleaningService",
      "name": "Baldonedo Nettoyage",
      "image": "https://www.baldonedo.com/assets/images/logo-baldonedo.png",
      "url": "https://www.baldonedo.com",
      "telephone": "+33148531061",
      "email": "contact@baldonedo.com",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "61 Avenue de la Victoire",
        "addressLocality": "Orly",
        "postalCode": "94310",
        "addressCountry": "FR"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 48.7436,
        "longitude": 2.4009
      },
      "areaServed": ["Paris", "Orly", "Créteil", "Rungis", "Vitry-sur-Seine", "Ivry-sur-Seine", "Thiais", "Villejuif", "Choisy-le-Roi"],
      "priceRange": "€€",
      "openingHours": "Mo-Sa 07:00-20:00"
    }
    </script>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?= $base ?>assets/images/logo-baldonedo.png">
</head>
<body class="page-<?= htmlspecialchars($page) ?>">
