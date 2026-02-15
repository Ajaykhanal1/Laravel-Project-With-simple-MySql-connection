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
</tr>

@foreach($products as $product)

<tr>
<td class="border px-4 py-2">{{ $product->id }}</td>
<td class="border px-4 py-2">{{ $product->name }}</td>
<td class="border px-4 py-2">{{ $product->price }}</td>
<td class="border px-4 py-2">{{ $product->category }}</td>
</tr>

@endforeach

</table>

</body>
</html>
