<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory', function (Blueprint $table) {
            $table->id();
            $table->string('ProductName');
            $table->integer('PartNumber');
            $table->string("ProductLabel");
            $table->date('StartingInventory');
            $table->string('InventoryReceived');
            $table->string('InventoryShipped');
            $table->string('InventoryOnHand');
            $table->smallInteger('MinimumRequired');
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
        Schema::dropIfExists('inventory');
    }
}
