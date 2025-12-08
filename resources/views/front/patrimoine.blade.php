<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patrimoine Culturel | Culture Bénin</title>
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
            background: linear-gradient(135deg, rgba(42, 157, 143, 0.9) 0%, rgba(90, 24, 154, 0.8) 100%);
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
            opacity: 0.8;
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

        /* Filtres de recherche */
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

        .filter-group {
            flex: 1;
            min-width: 250px;
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

        /* Grid des patrimoines */
        .patrimoine-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(380px, 1fr));
            gap: 40px;
            margin-bottom: 80px;
        }

        .patrimoine-card {
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

        .patrimoine-card:hover {
            transform: translateY(-15px) scale(1.02);
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.15);
        }

        .patrimoine-img-container {
            width: 100%;
            height: 280px;
            overflow: hidden;
            position: relative;
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

        .patrimoine-badge {
            position: absolute;
            top: 20px;
            right: 20px;
            background: linear-gradient(135deg, var(--primary-vibrant), var(--accent-royal));
            color: white;
            padding: 8px 20px;
            border-radius: 25px;
            font-size: 14px;
            font-weight: 700;
            letter-spacing: 0.5px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .patrimoine-content {
            padding: 32px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .patrimoine-category {
            display: inline-block;
            background-color: rgba(42, 157, 143, 0.1);
            color: var(--accent-earth);
            padding: 6px 16px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 15px;
            align-self: flex-start;
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
            flex-grow: 1;
        }

        .patrimoine-location {
            display: flex;
            align-items: center;
            gap: 10px;
            color: var(--accent-earth);
            font-weight: 600;
            margin-bottom: 20px;
            font-size: 15px;
        }

        .patrimoine-location i {
            font-size: 18px;
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

        /* Catégories de patrimoine */
        .categories-section {
            background: linear-gradient(135deg, var(--section-bg) 0%, #E8F4F8 100%);
        }

        .categories-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 40px;
        }

        .category-card {
            background-color: white;
            border-radius: 16px;
            padding: 40px 30px;
            text-align: center;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.06);
            transition: all 0.4s;
            border: 2px solid transparent;
        }

        .category-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.12);
            border-color: var(--accent-gold);
        }

        .category-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--accent-gold), var(--accent-sun));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            font-size: 36px;
            color: var(--primary-dark);
        }

        .category-title {
            font-size: 24px;
            margin-bottom: 15px;
            color: var(--primary-dark);
        }

        .category-count {
            color: var(--primary-vibrant);
            font-weight: 700;
            font-size: 18px;
        }

        /* Patrimoine UNESCO */
        .unesco-section {
            background: linear-gradient(135deg, var(--primary-dark) 0%, #1D3557 100%);
            color: white;
        }

        .unesco-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 40px;
        }

        .unesco-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 16px;
            overflow: hidden;
            transition: all 0.4s;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .unesco-card:hover {
            transform: translateY(-10px);
            background: rgba(255, 255, 255, 0.15);
            border-color: var(--accent-gold);
        }

        .unesco-badge {
            background: linear-gradient(135deg, var(--accent-gold), var(--accent-sun));
            color: var(--primary-dark);
            padding: 8px 20px;
            border-radius: 25px;
            font-weight: 700;
            display: inline-block;
            margin-bottom: 20px;
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
        }

        @media (max-width: 1024px) {
            .nav-links {
                gap: 30px;
            }
            
            .section-title {
                font-size: 42px;
            }
            
            .patrimoine-grid,
            .categories-grid,
            .unesco-grid {
                grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
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
            
            .filter-group,
            .search-container {
                min-width: 100%;
            }
            
            .patrimoine-grid,
            .categories-grid,
            .unesco-grid {
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
            
            .patrimoine-content {
                padding: 25px;
            }
            
            .patrimoine-img-container {
                height: 220px;
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
        <img src="https://images.unsplash.com/photo-1562564055-71e051d33c19?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1932&q=100" 
             alt="Palais Royaux d'Abomey - Patrimoine UNESCO" class="page-hero-bg">
        <div class="container">
            <h1 class="page-hero-title fade-in">Patrimoine Culturel du Bénin</h1>
            <p class="page-hero-subtitle fade-in">
                Explorez la richesse du patrimoine béninois : sites historiques classés UNESCO, 
                monuments emblématiques, traditions vivantes et trésors naturels.
            </p>
        </div>
    </section>

    <!-- Barre de filtres -->
    <section class="section">
        <div class="container">
            <div class="filter-bar fade-in">
                <div class="search-container">
                    <input type="text" class="search-input" placeholder="Rechercher un patrimoine...">
                    <button class="search-button">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
                
                <div class="filter-group">
                    <label class="filter-label">Type de patrimoine</label>
                    <select class="filter-select">
                        <option value="">Tous les types</option>
                        <option value="unesco">Sites UNESCO</option>
                        <option value="historique">Monuments historiques</option>
                        <option value="naturel">Sites naturels</option>
                        <option value="culturel">Traditions culturelles</option>
                        <option value="architectural">Architecture</option>
                    </select>
                </div>
                
                <div class="filter-group">
                    <label class="filter-label">Région</label>
                    <select class="filter-select">
                        <option value="">Toutes les régions</option>
                        <option value="atlantique">Atlantique</option>
                        <option value="littoral">Littoral</option>
                        <option value="oueme">Ouémé</option>
                        <option value="plateau">Plateau</option>
                        <option value="borgou">Borgou</option>
                        <option value="atacora">Atacora</option>
                        <option value="donga">Donga</option>
                        <option value="couffo">Couffo</option>
                        <option value="zou">Zou</option>
                        <option value="collines">Collines</option>
                        <option value="mono">Mono</option>
                    </select>
                </div>
            </div>

            <!-- Grid des patrimoines -->
            <div class="section-header">
                <h2 class="section-title">Découvrir le Patrimoine</h2>
                <p class="section-description">
                    Le Bénin regorge de sites culturels et naturels exceptionnels qui témoignent 
                    de son histoire riche et de sa diversité culturelle.
                </p>
            </div>

            <div class="patrimoine-grid">
                <!-- Patrimoine 1 - Palais Royaux d'Abomey -->
                <div class="patrimoine-card fade-in">
                    <div class="patrimoine-img-container">
                        <img src="https://images.unsplash.com/photo-1562564055-71e051d33c19?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1932&q=100" 
                             alt="Palais Royaux d'Abomey" class="patrimoine-img">
                        <div class="patrimoine-badge">UNESCO</div>
                    </div>
                    <div class="patrimoine-content">
                        <span class="patrimoine-category">Monument Historique</span>
                        <h3 class="patrimoine-title">Palais Royaux d'Abomey</h3>
                        <p class="patrimoine-description">
                            Les douze palais des rois du Danhomè, construits entre le XVIIe et le XIXe siècle. 
                            Ce site classé au patrimoine mondial témoigne de la puissance et de l'organisation 
                            du royaume fon, avec ses bas-reliefs uniques et son architecture remarquable.
                        </p>
                        <div class="patrimoine-location">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Abomey, Département du Zou</span>
                        </div>
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
                                <i class="fas fa-star"></i>
                                <span>4.8/5</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Patrimoine 2 - Ganvié -->
                <div class="patrimoine-card fade-in">
                    <div class="patrimoine-img-container">
                        <img src="https://images.unsplash.com/photo-1590080875487-8d3a2c8c3c3d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1932&q=100" 
                             alt="Village sur pilotis de Ganvié" class="patrimoine-img">
                        <div class="patrimoine-badge">Site Unique</div>
                    </div>
                    <div class="patrimoine-content">
                        <span class="patrimoine-category">Village Lacustre</span>
                        <h3 class="patrimoine-title">Ganvié - La Venise de l'Afrique</h3>
                        <p class="patrimoine-description">
                            Village lacustre exceptionnel construit sur le lac Nokoué, habité par les Tofinu. 
                            Fondé au XVIIIe siècle pour échapper aux razzias esclavagistes, ce site illustre 
                            l'ingéniosité et l'adaptation des populations à leur environnement.
                        </p>
                        <div class="patrimoine-location">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Lac Nokoué, Département de l'Atlantique</span>
                        </div>
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
                                <i class="fas fa-star"></i>
                                <span>4.9/5</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Patrimoine 3 - Pendjari -->
                <div class="patrimoine-card fade-in">
                    <div class="patrimoine-img-container">
                        <img src="https://images.unsplash.com/photo-1518837695005-2083093ee35b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1932&q=100" 
                             alt="Parc National de la Pendjari" class="patrimoine-img">
                        <div class="patrimoine-badge">Réserve UNESCO</div>
                    </div>
                    <div class="patrimoine-content">
                        <span class="patrimoine-category">Parc National</span>
                        <h3 class="patrimoine-title">Parc National de la Pendjari</h3>
                        <p class="patrimoine-description">
                            Sanctuaire de biodiversité abritant la plus grande population d'éléphants d'Afrique de l'Ouest, 
                            ainsi que des lions, buffles, hippopotames et plus de 300 espèces d'oiseaux. 
                            Réserve de biosphère UNESCO depuis 1986.
                        </p>
                        <div class="patrimoine-location">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Nord-Ouest du Bénin, Atacora</span>
                        </div>
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
                                <i class="fas fa-star"></i>
                                <span>4.7/5</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Patrimoine 4 - Porte du Non-Retour -->
                <div class="patrimoine-card fade-in">
                    <div class="patrimoine-img-container">
                        <img src="https://images.unsplash.com/photo-1545569341-9eb8b30979d9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1932&q=100" 
                             alt="Porte du Non-Retour - Ouidah" class="patrimoine-img">
                        <div class="patrimoine-badge">Site Mémorial</div>
                    </div>
                    <div class="patrimoine-content">
                        <span class="patrimoine-category">Patrimoine Historique</span>
                        <h3 class="patrimoine-title">Porte du Non-Retour - Ouidah</h3>
                        <p class="patrimoine-description">
                            Monument mémoriel de la traite négrière, situé sur la plage de Ouidah. 
                            Symbole du départ définitif des esclaves africains vers les Amériques, 
                            ce site est un lieu de mémoire et de réconciliation.
                        </p>
                        <div class="patrimoine-location">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Ouidah, Département de l'Atlantique</span>
                        </div>
                        <div class="patrimoine-stats">
                            <div class="stat">
                                <i class="far fa-eye"></i>
                                <span>4,218 consultations</span>
                            </div>
                            <div class="stat">
                                <i class="far fa-comment"></i>
                                <span>89 commentaires</span>
                            </div>
                            <div class="stat">
                                <i class="fas fa-star"></i>
                                <span>4.8/5</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Patrimoine 5 - Tata Somba -->
                <div class="patrimoine-card fade-in">
                    <div class="patrimoine-img-container">
                        <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1932&q=100" 
                             alt="Tata Somba - Architecture traditionnelle" class="patrimoine-img">
                        <div class="patrimoine-badge">Architecture Unique</div>
                    </div>
                    <div class="patrimoine-content">
                        <span class="patrimoine-category">Architecture Traditionnelle</span>
                        <h3 class="patrimoine-title">Tata Somba</h3>
                        <p class="patrimoine-description">
                            Habitations fortifiées traditionnelles des Bétammaribé dans la région de l'Atacora. 
                            Ces structures en terre aux formes de châteaux forts représentent un savoir-faire 
                            architectural ancestral unique en Afrique de l'Ouest.
                        </p>
                        <div class="patrimoine-location">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Région de l'Atacora, Nord Bénin</span>
                        </div>
                        <div class="patrimoine-stats">
                            <div class="stat">
                                <i class="far fa-eye"></i>
                                <span>1,876 consultations</span>
                            </div>
                            <div class="stat">
                                <i class="far fa-comment"></i>
                                <span>34 commentaires</span>
                            </div>
                            <div class="stat">
                                <i class="fas fa-star"></i>
                                <span>4.6/5</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Patrimoine 6 - Musée d'Histoire de Ouidah -->
                <div class="patrimoine-card fade-in">
                    <div class="patrimoine-img-container">
                        <img src="https://images.unsplash.com/photo-1585320806297-9794b3e4eeae?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1932&q=100" 
                             alt="Musée d'Histoire de Ouidah" class="patrimoine-img">
                        <div class="patrimoine-badge">Musée National</div>
                    </div>
                    <div class="patrimoine-content">
                        <span class="patrimoine-category">Musée & Culture</span>
                        <h3 class="patrimoine-title">Musée d'Histoire de Ouidah</h3>
                        <p class="patrimoine-description">
                            Installé dans l'ancien fort portugais de São João Baptista d'Ajudá, ce musée retrace 
                            l'histoire du royaume de Dahomey, la traite négrière et les relations avec les puissances 
                            européennes. Collection exceptionnelle d'objets historiques.
                        </p>
                        <div class="patrimoine-location">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Ouidah, Département de l'Atlantique</span>
                        </div>
                        <div class="patrimoine-stats">
                            <div class="stat">
                                <i class="far fa-eye"></i>
                                <span>3,421 consultations</span>
                            </div>
                            <div class="stat">
                                <i class="far fa-comment"></i>
                                <span>56 commentaires</span>
                            </div>
                            <div class="stat">
                                <i class="fas fa-star"></i>
                                <span>4.7/5</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="pagination">
                <a href="patrimoine.html" class="page-link active">1</a>
                <a href="patrimoine.html" class="page-link">2</a>
                <a href="patrimoine.html" class="page-link">3</a>
                <a href="patrimoine.html" class="page-link">4</a>
                <a href="patrimoine.html" class="page-link">
                    <i class="fas fa-chevron-right"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Section Catégories -->
    <section class="section categories-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Catégories de Patrimoine</h2>
                <p class="section-description">
                    Le patrimoine béninois se décline en différentes catégories qui reflètent 
                    la diversité culturelle et naturelle du pays.
                </p>
            </div>

            <div class="categories-grid">
                <div class="category-card fade-in">
                    <div class="category-icon">
                        <i class="fas fa-landmark"></i>
                    </div>
                    <h3 class="category-title">Monuments Historiques</h3>
                    <p>Palais, forts, sites archéologiques et bâtiments classés</p>
                    <div class="category-count">24 sites</div>
                </div>

                <div class="category-card fade-in">
                    <div class="category-icon">
                        <i class="fas fa-tree"></i>
                    </div>
                    <h3 class="category-title">Sites Naturels</h3>
                    <p>Parcs nationaux, réserves, forêts sacrées et paysages</p>
                    <div class="category-count">18 sites</div>
                </div>

                <div class="category-card fade-in">
                    <div class="category-icon">
                        <i class="fas fa-music"></i>
                    </div>
                    <h3 class="category-title">Traditions Vivantes</h3>
                    <p>Danses, musiques, festivals et savoir-faire artisanaux</p>
                    <div class="category-count">42 traditions</div>
                </div>

                <div class="category-card fade-in">
                    <div class="category-icon">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <h3 class="category-title">Patrimoine Immatériel</h3>
                    <p>Cuisine, contes, médecine traditionnelle et rituels</p>
                    <div class="category-count">36 éléments</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Patrimoine UNESCO -->
    <section class="section unesco-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title" style="color: white;">Patrimoine Mondial UNESCO</h2>
                <p class="section-description" style="color: rgba(255, 255, 255, 0.9);">
                    Les sites béninois inscrits au patrimoine mondial de l'UNESCO, 
                    reconnus pour leur valeur universelle exceptionnelle.
                </p>
            </div>

            <div class="unesco-grid">
                <div class="unesco-card fade-in">
                    <div class="card-content">
                        <span class="unesco-badge">Site UNESCO</span>
                        <h3 style="color: white; margin-bottom: 15px; font-size: 24px;">Palais Royaux d'Abomey</h3>
                        <p style="color: rgba(255, 255, 255, 0.9); margin-bottom: 20px;">
                            Inscrit en 1985. Témoignage exceptionnel du royaume du Dahomey 
                            et de son organisation politique et sociale.
                        </p>
                        <div style="display: flex; align-items: center; gap: 15px;">
                            <span style="color: var(--accent-gold); font-weight: 600;">
                                <i class="fas fa-calendar-alt"></i> 1985
                            </span>
                            <span style="color: rgba(255, 255, 255, 0.8);">
                                <i class="fas fa-tag"></i> Culturel
                            </span>
                        </div>
                    </div>
                </div>

                <div class="unesco-card fade-in">
                    <div class="card-content">
                        <span class="unesco-badge">Réserve UNESCO</span>
                        <h3 style="color: white; margin-bottom: 15px; font-size: 24px;">Parc W du Niger</h3>
                        <p style="color: rgba(255, 255, 255, 0.9); margin-bottom: 20px;">
                            Réserve transfrontalière avec le Niger et Burkina Faso. 
                            Écosystème sahélien exceptionnel et refuge pour la faune menacée.
                        </p>
                        <div style="display: flex; align-items: center; gap: 15px;">
                            <span style="color: var(--accent-gold); font-weight: 600;">
                                <i class="fas fa-calendar-alt"></i> 1996
                            </span>
                            <span style="color: rgba(255, 255, 255, 0.8);">
                                <i class="fas fa-tag"></i> Naturel
                            </span>
                        </div>
                    </div>
                </div>

                <div class="unesco-card fade-in">
                    <div class="card-content">
                        <span class="unesco-badge">Patrimoine Immatériel</span>
                        <h3 style="color: white; margin-bottom: 15px; font-size: 24px;">Cérémonie du Zangbeto</h3>
                        <p style="color: rgba(255, 255, 255, 0.9); margin-bottom: 20px;">
                            Tradition vodoun des gardiens de la nuit. Pratique culturelle vivante 
                            des populations du sud Bénin, reconnue pour son importance sociale.
                        </p>
                        <div style="display: flex; align-items: center; gap: 15px;">
                            <span style="color: var(--accent-gold); font-weight: 600;">
                                <i class="fas fa-calendar-alt"></i> 2021
                            </span>
                            <span style="color: rgba(255, 255, 255, 0.8);">
                                <i class="fas fa-tag"></i> Immatériel
                            </span>
                        </div>
                    </div>
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
                        <li><a href="index.html"><i class="fas fa-chevron-right"></i> Accueil</a></li>
                        <li><a href="patrimoine.html" class="active"><i class="fas fa-chevron-right"></i> Patrimoine</a></li>
                        <li><a href="histoire.html"><i class="fas fa-chevron-right"></i> Histoire</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Publications</a></li>
                        <li><a href="evenements.html"><i class="fas fa-chevron-right"></i> Événements</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Communauté</a></li>
                    </ul>
                </div>
                
                <div class="footer-contact">
                    <h3 class="footer-heading">Contact</h3>
                    <p><i class="fas fa-envelope"></i> patrimoine@culturebenin.bj</p>
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

            // Bouton Tableau de bord
            document.getElementById('dashboardBtn').addEventListener('click', function() {
                alert("Accès au tableau de bord de l'application Culture Bénin");
                // Dans l'application Laravel: window.location.href = "/dashboard";
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

            // Filtres interactifs
            const filterSelects = document.querySelectorAll('.filter-select');
            const searchInput = document.querySelector('.search-input');
            
            function filterPatrimoine() {
                const searchTerm = searchInput.value.toLowerCase();
                const typeFilter = filterSelects[0].value;
                const regionFilter = filterSelects[1].value;
                
                const cards = document.querySelectorAll('.patrimoine-card');
                
                cards.forEach(card => {
                    const title = card.querySelector('.patrimoine-title').textContent.toLowerCase();
                    const description = card.querySelector('.patrimoine-description').textContent.toLowerCase();
                    const category = card.querySelector('.patrimoine-category').textContent.toLowerCase();
                    const location = card.querySelector('.patrimoine-location span').textContent.toLowerCase();
                    
                    const matchesSearch = !searchTerm || 
                        title.includes(searchTerm) || 
                        description.includes(searchTerm);
                    
                    const matchesType = !typeFilter || 
                        (typeFilter === 'unesco' && card.querySelector('.patrimoine-badge')?.textContent.includes('UNESCO')) ||
                        (typeFilter === 'historique' && category.includes('historique')) ||
                        (typeFilter === 'naturel' && category.includes('naturel')) ||
                        (typeFilter === 'culturel' && category.includes('culturel')) ||
                        (typeFilter === 'architectural' && category.includes('architectural'));
                    
                    const matchesRegion = !regionFilter || 
                        location.includes(regionFilter);
                    
                    if (matchesSearch && matchesType && matchesRegion) {
                        card.style.display = 'flex';
                    } else {
                        card.style.display = 'none';
                    }
                });
            }
            
            filterSelects.forEach(select => {
                select.addEventListener('change', filterPatrimoine);
            });
            
            searchInput.addEventListener('input', filterPatrimoine);
            
            // Recherche
            document.querySelector('.search-button').addEventListener('click', filterPatrimoine);
        });
    </script>
</body>
</html>