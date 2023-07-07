<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumns3ToReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reports', function (Blueprint $table) {
            $table->string('max_pulse_wave')->after('ekg_heart_age')->nullable();
            $table->string('24_hr_bp_average')->after('max_pulse_wave')->nullable();
            $table->string('skin_age')->after('24_hr_bp_average')->nullable();
            $table->string('left_breast_thermography')->after('skin_age')->nullable();
            $table->string('right_breast_thermography')->after('left_breast_thermography')->nullable();
            $table->string('tanita_metabolic_age')->after('right_breast_thermography')->nullable();
            $table->string('bf_percent')->after('tanita_metabolic_age')->nullable();
            $table->string('vo_2_max')->after('bf_percent')->nullable();
            $table->string('trudiagnostic_truage')->after('vo_2_max')->nullable();
            $table->string('sleep_ahi')->after('trudiagnostic_truage')->nullable();
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
            $table->dropColumn('24_hr_bp_average');
            $table->dropColumn('skin_age');
            $table->dropColumn('left_breast_thermography');
            $table->dropColumn('right_breast_thermography');
            $table->dropColumn('tanita_metabolic_age');
            $table->dropColumn('bf_percent');
            $table->dropColumn('vo_2_max');
            $table->dropColumn('trudiagnostic_truage');
            $table->dropColumn('sleep_ahi');
        });
    }
}
