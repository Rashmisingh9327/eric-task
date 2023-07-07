<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumns4ToReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reports', function (Blueprint $table) {
            $table->string('hrv', 100)->after('sleep_ahi')->nullable();
            $table->string('heart_age', 100)->after('hrv')->nullable();
            $table->string('heart_age_average', 100)->after('heart_age')->nullable();
            $table->string('musculoskeletal_age', 100)->after('heart_age_average')->nullable();
            $table->string('psychomotor_speed', 100)->after('musculoskeletal_age')->nullable();
            $table->string('brain_age', 100)->after('psychomotor_speed')->nullable();
            $table->string('lab_age', 100)->after('brain_age')->nullable();
            $table->string('bio_age', 100)->after('lab_age')->nullable();
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
            $table->dropColumn('hrv');
            $table->dropColumn('heart_age');
            $table->dropColumn('heart_age_average');
            $table->dropColumn('musculoskeletal_age');
            $table->dropColumn('psychomotor_speed');
            $table->dropColumn('brain_age');
            $table->dropColumn('lab_age');
            $table->dropColumn('bio_age');
        });
    }
}
