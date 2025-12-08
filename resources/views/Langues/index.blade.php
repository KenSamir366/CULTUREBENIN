<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Langues du Bénin - Culture_Benin</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background-color: #0f172a;
            color: #f1f5f9;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .header-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 2.5rem 0;
            border-radius: 0 0 25px 25px;
            box-shadow: 0 8px 32px rgba(102, 126, 234, 0.4);
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
            transform: translateY(-8px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3);
            border-color: #667eea;
        }
        .card-header {
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.9) 0%, rgba(118, 75, 162, 0.9) 100%);
            color: white;
            border-radius: 16px 16px 0 0 !important;
            font-weight: bold;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }
        .langue-code {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            color: white;
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: bold;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        .stat-badge {
            background: rgba(255, 255, 255, 0.1);
            color: #cbd5e1;
            padding: 0.4rem 0.8rem;
            border-radius: 10px;
            font-size: 0.85rem;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            border-radius: 25px;
            padding: 0.6rem 1.5rem;
            font-weight: 600;
            transition: all 0.3s ease;
            color: white;
        }
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 16px rgba(102, 126, 234, 0.4);
            color: white;
        }
        .btn-add {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            color: white;
            border: none;
            border-radius: 25px;
            padding: 0.7rem 2rem;
            font-weight: bold;
            transition: all 0.3s ease;
        }
        .btn-add:hover {
            background: linear-gradient(135deg, #0da271 0%, #047857 100%);
            transform: translateY(-2px);
            box-shadow: 0 8px 16px rgba(16, 185, 129, 0.4);
            color: white;
        }
        .alert-success {
            border-radius: 12px;
            border: 1px solid rgba(72, 187, 120, 0.3);
            background: rgba(72, 187, 120, 0.1);
            color: #a7f3d0;
            backdrop-filter: blur(10px);
        }
        .stats-card {
            background: linear-gradient(135deg, rgba(30, 41, 59, 0.9), rgba(15, 23, 42, 0.9));
            border: 1px solid rgba(102, 126, 234, 0.3);
            border-radius: 12px;
            padding: 1.5rem;
            text-align: center;
            transition: all 0.3s ease;
        }
        .stats-card:hover {
            border-color: #667eea;
            transform: translateY(-3px);
        }
        .stats-card h3 {
            font-size: 2.2rem;
            font-weight: bold;
            background: linear-gradient(135deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 0.5rem;
        }
        .stats-card p {
            color: #a5b4cb;
            margin-bottom: 0;
            font-weight: 500;
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
        .text-muted {
            color: #94a3b8 !important;
        }
        .text-primary {
            color: #60a5fa !important;
        }
        .text-success {
            color: #34d399 !important;
        }
        .text-warning {
            color: #fbbf24 !important;
        }
        .alert-info {
            background: rgba(59, 130, 246, 0.1);
            border: 1px solid rgba(59, 130, 246, 0.3);
            color: #93c5fd;
            border-radius: 12px;
            backdrop-filter: blur(10px);
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
        .card-text {
            color: #cbd5e1;
        }
        .nav-link {
            color: #cbd5e1;
            font-weight: 500;
        }
        .nav-link:hover, .nav-link.active {
            color: white;
            background-color: rgba(255, 255, 255, 0.1);
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
            background: rgba(102, 126, 234, 0.3);
            color: white;
        }
        .badge-light {
            background: rgba(255, 255, 255, 0.15);
            color: #f1f5f9;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        .footer-bg {
            background: rgba(15, 23, 42, 0.95);
            border-top: 1px solid rgba(255, 255, 255, 0.15);
        }
        .progress {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            height: 6px;
        }
        .progress-bar {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 10px;
        }
        .text-light-blue {
            color: #93c5fd !important;
        }
        .text-light-gray {
            color: #cbd5e1 !important;
        }
        .text-bright-white {
            color: #f8fafc !important;
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
                        <a class="nav-link" href="{{ route('contenus.index') }}">
                            <i class="fas fa-file-alt me-1"></i>Contenus
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('langues.index') }}">
                            <i class="fas fa-language me-1"></i>Langues
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('regions.index') }}">
                            <i class="fas fa-map me-1"></i>Régions
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
                        <i class="fas fa-language me-3"></i>Langues du Bénin
                    </h1>
                    <p class="lead mb-4 text-light-blue">Découvrez la richesse linguistique et culturelle du Bénin</p>
                    <div class="d-flex flex-wrap gap-2">
                        <span class="badge badge-light px-3 py-2">
                            <i class="fas fa-book me-1"></i> {{ $langues->count() }} Langues
                        </span>
                        <span class="badge badge-light px-3 py-2">
                            <i class="fas fa-file-alt me-1"></i> {{ $langues->sum('contenus_count') ?? 0 }} Contenus
                        </span>
                        <span class="badge badge-light px-3 py-2">
                            <i class="fas fa-users me-1"></i> {{ $langues->sum('users_count') ?? 0 }} Utilisateurs
                        </span>
                    </div>
                </div>
                <div class="col-lg-4 text-end">
                    <a href="{{ route('dashboard') }}" class="btn btn-light btn-lg rounded-pill me-2">
                        <i class="fas fa-home me-2"></i>Dashboard
                    </a>
                    <a href="{{ route('langues.create') }}" class="btn btn-add">
                        <i class="fas fa-plus me-2"></i>Ajouter une langue
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
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <!-- Barre d'outils -->
        <div class="row mb-4">
            <div class="col-md-8">
                <div class="search-box">
                    <i class="fas fa-search me-2 text-light-blue"></i>
                    <input type="text" id="searchInput" placeholder="Rechercher une langue...">
                </div>
            </div>
            <div class="col-md-4 text-end">
                <div class="d-flex flex-wrap justify-content-end gap-2">
                    <button class="btn btn-outline-primary" id="btnFilterAll">Toutes</button>
                    <button class="btn btn-outline-primary" id="btnFilterActive">Actives</button>
                    <button class="btn btn-outline-primary" id="btnFilterPopular">Populaires</button>
                </div>
            </div>
        </div>

        <!-- Statistiques -->
        <div class="row mb-5">
            <div class="col-md-4 mb-4">
                <div class="stats-card">
                    <i class="fas fa-language fa-2x mb-3" style="color: #667eea;"></i>
                    <h3>{{ $langues->count() }}</h3>
                    <p class="text-light-gray">Langues enregistrées</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="stats-card">
                    <i class="fas fa-file-alt fa-2x mb-3" style="color: #10b981;"></i>
                    <h3>{{ $langues->sum('contenus_count') ?? 0 }}</h3>
                    <p class="text-light-gray">Contenus associés</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="stats-card">
                    <i class="fas fa-users fa-2x mb-3" style="color: #f59e0b;"></i>
                    <h3>{{ $langues->sum('users_count') ?? 0 }}</h3>
                    <p class="text-light-gray">Utilisateurs parlant</p>
                </div>
            </div>
        </div>

        <!-- Liste des langues -->
        <div class="row" id="languesList">
            @forelse($langues as $langue)
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4 langue-item">
                <div class="card h-100">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span class="fw-bold text-bright-white">{{ $langue->nom_langues }}</span>
                        <span class="langue-code">{{ $langue->code_langues }}</span>
                    </div>
                    <div class="card-body">
                        <p class="card-text mb-4 text-light-gray">{{ Str::limit($langue->description, 120) }}</p>
                        
                        <div class="d-flex justify-content-between mb-3">
                            <span class="stat-badge">
                                <i class="fas fa-file-alt me-1"></i>
                                {{ $langue->contenus_count ?? 0 }} contenus
                            </span>
                            <span class="stat-badge">
                                <i class="fas fa-users me-1"></i>
                                {{ $langue->users_count ?? 0 }} utilisateurs
                            </span>
                        </div>
                        
                        <!-- Statut -->
                        <div class="mb-3">
                            <span class="badge {{ $langue->statut == 'actif' ? 'badge-success' : 'badge-secondary' }}">
                                {{ $langue->statut == 'actif' ? 'Actif' : 'Inactif' }}
                            </span>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent border-top-0 pt-0">
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('langues.show', $langue->id) }}" 
                               class="btn btn-sm btn-outline-primary">
                                <i class="fas fa-eye me-1"></i>Voir
                            </a>
                            <div>
                                <a href="{{ route('langues.edit', $langue->id) }}" 
                                   class="btn btn-sm btn-outline-warning me-2">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('langues.destroy', $langue->id) }}" 
                                      method="POST" class="d-inline" 
                                      onsubmit="return confirm('Supprimer cette langue ?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12">
                <div class="alert alert-info text-center">
                    <i class="fas fa-info-circle me-2"></i>
                    Aucune langue enregistrée pour le moment.
                    <a href="{{ route('langues.create') }}" class="alert-link">Ajouter la première</a>
                </div>
            </div>
            @endforelse
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
                    <p class="text-light-blue">&copy; {{ date('Y') }} Culture_Benin. Tous droits réservés.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Recherche en temps réel
        document.getElementById('searchInput').addEventListener('keyup', function() {
            const searchTerm = this.value.toLowerCase();
            const cards = document.querySelectorAll('.langue-item');
            
            cards.forEach(card => {
                const langueName = card.querySelector('.card-header span:first-child').textContent.toLowerCase();
                const langueCode = card.querySelector('.langue-code').textContent.toLowerCase();
                const description = card.querySelector('.card-text').textContent.toLowerCase();
                
                if (langueName.includes(searchTerm) || 
                    langueCode.includes(searchTerm) || 
                    description.includes(searchTerm)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });

        // Filtrage par statut
        document.getElementById('btnFilterAll').addEventListener('click', function() {
            document.querySelectorAll('.langue-item').forEach(item => {
                item.style.display = 'block';
            });
            updateActiveButtons(this);
        });

        document.getElementById('btnFilterActive').addEventListener('click', function() {
            document.querySelectorAll('.langue-item').forEach(item => {
                const badge = item.querySelector('.badge');
                const isActive = badge && badge.textContent.trim() === 'Actif';
                item.style.display = isActive ? 'block' : 'none';
            });
            updateActiveButtons(this);
        });

        document.getElementById('btnFilterPopular').addEventListener('click', function() {
            document.querySelectorAll('.langue-item').forEach(item => {
                // Afficher toutes les langues pour l'instant
                item.style.display = 'block';
            });
            updateActiveButtons(this);
        });

        function updateActiveButtons(activeButton) {
            document.querySelectorAll('#btnFilterAll, #btnFilterActive, #btnFilterPopular').forEach(btn => {
                btn.classList.remove('active');
                btn.classList.remove('btn-primary');
                btn.classList.add('btn-outline-primary');
            });
            activeButton.classList.add('active');
            activeButton.classList.remove('btn-outline-primary');
            activeButton.classList.add('btn-primary');
        }

        // Initialiser le bouton "Toutes" comme actif
        updateActiveButtons(document.getElementById('btnFilterAll'));
    </script>
</body>
</html>