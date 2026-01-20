<?php
$page_title = "Propiedades Premium | URBANOVA Propiedades";
$page_description = "Explora nuestro portafolio exclusivo de apartamentos, penthouses, casas y oficinas en las zonas más cotizadas. Tu inversión inmobiliaria comienza aquí.";
$current_page = "propiedades";
include 'includes/header.php';
?>

<section class="relative h-[50vh] flex items-center justify-center bg-primary-900">
    <div class="absolute inset-0 opacity-10">
        <div class="w-full h-full" style="background-image: repeating-linear-gradient(45deg, transparent, transparent 35px, #D4AF37 35px, #D4AF37 36px);"></div>
    </div>
    
    <div class="container mx-auto px-4 lg:px-8 z-10 text-center">
        <h1 class="font-montserrat font-black text-5xl lg:text-6xl text-white leading-tight mb-6">
            Propiedades <span class="text-gold-400">Premium</span>
        </h1>
        <p class="text-primary-100 text-lg lg:text-xl font-inter max-w-2xl mx-auto">
            Descubre las mejores inversiones en zonas exclusivas con acabados de lujo
        </p>
        
        <div class="w-32 h-1 bg-gradient-to-r from-transparent via-gold-400 to-transparent mx-auto mt-8"></div>
    </div>
</section>

<nav id="category-nav" class="sticky top-16 lg:top-20 z-40 bg-white border-b border-primary-200 shadow-md">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="flex overflow-x-auto scrollbar-hide py-4 space-x-6">
            <a href="#apartamentos" class="category-tab whitespace-nowrap px-4 py-2 font-montserrat font-semibold text-sm uppercase tracking-wide text-primary-600 hover:text-gold-500 border-b-2 border-transparent hover:border-gold-500 transition-all duration-300">
                <i class="fas fa-building mr-2"></i>Apartamentos
            </a>
            <a href="#penthouses" class="category-tab whitespace-nowrap px-4 py-2 font-montserrat font-semibold text-sm uppercase tracking-wide text-primary-600 hover:text-gold-500 border-b-2 border-transparent hover:border-gold-500 transition-all duration-300">
                <i class="fas fa-crown mr-2"></i>Penthouses
            </a>
            <a href="#casas" class="category-tab whitespace-nowrap px-4 py-2 font-montserrat font-semibold text-sm uppercase tracking-wide text-primary-600 hover:text-gold-500 border-b-2 border-transparent hover:border-gold-500 transition-all duration-300">
                <i class="fas fa-home mr-2"></i>Casas
            </a>
            <a href="#oficinas" class="category-tab whitespace-nowrap px-4 py-2 font-montserrat font-semibold text-sm uppercase tracking-wide text-primary-600 hover:text-gold-500 border-b-2 border-transparent hover:border-gold-500 transition-all duration-300">
                <i class="fas fa-briefcase mr-2"></i>Oficinas
            </a>
            <a href="#terrenos" class="category-tab whitespace-nowrap px-4 py-2 font-montserrat font-semibold text-sm uppercase tracking-wide text-primary-600 hover:text-gold-500 border-b-2 border-transparent hover:border-gold-500 transition-all duration-300">
                <i class="fas fa-map-marked-alt mr-2"></i>Terrenos
            </a>
            <a href="#comerciales" class="category-tab whitespace-nowrap px-4 py-2 font-montserrat font-semibold text-sm uppercase tracking-wide text-primary-600 hover:text-gold-500 border-b-2 border-transparent hover:border-gold-500 transition-all duration-300">
                <i class="fas fa-store mr-2"></i>Comerciales
            </a>
        </div>
    </div>
</nav>

