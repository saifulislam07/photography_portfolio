@extends('admin.masterTemplate')
@section('menu-name')
Contac Me
@endsection
@section('main-content')
<style>
.tablestyle3 {
    margin: 0;
    padding: 0;
    line-height: 0;
    font-size: 10px;
}
</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h5 class="m-0 text-dark">Contac Me</h5>
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
                    <div class="card">
                        <div class="card-header bg-cyan">
                            <h3 class="card-title"> <i class="fa fa-users"></i> All Contact Mail</h3>
                        </div>

                        <div class="card-body">
                            <table id="example1" class="table tablestyle3 table-bordered table-striped ">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Email</th>
                                        <th>Name</th>
                                        <th>Story</th>
                                        <th>Message</th>
                                        <th>Status</th>
                                        <th>Time</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    @foreach ($contactmes as $key => $value)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $value->email }}</td>
                                        <td>{{ $value->name }}</td>
                                        <td>
                                            <?php
                                            if ($value->story_id) {
                                                $storyname = \App\Models\story::where(['id' =>
                                                $value->story_id])->first();
                                                echo $storyname->title;
                                            } else {
                                                echo 'General Email';
                                            };
                                            ?>




                                        </td>
                                        <td>{{ $value->message }}</td>
                                        <td>{{ $value->status }}</td>
                                        <td>{{ $value->created_at }}</td>


                                        <td>
                                            <a href="" class="btn btn-xs btn-warning"><i class="fas fa-edit"></i></a>
                                            <a href="" class="btn btn-xs btn-danger"><i
                                                    class="fas fa-trash-alt"></i></a>

                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection