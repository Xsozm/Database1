<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content', function (Blueprint $table) {
            $table->increments('id');
            $table->string("link");
            $table->date("uploaded_at");
            $table->integer("contributor_id")->unsigned();
            $table->foreign('contributor_id')->references('id')->on('contributor');


            $table->integer("subcategory_id")->unsigned();
            $table->foreign('subcategory_id')->references('id')->on('sub_category');
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
        Schema::dropIfExists('content');
    }
}
