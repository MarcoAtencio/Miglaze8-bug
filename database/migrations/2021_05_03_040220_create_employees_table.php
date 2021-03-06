<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->integer('id_district');
            $table->integer('id_user');
            $table->integer('id_identificationdocument');
            $table->string('charge');
            $table->string('name');
            $table->string('surname');
            $table->integer('phone');
            $table->timestamp('email');
            $table->string('direction');
            $table->string('district');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
