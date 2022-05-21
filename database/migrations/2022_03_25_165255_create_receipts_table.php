<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceiptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receipts', function (Blueprint $table) {
            $table->id();
            $table->string('receipt_number')->nullable();
            $table->text('description')->nullable();

            $table->foreignId('created_by_user_id')->constrained('users');
            $table->foreignId('accepted_by_user_id')->nullable()->constrained('users');
            $table->timestamp('accepted_at')->nullable();
            $table->foreignId('receipt_type_id')->constrained('receipt_types');



            $table->foreignId('from_department_id')->nullable()->constrained('departments');
            $table->foreignId('to_department_id')->constrained('departments');
            $table->foreignId('must_approved_by_role_id')->nullable()->constrained('roles');


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
        Schema::dropIfExists('receipts');
    }
}
