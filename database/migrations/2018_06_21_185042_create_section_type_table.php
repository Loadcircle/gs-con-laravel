<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('section_types', function (Blueprint $table) {
        //     $table->increments('id');
            
        //     $table->string('name', 128);
        //     $table->enum('status', ['ACTIVE', 'INACTIVE']);

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
        // Schema::dropIfExists('section_type');
    }
}
