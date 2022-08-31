@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>
                Edit Emoloye Details
            </h4>
        </div>
        <div class="card-body">
            <form action="{{ url('update-employe/' . $employe->id) }}" method='post' enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="">Company</label>
                        <select class="form-select">
                            <option value="">{{ $employe->company->name }}</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">
                            NAME
                        </label>
                        <input type="text" name="name" class="form-control" value="{{ $employe->name }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">
                            Email
                        </label>
                        <input type="email" name="email" value="{{ $employe->email }}" class="form-control"
                            id="">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">
                            Phone
                        </label>
                        <input type="number" name="phone" value="{{ $employe->phone }}">
                    </div>







                    <div class="col-md-12 mb-3">

                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>





                </div>
            </form>
        </div>
    </div>
@endsection
