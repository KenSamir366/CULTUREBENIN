<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histoire du Bénin | Culture Bénin</title>
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
            background: linear-gradient(135deg, rgba(90, 24, 154, 0.9) 0%, rgba(10, 27, 40, 0.8) 100%);
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

        /* Timeline Historique */
        .timeline-section {
            background: linear-gradient(135deg, var(--section-bg) 0%, #E8F4F8 100%);
            position: relative;
            overflow: hidden;
        }

        .timeline-container {
            max-width: 1000px;
            margin: 0 auto;
            position: relative;
            padding: 40px 0;
        }

        .timeline-line {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            width: 6px;
            height: 100%;
            background: linear-gradient(to bottom, var(--primary-vibrant), var(--accent-royal));
            border-radius: 3px;
        }

        .timeline-item {
            display: flex;
            justify-content: center;
            margin-bottom: 80px;
            position: relative;
        }

        .timeline-content {
            background-color: var(--card-bg);
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            width: 45%;
            position: relative;
            transition: all 0.4s;
        }

        .timeline-content:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.15);
        }

        .timeline-item:nth-child(odd) .timeline-content {
            margin-right: 55%;
        }

        .timeline-item:nth-child(even) .timeline-content {
            margin-left: 55%;
        }

        .timeline-year {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: linear-gradient(135deg, var(--accent-earth), var(--accent-royal));
            color: white;
            padding: 15px 30px;
            border-radius: 30px;
            font-weight: 800;
            font-size: 22px;
            min-width: 120px;
            text-align: center;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            z-index: 10;
        }

        .timeline-item:nth-child(odd) .timeline-year {
            right: -70px;
        }

        .timeline-item:nth-child(even) .timeline-year {
            left: -70px;
        }

        .timeline-dot {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            width: 24px;
            height: 24px;
            background-color: var(--accent-gold);
            border-radius: 50%;
            border: 6px solid var(--card-bg);
            box-shadow: 0 0 0 4px var(--accent-royal);
            z-index: 10;
        }

        .timeline-title {
            font-size: 28px;
            color: var(--primary-dark);
            margin-bottom: 15px;
            line-height: 1.3;
        }

        .timeline-description {
            color: var(--text-secondary);
            line-height: 1.8;
            margin-bottom: 20px;
        }

        .timeline-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 12px;
            margin-bottom: 20px;
        }

        /* Périodes Historiques */
        .periods-section {
            background-color: white;
        }

        .periods-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 40px;
        }

        .period-card {
            background-color: var(--card-bg);
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
            transition: all 0.4s;
            position: relative;
        }

        .period-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.15);
        }

        .period-header {
            background: linear-gradient(135deg, var(--accent-earth), var(--accent-royal));
            color: white;
            padding: 30px;
            text-align: center;
        }

        .period-title {
            font-size: 28px;
            margin-bottom: 10px;
        }

        .period-dates {
            font-size: 18px;
            opacity: 0.9;
        }

        .period-content {
            padding: 30px;
        }

        .period-highlights {
            margin: 25px 0;
        }

        .highlight {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 15px;
        }

        .highlight i {
            color: var(--primary-vibrant);
            font-size: 20px;
        }

        /* Personnages Historiques */
        .figures-section {
            background: linear-gradient(135deg, var(--primary-dark) 0%, #1D3557 100%);
            color: white;
        }

        .figures-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 40px;
        }

        .figure-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 16px;
            overflow: hidden;
            transition: all 0.4s;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .figure-card:hover {
            transform: translateY(-10px);
            background: rgba(255, 255, 255, 0.15);
            border-color: var(--accent-gold);
        }

        .figure-image {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .figure-content {
            padding: 30px;
        }

        .figure-name {
            font-size: 24px;
            margin-bottom: 10px;
            color: var(--accent-gold);
        }

        .figure-title {
            color: rgba(255, 255, 255, 0.9);
            font-size: 16px;
            margin-bottom: 15px;
            font-style: italic;
        }

        .figure-quote {
            color: rgba(255, 255, 255, 0.8);
            font-style: italic;
            position: relative;
            padding-left: 20px;
            border-left: 3px solid var(--accent-gold);
            margin: 20px 0;
        }

        /* Indépendance Section */
        .independence-section {
            background: linear-gradient(135deg, #F8F9FA 0%, #E9ECEF 100%);
        }

        .independence-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .independence-text h3 {
            font-size: 42px;
            color: var(--primary-dark);
            margin-bottom: 30px;
            line-height: 1.2;
        }

        .independence-text h3 span {
            color: var(--primary-vibrant);
            position: relative;
        }

        .independence-text h3 span::after {
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

        /* Archives Historiques */
        .archives-section {
            background-color: white;
        }

        .archives-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 40px;
        }

        .archive-card {
            background-color: var(--card-bg);
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);
            transition: all 0.4s;
        }

        .archive-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.15);
        }

        .archive-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .archive-content {
            padding: 25px;
        }

        .archive-type {
            display: inline-block;
            background-color: rgba(42, 157, 143, 0.1);
            color: var(--accent-earth);
            padding: 6px 16px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .archive-title {
            font-size: 22px;
            margin-bottom: 15px;
            color: var(--primary-dark);
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
            
            .timeline-line {
                left: 30px;
            }
            
            .timeline-item:nth-child(odd) .timeline-content,
            .timeline-item:nth-child(even) .timeline-content {
                width: calc(100% - 100px);
                margin-left: 100px;
            }
            
            .timeline-item:nth-child(odd) .timeline-year,
            .timeline-item:nth-child(even) .timeline-year {
                left: -80px;
                right: auto;
            }
            
            .independence-content {
                grid-template-columns: 1fr;
                gap: 50px;
            }
            
            .periods-grid,
            .figures-grid,
            .archives-grid {
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
            
            .timeline-item {
                margin-bottom: 60px;
            }
            
            .timeline-content {
                padding: 30px;
            }
            
            .independence-highlights {
                grid-template-columns: 1fr;
            }
            
            .periods-grid,
            .figures-grid,
            .archives-grid {
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
            
            .timeline-year {
                font-size: 18px;
                padding: 12px 20px;
                min-width: 100px;
            }
            
            .independence-image {
                height: 400px;
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
        <img src="https://images.unsplash.com/photo-1581833971358-2c8b550f87b3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1932&q=100" 
             alt="Histoire du Bénin - Fresque historique" class="page-hero-bg">
        <div class="container">
            <h1 class="page-hero-title fade-in">Histoire du Bénin</h1>
            <p class="page-hero-subtitle fade-in">
                Plongez dans l'épopée historique du Bénin, des royaumes précoloniaux à la République moderne, 
                à travers les grandes périodes, les personnages marquants et les événements fondateurs.
            </p>
        </div>
    </section>

    <!-- Timeline Historique -->
    <section class="section timeline-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Chronologie Historique</h2>
                <p class="section-description">
                    Parcourez les moments clés qui ont façonné l'histoire du Bénin, 
                    des civilisations anciennes à l'époque contemporaine.
                </p>
            </div>

            <div class="timeline-container">
                <div class="timeline-line"></div>
                
                <!-- Période 1 - Royaumes Précoloniaux -->
                <div class="timeline-item fade-in">
                    <div class="timeline-dot"></div>
                    <div class="timeline-year">XIIe - XIXe siècle</div>
                    <div class="timeline-content">
                        <img src="https://images.unsplash.com/photo-1562564055-71e051d33c19?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1932&q=80" 
                             alt="Royaumes du Dahomey" class="timeline-image">
                        <h3 class="timeline-title">Les Royaumes Précoloniaux</h3>
                        <p class="timeline-description">
                            Le territoire actuel du Bénin voit l'émergence de plusieurs royaumes puissants, 
                            notamment le royaume du Dahomey fondé au XVIIe siècle. Ces royaumes développent 
                            des systèmes politiques complexes, une économie basée sur l'agriculture et le 
                            commerce, et une riche tradition culturelle et religieuse.
                        </p>
                        <div class="highlight">
                            <i class="fas fa-crown"></i>
                            <span>Fondation du royaume du Dahomey vers 1600</span>
                        </div>
                        <div class="highlight">
                            <i class="fas fa-exchange-alt"></i>
                            <span>Commerce transatlantique et relations avec les Européens</span>
                        </div>
                    </div>
                </div>

                <!-- Période 2 - Colonisation Française -->
                <div class="timeline-item fade-in">
                    <div class="timeline-dot"></div>
                    <div class="timeline-year">1894 - 1960</div>
                    <div class="timeline-content">
                        <img src="https://images.unsplash.com/photo-1545569341-9eb8b30979d9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1932&q=80" 
                             alt="Colonisation française" class="timeline-image">
                        <h3 class="timeline-title">Colonisation Française</h3>
                        <p class="timeline-description">
                            Après la défaite du roi Béhanzin en 1894, le Dahomey devient une colonie française. 
                            La période coloniale voit l'introduction de nouvelles institutions, l'exploitation 
                            des ressources naturelles et le développement des infrastructures, mais aussi 
                            des résistances et mouvements nationalistes qui préparent l'indépendance.
                        </p>
                        <div class="highlight">
                            <i class="fas fa-flag"></i>
                            <span>Conquête française et traité de protectorat en 1894</span>
                        </div>
                        <div class="highlight">
                            <i class="fas fa-user-graduate"></i>
                            <span>Émergence d'une élite éduquée et mouvement nationaliste</span>
                        </div>
                    </div>
                </div>

                <!-- Période 3 - Indépendance -->
                <div class="timeline-item fade-in">
                    <div class="timeline-dot"></div>
                    <div class="timeline-year">1960</div>
                    <div class="timeline-content">
                        <img src="https://images.unsplash.com/photo-1551632436-cbf8dd35adfa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1932&q=80" 
                             alt="Indépendance du Bénin" class="timeline-image">
                        <h3 class="timeline-title">Indépendance du Dahomey</h3>
                        <p class="timeline-description">
                            Le 1er août 1960, le Dahomey proclame son indépendance sous la présidence d'Hubert Maga. 
                            Cette période marque le début des défis de construction nationale, avec l'établissement 
                            des institutions républicaines et la recherche d'un modèle de développement adapté.
                        </p>
                        <div class="highlight">
                            <i class="fas fa-star"></i>
                            <span>Proclamation de l'indépendance le 1er août 1960</span>
                        </div>
                        <div class="highlight">
                            <i class="fas fa-landmark"></i>
                            <span>Création des premières institutions républicaines</span>
                        </div>
                    </div>
                </div>

                <!-- Période 4 - République Populaire -->
                <div class="timeline-item fade-in">
                    <div class="timeline-dot"></div>
                    <div class="timeline-year">1972 - 1990</div>
                    <div class="timeline-content">
                        <img src="https://images.unsplash.com/photo-1581833971358-2c8b550f87b3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1932&q=80" 
                             alt="République populaire du Bénin" class="timeline-image">
                        <h3 class="timeline-title">République Populaire du Bénin</h3>
                        <p class="timeline-description">
                            Sous la direction du président Mathieu Kérékou, le pays adopte le marxisme-léninisme 
                            comme idéologie officielle et devient la République populaire du Bénin le 30 novembre 1975. 
                            Cette période est marquée par des réformes sociales mais aussi par des difficultés économiques.
                        </p>
                        <div class="highlight">
                            <i class="fas fa-history"></i>
                            <span>Changement de nom en République populaire du Bénin (1975)</span>
                        </div>
                        <div class="highlight">
                            <i class="fas fa-balance-scale"></i>
                            <span>Adoption du marxisme-léninisme comme idéologie d'État</span>
                        </div>
                    </div>
                </div>

                <!-- Période 5 - Démocratisation -->
                <div class="timeline-item fade-in">
                    <div class="timeline-dot"></div>
                    <div class="timeline-year">1990 - Aujourd'hui</div>
                    <div class="timeline-content">
                        <img src="https://images.unsplash.com/photo-1551632436-cbf8dd35adfa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1932&q=80" 
                             alt="Transition démocratique" class="timeline-image">
                        <h3 class="timeline-title">Transition Démocratique et Développement</h3>
                        <p class="timeline-description">
                            La Conférence des forces vives de la nation en 1990 marque le début de la transition 
                            démocratique. L'adoption d'une nouvelle constitution et l'organisation d'élections 
                            multipartites ouvrent une nouvelle ère de stabilité politique et de développement économique.
                        </p>
                        <div class="highlight">
                            <i class="fas fa-vote-yea"></i>
                            <span>Conférence nationale et transition démocratique (1990)</span>
                        </div>
                        <div class="highlight">
                            <i class="fas fa-chart-line"></i>
                            <span>Croissance économique et développement infrastructurel</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Périodes Historiques -->
    <section class="section periods-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Grandes Périodes Historiques</h2>
                <p class="section-description">
                    Explorez les époques majeures qui ont construit l'identité du Bénin, 
                    chacune avec ses caractéristiques et son héritage unique.
                </p>
            </div>

            <div class="periods-grid">
                <!-- Période 1 -->
                <div class="period-card fade-in">
                    <div class="period-header">
                        <h3 class="period-title">Période Précoloniale</h3>
                        <div class="period-dates">XIIe siècle - 1894</div>
                    </div>
                    <div class="period-content">
                        <p>Émergence des royaumes africains, développement des systèmes politiques autochtones, 
                        commerce transsaharien et traditions culturelles riches.</p>
                        
                        <div class="period-highlights">
                            <div class="highlight">
                                <i class="fas fa-chess-king"></i>
                                <span>Royaume du Dahomey (Fon)</span>
                            </div>
                            <div class="highlight">
                                <i class="fas fa-city"></i>
                                <span>Royaumes de Porto-Novo et de Kétou</span>
                            </div>
                            <div class="highlight">
                                <i class="fas fa-ship"></i>
                                <span>Commerce avec les Européens</span>
                            </div>
                        </div>
                        
                        <div style="background: rgba(42, 157, 143, 0.1); padding: 15px; border-radius: 10px; margin-top: 20px;">
                            <strong>Héritage:</strong> Systèmes politiques sophistiqués, arts royaux, traditions vodoun
                        </div>
                    </div>
                </div>

                <!-- Période 2 -->
                <div class="period-card fade-in">
                    <div class="period-header">
                        <h3 class="period-title">Colonisation Française</h3>
                        <div class="period-dates">1894 - 1960</div>
                    </div>
                    <div class="period-content">
                        <p>Administration coloniale, développement des infrastructures modernes, éducation occidentale 
                        et émergence des mouvements nationalistes.</p>
                        
                        <div class="period-highlights">
                            <div class="highlight">
                                <i class="fas fa-school"></i>
                                <span>Écoles et système éducatif moderne</span>
                            </div>
                            <div class="highlight">
                                <i class="fas fa-road"></i>
                                <span>Développement des infrastructures</span>
                            </div>
                            <div class="highlight">
                                <i class="fas fa-fist-raised"></i>
                                <span>Résistance et nationalisme</span>
                            </div>
                        </div>
                        
                        <div style="background: rgba(42, 157, 143, 0.1); padding: 15px; border-radius: 10px; margin-top: 20px;">
                            <strong>Héritage:</strong> Langue française, institutions modernes, élite intellectuelle
                        </div>
                    </div>
                </div>

                <!-- Période 3 -->
                <div class="period-card fade-in">
                    <div class="period-header">
                        <h3 class="period-title">Bénin Contemporain</h3>
                        <div class="period-dates">1990 - Présent</div>
                    </div>
                    <div class="period-content">
                        <p>Démocratie multipartite, croissance économique, développement des infrastructures 
                        et affirmation sur la scène internationale.</p>
                        
                        <div class="period-highlights">
                            <div class="highlight">
                                <i class="fas fa-democrat"></i>
                                <span>Stabilité démocratique</span>
                            </div>
                            <div class="highlight">
                                <i class="fas fa-network-wired"></i>
                                <span>Développement numérique</span>
                            </div>
                            <div class="highlight">
                                <i class="fas fa-handshake"></i>
                                <span>Diplomatie active</span>
                            </div>
                        </div>
                        
                        <div style="background: rgba(42, 157, 143, 0.1); padding: 15px; border-radius: 10px; margin-top: 20px;">
                            <strong>Héritage:</strong> Modèle démocratique, croissance économique, leadership régional
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Indépendance du Bénin -->
    <section class="section independence-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">L'Indépendance du Bénin</h2>
                <p class="section-description">
                    Retracez le parcours historique qui a mené à l'indépendance du Dahomey, 
                    devenu la République du Bénin, et découvrez les fondements de la nation.
                </p>
            </div>
            
            <div class="independence-content">
                <div class="independence-text fade-in">
                    <h3>
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

    <!-- Personnages Historiques -->
    <section class="section figures-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title" style="color: white;">Figures Historiques</h2>
                <p class="section-description" style="color: rgba(255, 255, 255, 0.9);">
                    Découvrez les personnalités qui ont marqué l'histoire du Bénin, 
                    des rois précoloniaux aux leaders contemporains.
                </p>
            </div>

            <div class="figures-grid">
                <!-- Figure 1 -->
                <div class="figure-card fade-in">
                    <img src="https://images.unsplash.com/photo-1568315057107-b6b7b360a3e0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1932&q=80" 
                         alt="Roi Béhanzin" class="figure-image">
                    <div class="figure-content">
                        <h3 class="figure-name">Roi Béhanzin</h3>
                        <div class="figure-title">Dernier roi du Dahomey (1889-1894)</div>
                        <p>Dernier souverain indépendant du royaume du Dahomey, il résista farouchement 
                        à la colonisation française avant d'être vaincu et exilé.</p>
                        <div class="figure-quote">
                            "Je préfère mourir libre que vivre esclave."
                        </div>
                    </div>
                </div>

                <!-- Figure 2 -->
                <div class="figure-card fade-in">
                    <img src="https://images.unsplash.com/photo-1581833971358-2c8b550f87b3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1932&q=80" 
                         alt="Hubert Maga" class="figure-image">
                    <div class="figure-content">
                        <h3 class="figure-name">Hubert Maga</h3>
                        <div class="figure-title">Premier président du Bénin (1960-1963)</div>
                        <p>Premier président du Dahomey indépendant, il joua un rôle clé dans 
                        les négociations d'indépendance et la construction des institutions nationales.</p>
                        <div class="figure-quote">
                            "L'indépendance n'est pas une fin, mais un commencement."
                        </div>
                    </div>
                </div>

                <!-- Figure 3 -->
                <div class="figure-card fade-in">
                    <img src="https://images.unsplash.com/photo-1551632436-cbf8dd35adfa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1932&q=80" 
                         alt="Nicéphore Soglo" class="figure-image">
                    <div class="figure-content">
                        <h3 class="figure-name">Nicéphore Soglo</h3>
                        <div class="figure-title">Premier ministre et président (1991-1996)</div>
                        <p>Figure de la transition démocratique, il fut le premier président élu 
                        après l'avènement du multipartisme au Bénin.</p>
                        <div class="figure-quote">
                            "La démocratie est le seul chemin vers le développement."
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Archives Historiques -->
    <section class="section archives-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Archives & Documents</h2>
                <p class="section-description">
                    Accédez aux documents historiques, photographies d'archives et ressources 
                    documentaires sur l'histoire du Bénin.
                </p>
            </div>

            <div class="archives-grid">
                <!-- Archive 1 -->
                <div class="archive-card fade-in">
                    <img src="https://images.unsplash.com/photo-1581833971358-2c8b550f87b3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1932&q=80" 
                         alt="Documents d'archives" class="archive-image">
                    <div class="archive-content">
                        <span class="archive-type">Document Officiel</span>
                        <h3 class="archive-title">Acte d'Indépendance 1960</h3>
                        <p>Document historique original de la proclamation d'indépendance 
                        du Dahomey, signé le 1er août 1960.</p>
                        <div style="display: flex; justify-content: space-between; margin-top: 20px;">
                            <span style="color: var(--accent-earth); font-weight: 600;">
                                <i class="fas fa-calendar-alt"></i> 1960
                            </span>
                            <a href="histoire.html" style="color: var(--primary-vibrant); font-weight: 600; text-decoration: none;">
                                Consulter <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Archive 2 -->
                <div class="archive-card fade-in">
                    <img src="https://images.unsplash.com/photo-1562564055-71e051d33c19?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1932&q=80" 
                         alt="Photographies historiques" class="archive-image">
                    <div class="archive-content">
                        <span class="archive-type">Collection Photo</span>
                        <h3 class="archive-title">Bénin en Images (1900-1960)</h3>
                        <p>Collection de photographies historiques documentant la vie au 
                        Dahomey durant la période coloniale.</p>
                        <div style="display: flex; justify-content: space-between; margin-top: 20px;">
                            <span style="color: var(--accent-earth); font-weight: 600;">
                                <i class="fas fa-images"></i> 248 photos
                            </span>
                            <a href="histoire.html" style="color: var(--primary-vibrant); font-weight: 600; text-decoration: none;">
                                Explorer <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Archive 3 -->
                <div class="archive-card fade-in">
                    <img src="https://images.unsplash.com/photo-1545569341-9eb8b30979d9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1932&q=80" 
                         alt="Cartes historiques" class="archive-image">
                    <div class="archive-content">
                        <span class="archive-type">Cartographie</span>
                        <h3 class="archive-title">Cartes Anciennes du Dahomey</h3>
                        <p>Collection de cartes géographiques et politiques du territoire 
                        béninois du XVIIe au XXe siècle.</p>
                        <div style="display: flex; justify-content: space-between; margin-top: 20px;">
                            <span style="color: var(--accent-earth); font-weight: 600;">
                                <i class="fas fa-map"></i> 42 cartes
                            </span>
                            <a href="histoire.html" style="color: var(--primary-vibrant); font-weight: 600; text-decoration: none;">
                                Visualiser <i class="fas fa-arrow-right"></i>
                            </a>
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
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Patrimoine</a></li>
                        <li><a href="histoire.html" class="active"><i class="fas fa-chevron-right"></i> Histoire</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Publications</a></li>
                        <li><a href="evenements.html"><i class="fas fa-chevron-right"></i> Événements</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Communauté</a></li>
                    </ul>
                </div>
                
                <div class="footer-contact">
                    <h3 class="footer-heading">Contact</h3>
                    <p><i class="fas fa-envelope"></i> histoire@culturebenin.bj</p>
                    <p><i class="fas fa-phone"></i> +229 21 30 05 67</p>
                    <p><i class="fas fa-map-marker-alt"></i> Archives Nationales, Porto-Novo</p>
                    <p><i class="fas fa-clock"></i> Lundi - Vendredi : 8h - 18h</p>
                </div>
            </div>
            
            <div class="copyright">
                <p>&copy; 2023 Culture Bénin - République du Bénin. Tous droits réservés.</p>
                <p style="margin-top: 10px; font-size: 15px;">
                    Ministère de l'Enseignement Supérieur | Institut des Sciences Historiques
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

            // Animation de la timeline
            const timelineItems = document.querySelectorAll('.timeline-item');
            const timelineObserver = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, { threshold: 0.2 });

            timelineItems.forEach(item => {
                item.style.opacity = '0';
                item.style.transform = 'translateY(50px)';
                item.style.transition = 'opacity 0.8s, transform 0.8s';
                timelineObserver.observe(item);
            });
        });
    </script>
</body>
</html>