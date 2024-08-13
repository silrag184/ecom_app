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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('start_date')->nullable();
            $table->text('start_date_timestamp')->nullable();
            $table->text('start_datetime')->nullable();
            $table->text('start_datetime_timestamp')->nullable();
            $table->text('end_date')->nullable();
            $table->text('end_date_timestamp')->nullable();
            $table->text('end_datetime')->nullable();
            $table->text('end_datetime_timestamp')->nullable();
            $table->integer('percentage')->nullable();
            $table->text('image')->nullable();
            $table->text('description')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->tinyInteger('offer_type')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offers');
    }
};
