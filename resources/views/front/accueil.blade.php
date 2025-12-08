<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Culture Bénin | Portail du Patrimoine Culturel et Historique Béninois</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-dark: #0A1B28;
            --primary-vibrant: #E63946;
            --accent-gold: #FFD166;
            --accent-earth: #2A9D8F;
            --accent-royal: #5A189A;
            --accent-sun: #F4A261;
            --text-primary: #1D3557;
            --text-secondary: #457B9D;
            --card-bg: #FFFFFF;
            --section-bg: #F1FAEE;
            --border-color: #A8DADC;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            color: var(--text-primary);
            background-color: #FFFFFF;
            line-height: 1.7;
            overflow-x: hidden;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Space Grotesk', sans-serif;
            font-weight: 700;
        }

        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 24px;
        }

        /* Header */
        header {
            background-color: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(10px);
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            box-shadow: 0 4px 30px rgba(10, 27, 40, 0.08);
            border-bottom: 3px solid var(--accent-gold);
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 18px 0;
        }

        .logo {
            font-family: 'Space Grotesk', sans-serif;
            font-size: 32px;
            font-weight: 800;
            color: var(--primary-dark);
            text-decoration: none;
            display: flex;
            align-items: center;
            letter-spacing: -0.5px;
        }

        .logo-accent {
            color: var(--primary-vibrant);
            margin-left: 4px;
        }

        .nav-links {
            display: flex;
            gap: 40px;
        }

        .nav-links a {
            color: var(--text-primary);
            text-decoration: none;
            font-weight: 600;
            font-size: 16px;
            position: relative;
            transition: all 0.3s;
            padding: 8px 0;
        }

        .nav-links a:hover {
            color: var(--primary-vibrant);
        }

        .nav-links a.active {
            color: var(--primary-vibrant);
        }

        .nav-links a.active::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background-color: var(--primary-vibrant);
            border-radius: 2px;
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .search-btn {
            background: none;
            border: none;
            color: var(--text-secondary);
            font-size: 18px;
            cursor: pointer;
            transition: color 0.3s;
            padding: 8px;
        }

        .search-btn:hover {
            color: var(--primary-vibrant);
        }

        .subscribe-btn {
            background: linear-gradient(135deg, var(--accent-gold), var(--accent-sun));
            color: var(--primary-dark);
            border: none;
            padding: 14px 32px;
            border-radius: 10px;
            font-weight: 700;
            font-size: 15px;
            cursor: pointer;
            transition: all 0.3s;
            box-shadow: 0 6px 20px rgba(255, 209, 102, 0.25);
            display: flex;
            align-items: center;
            gap: 10px;
            letter-spacing: 0.5px;
        }

        .subscribe-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(255, 209, 102, 0.4);
            background: linear-gradient(135deg, var(--accent-sun), var(--accent-gold));
        }

        .dashboard-btn {
            background: linear-gradient(135deg, var(--primary-vibrant), var(--accent-royal));
            color: white;
            border: none;
            padding: 14px 32px;
            border-radius: 10px;
            font-weight: 700;
            font-size: 15px;
            cursor: pointer;
            transition: all 0.3s;
            box-shadow: 0 6px 20px rgba(230, 57, 70, 0.25);
            display: flex;
            align-items: center;
            gap: 10px;
            letter-spacing: 0.5px;
            text-decoration: none !important;
            display: inline-flex;
        }

        .dashboard-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(230, 57, 70, 0.4);
        }

        /* Hero Section */
        .hero {
            position: relative;
            padding: 200px 0 150px;
            background: linear-gradient(135deg, rgba(10, 27, 40, 0.85) 0%, rgba(90, 24, 154, 0.7) 100%);
            color: white;
            overflow: hidden;
            margin-top: 80px;
        }

        .hero-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
            opacity: 0.9;
            filter: brightness(1.1) contrast(1.05);
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, rgba(10, 27, 40, 0.9) 0%, rgba(10, 27, 40, 0.6) 50%, rgba(90, 24, 154, 0.3) 100%);
            z-index: -1;
        }

        .hero-content {
            max-width: 750px;
            position: relative;
            z-index: 2;
        }

        .hero-subtitle {
            font-size: 18px;
            color: var(--accent-gold);
            margin-bottom: 20px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 3px;
        }

        .hero-title {
            font-size: 64px;
            line-height: 1.1;
            margin-bottom: 30px;
            font-weight: 800;
        }

        .hero-title span {
            color: var(--accent-gold);
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .hero-description {
            font-size: 20px;
            color: rgba(255, 255, 255, 0.95);
            margin-bottom: 45px;
            max-width: 650px;
            font-weight: 400;
        }

        .hero-actions {
            display: flex;
            gap: 25px;
            flex-wrap: wrap;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--accent-gold), var(--accent-sun));
            color: var(--primary-dark);
            padding: 18px 36px;
            border-radius: 10px;
            text-decoration: none;
            font-weight: 700;
            font-size: 17px;
            transition: all 0.3s;
            display: inline-flex;
            align-items: center;
            gap: 12px;
            border: none;
            cursor: pointer;
            box-shadow: 0 8px 25px rgba(255, 209, 102, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-4px);
            box-shadow: 0 15px 35px rgba(255, 209, 102, 0.4);
        }

        .btn-secondary {
            background-color: transparent;
            color: white;
            padding: 18px 36px;
            border-radius: 10px;
            text-decoration: none;
            font-weight: 700;
            font-size: 17px;
            transition: all 0.3s;
            display: inline-flex;
            align-items: center;
            gap: 12px;
            border: 3px solid var(--accent-gold);
        }

        .btn-secondary:hover {
            background-color: rgba(255, 209, 102, 0.15);
            transform: translateY(-4px);
            box-shadow: 0 8px 25px rgba(255, 209, 102, 0.2);
        }

        /* Sections communes */
        .section {
            padding: 100px 0;
        }

        .section-header {
            text-align: center;
            margin-bottom: 70px;
        }

        .section-subtitle {
            color: var(--primary-vibrant);
            font-size: 17px;
            text-transform: uppercase;
            letter-spacing: 3px;
            margin-bottom: 16px;
            font-weight: 700;
        }

        .section-title {
            font-size: 48px;
            color: var(--primary-dark);
            margin-bottom: 24px;
            position: relative;
            display: inline-block;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -12px;
            left: 50%;
            transform: translateX(-50%);
            width: 120px;
            height: 5px;
            background: linear-gradient(to right, var(--primary-vibrant), var(--accent-gold));
            border-radius: 3px;
        }

        .section-description {
            color: var(--text-secondary);
            font-size: 19px;
            max-width: 750px;
            margin: 36px auto 0;
            line-height: 1.8;
        }

        /* Patrimoine Section */
        .patrimoine-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(380px, 1fr));
            gap: 40px;
        }

        .patrimoine-card {
            background-color: var(--card-bg);
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: none;
            position: relative;
        }

        .patrimoine-card:hover {
            transform: translateY(-15px) scale(1.02);
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.15);
        }

        .patrimoine-img-container {
            width: 100%;
            height: 280px;
            overflow: hidden;
        }

        .patrimoine-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.7s ease;
        }

        .patrimoine-card:hover .patrimoine-img {
            transform: scale(1.1);
        }

        .patrimoine-content {
            padding: 32px;
        }

        .patrimoine-category {
            display: inline-block;
            background: linear-gradient(135deg, var(--accent-earth), var(--accent-royal));
            color: white;
            padding: 8px 20px;
            border-radius: 25px;
            font-size: 14px;
            font-weight: 700;
            margin-bottom: 20px;
            letter-spacing: 0.5px;
        }

        .patrimoine-title {
            font-size: 26px;
            margin-bottom: 16px;
            color: var(--primary-dark);
            line-height: 1.3;
        }

        .patrimoine-description {
            color: var(--text-secondary);
            margin-bottom: 24px;
            line-height: 1.7;
        }

        .patrimoine-stats {
            display: flex;
            justify-content: space-between;
            padding-top: 24px;
            border-top: 2px solid var(--border-color);
            color: var(--text-secondary);
            font-size: 15px;
        }

        .stat {
            display: flex;
            align-items: center;
            gap: 8px;
            font-weight: 600;
        }

        .stat i {
            color: var(--primary-vibrant);
            font-size: 18px;
        }

        /* Indépendance Section */
        .independence-section {
            background: linear-gradient(135deg, var(--section-bg) 0%, #E8F4F8 100%);
            position: relative;
            overflow: hidden;
        }

        .independence-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .independence-text {
            padding-right: 40px;
        }

        .independence-title {
            font-size: 42px;
            color: var(--primary-dark);
            margin-bottom: 30px;
            line-height: 1.2;
        }

        .independence-title span {
            color: var(--primary-vibrant);
            position: relative;
        }

        .independence-title span::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 100%;
            height: 4px;
            background-color: var(--accent-gold);
        }

        .independence-description {
            color: var(--text-secondary);
            font-size: 18px;
            line-height: 1.8;
            margin-bottom: 30px;
        }

        .independence-highlights {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
            margin-top: 40px;
        }

        .highlight-item {
            background-color: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            border-left: 5px solid var(--accent-earth);
        }

        .highlight-item h4 {
            color: var(--primary-dark);
            margin-bottom: 10px;
            font-size: 20px;
        }

        .highlight-item p {
            color: var(--text-secondary);
            font-size: 16px;
        }

        .independence-image-container {
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.15);
            position: relative;
        }

        .independence-image {
            width: 100%;
            height: 550px;
            object-fit: cover;
            display: block;
        }

        /* Président Section */
        .president-section {
            background: linear-gradient(135deg, var(--primary-dark) 0%, #1D3557 100%);
            color: white;
        }

        .president-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .president-image-container {
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.3);
            position: relative;
            border: 8px solid var(--accent-gold);
        }

        .president-image {
            width: 100%;
            height: 500px;
            object-fit: cover;
            display: block;
            transition: transform 0.5s;
        }

        .president-image-container:hover .president-image {
            transform: scale(1.05);
        }

        .president-text {
            padding-left: 20px;
        }

        .president-title {
            font-size: 42px;
            margin-bottom: 25px;
            line-height: 1.2;
        }

        .president-title span {
            color: var(--accent-gold);
        }

        .president-quote {
            font-size: 22px;
            line-height: 1.6;
            margin-bottom: 35px;
            font-style: italic;
            position: relative;
            padding-left: 30px;
            border-left: 5px solid var(--primary-vibrant);
        }

        .president-achievements {
            margin-top: 40px;
        }

        .achievement-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 25px;
        }

        .achievement-icon {
            background-color: var(--primary-vibrant);
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 20px;
            flex-shrink: 0;
            font-size: 22px;
        }

        .achievement-text h4 {
            font-size: 20px;
            margin-bottom: 8px;
            color: var(--accent-gold);
        }

        .achievement-text p {
            color: rgba(255, 255, 255, 0.9);
            line-height: 1.6;
        }

        /* Commentaires Section */
        .comments-section {
            background-color: var(--section-bg);
        }

        .comments-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 40px;
        }

        .comment-card {
            background-color: var(--card-bg);
            border-radius: 16px;
            padding: 40px 35px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.06);
            border: 2px solid transparent;
            transition: all 0.4s;
            position: relative;
            overflow: hidden;
        }

        .comment-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.12);
            border-color: var(--accent-gold);
        }

        .comment-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 6px;
            height: 100%;
            background: linear-gradient(to bottom, var(--primary-vibrant), var(--accent-royal));
        }

        .comment-header {
            display: flex;
            align-items: center;
            margin-bottom: 25px;
        }

        .user-avatar {
            width: 65px;
            height: 65px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 20px;
            border: 4px solid var(--accent-earth);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .user-info h4 {
            font-size: 20px;
            color: var(--primary-dark);
            margin-bottom: 6px;
        }

        .user-info p {
            color: var(--text-secondary);
            font-size: 15px;
            font-weight: 500;
        }

        .comment-text {
            color: var(--text-primary);
            line-height: 1.8;
            font-size: 17px;
            position: relative;
        }

        .comment-text::before {
            content: '"';
            position: absolute;
            left: -15px;
            top: -15px;
            font-size: 70px;
            color: var(--accent-gold);
            font-family: Georgia, serif;
            opacity: 0.3;
        }

        /* Modal d'abonnement */
        .subscription-modal, .login-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(10, 27, 40, 0.95);
            z-index: 2000;
            overflow-y: auto;
            padding: 40px 20px;
        }

        .login-modal {
            z-index: 2001;
        }

        .modal-content {
            background-color: white;
            max-width: 1000px;
            margin: 0 auto;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 30px 80px rgba(0, 0, 0, 0.3);
            animation: modalSlideIn 0.5s ease;
        }

        .login-modal .modal-content {
            max-width: 500px;
        }

        @keyframes modalSlideIn {
            from {
                opacity: 0;
                transform: translateY(-50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .modal-header {
            background: linear-gradient(135deg, var(--primary-dark), var(--accent-royal));
            color: white;
            padding: 30px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .login-modal .modal-header {
            background: linear-gradient(135deg, var(--primary-dark), var(--accent-earth));
            padding: 25px 30px;
        }

        .modal-header h3 {
            font-size: 28px;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .login-modal .modal-header h3 {
            font-size: 24px;
        }

        .close-modal, .close-login-modal {
            background: none;
            border: none;
            color: white;
            font-size: 40px;
            cursor: pointer;
            line-height: 1;
            padding: 0;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: color 0.3s;
        }

        .close-modal:hover, .close-login-modal:hover {
            color: var(--accent-gold);
        }

        .modal-body {
            padding: 40px;
        }

        /* Styles spécifiques à la modal de connexion */
        .login-form-container {
            padding: 30px;
        }

        .login-instructions {
            text-align: center;
            margin-bottom: 30px;
            padding-bottom: 25px;
            border-bottom: 2px solid var(--border-color);
        }

        .login-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--accent-earth), var(--accent-royal));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            color: white;
            font-size: 36px;
        }

        .login-instructions p {
            color: var(--text-secondary);
            margin-bottom: 10px;
            font-size: 16px;
        }

        .credentials-info {
            background-color: var(--section-bg);
            padding: 15px;
            border-radius: 10px;
            margin-top: 20px !important;
            text-align: left;
            border-left: 4px solid var(--accent-gold);
        }

        .credentials-info strong {
            color: var(--primary-dark);
        }

        .form-check {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 25px;
        }

        .form-check input {
            width: 18px !important;
            height: 18px !important;
        }

        .form-check label {
            margin-bottom: 0;
            color: var(--text-secondary);
            cursor: pointer;
        }

        .login-btn {
            width: 100%;
            justify-content: center;
            padding: 18px;
            font-size: 18px;
        }

        .login-message {
            margin-top: 20px;
            padding: 15px;
            border-radius: 10px;
            text-align: center;
            font-weight: 600;
            display: none;
        }

        .login-message.success {
            background-color: rgba(42, 157, 143, 0.1);
            color: var(--accent-earth);
            border: 1px solid var(--accent-earth);
            display: block;
        }

        .login-message.error {
            background-color: rgba(230, 57, 70, 0.1);
            color: var(--primary-vibrant);
            border: 1px solid var(--primary-vibrant);
            display: block;
        }

        .pricing-plans {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            margin-bottom: 40px;
        }

        .plan-card {
            background-color: var(--card-bg);
            border: 2px solid var(--border-color);
            border-radius: 15px;
            padding: 30px;
            transition: all 0.3s;
            position: relative;
        }

        .plan-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .plan-card.recommended {
            border-color: var(--accent-gold);
            transform: scale(1.05);
        }

        .plan-card.recommended:hover {
            transform: scale(1.05) translateY(-10px);
        }

        .plan-badge {
            position: absolute;
            top: -12px;
            left: 50%;
            transform: translateX(-50%);
            background: linear-gradient(135deg, var(--accent-gold), var(--accent-sun));
            color: var(--primary-dark);
            padding: 6px 20px;
            border-radius: 20px;
            font-weight: 700;
            font-size: 14px;
        }

        .plan-header {
            text-align: center;
            margin-bottom: 25px;
            padding-bottom: 25px;
            border-bottom: 2px solid var(--border-color);
        }

        .plan-header h4 {
            font-size: 24px;
            color: var(--primary-dark);
            margin-bottom: 15px;
        }

        .plan-price {
            display: flex;
            align-items: baseline;
            justify-content: center;
            gap: 5px;
        }

        .plan-price .currency {
            font-size: 18px;
            color: var(--text-secondary);
        }

        .plan-price .amount {
            font-size: 42px;
            font-weight: 800;
            color: var(--primary-dark);
        }

        .plan-price .period {
            color: var(--text-secondary);
            font-size: 16px;
        }

        .plan-savings {
            color: var(--accent-earth);
            font-weight: 600;
            font-size: 14px;
            margin-top: 10px;
        }

        .plan-features {
            list-style: none;
            margin-bottom: 30px;
        }

        .plan-features li {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            margin-bottom: 15px;
            color: var(--text-secondary);
        }

        .plan-features li i {
            color: var(--accent-earth);
            margin-top: 3px;
        }

        .plan-card .btn-primary {
            width: 100%;
            justify-content: center;
        }

        .payment-form {
            background-color: var(--section-bg);
            padding: 30px;
            border-radius: 15px;
            margin-top: 40px;
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.5s ease;
        }

        .payment-form.show {
            opacity: 1;
            transform: translateY(0);
        }

        .payment-form h4 {
            font-size: 22px;
            margin-bottom: 25px;
            color: var(--primary-dark);
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: var(--primary-dark);
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 15px 20px;
            border: 2px solid var(--border-color);
            border-radius: 10px;
            font-family: 'Inter', sans-serif;
            font-size: 16px;
            transition: all 0.3s;
        }

        .form-group input:focus,
        .form-group select:focus {
            outline: none;
            border-color: var(--accent-earth);
            box-shadow: 0 0 0 3px rgba(42, 157, 143, 0.1);
        }

        .payment-details {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
            display: none;
        }

        #payButton {
            width: 100%;
            padding: 18px;
            font-size: 18px;
        }

        /* Footer */
        footer {
            background-color: var(--primary-dark);
            color: white;
            padding: 100px 0 50px;
            position: relative;
            overflow: hidden;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 60px;
            margin-bottom: 70px;
            position: relative;
            z-index: 2;
        }

        .footer-logo {
            font-family: 'Space Grotesk', sans-serif;
            font-size: 36px;
            font-weight: 800;
            margin-bottom: 25px;
            color: white;
            letter-spacing: -0.5px;
        }

        .footer-logo span {
            color: var(--accent-gold);
        }

        .footer-description {
            color: rgba(255, 255, 255, 0.85);
            line-height: 1.8;
            margin-bottom: 30px;
            font-size: 17px;
        }

        .social-links {
            display: flex;
            gap: 18px;
        }

        .social-link {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 48px;
            height: 48px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            color: white;
            text-decoration: none;
            transition: all 0.3s;
            font-size: 20px;
        }

        .social-link:hover {
            background-color: var(--primary-vibrant);
            transform: translateY(-5px) rotate(5deg);
        }

        .footer-heading {
            font-size: 22px;
            margin-bottom: 30px;
            color: white;
            position: relative;
            padding-bottom: 15px;
        }

        .footer-heading::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 4px;
            background-color: var(--accent-gold);
        }

        .footer-links ul {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 18px;
        }

        .footer-links a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: all 0.3s;
            font-size: 17px;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }

        .footer-links a:hover {
            color: var(--accent-gold);
            transform: translateX(8px);
        }

        .footer-links a i {
            font-size: 14px;
            opacity: 0.7;
        }

        .footer-contact p {
            color: rgba(255, 255, 255, 0.85);
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 15px;
            font-size: 17px;
        }

        .footer-contact i {
            color: var(--accent-gold);
            font-size: 20px;
            width: 25px;
        }

        .copyright {
            text-align: center;
            padding-top: 50px;
            border-top: 1px solid rgba(255, 255, 255, 0.15);
            color: rgba(255, 255, 255, 0.7);
            font-size: 16px;
            position: relative;
            z-index: 2;
        }

        /* Animation */
        .fade-in {
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 0.8s, transform 0.8s;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Responsive */
        @media (max-width: 1200px) {
            .hero-title {
                font-size: 56px;
            }
            
            .independence-content,
            .president-content {
                gap: 50px;
            }
        }

        @media (max-width: 1024px) {
            .nav-links {
                gap: 30px;
            }
            
            .section-title {
                font-size: 42px;
            }
            
            .independence-content,
            .president-content {
                grid-template-columns: 1fr;
                gap: 50px;
            }
            
            .independence-text {
                padding-right: 0;
            }
            
            .president-text {
                padding-left: 0;
                order: 1;
            }
            
            .president-image-container {
                order: 2;
            }
            
            .pricing-plans {
                grid-template-columns: 1fr 1fr;
            }
            
            .plan-card.recommended {
                order: -1;
                grid-column: span 2;
            }
        }

        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }
            
            .hero {
                padding: 160px 0 100px;
                text-align: center;
            }
            
            .hero-title {
                font-size: 44px;
            }
            
            .hero-description {
                font-size: 18px;
            }
            
            .hero-actions {
                justify-content: center;
            }
            
            .section {
                padding: 80px 0;
            }
            
            .section-title {
                font-size: 36px;
            }
            
            .patrimoine-grid,
            .comments-container {
                grid-template-columns: 1fr;
            }
            
            .independence-highlights {
                grid-template-columns: 1fr;
            }
            
            .footer-content {
                grid-template-columns: 1fr;
                gap: 50px;
            }
            
            .modal-body {
                padding: 25px;
            }
            
            .pricing-plans {
                grid-template-columns: 1fr;
                gap: 25px;
            }
            
            .plan-card.recommended {
                grid-column: span 1;
            }
            
            .modal-header {
                padding: 20px 25px;
            }
            
            .modal-header h3 {
                font-size: 22px;
            }
            
            .subscribe-btn {
                padding: 10px 20px;
                font-size: 14px;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 0 20px;
            }
            
            .hero-title {
                font-size: 36px;
            }
            
            .hero-actions {
                flex-direction: column;
                align-items: center;
            }
            
            .btn-primary, .btn-secondary {
                width: 100%;
                justify-content: center;
            }
            
            .section-title {
                font-size: 32px;
            }
            
            .dashboard-btn,
            .subscribe-btn {
                padding: 12px 24px;
                font-size: 14px;
            }
            
            .patrimoine-card {
                border-radius: 12px;
            }
            
            .patrimoine-content {
                padding: 25px;
            }
            
            .header-actions {
                gap: 10px;
            }
            
            .subscribe-btn {
                padding: 10px 15px;
                font-size: 13px;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="nav-container">
                <a href="#" class="logo">
                    Culture<span class="logo-accent">Bénin</span>
                </a>
                
                <nav class="nav-links">
                    <a href="accueil.html" class="active">Accueil</a>
                    <a href="patrimoine.html">Patrimoine</a>
                    <a href="histoire.html">Histoire</a>
                    <a href="publication.html">Publication</a>
                    <a href="evenements.html">Evènements</a>
                </nav>
                
                <div class="header-actions">
                    <button class="search-btn">
                        <i class="fas fa-search"></i>
                    </button>
                    
                    <!-- Bouton d'abonnement -->
                    <button class="subscribe-btn" id="subscribeBtn">
                        <i class="fas fa-crown"></i> S'abonner
                    </button>
                    
                    <a href="#" class="dashboard-btn" id="dashboardBtn">
                        <i class="fas fa-tachometer-alt"></i> Tableau de bord
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Modal d'abonnement -->
    <div id="subscriptionModal" class="subscription-modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3><i class="fas fa-crown"></i> Abonnez-vous à Culture Bénin Premium</h3>
                <button class="close-modal">&times;</button>
            </div>
            
            <div class="modal-body">
                <div class="pricing-plans">
                    <div class="plan-card">
                        <div class="plan-header">
                            <h4>Mensuel</h4>
                            <div class="plan-price">
                                <span class="currency">FCFA</span>
                                <span class="amount">2,500</span>
                                <span class="period">/mois</span>
                            </div>
                        </div>
                        <ul class="plan-features">
                            <li><i class="fas fa-check"></i> Accès complet à tous les contenus</li>
                            <li><i class="fas fa-check"></i> Téléchargement des ressources premium</li>
                            <li><i class="fas fa-check"></i> Participation aux événements exclusifs</li>
                            <li><i class="fas fa-check"></i> Support prioritaire</li>
                        </ul>
                        <button class="btn-primary select-plan" data-plan="monthly">
                            Choisir ce plan
                        </button>
                    </div>
                    
                    <div class="plan-card recommended">
                        <div class="plan-badge">Recommandé</div>
                        <div class="plan-header">
                            <h4>Annuel</h4>
                            <div class="plan-price">
                                <span class="currency">FCFA</span>
                                <span class="amount">25,000</span>
                                <span class="period">/an</span>
                            </div>
                            <p class="plan-savings">Économisez 2 mois</p>
                        </div>
                        <ul class="plan-features">
                            <li><i class="fas fa-check"></i> Tout du plan Mensuel</li>
                            <li><i class="fas fa-check"></i> Accès aux archives historiques</li>
                            <li><i class="fas fa-check"></i> Webinaires exclusifs mensuels</li>
                            <li><i class="fas fa-check"></i> Badge de membre premium</li>
                        </ul>
                        <button class="btn-primary select-plan" data-plan="yearly">
                            Choisir ce plan
                        </button>
                    </div>
                    
                    <div class="plan-card">
                        <div class="plan-header">
                            <h4>Vie</h4>
                            <div class="plan-price">
                                <span class="currency">FCFA</span>
                                <span class="amount">75,000</span>
                                <span class="period">à vie</span>
                            </div>
                        </div>
                        <ul class="plan-features">
                            <li><i class="fas fa-check"></i> Tout du plan Annuel</li>
                            <li><i class="fas fa-check"></i> Accès permanent à vie</li>
                            <li><i class="fas fa-check"></i> Invitations VIP aux événements</li>
                            <li><i class="fas fa-check"></i> Reconnaissance spéciale</li>
                        </ul>
                        <button class="btn-primary select-plan" data-plan="lifetime">
                            Choisir ce plan
                        </button>
                    </div>
                </div>
                
                <div id="paymentForm" class="payment-form">
                    <h4>Formulaire de paiement</h4>
                    <form id="subscriptionForm">
                        <div class="form-group">
                            <label for="name">Nom complet</label>
                            <input type="text" id="name" required placeholder="Votre nom complet">
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" required placeholder="votre@email.com">
                        </div>
                        
                        <div class="form-group">
                            <label for="phone">Téléphone</label>
                            <input type="tel" id="phone" required placeholder="+229 XX XX XX XX">
                        </div>
                        
                        <div class="form-group">
                            <label for="paymentMethod">Méthode de paiement</label>
                            <select id="paymentMethod" required>
                                <option value="">Sélectionnez...</option>
                                <option value="moov">Moov Money</option>
                                <option value="mtn">MTN Mobile Money</option>
                                <option value="card">Carte bancaire</option>
                                <option value="wave">Wave</option>
                            </select>
                        </div>
                        
                        <div id="paymentDetails" class="payment-details"></div>
                        
                        <div class="form-group">
                            <button type="submit" class="btn-primary" id="payButton">
                                <i class="fas fa-lock"></i> Payer maintenant
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de connexion -->
    <div id="loginModal" class="login-modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3><i class="fas fa-sign-in-alt"></i> Connexion Tableau de bord</h3>
                <button class="close-login-modal">&times;</button>
            </div>
            
            <div class="modal-body">
                <div class="login-form-container">
                    <div class="login-instructions">
                        <div class="login-icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <p>Accès réservé aux administrateurs et professeurs.</p>
                        <p class="credentials-info">
                            <strong>Identifiants de démonstration :</strong><br>
                            Email: maurice.comlan@uac.bj<br>
                            Mot de passe: Eneam123
                        </p>
                    </div>
                    
                    <form id="loginForm">
                        <div class="form-group">
                            <label for="loginEmail">Adresse email</label>
                            <input type="email" id="loginEmail" required 
                                   placeholder="votre@email.com" 
                                   value="maurice.comlan@uac.bj">
                        </div>
                        
                        <div class="form-group">
                            <label for="loginPassword">Mot de passe</label>
                            <input type="password" id="loginPassword" required 
                                   placeholder="Votre mot de passe" 
                                   value="Eneam123">
                        </div>
                        
                        <div class="form-group form-check">
                            <input type="checkbox" id="rememberMe">
                            <label for="rememberMe">Se souvenir de moi</label>
                        </div>
                        
                        <div class="form-group">
                            <button type="submit" class="btn-primary login-btn" id="loginButton">
                                <i class="fas fa-sign-in-alt"></i> Se connecter
                            </button>
                        </div>
                        
                        <div id="loginMessage" class="login-message"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Hero Section avec Statue des Amazones -->
    <section class="hero">
        <img src="https://images.unsplash.com/photo-1568315057107-b6b7b360a3e0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1932&q=100" 
             alt="Statue des Amazones du Dahomey - Patrimoine Béninois" class="hero-bg">
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="hero-content">
                <p class="hero-subtitle fade-in">Portail National</p>
                <h1 class="hero-title fade-in">
                    Le Bénin <span>Révélé</span><br>
                    Patrimoine & Modernité
                </h1>
                <p class="hero-description fade-in">
                    Plongez au cœur de la richesse culturelle, historique et naturelle du Bénin. 
                    Découvrez les trésors d'un patrimoine vivant, témoin de l'audace et de la 
                    résilience d'une nation tournée vers l'avenir.
                </p>
                <div class="hero-actions">
                    <a href="#" class="btn-primary fade-in">
                        <i class="fas fa-gem"></i> Explorer les trésors
                    </a>
                    <a href="#" class="btn-secondary fade-in">
                        <i class="fas fa-users"></i> Rejoindre la communauté
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Patrimoine Culturel Section -->
    <section class="section">
        <div class="container">
            <div class="section-header fade-in">
                <p class="section-subtitle">Patrimoine Exceptionnel</p>
                <h2 class="section-title">Joyaux du Bénin</h2>
                <p class="section-description">
                    Découvrez les sites culturels et naturels qui font la fierté du Bénin, 
                    témoins d'une histoire riche et d'une biodiversité remarquable.
                </p>
            </div>
            
            <div class="patrimoine-grid">
                <!-- Carte 1 -->
                <div class="patrimoine-card fade-in">
                    <div class="patrimoine-img-container">
                        <img src="https://th.bing.com/th/id/OIP.WmpqPvFUVlX2Rwx9VzpkngHaEu?w=252&h=180&c=7&r=0&o=7&pid=1.7&rm=3" 
                             alt="Palais Royaux d'Abomey" class="patrimoine-img">
                    </div>
                    <div class="patrimoine-content">
                        <span class="patrimoine-category">UNESCO</span>
                        <h3 class="patrimoine-title">Palais Royaux d'Abomey</h3>
                        <p class="patrimoine-description">
                            Ensemble des douze palais des rois du Danhomè, construits entre le XVIIe et le XIXe siècle. 
                            Ce site classé au patrimoine mondial témoigne de la puissance et de l'organisation 
                            du royaume fon, avec ses bas-reliefs uniques et son architecture remarquable.
                        </p>
                        <div class="patrimoine-stats">
                            <div class="stat">
                                <i class="far fa-eye"></i>
                                <span>2,842 consultations</span>
                            </div>
                            <div class="stat">
                                <i class="far fa-comment"></i>
                                <span>48 commentaires</span>
                            </div>
                            <div class="stat">
                                <i class="far fa-calendar-alt"></i>
                                <span>Publié le 12/06/2023</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Carte 2 -->
                <div class="patrimoine-card fade-in">
                    <div class="patrimoine-img-container">
                        <img src="https://th.bing.com/th/id/OIP.9yX29H_L00cJ551iFoGE3QHaE7?w=260&h=180&c=7&r=0&o=7&pid=1.7&rm=3" 
                             alt="Village sur pilotis de Ganvié" class="patrimoine-img">
                    </div>
                    <div class="patrimoine-content">
                        <span class="patrimoine-category">Site Unique au Monde</span>
                        <h3 class="patrimoine-title">Ganvié - La Venise de l'Afrique</h3>
                        <p class="patrimoine-description">
                            Village lacustre exceptionnel construit sur le lac Nokoué, habité par les Tofinu. 
                            Fondé au XVIIIe siècle pour échapper aux razzias esclavagistes, ce site illustre 
                            l'ingéniosité et l'adaptation des populations à leur environnement.
                        </p>
                        <div class="patrimoine-stats">
                            <div class="stat">
                                <i class="far fa-eye"></i>
                                <span>3,156 consultations</span>
                            </div>
                            <div class="stat">
                                <i class="far fa-comment"></i>
                                <span>67 commentaires</span>
                            </div>
                            <div class="stat">
                                <i class="far fa-calendar-alt"></i>
                                <span>Publié le 08/06/2023</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Carte 3 -->
                <div class="patrimoine-card fade-in">
                    <div class="patrimoine-img-container">
                        <img src="https://th.bing.com/th/id/OIP.OYFJMWmf9LN0sBfQBsB_dwHaE6?w=256&h=180&c=7&r=0&o=7&pid=1.7&rm=3" 
                             alt="Parc National de la Pendjari" class="patrimoine-img">
                    </div>
                    <div class="patrimoine-content">
                        <span class="patrimoine-category">Réserve de Biosphère</span>
                        <h3 class="patrimoine-title">Parc National de la Pendjari</h3>
                        <p class="patrimoine-description">
                            Sanctuaire de biodiversité abritant la plus grande population d'éléphants d'Afrique de l'Ouest, 
                            ainsi que des lions, buffles, hippopotames et plus de 300 espèces d'oiseaux. 
                            Un joyau écologique préservé.
                        </p>
                        <div class="patrimoine-stats">
                            <div class="stat">
                                <i class="far fa-eye"></i>
                                <span>2,539 consultations</span>
                            </div>
                            <div class="stat">
                                <i class="far fa-comment"></i>
                                <span>42 commentaires</span>
                            </div>
                            <div class="stat">
                                <i class="far fa-calendar-alt"></i>
                                <span>Publié le 03/06/2023</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Indépendance du Bénin Section -->
    <section class="section independence-section">
        <div class="container">
            <div class="section-header fade-in">
                <p class="section-subtitle">Histoire et Souveraineté</p>
                <h2 class="section-title">L'Indépendance du Bénin</h2>
                <p class="section-description">
                    Retracez le parcours historique qui a mené à l'indépendance du Dahomey, 
                    devenu la République du Bénin, et découvrez les fondements de la nation.
                </p>
            </div>
            
            <div class="independence-content">
                <div class="independence-text fade-in">
                    <h3 class="independence-title">
                        Du <span>Dahomey</span> au <span>Bénin</span> :<br>
                        Le chemin de la souveraineté
                    </h3>
                    <p class="independence-description">
                        Le 1er août 1960, le Dahomey (actuel Bénin) proclame son indépendance après 
                        plusieurs décennies de colonisation française. Hubert Maga devient le premier 
                        président de la République. Cette indépendance marque le début d'une nouvelle 
                        ère pour le pays, qui devra construire son identité nationale et son développement.
                    </p>
                    <p class="independence-description">
                        Le 30 novembre 1975, sous la direction du président Mathieu Kérékou, 
                        le pays adopte le nom de République populaire du Bénin, en référence 
                        au golfe du Bénin et à l'ancien royaume du Bénin situé au Nigeria. 
                        Ce changement symbolise une rupture avec le passé colonial et une 
                        réappropriation de l'histoire africaine.
                    </p>
                    
                    <div class="independence-highlights">
                        <div class="highlight-item fade-in">
                            <h4>1er Août 1960</h4>
                            <p>Proclamation de l'indépendance du Dahomey</p>
                        </div>
                        <div class="highlight-item fade-in">
                            <h4>30 Novembre 1975</h4>
                            <p>Changement de nom : République du Bénin</p>
                        </div>
                        <div class="highlight-item fade-in">
                            <h4>1990</h4>
                            <p>Adoption de la Constitution et transition démocratique</p>
                        </div>
                        <div class="highlight-item fade-in">
                            <h4>2016</h4>
                            <p>Élection du président Patrice Talon, lancement des réformes</p>
                        </div>
                    </div>
                </div>
                
                <div class="independence-image-container fade-in">
                    <img src="https://images.unsplash.com/photo-1551632436-cbf8dd35adfa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1932&q=100" 
                         alt="Cérémonie d'indépendance du Bénin" class="independence-image">
                </div>
            </div>
        </div>
    </section>

    <!-- Président Patrice Talon Section -->
    <section class="section president-section">
        <div class="container">
            <div class="section-header fade-in">
                <p class="section-subtitle">Leadership et Vision</p>
                <h2 class="section-title">Président Patrice Talon</h2>
                <p class="section-description" style="color: rgba(255, 255, 255, 0.9);">
                    Découvrez le parcours et la vision du président de la République du Bénin, 
                    architecte des réformes et du renouveau national.
                </p>
            </div>
            
            <div class="president-content">
                <div class="president-image-container fade-in">
                    <img src=""
                         alt="Non affichable pour éviter toutes menaces juridiques" class="president-image">
                </div>
                
                <div class="president-text fade-in">
                    <h3 class="president-title">
                        Patrice <span>Talon</span><br>
                        Un leadership audacieux
                    </h3>
                    <p class="president-quote">
                        "Notre vision est de faire du Bénin un pays moderne, prospère et respecté, 
                        où chaque citoyen peut s'épanouir dans la dignité."
                    </p>
                    
                    <div class="president-achievements">
                        <div class="achievement-item fade-in">
                            <div class="achievement-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <div class="achievement-text">
                                <h4>Réformes économiques</h4>
                                <p>
                                    Mise en place du Programme d'Action du Gouvernement (PAG) pour 
                                    stimuler la croissance et créer des emplois.
                                </p>
                            </div>
                        </div>
                        
                        <div class="achievement-item fade-in">
                            <div class="achievement-icon">
                                <i class="fas fa-university"></i>
                            </div>
                            <div class="achievement-text">
                                <h4>Retour des trésors royaux</h4>
                                <p>
                                    Initiative historique pour la restitution des œuvres d'art du 
                                    patrimoine béninois conservées en France.
                                </p>
                            </div>
                        </div>
                        
                        <div class="achievement-item fade-in">
                            <div class="achievement-icon">
                                <i class="fas fa-hard-hat"></i>
                            </div>
                            <div class="achievement-text">
                                <h4>Infrastructures modernes</h4>
                                <p>
                                    Développement des infrastructures routières, portuaires et 
                                    numériques pour positionner le Bénin comme hub régional.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Commentaires Section -->
    <section class="section comments-section">
        <div class="container">
            <div class="section-header fade-in">
                <p class="section-subtitle">Témoignages</p>
                <h2 class="section-title">Communauté Engagée</h2>
                <p class="section-description">
                    Découvrez les expériences et impressions des membres de notre communauté 
                    passionnés par la culture et le patrimoine béninois.
                </p>
            </div>
            
            <div class="comments-container">
                <!-- Commentaire 1 -->
                <div class="comment-card fade-in">
                    <div class="comment-header">
                        <img src="https://th.bing.com/th/id/OIP.dmEgTRx5w_Scvm2h7C2EpQAAAA?w=184&h=276&c=7&r=0&o=7&pid=1.7&rm=3" 
                             alt="Marie K." class="user-avatar">
                        <div class="user-info">
                            <h4>Dr. Marie K.</h4>
                            <p>Historienne - Université d'Abomey-Calavi</p>
                        </div>
                    </div>
                    <p class="comment-text">
                        Cette plateforme représente une avancée majeure pour la valorisation de notre patrimoine. 
                        La qualité des contenus sur les palais royaux d'Abomey est exceptionnelle. 
                        Les documents d'archives numérisés et les analyses historiques offrent une ressource 
                        précieuse pour les chercheurs et le grand public.
                    </p>
                </div>

                <!-- Commentaire 2 -->
                <div class="comment-card fade-in">
                    <div class="comment-header">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1932&q=100" 
                             alt="Jean A." class="user-avatar">
                        <div class="user-info">
                            <h4>Jean A.</h4>
                            <p>Photographe documentaire - Cotonou</p>
                        </div>
                    </div>
                    <p class="comment-text">
                        En tant que photographe, je trouve cette initiative remarquable. 
                        L'espace dédié aux galeries photos permet une véritable immersion visuelle 
                        dans la culture béninoise. J'ai pu partager ma série sur les festivals 
                        traditionnels et recevoir des retours constructifs de la communauté.
                    </p>
                </div>

                <!-- Commentaire 3 -->
                <div class="comment-card fade-in">
                    <div class="comment-header">
                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1932&q=100" 
                             alt="Chantal D." class="user-avatar">
                        <div class="user-info">
                            <h4>Chantal D.</h4>
                            <p>Éducatrice culturelle - Porto-Novo</p>
                        </div>
                    </div>
                    <p class="comment-text">
                        Utiliser Culture Bénin avec mes élèves a transformé notre approche pédagogique. 
                        Les ressources multimédias, les visites virtuelles et les échanges avec des experts 
                        rendent l'apprentissage vivant et concret. Les élèves sont maintenant fiers de 
                        découvrir et de partager leur patrimoine.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-about">
                    <div class="footer-logo">Culture<span>Bénin</span></div>
                    <p class="footer-description">
                        Plateforme nationale dédiée à la valorisation, la préservation et la promotion 
                        du riche patrimoine culturel, historique et naturel du Bénin. 
                        Ensemble, célébrons notre héritage commun et construisons l'avenir.
                    </p>
                    <div class="social-links">
                        <a href="#" class="social-link">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-link">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-link">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="social-link">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a href="#" class="social-link">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
                
                <div class="footer-links">
                    <h3 class="footer-heading">Navigation</h3>
                    <ul>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Accueil</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Patrimoine</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Histoire du Bénin</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Publications</a></li>
                        <li><a href="evenements.html"><i class="fas fa-chevron-right"></i> Événements</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Communauté</a></li>
                    </ul>
                </div>
                
                <div class="footer-contact">
                    <h3 class="footer-heading">Contact</h3>
                    <p><i class="fas fa-envelope"></i> contact@culturebenin.bj</p>
                    <p><i class="fas fa-phone"></i> +229 21 30 04 56</p>
                    <p><i class="fas fa-map-marker-alt"></i> Ministère de la Culture, Porto-Novo</p>
                    <p><i class="fas fa-clock"></i> Lundi - Vendredi : 8h - 18h</p>
                </div>
            </div>
            
            <div class="copyright">
                <p>&copy; 2023 Culture Bénin - République du Bénin. Tous droits réservés.</p>
                <p style="margin-top: 10px; font-size: 15px;">
                    Ministère du Tourisme, de la Culture et des Arts | Direction du Patrimoine Culturel
                </p>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Animation d'apparition des éléments au scroll
            const fadeElements = document.querySelectorAll('.fade-in');
            
            const appearOnScroll = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        appearOnScroll.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.1, rootMargin: "0px 0px -50px 0px" });
            
            fadeElements.forEach(element => {
                appearOnScroll.observe(element);
            });

            // Animation de l'en-tête au défilement
            window.addEventListener('scroll', function() {
                const header = document.querySelector('header');
                if (window.scrollY > 100) {
                    header.style.boxShadow = '0 10px 40px rgba(10, 27, 40, 0.15)';
                } else {
                    header.style.boxShadow = '0 4px 30px rgba(10, 27, 40, 0.08)';
                }
            });

            // Vérification que toutes les images sont chargées
            const images = document.querySelectorAll('img');
            images.forEach(img => {
                img.addEventListener('error', function() {
                    console.log(`Image non chargée: ${this.src}`);
                });
            });

            // Gestion de l'abonnement
            const subscribeBtn = document.getElementById('subscribeBtn');
            const subscriptionModal = document.getElementById('subscriptionModal');
            const closeModal = document.querySelector('.close-modal');
            const selectPlanBtns = document.querySelectorAll('.select-plan');
            const paymentForm = document.getElementById('paymentForm');
            const subscriptionForm = document.getElementById('subscriptionForm');
            const paymentMethod = document.getElementById('paymentMethod');
            const paymentDetails = document.getElementById('paymentDetails');

            // Ouvrir la modale d'abonnement
            subscribeBtn.addEventListener('click', function() {
                subscriptionModal.style.display = 'block';
                document.body.style.overflow = 'hidden';
                paymentForm.classList.remove('show');
                paymentForm.style.display = 'none';
            });

            // Fermer la modale
            closeModal.addEventListener('click', function() {
                subscriptionModal.style.display = 'none';
                document.body.style.overflow = 'auto';
                resetForm();
            });

            // Fermer en cliquant en dehors
            subscriptionModal.addEventListener('click', function(e) {
                if (e.target === subscriptionModal) {
                    subscriptionModal.style.display = 'none';
                    document.body.style.overflow = 'auto';
                    resetForm();
                }
            });

            // Sélection d'un plan
            selectPlanBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    const plan = this.getAttribute('data-plan');
                    
                    // Afficher le formulaire de paiement avec animation
                    paymentForm.style.display = 'block';
                    setTimeout(() => {
                        paymentForm.classList.add('show');
                    }, 10);
                    
                    // Défilement vers le formulaire
                    paymentForm.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    
                    // Stocker le plan sélectionné
                    paymentForm.dataset.selectedPlan = plan;
                    
                    // Afficher le nom du plan sélectionné dans le titre du formulaire
                    const planTitles = {
                        'monthly': 'Mensuel (2,500 FCFA/mois)',
                        'yearly': 'Annuel (25,000 FCFA/an)',
                        'lifetime': 'Vie (75,000 FCFA)'
                    };
                    
                    paymentForm.querySelector('h4').innerHTML = `Formulaire de paiement - Plan ${planTitles[plan]}`;
                });
            });

            // Afficher les détails de paiement selon la méthode
            paymentMethod.addEventListener('change', function() {
                const method = this.value;
                paymentDetails.style.display = 'block';
                
                let detailsHTML = '';
                
                switch(method) {
                    case 'moov':
                        detailsHTML = `
                            <p><strong>Moov Money:</strong> Paiement au numéro +229 97 00 00 00</p>
                            <p>Envoyez le montant correspondant avec la référence: <strong>CB${Date.now().toString().slice(-6)}</strong></p>
                            <p>Une fois le paiement effectué, vous recevrez un email de confirmation sous 24h.</p>
                        `;
                        break;
                    case 'mtn':
                        detailsHTML = `
                            <p><strong>MTN Mobile Money:</strong> Paiement au numéro +229 96 00 00 00</p>
                            <p>Envoyez le montant correspondant avec la référence: <strong>CB${Date.now().toString().slice(-6)}</strong></p>
                            <p>Une fois le paiement effectué, vous recevrez un email de confirmation sous 24h.</p>
                        `;
                        break;
                    case 'card':
                        detailsHTML = `
                            <div class="form-group">
                                <label>Numéro de carte</label>
                                <input type="text" placeholder="1234 5678 9012 3456" required>
                            </div>
                            <div class="form-row">
                                <div class="form-group" style="flex: 1;">
                                    <label>Date d'expiration</label>
                                    <input type="text" placeholder="MM/AA" required>
                                </div>
                                <div class="form-group" style="flex: 1; margin-left: 15px;">
                                    <label>CVV</label>
                                    <input type="text" placeholder="123" required>
                                </div>
                            </div>
                            <p style="margin-top: 10px; font-size: 14px; color: var(--text-secondary);">
                                <i class="fas fa-lock"></i> Paiement sécurisé par notre partenaire de paiement
                            </p>
                        `;
                        break;
                    case 'wave':
                        detailsHTML = `
                            <p><strong>Wave:</strong> Utilisez l'application Wave pour effectuer le paiement</p>
                            <p>Scannez le QR Code ci-dessous avec votre application:</p>
                            <div style="background: #f5f5f5; padding: 20px; text-align: center; border-radius: 10px; margin: 15px 0;">
                                <p style="color: var(--text-secondary);">QR Code de paiement</p>
                                <div style="background: white; padding: 15px; display: inline-block; border-radius: 8px;">
                                    [QR Code - Simulé]
                                </div>
                            </div>
                        `;
                        break;
                    default:
                        detailsHTML = '';
                        paymentDetails.style.display = 'none';
                }
                
                paymentDetails.innerHTML = detailsHTML;
            });

            // Soumission du formulaire de paiement
            subscriptionForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Récupération des données
                const name = document.getElementById('name').value;
                const email = document.getElementById('email').value;
                const phone = document.getElementById('phone').value;
                const method = document.getElementById('paymentMethod').value;
                const plan = paymentForm.dataset.selectedPlan;
                
                if (!name || !email || !phone || !method) {
                    alert('Veuillez remplir tous les champs obligatoires.');
                    return;
                }
                
                // Simulation de traitement de paiement
                const payButton = document.getElementById('payButton');
                const originalText = payButton.innerHTML;
                
                payButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Traitement en cours...';
                payButton.disabled = true;
                
                // Simulation d'un délai de traitement
                setTimeout(() => {
                    // Réinitialiser le bouton
                    payButton.innerHTML = originalText;
                    payButton.disabled = false;
                    
                    // Fermer la modale
                    subscriptionModal.style.display = 'none';
                    document.body.style.overflow = 'auto';
                    
                    // Afficher un message de confirmation
                    alert(`Félicitations ${name} ! Votre abonnement a été pris en compte.\n\nVous recevrez un email de confirmation à ${email} dans quelques instants.\n\nMerci de soutenir Culture Bénin !`);
                    
                    // Réinitialiser le formulaire
                    resetForm();
                    
                }, 2000);
            });

            // Fonction pour réinitialiser le formulaire d'abonnement
            function resetForm() {
                subscriptionForm.reset();
                paymentDetails.style.display = 'none';
                paymentForm.classList.remove('show');
                paymentForm.style.display = 'none';
                paymentForm.dataset.selectedPlan = '';
                paymentForm.querySelector('h4').innerHTML = 'Formulaire de paiement';
            }

            // Gérer la touche Échap pour fermer la modale d'abonnement
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && subscriptionModal.style.display === 'block') {
                    subscriptionModal.style.display = 'none';
                    document.body.style.overflow = 'auto';
                    resetForm();
                }
            });

            // GESTION DE LA CONNEXION
            // Modal de connexion
            const loginModal = document.getElementById('loginModal');
            const closeLoginModal = document.querySelector('.close-login-modal');
            const loginForm = document.getElementById('loginForm');
            const loginMessage = document.getElementById('loginMessage');
            const dashboardBtn = document.getElementById('dashboardBtn');

            // Ouvrir la modale de connexion
            dashboardBtn.addEventListener('click', function(e) {
                e.preventDefault();
                loginModal.style.display = 'block';
                document.body.style.overflow = 'hidden';
                
                // Pré-remplir les champs avec les identifiants du professeur
                document.getElementById('loginEmail').value = 'maurice.comlan@uac.bj';
                document.getElementById('loginPassword').value = 'Eneam123';
            });

            // Fermer la modale de connexion
            closeLoginModal.addEventListener('click', function() {
                loginModal.style.display = 'none';
                document.body.style.overflow = 'auto';
                resetLoginForm();
            });

            // Fermer en cliquant en dehors
            loginModal.addEventListener('click', function(e) {
                if (e.target === loginModal) {
                    loginModal.style.display = 'none';
                    document.body.style.overflow = 'auto';
                    resetLoginForm();
                }
            });

            // Gérer la soumission du formulaire de connexion
