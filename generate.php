<?php

$codes = array(
    400 => array(
        'title' => 'Bad request',
        'description' => 'Votre navigateur a envoyé une requête incompréhensible',
    ),
    403 => array(
        'title' => 'Forbidden',
        'description' => 'Vous n’avez pas accès à cette page',
    ),
    408 => array(
        'title' => 'Request Time-out',
        'description' => "La requête que vous avez envoyée est trop grosse.<br /> Merci de réessayer.",
    ),
    500 => array(
        'title' => 'Internal Server Error',
        'description' => 'Une erreur interne s’est produite.<br />Réessayez un peu plus tard.',
    ),
    502 => array(
        'title' => 'Bad Gateway',
        'description' => 'Une erreur interne s’est produite.<br />Réessayez un peu plus tard.',
    ),
    503 => array(
        'title' => 'Service Unavailable',
        'description' => 'Le site que vous avez demandé est présentement indisponible.<br />Réessayez un peu plus tard.',
    ),
    504 => array(
        'title' => 'Gateway Time-out',
        'description' => "Le site que vous avez demandé est présentement indisponible, possiblement surchargé. <br />Réessayez un peu plus tard.",
    ),
);

foreach ($codes as $code => $variables) {
    extract($variables);

    foreach (array('apache' => 'html', 'haproxy' => 'http') as $template => $extension) {
        ob_start();

        include "${template}.php";

        file_put_contents("${template}/${code}.${extension}", ob_get_contents());

        ob_end_clean();
    }
}
