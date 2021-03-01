@extends('frontend.layouts.app')

@section('title', __('Contact'))

@push('before-styles')

@endpush

@section('content')
    <div class="row justify-content-center">
        <div class="col col-sm-8 align-self-center">
            <div class="card">
                <div class="card-header">
                    <strong>
                        @lang('Contact Me')
                    </strong>
                </div><!--card-header-->
                <div class="card-body">
                    @include('frontend.includes.contact_form')
                </div><!--card-body-->
            </div><!--card-->
        </div><!--col-->
    </div><!--row-->
@endsection

@push('after-scripts')

@endpush
