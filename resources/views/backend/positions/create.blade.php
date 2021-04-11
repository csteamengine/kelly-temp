@extends('backend.layouts.app')

@section('title', __("Create Position"))

@push('before-styles')
@endpush

@push('before-scripts')
    {{--    <script src="/js/vendor.js"></script>--}}
@endpush

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Position Info')
        </x-slot>

        <x-slot name="body">
            @include('backend.positions.includes.position-form', ['position' => new App\Models\Position, 'action' => 'create', 'actionText' => 'Create Position', 'method' => 'POST', 'route' => 'admin.positions.store'])
        </x-slot>
    </x-backend.card>
@endsection

@push('after-scripts')
@endpush

