@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">
        <h4>
            Edit/Update Company
        </h4>
    </div>
    <div class="card-body">
       <form action="{{url('update-company/'.$company->id)}}" method='post'>
           @csrf
           @method('put')
           <div class="row">
               <div class="col-md-6 mb-3">
                   <label for="">
                       NAME
                   </label>
                   <input type="text" name="name" value= "{{ $company->name }}" class="form-control" id="">
               </div>
               <div class="col-md-6 mb-3">
                   <label for="">
                       Email
                   </label>
                   <input type="email" name="email" value= "{{ $company->email }}" class="form-control" id="">
               </div>






               <div class="col-md-12 mb-3">
                   <label for="">
                       Website
                   </label>
                   <input type="text" name="website" value= "{{ $company->website }}" class="form-control" >

               </div>


               @if($company->logo )
               <img src="asset('assets/uploads/companylogo/'.$company->logo)" alt="">
               @endif
               <div class="col-md-12 mb-3">

               <input type="file" name="logo" class="form-control">

               </div>

               <div class="col-md-12 mb-3">

               <button type="submit" class="btn btn-primary">submit</button>
               </div>





           </div>
       </form>
    </div>
</div>

@endsection
