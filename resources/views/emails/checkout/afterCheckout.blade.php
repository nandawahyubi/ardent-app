@component('mail::message')
# Choose Package : {{ $checkout->Package->title }}

Hi, {{ $checkout->User->name }}<br>
Thank you for choosing <b>{{ $checkout->Package->title }}</b>, please see payment instruction by click the button
bellow.

@component('mail::button', ['url' => route('dashboard')])
My Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
