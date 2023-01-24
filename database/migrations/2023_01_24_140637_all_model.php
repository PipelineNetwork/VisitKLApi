<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{


    public function up()
    {
        Schema::create('visitkl_events', function (Blueprint $table) {
            $table->id();
            $table->string('title', 240)->nullable();
            $table->timestamps();
        });

        Schema::create('visitkl_experiences', function (Blueprint $table) {
            $table->id();
            $table->string('title', 240)->nullable();
            $table->timestamps();
        });     
        
        Schema::create('visitkl_products', function (Blueprint $table) {
            $table->id();
            $table->string('title', 240)->nullable();
            $table->integer('price')->nullable();
            $table->timestamps();
        });    
        
        Schema::create('visitkl_purchases', function (Blueprint $table) {
            $table->id();
            $table->integer('amount')->nullable();
            $table->timestamps();
        });   

        Schema::create('visitkl_locations', function (Blueprint $table) {
            $table->id();
            $table->string('title', 240)->nullable();
            $table->timestamps();
        });           
        
        Schema::create('visitkl_offers', function (Blueprint $table) {
            $table->id();
            $table->string('title', 240)->nullable();
            $table->timestamps();
        });      
        
        Schema::create('visitkl_faqs', function (Blueprint $table) {
            $table->id();
            $table->string('question', 240)->nullable();
            $table->text('answer')->nullable();
            $table->timestamps();
        });     
        
        Schema::create('visitkl_medias', function (Blueprint $table) {
            $table->id();
            $table->string('url', 240)->nullable();
            $table->timestamps();
        });            
    }

    public function down()
    {
        //
    }
};
