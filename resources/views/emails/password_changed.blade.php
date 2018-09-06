@component('mail::message')
# {{ config('app.name') }}

Dear {{ $user->name }},

You just changed your password.

If you didn’t change your password, give us a call right away at +1-000-000-0000.

Yours sincerely,<br>
{{ config('app.name') }}
@endcomponent