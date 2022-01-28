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

        <form  method="post" action="{{ route('validate.form2') }}" novalidate>

            @csrf

<div class="row">
    <div class="col-sm-8 offset-sm-2">
     <div class="container-fluid pl-5 pr-5 pt-5 pb-5" style="background-color:#fcd8d1; opacity:90% ">
        <h3 class="display-5 text-center " style="font-size:40px; ">Answer the below questions to know better about your body.</h3><br><br>


<div class="row justify-content-center ">

        

            <div class="form-group" style= " width:600px">
                <label>Do you feel discomfort in any area of the breast?</label>
                <select type="text" class="form-control @error('Q6') is-invalid @enderror" name="Q6" id="Q6" class=" bg-white"  style=  "border: 1px solid black; height: 50px; font-style:italic">
                <option value="Yes">Yes</option>
                <option value="No" selected>No</option>
                </select>
                @error('Q6')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group" style= " width:600px">
                <label> Do you feel the change in the shape or size of the breast or nipples?</label>
                <select type="text" class="form-control @error('Q7') is-invalid @enderror" name="Q7" id="Q7" class=" bg-white"  style=  "border: 1px solid black; height: 50px; font-style:italic">
          <option value="Yes">Yes</option>
          <option value="No" selected>No</option>
          </select>

                @error('Q7')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group" style= " width:600px">
                <label>Do you experience nipple discharge such as blood other than breast milk?</label>
                <select type="text" class="form-control @error('Q8') is-invalid @enderror" name="Q8" id="Q8" class=" bg-white"  style=  "border: 1px solid black; height: 50px; font-style:italic">
          <option value="Yes">Yes</option>
          <option value="No" selected>No</option>
          </select>
                @error('Q8')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group" style= " width:600px">
                <label>Do you feel ulceration or dimpling in the breast?</label>
                <select type="text" class="form-control @error('Q9') is-invalid @enderror" name="Q9" id="Q9" class=" bg-white"  style=  "border: 1px solid black; height: 50px; font-style:italic">
          <option value="Yes">Yes</option>
          <option value="No" selected>No</option>
          </select>
                @error('Q9')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror                
            </div>

            <div class="form-group" style= " width:600px">
                <label>Do you feel any lump around your breast or underarm?</label>
                <select type="text" class="form-control @error('Q10') is-invalid @enderror" name="Q10" id="Q10" class=" bg-white"  style=  "border: 1px solid black; height: 50px; font-style:italic">
          <option value="Yes">Yes</option>
          <option value="No" selected>No</option>
          </select>
                @error('Q10')
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