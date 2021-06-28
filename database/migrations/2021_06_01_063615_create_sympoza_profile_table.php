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
            $table->string('sso_identity')->nullable();;
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->nullable();;
            $table->string('afiliation')->nullable();;
            $table->string('status')->nullable();;
            $table->string('address')->nullable();;
            $table->string('phone_number')->nullable();;
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
