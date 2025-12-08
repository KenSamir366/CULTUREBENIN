<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test FedaPay - Culture_Benin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Test FedaPay Integration</h4>
                    </div>
                    <div class="card-body">
                        <!-- Configuration info -->
                        <div class="mb-4">
                            <h5>Configuration actuelle :</h5>
                            <div class="alert alert-info">
                                <p class="mb-1"><strong>Mode :</strong> {{ config('fedapay.mode', 'Non configuré') }}</p>
                                <p class="mb-1"><strong>Clé API :</strong> 
                                    @if(config('fedapay.api_key'))
                                        <span class="text-success">Configurée ({{ strlen(config('fedapay.api_key')) }} caractères)</span>
                                    @else
                                        <span class="text-danger">Non configurée</span>
                                    @endif
                                </p>
                                <p class="mb-0"><strong>URL :</strong> {{ url('/') }}</p>
                            </div>
                        </div>

                        <!-- Test buttons -->
                        <div class="mb-4">
                            <h5>Tester l'API :</h5>
                            <button id="testApiBtn" class="btn btn-primary">
                                <span id="spinner" class="spinner-border spinner-border-sm d-none" role="status"></span>
                                Tester la connexion FedaPay
                            </button>
                            <button id="createPaymentBtn" class="btn btn-success ms-2">
                                Créer un paiement test (100 FCFA)
                            </button>
                        </div>

                        <!-- Results -->
                        <div id="results" class="d-none">
                            <h5>Résultats :</h5>
                            <div class="alert" id="resultAlert">
                                <!-- Results will appear here -->
                            </div>
                            
                            <div id="paymentLink" class="d-none">
                                <a href="#" id="paymentUrl" target="_blank" class="btn btn-warning">
                                    Aller à la page de paiement
                                </a>
                            </div>
                        </div>

                        <!-- Instructions -->
                        <div class="mt-4">
                            <h5>Instructions pour les tests :</h5>
                            <ul class="small">
                                <li>Mode <strong>sandbox</strong> : Pour les tests seulement</li>
                                <li>Mobile Money test : Numéro <code>97000000</code></li>
                                <li>Code OTP test : <code>123456</code></li>
                                <li>Carte test : <code>4242 4242 4242 4242</code></li>
                                <li>Obtenez votre clé API sur <a href="https://dashboard.fedapay.com" target="_blank">dashboard.fedapay.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="text-center mt-3">
                    <a href="/" class="btn btn-secondary">Retour à l'accueil</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('testApiBtn').addEventListener('click', function() {
            const btn = this;
            const spinner = document.getElementById('spinner');
            const results = document.getElementById('results');
            const resultAlert = document.getElementById('resultAlert');
            
            btn.disabled = true;
            spinner.classList.remove('d-none');
            results.classList.add('d-none');
            document.getElementById('paymentLink').classList.add('d-none');
            
            fetch('/test-payment-api', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            })
            .then(response => response.json())
            .then(data => {
                results.classList.remove('d-none');
                
                if (data.success) {
                    resultAlert.className = 'alert alert-success';
                    resultAlert.innerHTML = `
                        <h6><i class="fas fa-check-circle"></i> Succès!</h6>
                        <p>${data.message}</p>
                        <p><strong>Transaction ID:</strong> ${data.transaction_id}</p>
                        <p><strong>Mode:</strong> ${data.mode}</p>
                        <p><strong>Clé API:</strong> ${data.api_key_length} caractères</p>
                    `;
                    
                    // Show payment link
                    if (data.payment_url) {
                        document.getElementById('paymentLink').classList.remove('d-none');
                        document.getElementById('paymentUrl').href = data.payment_url;
                    }
                } else {
                    resultAlert.className = 'alert alert-danger';
                    resultAlert.innerHTML = `
                        <h6><i class="fas fa-exclamation-circle"></i> Erreur</h6>
                        <p><strong>${data.error || 'Erreur inconnue'}</strong></p>
                        <p>${data.message}</p>
                        ${data.trace ? `<small><pre>${data.trace}</pre></small>` : ''}
                    `;
                }
            })
            .catch(error => {
                results.classList.remove('d-none');
                resultAlert.className = 'alert alert-danger';
                resultAlert.innerHTML = `
                    <h6><i class="fas fa-exclamation-circle"></i> Erreur réseau</h6>
                    <p>${error.message}</p>
                `;
            })
            .finally(() => {
                btn.disabled = false;
                spinner.classList.add('d-none');
            });
        });
        
        // Simple test without API call
        document.getElementById('createPaymentBtn').addEventListener('click', function() {
            alert("Cette fonctionnalité sera implémentée après le test de connexion.");
        });
    </script>
</body>
</html>