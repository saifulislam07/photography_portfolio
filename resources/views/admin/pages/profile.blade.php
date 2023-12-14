
@extends('admin.masterTemplate')

@section('menu-name')
PROFILE
@endsection
@section('main-content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h5 class="m-0 text-dark">PROFILE</h5>
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        <hr class="style18">
    </div>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                @if(!empty($userDetails->image))
                                <img class="profile-user-img img-fluid img-circle" src="{{asset('/images/' . $userDetails->image)}}" alt="User profile picture">
                                @else 
                                <img class="profile-user-img img-fluid img-circle" src="{{asset('/memeberImage/noimage.png')}}" alt="User profile picture">
                                @endif
                            </div>
                            <h3 class="profile-username text-center">{{ $userDetails->name }} 
                                @if($userDetails->payment == 1)
                                <i style="color: #007bff; font-size: 15px" class="fa fa-check-circle" aria-hidden="true"></i>
                                @else 
                                   <i style="color:gray; font-size: 15px" class="fa fa-ban" aria-hidden="true"></i>
                                @endif
                            </h3>
                            <p class="text-muted text-center">{{ $userDetails->designation }}</p>
                            <p class="text-muted text-center">{{ $userDetails->dob }}</p>
                            <p class="text-muted text-center">{{ $userDetails->phone }}</p>
                            <p class="text-muted text-center">{{ $userDetails->email }}</p>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- About Me Box -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">About Me</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <strong><i class="fas fa-book mr-1"></i> Education</strong>

                            <p class="text-muted">
                                {{ $userDetails->education }}
                            </p>

                            <hr>
                            <strong><i class="fas fa-book mr-1"></i> University</strong>

                            <p class="text-muted">
                                {{ $userDetails->e_uv }}
                            </p>

                            <hr>
                            <strong><i class="fas fa-book mr-1"></i> Year</strong>

                            <p class="text-muted">
                                {{ $userDetails->e_year }}
                            </p>

                            <hr>
                            <strong><i class="fas fa-book mr-1"></i> Job Designation</strong>

                            <p class="text-muted">
                                {{ $userDetails->c_designation }}
                            </p>

                            <hr>
                            <strong><i class="fas fa-book mr-1"></i> Company Name</strong>

                            <p class="text-muted">
                                {{ $userDetails->company }}
                            </p>

                            <hr>

                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                            <p class="text-muted">{{ $userDetails->area }}</p>

                            <hr>

                            <strong><i class="fas fa-pencil-alt mr-1"></i> Blood Group</strong>

                            <p class="text-muted">
                                @if($userDetails->blood ==1)         
                                {{ 'A+' }}
                                @elseif($userDetails->blood ==2)
                                {{ 'A-' }}
                                @elseif($userDetails->blood ==3)
                                {{ 'B+' }}
                                @elseif($userDetails->blood ==4)
                                {{ 'B-' }}
                                @elseif($userDetails->blood ==5)
                                {{ 'O+' }}
                                @elseif($userDetails->blood ==6)
                                {{ 'O-' }}
                                @elseif($userDetails->blood ==7)
                                {{ 'AB+' }}
                                @elseif($userDetails->blood ==8)
                                {{ 'AB-' }}
                                @elseif($userDetails->blood ==9)
                                {{ 'Unknown' }}
                                @endif
                            </p>

                            <hr>
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
                                <li class="nav-item"><a class="nav-link active" href="#profile" data-toggle="tab">Profile</a></li>
                                <li class="nav-item"><a class="nav-link" href="#education" data-toggle="tab">Education</a></li>
                                <li class="nav-item"><a class="nav-link" href="#job" data-toggle="tab">Job</a></li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="profile">
                                    <form class="form-horizontal" method="post" action="{{ route('edit-profile')}}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="name" value="{{ $userDetails->name }}" class="form-control" id="" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" name="email" value="{{ $userDetails->email }}"  class="form-control" id="" placeholder="Email Addreess">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Phone</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="phone" value="{{ $userDetails->phone }}"  class="form-control" id="" placeholder="Mobile Number">
                                            </div>

                                            <label for="inputName" class="col-sm-2 col-form-label">Date of Birth</label>
                                            <div class="col-sm-4">
                                                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                                    <input required="" type="text" name="dob" class="form-control datetimepicker-input" value="{{ $userDetails->dob }}" data-target="#reservationdate">
                                                    <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Area</label>
                                            <div class="col-sm-4">
                                                <input type="text" required="" name="area" value="{{ $userDetails->area }}" class="form-control" id="" placeholder="Area Name">
                                            </div>

                                            <label for="inputName" class="col-sm-2 col-form-label">Blood </label>
                                            <div class="col-sm-4">
                                                <select name="blood" id="blood" class="form-control" required="">
                                                    <option  disabled="" value="">Blood Group</option>
                                                    <option value="1" {{ $userDetails->blood == 1 ? 'selected' : '' }}>A+</option>
                                                    <option value="2" {{ $userDetails->blood == 2 ? 'selected' : '' }}>A-</option>
                                                    <option value="3" {{ $userDetails->blood == 3 ? 'selected' : '' }}>B+</option>
                                                    <option value="4" {{ $userDetails->blood == 4 ? 'selected' : '' }}>B-</option>
                                                    <option value="5" {{ $userDetails->blood == 5 ? 'selected' : '' }}>O+</option>
                                                    <option value="6" {{ $userDetails->blood == 6 ? 'selected' : '' }}>O-</option>
                                                    <option value="7" {{ $userDetails->blood == 7 ? 'selected' : '' }}>AB+</option>
                                                    <option value="8" {{ $userDetails->blood == 8 ? 'selected' : '' }}>AB-</option>
                                                    <option value="0" {{ $userDetails->blood == 0 ? 'selected' : '' }}>Unknown</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Photo</label>
                                            <div class="col-sm-4" >
                                                <input type="file" name="image" class="form-control">
                                                <input type="hidden" value=" {{ $userDetails->image }}" name="oldImage" class="form-control">
                                                @error('image')
                                                <div class="alert alert-danger">
                                                    <strong>

                                                        {{$message}}
                                                    </strong>
                                                    <br>                                                        
                                                </div>
                                                @enderror
                                            </div>
                                            <label for="inputName" class="col-sm-2 col-form-label">CV *</label>
                                            <div class="col-sm-4" >
                                                <input type="file" name="cv" class="form-control">
                                                <input type="hidden" value=" {{ $userDetails->cv }}" name="oldCv" class="form-control">
                                                @error('cv')
                                                <div class="alert alert-danger">
                                                    <strong>

                                                        {{$message}}
                                                    </strong>
                                                    <br>                                                        
                                                </div>
                                                @enderror
                                            </div>
                                   
                                        </div>
                                        <div class="form-group row">
                                   
                                            <div class=" col-sm-2"></div>
                                            <div class=" col-sm-4">
                                                <button type="submit" class="btn btn-info btn-block">SAVE</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="job">
                                    <!-- The job -->
                                    <div class="job job-inverse">
                                        <form class="form-horizontal" method="post" action="{{ route('edit-job')}}">
                                            @csrf
                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">Current Job</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="company" value="{{ $userDetails->company }}" class="form-control" id="" placeholder="Job">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">Designation</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="c_designation" value="{{ $userDetails->c_designation }}" class="form-control" id="" placeholder="Job Designation">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="offset-sm-2 col-sm-10">
                                                    <button type="submit" class="btn btn-info">SAVE</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- /.tab-pane -->

                                <div class="tab-pane" id="education">
                                    <form class="form-horizontal" method="post" action="{{ route('edit-education')}}">
                                        @csrf
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-3 col-form-label">Education</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="education" class="form-control" id="" placeholder="Education">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-3 col-form-label">From University</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="e_uv" class="form-control" id="" placeholder="From University">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-3 col-form-label">Year</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="e_year" class="form-control" id="" placeholder="Year"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-sm-3 col-sm-9">
                                                <button type="submit" class="btn btn-info">SAVE</button>
                                            </div>
                                        </div>
                                    </form>
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
</div>


@endsection
<!-- Content Wrapper. Contains page content -->
