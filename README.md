
<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Dokumentáció

# Automata telepítés
Konzolból futtasd a `./build.sh`-filet.

# Manuális telepítés
A kódolt letöltve, vagy szerverre átmásolva telepíteni kell. Ennek a menete a következő:
- Belépünk az alap könyvtárba, ahol futtatjuk a `composer install` parancsot
- Ezután a `composer update` parancsot (ez egy frissebb verzióra hozza az appot)
- A `composer add-hooks` paranccsal hozzáadjuk a git hookokat.
- Ezekután szükségünk lesz egy kulcsra, amit a consolba írt `php artisan key:generate` parancs hoz létre -> enélkül nem tudjuk az appot futtatni
- Miután helyesen ki lett töltve az adatbázis elérés, futtatjuk a `php artisan migrate` parancsot, ami létrehozza a szükséges adattáblákat

## UI hiba esetén
- Ha a weboldalon grafikus megjelenési probléma tapasztalható, futtatni kell az `npm install` parancsot, majd a `composer update`-t

## SMTP hiba esetén
- Ha nem tud az app emailt küldeni (socket ssl hiba), de az smtp jól van beállítva, akkor keresd meg a következő mappát: vendor\swiftmailer\lib\classes\Swift\Transport\StreamBuffer.php
Majd kommenteld ki ezt: $options = [];
Tedd be helyette ezt: $options['ssl'] = array('verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true);
Nem biztonságos megoldás, de amíg találsz egy megfelelő smtp kiszolgálót, addig tud rajta futni az oldal. Ezt mindenki saját felelősségre használja!

## Commit
- Commit előtt a `composer format` paranccsal kell formázni a kódot, különben nem lehet commitolni.


## Képes weboldal bemutató
<img src="https://i.imgur.com/aqfBoon.png" alt="Főoldal">
- Ezen a képen láthatjuk a főoldal megjelenését és az elérhető kattintható menüpontokat.

<img src="https://i.imgur.com/07Cbqoo.png" alt="GyIK">
- A Gyakran Ismételt Kérdésed oldalon találhatóak a gyarkan feltett kérdésekre adott válaszaink. Ezaz oldal ügyféltájékoztatási feladatokat lát el.

<img src="https://i.imgur.com/LjS5RKq.png" alt="Login">
- Ezen a lapon tudunk bejelentkezni a saját felhasználói fiókunkba.

<img src="https://i.imgur.com/QQhKzIG.png" alt="Registration">
- Pár alapvető adat megadásával ezen a lapon tudunk regisztrálni. Ez szükséges az oldal teljeskörű használatához.
