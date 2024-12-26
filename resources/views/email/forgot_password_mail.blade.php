@component('mail::message')
    Hi, {{ $user->name }}. Forgot Password?
    <br />
    <p>It Happens.</p>
    <br />
    @component('mail::button', ['url' => url('resetPassword/' .$user->remember_token)])
        Reset Password
    @endcomponent
    <br />
    Thank You....
@endcomponent