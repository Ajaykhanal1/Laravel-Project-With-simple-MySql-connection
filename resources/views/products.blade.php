<!DOCTYPE html>
<html>
<head>

<title>Products List</title>

<script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="bg-gray-100 p-10">

<h1 class="text-3xl font-bold mb-5">Products List</h1>

<table class="table-auto border w-full bg-white">
    <tr class="bg-gray-200">
        <th class="border px-4 py-2">ID</th>
        <th class="border px-4 py-2">Name</th>
        <th class="border px-4 py-2">Price</th>
        <th class="border px-4 py-2">Category</th>
        <th class="border px-4 py-2">Actions</th>
    </tr>
    @foreach($products as $product)
    <tr>
        <td class="border px-4 py-2">{{ $product->id }}</td>
        <td class="border px-4 py-2">{{ $product->name }}</td>
        <td class="border px-4 py-2">{{ $product->price }}</td>
        <td class="border px-4 py-2">{{ $product->category }}</td>
        <td class="border px-4 py-2 flex gap-2">
            <a href="/edit-product/{{ $product->id }}" class="bg-yellow-500 text-white px-2 py-1 rounded">Edit</a>
            <a href="/delete-product/{{ $product->id }}" class="bg-red-500 text-white px-2 py-1 rounded"
                    onclick="return confirm('Are you sure you want to delete this product?');">Delete</a>
        </td>
    </tr>
    @endforeach
</table>
<a href="/add-product-form" class="bg-green-500 text-white px-4 py-2 rounded mb-4 inline-block">
    + Add New Product
</a>


</body>
</html>
