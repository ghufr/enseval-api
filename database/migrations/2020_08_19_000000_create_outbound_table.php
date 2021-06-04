<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutboundTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outbound', function (Blueprint $table) {
            $table->bigIncrements('outbound_id');
            $table->foreignId('product_id')->constrained('product')->cascadeOnUpdate()->cascadeOnDelete();
            $table->unsignedBigInteger('warehouse_id');
            $table->foreign('warehouse_id')->references('warehouse_id')->on('warehouse')->cascadeOnUpdate()->cascadeOnDelete();
            $table->dateTime('date_outbound');
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
        Schema::dropIfExists('outbound');
    }
}
