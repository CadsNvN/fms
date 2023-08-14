<?php

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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users');
            $table->string('order_number');
            $table->string('total_due');
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }

//     id: The primary key for the order record.
// user_id: A foreign key referencing the user who placed the order.
// order_number: A unique identifier for the order, often generated based on a pattern.
// order_date: The date and time when the order was placed.
// total_amount: The total amount of the order, including any taxes and shipping costs.
// status: The current status of the order (e.g., pending, processing, shipped, delivered, canceled, etc.).
// payment_status: The status of the payment for the order (e.g., paid, pending, failed).
// shipping_address: The address where the order should be shipped.
// billing_address: The billing address associated with the order.
// payment_method: The payment method used for the order (e.g., credit card, PayPal, etc.).
// shipping_method: The chosen shipping method for the order (e.g., standard, expedited).
// tracking_number: The tracking number for the shipment, if applicable.
// notes: Any additional notes or comments related to the order.
};
