@extends('layouts.app')

@section('content')

<a class="btn btn-primary float-right" href="/persons/new">New</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">OIB</th>
      <th scope="col">First-Name</th>
      <th scope="col">Last-Name</th>
      <th scope="col">Sex</th>
      <th scope="col">DOB</th>
      <th scope="col">Telephone</th>
      <th scope="col">E-mail</th>
      <th scope="col">Address</th>
      <th scope="col">City Name</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($persons as $person)
    <tr>
      <td><?= $person->id ?></td>
      <td><?= $person->person_oib ?></td>
      <td><?= $person->person_firstName ?></td>
      <td><?= $person->person_lastName ?></td>
      <td><?= $person->person_sex ?></td>
      <td><?= $person->person_dob ?></td>
      <td><?= $person->person_telephone ?></td>
      <td><?= $person->person_email ?></td>
      <td><?= $person->person_address ?></td>
      <td><?= $person->city->city_name ?></td>
      <td><a href="/persons/delete/{{ $person->id }}" class="btn btn-sm btn-danger">X</a></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection