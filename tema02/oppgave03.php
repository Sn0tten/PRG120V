<?php
$svar=$_POST ["svar"];
$svar1=$_POST ["svar1"];
if (!$svar || !$svar2) 
{
print("du har ikke svart på spørsmålene. <br/>");
}
else if ($svar == "j" && $svar1 == "j")
{
    print ("du er gift og har barn");
}
else if ($svar == "n" && $svar1 == "n")
{
    print ("du er ikke gift og har ikke barn");
}
else if ($svar == "j" && $svar1 == "n")
{
    print ("du er gift og har ikke barn");
}
else if ($svar == "n" && $svar1 == "j")
{
    print ("du er ikke gift og har barn");
}
else 
{
    print ("du er ikke gift og har ikke barn");
}
?>    
