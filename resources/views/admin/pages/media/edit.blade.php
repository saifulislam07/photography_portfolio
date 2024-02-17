@extends('admin.masterTemplate')
@section('menu-name')
    EDIT MEDIA
@endsection
@section('main-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h5 class="m-0 text-dark"> Media</h5>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
            <hr class="style18">
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Profile Image -->
                        <div class="card">
                            <div class="card-header bg-cyan">
                                <h3 class="card-title"> <i class="fas fa-thumbs-up"></i> Edit Media</h3>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('update-media', $medialink->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-3 col-form-label">Title</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="title" value="{{ $medialink->title }}"
                                                class="form-control" id="" placeholder="Media Title">
                                            @error('title')
                                                <div style="color: red; padding: 0;">
                                                    <strong>
                                                        {{ $message }}
                                                    </strong>

                                                </div>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-3 col-form-label">Url</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="url" value="{{ $medialink->url }}"
                                                class="form-control" id="" placeholder="Media link">
                                            @error('url')
                                                <div style="color: red; padding: 0;">
                                                    <strong>
                                                        {{ $message }}
                                                    </strong>

                                                </div>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-3 col-form-label">Logo</label>
                                        <div class="col-sm-7">
                                            <input type="file" name="image" value="{{ $medialink->url }}"
                                                class="form-control">
                                            @error('image')
                                                <div style="color: red; padding: 0;">
                                                    <strong>
                                                        {{ $message }}
                                                    </strong>

                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-sm-2">
                                            <img width="75px" class="zoom"
                                                src="{{ asset('media/' . $medialink->image) }}"
                                                alt="{{ $medialink->image }}">

                                        </div>
                                        <input type="hidden" name="oldimage" value="{{ $medialink->image }}">

                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-3 col-form-label"></label>
                                        <div class="col-sm-9 ">
                                            <button type="submit" class="btn btn-success">UPDATE</button>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    </section>
@endsection
