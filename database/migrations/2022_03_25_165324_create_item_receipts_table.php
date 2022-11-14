<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemReceiptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_receipt', function (Blueprint $table) {
            $table->id();
            $table->foreignId('receipt_id')->constrained();
            $table->foreignId('item_id')->constrained();
            $table->boolean('isInput')->nullable();

            $table->double('value0') ->default(0);
            $table->double('value1')->default(0);
            $table->double('value2')->default(0);
            $table->double('value4')->default(0);

            $table->timestamps();

            $table->unique(['receipt_id', 'item_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_receipt');
    }
}
