@push('before-styles')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
@endpush

{!! Form::model($theme, ['route' => [$route, $theme], 'method' => $method, 'files' => true]) !!}
{!! Form::token(); !!}
<div class="accordion" id="pagePermissions">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Change Page Permissions
                </button>
            </h2>
        </div>

        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#pagePermissions">
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col col-6 col-sm-3">
                        @include('backend.includes.switch-label', ['model'=> $theme, 'default' => $theme->is_maintenance_mode, 'input_name' => 'is_maintenance_mode', 'label_name' => 'Maintenance Mode'])
                    </div>
                    <div class="col col-6 col-sm-3">
                        @include('backend.includes.switch-label', ['model'=> $theme, 'default' => $theme->contact_submit_active, 'input_name' => 'contact_submit_active', 'label_name' => 'Contact Submissions'])
                    </div>
                    <div class="col col-6 col-sm-3">
                        @include('backend.includes.switch-label', ['model'=> $theme, 'default' => $theme->resume_active, 'input_name' => 'resume_active', 'label_name' => 'Resume Download'])
                    </div>
                    <div class="col col-6 col-sm-3">
                        @include('backend.includes.switch-label', ['model'=> $theme, 'default' => $theme->background_video_active, 'input_name' => 'background_video_active', 'label_name' => 'Background Video'])
                    </div>
                    <div class="col col-6 col-sm-3">
                        @include('backend.includes.switch-label', ['model'=> $theme, 'default' => $theme->background_image_active, 'input_name' => 'background_image_active', 'label_name' => 'Background Image'])
                    </div>
                    <div class="col col-6 col-sm-3">
                        @include('backend.includes.switch-label', ['model'=> $theme, 'default' => $theme->contact_active, 'input_name' => 'contact_active', 'label_name' => 'Contact Page'])
                    </div>
                    <div class="col col-6 col-sm-3">
                        @include('backend.includes.switch-label', ['model'=> $theme, 'default' => $theme->about_active, 'input_name' => 'about_active', 'label_name' => 'About Page'])
                    </div>
                    <div class="col col-6 col-sm-3">
                        @include('backend.includes.switch-label', ['model'=> $theme, 'default' => $theme->projects_active, 'input_name' => 'projects_active', 'label_name' => 'Projects Page'])
                    </div>
                    <div class="col col-6 col-sm-3">
                        @include('backend.includes.switch-label', ['model'=> $theme, 'default' => $theme->positions_active, 'input_name' => 'positions_active', 'label_name' => 'Positions Page'])
                    </div>
                    <div class="col col-6 col-sm-3">
                        @include('backend.includes.switch-label', ['model'=> $theme, 'default' => $theme->blogs_active, 'input_name' => 'blogs_active', 'label_name' => 'Blogs Page'])
                    </div>
                    <div class="col col-6 col-sm-3">
                        @include('backend.includes.switch-label', ['model'=> $theme, 'default' => $theme->links_active, 'input_name' => 'links_active', 'label_name' => 'Links Page'])
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mb-2">
    <div class="col col-12 col-sm-2">
        @include('backend.includes.switch-label', ['model'=> $theme, 'default' => $theme->is_active, 'input_name' => 'is_active', 'label_name' => 'Active'])
    </div>
    <div class="col col-12 col-sm-5">
        <div class="form-group">
            {!! Form::label('title', 'Title'); !!}
            {!! Form::text('title',null, ['class' => 'form-control', 'placeholder' => 'Theme Title']); !!}
        </div>
    </div>
    <div class="col col-12 col-sm-5">
        <div class="form-group">
            {!! Form::label('phone', 'Phone Number'); !!}
            {!! Form::text('phone',null, ['class' => 'form-control', 'placeholder' => 'Phone Number']); !!}
        </div>
    </div>
</div>

