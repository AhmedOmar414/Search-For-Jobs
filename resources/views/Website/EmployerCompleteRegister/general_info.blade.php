@extends('Layouts.Complete_Reg_Layoute')

@section('content')
<div class="complete d-flex justify-content-center " style="margin-top:40px">
    <div class="col-md-4">
        <div>
            <div class="circlee bg-primary">
                <p class="text-center pt-2 text-light">1</p>
            </div>
            <p class="pt-1">career</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="circlee bg-primary ">
            <p class="text-center pt-2 text-light">2</p>
        </div>
        <p class="pt-1">general</p>
    </div>
</div>
<div class="step">
    <p style="text-align:center">Step 2/2 <br><span style="font-size:20px;font-weight:500">general info</span></p>
</div>
<div class="custom">
    <div class="card card-css" style="margin-bottom: 100px">
        <div class="inner">
            <div class="row" style="padding-left:35px">
                <div class="col-md-2">
                    <img class="rounded-circle" style="background-size: cover" height="100px" width="100px" alt="100x100" src="Home/images/man.jpg" data-holder-rendered="true">
                </div>
                <div class="col-md-4">
                    <div>
                        <h4 style="padding-top: 10px">Profile Photo</h4>
                        <div class="row" style="padding-top: 20px">
                            <div class="col-md-6">
                                <button class="btn btn-primary">Upload Image</button>
                            </div>
                            <div class="col-md-6" style="padding:10px 0 0 50px">
                                <a href="#" style="font-size: 16px">delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="padding-top: 50px">
                <h6 style="padding-left:25px;color:grey">Enter your job title</h6>
                <div style="padding:15px 0 20px 25px">
                    <input class="form-control" type="text" placeholder="enter your job title" style="width:65%;height:50px">
                </div>
            </div>
            <div style="padding-top: 15px">
                <h6 style="padding-left:25px;color:grey">Enter your phone number</h6>
                <div style="padding:15px 0 20px 25px">
                    <input class="form-control" type="text" placeholder="enter your phone" style="width:65%;height:50px">
                </div>
            </div>
            <div style="padding-top: 15px">
                <h6 style="padding-left:25px;color:grey">Enter additional phone</h6>
                <div style="padding:15px 0 20px 25px">
                    <input class="form-control" type="text" placeholder="enter additional phone" style="width:65%;height:50px">
                </div>
            </div>
            <div style="padding-top: 15px">
                <h6 style="padding-left:25px;color:grey">Select your gender</h6>
                <div style="padding:15px 0 20px 25px; width:50%">
                    <select class="form-select" aria-label="Default select example" style=" color: grey;border-color: darkgray;border-radius: 4px">
                        <option value="1"></option>
                        <option value="1">Male</option>
                        <option value="1">Female</option>
                        <option value="1">Engineer</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
