@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Your Visa Application</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>No Passport</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            {{Auth::user()->email}}
                          </td>
                          <td>
                            {{$passport->no_passport}}
                          </td>
                          <td>
                            <a class="btn btn-info" href="#">View</a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
