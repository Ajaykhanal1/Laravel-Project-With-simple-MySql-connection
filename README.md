<img width="1918" height="1147" alt="image" src="https://github.com/user-attachments/assets/93cb0f75-e0ac-4a3e-a0b8-28fe40e3d304" />
<img width="1919" height="1140" alt="image" src="https://github.com/user-attachments/assets/579bc954-4d1a-40a6-92d9-a06f69013873" />

---
# **ONE-SHOT LARAVEL PRODUCTS CRUD (Simplified)**

### **Step 1: Create Database**

1. Open browser → phpMyAdmin:

   ```
   http://localhost/phpmyadmin
   ```
2. Create database: `laravel_db`

---

### **Step 2: Connect Database**

Open `.env` in your project:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_db
DB_USERNAME=root
DB_PASSWORD=
```

---

### **Step 3: Create Migration**

Run terminal command:

```bash
php artisan make:migration create_products_table
```

---

### **Step 4: Edit Migration**

Open `database/migrations/<timestamp>_create_products_table.php`:

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('price');
            $table->string('category');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
```

---

### **Step 5: Run Migration**

```bash
php artisan migrate
```

✅ Table `products` created.

---

### **Step 6: Create Model**

```bash
php artisan make:model Product
```

Edit `app/Models/Product.php`:

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'price', 'category'];
}
```

---

### **Step 7: Add Routes**

Edit `routes/web.php`:

```php
<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;

Route::get('/', function () {
    return "Laravel Products Program";
});

// Insert products
Route::get('/add-product', function () {
    Product::create([
        'name' => 'Laptop',
        'price' => 50000,
        'category' => 'Electronics'
    ]);
    Product::create([
        'name' => 'Mobile',
        'price' => 20000,
        'category' => 'Electronics'
    ]);
    Product::create([
        'name' => 'Shoes',
        'price' => 3000,
        'category' => 'Fashion'
    ]);
    return "Products Inserted Successfully";
});

// Show products in Blade + Tailwind
Route::get('/show-products', function () {
    $products = Product::all();
    return view('products', compact('products'));
});
```

---

### **Step 8: Create Blade View**

Create `resources/views/products.blade.php`:

```html
<!DOCTYPE html>
<html>
<head>
    <title>Products List</title>
    <!-- Tailwind CDN -->
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
```

---

### **Step 9: Run Laravel Server**

```bash
php artisan serve
```

---

### **Step 10: Test in Browser**

1. Insert products:

```
http://127.0.0.1:8000/add-product
```

You will see:

```
Products Inserted Successfully
```

2. Show products:

```
http://127.0.0.1:8000/show-products
```

You will see a **Tailwind styled table** with all products.

---

### ✅ **Project Structure Summary**

```
Laravel-Project
│
├── app/Models/Product.php
├── database/migrations/<timestamp>_create_products_table.php
├── resources/views/products.blade.php
├── routes/web.php
└── .env
```

---

This is a **fully working “one-shot” program** for beginners:

* No need Vite/Tailwind npm build (we use CDN)
* Fully functional insert + show products
* Tailwind table included

---
