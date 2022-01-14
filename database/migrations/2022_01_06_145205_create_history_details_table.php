<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoryDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history_details', function (Blueprint $table) {
            $table->id('H_Detail_ID');
            $table->unsignedBigInteger('History_ID');
            $table->unsignedBigInteger("Keyboard_ID");
            $table->integer('Quantity');
            
            $table->foreign("Keyboard_ID")->references("Keyboard_ID")->on("keyboards");
            $table->foreign("History_ID")->references("History_ID")->on("histories");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('history_details');
    }
}
