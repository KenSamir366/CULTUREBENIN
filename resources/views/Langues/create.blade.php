@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">
                        <i class="fas fa-plus-circle me-2"></i>Ajouter une nouvelle langue
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('langues.store') }}" method="POST">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="nom_langues" class="form-label">
                                <i class="fas fa-font me-1"></i>Nom de la langue *
                            </label>
                            <input type="text" class="form-control @error('nom_langues') is-invalid @enderror" 
                                   id="nom_langues" name="nom_langues" 
                                   value="{{ old('nom_langues') }}" required>
                            @error('nom_langues')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="code_langues" class="form-label">
                                <i class="fas fa-code me-1"></i>Code de la langue *
                            </label>
                            <input type="text" class="form-control @error('code_langues') is-invalid @enderror" 
                                   id="code_langues" name="code_langues" 
                                   value="{{ old('code_langues') }}" 
                                   placeholder="Ex: fon, yor, fr" required>
                            @error('code_langues')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small class="text-muted">Code ISO ou code interne (3-10 caractères)</small>
                        </div>
                        
                        <div class="mb-3">
                            <label for="description" class="form-label">
                                <i class="fas fa-align-left me-1"></i>Description
                            </label>
                            <textarea class="form-control @error('description') is-invalid @enderror" 
                                      id="description" name="description" 
                                      rows="4">{{ old('description') }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('langues.index') }}" class="btn btn-secondary">
                                <i class="fas fa-arrow-left me-1"></i>Retour
                            </a>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save me-1"></i>Enregistrer
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection