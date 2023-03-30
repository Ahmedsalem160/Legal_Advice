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
        Schema::create('lawers', function (Blueprint $table) {
            $table->id();
            $table->string("username");
            $table->string("fullname");
            $table->string("nation_id")->unique();//14
            $table->string("Syndicate_id")->unique();
            $table->string("email");
            $table->string("password");
            $table->string("address");
            $table->string("rank");
            $table->string("grad_year");
            $table->string("phone");
            $table->string("photo")->default(null);
            $table->string("salary");
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
        Schema::dropIfExists('lawers');
    }
};
