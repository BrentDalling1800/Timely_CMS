<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserAuthentications extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_tables', function (Blueprint $table) {
            $table->increments('user_id');
            $table->text('user_name');
            $table->text('user_email');
            $table->text('user_password');
            $table->text('user_package');
            $table->text('user_permissions');
            $table->text('user_company');
            $table->text('user_submission_codes');
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
        Schema::dropIfExists('user_tables');
    }
}
