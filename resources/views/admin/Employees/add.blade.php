@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>
                Add Employe
            </h4>
        </div>
        <div class="card-body">
            <form action="{{ url('add-employe') }}" method='post' enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <select class="form-select" name="comp_id">
                            <option selected>Select a Company</option>
                            @foreach ($company as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">
                            NAME
                        </label>
                        <input type="text" name="name" class="form-control" id="">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">
                            Email
                        </label>
                        <input type="email" name="email" class="form-control" id="">
                    </div>


                    <div class="col-md-12 mb-3">
                        <label for="">
                            Phone
                        </label>
                        <input type="number" name="phone" class="form-control">

                    </div>


                    <div class="col-md-12 mb-3">

                        <button type="submit" class="btn btn-primary">submit</button>
                    </div>





                </div>
            </form>
        </div>
    </div>
@endsection
