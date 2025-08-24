<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('top_up_transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('diamond_id');
            $table->string('game_id');
            $table->decimal('amount', 12, 2);
            $table->string('status')->default('pending');
            $table->string('payment_code')->unique();
            $table->enum('payment_method', ['mbanking', 'ewallet']);
            $table->timestamps();

            $table->foreign('diamond_id')->references('id')->on('diamonds')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('top_up_transactions');
    }
};
