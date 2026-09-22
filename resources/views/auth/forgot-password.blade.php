<x-guest-layout>
    <section class="auth-card">
        <p class="eyebrow">Password help</p>
        <h1>Reset your password.</h1>
        <p class="auth-copy">Enter your email and we will send a reset link if there is an account for it.</p>

        <x-auth-session-status class="auth-status" :status="session('status')" />

        <form class="campaign-form auth-form" method="POST" action="{{ route('password.email') }}">
            @csrf
            <label>Email address
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
                <x-input-error :messages="$errors->get('email')" />
            </label>
            <button class="button" type="submit">Email password reset link</button>
        </form>
        <p class="auth-switch"><a class="text-link" href="{{ route('login') }}">Back to log in <span>→</span></a></p>
    </section>
</x-guest-layout>
