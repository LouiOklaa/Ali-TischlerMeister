@extends('layouts.master_home_page')
@section('title')
    Datenschutz
@endsection
@section('current_page')
    Datenschutz
@endsection
@section('contents')

    <div class="container">
        <h1 style="font-size: 35px" class="h1 mb-6">
            <span>Datenschutzerklärung</span>
        </h1>
        <p style="font-size: 25px">Im Folgenden informieren wir über die Verarbeitung personenbezogener Daten bei
            Nutzung unserer Webseite.</p>
    </div><br><br>
    <div class="container">
        <p><strong>Kontaktdaten Verantwortlicher / Datenschutzbeauftragter</strong></p>
        <p>Verantwortlicher gem. Art.&nbsp;4 Abs.&nbsp;7 EU-Datenschutz-Grundverordnung (DS-GVO) ist&nbsp;</p>
        <p>Ali TischlerMeister<br>{{$information->address}}<br>Telefon : {{$information->phone_number}}
            <br>E-Mail: {{$information->email}}</p>
        <p>Unseren Datenschutzbeauftragten erreichen Sie unter <a href="">datenschutz@ali-tischlermeister.de</a> oder
            unter unserer Postadresse mit dem Zusatz „Datenschutzbeauftragter“.</p>

        <p><strong>Erfassung allgemeiner Informationen</strong></p>
        <p>Bei der bloß informatorischen Nutzung der Website, also wenn Sie sich nicht registrieren oder uns anderweitig
            Informationen übermitteln, erheben wir nur die personenbezogenen Daten, die Ihr Browser an unseren Server
            übermittelt. Erfasst werden unter anderem: Inhalt der Anforderung (konkrete Seite), Datum und Uhrzeit der
            Anfrage, Datenmenge, Webbrowser und Webbrowser-Version, Betriebssystem, die sogenannte Referrer-URL (jene
            Seite, von der aus Sie auf unser Angebot zugegriffen haben), Zugriffsstatus und die IP-Adresse.</p>
        <p>Rechtsgrundlage ist Art. 6 Abs. 1 S. 1 lit. f DS-GVO. Ohne diese Daten wäre es technisch teils nicht möglich,
            die Inhalte der Webseite auszuliefern und darzustellen. Insofern ist die Erfassung der Daten zwingend
            notwendig. Darüber hinaus verwenden wir die anonymen Informationen für statistische Zwecke. Sie helfen uns
            bei der Optimierung des Angebots und der Technik. Wir behalten uns zudem das Recht vor, die Log-Files bei
            Verdacht auf eine rechtswidrige Nutzung unseres Angebotes nachträglich zu kontrollieren.</p>

        <p><strong>Cookies / Cookiebot</strong></p>
        <p>Wir verwenden auf unserer Seite sog. Session-Cookies, die für Grundfunktionen der Website – wie die
            Seitennavigation, den Zugriff auf sichere Bereiche der Internetseite, die Warenkorb-Funktion, die
            Einwilligung in die Cookie-Verwendung – erforderlich sind. Cookies sind kleine Textdateien, die Ihr
            Internet-Browser auf Ihrem Rechner ablegt und speichert. Sie dienen dazu, das Internetangebot insgesamt
            nutzerfreundlicher und effektiver zu machen.</p>
        <p>In diesem Zusammenhang verwenden wir das Consent Management-Tool „Cookiebot“. Die von Ihnen getroffenen
            Einstellungen werden in gesonderten Cookies gespeichert, wobei personenbezogene Daten auch an Cookiebot
            übermittelt werden. Dabei handelt es sich um folgende Datenkategorien: Anonymisierte IP-Adresse, Datum und
            Uhrzeit der Einwilligung, Angaben zum Browser, die URL unserer Unterseite, von welcher aus Sie Ihre
            Einwilligung erteilt haben, ein zufälliger und verschlüsselter Key sowie der Einwilligungsstatus, welcher
            als Nachweis der Einwilligung dient.</p>
        <p>Rechtsgrundlage für technisch erforderliche Cookies ist Art. 6 Abs. 1 S. 1 lit. f DS-GVO. Technisch nicht
            erforderliche Analyse-Cookies setzen wir nur mit Ihrer Einwilligung nach Art. 6 Abs. 1 S. 1 lit. a DS-GVO
            ein. Sie können Ihre Browser-Einstellung entsprechend Ihren Wünschen konfigurieren und z. B. die Annahme von
            Third-Party-Cookies oder allen Cookies ablehnen. Ihre Einwilligung in die Verwendung von technisch nicht
            notwendigen Cookies können Sie jederzeit für die Zukunft hier per Mausklick widerrufen.</p>

        <p><strong>Einsatz von Webanalyse-Systemen</strong></p>
        <p>Unsere Webseiten benutzen nach Ihrer Einwilligung den datensparsamen Webanalysedienst Matomo, inklusive
            Matomo Tag Manager, zur statistischen Auswertung der Besucherzugriffe. Mit Matomo haben wir zu diesem Zweck
            einen Auftragsdatenverarbeitungsvertrag gemäß den gesetzlichen Vorschriften abgeschlossen. Die so erlangten
            Informationen dienen dazu, die Nutzung unserer Internetseite und die Reichweite zu analysieren.
            Rechtsgrundlage ist Art. 6 Abs. 1 S. 1 lit. a DS-GVO. Zur Auswertung werden die durch das Cookie erzeugten
            Nutzungsinformationen (einschließlich Ihrer anonymisierten IP-Adresse) in die Matomo-Cloud in Frankfurt am
            Main, Deutschland übertragen und zwecks späterer Auswertung und Optimierung unserer Websiteinhalte
            gespeichert. Bereits vor der Übermittlung Ihrer IP-Adresse an die Matomo-Cloud wird Ihre IP-Adresse
            anonymisiert, so dass Sie als Nutzer für uns anonym bleiben. Die Informationen, wie unsere Websitebesucher
            unsere Webseite verwenden, werden nur innerhalb der Ali TischlerMeister bzw. an unsere Auftragsverarbeiter jedoch
            nicht an Dritte weitergegeben, außer wir sind ausnahmsweise hierzu gesetzlich dazu verpflichtet. Zudem
            werden diese Cookies mit Ablauf von 13 Monaten nach Einwilligung automatisch gelöscht, sofern und solange
            keine gesetzlichen Aufbewahrungspflichten bestehen.</p>
        <p>Wenn Sie mit der Speicherung und Auswertung dieser Daten aus Ihrem Besuch nicht einverstanden sind, können
            Sie die Verwendung der Cookies durch eine entsprechende Einstellung im Cookie-Banner verhindern. Weiter
            können Sie durch Einstellung in Ihrer Browser-Software die Verwendung von Cookies grundsätzlich verhindern;
            es kann jedoch sein, dass Sie in diesem Fall gegebenenfalls nicht alle Funktionen unserer Website nutzen
            können, weil ihr Browser dann sämtliche Cookies blockiert und nicht nur dasjenige Cookie, der zwecks Analyse
            auf ihrem Computer abgelegt wird. Die erteilte Einwilligung zur Verwendung der Cookies auf unserer
            Internetseite können Sie über den in der Rubrik „Cookies“ dieser Datenschutzerklärung benannten Link für
            technisch nicht notwendige Cookies durch Entfernen des gesetzten Hakens bei den entsprechenden Cookies
            widerrufen.</p>

        <p><strong>Newsletter / Job Alert</strong></p>
        <p>Daten zum Zweck der Zusendung des Newsletters und um Sie über die für diesen Dienst oder die Registrierung
            relevanten Umstände zu informieren. Rechtsgrundlage ist Art. 6 Abs. 1 S. 1 lit. a DS-GVO. Nach Art. 6 Abs. 1
            S. 1 lit. f DS-GVO werden zudem Click- und Öffnungsraten ausgewertet. Die personenbezogenen Daten werden auf
            den gesicherten Servern unseres Auftragsverarbeiters gespeichert und werden von uns nicht an Dritte
            weitergegeben. Für den Empfang des Newsletters bedarf es Ihrer gültigen E-Mail-Adresse. Die Angabe weiterer,
            gesondert markierter Daten ist freiwillig und wird verwendet, um Sie persönlich ansprechen zu können.
            Gespeichert werden zudem die IP-Adresse, über die Sie sich für den Newsletter anmelden und das Datum sowie
            die Uhrzeit, an dem Sie den Newsletter bestellen. Diese Daten dienen uns als Nachweis bei Missbrauch, falls
            eine fremde E-Mail-Adresse für den Newsletter angemeldet wird. Ihre Einwilligung in die Übersendung des
            Newsletters können Sie jederzeit widerrufen und den Newsletter abbestellen. Den Widerruf können Sie durch
            Klick auf den in jeder Newsletter-E-Mail bereitgestellten Link oder durch eine Nachricht an unseren
            obenstehenden Datenschutzbeauftragten erklären. Für die Anmeldung zu unserem Newsletter NewsClick sowie
            unserem Karriere-Newsletter verwenden wir das sog. Double-opt-in-Verfahren. Das heißt, dass wir Ihnen nach
            Ihrer Anmeldung eine E-Mail an die angegebene E-Mail-Adresse senden, in welcher wir Sie um Bestätigung
            bitten, dass Sie den Versand des Newsletters wünschen. Wenn Sie Ihre Anmeldung nicht innerhalb von zwei
            Wochen bestätigen, werden Ihre Informationen automatisch gelöscht.</p>

        <p><strong>Bestellung von Publikationen</strong></p>
        <p>Wenn Sie über das Onlineformular oder per E-Mail unsere Firmenpublikationen bestellen, verarbeiten wir Ihre
            angegebenen personenbezogene Daten (Name, Adresse, andere Kontaktdaten, bestellte Publikation) im Rahmen
            unserer Konzernkommunikation, um Ihnen Informationen über die Ali TischlerMeister insbesondere über deren Produkte,
            Leistungen und Veranstaltungen zuzusenden. Die Verarbeitung erfolgt entweder auf Basis eines von Ihnen
            erhaltenen Auftrags nach Art. 6 Abs. 1 S. 1 lit. b DS-GVO oder soweit Sie eine Einwilligung zur Verarbeitung
            von personenbezogenen Daten nach Art. 6 Abs. 1 S.1 lit. a DS-GVO erteilt haben. Falls eine Einwilligung
            nicht erforderlich ist, erfolgt die Verarbeitung auf Grundlage unserer berechtigten Interessen am
            Direktmarketing, sofern und soweit diese gesetzlich, z.B. im Fall von Bestandskundenwerbung, erlaubt ist. Es
            erhalten nur diejenigen Stellen innerhalb unseres Unternehmens Zugriff auf Ihre personenbezogenen Daten, die
            diese zur Versendung der Unternehmens-Veröffentlichungen benötigen. Dies sind Empfänger in den Kategorien
            Versanddienstleister, IT-Dienstleistungen, Logistik, Telekommunikation und Auftragsverarbeiter. Eine
            Datenübermittlung an Stellen in Staaten außerhalb der EU bzw. des EWR (sogenannte Drittländer) findet nur
            statt, soweit Ihre Empfangsadresse in einem Drittland liegt. Ihre Daten werden von uns nur so lange
            gespeichert, wie es für die Erbringung der Leistung Ihnen gegenüber erforderlich ist. Im Anschluss daran
            werden diese Daten gelöscht, wenn es keine anderen gesetzlichen Pflichten zur weiteren Aufbewahrung der
            Daten insbesondere hinsichtlich handels- und steuerrechtlicher Aufbewahrungsfristen (bis zu 10 Jahre) gibt
            oder ein berechtigtes Interesse des Verantwortlichen besteht. Ihren Auftrag bzw. ihre Einwilligung in die
            Übersendung der Publikationen können Sie jederzeit per E-Mail an <a href="">public.relations@ali-tischlermeister.de</a>
            widerrufen und die Zusendung abbestellen.</p>

        <p><strong>Kontaktformular</strong></p>
        <p>Wenn Sie uns über ein Onlineformular oder per E-Mail kontaktieren, speichern wir die von Ihnen gemachten
            Angaben, um Ihre Anfrage beantworten und mögliche Anschlussfragen stellen zu können. Rechtsgrundlage ist
            Art. 6 Abs. 1 S. 1 lit. a DS-GVO soweit nicht die Kontaktaufnahme zur Erfüllung eines Vertrages nach
            Rechtsgrundlage ist Art. 6 Abs. 1 S. 1 lit. b DS-GVO gerechtfertigt ist. Soweit zur Beantwortung
            erforderlich, geben wir Ihre Anfrage auch an relevante Stellen in unserer Unternehmensgruppe weiter. Die in
            diesem Zusammenhang anfallenden Daten löschen wir, nachdem die Speicherung nicht mehr erforderlich ist, oder
            schränken die Verarbeitung ein, falls gesetzliche Aufbewahrungspflichten bestehen.</p>

        <p><strong>Registrierung auf unserer Webseite </strong></p>
        <p>Wenn Sie sich auf unserer Webseite registrieren, um personalisierte Dienste zu nutzen, erheben wir die
            personenbezogenen Daten, die in der Eingabemaske des Registrierungsformulars angegeben sind. Diese umfassen
            Ihren Namen, Adresse sowie Ihre E-Mail-Adresse als Kontakt- und Kommunikationsdaten. Die Anmeldung gewährt
            Ihnen Zugang zu Funktionen und Inhalten, die nur registrierten Nutzern zur Verfügung stehen. Im Rahmen der
            Registrierung speichern wir zudem Ihre IP-Adresse sowie das Datum und die Uhrzeit der Registrierung, um
            Missbrauch zu verhindern, falls sich eine dritte Person ohne Ihr Wissen auf unserer Seite registriert.
            Rechtsgrundlage ist Art. 6 Abs. 1 S. 1 lit. b DSGVO. Wenn die Pflichtangaben nicht bereitgestellt werden,
            kann die Registrierung nicht abgeschlossen werden.</p>

        <p><strong>Soziale Medien</strong></p>
        <p>Wir stellen auf unserer Webseite Links zu sozialen Netzwerken wie YouTube, Meta, Xing, WhatsApp und LinkedIn
            zur Verfügung. Diese Links ermöglichen es Ihnen, unsere Inhalte über Ihre Social-Media-Konten zu teilen oder
            mit uns zu interagieren. Ihre Daten werden dabei von den jeweiligen Anbietern gemäß deren
            Datenschutzrichtlinien verarbeitet.</p>

        <p><strong>Datensicherheit</strong></p>
        <p>Wir setzen technische und organisatorische Sicherheitsmaßnahmen ein, um Ihre Daten vor unbefugtem Zugriff zu
            schützen. Dazu verwenden wir unter anderem Verschlüsselungstechnologien wie SSL (Secure Socket Layer), um
            Ihre Informationen sicher zu übertragen.</p>

        <p><strong>Betroffenenrechte im Zusammenhang mit der Verarbeitung personenbezogener Daten </strong></p>
        <p>Sie haben die Rechte aus der Datenschutzgrundverordnung sowie dem Bundesdatenschutzgesetz, insbesondere das
            Recht auf Auskunft (Art. 15 DS-GVO), das Recht auf Berichtigung (Art. 16 DS-GVO), das Recht auf Löschung
            (Art. 17 DS-GVO), das Recht auf Einschränkung der Verarbeitung (Art. 18 DS-GVO), das Widerspruchsrecht gegen
            die Verarbeitung (Art. 21 DS-GVO) und das Recht auf Datenübertragbarkeit (Art. 20 DS-GVO). Bitte wenden Sie
            sich hierzu an den oben bezeichneten Datenschutzbeauftragten.</p>
        <p>Soweit die Verarbeitung der personenbezogenen Daten auf Ihrer Einwilligung beruht, haben Sie das Recht, die
            Einwilligung jederzeit zu widerrufen, ohne dass die Rechtmäßigkeit der aufgrund der Einwilligung bis zum
            Widerruf erfolgten Verarbeitung berührt wird.</p>
        <p>Soweit wir die Verarbeitung Ihrer personenbezogenen Daten auf die Interessenabwägung stützen, können Sie
            Widerspruch gegen die Verarbeitung einlegen. Dies ist der Fall, wenn die Verarbeitung insbesondere nicht zur
            Erfüllung eines Vertrags mit Ihnen erforderlich ist, was von uns jeweils bei der vorstehenden Beschreibung
            der Funktionen dargestellt wird. Bei Ausübung eines solchen Widerspruchs bitten wir um Darlegung der Gründe,
            weshalb wir Ihre personenbezogenen Daten nicht wie von uns durchgeführt verarbeiten sollten. Im Falle Ihres
            begründeten Widerspruchs prüfen wir die Sachlage und werden entweder die Datenverarbeitung einstellen bzw.
            anpassen oder Ihnen unsere zwingenden schutzwürdigen Gründe aufzeigen, aufgrund derer wir die Verarbeitung
            fortführen.</p>
        <p>Sie haben zudem die Möglichkeit, sich mit einer Beschwerde an den oben genannten Datenschutzbeauftragten oder
            an eine Datenschutzaufsichtsbehörde zu wenden. </p>

        <p><strong>Einbindung von Google Maps</strong></p>
        <p>Auf dieser Webseite nutzen wir das Angebot von Google Maps. Dadurch können wir Ihnen interaktive Karten
            direkt in der Website anzeigen und ermöglichen Ihnen die komfortable Nutzung der Karten-Funktion. Der
            Kartendienst wird jedoch erst dann geladen, wenn Sie Ihr Einverständnis im Rahmen des Cookie-Banners in
            Marketing-Anwendungen gegeben haben oder Ihre Einwilligung auf der entsprechenden Unterseite an der Stelle,
            an der der Kartendienst angeboten wird, erteilt haben. Rechtsgrundlage hierfür ist Art. 6 Abs. 1 S. 1 lit. a
            DS-GVO. Erst nach Erteilung der Einwilligung wird der Inhalt für den Websitebesucher geladen und damit
            erhält Google die Information, dass Sie die entsprechende Unterseite unserer Website aufgerufen haben. Zudem
            werden die personenbezogenen Daten, die Ihr Browser an unseren Server übermittelt, an Google weitergegeben.
            Dies erfolgt unabhängig davon, ob Google ein Nutzerkonto bereitstellt, über das Sie eingeloggt sind, oder ob
            kein Nutzerkonto besteht. Wenn Sie bei Google eingeloggt sind, werden Ihre Daten direkt Ihrem Konto
            zugeordnet. Wenn Sie die Zuordnung mit Ihrem Profil bei Google nicht wünschen, müssen Sie sich vor
            Aktivierung des Buttons ausloggen. Google speichert Ihre Daten als Nutzungsprofile und nutzt sie für Zwecke
            der Werbung, Marktforschung und/oder bedarfsgerechte Gestaltung seiner Website. Eine solche Auswertung
            erfolgt insbesondere (selbst für nicht eingeloggte Nutzer) zur Erbringung von bedarfsgerechter Werbung und
            um andere Nutzer des sozialen Netzwerks über Ihre Aktivitäten auf unserer Website zu informieren.</p>
        <p>Ihnen steht ein Widerspruchsrecht gegen die Bildung dieser Nutzerprofile zu, wobei Sie sich zur Ausübung
            dessen an Google richten müssen. Weitere Informationen zu Zweck und Umfang der Datenerhebung und ihrer
            Verarbeitung durch den Plug-in-Anbieter erhalten Sie in den Datenschutzerklärungen des Anbieters. Dort
            erhalten Sie auch weitere Informationen zu Ihren diesbezüglichen Rechten und Einstellungsmöglichkeiten zum
            Schutze Ihrer Privatsphäre: http://www.google.de/intl/de/policies/privacy. Die erteilte Einwilligung zur
            Verwendung des Kartendienstes auf unserer Internetseite können Sie über den in der Rubrik „Cookies“ dieser
            Datenschutzerklärung benannten Link für technisch nicht notwendige Cookies durch Entfernen des gesetzten
            Hakens bei den Marketing-Anwendungen mit Wirkung für die Zukunft widerrufen.</p>

        <p><strong>Änderungen der Datenschutzerklärung</strong></p>
        <p>Wir behalten uns vor, diese Datenschutzerklärung zu ändern. Etwaige Änderungen werden wir an dieser Stelle
            veröffentlichen.</p>
    </div>
@endsection
