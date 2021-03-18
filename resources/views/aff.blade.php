<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Általános Felhasználási Feltételek</title>

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
            <h1>Általános Felhasználási Feltételek</h1>
        </div>
        <div class="container ml-0">
            <p>A StoryTeller online oldal üzemeltetője fenntartja jogát a jelen Általános Felhasználási Feltételek egyoldalú módosítására.</p>
            <p class="font-weight-bold">1. Impresszum</p>
            <p>impresszum helye</p>
            <p class="font-weight-bold">2. Taggá válás, regisztrálás</p>
            <p>
            2.1 A StoryTeller által működtetett online oldal szolgáltatásai elérhetőek mindazok számára, akik - ha a jelen ÁFF eltérően nem rendelkezik - regisztrálnak, valamint jog-és cselekvőképes személyek. A regisztrációval a Felhasználó elismeri, hogy természetes személy, aki 18. életévét legkésőbb a regisztráció napján betöltötte, és a Polgári Törvénykönyvről szóló 2013. évi V. törvény (Ptk.) szerint nem cselekvőképtelen (Ptk. 2:8. §.), vagy 14. életévét betöltötte és nem cselekvőképtelen (Ptk. 2:11-12.§§ ). Egyebekben 14. életévét be nem töltött kiskorú személy regisztrációjához törvényes képviselő hozzájárulása nem szükséges, ugyanis a nyilatkozat a mindennapi életben tömegesen előforduló regisztrációt céloz, és különösebb megfontolást nem igényel (Ptk. 2:14.§), és minden esetben a saját valós felhasználói adatai, illetve elérhetőségei megadásával regisztrál.
            </p>
            <p>
            2.2 A regisztrációkor megadott felhasználónév nem tartalmazhat elérhetőséget (telefonszám, URL, IM azonosító, stb.), valamint trágár, obszcén kifejezést, sem magyar, sem idegen nyelven. Amennyiben a Felhasználó a fent leírtak alapján szabálytalannak minősülő nevet ad meg, abban az esetben a StoryTeller jogosult előzetes figyelmeztetés nélkül a Felhasználó hozzáférését korlátozni.
            </p>
            <p class="font-weight-bold">3. Felhasználói kötelezettségek</p>
            <p class="font-weight-bold">Könyv létrehozása</p>
            <p>
            3.1 A könyv bevezető oldalán meg kell adni annak címét, borítóképét, rövid leírását, a szerző nevét, valamint nyilatkozni kell arról, hogy szerepel-e benne felnőtt tartalom.
            </p>
            <p>
            3.2 A Felhasználónak a StoryTeller által működtetett online oldalon létrehozott könyvei szerződéskötési nyilatkozatnak minősülnek.
            </p>
            <p class="font-weight-bold">Könyv olvasása</p>
            <p>
            3.3 A Felhasználó a StoryTeller által működtetett online oldalon található könyveket szabadon olvashatja. Kivételt képeznek a felnőtt tartalmú könyvek, melyeket csak a 18. életévüket betöltött Felhasználók olvashatnak.
            </p>
            <p class="font-weight-bold">4. Visszajelzések és korlátozások</p>
            <p>
            4.1 A StoryTeller felhasználói visszajelzést adnak egymás könyveiről. A Felhasználó véleményét köteles jól megfontoltan kialakítani, annak tudatában, hogy véleménye minden felhasználó számára elérhetővé válik és a későbbiekben nem változtatható. Amikor mások jó hírét megalapozatlanul sértő, becsmérlő visszajelzést ad, azért a Felhasználó polgári jogi, és akár büntetőjogi felelősséggel tartozik. A StoryTeller semminemű felelősséget nem vállal a visszajelzésben mások által a Felhasználóról hagyott vélemények tartalmáért.
            </p>
            <p>
            4.2 A StoryTeller fenntartja jogát arra, hogy a Felhasználó által megadott regisztrációs adatokat bármikor ellenőrizhesse.
            </p>
            <p class="font-weight-bold">5. Személyes adatok védelme</p>
            <p>
            5.1 A Felhasználó személyes adatainak bizalmas kezelése elsődleges követelmény, ezért a StoryTeller a Felhasználó személyes adatait csak az adatkezelési szabályzatban foglaltaknak megfelelően kezeli, és az ott rögzített külső szervezeteknek adja át, hatóságok részére csak a vonatkozó jogszabályi keretek között teszi hozzáférhetővé.
            </p>
            <p>
            5.2 A StoryTeller a magyar adatvédelmi rendelkezéseknek megfelelően esetenként együttműködhet a helyi, országos vagy nemzetközi hatóságokkal, amelyek jogszerű megkeresésére a StoryTeller köteles a szükséges, a Felhasználóról tárolt személyes adatokat, információkat kiadni.
            </p>
            <p class="font-weight-bold">6. További információk</p>
            <p>
            További információkat a jelen Általános Felhasználási Feltételek alábbi melléklete tartalmaz, amely a jelen ÁFF elválaszthatatlan részét képezi.
            </p>
            <p><a href="#">Adatkezelési tájékoztató</a></p>
            <p>
            Szerzői jogot, vagy védjegyet sértő tartalom jelzése: Amennyiben Ön azt észleli, hogy a szerzői jogi törvény által védett szerzői művén fennálló jogát, vagy védjegyét a StoryTeller online oldalán megjelenő információ sérti, úgy az Ekrtv. értelmében teljes bizonyító erejű magánokiratba vagy közokiratba foglalt értesítésével felhívhatja a StoryTeller a jogát sértő tartalmú információ eltávolítására.
            </p>
            <p>
            Jelen dokumentum az ÁFF 2021. március 18. napjától hatályos verziója.
            </p>
        </div>
    </body>
</html>
