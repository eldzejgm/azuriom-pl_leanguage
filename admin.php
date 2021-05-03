<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Admin Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used on the admin dashboard
    |
    */

    'nav' => [
        'dashboard' => 'Panel Sterowania',
        'settings' => [
            'heading' => 'Ustawienia',
            'settings' => [
                'settings' => 'Ustawienia',
                'global' => 'Globalne',
                'security' => 'Bezpieczeństwo',
                'performances' => 'Performance',
                'seo' => 'SEO',
                'auth' => 'Autoryzacja',
                'mail' => 'Mail',
                'maintenance' => 'Konserwacja',
            ],
            'navbar' => 'Nawigacja',
            'servers' => 'Serwery',
        ],

        'users' => [
            'heading' => 'Użytkownicy',
            'users' => 'Użytkownicy',
            'roles' => 'Role',
            'bans' => 'Bany',
        ],

        'content' => [
            'heading' => 'Content',
            'pages' => 'Strony',
            'posts' => 'Posty',
            'images' => 'Zdjęcia',
        ],

        'extensions' => [
            'heading' => 'Rozszeżenia',
            'plugins' => 'Wtyczki',
            'themes' => 'Motywy',
        ],

        'other' => [
            'heading' => 'Inne',
            'update' => 'Aktualizacja',
            'logs' => 'Logi',
        ],

        'profile' => [
            'profile' => 'Profil',
        ],

        'back-website' => 'Powrót do strony.',

        'support' => 'Wsparcie',
        'documentation' => 'Dokumentacja',
    ],

    'confirm-delete' => [
        'title' => 'Usunąć ?',
        'description' => 'Czy jesteś pewien że chcesz to usunąć? Nie będziesz mógł tego przywrócić!',
    ],

    'footer' => 'Powered by :azuriom &copy; :year. Panel designed by :startbootstrap.',

    /*
    |
    | Admin pages
    |
    */

    'dashboard' => [
        'title' => 'Panel Sterowania',

        'new-update' => 'Dostępna jest nowa wersja Azuriom: :version',
        'https-warning' => 'Twoja witryna nie korzysta z protokołu HTTPS, należy go włączyć i wymusić dla swojego bezpieczeństwa i bezpieczeństwa użytkowników.',
        'proxy-warning' => 'Jeśli używasz Cloudflare, powinieneś zainstalować wtyczkę Cloudflare Support.',
        'recent-users' => 'Ostatni użytkownicy',
        'active-users' => 'Aktywni użytkownicy',
        'emails-disabled' => 'E-maile są wyłączone. Jeśli użytkownik zapomni swojego hasła, nie będzie mógł go zresetować. Możesz włączyć e-maile w <a href=":url">ustawieniach maili</a>.',
        'users' => 'Użytkownicy',
        'posts' => 'Posty',
        'pages' => 'Strony',
        'images' => 'Zdjęcia',
    ],

    'settings' => [
        'index' => [
            'title' => 'Globalne Ustawienia',

            'site-name' => 'Nazwa Strony',
            'site-url' => 'URL Strony',
            'site-description' => 'Opis Strony',
            'meta' => 'Słowa kluczowe',
            'meta-info' => 'Słowa kluczowe należy oddzielić przecinkami.',
            'favicon' => 'Favicon',
            'background' => 'Tło',
            'logo' => 'Logo',
            'timezone' => 'Srefa Czasowa',
            'locale' => 'Język',
            'money' => 'Waluta strony',
            'copyright' => 'Prawa Autorskie',
            'user-money-transfer' => 'Włącz transfer pieniędzy między użytkownikami',
            'site-key' => 'Klucz witryny z Azuriom.com',
            'site-key-label' => 'Klucz witryny azuriom.com jest wymagany do zainstalowania rozszerzeń premium zakupionych na rynku. Klucz witryny można uzyskać w <a href="https://azuriom.com/profile" target="_blank" rel="noopener norefferer">Profilu Azuriom</a>.',
        ],

        'security' => [
            'title' => 'Ustawienie Bezpieczeństwa',

            'captcha' => [
                'title' => 'Captcha',
                'site-key' => 'Klucz Strony',
                'secret-key' => 'Sekretny Klucz',
                'recaptcha' => 'Możesz dostać klucze reCaptcha na <a href="https://www.google.com/recaptcha/" target="_blank" rel="noopener noreferrer"> Witryna Google reCaptcha</a>. Potrzebujesz tego aby użyć <strong> niewidzialnego</strong> recaptcha v2.',
                'hcaptcha' => 'You can get hCaptcha keys on the <a href="https://www.hcaptcha.com/" target="_blank" rel="noopener noreferrer"> hCaptcha website</a>.',
            ],

            'hash' => 'Algorytm Hash',
            'hash-info' => 'Argon2id jest najbezpieczniejszym algorytmem, ale wymaga PHP 7.3 lub nowszego. Jeśli używasz PHP 7.2, powinieneś użyć Argon2i.',
            'hash-error' => 'Ten algorytm Hash nie obsługuje twojej aktualnej wersji PHP',
        ],

        'performances' => [
            'title' => 'Ustawienia wydajności',

            'cache' => [
                'title' => 'Wyczyść pamięć podręczną',
                'description' => 'Wyczyść pamięć podręczną witryny.',

                'status' => [
                    'cleared' => 'Pamięć podręczna została pomyślnie wyczyszczona.',
                    'clear-error' => 'Błąd podczas czyszczenia pamięci podręcznej.',
                ],

                'actions' => [
                    'clear' => 'Wyczyść pamięć podręczną',
                ],
            ],

            'boost' => [
                'title' => 'AzBoost',
                'description' => 'AzBoost poprawia wydajność Twojej witryny, dodając jeszcze jedną warstwę pamięci podręcznej.',
                'info' => 'Jeśli masz jakieś problemy po włączeniu rozszerzenia, przeładuj pamięć podręczną.',

                'current' => [
                    'status' => 'AzBoost jest obecnie :status.',
                    'enabled' => '<span class="text-success">włączony</span>',
                    'disabled' => '<span class="text-danger">wyłączony</span>',
                ],

                'status' => [
                    'enabled' => 'AzBoost jest obecnie włączony.',
                    'disabled' => '
AzBoost jest obecnie wyłączony.',
                    'reloaded' => 'AzBoost został ponownie załadowany.',

                    'enable-error' => 'Błąd podczas włączania AzBoost.',
                ],

                'actions' => [
                    'enable' => 'Włącz AzBoost',
                    'disable' => 'Wyłącz AzBoost',
                    'reload' => 'Załaduj ponownie AzBoost',
                ],
            ],
        ],

        'seo' => [
            'title' => '
Ustawienia SEO',

            'html-head-code' => 'Kod HTML do umieszczenia w tagu <head> wszystkich stron.',
            'html-body-code' => 'Kod HTML do umieszczenia w tagu <body> wszystkich stron.',

            'html-code-info' => 'E.g: Cookie banner, Google Analytics, etc',

            'welcome-popup' => [
                'enable' => 'Włączyć wyskakujące okienko powitalne?',
                'message' => 'Powitalna wiadomość',
                'info' => 'To wyskakujące okienko zostanie wyświetlone tylko, gdy użytkownik po raz pierwszy odwiedza witrynę.',
            ],
        ],

        'auth' => [
            'title' => 'Autoryzacja',

            'conditions-url' => 'Conditions URL',
            'conditions-info' => 'Użytkownicy będą musieli zaakceptować te warunki podczas rejestracji.',
            'enable-user-registration' => 'Włącz rejestrację użytkowników',
            'enable-user-registration-label' => 'Nadal można zarejestrować się za pośrednictwem wtyczek.',
            'auth-api' => 'Włącz Auth API',
            'auth-api-label' => 'Ten interfejs API umożliwia dodanie niestandardowego uwierzytelniania do serwera gry. W przypadku serwerów Minecraft korzystających z programu uruchamiającego możesz użyć <a href="https://github.com/Azuriom/AzAuth" target="_blank" rel="noopener noreferrer">AzAuth</a> dla łatwej i szybkiej integracji.',
            'minecraft-verification' => 'Włącz weryfikację nazwy użytkownika Minecraft poprzez minecraft.net',
        ],

        'mail' => [
            'title' => 'Ustawienia poczty',
            'from-address' => 'Adres e-mail używany do wysyłania wiadomości e-mail.',
            'driver' => 'Sposób wysyłania maili',
            'driver-info' => 'Azuriom obsługuje SMTP i Sendmail do wysyłania wiadomości e-mail. Więcej informacji na temat konfiguracji poczty można znaleźć na naszej stronie <a href="https://azuriom.com/docs" target="_blank" rel="noopener noreferrer">dokumentacja</a>.',
            'disabled-warn' => 'Gdy wiadomości e-mail są wyłączone, użytkownicy nie będą mogli zresetować hasła, jeśli je zapomną.',
            'sendmail-warn' => 'Używanie Sendmaila nie jest zalecane i powinieneś zamiast tego używać serwera SMTP, jeśli to możliwe.',
            'smtp' => [
                'host' => 'Adres hosta SMTP',
                'port' => 'Port hosta SMTP',
                'encryption' => 'Protokół szyfrowania',
                'username' => 'Nazwa użytkownika serwera SMTP',
                'password' => '
Hasło serwera SMTP',
            ],
            'enable-users-verification' => 'Włącz weryfikację adresu e-mail użytkownika',
            'send' => 'Wyślij testową wiadomość e-mail',
            'sent' => 'Wiadomość testowa została pomyślnie wysłana.',
        ],

        'maintenance' => [
            'title' => '
Ustawienia konserwacji',

            'enable' => 'Włącz tryb konserwacji',
            'message' => 'Komunikat o konserwacji',
        ],

        'status' => [
            'updated' => 'Ustawienia zostały zaktualizowane.',
        ],
    ],

    'navbar-elements' => [
        'title' => 'Navbar',
        'title-edit' => 'Edytuj element paska nawigacyjnego :element',
        'title-create' => 'Utwórz element paska nawigacyjnego',

        'dropdown-info' => 'Możesz dodawać elementy do tego menu po zapisaniu tego elementu.',

        'fields' => [
            'home' => 'Strona Główna',
            'link' => '
Link zewnętrzny',
            'page' => 'Strona',
            'post' => 'Post',
            'posts' => 'Lista postów',
            'plugin' => 'Wtyczki',
            'dropdown' => 'Lista rozwijana',
            'new-tab' => 'Otwórz w nowej karcie',
        ],

        'status' => [
            'nav-updated' => '
Zaktualizowano pasek nawigacyjny.',

            'created' => '
Utworzono element pasek nawigacyjnego.',
            'updated' => 'Ten element paska nawigacyjnego został zaktualizowany.',
            'deleted' => 'Ten element paska nawigacyjnego został usunięty.',

            'not-empty' => 'Nie możesz usunąć listy rozwijanej z elementami.',
        ],
    ],

    'servers' => [
        'title' => 'Serwery',
        'title-edit' => 'Edytuj serwer :server',
        'title-create' => '
Dodaj serwer',

        'default' => '
Serwer domyślny',
        'default-info' => 'TLiczba graczy połączonych z domyślnego serwera zostanie wyświetlona na stronie, jeśli aktualny motyw to obsługuje.',

        'ping-no-commands' => 'Łącze ping nie wymaga wtyczki, ale nie można za jej pomocą wykonywać poleceń.',
        'query-no-commands' => 'W przypadku łącza Query nie można wykonywać poleceń na serwerze.',

        'query-port-info' => 'Może być pusty, jeśli jest taki sam jak port gry
.',

        'fields' => [
            'address' => 'Adres',
            'port' => 'Port',

            'rcon-password' => 'Hasło Rcon',
            'rcon-port' => 'Port Rcon',
            'query-port' => 'Port zapytań źródłowych',

            'azlink-port' => 'Port AzLink',
        ],

        'actions' => [
            'verify-connection' => 'Sprawdź połączenie',
        ],

        'azlink' => [
            'link' => 'Aby połączyć Minecrafta ze swoją witryną za pomocą AzLink:',
            'link-1' => '<a href="https://azuriom.com/azlink">Pobierz wtyczkę AzLink</a> i zainstaluj ją na swoim serwerze.',
            'link-2' => '
Zrestartuj serwer.',
            'link-3' => 'Wykonaj to polecenie na serwerze: ',

            'link-info' => 'Możesz połączyć serwer Minecraft ze swoją witryną za pomocą polecenia: ',
            'port-info' => '
Jeśli używasz innego portu AzLink niż domyślny, musisz go skonfigurować za pomocą polecenia: ',

            'enable-ping' => 'Włącz polecenia natychmiastowe (wymagaj otwartego portu na serwerze)',
            'ping-info' => 'Gdy polecenia natychmiastowe nie są włączone, polecenia będą wykonywane z opóźnieniem od 30 sekund do 1 minuty.',
            'custom-port' => 'Użyj niestandardowego portu AzLink',
        ],

        'players' => ':liczba graczy|:count players',
        'offline' => 'Offline',

        'status' => [
            'created' => 'Serwer został dodany.',
            'updated' => '
Serwer został zaktualizowany.',
            'deleted' => 'Serwer został usunięty.',

            'connect-success' => 'Połączenie z serwerem zostało nawiązane pomyślnie
!',
            'connect-error' => 'Połączenie z serwerem nie powiodło się: :error',

            'not-azlink' => 'Ten serwer nie jest połączony przez AzLink.',
            'azlink-connect' => 'Połączenie z serwerem nie powiodło się, adres / lub port są nieprawidłowe lub port jest zamknięty.',
            'azlink-badresponse' => 'Połączenie z serwerem nie powiodło się (code :code), token jest nieprawidłowy lub serwer jest źle skonfigurowany. Możesz powtórzyć polecenie link, aby to naprawić.',
        ],

        'type' => [
            'mc-ping' => 'Minecraft Ping',
            'mc-rcon' => 'Minecraft RCON',
            'mc-azlink' => 'AzLink',
            'source-query' => 'Zapytanie źródłowe',
            'source-rcon' => 'Żródłowy RCON',
            'bedrock-ping' => 'Bedrock Ping',
            'bedrock-rcon' => 'Bedrock RCON',
            'fivem-status' => 'FiveM status',
            'fivem-rcon' => 'FiveM RCON',
            'rust-rcon' => 'Rust RCON',
            'flyff-server' => 'Flyff Server', // TODO make this dynamic
        ],
    ],

    'users' => [
        'title' => 'Użytkownicy',
        'title-edit' => 'Edytuj użytkownika :user',
        'title-create' => '
Stwórz użytkownika',

        'fields' => [
            'register-date' => 'Data rejsetracji.',
            'last-login' => 'Data ostatniego logowania.',
            'email-verified' => '
Adres e-mail zweryfikowany',
            '2fa' => 'Uwierzytelnianie dwuetapowe',
            'ip' => 'Adres IP',
        ],

        'info' => [
            'admin' => 'Admin',
            'banned' => 'Banned',
            'deleted' => 'Usunięci',
        ],

        'actions' => [
            'ban' => 'Ban',
            'unban' => 'Unban',
            'delete' => 'Usuń',
            'verify-email' => 'Zweryfikuj adres e-mail',
            'disable-2fa' => 'Wyłącz 2fa',
        ],

        'alert-deleted' => 'Ten użytkownik został usunięty i nie można go edytować.',
        'alert-banned' => [
            'title' => '
Ten użytkownik jest obecnie zablokowany:',
            'banned-by' => '
Zbanowany przez: :author',
            'reason' => 'Powód: :reason',
            'date' => 'Data: :date',
        ],

        'edit-profile' => 'Eytuj profil',

        'user-info' => 'Informacje o użytkowniku',

        'ban-title' => 'Ban :user',
        'ban-description' => 'Czy na pewno chcesz zablokować tego użytkownika?',

        'status' => [
            'created' => 'Użytkownik został utworzony.',
            'updated' => '
Ten użytkownik został zaktualizowany.',
            'deleted' => '
Ten użytkownik został usunięty.',

            'email-verified' => 'Adres e-mail został zweryfikowany.',
            '2fa-disabled' => 'Uwierzytelnianie dwuetapowe zostało wyłączone.',

            'banned' => 'Ten użytkownik jest teraz zablokowany.',
            'unbanned' => 'Ten użytkownik został odblokowany.',
        ],
    ],

    'roles' => [
        'title' => 'Role',
        'title-edit' => 'Edytuj rolę :role',
        'title-create' => 'Stwórz rolę',

        'permissions' => 'Uprawnienia',
        'perm-admin' => [
            'label' => 'Administrator',
            'info' => '
Grupa administrator, ma wszystkie uprawnienia.',
        ],

        'info' => [
            'default' => 'Domyślne',
            'admin' => 'Admin',
        ],

        'status' => [
            'power-updated' => 'Role zostały zaktualizowane.',
            'created' => 'Rola została utworzona.',
            'updated' => 'Rola została zaktualizowana.',
            'deleted' => 'Rola została usunięta.',

            'unauthorized' => 'Ta rola jest wyższa niż twoja własna rola.',
            'add-admin' => '
Nie możesz dodać uprawnień administratora do roli.',
            'remove-admin' => 'Nie możesz odebrać uprawnień administratora swojej roli.',
            'permanent-role' => '
Tej roli nie można usunąć.',
            'own-role' => 'Nie możesz usunąć swojej roli.',
        ],
    ],

    'permissions' => [
        'create-comments' => '
Skomentuj post',
        'delete-other-comments' => 'Usuń komentarz do wpisu od innego użytkownika',
        'maintenance-access' => 'Wejdź na stronę internetową podczas konserwacji',
        'admin-access' => '
Dostęp do panelu administratora',
        'admin-logs' => 'Wyświetl dziennik witryny i zarządzaj nim',
        'admin-images' => 'Wyświetlaj obrazy i zarządzaj nimi',
        'admin-navbar' => 'Wyświetl pasek nawigacyjny i zarządzaj nim',
        'admin-pages' => 'Wyświetl strony i zarządzaj nimi',
        'admin-posts' => 'Wyświetl posty i zarządzaj nimi',
        'admin-settings' => 'Wyświetl ustawienia i zarządzaj nimi
',
        'admin-users' => '
Wyświetl użytkowników i zarządzaj nimi',
        'admin-themes' => 'Wyświetl motywy i zarządzaj nimi',
        'admin-plugins' => 'Wyświetl wtyczki i zarządzaj nimi',
    ],

    'bans' => [
        'title' => 'Bany',

        'fields' => [
            'banned-by' => 'Zbanowany prez',
            'reason' => 'Powód',
        ],

        'removed' => 'Usunięto :date by :user',
    ],

    'posts' => [
        'title' => 'Posty',
        'title-edit' => 'Edytuj post :post',
        'title-create' => 'Stwórz post',

        'published-info' => '
Ten post nie będzie widoczny publicznie do tej daty.',

        'fields' => [
            'published-at' => 'Opublikowano',
        ],

        'pin' => 'Przypnij ten post',

        'status' => [
            'created' => 'Post został utworzony.',
            'updated' => 'Ten post został zmodyfikowany.',
            'deleted' => 'Ten post został usunięty.',
        ],

        'info' => [
            'pinned' => '
Przypięto',
        ],
    ],

    'pages' => [
        'title' => 'Strony',
        'title-edit' => 'Edytuj Stronę #:page',
        'title-create' => 'Stwórz Stronę',

        'enable' => 'Włącz stronę',

        'status' => [
            'created' => 'The page has been created.',
            'updated' => 'This page has been updated.',
            'deleted' => 'This page has been deleted.',
        ],
    ],

    'images' => [
        'title' => 'Images',
        'title-edit' => 'Edit image :image',
        'title-create' => 'Upload image',

        'status' => [
            'created' => 'The image has been created.',
            'updated' => 'This image has been updated.',
            'deleted' => 'This image has been deleted.',
        ],
    ],

    'extensions' => [
        'buy' => 'Buy for :price',
    ],

    'plugins' => [
        'title' => 'Plugins',

        'installed' => 'Installed plugins',
        'available' => 'Available plugins',

        'azuriom-requirement' => 'This plugin is not compatible with your Azuriom version.',
        'game-requirement' => 'This plugin is not compatible with the game :game.',
        'plugin-requirement' => 'The plugin ":plugin" is missing or its version is not compatible with this plugin.',

        'status' => [
            'reloaded' => 'The plugins have been reloaded.',
            'enabled' => 'The plugin has been enabled.',
            'disabled' => 'The plugin has been disabled.',
            'updated' => 'The plugin has been updated.',
            'installed' => 'The plugin has been installed.',
            'deleted' => 'The plugin has been deleted.',

            'error-delete' => 'The plugin must be disabled before it can be deleted.',
        ],
    ],

    'themes' => [
        'title' => 'Themes',

        'current' => [
            'title' => 'Current theme',
            'author' => 'Author: :author',
            'version' => 'Version: :version',
        ],
        'installed' => 'Installed themes',
        'available' => 'Available themes',
        'no-enabled' => 'You don\'t have any themes enabled.',

        'actions' => [
            'edit-config' => 'Edit config',
            'disable' => 'Disable theme',
        ],

        'status' => [
            'reloaded' => 'The themes have been reloaded.',
            'no-config' => 'This theme doesn\'t have config.',
            'config-updated' => 'The theme config has been updated.',
            'invalid' => 'This theme is invalid (the theme folder name must be the theme id).',
            'updated' => 'The theme has been updated.',
            'installed' => 'The theme has been installed.',
            'deleted' => 'The theme has been deleted.',

            'error-delete' => 'You can\'t delete the current theme.',
        ],
    ],

    'update' => [
        'title' => 'Update',

        'subtitle-update' => 'Update available',
        'subtitle-no-update' => 'No updates available',

        'update' => 'The version <code>:last-version</code> of Azuriom is available and you are on version <code>:version</code>.',
        'download' => 'The latest version of Azuriom is ready for download.',
        'install' => 'The latest version of Azuriom has been downloaded and is ready to be installed.',

        'backup-info' => 'Before updating Azuriom, you should make a backup of your site!',

        'up-to-date' => 'You are running the latest version of Azuriom: <code>:version</code>.',

        'status' => [
            'download-success' => 'The latest version has been downloaded, you can now install it.',
            'install-success' => 'The update has been installed successfully.',

            'up-to-date' => 'You are using the latest version of Azuriom.',
            'error-fetch' => 'An error occurred while fetching updates: :error',
            'error-download' => 'An error occurred while downloading: :error',
            'error-install' => 'An error occurred while installing: :error',
        ],

        'actions' => [
            'check' => 'Check updates',
            'install' => 'Install',
            'download' => 'Download',
        ],
    ],

    'logs' => [
        'title' => 'Logs',

        'actions' => [
            'clear' => 'Clear old logs (15d+)',
        ],

        'status' => [
            'cleared' => 'The old logs has been deleted.',
        ],

        'pages' => [
            'created' => 'Created page #:id',
            'updated' => 'Updated page #:id',
            'deleted' => 'Deleted page #:id',
        ],

        'posts' => [
            'created' => 'Created post #:id',
            'updated' => 'Updated post #:id',
            'deleted' => 'Deleted post #:id',
        ],

        'images' => [
            'created' => 'Created image #:id',
            'updated' => 'Updated image #:id',
            'deleted' => 'Deleted image #:id',
        ],

        'roles' => [
            'created' => 'Created role #:id',
            'updated' => 'Updated role #:id',
            'deleted' => 'Deleted role #:id',
        ],

        'servers' => [
            'created' => 'Created server #:id',
            'updated' => 'Updated server #:id',
            'deleted' => 'Deleted server #:id',
        ],

        'users' => [
            'updated' => 'Updated user #:id',
            'deleted' => 'Deleted user #:id',
            'transfer' => 'Send money :money to user #:id',
        ],

        'settings' => [
            'updated' => 'Updated settings',
        ],

        'updates' => [
            'installed' => 'Installed Azuriom update',
        ],

        'plugins' => [
            'enabled' => 'Enabled plugin',
            'disabled' => 'Disabled plugin',
        ],

        'themes' => [
            'changed' => 'Changed theme',
        ],
    ],

    'errors' => [
        'back' => 'Back to Dashboard',
        '404' => 'Page Not Found',
        'info' => 'It looks like you found a glitch in the matrix...',
    ],
];
