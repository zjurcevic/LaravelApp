@extends('layouts.app')

@section('content')

<form method="post" action="/accounts">
@csrf

<div class="form-group">
    <input class="form-control" name="account_number" type="text" placeholder="Account Number">
</div>
<div class="form-group">
    <input class="form-control" name="account_iban" type="text" placeholder="Account IBAN">
</div>
<div class="form-group">
    <input class="form-control" name="account_currency" type="text" placeholder="Account Currency">
</div>
<div class="form-group">
    <input class="form-control" name="account_type" type="text" placeholder="Account Type">
</div>
<div class="form-group">
    <input class="form-control" name="account_limit" type="text" placeholder="Account Limit">
</div>
<div class="form-group">
    <input class="form-control" name="account_interest" type="text" placeholder="Account Interest">
</div>
<div class="form-group">
    <input class="form-control" name="account_balance" type="text" placeholder="Account Balance">
</div>
<div class="form-group">
    <input class="form-control" name="account_openDate" type="text" placeholder="Open Date">
</div>
<div class="form-group">
    <input class="form-control" name="account_closeDate" type="text" placeholder="Close Date">
</div>
<div class="form-group">
    <select class="form-control" name="person_id">
        @foreach($persons as $person)
        <option value="{{ $person->id }}">{{ $person->person_lastName }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <select class="form-control" name="bank_id">
        @foreach($banks as $bank)
        <option value="{{ $bank->id }}">{{ $bank->bank_name }}</option>
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

<form method="post" action="/accounts" class="col-md-5 mx-auto">

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection