@extends('layouts.bootstraptemp')

@section('content')

    <div class="container" style="padding-top: 2%">
        <div class="card">
            <div class="card-header">
                Update records
            </div>
            <div class="card-body">
                <form action={{route('employees.update',$data->id)}} method="post">
                    @csrf
                    <input name="_method" type="hidden" value="PUT">
                    <input type="hidden" name="id" value={{$data->id}}>
                    Name
                    <input type="text" name="name" class="form-control" placeholder={{$data->name}} required>
                    Contact
                    <input type="text" name="contact" class="form-control" placeholder={{$data->contact}} required>
            
                    <button type="submit" class="btn btn-primary">Save update</button>
            
                </form>
            </div>
          </div>
    </div>
    
    
@endsection