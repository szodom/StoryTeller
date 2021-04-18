
<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Dokumentáció

# Automata telepítés
Konzolból futtasd a `./build.sh`-filet.
- Miután helyesen ki lett töltve az adatbázis elérés a .env fileban, futtassuk a `php artisan migrate` parancsot, ami létrehozza a szükséges adattáblákat!

# Manuális telepítés
A kódolt letöltve, vagy szerverre átmásolva telepíteni kell. Ennek a menete a következő:
- Belépünk az alap könyvtárba, ahol futtatjuk a `composer install` parancsot
- Ezután a `composer update` parancsot (ez egy frissebb verzióra hozza az appot)
- A fileok közt van egy .env.exampe file, amit le kell másolni .env kiterjesztésre, itt be kell állítani az smtp szerverünket és az adatbázist, amiből az app majd dolgozni tud
- Ezekután szükségünk lesz egy kulcsra, amit a consolba írt `php artisan key:generate` parancs hoz létre -> enélkül nem tudjuk az appot futtatni
- Miután helyesen ki lett töltve az adatbázis elérés, futtatjuk a `php artisan migrate` parancsot, ami létrehozza a szükséges adattáblákat

## UI hiba esetén
- Ha a weboldalon grafikus megjelenési probléma tapasztalható, futtatni kell az `npm install` parancsot, majd a `composer update`-t

## SMTP hiba esetén
- Ha nem tud az app emailt küldeni (socket ssl hiba), de az smtp jól van beállítva, akkor keresd meg a következő mappát: vendor\swiftmailer\lib\classes\Swift\Transport\StreamBuffer.php
Majd kommenteld ki ezt: $options = [];
Tedd be helyette ezt: $options['ssl'] = array('verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true);
Nem biztonságos megoldás, de amíg találsz egy megfelelő smtp kiszolgálót, addig tud rajta futni az oldal. Ezt mindenki saját felelősségre használja!