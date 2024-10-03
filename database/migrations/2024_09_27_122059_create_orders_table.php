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
            $table->id(); // Primary key
            $table->string('status'); // Order status
            $table->decimal('total_amount', 10, 2); // Total amount

            // Foreign keys
            $table->unsignedBigInteger('customer_id'); // Foreign key for customer
            $table->unsignedBigInteger('payment_id'); // Foreign key for payment
            $table->unsignedBigInteger('shipping_id'); // Foreign key for shipping

            $table->timestamps(); // Timestamps

            // Define foreign keys with correct references
            $table->foreign('customer_id')
                  ->references('id') // Column in the referenced table
                  ->on('customers')   // Referenced table
                  ->onDelete('cascade');

            $table->foreign('payment_id')
                  ->references('id')
                  ->on('payments')
                  ->onDelete('cascade');

            $table->foreign('shipping_id')
                  ->references('id')
                  ->on('shippings') // Ensure this matches your actual table name
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};