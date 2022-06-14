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
        Schema::create('articles', function (Blueprint $table) {
       

            $table->increments('id');

            $table->string('title');

            $table->longText('short_text')->nullable();

            $table->longText('full_text')->nullable();

            $table->unsignedInteger('category_id')->nullable();

            $table->foreign('category_id')->references('id')->on('categories');

            $table->string('author')->nullable();

            $table->foreign('author')->references('user_id')->on('users');

            

            $table->timestamps();

            $table->softDeletes();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
};
