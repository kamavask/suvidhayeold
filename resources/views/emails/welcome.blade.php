@component('mail::message')
# Welcome to Suvidhaye

The body of your message.

@component('mail::button', ['url' => 'http://suvidhaye.in/'])
Visit Suvidhaye
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent