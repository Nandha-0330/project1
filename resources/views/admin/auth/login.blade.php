@extends('layouts.app')
@section('pageTitle', 'SmartTitle')
@section('content')
@if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
        @endif
        @if (session('alert'))
                    <div class="alert alert-success">
                        {{ session('alert') }}
                    </div>
        @endif
<div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h4>Login</h4>
          </div>
          <div class="card-body">
            <form action="{{ route('admin.login') }}" method="post">
            @csrf
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
              </div>
              <button type="submit" class="btn btn-primary">Login</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  @endsection
