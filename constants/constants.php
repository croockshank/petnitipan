<?
    function url(){
        $url = '/kuliah/desain-pemrograman-web/week16/pet-shelter/';
        return sprintf(
        "%s://%s%s",
        isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
        $_SERVER['SERVER_NAME'],
        $url
        );
    }  
?>