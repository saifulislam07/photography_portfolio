@extends('frontend.masterTemp')
@section('fmenuname')
HOME
@endsection
@section('front-main-content')
<div class="clearfix"></div>

<!-- Title Header Start -->
<section class="inner-header-title" >
    <div class="container">
        <h1>Browse Jobs</h1>
    </div>
</section>
<div class="clearfix"></div>
<!-- Title Header End -->

<!-- ========== Begin: Brows job Category ===============  -->
<section class="brows-job-category">
    <div class="container">
        <!-- Company Searrch Filter Start -->
        <div class="row extra-mrg">
            <div class="wrap-search-filter">
                <form>
                    <div class="col-md-4 col-sm-4">
                        <input type="text" class="form-control" placeholder="Keyword: Name, Tag">
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <input type="text" class="form-control" placeholder="Location: City, State, Zip">
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <select class="selectpicker form-control" multiple title="All Categories">
                            <option>Information Technology</option>
                            <option>Mechanical</option>
                            <option>Hardware</option>
                        </select>

                    </div>
                    <div class="col-md-2 col-sm-2">
                        <button type="submit" class="btn btn-success full-width">Filter</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- Company Searrch Filter End -->

        <!--Browse Job In Grid-->
        <div class="row extra-mrg">


            @foreach($allJobs as $eachJob)
            <div class="col-md-4 col-sm-6">
                <div class="grid-view brows-job-list">
                    <div class="brows-job-company-img">
                        @if(!empty($eachJob->image))
                        <img class="img-responsive" src="{{asset('/images/' . $eachJob->image)}}" alt="User profile picture">
                        @else 
                        <img class="img-responsive" src="{{asset('/memeberImage/noimage.png')}}" alt="User profile picture">
                        @endif

                    </div>
                    <div class="brows-job-position">
                        <h3><a href="jobView/{{ $eachJob->id }}">{{ $eachJob->job_category }}</a></h3>
                        <p><span>{{ $eachJob->address }}</span></p>
                    </div>
                    <div class="job-position">
                        <span class="job-num">{{ $eachJob->number_of_vacancies }} Position</span>
                    </div>
                    <div class="brows-job-type">
                        <?php
                        $empStatus = explode(',', $eachJob->employee_status);
                        $countStatus = count($empStatus);
                        ?>
                        @if(count($empStatus) < 2)
                        <span class="full-time"> 
                            {{ $eachJob->employee_status }}
                        </span>
                        @else 
                        <span class="part-time"> 
                            Multi
                        </span>
                        @endif

                        <!--{{ $eachJob->employee_status }}-->
<!--                        <span class="part-time">Part Time</span>
                         <span class="freelanc">Freelancer</span>
                         <span class="enternship">Enternship</span>-->
                    </div>
                    <ul class="grid-view-caption">
                        <li style="width: 70%">
                            <div class="brows-job-location">
                                <p><i class="fa fa-globe"></i>{{ $eachJob->url }}</p>
                            </div>
                        </li>
                        <li>
                            <p><i class="fa fa-calendar"></i> {{ date('d-m-Y', strtotime($eachJob->application_deadline))  }}</p>
                        </li>
                    </ul>
                    <span class="tg-themetag tg-featuretag">Premium</span>
                </div>
            </div>
            @endforeach
        </div>
        <!--/.Browse Job In Grid-->

        <div class="row">
            <ul class="pagination">
                <li><a href="#">&laquo;</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li> 
                <li><a href="#">4</a></li> 
                <li><a href="#"><i class="fa fa-ellipsis-h"></i></a></li> 
                <li><a href="#">&raquo;</a></li> 
            </ul>
        </div>

    </div>
</section>
@endsection