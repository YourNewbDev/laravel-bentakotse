<x-guest-layout title="Login" bodyClass="page-login">
    <h1 class="auth-page-title">Login</h1>

    <form method="POST" action="{{route('login.attempt')}}">
        @csrf
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="form-group">
            <input type="email" name="email" placeholder="Your Email" />
        </div>
        <div class="form-group">
            <input type="password" name="password" placeholder="Your Password" />
        </div>
        <div class="text-right mb-medium">
            <a href="/password-reset.html" class="auth-page-password-reset">Reset Password</a>
        </div>

        <button class="btn btn-primary btn-login w-full" type="submit">Login</button>

    </form>
    <x-slot:footerLink>
        Don't have an account? -
        <a href="/signup.html"> Click here to create one</a>
    </x-slot:footerLink>
</x-guest-layout>