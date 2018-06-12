<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('name', 50);
            $table->integer('section_id')->unsigned();
            $table->integer('position')->unsigned();
            $table->enum('status',['ACTIVE','INACTIVE'])->default('ACTIVE');

            $table->timestamps();


            //Relations
            $table->foreign('section_id')->references('id')->on('section')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu');
        
    }
}