<div class="row mb-2">
    <div class="col col-12 col-sm-4">
        <div class="form-group">
            {!! Form::label('first_name', 'First Name'); !!}
            {!! Form::text('first_name',null, ['class' => 'form-control', 'placeholder' => 'First Name']); !!}
        </div>
    </div>
    <div class="col col-12 col-sm-4">
        <div class="form-group">
            {!! Form::label('last_name', 'Last Name'); !!}
            {!! Form::text('last_name',null, ['class' => 'form-control', 'placeholder' => 'Last Name']); !!}
        </div>
    </div>
    <div class="col col-12 col-sm-4">
        <div class="form-group">
            {!! Form::label('email', 'Contact Email'); !!}
            {!! Form::email('email',null, ['class' => 'form-control', 'placeholder' => 'Contact Email']); !!}
        </div>
    </div>
</div>
<div class="row mb-2">
    <div class="col col-6 col-sm-4">
        <div class="form-group">
            {!! Form::label('github_url', 'Github URL'); !!}
            {!! Form::url('github_url',null, ['class' => 'form-control', 'placeholder' => 'Github URL']); !!}
        </div>
    </div>
    <div class="col col-6 col-sm-4">
        <div class="form-group">
            {!! Form::label('facebook_url', 'Facebook URL'); !!}
            {!! Form::url('facebook_url',null, ['class' => 'form-control', 'placeholder' => 'Facebook URL']); !!}
        </div>
    </div>
    <div class="col col-6 col-sm-4">
        <div class="form-group">
            {!! Form::label('instagram_url', 'Instagram URL'); !!}
            {!! Form::url('instagram_url',null, ['class' => 'form-control', 'placeholder' => 'Instagram URL']); !!}
        </div>
    </div>
    <div class="col col-6 col-sm-4">
        <div class="form-group">
            {!! Form::label('twitter_url', 'Twitter URL'); !!}
            {!! Form::url('twitter_url',null, ['class' => 'form-control', 'placeholder' => 'Twitter URL']); !!}
        </div>
    </div>
    <div class="col col-6 col-sm-4">
        <div class="form-group">
            {!! Form::label('youtube_url', 'YouTube URL'); !!}
            {!! Form::url('youtube_url',null, ['class' => 'form-control', 'placeholder' => 'YouTube URL']); !!}
        </div>
    </div>
    <div class="col col-6 col-sm-4">
        <div class="form-group">
            {!! Form::label('tiktok_url', 'TikTok URL'); !!}
            {!! Form::url('tiktok_url',null, ['class' => 'form-control', 'placeholder' => 'TikTok URL']); !!}
        </div>
    </div>
</div>

<div class="row mb-2">
    <div class="col">
        <div class="form-group">
            {!! Form::label('description', 'Description'); !!}
            {!! Form::textarea('description',null, ['class' => 'form-control', 'placeholder' => 'Description', 'rows' => 5]); !!}
        </div>
    </div>
</div>

<div class="row mb-2">
    <div class="col">
        <div class="form-group">
            {!! Form::label('page_content', 'Page Content'); !!}
            {!! Form::textarea('page_content',null, ['class' => 'form-control', 'placeholder' => 'Page Content', 'rows' => 10]); !!}
        </div>
    </div>
</div>
<div class="row mb-2">
    <div class="col col-4">
        <div class="form-group">
            {!! Form::label('primary_color', 'Primary Color'); !!}
            {!! Form::color('primary_color',null, ['class' => 'form-control', 'placeholder' => 'Contact Email']); !!}
        </div>
    </div>
    <div class="col col-4">
        <div class="form-group">
            {!! Form::label('secondary_color', 'Secondary Color'); !!}
            {!! Form::color('secondary_color',null, ['class' => 'form-control', 'placeholder' => 'Contact Email']); !!}
        </div>
    </div>
    <div class="col col-4">
        <div class="form-group">
            {!! Form::label('background_color', 'Background Color'); !!}
            {!! Form::color('background_color',null, ['class' => 'form-control', 'placeholder' => 'Contact Email']); !!}
        </div>
    </div>
