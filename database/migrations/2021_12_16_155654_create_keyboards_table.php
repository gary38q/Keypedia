<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeyboardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keyboards', function (Blueprint $table) {
            $table->id("Keyboard_ID");
            $table->unsignedBigInteger("Category_ID");
            $table->string("Keyboard_Name");
            $table->integer("Keyboard_Price");
            $table->longText("Description");
            $table->string("Image_Link");
            $table->timestamps();

            $table->foreign("Category_ID")->references("Category_ID")->on("categories");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('keyboards');
    }
}
