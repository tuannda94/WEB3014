@extends('admin.layouts.master')

@section('admin_title')
    @yield('title')
@stop

@section('admin_css')
    @stack('css')
    @yield('css')
@stop

@section('body')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        @include('admin.includes.navbar-main.navbar-main')
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            @yield('statistics')
            @yield('content')
            @yield('footer')
            @yield('fixed')
        </div>
    </main>
@endsection

@section('admin_js')
    @stack('js')
    @yield('js')
@stop
