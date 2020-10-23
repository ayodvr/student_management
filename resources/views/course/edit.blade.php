@extends('layouts.master')

@section('title')

    Admin |  Dashboard

@endsection

@section('main-content')


<div class="col-lg-12 col-12 layout-spacing">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">                                
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>Edit Course</h4>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area">
        <form method="POST" action="{{route('course.update', $course->id)}}">
            @csrf
            {{method_field('PUT')}}
                <div class="form-group mb-4">
                    <label for="exampleFormControlInput2">Course</label>
                <input type="text" name ="course_name" class="form-control" id="exampleFormControlInput2" value="{{$course->course_name}}">
                </div>
                <div class="form-group mb-4">
                    <label for="exampleFormControlSelect1">Duration</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option value="{{$course->id}}">{{$course->duration}}</option>
                        <option value="2">2</option>
                        <option value="2">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="form-group mb-4">
                    <label for="exampleFormControlSelect1">Description</label>
                    <input type="text" class="form-control" id="exampleFormControlInput2" value="{{$course->description}}">
                </div>
                <div class="form-group mb-4">
                    <label for="exampleFormControlSelect1">Price</label>
                    <input type="number" class="form-control" id="exampleFormControlInput2" value="{{$course->price}}">
                </div>
                <div class="form-group mb-4">
                    <label for="exampleFormControlSelect1">Slug</label>
                    <input type="text" class="form-control" id="exampleFormControlInput2" value="{{$course->slug}}">
                </div>
                <input type="submit" name="time" class="mt-4 mb-4 btn btn-primary">
            </form>
        </div>
    </div>
</div>

@endsection

@section('scripts')
    
@endsection