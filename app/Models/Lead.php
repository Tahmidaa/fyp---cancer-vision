<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $fillable = [
            "sharing_with_us_do_you_have_any_history_of_cancer_in_your_family",
            "changes_in_your_body_functions_or_body_shape_ex_lumps_in_places", 
            "Have_you_lost_weight_suddenly_without_any_causee", 
            "fatigue_or_extreme_tiredness_that_doesn_t_get_better_with_rest", 
            "Do_you_get_unconscious_without_any_reason", 
            "Itchy_Skin_or_rashes", 
            "Night_sweats_and_frequent_infections", 
            "Shortness_of_breathe", 
            "Pain_in_belly_chest_bones_or_joint",
            "Lump_in_neck_armpit_or_groint",
            "Coughing_up_blood",
            "Coughing_that_gets_worse_or_doesnt_go_away",
            "Chest_Pain",
            "Chest_Infections_that_doesn_t_go_away_or_keep_coming_back",
            "Hoarness",
            "Pain_in_any_area_of_breast",
            "Lump_in_breast_or_underarm",
            "Change_in_the_shape_or_size_of_breast_or_nipples",
            "Irritation_or_dimpling_of_breast_skin",
            "Nipple_discharge_other_than_breast_milk",
            "Bleeding_other_than_periods",
            "Bleeding_in_menopause",
            "Bleeding_after_sexual_intercourse",
            "Pain_around_pelvise",
            "Count",
            "Cancer"

        ];
}
