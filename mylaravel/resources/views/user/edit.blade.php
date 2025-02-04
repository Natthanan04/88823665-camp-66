@extends('layouts.default')

@section('content')
<div class="register-page">
<div class="register-box">
    <div class="register-logo">
      <a href="../index2.html"><b>Edit</b>user</a>
    </div>
    <!-- /.register-logo -->
    <div class="card">
      <div class="card-body register-card-body border border-black rounded-3">
        <p class="register-box-msg">Edit user</p>
        <form action="{{ url('/user') }}" method="post">
            @csrf
            @method('put')
            <input type="hidden" name="id" value="{{ $user->id }}" />
          <div class="input-group mb-3">
            <input type="text" value="{{ $user->name}}" name="name" class="form-control" placeholder="Full Name" />
            <div class="input-group-text"><span class="bi bi-person"></span></div>
          </div>
          <div class="input-group mb-3">
            <input type="email" value="{{ $user->email}}" name="email" class="form-control" placeholder="Email" />
            <div class="input-group-text"><span class="bi bi-envelope"></span></div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password" />
            <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
          </div>
          <!--begin::Row-->
            <!-- /.col -->
            <div class="col-4">
              <div class="d-grid gap-2">
                <a href="{{ url('/user',$user->id) }}">
                <button type="submit" class="btn btn-success">Confirm</button>
                </a>
              </div>
            </div>
            <!-- /.col -->
          </div>
          <!--end::Row-->
        </form>

      <!-- /.register-card-body -->
    </div>
  </div>
</div>
  @endsection
