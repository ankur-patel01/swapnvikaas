<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");

$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application�s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.


if($isValidChecksum == "TRUE") {

	echo '<!DOCTYPE html>
                    <html lang="en">
                    <head>
                    </head>
                    <body>
                        <div class="text" style=" display: flex;font-family: system-ui;
                        font-weight: 600;
                        flex-direction: column;color: slategray;
                        align-items: center;">';
                    
	// echo "<b>Checksum matched and following are the transaction details:</b>" . "<br/>";
	if ($_POST["STATUS"] == "TXN_SUCCESS") {
		echo '<img src="giphy.webp" width="20%" height="20%" >
		<div style="font-size: 4rem;">Transaction Successful</div>';

		// echo "<b>Transaction status is success</b>" . "<br/>";
		//Process your transaction here as success transaction.
		//Verify amount & order id received from Payment gateway with your application's order id and amount.
	}
	else {
		echo '<img src="giphy.gif" width="20%" height="20%" >
		<div style="font-size: 4rem;">Transaction Failed</div>';
		// echo "<b>Transaction status is failure</b>" . "<br/>";
	}
	echo'
	<p style="font-size: 2rem;">You will be redirected to home Page in 30 seconds, or <a href="index.html">click_here</a></p>
	</div>
</body>
</html>';
header('Refresh:30; url= index.html');

	// if (isset($_POST) && count($_POST)>0 )
	// { 
	// 	foreach($_POST as $paramName => $paramValue) {
	// 			echo "<br/>" . $paramName . " = " . $paramValue;
	// 	}
	// }
	

}
else {
	// echo "<b>Checksum mismatched.</b>";
	//Process transaction as suspicious.
	header('location:index.html');
}

?>