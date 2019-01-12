@extends('layouts.app')

@section('content')

<form method="post" action="/countries">
@csrf

<div class="form-group">
    <input class="form-control" name="country_code" type="text" placeholder="Country code">
</div>
<div class="form-group">
    <input class="form-control" name="country_name" type="text" placeholder="Country name">
</div>
<div class="form-group">
    <select class="form-control" name="continent_id">
        @foreach($continents as $continent)
        <option value="{{ $continent->id }}">{{ $continent->continent_name }}</option>
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

<form method="post" action="/countries" class="col-md-5 mx-auto">

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection