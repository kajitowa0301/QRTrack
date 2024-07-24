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
        Schema::create('users', function (Blueprint $table) {
            $table->id('users_id'); //users_id
            $table->string('users_name'); //ユーザー名
            $table->string('users_mail')->unique(); //メールアドレス
            $table->timestamp('email_verified_at')->nullable(); 
            $table->string('password'); //パスワード
            $table->rememberToken();
            $table->timestamps(); //作成日時、更新日時
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
