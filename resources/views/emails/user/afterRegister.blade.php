@component('mail::message')
# Welcome!

Hi {{ $user->name }}<br>
Welcome to Ardent Auto Detailing, your account has been created successfully.<br>
Now you can choose your favorite package!

@component('mail::button', ['url' => route('login')])
Login Here
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent