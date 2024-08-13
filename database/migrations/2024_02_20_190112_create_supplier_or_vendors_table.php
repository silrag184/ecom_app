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
        Schema::create('supplier_or_vendors', function (Blueprint $table) {
            $table->id();
            $table->integer('supplier_type')->comment('0-supplier,1-vendor,2-both');
            $table->text('person_image')->nullable();
            $table->string('name');
            $table->string('phone');
            $table->string('email')->nullable(true)->unique();
            $table->string('company_name');
            $table->string('address');
            $table->string('bank_account');
            $table->string('trade_lic');
            $table->text('trad_lic_image');
            $table->string('nid');
            $table->string('nid_image');
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supplier_or_vendors');
    }
};
