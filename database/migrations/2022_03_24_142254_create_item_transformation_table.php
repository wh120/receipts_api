<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemTransformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_transformation', function (Blueprint $table) {
            $table->id();
            $table->foreignId('transformation_id')->constrained()->onDelete('cascade');
            $table->foreignId('item_id')->constrained();
            $table->double('value');
            $table->boolean('isInput');
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
        Schema::dropIfExists('item_transformation');
    }
}
