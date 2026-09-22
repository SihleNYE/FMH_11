<x-guest-layout>
    <section class="auth-card">
        <p class="eyebrow">Create your account</p>
        <h1>Start funding your hustle.</h1>
        <p class="auth-copy">Create an account to launch and manage your own campaign.</p>

        <form class="campaign-form auth-form" method="POST" action="{{ route('register') }}">
            @csrf
            <label>Your name
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name">
                <x-input-error :messages="$errors->get('name')" />
            </label>
            <label>Email address
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username">
                <x-input-error :messages="$errors->get('email')" />
            </label>
            <label>Create a password
                <input id="password" type="password" name="password" required autocomplete="new-password">
                <x-input-error :messages="$errors->get('password')" />
            </label>
            <label>Confirm password
                <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password">
                <x-input-error :messages="$errors->get('password_confirmation')" />
            </label>
            <button class="button" type="submit">Create account</button>
        </form>
        <p class="auth-switch">Already have an account? <a class="text-link" href="{{ route('login') }}">Log in <span>→</span></a></p>
    </section>
</x-guest-layout>
