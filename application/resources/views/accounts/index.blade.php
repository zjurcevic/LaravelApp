@extends('layouts.app')

@section('content')

<a class="btn btn-primary float-right" href="/accounts/new">New</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Number</th>
      <th scope="col">IBAN</th>
      <th scope="col">Currency</th>
      <th scope="col">Type</th>
      <th scope="col">Limit</th>
      <th scope="col">Interest</th>
      <th scope="col">Balance</th>
      <th scope="col">Open-Date</th>
      <th scope="col">Close-Date</th>
      <th scope="col">Ime</th>
      <th scope="col">Ime Banke</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($accounts as $account)
    <tr>
      <td><?= $account->id ?></td>
      <td><?= $account->account_number ?></td>
      <td><?= $account->account_iban ?></td>
      <td><?= $account->account_currency ?></td>
      <td><?= $account->account_type ?></td>
      <td><?= $account->account_limit ?></td>
      <td><?= $account->account_interest ?></td>
      <td><?= $account->account_balance ?></td>
      <td><?= $account->account_openDate ?></td>
      <td><?= $account->account_closeDate ?></td>
      <td><?= $account->person->person_firstName ?></td>
      <td><?= $account->bank->bank_name ?></td>
      <td><a href="/accounts/delete/{{ $account->id }}" class="btn btn-sm btn-danger">X</a></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection