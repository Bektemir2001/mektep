@extends('admin.layouts.main')
@section('content')

<div class="content-wrapper">
    <!-- Main content -->
    <section class="content col-6 mt-4">
        <div class="container-fluid ">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Сабак кошуу</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('admin.lessons.store')}}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group col-12">
                                    <label>Сабактын аты</label>
                                    <input type="text" name="name" class="form-control" >
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Каттоо</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>

</div>

@endsection
