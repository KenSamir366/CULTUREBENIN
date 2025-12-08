<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Régions du Bénin - Culture_Benin</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* STYLE AMÉLIORÉ POUR LES RÉGIONS */
        body {
            background-color: #0f172a;
            color: #f1f5f9;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .header-bg {
            background: linear-gradient(135deg, #0ea5e9 0%, #3b82f6 100%);
            color: white;
            padding: 2.5rem 0;
            border-radius: 0 0 25px 25px;
            box-shadow: 0 8px 32px rgba(14, 165, 233, 0.4);
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
            height: 100%;
        }
        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
            border-color: #0ea5e9;
        }
        .btn-add {
            background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
            color: white;
            border: none;
            border-radius: 25px;
            padding: 0.8rem 2rem;
            font-weight: bold;
            transition: all 0.3s ease;
        }
        .btn-add:hover {
            background: linear-gradient(135deg, #e0900a 0%, #c46a05 100%);
            transform: translateY(-2px);
            box-shadow: 0 8px 16px rgba(245, 158, 11, 0.4);
            color: white;
        }
        .stats-card {
            background: linear-gradient(135deg, rgba(30, 41, 59, 0.9), rgba(15, 23, 42, 0.9));
            border: 1px solid rgba(14, 165, 233, 0.3);
            border-radius: 12px;
            padding: 1.5rem;
            text-align: center;
            transition: all 0.3s ease;
        }
        .stats-card:hover {
            border-color: #0ea5e9;
            transform: translateY(-3px);
        }
        .stats-card h3 {
            font-size: 2.2rem;
            font-weight: bold;
            background: linear-gradient(135deg, #0ea5e9, #3b82f6);
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
        .flag-icon {
            width: 30px;
            height: 20px;
            border-radius: 3px;
            object-fit: cover;
        }
        .map-icon {
            color: #0ea5e9;
            font-size: 1.2rem;
        }
        .region-code {
            background: rgba(14, 165, 233, 0.2);
            color: #93c5fd;
            padding: 0.2rem 0.8rem;
            border-radius: 15px;
            font-size: 0.8rem;
            font-weight: 600;
        }
        .stat-badge {
            background: rgba(255, 255, 255, 0.1);
            color: #cbd5e1;
            padding: 0.3rem 0.8rem;
            border-radius: 15px;
            font-size: 0.8rem;
            display: inline-flex;
            align-items: center;
        }
        .progress {
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            height: 20px;
        }
        .progress-bar {
            background: linear-gradient(90deg, #0ea5e9, #3b82f6);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .progress-bar small {
            font-size: 0.7rem;
            font-weight: 600;
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
        }
        .footer-bg {
            background: rgba(15, 23, 42, 0.95);
            border-top: 1px solid rgba(255, 255, 255, 0.15);
        }
        .text-light-blue {
            color: #93c5fd !important;
        }
        .text-light-gray {
            color: #cbd5e1 !important;
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
        .btn-primary {
            background: linear-gradient(135deg, #0ea5e9 0%, #3b82f6 100%);
            border: none;
        }
        .alert-info {
            background: rgba(59, 130, 246, 0.1);
            border: 1px solid rgba(59, 130, 246, 0.3);
            color: #93c5fd;
            border-radius: 12px;
            backdrop-filter: blur(10px);
        }
        .alert-success {
            background: rgba(16, 185, 129, 0.1);
            border: 1px solid rgba(16, 185, 129, 0.3);
            color: #a7f3d0;
            border-radius: 12px;
            backdrop-filter: blur(10px);
        }
        .nav-link {
            color: #cbd5e1;
            font-weight: 500;
        }
        .nav-link:hover, .nav-link.active {
            color: white;
            background-color: rgba(255, 255, 255, 0.1);
        }
        .badge-light {
            background: rgba(255, 255, 255, 0.15);
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
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="/">
                    <i class="fas fa-home me-1"></i>Accueil
                </a>
                <a class="nav-link" href="{{ route('medias.index') }}">
                    <i class="fas fa-photo-video me-1"></i>Médias
                </a>
                <a class="nav-link" href="{{ route('contenus.index') }}">
                    <i class="fas fa-file-alt me-1"></i>Contenus
                </a>
                <a class="nav-link" href="{{ route('langues.index') }}">
                    <i class="fas fa-language me-1"></i>Langues
                </a>
                <a class="nav-link active" href="{{ route('regions.index') }}">
                    <i class="fas fa-map me-1"></i>Régions
                </a>
                <div class="nav-item dropdown">
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
                </div>
            </div>
        </div>
    </nav>

    <!-- En-tête principal -->
    <div class="header-bg mb-5">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold mb-3">
                        <i class="fas fa-map-marked-alt me-3"></i>Régions du Bénin
                    </h1>
                    <p class="lead mb-4 text-light-blue">Découvrez la richesse géographique et culturelle des régions béninoises</p>
                    <div class="d-flex flex-wrap gap-2">
                        <span class="badge badge-light px-3 py-2">
                            <i class="fas fa-map-pin me-1"></i> {{ $regions->count() }} Régions
                        </span>
                        <span class="badge badge-light px-3 py-2">
                            <i class="fas fa-landmark me-1"></i> {{ $regions->sum('departements_count') }} Départements
                        </span>
                        <span class="badge badge-light px-3 py-2">
                            <i class="fas fa-city me-1"></i> {{ $regions->sum('communes_count') }} Communes
                        </span>
                        <span class="badge badge-light px-3 py-2">
                            <i class="fas fa-users me-1"></i> {{ number_format($regions->sum('population')) }} Habitants
                        </span>
                    </div>
                </div>
                <div class="col-lg-4 text-end">
                    <a href="{{ route('dashboard') }}" class="btn btn-light btn-lg rounded-pill me-2">
                        <i class="fas fa-home me-2"></i>Dashboard
                    </a>
                    <a href="{{ route('regions.create') }}" class="btn btn-add">
                        <i class="fas fa-plus me-2"></i>Nouvelle région
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
                    <div class="input-group">
                        <span class="input-group-text bg-transparent border-0">
                            <i class="fas fa-search text-light-blue"></i>
                        </span>
                        <input type="text" id="searchInput" class="form-control border-0" placeholder="Rechercher une région...">
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-end">
                <div class="d-flex flex-wrap justify-content-end gap-2">
                    <button class="btn btn-outline-primary" id="btnFilterAll">Toutes</button>
                    <button class="btn btn-outline-primary" id="btnFilterCoastal">Côtières</button>
                    <button class="btn btn-outline-primary" id="btnFilterNorthern">Nord</button>
                </div>
            </div>
        </div>

        <!-- Statistiques -->
        <div class="row mb-5">
            <div class="col-md-3 mb-4">
                <div class="stats-card">
                    <i class="fas fa-map fa-2x mb-3" style="color: #0ea5e9;"></i>
                    <h3>{{ $regions->count() }}</h3>
                    <p class="text-light-gray">Régions</p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="stats-card">
                    <i class="fas fa-landmark fa-2x mb-3" style="color: #10b981;"></i>
                    <h3>{{ $regions->sum('departements_count') }}</h3>
                    <p class="text-light-gray">Départements</p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="stats-card">
                    <i class="fas fa-city fa-2x mb-3" style="color: #f59e0b;"></i>
                    <h3>{{ $regions->sum('communes_count') }}</h3>
                    <p class="text-light-gray">Communes</p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="stats-card">
                    <i class="fas fa-users fa-2x mb-3" style="color: #8b5cf6;"></i>
                    <h3>{{ number_format($regions->sum('population') / 1000, 1) }}K</h3>
                    <p class="text-light-gray">Population</p>
                </div>
            </div>
        </div>

        <!-- Liste des régions -->
        <div class="row" id="regionsList">
            @forelse($regions as $region)
            <div class="col-xl-4 col-lg-6 col-md-6 mb-4 region-item">
                <div class="card h-100">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                            @if($region->drapeau)
                                <img src="{{ asset('storage/' . $region->drapeau) }}" alt="Drapeau" class="flag-icon me-2">
                            @else
                                <i class="fas fa-flag me-2" style="color: #f59e0b;"></i>
                            @endif
                            <span class="fw-bold text-bright-white">{{ $region->nom_region }}</span>
                        </div>
                        <span class="region-code">{{ $region->code_region ?? 'N/A' }}</span>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-map-marker-alt map-icon me-2"></i>
                                <span class="card-text text-light-blue">
                                    <strong>Capitale:</strong> {{ $region->chef_lieu ?? 'Non spécifiée' }}
                                </span>
                            </div>
                            <p class="card-text mb-3 text-light-gray">{{ Str::limit($region->description, 100) }}</p>
                        </div>
                        
                        <div class="d-flex justify-content-between mb-3">
                            <span class="stat-badge">
                                <i class="fas fa-landmark me-1"></i>
                                {{ $region->departements_count ?? 0 }} départements
                            </span>
                            <span class="stat-badge">
                                <i class="fas fa-users me-1"></i>
                                {{ number_format($region->population ?? 0) }} hab.
                            </span>
                        </div>

                        <!-- Superficie -->
                        @if($region->superficie)
                        <div class="progress mb-3">
                            @php
                                $maxSuperficie = $regions->max('superficie') ?: 1;
                                $percentage = min(100, ($region->superficie / $maxSuperficie) * 100);
                            @endphp
                            <div class="progress-bar" role="progressbar" 
                                 style="width: {{ $percentage }}%"
                                 aria-valuenow="{{ $percentage }}" 
                                 aria-valuemin="0" 
                                 aria-valuemax="100">
                                <small>{{ number_format($region->superficie) }} km²</small>
                            </div>
                        </div>
                        @endif
                    </div>
                    <div class="card-footer bg-transparent border-top-0 pt-0">
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('regions.show', $region->id) }}" 
                               class="btn btn-sm btn-outline-primary">
                                <i class="fas fa-eye me-1"></i>Détails
                            </a>
                            <div>
                                <a href="{{ route('regions.edit', $region->id) }}" 
                                   class="btn btn-sm btn-outline-warning me-2">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('regions.destroy', $region->id) }}" 
                                      method="POST" class="d-inline" 
                                      onsubmit="return confirm('Supprimer cette région ?')">
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
                    Aucune région enregistrée pour le moment.
                    <a href="{{ route('regions.create') }}" class="alert-link">Ajouter la première</a>
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
            const cards = document.querySelectorAll('.region-item');
            
            cards.forEach(card => {
                const regionName = card.querySelector('.card-header .fw-bold').textContent.toLowerCase();
                const regionCode = card.querySelector('.region-code').textContent.toLowerCase();
                const capitale = card.querySelector('.card-text span')?.textContent?.toLowerCase() || '';
                const description = card.querySelector('.card-text:not(strong)')?.textContent?.toLowerCase() || '';
                
                if (regionName.includes(searchTerm) || 
                    regionCode.includes(searchTerm) || 
                    capitale.includes(searchTerm) || 
                    description.includes(searchTerm)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });

        // Filtrage
        document.getElementById('btnFilterAll').addEventListener('click', function() {
            document.querySelectorAll('.region-item').forEach(item => {
                item.style.display = 'block';
            });
            updateActiveButtons(this);
        });

        document.getElementById('btnFilterCoastal').addEventListener('click', function() {
            document.querySelectorAll('.region-item').forEach(item => {
                const regionName = item.querySelector('.card-header .fw-bold').textContent.toLowerCase();
                const coastalRegions = ['littoral', 'atlantique', 'ouémé', 'mono', 'couffo'];
                const isCoastal = coastalRegions.some(region => regionName.includes(region));
                item.style.display = isCoastal ? 'block' : 'none';
            });
            updateActiveButtons(this);
        });

        document.getElementById('btnFilterNorthern').addEventListener('click', function() {
            document.querySelectorAll('.region-item').forEach(item => {
                const regionName = item.querySelector('.card-header .fw-bold').textContent.toLowerCase();
                const northernRegions = ['donga', 'borgou', 'alibori', 'atacora'];
                const isNorthern = northernRegions.some(region => regionName.includes(region));
                item.style.display = isNorthern ? 'block' : 'none';
            });
            updateActiveButtons(this);
        });

        function updateActiveButtons(activeButton) {
            document.querySelectorAll('#btnFilterAll, #btnFilterCoastal, #btnFilterNorthern').forEach(btn => {
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