@component('mail::message')

Zamówienie wysłane poprzez stronę internetową.

Wybrany showroom: {{ $request->showroom_city}}

Imię, Nazwisko: {{ $request->customer_name}}

t: {{ customer_name }}

@endcomponent
