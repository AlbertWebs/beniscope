<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDetailsToProjectsTable extends Migration
{
    public function up()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->string('client');
            $table->string('location');
            $table->string('year');
            $table->string('duration')->nullable(); // Assuming this is the project duration
            $table->string('price')->nullable();    // Assuming this is the project price
        });
    }

    public function down()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn(['client', 'location', 'year', 'duration', 'price']);
        });
    }
}
