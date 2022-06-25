@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Show</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Show</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <form action="{{ route('user.delete', $user->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" class="btn  bg-gradient-danger btn-sm" >
                    <a class="btn  bg-gradient-warning btn-sm" href="{{ route('user.edit', $user->id) }}">Редоктировать</a>
                </form>


            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>ИП/имя</th>
                        <th>email</th>
                        <th>пароль</th>
                        <th>банковские</th>
                        <th>реквизиты адрес</th>
                        <th>договор</th>
                        <th>номер телефона</th>
                        <th>контактное имя</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name}}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->password }}</td>
                        <td>{{ $user->bank_details }}</td>
                        <td>{{ $user->address }}</td>
                        <td>{{ $user->treaty }}</td>
                        <td>{{ $user->phone_number }}</td>
                        <td>{{ $user->contact_name }}</td>
                    </tr>

                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
@endsection
