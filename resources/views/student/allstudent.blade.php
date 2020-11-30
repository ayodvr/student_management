  @extends('layouts.master')

@section('title')
  All |Student 
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
                                            <th class="text-center">Local Gov</th>
                                            <th class="text-center">Data Of Entry</th>
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
                                                {{$row->lga}}
                                            </td>
                                            <td>
                                                {{$row->date_entry}}
                                            </td>
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
                                            <th class="text-center">Local Gov</th>
                                            <th class="text-center">Data Of Entry</th>
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