<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscriptions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            //runner
            $table->foreignId('runner_id')->constrained('runners');

            //inscription
            $table->string('category',50);
            $table->double('total', 8, 2)->unsigned();
            $table->foreignId('phase_id')->constrained();
            $table->foreignId('promocode_id')->nullable()->constrained();
            $table->foreignId('shirt_id')->nullable()->constrained();

            //pol
            $table->dateTime('resp_stamp', 0)->nullable();
            $table->dateTime('conf_stamp', 0)->nullable();
            $table->unsignedBigInteger('pol_id')->nullable();
            $table->string('pol_status',50)->nullable();
            $table->string('payment_method',50)->nullable();
            $table->string('payment_method_type',50)->nullable();
            $table->string('authorization_code',255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inscriptions', function (Blueprint $table) {
            $table->dropForeign('inscriptions_phase_id_foreign');
            $table->dropForeign('inscriptions_promocode_id_foreign');
            $table->dropForeign('inscriptions_runner_id_foreign');
        });
        Schema::dropIfExists('inscriptions');
    }
}
