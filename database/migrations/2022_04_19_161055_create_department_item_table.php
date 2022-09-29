<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('department_item', function (Blueprint $table) {
            $table->id();
            $table->foreignId('department_id')->constrained();
            $table->foreignId('item_id')->constrained();
            $table->float('value' ,16,4 ,);
            $table->json('values')->nullable();

            $table->unique(array('department_id', 'item_id'));

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('department_item');
    }
}
