@extends('cms.templates.template')

@section('header')

@stop

@section('content')

    <div class="container">
        <div class="login-form">
            <h1>Регистрация</h1>

            <form method="POST" action="{{ url('auth/register') }}">

                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="phone" value="111-11-11">
                <input type="hidden" name="role" value="admin">
                <input type="hidden" name="organization" value="">

                <div class="form-group">
                    <label>
                        <input name="name" placeholder="Имя" value="{{ old('name') }}" class="form-control" autocomplete="off" required>
                    </label>
                </div>

                <div class="form-group">
                    <label>
                        <input name="surname" placeholder="Фамилия" value="{{ old('surname') }}" class="form-control" autocomplete="off" required>
                    </label>
                </div>

                <div class="form-group">
                    <label>
                        <input type="email" name="email" placeholder="e-mail" value="{{ old('email') }}" class="form-control" autocomplete="off" required>
                    </label>
                </div>

                <div class="form-group">
                    <label>
                        <input type="password" name="password" id="password" placeholder="Пароль" value="" class="form-control" autocomplete="off" required>
                    </label>
                </div>

                <div class="form-group">
                    <label>
                        <input type="password" name="password_confirmation" id="password" placeholder="Подтвердите пароль" value="" class="form-control" autocomplete="off" required>
                    </label>
                </div>

                <div class="form-group">
                    <input type="submit" value="Регистрация" class="btn btn-primary">
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