<section id="apartamentos" class="py-20 bg-white">
    <div class="container mx-auto px-4 lg:px-8">
        
        <div class="mb-12">
            <div class="flex items-center space-x-4 mb-4">
                <div class="h-1 w-16 bg-gold-400"></div>
                <h2 class="font-montserrat font-black text-4xl text-primary-900">
                    Apartamentos Premium
                </h2>
            </div>
            <p class="text-primary-600 text-lg">Espacios modernos con acabados de lujo en zonas privilegiadas</p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <div class="group bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 border border-primary-100 hover:border-gold-400">
                <div class="aspect-[4/3] overflow-hidden relative">
                    <img src="assets/img/venta_apartamentos.png" 
                         alt="Apartamento Vista Panorámica" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute top-4 left-4">
                        <span class="bg-gold-400 text-white px-3 py-1 rounded-full text-xs font-bold uppercase">Popular</span>
                    </div>
                    <div class="absolute top-4 right-4">
                        <span class="bg-primary-900/80 text-white px-3 py-1 rounded-full text-xs font-bold uppercase">Venta</span>
                    </div>
                </div>
                <div class="p-6 space-y-4">
                    <div class="flex items-start justify-between">
                        <h3 class="font-montserrat font-bold text-xl text-primary-900 group-hover:text-gold-500 transition-colors duration-300">
                            Sky View Residence
                        </h3>
                        <p class="font-montserrat font-black text-xl text-gold-500">
                            $450K
                        </p>
                    </div>
                    <p class="text-primary-600 text-sm flex items-center">
                        <i class="fas fa-map-marker-alt text-gold-400 mr-2"></i>
                        Zona Financiera, Torre Norte
                    </p>
                    <div class="flex items-center space-x-4 text-sm text-primary-600 border-t border-primary-100 pt-4">
                        <span><i class="fas fa-bed text-gold-400 mr-1"></i> 3 dorm</span>
                        <span><i class="fas fa-bath text-gold-400 mr-1"></i> 2 baños</span>
                        <span><i class="fas fa-ruler-combined text-gold-400 mr-1"></i> 120m²</span>
                    </div>
                    <p class="text-primary-700 text-sm leading-relaxed">
                        Apartamento de lujo con vistas panorámicas a la ciudad. Acabados premium, cocina equipada y balcón privado.
                    </p>
                    <a href="contacto.php" class="block w-full bg-primary-900 hover:bg-gold-500 text-white font-montserrat font-bold text-sm uppercase py-3 rounded-lg text-center transition-all duration-300">
                        <i class="fas fa-info-circle mr-2"></i>Más Información
                    </a>
                </div>
            </div>
            
            <div class="group bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 border border-primary-100 hover:border-gold-400">
                <div class="aspect-[4/3] overflow-hidden relative">
                    <img src="assets/img/office.png" 
                         alt="Urban Loft Tower" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute top-4 left-4">
                        <span class="bg-green-500 text-white px-3 py-1 rounded-full text-xs font-bold uppercase">Nuevo</span>
                    </div>
                    <div class="absolute top-4 right-4">
                        <span class="bg-primary-900/80 text-white px-3 py-1 rounded-full text-xs font-bold uppercase">Venta</span>
                    </div>
                </div>
                <div class="p-6 space-y-4">
                    <div class="flex items-start justify-between">
                        <h3 class="font-montserrat font-bold text-xl text-primary-900 group-hover:text-gold-500 transition-colors duration-300">
                            Urban Loft Tower
                        </h3>
                        <p class="font-montserrat font-black text-xl text-gold-500">
                            $380K
                        </p>
                    </div>
                    <p class="text-primary-600 text-sm flex items-center">
                        <i class="fas fa-map-marker-alt text-gold-400 mr-2"></i>
                        Centro Histórico, Piso 15
                    </p>
                    <div class="flex items-center space-x-4 text-sm text-primary-600 border-t border-primary-100 pt-4">
                        <span><i class="fas fa-bed text-gold-400 mr-1"></i> 2 dorm</span>
                        <span><i class="fas fa-bath text-gold-400 mr-1"></i> 2 baños</span>
                        <span><i class="fas fa-ruler-combined text-gold-400 mr-1"></i> 95m²</span>
                    </div>
                    <p class="text-primary-700 text-sm leading-relaxed">
                        Diseño contemporáneo con espacios abiertos. Incluye gimnasio, piscina y estacionamiento privado.
                    </p>
                    <a href="contacto.php" class="block w-full bg-primary-900 hover:bg-gold-500 text-white font-montserrat font-bold text-sm uppercase py-3 rounded-lg text-center transition-all duration-300">
                        <i class="fas fa-info-circle mr-2"></i>Más Información
                    </a>
                </div>
            </div>
            
            <div class="group bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 border border-primary-100 hover:border-gold-400">
                <div class="aspect-[4/3] overflow-hidden relative">
                    <img src="assets/img/alquiler_penthouse.png" 
                         alt="Metropolitan Suite" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute top-4 right-4">
                        <span class="bg-blue-500 text-white px-3 py-1 rounded-full text-xs font-bold uppercase">Alquiler</span>
                    </div>
                </div>
                <div class="p-6 space-y-4">
                    <div class="flex items-start justify-between">
                        <h3 class="font-montserrat font-bold text-xl text-primary-900 group-hover:text-gold-500 transition-colors duration-300">
                            Metropolitan Suite
                        </h3>
                        <p class="font-montserrat font-black text-xl text-gold-500">
                            $2.5K/mes
                        </p>
                    </div>
                    <p class="text-primary-600 text-sm flex items-center">
                        <i class="fas fa-map-marker-alt text-gold-400 mr-2"></i>
                        Barrio Premium, Edificio Elite
                    </p>
                    <div class="flex items-center space-x-4 text-sm text-primary-600 border-t border-primary-100 pt-4">
                        <span><i class="fas fa-bed text-gold-400 mr-1"></i> 2 dorm</span>
                        <span><i class="fas fa-bath text-gold-400 mr-1"></i> 1 baño</span>
                        <span><i class="fas fa-ruler-combined text-gold-400 mr-1"></i> 80m²</span>
                    </div>
                    <p class="text-primary-700 text-sm leading-relaxed">
                        Apartamento amueblado con todos los servicios incluidos. Ideal para ejecutivos y profesionales.
                    </p>
                    <a href="contacto.php" class="block w-full bg-primary-900 hover:bg-gold-500 text-white font-montserrat font-bold text-sm uppercase py-3 rounded-lg text-center transition-all duration-300">
                        <i class="fas fa-info-circle mr-2"></i>Más Información
                    </a>
                </div>
            </div>
            
        </div>
        
    </div>
