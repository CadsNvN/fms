<?php

use App\Models\Casket;
use App\Models\DeceasedInformation;
use App\Models\Hearse;
use App\Models\Informant;
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
        Schema::create('service_informations', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(DeceasedInformation::class)->constrained()->onDelete('cascade');
            $table->foreignIdFor(Informant::class)->constrained()->onDelete('cascade');
            $table->foreignIdFor(Casket::class)->constrained()->onDelete('cascade');
            $table->foreignIdFor(Hearse::class)->constrained()->onDelete('cascade');
            $table->string('serviceType');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_information');
    }
};
