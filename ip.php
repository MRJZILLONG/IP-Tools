<?php

@system("mkdir result");

function mtr(){
    include 'config.php';
    echo "$cyan Target$red >$white ";
    $target = trim(fgets(STDIN));
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL,'https://api.hackertarget.com/mtr/?q='.$target);
	$result=curl_exec($ch);
	curl_close($ch);
	$isi = "[ ".date('d-m-Y H:i:s')." ]-[ ".$target." ]-[ IP-Tools-mtr ]\n\n".$result."	";
	$open = fopen("result/mtr-$target.txt", 'a');
	fwrite($open, $isi);
	fclose($open);
	print $result;
	echo "\n\n$cyan [!]==// Result reported to result/mtr-$target.txt\n\n";
}

function testping(){
    include 'config.php';
    echo "$cyan Target$red >$white ";
    $target = trim(fgets(STDIN));
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL,'https://api.hackertarget.com/nping/?q='.$target);
	$result=curl_exec($ch);
	curl_close($ch);
	$isi = "[ ".date('d-m-Y H:i:s')." ]-[ ".$target." ]-[ IP-Tools-testping ]\n\n".$result."	";
	$open = fopen("result/testping-$target.txt", 'a');
	fwrite($open, $isi);
	fclose($open);
	print $result;
	echo "\n\n$cyan [!]==// Result reported to result/testping-$target.txt\n\n";
}

function dnslookup(){
    include 'config.php';
    echo "$cyan Target$red >$white ";
    $target = trim(fgets(STDIN));
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL,'https://api.hackertarget.com/reversedns/?q='.$target);
	$result=curl_exec($ch);
	curl_close($ch);
	$isi = "[ ".date('d-m-Y H:i:s')." ]-[ ".$target." ]-[ IP-Tools-dnslookup ]\n\n".$result."	";
	$open = fopen("result/dnslookup-$target.txt", 'a');
	fwrite($open, $isi);
	fclose($open);
	print $result;
	echo "\n\n$cyan [!]==// Result reported to result/dnslookup-$target.txt\n\n";
}

function reversedns(){
    include 'config.php';
    echo "$cyan Target$red >$white ";
    $target = trim(fgets(STDIN));
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL,'https://api.hackertarget.com/reversedns/?q='.$target);
	$result=curl_exec($ch);
	curl_close($ch);
	$isi = "[ ".date('d-m-Y H:i:s')." ]-[ ".$target." ]-[ IP-Tools-reversedns ]\n\n".$result."	";
	$open = fopen("result/reversedns-$target.txt", 'a');
	fwrite($open, $isi);
	fclose($open);
	print $result;
	echo "\n\n$cyan [!]==// Result reported to result/reversedns-$target.txt\n\n";
}

function whois(){
    include 'config.php';
    echo "$cyan Target$red >$white ";
    $target = trim(fgets(STDIN));
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL,'https://api.hackertarget.com/whois/?q='.$target);
	$result=curl_exec($ch);
	curl_close($ch);
	$isi = "[ ".date('d-m-Y H:i:s')." ]-[ ".$target." ]-[ IP-Tools-whois ]\n\n".$result."	";
	$open = fopen("result/whois-$target.txt", 'a');
	fwrite($open, $isi);
	fclose($open);
	print $result;
	echo "\n\n$cyan [!]==// Result reported to result/whois-$target.txt\n\n";
}

function host(){
    include 'config.php';
    echo "$cyan Target$red >$white ";
    $target = trim(fgets(STDIN));
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL,'https://api.hackertarget.com/hostsearch/?q='.$target);
	$result=curl_exec($ch);
	curl_close($ch);
	$isi = "[ ".date('d-m-Y H:i:s')." ]-[ ".$target." ]-[ IP-Tools-host ]\n\n".$result."	";
	$open = fopen("result/host-$target.txt", 'a');
	fwrite($open, $isi);
	fclose($open);
	print $result;
	echo "\n\n$cyan [!]==// Result reported to result/host-$target.txt\n\n";
}

function reverseip(){
    include 'config.php';
    echo "$cyan Target$red >$white ";
    $target = trim(fgets(STDIN));
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL,'https://api.hackertarget.com/reverseip/?q='.$target);
	$result=curl_exec($ch);
	curl_close($ch);
	$isi = "[ ".date('d-m-Y H:i:s')." ]-[ ".$target." ]-[ IP-Tools-reverseip ]\n\n".$result."	";
	$open = fopen("result/reverseip-$target.txt", 'a');
	fwrite($open, $isi);
	fclose($open);
	print $result;
	echo "\n\n$cyan [!]==// Result reported to result/reverseip-$target.txt\n\n";
}

