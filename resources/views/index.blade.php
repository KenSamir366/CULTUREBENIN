<!doctype html>
<html lang="fr" data-bs-theme="dark">
  <!--begin::Head-->
  <head>
    <link rel="stylesheet" href="{{ secure_asset('AdminLTE/css/adminlte.css') }}">
    <script src="{{ secure_asset('AdminLTE/js/adminlte.js') }}"></script>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Culture Benin | Dashboard Futuriste</title>
    
    <!--begin::Accessibility Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
    <meta name="color-scheme" content="light dark" />
    <meta name="theme-color" content="#00d4ff" media="(prefers-color-scheme: light)" />
    <meta name="theme-color" content="#0a0a0a" media="(prefers-color-scheme: dark)" />
    <!--end::Accessibility Meta Tags-->
    
    <!--begin::Primary Meta Tags-->
    <meta name="title" content="Culture Benin | Plateforme Culturelle Futuriste" />
    <meta name="author" content="Culture Benin" />
    <meta name="description" content="Plateforme de partage et de découverte de la culture béninoise - Interface Futuriste" />
    <!--end::Primary Meta Tags-->
    
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;700&family=Exo+2:wght@300;400;500;600&display=swap" rel="stylesheet">
    <!--end::Fonts-->
    
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/styles/overlayscrollbars.min.css" />
    <!--end::Third Party Plugin(OverlayScrollbars)-->
    
    <!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" />
    <!--end::Third Party Plugin(Bootstrap Icons)-->
    
    <!--begin::Third Party Plugin(Animate.css)-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!--end::Third Party Plugin(Animate.css)-->
    
    <!-- ApexCharts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css" />
    
    <!-- jsvectormap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/css/jsvectormap.min.css" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])


    
    <style>
      :root {
        --futur-primary: #00d4ff;
        --futur-secondary: #7b61ff;
        --futur-accent: #00ff88;
        --futur-warning: #ffaa00;
        --futur-danger: #ff2e63;
        --futur-dark: #0a0a0a;
        --futur-darker: #050505;
        --futur-card: rgba(255, 255, 255, 0.05);
        --futur-glass: rgba(255, 255, 255, 0.1);
        --futur-glow: 0 0 20px rgba(0, 212, 255, 0.3);
      }

      [data-bs-theme="light"] {
        --futur-dark: #ffffff;
        --futur-darker: #f8f9fa;
        --futur-card: rgba(0, 0, 0, 0.03);
        --futur-glass: rgba(0, 0, 0, 0.05);
      }

      /* Styles Futuristes */
      body {
        background: linear-gradient(135deg, var(--futur-darker) 0%, var(--futur-dark) 100%);
        font-family: 'Exo 2', 'Source Sans 3', sans-serif;
        overflow-x: hidden;
      }

      .futur-gradient {
        background: linear-gradient(135deg, var(--futur-primary) 0%, var(--futur-secondary) 100%);
      }

      .futur-glow {
        box-shadow: var(--futur-glow);
      }

      .glass-effect {
        background: var(--futur-glass);
        backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.1);
      }

      .futur-card {
        background: var(--futur-card);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 16px;
        backdrop-filter: blur(20px);
        transition: all 0.3s ease;
      }

      .futur-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0, 212, 255, 0.2);
      }

      /* Sidebar Futuriste */
      .app-sidebar {
        background: linear-gradient(180deg, var(--futur-darker) 0%, rgba(10, 10, 10, 0.95) 100%) !important;
        border-right: 1px solid rgba(0, 212, 255, 0.2);
      }

      .sidebar-brand {
        background: rgba(0, 212, 255, 0.1);
        border-bottom: 1px solid rgba(0, 212, 255, 0.2);
      }

      .brand-text {
        font-family: 'Orbitron', sans-serif;
        font-weight: 700;
        background: linear-gradient(135deg, var(--futur-primary) 0%, var(--futur-accent) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        text-shadow: 0 0 30px rgba(0, 212, 255, 0.5);
      }

      .nav-link {
        border-radius: 12px;
        margin: 4px 8px;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
      }

      .nav-link::before {
        content: '';
        position: absolute;
        left: -100%;
        top: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(0, 212, 255, 0.2), transparent);
        transition: left 0.5s ease;
      }

      .nav-link:hover::before {
        left: 100%;
      }

      .nav-link.active {
        background: linear-gradient(135deg, var(--futur-primary) 0%, var(--futur-secondary) 100%);
        box-shadow: var(--futur-glow);
      }

      /* Header Futuriste */
      .app-header {
        background: var(--futur-card) !important;
        backdrop-filter: blur(20px);
        border-bottom: 1px solid rgba(0, 212, 255, 0.2);
      }

      .navbar-nav .nav-link {
        border-radius: 8px;
        margin: 0 2px;
      }

      /* Widgets Futuristes */
      .small-box {
        border-radius: 16px;
        border: 1px solid rgba(255, 255, 255, 0.1);
        background: var(--futur-card) !important;
        backdrop-filter: blur(20px);
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
      }

      .small-box::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 3px;
        background: linear-gradient(90deg, var(--futur-primary), var(--futur-accent));
      }

      .small-box:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0, 212, 255, 0.3);
      }

      .small-box .inner h3 {
        font-family: 'Orbitron', sans-serif;
        font-size: 2.2rem;
        font-weight: 700;
        background: linear-gradient(135deg, var(--futur-primary) 0%, var(--futur-accent) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
      }

      /* Cartes améliorées */
      .card {
        border-radius: 16px;
        border: 1px solid rgba(255, 255, 255, 0.1);
        background: var(--futur-card);
        backdrop-filter: blur(20px);
      }

      .card-header {
        background: rgba(0, 212, 255, 0.05) !important;
        border-bottom: 1px solid rgba(0, 212, 255, 0.2);
        border-radius: 16px 16px 0 0 !important;
        font-family: 'Orbitron', sans-serif;
        font-weight: 600;
      }

      /* Boutons Futuristes */
      .btn-futur {
        background: linear-gradient(135deg, var(--futur-primary) 0%, var(--futur-secondary) 100%);
        border: none;
        border-radius: 8px;
        color: white;
        font-weight: 600;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
      }

      .btn-futur::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: left 0.5s ease;
      }

      .btn-futur:hover::before {
        left: 100%;
      }

      .btn-futur:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 212, 255, 0.4);
      }

      /* Animations personnalisées */
      @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
      }

      @keyframes glow {
        0%, 100% { box-shadow: 0 0 20px rgba(0, 212, 255, 0.3); }
        50% { box-shadow: 0 0 30px rgba(0, 212, 255, 0.6); }
      }

      .float-animation {
        animation: float 3s ease-in-out infinite;
      }

      .glow-animation {
        animation: glow 2s ease-in-out infinite;
      }

      /* Mode sombre/clair switch */
      .theme-switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 30px;
      }

      .theme-switch input {
        opacity: 0;
        width: 0;
        height: 0;
      }

      .theme-slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, var(--futur-primary) 0%, var(--futur-secondary) 100%);
        transition: .4s;
        border-radius: 34px;
      }

      .theme-slider:before {
        position: absolute;
        content: "";
        height: 22px;
        width: 22px;
        left: 4px;
        bottom: 4px;
        background: white;
        transition: .4s;
        border-radius: 50%;
      }

      input:checked + .theme-slider:before {
        transform: translateX(30px);
      }

      /* Scrollbar personnalisé */
      ::-webkit-scrollbar {
        width: 8px;
      }

      ::-webkit-scrollbar-track {
        background: var(--futur-darker);
      }

      ::-webkit-scrollbar-thumb {
        background: linear-gradient(135deg, var(--futur-primary) 0%, var(--futur-secondary) 100%);
        border-radius: 4px;
      }

      ::-webkit-scrollbar-thumb:hover {
        background: linear-gradient(135deg, var(--futur-accent) 0%, var(--futur-primary) 100%);
      }
    </style>
  </head>
  <!--end::Head-->

  <!--begin::Body-->
  <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
      <!--begin::Header-->
      <nav class="app-header navbar navbar-expand bg-body">
        <div class="container-fluid">
          <!--begin::Start Navbar Links-->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                <i class="bi bi-list"></i>
              </a>
            </li>
            <li class="nav-item d-none d-md-block">
              <a href="#" class="nav-link">
                <i class="bi bi-house-door"></i> Accueil
              </a>
            </li>
          </ul>

          <!--begin::End Navbar Links-->
          <ul class="navbar-nav ms-auto">
            <!-- Switch Thème -->
            <li class="nav-item align-self-center me-3">
              <label class="theme-switch">
                <input type="checkbox" id="themeToggle">
                <span class="theme-slider"></span>
              </label>
            </li>

            <!-- Recherche -->
            <li class="nav-item">
              <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                <i class="bi bi-search"></i>
              </a>
            </li>

            <!-- Messages -->
            <li class="nav-item dropdown">
              <a class="nav-link" data-bs-toggle="dropdown" href="#">
                <i class="bi bi-chat-text"></i>
                <span class="navbar-badge badge bg-futur-danger">3</span>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end glass-effect">
                <!-- Messages dropdown content -->
              </div>
            </li>

            <!-- Notifications -->
            <li class="nav-item dropdown">
              <a class="nav-link" data-bs-toggle="dropdown" href="#">
                <i class="bi bi-bell-fill"></i>
                <span class="navbar-badge badge bg-futur-warning">8</span>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end glass-effect">
                <!-- Notifications dropdown content -->
              </div>
            </li>

            <!-- Plein écran -->
            <li class="nav-item">
              <a class="nav-link" href="#" data-lte-toggle="fullscreen">
                <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i>
              </a>
            </li>

            <!-- Menu Utilisateur -->
            <li class="nav-item dropdown user-menu">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <img src="./assets/img/user2-160x160.jpg" class="user-image rounded-circle shadow" alt="User Image" />
                <span class="d-none d-md-inline">Admin Culture</span>
              </a>
              <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end glass-effect">
                <li class="user-header text-white futur-gradient">
                  <img src="./assets/img/user2-160x160.jpg" class="rounded-circle shadow" alt="User Image" />
                  <p>
                    Admin Culture Benin
                    <small>Membre depuis Nov. 2024</small>
                  </p>
                </li>
                <li class="user-footer">
                  <a href="#" class="btn btn-default btn-flat">Profil</a>
                  <a href="#" class="btn btn-default btn-flat float-end">Déconnexion</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
      <!--end::Header-->

      <!--begin::Sidebar-->
      <aside class="app-sidebar bg-body-secondary shadow">
        <div class="sidebar-brand">
          <a href="./index.html" class="brand-link">
            <img src="./assets/img/culture-benin-logo.png" alt="Culture Benin Logo" class="brand-image opacity-75 shadow float-animation" />
            <span class="brand-text fw-light">CULTURE BENIN</span>
          </a>
        </div>

        <div class="sidebar-wrapper">
          <nav class="mt-2">
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="navigation">
              <!-- Dashboard -->
              <li class="nav-item menu-open">
                <a href="#" class="nav-link active">
                  <i class="nav-icon bi bi-speedometer2"></i>
                  <p>DASHBOARD</p>
                </a>
              </li>

              <!-- Gestion des contenus -->
              <li class="nav-item">
                <a href="{{route('contenus.index')}}" class="nav-link">
                  <i class="nav-icon bi bi-file-earmark-richtext"></i>
                  <p>GESTION DES CONTENUS</p>
                  <i class="nav-arrow bi bi-chevron-right"></i>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('contenus.index') }}" class="nav-link">
                      <i class="nav-icon bi bi-file-text"></i>
                      <p>Contenus</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('typecontenus.index') }}" class="nav-link">
                      <i class="nav-icon bi bi-tags"></i>
                      <p>Types de contenus</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('commentaires.index') }}" class="nav-link">
                      <i class="nav-icon bi bi-chat-dots"></i>
                      <p>Commentaires</p>
                    </a>
                  </li>
                </ul>
              </li>

              <!-- Gestion des médias -->
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-collection-play"></i>
                  <p>GESTION DES MÉDIAS</p>
                  <i class="nav-arrow bi bi-chevron-right"></i>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('medias.index') }}" class="nav-link">
                      <i class="nav-icon bi bi-image"></i>
                      <p>Médias</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('typemedias.index') }}" class="nav-link">
                      <i class="nav-icon bi bi-file-earmark-medical"></i>
                      <p>Types de médias</p>
                    </a>
                  </li>
                </ul>
              </li>

              <!-- Utilisateurs et rôles -->
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-people-fill"></i>
                  <p>UTILISATEURS & RÔLES</p>
                  <i class="nav-arrow bi bi-chevron-right"></i>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('users.index') }}" class="nav-link">
                      <i class="nav-icon bi bi-person-circle"></i>
                      <p>Utilisateurs</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('roles.index') }}" class="nav-link">
                      <i class="nav-icon bi bi-shield-check"></i>
                      <p>Rôles</p>
                    </a>
                  </li>
                </ul>
              </li>

              <!-- Localisation -->
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-globe-americas"></i>
                  <p>LOCALISATION</p>
                  <i class="nav-arrow bi bi-chevron-right"></i>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('langues.index') }}" class="nav-link">
                      <i class="nav-icon bi bi-translate"></i>
                      <p>Langues</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('regions.index') }}" class="nav-link">
                      <i class="nav-icon bi bi-geo-alt"></i>
                      <p>Régions</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('parlers.index') }}" class="nav-link">
                      <i class="nav-icon bi bi-mic"></i>
                      <p>Parler</p>
                    </a>
                  </li>
                </ul>
              </li>

              <!-- Rapports -->
              <li class="nav-header mt-4">ANALYSE & RAPPORTS</li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-graph-up-arrow"></i>
                  <p>Statistiques Avancées</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-flag"></i>
                  <p>Signalements</p>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </aside>
      <!--end::Sidebar-->

      <!--begin::App Main-->
      <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-6">
                <h3 class="mb-0">
                  <i class="bi bi-speedometer2 me-2"></i>TABLEAU DE BORD
                </h3>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#"><i class="bi bi-house-door"></i> Accueil</a></li>
                  <li class="breadcrumb-item active">Dashboard</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--end::App Content Header-->

        <!--begin::App Content-->
        <div class="app-content">
          <div class="container-fluid">
            <!-- Métriques Principales -->
            <div class="row">
              <div class="col-lg-3 col-6">
                <div class="small-box">
                  <div class="inner">
                    <h3>1</h3>
                    <p>CONTENUS PUBLIÉS</p>
                  </div>
                  <i class="small-box-icon bi bi-file-earmark-text"></i>
                  <a href="#" class="small-box-footer">
                    ANALYSER <i class="bi bi-arrow-right"></i>
                  </a>
                </div>
              </div>

              <div class="col-lg-3 col-6">
                <div class="small-box">
                  <div class="inner">
                    <h3>3</h3>
                    <p>UTILISATEURS ACTIFS</p>
                  </div>
                  <i class="small-box-icon bi bi-people-fill"></i>
                  <a href="#" class="small-box-footer">
                    VOIR <i class="bi bi-arrow-right"></i>
                  </a>
                </div>
              </div>

              <div class="col-lg-3 col-6">
                <div class="small-box">
                  <div class="inner">
                    <h3>2</h3>
                    <p>COMMENTAIRES</p>
                  </div>
                  <i class="small-box-icon bi bi-chat-dots"></i>
                  <a href="#" class="small-box-footer">
                    MODÉRER <i class="bi bi-arrow-right"></i>
                  </a>
                </div>
              </div>

              <div class="col-lg-3 col-6">
                <div class="small-box">
                  <div class="inner">
                    <h3>0</h3>
                    <p>SIGNALEMENT(S)</p>
                  </div>
                  <i class="small-box-icon bi bi-flag"></i>
                  <a href="#" class="small-box-footer">
                    TRAITER <i class="bi bi-arrow-right"></i>
                  </a>
                </div>
              </div>
            </div>

            <!-- Graphiques et Contenu -->
            <div class="row">
              <div class="col-lg-8">
                <div class="card futur-card">
                  <div class="card-header">
                    <h3 class="card-title"><i class="bi bi-graph-up me-2"></i>ACTIVITÉ RÉCENTE</h3>
                  </div>
                  <div class="card-body">
                    <div id="revenue-chart" style="min-height: 300px;"></div>
                  </div>
                </div>

                <div class="card futur-card mt-4">
                  <div class="card-header">
                    <h3 class="card-title"><i class="bi bi-clock-history me-2"></i>CONTENUS RÉCENTS</h3>
                  </div>
                  <div class="card-body">
                    <!-- Liste des contenus récents -->
                    <div class="timeline">
                      <!-- Items de timeline -->
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="card futur-card">
                  <div class="card-header">
                    <h3 class="card-title"><i class="bi bi-map me-2"></i>RÉPARTITION GÉO</h3>
                  </div>
                  <div class="card-body">
                    <div id="world-map" style="height: 200px;"></div>
                  </div>
                </div>

                <div class="card futur-card mt-4">
                  <div class="card-header">
                    <h3 class="card-title"><i class="bi bi-activity me-2"></i>STATUTS RAPIDES</h3>
                  </div>
                  <div class="card-body">
                    <!-- Mini stats -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--end::App Content-->
      </main>
      <!--end::App Main-->

      <!--begin::Footer-->
      <footer class="app-footer glass-effect">
        <strong>CULTURE BENIN © 2024 - PLATEFORME FUTURISTE</strong>
        <div class="float-end d-none d-sm-inline">v2.0</div>
      </footer>
      <!--end::Footer-->
    </div>
    <!--end::App Wrapper-->

    <!-- Scripts JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/browser/overlayscrollbars.browser.es6.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js"></script>
    <script src="{{ secure_asset('AdminLTE/js/adminlte.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/js/jsvectormap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/maps/world.js"></script>

    <script>
      // Gestion du thème
      const themeToggle = document.getElementById('themeToggle');
      const htmlElement = document.documentElement;

      themeToggle.addEventListener('change', function() {
        if (this.checked) {
          htmlElement.setAttribute('data-bs-theme', 'light');
        } else {
          htmlElement.setAttribute('data-bs-theme', 'dark');
        }
      });

      // Graphique principal
      const salesChartOptions = {
        series: [{
          name: 'Publications',
          data: [28, 48, 40, 19, 86, 27, 90, 45, 65, 82, 56, 45]
        }, {
          name: 'Commentaires',
          data: [65, 59, 80, 81, 56, 55, 40, 62, 48, 72, 53, 61]
        }],
        chart: {
          height: 300,
          type: 'area',
          toolbar: { show: false },
          foreColor: '#ccc'
        },
        colors: ['#00d4ff', '#7b61ff'],
        dataLabels: { enabled: false },
        stroke: { curve: 'smooth', width: 3 },
        fill: {
          type: 'gradient',
          gradient: {
            shadeIntensity: 1,
            opacityFrom: 0.7,
            opacityTo: 0.1,
            stops: [0, 90, 100]
          }
        },
        xaxis: {
          type: 'category',
          categories: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Jun', 'Jul', 'Aoû', 'Sep', 'Oct', 'Nov', 'Déc']
        },
        tooltip: { theme: 'dark' },
        grid: { borderColor: 'rgba(255, 255, 255, 0.1)' }
      };

      const salesChart = new ApexCharts(document.querySelector('#revenue-chart'), salesChartOptions);
      salesChart.render();

      // Carte mondiale
      new jsVectorMap({
        selector: '#world-map',
        map: 'world',
        backgroundColor: 'transparent',
        regionStyle: {
          initial: { fill: 'rgba(255, 255, 255, 0.1)' },
          hover: { fill: '#00d4ff' }
        }
      });

      // Animation au scroll
      const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
      };

      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('animate__animated', 'animate__fadeInUp');
          }
        });
      }, observerOptions);

      document.querySelectorAll('.small-box, .futur-card').forEach((el) => {
        observer.observe(el);
      });
    </script>
  </body>
  <!--end::Body-->
</html>
