<?php /* oppgave 2 */

$svar=$_POST ["svar"];
if (!$svar) 
{
print("Du må svare på spørsmålet! <br/>");
}
else if ($svar == "j") 
{
    print ("det er svart j på spørsmålet")
}
else if ($svar == "n")
{
    print ("det er svart n på spørsmålet")
}
else 
{
    print ("du må svare j eller n på spørsmålet")
}
?>