@extends('admin.layouts.main')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{$teacher->user->name}} {{$teacher->user->surename}}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="col-6">
        <table class="table table-bordered table-hover">
            <tr data-widget="expandable-table" aria-expanded="true">
                <td>Кайсы предметтен сабак өтөт: </td>
                <td><b>{{$teacher->lesson->name}}</b></td>         
            </tr>
        </table>
    </div>
</div>

@endsection
