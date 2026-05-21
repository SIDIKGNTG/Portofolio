<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portofolio Resmi Nur Sidik - Web Developer yang berfokus pada pengalaman pengguna yang luar biasa dan desain antarmuka yang elegan.">
    <meta name="keywords" content="Nur Sidik, Portofolio, Web Developer, Frontend, Backend, Laravel, React">
    <meta name="author" content="Nur Sidik">
    <title>Portofolio Nur Sidik - Web Developer</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;800&family=Space+Grotesk:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        /* Vanilla CSS - Desain Rapi, Elegan & Simetris */
        :root {
            --bg-color: #050508;
            --surface-color: rgba(25, 25, 30, 0.4);
            --surface-border: rgba(255, 255, 255, 0.08);
            --text-primary: #ffffff;
            --text-secondary: #a1a1aa;
            --accent-1: #8b5cf6; /* Violet */
            --accent-2: #3b82f6; /* Blue */
            --accent-3: #10b981; /* Emerald */
            --glass-blur: blur(20px);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Outfit', sans-serif;
            background-color: var(--bg-color);
            color: var(--text-primary);
            overflow-x: hidden;
            line-height: 1.7;
            -webkit-font-smoothing: antialiased;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: var(--bg-color);
        }
        ::-webkit-scrollbar-thumb {
            background: rgba(255,255,255,0.2);
            border-radius: 10px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: rgba(255,255,255,0.4);
        }

        /* Ambient Antigravity Background */
        .ambient-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            z-index: -1;
            overflow: hidden;
            pointer-events: none;
        }

        .ambient-orb {
            position: absolute;
            border-radius: 50%;
            filter: blur(120px);
            opacity: 0.2; 
            transition: top 0.1s ease-out, left 0.1s ease-out;
            will-change: transform;
        }

        /* Navbar */
        nav {
            position: fixed;
            top: 0;
            width: 100%;
            padding: 1.2rem 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 100;
            background: rgba(5, 5, 8, 0.8);
            backdrop-filter: var(--glass-blur);
            -webkit-backdrop-filter: var(--glass-blur);
            border-bottom: 1px solid var(--surface-border);
            transition: all 0.3s ease;
        }

        nav.scrolled {
            padding: 0.8rem 5%;
            background: rgba(5, 5, 8, 0.95);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.5);
        }

        .logo {
            font-family: 'Space Grotesk', sans-serif;
            font-size: 1.5rem;
            font-weight: 700;
            letter-spacing: -0.5px;
            color: var(--text-primary);
            text-decoration: none;
            z-index: 1001; /* Above mobile menu */
        }

        .nav-links {
            display: flex;
            gap: 35px;
        }

        .nav-links a {
            color: var(--text-secondary);
            text-decoration: none;
            font-weight: 500;
            font-size: 0.95rem;
            transition: color 0.3s;
            position: relative;
        }

        .nav-links a:hover, .nav-links a.active {
            color: var(--text-primary);
        }

        /* Mobile Menu */
        .hamburger {
            display: none;
            background: none;
            border: none;
            color: var(--text-primary);
            font-size: 1.5rem;
            cursor: pointer;
            z-index: 1001;
            transition: transform 0.3s;
        }

        .mobile-menu {
            position: fixed;
            top: 0; left: 0; width: 100vw; height: 100vh;
            background: rgba(5, 5, 8, 0.98);
            z-index: 999;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 35px;
            opacity: 0;
            pointer-events: none;
            transform: translateY(-20px);
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        .mobile-menu.active {
            opacity: 1;
            pointer-events: auto;
            transform: translateY(0);
        }

        .mobile-menu a {
            color: var(--text-secondary);
            font-size: 1.5rem;
            text-decoration: none;
            font-family: 'Space Grotesk', sans-serif;
            font-weight: 600;
            transition: color 0.3s;
        }

        .mobile-menu a:hover, .mobile-menu a.active {
            color: var(--accent-2);
        }

        /* Layout Umum Section */
        .section {
            min-height: 100vh;
            padding: 120px 5% 60px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .section-content {
            max-width: 1100px; 
            width: 100%;
            margin: 0 auto;
        }

        /* Hero Section */
        #beranda {
            align-items: center;
            text-align: center;
        }

        #beranda .section-content {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 20px;
            background: rgba(59, 130, 246, 0.1);
            border: 1px solid rgba(59, 130, 246, 0.2);
            border-radius: 50px;
            color: var(--accent-2);
            font-size: 0.9rem;
            font-weight: 500;
            margin-bottom: 2rem;
        }

        #beranda h1 {
            font-size: clamp(3rem, 7vw, 5rem);
            font-family: 'Space Grotesk', sans-serif;
            line-height: 1.15;
            margin-bottom: 1.5rem;
            letter-spacing: -1px;
            font-weight: 700;
        }

        .name-highlight {
            color: var(--text-primary);
            font-weight: 800;
        }

        .typing-text {
            background: linear-gradient(to right, #60a5fa, #a78bfa);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .typing-cursor {
            color: #60a5fa;
            animation: blink 1s step-start infinite;
        }

        @keyframes blink { 50% { opacity: 0; } }

        #beranda p {
            font-size: 1.15rem;
            color: var(--text-secondary);
            max-width: 650px;
            margin-bottom: 2.5rem;
            line-height: 1.8;
        }

        .hero-cta {
            display: flex;
            gap: 20px;
            justify-content: center;
        }

        /* Judul Section Umum */
        .section-header {
            text-align: center;
            margin-bottom: 4rem;
        }

        .section-title {
            font-size: 2.5rem;
            font-family: 'Space Grotesk', sans-serif;
            font-weight: 700;
            margin-bottom: 1rem;
        }
        
        .section-subtitle {
            color: var(--text-secondary);
            font-size: 1.1rem;
            max-width: 600px;
            margin: 0 auto;
        }

        .title-accent {
            color: var(--accent-2);
        }

        /* About Section */
        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .about-text p {
            font-size: 1.1rem;
            color: var(--text-secondary);
            margin-bottom: 1.5rem;
            line-height: 1.8;
        }

        .about-stats {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            margin-top: 2rem;
        }

        .stat-item {
            padding: 25px;
            background: var(--surface-color);
            border: 1px solid var(--surface-border);
            border-radius: 20px;
            text-align: center;
            transition: transform 0.3s, border-color 0.3s;
        }
        
        .stat-item:hover {
            transform: translateY(-5px);
            border-color: rgba(59, 130, 246, 0.4);
        }

        .stat-item h3 {
            font-size: 2.2rem;
            font-family: 'Space Grotesk', sans-serif;
            color: var(--text-primary);
            margin-bottom: 5px;
        }

        .stat-item p {
            font-size: 0.95rem;
            color: var(--text-secondary);
            margin: 0;
        }

        .about-image {
            position: relative;
            border-radius: 24px;
            overflow: hidden;
            border: 1px solid var(--surface-border);
            aspect-ratio: 1/1; 
            background: linear-gradient(145deg, rgba(30,30,35,0.6), rgba(10,10,15,0.8));
            display: flex;
            align-items: center;
            justify-content: center;
            transform-style: preserve-3d;
        }
        
        .about-image i {
            font-size: 6rem;
            color: rgba(255,255,255,0.1);
            transform: translateZ(50px);
            transition: transform 0.5s;
        }
        
        .about-image:hover i {
            transform: translateZ(80px) scale(1.1);
            color: var(--accent-2);
        }

        /* Keahlian Section */
        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 24px;
        }

        .skill-card {
            background: var(--surface-color);
            border: 1px solid var(--surface-border);
            padding: 30px;
            border-radius: 20px;
            backdrop-filter: var(--glass-blur);
            transition: transform 0.3s, border-color 0.3s;
            position: relative;
            overflow: hidden;
            text-align: center;
        }

        .skill-card:hover {
            transform: translateY(-5px);
            border-color: rgba(59, 130, 246, 0.4);
        }

        .skill-icon {
            width: 60px;
            height: 60px;
            margin: 0 auto 20px;
            background: rgba(255,255,255,0.03);
            border: 1px solid rgba(255,255,255,0.05);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: var(--accent-2);
            transition: transform 0.3s;
        }
        
        .skill-card:hover .skill-icon { transform: scale(1.1) rotate(5deg); }

        .skill-card h3 {
            font-size: 1.2rem;
            font-family: 'Space Grotesk', sans-serif;
            margin-bottom: 15px;
        }

        .skill-tags {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 8px;
        }

        .s-tag {
            font-size: 0.85rem;
            padding: 6px 14px;
            background: rgba(255,255,255,0.03);
            border: 1px solid rgba(255,255,255,0.08);
            border-radius: 50px;
            color: var(--text-secondary);
        }

        /* Proyek Section */
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 30px;
        }

        .project-card {
            background: var(--surface-color);
            border: 1px solid var(--surface-border);
            border-radius: 24px;
            overflow: hidden;
            transition: all 0.4s;
            display: flex;
            flex-direction: column;
        }

        .project-card:hover {
            transform: translateY(-8px);
            border-color: rgba(59, 130, 246, 0.3);
            box-shadow: 0 20px 40px rgba(0,0,0,0.4);
        }

        .project-img {
            height: 220px;
            background: rgba(255,255,255,0.02);
            border-bottom: 1px solid var(--surface-border);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .project-img i {
            font-size: 4rem;
            color: rgba(255,255,255,0.1);
            transition: transform 0.5s;
        }

        .project-card:hover .project-img i {
            transform: scale(1.15) rotate(-5deg);
            color: var(--accent-2);
        }

        .project-info {
            padding: 30px;
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .project-info h3 {
            font-size: 1.3rem;
            font-family: 'Space Grotesk', sans-serif;
            margin-bottom: 12px;
        }

        .project-info p {
            color: var(--text-secondary);
            font-size: 0.95rem;
            margin-bottom: 20px;
            flex: 1;
            line-height: 1.6;
        }
        
        .project-links {
            display: flex;
            gap: 20px;
            margin-top: auto;
            border-top: 1px solid var(--surface-border);
            padding-top: 15px;
        }
        
        .project-links a {
            color: var(--text-primary);
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: color 0.3s;
        }

        .project-links a:hover {
            color: var(--accent-2);
        }

        /* Kontak Section */
        #kontak .section-content {
            text-align: center;
            max-width: 800px;
        }
        
        .contact-box {
            background: var(--surface-color);
            border: 1px solid var(--surface-border);
            padding: 60px 40px;
            border-radius: 32px;
            backdrop-filter: var(--glass-blur);
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin: 35px 0;
        }

        .social-link {
            width: 55px;
            height: 55px;
            border-radius: 50%;
            background: rgba(255,255,255,0.03);
            border: 1px solid rgba(255,255,255,0.1);
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1.3rem;
            color: var(--text-primary);
            text-decoration: none;
            transition: background 0.3s, color 0.3s, transform 0.3s;
        }

        .social-link:hover {
            background: var(--text-primary);
            color: var(--bg-color);
            transform: scale(1.1);
        }

        /* Buttons */
        .btn {
            padding: 14px 32px;
            border-radius: 100px;
            background: var(--text-primary);
            color: var(--bg-color);
            text-decoration: none;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            transition: transform 0.3s, box-shadow 0.3s;
            border: none;
            cursor: pointer;
            font-size: 1rem;
            font-family: 'Outfit', sans-serif;
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(255,255,255,0.15);
        }

        .btn-outline {
            background: transparent;
            border: 1px solid rgba(255,255,255,0.3);
            color: var(--text-primary);
        }

        .btn-outline:hover {
            background: rgba(255,255,255,0.1);
            border-color: var(--text-primary);
            box-shadow: none;
        }

        /* Email Modal Pop-up */
        .email-modal-overlay {
            position: fixed;
            top: 0; left: 0; width: 100vw; height: 100vh;
            background: rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(10px);
            z-index: 2000; /* Above everything */
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.3s ease;
        }
        
        .email-modal-overlay.show {
            opacity: 1;
            pointer-events: auto;
        }

        .email-modal-box {
            background: var(--bg-color);
            border: 1px solid var(--surface-border);
            padding: 40px;
            border-radius: 24px;
            width: 90%;
            max-width: 500px;
            transform: scale(0.9) translateY(20px);
            transition: transform 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            position: relative;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
        }

        .email-modal-overlay.show .email-modal-box {
            transform: scale(1) translateY(0);
        }

        .close-modal {
            position: absolute;
            top: 20px; right: 20px;
            background: rgba(255,255,255,0.05);
            border: none;
            color: var(--text-primary);
            width: 35px; height: 35px;
            border-radius: 50%;
            cursor: pointer;
            font-size: 1.2rem;
            display: flex; align-items: center; justify-content: center;
            transition: background 0.3s;
        }
        .close-modal:hover { background: rgba(255,255,255,0.15); }

        .email-modal-box h3 {
            font-family: 'Space Grotesk', sans-serif;
            font-size: 1.8rem;
            margin-bottom: 10px;
        }
        .email-modal-box p {
            color: var(--text-secondary);
            font-size: 0.95rem;
            margin-bottom: 25px;
        }
        
        #emailMessage {
            width: 100%;
            background: rgba(255,255,255,0.03);
            border: 1px solid var(--surface-border);
            border-radius: 12px;
            padding: 15px;
            color: var(--text-primary);
            font-family: 'Outfit', sans-serif;
            font-size: 1rem;
            resize: vertical;
            margin-bottom: 20px;
            outline: none;
            transition: border-color 0.3s;
        }
        #emailMessage:focus {
            border-color: var(--accent-2);
        }
        
        .send-btn {
            width: 100%;
            justify-content: center;
        }

        /* Scroll to Top Button */
        .scroll-top-btn {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            background: var(--text-primary);
            color: var(--bg-color);
            border: none;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            cursor: pointer;
            z-index: 900;
            opacity: 0;
            pointer-events: none;
            transform: translateY(20px);
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            box-shadow: 0 10px 20px rgba(0,0,0,0.3);
        }

        .scroll-top-btn.show {
            opacity: 1;
            pointer-events: auto;
            transform: translateY(0);
        }

        .scroll-top-btn:hover {
            transform: translateY(-5px);
            background: var(--accent-2);
            color: white;
        }

        /* Scroll Reveal Animation Classes */
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        .delay-1 { transition-delay: 0.1s; }
        .delay-2 { transition-delay: 0.2s; }
        .delay-3 { transition-delay: 0.3s; }

        /* Responsive Design */
        @media (max-width: 992px) {
            .about-grid { grid-template-columns: 1fr; }
            .about-image { max-height: 400px; }
            .nav-links { display: none; }
            .hamburger { display: block; }
            #beranda h1 { font-size: 3rem; }
            .section { padding: 100px 5% 50px; }
        }
        
        @media (max-width: 768px) {
            .hero-cta { flex-direction: column; width: 100%; }
            .hero-cta .btn { width: 100%; justify-content: center; }
            .contact-box { padding: 40px 20px; }
            #beranda h1 { font-size: 2.5rem; }
        }
    </style>
