@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row">
            <div class="card w-75 mx-auto">
                <div class="card-header text-center">Your Customer ID : {{Auth::user()->id_customer}}    </div>
                <div class="card-body text-center">
              @if(Auth::user()->role == "Admin")
                    <div class="alert alert-info alert-dismissable">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      Welcome Admin
                    </div>
                  <a href="/personal" class="btn btn-primary btn-lg btn-block disabled">Daftar Online</a>
                  <a href="/view-application" class="btn btn-primary btn-lg btn-block disabled">View My Application</a>
                  <a href="/status" class="btn btn-primary btn-lg btn-block disabled">Application Status</a>
                  <a href="/verification" class="btn btn-primary btn-lg btn-block">Verification</a>
              @else
              <div class="alert alert-info alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                Welcome
                @if(empty(Auth::user()->passport->given_name))
                    @if(empty(Auth::user()->passport))
                    , Regist now!!
                    @else

                    @endif
                @else
                <strong>{{Auth::user()->passport->given_name}}</strong>
                @endif

                @if(empty(Auth::user()->verification->status))
                {{-- Your visa application is being validated. --}}
                @elseif(empty(Auth::user()->application))
                Regist Now.
                @else
                , Status : <p class="d-inline"><strong> {{Auth::user()->verification->status}}</strong></p>
                @endif
              </div>

                @if(empty(Auth::user()->application))
                <a href="/personal" class="btn btn-primary btn-lg btn-block">Daftar Online</a>
                @elseif(empty(Auth::user()->verification->status))
                  <a href="/view-application" class="btn btn-primary btn-lg btn-block ">View My Application</a>
                  <a href="/status" class="btn btn-primary btn-lg btn-block ">Application Status</a>
                @else

                @endif

                @if(empty(Auth::user()->verification))

                @else
                <a href="/view-application" class="btn btn-primary btn-lg btn-block">View My Application</a>
                <a href="/status" class="btn btn-primary btn-lg btn-block">Application Status</a>
                @endif
              @endif
                </div>
              <div class="card-footer">
                <a href="">www.jabar.co.id</a>
              </div>
        </div>
</div>
</div>
@endsection
