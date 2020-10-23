@component('mail::message')
# Welcome to Suvidhaye

We are so happy to have you on board. <strong>SUVIDHAYE</strong>, a Jabalpur based Startup, is here with an exciting
variety of <strong>PRODUCTS
  AND SERVICES</strong> at your doorstep within <strong>24 hrs.</strong> Ordering of Products and Services <strong>CALL
  AND ON WHATSAPP</strong> makes it easier to use. We are here with the new feature of <strong>UPLOADING HANDWRITTEN
  LIST</strong> in just 2 steps. Make your life
easier with
Suvidhaye.

<strong>|| हर सुविधाएं आपके घर तक ||</strong>



@component('mail::button', ['url' => 'http://suvidhaye.in/'])
Visit Suvidhaye
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent