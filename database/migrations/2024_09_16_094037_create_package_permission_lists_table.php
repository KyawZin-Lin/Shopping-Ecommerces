<?php

use App\Models\Admin\Package;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Permission;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('package_permission_lists', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Package::class);
            $table->foreignIdFor(Permission::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('package_permission_lists');
    }
};
