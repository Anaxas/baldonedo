<?php
$page = $page ?? 'home';
$titles = [
    'home'    => 'Baldonedo Nettoyage — Entreprise de nettoyage professionnel',
    'contact' => 'Contact — Baldonedo Nettoyage',
];
$title = $titles[$page] ?? 'Baldonedo Nettoyage';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Baldonedo Nettoyage — Entreprise de nettoyage professionnel à Orly. Bureaux, immeubles, maisons et appartements.">
    <title><?= htmlspecialchars($title) ?></title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:ital,wght@0,300;0,400;0,500;0,700;1,400&family=Oswald:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?= $page === 'contact' ? '../' : '' ?>assets/css/style.css">

    <!-- Favicon placeholder -->
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>🧹</text></svg>">
</head>
<body class="page-<?= htmlspecialchars($page) ?>">
