@extends('layouts.app')

@section('content')
  <div class="container py-3">
      <div class="row">
          <div class="col-md-8 mx-auto">
              <div class="card">
                  <div class="card-header text-center"><strong> Konfirmasi </strong></div>
                  <div class="card-body ">
                      <form class="form-horizontal" action="/confirm" method="POST">
                          {{csrf_field()}}
                        {{-- <div class="form-group">
                          <label class="control-label" for="fullname">Your Reference Number</label> --}}
                          <input id="id-customer" type="hidden" class="form-control" name="no_referensi" value="UKR{{str_random(6)}}" readonly required>
                        {{-- </div> --}}
                        <div class="form-group">
                          <label class=" control-label" for="fullname">
                            Interview Date <br>
                            <small>select an interview date</small>
                          </label>
                                <input class="form-control" type="date" name="interview_date" value="" required>
                          </div>

                          <div class="form-group">
                            <label class="control-label" for="fullname">
                              Date Arrival <br>
                              <small>choose the date of arrival</small>
                            </label>
                                  <input class="form-control" type="date" name="date_arrival" value="" required>
                            </div>

                            <div class="text-center">

                              <input type="submit" class="btn btn-success" value="Save & Continue">

                          </form>
                      </div>

                        </div>






              </div>
          </div>
      </div>
  </div>
@endsection
