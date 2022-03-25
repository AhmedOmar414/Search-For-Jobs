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
            <div class="circlee" style="background-color:#e3e2e2">
                <p class="text-center pt-2">2</p>
            </div>
            <p class="pt-1">general</p>
        </div>
    </div>
    <div class="step">
        <p style="text-align:center">Step 1/2 <br><span style="font-size:20px;font-weight:500">Career Interest</span></p>
    </div>
    <form>
        <div class="custom">
            <div class="card card-css">
                <div class="inner">
                    <h4 style="padding-left:25px;">What's your current Level?</h4>
                    <div class="wrapper">
                        <input type="radio" name="career" id="option-1" required>
                        <input type="radio" name="career" id="option-2" required>
                        <input type="radio" name="career" id="option-3" required>
                        <label for="option-1" class="option option-1">
                            <div class="dot"></div>
                            <span style="padding:0 15px 0 15px">Student</span>
                        </label>
                        <label for="option-2" class="option option-2">
                            <div class="dot"></div>
                            <span style="padding:0 15px 0 15px">Junior</span>
                        </label>
                        <label for="option-3" class="option option-3">
                            <div class="dot"></div>
                            <span style="padding:0 15px 0 15px">Senior</span>
                        </label>
                    </div>
                    {{--                <article class="feature1">--}}
                    {{--                    <input type="checkbox" id="feature1"/>--}}
                    {{--                    <div>--}}
                    {{--                        <span>20 GB<br/>+ $15.00</span>--}}
                    {{--                    </div>--}}
                    {{--                </article>--}}

                </div>
            </div>
        </div>
        <div class="custom">
            <div class="card card-css">
                <div class="inner">
                    <h4 style="padding-left:25px;">What's your Job Title?</h4>
                    <div style="padding:15px 0 20px 25px">
                        <input class="form-control" type="text" placeholder="enter your job title" style="width:65%;height:50px" required>
                    </div>
                </div>
            </div>
        </div>
        <div class="custom">
            <div class="card card-css">
                <div class="inner ">
                    <h4 style="padding-left:25px;"> Select your job type and category !</h4>
                    <div class="row" style="padding:20px 0 15px 15px">
                        <div style="padding:15px 0 20px 25px; width:40%;" class="col-md-4">
                            <select class="form-select" aria-label="Default select example" style=" color: grey;border-color: darkgray" required>
                                <option selected disabled>Category</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div style="padding:15px 0 20px 25px; width:40%" class="col-md-4">
                            <select class="form-select" aria-label="Default select example" style=" color: grey;border-color: darkgray" required>
                                <option selected disabled>Job Type</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="custom">
            <div class="card card-css">
                <div class="inner">
                    <h4 style="padding-left:25px;">Enter your skills ! <span style="font-size:12px;color:red;">* at least 5</span></h4>
                    <div style="padding:30px 0 20px 25px" class="row">

                        <div class="col-md-3">
                            <input class="form-control" required type="text" placeholder="skill 1 *" style="width:65%;height:50px">
                        </div>
                        <div class="col-md-3">
                            <input class="form-control" required type="text" placeholder="skill 2 *" style="width:65%;height:50px">
                        </div>
                        <div class="col-md-3">
                            <input class="form-control" required type="text" placeholder="skill 3 *" style="width:65%;height:50px">
                        </div>
                        <div class="col-md-3">
                            <input class="form-control" required type="text" placeholder="skill 4 *" style="width:65%;height:50px">
                        </div>
                    </div>
                    <div style="padding:10px 0 20px 25px" class="row">
                        <div class="col-md-3">
                            <input class="form-control" required type="text" placeholder="skill 5 *" style="width:65%;height:50px">
                        </div>
                        <div class="col-md-3">
                            <input class="form-control" type="text" placeholder="skill 6" style="width:65%;height:50px">
                        </div>
                        <div class="col-md-3">
                            <input class="form-control" type="text" placeholder="skill 7" style="width:65%;height:50px">
                        </div>
                        <div class="col-md-3">
                            <input class="form-control" type="text" placeholder="skill 8" style="width:65%;height:50px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="custom">
            <div class="card card-css">
                <div class="inner">
                    <h4 style="padding-left:25px;">What's your expected salary?</h4>
                    <div style="padding:15px 0 20px 25px">
                        <label for="salary">starts from</label>
                        <input id="salary" class="form-control" type="number" placeholder="your expected salary in dollars" style="width:65%;height:50px">
                    </div>
                </div>
            </div>
        </div>
        <div class="custom">
            <div class="card card-css">
                <div class="inner">
                    <h4 style="padding-left:25px;">What's your Education? <span style="font-size:12px;color:red;">* at least 1</span></h4>
                   <div style="padding:20px 0 20px 25px;">
                       <div style="width:75%"  class="card">
                           <div style="width:80%;padding:25px 0 0 25px ">
                               <div class="form-group" >
                                   <label for="usr">University/Institution</label>
                                   <input type="text" class="form-control" id="usr">
                               </div>
                               <div class="form-group">
                                   <label for="usr">Field of study</label>
                                   <input type="text" class="form-control" id="usr">
                               </div>
                               <div class="row pb-2">
                                   <div class="form-group col-md-6" >
                                       <label for="usr">*starts year</label>
                                       <select class="form-select" aria-label="Default select example" style=" color: grey;border-color: darkgray;border-radius: 4px">
                                           <option value="1"></option>
                                           <option value="1">2010</option>
                                           <option value="2">2011</option>
                                           <option value="3">2012</option>
                                           <option value="3">2013</option>
                                           <option value="3">2014</option>
                                           <option value="3">2015</option>
                                           <option value="3">2016</option>
                                           <option value="3">2017</option>
                                           <option value="3">2018</option>
                                           <option value="3">2019</option>
                                           <option value="3">2020</option>
                                           <option value="3">2021</option>
                                           <option value="3">2022</option>
                                           <option value="3">2023</option>
                                           <option value="3">2024</option>
                                           <option value="3">2025</option>

                                       </select>
                                   </div>
                                   <div class="form-group col-md-6">
                                       <label for="usr">*end year</label>
                                       <select class="form-select" aria-label="Default select example" style=" color: grey;border-color: darkgray;border-radius: 4px">
                                           <option value="1"></option>
                                           <option value="1">2010</option>
                                           <option value="2">2011</option>
                                           <option value="3">2012</option>
                                           <option value="3">2013</option>
                                           <option value="3">2014</option>
                                           <option value="3">2015</option>
                                           <option value="3">2016</option>
                                           <option value="3">2017</option>
                                           <option value="3">2018</option>
                                           <option value="3">2019</option>
                                           <option value="3">2020</option>
                                           <option value="3">2021</option>
                                           <option value="3">2022</option>
                                           <option value="3">2023</option>
                                           <option value="3">2024</option>
                                           <option value="3">2025</option>
                                       </select>
                                   </div>
                               </div>
                           </div>
                       </div><br>
                       <div style="width:75%"  class="card">
                           <div style="width:80%;padding:25px 0 0 25px ">
                               <div class="form-group" >
                                   <label for="usr">University/Institution</label>
                                   <input type="text" class="form-control" id="usr">
                               </div>
                               <div class="form-group">
                                   <label for="usr">Field of study</label>
                                   <input type="text" class="form-control" id="usr">
                               </div>
                               <div class="row pb-2">
                                   <div class="form-group col-md-6" >
                                       <label for="usr">*starts year</label>
                                       <select class="form-select" aria-label="Default select example" style=" color: grey;border-color: darkgray;border-radius: 4px">
                                           <option value="1"></option>
                                           <option value="1">2010</option>
                                           <option value="2">2011</option>
                                           <option value="3">2012</option>
                                           <option value="3">2013</option>
                                           <option value="3">2014</option>
                                           <option value="3">2015</option>
                                           <option value="3">2016</option>
                                           <option value="3">2017</option>
                                           <option value="3">2018</option>
                                           <option value="3">2019</option>
                                           <option value="3">2020</option>
                                           <option value="3">2021</option>
                                           <option value="3">2022</option>
                                           <option value="3">2023</option>
                                           <option value="3">2024</option>
                                           <option value="3">2025</option>

                                       </select>
                                   </div>
                                   <div class="form-group col-md-6">
                                       <label for="usr">*end year</label>
                                       <select class="form-select" aria-label="Default select example" style=" color: grey;border-color: darkgray;border-radius: 4px">
                                           <option value="1"></option>
                                           <option value="1">2010</option>
                                           <option value="2">2011</option>
                                           <option value="3">2012</option>
                                           <option value="3">2013</option>
                                           <option value="3">2014</option>
                                           <option value="3">2015</option>
                                           <option value="3">2016</option>
                                           <option value="3">2017</option>
                                           <option value="3">2018</option>
                                           <option value="3">2019</option>
                                           <option value="3">2020</option>
                                           <option value="3">2021</option>
                                           <option value="3">2022</option>
                                           <option value="3">2023</option>
                                           <option value="3">2024</option>
                                           <option value="3">2025</option>
                                       </select>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                </div>
            </div>
        </div>
        {{--Work Experience--}}
        <div class="custom">
            <div class="card card-css">
                <div class="inner">
                    <h4 style="padding-left:25px;">What's your work Experience? <span style="font-size:12px;color:red;">* at least 1</span></h4>
                    <div style="padding:20px 0 20px 25px;">
                        <div style="width:75%"  class="card">
                            <div style="width:80%;padding:25px 0 0 25px ">
                                <div class="form-group" >
                                    <label for="usr">Company Name</label>
                                    <input type="text" class="form-control" id="usr">
                                </div>
                                <div class="form-group">
                                    <label for="usr">Job Position</label>
                                    <input type="text" class="form-control" id="usr">
                                </div>
                                <div class="row pb-2">
                                    <div class="form-group col-md-4" >
                                        <label for="usr">*starts year</label>
                                        <select class="form-select" aria-label="Default select example" style=" color: grey;border-color: darkgray;border-radius: 4px">
                                            <option value="1"></option>
                                            <option value="1">2010</option>
                                            <option value="2">2011</option>
                                            <option value="3">2012</option>
                                            <option value="3">2013</option>
                                            <option value="3">2014</option>
                                            <option value="3">2015</option>
                                            <option value="3">2016</option>
                                            <option value="3">2017</option>
                                            <option value="3">2018</option>
                                            <option value="3">2019</option>
                                            <option value="3">2020</option>
                                            <option value="3">2021</option>
                                            <option value="3">2022</option>
                                            <option value="3">2023</option>
                                            <option value="3">2024</option>
                                            <option value="3">2025</option>

                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="usr">*end year</label>
                                        <select class="form-select" aria-label="Default select example" style=" color: grey;border-color: darkgray;border-radius: 4px">
                                            <option value="1"></option>
                                            <option value="1">2010</option>
                                            <option value="2">2011</option>
                                            <option value="3">2012</option>
                                            <option value="3">2013</option>
                                            <option value="3">2014</option>
                                            <option value="3">2015</option>
                                            <option value="3">2016</option>
                                            <option value="3">2017</option>
                                            <option value="3">2018</option>
                                            <option value="3">2019</option>
                                            <option value="3">2020</option>
                                            <option value="3">2021</option>
                                            <option value="3">2022</option>
                                            <option value="3">2023</option>
                                            <option value="3">2024</option>
                                            <option value="3">2025</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="usr">Location</label>
                                        <select class="form-select" aria-label="Default select example" style=" color: grey;border-color: darkgray;border-radius: 4px">
                                            <option value="1"></option>
                                            <option value="1">Cairo</option>
                                            <option value="2">Giza</option>
                                            <option value="3">Naser City</option>
                                            <option value="3">Alex</option>
                                            <option value="3">Mansoura</option>
                                            <option value="3">Maadi</option>
                                            <option value="3">Asyut</option>
                                            <option value="3">Doki</option>
                                            <option value="3">Zahraa</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div><br>
                        <div style="width:75%"  class="card">
                            <div style="width:80%;padding:25px 0 0 25px ">
                                <div class="form-group" >
                                    <label for="usr">Company Name</label>
                                    <input type="text" class="form-control" id="usr">
                                </div>
                                <div class="form-group">
                                    <label for="usr">Job Position</label>
                                    <input type="text" class="form-control" id="usr">
                                </div>
                                <div class="row pb-2">
                                    <div class="form-group col-md-4" >
                                        <label for="usr">*starts year</label>
                                        <select class="form-select" aria-label="Default select example" style=" color: grey;border-color: darkgray;border-radius: 4px">
                                            <option value="1"></option>
                                            <option value="1">2010</option>
                                            <option value="2">2011</option>
                                            <option value="3">2012</option>
                                            <option value="3">2013</option>
                                            <option value="3">2014</option>
                                            <option value="3">2015</option>
                                            <option value="3">2016</option>
                                            <option value="3">2017</option>
                                            <option value="3">2018</option>
                                            <option value="3">2019</option>
                                            <option value="3">2020</option>
                                            <option value="3">2021</option>
                                            <option value="3">2022</option>
                                            <option value="3">2023</option>
                                            <option value="3">2024</option>
                                            <option value="3">2025</option>

                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="usr">*end year</label>
                                        <select class="form-select" aria-label="Default select example" style=" color: grey;border-color: darkgray;border-radius: 4px">
                                            <option value="1"></option>
                                            <option value="1">2010</option>
                                            <option value="2">2011</option>
                                            <option value="3">2012</option>
                                            <option value="3">2013</option>
                                            <option value="3">2014</option>
                                            <option value="3">2015</option>
                                            <option value="3">2016</option>
                                            <option value="3">2017</option>
                                            <option value="3">2018</option>
                                            <option value="3">2019</option>
                                            <option value="3">2020</option>
                                            <option value="3">2021</option>
                                            <option value="3">2022</option>
                                            <option value="3">2023</option>
                                            <option value="3">2024</option>
                                            <option value="3">2025</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="usr">Location</label>
                                        <select class="form-select" aria-label="Default select example" style=" color: grey;border-color: darkgray;border-radius: 4px">
                                            <option value="1"></option>
                                            <option value="1">Cairo</option>
                                            <option value="2">Giza</option>
                                            <option value="3">Naser City</option>
                                            <option value="3">Alex</option>
                                            <option value="3">Mansoura</option>
                                            <option value="3">Maadi</option>
                                            <option value="3">Asyut</option>
                                            <option value="3">Doki</option>
                                            <option value="3">Zahraa</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="custom">
            <div class="card card-css">
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
            </div>
        </div>
    </form>
@endsection
