<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('histories', function (Blueprint $table) {
            $table->unsignedBigInteger('users_id');
            $table->unsignedBigInteger('posts_id');

            //複合主キーの設定
            $table->primary(['users_id', 'posts_id']);

            //外部キーの設定
            $table->foreign('users_id')->references('users_id')->on('users');
            $table->foreign('posts_id')->references('posts_id')->on('posts');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('histories');
    }
};
