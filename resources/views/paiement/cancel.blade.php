<!DOCTYPE html>
<html>
<head>
    <title>Paiement Annulé - Culture Benin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <div class="alert alert-warning">
                    <h1 class="display-1">❌</h1>
                    <h2>Paiement Annulé</h2>
                    <p class="lead">Le paiement a été annulé.</p>
                    
                    <a href="{{ route('paiement.form') }}" class="btn btn-primary mt-3">
                        Réessayer
                    </a>
                    <a href="{{ url('/') }}" class="btn btn-secondary mt-3">
                        Retour à l'accueil
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>