</section>

<section id="penthouses" class="py-20 bg-primary-900">
    <div class="container mx-auto px-4 lg:px-8">
        
        <div class="mb-12 text-center">
            <div class="w-32 h-1 bg-gradient-to-r from-transparent via-gold-400 to-transparent mx-auto mb-6"></div>
            <h2 class="font-montserrat font-black text-4xl lg:text-5xl text-white mb-4">
                Penthouses <span class="text-gold-400">Exclusivos</span>
            </h2>
            <p class="text-primary-200 text-lg max-w-2xl mx-auto">
                La cúspide del lujo urbano con vistas incomparables y amenities de clase mundial
            </p>
        </div>
        
        <div class="max-w-6xl mx-auto mb-12 bg-primary-800 rounded-2xl overflow-hidden shadow-2xl border-2 border-gold-400">
            <div class="grid lg:grid-cols-2">
                <div class="aspect-square lg:aspect-auto">
                    <img src="assets/img/alquiler_penthouse.png" 
                         alt="Penthouse Sky Terrace" 
                         class="w-full h-full object-cover">
                </div>
                <div class="p-8 lg:p-12 flex flex-col justify-center space-y-6">
                    <div>
                        <span class="inline-block bg-gold-400 text-white px-4 py-2 rounded-full text-xs font-bold uppercase mb-4">
                            <i class="fas fa-star mr-1"></i>Destacado
                        </span>
                        <h3 class="font-montserrat font-black text-3xl lg:text-4xl text-white mb-3">
                            Sky Terrace Penthouse
                        </h3>
                        <p class="text-gold-400 text-sm flex items-center mb-4">
                            <i class="fas fa-map-marker-alt mr-2"></i>
                            Zona Exclusiva Premium, Piso 28
                        </p>
                    </div>
                    
                    <div class="grid grid-cols-2 gap-4 py-4 border-y border-gold-400/30">
                        <div>
                            <p class="text-primary-400 text-xs uppercase tracking-wide mb-1">Dormitorios</p>
                            <p class="text-white font-bold text-lg"><i class="fas fa-bed text-gold-400 mr-2"></i>4</p>
                        </div>
                        <div>
                            <p class="text-primary-400 text-xs uppercase tracking-wide mb-1">Baños</p>
                            <p class="text-white font-bold text-lg"><i class="fas fa-bath text-gold-400 mr-2"></i>3.5</p>
                        </div>
                        <div>
                            <p class="text-primary-400 text-xs uppercase tracking-wide mb-1">Ãrea</p>
                            <p class="text-white font-bold text-lg"><i class="fas fa-ruler-combined text-gold-400 mr-2"></i>280mÂ²</p>
                        </div>
                        <div>
                            <p class="text-primary-400 text-xs uppercase tracking-wide mb-1">Precio</p>
                            <p class="text-gold-400 font-montserrat font-black text-2xl">$1.2M</p>
                        </div>
                    </div>
                    
                    <p class="text-primary-200 leading-relaxed">
                        Penthouse de dos niveles con terraza privada de 150m², jacuzzi exterior, cocina gourmet, home cinema y vistas de 360° de la ciudad. Incluye 3 estacionamientos y bodega privada.
                    </p>
                    
                    <div class="space-y-3">
                        <h4 class="text-white font-montserrat font-bold text-sm uppercase tracking-wide">Amenities Premium:</h4>
                        <div class="grid grid-cols-2 gap-2 text-primary-200 text-sm">
                            <p><i class="fas fa-check text-gold-400 mr-2"></i>Piscina infinita</p>
                            <p><i class="fas fa-check text-gold-400 mr-2"></i>Gimnasio privado</p>
                            <p><i class="fas fa-check text-gold-400 mr-2"></i>Sauna & Spa</p>
                            <p><i class="fas fa-check text-gold-400 mr-2"></i>Conserje 24/7</p>
                        </div>
                    </div>
                    
                    <a href="contacto.php" class="btn-gradient text-white font-montserrat font-bold text-sm uppercase py-4 rounded-lg text-center">
                        <i class="fas fa-calendar-check mr-2"></i>Agendar Visita Privada
                    </a>
                </div>
            </div>
        </div>
        
        <div class="grid md:grid-cols-2 gap-8">
            
            <div class="bg-primary-800 rounded-xl overflow-hidden shadow-xl border border-gold-400/30 hover:border-gold-400 transition-all duration-300">
                <div class="aspect-[16/9] overflow-hidden relative">
                    <img src="assets/img/inversion.png" 
                         alt="Royal Heights Penthouse" 
                         class="w-full h-full object-cover hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-6 space-y-4">
                    <div class="flex items-start justify-between">
                        <h3 class="font-montserrat font-bold text-xl text-white">
                            Royal Heights Penthouse
                        </h3>
                        <p class="font-montserrat font-black text-xl text-gold-400">
                            $950K
                        </p>
                    </div>
                    <p class="text-primary-300 text-sm flex items-center">
                        <i class="fas fa-map-marker-alt text-gold-400 mr-2"></i>
                        Marina Bay, Torre Dorada
                    </p>
                    <div class="flex items-center space-x-4 text-sm text-primary-300 border-t border-primary-700 pt-4">
                        <span><i class="fas fa-bed text-gold-400 mr-1"></i> 3 dorm</span>
                        <span><i class="fas fa-bath text-gold-400 mr-1"></i> 2.5 baños</span>
                        <span><i class="fas fa-ruler-combined text-gold-400 mr-1"></i> 220m²</span>
                    </div>
                    <a href="contacto.php" class="block w-full bg-gold-400 hover:bg-gold-500 text-white font-montserrat font-bold text-sm uppercase py-3 rounded-lg text-center transition-all duration-300">
                        Ver Detalles
                    </a>
                </div>
            </div>
            
            <div class="bg-primary-800 rounded-xl overflow-hidden shadow-xl border border-gold-400/30 hover:border-gold-400 transition-all duration-300">
                <div class="aspect-[16/9] overflow-hidden relative">
                    <img src="assets/img/tasaciones.png" 
                         alt="Diamond Residence" 
                         class="w-full h-full object-cover hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-6 space-y-4">
                    <div class="flex items-start justify-between">
                        <h3 class="font-montserrat font-bold text-xl text-white">
                            Diamond Residence
                        </h3>
                        <p class="font-montserrat font-black text-xl text-gold-400">
                            $1.5M
                        </p>
                    </div>
                    <p class="text-primary-300 text-sm flex items-center">
                        <i class="fas fa-map-marker-alt text-gold-400 mr-2"></i>
                        Distrito Empresarial, Piso 35
                    </p>
                    <div class="flex items-center space-x-4 text-sm text-primary-300 border-t border-primary-700 pt-4">
                        <span><i class="fas fa-bed text-gold-400 mr-1"></i> 5 dorm</span>
                        <span><i class="fas fa-bath text-gold-400 mr-1"></i> 4 baños</span>
                        <span><i class="fas fa-ruler-combined text-gold-400 mr-1"></i> 350m²</span>
                    </div>
                    <a href="contacto.php" class="block w-full bg-gold-400 hover:bg-gold-500 text-white font-montserrat font-bold text-sm uppercase py-3 rounded-lg text-center transition-all duration-300">
                        Ver Detalles
                    </a>
                </div>
            </div>
            
        </div>
        
    </div>
</section>

<section id="casas" class="py-20 bg-white">
    <div class="container mx-auto px-4 lg:px-8">
        
        <div class="mb-12">
            <div class="flex items-center space-x-4 mb-4">
                <div class="h-1 w-16 bg-gold-400"></div>
                <h2 class="font-montserrat font-black text-4xl text-primary-900">
                    Casas de Diseño
                </h2>
            </div>
            <p class="text-primary-600 text-lg">Residencias exclusivas con jardines privados y arquitectura contemporánea</p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <div class="group bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 border border-primary-100 hover:border-gold-400">
                <div class="aspect-[4/3] overflow-hidden relative">
                     <img src="assets/img/venta_apartamentos.png" 
                         alt="Garden Villa Moderna" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-6 space-y-4">
                    <div class="flex items-start justify-between">
                        <h3 class="font-montserrat font-bold text-xl text-primary-900 group-hover:text-gold-500 transition-colors duration-300">
                            Garden Villa Moderna
                        </h3>
                        <p class="font-montserrat font-black text-xl text-gold-500">
                            $680K
                        </p>
                    </div>
                    <p class="text-primary-600 text-sm flex items-center">
                        <i class="fas fa-map-marker-alt text-gold-400 mr-2"></i>
                        Barrio Residencial Norte
                    </p>
                    <div class="flex items-center space-x-4 text-sm text-primary-600 border-t border-primary-100 pt-4">
                        <span><i class="fas fa-bed text-gold-400 mr-1"></i> 4 dorm</span>
                        <span><i class="fas fa-bath text-gold-400 mr-1"></i> 3 baños</span>
                        <span><i class="fas fa-ruler-combined text-gold-400 mr-1"></i> 280m²</span>
                    </div>
                    <p class="text-primary-700 text-sm leading-relaxed">
                        Casa moderna con jardín de 200m², piscina, quincho y garage para 2 autos. Diseño minimalista.
                    </p>
                    <a href="contacto.php" class="block w-full bg-primary-900 hover:bg-gold-500 text-white font-montserrat font-bold text-sm uppercase py-3 rounded-lg text-center transition-all duration-300">
                        Más Información
                    </a>
                </div>
            </div>
            
            <div class="group bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 border border-primary-100 hover:border-gold-400">
                <div class="aspect-[4/3] overflow-hidden relative">
                     <img src="assets/img/hero.png" 
                         alt="Eco House Premium" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-6 space-y-4">
                    <div class="flex items-start justify-between">
                        <h3 class="font-montserrat font-bold text-xl text-primary-900 group-hover:text-gold-500 transition-colors duration-300">
                            Eco House Premium
                        </h3>
                        <p class="font-montserrat font-black text-xl text-gold-500">
                            $550K
                        </p>
                    </div>
                    <p class="text-primary-600 text-sm flex items-center">
                        <i class="fas fa-map-marker-alt text-gold-400 mr-2"></i>
                        Country Club Las Lomas
                    </p>
                    <div class="flex items-center space-x-4 text-sm text-primary-600 border-t border-primary-100 pt-4">
                        <span><i class="fas fa-bed text-gold-400 mr-1"></i> 3 dorm</span>
                        <span><i class="fas fa-bath text-gold-400 mr-1"></i> 2.5 baños</span>
                        <span><i class="fas fa-ruler-combined text-gold-400 mr-1"></i> 240m²</span>
                    </div>
                    <p class="text-primary-700 text-sm leading-relaxed">
                        Casa sustentable con paneles solares, jardín vertical y diseño bioclimático. Amplio deck.
                    </p>
                    <a href="contacto.php" class="block w-full bg-primary-900 hover:bg-gold-500 text-white font-montserrat font-bold text-sm uppercase py-3 rounded-lg text-center transition-all duration-300">
                        Más Información
                    </a>
                </div>
            </div>
            
            <div class="group bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 border border-primary-100 hover:border-gold-400">
                <div class="aspect-[4/3] overflow-hidden relative">
                     <img src="assets/img/alquiler_penthouse.png" 
                         alt="Luxury Pool House" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-6 space-y-4">
                    <div class="flex items-start justify-between">
                        <h3 class="font-montserrat font-bold text-xl text-primary-900 group-hover:text-gold-500 transition-colors duration-300">
                            Luxury Pool House
                        </h3>
                        <p class="font-montserrat font-black text-xl text-gold-500">
                            $920K
                        </p>
                    </div>
                    <p class="text-primary-600 text-sm flex items-center">
                        <i class="fas fa-map-marker-alt text-gold-400 mr-2"></i>
                        Barrio Cerrado Elite
                    </p>
                    <div class="flex items-center space-x-4 text-sm text-primary-600 border-t border-primary-100 pt-4">
                        <span><i class="fas fa-bed text-gold-400 mr-1"></i> 5 dorm</span>
                        <span><i class="fas fa-bath text-gold-400 mr-1"></i> 4 baños</span>
                        <span><i class="fas fa-ruler-combined text-gold-400 mr-1"></i> 380m²</span>
                    </div>
                    <p class="text-primary-700 text-sm leading-relaxed">
                        Mansión con piscina climatizada, home theater, gimnasio y estudio. Seguridad 24/7.
                    </p>
                    <a href="contacto.php" class="block w-full bg-primary-900 hover:bg-gold-500 text-white font-montserrat font-bold text-sm uppercase py-3 rounded-lg text-center transition-all duration-300">
                        Más Información
                    </a>
                </div>
            </div>
            
        </div>
        
    </div>
</section>

<section id="oficinas" class="py-20 bg-primary-50">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="mb-12">
            <div class="flex items-center space-x-4 mb-4">
                <div class="h-1 w-16 bg-gold-400"></div>
                <h2 class="font-montserrat font-black text-4xl text-primary-900">Oficinas Corporativas</h2>
            </div>
            <p class="text-primary-600 text-lg">Espacios profesionales en ubicaciones estratégicas</p>
        </div>
        <div class="bg-white rounded-xl p-8 shadow-lg text-center">
            <i class="fas fa-briefcase text-gold-400 text-6xl mb-4"></i>
            <p class="text-primary-700 text-lg mb-6">Consulta nuestro catálogo completo de oficinas desde 50m² hasta 500m² en las mejores zonas comerciales</p>
            <a href="contacto.php" class="inline-block btn-gradient text-white font-montserrat font-bold text-sm uppercase px-8 py-3 rounded-lg">
                Solicitar Catálogo
            </a>
        </div>
    </div>
</section>

<section id="terrenos" class="py-20 bg-white">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="mb-12">
            <div class="flex items-center space-x-4 mb-4">
                <div class="h-1 w-16 bg-gold-400"></div>
                <h2 class="font-montserrat font-black text-4xl text-primary-900">Terrenos Exclusivos</h2>
            </div>
            <p class="text-primary-600 text-lg">Lotes premium para inversión o desarrollo</p>
        </div>
        <div class="bg-primary-900 rounded-xl p-8 shadow-lg text-center">
            <i class="fas fa-map-marked-alt text-gold-400 text-6xl mb-4"></i>
            <p class="text-white text-lg mb-6">Terrenos desde 500m² hasta 5,000m² en zonas de alto crecimiento</p>
            <a href="contacto.php" class="inline-block btn-gradient text-white font-montserrat font-bold text-sm uppercase px-8 py-3 rounded-lg">
                Ver Disponibilidad
            </a>
        </div>
    </div>
