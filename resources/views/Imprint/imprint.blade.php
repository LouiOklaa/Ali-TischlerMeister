@extends('layouts.master_home_page')
@section('title')
    Impressum
@endsection
@section('current_page')
    Impressum
@endsection
@section('contents')

    <div class="container">
        <h1 style="font-size: 50px" class="h1 mb-6">
            <span>Impressum / Rechtliche Hinweise</span>
        </h1>
    </div><br><br>
    <div class="container">
        <p><span style="font-weight: bolder; font-size: 25px">Ali TischlerMeister</span><br>{{$information->address}}
            <br>Telefon
            : {{$information->phone_number}}<br>E-Mail : <a
                href="{{route('contact_us')}}">{{$information->email}}</a><br>Internet : <a href="{{url('/')}}">www.ali-tischlermeister.de</a>
        </p><br><br>

        <p><span style="font-weight: bold;">vertreten durch den Vorstand : </span>Herr Ali Jouma</p><br><br>

        >
        <!-- <p><span style="font-weight: bold;">Registergericht : </span>-----</p -->
        <!--<p><span style="font-weight: bold;">Registernummer : </span>-----</p>-->
        <p><span style="font-weight: bold;">Umsatzsteuer-Identifikationsnummer : </span>00 000 00 00</p>

        <br><br>
        <p><strong>Bereitstellung von Daten und Informationen / Haftungsausschluss</strong></p>
        <p>Die Ali TischlerMeister bemüht sich, dass die auf dieser Website enthaltenen Informationen und Daten
            zutreffend sind. Eine Gewähr oder Haftung für die Aktualität, Richtigkeit und Vollständigkeit der zur
            Verfügung gestellten Informationen und Daten ist jedoch ausgeschlossen.
        </p>
        <p>Die Ali TischlerMeister behält sich vor, ohne Ankündigung Änderungen oder Ergänzungen der bereitgestellten
            Informationen oder Daten vorzunehmen.</p>
        <p>Soweit unsere Internetseiten in die Zukunft gerichtete Aussagen enthalten, bauen diese Aussagen auf
            Überzeugungen und Einschätzungen der Ali TischlerMeister auf und unterliegen damit Risiken und
            Unsicherheiten. Eine Haftung für solche Aussagen wird ausdrücklich ausgeschlossen.</p>

        <p><strong>Links und Verweise (Haftungsausschluss)</strong></p>
        <p>Von den eigenen Inhalten der Ali TischlerMeister sind Querverweise ("Links") auf die Webseiten anderer
            Anbieter gesetzt, durch welche lediglich Zugang zu fremden Inhalten eröffnet wird. Für diese fremden Inhalte
            ist die Ali TischlerMeister nicht verantwortlich.</p>

        <p><strong>Urheberrecht</strong></p>
        <p>Falls nicht anders angegeben, sind Inhalt und Struktur der Webseiten der Ali TischlerMeister urheberrechtlich
            geschützt. Dies gilt insbesondere für Texte, Bilder, Grafiken, Ton-, Video- oder Animationsdateien
            einschließlich deren Anordnung auf den Seiten. Eine Vervielfältigung oder Verwendung der Seiten oder ihrer
            Inhalte (oder Teilen davon) ist ohne vorherige gesonderte Zustimmung des jeweiligen Rechteinhabers nicht
            gestattet.
        </p>

        <p><strong>Streitbeilegung</strong></p>
        <p>Eine Verpflichtung oder Bereitschaft zur Teilnahme an Streitbeilegungsverfahren vor einer
            Verbraucherschlichtungsstelle besteht nicht.
        </p>
        <p>Plattform der EU-Kommission zur Online-Streitbeilegung : <a href="">www.ec.europa.eu/consumers/odr</a></p>

    </div>
@endsection
