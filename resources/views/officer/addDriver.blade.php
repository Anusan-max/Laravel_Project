@extends('layouts.user')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 m-b-30">
            <div class="d-block d-sm-flex flex-nowrap align-items-center">
                <div class="page-title mb-2 mb-sm-0">
                    <h1>Add New Driver</h1>
                </div>
            </div>
        </div>
    </div>
    <form action="{{route('driver.store')}}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Input driver name">
            </div>
            <div class="col-md-6 mb-3">
                <label for="name">Vehicle Number</label>
                <select type="text" name="number" class="form-control">
                    <option value="">No Vehicle</option>
                    @foreach($vehicles as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </div>
    </form>
</div>
@endsection