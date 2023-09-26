<?php

use App\Models\User;
use App\Models\ServiceInformation;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('service_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->constrained()->onDelete('cascade');
            $table->foreignId('service_information_id')->constrained('service_informations')->onDelete('cascade');
            $table->string('status')->default('pending');
            $table->uuid('requestNumber')->unique();
            $table->string('paymentMethod')->nullable();
            $table->string('ammountReceived')->nullable();
            $table->string('paymentDate')->nullable();
            $table->string('paidBy')->nullable();
            $table->string('totalDue')->nullable();
            $table->string('totalPaid')->nullable();
            $table->string('totalChange')->nullable();
            $table->string('isDiscounted')->nullable();
            $table->string('discountAmount')->nullable();
            $table->string('discountType')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_requests');
    }
};