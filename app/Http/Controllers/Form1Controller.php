<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\CancerForm;


class Form1Controller extends Controller
{
// Create Form
public function createUserForm(Request $request) {
    return view('form');
  }
 


  //* Store Form data in database
  public function UserForm(Request $request) {
    
      // Form validation
      $this->validate($request, [
          'Q1' => 'required',
          'Q2' => 'required',
          'Q3' => 'required',
          'Q4'=>'required',
          'Q5' => 'required'
       ]);

      //  Store data in database
      CancerForm::create($request->all());
       
      $cancerform = new CancerForm([
        'Q1' => $request->get('Q1'),
        'Q2' => $request->get('Q2'),
        'Q3' => $request->get('Q3'),
        'Q4' => $request->get('Q4'),
        'Q5' => $request->get('Q5'),
      ]);

        if($cancerform->Q1=='Yes' AND $cancerform->Q2=='Yes' AND $cancerform->Q3=='Yes' ){
          return view('/form2');
        }elseif($cancerform->Q1=='Yes' AND $cancerform->Q2=='Yes' AND $cancerform->Q4=='Yes' ){
          return view('/form2');
        }elseif($cancerform->Q1=='Yes' AND $cancerform->Q2=='Yes' AND $cancerform->Q5=='Yes' ){
          return view('/form2');
        }elseif($cancerform->Q1=='Yes' AND $cancerform->Q3=='Yes' AND $cancerform->Q4=='Yes' ){
          return view('/form2');
        }elseif($cancerform->Q1=='Yes' AND $cancerform->Q3=='Yes' AND $cancerform->Q5=='Yes' ){
          return view('/form2');
        }elseif($cancerform->Q1=='Yes' AND $cancerform->Q4=='Yes' AND $cancerform->Q5=='Yes' ){
          return view('/form2');
        }elseif($cancerform->Q2=='Yes' AND $cancerform->Q3=='Yes' AND $cancerform->Q4=='Yes' ){
          return view('/form2');
        }elseif($cancerform->Q2=='Yes' AND $cancerform->Q3=='Yes' AND $cancerform->Q5=='Yes' ){
          return view('/form2');
        }elseif($cancerform->Q2=='Yes' AND $cancerform->Q4=='Yes' AND $cancerform->Q5=='Yes' ){
          return view('/form2');  
        }elseif($cancerform->Q3=='Yes' AND $cancerform->Q4=='Yes' AND $cancerform->Q5=='Yes' ){
          return view('/form2');  
      }else
        return view('/nocancerresult');
    }

    
    }


  



