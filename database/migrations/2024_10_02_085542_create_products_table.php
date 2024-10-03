<?php

use App\Models\ShopOwner\Brand;
use App\Models\ShopOwner\Category;
use App\Models\ShopOwner\SubCategory;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Brand::class)->nullable();
            $table->foreignIdFor(Category::class)->nullable();
            $table->foreignIdFor(SubCategory::class)->nullable();
            $table->string('name');
            $table->text('description')->nullable();
            $table->integer('price');
            $table->integer('discount_price')->default(0);
            $table->integer('total_quantity')->default(0);
            $table->boolean('has_variations')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
