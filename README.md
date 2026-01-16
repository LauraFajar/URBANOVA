# URBANOVA

Sitio web premium para inmobiliaria desarrollado con PHP, Tailwind CSS y diseño contemporáneo.

![URBANOVA](https://img.shields.io/badge/Version-1.0.0-gold?style=for-the-badge)
![PHP](https://img.shields.io/badge/PHP-8.0+-blue?style=for-the-badge&logo=php)
![Tailwind](https://img.shields.io/badge/TailwindCSS-3.0-38bdf8?style=for-the-badge&logo=tailwindcss)

---

## 📋 Descripción

**URBANOVA Propiedades** es un sitio web completo y visualmente impactante diseñado para una inmobiliaria premium especializada en propiedades de lujo. El sitio combina elegancia, profesionalismo y funcionalidad para ofrecer una experiencia de usuario excepcional.

### ✨ Características Principales

- 🎨 **Diseño Premium**: Paleta elegante Navy/Azul oscuro + Dorado/Bronce
- 📱 **Responsive Design**: Mobile-first, adaptado a todos los dispositivos
- ⚡ **Performance**: Optimizado para carga rápida
- 🎯 **SEO Optimizado**: Meta tags, títulos y estructura semántica
- 🍔 **Menú Hamburguesa**: Navegación móvil funcional con animaciones
- 🖼️ **Imágenes Profesionales**: Fotografía inmobiliaria de alta calidad
- 📝 **Formulario de Contacto**: Completo y validado
- 🗺️ **Google Maps**: Integración de ubicación

---

## 🛠️ Stack Tecnológico

| Tecnología | Versión | Uso |
|------------|---------|-----|
| **PHP** | 8.0+ | Backend y estructura de includes |
| **Tailwind CSS** | 3.x (CDN) | Framework CSS para diseño responsive |
| **Google Fonts** | Latest | Tipografías: Montserrat (títulos) + Inter (cuerpo) |
| **Font Awesome** | 6.5.1 | Iconografía profesional |
| **JavaScript** | ES6 | Interactividad (menú móvil, scroll, etc.) |

---

## 📁 Estructura de Archivos

```
urbanova/
│
├── index.php                    # Página principal (inicio)
├── propiedades.php              # Catálogo de propiedades
├── contacto.php                 # Formulario de contacto
│
├── includes/
│   ├── header.php               # Header con navegación y menú móvil
│   └── footer.php               # Footer con información y redes sociales
│
├── .htaccess                    # Configuración Apache (URL rewriting)
└── README.md                    # Este archivo
```

---

## 🎨 Paleta de Colores

### Colores Principales

```css
/* Primary (Navy/Azul Oscuro) */
--primary-50: #f8fafc;
--primary-900: #0f172a;   /* Color principal oscuro */

/* Gold (Dorado/Acento) */
--gold-400: #D4AF37;      /* Dorado principal */
--gold-500: #C9A05C;      /* Dorado secundario */
--gold-600: #B8860B;      /* Dorado oscuro */
```

### Gradientes

- **CTA Buttons**: `linear-gradient(135deg, #D4AF37 0%, #C9A05C 100%)`
- **Decorative Lines**: `linear-gradient(90deg, #D4AF37 0%, #C9A05C 50%, #D4AF37 100%)`

---

## 🚀 Instalación y Deploy

### Requisitos Previos

- **Servidor Web**: Apache 2.4+ o Nginx
- **PHP**: Versión 8.0 o superior
- **Módulos Apache**: mod_rewrite habilitado
- **Navegadores**: Chrome, Firefox, Safari, Edge (últimas versiones)

### Instalación Local

#### Opción 1: XAMPP / WAMP / MAMP

```bash
# 1. Clonar o descargar el proyecto
git clone [repo-url] urbanova

# 2. Mover a la carpeta htdocs (XAMPP) o www (WAMP)
cp -r urbanova C:/xampp/htdocs/

# 3. Iniciar Apache desde el panel de XAMPP

# 4. Abrir en el navegador
http://localhost/urbanova
```

#### Opción 2: PHP Built-in Server (Desarrollo rápido)

```bash
# Navegar a la carpeta del proyecto
cd C:\xampp\htdocs\urbanova

# Iniciar servidor PHP
php -S localhost:8000

# Abrir en el navegador
http://localhost:8000
```

### Deploy en Producción

#### Hosting Compartido (cPanel)

1. **Comprimir el proyecto** en un archivo `.zip`
2. **Subir vía FTP** o File Manager de cPanel a `public_html/`
3. **Descomprimir** en el servidor
4. **Verificar permisos** (755 para carpetas, 644 para archivos)
5. **Configurar dominio** en cPanel
6. **Habilitar HTTPS** (Let's Encrypt gratuito en cPanel)

#### VPS / Cloud (Ubuntu/Debian)

```bash
# Instalar Apache y PHP
sudo apt update
sudo apt install apache2 php libapache2-mod-php

# Habilitar mod_rewrite
sudo a2enmod rewrite

# Copiar archivos al directorio web
sudo cp -r urbanova /var/www/html/

# Configurar permisos
sudo chown -R www-data:www-data /var/www/html/urbanova
sudo chmod -R 755 /var/www/html/urbanova

# Reiniciar Apache
sudo systemctl restart apache2
```

---

## 🎯 Páginas del Sitio

### 1. **index.php** (Página Principal)

**Secciones:**
- Hero full-screen con CTA
- Intro/Bienvenida con stats
- Servicios destacados (6 cards)
- Nuestra historia
- CTA Banner
- Galería social (Instagram style)

### 2. **propiedades.php** (Catálogo)

**Categorías:**
- Apartamentos Premium
- Penthouses Exclusivos (destacado)
- Casas de Diseño
- Oficinas Corporativas
- Terrenos Exclusivos
- Locales Comerciales

**Características:**
- Navegación sticky por categorías
- Cards con detalles completos
- Badges (Popular, Nuevo, Exclusivo)
- Precios y especificaciones

### 3. **contacto.php** (Formulario)

**Columna Izquierda:**
- Horarios de atención
- Ubicación
- Teléfono
- WhatsApp
- Email
- Redes sociales

**Columna Derecha:**
- Formulario completo
- Campos: nombre, email, teléfono, fecha, horario, tipo de propiedad, presupuesto, motivo, comentarios
- Validación HTML5
- Diseño dark elegante

**Footer:**
- Mapa de Google Maps
- Indicaciones de transporte

---

## 🎨 Personalización

### Cambiar Colores

Edita el archivo `includes/header.php` en la sección `<script>` de Tailwind Config:

```javascript
tailwind.config = {
    theme: {
        extend: {
            colors: {
                'primary': {
                    // Cambia estos valores
                    900: '#0f172a',  // Tu color oscuro
                },
                'gold': {
                    // Cambia estos valores
                    400: '#D4AF37',  // Tu color de acento
                }
            }
        }
    }
}
```

### Cambiar Tipografías

1. Ve a [Google Fonts](https://fonts.google.com)
2. Selecciona tus fuentes
3. Reemplaza el `<link>` en `includes/header.php`
4. Actualiza el CSS en `<style>`:

```css
h1, h2, h3, h4, h5, h6, .font-display {
    font-family: 'TuFuenteTitulos', sans-serif;
}

* {
    font-family: 'TuFuenteCuerpo', sans-serif;
}
```

### Actualizar Información de Contacto

Edita `includes/footer.php` y `contacto.php`:

- Dirección
- Teléfono
- Email
- Horarios
- Redes sociales
- Mapa (actualizar URL del iframe con tu ubicación)

### Agregar Imágenes Reales

Reemplaza las rutas de imagen en:
- `index.php`
- `propiedades.php`
- `contacto.php`

```php
<!-- Ejemplo -->
<img src="/images/tu-imagen.jpg" alt="Descripción">
```

---

## 📧 Configuración del Formulario de Contacto

El formulario actualmente es solo frontend. Para hacerlo funcional:

### Opción 1: PHP Mail (Básico)

Crea `process-form.php`:

```php
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $telefono = htmlspecialchars($_POST['telefono']);
    $mensaje = htmlspecialchars($_POST['comentarios']);
    
    $to = "info@urbanova.com";
    $subject = "Nueva consulta desde el sitio web";
    $body = "Nombre: $nombre\nEmail: $email\nTeléfono: $telefono\n\nMensaje:\n$mensaje";
    $headers = "From: $email";
    
    if (mail($to, $subject, $body, $headers)) {
        header("Location: contacto.php?success=1");
    } else {
        header("Location: contacto.php?error=1");
    }
    exit;
}
?>
```

Actualiza el `<form>` en `contacto.php`:

```html
<form action="process-form.php" method="POST">
```

### Opción 2: PHPMailer (Recomendado)

```bash
composer require phpmailer/phpmailer
```

### Opción 3: Servicios Externos

- **Formspree**: https://formspree.io
- **EmailJS**: https://www.emailjs.com
- **SendGrid**: https://sendgrid.com

---

## 🔒 Seguridad

### Buenas Prácticas Implementadas

- ✅ Headers de seguridad en `.htaccess`
- ✅ Prevención de directory listing
- ✅ Protección de archivos ocultos
- ✅ CSRF protection en formularios (implementar token)
- ✅ Validación HTML5 en inputs

### Recomendaciones Adicionales

1. **HTTPS**: Siempre usa SSL/TLS en producción
2. **Validación PHP**: Valida datos del servidor además del cliente
3. **Sanitización**: Usa `htmlspecialchars()` y `filter_var()`
4. **Rate Limiting**: Limita envíos del formulario
5. **Backups**: Configura backups automáticos regulares

---

## 📱 Responsive Design

El sitio está optimizado para:

- 📱 **Mobile**: 320px - 767px
- 📱 **Tablet**: 768px - 1023px
- 💻 **Desktop**: 1024px - 1439px
- 🖥️ **Large Desktop**: 1440px+

Breakpoints de Tailwind CSS utilizados:
- `sm:` 640px
- `md:` 768px
- `lg:` 1024px
- `xl:` 1280px
- `2xl:` 1536px

---

## ⚡ Optimización de Performance

### Implementado

- ✅ Tailwind CSS vía CDN (producción: usar build optimizado)
- ✅ Font Awesome CDN
- ✅ Lazy loading de imágenes
- ✅ Compresión GZIP (`.htaccess`)
- ✅ Cache headers

### Mejoras Futuras

- [ ] Compilar Tailwind CSS (purge unused styles)
- [ ] Minificar JavaScript
- [ ] Optimizar imágenes (WebP format)
- [ ] Implementar Service Worker
- [ ] CDN para assets estáticos

---

## 🐛 Solución de Problemas

### El menú móvil no funciona

**Causa**: JavaScript no se está ejecutando  
**Solución**: Verifica que el código JS esté antes de `</body>` en `header.php`

### Las URLs no funcionan sin .php

**Causa**: `mod_rewrite` no habilitado  
**Solución**:
```bash
sudo a2enmod rewrite
sudo systemctl restart apache2
```

### Los estilos no se aplican correctamente

**Causa**: CDN de Tailwind no carga  
**Solución**: Verifica conexión a internet o usa versión local

### Imágenes no se muestran

**Causa**: Rutas incorrectas  
**Solución**: Usa rutas absolutas desde la raíz del proyecto

---

## 📄 Licencia

Este proyecto es privado y pertenece a **URBANOVA Propiedades**. Todos los derechos reservados.

Para uso comercial o redistribución, contactar a: info@urbanova.com

---

## 👨‍💻 Autor

Desarrollado por **Antigravity AI**  
Fecha: Enero 2026

---

## 📞 Soporte

Para consultas sobre el código o customización:

- 📧 Email: info@urbanova.com
- 💬 WhatsApp: +54 9 11 2345-6789
- 🌐 Web: www.urbanova.com

---

## 🎉 Próximas Funcionalidades

- [ ] Panel de administración (backend)
- [ ] Sistema de login para agentes
- [ ] Base de datos MySQL
- [ ] Búsqueda avanzada de propiedades
- [ ] Filtros dinámicos (precio, ubicación, tipo)
- [ ] Sistema de favoritos
- [ ] Comparador de propiedades
- [ ] Tour virtual 360°
- [ ] Chat en vivo
- [ ] Blog inmobiliario
- [ ] Calculadora de hipoteca
- [ ] Newsletter/Email marketing

