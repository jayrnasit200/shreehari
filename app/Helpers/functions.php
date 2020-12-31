<?php 
use Illuminate\Support\Facades\DB;
use App\Models\WebConfig;




    if (! function_exists('referral_code_generate')) {
        function referral_code_generate($length_of_string) {
            $str_result = '0123456789abcdefghijklmnopqrstuvwxyz';
            return substr(str_shuffle($str_result), 0, $length_of_string);
        }
    }

    
?>