<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paiement - Culture_Benin</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* MÊME STYLE EXACT QUE LA VUE LANGUES/MÉDIAS */
        body {
            background-color: #0f172a;
            color: #e2e8f0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
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
        .payment-card {
            background: rgba(30, 41, 59, 0.8);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 16px;
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
            overflow: hidden;
        }
        .payment-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3);
            border-color: #667eea;
        }
        .btn-pay {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            border: none;
            border-radius: 25px;
            padding: 0.8rem 2rem;
            font-weight: bold;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            color: white;
            width: 100%;
        }
        .btn-pay:hover {
            background: linear-gradient(135deg, #0da271 0%, #047857 100%);
            transform: translateY(-2px);
            box-shadow: 0 8px 16px rgba(16, 185, 129, 0.4);
            color: white;
        }
        .btn-secondary-custom {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: #cbd5e1;
            border-radius: 25px;
            padding: 0.6rem 1.5rem;
            transition: all 0.3s ease;
        }
        .btn-secondary-custom:hover {
            background: rgba(255, 255, 255, 0.2);
            border-color: rgba(255, 255, 255, 0.3);
            color: white;
        }
        .form-control {
            background: rgba(15, 23, 42, 0.6);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: #e2e8f0;
            border-radius: 12px;
            padding: 0.75rem 1rem;
            transition: all 0.3s ease;
        }
        .form-control:focus {
            background: rgba(15, 23, 42, 0.8);
            border-color: #667eea;
            color: white;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
        }
        .form-control::placeholder {
            color: #94a3b8;
        }
        .form-label {
            color: #cbd5e1;
            font-weight: 500;
            margin-bottom: 0.5rem;
        }
        .payment-icon {
            font-size: 3rem;
            background: linear-gradient(135deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 1rem;
        }
        .info-box {
            background: rgba(15, 23, 42, 0.5);
            border: 1px solid rgba(102, 126, 234, 0.3);
            border-radius: 12px;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
        }
        .secure-badge {
            background: linear-gradient(135deg, #48bb78, #38a169);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.9rem;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }
        .amount-display {
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.2), rgba(118, 75, 162, 0.2));
            border: 1px solid rgba(102, 126, 234, 0.3);
            border-radius: 12px;
            padding: 1.5rem;
            text-align: center;
            margin-bottom: 2rem;
        }
        .amount-display h2 {
            font-size: 2.5rem;
            font-weight: bold;
            background: linear-gradient(135deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 0.5rem;
        }
        .payment-methods {
            display: flex;
            gap: 1rem;
            justify-content: center;
            margin-top: 1.5rem;
        }
        .payment-method {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            padding: 1rem;
            text-align: center;
            flex: 1;
            transition: all 0.3s ease;
        }
        .payment-method:hover {
            background: rgba(102, 126, 234, 0.1);
            border-color: #667eea;
            transform: translateY(-2px);
        }
        .payment-method.active {
            background: rgba(102, 126, 234, 0.2);
            border-color: #667eea;
        }
        .payment-method i {
            font-size: 2rem;
            margin-bottom: 0.5rem;
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
        .footer-bg {
            background: rgba(15, 23, 42, 0.9);
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            margin-top: auto;
        }
        .nav-link {
            color: #cbd5e1;
        }
        .nav-link:hover, .nav-link.active {
            color: white;
        }
        .badge {
            background: rgba(255, 255, 255, 0.1);
            color: #cbd5e1;
            border: 1px solid rgba(255, 255, 255, 0.2);
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
        .step-indicator {
            display: flex;
            justify-content: space-between;
            margin-bottom: 2rem;
            position: relative;
        }
        .step-indicator::before {
            content: '';
            position: absolute;
            top: 15px;
            left: 50px;
            right: 50px;
            height: 2px;
            background: rgba(255, 255, 255, 0.1);
            z-index: 1;
        }
        .step {
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            z-index: 2;
        }
        .step-number {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            color: #94a3b8;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            margin-bottom: 0.5rem;
            transition: all 0.3s ease;
        }
        .step.active .step-number {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
        }
        .step.completed .step-number {
            background: linear-gradient(135deg, #10b981, #059669);
            color: white;
        }
        .step-label {
            color: #94a3b8;
            font-size: 0.9rem;
        }
        .step.active .step-label {
            color: white;
            font-weight: 500;
        }
    </style>
</head>
<body>
    <!-- Navigation - Identique à votre vue -->
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
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        <i class="fas fa-user-circle me-1"></i>Mon Compte
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#"><i class="fas fa-user me-2"></i>Profil</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-history me-2"></i>Historique</a></li>
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
                        <i class="fas fa-credit-card me-3"></i>Paiement Sécurisé
                    </h1>
                    <p class="lead mb-4">Finalisez votre achat en toute sécurité</p>
                    <div class="d-flex flex-wrap gap-2">
                        <span class="badge bg-light px-3 py-2">
                            <i class="fas fa-shield-alt me-1"></i> 100% Sécurisé
                        </span>
                        <span class="badge bg-light px-3 py-2">
                            <i class="fas fa-lock me-1"></i> Cryptage SSL
                        </span>
                        <span class="badge bg-light px-3 py-2">
                            <i class="fas fa-bolt me-1"></i> Paiement Instantané
                        </span>
                    </div>
                </div>
                <div class="col-lg-4 text-end">
                    <div class="secure-badge">
                        <i class="fas fa-lock"></i>
                        Connexion sécurisée
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <!-- Indicateur d'étapes -->
                <div class="step-indicator mb-5">
                    <div class="step completed">
                        <div class="step-number">
                            <i class="fas fa-check"></i>
                        </div>
                        <div class="step-label">Panier</div>
                    </div>
                    <div class="step completed">
                        <div class="step-number">
                            <i class="fas fa-check"></i>
                        </div>
                        <div class="step-label">Identification</div>
                    </div>
                    <div class="step active">
                        <div class="step-number">3</div>
                        <div class="step-label">Paiement</div>
                    </div>
                    <div class="step">
                        <div class="step-number">4</div>
                        <div class="step-label">Confirmation</div>
                    </div>
                </div>

                <!-- Carte de paiement -->
                <div class="payment-card p-4 mb-4">
                    <!-- Affichage du montant -->
                    <div class="amount-display">
                        <h2>
                            @if(isset($amount))
                                {{ number_format($amount / 100, 0, ',', ' ') }} XOF
                            @else
                            0 XOF
                            @endif
                        </h2>
                        <p class="text-muted mb-0">Montant total à payer</p>
                    </div>

                    <!-- Formulaire de paiement -->
                    <form action="{{ route('paiement.traiter') }}" method="POST" id="paymentForm">
                        @csrf
                        
                        <!-- Champs masqués pour les données de produit -->
                        <input type="hidden" name="montant" id="montantInput" 
                               value="{{ isset($amount) ? $amount : 100 }}">
                        <input type="hidden" name="currency" value="XOF">
                        <input type="hidden" name="description" value="Paiement Culture Benin">

                        <div class="row">
                            <!-- Colonne gauche : Informations personnelles -->
                            <div class="col-md-6">
                                <h4 class="mb-4">
                                    <i class="fas fa-user-circle me-2"></i>Informations personnelles
                                </h4>
                                
                                <div class="mb-3">
                                    <label for="email" class="form-label">Adresse email *</label>
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i class="fas fa-envelope"></i>
                                        </span>
                                        <input type="email" 
                                               class="form-control" 
                                               id="email" 
                                               name="email" 
                                               value="{{ old('email', auth()->check() ? auth()->user()->email : '') }}" 
                                               required
                                               placeholder="votre@email.com">
                                    </div>
                                    @error('email')
                                        <div class="text-danger small mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="nom" class="form-label">Nom *</label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="fas fa-user"></i>
                                            </span>
                                            <input type="text" 
                                                   class="form-control" 
                                                   id="nom" 
                                                   name="nom" 
                                                   value="{{ old('nom') }}" 
                                                   required
                                                   placeholder="Votre nom">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="prenom" class="form-label">Prénom *</label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="fas fa-user"></i>
                                            </span>
                                            <input type="text" 
                                                   class="form-control" 
                                                   id="prenom" 
                                                   name="prenom" 
                                                   value="{{ old('prenom') }}" 
                                                   required
                                                   placeholder="Votre prénom">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="mb-4">
                                    <label for="telephone" class="form-label">Téléphone *</label>
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i class="fas fa-phone"></i>
                                        </span>
                                        <input type="tel" 
                                               class="form-control" 
                                               id="telephone" 
                                               name="telephone" 
                                               value="{{ old('telephone') }}" 
                                               required
                                               placeholder="+225 07 00 00 00 00">
                                    </div>
                                    <small class="text-muted">Format: +225 suivi de 10 chiffres</small>
                                    @error('telephone')
                                        <div class="text-danger small mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            
                            <!-- Colonne droite : Options de paiement -->
                            <div class="col-md-6">
                                <h4 class="mb-4">
                                    <i class="fas fa-credit-card me-2"></i>Mode de paiement
                                </h4>
                                
                                <!-- Méthodes de paiement -->
                                <div class="payment-methods mb-4">
                                    <div class="payment-method active" data-method="mobile">
                                        <i class="fas fa-mobile-alt text-primary"></i>
                                        <div class="mt-2">Mobile Money</div>
                                    </div>
                                    <div class="payment-method" data-method="card">
                                        <i class="fas fa-credit-card text-warning"></i>
                                        <div class="mt-2">Carte Bancaire</div>
                                    </div>
                                    <div class="payment-method" data-method="wallet">
                                        <i class="fas fa-wallet text-success"></i>
                                        <div class="mt-2">Portefeuille</div>
                                    </div>
                                </div>
                                
                                <!-- Info Mobile Money (visible par défaut) -->
                                <div id="mobileInfo" class="info-box">
                                    <h6>
                                        <i class="fas fa-info-circle me-2"></i>Paiement par Mobile Money
                                    </h6>
                                    <p class="text-muted small mb-2">
                                        Vous serez redirigé vers l'interface FedaPay pour compléter votre paiement via :
                                    </p>
                                    <div class="d-flex gap-2 mb-3">
                                        <span class="badge">Orange Money</span>
                                        <span class="badge">MTN Mobile Money</span>
                                        <span class="badge">Moov Money</span>
                                    </div>
                                    <div class="alert alert-info py-2 mb-0">
                                        <i class="fas fa-clock me-2"></i>
                                        <small>Paiement instantané - Code OTP requis</small>
                                    </div>
                                </div>
                                
                                <!-- Info Carte Bancaire (caché par défaut) -->
                                <div id="cardInfo" class="info-box" style="display: none;">
                                    <h6>
                                        <i class="fas fa-credit-card me-2"></i>Paiement par Carte
                                    </h6>
                                    <p class="text-muted small">
                                        Vous pouvez utiliser Visa, Mastercard ou autres cartes internationales.
                                    </p>
                                    <div class="d-flex gap-2">
                                        <i class="fab fa-cc-visa fa-2x"></i>
                                        <i class="fab fa-cc-mastercard fa-2x"></i>
                                        <i class="fab fa-cc-amex fa-2x"></i>
                                    </div>
                                </div>
                                
                                <!-- Info Portefeuille (caché par défaut) -->
                                <div id="walletInfo" class="info-box" style="display: none;">
                                    <h6>
                                        <i class="fas fa-wallet me-2"></i>Portefeuille FedaPay
                                    </h6>
                                    <p class="text-muted small">
                                        Payer avec votre solde FedaPay ou compte existant.
                                    </p>
                                    <div class="alert alert-info py-2 mb-0">
                                        <i class="fas fa-user-check me-2"></i>
                                        <small>Connexion à votre compte FedaPay requise</small>
                                    </div>
                                </div>
                                
                                <!-- Conditions générales -->
                                <div class="form-check mb-4">
                                    <input class="form-check-input" type="checkbox" id="conditions" required>
                                    <label class="form-check-label small" for="conditions">
                                        J'accepte les 
                                        <a href="#" class="text-primary">conditions générales</a> 
                                        et la 
                                        <a href="#" class="text-primary">politique de confidentialité</a>
                                    </label>
                                </div>
                                
                                <!-- Bouton de paiement -->
                                <button type="submit" class="btn btn-pay" id="submitBtn">
                                    <i class="fas fa-lock me-2"></i>
                                    Payer maintenant
                                    <span id="amountDisplay">
                                        @if(isset($amount))
                                            {{ number_format($amount / 100, 0, ',', ' ') }} XOF
                                        @else
                                        0 XOF
                                        @endif
                                    </span>
                                </button>
                                
                                <p class="text-center text-muted small mt-3">
                                    <i class="fas fa-shield-alt me-1"></i>
                                    Vos données sont sécurisées et cryptées
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
                
                <!-- Informations supplémentaires -->
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <div class="info-box">
                            <h6><i class="fas fa-shipping-fast me-2"></i>Livraison</h6>
                            <p class="text-muted small mb-0">Contenu digital - Accès immédiat après paiement</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="info-box">
                            <h6><i class="fas fa-headset me-2"></i>Support</h6>
                            <p class="text-muted small mb-0">Assistance 24/7 en cas de problème</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="info-box">
                            <h6><i class="fas fa-undo me-2"></i>Remboursement</h6>
                            <p class="text-muted small mb-0">30 jours pour demander un remboursement</p>
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
                    <p class="text-muted">Plateforme culturelle du Bénin - Paiements sécurisés</p>
                </div>
                <div class="col-md-6 text-end">
                    <p class="text-muted">
                        <i class="fas fa-lock me-1"></i>
                        Sécurisé par FedaPay
                        &copy; 2024 Culture_Benin
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Gestion des méthodes de paiement
        document.querySelectorAll('.payment-method').forEach(method => {
            method.addEventListener('click', function() {
                // Retirer la classe active de toutes les méthodes
                document.querySelectorAll('.payment-method').forEach(m => {
                    m.classList.remove('active');
                });
                // Ajouter la classe active à la méthode cliquée
                this.classList.add('active');
                
                // Masquer toutes les infos
                document.getElementById('mobileInfo').style.display = 'none';
                document.getElementById('cardInfo').style.display = 'none';
                document.getElementById('walletInfo').style.display = 'none';
                
                // Afficher l'info correspondante
                const methodType = this.dataset.method;
                document.getElementById(methodType + 'Info').style.display = 'block';
            });
        });

        // Formatage du téléphone
        document.getElementById('telephone').addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            
            if (value.startsWith('225')) {
                value = '+' + value;
            } else if (value.startsWith('00225')) {
                value = '+' + value.substring(2);
            } else if (!value.startsWith('+')) {
                value = '+225' + value;
            }
            
            // Limiter à 13 caractères (+22512345678)
            if (value.length > 13) {
                value = value.substring(0, 13);
            }
            
            e.target.value = value;
        });

        // Validation du formulaire
        document.getElementById('paymentForm').addEventListener('submit', function(e) {
            const email = document.getElementById('email').value;
            const nom = document.getElementById('nom').value;
            const prenom = document.getElementById('prenom').value;
            const telephone = document.getElementById('telephone').value;
            const conditions = document.getElementById('conditions').checked;
            
            let isValid = true;
            
            // Réinitialiser les erreurs
            document.querySelectorAll('.is-invalid').forEach(el => {
                el.classList.remove('is-invalid');
            });
            
            // Validation email
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                document.getElementById('email').classList.add('is-invalid');
                isValid = false;
            }
            
            // Validation nom et prénom
            if (nom.trim().length < 2) {
                document.getElementById('nom').classList.add('is-invalid');
                isValid = false;
            }
            
            if (prenom.trim().length < 2) {
                document.getElementById('prenom').classList.add('is-invalid');
                isValid = false;
            }
            
            // Validation téléphone
            const phoneRegex = /^\+225[0-9]{10}$/;
            if (!phoneRegex.test(telephone)) {
                document.getElementById('telephone').classList.add('is-invalid');
                isValid = false;
            }
            
            // Validation conditions
            if (!conditions) {
                alert('Veuillez accepter les conditions générales');
                isValid = false;
            }
            
            if (!isValid) {
                e.preventDefault();
                // Afficher un message d'erreur général
                const errorDiv = document.createElement('div');
                errorDiv.className = 'alert alert-danger mt-3';
                errorDiv.innerHTML = '<i class="fas fa-exclamation-circle me-2"></i>Veuillez corriger les erreurs dans le formulaire';
                
                const existingError = document.querySelector('.alert-danger');
                if (!existingError) {
                    this.prepend(errorDiv);
                }
            } else {
                // Désactiver le bouton pendant le traitement
                const submitBtn = document.getElementById('submitBtn');
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Traitement en cours...';
            }
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

        document.querySelectorAll('.payment-card, .info-box').forEach(item => {
            item.style.opacity = '0';
            item.style.transform = 'translateY(20px)';
            item.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
            observer.observe(item);
        });

        // Gestion du montant dynamique
        function updateAmountDisplay() {
            const amountInput = document.getElementById('montantInput');
            const amountDisplay = document.getElementById('amountDisplay');
            const amount = parseInt(amountInput.value) / 100;
            amountDisplay.textContent = new Intl.NumberFormat('fr-FR').format(amount) + ' XOF';
            
            // Mettre à jour aussi l'affichage principal
            const mainAmount = document.querySelector('.amount-display h2');
            if (mainAmount) {
                mainAmount.textContent = new Intl.NumberFormat('fr-FR').format(amount) + ' XOF';
            }
        }

        // Si vous voulez permettre la modification du montant
        // document.getElementById('montantInput').addEventListener('input', updateAmountDisplay);
    </script>
</body>
</html>