<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExchangesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exchanges', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('from');
            $table->string('fromAccount');
            $table->string('to');
            $table->string('toAccount');
            $table->decimal('fromValue', 8, 2);
            $table->decimal('toValue', 8, 2);
            $table->enum('confirmed', ['yes', 'no', 'not_yet'])->default('not_yet');	
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
        Schema::dropIfExists('exchanges');
    }
}
