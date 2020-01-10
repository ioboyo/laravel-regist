@extends('layouts.app')

@section('content')
  <div class="container my-3">
      <div class="row">
          <div class="col-md-8 mx-auto">
              <div class="card">
                  <div class="card-header text-center"><strong>Your Customer ID : {{Auth::user()->id_customer}} </strong></div>
                  <div class="card-body ">
                      <form class="form-horizontal" action="/personal" method="POST">
                        <div class="col-md-12 text-center">
                          <h3>Personal Information</h3>
                          <hr>
                        </div>
                        <div class="form-group">
                          <label class="control-label" for="fullname">Nama Depan</label>
                          <input class="form-control  text-capitalize " type="text" name="given_name" value="" required>
                        </div>
                        <div class="form-group">
                          <label class="control-label " for="fullname">Nama Belakang</label>
                          <input class="form-control text-capitalize" type="text" name="last_name" value=""  required>
                        </div>
                        <div class="form-group">
                          <label class=" control-label" for="fullname">Tanggal Lahir</label>
                          <input class="form-control" type="date" name="birth" value="">
						  <p><font color="red">{{ $errors->first('birth') }}</font></p>
						     
                        </div>
                        <div class="form-group">
                          <label class=" control-label" for="fullname">Jenis Kelamin</label>
                          <select class="form-control text-capitalize" type="text" name="place_of_birth" value="" required>						  
							<option value="volvo">Laki-Laki</option>
							<option value="saab">Perempuan</option>
							<option value="fiat">Other</option>
						  </select>
                        </div>
                        <div class="form-group">
                          <label class="control-label" for="fullname">Nomor HP</label>
                          <input class="form-control" type="text" name="contact_number" value="{{Auth::user()->contact_number}}" readonly required>
                        </div>
                        <div class="form-group">
                          <label class=" control-label" for="fullname">Alamat</label>
                          <textarea class="form-control  text-capitalize" name="address"> </textarea required>
                        </div>
                    <!--   <div class="col-md-12 text-center">
                          <h3>Passport Information</h3>
                          <hr>
                        </div>
                        <div class="form-group">
                          <label class=" control-label" for="fullname">No. Passport</label>
                          <input class="form-control text-uppercase" type="text" name="no_passport" value="" required>
                        </div>
                        <div class="form-group">
                          <label class=" control-label" for="fullname">Issue Date</label>
                          <input class="form-control" type="date" name="date_issue" value="" required>
                        </div>
                        <div class="form-group">
                          <label class=" control-label" for="fullname">Expiry Date</label>
                          <input class="form-control" type="date" name="expiry_date" value="" required>
                        </div> -->
                          {{csrf_field()}}
                  </div>
                  <div class="card-footer clearfix">
                    <a href="/home" class="btn btn-primary float-left"><i class="fa fa-caret-left" aria-hidden="true"></i>  Back</a>
                    <input type="submit" class="btn btn-success float-right" value="Save & Continue">
                  </div>
                </form>
              </div>
          </div>
      </div>
  </div>
@endsection
