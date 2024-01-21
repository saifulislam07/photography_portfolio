@extends('admin.masterTemplate')
@section('menu-name')
    SMTP
@endsection
@section('main-content')
    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h5 class="m-0 text-dark"> Email Setting</h5>
                    </div>

                </div>
            </div>
            <hr class="style18">
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-cyan">
                                <h3 class="card-title"> <i class="fas fa-thumbs-up"></i> Current Setting</h3>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('mail.update', $mail->id) }}">
                                    @csrf
                                    @method('put')
                                    <div class="form-group row">
                                        <div class=" col-sm-4 ">
                                            <div class="form-group">
                                                <label>Mail Transport <span style="color: red">*</span></label>
                                                <input class="form-control" type="text" name="mail_transport"
                                                    value="{{ old('mail_transport', $mail->mail_transport) }}">
                                                @error('mail_transport')
                                                    <div style="color: red; padding: 0;">
                                                        <strong>
                                                            {{ $message }}
                                                        </strong>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class=" col-sm-4 ">
                                            <div class="form-group">
                                                <label> Mail Host <span style="color: red">*</span></label>
                                                <input class="form-control" type="text" name="mail_host"
                                                    value="{{ old('mail_host', $mail->mail_host) }}">
                                                @error('mail_host')
                                                    <div style="color: red; padding: 0;">
                                                        <strong>
                                                            {{ $message }}
                                                        </strong>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class=" col-sm-4 ">
                                            <div class="form-group">
                                                <label> Mail Port <span style="color: red">*</span></label>
                                                <input class="form-control" type="text" name="mail_port"
                                                    value="{{ old('mail_port', $mail->mail_port) }}">
                                                @error('mail_port')
                                                    <div style="color: red; padding: 0;">
                                                        <strong>
                                                            {{ $message }}
                                                        </strong>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class=" col-sm-4 ">
                                            <div class="form-group">
                                                <label> Mail username<span style="color: red">*</span></label>
                                                <input class="form-control" type="text" name="mail_username"
                                                    value="{{ old('mail_username', $mail->mail_username) }}">
                                                @error('mail_username')
                                                    <div style="color: red; padding: 0;">
                                                        <strong>
                                                            {{ $message }}
                                                        </strong>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class=" col-sm-4 ">
                                            <div class="form-group">
                                                <label> Mail Password<span style="color: red">*</span></label>
                                                <input class="form-control" type="text" name="mail_password"
                                                    value="{{ old('mail_password', $mail->mail_password) }}">
                                                @error('mail_password')
                                                    <div style="color: red; padding: 0;">
                                                        <strong>
                                                            {{ $message }}
                                                        </strong>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class=" col-sm-4 ">
                                            <div class="form-group">
                                                <label> Mail Encryption<span style="color: red">*</span></label>
                                                <input class="form-control" type="text" name="mail_encryption"
                                                    value="{{ old('mail_encryption', $mail->mail_encryption) }}">
                                                @error('mail_encryption')
                                                    <div style="color: red; padding: 0;">
                                                        <strong>
                                                            {{ $message }}
                                                        </strong>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class=" col-sm-4 ">
                                            <div class="form-group">
                                                <label> Mail From<span style="color: red">*</span></label>
                                                <input class="form-control" type="text" name="mail_from"
                                                    value="{{ old('mail_from', $mail->mail_from) }}">
                                                @error('mail_from')
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
                                        <div class="col-sm-4">
                                            <button type="submit" class="btn btn-info btn-sm ">Update</button>
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
@endsection
