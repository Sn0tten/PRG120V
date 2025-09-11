<?php
$svar=$_POST ["svar"];
$svar1=$_POST ["svar1"];
if (!$svar || !$svar1) 
{
print("du har ikke svart på spørsmålene. <br/>");
}
else if ($svar == "j" && $svar1 == "j")
{
    print ("du er chadlite og er blackpilled");
    }
else if ($svar == "n" && $svar1 == "n")
{
    print ("du er normie og er whitepilled");
}
else if ($svar == "j" && $svar1 == "n")
{
    print ("du er chadlite og er whitepilled");
}
else if ($svar == "n" && $svar1 == "j")
{
    print ("du er sub-3 incel og er blackpilled");
}
else 
{
    print ("just ropemaxx" );
}