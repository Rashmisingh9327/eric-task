<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumns1ToPatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patients', function (Blueprint $table) {
            $table->string('gender')->after('zip')->nullable();
            $table->string('age')->after('gender')->nullable();
            $table->string('height')->after('age')->nullable();
            $table->string('height_unit')->after('height')->nullable();
            $table->string('weight')->after('height_unit')->nullable();
            $table->string('weight_unit')->after('weight')->nullable();
            $table->string('birthday')->after('weight_unit')->nullable();

            $table->string('ethnicity')->after('birthday')->nullable();
            $table->string('diabetes')->after('ethnicity')->nullable();
            $table->string('smoke')->after('diabetes')->nullable();
            $table->string('fhhx')->after('smoke')->nullable();
            $table->string('lipid')->after('fhhx')->nullable();
            $table->string('htnmed')->after('lipid')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('patients', function (Blueprint $table) {
            $table->dropColumn('gender');
            $table->dropColumn('age');
            $table->dropColumn('height');
            $table->dropColumn('height_unit');
            $table->dropColumn('weight');
            $table->dropColumn('weight_unit');
            $table->dropColumn('birthday');
            $table->dropColumn('ethnicity');
            $table->dropColumn('diabetes');
            $table->dropColumn('smoke');
            $table->dropColumn('fhhx');
            $table->dropColumn('lipid');
            $table->dropColumn('htnmed');
        });
    }
}
