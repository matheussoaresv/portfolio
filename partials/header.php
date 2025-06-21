<?php
$manifestPath = dirname(__DIR__) . '/dist/.vite/manifest.json';
$manifest = json_decode(file_get_contents($manifestPath), true);

$entry = 'assets/js/main.js';

$mainJs = '/portfolio/dist/' . $manifest[$entry]['file'];
$styleCss = isset($manifest[$entry]['css']) ? '/portfolio/dist/' . $manifest[$entry]['css'][0] : null;
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfólio para Landing Pages">
    <title>Dev Hazard - Portfólio</title>

    <!-- Swiper CSS  -->
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/swiper@11.2.8/swiper-bundle.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link href="https://cdn.jsdelivr.net/npm/swiper@11.2.8/swiper-bundle.min.css" rel="stylesheet">
    </noscript>

    <!-- Google Fonts otimizado -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Montserrat:wght@400;600;700&display=swap">

    <?php if ($styleCss): ?>
        <link rel="stylesheet" href="<?= $styleCss ?>">
    <?php endif; ?>

</head>

<body>
    <header id="site-header" class="py-3">
        <nav class="navbar navbar-expand-lg">
            <div class="container-lg">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav gap-4">
                        <li class="nav-item d-flex align-items-center">
                            <svg class="me-3" width="16" height="16" fill="currentColor" aria-hidden="true">
                                <use xlink:href="#icon-home"></use>
                            </svg>
                            <a class="nav-link active" aria-current="page" href="#hero">Inicio</a>
                        </li>
                        <li class="nav-item d-flex align-items-center">
                            <svg class="me-3" width="16" height="16" fill="currentColor" aria-hidden="true">
                                <use xlink:href="#icon-images"></use>
                            </svg>
                            <a class="nav-link " href="#projetos">Projetos</a>
                        </li>
                        <li class="nav-item d-flex align-items-center">
                            <svg class="me-3" width="16" height="16" fill="currentColor" aria-hidden="true">
                                <use xlink:href="#icon-user"></use>
                            </svg>
                            <a class="nav-link" href="#especialidade">Sobre</a>
                        </li>
                        <li class="nav-item d-flex align-items-center">
                            <svg class="me-3" width="16" height="16" fill="currentColor" aria-hidden="true">
                                <use xlink:href="#icon-phone"></use>
                            </svg>
                            <a class="nav-link" href="#contato">Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>