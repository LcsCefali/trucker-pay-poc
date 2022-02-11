<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransfersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('bankName');
            $table->string('document');
            $table->string('name');
            $table->string('agency')->nullable();
            $table->string('account')->nullable();
            $table->string('accountType')->nullable();
            $table->float('value', 14, 2);
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
        Schema::dropIfExists('transfers');
    }
}
