<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customs', function (Blueprint $table) {
            $table->id();
            $table->string('name_ar', 50);
            $table->string('name_en', 50);
            $table->string('title_ar')->nullable();
            $table->string('title_en')->nullable();
            $table->boolean('active')->default(true);
            $table->string('photo')->nullable();
            $table->string('seo_title_en')->nullable();
            $table->string('seo_title_ar')->nullable();
            $table->text('seo_description_en')->nullable();
            $table->text('seo_description_ar')->nullable();
            $table->jsonb('seo_tags_ar')->nullable();
            $table->jsonb('seo_tags_en')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('customs');
    }
}
