<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * 
     */
    public function up()
    {
        //  Schema::create('contacts', function (Blueprint $table) {
        //      $table->increments('id');

        // $table->string('ip', 128);
        // $table->string('name', 128);
        // $table->string('lastname', 128)->nullable();
        // $table->string('phone', 128);
        // $table->string('email', 128);
        // $table->string('send_to', 128);
        // $table->text('message');
        // $table->integer('status')->unsigned();

        //      //Relations
        //      $table->foreign('status')->references('id')->on('contact_status')
        //          ->onDelete('cascade')
        //          ->onUpdate('cascade');

        //      $table->timestamps();
        //  });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //  Schema::dropIfExists('contacts');
    }
}
