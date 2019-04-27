@component('mail::message')

Wiadomość wysłana poprzez stronę internetową.

Wybrany showroom: {{ $mail_city}}

Imię: {{ $mail_name}}

Nadawca: {{ $mail_address}}

Telefon: {{ $mail_phone}}

Firma: {{ $mail_busines_name}}

Tytuł: {{ $mail_title }}

Treść:

{{ $mail_text }}


@endcomponent
