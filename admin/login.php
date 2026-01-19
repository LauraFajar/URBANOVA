<?php
session_start();
include '../includes/db.php';

$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Credenciales hardcodeadas por simplicidad inicial
    $admin_user = 'admin';
    $admin_pass = 'admin123'; // Cambiar esto en producción

    if ($_POST['username'] === $admin_user && $_POST['password'] === $admin_pass) {
        $_SESSION['admin_logged_in'] = true;
        header("Location: index.php");
        exit;
    } else {
        $error = "Usuario o contraseña incorrectos";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Administrativo | URBANOVA</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Inter:wght@400&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary': { 900: '#0f172a' },
                        'gold': { 400: '#D4AF37' }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-primary-900 h-screen flex items-center justify-center font-inter">
    <div class="bg-white p-8 rounded-xl shadow-2xl w-full max-w-md">
        <div class="text-center mb-8">
            <h1 class="font-montserrat font-bold text-2xl text-primary-900">
                URBA<span class="text-gold-400">NOVA</span>
            </h1>
            <p class="text-gray-500 text-sm mt-2">Panel Administrativo</p>
        </div>

        <?php if ($error): ?>
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                <span class="block sm:inline"><?php echo $error; ?></span>
            </div>
        <?php endif; ?>

        <form method="POST" class="space-y-6">
            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    Usuario
                </label>
                <input class="shadow appearance-none border rounded w-full py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-gold-400" id="username" name="username" type="text" placeholder="admin" required>
            </div>
            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Contraseña
                </label>
                <input class="shadow appearance-none border rounded w-full py-3 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline focus:border-gold-400" id="password" name="password" type="password" placeholder="******************" required>
            </div>
            <div class="flex items-center justify-between">
                <button class="w-full bg-primary-900 hover:bg-gray-800 text-white font-bold py-3 px-4 rounded focus:outline-none focus:shadow-outline transition duration-300" type="submit">
                    <i class="fas fa-sign-in-alt mr-2"></i> Ingresar
                </button>
            </div>
        </form>
        <div class="mt-6 text-center">
            <a href="../index.php" class="text-sm text-gray-500 hover:text-gold-400">
                &larr; Volver al sitio web
            </a>
        </div>
    </div>
</body>
</html>
