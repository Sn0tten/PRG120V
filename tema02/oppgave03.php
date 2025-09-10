<?php
$svar=$_POST ["svar"];
$svar2=$_POST ["svar2"];
if (!$svar || !$svar2) 
{
print("du har ikke svart på spørsmålene. <br/>");
}
else if ($svar == "j" && $svar2 == "j");
{
    print ("du er gift og har barn");
}
else if ($svar == "n" && $svar2 == "n");
{
    print ("du er ikke gift og har ikke barn");
}
else if ($svar == "j" && $svar2 == "n");
{
    print ("du er gift og har ikke barn");
}
else if ($svar == "n" && $svar2 == "j");
{
    print ("du er ikke gift og har barn");
}
else ($svar == "n" && $svar2 == "n");
{
    print ("du er ikke gift og har ikke barn");
}
?>    
