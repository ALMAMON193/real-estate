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
        Schema::create('property_locations', function (Blueprint $table) {
            $table->id ();
            $table->foreignIdFor (Property::class)->constrained ();
            $table->string ('address');
            $table->string ('city');
            $table->string ('state');
            $table->string ('zip');
            $table->string ('country');
            $table->float ('latitude');
            $table->float ('longitude');
            $table->timestamps ();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_locations');
    }
};
