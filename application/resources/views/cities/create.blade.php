@extends('layouts.app')

@section('content')

<form method="post" action="/cities">
@csrf

<div class="form-group">
    <input class="form-control" name="city_name" type="text" placeholder="City name">
</div>
<div class="form-group">
    <select class="form-control" name="country_id">
        @foreach($countries as $country)
        <option value="{{ $country->id }}">{{ $country->country_name }}</option>
        @endforeach
    </select>
</div>

@if($errors->count() > 0)
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $message)
            <?= $message ?>
        @endforeach
    </div>
@endif

<form method="post" action="/cities" class="col-md-5 mx-auto">

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection