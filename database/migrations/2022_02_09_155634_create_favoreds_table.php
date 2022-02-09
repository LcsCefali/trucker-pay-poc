<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFavoredsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favoreds', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->smallInteger('bankCode');
            $table->string('bankName');
            $table->integer('document');
            $table->string('name');
            $table->integer('agency');
            $table->integer('account');
            $table->string('accountType');
            // $table->float('value', 10, 2);
            $table->date('date');
            $table->boolean('isTruckPay');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('favoreds');
    }
}
