<?php

use App\Models\Casket;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('casket_images', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Casket::class)->constrained()->onDelete('cascade');
            $table->string('pathImages')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('casket_images');
    }
};
