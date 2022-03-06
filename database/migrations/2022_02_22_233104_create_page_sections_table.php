<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_sections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('custom_id')->references('id')->on('customs')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('name_en');
            $table->string('name_ar');
            $table->string('title_en')->nullable();
            $table->string('title_ar')->nullable();
            $table->enum('type',['text','gallery','slider'])->default('text');
            $table->longText('content')->nullable();
            $table->longText('text_ar')->nullable();
            $table->longText('text_en')->nullable();
            $table->integer('order_view')->default(1);
            $table->boolean('active')->default(true);
            $table->string('photo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('page_sections');
    }
}
