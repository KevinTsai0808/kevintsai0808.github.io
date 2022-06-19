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
        Schema::create('opinion', function (Blueprint $table) {
            $table->id();
            $table->string('purpose', 100)->default('客服詢問');
            $table->string('name', 10);
            $table->string('email');
            $table->string('address')->nullable();
            $table->string('phone');
            $table->string('main', 50)->nullable();
            $table->string('content', 500);     
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
        Schema::dropIfExists('opinion');
    }
};
