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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('slogan')->nullable();
            $table->text('domain_url')->nullable();
            $table->text('facebook_url')->nullable();
            $table->text('twitter_url')->nullable();
            $table->text('youtube_url')->nullable();
            $table->text('linked_in_url')->nullable();
            $table->text('instagram_url')->nullable();
            $table->text('logo_jpg')->nullable();
            $table->text('logo_png')->nullable();
            $table->text('favicon')->nullable();
            $table->text('trade_license')->nullable();
            $table->text('tin_certificate')->nullable();
            $table->text('ecab_certificate')->nullable();
            $table->text('payment_image')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('support_email')->nullable();
            $table->string('contact_mobile')->nullable();
            $table->string('support_mobile')->nullable();
            $table->string('fax_number')->nullable();
            $table->text('address')->nullable();
            $table->text('biography')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
