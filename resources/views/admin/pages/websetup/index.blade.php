@extends('admin.masterTemplate')
@section('menu-name')
    Add Web Setup
@endsection
@section('main-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h5 class="m-0 text-dark">Add Web Setup</h5>
                    </div><!-- /.col -->
                    <div class="col-sm-6 ">
                        <a href="{{ route('aboutme') }}" class="btn btn-sm btn-info float-right"><i
                                class="fa fa-plus-square"></i> Web Setup</a>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
            <hr class="style18">
        </div>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-12">
                        <!-- Profile Image -->
                        <div class="card">
                            <div class="card-header bg-cyan">
                                <h3 class="card-title"> <i class="fa fa-list-alt"></i> Web Setup </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                @if ($info)
                                    <form class="form-horizontal" action="{{ route('web.update', $info->id) }}"
                                        method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group row">
                                            <div class=" col-sm-6">
                                                <div class="form-group">
                                                    <label>Site Name</label>
                                                    <input type="text"
                                                        placeholder="Your website Name  (like : Saiful Photographer)"
                                                        class="form-control" value="{{ $info->site_name }}"
                                                        name="site_name">
                                                </div>
                                            </div>
                                            <div class=" col-sm-6 ">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="email" value="{{ $info->email }}"
                                                        placeholder="Email address" class="form-control" name="email">

                                                </div>
                                            </div>
                                            <div class=" col-sm-6">
                                                <div class="form-group">
                                                    <label>Contact</label>
                                                    <input type="text" value="{{ $info->number }}"
                                                        placeholder="+8801675909939" class="form-control" name="number">
                                                </div>
                                            </div>
                                            <div class=" col-sm-6">
                                                <div class="form-group">
                                                    <label>whatsApp</label>
                                                    <input type="text" value="{{ $info->whatsapp }}"
                                                        placeholder="+8801675909939" class="form-control" name="whatsapp">
                                                </div>
                                            </div>
                                            <div class=" col-sm-6">
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <input type="text" value="{{ $info->address }}"
                                                        placeholder="Type your address here" class="form-control"
                                                        name="address">
                                                </div>
                                            </div>
                                            <div class=" col-sm-6">
                                                <div class="form-group">
                                                    <label>Copyright</label>
                                                    <input type="text" value="{{ $info->copyright }}"
                                                        placeholder="Type your copyright here" class="form-control"
                                                        name="copyright">
                                                </div>
                                            </div>
                                            <div class=" col-sm-6">
                                                <div class="form-group">
                                                    <label>Copyright Note</label>
                                                    <input type="text" value="{{ $info->copyright_note }}"
                                                        placeholder="Type your copyright Note here" class="form-control"
                                                        name="copyright_note">
                                                </div>
                                            </div>
                                            <div class=" col-sm-5 ">
                                                <div class="form-group">
                                                    <label>Black Logo <span style="color: red">*</span></label>
                                                    <input type="file" class="form-control" name="logo_black">
                                                    <input type="hidden" type="text" name="old_logo_black"
                                                        value="{{ $info->logo_black }}">
                                                    @error('logo_black')
                                                        <div style="color: red; padding: 0;">
                                                            <strong>
                                                                {{ $message }}
                                                            </strong>

                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class=" col-sm-1 ">
                                                <div class="form-group" style="padding-top: 20px">
                                                    <img width="60px" class="zoom"
                                                        src="{{ asset('./site_logo/' . $info->logo_black) }} "
                                                        alt="">
                                                </div>
                                            </div>

                                            <div class=" col-sm-5 ">
                                                <div class="form-group">
                                                    <label>White Logo <span style="color: red">*</span></label>
                                                    <input type="file" class="form-control" name="logo_white">
                                                    <input type="hidden" type="text" name="old_logo_white"
                                                        value="{{ $info->logo_white }}">
                                                    @error('logo_white')
                                                        <div style="color: red; padding: 0;">
                                                            <strong>
                                                                {{ $message }}
                                                            </strong>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class=" col-sm-1 ">
                                                <div class="form-group" style="padding-top: 20px">
                                                    <img width="60px" class="zoom"
                                                        src="{{ asset('./site_logo/' . $info->logo_white) }} "
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class=" col-sm-5">
                                                <div class="form-group">
                                                    <label>Water Mark<span style="color: red">*</span></label>
                                                    <input type="file" class="form-control" name="water_mark">
                                                    <input type="hidden" type="text" name="old_water_mark"
                                                        value="{{ $info->water_mark }}">
                                                    @error('water_mark')
                                                        <div style="color: red; padding: 0;">
                                                            <strong>
                                                                {{ $message }}
                                                            </strong>

                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class=" col-sm-1 ">
                                                <div class="form-group" style="padding-top: 20px">
                                                    <img width="60px" class="zoom"
                                                        src="{{ asset('./site_logo/' . $info->water_mark) }} "
                                                        alt="">
                                                </div>
                                            </div>


                                            <div class=" col-sm-6 ">
                                                <button type="submit" class="btn btn-info">SAVE</button>
                                            </div>

                                        </div>
                                    </form>
                                @endif

                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
