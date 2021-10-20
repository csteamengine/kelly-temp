@lang('validation.attributes.frontend.mail.body_title')

@lang('validation.attributes.frontend.mail.name'): {{ $request->first_name . ' ' . $request->last_name}}
@lang('validation.attributes.frontend.mail.email'): {{ $request->email }}
@lang('validation.attributes.frontend.mail.phone'): {{ $request->phone ?? 'N/A' }}
@lang('validation.attributes.frontend.mail.message'): {{ $request->message }}
