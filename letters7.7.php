<?php
include "header.php";
require "7.7.php";
echo $today . "\n";
foreach ($people as $key => $man_info) {
    $order_key = $letter[$key];
    if ($order_key != "") {
        foreach ($man_info as $key1 => $info) {
            if ($key1 == "name") {
                $str = "Шановний $info!";
            }

            if ($key1 == "email") {
                $email = $info;
            }

        }
        $str .= "\nМи повідомпяємо Вам, що" .
            $order[$order_key];
        switch ($order_key) {
            case "scholarship":
                $str .= "\nЗа детальнішою інформацією зверніться до куратора.";
                break;
            case "expelled":
                $str .= "\nВи дуже відстали за програмою!";
                break;
            case "thank":
                $str .= "\nВаші результати чудові!";
                break;
            case "competition":
                $str .= "\nДякуємо за Вашу активну участь у позакласних заходах!";
                break;
        }
        $str .= "\n" . SIGN . "\n";

        echo $str;
    }
}
