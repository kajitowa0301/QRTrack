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
        Schema::table('posts', function (Blueprint $table) {
            //users_idカラムを追加
            $table->unsignedBigInteger('users_id')->after('posts_id');
            //外部キー制約
            $table->foreign('users_id')->references('users_id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            //
            $table->dropForeign('posts_users_id_foreign');
            $table->dropColumn('users_id');
        });
    }
};
