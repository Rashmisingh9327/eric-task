<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
			
			$table->string('status')->nullable();
			$table->string('type')->nullable();
			
			$table->string('gender')->nullable();
			$table->string('birthday')->nullable();
			
			$table->longText('parameters')->nullable();
			
			$table->longText('region')->nullable(); // FOR BMD //
			$table->string('bmd')->nullable(); // FOR BMD //
			$table->string('expected_bmd')->nullable(); // FOR BMD //
			$table->string('equivalent_age')->nullable(); // FOR BMD //
			
			$table->string('cac')->nullable(); // FOR BMD //
			$table->string('arterial_age')->nullable(); // FOR BMD //
			
			$table->string('right_hand_est_grip_strength')->nullable(); // FOR Grip Strength //
			$table->string('height')->nullable(); // FOR Grip Strength //
			$table->string('height_unit')->nullable(); // FOR Grip Strength //
			$table->string('weight')->nullable(); // FOR Grip Strength //
			$table->string('weight_unit')->nullable(); // FOR Grip Strength //
			$table->string('equivalent_age_for_grip_strength')->nullable(); // FOR Grip Strength //
			
			$table->string('fev_1')->nullable(); // FOR Lung //
			$table->string('equivalent_age_for_lung')->nullable(); // FOR Lung //
			
			$table->string('ethnicity')->nullable(); // FOR //
			$table->string('diabetes')->nullable(); // FOR //
			$table->string('smoke')->nullable(); // FOR //
			$table->string('fhhx')->nullable(); // FOR //
			$table->string('chol')->nullable(); // FOR //
			$table->string('hdl')->nullable(); // FOR //
			$table->string('sbp')->nullable(); // FOR //
			$table->string('lipid')->nullable(); // FOR //
			$table->string('htnmed')->nullable(); // FOR //
			
			$table->string('cac_riskscore')->nullable(); // FOR //
			$table->string('nocac_riskscore')->nullable(); // FOR //
			
			$table->string('biological_age')->nullable(); // FOR //
			$table->string('chances_of_dying')->nullable(); // FOR //
			
			$table->decimal('albumin_liver')->nullable(); // FOR /
			$table->decimal('alp_liver')->nullable(); // FOR /
			$table->decimal('creatinine_kidney')->nullable(); // FOR /
			$table->decimal('glucose_pancreas')->nullable(); // FOR /
			$table->decimal('crp_immune')->nullable(); // FOR /
			$table->decimal('lympho_immune')->nullable(); // FOR /
			$table->decimal('wbc_immune')->nullable(); // FOR /
			$table->decimal('mcv_bone_marrow')->nullable(); // FOR /
			$table->decimal('rdw_bone_marrow')->nullable(); // FOR /
			$table->integer('age')->nullable(); // FOR /

			$table->string('pwv')->nullable(); // FOR VASCULAR AGE/
			$table->string('vascular_age')->nullable(); // FOR VASCULAR AGE/

			$table->string('imt')->nullable(); // FOR VASCULAR AGE 2/
			$table->string('vascular_age_2')->nullable(); // FOR VASCULAR AGE 2/
			$table->string('percentile')->nullable(); // FOR VASCULAR AGE 2/
			
			$table->tinyInteger('deprecated')->default(0);
			
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reports');
    }
}
