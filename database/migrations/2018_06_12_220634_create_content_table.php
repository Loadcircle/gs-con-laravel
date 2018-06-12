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
            
            $table->text('content')->nullable();
            $table->string('file', 128)->nullable();
            $table->enum('position',['1','2'])->default('1');
            $table->integer('section_id')->unsigned();
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
        Schema::dropIfExists('content');
    }
}
