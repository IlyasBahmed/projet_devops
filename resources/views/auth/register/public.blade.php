<form method="POST" action="{{ route('register.invite.store') }}">
    @csrf

    <input type="hidden" name="token" value="{{ $token }}">

    <input name="password" type="password" placeholder="Password" required>
    <input name="password_confirmation" type="password" placeholder="Confirm Password" required>

    <button type="submit">Set password</button>
</form>
