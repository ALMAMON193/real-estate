<?php

use App\Models\Property;
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
        Schema::create('nearby_places', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Property::class)->constrained()->onDelete('cascade');
            $table->string('category');
             $table->string('name');
            $table->decimal('distance', 6, 2)->nullable();
            $table->decimal('rating', 2, 1)->nullable();
            $table->string('map_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nearby_places');
    }
};
