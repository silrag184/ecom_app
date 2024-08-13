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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->integer('sub_category_id');
            $table->integer('brand_id');
            $table->integer('unit_id');
            $table->string('name')->nullable();
            $table->string('code')->nullable();
            $table->text('short_description')->nullable();
            $table->longText('long_description');
            $table->text('image')->nullable();
            $table->text('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('video_link')->nullable();
            $table->float('regular_price');
            $table->float('selling_price');
            $table->string('discount_type');
            $table->float('discount_amount');
            $table->integer('stock_amount');
            $table->integer('sales_count')->default(0);
            $table->integer('hit_count')->default(0);
            $table->tinyInteger('feature_status')->default(0);
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
