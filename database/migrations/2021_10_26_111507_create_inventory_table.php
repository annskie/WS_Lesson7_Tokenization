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
            $table->integer("Record");
            $table->integer('PartNumber');
            $table->string('ProductName', 50)->nullable();
            $table->string('Manufacturer', 50)->nullable();;
            $table->string("ProductLabel", 50)->nullable();
            $table->string('InventoryReceived', 50)->nullable();
            $table->string('InventoryShipped', 50)->nullable();
            $table->string('InventoryOnHand', 50)->nullable();
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
