@extends('layouts.app')

@section('content')

<form method="post" action="/persons">
@csrf

<div class="form-group">
    <input class="form-control" name="person_oib" type="text" placeholder="OIB">
</div>
<div class="form-group">
    <input class="form-control" name="person_firstName" type="text" placeholder="First name">
</div>
<div class="form-group">
    <input class="form-control" name="person_lastName" type="text" placeholder="Last name">
</div>
<div class="form-group">
    <input class="form-control" name="person_sex" type="text" placeholder="Sex">
</div>
<div class="form-group">
    <input class="form-control" name="person_dob" type="text" placeholder="Date of Birth">
</div>
<div class="form-group">
    <input class="form-control" name="person_telephone" type="text" placeholder="Telephone">
</div>
<div class="form-group">
    <input class="form-control" name="person_email" type="text" placeholder="E-Mail">
</div>
<div class="form-group">
    <input class="form-control" name="person_address" type="text" placeholder="Address">
</div>
<div class="form-group">
    <select class="form-control" name="city_id">
        @foreach($cities as $city)
        <option value="{{ $city->id }}">{{ $city->city_name }}</option>
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