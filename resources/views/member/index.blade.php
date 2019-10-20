@extends('member.layouts.master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if (Auth::guard('member')->check())
                Welcome to member dashboard, {{ Auth::guard('member')->user()->full_name }}
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
