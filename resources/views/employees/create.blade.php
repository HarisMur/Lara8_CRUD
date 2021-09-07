@extends('layouts.bootstraptemp')

@section('content')
<div class="container" style="padding-top: 2%">
    <div class="card">
    <div class="card-header">
        Create new records
    </div>
    <div class="card-body">
        <form action="{{route ('employees.store')}}" method="post">
            @csrf
            Name
            <input type="text" name="name" class="form-control" required>
            Contact
            <input type="text" name="contact" class="form-control" required>
    
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
  </div>
</div>

    @if ($message = Session::get('Success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif
    
    
@endsection