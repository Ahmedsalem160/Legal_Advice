<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('officers', function (Blueprint $table) {
            $table->id();
            $table->string("username");
            $table->string("fullname");
            $table->string("nation_id")->unique();//14
            $table->string("army_id")->unique();//10
            $table->string("password");
            $table->string("role");
            $table->string("trainings");
            $table->date("date_of_birth");
            $table->date("date_of_start");
            $table->date("date_of_end");
            $table->string("address");
            $table->string("rank");//الرتبه او الدرجه
            $table->string("punishment");//جزاءات
            $table->integer("pension")->default(0);
            $table->integer("salary");
            $table->integer("wars_particepate")->default(0);
            //relations
            $table->integer("battalions_id")->unsigned();
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
        Schema::dropIfExists('officers');
    }
};