loginForm.addEventListener('submit', function(e) {
    e.preventDefault();
    
    const email = document.getElementById('loginEmail').value;
    const password = document.getElementById('loginPassword').value;
    const rememberMe = document.getElementById('rememberMe').checked;
    
    // Vérifier les identifiants
    if (email === 'maurice.comlan@uac.bj' && password === 'Eneam123') {
        // Simulation de connexion réussie
        const loginButton = document.getElementById('loginButton');
        const originalText = loginButton.innerHTML;
        
        loginButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Connexion en cours...';
        loginButton.disabled = true;
        
        // Simuler un délai de connexion
        setTimeout(() => {
            // Fermer la modal
            loginModal.style.display = 'none';
            document.body.style.overflow = 'auto';
            
            // Rediriger vers votre dashboard Laravel
            // Si votre dashboard est sur la route '/dashboard'
            window.location.href = "/dashboard";
            
        }, 1000);
        
    } else {
        // Identifiants incorrects
        loginMessage.textContent = 'Identifiants incorrects. Veuillez réessayer.';
        loginMessage.className = 'login-message error';
        loginMessage.style.display = 'block';
        
        // Effacer les champs (sauf si c'est le compte du prof)
        if (email !== 'maurice.comlan@uac.bj') {
            document.getElementById('loginEmail').value = '';
        }
        document.getElementById('loginPassword').value = '';
        
        // Cacher le message après 5 secondes
        setTimeout(() => {
            loginMessage.style.display = 'none';
        }, 5000);
    }
});

            // Fonction pour réinitialiser le formulaire de connexion
            function resetLoginForm() {
                loginForm.reset();
                loginMessage.style.display = 'none';
                const loginButton = document.getElementById('loginButton');
                loginButton.style.display = 'flex';
                loginButton.disabled = false;
                
                // Ré-remplir avec les identifiants du prof
                document.getElementById('loginEmail').value = 'maurice.comlan@uac.bj';
                document.getElementById('loginPassword').value = 'Eneam123';
            }

            // Gérer la touche Échap pour fermer la modale de connexion
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && loginModal.style.display === 'block') {
                    loginModal.style.display = 'none';
                    document.body.style.overflow = 'auto';
                    resetLoginForm();
                }
            });
        });
    </script>
</body>
</html>