</head>
<body>
    <!-- Background Ambient Orbs (JS Driven Parallax) -->
    <div class="ambient-bg" id="parallax-bg">
        <div class="ambient-orb orb-1" style="width: 500px; height: 500px; background: var(--accent-1); top: -10%; left: -5%;"></div>
        <div class="ambient-orb orb-2" style="width: 600px; height: 600px; background: var(--accent-2); bottom: -10%; right: -5%;"></div>
        <div class="ambient-orb orb-3" style="width: 400px; height: 400px; background: var(--accent-3); top: 50%; left: 50%; transform: translate(-50%, -50%);"></div>
    </div>

    <!-- Navigasi -->
    <nav id="navbar">
        <a href="#beranda" class="logo">Portofolio.</a>
        
        <!-- Desktop Menu -->
        <div class="nav-links">
            <a href="#beranda">Beranda</a>
            <a href="#tentang">Tentang</a>
            <a href="#keahlian">Keahlian</a>
            <a href="#proyek">Proyek</a>
            <a href="#kontak">Kontak</a>
        </div>

        <!-- Mobile Hamburger Button -->
        <button class="hamburger" id="hamburgerBtn" aria-label="Toggle Navigation">
            <i class="fa-solid fa-bars"></i>
        </button>
    </nav>

    <!-- Mobile Menu Overlay -->
    <div class="mobile-menu" id="mobileMenu">
        <a href="#beranda" class="mobile-link">Beranda</a>
        <a href="#tentang" class="mobile-link">Tentang</a>
        <a href="#keahlian" class="mobile-link">Keahlian</a>
        <a href="#proyek" class="mobile-link">Proyek</a>
        <a href="#kontak" class="mobile-link">Kontak</a>
    </div>

    <!-- 1. Beranda (Hero) -->
    <section id="beranda" class="section">
        <div class="section-content">
            <div class="hero-badge reveal">
                <i class="fa-solid fa-rocket"></i> Tersedia untuk bekerja
            </div>
            
            <h1 class="reveal delay-1">
                <span class="name-highlight decode-text" data-value="Nur Sidik">Nur Sidik</span>
            </h1>
            
            <h2 class="reveal delay-2" style="font-size: 1.5rem; font-weight: 400; color: var(--text-secondary); margin-bottom: 1.5rem;">
                Seorang <span class="typing-text" id="typing"></span><span class="typing-cursor">|</span>
            </h2>
            
            <p class="reveal delay-2">Saya berdedikasi merancang dan membangun antarmuka web yang rapi dan elegan. Fokus utama saya adalah menciptakan pengalaman digital yang bersih, fungsional, dan memiliki estetika tinggi.</p>
            
            <div class="hero-cta reveal delay-3">
                <a href="#proyek" class="btn magnetic">Lihat Karya Saya</a>
                <a href="#" onclick="openEmailModal(event)" class="btn btn-outline magnetic">Hubungi Saya <i class="fa-regular fa-paper-plane"></i></a>
            </div>
        </div>
    </section>

    <!-- 2. Tentang Saya -->
    <section id="tentang" class="section">
        <div class="section-content">
            <div class="section-header reveal">
                <h2 class="section-title">Tentang <span class="title-accent">Saya</span></h2>
                <p class="section-subtitle">Mengenal lebih dekat siapa saya dan pendekatan saya dalam pengembangan perangkat lunak.</p>
            </div>
            
            <div class="about-grid">
                <div class="about-text reveal delay-1">
                    <h3 style="font-size: 1.6rem; margin-bottom: 1rem; font-family: 'Space Grotesk', sans-serif;">Membangun Solusi dengan Kerapian Kode</h3>
                    <p>Halo! Saya <strong>Nur Sidik</strong>, seorang pengembang perangkat lunak yang selalu mengutamakan kerapian dan efisiensi. Saya percaya bahwa desain web yang hebat haruslah bersih dari kekacauan, mudah dipahami, dan memberikan navigasi yang mulus bagi penggunanya.</p>
                    <p>Saya menggabungkan kemampuan pemecahan masalah dengan intuisi desain minimalis untuk menciptakan aplikasi yang stabil, cepat, dan terlihat sangat profesional di berbagai perangkat.</p>
                    
                    <div class="about-stats">
                        <div class="stat-item magnetic-container">
                            <h3>3+</h3>
                            <p>Tahun Pengalaman</p>
                        </div>
                        <div class="stat-item magnetic-container">
                            <h3>20+</h3>
                            <p>Proyek Selesai</p>
                        </div>
                    </div>
                </div>
                
                <div class="about-image reveal delay-2 tilt-element">
                    <i class="fa-solid fa-laptop-code"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Keahlian -->
    <section id="keahlian" class="section">
        <div class="section-content">
            <div class="section-header reveal">
                <h2 class="section-title">Keahlian <span class="title-accent">Teknis</span></h2>
                <p class="section-subtitle">Alat dan teknologi yang saya gunakan secara profesional setiap hari.</p>
            </div>
            
            <div class="skills-grid">
                <div class="skill-card reveal">
                    <div class="skill-icon"><i class="fa-solid fa-code"></i></div>
                    <h3>Frontend Development</h3>
                    <div class="skill-tags">
                        <span class="s-tag">HTML5</span>
                        <span class="s-tag">CSS3</span>
                        <span class="s-tag">JavaScript (ES6)</span>
                        <span class="s-tag">React.js</span>
                    </div>
                </div>
                
                <div class="skill-card reveal delay-1">
                    <div class="skill-icon"><i class="fa-solid fa-server"></i></div>
                    <h3>Backend Development</h3>
                    <div class="skill-tags">
                        <span class="s-tag">PHP</span>
                        <span class="s-tag">Laravel</span>
                        <span class="s-tag">Node.js</span>
                        <span class="s-tag">RESTful API</span>
                    </div>
                </div>
                
                <div class="skill-card reveal delay-2">
                    <div class="skill-icon"><i class="fa-solid fa-database"></i></div>
                    <h3>Database Management</h3>
                    <div class="skill-tags">
                        <span class="s-tag">MySQL</span>
                        <span class="s-tag">PostgreSQL</span>
                        <span class="s-tag">Database Design</span>
                    </div>
                </div>
                
                <div class="skill-card reveal delay-3">
                    <div class="skill-icon"><i class="fa-solid fa-pen-ruler"></i></div>
                    <h3>Design & Tools</h3>
                    <div class="skill-tags">
                        <span class="s-tag">Figma</span>
                        <span class="s-tag">UI/UX Layouting</span>
                        <span class="s-tag">Git & GitHub</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Proyek -->
    <section id="proyek" class="section">
        <div class="section-content">
            <div class="section-header reveal">
                <h2 class="section-title">Karya <span class="title-accent">Terbaru</span></h2>
                <p class="section-subtitle">Seleksi portofolio proyek yang dikerjakan dengan standar kualitas tertinggi.</p>
            </div>
            
            <div class="projects-grid">
                <div class="project-card reveal">
                    <div class="project-img"><i class="fa-solid fa-wallet"></i></div>
                    <div class="project-info">
                        <h3>Project Pembayaran SPP Sekolah</h3>
                        <p>Sistem manajemen pembayaran SPP sekolah modern yang memudahkan pencatatan transaksi, pemantauan tunggakan, dan pembuatan laporan keuangan secara otomatis.</p>
                        <div class="project-links">
                            <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i> Demo</a>
                            <a href="https://github.com/SIDIKGNTG" target="_blank"><i class="fa-brands fa-github"></i> Source</a>
                        </div>
                    </div>
                </div>
                
                <div class="project-card reveal delay-1">
                    <div class="project-img"><i class="fa-solid fa-building-columns"></i></div>
                    <div class="project-info">
                        <h3>Portal Akademik Terpadu</h3>
                        <p>Platform administrasi sekolah untuk pencatatan pembayaran dan data siswa dengan struktur database yang solid.</p>
                        <div class="project-links">
                            <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i> Demo</a>
                        </div>
                    </div>
                </div>
                
                <div class="project-card reveal delay-2">
                    <div class="project-img"><i class="fa-solid fa-globe"></i></div>
                    <div class="project-info">
                        <h3>Website Portofolio Rapi</h3>
                        <p>Desain antarmuka personal dengan fokus pada struktur yang simetris, tata letak yang bersih, dan navigasi yang intuitif.</p>
                        <div class="project-links">
                            <a href="https://github.com/SIDIKGNTG" target="_blank"><i class="fa-brands fa-github"></i> Source</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Kontak -->
    <section id="kontak" class="section">
        <div class="section-content">
            <div class="contact-box reveal">
                <h2 class="section-title" style="margin-bottom: 15px;">Mari <span class="title-accent">Berdiskusi</span></h2>
                <p style="color: var(--text-secondary); font-size: 1.1rem; margin-bottom: 35px;">
                    Saya selalu terbuka untuk tawaran pekerjaan, proyek baru, atau diskusi seputar teknologi web. Sapa saya melalui tautan di bawah ini.
                </p>
                
                <a href="#" onclick="openEmailModal(event)" class="btn magnetic" style="font-size: 1.05rem; padding: 15px 40px;">
                    Kirim Pesan Email <i class="fa-regular fa-paper-plane" style="margin-left: 8px;"></i>
                </a>
                
                <div class="social-links">
                    <a href="https://github.com/SIDIKGNTG" target="_blank" class="social-link magnetic" aria-label="GitHub"><i class="fa-brands fa-github"></i></a>
                    <a href="https://instagram.com/kidisss11" target="_blank" class="social-link magnetic" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Scroll to Top Button -->
    <button class="scroll-top-btn" id="scrollTopBtn" onclick="scrollToTop()" aria-label="Scroll to top">
        <i class="fa-solid fa-arrow-up"></i>
    </button>

    <!-- Modal Email Pop-up -->
    <div class="email-modal-overlay" id="emailModal" onclick="closeEmailModal(event)">
        <div class="email-modal-box" onclick="event.stopPropagation()">
            <button class="close-modal" onclick="closeEmailModal()" aria-label="Tutup Modal"><i class="fa-solid fa-xmark"></i></button>
            <h3>Kirim Pesan</h3>
            <p>Pesan Anda akan disiapkan untuk dikirim ke <strong>sidiknuraja16@gmail.com</strong></p>
            <textarea id="emailMessage" placeholder="Tuliskan pesan Anda di sini..." rows="5"></textarea>
            <button class="btn send-btn magnetic" onclick="sendEmail()">Kirim Pesan Sekarang <i class="fa-solid fa-paper-plane" style="margin-left: 8px;"></i></button>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2026 Nur Sidik. Dirancang dengan kerapian dan ketelitian.</p>
    </footer>

    <!-- JavaScript Interactivity -->
    <script>
        // --- Mobile Menu Toggle ---
        const hamburgerBtn = document.getElementById('hamburgerBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        const mobileLinks = document.querySelectorAll('.mobile-link');

        hamburgerBtn.addEventListener('click', () => {
            const isActive = mobileMenu.classList.toggle('active');
            hamburgerBtn.innerHTML = isActive ? '<i class="fa-solid fa-xmark"></i>' : '<i class="fa-solid fa-bars"></i>';
        });

        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.remove('active');
                hamburgerBtn.innerHTML = '<i class="fa-solid fa-bars"></i>';
            });
        });

        // --- Navbar Scroll Effect & Scroll-To-Top Button ---
        const navbar = document.getElementById('navbar');
        const scrollTopBtn = document.getElementById('scrollTopBtn');
        
        window.addEventListener('scroll', () => {
            // Navbar
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
            
            // Scroll to top button visibility
            if (window.scrollY > 500) {
                scrollTopBtn.classList.add('show');
            } else {
                scrollTopBtn.classList.remove('show');
            }
        });

        function scrollToTop() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        // --- Modal Email Logic ---
        function openEmailModal(e) {
            e.preventDefault();
            document.getElementById('emailModal').classList.add('show');
            setTimeout(() => document.getElementById('emailMessage').focus(), 100);
        }

        function closeEmailModal(e) {
            if(e && e.target !== e.currentTarget) return;
            document.getElementById('emailModal').classList.remove('show');
        }

        function sendEmail() {
            const message = document.getElementById('emailMessage').value;
            if(!message.trim()) {
                alert("Pesan tidak boleh kosong.");
                return;
            }
            // Create mailto link and open it
            const mailtoLink = `mailto:sidiknuraja16@gmail.com?subject=Pesan dari Portofolio Web&body=${encodeURIComponent(message)}`;
            window.location.href = mailtoLink;
            closeEmailModal();
            document.getElementById('emailMessage').value = '';
        }

        // --- Hacker / Decode Text Effect for Name ---
        const letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        const decodeElements = document.querySelectorAll('.decode-text');
        
        function runDecodeEffect(element) {
            let iteration = 0;
            clearInterval(element.dataset.interval);
            
            element.dataset.interval = setInterval(() => {
                element.innerText = element.innerText
                    .split("")
                    .map((letter, index) => {
                        if(index < iteration) {
                            return element.dataset.value[index];
                        }
                        return letters[Math.floor(Math.random() * 26)]
                    })
                    .join("");
                
                if(iteration >= element.dataset.value.length){ 
                    clearInterval(element.dataset.interval);
                }
                iteration += 1 / 3;
            }, 35);
        }

        decodeElements.forEach(el => {
            setTimeout(() => runDecodeEffect(el), 500);
            el.addEventListener('mouseover', () => runDecodeEffect(el));
        });

        // --- Magnetic Buttons ---
        const magneticElements = document.querySelectorAll('.magnetic');
        
        magneticElements.forEach(el => {
            el.addEventListener('mousemove', function(e) {
                const position = el.getBoundingClientRect();
                const x = e.clientX - position.left - position.width / 2;
                const y = e.clientY - position.top - position.height / 2;
                el.style.transform = `translate(${x * 0.2}px, ${y * 0.2}px) scale(1.02)`;
            });

            el.addEventListener('mouseout', function() {
                el.style.transform = 'translate(0px, 0px) scale(1)';
            });
        });

        // --- Dynamic Parallax Background ---
        const orb1 = document.querySelector('.orb-1');
        const orb2 = document.querySelector('.orb-2');
        let mouseX = 0;
        let mouseY = 0;
        
        document.addEventListener('mousemove', (e) => {
            mouseX = e.clientX / window.innerWidth - 0.5;
            mouseY = e.clientY / window.innerHeight - 0.5;
        });

        function animateParallax() {
            if(orb1 && orb2) {
                orb1.style.transform = `translate(${mouseX * -50}px, ${mouseY * -50}px)`;
                orb2.style.transform = `translate(${mouseX * 70}px, ${mouseY * 70}px)`;
            }
            requestAnimationFrame(animateParallax);
        }
        animateParallax();

        // --- 3D Tilt Effect ---
        const tiltElements = document.querySelectorAll('.tilt-element');
        tiltElements.forEach(item => {
            item.addEventListener('mousemove', (e) => {
                const rect = item.getBoundingClientRect();
                const x = e.clientX - rect.left; 
                const y = e.clientY - rect.top;  
                const centerX = rect.width / 2;
                const centerY = rect.height / 2;
                const rotateX = ((y - centerY) / centerY) * -10; 
                const rotateY = ((x - centerX) / centerX) * 10;
                
                item.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale3d(1.02, 1.02, 1.02)`;
                item.style.transition = 'none';
            });
            item.addEventListener('mouseleave', () => {
                item.style.transform = `perspective(1000px) rotateX(0) rotateY(0) scale3d(1, 1, 1)`;
                item.style.transition = 'transform 0.5s ease';
            });
        });

        // --- Typing Effect Logic ---
        const phrases = ["Web Developer.", "UI/UX Enthusiast.", "Problem Solver."];
        let currentPhraseIndex = 0;
        let currentCharIndex = 0;
        let isDeleting = false;
        const typingElement = document.getElementById('typing');

        function typeLoop() {
            if(!typingElement) return;
            const currentPhrase = phrases[currentPhraseIndex];
            
            if (isDeleting) {
                typingElement.textContent = currentPhrase.substring(0, currentCharIndex - 1);
                currentCharIndex--;
            } else {
                typingElement.textContent = currentPhrase.substring(0, currentCharIndex + 1);
                currentCharIndex++;
            }

            let typeSpeed = isDeleting ? 40 : 100;

            if (!isDeleting && currentCharIndex === currentPhrase.length) {
                typeSpeed = 2000; 
                isDeleting = true;
            } else if (isDeleting && currentCharIndex === 0) {
                isDeleting = false;
                currentPhraseIndex = (currentPhraseIndex + 1) % phrases.length;
                typeSpeed = 500; 
            }
            setTimeout(typeLoop, typeSpeed);
        }
        setTimeout(typeLoop, 1500);

        // --- Scroll Reveal Animations ---
        const revealElements = document.querySelectorAll('.reveal');
        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, { threshold: 0.15, rootMargin: "0px 0px -30px 0px" });
        
        revealElements.forEach(el => revealObserver.observe(el));

        // --- Active Nav Link on Scroll ---
        const sections = document.querySelectorAll('section');
        const navLinks = document.querySelectorAll('.nav-links a, .mobile-link');
        
        window.addEventListener('scroll', () => {
            let current = '';
            sections.forEach(section => {
                if (window.scrollY >= (section.offsetTop - section.clientHeight / 3)) {
                    current = section.getAttribute('id');
                }
            });
            
            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${current}`) {
                    link.classList.add('active');
                }
            });
        });
    </script>
</body>
</html>
