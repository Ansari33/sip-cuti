<?php

use Illuminate\Auth\Events\Lockout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Volt\Component;

new #[Layout('components.layouts.auth')] class extends Component {
    #[Validate('string|email')]
    public string $email = '';

    #[Validate('required|string')]
    public string $password = '';

    #[Validate('required|string')]
    public string $nip = '';

    public bool $remember = false;

    public string $typePassword = 'password';
    public string $cls = 'bx-hide';

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        
        $this->validate();

        $this->ensureIsNotRateLimited();

        if (! Auth::attempt(['nip' => $this->nip, 'password' => $this->password], $this->remember)) {
            
            RateLimiter::hit($this->throttleKey());
            $this->addError('gagal', 'Data Anda Tidak Valid');
            return;
            throw ValidationException::withMessages([
                'nip' => __('auth.failed'),
            ]);
            
        }

        RateLimiter::clear($this->throttleKey());
        Session::regenerate();

        $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
    }

    public function showPassword(){
        $this->typePassword = $this->typePassword == 'password' ? 'text' : 'password'; 
        $this->cls = $this->cls == 'bx-show' ? 'bx-hide' : 'bx-show'; 
    }

    /**
     * Ensure the authentication request is not rate limited.
     */
    protected function ensureIsNotRateLimited(): void
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        event(new Lockout(request()));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
            'email' => __('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    /**
     * Get the authentication rate limiting throttle key.
     */
    protected function throttleKey(): string
    {
        return Str::transliterate(Str::lower($this->email).'|'.request()->ip());
    }
};
?>
@section('title', 'Login Page')

@section('page-style')
@vite([
    'resources/assets/vendor/scss/pages/page-auth.scss'
])
@endsection

<div>
    <x-auth-header :title="__('Selamat Datang')" :description="__('Masukkan NIP dan Password untuk Log in')" />

    <!-- Session Status -->
    @if (session('status'))
        <div class="alert alert-info mb-4">
            {{ session('status') }}
        </div>
    @endif

    <form wire:submit="login" class="mb-6">
        <div class="mb-6">
            <label for="nip" class="form-label">{{ __('NIP') }}</label>
            <input
                wire:model="nip"
                type="text"
                class="form-control @error('email') is-invalid @enderror"
                id="nip"
                required
                autofocus
                autocomplete="email"
                placeholder="{{ __('Masukkan NIP') }}"
            >
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-6 form-password-toggle">
            <div class="d-flex justify-content-between">
                <label for="password" class="form-label">{{ __('Password') }}</label>
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" wire:navigate>
                        <span>{{ __('Forgot Password?') }}</span>
                    </a>
                @endif
            </div>
            <div class="input-group input-group-merge">
                <input
                    wire:model="password"
                    type="{{ $typePassword }}"
                    class="form-control @error('password') is-invalid @enderror"
                    id="password"
                    required
                    autocomplete="current-password"
                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                >
                <span class="input-group-text cursor-pointer" wire:click="showPassword"><i class="bx {{ $cls }}"></i></span>
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

       {{--  <div class="mb-8">
            <div class="d-flex justify-content-between mt-8">
                <div class="form-check mb-0 ms-2">
                    <input wire:model="remember" type="checkbox" class="form-check-input" id="remember">
                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>
        </div> --}}

        <div class="mb-6">
            <button type="submit" class="btn btn-primary d-grid w-100">{{ __('Login') }}</button>
            
        </div>
        @error('gagal')
      <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
        
    </form>

    @if (Route::has('register'))
        <p class="text-center">
            <span>{{ __('Belum Terdaftar?') }}</span>
            <a href="{{ route('register') }}" wire:navigate>
                <span>{{ __('Silahkan Register') }}</span>
            </a>
        </p>
    @endif
</div>
