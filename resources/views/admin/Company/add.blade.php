@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">
        <h4>
            Add Company
        </h4>
    </div>
    <div class="card-body">
       <form action="{{url('insert-company')}}" enctype="multipart/form-data" method='post'>
           @csrf
           <div class="row">
               <div class="col-md-6 mb-3">
                   <label for="">
                       NAME
                   </label>
                   <input type="text" name="name" class="form-control" id="">
               </div>




               <div class="col-md-12 mb-3">
                   <label for="">
                        Email
                   </label>
                   <input type="email" name="email" class="form-control" >

               </div>

               <div class="col-md-12 mb-3">

                <input type="file" name="logo" class="form-control">

                </div>

               <div class="col-md-12 mb-3">
                <label for="">
                     website
                </label>
                <input type="text" name="website" class="form-control" >

            </div>

               <div class="col-md-12 mb-3">

               <button type="submit" class="btn btn-primary">submit</button>
               </div>





           </div>
       </form>
    </div>
</div>

@endsection
