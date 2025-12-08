<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Événements Culturels | Culture Bénin</title>
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
            background: linear-gradient(135deg, rgba(255, 209, 102, 0.9) 0%, rgba(230, 57, 70, 0.8) 100%);
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
            opacity: 0.6;
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

        /* Événement à venir */
        .upcoming-section {
            background: linear-gradient(135deg, var(--section-bg) 0%, #E8F4F8 100%);
        }

        .upcoming-event {
            background-color: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.1);
            display: grid;
            grid-template-columns: 1fr 1fr;
            margin-bottom: 80px;
            position: relative;
        }

        .upcoming-badge {
            position: absolute;
            top: 30px;
            right: 30px;
            background: linear-gradient(135deg, var(--primary-vibrant), var(--accent-royal));
            color: white;
            padding: 12px 30px;
            border-radius: 25px;
            font-size: 18px;
            font-weight: 700;
            letter-spacing: 1px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            z-index: 10;
        }

        .upcoming-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .upcoming-content {
            padding: 60px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .event-date {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 30px;
        }

        .date-box {
            background: linear-gradient(135deg, var(--accent-earth), var(--accent-royal));
            color: white;
            padding: 25px;
            border-radius: 15px;
            text-align: center;
            min-width: 100px;
        }

        .date-day {
            font-size: 42px;
            font-weight: 800;
            line-height: 1;
        }

        .date-month {
            font-size: 20px;
            text-transform: uppercase;
            margin-top: 8px;
        }

        .date-info h3 {
            font-size: 24px;
            margin-bottom: 10px;
            color: var(--primary-dark);
        }

        .date-info p {
            color: var(--text-secondary);
            font-size: 16px;
        }

        .upcoming-title {
            font-size: 36px;
            margin-bottom: 20px;
            color: var(--primary-dark);
            line-height: 1.2;
        }

        .upcoming-description {
            color: var(--text-secondary);
            font-size: 18px;
            margin-bottom: 30px;
            line-height: 1.7;
        }

        .event-details {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            margin-bottom: 40px;
        }

        .detail-item {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .detail-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, var(--accent-gold), var(--accent-sun));
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-dark);
            font-size: 22px;
        }

        .detail-text h4 {
            font-size: 16px;
            color: var(--text-secondary);
            margin-bottom: 5px;
        }

        .detail-text p {
            font-size: 18px;
            font-weight: 600;
            color: var(--primary-dark);
        }

        /* Grid des événements */
        .events-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 40px;
            margin-bottom: 80px;
        }

        .event-card {
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

        .event-card:hover {
            transform: translateY(-15px) scale(1.02);
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.15);
        }

        .event-img-container {
            width: 100%;
            height: 250px;
            overflow: hidden;
            position: relative;
        }

        .event-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.7s ease;
        }

        .event-card:hover .event-img {
            transform: scale(1.1);
        }

        .event-date-badge {
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

        .event-category {
            position: absolute;
            top: 20px;
            left: 20px;
            background-color: rgba(255, 255, 255, 0.9);
            color: var(--primary-dark);
            padding: 8px 20px;
            border-radius: 25px;
            font-size: 14px;
            font-weight: 700;
            letter-spacing: 0.5px;
        }

        .event-content {
            padding: 30px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .event-title {
            font-size: 24px;
            margin-bottom: 15px;
            color: var(--primary-dark);
            line-height: 1.3;
        }

        .event-description {
            color: var(--text-secondary);
            margin-bottom: 20px;
            line-height: 1.6;
            flex-grow: 1;
        }

        .event-location {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 20px;
            color: var(--accent-earth);
            font-weight: 600;
            font-size: 15px;
        }

        .event-location i {
            font-size: 18px;
        }

        .event-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 20px;
            border-top: 2px solid var(--border-color);
        }

        .event-stats {
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

        .register-btn {
            background: linear-gradient(135deg, var(--accent-earth), var(--accent-royal));
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 10px;
            font-weight: 600;
            font-size: 15px;
            cursor: pointer;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .register-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(42, 157, 143, 0.3);
        }

        /* Calendrier des événements */
        .calendar-section {
            background: linear-gradient(135deg, var(--primary-dark) 0%, #1D3557 100%);
            color: white;
        }

        .calendar-container {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 50px;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .calendar-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 40px;
        }

        .calendar-month {
            font-size: 32px;
            font-weight: 700;
        }

        .calendar-nav {
            display: flex;
            gap: 15px;
        }

        .nav-btn {
            width: 50px;
            height: 50px;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 10px;
            color: white;
            font-size: 20px;
            cursor: pointer;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .nav-btn:hover {
            background: var(--accent-gold);
            color: var(--primary-dark);
        }

        .calendar-grid {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 15px;
        }

        .calendar-day {
            text-align: center;
            padding: 15px 10px;
            font-weight: 600;
            color: rgba(255, 255, 255, 0.7);
            font-size: 14px;
            text-transform: uppercase;
        }

        .calendar-date {
            height: 80px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 10px;
            padding: 10px;
            position: relative;
            transition: all 0.3s;
            cursor: pointer;
        }

        .calendar-date:hover {
            background: rgba(255, 255, 255, 0.1);
        }

        .calendar-date.has-event {
            background: rgba(255, 209, 102, 0.2);
            border: 2px solid var(--accent-gold);
        }

        .date-number {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .event-indicator {
            position: absolute;
            bottom: 10px;
            left: 10px;
            right: 10px;
            display: flex;
            gap: 5px;
            justify-content: center;
        }

        .event-dot {
            width: 8px;
            height: 8px;
            background: var(--accent-gold);
            border-radius: 50%;
        }

        /* Festivals annuels */
        .festivals-section {
            background-color: white;
        }

        .festivals-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 40px;
        }

        .festival-card {
            background-color: var(--card-bg);
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);
            transition: all 0.4s;
        }

        .festival-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.15);
        }

        .festival-header {
            background: linear-gradient(135deg, var(--primary-vibrant), var(--accent-royal));
            color: white;
            padding: 25px;
            text-align: center;
        }

        .festival-title {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .festival-period {
            font-size: 16px;
            opacity: 0.9;
        }

        .festival-content {
            padding: 30px;
        }

        .festival-location {
            color: var(--accent-earth);
            font-weight: 600;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        /* Appel à participation */
        .participation-section {
            background: linear-gradient(135deg, var(--accent-earth) 0%, #2A9D8F 100%);
            color: white;
            border-radius: 20px;
            padding: 80px 60px;
            text-align: center;
            margin-top: 80px;
        }

        .participation-title {
            font-size: 42px;
            margin-bottom: 20px;
        }

        .participation-description {
            font-size: 18px;
            opacity: 0.9;
            max-width: 700px;
            margin: 0 auto 40px;
        }

        .organize-btn {
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

        .organize-btn:hover {
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
            
            .upcoming-event {
                grid-template-columns: 1fr;
            }
            
            .upcoming-image {
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
            
            .events-grid {
                grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            }
            
            .festivals-grid {
                grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
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
            
            .upcoming-content {
                padding: 40px 30px;
            }
            
            .upcoming-title {
                font-size: 30px;
            }
            
            .event-details {
                grid-template-columns: 1fr;
            }
            
            .calendar-container {
                padding: 30px 20px;
            }
            
            .participation-section {
                padding: 60px 30px;
            }
            
            .participation-title {
                font-size: 32px;
            }
            
            .events-grid,
            .festivals-grid {
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
            
            .upcoming-title {
                font-size: 26px;
            }
            
            .event-img-container {
                height: 200px;
            }
            
            .calendar-date {
                height: 60px;
                padding: 5px;
            }
            
            .date-number {
                font-size: 18px;
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
                    <a href="accueil" class="active">Accueil</a>
                    <a href="patrimoine">Patrimoine</a>
                    <a href="histoire">Histoire</a>
                    <a href="publication">Publication</a>
                    <a href="evenements">Evènements</a>
                    
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
        <img src="https://images.unsplash.com/photo-1511795409834-ef04bbd61622?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1932&q=100" 
             alt="Festival culturel au Bénin" class="page-hero-bg">
        <div class="container">
            <h1 class="page-hero-title fade-in">Événements Culturels</h1>
            <p class="page-hero-subtitle fade-in">
                Découvrez les festivals, expositions, conférences et célébrations 
                qui animent la vie culturelle du Bénin toute l'année.
            </p>
        </div>
    </section>

    <!-- Barre de recherche et filtres -->
    <section class="section">
        <div class="container">
            <div class="filter-bar fade-in">
                <div class="search-container">
                    <input type="text" class="search-input" placeholder="Rechercher un événement...">
                    <button class="search-button">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
                
                <div class="filter-group">
                    <label class="filter-label">Type d'événement</label>
                    <select class="filter-select">
                        <option value="">Tous les types</option>
                        <option value="festival">Festival</option>
                        <option value="conference">Conférence</option>
                        <option value="exposition">Exposition</option>
                        <option value="spectacle">Spectacle</option>
                        <option value="atelier">Atelier</option>
                        <option value="celebration">Célébration</option>
                    </select>
                </div>
                
                <div class="filter-group">
                    <label class="filter-label">Mois</label>
                    <select class="filter-select">
                        <option value="">Tous les mois</option>
                        <option value="janvier">Janvier</option>
                        <option value="fevrier">Février</option>
                        <option value="mars">Mars</option>
                        <option value="avril">Avril</option>
                        <option value="mai">Mai</option>
                        <option value="juin">Juin</option>
                        <option value="juillet">Juillet</option>
                        <option value="aout">Août</option>
                        <option value="septembre">Septembre</option>
                        <option value="octobre">Octobre</option>
                        <option value="novembre">Novembre</option>
                        <option value="decembre">Décembre</option>
                    </select>
                </div>
            </div>

            <!-- Événement à venir en vedette -->
            <div class="section-header">
                <h2 class="section-title">Événement à Venir</h2>
                <p class="section-description">
                    Ne manquez pas l'événement culturel majeur du mois prochain, 
                    une célébration exceptionnelle du patrimoine vivant du Bénin.
                </p>
            </div>

            <div class="upcoming-event fade-in">
                <div class="upcoming-badge">À venir</div>
                <img src="https://images.unsplash.com/photo-1568315057107-b6b7b360a3e0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1932&q=100" 
                     alt="Festival International du Vodoun" class="upcoming-image">
                <div class="upcoming-content">
                    <div class="event-date">
                        <div class="date-box">
                            <div class="date-day">10</div>
                            <div class="date-month">Jan</div>
                        </div>
                        <div class="date-info">
                            <h3>10 Janvier 2024</h3>
                            <p>9h00 - 22h00</p>
                        </div>
                    </div>
                    
                    <h2 class="upcoming-title">Festival International du Vodoun</h2>
                    <p class="upcoming-description">
                        Le plus grand rassemblement culturel du Bénin célébrant les traditions vodoun, 
                        avec des cérémonies sacrées, des danses traditionnelles, des expositions d'art 
                        et des conférences sur la spiritualité africaine.
                    </p>
                    
                    <div class="event-details">
                        <div class="detail-item">
                            <div class="detail-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="detail-text">
                                <h4>Lieu</h4>
                                <p>Ouidah, Place du Nouveau Marché</p>
                            </div>
                        </div>
                        
                        <div class="detail-item">
                            <div class="detail-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="detail-text">
                                <h4>Participants</h4>
                                <p>10,000+ attendus</p>
                            </div>
                        </div>
                        
                        <div class="detail-item">
                            <div class="detail-icon">
                                <i class="fas fa-ticket-alt"></i>
                            </div>
                            <div class="detail-text">
                                <h4>Entrée</h4>
                                <p>Gratuite</p>
                            </div>
                        </div>
                        
                        <div class="detail-item">
                            <div class="detail-icon">
                                <i class="fas fa-globe"></i>
                            </div>
                            <div class="detail-text">
                                <h4>International</h4>
                                <p>30+ pays représentés</p>
                            </div>
                        </div>
                    </div>
                    
                    <div style="display: flex; gap: 20px; flex-wrap: wrap;">
                        <button class="register-btn">
                            <i class="fas fa-calendar-plus"></i> S'inscrire
                        </button>
                        <a href="evenements.html" style="background: transparent; color: var(--primary-vibrant); 
                           padding: 12px 25px; border-radius: 10px; text-decoration: none; 
                           font-weight: 600; display: inline-flex; align-items: center; gap: 10px;
                           border: 2px solid var(--primary-vibrant);">
                            <i class="fas fa-info-circle"></i> Plus d'informations
                        </a>
                    </div>
                </div>
            </div>

            <!-- Grid des événements -->
            <div class="section-header">
                <h2 class="section-title">Événements à Venir</h2>
                <p class="section-description">
                    Découvrez tous les événements culturels programmés dans les prochaines semaines 
                    à travers tout le Bénin.
                </p>
            </div>

            <div class="events-grid">
                <!-- Événement 1 -->
                <div class="event-card fade-in">
                    <div class="event-img-container">
                        <img src="https://images.unsplash.com/photo-1511379938547-c1f69419868d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1932&q=100" 
                             alt="Concert de musique traditionnelle" class="event-img">
                        <span class="event-date-badge">15 Déc</span>
                        <span class="event-category">Spectacle</span>
                    </div>
                    <div class="event-content">
                        <h3 class="event-title">Nuit des Tambours Sacrés</h3>
                        <p class="event-description">
                            Concert exceptionnel des meilleurs tambourinaires du Bénin, 
                            célébrant la diversité des rythmes et percussions traditionnelles.
                        </p>
                        <div class="event-location">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Cotonou, Palais des Congrès</span>
                        </div>
                        <div class="event-meta">
                            <div class="event-stats">
                                <div class="stat">
                                    <i class="fas fa-users"></i>
                                    <span>500+</span>
                                </div>
                                <div class="stat">
                                    <i class="far fa-clock"></i>
                                    <span>20h-23h</span>
                                </div>
                            </div>
                            <button class="register-btn">
                                <i class="fas fa-ticket-alt"></i> Réserver
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Événement 2 -->
                <div class="event-card fade-in">
                    <div class="event-img-container">
                        <img src="https://images.unsplash.com/photo-1562564055-71e051d33c19?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1932&q=100" 
                             alt="Exposition au Musée" class="event-img">
                        <span class="event-date-badge">20 Déc</span>
                        <span class="event-category">Exposition</span>
                    </div>
                    <div class="event-content">
                        <h3 class="event-title">Trésors Royaux d'Abomey</h3>
                        <p class="event-description">
                            Exposition des objets royaux récemment restitués par la France, 
                            présentée pour la première fois au public béninois.
                        </p>
                        <div class="event-location">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Musée d'Histoire de Ouidah</span>
                        </div>
                        <div class="event-meta">
                            <div class="event-stats">
                                <div class="stat">
                                    <i class="fas fa-users"></i>
                                    <span>1,000+</span>
                                </div>
                                <div class="stat">
                                    <i class="far fa-clock"></i>
                                    <span>10h-18h</span>
                                </div>
                            </div>
                            <button class="register-btn">
                                <i class="fas fa-ticket-alt"></i> Réserver
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Événement 3 -->
                <div class="event-card fade-in">
                    <div class="event-img-container">
                        <img src="https://images.unsplash.com/photo-1545569341-9eb8b30979d9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1932&q=100" 
                             alt="Conférence historique" class="event-img">
                        <span class="event-date-badge">05 Jan</span>
                        <span class="event-category">Conférence</span>
                    </div>
                    <div class="event-content">
                        <h3 class="event-title">Mémoire de la Traite Négrière</h3>
                        <p class="event-description">
                            Conférence internationale sur la préservation de la mémoire 
                            de la traite transatlantique et les enjeux de la réconciliation.
                        </p>
                        <div class="event-location">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Université d'Abomey-Calavi</span>
                        </div>
                        <div class="event-meta">
                            <div class="event-stats">
                                <div class="stat">
                                    <i class="fas fa-users"></i>
                                    <span>300+</span>
                                </div>
                                <div class="stat">
                                    <i class="far fa-clock"></i>
                                    <span>14h-17h</span>
                                </div>
                            </div>
                            <button class="register-btn">
                                <i class="fas fa-ticket-alt"></i> Réserver
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Événement 4 -->
                <div class="event-card fade-in">
                    <div class="event-img-container">
                        <img src="https://images.unsplash.com/photo-1518837695005-2083093ee35b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1932&q=100" 
                             alt="Festival nature" class="event-img">
                        <span class="event-date-badge">12 Jan</span>
                        <span class="event-category">Festival</span>
                    </div>
                    <div class="event-content">
                        <h3 class="event-title">Festival de la Pendjari</h3>
                        <p class="event-description">
                            Célébration de la biodiversité au parc national de la Pendjari 
                            avec observation de la faune, randonnées guidées et campements traditionnels.
                        </p>
                        <div class="event-location">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Parc National de la Pendjari</span>
                        </div>
                        <div class="event-meta">
                            <div class="event-stats">
                                <div class="stat">
                                    <i class="fas fa-users"></i>
                                    <span>800+</span>
                                </div>
                                <div class="stat">
                                    <i class="far fa-clock"></i>
                                    <span>3 jours</span>
                                </div>
                            </div>
                            <button class="register-btn">
                                <i class="fas fa-ticket-alt"></i> Réserver
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Événement 5 -->
                <div class="event-card fade-in">
                    <div class="event-img-container">
                        <img src="https://images.unsplash.com/photo-1590080875487-8d3a2c8c3c3d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1932&q=100" 
                             alt="Atelier artisanat" class="event-img">
                        <span class="event-date-badge">18 Jan</span>
                        <span class="event-category">Atelier</span>
                    </div>
                    <div class="event-content">
                        <h3 class="event-title">Artisanat de Ganvié</h3>
                        <p class="event-description">
                            Ateliers pratiques sur les techniques de vannerie et de pêche traditionnelle 
                            avec les artisans du village lacustre de Ganvié.
                        </p>
                        <div class="event-location">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Ganvié, Centre Artisanal</span>
                        </div>
                        <div class="event-meta">
                            <div class="event-stats">
                                <div class="stat">
                                    <i class="fas fa-users"></i>
                                    <span>25 places</span>
                                </div>
                                <div class="stat">
                                    <i class="far fa-clock"></i>
                                    <span>9h-16h</span>
                                </div>
                            </div>
                            <button class="register-btn">
                                <i class="fas fa-ticket-alt"></i> Réserver
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Événement 6 -->
                <div class="event-card fade-in">
                    <div class="event-img-container">
                        <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1932&q=100" 
                             alt="Architecture traditionnelle" class="event-img">
                        <span class="event-date-badge">25 Jan</span>
                        <span class="event-category">Visite Guidée</span>
                    </div>
                    <div class="event-content">
                        <h3 class="event-title">Tata Somba : Maisons Fortifiées</h3>
                        <p class="event-description">
                            Visite guidée exclusive des habitations traditionnelles des Bétammaribé 
                            avec explications sur l'architecture défensive et le mode de vie.
                        </p>
                        <div class="event-location">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Région de l'Atacora</span>
                        </div>
                        <div class="event-meta">
                            <div class="event-stats">
                                <div class="stat">
                                    <i class="fas fa-users"></i>
                                    <span>40 places</span>
                                </div>
                                <div class="stat">
                                    <i class="far fa-clock"></i>
                                    <span>Journée</span>
                                </div>
                            </div>
                            <button class="register-btn">
                                <i class="fas fa-ticket-alt"></i> Réserver
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="pagination">
                <a href="evenements.html" class="page-link active">1</a>
                <a href="evenements.html" class="page-link">2</a>
                <a href="evenements.html" class="page-link">3</a>
                <a href="evenements.html" class="page-link">4</a>
                <a href="evenements.html" class="page-link">
                    <i class="fas fa-chevron-right"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Calendrier des événements -->
    <section class="section calendar-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title" style="color: white;">Calendrier Culturel</h2>
                <p class="section-description" style="color: rgba(255, 255, 255, 0.9);">
                    Consultez notre calendrier interactif pour ne manquer aucun 
                    événement culturel important au Bénin.
                </p>
            </div>

            <div class="calendar-container fade-in">
                <div class="calendar-header">
                    <div class="calendar-month">Décembre 2023</div>
                    <div class="calendar-nav">
                        <button class="nav-btn" id="prevMonth">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="nav-btn" id="nextMonth">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
                
                <div class="calendar-grid">
                    <div class="calendar-day">Lun</div>
                    <div class="calendar-day">Mar</div>
                    <div class="calendar-day">Mer</div>
                    <div class="calendar-day">Jeu</div>
                    <div class="calendar-day">Ven</div>
                    <div class="calendar-day">Sam</div>
                    <div class="calendar-day">Dim</div>
                    
                    <!-- Jours du mois -->
                    <div class="calendar-date"></div>
                    <div class="calendar-date"></div>
                    <div class="calendar-date"></div>
                    <div class="calendar-date"></div>
                    <div class="calendar-date">
                        <div class="date-number">1</div>
                    </div>
                    <div class="calendar-date">
                        <div class="date-number">2</div>
                    </div>
                    <div class="calendar-date">
                        <div class="date-number">3</div>
                    </div>
                    
                    <div class="calendar-date">
                        <div class="date-number">4</div>
                    </div>
                    <div class="calendar-date">
                        <div class="date-number">5</div>
                    </div>
                    <div class="calendar-date has-event">
                        <div class="date-number">6</div>
                        <div class="event-indicator">
                            <div class="event-dot"></div>
                        </div>
                    </div>
                    <div class="calendar-date">
                        <div class="date-number">7</div>
                    </div>
                    <div class="calendar-date">
                        <div class="date-number">8</div>
                    </div>
                    <div class="calendar-date">
                        <div class="date-number">9</div>
                    </div>
                    <div class="calendar-date">
                        <div class="date-number">10</div>
                    </div>
                    
                    <div class="calendar-date has-event">
                        <div class="date-number">11</div>
                        <div class="event-indicator">
                            <div class="event-dot"></div>
                        </div>
                    </div>
                    <div class="calendar-date">
                        <div class="date-number">12</div>
                    </div>
                    <div class="calendar-date">
                        <div class="date-number">13</div>
                    </div>
                    <div class="calendar-date has-event">
                        <div class="date-number">14</div>
                        <div class="event-indicator">
                            <div class="event-dot"></div>
                            <div class="event-dot"></div>
                        </div>
                    </div>
                    <div class="calendar-date">
                        <div class="date-number">15</div>
                    </div>
                    <div class="calendar-date has-event">
                        <div class="date-number">16</div>
                        <div class="event-indicator">
                            <div class="event-dot"></div>
                        </div>
                    </div>
                    <div class="calendar-date">
                        <div class="date-number">17</div>
                    </div>
                    
                    <div class="calendar-date">
                        <div class="date-number">18</div>
                    </div>
                    <div class="calendar-date">
                        <div class="date-number">19</div>
                    </div>
                    <div class="calendar-date has-event">
                        <div class="date-number">20</div>
                        <div class="event-indicator">
                            <div class="event-dot"></div>
                        </div>
                    </div>
                    <div class="calendar-date">
                        <div class="date-number">21</div>
                    </div>
                    <div class="calendar-date">
                        <div class="date-number">22</div>
                    </div>
                    <div class="calendar-date">
                        <div class="date-number">23</div>
                    </div>
                    <div class="calendar-date">
                        <div class="date-number">24</div>
                    </div>
                    
                    <div class="calendar-date">
                        <div class="date-number">25</div>
                    </div>
                    <div class="calendar-date has-event">
                        <div class="date-number">26</div>
                        <div class="event-indicator">
                            <div class="event-dot"></div>
                        </div>
                    </div>
                    <div class="calendar-date">
                        <div class="date-number">27</div>
                    </div>
                    <div class="calendar-date">
                        <div class="date-number">28</div>
                    </div>
                    <div class="calendar-date">
                        <div class="date-number">29</div>
                    </div>
                    <div class="calendar-date">
                        <div class="date-number">30</div>
                    </div>
                    <div class="calendar-date">
                        <div class="date-number">31</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Festivals annuels -->
    <section class="section festivals-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Festivals Annuels</h2>
                <p class="section-description">
                    Découvrez les grands festivals culturels qui rythment la vie 
                    du Bénin chaque année et attirent des visiteurs du monde entier.
                </p>
            </div>

            <div class="festivals-grid">
                <!-- Festival 1 -->
                <div class="festival-card fade-in">
                    <div class="festival-header">
                        <h3 class="festival-title">Fête du Vodoun</h3>
                        <div class="festival-period">10 Janvier</div>
                    </div>
                    <div class="festival-content">
                        <div class="festival-location">
                            <i class="fas fa-map-marker-alt"></i>
                            Ouidah
                        </div>
                        <p>Célébration nationale des traditions vodoun avec cérémonies, 
                        danses et processions rituelles.</p>
                        <div style="margin-top: 20px;">
                            <span style="color: var(--accent-earth); font-weight: 600;">
                                <i class="fas fa-users"></i> 100,000+ participants
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Festival 2 -->
                <div class="festival-card fade-in">
                    <div class="festival-header">
                        <h3 class="festival-title">Festival des Masques</h3>
                        <div class="festival-period">Mars - Avril</div>
                    </div>
                    <div class="festival-content">
                        <div class="festival-location">
                            <i class="fas fa-map-marker-alt"></i>
                            Savalou
                        </div>
                        <p>Présentation des masques traditionnels Guélédé et des 
                        danses sacrées des communautés Yoruba.</p>
                        <div style="margin-top: 20px;">
                            <span style="color: var(--accent-earth); font-weight: 600;">
                                <i class="fas fa-users"></i> 50,000+ participants
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Festival 3 -->
                <div class="festival-card fade-in">
                    <div class="festival-header">
                        <h3 class="festival-title">Fête de l'Igname</h3>
                        <div class="festival-period">Août</div>
                    </div>
                    <div class="festival-content">
                        <div class="festival-location">
                            <i class="fas fa-map-marker-alt"></i>
                            Abomey
                        </div>
                        <p>Célébration de la récolte de l'igname avec offrandes 
                        aux ancêtres et festins communautaires.</p>
                        <div style="margin-top: 20px;">
                            <span style="color: var(--accent-earth); font-weight: 600;">
                                <i class="fas fa-users"></i> 30,000+ participants
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Festival 4 -->
                <div class="festival-card fade-in">
                    <div class="festival-header">
                        <h3 class="festival-title">Carnaval de Porto-Novo</h3>
                        <div class="festival-period">Décembre</div>
                    </div>
                    <div class="festival-content">
                        <div class="festival-location">
                            <i class="fas fa-map-marker-alt"></i>
                            Porto-Novo
                        </div>
                        <p>Défilés colorés, musiques et danses dans les rues 
                        de la capitale historique du Bénin.</p>
                        <div style="margin-top: 20px;">
                            <span style="color: var(--accent-earth); font-weight: 600;">
                                <i class="fas fa-users"></i> 80,000+ participants
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Appel à participation -->
    <section class="section">
        <div class="container">
            <div class="participation-section fade-in">
                <h2 class="participation-title">Organisez Votre Événement</h2>
                <p class="participation-description">
                    Vous organisez un événement culturel au Bénin ? Inscrivez-le sur notre plateforme 
                    pour le faire connaître à notre communauté et augmenter sa visibilité.
                </p>
                <button class="organize-btn" id="organizeBtn">
                    <i class="fas fa-calendar-plus"></i> Proposer un événement
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
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Patrimoine</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Histoire</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Publications</a></li>
                        <li><a href="evenements.html" class="active"><i class="fas fa-chevron-right"></i> Événements</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Communauté</a></li>
                    </ul>
                </div>
                
                <div class="footer-contact">
                    <h3 class="footer-heading">Contact</h3>
                    <p><i class="fas fa-envelope"></i> evenements@culturebenin.bj</p>
                    <p><i class="fas fa-phone"></i> +229 21 30 07 89</p>
                    <p><i class="fas fa-map-marker-alt"></i> Ministère de la Culture, Porto-Novo</p>
                    <p><i class="fas fa-clock"></i> Lundi - Vendredi : 8h - 18h</p>
                </div>
            </div>
            
            <div class="copyright">
                <p>&copy; 2023 Culture Bénin - République du Bénin. Tous droits réservés.</p>
                <p style="margin-top: 10px; font-size: 15px;">
                    Ministère du Tourisme, de la Culture et des Arts | Direction des Festivals et Événements
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

            // Bouton Organiser un événement
            document.getElementById('organizeBtn').addEventListener('click', function() {
                alert("Ouverture du formulaire de proposition d'événement. Dans l'application Laravel, cela ouvrirait un formulaire de création d'événement.");
                // Dans l'application Laravel: window.location.href = "/evenements/create";
            });

            // Boutons d'inscription aux événements
            const registerButtons = document.querySelectorAll('.register-btn');
            registerButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const eventTitle = this.closest('.event-card').querySelector('.event-title').textContent;
                    alert(`Inscription à l'événement : ${eventTitle}\n\nDans l'application Laravel, cela ouvrirait un formulaire d'inscription.`);
                    // Dans l'application Laravel: window.location.href = "/evenements/[id]/inscription";
                });
            });

            // Filtres interactifs
            const filterSelects = document.querySelectorAll('.filter-select');
            const searchInput = document.querySelector('.search-input');
            
            function filterEvents() {
                const searchTerm = searchInput.value.toLowerCase();
                const typeFilter = filterSelects[0].value;
                const monthFilter = filterSelects[1].value;
                
                const cards = document.querySelectorAll('.event-card');
                
                cards.forEach(card => {
                    const title = card.querySelector('.event-title').textContent.toLowerCase();
                    const description = card.querySelector('.event-description').textContent.toLowerCase();
                    const category = card.querySelector('.event-category').textContent.toLowerCase();
                    const dateBadge = card.querySelector('.event-date-badge').textContent.toLowerCase();
                    
                    const matchesSearch = !searchTerm || 
                        title.includes(searchTerm) || 
                        description.includes(searchTerm);
                    
                    const matchesType = !typeFilter || 
                        (typeFilter === 'festival' && category.includes('festival')) ||
                        (typeFilter === 'conference' && category.includes('conférence')) ||
                        (typeFilter === 'exposition' && category.includes('exposition')) ||
                        (typeFilter === 'spectacle' && category.includes('spectacle')) ||
                        (typeFilter === 'atelier' && category.includes('atelier')) ||
                        (typeFilter === 'celebration' && category.includes('célébration'));
                    
                    const matchesMonth = !monthFilter || 
                        dateBadge.includes(monthFilter);
                    
                    if (matchesSearch && matchesType && matchesMonth) {
                        card.style.display = 'flex';
                    } else {
                        card.style.display = 'none';
                    }
                });
            }
            
            filterSelects.forEach(select => {
                select.addEventListener('change', filterEvents);
            });
            
            searchInput.addEventListener('input', filterEvents);
            
            // Recherche
            document.querySelector('.search-button').addEventListener('click', filterEvents);

            // Calendrier interactif
            const prevMonthBtn = document.getElementById('prevMonth');
            const nextMonthBtn = document.getElementById('nextMonth');
            const calendarMonth = document.querySelector('.calendar-month');
            
            const months = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 
                           'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
            
            let currentMonthIndex = 11; // Décembre
            
            prevMonthBtn.addEventListener('click', function() {
                currentMonthIndex = (currentMonthIndex - 1 + 12) % 12;
                calendarMonth.textContent = `${months[currentMonthIndex]} 2023`;
                updateCalendarDays();
            });
            
            nextMonthBtn.addEventListener('click', function() {
                currentMonthIndex = (currentMonthIndex + 1) % 12;
                calendarMonth.textContent = `${months[currentMonthIndex]} 2024`;
                updateCalendarDays();
            });
            
            function updateCalendarDays() {
                // Simulation simple de mise à jour des jours
                const dates = document.querySelectorAll('.calendar-date.has-event');
                dates.forEach(date => {
                    if (Math.random() > 0.5) {
                        date.classList.remove('has-event');
                    }
                });
                
                // Ajouter aléatoirement des événements
                const allDates = document.querySelectorAll('.calendar-date');
                allDates.forEach(date => {
                    if (!date.querySelector('.date-number')) return;
                    
                    if (Math.random() > 0.7) {
                        date.classList.add('has-event');
                        const indicator = date.querySelector('.event-indicator');
                        if (indicator) {
                            indicator.innerHTML = '<div class="event-dot"></div>';
                            if (Math.random() > 0.5) {
                                indicator.innerHTML += '<div class="event-dot"></div>';
                            }
                        }
                    }
                });
            }
        });
    </script>
</body>
</html>