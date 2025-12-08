<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails Parler - Culture_Benin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body { background-color: #0f172a; color: #e2e8f0; }
        .card { background: rgba(30, 41, 59, 0.8); border: 1px solid rgba(255,255,255,0.1); }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">
                            <i class="fas fa-eye me-2"></i>
                            Détails de l'association
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-4">
                            <h5>Informations</h5>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <p><strong>ID :</strong> {{ $parler->id }}</p>
                                    <p><strong>Date de création :</strong> {{ $parler->created_at->format('d/m/Y H:i') }}</p>
                                </div>
                                <div class="col-md-6">
                                    <p><strong>Dernière modification :</strong> {{ $parler->updated_at->format('d/m/Y H:i') }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <h5>Région</h5>
                            <hr>
                            @if($parler->region)
                                <div class="card bg-dark mb-3">
                                    <div class="card-body">
                                        <h6 class="card-title">
                                            <i class="fas fa-map-marker-alt me-2"></i>
                                            {{ $parler->region->nom_regions }}
                                        </h6>
                                        <p class="card-text mb-0">
                                            <small>ID: {{ $parler->region->id }}</small>
                                        </p>
                                    </div>
                                </div>
                            @else
                                <p class="text-muted">Aucune région associée</p>
                            @endif
                        </div>

                        <div class="mb-4">
                            <h5>Langue</h5>
                            <hr>
                            @if($parler->langue)
                                <div class="card bg-dark mb-3">
                                    <div class="card-body">
                                        <h6 class="card-title">
                                            <i class="fas fa-language me-2"></i>
                                            {{ $parler->langue->nom }}
                                        </h6>
                                        <p class="card-text mb-0">
                                            <small>ID: {{ $parler->langue->id }}</small>
                                        </p>
                                    </div>
                                </div>
                            @else
                                <p class="text-muted">Aucune langue associée</p>
                            @endif
                        </div>

                        <div class="mt-4">
                            <a href="{{ route('parlers.edit', $parler->id) }}" class="btn btn-warning">
                                <i class="fas fa-edit me-1"></i>Modifier
                            </a>
                            <a href="{{ route('parlers.index') }}" class="btn btn-secondary">
                                <i class="fas fa-arrow-left me-1"></i>Retour à la liste
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>