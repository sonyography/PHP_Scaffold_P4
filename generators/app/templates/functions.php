<?php

// Converts any accent characters to their equivalent normal characters and converts any other non-alphanumeric
use JBZoo\Utils\Slug;

//composer autoload
require_once './vendor/autoload.php';

/* slugify a URL */
function slugify($string) {
    return Slug::filter($string, '-', TRUE);
}

//Mobile Detect
require_once './vendor/mobiledetect/mobiledetectlib/Mobile_Detect.php';
$detect = new Mobile_Detect;
$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');

// nome da página
//$scriptName = filter_input(INPUT_SERVER, 'SCRIPT_NAME', FILTER_SANITIZE_STRING);
$scriptName = $_SERVER['SCRIPT_NAME'];
$page_name = basename($scriptName, ".php");

if ($page_name == 'index') {
    $page_name = 'home';
}

/*
 * 
 */
$projetc_data = array(
    'site_name' => 'BASICODÉLICA | e-commerce Moda feminina, enviamos para todo Brasil, whats 81 99999-4087/99905-9443. Estampas exclusivas',
    'site_description' => 'BASICODÉLICA e-commerce Moda feminina, enviamos para todo Brasil, whats 81 99999-4087/99905-9443. Estampas exclusivas',
    'site_url' => 'https://basicodelica.com.br',
    'site_slug' => 'basicodelica'
);

//var_dump($projetc_data);


/*
 * 
 */
function hasPage($str, $find) {
    $pos = strpos($str, $find);
    if ($pos === false) {
        return false;
    } else {
        return true;
    }
}

/*
 * 
 */
function menuActiveClass($pageName, $pageSlug, $wrightClass = true) {
    if (hasPage(slugify($pageName), slugify($pageSlug))) {
        if ($wrightClass) {
            echo 'class="is-active"';
        } else {
            echo " is-active";
        }
    }
}

/*
 * minify php page html output
 */
function compress_page($buffer) {
    $search = array(
        '/\>[^\S ]+/s', //strip whitespaces after tags, except space
        '/[^\S ]+\</s', //strip whitespaces before tags, except space
        '/(\s)+/s'  // shorten multiple whitespace sequences
    );
    $replace = array(
        '>',
        '<',
        '\\1'
    );
    $bufferout = preg_replace($search, $replace, $buffer);
    return $bufferout;
}


$categorias = array('Feminina', 'Intantil', 'Fantasia');
$colecoes = array(
    array(
        'title' => 'Blusa manga curta',
        'imagem' => 'dist/assets/images/apoio/imagem-colecao-280x350.jpg',
        'categoria' => array_rand($categorias, 1)
    ),
    array(
        'title' => 'Blusa curta',
        'imagem' => 'dist/assets/images/apoio/imagem-colecao-2-280x350.jpg',
        'categoria' => array_rand($categorias, 1)
    ),
    array(
        'title' => 'Estampa pop arte',
        'imagem' => 'dist/assets/images/apoio/imagem-colecao-280x350.jpg',
        'categoria' => array_rand($categorias, 1)
    ),
    array(
        'title' => 'Blusa manga comprida',
        'imagem' => 'dist/assets/images/apoio/imagem-colecao-2-280x350.jpg',
        'categoria' => array_rand($categorias, 1)
    ),
    array(
        'title' => 'Blusa manga curta',
        'imagem' => 'dist/assets/images/apoio/imagem-colecao-280x350.jpg',
        'categoria' => array_rand($categorias, 1)
    ),
    array(
        'title' => 'Blusa curta',
        'imagem' => 'dist/assets/images/apoio/imagem-colecao-2-280x350.jpg',
        'categoria' => array_rand($categorias, 1)
    ),
    array(
        'title' => 'Estampa pop arte',
        'imagem' => 'dist/assets/images/apoio/imagem-colecao-280x350.jpg',
        'categoria' => array_rand($categorias, 1)
    ),
    array(
        'title' => 'Blusa manga comprida',
        'imagem' => 'dist/assets/images/apoio/imagem-colecao-2-280x350.jpg',
        'categoria' => array_rand($categorias, 1)
    ),
    array(
        'title' => 'Blusa manga curta',
        'imagem' => 'dist/assets/images/apoio/imagem-colecao-280x350.jpg',
        'categoria' => array_rand($categorias, 1)
    ),
    array(
        'title' => 'Blusa curta',
        'imagem' => 'dist/assets/images/apoio/imagem-colecao-2-280x350.jpg',
        'categoria' => array_rand($categorias, 1)
    ),
    array(
        'title' => 'Estampa pop arte',
        'imagem' => 'dist/assets/images/apoio/imagem-colecao-280x350.jpg',
        'categoria' => array_rand($categorias, 1)
    ),
    array(
        'title' => 'Blusa manga comprida',
        'imagem' => 'dist/assets/images/apoio/imagem-colecao-2-280x350.jpg',
        'categoria' => array_rand($categorias, 1)
    ),
);

shuffle($colecoes);