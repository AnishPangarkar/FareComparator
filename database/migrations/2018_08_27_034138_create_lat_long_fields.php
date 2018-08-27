<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLatLongFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rides', function (Blueprint $table) {
            $table->string('fromlat')->nullable();
            $table->string('tolat')->nullable();
            $table->string('fromlong')->nullable();
            $table->string('tolong')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rides', function (Blueprint $table) {
            $table->dropColumn('fromlat');
            $table->dropColumn('tolat');
            $table->dropColumn('fromlong');
            $table->dropColumn('tolong');
        });
    }
}
