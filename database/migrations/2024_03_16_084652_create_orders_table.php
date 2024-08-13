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
            $table->integer('customer_id');
            $table->integer('courier_id')->default(0);
            $table->integer('shipping_area_id');
            $table->float('order_total', 10,2);
            $table->integer('tax_total');
            $table->integer('shipping_total');
            $table->text('order_date');
            $table->text('order_timestamp');
            $table->string('order_status')->default('Pending');
            $table->text('delivery_address');
            $table->string('delivery_status')->default('Pending');
            $table->text('delivery_date')->nullable();
            $table->text('delivery_timestamp')->nullable();
            $table->string('payment_method');
            $table->string('payment_amount')->default(0);
            $table->string('payment_status')->default('Pending');
            $table->text('payment_date')->nullable();
            $table->text('payment_timestamp')->nullable();
            $table->text('transaction_id')->nullable();
            $table->text('currency')->default('BDT');
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
};
