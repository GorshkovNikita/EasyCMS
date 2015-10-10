@extends('cms.templates.template')

@section('header')

@stop

@section('content')

    <div class="container">
        <div class="login-form">
            <h1>Вход</h1>

            <form method="POST" action="{{ url('auth/login') }}">

                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="role" value="admin">

                <div class="form-group">
                    <label>
                        <input type="email" name="email" placeholder="e-mail" value="{{ old('email') }}" class="form-control" autocomplete="off">
                    </label>
                </div>

                <div class="form-group">
                    <label>
                        <input type="password" name="password" id="password" placeholder="Пароль" value="" class="form-control" autocomplete="off">
                    </label>
                </div>

                <div class="form-group">
                    <input type="submit" value="Войти" class="btn btn-primary">
                    <a href="#" class="btn btn-default">Регистрация</a>
                </div>

            </form>

            @if ($errors->has())
                @foreach ($errors->all() as $error)
                    <div class="bg-danger alert">{{ $error }}</div>
                @endforeach
            @endif
        </div>

    </div>
@stop

@section('footer')
    @include('cms.templates.footer')
@stop