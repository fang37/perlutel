<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSympozaProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sympoza_profile', function (Blueprint $table) {
            $table->id();
            $table->char('user_id')->unique();
            $table->string('sso_identity')->nullable(false);;
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->nullable(false);;
            $table->string('afiliation')->nullable(false);;
            $table->string('status')->nullable(false);;
            $table->string('address')->nullable(false);;
            $table->string('phone_number')->nullable(false);;
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
        Schema::dropIfExists('sympoza_profile');
    }
}
