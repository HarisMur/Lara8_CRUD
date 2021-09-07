@extends('layouts.bootstraptemp')

@section('content')
    <div class="container" style="padding-top: 20px">
        @if ($message = Session::get('Success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif
        <div class="card">
            <div class="card-header">
                CRUD Function
            </div>
            <div class="card-body">
                <table class="table">        
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Contact</th>
                        <th colspan="2">Action</th>
                    </tr>
                    @foreach ($data as $d)
                    <tr>
                        <td>{{$d->id}}</td>
                        <td>{{$d->name}}</td>
                        <td>{{$d->contact}}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <a type="button" class="btn btn-warning" href={{route('employees.edit',$d->id)}}>Edit</a>
        
                                <form method="POST" action={{route('employees.destroy',$d->id)}}>
                                    @csrf
                                    <input name="_method" type="hidden" value="DELETE">
                                    <button class="btn btn-danger" onclick="return confirm('Are you sure to delete record id:{{$d->id}}')" type="submit">Delete
                                    <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                        </td>                       
                    </tr>
                    @endforeach
                </table>
            </div>
          </div>       
    </div>
@endsection