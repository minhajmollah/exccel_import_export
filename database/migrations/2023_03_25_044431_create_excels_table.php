<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('excels', function (Blueprint $table) {
            $table->id();
            $table->string('txn_date');
            $table->integer('pin');
            $table->string('receiver_number');
            $table->string('amount');
            $table->string('sender_number');
            $table->string('address');
            $table->string('bank_name');
            $table->string('bank_branch');
            $table->string('branch_name');
            $table->string('country');
            $table->string('payment_mode');
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
        Schema::dropIfExists('excels');
    }
};
