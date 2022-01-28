<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBreastFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('breast_forms', function (Blueprint $table) {
            $table->id();
            $table->string('Q6');
            $table->string('Q7');
            $table->string('Q8');
            $table->string('Q9');
            $table->string('Q10');
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
        Schema::dropIfExists('breast_forms');
    }
}
