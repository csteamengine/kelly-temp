<p>@lang('validation.attributes.frontend.mail.body_title')</p>

<p><strong>@lang('validation.attributes.frontend.mail.name'):</strong> {{ $request->name }}</p>
<p><strong>@lang('validation.attributes.frontend.mail.email'):</strong> {{ $request->email }}</p>
<p><strong>@lang('validation.attributes.frontend.mail.phone'):</strong> {{ $request->phone ?? 'N/A' }}</p>
<p><strong>@lang('validation.attributes.frontend.mail.message'):</strong> {{ $request->message }}</p>
