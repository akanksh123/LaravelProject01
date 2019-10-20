@extends('layouts.admin')

@section('content')
<section class="content">
    <div class="container-fluid">
    <p>
    <a href="{{route('adduser.create')}}" class="btn btn-primary">Add New User</a>
    </p>
        <table class="table table-bordered table-striped">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Location</th>
                <th>Unit</th>
                <th>Status</th>
                
                <th>Action</th>
            </tr>
            @foreach ($adduser as $t )
                <tr>
                    <td>{{$t->id}}</td>
                    <td>{{$t->name}}</td>
                    <td>{{$t->email}}</td>
                    <td>{{$t->location}}</td>
                    <td>{{$t->unit}}</td>
                    <td>{{$t->status}}</td>
                    <td><a href="{{route('adduser.edit',$t->id)}}" class="btn btn-info">Edit</a><a href="javascript:void(0)"onclick="$(this).parent().find('form').submit()" class="btn btn-danger">Delete</a>
                    <form Action="{{route('adduser.destroy',$t->id)}}" method="post">
                    @method('DELETE')
                    @csrf
                    </form>
                    </td>
                </tr>
                
            @endforeach
        </table>
    </div>
</section>
@endsection