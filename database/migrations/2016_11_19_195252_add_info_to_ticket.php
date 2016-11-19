<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddInfoToTicket extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tickets', function($table) {
            $table->integer('client_id');
            $table->integer('responsible_area_id');
            $table->integer('responsible_person_id');
            $table->integer('module_id');
            $table->integer('request_id');
            $table->integer('priority_id');
            $table->integer('size_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tickets', function($table) {
            $table->dropColumn('client_id');
            $table->dropColumn('responsible_area_id');
            $table->dropColumn('responsible_person_id');
            $table->dropColumn('module_id');
            $table->dropColumn('request_id');
            $table->dropColumn('priority_id');
            $table->dropColumn('size_id');
        });
    }
}
