<x-guest-layout title="Sign Up" bodyClass="page-signup">
    <h1 class="auth-page-title">Signup</h1>

    <form action="{{route('signup.attempt')}}" method="POST">
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
            <input type="email" placeholder="Your Email" name="email" />
        </div>
        <div class="form-group">
            <input type="password" placeholder="Your Password" name="password" />
        </div>
        <div class="form-group">
            <input type="password" placeholder="Repeat Password" name="password_confirmation" />
        </div>
        <hr />
        <div class="form-group">
            <input type="text" placeholder="First Name" name="first_name" />
        </div>
        <div class="form-group">
            <input type="text" placeholder="Last Name" name="last_name" />
        </div>
        <div class="form-group">
            <input type="text" placeholder="Phone" name="phone" />
        </div>
        <button class="btn btn-primary btn-login w-full" type="submit">Register</button>
    </form>
    <x-slot:footerLink>
        Already have an account? -
        <a href="/login.html"> Click here to login </a>
    </x-slot:footerLink>
</x-guest-layout>