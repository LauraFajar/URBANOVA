<?php
$page_title = "Contacto y Consultas | URBANOVA Propiedades";
$page_description = "Agenda tu consulta gratuita con nuestros expertos inmobiliarios. Estamos aquí para ayudarte a encontrar tu inversión perfecta.";
$current_page = "contacto";
include 'includes/header.php';
include 'includes/db.php';

$message = "";
$message_type = ""; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($db_connected) {
        // 1. Crear tabla si no existe (Auto-migración para facilitar despliegue)
        $sql_create = "CREATE TABLE IF NOT EXISTS consultas (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            nombre VARCHAR(100) NOT NULL,
            email VARCHAR(100) NOT NULL,
            telefono VARCHAR(50),
            fecha VARCHAR(20),
            horario VARCHAR(50),
            tipo_propiedad VARCHAR(50),
            presupuesto VARCHAR(50),
            motivo VARCHAR(50),
            comentarios TEXT,
            fecha_envio TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )";
        
        if ($conn->query($sql_create) === TRUE) {
            // 2. Recoger y sanitizar datos
            $nombre = $conn->real_escape_string($_POST['nombre']);
            $email = $conn->real_escape_string($_POST['email']);
            $telefono = $conn->real_escape_string($_POST['telefono']);
            $fecha = $conn->real_escape_string($_POST['fecha']);
            $horario = $conn->real_escape_string($_POST['horario']);
            $tipo_propiedad = $conn->real_escape_string($_POST['tipo_propiedad']);
            $presupuesto = $conn->real_escape_string($_POST['presupuesto']);
            $motivo = $conn->real_escape_string($_POST['motivo']);
            $comentarios = $conn->real_escape_string($_POST['comentarios']);

            // 3. Insertar datos
            $sql_insert = "INSERT INTO consultas (nombre, email, telefono, fecha, horario, tipo_propiedad, presupuesto, motivo, comentarios)
            VALUES ('$nombre', '$email', '$telefono', '$fecha', '$horario', '$tipo_propiedad', '$presupuesto', '$motivo', '$comentarios')";

            if ($conn->query($sql_insert) === TRUE) {
                $message = "¡Consulta enviada con éxito! Nos pondremos en contacto contigo pronto.";
                $message_type = "success";
            } else {
                $message = "Error al guardar tu consulta: " . $conn->error;
                $message_type = "error";
            }
        } else {
            $message = "Error al configurar la base de datos: " . $conn->error;
            $message_type = "error";
        }
    } else {
        $message = "Error de conexión con la base de datos. Por favor intenta más tarde.";
        $message_type = "error";
    }
}
?>

