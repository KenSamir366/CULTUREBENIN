<!DOCTYPE html>
<html>
<head>
    <title>Paiement Réussi - Culture Benin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <div class="alert alert-success">
                    <h1 class="display-1">✅</h1>
                    <h2>Paiement Réussi !</h2>
                    <p class="lead">Merci pour votre achat.</p>
                    
                    @if(isset($transaction_id))
                        <p>Référence: <strong>{{ $transaction_id }}</strong></p>
                    @endif
                    
                    <a href="{{ url('/') }}" class="btn btn-primary mt-3">
                        Retour à l'accueil
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>