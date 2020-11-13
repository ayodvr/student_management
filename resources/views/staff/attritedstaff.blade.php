@extends('layouts.master')

@section('title')
    Attritted Staff |  Dashboard
@endsection

@section('main-content')


<div id="tableStriped" class="col-lg-12 col-12 layout-spacing">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>Attritted Staff</h4>
                </div>                 
            </div>
        </div>
    
                            <div class="widget-content widget-content-area">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped mb-4">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th class="text-center">Status</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
        @if($staffs)
        @foreach ($staffs as $staff)
                                            <tr>
                                                <td>
                                                    <div class="d-flex">
                                                        <div class="usr-img-frame mr-2 rounded-circle">
                                                            <img alt="avatar" class="img-fluid rounded-circle" src="{{asset('assets/img/boy.png') }}">
                                                        </div>
                                                        <p class="align-self-center mb-0"><?=$staff->fname ." ". " ". $staff->lname?></p>
                                                    </div>
                                                </td>
                                                <td><?=$staff->email?></td>
                                                <td><?=$staff->phone?></td>
                                                <td class="text-center"><span class="badge badge-success">Approved</span></td>
                                                <td class="text-center">
                                                    <ul class="table-controls">
                                                        <li><a href="/attrited/{{$staff->id}}" a>Restore</li>
                                                    </ul>
                                                </td>
            @endforeach
            @endif
                                        </tbody>
                                    </table>
                                </div>

                            </div>
    

    </div>
</div>
            

                



@endsection

@section('scripts')
    
@endsection