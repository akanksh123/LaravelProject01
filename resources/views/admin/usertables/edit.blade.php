@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">EDIT DETAIL</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('audtable.update',$audit->id) }}">
                        @csrf

                        <div class="form-group row">
                            <label for="sv" class="col-md-4 col-form-label text-md-right">SV</label>

                            <div class="col-md-6">
                                <input id="sv" type="text" class="form-control " name="sv" value="{{$audit->SV}}" required autocomplete="sv" autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="control" class="col-md-4 col-form-label text-md-right">Control</label>

                            <div class="col-md-6">
                                <input id="control" type="text" class="form-control" name="control" value="{{$audit->Control}}" required autocomplete="control">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="observation" class="col-md-4 col-form-label text-md-right">Observation</label>

                            <div class="col-md-6">
                                <input id="observation" type="text" class="form-control " name="observation"value="{{$audit->Observation}}" required autocomplete="observation">

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="severity" class="col-md-4 col-form-label text-md-right">Severity</label>

                            <div class="col-md-6">
                                <input id="severity" type="text" class="form-control " name="severity"value="{{$audit->Severity}}" required autocomplete="severity">

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="closure" class="col-md-4 col-form-label text-md-right">Closure</label>

                            <div class="col-md-6">
                                <input id="closure" type="text" class="form-control" name="closure"value="{{$audit->Closure}}" required autocomplete="closure">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="closuredate" class="col-md-4 col-form-label text-md-right">Closure Date</label>

                            <div class="col-md-6">
                                <input id="closuredate" type="date" class="form-control" name="closuredate" value="{{$audit->ClosureDate}}"required autocomplete="closuredate">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="remarks" class="col-md-4 col-form-label text-md-right">Remarks</label>

                            <div class="col-md-6">
                                <input id="remarks" type="text" class="form-control" name="remarks"value="{{$audit->Remarks}}" required autocomplete="remarks">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    SAVE
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection