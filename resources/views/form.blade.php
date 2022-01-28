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
<br>

@if(Session::has('success'))
            <div class="alert alert-success text-center">
                {{Session::get('success')}}
            </div>
        @endif    

        <form  method="post" action="{{ route('validate.form') }}" novalidate>

            @csrf

<div class="row">
    <div class="col-sm-8 offset-sm-2">
     <div class="container-fluid pl-5 pr-5 pt-5 pb-5" style="background-color:#fcd8d1; opacity:90% ">
        <h3 class="display-5 text-center " style="font-size:40px; ">Answer the below questions to know better about your body.</h3><br><br>


<div class="row justify-content-center" name="Group1">

            <div class="form-group" style= " width:600px">
                <label>If you don't mind sharing with us, do you have any history of cancer in your family?</label>
                <select type="text" class="form-control @error('Q1') is-invalid @enderror" name="Q1" id="Q1" class=" bg-white"  style=  "border: 1px solid black; height: 50px; font-style:italic">
                <option value="Yes" name="Yes">Yes</option>
                <option value="No" selected>No</option>
                </select>
                @error('Q1')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group" style= " width:600px">
                <label>Do you feel any changes in your body functions or body shape? (ex. lumps in places)</label>
                <select type="text" class="form-control @error('Q2') is-invalid @enderror" name="Q2" id="Q2" class=" bg-white"  style=  "border: 1px solid black; height: 50px; font-style:italic">
          <option value="Yes" name="Yes">Yes</option>
          <option value="No" selected>No</option>
          </select>

                @error('Q2')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group" style= " width:600px">
                <label>Have you lost weight suddenly without any cause?</label>
                <select type="text" class="form-control @error('Q3') is-invalid @enderror" name="Q3" id="Q3" class=" bg-white"  style=  "border: 1px solid black; height: 50px; font-style:italic">
          <option value="Yes" name="Yes">Yes</option>
          <option value="No" selected>No</option>
          </select>
                @error('Q3')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group" style= " width:600px">
                <label>Do you feel fatigue or extreme tiredness that doesn’t get better with rest?</label>
                <select type="text" class="form-control @error('Q4') is-invalid @enderror" name="Q4" id="Q4" class=" bg-white"  style=  "border: 1px solid black; height: 50px; font-style:italic">
          <option value="Yes" name="Yes">Yes</option>
          <option value="No" selected>No</option>
          </select>
                @error('Q4')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror                
            </div>

            <div class="form-group" style= " width:600px">
                <label>Do you get unconscious without any reason?</label>
                <select type="text" class="form-control @error('Q5') is-invalid @enderror" name="Q5" id="Q5" class=" bg-white"  style=  "border: 1px solid black; height: 50px; font-style:italic">
          <option value="Yes" name="Yes">Yes</option>
          <option value="No" selected >No</option>
          </select>
                @error('Q5')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror                     
            </div>
</div>
</div>
</div>
</div>



    <br>

            <div class="d-grid mt-3">
              <input type="submit" name="send" value="Submit" class="btn btn-dark btn-lg row justify-content-center offset-2 " style=" width:66.5%; opacity:90%">
            </div>
        </form>
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