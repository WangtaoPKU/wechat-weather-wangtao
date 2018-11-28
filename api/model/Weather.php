<?php 
namespace app\api\model;

use think\Model;
use think\Db;

class Weather extends Model
{
    public function getWeather($id =101010100)
    {
        $res = Db::name('ins_county')->where('weather_code', $id)->select();
        return $res;
    }

    public function getWeatherList()
    {
        $res = Db::name('ins_county')->select();
        return $res;
    }
}