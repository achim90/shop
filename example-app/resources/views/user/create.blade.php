@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Создание продукта</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Создание</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <form action="{{ route('user.store') }}" method="post">
                    @csrf

                    <div class="form-group">
                        <input type="text" value="{{ old('name') }}" name="name" class="form-control" placeholder="имя">
                    </div>
                    <div class="form-group">
                        <input type="email" value="{{ old('email') }}" name="email" class="form-control" placeholder=" email ">
                    </div>
                    <div class="form-group">
                        <input type="password" value="{{ old('password') }}" name="password" class="form-control" placeholder=" пароль ">
                    </div>
                    <div class="form-group">
                        <input type="password" value="{{ old('password_confirmation') }}" name="password_confirmation" class="form-control" placeholder=" пароль ">
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{ old('bank_details') }}" name="bank_details" class="form-control" placeholder="банковские реквизиты ">
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{ old('address') }}" name="address" class="form-control" placeholder="адрес">
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{ old('treaty') }}" name="treaty" class="form-control" placeholder="договор">
                    </div>

                    <div class="form-group">
                        <input type="text" value="{{ old('phone_number') }}" name="phone_number" class="form-control" placeholder="номер телефона">
                    </div>

                    <div class="form-group">
                        <input type="text" value="{{ old('contact_name') }}" name="contact_name" class="form-control" placeholder="кконтактное имя">
                    </div>



                    <div class="form-group">
                        <input type="submit" class="btn  btn-info btn-sm mt-2" value="добавить">
                    </div>

                </form>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
