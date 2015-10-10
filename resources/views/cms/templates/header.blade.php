<div class="container">
    <h1>Header</h1>
    <form action="{{ url('auth/logout') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            Привет, {{ Auth::user()->name }}!
            <input type="submit" value="Выйти" class="btn btn-default">
        </div>
    </form>
</div>