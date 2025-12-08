<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parler - Culture_Benin</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* MÊME STYLE QUE LA VUE LANGUES */
        body {
            background-color: #0f172a;
            color: #e2e8f0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .header-bg {
            background: linear-gradient(135deg, #8B5CF6 0%, #7C3AED 100%);
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
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3);
            border-color: #8B5CF6;
        }
        .btn-primary {
            background: linear-gradient(135deg, #8B5CF6 0%, #7C3AED 100%);
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
        .btn-create {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            color: white;
            border: none;
            border-radius: 25px;
            padding: 0.7rem 2rem;
            font-weight: bold;
            transition: all 0.3s ease;
        }
        .btn-create:hover {
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
            border-color: #8B5CF6;
            transform: translateY(-3px);
        }
        .stats-card h3 {
            font-size: 2.2rem;
            font-weight: bold;
            background: linear-gradient(135deg, #8B5CF6, #7C3AED);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 0.5rem;
        }
        .stats-card p {
            color: #94a3b8;
            margin-bottom: 0;
        }
        .table-dark {
            background: rgba(30, 41, 59, 0.8);
            border-radius: 12px;
            overflow: hidden;
        }
        .table-dark thead th {
            background: rgba(139, 92, 246, 0.2);
            border-color: rgba(255, 255, 255, 0.1);
            color: #e2e8f0;
            font-weight: 600;
            padding: 1rem;
        }
        .table-dark tbody tr {
            transition: all 0.3s ease;
        }
        .table-dark tbody tr:hover {
            background: rgba(139, 92, 246, 0.1);
        }
        .badge-region {
            background: linear-gradient(135deg, #3B82F6, #1D4ED8);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.9rem;
            border: none;
        }
        .badge-langue {
            background: linear-gradient(135deg, #10B981, #059669);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.9rem;
            border: none;
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
        .nav-link {
            color: #cbd5e1;
        }
        .nav-link:hover, .nav-link.active {
            color: white;
        }
        .alert-success {
            border-radius: 12px;
            border: 1px solid rgba(72, 187, 120, 0.3);
            background: rgba(72, 187, 120, 0.1);
            color: #a7f3d0;
            backdrop-filter: blur(10px);
        }
        .footer-bg {
            background: rgba(15, 23, 42, 0.9);
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }
        .empty-state {
            padding: 4rem 2rem;
            text-align: center;
        }
        .empty-state i {
            font-size: 4rem;
            margin-bottom: 1rem;
            color: #94a3b8;
        }
        .association-card {
            background: rgba(30, 41, 59, 0.6);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            padding: 1.5rem;
            margin-bottom: 1rem;
            transition: all 0.3s ease;
        }
        .association-card:hover {
            background: rgba(30, 41, 59, 0.8);
            border-color: #8B5CF6;
            transform: translateY(-2px);
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
                <a class="nav-link" href="{{ route('langues.index') }}">
                    <i class="fas fa-language me-1"></i>Langues
                </a>
                <a class="nav-link" href="{{ route('regions.index') }}">
                    <i class="fas fa-map-marker-alt me-1"></i>Régions
                </a>
                <a class="nav-link active" href="{{ route('parlers.index') }}">
                    <i class="fas fa-comments me-1"></i>Parler
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
                        <i class="fas fa-comments me-3"></i>Parlées
                    </h1>
                    <p class="lead mb-4">Associations Région-Langue du Bénin</p>
                    <div class="d-flex flex-wrap gap-2">
                        <span class="badge bg-light px-3 py-2">
                            <i class="fas fa-link me-1"></i> {{ $stats['total_parlers'] }} Associations
                        </span>
                        <span class="badge bg-light px-3 py-2">
                            <i class="fas fa-map me-1"></i> {{ $stats['regions_count'] }} Régions
                        </span>
                        <span class="badge bg-light px-3 py-2">
                            <i class="fas fa-language me-1"></i> {{ $stats['langues_count'] }} Langues
                        </span>
                    </div>
                </div>
                <div class="col-lg-4 text-end">
                    <a href="{{ route('parlers.create') }}" class="btn btn-create">
                        <i class="fas fa-plus-circle me-2"></i>Nouvelle Association
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
            <div class="col-md-4 mb-4">
                <div class="stats-card">
                    <i class="fas fa-link fa-2x mb-3" style="color: #8B5CF6;"></i>
                    <h3>{{ $stats['total_parlers'] }}</h3>
                    <p>Associations Total</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="stats-card">
                    <i class="fas fa-map-marker-alt fa-2x mb-3" style="color: #3B82F6;"></i>
                    <h3>{{ $stats['regions_count'] }}</h3>
                    <p>Régions Différentes</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="stats-card">
                    <i class="fas fa-language fa-2x mb-3" style="color: #10B981;"></i>
                    <h3>{{ $stats['langues_count'] }}</h3>
                    <p>Langues Différentes</p>
                </div>
            </div>
        </div>

        <!-- Liste des associations -->
        <div class="card mb-5">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">
                        <i class="fas fa-list me-2"></i>Liste des Associations
                    </h5>
                    <div class="d-flex">
                        <div class="input-group input-group-sm" style="max-width: 300px;">
                            <span class="input-group-text bg-dark border-dark">
                                <i class="fas fa-search"></i>
                            </span>
                            <input type="text" id="searchInput" class="form-control bg-dark border-dark text-white" 
                                   placeholder="Rechercher...">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body p-0">
                @if($parlers->count() > 0)
                    <div class="table-responsive">
                        <table class="table table-dark table-hover mb-0">
                            <thead>
                                <tr>
                                    <th style="width: 5%">ID</th>
                                    <th style="width: 35%">Région</th>
                                    <th style="width: 35%">Langue</th>
                                    <th style="width: 15%">Date</th>
                                    <th style="width: 10%">Actions</th>
                                </tr>
                            </thead>
                            <tbody id="associationsTable">
                                @foreach($parlers as $parler)
                                <tr class="association-row" data-id="{{ $parler->id }}">
                                    <td class="align-middle">
                                        <span class="badge bg-dark">{{ $parler->id }}</span>
                                    </td>
                                    <td class="align-middle">
                                        @if($parler->region)
                                            <div class="d-flex align-items-center">
                                                <i class="fas fa-map-marker-alt me-2" style="color: #3B82F6;"></i>
                                                <span class="badge-region">
                                                    {{ $parler->region->nom_regions }}
                                                </span>
                                            </div>
                                        @else
                                            <span class="text-muted">N/A</span>
                                        @endif
                                    </td>
                                    <td class="align-middle">
                                        @if($parler->langue)
                                            <div class="d-flex align-items-center">
                                                <i class="fas fa-language me-2" style="color: #10B981;"></i>
                                                <span class="badge-langue">
                                                    {{ $parler->langue->nom }}
                                                </span>
                                            </div>
                                        @else
                                            <span class="text-muted">N/A</span>
                                        @endif
                                    </td>
                                    <td class="align-middle">
                                        <small class="text-muted">
                                            <i class="fas fa-calendar me-1"></i>
                                            {{ $parler->created_at->format('d/m/Y') }}
                                        </small>
                                    </td>
                                    <td class="align-middle">
                                        <div class="btn-group btn-group-sm" role="group">
                                            <a href="{{ route('parlers.show', $parler->id) }}" 
                                               class="btn btn-outline-primary btn-sm" 
                                               title="Voir les détails"
                                               data-bs-toggle="tooltip">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{ route('parlers.edit', $parler->id) }}" 
                                               class="btn btn-outline-warning btn-sm ms-1" 
                                               title="Modifier"
                                               data-bs-toggle="tooltip">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('parlers.destroy', $parler->id) }}" 
                                                  method="POST" class="d-inline ms-1">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" 
                                                        class="btn btn-outline-danger btn-sm"
                                                        title="Supprimer"
                                                        data-bs-toggle="tooltip"
                                                        onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette association ?')">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="empty-state">
                        <i class="fas fa-comments-slash"></i>
                        <h4 class="text-muted mt-3">Aucune association trouvée</h4>
                        <p class="text-muted mb-4">Commencez par créer votre première association région-langue</p>
                        <a href="{{ route('parlers.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus-circle me-2"></i>Créer une association
                        </a>
                    </div>
                @endif
            </div>
            @if($parlers->count() > 0)
            <div class="card-footer">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <small class="text-muted">
                            Affichage de {{ $parlers->count() }} association(s)
                        </small>
                    </div>
                    <div>
                        <small class="text-muted">
                            <i class="fas fa-info-circle me-1"></i>
                            Double-cliquez sur une ligne pour voir les détails
                        </small>
                    </div>
                </div>
            </div>
            @endif
        </div>

        <!-- Vue cartes (alternative) -->
        @if($parlers->count() > 0)
        <div class="card mb-5">
            <div class="card-header">
                <h5 class="mb-0">
                    <i class="fas fa-th-large me-2"></i>Vue Cartes
                </h5>
            </div>
            <div class="card-body">
                <div class="row" id="cardsView">
                    @foreach($parlers as $parler)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="association-card">
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <div>
                                    <span class="badge bg-dark">ID: {{ $parler->id }}</span>
                                </div>
                                <small class="text-muted">
                                    {{ $parler->created_at->format('d/m/Y') }}
                                </small>
                            </div>
                            
                            <div class="mb-3">
                                <h6 class="text-muted mb-2">
                                    <i class="fas fa-map-marker-alt me-1" style="color: #3B82F6;"></i>Région
                                </h6>
                                @if($parler->region)
                                    <div class="d-flex align-items-center">
                                        <span class="badge-region">
                                            {{ $parler->region->nom_regions }}
                                        </span>
                                    </div>
                                @else
                                    <span class="text-muted">Non spécifiée</span>
                                @endif
                            </div>
                            
                            <div class="mb-4">
                                <h6 class="text-muted mb-2">
                                    <i class="fas fa-language me-1" style="color: #10B981;"></i>Langue
                                </h6>
                                @if($parler->langue)
                                    <div class="d-flex align-items-center">
                                        <span class="badge-langue">
                                            {{ $parler->langue->nom }}
                                        </span>
                                    </div>
                                @else
                                    <span class="text-muted">Non spécifiée</span>
                                @endif
                            </div>
                            
                            <div class="d-flex justify-content-between pt-3 border-top border-secondary">
                                <a href="{{ route('parlers.show', $parler->id) }}" 
                                   class="btn btn-sm btn-outline-primary">
                                    <i class="fas fa-eye me-1"></i>Détails
                                </a>
                                <div>
                                    <a href="{{ route('parlers.edit', $parler->id) }}" 
                                       class="btn btn-sm btn-outline-warning me-2">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('parlers.destroy', $parler->id) }}" 
                                          method="POST" class="d-inline"
                                          onsubmit="return confirm('Supprimer cette association ?')">
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
                    @endforeach
                </div>
            </div>
        </div>
        @endif

        <!-- Actions rapides -->
        <div class="row mb-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">
                            <i class="fas fa-bolt me-2"></i>Actions Rapides
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <a href="{{ route('parlers.create') }}" class="btn btn-primary w-100">
                                    <i class="fas fa-plus-circle me-2"></i>Nouvelle Association
                                </a>
                            </div>
                            <div class="col-md-4 mb-3">
                                <a href="{{ route('regions.index') }}" class="btn btn-outline-primary w-100">
                                    <i class="fas fa-map me-2"></i>Gérer les Régions
                                </a>
                            </div>
                            <div class="col-md-4 mb-3">
                                <a href="{{ route('langues.index') }}" class="btn btn-outline-success w-100">
                                    <i class="fas fa-language me-2"></i>Gérer les Langues
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer-bg text-white py-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>Culture_Benin</h5>
                    <p class="text-muted">Plateforme de gestion culturelle du Bénin</p>
                </div>
                <div class="col-md-6 text-end">
                    <p class="text-muted">
                        <i class="fas fa-comments me-1"></i>
                        Gestion des Parler - {{ date('Y') }}
                    </p>
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
            const rows = document.querySelectorAll('.association-row');
            
            rows.forEach(row => {
                const region = row.cells[1].textContent.toLowerCase();
                const langue = row.cells[2].textContent.toLowerCase();
                
                if (region.includes(searchTerm) || langue.includes(searchTerm)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });

        // Double-clic pour voir les détails
        document.querySelectorAll('.association-row').forEach(row => {
            row.addEventListener('dblclick', function() {
                const id = this.dataset.id;
                window.location.href = `/parlers/${id}`;
            });
        });

        // Animation des cartes
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        });

        document.querySelectorAll('.association-card').forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
            observer.observe(card);
        });

        // Initialiser les tooltips
        const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });

        // Animation des statistiques
        document.querySelectorAll('.stats-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px)';
                this.style.borderColor = '#8B5CF6';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(-3px)';
                this.style.borderColor = 'rgba(139, 92, 246, 0.3)';
            });
        });

        // Filtre par type (si ajouté plus tard)
        const filterButtons = document.querySelectorAll('.filter-btn');
        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Retirer la classe active de tous les boutons
                filterButtons.forEach(btn => btn.classList.remove('active'));
                // Ajouter la classe active au bouton cliqué
                this.classList.add('active');
                
                const filter = this.dataset.filter;
                // Implémenter la logique de filtrage ici
            });
        });
    </script>
</body>

</html>