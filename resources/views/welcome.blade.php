<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen p-10">

<div class="max-w-4xl mx-auto bg-white shadow rounded p-8">
    <h1 class="text-4xl font-bold mb-6">Welcome, Ajay! 🚀</h1>
    <p class="mb-6 text-gray-700">This is your Laravel Products Dashboard. Use the buttons below to manage products.</p>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

        <a href="/show-products" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded text-center">
            Show Products
        </a>
        <a href="/add-product-form" class="bg-indigo-500 hover:bg-indigo-600 text-white px-4 py-2 rounded text-center">
            Add New Product
        </a>
    </div>

    <p class="mt-6 text-gray-500 text-sm">
        *You can edit or delete products from the "Show Products" page.*
    </p>
</div>

</body>
</html>
