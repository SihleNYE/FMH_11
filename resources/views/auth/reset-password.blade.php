<x-guest-layout>
    <section class="auth-card">
        <p class="eyebrow">Choose a new password</p>
        <h1>Secure your account.</h1>

        <form class="campaign-form auth-form" method="POST" action="{{ route('password.store') }}">
            @csrf
            <input type="hidden" name="token" value="{{ request()->route('token') }}">
            <label>Email address
                <input id="email" type="email" name="email" value="{{ old('email', request('email')) }}" required autocomplete="username">
                <x-input-error :messages="$errors->get('email')" />
            </label>
            <label>New password
                <input id="password" type="password" name="password" required autocomplete="new-password">
                <x-input-error :messages="$errors->get('password')" />
            </label>
            <label>Confirm new password
                <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password">
                <x-input-error :messages="$errors->get('password_confirmation')" />
            </label>
            <button class="button" type="submit">Reset password</button>
        </form>
    </section>
</x-guest-layout>
