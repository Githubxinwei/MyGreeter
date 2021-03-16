<?php
date_default_timezone_set("Asia/Shanghai");

class MyGreeter{
    public function Client() {
        $date = date("H");
        if ($date > 6 && $date <= 12) {
            return '早上好';
        }
        if ($date > 12 && $date <= 18) {
            return '下午好';
        }
        if (($date > 18 && $date <= 24) || ($date >= 0 && $date <= 6)) {
            return '晚上好';
        }
    }
}
$myGreeter = new MyGreeter();
$result = $myGreeter->Client();
echo $result;
