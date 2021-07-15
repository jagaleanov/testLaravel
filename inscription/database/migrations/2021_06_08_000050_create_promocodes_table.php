<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromocodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promocodes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('code',50);
            $table->dateTime('expire_date', 0);
            $table->double('value', 8, 2)->unsigned();
            $table->enum('type', ['percent', 'disscount']);
            $table->mediumInteger ('uses_in')->unsigned();
            $table->mediumInteger ('uses_out')->unsigned();
            $table->tinyInteger('status')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('promocodes');
    }
}
