@component('mail::message')
    مرحبا : {{auth()->user()->name }}
# {{$message}}

@component('mail::panel')
  <br>   اسم : {{$data->name}}
  <br> رقم الهاتف :  {{$data->phone}}
  <br> الرسالة :  {{$data->msg}}
@endcomponent

@component('mail::button', ['url' => $url])
تفاصيل الرسالة
@endcomponent

مع تحيات,<br>
{{ websiteInfo_hlp('website_name_ar') }}
@endcomponent
