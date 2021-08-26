<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangedTimestambPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            \Illuminate\Support\Facades\DB::statement('ALTER TABLE `posts`
	CHANGE COLUMN `created_at` `created_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP AFTER `content`,
	CHANGE COLUMN `updated_at` `updated_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP AFTER `created_at`;');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            \Illuminate\Support\Facades\DB::statement('
    ALTER TABLE `posts`
	CHANGE COLUMN `created_at` `created_at` TIMESTAMP NULL AFTER `content`,
	CHANGE COLUMN `updated_at` `updated_at` TIMESTAMP NULL AFTER `created_at`');
        });
    }
}
