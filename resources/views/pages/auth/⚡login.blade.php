<?php

use Livewire\Component;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;

new class extends Component
{
    #[Validate('required|email')]
    public string $email = '';

    #[Validate('required')]
    public string $password = '';

    public bool $remember = false;

    public function login()
    {
        $this->validate();

        // Standard Laravel Rate Limiting to prevent brute force
        if (RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            $this->addError('email', trans('auth.throttle', [
                'seconds' => RateLimiter::availableIn($this->throttleKey()),
            ]));
            return;
        }

        // Standard Auth Attempt
        if (! Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            RateLimiter::hit($this->throttleKey());
            $this->addError('email', trans('auth.failed'));
            return;
        }

        RateLimiter::clear($this->throttleKey());
        session()->regenerate();

        return redirect()->intended(route('dashboard'));
    }

    protected function throttleKey(): string
    {
        return strtolower($this->email).'|'.request()->ip();
    }
};
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header text-center">
                    <h4>Log in your account</h4>
                </div>
                <div class="card-body">
                    <form wire:submit="login">
                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control" wire:model="email">
                            @error('email') <span>{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" wire:model="password">
                            @error('password') <span>{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-warning w-100">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>