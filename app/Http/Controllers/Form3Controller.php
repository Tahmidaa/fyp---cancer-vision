<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\lungForm;

class Form3Controller extends Controller
{
    public function createUserForm3(Request $request) {
        return view('form3');
      }
     
    
      public function UserForm3(Request $request) {
        
          $this->validate($request, [
              'Q11' => 'required',
              'Q12' => 'required',
              'Q13' => 'required',
              'Q14'=>'required',
              'Q15' => 'required'
           ]);
    
          //  Store data in database
          lungForm::create($request->all());
           
          $lungform = new lungForm([
            'Q11' => $request->get('Q11'),
            'Q12' => $request->get('Q12'),
            'Q13' => $request->get('Q13'),
            'Q14' => $request->get('Q14'),
            'Q15' => $request->get('Q15'),
          ]);
    
          if($lungform->Q11=='Yes' AND $lungform->Q12=='Yes' AND $lungform->Q13=='Yes' ){
            return view('/lungresult');
          }elseif($lungform->Q11=='Yes' AND $lungform->Q12=='Yes' AND $lungform->Q14=='Yes' ){
            return view('/lungresult');
          }elseif($lungform->Q11=='Yes' AND $lungform->Q12=='Yes' AND $lungform->Q15=='Yes' ){
            return view('/lungresult');
          }elseif($lungform->Q11=='Yes' AND $lungform->Q13=='Yes' AND $lungform->Q14=='Yes' ){
            return view('/lungresult');
          }elseif($lungform->Q11=='Yes' AND $lungform->Q13=='Yes' AND $lungform->Q15=='Yes' ){
            return view('/lungresult');
          }elseif($lungform->Q11=='Yes' AND $lungform->Q14=='Yes' AND $lungform->Q15=='Yes' ){
            return view('/lungresult');
          }elseif($lungform->Q12=='Yes' AND $lungform->Q13=='Yes' AND $lungform->Q14=='Yes' ){
            return view('/lungresult');
          }elseif($lungform->Q12=='Yes' AND $lungform->Q13=='Yes' AND $lungform->Q15=='Yes' ){
            return view('/lungresult');
          }elseif($lungform->Q12=='Yes' AND $lungform->Q14=='Yes' AND $lungform->Q15=='Yes' ){
            return view('/lungresult');  
          }elseif($lungform->Q13=='Yes' AND $lungform->Q14=='Yes' AND $lungform->Q15=='Yes' ){
            return view('/lungresult');  
        }else
          return view('/form4');
      }
}
