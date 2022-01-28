<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\cervicalForm;

class Form4Controller extends Controller
{
    public function createUserForm4(Request $request) {
        return view('form3');
      }
     
    
    
      //* Store Form data in database
      public function UserForm4(Request $request) {
        
          // Form validation
          $this->validate($request, [
              'Q16' => 'required',
              'Q17' => 'required',
              'Q18' => 'required',
              'Q19'=>'required',
              'Q20' => 'required'
           ]);
    
          //  Store data in database
          cervicalForm::create($request->all());
           
          $cervicalform = new cervicalForm([
            'Q16' => $request->get('Q16'),
            'Q17' => $request->get('Q17'),
            'Q18' => $request->get('Q18'),
            'Q19' => $request->get('Q19'),
            'Q20' => $request->get('Q20'),
          ]);
    
          if($cervicalform->Q16=='Yes' AND $cervicalform->Q17=='Yes' AND $cervicalform->Q18=='Yes' ){
            return view('/cervicalresult');
          }elseif($cervicalform->Q16=='Yes' AND $cervicalform->Q17=='Yes' AND $cervicalform->Q19=='Yes' ){
            return view('/cervicalresult');
          }elseif($cervicalform->Q16=='Yes' AND $cervicalform->Q17=='Yes' AND $cervicalform->Q20=='Yes' ){
            return view('/cervicalresult');
          }elseif($cervicalform->Q16=='Yes' AND $cervicalform->Q18=='Yes' AND $cervicalform->Q19=='Yes' ){
            return view('/cervicalresult');
          }elseif($cervicalform->Q16=='Yes' AND $cervicalform->Q18=='Yes' AND $cervicalform->Q20=='Yes' ){
            return view('/cervicalresult');
          }elseif($cervicalform->Q16=='Yes' AND $cervicalform->Q19=='Yes' AND $cervicalform->Q20=='Yes' ){
            return view('/cervicalresult');
          }elseif($cervicalform->Q17=='Yes' AND $cervicalform->Q18=='Yes' AND $cervicalform->Q19=='Yes' ){
            return view('/cervicalresult');
          }elseif($cervicalform->Q17=='Yes' AND $cervicalform->Q18=='Yes' AND $cervicalform->Q20=='Yes' ){
            return view('/cervicalresult');
          }elseif($cervicalform->Q17=='Yes' AND $cervicalform->Q19=='Yes' AND $cervicalform->Q20=='Yes' ){
            return view('/cervicalresult');  
          }elseif($cervicalform->Q18=='Yes' AND $cervicalform->Q19=='Yes' AND $cervicalform->Q20=='Yes' ){
            return view('/cervicalresult');  
        }else
          return view('/form5');
      }
}
