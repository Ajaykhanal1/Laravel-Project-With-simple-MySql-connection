<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-10">

<h1 class="text-3xl font-bold mb-5">Add New Product</h1>

<form action="/save-product" method="POST" class="bg-white p-6 rounded shadow w-96">
    @csrf
    <div class="mb-4">
        <label class="block mb-1">Name</label>
        <input type="text" name="name" class="border p-2 w-full" required>
    </div>
    <div class="mb-4">
        <label class="block mb-1">Price</label>
        <input type="number" name="price" class="border p-2 w-full" required>
    </div>
    <div class="mb-4">
        <label class="block mb-1">Category</label>
        <input type="text" name="category" class="border p-2 w-full" required>
    </div>
    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Add Product</button>
</form>

<br>
<a href="/show-products" class="text-blue-600">Back to Products List</a>

</body>
</html>
