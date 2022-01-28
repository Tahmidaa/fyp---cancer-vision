<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\breastForm;

class Form2Controller extends Controller
{
    public function createUserForm2(Request $request) {
        return view('form2');
      }
     
    
    
      //* Store Form data in database
      public function UserForm2(Request $request) {
        
          // Form validation
          $this->validate($request, [
              'Q6' => 'required',
              'Q7' => 'required',
              'Q8' => 'required',
              'Q9'=>'required',
              'Q10' => 'required'
           ]);
    
          //  Store data in database
          breastForm::create($request->all());
           
          $breastform = new breastForm([
            'Q6' => $request->get('Q6'),
            'Q7' => $request->get('Q7'),
            'Q8' => $request->get('Q8'),
            'Q9' => $request->get('Q9'),
            'Q10' => $request->get('Q10'),
          ]);
    
          if($breastform->Q6=='Yes' AND $breastform->Q7=='Yes' AND $breastform->Q8=='Yes' ){
            return view('/breastresult');
          }elseif($breastform->Q6=='Yes' AND $breastform->Q7=='Yes' AND $breastform->Q9=='Yes' ){
            return view('/breastresult');
          }elseif($breastform->Q6=='Yes' AND $breastform->Q7=='Yes' AND $breastform->Q10=='Yes' ){
            return view('/breastresult');
          }elseif($breastform->Q6=='Yes' AND $breastform->Q8=='Yes' AND $breastform->Q9=='Yes' ){
            return view('/breastresult');
          }elseif($breastform->Q6=='Yes' AND $breastform->Q8=='Yes' AND $breastform->Q10=='Yes' ){
            return view('/breastresult');
          }elseif($breastform->Q6=='Yes' AND $breastform->Q9=='Yes' AND $breastform->Q10=='Yes' ){
            return view('/breastresult');
          }elseif($breastform->Q7=='Yes' AND $breastform->Q8=='Yes' AND $breastform->Q9=='Yes' ){
            return view('/breastresult');
          }elseif($breastform->Q7=='Yes' AND $breastform->Q8=='Yes' AND $breastform->Q10=='Yes' ){
            return view('/breastresult');
          }elseif($breastform->Q7=='Yes' AND $breastform->Q9=='Yes' AND $breastform->Q10=='Yes' ){
            return view('/breastresult');  
          }elseif($breastform->Q8=='Yes' AND $breastform->Q9=='Yes' AND $breastform->Q10=='Yes' ){
            return view('/breastresult');  
        }else
          return view('/form3');
      }
}
