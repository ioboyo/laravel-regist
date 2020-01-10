@extends('layouts.app')

@section('content')
  <div class="container py-5">
    <div class="row">
      <div class="col-sm-6">
     
    </div>
    <div class="col-sm-6">
      
      </div>
    </div>
    </div>

      <div class="row py-3">
        <div class="col-md-12">
              <div class="card mx-auto">
                  <div class="card-header text-center">
                    <strong>Registrasi Berhasil : {{Auth::user()->id_customer}} </strong>
                  </div>
                 
              </div>
        </div>
  </div>

@endsection
