<?php

return [
    'error' => 'Błąd',
    'code' => 'Błąd :code',
    'home' => 'Wróć',
    'whoops' => 'Ups!',

    '401' => [
        'title' => 'Nieautoryzowany',
        'message' => 'Nie masz uprawnień aby uzyskać dostep do tej strony.',
    ],
    '403' => [
        'title' => 'Zastrzeżony',
        'message' => 'Dostęp do tej strony jest zastrzeżony.',
    ],
    '404' => [
        'title' => 'Nie znaleziono',
        'message' => 'Strona której szukasz nie została znaleziona.',
    ],
    '419' => [
        'title' => 'Strona wygasła',
        'message' => 'Twoja sesja wygasła. Odśwież stronę i spróbuj ponownie.',
    ],
    '429' => [
        'title' => 'Zbyt dużo żądań',
        'message' => 'Wysyłasz zbyt wiele żądań do naszych serwerów. Spróbuj ponownie później.',
    ],
    '500' => [
        'title' => 'Błąd Serwera',
        'message' => 'Ups, coś poszło nie tak. Spróbuj ponownie później.',
    ],
    '503' => [
        'title' => 'Serwis niedostępny',
        'message' => 'Przeprowadzamy konserwację. Wróć później.',
    ],

    'fallback' => [
        'message' => 'Wystąpił błąd. Proszę spróbuj ponownie.',
    ],
];
