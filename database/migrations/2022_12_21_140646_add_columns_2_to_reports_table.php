<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumns2ToReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reports', function (Blueprint $table) {
            $table->integer('patient_id')->after('id')->nullable();
            $table->string('name')->after('patient_id')->nullable();
            $table->decimal('pr_interval')->after('balance_age')->nullable();
            $table->string('ekg_heart_age')->after('pr_interval')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reports', function (Blueprint $table) {
            $table->dropColumn('pr_interval');
            $table->dropColumn('ekg_heart_age');
        });
    }
}
