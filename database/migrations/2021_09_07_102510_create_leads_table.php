<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string('sharing_with_us_do_you_have_any_history_of_cancer_in_your_family');
            $table->string('changes_in_your_body_functions_or_body_shape_ex_lumps_in_places');
            $table->string('Have_you_lost_weight_suddenly_without_any_causee');
            $table->string('fatigue_or_extreme_tiredness_that_doesn_t_get_better_with_rest');
            $table->string('Do_you_get_unconscious_without_any_reason');
            $table->string('Itchy_Skin_or_rashes');
            $table->string('Night_sweats_and_frequent_infections');
            $table->string('Shortness_of_breathe');
            $table->string('Pain_in_belly_chest_bones_or_joint');
            $table->string('Lump_in_neck_armpit_or_groint');
            $table->string('Coughing_up_blood');
            $table->string('Coughing_that_gets_worse_or_doesnt_go_away');
            $table->string('Chest_Pain');
            $table->string('Chest_Infections_that_doesn_t_go_away_or_keep_coming_back');
            $table->string('Hoarness');
            $table->string('Pain_in_any_area_of_breast');
            $table->string('Lump_in_breast_or_underarm');
            $table->string('Change_in_the_shape_or_size_of_breast_or_nipples');
            $table->string('Irritation_or_dimpling_of_breast_skin');
            $table->string('Nipple_discharge_other_than_breast_milk');
            $table->string('Bleeding_other_than_periods');
            $table->string('Bleeding_in_menopause');
            $table->string('Bleeding_after_sexual_intercourse');
            $table->string('Pain_around_pelvise');
            $table->string('Vaginal_discharge_with_strong_odour');
            $table->string('Count');
            $table->string('Cancer');



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
        Schema::dropIfExists('leads');
    }
}