<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rôles - Culture_Benin</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
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
        .role-badge {
            color: white;
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: bold;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        .badge-admin { background: linear-gradient(135deg, #8b5cf6 0%, #7c3aed 100%); }
        .badge-moderator { background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%); }
        .badge-user { background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%); }
        .badge-editor { background: linear-gradient(135deg, #10b981 0%, #059669 100%); }
        .badge-viewer { background: linear-gradient(135deg, #6b7280 0%, #4b5563 100%); }
        
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
        .progress {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            height: 6px;
        }
        .progress-bar {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 10px;
        }
        .permissions-list {
            display: flex;
            flex-wrap: wrap;
            gap: 0.3rem;
            margin-top: 0.5rem;
        }
        .permission-badge {
            padding: 0.2rem 0.5rem;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 6px;
            font-size: 0.75rem;
            color: #94a3b8;
            border: 1px solid rgba(255, 255, 255, 0.1);
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
                <a class="nav-link" href="{{ route('users.index') }}">
                    <i class="fas fa-users me-1"></i>Utilisateurs
                </a>
                <a class="nav-link" href="{{ route('langues.index') }}">
                    <i class="fas fa-language me-1"></i>Langues
                </a>
                <a class="nav-link active" href="{{ route('roles.index') }}">
                    <i class="fas fa-user-shield me-1"></i>Rôles
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

    <!-- En-tête principal -->
    <div class="header-bg mb-5">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold mb-3">
                        <i class="fas fa-user-shield me-3"></i>Gestion des Rôles
                    </h1>
                    <p class="lead mb-4">Configurez les permissions et accès des utilisateurs</p>
                    <div class="d-flex flex-wrap gap-2">
                        <span class="badge bg-light px-3 py-2">
                            <i class="fas fa-shield-alt me-1"></i> {{ $roles->count() }} Rôles
                        </span>
                        <span class="badge bg-light px-3 py-2">
                            <i class="fas fa-user-check me-1"></i> {{ $stats['total_users'] ?? 0 }} Utilisateurs
                        </span>
                        <span class="badge bg-light px-3 py-2">
                            <i class="fas fa-user-shield me-1"></i> {{ $stats['admin_users'] ?? 0 }} Admins
                        </span>
                    </div>
                </div>
                <div class="col-lg-4 text-end">
                    <a href="{{ route('dashboard') }}" class="btn btn-light btn-lg rounded-pill me-2">
                        <i class="fas fa-home me-2"></i>Accueil
                    </a>
                    <a href="{{ route('roles.create') }}" class="btn btn-add">
                        <i class="fas fa-plus me-2"></i>Nouveau rôle
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
                    <i class="fas fa-search me-2"></i>
                    <input type="text" id="searchInput" placeholder="Rechercher un rôle...">
                </div>
            </div>
            <div class="col-md-4 text-end">
                <div class="d-flex flex-wrap justify-content-end gap-2">
                    <button class="filter-btn active" data-filter="all">Tous</button>
                    <button class="filter-btn" data-filter="admin">
                        <i class="fas fa-user-shield me-1"></i>Administrateurs
                    </button>
                    <button class="filter-btn" data-filter="default">
                        <i class="fas fa-user me-1"></i>Utilisateurs
                    </button>
                </div>
            </div>
        </div>

        <!-- Statistiques -->
        <div class="row mb-5">
            <div class="col-md-3 mb-4">
                <div class="stats-card">
                    <i class="fas fa-user-shield fa-2x mb-3" style="color: #667eea;"></i>
                    <h3>{{ $roles->count() }}</h3>
                    <p>Rôles définis</p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="stats-card">
                    <i class="fas fa-users fa-2x mb-3" style="color: #10b981;"></i>
                    <h3>{{ $stats['total_users'] ?? 0 }}</h3>
                    <p>Utilisateurs</p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="stats-card">
                    <i class="fas fa-user-tie fa-2x mb-3" style="color: #f59e0b;"></i>
                    <h3>{{ $stats['admin_users'] ?? 0 }}</h3>
                    <p>Administrateurs</p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="stats-card">
                    <i class="fas fa-user-clock fa-2x mb-3" style="color: #8b5cf6;"></i>
                    <h3>{{ $stats['active_roles'] ?? 0 }}</h3>
                    <p>Rôles actifs</p>
                </div>
            </div>
        </div>

        <!-- Liste des rôles -->
        <div class="row" id="rolesList">
            @forelse($roles as $role)
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4 role-item" 
                 data-type="{{ strtolower($role->name) }}">
                <div class="card h-100">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span class="fw-bold">
                            <i class="fas fa-user-tag me-2"></i>{{ $role->name }}
                        </span>
                        @php
                            $badgeClass = 'badge-user';
                            $roleName = strtolower($role->name);
                            if(str_contains($roleName, 'admin')) $badgeClass = 'badge-admin';
                            elseif(str_contains($roleName, 'moderator') || str_contains($roleName, 'modérateur')) $badgeClass = 'badge-moderator';
                            elseif(str_contains($roleName, 'editor') || str_contains($roleName, 'éditeur')) $badgeClass = 'badge-editor';
                            elseif(str_contains($roleName, 'viewer') || str_contains($roleName, 'lecteur')) $badgeClass = 'badge-viewer';
                        @endphp
                        <span class="role-badge {{ $badgeClass }}">
                            {{ $role->users_count ?? 0 }} <i class="fas fa-user ms-1"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <p class="card-text mb-4">
                            {{ $role->description ?? 'Aucune description' }}
                        </p>
                        
                        <!-- Permissions -->
                        @if($role->permissions && count($role->permissions) > 0)
                        <div class="mb-3">
                            <small class="text-muted d-block mb-2">Permissions :</small>
                            <div class="permissions-list">
                                @foreach($role->permissions->take(5) as $permission)
                                <span class="permission-badge">
                                    <i class="fas fa-check-circle me-1"></i>
                                    {{ Str::limit($permission->name, 15) }}
                                </span>
                                @endforeach
                                @if(count($role->permissions) > 5)
                                <span class="permission-badge">
                                    +{{ count($role->permissions) - 5 }}
                                </span>
                                @endif
                            </div>
                        </div>
                        @endif
                        
                        <div class="d-flex justify-content-between mb-3">
                            <span class="stat-badge">
                                <i class="fas fa-users me-1"></i>
                                {{ $role->users_count ?? 0 }} utilisateurs
                            </span>
                            <span class="stat-badge">
                                <i class="fas fa-calendar me-1"></i>
                                {{ $role->created_at->format('d/m/Y') }}
                            </span>
                        </div>
                        
                        <!-- Barre de progression pour l'utilisation -->
                        <div class="progress mb-3">
                            @php
                                $maxUsers = $roles->max('users_count') ?: 1;
                                $percentage = min(100, (($role->users_count ?? 0) / $maxUsers) * 100);
                            @endphp
                            <div class="progress-bar" role="progressbar" 
                                 style="width: {{ $percentage }}%"
                                 aria-valuenow="{{ $percentage }}" 
                                 aria-valuemin="0" 
                                 aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent border-top-0 pt-0">
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('roles.show', $role->id) }}" 
                               class="btn btn-sm btn-outline-primary">
                                <i class="fas fa-eye me-1"></i>Voir
                            </a>
                            <div>
                                <a href="{{ route('roles.edit', $role->id) }}" 
                                   class="btn btn-sm btn-outline-warning me-2">
                                    <i class="fas fa-edit"></i>
                                </a>
                                @if(!in_array(strtolower($role->name), ['admin', 'administrateur']))
                                <form action="{{ route('roles.destroy', $role->id) }}" 
                                      method="POST" class="d-inline" 
                                      onsubmit="return confirm('Supprimer ce rôle ?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12">
                <div class="card">
                    <div class="card-body text-center py-5">
                        <i class="fas fa-user-shield fa-4x text-muted mb-3"></i>
                        <h4 class="text-muted">Aucun rôle défini</h4>
                        <p class="text-muted mb-4">Commencez par créer des rôles pour gérer les permissions</p>
                        <a href="{{ route('roles.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus me-2"></i>Créer le premier rôle
                        </a>
                    </div>
                </div>
            </div>
            @endforelse
        </div>

        <!-- Pagination -->
        @if(method_exists($roles, 'hasPages') && $roles->hasPages())
        <div class="row mt-5">
            <div class="col-12">
                <nav aria-label="Navigation des rôles">
                    <ul class="pagination justify-content-center">
                        @if($roles->onFirstPage())
                        <li class="page-item disabled">
                            <span class="page-link">
                                <i class="fas fa-chevron-left me-2"></i>Précédent
                            </span>
                        </li>
                        @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $roles->previousPageUrl() }}">
                                <i class="fas fa-chevron-left me-2"></i>Précédent
                            </a>
                        </li>
                        @endif

                        @for($i = 1; $i <= $roles->lastPage(); $i++)
                        <li class="page-item {{ $roles->currentPage() == $i ? 'active' : '' }}">
                            <a class="page-link" href="{{ $roles->url($i) }}">{{ $i }}</a>
                        </li>
                        @endfor

                        @if($roles->hasMorePages())
                        <li class="page-item">
                            <a class="page-link" href="{{ $roles->nextPageUrl() }}">
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

    <!-- Footer -->
    <footer class="footer-bg text-white py-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>Culture_Benin</h5>
                    <p class="text-muted">Gestion des rôles et permissions</p>
                </div>
                <div class="col-md-6 text-end">
                    <p class="text-muted">&copy; 2024 Culture_Benin. Tous droits réservés.</p>
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
            const cards = document.querySelectorAll('.role-item');
            
            cards.forEach(card => {
                const roleName = card.querySelector('.card-header span:first-child').textContent.toLowerCase();
                const roleDescription = card.querySelector('.card-text').textContent.toLowerCase();
                
                if (roleName.includes(searchTerm) || roleDescription.includes(searchTerm)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });

        // Filtrage
        document.querySelectorAll('.filter-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                
                const filter = this.dataset.filter;
                const roleItems = document.querySelectorAll('.role-item');
                
                roleItems.forEach(item => {
                    const roleType = item.dataset.type;
                    
                    let shouldShow = false;
                    if (filter === 'all') {
                        shouldShow = true;
                    } else if (filter === 'admin') {
                        shouldShow = roleType.includes('admin');
                    } else if (filter === 'default') {
                        shouldShow = !roleType.includes('admin') && 
                                    (roleType.includes('user') || roleType.includes('editor') || 
                                     roleType.includes('viewer') || roleType.includes('moderator'));
                    }
                    
                    item.style.display = shouldShow ? 'block' : 'none';
                });
            });
        });

        // Animation des cartes au scroll
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

        document.querySelectorAll('.role-item').forEach(item => {
            item.style.opacity = '0';
            item.style.transform = 'translateY(20px)';
            item.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
            observer.observe(item);
        });

        // Animation des cartes au survol
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
    </script>
</body>
</html>