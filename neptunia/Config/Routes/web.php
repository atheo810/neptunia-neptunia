<?php

namespace Neptunia\Config\Routes;

/**
 *
 */
class web
{
    public static function add($route, $file)
    {
        // variable yang nanti nya menyimpan nilai
        $params = [];

        // variable yang nantinya menyimpan nama nilai
        $paramkey = [];

        //menemukan jika ada  {?} parameter di $route
        preg_match_all("/(?<={).+?(?=})/", $route, $paramMatches);

        // jika $route tidak ada memanggil parameter maka akan menjalankan simpleroute();
        if (empty($paramMatches[0])) {
            self::simpleroute($file, $route);
            return;
        }

        // melakukan setting untuk nama parameter
        foreach ($paramMatches[0] as $key) {
            $paramkey[] = $key;
        }
        //mengganti slashes pertama dan terakhir
        //$_SERVER["REQUEST_URI"] akan kososng jika req uri is /
        if (!empty($_SERVER["REQUEST_URI"])) {
            $route = preg_replace("/(^\/)|(\/$)/", "", $route);
            $reqUri =  preg_replace("/(^\/)|(\/$)/", "", $_SERVER["REQUEST_URI"]);
        } else {
            $reqUri = "/";
        }

        // explode alamat route
        $uri = explode("/", $route);

        // akan menyimpan nomor index dimana {?} parameter yang dibutuhkan di dalam route
        $indexnum = [];

        //menaruh nomor index, dimana {?} parameter yang dibutuhkan dengan bantuan regex
        foreach ($uri as $index => $param) {
            if (preg_match("/{.*}/", $param)) {
                $indexNum[] = $index;
            }
        }
        // explode request uri string untuk mendapatkan array
        // nomor index dari nilai parameter $_SERVER['REQUEST_URI'];
        $reqUri = explode("/", $reqUri);

        //menjalankan foreach loop untuk menyatakan nilai index nomor dengan reg expression
        //ini akan membatu menemukan route
        foreach ($indexNum as $key => $index) {
            //dalam kasus ini jika request uri dengan parameter index kosong makan akan dikembalikan
            // karena url nya tidak valid dengan route
            if (empty($reqUri[$index])) {
                return;
            }

            // mengatur parameter dengan nama parameter
            $params[$paramkey[$key]] = $reqUri[$index];

            //ini untuk membuat regex yang di bandingkan dengan address
            $reqUri[$index] = "{.*}";

            //mengkonversi array menjadi string
            $reqUri = implode("/", $reqUri);

            //mengganti semua  / dengan \/ untuk reg expression
            //regex yang sama dengan route telah siap
            $reqUri = str_replace("/", '\\/', $reqUri);

            //sekarang mencocokan route dengan regex
            if (preg_match("/$reqUri/", $route)) {
                include("../views/" . $file);
                exit();
            }
        }
    }


    private static function simpleroute($file, $route)
    {
        //mengganti slash pertama dan terakhir
        //$_SERVER["REQUEST_URI"] akan kosong jika request uri adalah /

        if (!empty($_SERVER["REQUEST_URI"])) {
            $route = preg_replace("/(^\/)|(\/$)/", "", $route);
            $reqUri =  preg_replace("/(^\/)|(\/$)/", "", $_SERVER["REQUEST_URI"]);
        } else {
            $reqUri = "/";
        }

        if ($reqUri == $route) {
            $params = [];
            include("../views/" .$file);
            exit();
        }
    }
    public static function notfound($file)
    {
        include "../views/" . $file;
    }
}
