@extends('admin.layouts.main')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Класстар</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="col-6">
            <button type="button" class="btn btn-block btn-outline-secondary btn-xs">
                <a href="{{route('admin.klasses.create')}}"><h5 class="text-green">Класс кошуу</h5></a>
            </button>
        </div>


        <div class="card mt-4">
            <div class="card-header">
                <h3 class="card-title">Класстардын тизмеси</h3>

                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Класстын аты</th>
                        <th>Кирүү</th>
                        <th>Өзгөртүү</th>
                        <th>Өчүрүү</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($klasses as $klass)
                        <tr>
                            <td>{{$klass->id}}</td>
                            <td>{{$klass->name_of_klass}}</td>
                            <td>
                                <a href="{{route('admin.klasses.show', $klass->id)}}">
                                    <i class="far fa-eye"></i>
                                </a>
                            </td>
                            <td>
                                <a href="{{route('admin.klasses.edit', $klass->id)}}" class="text-green">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>
                            <td>
                                <form action="{{route('admin.klasses.delete', $klass->id)}}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button title="submit" class="border-0 bg-transparent">
                                        <i title="submit" class="fas fa-trash text-danger" role="button"></i>
                                    </button>

                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </section>
    <!-- /.content -->
</div>

@endsection
