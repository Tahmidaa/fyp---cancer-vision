<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\colonForm;

class Form5Controller extends Controller
{
    public function createUserForm5(Request $request) {
        return view('form3');
      }
     
    
    
      //* Store Form data in database
      public function UserForm5(Request $request) {
        
          // Form validation
          $this->validate($request, [
              'Q21' => 'required',
              'Q22' => 'required',
              'Q23' => 'required',
              'Q24'=>'required',
              'Q25' => 'required'
           ]);
    
          //  Store data in database
          colonForm::create($request->all());
           
          $colonform = new colonForm([
            'Q21' => $request->get('Q21'),
            'Q22' => $request->get('Q22'),
            'Q23' => $request->get('Q23'),
            'Q24' => $request->get('Q24'),
            'Q25' => $request->get('Q25'),
          ]);
    
          if($colonform->Q21=='Yes' AND $colonform->Q22=='Yes' AND $colonform->Q23=='Yes' ){
            return view('/colonresult');
          }elseif($colonform->Q21=='Yes' AND $colonform->Q22=='Yes' AND $colonform->Q24=='Yes' ){
            return view('/colonresult');
          }elseif($colonform->Q21=='Yes' AND $colonform->Q22=='Yes' AND $colonform->Q25=='Yes' ){
            return view('/colonresult');
          }elseif($colonform->Q21=='Yes' AND $colonform->Q23=='Yes' AND $colonform->Q24=='Yes' ){
            return view('/colonresult');
          }elseif($colonform->Q21=='Yes' AND $colonform->Q23=='Yes' AND $colonform->Q25=='Yes' ){
            return view('/colonresult');
          }elseif($colonform->Q21=='Yes' AND $colonform->Q24=='Yes' AND $colonform->Q25=='Yes' ){
            return view('/colonresult');
          }elseif($colonform->Q22=='Yes' AND $colonform->Q23=='Yes' AND $colonform->Q24=='Yes' ){
            return view('/colonresult');
          }elseif($colonform->Q22=='Yes' AND $colonform->Q23=='Yes' AND $colonform->Q25=='Yes' ){
            return view('/colonresult');
          }elseif($colonform->Q22=='Yes' AND $colonform->Q24=='Yes' AND $colonform->Q25=='Yes' ){
            return view('/colonresult');  
          }elseif($colonform->Q23=='Yes' AND $colonform->Q24=='Yes' AND $colonform->Q25=='Yes' ){
            return view('/colonresult');  
        }else
          return view('/nocancerresult');
      }
}
