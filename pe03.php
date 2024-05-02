<?php 
    if (isset($_GET['submit'])) {
        $month = date('n', strtotime($_GET['dm']));
        $bday = mktime(0,0,0,$month,$_GET['dd'],$_GET['dy']);

        switch (date("w", $bday)) {
            case 0: $d = "Sunday"; break;
            case 1: $d = "Monday"; break;
            case 2: $d = "Tuesday"; break;
            case 3: $d = "Wednesday"; break;
            case 4: $d = "Thursday"; break;
            case 5: $d = "Friday"; break;
            case 6: $d = "Saturday"; break;
        }
        echo "Your birthday was <b>".date("M-d-Y", $bday)."</b><br />";
        echo "Your birthday weekday is <b>".$d."</b><br /> <br />";
    }
?>

<html>
    <head></head>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get" onsubmit="return check_form(this);">
            Month: <br /> <input type="text" name="dm"><br /> <br />
            Day:  <br /> <input type="text" name="dd"><br /> <br />
            Year: <br /> <input type="text" name="dy"><br /> <br />
            <input type="submit" name="submit">
        </form>
    </body>
</html>

<script type="text/javascript">
    
    function has_value(field, alertmsg) {
        if (field.value==null || field.value =="") {
            alert(alertmsg);
            return false;
        } else {
            return true;
        }
    }

    function check_form(this_form) {
        if (has_value(this_form.dm, "Month is required!") ==false) {
            this_form.dm.focus();
            return false;
        }
        if (has_value(this_form.dd, "Day is required!") ==false) {
            this_form.dd.focus();
            return false;
        }
        if (has_value(this_form.dy, "Year is required!") ==false) {
            this_form.dy.focus();
            return false;
        }
    }

</script>