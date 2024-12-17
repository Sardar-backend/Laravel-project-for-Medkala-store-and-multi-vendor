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
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->timestamps();
        });

        Schema::create('brand_productcategory', function (Blueprint $table) {
            $table->id();
            $table->foreignId('brand_id')->constrained('brands')->onDelete('cascade');
            $table->foreignId('productcategory_id')->constrained('productcategory')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::table('products' , function  (Blueprint $table) {
            $table->unsignedBigInteger('Brand')->change();
            $table->foreign('Brand')->references('id')->on('brands')->onDelete('cascade');

        } );


    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
