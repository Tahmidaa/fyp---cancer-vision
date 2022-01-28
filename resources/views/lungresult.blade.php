@extends('layouts.app')

@section('content')

<div class="demo-wrap">
  <img
    class="demo-bg"
    src="/jpg/pic2.jpeg"
    alt=""
  >

  
<div class="container-fluid pl-0 pr-0"style="width:2000px">
               <form class="pl-5 pt-4 bg-success w-100;" style= "height: 120px; opacity: 70%">
                <div class="text-white pt-2">
                    <h1>CANCER PREDICTOR: PREDICT YOUR CANCER
</h1>
                </div>
                </form>
</div>
<br>
<br>



<div class="container-fluid border bg-white"style="width:900px;height: 650px; outline: 12px solid pink; opacity: 90%">
               
                <div class="text-success pl-5 pt-3 offset-4" >
                    <h1>FEEDBACK</h1>
                </div>
                <br>
                <div class="text-dark offset-2 "style="width:590px; font-size: 18px; letter-spacing: 3px">
                    <p><b> Output:</b> You are most likely to have cancer based on the symptoms you have provided.</p>
                    <p><b> Cancer Type:</b> Lung Cancer </p>
                    <p><b> Status:</b> Positive </p>
                    <p><b> Test Suggestion:</b> Take CT scan of chest </p>
</div>
<br>
                

                
                            
<div class="btn offset-2 "style="width:450px; font-size:14px; letter-spacing: 1px">
If you want further assistance to get medical treatment. You may go to the consultation page.  
</div>
<a class="btn btn-success"style="width:120px; opacity:80%; font-size:16px" href= "{{ url('/consultation') }}" >Consultation</a>

<br>
<br>

<div class="btn offset-2 "style="width:450px; font-size:14px; letter-spacing: 1px">
  Alternatively, look out the contact information for a lung cancer specialist to make it easier to get in touch with them. 
  </div>
  <a class="btn btn-success"style="width:120px; opacity:80%; font-size:16px" href= "{{ url('https://www.oncolifecentre.com/post/17/DR.-CHRISTINA-NG-VAN-TZE') }}" >Specialist</a>
  
  <br>
  <br>
              
<div class="container-fluid pl-0 pr-0"style="width:600px">
               <form class=" pl-5 pt-1 bg-success w-100;" style= "height: 70px; opacity: 70%">
                <div class="text-white pt-2" style="letter-spacing:1px">
                    <h1>Kill Cancer Before It Kills You
</h1>
                </div>
                </form>
</div>



                
</div>

<br>
<br>
<br>




</div>
<style>
  .demo-wrap {
  overflow: hidden;
  position: relative;
}

.demo-bg {
  opacity: 0.3;
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
}

.border {
    border-style: solid;
    
}
</style>

@endsection