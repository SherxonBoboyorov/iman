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
        Schema::create('opinions', function (Blueprint $table) {
            $table->id();

            $table->string('name_ru');
            $table->string('name_uz');
            $table->string('name_en');

            $table->string('company_name_ru');
            $table->string('company_name_uz');
            $table->string('company_name_en');

            $table->text('content_ru');
            $table->text('content_uz');
            $table->text('content_en');
            
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
        Schema::dropIfExists('opinions');
    }
};
