@extends('layouts.master')

@section('title')
    Admin |  Dashboard
@endsection

@section('main-content')

<div class="layout-px-spacing">
                
    <div class="row layout-top-spacing">
    
        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="widget-content widget-content-area br-6">
                <div class="table-responsive mb-4 mt-4">
                    <table class="multi-table table table-striped table-bordered table-hover non-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>Course</th>
                                <th>Duration</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Slug</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($courses as $course)
                            <tr>
                            <td>{{$course->course_name}}</td>
                                <td>{{$course->duration}}</td>
                                <td>{{$course->description}}</td>
                                <td>{{$course->price}}</td>
                                <td>{{$course->slug}}</td>
                                <td>
                                    <div class="dropdown custom-dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                        <a class="dropdown-item" href="/course/{{$course->id}}/edit">Edit</a>
                                        <form action="{{ route('course.destroy' , $course->id ) }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button class="btn-sm btn btn-outline-danger" 
                                             type="submit">
                                            Delete</button>
                                        </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

</div>


@endsection

@section('scripts')
    
@endsection