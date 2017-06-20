<?php
namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;

/**
 * Created by PhpStorm.
 * User: tienvm
 * Date: 20/06/2017
 * Time: 09:37
 */
class HomeController extends Controller
{
    public function index()
    {
        $urlGetImage = 'http://52.90.232.148:3000/api/leaderboard/topPost?uid=54&token=codevui';
        $userList = json_decode(file_get_contents($urlGetImage));

        $imageList = [];
        foreach ($userList->data as $item){
            array_push($imageList, $item->photo);
        }

        return view('welcome', ['imageList' => $imageList]);
    }
}