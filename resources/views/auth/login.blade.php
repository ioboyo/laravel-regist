@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row py-5">
      <div class="col-md-4 mx-auto">

            <div class="card">
                <div class="card-header">Login</div>
              <div class="card-body">

                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            {{-- <label for="email" class="control-label">E-Mail Address</label> --}}
                            <div>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <div class="input-group-text">@</div>
                                </div>
                                <input id="email" type="email" class="form-control" name="email" value="" placeholder="Username" required autofocus>
                              </div>


                                @if ($errors->has('email'))
                                    <div class="alert alert-danger" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                @endif

                                @if ($errors->has('user_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('user_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            {{-- <label for="password" class="control-label">Password</label> --}}

                            <div>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="fa fa-key" aria-hidden="true"></i></div>
                                </div>
                                  <input id="password" type="password" class="form-control" name="password" placeholder="Password"  required>
                              </div>


                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group text-center">
                          <button type="submit" class="btn btn-outline-primary btn-block "> Login</button>
                      </div>

                        </div>
                        <div class="card-footer">
                          <div class="checkbox">
                          <label>
                              <input style="font-size:10px;" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> <small>Remember Me</small>
                          </label>
                    
                              <a class="btn btn-link float-right" href="{{ route('password.request') }}"><small>Forgot Your Password?</small></a>


                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>

      </div>
@endsection
