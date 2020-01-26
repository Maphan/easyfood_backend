<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Quotation;

class FoodController extends Controller{
    function getFood(){
        // $db_name="easyfood";
        // $db_user="root";
        // $db_pss="";

        // try {
        //     $sql = new PDO("mysql:host=localhost;dbname=$db_name;charset=utf8", $db_user, $db_pss);
        // }catch (PDOException $e) {
        //     echo "เกดิ ขอ้ ผดิ พลาด : " . $e->getMessage();
        // }

        // $Fstatus=1;
        // $stmt_product=$sql->prepare("SELECT food.*,img_food.img_name FROM food LEFT OUTER JOIN img_food ON food.food_id =img_food.food_id WHERE food_status=? GROUP BY food.food_id,food.name_th,food.name_en,food.food_type,food.detail,food.price,food.food_cal,food.food_status");
        // $stmt_product->bindParam(1, $Fstatus);
        // $stmt_product->execute();

        // $result=$stmt_product->fetchAll(PDO::FETCH_ASSOC);
        // return $result;
        $users = DB::table('food')->join('img_food', 'food.food_id', '=', 'img_food.food_id')->where('food.food_type',1)->get();

        return $users;
    }
}
