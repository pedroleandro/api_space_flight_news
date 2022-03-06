<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->unsignedBigInteger("launch")->after('id');
            $table->unsignedBigInteger("event")->after('id');

            $table->foreign('launch')->references('id')->on('launches')->onDelete('CASCADE');
            $table->foreign('event')->references('id')->on('events')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->dropColumn('launch');
            $table->dropColumn('event');
        });
    }
}
