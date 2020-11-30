@extends('layouts.master')

@section('title')
    Staff |  Dashboard
@endsection

@section('main-content')


<div class="col-lg-12 col-12 layout-spacing">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">                                
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>Create New Staff</h4>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area">
           <form method="POST" action="{{ route('staff.store') }}" enctype="multipart/form-data">
            @csrf
                <div class="form-row mb-4">
                    <div class="col">
                      <input type="text" class="form-control" name="fname" placeholder="First name">
                    </div>
                    <div class="col">
                      <input type="text" class="form-control" name="lname" placeholder="Last name">
                    </div>
                </div>
                <label for="tel-text" class="sr-only">Telephone</label>
                <input id="tel-text" type="tel" name="phone" placeholder="+234-(123)-456-7890" class="form-control" required>
                <br>
                <label for="t-text" class="sr-only">Text</label>
                <input id="t-text" type="text" name="nextkin" placeholder="Next Of Kin" class="form-control" required>
                <br>
                <label for="e-text" class="sr-only">Email</label>
                <input id="e-text" type="email" name="email" placeholder="email@mail.com" class="form-control" required>
                <br>
                <input id="t-text" type="text" name="street" placeholder="Street Address" class="form-control" required>
                <br>
                <div class="form-row mb-4">
                    <div class="col-7">
                        <input type="text" name="city" class="form-control" placeholder="City" required>
                    </div>
                    <div class="col">
                        <input type="text" name="state" class="form-control" placeholder="State" required>
                    </div>
                    <div class="col">
                        <input type="text" name="zipcode" class="form-control" placeholder="Zip" required>
                    </div>
                </div>
                <label for="t-text" class="sr-only">Text</label>
                <input id="t-text" type="text" name="experience1" placeholder="Previous Work Experience 1" class="form-control" >
                <br>
                <label for="t-text" class="sr-only">Text</label>
                <input id="t-text" type="text" name="experience2" placeholder="Previous Work Experience 2" class="form-control" >
                <br>
                <label for="t-text" class="sr-only">Text</label>
                <input id="t-text" type="text" name="experience3" placeholder="Previous Work Experience 3" class="form-control" >
                <br>
                <label for="t-text" class="sr-only">Salary</label>
                <textarea id="t-text" type="text" name="salary" placeholder="Salary" class="form-control" required></textarea>
                <br>
                <label for="t-text" class="sr-only">Skills</label>
                <textarea id="t-text" type="text" name="skills" placeholder="Skills" class="form-control" required></textarea>
                <br>
                <label for="t-text" class="sr-only">Qualification</label>
                <textarea id="t-text" type="text" name="qualification" placeholder="Qualification" class="form-control" required></textarea>
                <br>
                <select class="custom-select mb-4" name="gender">
                    <option selected>Select Gender</option>
                    <option name="gender" value="male">Male</option>
                    <option name="gender" value="female">Female</option>
                </select>
                <br>
                <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile" name="cover_image">
                <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
                <br>
                <br>
                <button type="submit" class="btn btn-primary">Submit </button>
            </form>

        </div>
    </div>
</div>
            

@endsection

@section('scripts')
    
@endsection