<?php

use App\Models\User;
use App\Models\Pegawai;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('components.layouts.auth')] class extends Component {
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $nip = '';
    public string $password_confirmation = '';
    public bool $terms = true;

    public string $typePassword = 'password';
    public string $cls = 'bx-hide';

    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
            'terms' => ['accepted'],
            'nip' => ['required']
        ]);

        if(!$this->cekNip($this->nip)){
            $this->addError('nip', 'NIP anda tidak Ditemukan!');
            return;
        }
        $validated['password'] = Hash::make($validated['password']);

        event(new Registered(($user = User::create($validated))));

        Auth::login($user);

        $this->redirectIntended(route('dashboard', absolute: false), navigate: true);
    }

    public function cekNip($nip){
       return Pegawai::where('nip',$nip)->first();
    }

    public function showPassword(){
        $this->typePassword = $this->typePassword == 'password' ? 'text' : 'password'; 
        $this->cls = $this->cls == 'bx-show' ? 'bx-hide' : 'bx-show'; 
    }

}; ?>

@section('title', 'Register Page')

@section('page-style')
@vite([
    'resources/assets/vendor/scss/pages/page-auth.scss'
])
@endsection

<div>
    <h4 class="mb-1">{{ __('Registrasi Akun') }} 🚀</h4>
    <p class="mb-6">{{ __('Silahkan Registrasikan Akun Anda!') }}</p>

    <!-- Session Status -->
    @if (session('status'))
        <div class="alert alert-info mb-4">
            {{ session('status') }}
        </div>
    @endif

    <form wire:submit="register" class="mb-6">
        <div class="mb-6">
            <label for="name" class="form-label">{{ __('Name') }}</label>
            <input
                wire:model="name"
                type="text"
                class="form-control @error('name') is-invalid @enderror"
                id="name"
                required
                autofocus
                autocomplete="name"
                placeholder="{{ __('Enter your name') }}"
            >
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-6">
            <label for="email" class="form-label">{{ __('NIP') }}</label>
            <input
                wire:model="nip"
                type="text"
                class="form-control @error('nip') is-invalid @enderror"
                id="nip"
                required
                autocomplete="nip"
                placeholder="{{ __('NIP') }}"
            >
            @error('nip')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-6">
            <label for="email" class="form-label">{{ __('Email') }}</label>
            <input
                wire:model="email"
                type="email"
                class="form-control @error('email') is-invalid @enderror"
                id="email"
                required
                autocomplete="email"
                placeholder="{{ __('Enter your email') }}"
            >
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-6 form-password-toggle">
            <label class="form-label" for="password">{{ __('Password') }}</label>
            <div class="input-group input-group-merge">
                <input
                    wire:model="password"
                    type="{{ $typePassword }}"
                    class="form-control @error('password') is-invalid @enderror"
                    id="password"
                    required
                    autocomplete="new-password"
                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                >
                <span class="input-group-text cursor-pointer" wire:click="showPassword"><i class="bx {{ $cls }}"></i></span>
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-6 form-password-toggle">
            <label class="form-label" for="password_confirmation">{{ __('Confirm Password') }}</label>
            <div class="input-group input-group-merge">
                <input
                    wire:model="password_confirmation"
                    type="{{ $typePassword }}"
                    class="form-control @error('password_confirmation') is-invalid @enderror"
                    id="password_confirmation"
                    required
                    autocomplete="new-password"
                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                >
                <span class="input-group-text cursor-pointer" wire:click="showPassword"><i class="bx {{ $cls }}"></i></span>
                @error('password_confirmation')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        {{-- <div class="mb-8">
            <div class="form-check mb-0 ms-2">
                <input wire:model="terms" type="checkbox" class="form-check-input @error('terms') is-invalid @enderror" id="terms">
                <label class="form-check-label" for="terms">
                    {{ __('I agree to') }}
                    <a href="javascript:void(0);">{{ __('privacy policy & terms') }}</a>
                </label>
                @error('terms')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div> --}}

        <button type="submit" class="btn btn-primary d-grid w-100 mb-6">
            {{ __('Sign up') }}
        </button>
    </form>

    <p class="text-center">
        <span>{{ __('Telah Mendaftar?') }}</span>
        <a href="{{ route('login') }}" wire:navigate>
            <span>{{ __('Langsung Login') }}</span>
        </a>
    </p>
</div>
