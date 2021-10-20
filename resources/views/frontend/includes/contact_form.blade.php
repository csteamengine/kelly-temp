{!! Form::open(['route' => 'frontend.contact.send','method' => "POST"]) !!}
{!! Form::token(); !!}

<div class="row">
    <div class="col col-12 col-sm-6">
        <div class="form-group">
            {!! Form::label('first_name', 'First Name'); !!}
            {!! Form::text('first_name',null, ['class' => 'form-control', 'placeholder' => 'First Name', 'required' => 'required']); !!}
        </div>
    </div>
    <div class="col col-12 col-sm-6">
        <div class="form-group">
            {!! Form::label('last_name', 'Last Name'); !!}
            {!! Form::text('last_name',null, ['class' => 'form-control', 'placeholder' => 'Last Name', 'required' => 'required']); !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="form-group">
            {!! Form::label('email', 'Email'); !!}
            {!! Form::text('email',null, ['class' => 'form-control', 'placeholder' => 'Email', 'required' => 'required']); !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="form-group">
            {!! Form::label('message', 'Message'); !!}
            {!! Form::textarea('message',null, ['class' => 'form-control', 'placeholder' => 'Message', 'rows' => 5, 'required' => 'required']); !!}
        </div>
    </div>
</div>

@if(config('boilerplate.access.captcha.contact'))
    <div class="row">
        <div class="col">
            <script src="https://cdn.polyfill.io/v2/polyfill.min.js" type="application/javascript"></script><div id="_g-recaptcha"></div>
            @if(config('boilerplate.access.captcha.configs.options.hidden'))
                <style>.grecaptcha-badge{display:none;!important}</style>
            @endif
            <div class="g-recaptcha"
                 data-sitekey="{{config('boilerplate.access.captcha.configs.site_key')}}"
                 data-size="invisible"
                 data-callback="_submitForm"
                 data-badge="bottomright">
            </div><script type="application/javascript" src="https://www.google.com/recaptcha/api.js" async defer></script><script type="application/javascript">var _submitForm,_captchaForm,_captchaSubmit,_execute=true;</script><script type="application/javascript">window.addEventListener("load", _loadCaptcha);function _loadCaptcha(){
                    _captchaForm=document.querySelector("#_g-recaptcha").closest("form");
                    _captchaSubmit=_captchaForm.querySelector('[type=submit]');
                    _submitForm=function(){if(typeof _submitEvent==="function"){_submitEvent();grecaptcha.reset();}else{_captchaForm.submit();}};
                    _captchaForm.addEventListener('submit',function(e){e.preventDefault();
                        if(typeof _beforeSubmit==='function'){_execute=_beforeSubmit(e);}
                        if(_execute){grecaptcha.execute();}});}</script>

            <input type="hidden" name="captcha_status" value="true" />
        </div><!--col-->
    </div><!--row-->
@endif

<div class="row">
    <div class="col col-6 m-auto text-center">
        {!! Form::submit("Send", ['class' => 'btn btn-success']); !!}
    </div>
</div>
{!! Form::close() !!}

