@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en" class="js">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">
    <!-- Page Title  -->
    <title>Register </title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('assets/css/dashlite.css?ver=3.2.0') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('assets/css/theme.css?ver=3.2.0') }}">
</head>
<body class="nk-body ui-rounder npc-general pg-auth">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <div class="nk-content">
                    <div class="nk-block nk-block-middle nk-auth-body wide-xs">
                        <div class="brand-logo pb-4 text-center">
                            <a href="/" class="logo-link">
                                <img class="logo-light logo-img logo-img-lg" src="{{ asset('images/logo.png') }}" srcset="{{ asset('images/logo2x.png') }} 2x" alt="logo">
                                <img class="logo-dark logo-img logo-img-lg" src="{{ asset('images/logo-dark.png') }}" srcset="{{ asset('images/logo-dark2x.png') }} 2x" alt="logo-dark">
                            </a>
                        </div>
                        <div class="card">
                            <div class="card-inner card-inner-lg">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h4 class="nk-block-title">Register</h4>
                                        <div class="nk-block-des">
                                            <p>Create New Dashlite Account</p>
                                        </div>
                                    </div>
                                </div>
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label class="form-label" for="name">{{ __('Name') }}</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control form-control-lg" id="name" name="name" placeholder="Enter your name" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="email">{{ __('Email Address') }}</label>
                                        <div class="form-control-wrap">
                                            <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="Enter your email address" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="password">{{ __('Password') }}</label>
                                        <div class="form-control-wrap">
                                            <a href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                            </a>
                                            <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Enter your password" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-lg btn-primary btn-block">{{ __('Register') }}</button>
                                    </div>
                                </form>
                                <div class="form-note-s2 text-center pt-4"> Already have an account? <a href="{{ route('login') }}"><strong>Sign in instead</strong></a>
                                </div>
                                <div class="text-center pt-4 pb-3">
                                    <h6 class="overline-title overline-title-sap"><span>OR</span></h6>
                                </div>
                                <ul class="nav justify-center gx-8">
                                    <li class="nav-item">
                                        {{-- <a class="nav-link" href="{{ route('auth.google') }}">Google</a> --}}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- wrap @e -->
            </div>
            <!-- content @e -->
        </div>
        <!-- main @e -->
    </div>
    <script src="{{ asset('assets/js/bundle.js?ver=3.2.0') }}"></script>
    <script src="{{ asset('assets/js/scripts.js?ver=3.2.0') }}"></script>
</body>
</html>
@endsection
