@component('mail::message')
# Welcome to Suvidhaye



@component('mail::button', ['url' => 'http://suvidhaye.in/'])
Suvidhaye
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent