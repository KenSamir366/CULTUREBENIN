<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publications | Culture Bénin</title>
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
        }

        .dashboard-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(230, 57, 70, 0.4);
        }

        /* Page Hero */
        .page-hero {
            position: relative;
            padding: 180px 0 100px;
            background: linear-gradient(135deg, rgba(244, 162, 97, 0.9) 0%, rgba(90, 24, 154, 0.8) 100%);
            color: white;
            overflow: hidden;
            margin-top: 80px;
            text-align: center;
        }

        .page-hero-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
            opacity: 0.7;
        }

        .page-hero-title {
            font-size: 56px;
            margin-bottom: 20px;
            font-weight: 800;
        }

        .page-hero-subtitle {
            font-size: 20px;
            color: rgba(255, 255, 255, 0.9);
            max-width: 700px;
            margin: 0 auto;
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

        /* Barre de recherche et filtres */
        .filter-bar {
            background-color: var(--card-bg);
            border-radius: 16px;
            padding: 30px;
            margin-bottom: 60px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);
            display: flex;
            flex-wrap: wrap;
            gap: 25px;
            align-items: center;
        }

        .search-container {
            flex: 2;
            min-width: 300px;
            position: relative;
        }

        .search-input {
            width: 100%;
            padding: 16px 60px 16px 30px;
            border: 2px solid var(--border-color);
            border-radius: 50px;
            font-size: 16px;
            font-family: 'Inter', sans-serif;
            transition: all 0.3s;
        }

        .search-input:focus {
            outline: none;
            border-color: var(--accent-earth);
            box-shadow: 0 0 0 3px rgba(42, 157, 143, 0.1);
        }

        .search-button {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: var(--text-secondary);
            font-size: 20px;
            cursor: pointer;
            transition: color 0.3s;
        }

        .search-button:hover {
            color: var(--primary-vibrant);
        }

        .filter-group {
            flex: 1;
            min-width: 200px;
        }

        .filter-label {
            display: block;
            margin-bottom: 10px;
            font-weight: 600;
            color: var(--primary-dark);
            font-size: 16px;
        }

        .filter-select {
            width: 100%;
            padding: 16px 24px;
            border: 2px solid var(--border-color);
            border-radius: 10px;
            background-color: white;
            font-family: 'Inter', sans-serif;
            font-size: 16px;
            color: var(--text-primary);
            transition: all 0.3s;
        }

        .filter-select:focus {
            outline: none;
            border-color: var(--accent-earth);
            box-shadow: 0 0 0 3px rgba(42, 157, 143, 0.1);
        }

        /* Publications en vedette */
        .featured-section {
            background: linear-gradient(135deg, var(--section-bg) 0%, #E8F4F8 100%);
        }

        .featured-publication {
            background-color: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.1);
            display: grid;
            grid-template-columns: 1fr 1fr;
            margin-bottom: 80px;
        }

        .featured-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .featured-content {
            padding: 60px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .featured-badge {
            display: inline-block;
            background: linear-gradient(135deg, var(--primary-vibrant), var(--accent-royal));
            color: white;
            padding: 10px 25px;
            border-radius: 25px;
            font-size: 16px;
            font-weight: 700;
            margin-bottom: 20px;
            align-self: flex-start;
        }

        .featured-title {
            font-size: 36px;
            margin-bottom: 20px;
            color: var(--primary-dark);
            line-height: 1.2;
        }

        .featured-excerpt {
            color: var(--text-secondary);
            font-size: 18px;
            margin-bottom: 30px;
            line-height: 1.7;
        }

        .featured-author {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 30px;
        }

        .author-avatar {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid var(--accent-gold);
        }

        .author-info h4 {
            font-size: 20px;
            color: var(--primary-dark);
            margin-bottom: 5px;
        }

        .author-info p {
            color: var(--text-secondary);
            font-size: 16px;
        }

        /* Grid des publications */
        .publications-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 40px;
            margin-bottom: 80px;
        }

        .publication-card {
            background-color: var(--card-bg);
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: none;
            position: relative;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .publication-card:hover {
            transform: translateY(-15px) scale(1.02);
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.15);
        }

        .publication-img-container {
            width: 100%;
            height: 250px;
            overflow: hidden;
            position: relative;
        }

        .publication-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.7s ease;
        }

        .publication-card:hover .publication-img {
            transform: scale(1.1);
        }

        .publication-category {
            position: absolute;
            top: 20px;
            right: 20px;
            background: linear-gradient(135deg, var(--accent-earth), var(--accent-royal));
            color: white;
            padding: 8px 20px;
            border-radius: 25px;
            font-size: 14px;
            font-weight: 700;
            letter-spacing: 0.5px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .publication-content {
            padding: 30px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .publication-title {
            font-size: 24px;
            margin-bottom: 15px;
            color: var(--primary-dark);
            line-height: 1.3;
        }

        .publication-excerpt {
            color: var(--text-secondary);
            margin-bottom: 20px;
            line-height: 1.6;
            flex-grow: 1;
        }

        .publication-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 20px;
            border-top: 2px solid var(--border-color);
        }

        .author-meta {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .author-avatar-small {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid var(--accent-gold);
        }

        .author-name {
            font-weight: 600;
            color: var(--text-primary);
            font-size: 15px;
        }

        .publication-stats {
            display: flex;
            gap: 15px;
            color: var(--text-secondary);
            font-size: 14px;
        }

        .stat {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .stat i {
            color: var(--primary-vibrant);
        }

        /* Catégories de publications */
        .categories-section {
            background: linear-gradient(135deg, var(--primary-dark) 0%, #1D3557 100%);
            color: white;
        }

        .categories-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 40px;
        }

        .category-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 16px;
            padding: 40px 30px;
            text-align: center;
            transition: all 0.4s;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .category-card:hover {
            transform: translateY(-10px);
            background: rgba(255, 255, 255, 0.15);
            border-color: var(--accent-gold);
        }

        .category-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, var(--accent-gold), var(--accent-sun));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            font-size: 30px;
            color: var(--primary-dark);
        }

        .category-title {
            font-size: 22px;
            margin-bottom: 15px;
            color: white;
        }

        .category-count {
            color: var(--accent-gold);
            font-weight: 700;
            font-size: 18px;
        }

        /* Appel à publication */
        .call-to-publish {
            background: linear-gradient(135deg, var(--accent-earth) 0%, #2A9D8F 100%);
            color: white;
            border-radius: 20px;
            padding: 80px 60px;
            text-align: center;
            margin-top: 80px;
        }

        .call-title {
            font-size: 42px;
            margin-bottom: 20px;
        }

        .call-description {
            font-size: 18px;
            opacity: 0.9;
            max-width: 700px;
            margin: 0 auto 40px;
        }

        .publish-btn {
            background: linear-gradient(135deg, var(--accent-gold), var(--accent-sun));
            color: var(--primary-dark);
            border: none;
            padding: 18px 40px;
            border-radius: 12px;
            font-weight: 700;
            font-size: 18px;
            cursor: pointer;
            transition: all 0.3s;
            display: inline-flex;
            align-items: center;
            gap: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .publish-btn:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
        }

        /* Pagination */
        .pagination {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 80px;
        }

        .page-link {
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            background-color: var(--card-bg);
            color: var(--text-primary);
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .page-link:hover {
            background: linear-gradient(135deg, var(--primary-vibrant), var(--accent-royal));
            color: white;
            transform: translateY(-3px);
        }

        .page-link.active {
            background: linear-gradient(135deg, var(--primary-vibrant), var(--accent-royal));
            color: white;
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
            .page-hero-title {
                font-size: 48px;
            }
            
            .featured-publication {
                grid-template-columns: 1fr;
            }
            
            .featured-image {
                height: 400px;
            }
        }

        @media (max-width: 1024px) {
            .nav-links {
                gap: 30px;
            }
            
            .section-title {
                font-size: 42px;
            }
            
            .publications-grid {
                grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            }
            
            .categories-grid {
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            }
        }

        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }
            
            .page-hero {
                padding: 150px 0 80px;
            }
            
            .page-hero-title {
                font-size: 38px;
            }
            
            .section {
                padding: 80px 0;
            }
            
            .section-title {
                font-size: 36px;
            }
            
            .filter-bar {
                flex-direction: column;
                align-items: stretch;
            }
            
            .search-container,
            .filter-group {
                min-width: 100%;
            }
            
            .featured-content {
                padding: 40px 30px;
            }
            
            .featured-title {
                font-size: 30px;
            }
            
            .call-to-publish {
                padding: 60px 30px;
            }
            
            .call-title {
                font-size: 32px;
            }
            
            .publications-grid,
            .categories-grid {
                grid-template-columns: 1fr;
            }
            
            .footer-content {
                grid-template-columns: 1fr;
                gap: 50px;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 0 20px;
            }
            
            .page-hero-title {
                font-size: 32px;
            }
            
            .section-title {
                font-size: 32px;
            }
            
            .dashboard-btn {
                padding: 12px 24px;
                font-size: 14px;
            }
            
            .featured-title {
                font-size: 26px;
            }
            
            .publication-img-container {
                height: 200px;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="nav-container">
                <a href="index.html" class="logo">
                    Culture<span class="logo-accent">Bénin</span>
                </a>
                
                <nav class="nav-links">
                    <a href="accueil.blade.php" class="active">Accueil</a>
                    <a href="patrimoine.blade.php">Patrimoine</a>
                    <a href="histoire.blade.php">Histoire</a>
                    <a href="publication.blade.php">Publication</a>
                    <a href="evenements.blade.php">Evènements</a>
                    
                </nav>
                
                <div class="header-actions">
                    <button class="search-btn">
                        <i class="fas fa-search"></i>
                    </button>
                    <button class="dashboard-btn" id="dashboardBtn">
                        <i class="fas fa-tachometer-alt"></i> Tableau de bord
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Page Hero -->
    <section class="page-hero">
        <img src="https://images.unsplash.com/photo-1481627834876-b7833e8f5570?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1932&q=100" 
             alt="Bibliothèque et publications" class="page-hero-bg">
        <div class="container">
            <h1 class="page-hero-title fade-in">Publications Culturelles</h1>
            <p class="page-hero-subtitle fade-in">
                Découvrez, partagez et publiez des articles, recherches et contenus sur 
                le patrimoine culturel, historique et naturel du Bénin.
            </p>
        </div>
    </section>

    <!-- Barre de recherche et filtres -->
    <section class="section">
        <div class="container">
            <div class="filter-bar fade-in">
                <div class="search-container">
                    <input type="text" class="search-input" placeholder="Rechercher une publication...">
                    <button class="search-button">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
                
                <div class="filter-group">
                    <label class="filter-label">Catégorie</label>
                    <select class="filter-select">
                        <option value="">Toutes les catégories</option>
                        <option value="recherche">Recherche académique</option>
                        <option value="patrimoine">Patrimoine culturel</option>
                        <option value="histoire">Histoire</option>
                        <option value="art">Arts & Traditions</option>
                        <option value="nature">Patrimoine naturel</option>
                        <option value="temoignage">Témoignages</option>
                    </select>
                </div>
                
                <div class="filter-group">
                    <label class="filter-label">Tri par</label>
                    <select class="filter-select">
                        <option value="recent">Plus récentes</option>
                        <option value="populaire">Plus populaires</option>
                        <option value="commentees">Plus commentées</option>
                        <option value="ancien">Plus anciennes</option>
                    </select>
                </div>
            </div>

            <!-- Publication en vedette -->
            <div class="section-header">
                <h2 class="section-title">Publication en Vedette</h2>
                <p class="section-description">
                    Découvrez notre sélection de publication du mois, mettant en lumière 
                    une recherche exceptionnelle sur le patrimoine béninois.
                </p>
            </div>

            <div class="featured-publication fade-in">
                <img src="https://images.unsplash.com/photo-1562564055-71e051d33c19?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1932&q=100" 
                     alt="Symbolique des bas-reliefs d'Abomey" class="featured-image">
                <div class="featured-content">
                    <span class="featured-badge">Publication du mois</span>
                    <h2 class="featured-title">Symbolique et Pouvoir : Les Bas-Reliefs des Palais Royaux d'Abomey</h2>
                    <p class="featured-excerpt">
                        Une analyse approfondie des bas-reliefs en terre cuite qui ornent les murs des palais royaux 
                        d'Abomey. Cette recherche révèle comment l'art servait à légitimer le pouvoir royal, 
                        transmettre l'histoire dynastique et codifier les valeurs sociales du royaume du Dahomey.
                    </p>
                    
                    <div class="featured-author">
                        <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1932&q=80" 
                             alt="Dr. Marie K." class="author-avatar">
                        <div class="author-info">
                            <h4>Dr. Marie K. Adéoti</h4>
                            <p>Professeur d'Histoire de l'Art, Université d'Abomey-Calavi</p>
                        </div>
                    </div>
                    
                    <div style="display: flex; gap: 20px; flex-wrap: wrap;">
                        <a href="#" style="background: linear-gradient(135deg, var(--primary-vibrant), var(--accent-royal)); 
                           color: white; padding: 15px 30px; border-radius: 10px; text-decoration: none; 
                           font-weight: 600; display: inline-flex; align-items: center; gap: 10px;">
                            <i class="fas fa-book-open"></i> Lire l'article
                        </a>
                        <a href="#" style="background: transparent; color: var(--primary-vibrant); 
                           padding: 15px 30px; border-radius: 10px; text-decoration: none; 
                           font-weight: 600; display: inline-flex; align-items: center; gap: 10px;
                           border: 2px solid var(--primary-vibrant);">
                            <i class="far fa-comment"></i> 42 commentaires
                        </a>
                    </div>
                </div>
            </div>

            <!-- Grid des publications -->
            <div class="section-header">
                <h2 class="section-title">Publications Récentes</h2>
                <p class="section-description">
                    Explorez les dernières publications de notre communauté de chercheurs, 
                    passionnés et experts du patrimoine béninois.
                </p>
            </div>

            <div class="publications-grid">
                <!-- Publication 1 -->
                <div class="publication-card fade-in">
                    <div class="publication-img-container">
                        <img src="https://images.unsplash.com/photo-1590080875487-8d3a2c8c3c3d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1932&q=100" 
                             alt="Architecture de Ganvié" class="publication-img">
                        <span class="publication-category">Architecture</span>
                    </div>
                    <div class="publication-content">
                        <h3 class="publication-title">Ganvié : Adaptation et Innovation dans l'Habitat Lacustre</h3>
                        <p class="publication-excerpt">
                            Étude des techniques de construction traditionnelles du village sur pilotis de Ganvié, 
                            illustrant l'adaptation remarquable des populations Tofinu à leur environnement.
                        </p>
                        <div class="publication-meta">
                            <div class="author-meta">
                                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1932&q=80" 
                                     alt="Jean A." class="author-avatar-small">
                                <div>
                                    <div class="author-name">Jean Agossou</div>
                                    <div style="font-size: 13px; color: var(--text-secondary);">Architecte</div>
                                </div>
                            </div>
                            <div class="publication-stats">
                                <div class="stat">
                                    <i class="far fa-eye"></i>
                                    <span>1.2k</span>
                                </div>
                                <div class="stat">
                                    <i class="far fa-comment"></i>
                                    <span>24</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Publication 2 -->
                <div class="publication-card fade-in">
                    <div class="publication-img-container">
                        <img src="https://images.unsplash.com/photo-1545569341-9eb8b30979d9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1932&q=100" 
                             alt="Mémoire de l'esclavage" class="publication-img">
                        <span class="publication-category">Histoire</span>
                    </div>
                    <div class="publication-content">
                        <h3 class="publication-title">La Route des Esclaves : Mémoire et Réconciliation à Ouidah</h3>
                        <p class="publication-excerpt">
                            Analyse historique du parcours mémoriel de la traite négrière à Ouidah et son rôle 
                            dans la réconciliation et la construction identitaire contemporaine.
                        </p>
                        <div class="publication-meta">
                            <div class="author-meta">
                                <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1932&q=80" 
                                     alt="Chantal D." class="author-avatar-small">
                                <div>
                                    <div class="author-name">Dr. Chantal Dossou</div>
                                    <div style="font-size: 13px; color: var(--text-secondary);">Historienne</div>
                                </div>
                            </div>
                            <div class="publication-stats">
                                <div class="stat">
                                    <i class="far fa-eye"></i>
                                    <span>2.8k</span>
                                </div>
                                <div class="stat">
                                    <i class="far fa-comment"></i>
                                    <span>67</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Publication 3 -->
                <div class="publication-card fade-in">
                    <div class="publication-img-container">
                        <img src="https://images.unsplash.com/photo-1518837695005-2083093ee35b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1932&q=100" 
                             alt="Biodiversité Pendjari" class="publication-img">
                        <span class="publication-category">Nature</span>
                    </div>
                    <div class="publication-content">
                        <h3 class="publication-title">Conservation de la Biodiversité dans le Parc de la Pendjari</h3>
                        <p class="publication-excerpt">
                            Évaluation des programmes de conservation et des défis de préservation 
                            de la faune sauvage dans la plus grande réserve naturelle du Bénin.
                        </p>
                        <div class="publication-meta">
                            <div class="author-meta">
                                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1932&q=80" 
                                     alt="Samuel K." class="author-avatar-small">
                                <div>
                                    <div class="author-name">Samuel K. Gbegnon</div>
                                    <div style="font-size: 13px; color: var(--text-secondary);">Écologue</div>
                                </div>
                            </div>
                            <div class="publication-stats">
                                <div class="stat">
                                    <i class="far fa-eye"></i>
                                    <span>1.5k</span>
                                </div>
                                <div class="stat">
                                    <i class="far fa-comment"></i>
                                    <span>32</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Publication 4 -->
                <div class="publication-card fade-in">
                    <div class="publication-img-container">
                        <img src="https://images.unsplash.com/photo-1568315057107-b6b7b360a3e0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1932&q=100" 
                             alt="Art traditionnel" class="publication-img">
                        <span class="publication-category">Art & Tradition</span>
                    </div>
                    <div class="publication-content">
                        <h3 class="publication-title">Les Masques Guélédé : Art, Genre et Société Yoruba</h3>
                        <p class="publication-excerpt">
                            Exploration de la symbolique des masques Guélédé dans la société Yoruba, 
                            leur rôle dans la régulation sociale et la représentation du féminin.
                        </p>
                        <div class="publication-meta">
                            <div class="author-meta">
                                <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1932&q=80" 
                                     alt="Fatou K." class="author-avatar-small">
                                <div>
                                    <div class="author-name">Fatou K. Sènou</div>
                                    <div style="font-size: 13px; color: var(--text-secondary);">Anthropologue</div>
                                </div>
                            </div>
                            <div class="publication-stats">
                                <div class="stat">
                                    <i class="far fa-eye"></i>
                                    <span>2.1k</span>
                                </div>
                                <div class="stat">
                                    <i class="far fa-comment"></i>
                                    <span>45</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Publication 5 -->
                <div class="publication-card fade-in">
                    <div class="publication-img-container">
                        <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1932&q=100" 
                             alt="Architecture Tata Somba" class="publication-img">
                        <span class="publication-category">Architecture</span>
                    </div>
                    <div class="publication-content">
                        <h3 class="publication-title">Tata Somba : Architecture Vernaculaire et Défense</h3>
                        <p class="publication-excerpt">
                            Étude des maisons fortifiées des Bétammaribé, analyse de leur conception défensive 
                            et de leur adaptation au climat et aux besoins communautaires.
                        </p>
                        <div class="publication-meta">
                            <div class="author-meta">
                                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1932&q=80" 
                                     alt="Koffi A." class="author-avatar-small">
                                <div>
                                    <div class="author-name">Koffi Adjanohoun</div>
                                    <div style="font-size: 13px; color: var(--text-secondary);">Architecte</div>
                                </div>
                            </div>
                            <div class="publication-stats">
                                <div class="stat">
                                    <i class="far fa-eye"></i>
                                    <span>1.8k</span>
                                </div>
                                <div class="stat">
                                    <i class="far fa-comment"></i>
                                    <span>28</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Publication 6 -->
                <div class="publication-card fade-in">
                    <div class="publication-img-container">
                        <img src="https://images.unsplash.com/photo-1585320806297-9794b3e4eeae?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1932&q=100" 
                             alt="Cuisine béninoise" class="publication-img">
                        <span class="publication-category">Patrimoine Immatériel</span>
                    </div>
                    <div class="publication-content">
                        <h3 class="publication-title">Saveurs du Bénin : Patrimoine Culinaire et Identité</h3>
                        <p class="publication-excerpt">
                            Exploration des traditions culinaires béninoises, de leur diversité régionale 
                            et de leur rôle dans la construction identitaire et les relations sociales.
                        </p>
                        <div class="publication-meta">
                            <div class="author-meta">
                                <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1932&q=80" 
                                     alt="Amina D." class="author-avatar-small">
                                <div>
                                    <div class="author-name">Amina D. Hounkpatin</div>
                                    <div style="font-size: 13px; color: var(--text-secondary);">Chercheuse</div>
                                </div>
                            </div>
                            <div class="publication-stats">
                                <div class="stat">
                                    <i class="far fa-eye"></i>
                                    <span>2.3k</span>
                                </div>
                                <div class="stat">
                                    <i class="far fa-comment"></i>
                                    <span>51</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="pagination">
                <a href="#" class="page-link active">1</a>
                <a href="#" class="page-link">2</a>
                <a href="#" class="page-link">3</a>
                <a href="#" class="page-link">4</a>
                <a href="#" class="page-link">
                    <i class="fas fa-chevron-right"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Catégories de publications -->
    <section class="section categories-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title" style="color: white;">Catégories de Publications</h2>
                <p class="section-description" style="color: rgba(255, 255, 255, 0.9);">
                    Explorez nos différentes catégories de publications pour trouver 
                    le contenu qui correspond à vos centres d'intérêt.
                </p>
            </div>

            <div class="categories-grid">
                <div class="category-card fade-in">
                    <div class="category-icon">
                        <i class="fas fa-landmark"></i>
                    </div>
                    <h3 class="category-title">Patrimoine Culturel</h3>
                    <p style="color: rgba(255, 255, 255, 0.8); margin-bottom: 15px;">
                        Sites historiques, monuments et traditions
                    </p>
                    <div class="category-count">128 publications</div>
                </div>

                <div class="category-card fade-in">
                    <div class="category-icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <h3 class="category-title">Recherche Académique</h3>
                    <p style="color: rgba(255, 255, 255, 0.8); margin-bottom: 15px;">
                        Articles scientifiques et études approfondies
                    </p>
                    <div class="category-count">94 publications</div>
                </div>

                <div class="category-card fade-in">
                    <div class="category-icon">
                        <i class="fas fa-tree"></i>
                    </div>
                    <h3 class="category-title">Patrimoine Naturel</h3>
                    <p style="color: rgba(255, 255, 255, 0.8); margin-bottom: 15px;">
                        Biodiversité, parcs et paysages naturels
                    </p>
                    <div class="category-count">67 publications</div>
                </div>

                <div class="category-card fade-in">
                    <div class="category-icon">
                        <i class="fas fa-music"></i>
                    </div>
                    <h3 class="category-title">Arts & Traditions</h3>
                    <p style="color: rgba(255, 255, 255, 0.8); margin-bottom: 15px;">
                        Musique, danse, artisanat et coutumes
                    </p>
                    <div class="category-count">112 publications</div>
                </div>

                <div class="category-card fade-in">
                    <div class="category-icon">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <h3 class="category-title">Patrimoine Immatériel</h3>
                    <p style="color: rgba(255, 255, 255, 0.8); margin-bottom: 15px;">
                        Cuisine, contes, savoir-faire traditionnels
                    </p>
                    <div class="category-count">89 publications</div>
                </div>

                <div class="category-card fade-in">
                    <div class="category-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="category-title">Témoignages</h3>
                    <p style="color: rgba(255, 255, 255, 0.8); margin-bottom: 15px;">
                        Histoires personnelles et expériences vécues
                    </p>
                    <div class="category-count">156 publications</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Appel à publication -->
    <section class="section">
        <div class="container">
            <div class="call-to-publish fade-in">
                <h2 class="call-title">Partagez Votre Savoir</h2>
                <p class="call-description">
                    Vous avez mené des recherches sur le patrimoine béninois ? Vous souhaitez partager 
                    vos connaissances ou témoigner de vos expériences culturelles ? Rejoignez notre 
                    communauté de contributeurs et publiez vos travaux sur Culture Bénin.
                </p>
                <button class="publish-btn" id="publishBtn">
                    <i class="fas fa-pen-fancy"></i> Publier un article
                </button>
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
                        <li><a href="index.html"><i class="fas fa-chevron-right"></i> Accueil</a></li>
                        <li><a href="patrimoine.html"><i class="fas fa-chevron-right"></i> Patrimoine</a></li>
                        <li><a href="histoire.html"><i class="fas fa-chevron-right"></i> Histoire</a></li>
                        <li><a href="publications.html" class="active"><i class="fas fa-chevron-right"></i> Publications</a></li>
                        <li><a href="evenements.html"><i class="fas fa-chevron-right"></i> Événements</a></li>
                        <li><a href="communaute.html"><i class="fas fa-chevron-right"></i> Communauté</a></li>
                    </ul>
                </div>
                
                <div class="footer-contact">
                    <h3 class="footer-heading">Contact</h3>
                    <p><i class="fas fa-envelope"></i> publications@culturebenin.bj</p>
                    <p><i class="fas fa-phone"></i> +229 21 30 06 78</p>
                    <p><i class="fas fa-map-marker-alt"></i> Centre de Recherche Culturelle, Cotonou</p>
                    <p><i class="fas fa-clock"></i> Lundi - Vendredi : 8h - 18h</p>
                </div>
            </div>
            
            <div class="copyright">
                <p>&copy; 2023 Culture Bénin - République du Bénin. Tous droits réservés.</p>
                <p style="margin-top: 10px; font-size: 15px;">
                    Ministère de l'Enseignement Supérieur | Conseil National de la Recherche
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

            // Bouton Tableau de bord
            document.getElementById('dashboardBtn').addEventListener('click', function() {
                alert("Accès au tableau de bord de l'application Culture Bénin");
                // Dans l'application Laravel: window.location.href = "/dashboard";
            });

            // Bouton Publier
            document.getElementById('publishBtn').addEventListener('click', function() {
                alert("Ouverture de l'interface de publication. Dans l'application Laravel, cela ouvrirait un formulaire de création d'article.");
                // Dans l'application Laravel: window.location.href = "/publications/create";
            });

            // Filtres interactifs
            const filterSelects = document.querySelectorAll('.filter-select');
            const searchInput = document.querySelector('.search-input');
            
            function filterPublications() {
                const searchTerm = searchInput.value.toLowerCase();
                const categoryFilter = filterSelects[0].value;
                const sortFilter = filterSelects[1].value;
                
                const cards = document.querySelectorAll('.publication-card');
                const cardsArray = Array.from(cards);
                
                // Filtrer par recherche
                cardsArray.forEach(card => {
                    const title = card.querySelector('.publication-title').textContent.toLowerCase();
                    const excerpt = card.querySelector('.publication-excerpt').textContent.toLowerCase();
                    const category = card.querySelector('.publication-category').textContent.toLowerCase();
                    
                    const matchesSearch = !searchTerm || 
                        title.includes(searchTerm) || 
                        excerpt.includes(searchTerm);
                    
                    const matchesCategory = !categoryFilter || 
                        (categoryFilter === 'recherche' && category.includes('académique')) ||
                        (categoryFilter === 'patrimoine' && (category.includes('patrimoine') || category.includes('culturel'))) ||
                        (categoryFilter === 'histoire' && category.includes('histoire')) ||
                        (categoryFilter === 'art' && category.includes('art')) ||
                        (categoryFilter === 'nature' && category.includes('nature')) ||
                        (categoryFilter === 'temoignage' && category.includes('témoignage'));
                    
                    if (matchesSearch && matchesCategory) {
                        card.style.display = 'flex';
                    } else {
                        card.style.display = 'none';
                    }
                });
                
                // Trier les publications
                if (sortFilter === 'populaire') {
                    // Simulation de tri par popularité
                    const visibleCards = cardsArray.filter(card => card.style.display !== 'none');
                    visibleCards.sort((a, b) => {
                        const viewsA = parseInt(a.querySelector('.stat span').textContent);
                        const viewsB = parseInt(b.querySelector('.stat span').textContent);
                        return viewsB - viewsA;
                    });
                    
                    // Réorganiser dans le DOM
                    const grid = document.querySelector('.publications-grid');
                    visibleCards.forEach(card => {
                        grid.appendChild(card);
                    });
                }
            }
            
            filterSelects.forEach(select => {
                select.addEventListener('change', filterPublications);
            });
            
            searchInput.addEventListener('input', filterPublications);
            
            // Recherche
            document.querySelector('.search-button').addEventListener('click', filterPublications);
        });
    </script>
</body>
</html>