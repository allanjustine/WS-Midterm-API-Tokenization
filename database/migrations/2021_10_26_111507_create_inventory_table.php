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
            $table->string('ProductName')->nullable();
            $table->integer('PartNumber')->nullable();
            $table->string("ProductLabel")->nullable();
            $table->date('StartingInventory')->nullable();
            $table->string('InventoryReceived')->nullable();
            $table->string('InventoryShipped')->nullable();
            $table->string('InventoryOnHand')->nullable();
            $table->smallInteger('MinimumRequired')->nullable();
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
