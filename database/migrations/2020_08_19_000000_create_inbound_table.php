<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInboundTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inbound', function (Blueprint $table) {
            $table->bigIncrements('inbound_id');
            $table->foreignId('product_id')->constrained('product')->cascadeOnUpdate()->cascadeOnDelete();
            $table->unsignedBigInteger('warehouse_id');
            $table->foreign('warehouse_id')->references('warehouse_id')->on('warehouse')->cascadeOnUpdate()->cascadeOnDelete();
            $table->dateTime('date_inbound');
            $table->integer('cost');
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
        Schema::dropIfExists('inbound');
    }
}
