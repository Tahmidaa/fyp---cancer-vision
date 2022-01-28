<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCervicalFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cervical_forms', function (Blueprint $table) {
            $table->id();
            $table->string('Q16');
            $table->string('Q17');
            $table->string('Q18');
            $table->string('Q19');
            $table->string('Q20');
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
        Schema::dropIfExists('cervical_forms');
    }
}
