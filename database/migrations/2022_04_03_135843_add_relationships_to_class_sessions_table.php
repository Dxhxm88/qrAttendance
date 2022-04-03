<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipsToClassSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('class_sessions', function (Blueprint $table) {
            $table->foreignId('lecturer_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('classs_id')->nullable()->constrained()->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('class_sessions', function (Blueprint $table) {
            $table->dropColumn(['lecturer_id', 'classs_id']);
        });
    }
}
