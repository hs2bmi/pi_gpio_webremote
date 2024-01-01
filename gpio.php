<?php
    $gpio = $_GET['gpio'];
    $value = $_GET['value'];

    if ($value == '2') {
        $output = shell_exec("/usr/bin/cat /sys/class/gpio/gpio" . $gpio . "/value");
        if ($output == 0) {
            $output = shell_exec("/usr/bin/echo 1 > /sys/class/gpio/gpio" . $gpio . "/value");
        } else {
            $output = shell_exec("/usr/bin/echo 0 > /sys/class/gpio/gpio" . $gpio . "/value");
        }
    } else {
        $output = shell_exec("/usr/bin/echo " . $value . " > /sys/class/gpio/gpio" . $gpio . "/value");
    }
?>
