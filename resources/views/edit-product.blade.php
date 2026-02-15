<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-10">

<h1 class="text-3xl font-bold mb-5">Edit Product</h1>

<form action="/update-product/{{ $product->id }}" method="POST" class="bg-white p-6 rounded shadow w-96">
    @csrf
    <div class="mb-4">
        <label class="block mb-1">Name</label>
        <input type="text" name="name" value="{{ $product->name }}" class="border p-2 w-full">
    </div>
    <div class="mb-4">
        <label class="block mb-1">Price</label>
        <input type="number" name="price" value="{{ $product->price }}" class="border p-2 w-full">
    </div>
    <div class="mb-4">
        <label class="block mb-1">Category</label>
        <input type="text" name="category" value="{{ $product->category }}" class="border p-2 w-full">
    </div>
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update Product</button>
</form>

</body>
</html>
