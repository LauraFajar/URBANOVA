<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title : 'URBANOVA Propiedades | Inmobiliaria Premium'; ?></title>
    <meta name="description" content="<?php echo isset($page_description) ? $page_description : 'URBANOVA Propiedades - Tu socio de confianza en inversiones inmobiliarias de lujo. Venta, alquiler, tasaciones y asesoría profesional.'; ?>">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800;900&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- Custom Tailwind Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'montserrat': ['Montserrat', 'sans-serif'],
                        'inter': ['Inter', 'sans-serif'],
                    },
                    colors: {
                        'primary': {
                            50: '#f8fafc',
                            100: '#f1f5f9',
                            200: '#e2e8f0',
                            300: '#cbd5e1',
                            400: '#94a3b8',
                            500: '#64748b',
                            600: '#475569',
                            700: '#334155',
                            800: '#1e293b',
                            900: '#0f172a',
                        },
                        'gold': {
                            50: '#fefce8',
                            100: '#fef9c3',
                            200: '#fef08a',
                            300: '#fde047',
                            400: '#D4AF37',
                            500: '#C9A05C',
                            600: '#B8860B',
                            700: '#997326',
                            800: '#6b5416',
                            900: '#4a3a0f',
                        }
                    }
                }
            }
        }
    </script>
    
    <style>
        * {
            font-family: 'Inter', sans-serif;
        }
        
        h1, h2, h3, h4, h5, h6, .font-display {
            font-family: 'Montserrat', sans-serif;
        }
        
        /* Smooth Scrolling */
        html {
            scroll-behavior: smooth;
        }
        
        /* Header Backdrop Blur */
        .header-glass {
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }
        
        /* Gradient Border */
        .gradient-border-bottom {
            position: relative;
        }
        
        .gradient-border-bottom::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 2px;
            background: linear-gradient(90deg, #D4AF37 0%, #C9A05C 50%, #D4AF37 100%);
        }
        
        /* Mobile Menu Animation */
        .mobile-menu {
            transform: translateX(100%);
            transition: transform 0.3s ease-in-out;
        }
        
        .mobile-menu.active {
            transform: translateX(0);
        }
        
        /* Hover Effects */
        .nav-link {
            position: relative;
            transition: color 0.3s ease;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, #D4AF37, #C9A05C);
            transition: width 0.3s ease;
        }
        
        .nav-link:hover::after,
        .nav-link.active::after {
            width: 100%;
        }
        
        .nav-link:hover,
        .nav-link.active {
            color: #D4AF37;
        }
        
        /* CTA Button Gradient */
        .btn-gradient {
            background: linear-gradient(135deg, #D4AF37 0%, #C9A05C 100%);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .btn-gradient:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 25px rgba(212, 175, 55, 0.4);
        }
    </style>
</head>
<body class="bg-primary-50 text-primary-900">
    
    <!-- Header -->
    <header class="fixed top-0 left-0 right-0 z-50 bg-primary-900/95 header-glass gradient-border-bottom">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="flex items-center justify-between py-4 lg:py-5">
                
                <!-- Logo -->
                <a href="index.php" class="flex items-center space-x-3 group">
                    <div class="w-10 h-10 lg:w-12 lg:h-12 bg-gradient-to-br from-gold-400 to-gold-600 rounded-lg flex items-center justify-center transform group-hover:rotate-6 transition-transform duration-300">
                        <i class="fas fa-building text-white text-xl lg:text-2xl"></i>
                    </div>
                    <div class="flex flex-col">
                        <span class="font-montserrat font-black text-xl lg:text-2xl text-white tracking-tight">
                            URBA<span class="text-gold-400">NOVA</span>
                        </span>
                        <span class="text-gold-400 text-xs lg:text-sm font-inter font-light tracking-widest uppercase">Propiedades</span>
                    </div>
                </a>
                
                <!-- Desktop Navigation -->
                <nav class="hidden lg:flex items-center space-x-8">
                    <a href="index.php" class="nav-link <?php echo (isset($current_page) && $current_page === 'inicio') ? 'active' : ''; ?> text-primary-100 font-inter font-medium text-sm uppercase tracking-wide">
                        Inicio
                    </a>
                    <a href="propiedades.php" class="nav-link <?php echo (isset($current_page) && $current_page === 'propiedades') ? 'active' : ''; ?> text-primary-100 font-inter font-medium text-sm uppercase tracking-wide">
                        Propiedades
                    </a>
                    <a href="contacto.php" class="nav-link <?php echo (isset($current_page) && $current_page === 'contacto') ? 'active' : ''; ?> text-primary-100 font-inter font-medium text-sm uppercase tracking-wide">
                        Contacto
                    </a>
                </nav>
                
                <!-- CTA Button Desktop -->
                <a href="contacto.php" class="hidden lg:inline-block btn-gradient text-white font-montserrat font-bold text-sm uppercase tracking-wide px-6 py-3 rounded-lg">
                    <i class="fas fa-phone-alt mr-2"></i>
                    Agendar Consulta
                </a>
                
                <!-- Mobile Menu Toggle -->
                <button id="mobile-menu-toggle" class="lg:hidden text-white text-2xl focus:outline-none">
                    <i class="fas fa-bars"></i>
                </button>
                
            </div>
        </div>
    </header>
    
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="mobile-menu fixed top-0 right-0 bottom-0 w-64 bg-primary-900 z-50 lg:hidden shadow-2xl">
        <div class="flex flex-col h-full">
            
            <!-- Close Button -->
            <div class="flex items-center justify-between p-6 border-b border-gold-400/20">
                <span class="font-montserrat font-black text-xl text-white">
                    URBA<span class="text-gold-400">NOVA</span>
                </span>
                <button id="mobile-menu-close" class="text-white text-2xl focus:outline-none">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            
            <!-- Mobile Nav Links -->
            <nav class="flex flex-col p-6 space-y-4">
                <a href="index.php" class="text-primary-100 hover:text-gold-400 font-inter font-medium text-lg uppercase tracking-wide transition-colors duration-300">
                    <i class="fas fa-home mr-3 text-gold-400"></i>
                    Inicio
                </a>
                <a href="propiedades.php" class="text-primary-100 hover:text-gold-400 font-inter font-medium text-lg uppercase tracking-wide transition-colors duration-300">
                    <i class="fas fa-building mr-3 text-gold-400"></i>
                    Propiedades
                </a>
                <a href="contacto.php" class="text-primary-100 hover:text-gold-400 font-inter font-medium text-lg uppercase tracking-wide transition-colors duration-300">
                    <i class="fas fa-envelope mr-3 text-gold-400"></i>
                    Contacto
                </a>
            </nav>
            
            <!-- CTA Button Mobile -->
            <div class="mt-auto p-6 border-t border-gold-400/20">
                <a href="contacto.php" class="block btn-gradient text-white font-montserrat font-bold text-sm uppercase tracking-wide px-6 py-4 rounded-lg text-center">
                    <i class="fas fa-phone-alt mr-2"></i>
                    Agendar Consulta
                </a>
            </div>
            
        </div>
    </div>
    
    <!-- Mobile Menu Overlay -->
    <div id="mobile-menu-overlay" class="hidden fixed inset-0 bg-black/50 z-40 lg:hidden"></div>
    
    <!-- JavaScript for Mobile Menu -->
    <script>
        const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileMenuClose = document.getElementById('mobile-menu-close');
        const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
        
        function openMobileMenu() {
            mobileMenu.classList.add('active');
            mobileMenuOverlay.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }
        
        function closeMobileMenu() {
            mobileMenu.classList.remove('active');
            mobileMenuOverlay.classList.add('hidden');
            document.body.style.overflow = '';
        }
        
        mobileMenuToggle.addEventListener('click', openMobileMenu);
        mobileMenuClose.addEventListener('click', closeMobileMenu);
        mobileMenuOverlay.addEventListener('click', closeMobileMenu);
    </script>
    
    <main class="pt-16 lg:pt-20">
