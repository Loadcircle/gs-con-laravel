<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('contact_status', function (Blueprint $table) {
        //     $table->increments('id');

        //     $table->string('name', 128);
        //     $table->enum('status',['ACTIVE','INACTIVE'])->default('ACTIVE');

        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('contact_status');
    }
}
