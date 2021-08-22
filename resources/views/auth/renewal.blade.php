@extends('templates.main')

@section('content')
    
  <section id="authContent" class="d-flex justify-content-center align-items-center">
    <div class="container register-content">
      <h1 class="login-title text-center fw-bold mb-4">Renewal</h1>
      <form action="/renewal" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-sm-6">
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">
                <i class="fas fa-fw fa-user"></i>
              </span>
              <input register type="text" name="username" class="form-control @error('username') is-invalid @enderror" placeholder="Username" autofocus value="{{ old('username') }}">
              @error('username')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">
                <i class="fas fa-fw fa-lock"></i>
              </span>
              <input register type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
              @error('password')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>
          <div class="col-sm-6">
            <input register type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}">
            @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
            <input register type="text" name="member_id" class="form-control mt-3 @error('member_id') is-invalid @enderror" placeholder="Member ID" value="{{ old('member_id') }}">
            @error('member_id')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
        </div>
        <p class="fw-bold register-notes mb-1">Upload the screenshot of your Instagram Story & fee payment transaction!</p>
        <div class="mb-3">
          <label class="register-notes mb-2">Please <strong>upload the screenshot of Instagram Story</strong></label>
          <input register class="form-control @error('screenshot') is-invalid @enderror" type="file" id="formFileMultiple" name="screenshot">
          @error('screenshot')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3">
          <label class="register-notes mb-2">Please <strong>upload the screenshot of the fee payment transaction</strong></label>
          <input register class="form-control @error('payment') is-invalid @enderror" type="file" id="formFileMultiple" name="payment">
          @error('payment')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="text-center">
          <button type="submit" class="register-button">Renew Membership</button>
        </div>
      </form>
    </div>
    <div class="button-back">
      <i class="fas fa-3x fa-chevron-circle-left" onclick="window.history.back();"></i>
    </div>
  </section>

@endsection