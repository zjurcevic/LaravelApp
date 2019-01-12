@extends('layouts.app')

@section('content')

<form method="post" action="/banks">
@csrf

<div class="form-group">
    <input class="form-control" name="bank_name" type="text" placeholder="Bank Name">
</div>
<div class="form-group">
    <input class="form-control" name="bank_oib" type="text" placeholder="Bank OIB">
</div>

@if($errors->count() > 0)
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $message)
            <?= $message ?>
        @endforeach
    </div>
@endif

<form method="post" action="/banks" class="col-md-5 mx-auto">

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection