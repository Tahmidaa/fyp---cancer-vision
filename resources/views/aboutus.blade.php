@extends('layouts.app')

@section('content')

<div class="demo-wrap">
  <img
    class="demo-bg"
    src="/jpg/pic1.jpeg"
    alt=""
  >
 

 

<div class="container-fluid pl-0" style="width:2000px">
               <form class="pl-5 pt-4 bg-success ;" style= "height: 120px;  opacity: 70%">
                <div class="text-white pt-2">
                    <h1>About Us</h1>
                </div>
                </form>
</div>


<br>
<br>
<br>


                <div class="container">
    <div class="row">
        
        <div class="col-2 ">
            <div>
              
              <div class="d-flex align-items-center pr-5">

                    <div class= "pr-2 pl-5">
                      <img src="/jpg/aboutus.jpg"  style="width:400px; height:400px; border: 5px solid #555;">
                    </div>

                    <div>
                    <h1><div class="font-weight-bold pl-5 " style="font-size:40px;"><span class="text-success">Hi! We are PowerPuffs</span></a></h1>
                    
                    <p><div class="pl-5 text-muted" style="width:550px; line-height:1.6; font-size:16px">This Cancer Vision has been developed by the two IT students of International 
                        Islamic University of Malaysia namely Sehrish Kantroo and Tahmida Haque Sumbula specialized
                        in Business Intelligence and Analytics.
                        <br>
                        <br>
                        "Cancer is not a death sentence but rather it is a 
                        life sentence; it pushes one to live".
                        <br>
                        <br>
                        Together we are on the path to combat cancer.
                        Anyone can now predict whether or not they have cancer at an early stage. The goal 
                        of powerpuffs is to avoid cancer-related fatalities by assisting users in receiving 
                        treatment before the disease progresses to a critical stage.</div> </p>
               
               </div>
                    
                    

                    </div>
                    </div>
              
              </div>

              
              <hr>
              
               
    </div>
</div> 

<br>
<br>
<br>

<div class="container-fluid pl-0" style="width:2000px">
               <form class="pl-5 pt-4 bg-success w-100;" style= "height: 100px; opacity: 70%">
                <div class=" text-white pt-2 ">
                    <h1>DEVELOPERS</h1>
                </div>
                </form>



<br>             
<br>
<br>

<div class="container row justify-content-center">
    <div class="row">
        
        <div class="col-2 offset-1 ">
            <div>
              
              <div class="d-flex align-items-center">

                    <div class= "pl-5  pr-20">
                      <img src="/jpg/sehrr.jpeg"  style="width:300px; height:350px ; border: 5px solid #555;" >
                      <br>
                      <br>
                      <h1><div class="font-weight-bold  " style="font-size:20px;"><span class="text-success">SEHRISH KANTROO</span></a></h1>
                      
                      <p><div class=" text-muted" style=" line-height:1.6; font-size:15px">
                      Business Intelligence and Analytics
                      <br>
                      <br>
                        Fighting Cancer Is Our Goal. </div> </p>
</div>
                    <div class= "pl-5 pt-4">
                      <img src="/jpg/tahmida.jpeg"  style="width:300px; height:350px; border: 5px solid #555;">
                      <br>
                      <br>
                      <h1><div class="font-weight-bold pl-1 " style="font-size:20px;"><span class="text-success">TAHMIDA HAQUE SUMBULA</span></a></h1>

                      <p><div class=" text-muted pl-1" style=" line-height:1.6; font-size:15px">
                      Business Intelligence and Analytics
                      <br>
                      <br>
                      Do Something Today That Your Future Self Will Thank You For. </div> </p>
</div>
                    
                    

                    </div>
                    </div>
              
              </div>

              
              <hr>
              
               
    </div>
</div> 

<br>
<br>
<br>

<div class="container-fluid pl-0" style="width:2000px">
               <form class="pl-5 pt-4 bg-success w-100;" style= "height: 100px; opacity: 70%">
                <div class=" text-white pt-2 ">
                    <h1>SUPERVISOR</h1>
                </div>
                </form>



<br>             
<br>
<br>

<div class="container row justify-content-center">
    <div class="row">
        
        <div class="col-2 offset-sm-1">
            <div>
              
              <div class="d-flex align-items-center">

                    <div class= "pl-5  pr-20">
                      <img src="/jpg/madam.png"  style="width:350px; height:300px ; border: 5px solid #555;">
                      <br>
                      <br>
                      <h1><div class="font-weight-bold  " style="font-size:20px;"><span class="text-success">NOOR HAYANI BINTI ABDUL RAHIM</span></a></h1>
                      
                      <p><div class=" text-muted" style=" line-height:1.6; font-size:15px">
                      Assistant Professor ​

​


                      <br>
                      <br>
                      International Islamic University Of Malaysia </div> </p>
</div>
                    
                    
                    

                    </div>
                    </div>
              
              </div>

              
              <hr>
              
               
    </div>
</div> 

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
</style>


@endsection