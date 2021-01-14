<?php
use Illuminate\Support\Facades\DB;
use App\Models\WebConfigs;

		if (!function_exists('referral_code_generate')) {
		    function referral_code_generate($length_of_string)
		    {
		        $str_result = '0123456789abcdefghijklmnopqrstuvwxyz';
		        return substr(str_shuffle($str_result), 0, $length_of_string);
		    }
		}
		if (!function_exists('admin')) {
		    function admin()
		    {
		        return 'admin/';
		    }
		}
		if (!function_exists('vendor')) {
		    function vendor()
		    {
		        return 'vendor/';
		    }
		}

		if (!function_exists('sys_config_all')) {
		    function sys_config_all()
		    {
		        $config_data = WebConfigs::get()->all();
		        $result = [];
		        foreach ($config_data as $val) {
		            $result[$val->option] = $val->value;
		        }
		        return $result;
		    }
		}

		if (!function_exists('sys_config')) {
		    function sys_config($option)
		    {
		        $value = WebConfigs::select('value')
		            ->where('option', '=', $option)
		            ->get()
		            ->first()->value;
		        return $value;
		    }
		}

?>
