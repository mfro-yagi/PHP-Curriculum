<html>
<body>
<?php

//厳密な比較
if(2 === 2) echo 'TRUE<br>'; else echo 'FALSE<br>'; //TRUE
if(2 === "2") echo 'TRUE<br>'; else echo 'FALSE<br>'; //FALSE
echo '<br>';

//緩やかな比較
if(2 == "2") echo 'TRUE<br>'; else echo 'FALSE<br>'; //TRUE
if(2 == TRUE) echo 'TRUE<br>'; else echo 'FALSE<br>'; //TRUE
if(0 == FALSE) echo 'TRUE<br>'; else echo 'FALSE<br>'; //TRUE
if(2 == "2a") echo 'TRUE<br>'; else echo 'FALSE<br>'; //TRUE
if(2 == -2) echo 'TRUE<br>'; else echo 'FALSE<br>'; //FALSE
echo '<br>';

//大小
if(2 > 0) echo 'TRUE<br>'; else echo 'FALSE<br>'; //TRUE
if(2 > "0") echo 'TRUE<br>'; else echo 'FALSE<br>'; //TRUE
if(2 > "f") echo 'TRUE<br>'; else echo 'FALSE<br>'; //TRUE
if(2 < "f") echo 'TRUE<br>'; else echo 'FALSE<br>'; //FALSE
echo '<br>';

//その他
if(2) echo 'TRUE<br>'; else echo 'FALSE<br>'; //TRUE
if(0) echo 'TRUE<br>'; else echo 'FALSE<br>'; //FALSE
if("") echo 'TRUE<br>'; else echo 'FALSE<br>'; //FALSE
if(" ") echo 'TRUE<br>'; else echo 'FALSE<br>'; //TRUE
if("0") echo 'TRUE<br>'; else echo 'FALSE<br>'; //FALSE
if(array()) echo 'TRUE<br>'; else echo 'FALSE<br>'; //FALSE
if(array("")) echo 'TRUE<br>'; else echo 'FALSE<br>'; //TRUE
if(array("0")) echo 'TRUE<br>'; else echo 'FALSE<br>'; //TRUE
if(empty("")) echo 'TRUE<br>'; else echo 'FALSE<br>'; //TRUE


?>
</body>
</html>
