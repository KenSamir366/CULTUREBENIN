<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médias - Culture_Benin</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Lightbox pour les médias -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
    <style>
        /* MÊME STYLE QUE LA VUE LANGUES */
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
        .card-img-top {
            height: 200px;
            object-fit: cover;
            border-radius: 16px 16px 0 0;
            transition: transform 0.3s ease;
        }
        .card:hover .card-img-top {
            transform: scale(1.05);
        }
        .media-type-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: bold;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: white;
        }
        .media-type-image { background: linear-gradient(135deg, #4299e1, #38b2ac); }
        .media-type-video { background: linear-gradient(135deg, #ed8936, #dd6b20); }
        .media-type-audio { background: linear-gradient(135deg, #9f7aea, #805ad5); }
        .media-type-document { background: linear-gradient(135deg, #48bb78, #38a169); }
        
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
        .btn-upload {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            color: white;
            border: none;
            border-radius: 25px;
            padding: 0.7rem 2rem;
            font-weight: bold;
            transition: all 0.3s ease;
        }
        .btn-upload:hover {
            background: linear-gradient(135deg, #0da271 0%, #047857 100%);
            transform: translateY(-2px);
            box-shadow: 0 8px 16px rgba(16, 185, 129, 0.4);
            color: white;
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
        .pagination .page-link {
            background: rgba(30, 41, 59, 0.8);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: #cbd5e1;
        }
        .pagination .page-item.active .page-link {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-color: transparent;
            color: white;
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
        .media-preview {
            border-radius: 12px;
            overflow: hidden;
            position: relative;
            cursor: pointer;
        }
        .media-preview::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to bottom, transparent 50%, rgba(0,0,0,0.7) 100%);
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        .media-preview:hover::after {
            opacity: 1;
        }
        .play-btn {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: rgba(0, 0, 0, 0.7);
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
            z-index: 2;
        }
        .media-preview:hover .play-btn {
            opacity: 1;
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
        small {
            color: #94a3b8;
        }
        .text-secondary {
            color: #94a3b8 !important;
        }
        .fs-7 {
            font-size: 0.875rem;
        }
        .btn-close-white {
            filter: invert(1) grayscale(100%) brightness(200%);
        }
    </style>
</head>
<body>
    <!-- Navigation - Même que vue langues -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">
                <i class="fas fa-globe-africa me-2"></i>Culture_Benin
            </a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="/">
                    <i class="fas fa-home me-1"></i>Accueil
                </a>
                <a class="nav-link active" href="{{ route('medias.index') }}">
                    <i class="fas fa-photo-video me-1"></i>Médias
                </a>
                <a class="nav-link" href="{{ route('contenus.index') }}">
                    <i class="fas fa-file-alt me-1"></i>Contenus
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
                        <i class="fas fa-photo-video me-3"></i>Galerie Médias
                    </h1>
                    <p class="lead mb-4">Découvrez et gérez les médias culturels du Bénin</p>
                    <div class="d-flex flex-wrap gap-2">
                        <span class="badge bg-light px-3 py-2">
                            <i class="fas fa-images me-1"></i> Photos
                        </span>
                        <span class="badge bg-light px-3 py-2">
                            <i class="fas fa-video me-1"></i> Vidéos
                        </span>
                        <span class="badge bg-light px-3 py-2">
                            <i class="fas fa-music me-1"></i> Audios
                        </span>
                        <span class="badge bg-light px-3 py-2">
                            <i class="fas fa-file-alt me-1"></i> Documents
                        </span>
                    </div>
                </div>
                <div class="col-lg-4 text-end">
                    <a href="{{ route('medias.create') }}" class="btn btn-upload">
                        <i class="fas fa-cloud-upload-alt me-2"></i>Téléverser
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

        <!-- Statistiques -->
        <div class="row mb-5">
            <div class="col-md-3 mb-4">
                <div class="stats-card">
                    <i class="fas fa-images fa-2x mb-3" style="color: #4299e1;"></i>
                    <h3>{{ $medias->where('type', 'image')->count() }}</h3>
                    <p>Images</p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="stats-card">
                    <i class="fas fa-video fa-2x mb-3" style="color: #ed8936;"></i>
                    <h3>{{ $medias->where('type', 'video')->count() }}</h3>
                    <p>Vidéos</p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="stats-card">
                    <i class="fas fa-music fa-2x mb-3" style="color: #9f7aea;"></i>
                    <h3>{{ $medias->where('type', 'audio')->count() }}</h3>
                    <p>Audios</p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="stats-card">
                    <i class="fas fa-file-alt fa-2x mb-3" style="color: #48bb78;"></i>
                    <h3>{{ $medias->where('type', 'document')->count() }}</h3>
                    <p>Documents</p>
                </div>
            </div>
        </div>

        <!-- Barre de recherche et filtres -->
        <div class="row mb-4">
            <div class="col-md-6 mb-3">
                <div class="search-box">
                    <i class="fas fa-search me-2"></i>
                    <input type="text" id="searchInput" placeholder="Rechercher des médias...">
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex flex-wrap justify-content-end">
                    <button class="filter-btn active" data-filter="all">Tous</button>
                    <button class="filter-btn" data-filter="image">
                        <i class="fas fa-image me-1"></i>Images
                    </button>
                    <button class="filter-btn" data-filter="video">
                        <i class="fas fa-video me-1"></i>Vidéos
                    </button>
                    <button class="filter-btn" data-filter="audio">
                        <i class="fas fa-music me-1"></i>Audios
                    </button>
                    <button class="filter-btn" data-filter="document">
                        <i class="fas fa-file-alt me-1"></i>Documents
                    </button>
                </div>
            </div>
        </div>

        <!-- Grille des médias -->
        <div class="row" id="mediaGrid">
            @forelse($medias as $media)
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4 media-item" data-type="{{ $media->type }}">
                <div class="card h-100">
                    <!-- Badge type média -->
                    <span class="media-type-badge media-type-{{ $media->type }}">
                        @if($media->type == 'image')
                            <i class="fas fa-image me-1"></i>Image
                        @elseif($media->type == 'video')
                            <i class="fas fa-video me-1"></i>Vidéo
                        @elseif($media->type == 'audio')
                            <i class="fas fa-music me-1"></i>Audio
                        @else
                            <i class="fas fa-file-alt me-1"></i>Document
                        @endif
                    </span>
                    
                    <!-- Prévisualisation -->
                    <div class="media-preview">
                        @if($media->type == 'image')
                            <img src="{{ asset('storage/' . $media->chemin) }}" 
                                 class="card-img-top" 
                                 alt="{{ $media->titre }}"
                                 data-lightbox="media-gallery"
                                 data-title="{{ $media->titre }}">
                        @elseif($media->type == 'video')
                            <img src="https://via.placeholder.com/300x200/667eea/ffffff?text=Vidéo" 
                                 class="card-img-top" 
                                 alt="{{ $media->titre }}">
                            <div class="play-btn">
                                <i class="fas fa-play text-white fa-lg"></i>
                            </div>
                        @elseif($media->type == 'audio')
                            <div class="card-img-top bg-dark d-flex align-items-center justify-content-center">
                                <i class="fas fa-music fa-4x" style="color: #9f7aea;"></i>
                            </div>
                        @else
                            <div class="card-img-top bg-secondary d-flex align-items-center justify-content-center">
                                <i class="fas fa-file-alt fa-4x" style="color: #48bb78;"></i>
                            </div>
                        @endif
                    </div>
                    
                    <div class="card-body">
                        <h5 class="card-title">{{ Str::limit($media->titre, 40) }}</h5>
                        <p class="card-text text-muted small">
                            <i class="fas fa-user me-1"></i> {{ $media->user->name ?? 'Anonyme' }}<br>
                            <i class="fas fa-calendar me-1"></i> {{ $media->created_at->format('d/m/Y') }}<br>
                            @if($media->contenu)
                            <i class="fas fa-link me-1"></i> Lié à un contenu
                            @endif
                        </p>
                    </div>
                    <div class="card-footer bg-transparent border-top-0">
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('medias.show', $media->id) }}" 
                               class="btn btn-sm btn-outline-primary">
                                <i class="fas fa-eye me-1"></i>Voir
                            </a>
                            <div>
                                <a href="{{ route('medias.edit', $media->id) }}" 
                                   class="btn btn-sm btn-outline-warning me-2">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('medias.destroy', $media->id) }}" 
                                      method="POST" class="d-inline"
                                      onsubmit="return confirm('Supprimer ce média ?')">
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
                <div class="text-center py-5">
                    <i class="fas fa-photo-video fa-4x text-muted mb-4"></i>
                    <h3 class="text-muted">Aucun média trouvé</h3>
                    <p class="text-muted mb-4">Commencez par téléverser vos premiers médias</p>
                    <a href="{{ route('medias.create') }}" class="btn btn-primary">
                        <i class="fas fa-cloud-upload-alt me-2"></i>Téléverser un média
                    </a>
                </div>
            </div>
            @endforelse
        </div>

        <!-- Pagination -->
        @if($medias->hasPages())
        <div class="row mt-5">
            <div class="col-12">
                <nav aria-label="Navigation des médias">
                    <ul class="pagination justify-content-center">
                        @if($medias->onFirstPage())
                        <li class="page-item disabled">
                            <span class="page-link">
                                <i class="fas fa-chevron-left me-2"></i>Précédent
                            </span>
                        </li>
                        @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $medias->previousPageUrl() }}">
                                <i class="fas fa-chevron-left me-2"></i>Précédent
                            </a>
                        </li>
                        @endif

                        @for($i = 1; $i <= $medias->lastPage(); $i++)
                        <li class="page-item {{ $medias->currentPage() == $i ? 'active' : '' }}">
                            <a class="page-link" href="{{ $medias->url($i) }}">{{ $i }}</a>
                        </li>
                        @endfor

                        @if($medias->hasMorePages())
                        <li class="page-item">
                            <a class="page-link" href="{{ $medias->nextPageUrl() }}">
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

    <!-- Footer - Même que vue langues -->
    <footer class="footer-bg text-white py-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>Culture_Benin</h5>
                    <p class="text-muted">Plateforme de partage culturel du Bénin</p>
                </div>
                <div class="col-md-6 text-end">
                    <p class="text-muted">&copy; 2024 Culture_Benin. Tous droits réservés.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
    
    <script>
        // Filtrage des médias
        document.querySelectorAll('.filter-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                // Retirer la classe active de tous les boutons
                document.querySelectorAll('.filter-btn').forEach(b => {
                    b.classList.remove('active');
                });
                // Ajouter la classe active au bouton cliqué
                this.classList.add('active');
                
                const filter = this.dataset.filter;
                const mediaItems = document.querySelectorAll('.media-item');
                
                mediaItems.forEach(item => {
                    if (filter === 'all' || item.dataset.type === filter) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });

        // Recherche en temps réel
        document.getElementById('searchInput').addEventListener('keyup', function() {
            const searchTerm = this.value.toLowerCase();
            const mediaItems = document.querySelectorAll('.media-item');
            
            mediaItems.forEach(item => {
                const title = item.querySelector('.card-title').textContent.toLowerCase();
                if (title.includes(searchTerm)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });

        // Configuration Lightbox
        lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true,
            'albumLabel': "Image %1 sur %2"
        });

        // Animation au scroll
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        });

        document.querySelectorAll('.media-item').forEach(item => {
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