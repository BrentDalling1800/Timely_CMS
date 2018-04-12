<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiteCms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_details', function (Blueprint $table) {
            $table->increments('id');
            $table->text("page_title");
            $table->text("page_seo");
            $table->text("page_author");
            $table->longtext("page_jumbtron");
            $table->longtext("page_body");
            $table->longtext("page_content");
            $table->longtext("page_auth");
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
        Schema::dropIfExists('page_details');
    }
}
