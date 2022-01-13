@component('mail::message')
# We Have Completed Your Order

Now you can pick up your vehicle. Thank you for trusting our services.

@component('mail::button', ['url' => route('user.dashboard')])
My Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
