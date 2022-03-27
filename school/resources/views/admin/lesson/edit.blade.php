@extends('admin.layouts.main')
@section('content')

<div class="content-wrapper mt-4">
    <!-- Main content -->
    <section class="content col-6">
        <div class="container-fluid ">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Сабакты өзгөртүү</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('admin.lessons.update', $lesson->id)}}" method="post">
                            @method('patch')
                            @csrf
                            <div class="card-body">
                                <div class="form-group col-12">
                                    <label>Сабактын аты</label>
                                    <input type="text" name="name" class="form-control" value="{{$lesson->name}}">
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Жаңылоо</button>
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
