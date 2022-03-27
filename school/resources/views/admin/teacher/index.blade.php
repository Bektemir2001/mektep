@extends('admin.layouts.main')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Мугалимдер</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="col-6">
            <button type="button" class="btn btn-block btn-outline-secondary btn-xs">
                <a href="{{route('admin.teachers.create')}}"><h5 class="text-green">Мугалим кошуу</h5></a>
            </button>
        </div>


        <div class="card mt-4">
            <div class="card-header">
                <h3 class="card-title">Мугалимдердин тизмеси</h3>

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
                        <th>ФИО</th>
                        <th>Кирүү</th>
                        <th>Өзгөртүү</th>
                        <th>Өчүрүү</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($teachers as $teacher)
                        <tr>
                            <td>{{$teacher->id}}</td>
                            <td>{{$teacher->user->name}} {{ $teacher->user->surename }}</td>
                            <td>
                                <a href="{{route('admin.teachers.show', $teacher->id)}}">
                                    <i class="far fa-eye"></i>
                                </a>
                            </td>
                            <td>
                                <a href="{{route('admin.teachers.edit', $teacher->id)}}" class="text-green">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>
                            <td>
                                <form action="{{route('admin.teachers.delete', $teacher->id)}}" method="post">
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
