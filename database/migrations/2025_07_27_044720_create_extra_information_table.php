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
        Schema::create('extra_information', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor (Property::class)->constrained();
            $table->integer('bedroom')->default(0);
            $table->integer('bathroom')->default(0);
            $table->integer('kitchen')->default(0);
            $table->integer('window')->default(0);
            $table->integer('balcony')->default(0);
            $table->integer('living_room')->default(0);
            $table->integer('dining_room')->default(0);
            $table->integer('garage')->default(0);
            $table->boolean('has_garden')->default(false);
            $table->boolean('has_rooftop')->default(false);
            $table->date('build_year');
            $table->text('note')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('extra_information');
    }
};
