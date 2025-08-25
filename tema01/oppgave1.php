<!DOCTYPE html>
<html>
    <head>
        <title>oppgave1.</title>
</head>
<body>
    <h3>oppgave1</h3>
<form method="post" action="oppgave-1.php"id="oppgave1"name="oppgave1">
    fornavn<input type="text"id="fornavn"name="fornavn"required/><br/>
    Etternavn<input type="text"id="etternavn"name="etternavn"required/><br/>
    <input type="submit" value="Fortsett"id=fortsett name="fortsett"/>
    <input type="reset" value="Nullstill"id=nullstill name="nullstill"/><br/>
</form>

</body>
</html>

<?php 
$fornavn=$_POST["fornavn"];
$etternavn=$_POST["etternavn"];

print ("god dag$fornavn $etternavn<br/>");
    
?>
