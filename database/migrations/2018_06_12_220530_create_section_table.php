<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //   Schema::create('sections', function (Blueprint $table) {
        //       $table->increments('id');
            
        //       $table->string('name', 50);
        //       $table->string('slug', 50);
        //       $table->integer('section_types_id')->unsigned();
        //       $table->integer('position')->nullable();
        //       $table->enum('status',['ACTIVE','INACTIVE'])->default('ACTIVE');

        //       $table->timestamps();

        //      //Relations
        //       $table->foreign('section_types_id')->references('id')->on('section_types')
        //           ->onDelete('cascade')
        //           ->onUpdate('cascade');
        //   });
         
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //   Schema::dropIfExists('section');
    }
}
