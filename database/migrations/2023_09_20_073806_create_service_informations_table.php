<?php

use App\Models\Casket;
use App\Models\Hearse;
use App\Models\Informant;
use App\Models\DeceasedInformation;
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
        Schema::create('service_informations', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(DeceasedInformation::class)->nullable()->onDelete('cascade');
            $table->foreignIdFor(Informant::class)->nullable()->onDelete('cascade');
            $table->foreignIdFor(Casket::class)->nullable()->onDelete('cascade');
            $table->foreignIdFor(Hearse::class)->nullable()->onDelete('cascade');
            $table->string('gallonsOfWater')->nullable();
            $table->string('serviceType');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_informations');
    }
};
