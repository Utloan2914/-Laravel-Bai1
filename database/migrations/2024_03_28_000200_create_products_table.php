<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Product;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->decimal('price', 8, 2);
                $table->text('description');
                $table->timestamps();
            });

            Product::create(['name' => 'Product 1', 'price' => 7, 'description' => 'Description 1']);
            Product::create(['name' => 'Product 2', 'price' => 2, 'description' => 'Description 2']);
            Product::create(['name' => 'Product 3', 'price' => 10, 'description' => 'Description 3']);

        }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }


};

