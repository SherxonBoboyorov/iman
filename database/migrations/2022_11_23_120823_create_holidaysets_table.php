<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('holidaysets', function (Blueprint $table) {
            $table->id();

            $table->string('image');

            $table->string('title_ru');
            $table->string('title_uz');
            $table->string('title_en');

            $table->string('slug_ru');
            $table->string('slug_uz');
            $table->string('slug_en');

            $table->string('package_ru');
            $table->string('package_uz');
            $table->string('package_en');

            $table->string('weight');

            $table->string('compound_ru');
            $table->string('compound_uz');
            $table->string('compound_en');

            $table->string('best_before_date_ru');
            $table->string('best_before_date_uz');
            $table->string('best_before_date_en');

            $table->string('price')->nullable();

            $table->text('description_ru');
            $table->text('description_uz');
            $table->text('description_en');

            $table->text('meta_title_ru')->nullable();
            $table->text('meta_title_uz')->nullable();
            $table->text('meta_title_en')->nullable();

            $table->text('meta_description_ru')->nullable();
            $table->text('meta_description_uz')->nullable();
            $table->text('meta_description_en')->nullable();

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
        Schema::dropIfExists('holidaysets');
    }
};
