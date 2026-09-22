<x-guest-layout>
    <section class="auth-card">
        <p class="eyebrow">Welcome back</p>
        <h1>Log in to FundMyHustle.</h1>
        <p class="auth-copy">Manage your campaigns and start a new one when you are ready.</p>

        <x-auth-session-status class="auth-status" :status="session('status')" />

        <form class="campaign-form auth-form" method="POST" action="{{ route('login') }}">
            @csrf
            <label>Email address
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
                <x-input-error :messages="$errors->get('email')" />
            </label>
            <label>Password
                <input id="password" type="password" name="password" required autocomplete="current-password">
                <x-input-error :messages="$errors->get('password')" />
            </label>
            <label class="check-label"><input id="remember_me" type="checkbox" name="remember"> Remember me</label>
            <button class="button" type="submit">Log in</button>
        </form>
        <p class="auth-switch">New here? <a class="text-link" href="{{ route('register') }}">Create an account <span>→</span></a></p>
        @if (Route::has('password.request'))
            <p class="auth-switch"><a class="text-link" href="{{ route('password.request') }}">Forgot your password? <span>→</span></a></p>
        @endif
    </section>
</x-guest-layout>
