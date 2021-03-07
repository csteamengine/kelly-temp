@extends('frontend.layouts.app')

@section('title', __('Contact'))

@push('before-styles')

@endpush

@section('content')
    @if(isset($active_theme->instagram_url) || isset($active_theme->facebook_url))
        <div class="row justify-content-center mb-2 ">
            <div class="col col-sm-8">
                <div class="card">
                    <div class="card-header">
                        <strong>
                            @lang('Check Out My Social Media')
                        </strong>
                    </div><!--card-header-->
                    <div class="card-body text-center">
                        @if(isset($active_theme->instagram_url))
                            <a href="{{$active_theme->instagram_url}}" target="_blank">
                                <i class="fab fa-instagram fa-3x m-2" role="button"></i>
                            </a>
                        @endif
                        @if(isset($active_theme->facebook_url))
                            <a href="{{$active_theme->facebook_url}}" target="_blank">
                                <i class="fab fa-facebook fa-3x m-2" role="button"></i>
                            </a>
                        @endif
                    </div><!--card-body-->
                </div><!--card-->
            </div>
        </div>
    @endif
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
