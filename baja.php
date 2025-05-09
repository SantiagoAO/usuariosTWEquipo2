<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto max-w-md mt-10 p-6 bg-white rounded-lg shadow-md">
        <h1 class="text-2xl font-bold text-center text-gray-800 mb-6">Eliminar Usuario</h1>
        <form action="procesar_baja.php" method="POST" class="space-y-4">
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email del Usuario:</label>
                <input type="email" id="email" name="email" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <button type="submit" class="w-full py-3 bg-red-500 text-white font-semibold rounded-md hover:bg-red-600 transition duration-300">Eliminar</button>
        </form>
    </div>
</body>
</html>