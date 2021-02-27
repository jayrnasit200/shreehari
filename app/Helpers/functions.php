<?php
use Illuminate\Support\Facades\DB;
use App\Models\WebConfigs;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Banner;
use App\Models\Products;

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

		if (!function_exists('get_category')) {
		    function get_category()
		    {
		        $value = Category::get()->all();
		        // print_r($value);
		        // exit();
		        return $value;
		    }
		}
		if (!function_exists('get_subcategory_by_id')) {
		    function get_subcategory_by_id($id)
		    {
		        $value = Subcategory::where('categories_id',$id)->get()->all();
		        return $value;
		    }
		}
		if (!function_exists('user_data')) {
		    function user_data()
		    {
			        return Auth::user();
		    }
		}
		if (!function_exists('get_banner_by_name')) {
		    function get_banner_by_name($status)
		    {
		        $value = Banner::where('status',$status)->get()->all();
		        return $value;
		    }
		}
		if (!function_exists('product_data')) {
		    function product_data($id)
		    {
		        $value = Products::where('id',$id)->get()->first();
		        return $value;
		    }
		}

?>
