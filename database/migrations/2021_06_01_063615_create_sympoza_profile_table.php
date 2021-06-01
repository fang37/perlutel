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
            $table->string('sso_identity')->nullable(false)->change();;
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->nullable(false)->change();;
            $table->string('afiliation')->nullable(false)->change();;
            $table->string('status')->nullable(false)->change();;
            $table->string('address')->nullable(false)->change();;
            $table->string('phone_number')->nullable(false)->change();;
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
