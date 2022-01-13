@component('mail::message')
# We Start Working On Your Order

Hi, {{ $checkout->User->name }}<br>
You just need to wait for your vehicle to be finished for the 3-4 next days. 

@component('mail::button', ['url' => route('user.dashboard')])
My Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
