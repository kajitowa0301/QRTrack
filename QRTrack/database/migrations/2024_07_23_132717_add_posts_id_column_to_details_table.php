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
        Schema::table('post_details', function (Blueprint $table) {
            //posts_idカラムを追加
            $table->unsignedBigInteger('posts_id')->after('details_id');
            //外部キー制約
            $table->foreign('posts_id')->references('posts_id')->on('posts');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('post_details', function (Blueprint $table) {
            //
            $table->dropForeign('post_details_posts_id_foreign');
            $table->dropColumn('posts_id');
        });
    }
};
