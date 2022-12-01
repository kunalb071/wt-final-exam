<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$name = "Kunal Bhatt";
$roll = "A005";
$batchNo = "B1";
$line = "Hi,I am ".$name.",Roll no. ".$roll." from batch ".$batchNo."& currently pursuing MCA from MPSTME."
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
fclose($myfile);
?>