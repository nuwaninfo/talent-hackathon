@extends('layouts.app')

@section('content')
@if (\Session::has('success'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif
<form action="{{ route('student.store') }}" method="post">
    @csrf
    <div class="row mb-3">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
      <div class="col-sm-10">
        <input type="text" name="name" class="form-control" id="inputEmail3">
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="text" name="email" class="form-control" id="inputPassword3">
      </div>
    </div>

    <button type="submit" class="btn btn-primary">Sign in</button>
  </form>
@endsection