</section>

<section id="comerciales" class="py-20 bg-primary-50">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="mb-12">
            <div class="flex items-center space-x-4 mb-4">
                <div class="h-1 w-16 bg-gold-400"></div>
                <h2 class="font-montserrat font-black text-4xl text-primary-900">Locales Comerciales</h2>
            </div>
            <p class="text-primary-600 text-lg">Inversiones comerciales en alto tráfico</p>
        </div>
        <div class="bg-white rounded-xl p-8 shadow-lg text-center">
            <i class="fas fa-store text-gold-400 text-6xl mb-4"></i>
            <p class="text-primary-700 text-lg mb-6">Locales comerciales estratégicamente ubicados en centros comerciales y avenidas principales</p>
            <a href="contacto.php" class="inline-block btn-gradient text-white font-montserrat font-bold text-sm uppercase px-8 py-3 rounded-lg">
                Explorar Opciones
            </a>
        </div>
    </div>
</section>

<section class="py-20 bg-primary-900">
    <div class="container mx-auto px-4 lg:px-8 text-center">
        <h2 class="font-montserrat font-black text-4xl lg:text-5xl text-white mb-6">
            ¿No Encontraste lo que Buscabas?
        </h2>
        <p class="text-primary-200 text-lg max-w-2xl mx-auto mb-8">
            Tenemos acceso a un portafolio exclusivo de propiedades fuera del mercado. Cuéntanos qué necesitas.
        </p>
        <a href="contacto.php" class="inline-block btn-gradient text-white font-montserrat font-bold text-base uppercase px-10 py-5 rounded-lg">
            <i class="fas fa-search mr-3"></i>Búsqueda Personalizada
        </a>
    </div>
