<form method="POST" action="{{ route('article.index') }}">
    @csrf

    <div>
        <label for="email">Email</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>

        @error('email')
            <span role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div>
        <label for="password">Password</label>
        <input id="password" type="password" name="password" required>

        @error('password')
            <span role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <button type="submit">Login</button>
</form>

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
