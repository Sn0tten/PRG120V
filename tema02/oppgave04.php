<?php
$svar=$_POST ["svar"];
$svar1=$_POST ["svar1"];
if (!$svar || !$svar1) 
{
print("du har ikke svart på spørsmålene. <br/>");
}
else if ($svar == "ja" && $svar1 == "ja")
{
    print ("du er chadlite og er blackpilled");
    }
else if ($svar == "nei" && $svar1 == "nei")
{
    print ("du er normie og er whitepilled");
}
else if ($svar == "ja" && $svar1 == "nei")
{
    print ("du er chadlite og er whitepilled");
}
else if ($svar == "nei" && $svar1 == "ja")
{
    print ("du er sub-3 incel og er blackpilled");
}
else 
{
    print ("just ropemaxx" );
}