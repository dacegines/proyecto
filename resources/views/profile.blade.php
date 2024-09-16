// resources/views/profile.blade.php
@extends('adminlte::page')

@section('title', 'Perfil')

@section('content_header')
    {{--<h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Profile') }}
    </h2>--}}
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6">
            <!-- Información de perfil -->
            <div class="card">
                <div class="card-header bg-success text-white text-center">
                    <h3 class="card-title">Información de perfil</h3>
                </div>
                <div class="card-body">
                    

                    @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                        @livewire('profile.update-profile-information-form')
                    @endif
                </div>

            </div>
        </div>

        <div class="col-md-6">
            <!-- Actualizar contraseña -->
            <div class="card">
                <div class="card-header bg-success text-white text-center">
                    <h3 class="card-title">Actualizar contraseña</h3>
                </div>
                <div class="card-body">


                    @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                        @livewire('profile.update-password-form')
                    @endif
                </div>

            </div>
        </div>
    </div>

    @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication() || Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
        <div class="row mt-4">
            <div class="col-md-12">
                <!-- Autenticación de dos factores -->
                @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                    <div class="card">
                        <div class="card-header bg-success text-white text-center">
                            <h3 class="card-title">Autenticación de dos factores</h3>
                        </div>
                        <div class="card-body">
                            @livewire('profile.two-factor-authentication-form')
                        </div>
                    </div>
                @endif

                <!-- Eliminar cuenta -->
                @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                    <div class="card mt-4">
                        <div class="card-header bg-success text-white text-center">
                            <h3 class="card-title">Eliminar cuenta</h3>
                        </div>
                        <div class="card-body">
                            @livewire('profile.delete-user-form')
                        </div>
                    </div>
                @endif
            </div>
        </div>
    @endif
@endsection


@section('css')
    {{-- Add here extra stylesheets --}}
    <link rel="stylesheet" href="{{ asset('css/profile/styles.css')}}"> 
@stop
