@extends('admin.layouts.admin_temp')

  @section('admin_content')
  <div class="container my-5">
    <div class="mx-2">
      <h2 class="fw-bold fs-2 mb-5 pb-2">Edit USER</h2>
      <form action="{{ route('user.update', $user->id) }}" method="POST" class="px-md-5">
      @csrf
      @method('PUT')
        <div class="form-group mb-3 row">
          <label for="" class="form-label col-md-2 fw-bold text-md-end">Name:</label>
          <div class="col-md-5">
            <input type="text" placeholder="First Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name',$user->name) }}" required autocomplete="name" />
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
          </div>
          <div class="col-md-5">
            <input type="text" placeholder="Last Name" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name',$user->last_name) }}" required autocomplete="last_name" />
            @error('last_name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
          </div>
        </div>
        <div class="form-group mb-3 row">
          <label for="" class="form-label col-md-2 fw-bold text-md-end">Email:</label>
          <div class="col-md-10">
            <input type="email" placeholder="e.g. Jhon@example.com" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email',$user->email) }}" required autocomplete="email" />
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
          </div>
        </div>
        <div class="form-group mb-3 row">
          <label for="" class="form-label col-md-2 fw-bold text-md-end">Password:</label>
          <div class="col-md-10">
            <input type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" />
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
          </div>
        </div>
        <div class="form-group mb-3 row">
          <label for="" class="form-label col-md-2 fw-bold text-md-end">Confirm Password:</label>
          <div class="col-md-10">
            <input type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation"   />
            @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
          </div>
        </div>
        <div class="form-group mb-3 row">
          <label for="" class="form-label col-md-2 fw-bold text-md-end">Active:</label>
          <div class="col-md-10">
          <input type="hidden" name="active" value="0" />
            <input type="checkbox" class="form-check-input" style="padding: 0.7rem;" @checked(old('active',$user->active)) value="1" name="active" autocomplete="active" />
            @error('active')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
          </div>
        </div>
        <div class="text-md-end">
          <button class="btn mt-4 btn-secondary text-white fs-5 fw-bold border-0 py-2 px-md-5">
            Edit User
          </button>
        </div>
      </form>
    </div>
  </div>
  </main>
  @endsection
