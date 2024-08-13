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
        Schema::create('privacy_policies', function (Blueprint $table) {
            $table->id();
            $table->longText('shipping_policy');
            $table->longText('return_policy');
            $table->longText('terms_policy');
            $table->text('fashion_policy');
            $table->text('electronics_policy');
            $table->text('cosmetic_policy');
            $table->text('food_policy');
            $table->text('stationary_policy');
            $table->text('drug_policy');
            $table->text('construction_policy');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('privacy_policies');
    }
};
