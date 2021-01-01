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
		}else if(isset($_FILES[$name])){
            return $_FILES[$name];
        }else if(isset($_SESSION[$name])){
            return $_SESSION[$name];
        }else if(isset($_COOKIE[$name])){
            return $_COOKIE[$name];
        }
		return false;
    }
    
    function is_clicked($name){
        return isset($_POST[$name]);
    }

    function is_param_exist($name){
        return isset($_GET[$name]);
    }

    function swal($type, $message, $action){
        $result;

        switch($type){
            case 'success':
                $result = "swalSuccess('$message', '$action')";
                break;
            case 'confirmation':
                $result = "swalConfirmation('$message', '$action')";
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

    function format_date_only($raw_date){
        $date = strtotime($raw_date);
        return date('Y-m-d', $date);
    }

    function format_date_prettier($raw_date){
        $date = strtotime($raw_date);
        return date('D, d M Y H:i', $date);
    }

    function format_date_only_pretier($raw_date){
        $date = strtotime($raw_date);
        return date('D, d M Y', $date);
    }

    function replace_price_separator($price){
        return str_replace(['.', ','], ['', ''], $price);
    }

    function number_separator($number){
        return number_format($number ,0 ,"",".");
    }

    function format_rupiah($angka){
        $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
        return $hasil_rupiah;
     
    }
?>