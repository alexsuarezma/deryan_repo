{{--<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>--}}

<x-app-layout>
    <x-slot name="header">
        Registrar nuevo usuario
    </x-slot>
    <div class="container-md d-flex justify-content-center">
        <!-- general form elements -->
        <div class="card card-primary container">
            <div class="card-header">
                <h3 class="card-title">Registrar Usuario</h3>
            </div>
            <!-- /.card-header -->
            <x-toast-message></x-toast-message>
            <!-- form start -->
            <form method="POST" action="{{ route('user.create.post') }}">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputNombres1">Nombres</label>
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="exampleInputNombres1" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputApellidos1">Apellidos</label>
                        <input type="text" name="lastname" value="{{ old('lastname') }}" class="form-control" id="exampleInputApellidos1" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="exampleInputEmail1" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Contraseña</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPasswordconfirmation1">Confirmar Contraseña</label>
                        <input type="password" name="password_confirmation" class="form-control" id="exampleInputPasswordconfirmation1" required>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="admin" value="1" {{ old('admin') == 1 ? 'checked' : '' }}>
                        <label class="form-check-label" for="exampleCheck1">Administrador</label>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
</x-app-layout>