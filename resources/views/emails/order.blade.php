@component('mail::message')

Zamówienie wysłane poprzez stronę internetową.

Wybrany showroom: {{ $request->showroom_city}}

Imię, Nazwisko: {{ $request->customer_name}}

E-mail: {{ $request->customer_mail }}

Nr telefonu: {{ $request->customer_phone }}

Nazwa kamienia: {{ $stone_name }}

Struktura powierzchni: {{ $request->stone_type }}

Grubość blatu: {{ $request->stone_thickness }} cm.

Sugerowana ilość elementów: {{ $request->stone_elements }} szt.




----- Krawędzie blatu -----

Obróbka krawędzi blatu: {{ $request->stone_edge }} (nr krawędzi)

Rodzaj pogrubianej krawędzi: {{ $request->stone_width_type}} (nr pogrubienia)

Docelowa grubość krawędzi: {{ $request->stone_width_size}} 




----- Obróbka otworów -----

Rodzaj płyty grzewczej: {{ $request->plate_type }}

Rodzaj zlewozmywaka: {{ $request->sink_type}}

Liczba komór zlewozmywaka: {{ $request->sink_chamber_count }}

Rodzaj ociekacza:  {{ $request->sink_driner_type }}

Baterie, dozowniki:  {{ $request->sink_tap_count }}

Kontakty:  {{ $request->electric_contact_hole }}

Pozostałe otwory:  {{ $request->other_hole }}




----- Elementy ścienne, przygotowanie i montaż -----

Wysokość cokołu:   {{ $request->socle_height }} (cm)

Grubość cokołu:   {{ $request->socle_thickness }} (cm)

Przygotowanie materiału:   {{ $request->prepare }}

Miejsce montażu:   {{ $request->address }}

Miejsce inwestycji:   {{ $request->place_invest }}

Inne informacje:   {{ $request->other_info }}

Plik projektu:  <a href="{{ asset('storage/projects/'.$request->project_file_after) }}">klik</a>




@endcomponent
