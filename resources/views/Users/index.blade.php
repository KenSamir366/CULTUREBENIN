<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utilisateurs - Culture_Benin</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* STYLE IDENTIQUE À LA VUE LANGUES */
        body {
            background-color: #0f172a;
            color: #e2e8f0;
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
            background: rgba(30, 41, 59, 0.8);
            border: 1px solid rgba(255, 255, 255, 0.1);
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
        .user-badge {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            color: white;
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: bold;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        .badge-admin { background: linear-gradient(135deg, #8b5cf6 0%, #7c3aed 100%); }
        .badge-user { background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%); }
        .badge-moderator { background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%); }
        .badge-inactive { background: linear-gradient(135deg, #6b7280 0%, #4b5563 100%); }
        
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
        .stats-card {
            background: linear-gradient(135deg, rgba(30, 41, 59, 0.8), rgba(15, 23, 42, 0.8));
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
            color: #94a3b8;
            margin-bottom: 0;
        }
        .search-box {
            background: rgba(30, 41, 59, 0.8);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 25px;
            padding: 0.5rem 1rem;
        }
        .search-box input {
            background: transparent;
            border: none;
            color: #e2e8f0;
            width: 100%;
        }
        .search-box input:focus {
            outline: none;
            box-shadow: none;
        }
        
        /* COULEURS DE TEXTE IDENTIQUES À LA VUE LANGUES */
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
        .text-danger {
            color: #f87171 !important;
        }
        .text-info {
            color: #60a5fa !important;
        }
        .text-purple {
            color: #a78bfa !important;
        }
        .card-text {
            color: #cbd5e1;
        }
        .card-title {
            color: #e2e8f0;
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
        .nav-link {
            color: #cbd5e1;
        }
        .nav-link:hover, .nav-link.active {
            color: white;
        }
        .dropdown-menu {
            background: rgba(30, 41, 59, 0.95);
            border: 1px solid rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
        }
        .dropdown-item {
            color: #cbd5e1;
        }
        .dropdown-item:hover {
            background: rgba(102, 126, 234, 0.2);
            color: white;
        }
        .badge {
            background: rgba(255, 255, 255, 0.1);
            color: #cbd5e1;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        .bg-light {
            background-color: rgba(255, 255, 255, 0.1) !important;
            color: #e2e8f0 !important;
        }
        .footer-bg {
            background: rgba(15, 23, 42, 0.9);
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }
        .btn-light {
            background: rgba(255, 255, 255, 0.1);
            border-color: rgba(255, 255, 255, 0.2);
            color: #e2e8f0;
        }
        .btn-light:hover {
            background: rgba(255, 255, 255, 0.2);
            border-color: rgba(255, 255, 255, 0.3);
            color: white;
        }
        .alert-success {
            border-radius: 12px;
            border: 1px solid rgba(72, 187, 120, 0.3);
            background: rgba(72, 187, 120, 0.1);
            color: #a7f3d0;
            backdrop-filter: blur(10px);
        }
        .alert-info {
            background: rgba(59, 130, 246, 0.1);
            border: 1px solid rgba(59, 130, 246, 0.3);
            color: #93c5fd;
            border-radius: 12px;
            backdrop-filter: blur(10px);
        }
        .btn-close-white {
            filter: invert(1) grayscale(100%) brightness(200%);
        }
        .filter-btn {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: #cbd5e1;
            border-radius: 20px;
            padding: 0.4rem 1rem;
            margin: 0.2rem;
            transition: all 0.3s ease;
        }
        .filter-btn:hover, .filter-btn.active {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-color: transparent;
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
        .user-avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #667eea;
            margin-bottom: 1rem;
        }
        .status-indicator {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            display: inline-block;
            margin-right: 5px;
        }
        .status-online { background-color: #10b981; box-shadow: 0 0 10px #10b981; }
        .status-offline { background-color: #6b7280; }
        .status-away { background-color: #f59e0b; box-shadow: 0 0 10px #f59e0b; }
        .last-seen {
            font-size: 0.8rem;
            color: #94a3b8;
        }
        .user-skills {
            display: flex;
            flex-wrap: wrap;
            gap: 0.3rem;
            margin-top: 0.5rem;
        }
        .skill-badge {
            padding: 0.2rem 0.5rem;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 6px;
            font-size: 0.75rem;
            color: #94a3b8;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
    </style>
</head>
<body>
    <!-- Navigation - Identique à la vue langues -->
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
                <a class="nav-link" href="{{ route('commentaires.index') }}">
                    <i class="fas fa-comments me-1"></i>Commentaires
                </a>
                <a class="nav-link" href="{{ route('langues.index') }}">
                    <i class="fas fa-language me-1"></i>Langues
                </a>
                <a class="nav-link active" href="{{ route('users.index') }}">
                    <i class="fas fa-users me-1"></i>Utilisateurs
                </a>
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        <i class="fas fa-user-circle me-1"></i>Administrateur
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#"><i class="fas fa-user me-2"></i>Profil</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-cog me-2"></i>Paramètres</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-sign-out-alt me-2"></i>Déconnexion
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- En-tête principal - Même style que langues -->
    <div class="header-bg mb-5">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold mb-3">
                        <i class="fas fa-users me-3"></i>Gestion des Utilisateurs
                    </h1>
                    <p class="lead mb-4">Administrez la communauté Culture_Benin</p>
                    <div class="d-flex flex-wrap gap-2">
                        <span class="badge bg-light px-3 py-2">
                            <i class="fas fa-user me-1"></i> {{ $users->count() }} Utilisateurs
                        </span>
                        <span class="badge bg-light px-3 py-2">
                            <i class="fas fa-user-shield me-1"></i> {{ $stats['admins'] ?? 0 }} Admins
                        </span>
                        <span class="badge bg-light px-3 py-2">
                            <i class="fas fa-user-check me-1"></i> {{ $stats['actifs'] ?? 0 }} Actifs
                        </span>
                        <span class="badge bg-light px-3 py-2">
                            <i class="fas fa-user-clock me-1"></i> {{ $stats['nouveaux'] ?? 0 }} Nouveaux (7j)
                        </span>
                    </div>
                </div>
                <div class="col-lg-4 text-end">
                    <a href="{{ route('dashboard') }}" class="btn btn-light btn-lg rounded-pill me-2">
                        <i class="fas fa-home me-2"></i>Accueil
                    </a>
                    <a href="#" class="btn btn-add" id="btnAddUser">
                        <i class="fas fa-user-plus me-2"></i>Nouvel utilisateur
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

        <!-- Barre d'outils - Même style que langues -->
        <div class="row mb-4">
            <div class="col-md-8">
                <div class="search-box">
                    <i class="fas fa-search me-2"></i>
                    <input type="text" id="searchInput" placeholder="Rechercher un utilisateur...">
                </div>
            </div>
            <div class="col-md-4 text-end">
                <div class="d-flex flex-wrap justify-content-end gap-2">
                    <button class="filter-btn active" data-filter="all">Tous</button>
                    <button class="filter-btn" data-filter="admin">
                        <i class="fas fa-user-shield me-1"></i>Admins
                    </button>
                    <button class="filter-btn" data-filter="actif">
                        <i class="fas fa-user-check me-1"></i>Actifs
                    </button>
                    <button class="filter-btn" data-filter="recent">
                        <i class="fas fa-user-clock me-1"></i>Récents
                    </button>
                </div>
            </div>
        </div>

        <!-- Statistiques - Même style que langues -->
        <div class="row mb-5">
            <div class="col-md-3 mb-4">
                <div class="stats-card">
                    <i class="fas fa-users fa-2x mb-3" style="color: #667eea;"></i>
                    <h3>{{ $stats['total'] ?? 0 }}</h3>
                    <p>Total utilisateurs</p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="stats-card">
                    <i class="fas fa-user-shield fa-2x mb-3" style="color: #8b5cf6;"></i>
                    <h3>{{ $stats['admins'] ?? 0 }}</h3>
                    <p>Administrateurs</p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="stats-card">
                    <i class="fas fa-user-check fa-2x mb-3" style="color: #10b981;"></i>
                    <h3>{{ $stats['actifs'] ?? 0 }}</h3>
                    <p>Utilisateurs actifs</p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="stats-card">
                    <i class="fas fa-chart-line fa-2x mb-3" style="color: #f59e0b;"></i>
                    <h3>{{ $stats['nouveaux'] ?? 0 }}</h3>
                    <p>Nouveaux (7 jours)</p>
                </div>
            </div>
        </div>

        <!-- Liste des utilisateurs - Même structure de cartes que langues -->
        <div class="row" id="usersList">
            @forelse($users as $user)
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4 user-item" 
                 data-role="{{ strtolower($user->role ?? 'user') }}"
                 data-status="{{ $user->is_active ?? true ? 'actif' : 'inactif' }}"
                 data-date="{{ $user->created_at }}">
                <div class="card h-100">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span class="fw-bold">
                            <i class="fas fa-user me-2"></i>{{ Str::limit($user->name, 15) }}
                        </span>
                        @php
                            $role = strtolower($user->role ?? 'user');
                            $badgeClass = 'badge-user';
                            if($role == 'admin') $badgeClass = 'badge-admin';
                            elseif($role == 'moderator') $badgeClass = 'badge-moderator';
                            elseif($role == 'inactive') $badgeClass = 'badge-inactive';
                            
                            $statusClass = 'status-offline';
                            if(isset($user->last_seen) && $user->last_seen > now()->subMinutes(5)) {
                                $statusClass = 'status-online';
                            } elseif(isset($user->last_seen) && $user->last_seen > now()->subHours(1)) {
                                $statusClass = 'status-away';
                            }
                        @endphp
                        <span class="user-badge {{ $badgeClass }}">
                            <span class="status-indicator {{ $statusClass }}"></span>
                            {{ ucfirst($role) }}
                        </span>
                    </div>
                    
                    <div class="card-body text-center">
                        <!-- Avatar -->
                        <div class="mb-3">
                            @if($user->avatar)
                                <img src="{{ asset('storage/' . $user->avatar) }}" 
                                     class="user-avatar" 
                                     alt="{{ $user->name }}">
                            @else
                                <div class="user-avatar mx-auto bg-dark d-flex align-items-center justify-content-center">
                                    <i class="fas fa-user fa-2x text-primary"></i>
                                </div>
                            @endif
                        </div>
                        
                        <!-- Informations utilisateur -->
                        <h5 class="text-purple mb-2">{{ $user->name }}</h5>
                        <p class="text-muted small mb-3">
                            <i class="fas fa-envelope me-1"></i>
                            {{ Str::limit($user->email, 20) }}
                        </p>
                        
                        <!-- Statistiques -->
                        <div class="d-flex justify-content-between mb-3">
                            <span class="stat-badge">
                                <i class="fas fa-file-alt me-1"></i>
                                {{ $user->contenus_count ?? 0 }}
                            </span>
                            <span class="stat-badge">
                                <i class="fas fa-comment me-1"></i>
                                {{ $user->commentaires_count ?? 0 }}
                            </span>
                            <span class="stat-badge">
                                <i class="fas fa-image me-1"></i>
                                {{ $user->medias_count ?? 0 }}
                            </span>
                        </div>
                        
                        <!-- Barre de progression (activité) -->
                        <div class="progress mb-3">
                            @php
                                $maxActivity = $users->max(function($u) {
                                    return ($u->contenus_count ?? 0) + ($u->commentaires_count ?? 0) + ($u->medias_count ?? 0);
                                }) ?: 1;
                                
                                $userActivity = ($user->contenus_count ?? 0) + ($user->commentaires_count ?? 0) + ($user->medias_count ?? 0);
                                $percentage = min(100, ($userActivity / $maxActivity) * 100);
                            @endphp
                            <div class="progress-bar" role="progressbar" 
                                 style="width: {{ $percentage }}%"
                                 aria-valuenow="{{ $percentage }}" 
                                 aria-valuemin="0" 
                                 aria-valuemax="100">
                            </div>
                        </div>
                        
                        <!-- Date d'inscription -->
                        <div class="mb-3">
                            <small class="text-muted">
                                <i class="fas fa-calendar me-1"></i>
                                Inscrit le {{ $user->created_at->format('d/m/Y') }}
                            </small>
                        </div>
                        
                        <!-- Dernière connexion -->
                        @if(isset($user->last_seen))
                        <div class="last-seen">
                            <i class="far fa-clock me-1"></i>
                            Dernière connexion: {{ $user->last_seen->diffForHumans() }}
                        </div>
                        @endif
                    </div>
                    
                    <div class="card-footer bg-transparent border-top-0">
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('users.show', $user->id) }}" 
                               class="btn btn-sm btn-outline-primary">
                                <i class="fas fa-eye me-1"></i>Voir
                            </a>
                            <div>
                                <a href="{{ route('users.edit', $user->id) }}" 
                                   class="btn btn-sm btn-outline-warning me-2">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <button class="btn btn-sm btn-outline-danger btn-delete-user" 
                                        data-user-id="{{ $user->id }}"
                                        data-user-name="{{ $user->name }}">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12">
                <div class="card">
                    <div class="card-body text-center py-5">
                        <i class="fas fa-users fa-4x text-muted mb-3"></i>
                        <h4 class="text-muted">Aucun utilisateur</h4>
                        <p class="text-muted mb-4">Aucun utilisateur n'est inscrit pour le moment</p>
                        <button class="btn btn-primary" id="btnAddFirstUser">
                            <i class="fas fa-user-plus me-2"></i>Créer le premier utilisateur
                        </button>
                    </div>
                </div>
            </div>
            @endforelse
        </div>

        <!-- Pagination - Même style que langues -->
        @if(method_exists($users, 'hasPages') && $users->hasPages())
        <div class="row mt-5">
            <div class="col-12">
                <nav aria-label="Navigation des utilisateurs">
                    <ul class="pagination justify-content-center">
                        @if($users->onFirstPage())
                        <li class="page-item disabled">
                            <span class="page-link">
                                <i class="fas fa-chevron-left me-2"></i>Précédent
                            </span>
                        </li>
                        @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $users->previousPageUrl() }}">
                                <i class="fas fa-chevron-left me-2"></i>Précédent
                            </a>
                        </li>
                        @endif

                        @for($i = 1; $i <= $users->lastPage(); $i++)
                        <li class="page-item {{ $users->currentPage() == $i ? 'active' : '' }}">
                            <a class="page-link" href="{{ $users->url($i) }}">{{ $i }}</a>
                        </li>
                        @endfor

                        @if($users->hasMorePages())
                        <li class="page-item">
                            <a class="page-link" href="{{ $users->nextPageUrl() }}">
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

    <!-- Footer - Identique à la vue langues -->
    <footer class="footer-bg text-white py-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>Culture_Benin</h5>
                    <p class="text-muted">Gestion des utilisateurs</p>
                </div>
                <div class="col-md-6 text-end">
                    <p class="text-muted">&copy; 2024 Culture_Benin. Tous droits réservés.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Modal pour ajouter/modifier un utilisateur -->
    <div class="modal fade" id="userModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" style="background: rgba(30, 41, 59, 0.95); border: 1px solid rgba(255, 255, 255, 0.1);">
                <div class="modal-header" style="border-bottom: 1px solid rgba(255, 255, 255, 0.1);">
                    <h5 class="modal-title" id="modalTitle"></h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="userForm">
                        @csrf
                        <input type="hidden" id="userId" name="id">
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="userName" class="form-label">Nom complet</label>
                                <input type="text" class="form-control" id="userName" name="name" required
                                       style="background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.2); color: #e2e8f0;">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="userEmail" class="form-label">Email</label>
                                <input type="email" class="form-control" id="userEmail" name="email" required
                                       style="background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.2); color: #e2e8f0;">
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="userPassword" class="form-label">Mot de passe</label>
                                <input type="password" class="form-control" id="userPassword" name="password"
                                       style="background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.2); color: #e2e8f0;">
                                <small class="text-muted">Laisser vide pour ne pas changer</small>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="userRole" class="form-label">Rôle</label>
                                <select class="form-control" id="userRole" name="role" required
                                        style="background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.2); color: #e2e8f0;">
                                    <option value="user">Utilisateur</option>
                                    <option value="moderator">Modérateur</option>
                                    <option value="admin">Administrateur</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="userAvatar" class="form-label">Avatar URL (optionnel)</label>
                            <input type="text" class="form-control" id="userAvatar" name="avatar" 
                                   placeholder="URL de l'image"
                                   style="background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.2); color: #e2e8f0;">
                        </div>
                        
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="userActive" name="is_active" value="1" checked>
                            <label class="form-check-label" for="userActive">
                                Compte actif
                            </label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer" style="border-top: 1px solid rgba(255, 255, 255, 0.1);">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-primary" id="btnSaveUser">Enregistrer</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Variables globales
        const userModal = new bootstrap.Modal(document.getElementById('userModal'));

        // Recherche en temps réel - Même fonction que langues
        document.getElementById('searchInput').addEventListener('keyup', function() {
            const searchTerm = this.value.toLowerCase();
            const cards = document.querySelectorAll('.user-item');
            
            cards.forEach(card => {
                const userName = card.querySelector('.card-header span:first-child').textContent.toLowerCase();
                const userEmail = card.querySelector('.text-muted small')?.textContent.toLowerCase() || '';
                
                if (userName.includes(searchTerm) || userEmail.includes(searchTerm)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });

        // Filtrage - Même fonction que langues
        document.querySelectorAll('.filter-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                
                const filter = this.dataset.filter;
                const userItems = document.querySelectorAll('.user-item');
                
                userItems.forEach(item => {
                    const role = item.dataset.role;
                    const status = item.dataset.status;
                    const date = new Date(item.dataset.date);
                    const now = new Date();
                    const daysDiff = (now - date) / (1000 * 60 * 60 * 24);
                    
                    let shouldShow = false;
                    
                    if (filter === 'all') {
                        shouldShow = true;
                    } else if (filter === 'admin') {
                        shouldShow = role === 'admin';
                    } else if (filter === 'actif') {
                        shouldShow = status === 'actif';
                    } else if (filter === 'recent') {
                        shouldShow = daysDiff <= 7;
                    }
                    
                    item.style.display = shouldShow ? 'block' : 'none';
                });
            });
        });

        // Ouvrir modal pour ajouter un utilisateur
        document.getElementById('btnAddUser').addEventListener('click', function() {
            document.getElementById('modalTitle').textContent = 'Ajouter un utilisateur';
            document.getElementById('userId').value = '';
            document.getElementById('userName').value = '';
            document.getElementById('userEmail').value = '';
            document.getElementById('userPassword').value = '';
            document.getElementById('userAvatar').value = '';
            document.getElementById('userRole').value = 'user';
            document.getElementById('userActive').checked = true;
            userModal.show();
        });

        // Ouvrir modal pour modifier un utilisateur
        document.querySelectorAll('.btn-outline-warning').forEach(btn => {
            if (btn.closest('.card-footer')) {
                btn.addEventListener('click', function(e) {
                    e.preventDefault();
                    const userId = this.closest('.card-footer').querySelector('.btn-delete-user').dataset.userId;
                    const userName = this.closest('.card-footer').querySelector('.btn-delete-user').dataset.userName;
                    
                    // Ici vous devriez faire un appel API pour récupérer les données de l'utilisateur
                    // Pour l'instant, on va juste ouvrir la modal avec les valeurs par défaut
                    document.getElementById('modalTitle').textContent = 'Modifier l\'utilisateur';
                    document.getElementById('userId').value = userId;
                    document.getElementById('userName').value = userName;
                    document.getElementById('userEmail').value = 'email@example.com'; // À remplacer par les vraies données
                    document.getElementById('userPassword').value = '';
                    document.getElementById('userRole').value = 'user';
                    userModal.show();
                });
            }
        });

        // Supprimer un utilisateur
        document.querySelectorAll('.btn-delete-user').forEach(btn => {
            btn.addEventListener('click', function() {
                const userId = this.dataset.userId;
                const userName = this.dataset.userName;
                
                if (confirm(`Êtes-vous sûr de vouloir supprimer l'utilisateur "${userName}" ?`)) {
                    deleteUser(userId);
                }
            });
        });

        async function deleteUser(userId) {
            try {
                const response = await fetch(`/api/users/${userId}`, {
                    method: 'DELETE',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    }
                });

                if (response.ok) {
                    location.reload();
                } else {
                    const result = await response.json();
                    alert('Erreur: ' + (result.message || 'Impossible de supprimer cet utilisateur'));
                }
            } catch (error) {
                console.error('Erreur:', error);
                alert('Une erreur est survenue lors de la suppression');
            }
        }

        // Sauvegarder un utilisateur
        document.getElementById('btnSaveUser').addEventListener('click', async function() {
            const userId = document.getElementById('userId').value;
            const userName = document.getElementById('userName').value;
            const userEmail = document.getElementById('userEmail').value;
            const userPassword = document.getElementById('userPassword').value;
            const userRole = document.getElementById('userRole').value;
            const userAvatar = document.getElementById('userAvatar').value;
            const userActive = document.getElementById('userActive').checked;
            
            if (!userName.trim() || !userEmail.trim()) {
                alert('Veuillez remplir tous les champs obligatoires');
                return;
            }

            try {
                const url = userId ? `/api/users/${userId}` : '/api/users';
                const method = userId ? 'PUT' : 'POST';
                
                const data = { 
                    name: userName.trim(),
                    email: userEmail.trim(),
                    role: userRole,
                    is_active: userActive
                };
                
                if (userPassword.trim()) {
                    data.password = userPassword.trim();
                }
                
                if (userAvatar.trim()) {
                    data.avatar = userAvatar.trim();
                }
                
                const response = await fetch(url, {
                    method: method,
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: JSON.stringify(data)
                });

                if (response.ok) {
                    userModal.hide();
                    location.reload();
                } else {
                    const result = await response.json();
                    alert('Erreur: ' + (result.message || 'Une erreur est survenue'));
                }
            } catch (error) {
                console.error('Erreur:', error);
                alert('Une erreur est survenue lors de l\'enregistrement');
            }
        });

        // Créer le premier utilisateur
        document.getElementById('btnAddFirstUser')?.addEventListener('click', function() {
            document.getElementById('modalTitle').textContent = 'Ajouter un utilisateur';
            document.getElementById('userId').value = '';
            document.getElementById('userName').value = '';
            document.getElementById('userEmail').value = '';
            document.getElementById('userPassword').value = '';
            document.getElementById('userAvatar').value = '';
            document.getElementById('userRole').value = 'user';
            document.getElementById('userActive').checked = true;
            userModal.show();
        });

        // Animation des cartes au scroll - Même que langues
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, {
            threshold: 0.1
        });

        document.querySelectorAll('.user-item').forEach(item => {
            item.style.opacity = '0';
            item.style.transform = 'translateY(20px)';
            item.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
            observer.observe(item);
        });

        // Animation des cartes au survol - Même que langues
        document.querySelectorAll('.card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-8px)';
                this.style.boxShadow = '0 12px 24px rgba(0, 0, 0, 0.3)';
                this.style.borderColor = '#667eea';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
                this.style.boxShadow = 'none';
                this.style.borderColor = 'rgba(255, 255, 255, 0.1)';
            });
        });

        // Ajouter le token CSRF
        const csrfToken = document.querySelector('meta[name="csrf-token"]');
        if (!csrfToken) {
            const meta = document.createElement('meta');
            meta.name = 'csrf-token';
            meta.content = '{{ csrf_token() }}';
            document.head.appendChild(meta);
        }
    </script>
</body>
</html>