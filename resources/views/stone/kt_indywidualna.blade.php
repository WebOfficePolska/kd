<!DOCTYPE html>
<html>
<head>
    <title>Karta techniczna indywidualna</title>
</head>
<body>

    <h5>^Propozycja karty technicznej dla klientów indywidualnych</h5>

    <ul>

	<li> Nazwa kamienia: <a href="http://kd.wop.pl/kamienie/{{$stone->id}}"> {{ $stone->title }} </a></li>
	<li> Rodzaj (handlowo): {{ $stonetype->title }} </li>
	<li> Seria (kamien^design): {{ $stone->collections[0]->title }} </li>
	
    </ul>


    <div>
	<img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(250)->generate($link)) !!} ">
    </div>

    <p>rtfghjghjg
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</body>
</html>
