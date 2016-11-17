# IAS_santiarzo
IAS project

Dorobić integrację (zmienić nazwy kolumn i struktury baz danych)
Uzupełnić dokumentację!

Raport

nr indeksów członków grupy: 149011

użyte technologie/ języki programowania: PHP/Laravel/MySQL/REST

schemat oraz opis architektury systemu:

opis dostawców, struktura encji: 

opis huba, przebieg integracji encji, struktura wynikowa encji:

napotkane problemy: 
- Zmiana ścieżek w plikach konfiguracyjnych: Apache (httpd.conf), Apache (httpd-ssl.conf), Apache (httpd-xampp.conf), phpMyAdmin (config.inc.php)
- podwójny "return" (return(items);) w metodzie index() w klasie ItemController.php

adres do repozytorium: https://github.com/santiarzo/IAS_santiarzo

podział pracy w grupie:

dodatkowo: Co byśmy zmienili gdybyśmy robili ten projekt jeszcze raz?:
- Prawdopodobnie zrobiłbym integrację danych przychodzących w różnych formatach (np. JSON i XML) oraz huba który integrowałby dane o różnym formacie
- Ewentualnie spróbował bym napisać podobną aplikację w Javie "od zera", ponieważ ciężko jest się połapać w kodzie Laravela bez wcześniejszej styczności z tym frameworkiem oraz z PHP. Jest wiele klas, jak np. VerifyCsrfToken.php które np.odnoszą się do bezpieczeństwa całej aplikacji a które utrudniają ogólny ogląd na cały framework oraz tylko niezbędne klasy wraz z metodami potrzebne to zakodowania providerów oraz huba.