<section class="relative h-[50vh] flex items-center justify-center bg-primary-900">
    <div class="absolute inset-0 opacity-10">
        <div class="w-full h-full" style="background-image: repeating-linear-gradient(45deg, transparent, transparent 35px, #D4AF37 35px, #D4AF37 36px);"></div>
    </div>
    
    <div class="container mx-auto px-4 lg:px-8 z-10 text-center">
        <h1 class="font-montserrat font-black text-5xl lg:text-6xl text-white leading-tight mb-6">
            Hablemos de tu <span class="text-gold-400">Inversión</span>
        </h1>
        <p class="text-primary-100 text-lg lg:text-xl font-inter max-w-2xl mx-auto">
            Agenda una consulta gratuita y descubre las mejores oportunidades del mercado
        </p>
        
        <div class="w-32 h-1 bg-gradient-to-r from-transparent via-gold-400 to-transparent mx-auto mt-8"></div>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="container mx-auto px-4 lg:px-8">
        
        <div class="grid lg:grid-cols-5 gap-12">
            
            <div class="lg:col-span-2 space-y-8">
                
                <div class="bg-primary-900 rounded-xl p-8 border-l-4 border-gold-400 shadow-xl">
                    
                    <h2 class="font-montserrat font-bold text-2xl text-white mb-6">
                        Información de Contacto
                    </h2>
                    
                    <div class="space-y-6">
                        <div class="flex items-start space-x-4 pb-6 border-b border-primary-700">
                            <div class="w-12 h-12 bg-gold-400 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-clock text-white text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-montserrat font-bold text-white text-sm uppercase tracking-wide mb-2">
                                    Horarios de Atención
                                </h3>
                                <div class="space-y-1 text-sm text-primary-200">
                                    <p><span class="text-gold-400 font-medium">Lunes a Viernes:</span> 9:00 AM - 7:00 PM</p>
                                    <p><span class="text-gold-400 font-medium">Sábados:</span> 10:00 AM - 4:00 PM</p>
                                    <p><span class="text-gold-400 font-medium">Domingos:</span> Cerrado</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4 pb-6 border-b border-primary-700">
                            <div class="w-12 h-12 bg-gold-400 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-map-marker-alt text-white text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-montserrat font-bold text-white text-sm uppercase tracking-wide mb-2">
                                    Nuestra Oficina
                                </h3>
                                <p class="text-primary-200 text-sm leading-relaxed">
                                    Av. Empresarial 2500, Piso 12<br>
                                    Torre Ejecutiva, Zona Financiera<br>
                                    Ciudad, País
                                </p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4 pb-6 border-b border-primary-700">
                            <div class="w-12 h-12 bg-gold-400 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-phone-alt text-white text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-montserrat font-bold text-white text-sm uppercase tracking-wide mb-2">
                                    Teléfono
                                </h3>
                                <a href="tel:+5491123456789" class="text-gold-400 hover:text-gold-300 text-lg font-semibold transition-colors duration-300">
                                    +54 9 11 2345-6789
                                </a>
                                <p class="text-primary-300 text-xs mt-1">Lunes a Sábado</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4 pb-6 border-b border-primary-700">
                            <div class="w-12 h-12 bg-green-500 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fab fa-whatsapp text-white text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-montserrat font-bold text-white text-sm uppercase tracking-wide mb-2">
                                    WhatsApp
                                </h3>
                                <a href="https://wa.me/5491123456789?text=Hola,%20me%20interesa%20consultar%20sobre%20propiedades" 
                                   target="_blank"
                                   class="text-green-400 hover:text-green-300 text-lg font-semibold transition-colors duration-300">
                                    +54 9 11 2345-6789
                                </a>
                                <p class="text-primary-300 text-xs mt-1">Respuesta inmediata</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4 pb-6 border-b border-primary-700">
                            <div class="w-12 h-12 bg-gold-400 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-envelope text-white text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-montserrat font-bold text-white text-sm uppercase tracking-wide mb-2">
                                    Email
                                </h3>
                                <a href="mailto:info@urbanova.com" class="text-gold-400 hover:text-gold-300 text-base font-semibold transition-colors duration-300 break-all">
                                    info@urbanova.com
                                </a>
                                <p class="text-primary-300 text-xs mt-1">Respuesta en 24hrs</p>
                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="mt-6 p-4 bg-gold-400/10 border border-gold-400/30 rounded-lg">
                        <p class="text-gold-400 text-sm flex items-start">
                            <i class="fas fa-info-circle mr-2 mt-0.5"></i>
                            <span>
                                <strong>Visitas Privadas:</strong> Disponibles 24/7 con cita previa. 
                                También atendemos grupos y consultas corporativas.
                            </span>
                        </p>
                    </div>
                    
                    <div class="mt-8">
                        <h3 class="font-montserrat font-bold text-white text-sm uppercase tracking-wide mb-4">
                            Síguenos en Redes
                        </h3>
                        <div class="flex space-x-3">
                            <a href="#" class="w-12 h-12 bg-primary-800 hover:bg-gradient-to-br hover:from-purple-600 hover:to-pink-600 rounded-lg flex items-center justify-center transition-all duration-300 group">
                                <i class="fab fa-instagram text-primary-200 group-hover:text-white text-xl"></i>
                            </a>
                            <a href="#" class="w-12 h-12 bg-primary-800 hover:bg-blue-600 rounded-lg flex items-center justify-center transition-all duration-300 group">
                                <i class="fab fa-facebook-f text-primary-200 group-hover:text-white text-xl"></i>
                            </a>
                            <a href="#" class="w-12 h-12 bg-primary-800 hover:bg-blue-500 rounded-lg flex items-center justify-center transition-all duration-300 group">
                                <i class="fab fa-linkedin-in text-primary-200 group-hover:text-white text-xl"></i>
                            </a>
                            <a href="#" class="w-12 h-12 bg-primary-800 hover:bg-red-600 rounded-lg flex items-center justify-center transition-all duration-300 group">
                                <i class="fab fa-youtube text-primary-200 group-hover:text-white text-xl"></i>
                            </a>
                        </div>
                    </div>
                    
                </div>
                
            </div>
            
            <div class="lg:col-span-3">
                
                <div class="bg-primary-900 rounded-xl shadow-2xl overflow-hidden">
                    
                    <div class="bg-gradient-to-r from-gold-400 to-gold-600 p-6 lg:p-8">
                        <h2 class="font-montserrat font-black text-3xl text-white mb-2">
                            Agenda tu Consulta Gratuita
                        </h2>
                        <p class="text-white/90 text-sm">
                            Completa el formulario y un experto te contactará en menos de 24 horas
                        </p>
                    </div>
                    
                    <div class="p-6 lg:p-8">
                        
                        <?php if (!empty($message)): ?>
                            <div class="mb-6 p-4 rounded-lg <?php echo $message_type == 'success' ? 'bg-green-100 text-green-700 border border-green-200' : 'bg-red-100 text-red-700 border border-red-200'; ?>">
                                <div class="flex items-center">
                                    <i class="fas <?php echo $message_type == 'success' ? 'fa-check-circle' : 'fa-exclamation-circle'; ?> mr-3 text-xl"></i>
                                    <p class="font-medium"><?php echo $message; ?></p>
                                </div>
                            </div>
                        <?php endif; ?>

                        
                        <form action="#" method="POST" class="space-y-6">
                            
                            <div>
                                <label for="nombre" class="block text-primary-200 text-sm font-medium mb-2">
                                    Nombre Completo <span class="text-gold-400">*</span>
                                </label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                        <i class="fas fa-user text-gold-400"></i>
                                    </div>
                                    <input 
                                        type="text" 
                                        id="nombre" 
                                        name="nombre" 
                                        required
                                        class="w-full bg-primary-800 border border-primary-700 focus:border-gold-400 focus:ring-2 focus:ring-gold-400/50 text-white placeholder-primary-400 rounded-lg pl-12 pr-4 py-3 transition-all duration-300"
                                        placeholder="Tu nombre completo">
                                </div>
                            </div>
                            
                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label for="email" class="block text-primary-200 text-sm font-medium mb-2">
                                        Email <span class="text-gold-400">*</span>
                                    </label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                            <i class="fas fa-envelope text-gold-400"></i>
                                        </div>
                                        <input 
                                            type="email" 
                                            id="email" 
                                            name="email" 
                                            required
                                            class="w-full bg-primary-800 border border-primary-700 focus:border-gold-400 focus:ring-2 focus:ring-gold-400/50 text-white placeholder-primary-400 rounded-lg pl-12 pr-4 py-3 transition-all duration-300"
                                            placeholder="tu@email.com">
                                    </div>
                                </div>
                                <div>
                                    <label for="telefono" class="block text-primary-200 text-sm font-medium mb-2">
                                        Teléfono
                                    </label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                            <i class="fas fa-phone text-gold-400"></i>
                                        </div>
                                        <input 
                                            type="tel" 
                                            id="telefono" 
                                            name="telefono"
                                            class="w-full bg-primary-800 border border-primary-700 focus:border-gold-400 focus:ring-2 focus:ring-gold-400/50 text-white placeholder-primary-400 rounded-lg pl-12 pr-4 py-3 transition-all duration-300"
                                            placeholder="+54 9 11 1234-5678">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label for="fecha" class="block text-primary-200 text-sm font-medium mb-2">
                                        Fecha Preferida
                                    </label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                            <i class="fas fa-calendar text-gold-400"></i>
                                        </div>
                                        <input 
                                            type="date" 
                                            id="fecha" 
                                            name="fecha"
                                            class="w-full bg-primary-800 border border-primary-700 focus:border-gold-400 focus:ring-2 focus:ring-gold-400/50 text-white placeholder-primary-400 rounded-lg pl-12 pr-4 py-3 transition-all duration-300">
                                    </div>
                                </div>
                                <div>
                                    <label for="horario" class="block text-primary-200 text-sm font-medium mb-2">
                                        Horario Preferido
                                    </label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                            <i class="fas fa-clock text-gold-400"></i>
                                        </div>
                                        <select 
                                            id="horario" 
                                            name="horario"
                                            class="w-full bg-primary-800 border border-primary-700 focus:border-gold-400 focus:ring-2 focus:ring-gold-400/50 text-white rounded-lg pl-12 pr-4 py-3 transition-all duration-300 appearance-none cursor-pointer">
                                            <option value="">Seleccionar horario</option>
                                            <option value="manana">Mañana (9:00 AM - 12:00 PM)</option>
                                            <option value="mediodia">Mediodía (12:00 PM - 3:00 PM)</option>
                                            <option value="tarde">Tarde (3:00 PM - 7:00 PM)</option>
                                            <option value="flexible">Flexible</option>
                                        </select>
                                        <div class="absolute inset-y-0 right-0 pr-4 flex items-center pointer-events-none">
                                            <i class="fas fa-chevron-down text-gold-400 text-sm"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div>
                                <label for="tipo_propiedad" class="block text-primary-200 text-sm font-medium mb-2">
                                    Tipo de Propiedad de Interés
                                </label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                        <i class="fas fa-building text-gold-400"></i>
                                    </div>
                                    <select 
                                        id="tipo_propiedad" 
                                        name="tipo_propiedad"
                                        class="w-full bg-primary-800 border border-primary-700 focus:border-gold-400 focus:ring-2 focus:ring-gold-400/50 text-white rounded-lg pl-12 pr-4 py-3 transition-all duration-300 appearance-none cursor-pointer">
                                        <option value="">Seleccionar tipo</option>
                                        <option value="apartamento">Apartamento</option>
                                        <option value="penthouse">Penthouse</option>
                                        <option value="casa">Casa</option>
                                        <option value="oficina">Oficina</option>
                                        <option value="terreno">Terreno</option>
                                        <option value="comercial">Local Comercial</option>
                                        <option value="otro">Otro</option>
                                    </select>
                                    <div class="absolute inset-y-0 right-0 pr-4 flex items-center pointer-events-none">
                                        <i class="fas fa-chevron-down text-gold-400 text-sm"></i>
                                    </div>
                                </div>
                            </div>
                            
                            <div>
                                <label for="presupuesto" class="block text-primary-200 text-sm font-medium mb-2">
                                    Presupuesto Aproximado
                                </label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                        <i class="fas fa-dollar-sign text-gold-400"></i>
                                    </div>
                                    <select 
                                        id="presupuesto" 
                                        name="presupuesto"
                                        class="w-full bg-primary-800 border border-primary-700 focus:border-gold-400 focus:ring-2 focus:ring-gold-400/50 text-white rounded-lg pl-12 pr-4 py-3 transition-all duration-300 appearance-none cursor-pointer">
                                        <option value="">Seleccionar rango</option>
                                        <option value="100-300k">$100K - $300K</option>
                                        <option value="300-500k">$300K - $500K</option>
                                        <option value="500-800k">$500K - $800K</option>
                                        <option value="800k-1m">$800K - $1M</option>
                                        <option value="1m+">$1M+</option>
                                        <option value="consultar">Consultar</option>
                                    </select>
                                    <div class="absolute inset-y-0 right-0 pr-4 flex items-center pointer-events-none">
                                        <i class="fas fa-chevron-down text-gold-400 text-sm"></i>
                                    </div>
                                </div>
                            </div>
                            
                            <div>
                                <label for="motivo" class="block text-primary-200 text-sm font-medium mb-2">
                                    Motivo de Consulta
                                </label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                        <i class="fas fa-tags text-gold-400"></i>
                                    </div>
                                    <select 
                                        id="motivo" 
                                        name="motivo"
                                        class="w-full bg-primary-800 border border-primary-700 focus:border-gold-400 focus:ring-2 focus:ring-gold-400/50 text-white rounded-lg pl-12 pr-4 py-3 transition-all duration-300 appearance-none cursor-pointer">
                                        <option value="">Seleccionar motivo</option>
                                        <option value="compra">Quiero comprar</option>
                                        <option value="venta">Quiero vender</option>
                                        <option value="alquiler">Busco alquilar</option>
                                        <option value="inversion">Inversión inmobiliaria</option>
                                        <option value="tasacion">Solicitar tasación</option>
                                        <option value="asesoria">Asesoría general</option>
                                        <option value="otro">Otro</option>
                                    </select>
                                    <div class="absolute inset-y-0 right-0 pr-4 flex items-center pointer-events-none">
                                        <i class="fas fa-chevron-down text-gold-400 text-sm"></i>
                                    </div>
                                </div>
                            </div>
                            
                            <div>
                                <label for="comentarios" class="block text-primary-200 text-sm font-medium mb-2">
                                    Comentarios Adicionales
                                </label>
                                <div class="relative">
                                    <textarea 
                                        id="comentarios" 
                                        name="comentarios" 
                                        rows="4"
                                        class="w-full bg-primary-800 border border-primary-700 focus:border-gold-400 focus:ring-2 focus:ring-gold-400/50 text-white placeholder-primary-400 rounded-lg px-4 py-3 transition-all duration-300 resize-none"
                                        placeholder="Cuéntanos más sobre lo que buscas..."></textarea>
                                    <div class="absolute top-3 right-3 pointer-events-none">
                                        <i class="fas fa-comment-dots text-gold-400"></i>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="flex items-start space-x-3">
                                <input 
                                    type="checkbox" 
                                    id="privacy" 
                                    name="privacy" 
                                    required
                                    class="w-5 h-5 bg-primary-800 border-2 border-primary-700 rounded focus:ring-2 focus:ring-gold-400 text-gold-400 cursor-pointer mt-0.5">
                                <label for="privacy" class="text-primary-300 text-sm leading-relaxed cursor-pointer">
                                    Acepto la <a href="#" class="text-gold-400 hover:text-gold-300 underline">política de privacidad</a> y 
                                    autorizo el tratamiento de mis datos para recibir información sobre propiedades.
                                </label>
                            </div>
                            
                            <button 
                                type="submit"
                                class="w-full btn-gradient text-white font-montserrat font-bold text-base uppercase tracking-wide py-4 rounded-lg flex items-center justify-center space-x-3">
                                <i class="fas fa-paper-plane"></i>
                                <span>Enviar Consulta</span>
                            </button>
                            
                            <p class="text-center text-primary-400 text-xs italic">
                                <i class="fas fa-shield-alt mr-1"></i>
                                Tus datos están protegidos. Respetamos tu privacidad.
                            </p>
                            
                        </form>
                        
                    </div>
                    
                </div>
                
            </div>
            
        </div>
        
    </div>
