@component('mail::message')
# Welcome!

Hello {{ $user->name }},
 
You recently registered for the {{ config('app.name') }} account. For security reasons, we need to validate your email address before you gain access to the site.
 
Just click below to validate your address.

@component('mail::button', ['url' => route('welcome')])
Verify Link
@endcomponent

If you didn't recently ask to join the {{ config('app.name') }} Community, please disregard this email.
 
Have a great day!

Thanks,<br>
{{ config('app.name') }}

P.S. If you are having any trouble, please let us know at {{ config('mail.from.email') }}

@endcomponent

