@extends('admin.masterTemplate')

@section('menu-name')
    Edit Video
@endsection
@section('main-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h5 class="m-0 text-dark">VIDEO ADD</h5>
                    </div><!-- /.col -->
                    <div class="col-sm-6 ">
                        <a href="{{ route('v-gallery') }}" class="btn btn-sm btn-info float-right"><i
                                class="fa fa-list-alt"></i> All Video</a>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
            <hr class="style18">
        </div>


        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">

                        @if (session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif

                        <!-- Profile Image -->
                        <div class="card card-primary card-outline">
                            <div class="card-body">
                                <form class="form-horizontal" method="post"
                                    action="{{ route('update-video', $videodata->id) }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-3 col-form-label">Category</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="category_id">
                                                <option value="" selected="" disabled="">All Category</option>
                                                @foreach ($categorys as $each)
                                                    <option @if ($each->id == $videodata->category_id) {{ 'selected' }} @endif
                                                        value="{{ $each->id }}">{{ $each->title }}</option>
                                                @endforeach
                                            </select>
                                            @error('category_id')
                                                <div class="alert alert-danger mt-1">
                                                    <strong>
                                                        {{ $message }}
                                                    </strong>
                                                    <br>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-3 col-form-label">Title</label>
                                        <div class="col-sm-9">
                                            <input type="text" value="{{ $videodata->title }}" name="title"
                                                class="form-control" placeholder="Video Title">

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-3 col-form-label">Link</label>
                                        <div class="col-sm-9">
                                            <input type="text" value="{{ $videodata->link }}" name="link"
                                                class="form-control" placeholder="YouTube embedded link">
                                            @error('link')
                                                <div class="alert alert-danger mt-1">
                                                    <strong>
                                                        {{ $message }}
                                                    </strong>
                                                    <br>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-3 col-form-label">Description</label>
                                        <div class="col-sm-9">
                                            <textarea type="text" name="description" class="form-control" placeholder="Video Description"> {{ $videodata->description }}</textarea>

                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <div class="offset-sm-3 col-sm-9">
                                            <button type="submit" class="btn btn-info">SAVE</button>
                                        </div>
                                    </div>
                                </form>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <script>
        $(document).ready(function() {
            $(".alert").slideDown(300).delay(5000).slideUp(300);
        });
    </script>
@endsection
<!-- Content Wrapper. Contains page content -->
