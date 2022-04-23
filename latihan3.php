<html> 
<head><title>Variabel Static</title></head> 
<body><h1>Variabel Static</h1> 
<?php 
//$a = 0; // dengan static 
 Function test() 
 { 
 Static $a=0; // dengan static 
 //global $a;
 Echo "Nilai a : "; 
 Echo $a;
 Echo "<br>"; 
 $a++; 
 } 
 Test(); 
 Test(); 
 Test(); 
 Test(); 
 Test(); 
?> 
</body> 
</html>