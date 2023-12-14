@extends('frontend.masterTemp')
@section('fmenuname')
VIEW JOB
@endsection
@section('front-main-content')
<div class="clearfix"></div>
<style>
    .sidebar-box-new {
        text-align: center;
        padding: 10px 20px 15px;
    }
</style>
<!-- Title Header Start -->
<section class="inner-header-title" >
    <div class="container">
        <h1>JOB DETAILS</h1>
    </div>
</section>
<div class="clearfix"></div>
<!-- Title Header End -->

<!-- ========== Begin: Brows job Category ===============  -->
<section>
    <div class="container">

        <div class="col-md-8 col-sm-8">
            <div class="container-detail-box">

                <div class="apply-job-header">
                    <h4>{{ $JobDetails->job_category }}</h4>
                    <a href="//{{ $JobDetails->url }}" target="_blank" class="cl-success"><span><i class="fa fa-building"></i>{{ $JobDetails->comName }}</span></a>
                    <span><i class="fa fa-map-marker"></i>{{ $JobDetails->address }}</span>
                </div>

                <div class="apply-job-detail">
                    {!! $JobDetails->job_description !!}
                </div>


                @if(!empty(auth()->user()->id) && auth()->user()->type == 3)
                @if($JobDetails->user_id != auth()->user()->id)
                @if(auth()->user()->payment != 1)
                <span class="btn btn-warning">Not Approved Member</span>
                @else
                
                @if(!empty($applicationinfo))
                <a  class="btn bg-primary" >Applied</a>
                @else
                <a href="javascript:void(0)"  data-toggle="modal" data-target="#applyjob" class="btn btn-success btn-sm" >Apply For This Job</a>
                @endif
                
             
                @endif
                @endif
                @else 
                <a href="javascript:void(0)"  data-toggle="modal" data-target="#loginforjob" class="signin btn btn-success">Login For Apply</a>
                @endif




            </div>

            <!-- Similar Jobs -->
            <div class="container-detail-box">

                <div class="row">
                    <div class="col-md-12">
                        <h4>Similar Jobs</h4>
                    </div>
                </div>

                <div class="row">
                    <div class="grid-slide-2">

                        <!-- Single Freelancer & Premium job -->
                        <div class="freelance-box">
                            <div class="popular-jobs-container">
                                <div class="popular-jobs-box">
                                    <span class="popular-jobs-status bg-success">hourly</span>
                                    <h4 class="flc-rate">$17/hr</h4>
                                    <div class="popular-jobs-box">
                                        <div class="popular-jobs-box-detail">
                                            <h4>Google Inc</h4>
                                            <span class="desination">Software Designer</span>
                                        </div>
                                    </div>
                                    <div class="popular-jobs-box-extra">
                                        <ul>
                                            <li>Php</li>
                                            <li>Android</li>
                                            <li>Html</li>
                                            <li class="more-skill bg-primary">+3</li>
                                        </ul>
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui.</p>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-popular-jobs bt-1">View Detail</a>
                            </div>
                        </div>

                        <!-- Single Freelancer & Premium job -->
                        <div class="freelance-box">
                            <div class="popular-jobs-container">
                                <div class="popular-jobs-box">
                                    <span class="popular-jobs-status bg-warning">Monthly</span>
                                    <h4 class="flc-rate">$570/Mo</h4>
                                    <div class="popular-jobs-box">
                                        <div class="popular-jobs-box-detail">
                                            <h4>Duff Beer</h4>
                                            <span class="desination">Marketting</span>
                                        </div>
                                    </div>
                                    <div class="popular-jobs-box-extra">
                                        <ul>
                                            <li>Php</li>
                                            <li>Android</li>
                                            <li>Html</li>
                                            <li class="more-skill bg-primary">+3</li>
                                        </ul>
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui.</p>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-popular-jobs bt-1">View Detail</a>
                            </div>
                        </div>

                        <!-- Single Freelancer & Premium job -->
                        <div class="freelance-box">
                            <div class="popular-jobs-container">
                                <div class="popular-jobs-box">
                                    <span class="popular-jobs-status bg-info">Weekly</span>
                                    <h4 class="flc-rate">$200/We</h4>
                                    <div class="popular-jobs-box">
                                        <div class="popular-jobs-box-detail">
                                            <h4>Cyberdyne Systems</h4>
                                            <span class="desination">Human Resource</span>
                                        </div>
                                    </div>
                                    <div class="popular-jobs-box-extra">
                                        <ul>
                                            <li>Php</li>
                                            <li>Android</li>
                                            <li>Html</li>
                                            <li class="more-skill bg-primary">+3</li>
                                        </ul>
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui.</p>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-popular-jobs bt-1">View Detail</a>
                            </div>
                        </div>

                        <!-- Single Freelancer & Premium job -->
                        <div class="freelance-box">
                            <div class="popular-jobs-container">
                                <div class="popular-jobs-box">
                                    <span class="popular-jobs-status bg-danger">Yearly</span>
                                    <h4 class="flc-rate">$2000/Pa</h4>
                                    <div class="popular-jobs-box">
                                        <div class="popular-jobs-box-detail">
                                            <h4>Wayne Enterprises</h4>
                                            <span class="desination">App Designer</span>
                                        </div>
                                    </div>
                                    <div class="popular-jobs-box-extra">
                                        <ul>
                                            <li>Php</li>
                                            <li>Android</li>
                                            <li>Html</li>
                                            <li class="more-skill bg-primary">+3</li>
                                        </ul>
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui.</p>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-popular-jobs bt-1">View Detail</a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <!-- Sidebar Start-->
        <div class="col-md-4 col-sm-4">

            <!-- Job Detail -->
            <div class="sidebar-container">
                <div class="sidebar-box-new">



                    <?php
                    $empStatus = explode(',', $JobDetails->employee_status);
                    $colors = explode(',', '#594a2d,#660057,#6e8cff,#3d0c4e,#9ce6ae,#009e78,#001f8f,#ff7852,#ebff26,#0073e6,#f05eff,#00decc');
                    shuffle($colors);
                    ?>
                    <?php foreach ($empStatus as $key => $value) { ?>

                        <span class="btn" style="margin: 0px ; padding: 0px 5px ; font: 10px;color: white; background-color: <?php echo $colors[$key]; ?> "><?php echo $value; ?></span>

                    <?php } ?>
                    <div class="sidebar-inner-box">
                        <div class="brows-job-company-img">
                            @if(!empty($JobDetails->image))
                            <img class="img-responsive" src="{{asset('/images/' . $JobDetails->image)}}" alt="User profile picture">
                            @else 
                            <img class="img-responsive" src="{{asset('/memeberImage/noimage.png')}}" alt="User profile picture">
                            @endif
                        </div>
                        <div class="sidebar-box-detail">
                            <h4>{{ $JobDetails->comName }}</h4>
                            <span class="desination">{{ $JobDetails->job_category }}</span>
                        </div>
                    </div>
                    <div class="sidebar-box-extra">

                        <ul class="status-detail">
                            <li class="br-1">{{ $JobDetails->address }}</li>
                            <li><strong>
                                    <?php
                                    $conditionArray = array(
                                        'status' => 1,
                                        'user_id' => $JobDetails->user_id
                                    );
                                    ?>
                                    {{ DB::table('jobs')->where($conditionArray)->count() }}
                                </strong>Post</li>
                        </ul>
                    </div>
                </div>

                @if(!empty(auth()->user()->id) && auth()->user()->type == 3)
                @if($JobDetails->user_id != auth()->user()->id)
                @if(auth()->user()->payment != 1)
                <span class="btn btn-warning">Not Approved Member</span>
                @else

                @if(!empty($applicationinfo))
                <a  class="btn bg-primary btn-block" >Applied</a>
                @else
                <a href="javascript:void(0)"  data-toggle="modal" data-target="#applyjob" class="btn btn-success btn-block" >Apply For This Job</a>
                
                @endif
                @endif
                @endif
                @else 
                <a href="javascript:void(0)"  data-toggle="modal" data-target="#loginforjob" class="signin btn btn-block  btn-success">Login For Apply</a>
                @endif

                <br>
                <br>
            </div>

            <!-- Share This Job -->
            <div class="sidebar-wrapper2">
                <div class="sidebar-box-header bb-1">
                    <h4>Share This Job</h4>
                </div>

                <ul class="social-share">
                    <li><a href="#" class="fb-share"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="tw-share"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="gp-share"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#" class="in-share"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#" class="li-share"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#" class="be-share"><i class="fa fa-behance"></i></a></li>
                </ul>
            </div>

        </div>
        <!-- End Sidebar -->

    </div>
    <div class="modal fade" id="loginforjob" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div  role="tabpanel">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" >
                            <li role="" class="active" style="width: 100%"><a role="tab" data-toggle="tab">Sign In</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content" id="myModalLabel2">
                            <div role="tabpanel" class="tab-pane fade in active" id="login">

                                <div class="subscribe wow fadeInUp">
                                    <form class="form-inline" method="post" action="{{ route('seekerlogin')}}">
                                        @csrf
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <input type="email"  name="email" class="form-control" placeholder="Email Address" required="">
                                                <input type="password" name="password" class="form-control"  placeholder="Password" required="">
                                                <input type="hidden" name="urlid" class="form-control" value="{{ $urlid }}">
                                                <div class="center">
                                                    <button type="submit" id="login-btn" class="submit-btn"> Login </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <div class="modal fade" id="applyjob" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div  role="tabpanel">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" >
                            <li role="" class="active" style="width: 100%"><a role="tab" data-toggle="tab">Apply The Job</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content" id="myModalLabel2">
                            <div role="tabpanel" class="tab-pane fade in active" id="login">

                                <div class="subscribe wow fadeInUp">
                                    <form class="form-inline" method="post" action="{{ route('applicationStore')}}">
                                        @csrf
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <input type="text" style="background : lightblue; color: white"  class="form-control" readonly="" value="User : @if(!empty(auth()->user()->name)) {{ auth()->user()->name   }} @endif">
                                                <input type="text" style="background : lightblue; color: white"  class="form-control" readonly="" value="Company : {{ $JobDetails->comName }}">
                                                <input type="text" style="background : lightblue; color: white"  class="form-control" readonly="" value=" Position : {{ $JobDetails->job_category }}">
                                                <input type="text"  name="expectedSalary" class="form-control" style="width: 80%" placeholder="Expected Salary" required=""> [Monthly]
                                                <input type="hidden" name="user_id" class="form-control" value=" @if(!empty(auth()->user()->id)) {{ auth()->user()->id   }} @endif">
                                                <input type="hidden" name="company_id" class="form-control" value="{{ $JobDetails->comId }}">
                                                <input type="hidden" name="job_id" class="form-control" value="{{ $urlid  }}">
                                                <div class="center">
                                                    <button type="submit" id="login-btn" class="submit-btn"> Apply </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 

</section>
@endsection