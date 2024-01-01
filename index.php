<html>
<body>
<table align='center' width='600px'>

<tr align='center'>
<td>
GPIO23 ON/OFF Switch
</td>
</tr>

<tr align='center'>
<td>
    <div>
        <button id="button_on" onclick="onGpio(23, 1)" style="font-size: 20px">ON</button>
        <button id="button_off" onclick="onGpio(23, 0)" style="font-size: 20px">OFF</button>
    </div>
</td>
</tr>

<tr align='center'>
<td>
GPIO24 Toggle Switch
</td>
</tr>
<tr align='center'>
<td>
    <div>
        <button id="button_on" onclick="onGpio(24, 2)" style="font-size: 20px">GPIO24</button>
    </div>
</td>
</tr>

<tr>
    <td align='center'>
        GPIO Status (Refresh for get real status.)
    </td>
</tr>
<tr>
<td align='center'>
    <?php
        echo "GPIO23 : " . shell_exec("/usr/bin/cat /sys/class/gpio/gpio23/value");
        echo "<br>";
        echo "GPIO24 : " . shell_exec("/usr/bin/cat /sys/class/gpio/gpio24/value");
    ?>
</td>
</tr>
</table>

<script>
    function onGpio( gpio, value ) {
        var request = new XMLHttpRequest();
        request.open( "GET" , "gpio.php?gpio=" + gpio + "&value=" + value, true);
        // request.open( "GET" , "gpio.php?gpio=" + gpio, true);
        request.send(null);
    }
</script>
</body>
</html>
