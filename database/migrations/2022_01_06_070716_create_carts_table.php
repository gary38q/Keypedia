<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id('Cart_ID');
            $table->unsignedBigInteger('User_ID');
            $table->unsignedBigInteger('Keyboard_ID');
            $table->integer('Quantity');
            $table->timestamps();

            $table->foreign("Keyboard_ID")->references("Keyboard_ID")->on("keyboards");
            $table->foreign("User_ID")->references("User_ID")->on("users");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
    }
}