</section>

<section class="py-20 bg-primary-900">
    <div class="container mx-auto px-4 lg:px-8">
        
        <div class="text-center mb-12">
            <h2 class="font-montserrat font-black text-4xl lg:text-5xl text-white mb-4">
                ¿Cómo <span class="text-gold-400">Llegar?</span>
            </h2>
            <p class="text-primary-200 text-lg">
                Encuéntranos en la Zona Financiera, Torre Ejecutiva Piso 12
            </p>
        </div>
        
        <div class="rounded-2xl overflow-hidden shadow-2xl border-2 border-gold-400 aspect-video">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.0168878484855!2d-58.381559684771755!3d-34.603722380459845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccacf7e4d3f63%3A0x5d6c72e6b516ef60!2sObelisco!5e0!3m2!1ses!2sar!4v1234567890123!5m2!1ses!2sar" 
                width="100%" 
                height="100%" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade"
                class="grayscale hover:grayscale-0 transition-all duration-500"></iframe>
        </div>
        
        <div class="mt-8 grid md:grid-cols-3 gap-6 text-center">
            <div class="bg-primary-800 rounded-lg p-6 border border-gold-400/30">
                <i class="fas fa-car text-gold-400 text-3xl mb-3"></i>
                <h3 class="font-montserrat font-bold text-white text-lg mb-2">En Auto</h3>
                <p class="text-primary-300 text-sm">Estacionamiento privado disponible para clientes</p>
            </div>
            <div class="bg-primary-800 rounded-lg p-6 border border-gold-400/30">
                <i class="fas fa-subway text-gold-400 text-3xl mb-3"></i>
                <h3 class="font-montserrat font-bold text-white text-lg mb-2">Metro/Subte</h3>
                <p class="text-primary-300 text-sm">Línea C - Estación Diagonal Norte (5 min caminando)</p>
            </div>
            <div class="bg-primary-800 rounded-lg p-6 border border-gold-400/30">
                <i class="fas fa-bus text-gold-400 text-3xl mb-3"></i>
                <h3 class="font-montserrat font-bold text-white text-lg mb-2">Ã“mnibus</h3>
                <p class="text-primary-300 text-sm">LÃ­neas: 10, 17, 24, 50, 99, 152</p>
            </div>
        </div>
        
    </div>
</section>

<?php include 'includes/footer.php'; ?>
