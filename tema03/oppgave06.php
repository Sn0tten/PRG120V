<?php
$angitt_tall=$_POST["angitt_tall"];
if ($angitt_tall <=0)
{
    print("tallet er ikke positivt");
}
else
{
    for ($tall=1;$tall<=$angitt_tall;$tall++)
    {
        print("$tall <br/>");
    }
}
?>