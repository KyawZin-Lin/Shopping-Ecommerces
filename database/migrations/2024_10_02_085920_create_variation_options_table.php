<?php

use App\Models\ShopOwner\ProductVariation;
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
        Schema::create('variation_options', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(ProductVariation::class);
            $table->string('option_name')->nullable();  // Name of the option (e.g., "Size", "Color")
            $table->string('option_value')->nullable();  // Value for the option (e.g., "Small", "Large", "Red")
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('variation_options');
    }
};
