@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row">
            <div class="card border-secondary w-50 mx-auto">
                <div class="card-header border-secondary">Register</div>

                <div class="card-body border-info">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            {{-- <label for="id-customer" class="col-md-4 control-label">ID Customer</label> --}}
                            <div>
                                <input id="id-customer" type="hidden" class="form-control" name="id_customer" value="UK{{str_random(3)}}" readonly required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">User Name</label>
                            <div >
                                <input id="name" type="text" class="form-control" name="user_name" value="{{ old('user_name') }}" placeholder="" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="contact_number" class="col-md-4 control-label">Contact Number</label>
                            <div>
                                <input id="contact_number" type="text" class="form-control" name="contact_number" value="{{ old('contact_number') }}" placeholder="08521441414" required>
                                @if ($errors->any())
                                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                      @foreach ($errors->all() as $error)
                                      {{ $error }}
                                      @endforeach
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                  </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Email Address</label>

                            <div>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div>
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">

                                <button type="submit" class="btn btn-primary float-right">
                                    Register
                                </button>

                        </div>
                    </form>
                </div>
            </div>
</div>
@endsection
