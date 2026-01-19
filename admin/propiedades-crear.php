<?php
include 'auth.php';
check_auth();
include '../includes/db.php';

$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $conn->real_escape_string($_POST['titulo']);
    $descripcion = $conn->real_escape_string($_POST['descripcion']);
    $precio = $conn->real_escape_string($_POST['precio']); // Ej: $450K
    $ubicacion = $conn->real_escape_string($_POST['ubicacion']);
    $tipo = $conn->real_escape_string($_POST['tipo']);
    $dormitorios = (int)$_POST['dormitorios'];
    $banos = (float)$_POST['banos'];
    $area = (int)$_POST['area'];
    $etiqueta = $conn->real_escape_string($_POST['etiqueta']);
    $imagen_url = $conn->real_escape_string($_POST['imagen_url']);

    $sql = "INSERT INTO propiedades (titulo, descripcion, precio, ubicacion, tipo, dormitorios, banos, area, etiqueta, imagen_url)
            VALUES ('$titulo', '$descripcion', '$precio', '$ubicacion', '$tipo', '$dormitorios', '$banos', '$area', '$etiqueta', '$imagen_url')";

    if ($conn->query($sql) === TRUE) {
        $message = "Propiedad agregada correctamente.";
    } else {
        $message = "Error: " . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nueva Propiedad | Urbanova Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-2xl mx-auto bg-white p-8 rounded shadow">
        <h1 class="text-2xl font-bold mb-6">Agregar Nueva Propiedad</h1>
        
        <?php if ($message): ?>
            <div class="mb-4 p-4 bg-green-100 text-green-700 rounded"><?php echo $message; ?></div>
        <?php endif; ?>

        <form method="POST" class="space-y-4">
            <div>
                <label class="block text-sm font-bold mb-1">Título</label>
                <input type="text" name="titulo" class="w-full border rounded p-2" required placeholder="Ej: Penthouse de Lujo">
            </div>
            
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-bold mb-1">Precio</label>
                    <input type="text" name="precio" class="w-full border rounded p-2" required placeholder="Ej: $450K">
                </div>
                <div>
                    <label class="block text-sm font-bold mb-1">Ubicación</label>
                    <input type="text" name="ubicacion" class="w-full border rounded p-2" required placeholder="Ej: Zona Norte">
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-bold mb-1">Tipo</label>
                    <select name="tipo" class="w-full border rounded p-2">
                        <option value="apartamento">Apartamento</option>
                        <option value="penthouse">Penthouse</option>
                        <option value="casa">Casa</option>
                        <option value="oficina">Oficina</option>
                        <option value="terreno">Terreno</option>
                        <option value="comercial">Local Comercial</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-bold mb-1">Etiqueta (Badge)</label>
                    <select name="etiqueta" class="w-full border rounded p-2">
                        <option value="">Ninguna</option>
                        <option value="Venta">Venta</option>
                        <option value="Alquiler">Alquiler</option>
                        <option value="Nuevo">Nuevo</option>
                        <option value="Destacado">Destacado</option>
                    </select>
                </div>
            </div>

            <div class="grid grid-cols-3 gap-4">
                <div>
                    <label class="block text-sm font-bold mb-1">Dormitorios</label>
                    <input type="number" name="dormitorios" class="w-full border rounded p-2">
                </div>
                <div>
                    <label class="block text-sm font-bold mb-1">Baños</label>
                    <input type="number" name="banos" step="0.5" class="w-full border rounded p-2">
                </div>
                <div>
                    <label class="block text-sm font-bold mb-1">Area (m²)</label>
                    <input type="number" name="area" class="w-full border rounded p-2">
                </div>
            </div>

            <div>
                <label class="block text-sm font-bold mb-1">URL de Imagen</label>
                <input type="text" name="imagen_url" class="w-full border rounded p-2" placeholder="https://...">
                <p class="text-xs text-gray-500 mt-1">Usa una URL externa o local (assets/img/...)</p>
            </div>

            <div>
                <label class="block text-sm font-bold mb-1">Descripción</label>
                <textarea name="descripcion" class="w-full border rounded p-2" rows="3"></textarea>
            </div>

            <div class="flex justify-end gap-4 mt-6">
                <a href="propiedades.php" class="py-2 px-4 text-gray-600 hover:text-gray-900">Cancelar</a>
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Guardar Propiedad</button>
            </div>
        </form>
    </div>
</body>
</html>
