@extends('layouts.master')

@section('title')

    Admin |  Dashboard

@endsection

@section('main-content')


<div class="col-lg-8 col-8 layout-spacing">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">                                
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>Add Course</h4>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area">
            <form>
                <div class="form-group mb-4">
                    <label for="exampleFormControlInput2">Course</label>
                    <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="Course">
                </div>
                <div class="form-group mb-4">
                    <label for="exampleFormControlSelect1">Duration</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>Select Duration</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="form-group mb-4">
                    <label for="exampleFormControlSelect1">Slug</label>
                    <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="Slug">
                </div>
                <input type="submit" name="time" class="mt-4 mb-4 btn btn-primary">
            </form>
        </div>
    </div>
</div>

@endsection

@section('scripts')
    
@endsection
