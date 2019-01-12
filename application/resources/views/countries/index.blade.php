@extends('layouts.app')

@section('content')

<a class="btn btn-primary float-right" href="/countries/new">New</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Code</th>
      <th scope="col">Name</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($countries as $country)
    <tr>
      <td><?= $country->id ?></td>
      <td><?= $country->country_code ?></td>
      <td><?= $country->country_name ?></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection