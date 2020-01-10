@extends('layouts.app')

@section('content')
  <div class="container">
      <div class="row">
        <div class="col-md-12 py-3">
          <div class="card">
            <div class="card-header">
              <strong>Your Admin ID : ADM01 </strong>
            </div>
            <div class="card-body">
              <div class="row">
                    @foreach ($users as $u)
                <div class="col-md-6">
                  <ul class="list-group list-group-flush">
                  <li class="list-group-item">Reference Number :{{$u->application->no_referensi}}  </li>
                  <li class="list-group-item list-group-item-action list-group-item-secondary">Given Name : {{$u->passport->given_name}} </li>
                  <li class="list-group-item">Last Name : {{$u->passport->last_name}}s</li>
                  <li class="list-group-item list-group-item-action list-group-item-secondary  ">Email Address :{{$u->email}} </li>
                  <li class="list-group-item">Date of Birth : {{$u->passport->date_of_birth}}  </li>
                  <li class="list-group-item list-group-item-action list-group-item-secondary">Place of Birth : {{$u->passport->place_of_birth}}</li>
                </ul>
                </div>
                <div class="col-md-6">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Interview Date : {{$u->application->interview_date}}</li>
                    <li class="list-group-item list-group-item-action list-group-item-secondary">Contact Number : {{$u->contact_number}}</li>
                    <li class="list-group-item ">Address : {{$u->passport->address}} </li>
                    <li class="list-group-item list-group-item-action list-group-item-secondary">No Passport  : {{$u->passport->no_passport}} </li>
                    <li class="list-group-item">Date Issue : {{$u->passport->date_issue}}</li>
                    <li class="list-group-item list-group-item-action list-group-item-secondary">Expiry Date : {{$u->passport->expiry_date}}</li>
                  </ul>
                </div>
              @endforeach
              </div>
            </div>
          </div>
        </div>
  </div>


        {{--
              <div class="panel panel-default">
                  <div class="panel-heading text-center"></div>
                  <div class="panel-body ">
                    <div class="row">
                      @foreach ($users as $u)
                        <div class="col-md-6">
                          <p></p>
                          <p> </p>
                          <p> </p>
                          <p>  </p>
                          <p> </p>
                          <p></p>
                        </div>
                        <div class="col-md-6">
                          <p></p>
                          <p></p
                          <p> </p>
                          <p</p>

                        </div>
                        @endforeach
                      </div>
                    <hr>
                    <div class="row">

                     <div class="col-md-6 text-center">
                      <a class="btn btn-success btn-block" href="#"><i class="fa fa-folder-open" aria-hidden="true"></i>  Form Family Data</a><br>
                      <a class="btn btn-success btn-block" href="#"><i class="fa fa-folder-open" aria-hidden="true"></i>  Form Employment</a><br>
                    </div>
                     <div class="col-md-6 text-center">
                      <a class="btn btn-success btn-block" href="#"><i class="fa fa-folder-open" aria-hidden="true"></i>  Form Travel</a><br>
                    <a class="btn btn-success btn-block" href="http://localhost:8000/storage/{{$u->passport->given_name}}_{{$u->id_customer}}.pdf"><i class="fa fa-folder-open" aria-hidden="true"></i>  Form Upload Document</a>
                      </div>
                    </div>
                  </div>

                </div> --}}

        <div class="row">
          <div class="col-md-12">
            <div class="card">

            <div class="card-header">
              Admin Input
            </div>
            <div class="card-body text-center">
              <form action="/detail" method="post">
                {{csrf_field()}}
                  <div class="row">
                  <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Status</label>
                      <select class="form-control" name="status">
                        <option >Choose Status....</option>
                        <option value="Complete">Complete</option>
                        <option value="Incomplete">Incomplete</option>
                        <option value="Waiting Approval">Waiting Approval</option>
                        <option value="Out Scan From VAC">Out Scan From VAC </option>
                        <option value="In Scan From VAC">In Scan From VAC </option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="">Reference Number</label>
                      @foreach ($users as $u)
                      <input type="text"  class="form-control" name="no_referensi" value="{{$u->application->no_referensi}}" readonly>
                      @endforeach
                      <input type="hidden" name="user_id" value="{{$u->id}}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="comment">Additional Information</label>
                    <textarea class="form-control" rows="5" id="comment" name="add_info" placeholder="Add a message to the user : e.g the data you upload is not yet complete "></textarea>
                    </div>
                    <input type="submit" class="btn btn-primary btn-block" value="Submit">
                  </div>
                </div>
                  <div class="clearfix"></div>
                </div>
              </form>

          </div>
        </div>
  </div>
          </div>

@endsection
