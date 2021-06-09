@extends('layouts.admin')

@section('content')

<div class="container-fluid">
    <!-- begin row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-statistics">
                <div class="card-header">
                    <div class="card-heading">
                        <h4 class="card-title">All Requests</h4>
                    </div>
                </div>
                <div class="card-body">
                    @if(count($requests) == 0)
                    <div>There is no record</div>
                    @else
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>Vehicle Name</th>
                                    <th>Vehicle Number</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($requests as $item)
                                <tr>
                                    <td>{{$item->vehicle->name}}</td>
                                    <td>{{$item->vehicle->number}}</td>
                                    <td>
                                        @if($item->status == 0)
                                        <a href="javascript:void(0);" class="btn btn-round btn-inverse-warning">Pending</a>
                                        @else
                                        <a href="javascript:void(0);" class="btn btn-round btn-inverse-success">Approved</a>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
</div>
@endsection