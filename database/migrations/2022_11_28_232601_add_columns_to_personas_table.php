<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('personas', function (Blueprint $table) {

            $table->string('telefono')->nullable();
            $table->string('direccion_tutor')->nullable();
            $table->string('telefono_tutor')->nullable();
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('personas', function (Blueprint $table) {
            $table->dropColumn('telefono');
            $table->dropColumn('direccion_tutor');
            $table->dropColumn('telefono_tutor');
        });
    }
};
