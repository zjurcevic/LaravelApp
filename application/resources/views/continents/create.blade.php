@extends('layouts.app')

@section('content')

<form method="post" action="/continents">
@csrf

<div class="form-group">
    <input class="form-control" name="continent_name" type="text" placeholder="Continent Name">
</div>
<div class="form-group">
    <input class="form-control" name="number_of_countries" type="number" placeholder="No. of Countries">
</div>
<div class="form-group">
    <input class="form-control" name="native_name" type="text" placeholder="Native Name">
</div>

@if($errors->count() > 0)
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $message)
            <?= $message ?>
        @endforeach
    </div>
@endif

<form method="post" action="/continents" class="col-md-5 mx-auto">

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection