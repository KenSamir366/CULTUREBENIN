<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Types de Contenu - Culture_Benin</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* STYLE FUTURISTE COHÉRENT */
        body {
            background-color: #0f172a;
            color: #e2e8f0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .header-bg {
            background: linear-gradient(135deg, #8b5cf6 0%, #7c3aed 100%);
            color: white;
            padding: 2.5rem 0;
            border-radius: 0 0 25px 25px;
            box-shadow: 0 8px 32px rgba(139, 92, 246, 0.4);
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
            box-shadow: 0 12px 24px rgba(139, 92, 246, 0.3);
            border-color: #8b5cf6;
        }
        .card-header {
            background: linear-gradient(135deg, rgba(139, 92, 246, 0.9) 0%, rgba(124, 58, 237, 0.9) 100%);
            color: white;
            border-radius: 16px 16px 0 0 !important;
            font-weight: bold;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }
        .type-badge {
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
            background: linear-gradient(135deg, #8b5cf6 0%, #7c3aed 100%);
            border: none;
            border-radius: 25px;
            padding: 0.6rem 1.5rem;
            font-weight: 600;
            transition: all 0.3s ease;
            color: white;
        }
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 16px rgba(139, 92, 246, 0.4);
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
            border: 1px solid rgba(139, 92, 246, 0.3);
            border-radius: 12px;
            padding: 1.5rem;
            text-align: center;
            transition: all 0.3s ease;
        }
        .stats-card:hover {
            border-color: #8b5cf6;
            transform: translateY(-3px);
        }
        .stats-card h3 {
            font-size: 2.2rem;
            font-weight: bold;
            background: linear-gradient(135deg, #8b5cf6, #7c3aed);
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
        .search-box .input-group-text {
            background: transparent;
            border: none;
            color: #94a3b8;
        }
        
        /* COULEURS DE TEXTE COHÉRENTES */
        .text-muted {
            color: #94a3b8 !important;
        }
        .text-primary {
            color: #8b5cf6 !important;
        }
        .text-success {
            color: #34d399 !important;
        }
        .text-warning {
            color: #fbbf24 !important;
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
            color: #8b5cf6;
            border-color: #8b5cf6;
        }
        .btn-outline-primary:hover {
            background-color: #8b5cf6;
            border-color: #8b5cf6;
            color: #1f2937;
        }
        .btn-outline-info {
            color: #60a5fa;
            border-color: #60a5fa;
        }
        .btn-outline-info:hover {
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
            background: rgba(139, 92, 246, 0.2);
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
        small {
            color: #94a3b8;
        }
        .text-secondary {
            color: #94a3b8 !important;
        }
        .btn-close-white {
            filter: invert(1) grayscale(100%) brightness(200%);
        }
        .type-icon {
            width: 60px;
            height: 60px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }
        .type-icon-article { background: linear-gradient(135deg, #8b5cf6, #7c3aed); }
        .type-icon-gallery { background: linear-gradient(135deg, #10b981, #059669); }
        .type-icon-video { background: linear-gradient(135deg, #f59e0b, #d97706); }
        .type-icon-audio { background: linear-gradient(135deg, #ec4899, #db2777); }
        .type-icon-document { background: linear-gradient(135deg, #3b82f6, #1d4ed8); }
        .type-icon-default { background: linear-gradient(135deg, #6b7280, #4b5563); }
        
        .progress {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            height: 6px;
        }
        .progress-bar {
            background: linear-gradient(135deg, #8b5cf6 0%, #7c3aed 100%);
            border-radius: 10px;
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
            background: linear-gradient(135deg, #8b5cf6 0%, #7c3aed 100%);
            color: white;
            border-color: transparent;
        }
        .empty-state {
            padding: 4rem 1rem;
            text-align: center;
        }
        .empty-state-icon {
            font-size: 4rem;
            color: #475569;
            margin-bottom: 1.5rem;
        }
    </style>
</head>
<body>
    <!-- Navigation - Même structure -->
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
                <a class="nav-link active" href="{{ route('typecontenus.index') }}">
                    <i class="fas fa-tags me-1"></i>Types de contenu
                </a>
                <a class="nav-link" href="{{ route('langues.index') }}">
                    <i class="fas fa-language me-1"></i>Langues
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
                        <i class="fas fa-tags me-3"></i>Types de Contenu
                    </h1>
                    <p class="lead mb-4">Gérez les catégories de contenu culturel</p>
                    <div class="d-flex flex-wrap gap-2">
                        <span class="badge bg-light px-3 py-2">
                            <i class="fas fa-file-alt me-1"></i> {{ $typecontenus->count() }} Types
                        </span>
                        <span class="badge bg-light px-3 py-2">
                            <i class="fas fa-layer-group me-1"></i> Organisation
                        </span>
                        <span class="badge bg-light px-3 py-2">
                            <i class="fas fa-sitemap me-1"></i> Catégories
                        </span>
                    </div>
                </div>
                <div class="col-lg-4 text-end">
                    <a href="#" class="btn btn-add" id="btnAddType">
                        <i class="fas fa-plus me-2"></i>Nouveau type
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

        <!-- Barre de recherche -->
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="search-box">
                    <i class="fas fa-search me-2"></i>
                    <input type="text" id="searchInput" placeholder="Rechercher un type de contenu par nom...">
                </div>
            </div>
        </div>

        <!-- Liste des types de contenu -->
        <div class="row" id="typesList">
            @forelse($typecontenus as $type)
            <div class="col-xl-4 col-lg-6 col-md-6 mb-4 type-item">
                <div class="card h-100">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span class="fw-bold">
                            <i class="fas fa-tag me-2"></i>{{ $type->nom }}
                        </span>
                        <span class="type-badge">
                            ID: {{ $type->id }}
                        </span>
                    </div>
                    <div class="card-body">
                        <!-- Icône du type -->
                        <div class="text-center mb-3">
                            @php
                                $iconClass = 'type-icon-default';
                                $iconName = 'tag';
                                
                                $nomLower = strtolower($type->nom);
                                if(str_contains($nomLower, 'article') || str_contains($nomLower, 'blog')) {
                                    $iconClass = 'type-icon-article';
                                    $iconName = 'newspaper';
                                } elseif(str_contains($nomLower, 'galerie') || str_contains($nomLower, 'image')) {
                                    $iconClass = 'type-icon-gallery';
                                    $iconName = 'images';
                                } elseif(str_contains($nomLower, 'vidéo') || str_contains($nomLower, 'video')) {
                                    $iconClass = 'type-icon-video';
                                    $iconName = 'video';
                                } elseif(str_contains($nomLower, 'audio') || str_contains($nomLower, 'son')) {
                                    $iconClass = 'type-icon-audio';
                                    $iconName = 'music';
                                } elseif(str_contains($nomLower, 'document') || str_contains($nomLower, 'pdf')) {
                                    $iconClass = 'type-icon-document';
                                    $iconName = 'file-pdf';
                                }
                            @endphp
                            <div class="type-icon {{ $iconClass }} mx-auto">
                                <i class="fas fa-{{ $iconName }} text-white"></i>
                            </div>
                        </div>
                        
                        <!-- Informations -->
                        <div class="text-center mb-4">
                            <h5 class="text-purple mb-2">
                                <i class="fas fa-hashtag me-1"></i>
                                {{ $type->contenus_count ?? 0 }} 
                                {{ ($type->contenus_count ?? 0) == 1 ? 'contenu' : 'contenus' }}
                            </h5>
                            <small class="text-muted">
                                <i class="fas fa-calendar me-1"></i>
                                Créé le {{ $type->created_at->format('d/m/Y') }}
                            </small>
                        </div>
                        
                        <!-- Barre de progression -->
                        <div class="progress mb-4">
                            @php
                                $maxContenus = $typecontenus->max('contenus_count') ?: 1;
                                $percentage = min(100, (($type->contenus_count ?? 0) / $maxContenus) * 100);
                            @endphp
                            <div class="progress-bar" role="progressbar" 
                                 style="width: {{ $percentage }}%"
                                 aria-valuenow="{{ $percentage }}" 
                                 aria-valuemin="0" 
                                 aria-valuemax="100">
                                <span class="visually-hidden">{{ $percentage }}% d'utilisation</span>
                            </div>
                        </div>
                        
                        <!-- Actions rapides -->
                        <div class="d-flex justify-content-center gap-2 mb-3">
                            <button class="btn btn-sm btn-outline-info btn-view-contents" 
                                    data-type-id="{{ $type->id }}"
                                    data-type-name="{{ $type->nom }}">
                                <i class="fas fa-eye me-1"></i>Voir contenus
                            </button>
                            <button class="btn btn-sm btn-outline-success btn-add-content" 
                                    data-type-id="{{ $type->id }}">
                                <i class="fas fa-plus me-1"></i>Ajouter contenu
                            </button>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent border-top-0 pt-0">
                        <div class="d-flex justify-content-between">
                            <button class="btn btn-sm btn-outline-warning btn-edit-type" 
                                    data-type-id="{{ $type->id }}"
                                    data-type-name="{{ $type->nom }}">
                                <i class="fas fa-edit me-1"></i>Modifier
                            </button>
                            <button class="btn btn-sm btn-outline-danger btn-delete-type" 
                                    data-type-id="{{ $type->id }}"
                                    data-type-name="{{ $type->nom }}">
                                <i class="fas fa-trash me-1"></i>Supprimer
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12">
                <div class="empty-state">
                    <div class="empty-state-icon">
                        <i class="fas fa-tags"></i>
                    </div>
                    <h3 class="text-muted mb-3">Aucun type de contenu</h3>
                    <p class="text-muted mb-4">Commencez par créer des types de contenu pour organiser vos publications</p>
                    <button class="btn btn-primary" id="btnAddFirstType">
                        <i class="fas fa-plus me-2"></i>Créer le premier type
                    </button>
                </div>
            </div>
            @endforelse
        </div>

        <!-- Pagination (si pagination) -->
        @if(method_exists($typecontenus, 'hasPages') && $typecontenus->hasPages())
        <div class="row mt-5">
            <div class="col-12">
                <nav aria-label="Navigation des types">
                    <ul class="pagination justify-content-center">
                        @if($typecontenus->onFirstPage())
                        <li class="page-item disabled">
                            <span class="page-link">
                                <i class="fas fa-chevron-left me-2"></i>Précédent
                            </span>
                        </li>
                        @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $typecontenus->previousPageUrl() }}">
                                <i class="fas fa-chevron-left me-2"></i>Précédent
                            </a>
                        </li>
                        @endif

                        @for($i = 1; $i <= $typecontenus->lastPage(); $i++)
                        <li class="page-item {{ $typecontenus->currentPage() == $i ? 'active' : '' }}">
                            <a class="page-link" href="{{ $typecontenus->url($i) }}">{{ $i }}</a>
                        </li>
                        @endfor

                        @if($typecontenus->hasMorePages())
                        <li class="page-item">
                            <a class="page-link" href="{{ $typecontenus->nextPageUrl() }}">
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
                    <p class="text-muted">Gestion des types de contenu culturel</p>
                </div>
                <div class="col-md-6 text-end">
                    <p class="text-muted">&copy; 2024 Culture_Benin. Tous droits réservés.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Modal pour ajouter/modifier un type -->
    <div class="modal fade" id="typeModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="background: rgba(30, 41, 59, 0.95); border: 1px solid rgba(255, 255, 255, 0.1);">
                <div class="modal-header" style="border-bottom: 1px solid rgba(255, 255, 255, 0.1);">
                    <h5 class="modal-title" id="modalTitle"></h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="typeForm">
                        @csrf
                        <input type="hidden" id="typeId" name="id">
                        <div class="mb-3">
                            <label for="typeName" class="form-label">Nom du type</label>
                            <input type="text" class="form-control" id="typeName" name="nom" 
                                   placeholder="Ex: Article, Galerie photo, Vidéo..." required
                                   style="background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.2); color: #e2e8f0;">
                        </div>
                    </form>
                </div>
                <div class="modal-footer" style="border-top: 1px solid rgba(255, 255, 255, 0.1);">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-primary" id="btnSaveType">Enregistrer</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Variables globales
        let currentTypeId = null;
        const typeModal = new bootstrap.Modal(document.getElementById('typeModal'));

        // Recherche en temps réel
        document.getElementById('searchInput').addEventListener('keyup', function() {
            const searchTerm = this.value.toLowerCase();
            const cards = document.querySelectorAll('.type-item');
            
            cards.forEach(card => {
                const typeName = card.querySelector('.card-header span:first-child').textContent.toLowerCase();
                if (typeName.includes(searchTerm)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });

        // Ouvrir modal pour ajouter un type
        document.getElementById('btnAddType').addEventListener('click', function() {
            document.getElementById('modalTitle').textContent = 'Ajouter un type de contenu';
            document.getElementById('typeId').value = '';
            document.getElementById('typeName').value = '';
            typeModal.show();
        });

        // Ouvrir modal pour modifier un type
        document.querySelectorAll('.btn-edit-type').forEach(btn => {
            btn.addEventListener('click', function() {
                const typeId = this.dataset.typeId;
                const typeName = this.dataset.typeName;
                
                document.getElementById('modalTitle').textContent = 'Modifier le type de contenu';
                document.getElementById('typeId').value = typeId;
                document.getElementById('typeName').value = typeName;
                typeModal.show();
            });
        });

        // Sauvegarder un type (ajouter ou modifier)
        document.getElementById('btnSaveType').addEventListener('click', async function() {
            const typeId = document.getElementById('typeId').value;
            const typeName = document.getElementById('typeName').value;
            
            if (!typeName.trim()) {
                alert('Veuillez entrer un nom pour le type de contenu');
                return;
            }

            try {
                const url = typeId 
                    ? `/api/typecontenus/${typeId}` 
                    : '/api/typecontenus';
                
                const method = typeId ? 'PUT' : 'POST';
                const data = { nom: typeName.trim() };
                
                const response = await fetch(url, {
                    method: method,
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: JSON.stringify(data)
                });

                if (response.ok) {
                    typeModal.hide();
                    location.reload(); // Recharger la page pour voir les changements
                } else {
                    const result = await response.json();
                    alert('Erreur: ' + (result.message || 'Une erreur est survenue'));
                }
            } catch (error) {
                console.error('Erreur:', error);
                alert('Une erreur est survenue lors de l\'enregistrement');
            }
        });

        // Supprimer un type
        document.querySelectorAll('.btn-delete-type').forEach(btn => {
            btn.addEventListener('click', function() {
                const typeId = this.dataset.typeId;
                const typeName = this.dataset.typeName;
                
                if (confirm(`Êtes-vous sûr de vouloir supprimer le type "${typeName}" ?`)) {
                    deleteType(typeId);
                }
            });
        });

        async function deleteType(typeId) {
            try {
                const response = await fetch(`/api/typecontenus/${typeId}`, {
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
                    alert('Erreur: ' + (result.message || 'Impossible de supprimer ce type'));
                }
            } catch (error) {
                console.error('Erreur:', error);
                alert('Une erreur est survenue lors de la suppression');
            }
        }

        // Voir les contenus d'un type
        document.querySelectorAll('.btn-view-contents').forEach(btn => {
            btn.addEventListener('click', function() {
                const typeId = this.dataset.typeId;
                const typeName = this.dataset.typeName;
                window.location.href = `/contenus?type=${typeId}`;
            });
        });

        // Ajouter un contenu à un type
        document.querySelectorAll('.btn-add-content').forEach(btn => {
            btn.addEventListener('click', function() {
                const typeId = this.dataset.typeId;
                window.location.href = `/contenus/create?type=${typeId}`;
            });
        });

        // Créer le premier type
        document.getElementById('btnAddFirstType')?.addEventListener('click', function() {
            document.getElementById('modalTitle').textContent = 'Ajouter un type de contenu';
            document.getElementById('typeId').value = '';
            document.getElementById('typeName').value = '';
            typeModal.show();
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

        document.querySelectorAll('.type-item').forEach(item => {
            item.style.opacity = '0';
            item.style.transform = 'translateY(20px)';
            item.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
            observer.observe(item);
        });

        // Animation des cartes au survol
        document.querySelectorAll('.card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-8px)';
                this.style.boxShadow = '0 12px 24px rgba(139, 92, 246, 0.3)';
                this.style.borderColor = '#8b5cf6';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
                this.style.boxShadow = 'none';
                this.style.borderColor = 'rgba(255, 255, 255, 0.1)';
            });
        });

        // Ajouter le token CSRF dans les requêtes
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