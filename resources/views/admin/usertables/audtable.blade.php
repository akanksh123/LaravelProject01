@extends('layouts.admin')

@section('content')
<section class="content">
    <div class="container-fluid">
    <p>
    <a href="{{route('audtable.create')}}" class="btn btn-primary">Add new detail</a>
    </p>
        <table class="table table-bordered table-striped">
            <tr>
                <th>ID</th>
                <th>SV</th>
                <th>Control</th>
                <th>Observation</th>
                <th>Severity</th>
                <th>Closure</th>
                <th>Closure Date</th>
                <th>Remarks</th>
                <th>Action</th>
            </tr>
            @foreach ($audittable as $t )
                <tr>
                    <td>{{$t->id}}</td>
                    <td>{{$t->SV}}</td>
                    <td>{{$t->Control}}</td>
                    <td>{{$t->Observation}}</td>
                    <td>{{$t->Severity}}</td>
                    <td>{{$t->Closure}}</td>
                    <td>{{$t->ClosureDate}}</td>
                    <td>{{$t->Remarks}}</td>
                    <td><a href="{{route('audtable.edit',$t->id)}}" class="btn btn-info">Edit</a>
                    <a href="javascript:void(0)"onclick="$(this).parent().find('form').submit()" class="btn btn-danger">Delete</a>
                    <form Action="{{route('audtable.destroy',$t->id)}}" method="post">
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