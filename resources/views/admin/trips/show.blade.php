@extends('layouts/admin')

@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                </div>

                <h2 class="profile-username text-center"><b>{{$car->car_model->model}}</b></h2>

                <p class="text-muted text-center">{{($car->rent_sell==1)?'For Rent':'For Sell'}}</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                      @php $type = ['1'=>'Touring','2'=>'Motor','3'=>'Shipping']; @endphp
                    <b>Car Type</b> <a class="float-right">{{($car->car_type)?$type[$car->car_type]:''}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Engine No</b> <a class="float-right">{{$car->engine_num}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Register Year</b> <a class="float-right">{{$car->year}}</a>
                  </li>

                    @php $body_type = ['1'=>'SUV','2'=>'Sport','3'=>'Family','4'=>'Sedan']; @endphp
                    <li class="list-group-item">
                        <b>Body Type</b> <a class="float-right">{{($car->body_type)?$body_type[$car->body_type]:''}}</a>
                    </li>
                    <li class="list-group-item">
                        <b>Color</b> <a class="float-right">{{$car->color}}</a>
                    </li>
                    <li class="list-group-item">
                        <b>Auto/Manual</b> <a class="float-right">{{($car->auto==1)?'Auto':'Manual'}}</a>
                    </li>


                </ul>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Other Details</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                      <div class="row">
                          <div class="col-12 col-sm-4">
                              <div class="info-box bg-light">
                                  <div class="info-box-content">
                                      <span class="info-box-text text-center text-muted">Seats No</span>
                                      <span class="info-box-number text-center text-muted mb-0">{{$car->seats_num}}</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-12 col-sm-4">
                              <div class="info-box bg-light">
                                  <div class="info-box-content">
                                      <span class="info-box-text text-center text-muted">Chassis No</span>
                                      <span class="info-box-number text-center text-muted mb-0">{{$car->chassis_num}}</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-12 col-sm-4">
                              <div class="info-box bg-light">
                                  <div class="info-box-content">
                                      <span class="info-box-text text-center text-muted">Identifier in Country</span>
                                      <span class="info-box-number text-center text-muted mb-0">{{$car->identifier_country}}</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-12 col-sm-4">
                              <div class="info-box bg-light">
                                  <div class="info-box-content">
                                      <span class="info-box-text text-center text-muted">Engine Capacity</span>
                                      <span class="info-box-number text-center text-muted mb-0">{{$car->engine_capacity}}</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-12 col-sm-4">
                              <div class="info-box bg-light">
                                  <div class="info-box-content">
                                      <span class="info-box-text text-center text-muted">Engine Power</span>
                                      <span class="info-box-number text-center text-muted mb-0">{{$car->power}}</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-12 col-sm-4">
                              <div class="info-box bg-light">
                                  <div class="info-box-content">
                                      <span class="info-box-text text-center text-muted">Engine Power(PS)</span>
                                      <span class="info-box-number text-center text-muted mb-0">{{$car->power_ps}}</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-12 col-sm-4">
                              <div class="info-box bg-light">
                                  <div class="info-box-content">
                                      <span class="info-box-text text-center text-muted">Weight & Moment Engine</span>
                                      <span class="info-box-number text-center text-muted mb-0">{{$car->weight_torque}}kw/kg</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-12 col-sm-4">
                              <div class="info-box bg-light">
                                  <div class="info-box-content">
                                      <span class="info-box-text text-center text-muted"> Weight (Empty)</span>
                                      <span class="info-box-number text-center text-muted mb-0">{{$car->weight}}kg</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-12 col-sm-4">
                              <div class="info-box bg-light">
                                  <div class="info-box-content">
                                      <span class="info-box-text text-center text-muted"> Gross Weight</span>
                                      <span class="info-box-number text-center text-muted mb-0">{{$car->gross_weight}}kg</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-12 col-sm-4">
                              <div class="info-box bg-light">
                                  <div class="info-box-content">
                                      <span class="info-box-text text-center text-muted"> Full Weight</span>
                                      <span class="info-box-number text-center text-muted mb-0">{{$car->full_weight}}kg</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-12 col-sm-4">
                              <div class="info-box bg-light">
                                  <div class="info-box-content">
                                      <span class="info-box-text text-center text-muted"> Locomotive Weight</span>
                                      <span class="info-box-number text-center text-muted mb-0">{{$car->locomotive_weight}}kg</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-12 col-sm-4">
                              <div class="info-box bg-light">
                                  <div class="info-box-content">
                                      <span class="info-box-text text-center text-muted"> Permitted Weight on Roof</span>
                                      <span class="info-box-number text-center text-muted mb-0">{{$car->weight_on_roof}}kg</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-12 col-sm-4">
                              <div class="info-box bg-light">
                                  <div class="info-box-content">
                                      <span class="info-box-text text-center text-muted"> Car Code in EU</span>
                                      <span class="info-box-number text-center text-muted mb-0">{{$car->car_code}}</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-12 col-sm-4">
                              <div class="info-box bg-light">
                                  <div class="info-box-content">
                                      <span class="info-box-text text-center text-muted"> Last Car Check</span>
                                      <span class="info-box-number text-center text-muted mb-0">{{$car->last_check}}</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-12 col-sm-4">
                              <div class="info-box bg-light">
                                  <div class="info-box-content">
                                      <span class="info-box-text text-center text-muted"> Date & Location</span>
                                      <span class="info-box-number text-center text-muted mb-0">{{$car->date_location}}</span>
                                  </div>
                              </div>
                          </div>
                      </div>

                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                        <span class="username">
                          <a href="#">Images</a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                        <span class="description">Posted 5 photos </span>
                      </div>
                      <!-- /.user-block -->
                        @if($images)
                      <div class="row mb-3">
                        <div class="col-sm-6">
                          @if(isset($images[0]->title))
                          <img class="img-fluid" src="{{url('storage/cars/'.$images[0]->title)}}" alt="Photo">
                          @endif
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                          <div class="row">
                            <div class="col-sm-6">
                              @if(isset($images[1]->title))
                              <img class="img-fluid mb-3" src="{{url('storage/cars/'.$images[1]->title)}}" alt="Photo">
                              @endif
                              @if(isset($images[2]->title))
                              <img class="img-fluid" src="{{url('storage/cars/'.$images[2]->title)}}" alt="Photo">
                              @endif
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-6">
                              @if(isset($images[3]->title))
                              <img class="img-fluid mb-3" src="{{url('storage/cars/'.$images[3]->title)}}" alt="Photo">
                              @endif
                              @if(isset($images[4]->title))
                              <img class="img-fluid" src="{{url('storage/cars/'.$images[4]->title)}}" alt="Photo">
                              @endif
                            </div>
                            <!-- /.col -->
                          </div>
                          <!-- /.row -->
                        </div>
                        <!-- /.col -->
                      </div>
                       @endif

                    </div>
                    <!-- /.post -->
                  </div>

                  <!-- /.tab-pane -->

                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->


@endsection
