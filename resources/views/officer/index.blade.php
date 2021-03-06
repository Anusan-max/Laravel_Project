@extends('layouts.user')

@section('content')

<div class="container-fluid">
    <!-- begin row -->
    <div class="row">
        <div class="col-md-12 m-b-30">
            <!-- begin page title -->
            <div class="d-block d-sm-flex flex-nowrap align-items-center">
                <div class="page-title mb-2 mb-sm-0">
                    <h1>Vehicle List</h1>
                </div>
            </div>
            <!-- end page title -->
        </div>
    </div>
    <!-- end row -->
    <!-- begin row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-statistics">
                <div class="card-header">
                    <div class="card-heading">
                        <h4 class="card-title">Vehicles</h4>
                    </div>
                </div>
                <div class="card-body">
                    @if(count($vehicles) == 0)
                    <div>There is no record</div>
                    @else
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Number</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($vehicles as $item)
                                <tr>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->number}}</td>
                                    <td>
                                        <a href="{{route('vehicle.edit', $item->id)}}" class="btn btn-sm btn-primary">Edit</a>
                                        <a href="{{route('vehicle.delete', $item->id)}}" class="btn btn-sm btn-danger">Delete</a>
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