function httphead(){
    include 'config.php';
    echo "$cyan Target$red >$white ";
    $target = trim(fgets(STDIN));
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL,'https://api.hackertarget.com/httpheaders/?q='.$target);
	$result=curl_exec($ch);
	curl_close($ch);
	$isi = "[ ".date('d-m-Y H:i:s')." ]-[ ".$target." ]-[ IP-Tools-headers ]\n\n".$result."	";
	$open = fopen("result/headers-$target.txt", 'a');
	fwrite($open, $isi);
	fclose($open);
	print $result;
	echo "\n\n$cyan [!]==// Result reported to result/headers-$target.txt\n\n";
}

function pagelink(){
    include 'config.php';
    echo "$cyan Target$red >$white ";
    $target = trim(fgets(STDIN));
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL,'https://api.hackertarget.com/pagelinks/?q='.$target);
	$result=curl_exec($ch);
	curl_close($ch);
	$isi = "[ ".date('d-m-Y H:i:s')." ]-[ ".$target." ]-[ IP-Tools-links ]\n\n".$result."	";
	$open = fopen("result/links-$target.txt", 'a');
	fwrite($open, $isi);
	fclose($open);
	print $result;
	echo "\n\n$cyan [!]==// Result reported to result/links-$target.txt\n\n";
}

function nmap(){
    include 'config.php';
    echo "$cyan Target$red >$white ";
    $target = trim(fgets(STDIN));
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL,'https://api.hackertarget.com/nmap/?q='.$target);
	$result=curl_exec($ch);
	curl_close($ch);
	$isi = "[ ".date('d-m-Y H:i:s')." ]-[ ".$target." ]-[ IP-Tools-nmap ]\n\n".$result."	";
	$open = fopen("result/nmap-$target.txt", 'a');
	fwrite($open, $isi);
	fclose($open);
	print $result;
	echo "\n\n$cyan [!]==// Result reported to result/nmap-$target.txt\n\n";
}

function banner(){
    @system("clear");
    include 'config.php';
    print"$cyan


    ▄█ █ ▄▄         ▄▄▄▄▀ ████▄ ████▄ █      ▄▄▄▄▄   
    ██ █   █     ▀▀▀ █    █   █ █   █ █     █     ▀▄ 
    ██ █▀▀▀          █    █   █ █   █ █   ▄  ▀▀▀▀▄   
    ▐█ █            █     ▀████ ▀████ ███▄ ▀▄▄▄▄▀    
     ▐  █          ▀                      ▀          
         ▀                                           
                                                     
$white ═══════════════════════════════[$yellow Ver.1.5$white ]═════════

$cyan 01$red :$white MTR Traceroute
$cyan 02$red :$white Test Ping
$cyan 03$red :$white DNS Lookup
$cyan 04$red :$white Reverse DNS
$cyan 05$red :$white Whois
$cyan 06$red :$white Host Search
$cyan 07$red :$white Reverse IP
$cyan 08$red :$white HTTP Headers
$cyan 09$red :$white Page Links
$cyan 10$red :$white Nmap Port Scan
";    
}

function menu(){
    include 'config.php';
    banner();
    echo "$okegreen\n ($cyan Hax0r$okegreen )$white- on -$okegreen($white ~/Menu/IPTools$okegreen ) \n$red >$white ";
    $input = trim(fgets(STDIN));
    if ($input == 1 OR $input == 01){
        mtr();
        back();
    }
    elseif ($input == 2 OR $input == 02){
        testping();
        back();
    }
    elseif ($input == 3 OR $input == 03){
        dnslookup();
        back();
    }
    elseif ($input == 4 OR $input == 04){
        reversedns();
        back();
    }
    elseif ($input == 5 OR $input == 05){
        whois();
        back();
    }
    elseif ($input == 6 OR $input == 06){
        host();
        back();
    }
    elseif ($input == 7 OR $input == 07){
        reverseip();
        back();
    }
    elseif ($input == 8 OR $input == '08'){
        httphead();
        back();
    }
    elseif ($input == 9 OR $input == '09'){
        pagelink();
        back();
    }
    elseif ($input == 10){
        nmap();
        back();
    }
}

function back(){
    include 'config.php';
    echo "$red >$white ";
    $input = trim(fgets(STDIN));
    if ($input == 'menu' OR $input == 'home' OR $input == 'cd' OR $input == 'cd ..'){
        menu();
    }
    elseif ($input == 'exit' OR $input == 'quit'){
        exit();
    }
    else{
        echo"$white Command $input Not Found\n\n";
        back();
    }
}

menu();
?>
