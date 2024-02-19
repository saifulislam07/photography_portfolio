@extends('admin.masterTemplate')

@section('menu-name')
    Edit Message
@endsection
@section('main-content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h5 class="m-0 text-dark">Edit Message</h5>
                    </div><!-- /.col -->
                    <div class="col-sm-6 ">
                        <a href="{{ route('clientMessage.index') }}" class="btn btn-sm btn-warning float-right"><i
                                class="fa fa-plus-square"></i> ALL Message</a>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
            <hr class="style18">
        </div>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">

                    <!-- /.col -->

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-warning text-white"> Edit Message</div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="active tab-pane">
                                        <form class="form-horizontal" method="POST"
                                            action="{{ route('clientMessage.update', $clientMessage->id) }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')

                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">Message</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="message" class="form-control"
                                                        value="{{ $clientMessage->message }}" placeholder="Message here">
                                                    @error('message')
                                                        <div style="color: red; padding: 0;">
                                                            <strong>
                                                                {{ $message }}
                                                            </strong>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                    </div>
                                    <div class="form-group row">

                                        <div class=" col-sm-2 "></div>
                                        <div class=" col-sm-3 ">
                                            <button type="submit" class="btn btn-info btn-block">Update</button>
                                        </div>
                                    </div>
                                    </form>
                                </div>

                                <!-- /.tab-pane -->


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
        </section>
    </div><!-- /.container-fluid -->
    <!-- /.content -->
@endsection
<!-- Content Wrapper. Contains page content -->