</section>

<!-- Mortgage Calculator Section -->
<section id="hipoteca" class="py-20 bg-white">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="max-w-4xl mx-auto bg-primary-50 rounded-2xl shadow-xl overflow-hidden border border-gold-400/20">
            <div class="p-8 lg:p-12">
                <div class="text-center mb-10">
                    <h2 class="font-montserrat font-black text-3xl text-primary-900 mb-2">
                        Calculadora de <span class="text-gold-400">Hipoteca</span>
                    </h2>
                    <p class="text-primary-600">Estima tu cuota mensual para la propiedad de tus sueños</p>
                </div>

                <div class="grid md:grid-cols-2 gap-12">
                    <!-- Inputs -->
                    <div class="space-y-6">
                        <div>
                            <label class="block text-sm font-bold text-primary-900 mb-2">Precio de la Propiedad ($)</label>
                            <input type="number" id="calc-price" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-gold-400 focus:ring-1 focus:ring-gold-400 outline-none transition-all" placeholder="Ej: 450000" value="450000">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-bold text-primary-900 mb-2">Pago Inicial / Pie (%)</label>
                            <div class="relative">
                                <input type="number" id="calc-down" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-gold-400 focus:ring-1 focus:ring-gold-400 outline-none transition-all" placeholder="Ej: 20" value="20">
                                <span class="absolute right-4 top-3 text-gray-500">%</span>
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-bold text-primary-900 mb-2">Interés Anual (%)</label>
                                <input type="number" id="calc-rate" step="0.1" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-gold-400 focus:ring-1 focus:ring-gold-400 outline-none transition-all" placeholder="Ej: 4.5" value="4.5">
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-primary-900 mb-2">Plazo (Años)</label>
                                <select id="calc-term" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-gold-400 focus:ring-1 focus:ring-gold-400 outline-none transition-all">
                                    <option value="15">15 Años</option>
                                    <option value="20" selected>20 Años</option>
                                    <option value="25">25 Años</option>
                                    <option value="30">30 Años</option>
                                </select>
                            </div>
                        </div>

                        <button onclick="calculateMortgage()" class="w-full btn-gradient text-white font-montserrat font-bold uppercase py-4 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300">
                            Calcular Cuota
                        </button>
                    </div>

                    <!-- Result -->
                    <div class="bg-primary-900 rounded-xl p-8 flex flex-col justify-center items-center text-center relative overflow-hidden">
                        <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(#D4AF37 1px, transparent 1px); background-size: 20px 20px;"></div>
                        
                        <div class="relative z-10">
                            <p class="text-primary-300 text-sm uppercase tracking-widest mb-2">Cuota Mensual Estimada</p>
                            <h3 class="text-5xl lg:text-6xl font-montserrat font-black text-white mb-4">
                                $<span id="calc-result">0</span>
                            </h3>
                            <div class="w-20 h-1 bg-gold-400 mx-auto mb-6"></div>
                            <p class="text-xs text-primary-400 max-w-xs mx-auto">
                                *Esto es solo un estimado referencial. Las tasas y condiciones reales pueden variar según la institución financiera.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function calculateMortgage() {
        const price = parseFloat(document.getElementById('calc-price').value) || 0;
        const downPercent = parseFloat(document.getElementById('calc-down').value) || 0;
        const rate = parseFloat(document.getElementById('calc-rate').value) || 0;
        const years = parseInt(document.getElementById('calc-term').value) || 0;

        const downPayment = price * (downPercent / 100);
        const loanAmount = price - downPayment;
        
        const monthlyRate = (rate / 100) / 12;
        const numberOfPayments = years * 12;

        let monthlyPayment = 0;

        if (rate === 0) {
            monthlyPayment = loanAmount / numberOfPayments;
        } else {
            monthlyPayment = (loanAmount * monthlyRate * Math.pow(1 + monthlyRate, numberOfPayments)) / (Math.pow(1 + monthlyRate, numberOfPayments) - 1);
        }

        const formatter = new Intl.NumberFormat('en-US', {
            minimumFractionDigits: 0,
            maximumFractionDigits: 0,
        });

        document.getElementById('calc-result').innerText = formatter.format(monthlyPayment);
    }
    
    document.addEventListener('DOMContentLoaded', calculateMortgage);
</script>

<script>
    // Smooth scroll for category navigation
    document.querySelectorAll('.category-tab').forEach(tab => {
        tab.addEventListener('click', (e) => {
            e.preventDefault();
            const targetId = tab.getAttribute('href').substring(1);
            const targetSection = document.getElementById(targetId);
            const offset = 140; // Account for sticky header + nav
            const elementPosition = targetSection.getBoundingClientRect().top;
            const offsetPosition = elementPosition + window.pageYOffset - offset;

            window.scrollTo({
                top: offsetPosition,
                behavior: 'smooth'
            });

            // Update active tab
            document.querySelectorAll('.category-tab').forEach(t => {
                t.classList.remove('border-gold-500', 'text-gold-500');
            });
            tab.classList.add('border-gold-500', 'text-gold-500');
        });
    });
</script>

<?php include 'includes/footer.php'; ?>
