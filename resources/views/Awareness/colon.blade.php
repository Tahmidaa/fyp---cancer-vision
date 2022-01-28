@extends('layouts.app')

@section('content')

<div class="demo-wrap">
  <img
    class="demo-bg"
    src="https://t4.ftcdn.net/jpg/02/04/88/69/360_F_204886984_AtNmBZ3kUSSl73xCyyCdKRhpVQNumbvm.jpg"
    alt=""
  >


<div class="container-fluid pl-0" style="width:2000px">
               <form class="pl-5 pt-4 bg-success w-100;" style= "height: 120px; opacity: 70%">
                <div class="text-white pt-2">
                    <h1>Colon Cancer</h1>
                </div>
                </form>
</div>
                <br>
                <br>



                <div class="container">
                    <div class="row">
        
                         <div class="col-2 ">
                         <div>
              
              <div class="d-flex align-items-center pr-5">

                    
                    <div>
                    <h1><div class=" pl-5 " style="font-size:40px;"><span class="text-success">SYMPTOMS</span></a></h1>
                    
                    <p><div class=" pl-5 text-dark" style="width:1000px; line-height:2.0; font-size:16px">
                    Symptoms may include:
                    <ul>
                        <li>Persistent abdominal discomfort, such as cramps, gas or pain.</li>
                        <li>A feeling that your bowel doesn't empty completely.</li>
                        <li>Weakness or fatigue.</li>
                        <li>Rectal bleeding or blood in your stool.</li>
                        <li>A persistent change in your bowel habits, including diarrhea or constipation or a change in the consistency of your stool.</li>
                        <li>Unexplained weight loss.</li>
                   </ul>
                
                
                </div> </p>
               
               </div>
              
               

                    </div>
                    </div>
              
              </div>

              
              
              
               
    </div>
</div> 



<br>
<hr class="style1">
<br>

<div class="container">
                    <div class="row">
        
                         <div class="col-2 ">
                         <div>
              
              <div class="d-flex align-items-center pr-5">

                    
                    <div>
                    <h1><div class=" pl-5 " style="font-size:40px;"><span class="text-success">CAUSES</span></a></h1>
                    
                    <p><div class=" pl-5 text-dark" style="width:620px; line-height:2.0; font-size:16px">
                    

                        Although Doctors aren't certain what causes most colon cancer. Some causes are:
                        <ul>
                       <li>A personal history of colorectal cancer or polyps. If you've already had colon cancer or noncancerous colon polyps, you have a greater risk of colon cancer in the future.</li>
                       <li>Family history</li>
                       <li>Diabetes. People with diabetes or insulin resistance have an increased risk of colon cancer.</li>
                       <li>Obesity. People who are obese have an increased risk of colon cancer and an increased risk of dying of colon cancer when compared with people considered normal weight.</li>
                       <li>Smoking. People who smoke may have an increased risk of colon cancer.</li>
                    </ul>
                   
                </div> </p>
               
               </div>
                    
               <div class= "pr-2 pl-5 ">
                      <img src="/jpg/colon.webp"  style="width:420px; height:390px">
                    </div>

                    </div>
                    </div>
              
              </div>

              
            
              
               
    </div>
</div> 


<br>
<hr class="style1">
<br>

<div class="container">
                    <div class="row">
        
                         <div class="col-2 ">
                         <div>
              
              <div class="d-flex align-items-center pr-5">

                    
                    <div>
                    <h1><div class=" pl-5 " style="font-size:40px;"><span class="text-success">PREVENTION</span></a></h1>
                    
                    <p><div class=" pl-5 text-dark" style="width:1100px; line-height:2.2; font-size:16px">
                        Doctors recommend that people with an average risk of colon cancer consider colon cancer screening around age 50. But people with an increased risk, such as those with a family history of colon cancer, should consider screening sooner.
                        <ul>
                       <li> <b>Stop smoking. </b> Talk to your doctor about ways to quit that may work for you.
    
    ​</li>
                       <li> <b>Eat a variety of fruits, vegetables and whole grains.</b> Fruits, vegetables and whole grains contain vitamins, minerals, fiber and antioxidants, which may play a role in cancer prevention. Choose a variety of fruits and vegetables so that you get an array of vitamins and nutrients.</li>
                       <li> <b>Exercise most days of the week.</b> Try to get at least 30 minutes of exercise on most days. If you've been inactive, start slowly and build up gradually to 30 minutes. Also, talk to your doctor before starting any exercise program.
    
    ​</li>
                       <li> <b>Regular Exercise.</b> Regular exercise is essential to keep the body healthy. If you exercise daily for 30 minutes there are fewer chances of getting affected by blood cancer, but still, there is no evidence that supports it.
    
    ​</li>
                       <li> <b>Maintain a healthy weight. </b> If you are at a healthy weight, work to maintain your weight by combining a healthy diet with daily exercise. If you need to lose weight, ask your doctor about healthy ways to achieve your goal. Aim to lose weight slowly by increasing the amount of exercise you get and reducing the number of calories you eat.</li>
    
                       You can take steps to reduce your risk of colon cancer by making changes in your everyday life. </li>
                        </ul>
                </div> </p>
               
               </div>
                    
                    

                    </div>
                    </div>
              
              </div>

              
              
              
               
    </div>
</div> 
<style>
  .demo-wrap {
  overflow: hidden;
  position: relative;
}

.demo-bg {
  opacity: 0.2;
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
}
</style>
<br>
<br>


<a class="btn btn-success btn-lg row justify-content-center  " style=" width:101.2%; opacity:70%" href= "{{ url('/blood') }}" role="button">Next</a> 

<style>       
    hr.style1{
	border-top: 1px solid #8c8b8b;
    
}
</style>

@endsection