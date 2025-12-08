<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commentaires - Culture_Benin</title>
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
        .note-badge {
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
        .stars {
            color: #fbbf24;
            font-size: 0.9rem;
        }
        .empty-star {
            color: #475569;
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
        .comment-text {
            line-height: 1.6;
            max-height: 120px;
            overflow: hidden;
            position: relative;
        }
        .comment-text.expanded {
            max-height: none;
        }
        .read-more {
            color: #60a5fa;
            cursor: pointer;
            font-size: 0.9rem;
            margin-top: 0.5rem;
            display: inline-block;
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
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #667eea;
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
                <a class="nav-link active" href="{{ route('commentaires.index') }}">
                    <i class="fas fa-comments me-1"></i>Commentaires
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

    <!-- En-tête principal - Même style que langues -->
    <div class="header-bg mb-5">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold mb-3">
                        <i class="fas fa-comments me-3"></i>Commentaires
                    </h1>
                    <p class="lead mb-4">Gérez les retours et avis de la communauté</p>
                    <div class="d-flex flex-wrap gap-2">
                        <span class="badge bg-light px-3 py-2">
                            <i class="fas fa-comment me-1"></i> {{ $commentaires->count() }} Commentaires
                        </span>
                        <span class="badge bg-light px-3 py-2">
                            <i class="fas fa-star me-1"></i> Note moyenne: {{ number_format($stats['average_note'] ?? 0, 1) }}/5
                        </span>
                        <span class="badge bg-light px-3 py-2">
                            <i class="fas fa-users me-1"></i> {{ $stats['unique_users'] ?? 0 }} Utilisateurs
                        </span>
                    </div>
                </div>
                <div class="col-lg-4 text-end">
                    <a href="{{ route('dashboard') }}" class="btn btn-light btn-lg rounded-pill me-2">
                        <i class="fas fa-home me-2"></i>Accueil
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
                    <input type="text" id="searchInput" placeholder="Rechercher dans les commentaires...">
                </div>
            </div>
            <div class="col-md-4 text-end">
                <div class="d-flex flex-wrap justify-content-end gap-2">
                    <button class="filter-btn active" data-filter="all">Tous</button>
                    <button class="filter-btn" data-filter="note-5">
                        <i class="fas fa-star me-1"></i>5★
                    </button>
                    <button class="filter-btn" data-filter="note-4">
                        <i class="fas fa-star me-1"></i>4★
                    </button>
                    <button class="filter-btn" data-filter="recent">
                        <i class="fas fa-clock me-1"></i>Récents
                    </button>
                </div>
            </div>
        </div>

        <!-- Statistiques - Même style que langues -->
        <div class="row mb-5">
            <div class="col-md-4 mb-4">
                <div class="stats-card">
                    <i class="fas fa-comments fa-2x mb-3" style="color: #667eea;"></i>
                    <h3>{{ $stats['total'] ?? 0 }}</h3>
                    <p>Total commentaires</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="stats-card">
                    <i class="fas fa-star fa-2x mb-3" style="color: #fbbf24;"></i>
                    <h3>{{ number_format($stats['average_note'] ?? 0, 1) }}</h3>
                    <p>Note moyenne</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="stats-card">
                    <i class="fas fa-user-friends fa-2x mb-3" style="color: #10b981;"></i>
                    <h3>{{ $stats['today_comments'] ?? 0 }}</h3>
                    <p>Aujourd'hui</p>
                </div>
            </div>
        </div>

        <!-- Liste des commentaires - Même structure de cartes que langues -->
        <div class="row" id="commentairesList">
            @forelse($commentaires as $commentaire)
            <div class="col-xl-4 col-lg-6 col-md-6 mb-4 comment-item" data-note="{{ $commentaire->note }}" data-date="{{ $commentaire->date_commentaires }}">
                <div class="card h-100">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                            @if($commentaire->user && $commentaire->user->avatar)
                                <img src="{{ asset('storage/' . $commentaire->user->avatar) }}" 
                                     class="user-avatar me-2" 
                                     alt="{{ $commentaire->user->name }}">
                            @else
                                <div class="user-avatar me-2 bg-dark d-flex align-items-center justify-content-center">
                                    <i class="fas fa-user text-primary"></i>
                                </div>
                            @endif
                            <span class="fw-bold">{{ Str::limit($commentaire->user->name ?? 'Anonyme', 20) }}</span>
                        </div>
                        @php
                            $noteClass = 'note-badge';
                            if($commentaire->note >= 4) $noteClass = 'note-badge';
                            elseif($commentaire->note >= 3) $noteClass = 'note-badge';
                            else $noteClass = 'note-badge';
                        @endphp
                        <span class="{{ $noteClass }}">
                            {{ $commentaire->note }}/5
                        </span>
                    </div>
                    
                    <div class="card-body">
                        <!-- Étoiles -->
                        <div class="stars mb-3">
                            @for($i = 1; $i <= 5; $i++)
                                @if($i <= $commentaire->note)
                                    <i class="fas fa-star"></i>
                                @else
                                    <i class="far fa-star empty-star"></i>
                                @endif
                            @endfor
                        </div>
                        
                        <!-- Texte du commentaire -->
                        <p class="card-text mb-4 comment-text" id="comment-text-{{ $commentaire->id }}">
                            {{ Str::limit($commentaire->texte, 100) }}
                        </p>
                        
                        @if(strlen($commentaire->texte) > 100)
                        <span class="read-more" onclick="toggleReadMore({{ $commentaire->id }})">
                            Lire la suite
                        </span>
                        @endif
                        
                        <!-- Informations -->
                        <div class="d-flex justify-content-between mb-3">
                            <span class="stat-badge">
                                <i class="fas fa-file-alt me-1"></i>
                                @if($commentaire->contenu)
                                    {{ Str::limit($commentaire->contenu->titre, 15) }}
                                @else
                                    Contenu supprimé
                                @endif
                            </span>
                            <span class="stat-badge">
                                <i class="fas fa-calendar me-1"></i>
                                {{ $commentaire->date_commentaires->format('d/m/Y') }}
                            </span>
                        </div>
                        
                        <!-- Barre de progression (pour la note) -->
                        <div class="progress mb-3">
                            @php
                                $percentage = ($commentaire->note / 5) * 100;
                            @endphp
                            <div class="progress-bar" role="progressbar" 
                                 style="width: {{ $percentage }}%"
                                 aria-valuenow="{{ $percentage }}" 
                                 aria-valuemin="0" 
                                 aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    
                    <div class="card-footer bg-transparent border-top-0">
                        <div class="d-flex justify-content-between">
                            <a href="/contenus/{{ $commentaire->contenu_id }}" 
                               class="btn btn-sm btn-outline-primary">
                                <i class="fas fa-external-link-alt me-1"></i>Contenu
                            </a>
                            <div>
                                <button class="btn btn-sm btn-outline-warning me-2 btn-edit" 
                                        data-id="{{ $commentaire->id }}"
                                        data-text="{{ $commentaire->texte }}"
                                        data-note="{{ $commentaire->note }}">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-danger btn-delete" 
                                        data-id="{{ $commentaire->id }}"
                                        data-author="{{ $commentaire->user->name ?? 'Anonyme' }}">
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
                        <i class="fas fa-comments fa-4x text-muted mb-3"></i>
                        <h4 class="text-muted">Aucun commentaire</h4>
                        <p class="text-muted mb-0">Aucun commentaire n'a été publié pour le moment</p>
                    </div>
                </div>
            </div>
            @endforelse
        </div>

        <!-- Pagination - Même style que langues -->
        @if($commentaires->hasPages())
        <div class="row mt-5">
            <div class="col-12">
                <nav aria-label="Navigation des commentaires">
                    <ul class="pagination justify-content-center">
                        @if($commentaires->onFirstPage())
                        <li class="page-item disabled">
                            <span class="page-link">
                                <i class="fas fa-chevron-left me-2"></i>Précédent
                            </span>
                        </li>
                        @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $commentaires->previousPageUrl() }}">
                                <i class="fas fa-chevron-left me-2"></i>Précédent
                            </a>
                        </li>
                        @endif

                        @for($i = 1; $i <= $commentaires->lastPage(); $i++)
                        <li class="page-item {{ $commentaires->currentPage() == $i ? 'active' : '' }}">
                            <a class="page-link" href="{{ $commentaires->url($i) }}">{{ $i }}</a>
                        </li>
                        @endfor

                        @if($commentaires->hasMorePages())
                        <li class="page-item">
                            <a class="page-link" href="{{ $commentaires->nextPageUrl() }}">
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
                    <p class="text-muted">Gestion des commentaires communautaires</p>
                </div>
                <div class="col-md-6 text-end">
                    <p class="text-muted">&copy; 2024 Culture_Benin. Tous droits réservés.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Modal pour modifier un commentaire (style cohérent) -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="background: rgba(30, 41, 59, 0.95); border: 1px solid rgba(255, 255, 255, 0.1);">
                <div class="modal-header" style="border-bottom: 1px solid rgba(255, 255, 255, 0.1);">
                    <h5 class="modal-title">Modifier le commentaire</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="editForm">
                        @csrf
                        @method('PUT')
                        <input type="hidden" id="editId" name="id">
                        
                        <div class="mb-3">
                            <label for="editNote" class="form-label">Note (1-5)</label>
                            <select class="form-control" id="editNote" name="note"
                                    style="background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.2); color: #e2e8f0;">
                                <option value="1">1 ★</option>
                                <option value="2">2 ★★</option>
                                <option value="3">3 ★★★</option>
                                <option value="4">4 ★★★★</option>
                                <option value="5">5 ★★★★★</option>
                            </select>
                        </div>
                        
                        <div class="mb-3">
                            <label for="editTexte" class="form-label">Commentaire</label>
                            <textarea class="form-control" id="editTexte" name="texte" rows="4" required
                                      style="background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.2); color: #e2e8f0;"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer" style="border-top: 1px solid rgba(255, 255, 255, 0.1);">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-primary" id="btnSaveEdit">Enregistrer</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Variables globales
        const editModal = new bootstrap.Modal(document.getElementById('editModal'));

        // Recherche en temps réel - Même fonction que langues
        document.getElementById('searchInput').addEventListener('keyup', function() {
            const searchTerm = this.value.toLowerCase();
            const cards = document.querySelectorAll('.comment-item');
            
            cards.forEach(card => {
                const commentText = card.querySelector('.card-text').textContent.toLowerCase();
                const author = card.querySelector('.card-header span').textContent.toLowerCase();
                
                if (commentText.includes(searchTerm) || author.includes(searchTerm)) {
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
                const cards = document.querySelectorAll('.comment-item');
                
                cards.forEach(card => {
                    const note = parseInt(card.dataset.note);
                    const commentDate = new Date(card.dataset.date);
                    const now = new Date();
                    const oneDayAgo = new Date(now - 24 * 60 * 60 * 1000);
                    
                    let shouldShow = true;
                    
                    if (filter === 'note-5') {
                        shouldShow = note === 5;
                    } else if (filter === 'note-4') {
                        shouldShow = note === 4;
                    } else if (filter === 'recent') {
                        shouldShow = commentDate >= oneDayAgo;
                    }
                    
                    card.style.display = shouldShow ? 'block' : 'none';
                });
            });
        });

        // Lire la suite/voir moins
        function toggleReadMore(commentId) {
            const textElement = document.getElementById(`comment-text-${commentId}`);
            const readMoreLink = textElement.nextElementSibling;
            
            if (textElement.classList.contains('expanded')) {
                textElement.classList.remove('expanded');
                if (readMoreLink) readMoreLink.textContent = 'Lire la suite';
            } else {
                textElement.classList.add('expanded');
                if (readMoreLink) readMoreLink.textContent = 'Voir moins';
            }
        }

        // Modifier un commentaire
        document.querySelectorAll('.btn-edit').forEach(btn => {
            btn.addEventListener('click', function() {
                const commentId = this.dataset.id;
                const commentText = this.dataset.text;
                const commentNote = this.dataset.note;
                
                document.getElementById('editId').value = commentId;
                document.getElementById('editTexte').value = commentText;
                document.getElementById('editNote').value = commentNote;
                
                editModal.show();
            });
        });

        // Sauvegarder les modifications
        document.getElementById('btnSaveEdit').addEventListener('click', async function() {
            const commentId = document.getElementById('editId').value;
            const formData = new FormData(document.getElementById('editForm'));
            
            try {
                const response = await fetch(`/api/commentaires/${commentId}`, {
                    method: 'PUT',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: JSON.stringify({
                        texte: formData.get('texte'),
                        note: formData.get('note')
                    })
                });

                if (response.ok) {
                    editModal.hide();
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

        // Supprimer un commentaire
        document.querySelectorAll('.btn-delete').forEach(btn => {
            btn.addEventListener('click', function() {
                const commentId = this.dataset.id;
                const author = this.dataset.author;
                
                if (confirm(`Supprimer le commentaire de "${author}" ?`)) {
                    deleteComment(commentId);
                }
            });
        });

        async function deleteComment(commentId) {
            try {
                const response = await fetch(`/api/commentaires/${commentId}`, {
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
                    alert('Erreur: ' + (result.message || 'Impossible de supprimer'));
                }
            } catch (error) {
                console.error('Erreur:', error);
                alert('Une erreur est survenue');
            }
        }

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

        document.querySelectorAll('.comment-item').forEach(item => {
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