<?
    function url(){
        $url = '/kuliah/desain-pemrograman-web/week16/petnitipan/';
        return sprintf(
        "%s://%s%s",
        isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
        $_SERVER['SERVER_NAME'],
        $url
        );
    }

	function get($name){
		if(isset($_POST[$name])){
			return $_POST[$name];
		}else if(isset($_GET[$name])){
			return $_GET[$name];
		}else if(isset($_COOKIE[$name])){
            return $_COOKIE[$name];
        }
		return false;
    }
    
    function is_clicked($name){
        return isset($_POST[$name]);
    }

    function swal($type, $message, $action){
        $result;

        switch($type){
            case 'success':
                $result = "swalSuccess('$message', '$action')";
                break;
            case 'error':
                $result = "swalError('$message')";
                break;
        }

        echo "<script> $result </script>";
    }

    function format_date($raw_date){
        $date = strtotime($raw_date);
        return date('Y-m-d H:i:s', $date);
    }

    function replace_price_separator($price){
        return str_replace(['.', ','], ['', ''], $price);
    }
?>