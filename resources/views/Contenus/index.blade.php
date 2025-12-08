<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contenus - Culture Bénin</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <style>
        /* COULEURS MODIFIÉES POUR MEILLEURE LISIBILITÉ */
        body {
            background-color: #0f172a;
            color: #e2e8f0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
        }
        .header-bg {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            color: white;
            padding: 2.5rem 0;
            border-radius: 0 0 25px 25px;
            box-shadow: 0 8px 32px rgba(16, 185, 129, 0.4);
            position: relative;
            overflow: hidden;
        }
        .header-bg::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><path fill="rgba(255,255,255,0.05)" d="M0,0 L100,0 L100,100 Z"/></svg>');
            background-size: cover;
        }
        .card {
            background: rgba(30, 41, 59, 0.9);
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 16px;
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
            overflow: hidden;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3);
            border-color: #10b981;
        }
        .btn-primary {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            border: none;
            border-radius: 25px;
            padding: 0.6rem 1.5rem;
            font-weight: 600;
            transition: all 0.3s ease;
            color: white;
        }
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 16px rgba(16, 185, 129, 0.4);
            color: white;
        }
        .btn-create {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            border-radius: 25px;
            padding: 0.7rem 2rem;
            font-weight: bold;
            transition: all 0.3s ease;
        }
        .btn-create:hover {
            background: linear-gradient(135deg, #5a6fd8 0%, #6a4a9a 100%);
            transform: translateY(-2px);
            box-shadow: 0 8px 16px rgba(102, 126, 234, 0.4);
            color: white;
        }
        .filter-btn {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: #d1d5db;
            border-radius: 20px;
            padding: 0.4rem 1rem;
            margin: 0.2rem;
            transition: all 0.3s ease;
        }
        .filter-btn:hover, .filter-btn.active {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            color: white;
            border-color: transparent;
        }
        .stats-card {
            background: linear-gradient(135deg, rgba(30, 41, 59, 0.9), rgba(15, 23, 42, 0.9));
            border: 1px solid rgba(16, 185, 129, 0.3);
            border-radius: 12px;
            padding: 1.5rem;
            text-align: center;
            transition: all 0.3s ease;
        }
        .stats-card:hover {
            border-color: #10b981;
            transform: translateY(-3px);
        }
        .stats-card h3 {
            font-size: 2.2rem;
            font-weight: bold;
            background: linear-gradient(135deg, #10b981, #059669);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 0.5rem;
        }
        .stats-card p {
            color: #a5b4cb;
            margin-bottom: 0;
            font-weight: 500;
        }
        .table-container {
            background: rgba(30, 41, 59, 0.9);
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 16px;
            backdrop-filter: blur(10px);
            overflow: hidden;
        }
        .dataTable {
            color: #f1f5f9;
            margin: 0;
        }
        .dataTable thead th {
            background: linear-gradient(135deg, #1e293b, #334155);
            color: #b8c2d9;
            border-bottom: 2px solid rgba(255, 255, 255, 0.15);
            font-weight: 700;
            text-transform: uppercase;
            font-size: 0.85rem;
            letter-spacing: 0.5px;
        }
        .dataTable tbody tr {
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            transition: all 0.3s ease;
        }
        .dataTable tbody tr:hover {
            background: rgba(255, 255, 255, 0.08);
            transform: scale(1.002);
        }
        .dataTable tbody td {
            padding: 1rem;
            vertical-align: middle;
        }
        .badge {
            padding: 0.35rem 0.75rem;
            font-weight: 600;
            font-size: 0.75rem;
            border-radius: 20px;
        }
        .badge-published {
            background: linear-gradient(135deg, #10b981, #059669);
            color: white;
        }
        .badge-draft {
            background: linear-gradient(135deg, #f59e0b, #d97706);
            color: white;
        }
        .badge-pending {
            background: linear-gradient(135deg, #6366f1, #4f46e5);
            color: white;
        }
        .badge-archived {
            background: linear-gradient(135deg, #6b7280, #4b5563);
            color: white;
        }
        .type-badge {
            background: rgba(59, 130, 246, 0.25);
            border: 1px solid rgba(59, 130, 246, 0.4);
            color: #93c5fd;
            padding: 0.25rem 0.75rem;
            border-radius: 12px;
            font-size: 0.75rem;
            font-weight: 500;
        }
        .pagination .page-link {
            background: rgba(30, 41, 59, 0.9);
            border: 1px solid rgba(255, 255, 255, 0.15);
            color: #cbd5e1;
        }
        .pagination .page-item.active .page-link {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            border-color: transparent;
            color: white;
        }
        .search-box {
            background: rgba(30, 41, 59, 0.9);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 25px;
            padding: 0.5rem 1rem;
        }
        .search-box input {
            background: transparent;
            border: none;
            color: #f1f5f9;
            width: 100%;
        }
        .search-box input:focus {
            outline: none;
            box-shadow: none;
        }
        .dropdown-menu {
            background: rgba(30, 41, 59, 0.95);
            border: 1px solid rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(20px);
        }
        .dropdown-item {
            color: #d1d5db;
        }
        .dropdown-item:hover {
            background: rgba(16, 185, 129, 0.3);
            color: white;
        }
        .text-muted {
            color: #94a3b8 !important;
        }
        .text-primary {
            color: #60a5fa !important;
            font-weight: 600;
        }
        .text-success {
            color: #34d399 !important;
        }
        .text-warning {
            color: #fbbf24 !important;
        }
        .text-danger {
            color: #f87171 !important;
        }
        .btn-outline-warning {
            color: #fbbf24;
            border-color: #fbbf24;
        }
        .btn-outline-warning:hover {
            background-color: #fbbf24;
            border-color: #fbbf24;
            color: #1f2937;
        }
        .btn-outline-danger {
            color: #f87171;
            border-color: #f87171;
        }
        .btn-outline-danger:hover {
            background-color: #f87171;
            border-color: #f87171;
            color: #1f2937;
        }
        .btn-outline-primary {
            color: #60a5fa;
            border-color: #60a5fa;
        }
        .btn-outline-primary:hover {
            background-color: #60a5fa;
            border-color: #60a5fa;
            color: #1f2937;
        }
        .btn-outline-success {
            color: #34d399;
            border-color: #34d399;
        }
        .btn-outline-success:hover {
            background-color: #34d399;
            border-color: #34d399;
            color: #1f2937;
        }
        .nav-link {
            color: #d1d5db;
            font-weight: 500;
        }
        .nav-link:hover, .nav-link.active {
            color: white;
            background-color: rgba(255, 255, 255, 0.1);
        }
        .footer-bg {
            background: rgba(15, 23, 42, 0.95);
            border-top: 1px solid rgba(255, 255, 255, 0.15);
        }
        .alert-success {
            border-radius: 12px;
            border: 1px solid rgba(72, 187, 120, 0.3);
            background: rgba(72, 187, 120, 0.15);
            color: #a7f3d0;
            backdrop-filter: blur(10px);
        }
        .no-data {
            text-align: center;
            padding: 3rem 0;
        }
        .no-data i {
            font-size: 4rem;
            margin-bottom: 1rem;
            background: linear-gradient(135deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .content-actions {
            display: flex;
            gap: 0.5rem;
        }
        .content-title {
            font-weight: 700;
            color: #f8fafc;
            font-size: 1.05rem;
        }
        .content-author {
            font-size: 0.85rem;
            color: #a5b4cb;
            font-weight: 500;
        }
        .content-date {
            font-size: 0.85rem;
            color: #8b9bb4;
            font-weight: 500;
        }
        .table-responsive {
            border-radius: 16px;
            overflow: hidden;
        }
        .status-filter {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
        }
        .form-control-dark {
            background-color: rgba(255, 255, 255, 0.1);
            border-color: rgba(255, 255, 255, 0.25);
            color: #f1f5f9;
        }
        .form-control-dark:focus {
            background-color: rgba(255, 255, 255, 0.15);
            border-color: #10b981;
            color: #f1f5f9;
            box-shadow: 0 0 0 0.25rem rgba(16, 185, 129, 0.25);
        }
        
        /* NOUVELLES COULEURS AJOUTÉES */
        .text-light-blue {
            color: #93c5fd !important;
        }
        .text-light-gray {
            color: #cbd5e1 !important;
        }
        .text-bright-white {
            color: #f8fafc !important;
        }
        .text-accent-green {
            color: #34d399 !important;
        }
        .text-accent-blue {
            color: #60a5fa !important;
        }
        
        /* Amélioration de la lisibilité des titres */
        h1, h2, h3, h4, h5, h6 {
            color: #f8fafc;
            font-weight: 700;
        }
        
        /* Amélioration des liens */
        a {
            color: #60a5fa;
            text-decoration: none;
            transition: color 0.2s ease;
        }
        
        a:hover {
            color: #93c5fd;
        }
        
        /* Amélioration du texte dans les cartes stats */
        .stats-card h3 {
            font-weight: 800;
        }
        
        /* Texte plus contrasté pour les boutons inactifs */
        .filter-btn:not(.active) {
            color: #a5b4cb;
        }
        
        /* Amélioration de la visibilité des badges */
        .badge-light {
            background-color: rgba(255, 255, 255, 0.15);
            color: #f1f5f9;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">
                <i class="fas fa-globe-africa me-2"></i>Culture_Benin
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">
                            <i class="fas fa-home me-1"></i>Accueil
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}">
                            <i class="fas fa-tachometer-alt me-1"></i>Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('medias.index') }}">
                            <i class="fas fa-photo-video me-1"></i>Médias
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('contenus.index') }}">
                            <i class="fas fa-file-alt me-1"></i>Contenus
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('langues.index') }}">
                            <i class="fas fa-language me-1"></i>Langues
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            <i class="fas fa-user-circle me-1"></i>Menu Admin
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('users.index') }}"><i class="fas fa-users me-2"></i>Utilisateurs</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-cog me-2"></i>Paramètres</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                @if(auth()->check())
                                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="dropdown-item">
                                        <i class="fas fa-sign-out-alt me-2"></i>Déconnexion
                                    </button>
                                </form>
                                @else
                                <a class="dropdown-item" href="{{ route('login') }}">
                                    <i class="fas fa-sign-in-alt me-2"></i>Connexion
                                </a>
                                @endif
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- En-tête principal -->
    <div class="header-bg mb-5">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold mb-3">
                        <i class="fas fa-file-alt me-3"></i>Gestion des Contenus
                    </h1>
                    <p class="lead mb-4 text-light-blue">Explorez et gérez tous les contenus culturels du Bénin</p>
                    <div class="d-flex flex-wrap gap-2">
                        <span class="badge badge-light px-3 py-2">
                            <i class="fas fa-newspaper me-1"></i> Articles
                        </span>
                        <span class="badge badge-light px-3 py-2">
                            <i class="fas fa-history me-1"></i> Historiques
                        </span>
                        <span class="badge badge-light px-3 py-2">
                            <i class="fas fa-landmark me-1"></i> Patrimoine
                        </span>
                        <span class="badge badge-light px-3 py-2">
                            <i class="fas fa-users me-1"></i> Communautés
                        </span>
                    </div>
                </div>
                <div class="col-lg-4 text-end">
                    <a href="{{ route('contenus.create') }}" class="btn btn-create">
                        <i class="fas fa-plus-circle me-2"></i>Nouveau Contenu
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- Messages de succès -->
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                <i class="fas fa-check-circle me-2"></i>
                {{ session('success') }}
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
                <i class="fas fa-exclamation-circle me-2"></i>
                {{ session('error') }}
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!-- Statistiques -->
        <div class="row mb-5">
            <div class="col-md-3 mb-4">
                <div class="stats-card">
                    <i class="fas fa-file-alt fa-2x mb-3" style="color: #10b981;"></i>
                    <h3>{{ $contenus->total() }}</h3>
                    <p class="text-light-gray">Total Contenus</p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="stats-card">
                    <i class="fas fa-check-circle fa-2x mb-3" style="color: #34d399;"></i>
                    <h3>{{ $contenus->where('statut', 'publié')->count() }}</h3>
                    <p class="text-light-gray">Publiés</p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="stats-card">
                    <i class="fas fa-edit fa-2x mb-3" style="color: #f59e0b;"></i>
                    <h3>{{ $contenus->where('statut', 'brouillon')->count() }}</h3>
                    <p class="text-light-gray">Brouillons</p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="stats-card">
                    <i class="fas fa-users fa-2x mb-3" style="color: #6366f1;"></i>
                    <h3>{{ $contenus->pluck('auteur_id')->unique()->count() }}</h3>
                    <p class="text-light-gray">Auteurs</p>
                </div>
            </div>
        </div>

        <!-- Barre de recherche et filtres -->
        <div class="row mb-4">
            <div class="col-md-6 mb-3">
                <div class="search-box">
                    <i class="fas fa-search me-2 text-light-blue"></i>
                    <input type="text" id="searchInput" placeholder="Rechercher par titre, description, auteur..." class="form-control-dark">
                </div>
            </div>
            <div class="col-md-6">
                <div class="status-filter d-flex flex-wrap justify-content-end">
                    <button class="filter-btn active" data-filter="all">
                        <i class="fas fa-layer-group me-1"></i>Tous
                    </button>
                    <button class="filter-btn" data-filter="publié">
                        <i class="fas fa-check-circle me-1"></i>Publiés
                    </button>
                    <button class="filter-btn" data-filter="brouillon">
                        <i class="fas fa-edit me-1"></i>Brouillons
                    </button>
                    <button class="filter-btn" data-filter="en_attente">
                        <i class="fas fa-clock me-1"></i>En attente
                    </button>
                    <button class="filter-btn" data-filter="archivé">
                        <i class="fas fa-archive me-1"></i>Archivés
                    </button>
                </div>
            </div>
        </div>

        <!-- Tableau des contenus -->
        <div class="table-container p-3 mb-5">
            <div class="table-responsive">
                <table class="table dataTable table-hover" id="contenusTable">
                    <thead>
                        <tr>
                            <th width="50">ID</th>
                            <th>Titre</th>
                            <th width="150">Type</th>
                            <th width="150">Auteur</th>
                            <th width="120">Région</th>
                            <th width="120">Statut</th>
                            <th width="140">Date Création</th>
                            <th width="180">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($contenus as $contenu)
                        <tr class="content-row" data-statut="{{ $contenu->statut }}">
                            <td>
                                <strong class="text-primary">#{{ $contenu->id }}</strong>
                            </td>
                            <td>
                                <div class="content-title">{{ Str::limit($contenu->titre, 50) }}</div>
                                @if($contenu->description)
                                <small class="text-light-blue d-block mt-1">{{ Str::limit($contenu->description, 70) }}</small>
                                @endif
                            </td>
                            <td>
                                @if($contenu->typecontenu)
                                <span class="type-badge d-inline-flex align-items-center">
                                    @php
                                        $icon = 'file-alt';
                                        switch($contenu->typecontenu->nom) {
                                            case 'Article': $icon = 'newspaper'; break;
                                            case 'Historique': $icon = 'history'; break;
                                            case 'Patrimoine': $icon = 'landmark'; break;
                                            case 'Document': $icon = 'file-pdf'; break;
                                            case 'Multimédia': $icon = 'photo-video'; break;
                                            case 'Recherche': $icon = 'search'; break;
                                        }
                                    @endphp
                                    <i class="fas fa-{{ $icon }} me-1"></i>
                                    {{ $contenu->typecontenu->nom }}
                                </span>
                                @else
                                <span class="text-light-blue">N/A</span>
                                @endif
                            </td>
                            <td>
                                <div class="content-author">
                                    <i class="fas fa-user me-1 text-light-blue"></i>
                                    @if($contenu->auteur)
                                        {{ $contenu->auteur->prenom }} {{ $contenu->auteur->nom }}
                                    @else
                                        <span class="text-light-blue">Anonyme</span>
                                    @endif
                                </div>
                            </td>
                            <td>
                                @if($contenu->region)
                                <span class="badge d-inline-flex align-items-center" style="background: rgba(59, 130, 246, 0.2); border: 1px solid rgba(59, 130, 246, 0.4); color: #93c5fd;">
                                    <i class="fas fa-map-marker-alt me-1"></i>
                                    {{ Str::limit($contenu->region->nom_regions, 15) }}
                                </span>
                                @else
                                <span class="text-light-blue">N/A</span>
                                @endif
                            </td>
                            <td>
                                @if($contenu->statut === 'publié')
                                    <span class="badge badge-published d-inline-flex align-items-center">
                                        <i class="fas fa-check-circle me-1"></i>Publié
                                    </span>
                                @elseif($contenu->statut === 'brouillon')
                                    <span class="badge badge-draft d-inline-flex align-items-center">
                                        <i class="fas fa-edit me-1"></i>Brouillon
                                    </span>
                                @elseif($contenu->statut === 'en_attente')
                                    <span class="badge badge-pending d-inline-flex align-items-center">
                                        <i class="fas fa-clock me-1"></i>En attente
                                    </span>
                                @elseif($contenu->statut === 'archivé')
                                    <span class="badge badge-archived d-inline-flex align-items-center">
                                        <i class="fas fa-archive me-1"></i>Archivé
                                    </span>
                                @else
                                    <span class="badge badge-secondary">
                                        {{ $contenu->statut }}
                                    </span>
                                @endif
                            </td>
                            <td>
                                <div class="content-date">
                                    <i class="fas fa-calendar-alt me-1 text-light-blue"></i>
                                    {{ $contenu->date_creation->format('d/m/Y') }}
                                </div>
                                <small class="text-light-blue">
                                    {{ $contenu->date_creation->format('H:i') }}
                                </small>
                            </td>
                            <td>
                                <div class="content-actions">
                                    <a href="{{ route('contenus.show', $contenu->id) }}" 
                                       class="btn btn-sm btn-outline-primary"
                                       data-bs-toggle="tooltip" 
                                       data-bs-placement="top"
                                       title="Voir le contenu">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('contenus.edit', $contenu->id) }}" 
                                       class="btn btn-sm btn-outline-warning"
                                       data-bs-toggle="tooltip" 
                                       data-bs-placement="top"
                                       title="Modifier">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('contenus.destroy', $contenu->id) }}" 
                                          method="POST" class="d-inline"
                                          onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce contenu ? Cette action est irréversible.')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                                class="btn btn-sm btn-outline-danger"
                                                data-bs-toggle="tooltip" 
                                                data-bs-placement="top"
                                                title="Supprimer">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                    @if($contenu->statut === 'brouillon')
                                    <form action="{{ route('contenus.update', $contenu->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="statut" value="publié">
                                        <button type="submit" 
                                                class="btn btn-sm btn-outline-success"
                                                data-bs-toggle="tooltip" 
                                                data-bs-placement="top"
                                                title="Publier">
                                            <i class="fas fa-paper-plane"></i>
                                        </button>
                                    </form>
                                    @endif
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8">
                                <div class="no-data">
                                    <i class="fas fa-file-alt"></i>
                                    <h4 class="text-light-gray mb-3">Aucun contenu trouvé</h4>
                                    <p class="text-light-blue mb-4">Commencez par créer votre premier contenu</p>
                                    <a href="{{ route('contenus.create') }}" class="btn btn-primary">
                                        <i class="fas fa-plus-circle me-2"></i>Créer un contenu
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            @if($contenus->hasPages())
            <div class="row mt-4">
                <div class="col-12">
                    <nav aria-label="Navigation des contenus">
                        <ul class="pagination justify-content-center mb-0">
                            @if($contenus->onFirstPage())
                            <li class="page-item disabled">
                                <span class="page-link">
                                    <i class="fas fa-chevron-left me-2"></i>Précédent
                                </span>
                            </li>
                            @else
                            <li class="page-item">
                                <a class="page-link" href="{{ $contenus->previousPageUrl() }}">
                                    <i class="fas fa-chevron-left me-2"></i>Précédent
                                </a>
                            </li>
                            @endif

                            @for($i = 1; $i <= $contenus->lastPage(); $i++)
                            <li class="page-item {{ $contenus->currentPage() == $i ? 'active' : '' }}">
                                <a class="page-link" href="{{ $contenus->url($i) }}">{{ $i }}</a>
                            </li>
                            @endfor

                            @if($contenus->hasMorePages())
                            <li class="page-item">
                                <a class="page-link" href="{{ $contenus->nextPageUrl() }}">
                                    Suivant<i class="fas fa-chevron-right ms-2"></i>
                                </a>
                            </li>
                            @else
                            <li class="page-item disabled">
                                <span class="page-link">
                                    Suivant<i class="fas fa-chevron-right ms-2"></i>
                                </span>
                            </li>
                            @endif
                        </ul>
                    </nav>
                </div>
            </div>
            @endif
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer-bg text-white py-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="text-bright-white">Culture_Benin</h5>
                    <p class="text-light-blue">Plateforme de partage culturel du Bénin</p>
                </div>
                <div class="col-md-6 text-end">
                    <p class="text-light-blue">&copy; 2024 Culture_Benin. Tous droits réservés.</p>
                    <small class="text-light-gray">Version 1.0.0</small>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    
    <script>
        $(document).ready(function() {
            // Initialisation de DataTable
            var table = $('#contenusTable').DataTable({
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/fr-FR.json'
                },
                pageLength: 10,
                ordering: true,
                order: [[6, 'desc']], // Tri par date de création décroissante
                responsive: true,
                columnDefs: [
                    { orderable: false, targets: [7] } // Désactiver le tri sur la colonne Actions
                ],
                dom: '<"row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>' +
                     '<"row"<"col-sm-12"tr>>' +
                     '<"row"<"col-sm-12 col-md-5"i><"col-sm-12 col-md-7"p>>',
                initComplete: function() {
                    // Initialisation des tooltips après le chargement de DataTable
                    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
                    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                        return new bootstrap.Tooltip(tooltipTriggerEl)
                    });
                }
            });

            // Recherche en temps réel
            $('#searchInput').on('keyup', function() {
                table.search(this.value).draw();
            });

            // Filtrage par statut
            $('.filter-btn').on('click', function() {
                // Retirer la classe active de tous les boutons
                $('.filter-btn').removeClass('active');
                // Ajouter la classe active au bouton cliqué
                $(this).addClass('active');
                
                const filter = $(this).data('filter');
                
                if (filter === 'all') {
                    table.columns(5).search('').draw(); // 5 = colonne statut
                } else {
                    table.columns(5).search(filter).draw();
                }
            });

            // Animation des lignes au survol
            $('#contenusTable tbody').on('mouseenter', 'tr', function() {
                $(this).addClass('hover-row');
            }).on('mouseleave', 'tr', function() {
                $(this).removeClass('hover-row');
            });

            // Confirmation pour les boutons de suppression
            $(document).on('submit', 'form[onsubmit*="confirm"]', function(e) {
                if (!confirm($(this).attr('onsubmit').match(/return confirm\('([^']+)'\)/)[1])) {
                    e.preventDefault();
                }
            });

            // Animation au chargement
            $('.content-row').each(function(index) {
                $(this).css({
                    'opacity': '0',
                    'transform': 'translateY(20px)',
                    'transition': 'opacity 0.5s ease, transform 0.5s ease'
                });
                
                setTimeout(() => {
                    $(this).css({
                        'opacity': '1',
                        'transform': 'translateY(0)'
                    });
                }, index * 100);
            });

            // Auto-refresh toutes les 30 secondes pour les contenus en attente
            setInterval(function() {
                if ($('.filter-btn.active').data('filter') === 'en_attente') {
                    location.reload();
                }
            }, 30000);
        });

        // Fonction pour publier un contenu (version AJAX)
        function publishContent(contentId) {
            if (confirm('Êtes-vous sûr de vouloir publier ce contenu ?')) {
                $.ajax({
                    url: '/contenus/' + contentId,
                    method: 'PUT',
                    data: {
                        _token: '{{ csrf_token() }}',
                        statut: 'publié'
                    },
                    success: function(response) {
                        if (response.success) {
                            alert('Contenu publié avec succès !');
                            location.reload();
                        } else {
                            alert('Erreur lors de la publication.');
                        }
                    },
                    error: function() {
                        alert('Erreur lors de la publication.');
                    }
                });
            }
        }

        // Fonction pour archiver un contenu
        function archiveContent(contentId) {
            if (confirm('Êtes-vous sûr de vouloir archiver ce contenu ?')) {
                $.ajax({
                    url: '/contenus/' + contentId,
                    method: 'PUT',
                    data: {
                        _token: '{{ csrf_token() }}',
                        statut: 'archivé'
                    },
                    success: function(response) {
                        if (response.success) {
                            alert('Contenu archivé avec succès !');
                            location.reload();
                        } else {
                            alert('Erreur lors de l\'archivage.');
                        }
                    },
                    error: function() {
                        alert('Erreur lors de l\'archivage.');
                    }
                });
            }
        }
    </script>
</body>
</html>