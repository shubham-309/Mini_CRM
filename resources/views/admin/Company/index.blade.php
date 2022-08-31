@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">
        <h4>
            company Details
        </h4>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Logo</th>
                    <th>Website</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($company as $item)
                <tr>
                    <td>{{ $item->id}}</td>
                    <td>{{ $item->name}}</td>
                    <td>{{ $item->email}}</td>
                    <td>
                        <img src="{{asset('/assets/uploads/companylogo/'.$item->logo)}}" class='logo' alt="Image Here" >
                    </td>
                    <td>{{$item->website}}</td>
                    <td>
                        <a href="{{url('edit-company/'.$item->id)}}" class="btn btn-primary edit">Edit</a>
                        <a href="{{url('delete-company/'.$item->id)}}" class="btn btn-danger delete">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