</div>
<div class="row mb-2">
    <div class="col-12 col-md-10 col-lg-8 m-auto">
        <div class="row">
            <div class="col col-4 m-auto text-center " >
                <div class="form-group">
                    {!! Form::label('background_image',"Background Image"); !!}
                    {!! Form::file('background_image', ['hidden' => 'hidden', 'id' => 'backgroundInput']); !!}
                    <div class="square img-thumbnail" role="button" data-trigger="#backgroundInput">
                        <div class="thumbnail-overlay img-thumbnail">
                            <div class="row h-100 m-auto">
                                <div class="col m-auto">
                                    <i class="thumbnail-icon fas fa-edit fa-2x m-auto text-light"></i>
                                </div>
                            </div>
                        </div>
                        @if($theme->background_image() != null && $theme->background_image()->getTypeFromMime() != "video")
                            <div class="thumbnail img-thumbnail" style="background: url('{{$theme->background_image() != null ? $theme->background_image()->getUrl('thumb') : asset(getPlaceholder())}}') center center; background-size: cover">
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col col-4 m-auto text-center " >
                <div class="form-group">
                    {!! Form::label('about_image_label',"About Image"); !!}
                    {!! Form::file('about_image', ['hidden' => 'hidden', 'id' => 'aboutInput']); !!}
                    <div class="square img-thumbnail" role="button" data-trigger="#aboutInput">
                        <div class="thumbnail-overlay img-thumbnail">
                            <div class="row h-100 m-auto">
                                <div class="col m-auto">
                                    <i class="thumbnail-icon fas fa-edit fa-2x m-auto text-light"></i>
                                </div>
                            </div>
                        </div>
                        <div class="thumbnail img-thumbnail" style="background: url('{{$theme->about_image() != null ? $theme->about_image()->getUrl('thumb') : asset(getPlaceholder())}}') center center; background-size: cover">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-4 m-auto text-center " >
                <div class="form-group">
                    {!! Form::label('resume-label',"Resume/CV File"); !!}
                    {!! Form::file('resume', ['hidden' => 'hidden', 'id' => 'resumeInput']); !!}
                    <div class="square img-thumbnail" role="button" data-trigger="#resumeInput">
                        <div class="thumbnail-overlay img-thumbnail">
                            <div class="row h-100 m-auto">
                                <div class="col m-auto">
                                    <i class="thumbnail-icon fas fa-edit fa-2x m-auto text-light"></i>
                                </div>
                            </div>
                        </div>
                        <div class="thumbnail img-thumbnail" style="background: url('{{$theme->resume() != null ? $theme->resume()->getUrl('thumb') : asset(getPlaceholder())}}') center center; background-size: cover">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mb-2">
    <div class="col col-6">
        <div class="form-group">
            {!! Form::label('media-label',"Upload Media"); !!}
            <div class="custom-file">
                {!! Form::label('media-label',"Upload Media", ['class' => 'custom-file-label']); !!}
                {!! Form::file('media[]', ['class' => 'custom-file-input', 'multiple' => true]); !!}
            </div>
        </div>
    </div>
    <div class="col col-6">
        <div class="form-group">
            {!! Form::label('favicon-label',"Upload Favicon"); !!}
            <div class="custom-file">
                {!! Form::label('favicon-label',"Upload Favicon", ['class' => 'custom-file-label']); !!}
                {!! Form::file('favicon', ['class' => 'custom-file-input']); !!}
            </div>
        </div>
    </div>
</div>
<div class="row mb-4 mt-4">
    <div class="col text-center">
        {!! Form::submit($actionText, ['class' => 'btn btn-success']); !!}
    </div>
</div>
{!! Form::close() !!}

@push('after-scripts')
    <script src="{{mix('js/backend/includes/forms.js')}}"></script>
@endpush
