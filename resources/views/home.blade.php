@extends('layouts.app')

@section('content')

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

        <div class="carousel-caption d-none d-md-block">
        <!DOCTYPE html>
  <html lang="en">
<body>
 <div class="container pt-3 pl-5 pr-5 " style ="background-color:#0DB26B; line-height:2.0; opacity:93%">
  <br>
  <h1 style= "font-size: 60px" >Cancer Vision</h1>
  <br>
  <p align= "justify" style= "font-size: 16px"> Cancer is one of today's most serious issues, and doctors are still having trouble diagnosing cancers at 
    an early stage. It's a potentially lethal disease caused by mutations in genes that code for important 
    cell-regulatory proteins as a result of environmental factors. More importantly, the modernization of 
    unhealthy lifestyles, particularly cigarette smoking, as well as the adoption of many aspects of the modern 
    western diet, also increase cancer rates. Even though the exact cause of cancer and a full cure has yet to 
    be discovered, there is a possibility that it can be cured if cancer is detected early. Cancer Vision 
    identifies prospective cancer patients using data mining methods. This system predicts the risk of lung 
    cancer, breast cancer, cervix cancer, and blood cancer at an early stage. It is verified by comparing its 
    expected outcomes to the patient's provided information. It also assesses risk levels, gives result output, 
    shows cancer type and gives a test suggestion.​ The primary goal of this system is to provide users with 
    earlier warnings so that they can get consultation and treatments on time. This project aids in identifying a 
    person's cancer predisposition before undergoing costly and time-consuming clinical and lab testing.
  
  </p>
  <br>
  <br>
  <br>
</div>
<br>
<br>
<br>
</body>
</html>
</div>


  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  
  <div class="carousel-inner" overflow= "visible">
    <div class="carousel-item active" >
      <img class="d-block w-100 " style=" width:100%; height: 800px" src="/jpg/pic1.jpeg" alt="First slide">
      
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 " style=" width:100%; height: 800px" src="/jpg/pic2.jpeg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 " style=" width:100%; height: 800px" src="/jpg/pic3.jpeg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>

</div>

                   
               
@endsection