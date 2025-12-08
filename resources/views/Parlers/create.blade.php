<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un Parler - Culture_Benin</title>
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
                            <i class="fas fa-plus-circle me-2"></i>
                            Créer une nouvelle association Région-Langue
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('parlers.store') }}" method="POST">
                            @csrf
                            
                            <div class="mb-3">
                                <label for="region_id" class="form-label">
                                    <i class="fas fa-map-marker-alt me-1"></i>Région
                                </label>
                                <select class="form-select @error('region_id') is-invalid @enderror" 
                                        id="region_id" name="region_id" required>
                                    <option value="">Sélectionnez une région</option>
                                    @foreach($regions as $region)
                                        <option value="{{ $region->id }}" 
                                            {{ old('region_id') == $region->id ? 'selected' : '' }}>
                                            {{ $region->nom_regions }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('region_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="langue_id" class="form-label">
                                    <i class="fas fa-language me-1"></i>Langue
                                </label>
                                <select class="form-select @error('langue_id') is-invalid @enderror" 
                                        id="langue_id" name="langue_id" required>
                                    <option value="">Sélectionnez une langue</option>
                                    @foreach($langues as $langue)
                                        <option value="{{ $langue->id }}" 
                                            {{ old('langue_id') == $langue->id ? 'selected' : '' }}>
                                            {{ $langue->nom }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('langue_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save me-1"></i>Créer l'association
                                </button>
                                <a href="{{ route('parlers.index') }}" class="btn btn-secondary">
                                    <i class="fas fa-arrow-left me-1"></i>Annuler
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>