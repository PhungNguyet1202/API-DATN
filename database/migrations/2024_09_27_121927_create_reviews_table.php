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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');  // Foreign key to Products
            $table->unsignedBigInteger('customer_id'); // Foreign key to Customers
            $table->integer('Rating');                // Rating value
            $table->text('Comment')->nullable();      // Review comment
            $table->timestamps();                     // created_at and updated_at
        
            // Foreign key constraints
            // $table->foreign('product_id')->references('products');
            // $table->foreign('customer_id')->references('customers');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade'); 
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');  

        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};