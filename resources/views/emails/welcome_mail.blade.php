@component('mail::message')
# Welcome to Email And Auth App

The body of your message.

@component('mail::button', ['url' => ''])
Visit
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
