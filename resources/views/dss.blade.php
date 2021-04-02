<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Adatvédelmi Tájékoztató</title>

        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .logo{
                max-width: 40%;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand">
            <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <img src="images\logo.png" alt="logó" class="logo"></img>
                    </li>
                </ul>
            </div>
            <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                @if (Route::has('login'))
                    <ul class="navbar-nav ml-auto">
                        @auth
                            <li class="nav-item links">
                                <a href="{{ url('/home') }}">Főoldal</a>
                            </li>
                            <li class="nav-item links">
                                <a href="{{ url('/home') }}">Könyveim</a>
                            </li>
                            <li class="nav-item links">
                                <a href="{{ url('/home') }}">Könyv létrehozása</a>
                            </li>
                        @else
                            <li class="nav-item links">
                                <a href="{{ route('login') }}">Bejelentkezés</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item links">
                                    <a href="{{ route('register') }}">Regisztráció</a>
                                </li>
                            @endif
                        @endauth
                    </ul>
                @endif  
            </div>
        </nav>
        <div class="jumbotron p-2">
            <h1>Adatvédelmi Tájékoztató</h1>
        </div>
        <div class="container ml-0">
            <p>A StoryTeller online oldal üzemeltetője fenntartja jogát a jelen Adatvédelmi Tájékoztató egyoldalú módosítására.</p>
            <p class="font-weight-bold">Impresszum</p>
            <p>impresszum helye</p>
            <p class="font-weight-bold">Társaságunk az adatkezelése során alábbi alapelveket követi:</p>
            <ul>
                <li>
                    a személyes adatokat jogszerűen és tisztességesen, valamint az Ön számára átláthatóan kezeljük.
                </li>
                <li>
                    a személyes adatokat csak meghatározott, egyértelmű és jogszerű célból gyűjtjük és azokat nem kezeljük a célokkal össze nem egyeztethető módon.
                </li>
                <li>
                    az általunk gyűjtött és kezelt személyes adatok az adatkezelés céljai szempontjából megfelelőek és relevánsak, valamint csak a szükségesre korlátozódnak.
                </li>
                <li>
                Társaságunk minden észszerű intézkedést megtesz annak érdekében, hogy az általunk kezelt adatok pontosak és szükség esetén naprakészek legyenek, a pontatlan személyes adatokat haladéktalanul töröljük vagy helyesbítjük.
                </li>
                <li>
                    a személyes adatokat olyan formában tároljuk, hogy Ön csak a személyes adatok kezelése céljainak eléréséhez szükséges ideig legyen azonosítható.
                </li>
                <li>
                megfelelő technikai és szervezési intézkedések alkalmazásával biztosítjuk a személyes adatok megfelelő biztonságát az adatok jogosulatlan vagy jogellenes kezelésével, véletlen elvesztésével, megsemmisítésével vagy károsodásával szemben.
                </li>
            </ul>
            <p class="font-weight-bold">Társaságunk az Ön személyes adatait</p>
            <ul>
                <li>
                    az Ön előzetes tájékoztatáson alapuló és önkéntes hozzájárulása alapján és csakis a szükséges mértékben és minden esetben célhoz kötötten kezeljük, azaz gyűjtjük, rögzítjük, rendszerezzük, tároljuk és felhasználjuk. 
                </li>
                <li>
                    egyes esetekben az Ön adatainak kezelése jogszabályi előírásokon alapul és kötelező jellegű, ilyen esetekben erre a tényre külön felhívjuk az Ön figyelmét. 
                </li>
                <li>
                    illetve bizonyos esetekben az Ön személyes adatainak kezeléséhez Társaságunknak, vagy pedig harmadik személynek fűződik jogos érdeke, például honlapunk működtetése, fejlesztése és biztonsága.
                </li>
            </ul>
            <p class="font-weight-bold">Mik azok a sütik és hogyan kezeljük őket?</p>
            <p>
                A sütik (cookie-k) olyan kisméretű adatfájlok (továbbiakban: sütik), amelyek a weboldalon keresztül a weboldal használatával kerülnek az Ön számítógépére úgy, hogy azokat az Ön internetes böngészője menti le és tárolja el. A leggyakrabban használt internetes böngészők (Chrome, Firefox, stb.) többsége alapbeállításként elfogadja és engedélyezi a sütik letöltését és használatát, az viszont már Öntől függ, hogy a böngésző beállításainak módosításával ezeket visszautasítja vagy letiltja, illetve Ön a már a számítógépen lévő eltárolt sütiket is tudja törölni. A sütik használatáról az egyes böngészők „súgó” menüpontja nyújt bővebb tájékoztatást. 
            </p>
            <p>
                A hozzájárulást igénylő sütikről – amennyiben az adatkezelés már az oldal felkeresésével megkezdődik – a Társaságunk az első látogatás megkezdésekor tájékoztatja Önt és kérjük az Ön hozzájárulását. 
            </p>
            <p class="font-weight-bold">Mit kell tudni még a honlapunkkal kapcsolatos adatkezelésünkről?</p>
            <p>
            A személyes adatokat Ön önkéntesen bocsátja rendelkezésünkre a regisztráció illetve a Társaságunkkal kapcsolattartása során, éppen ezért kérjük, hogy adatai közlésekor fokozatosan ügyeljen azok valódiságára, helyességére és pontosságára, mert ezekért Ön felelős. A helytelen, pontatlan vagy hiányos adat akadálya lehet a szolgáltatásaink igénybevételének. Amennyiben Ön nem a saját, hanem más személy személyes adatait adja meg, úgy vélelmezzük, hogy Ön az ehhez szükséges felhatalmazással rendelkezik.
            </p>
            <p>
            Ön az adatkezeléshez adott hozzájárulását bármikor ingyenesen visszavonhatja
            <ul>
                <li>
                a regisztráció törlésével,
                </li>
                <li>
                a regisztráció során feltétlen kitöltendő bármely adat kezeléséhez vagy felhasználásához való hozzájárulás visszavonásával vagy zárolásának kérésével.
                </li>
            </ul>
            </p>
            <p class="font-weight-bold">Melyek az Ön jogai és jogorvoslati lehetőségei?</p>
            <p>
            Ön az adatkezelésről 
            <ul>
                <li>
                    tájékoztatást kérhet,
                </li>
                <li>
                    kérheti az általunk kezelt személyes adataik helyesbítését, módosítását, kiegészítését, 
                </li>
                <li>
                    tiltakozhat az adatkezelés ellen és kérheti adatai törlését valamint zárolását (a kötelező adatkezelés kivételével),
                </li>
                <li>
                    bíróság előtt jogorvoslattal élhet, 
                </li>
                <li>
                    a felügyelő hatóságnál panaszt tehet, illetve eljárást kezdeményezhet (https://naih.hu/panaszuegyintezes-rendje.html).
                </li>
            </ul>
            </p>
            <br>
            <p class="font-weight-bold">Adatkezelési tájékoztató módosítása</p>
            <p>
            Társaságunk fenntartja magának a jogot jelen Adatkezelési tájékoztató módosítására, amelyről az érintetteket megfelelő módon tájékoztatja. Az adatkezeléssel kapcsolatos információk közzététele a ............ (tarsasag.hu/adatkezeles) ........... weboldalon történik.
            <br>
            Dátum: .......................
            <br><br>
            Budapest 2021. 03. 19.
            </p>
        </div>
    </body>
</html>
