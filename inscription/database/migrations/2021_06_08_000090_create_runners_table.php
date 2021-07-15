<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRunnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('runners', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            //user
            $table->string('document_number', 20);
            $table->enum('document_type', ['TI', 'CC', 'CE', 'PAS']);
            $table->string('email');
            $table->string('name');
            $table->string('last_name');
            $table->enum('gender', ['F', 'M']);
            $table->date('birthdate');
            $table->enum('blood', ['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-']);
            $table->string('country', 50)->nullable();
            $table->string('state', 100);
            $table->string('city', 100);
            $table->string('address', 150);
            $table->string('phone', 15);
            $table->string('eps', 50);
            
            $table->foreign('country')->references('name')->on('countries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('runners', function (Blueprint $table) {
            $table->dropForeign('runners_country_foreign');
        });
        Schema::dropIfExists('runners');
    }
}
