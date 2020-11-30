  @extends('layouts.master')

@section('title')
  Active | Student 
@endsection

@section('main-content')
  <div class="layout-px-spacing">
                
                <div class="row layout-top-spacing">
                
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            <div class="table-responsive mb-4 mt-4">
                                <table class="multi-table table table-hover" style="width:100%">
                                    <thead>
                                        <tr>

                                           <th>Name</th>
                                            <th>Gender</th>
                                            <th>State</th>
                                            <th>Phone</th>
                                            <th>Address</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            @foreach ($students as $row)
                                            <td>{{$row->fullname }}</td>
                                            <td>{{$row->gender}}</td>
                                            <td>{{$row->state}}</td>
                                            <td>{{$row->phone}}</td>
                                            <td>{{$row->address}}</td>
                                            <td>
                                                <div class="t-dot bg-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Normal"></div>
                                            </td>
                                            <td class="text-center"> <button class="btn btn-primary">view</button> </td>
                                             
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                           <th>Name</th>
                                            <th>Gender</th>
                                            <th>State</th>
                                            <th>Phone</th>
                                            <th>Address</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                               
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            @endsection

@section('scripts')
    
@endsection