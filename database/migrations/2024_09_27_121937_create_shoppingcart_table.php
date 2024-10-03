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
        Schema::create('shopping_carts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id'); // Foreign key to Customers
            $table->enum('status', ['active', 'inactive', 'completed']); // Cart status
            $table->decimal('total_amount', 8, 2);  // Total price of items in the cart
            $table->integer('total_items');         // Total number of items in the cart
            $table->timestamps();                   // created_at and updated_at
        
            // Foreign key constraints
            // $table->foreign('customer_id')->references('customers');
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');  

        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shoppingcart');
    }
};