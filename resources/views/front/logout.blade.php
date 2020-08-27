@php
  Auth::logout();
@endphp

@extends('layouts.front')
@push('scripts')
    <script>
       setTimeout(_ => {
           window.location.href='/login'
       }, 500)
    </script>
@endpush
