<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CryptoConversion</title>
<link href="/dist/css/bootstrap.css" rel="stylesheet">
<style type="text/css">
body {
	background-image: url(/doge.jpg);
	text-align: center;
}
</style>
</head>

<body>
<p>
  <?php
/*This shoudl cover the following coins:

*/
//Pull JSON data from coins-e.com
$c = curl_init();
curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($c, CURLOPT_HTTPHEADER, array('Accept: application/json', 'Content-Type: application/json'));
curl_setopt($c, CURLOPT_URL, 'https://www.coins-e.com/api/v2/markets/data/');
$data = curl_exec($c);
curl_close($c);
$obj = json_decode($data);
//Get the value of $1 worth of bitcoin.
$url = "https://bitpay.com/api/rates";
$json = file_get_contents($url);
$data = json_decode($json, TRUE);
$rate = $data[0]["rate"]; //This is the value of $1 of bitcoins. Usually something like 0.0003484
/*
Calculations - $_POST['usd'] / $rate
Determine market rates for:
Alphacoin ALP
Americoin AMC
Anoncoin ANC
Betacoin BET
BBQcoin BQC
Cryptogenicbullion CGB
Cinnamoncoin CIN
Craftcoin CRC
Ceutsche eMark DEM
Dogecoin DOGE                    
*/
$ALP_ = print_r($obj->{'markets'}->{'ALP_BTC'}->{'marketstat'}->{'bid'}, true);
$ALP = $ALP_*$rate;
$AMC_ = print_r($obj->{'markets'}->{'AMC_BTC'}->{'marketstat'}->{'bid'}, true);
$AMC = $AMC_*$rate;
$ANC_ = print_r($obj->{'markets'}->{'ANC_BTC'}->{'marketstat'}->{'bid'}, true);
$ANC = $ANC_*$rate;
$BET_ = print_r($obj->{'markets'}->{'BET_BTC'}->{'marketstat'}->{'bid'}, true);
$BET = $BET_*$rate;
$BQC_ = print_r($obj->{'markets'}->{'BQC_BTC'}->{'marketstat'}->{'bid'}, true);
$BQC = $BQC_*$rate;
$CGB_ = print_r($obj->{'markets'}->{'CGB_BTC'}->{'marketstat'}->{'bid'}, true);
$CGB = $CGB_*$rate;
$CIN_ = print_r($obj->{'markets'}->{'CIN_BTC'}->{'marketstat'}->{'bid'}, true);
$CIN = $CIN_*$rate;
$CRC_ = print_r($obj->{'markets'}->{'CRC_BTC'}->{'marketstat'}->{'bid'}, true);
$CRC = $CRC_*$rate;
$DEM_ = print_r($obj->{'markets'}->{'DEM_BTC'}->{'marketstat'}->{'bid'}, true);
$DEM = $DEM_*$rate;
$DOGE_ = print_r($obj->{'markets'}->{'DOGE_BTC'}->{'marketstat'}->{'bid'}, true);
$DOGE = $DOGE_*$rate;
/*
Datacoin DTC
Elacoin ELC
Elephantcoin ELP
Emerald EMD
Franko FRK
*/
$DTC_ = print_r($obj->{'markets'}->{'DTC_BTC'}->{'marketstat'}->{'bid'}, true);
$DTC = $DTC_*$rate;
$ELC_ = print_r($obj->{'markets'}->{'ELC_BTC'}->{'marketstat'}->{'bid'}, true);
$ELC = $ELC_*$rate;
$ELP_ = print_r($obj->{'markets'}->{'ELP_BTC'}->{'marketstat'}->{'bid'}, true);
$ELP = $ELP_*$rate;
$EMD_ = print_r($obj->{'markets'}->{'EMD_BTC'}->{'marketstat'}->{'bid'}, true);
$EMD = $EMD_*$rate;
$FRK_ = print_r($obj->{'markets'}->{'FRK_BTC'}->{'marketstat'}->{'bid'}, true);
$FRK = $FRK_*$rate;
/*
Feathercoin FTC
Grandcoin GDC
Globalcoin GLC
Krugercoin KGC
Litecoin LTC
*/
$FTC_ = print_r($obj->{'markets'}->{'FTC_BTC'}->{'marketstat'}->{'bid'}, true);
$FTC = $FTC_*$rate;
$GDC_ = print_r($obj->{'markets'}->{'GDC_BTC'}->{'marketstat'}->{'bid'}, true);
$GDC = $GDC_*$rate;
$GLC_ = print_r($obj->{'markets'}->{'GLC_BTC'}->{'marketstat'}->{'bid'}, true);
$GLC = $GLC_*$rate;
$KGC_ = print_r($obj->{'markets'}->{'KGC_BTC'}->{'marketstat'}->{'bid'}, true);
$KGC = $KGC_*$rate;
$LTC_ = print_r($obj->{'markets'}->{'LTC_BTC'}->{'marketstat'}->{'bid'}, true);
$LTC = $LTC_*$rate;


/*
Megacoin MEC
Nanotoken NAN
Netcoin NET
Noirbits NRB
Novacoin NVC

*/
$MEC_ = print_r($obj->{'markets'}->{'MEC_BTC'}->{'marketstat'}->{'bid'}, true);
$MEC = $MEC_*$rate;
$NAN_ = print_r($obj->{'markets'}->{'NAN_BTC'}->{'marketstat'}->{'bid'}, true);
$NAN = $NAN_*$rate;
$NET_ = print_r($obj->{'markets'}->{'NET_BTC'}->{'marketstat'}->{'bid'}, true);
$NET = $NET_*$rate;
$NRB_ = print_r($obj->{'markets'}->{'NRB_BTC'}->{'marketstat'}->{'bid'}, true);
$NRB = $NRB_*$rate;
$NVC_ = print_r($obj->{'markets'}->{'NVC_BTC'}->{'marketstat'}->{'bid'}, true);
$NVC = $NVC_*$rate;
/*
Orbitcoin ORB
Peercoin PPC
Protoshares PTS
Quarkcoin QRK
Realcoin REC
*/
$ORB_ = print_r($obj->{'markets'}->{'ORB_BTC'}->{'marketstat'}->{'bid'}, true);
$ORB = $ORB_*$rate;
$PPC_ = print_r($obj->{'markets'}->{'PPC_BTC'}->{'marketstat'}->{'bid'}, true);
$PPC = $PPC_*$rate;
$PTS_ = print_r($obj->{'markets'}->{'PTS_BTC'}->{'marketstat'}->{'bid'}, true);
$PTS = $PTS_*$rate;
$QRK_ = print_r($obj->{'markets'}->{'QRK_BTC'}->{'marketstat'}->{'bid'}, true);
$QRK = $QRK_*$rate;
$REC_ = print_r($obj->{'markets'}->{'REC_BTC'}->{'marketstat'}->{'bid'}, true);
$REC = $REC_*$rate;


/*
Redcoin RED
Stablecoin SBC
Spots SPT
Tagcoin TAG
Terracoin TRC


*/
$RED_ = print_r($obj->{'markets'}->{'RED_BTC'}->{'marketstat'}->{'bid'}, true);
$RED = $RED_*$rate;
$SBC_ = print_r($obj->{'markets'}->{'SBC_BTC'}->{'marketstat'}->{'bid'}, true);
$SBC = $SBC_*$rate;
$SPT_ = print_r($obj->{'markets'}->{'SPT_BTC'}->{'marketstat'}->{'bid'}, true);
$SPT = $SPT_*$rate;
$TAG_ = print_r($obj->{'markets'}->{'TAG_BTC'}->{'marketstat'}->{'bid'}, true);
$TAG = $TAG_*$rate;
$TRC_ = print_r($obj->{'markets'}->{'TRC_BTC'}->{'marketstat'}->{'bid'}, true);
$TRC = $TRC_*$rate;
/*
Unobtanium UNO
Worldcoin WDC
Xencoin XNC
Primecoin XPM
Zetacoin ZET
*/
$UNO_ = print_r($obj->{'markets'}->{'UNO_BTC'}->{'marketstat'}->{'bid'}, true);
$UNO = $UNO_*$rate;
$WDC_ = print_r($obj->{'markets'}->{'WDC_BTC'}->{'marketstat'}->{'bid'}, true);
$WDC = $WDC_*$rate;
$XNC_ = print_r($obj->{'markets'}->{'XNC_BTC'}->{'marketstat'}->{'bid'}, true);
$XNC = $XNC_*$rate;
$XPM_ = print_r($obj->{'markets'}->{'XPM_BTC'}->{'marketstat'}->{'bid'}, true);
$XPM = $XPM_*$rate;
$ZET_ = print_r($obj->{'markets'}->{'ZET_BTC'}->{'marketstat'}->{'bid'}, true);
$ZET = $ZET_*$rate;
if($_POST['usd'] == "" or $_POST['usd'] > 10000000){$_POST['usd'] = "0";};
?>
  
 
<center>
  <div class="container">
<h1><font color="white">CRYPTOCONVERSION TOOL</font></h1>
<p><!--<a href="http://www.dogehoster.com">Back to DogeHoster.com</a>--></p>
<p>&nbsp; </p><?php if($_POST['usd'] == 0){ echo '<div class="alert alert-info">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="64%"><span class="glyphicon glyphicon-arrow-down pull-left h3">Enter the amount of USD you wish to convert below.</span></td>
      <td width="36%"><span class="glyphicon glyphicon-gift pull-right h5"> Like It? Donate!
          <input class="h6" name="input" type="text" value="DQetB4jMUdFfi8vG4WEEnMuBJ8h6xkv6hv" size="45" readonly="readonly" />
      </span></td>
    </tr>
  </table></div>';}; ?>

<form action="index.php" class="form-inline" method="post">
<div class="input-group">
  	<span class="input-group-addon">$</span>
      <input name="usd" type="text" class="form-control" value="<? echo money_format('%i', $_POST['usd']); ?>">
      <span class="input-group-btn">
        <button class="btn btn-default" type="submit">Go!</button>
      </span></div>
<p>&nbsp;</p>
<?php if($_POST['usd'] != 0){ echo '<div class="alert alert-info"><h4><span class="glyphicon glyphicon-arrow-down pull-left">See it converted into 40 different Cryptocurrencies</span></h4></div>';}; ?>
  <table width="100%" border="0" cellpadding="10" cellspacing="10" class="table">
    <tr>
      <td><p>&nbsp;</p><table class="table table-bordered table-hover"  border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="75%"><cite title="This is the full name of the coin."><h4>Alphacoin</td>
              <td width="25%"><cite title="This is the 3 or 4 letter trade symbol used on exchanges."><h4>ALP</h4></cite></td>
            </tr>
            
            <tr>
              <td colspan="2"><h4><span class="label label-default" title="The leading symbol is the single character symbol that is used to identify this coin.">α1</span><cite title="This is the amount of United States Dollars one unit of this currency is worth - this value is the average price pulled from coins-e.com"> = $<? echo $ALP; ?></h4></td>
            </tr><tr>
              <td colspan="2">
                <input class="h4" type="text" size="30" readonly="readonly" value="<? echo "$".money_format('%i', $_POST['usd'])." = ".$_POST['usd'] / $ALP; ?>"/></td>
        </tr>
      </table><p>&nbsp;</p></td>
      <td><p>&nbsp;</p><table class="table table-bordered table-hover" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="75%"><cite title="This is the full name of the coin."><h4>Americoin</h4></cite></td>
          <td width="25%"><cite title="This is the 3 or 4 letter trade symbol used on exchanges."><h4>AMC</h4></cite></td>
        </tr>
        <tr>
            <td colspan="2"><h4><span class="label label-default" title="The leading symbol is the single character symbol that is used to identify this coin.">A1</span><cite title="This is the amount of United States Dollars one unit of this currency is worth - this value is the average price pulled from coins-e.com"> = $<? echo $AMC; ?></h4></cite></td>
        </tr>
            <tr>
          <td colspan="2">
          <input class="h4" type="text" size="30" readonly="readonly" value="<? echo "$".money_format('%i', $_POST['usd'])." = ".$_POST['usd'] / $AMC; ?>" /></td>
        </tr>
      </table><p>&nbsp;</p></td>
      <td><p>&nbsp;</p><table class="table table-bordered table-hover"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="75%"><cite title="This is the full name of the coin."><h4>Anoncoin</h4></cite></td>
          <td width="25%"><cite title="This is the 3 or 4 letter trade symbol used on exchanges."><h4>ANC</h4></cite></td>
        </tr>
        
        <tr>
              <td colspan="2"><h4><span class="label label-default" title="The leading symbol is the single character symbol that is used to identify this coin.">a1</span><cite title="This is the amount of United States Dollars one unit of this currency is worth - this value is the average price pulled from coins-e.com"> = $<? echo $ANC; ?></h4></cite></td>
        </tr><tr>
          <td colspan="2">
          <input class="h4" type="text" size="30" readonly="readonly" value="<? echo "$".money_format('%i', $_POST['usd'])." = ".$_POST['usd'] / $ANC; ?>" /></td>
        </tr>
      </table><p>&nbsp;</p></td>
      <td><p>&nbsp;</p><table class="table table-bordered table-hover"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="75%"><cite title="This is the full name of the coin."><h4>Betacoin</h4></cite></td>
          <td width="25%"><cite title="This is the 3 or 4 letter trade symbol used on exchanges."><h4>BET</h4></cite></td>
        </tr>
        
        <tr>
              <td colspan="2"><h4><span class="label label-default" title="The leading symbol is the single character symbol that is used to identify this coin.">ẞ1</span><cite title="This is the amount of United States Dollars one unit of this currency is worth - this value is the average price pulled from coins-e.com"> = $<? echo $BET; ?></h4></cite></td>
        </tr><tr>
          <td colspan="2">
          <input class="h4" type="text" size="30" readonly="readonly" value="<? echo "$".money_format('%i', $_POST['usd'])." = ".$_POST['usd'] / $BET; ?>" /></td>
        </tr>
      </table><p>&nbsp;</p></td>
    </tr>
    <tr>
      <td><p>&nbsp;</p><table class="table table-bordered table-hover"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="75%"><cite title="This is the full name of the coin."><h4>BBQCoin</h4></cite></td>
          <td width="25%"><cite title="This is the 3 or 4 letter trade symbol used on exchanges."><h4>BQC</td>
        </tr>
        <tr>
          <td colspan="2"><h4><span class="label label-default" title="The leading symbol is the single character symbol that is used to identify this coin.">B1</span><cite title="This is the amount of United States Dollars one unit of this currency is worth - this value is the average price pulled from coins-e.com"> = $<? echo $BQC; ?></h4></cite></td>
        </tr>
        <tr>
          <td colspan="2"><input class="h4" type="text" size="30" readonly="readonly" value="<? echo "$".money_format('%i', $_POST['usd'])." = ".$_POST['usd'] / $BQC; ?>"/></td>
        </tr>
      </table><p>&nbsp;</p></td>
      <td><p>&nbsp;</p><table class="table table-bordered table-hover" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="75%"><cite title="This is the full name of the coin."><h4>Cryptogenicbullion</h4></cite></td>
          <td width="25%"><cite title="This is the 3 or 4 letter trade symbol used on exchanges."><h4>CGB</td>
        </tr>
        <tr>
          <td colspan="2"><h4><span class="label label-default" title="The leading symbol is the single character symbol that is used to identify this coin.">₡1</span><cite title="This is the amount of United States Dollars one unit of this currency is worth - this value is the average price pulled from coins-e.com"> = $<? echo $CGB; ?></h4></cite></td>
        </tr>
        <tr>
          <td colspan="2"><input class="h4" type="text" size="30" readonly="readonly" value="<? echo "$".money_format('%i', $_POST['usd'])." = ".$_POST['usd'] / $CGB; ?>" /></td>
        </tr>
      </table><p>&nbsp;</p></td>
      <td><p>&nbsp;</p><table class="table table-bordered table-hover"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="75%"><cite title="This is the full name of the coin."><h4>Cinnamoncoin</h4></cite></td>
          <td width="25%"><cite title="This is the 3 or 4 letter trade symbol used on exchanges."><h4>CIN</td>
        </tr>
        <tr>
          <td colspan="2"><h4><span class="label label-default" title="The leading symbol is the single character symbol that is used to identify this coin.">₵1</span><cite title="This is the amount of United States Dollars one unit of this currency is worth - this value is the average price pulled from coins-e.com"> = $<? echo $CIN; ?></h4></cite></td>
        </tr>
        <tr>
          <td colspan="2"><input class="h4" type="text" size="30" readonly="readonly" value="<? echo "$".money_format('%i', $_POST['usd'])." = ".$_POST['usd'] / $CIN; ?>" /></td>
        </tr>
      </table><p>&nbsp;</p></td>
      <td><p>&nbsp;</p><table class="table table-bordered table-hover"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="75%"><cite title="This is the full name of the coin."><h4>Craftcoin</h4></cite></td>
          <td width="25%"><cite title="This is the 3 or 4 letter trade symbol used on exchanges."><h4>CRC</td>
        </tr>
        <tr>
          <td colspan="2"><h4><span class="label label-default" title="The leading symbol is the single character symbol that is used to identify this coin.">c1</span><cite title="This is the amount of United States Dollars one unit of this currency is worth - this value is the average price pulled from coins-e.com"> = $<? echo $CRC; ?></h4></cite></td>
        </tr>
        <tr>
          <td colspan="2"><input class="h4" type="text" size="30" readonly="readonly" value="<? echo "$".money_format('%i', $_POST['usd'])." = ".$_POST['usd'] / $CRC; ?>" /></td>
        </tr>
      </table><p>&nbsp;</p></td>
    </tr>
    <tr>
      <td><p>&nbsp;</p><table class="table table-bordered table-hover"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="75%"><cite title="This is the full name of the coin."><h4>Deutsche eMark</h4></cite></td>
          <td width="25%"><cite title="This is the 3 or 4 letter trade symbol used on exchanges."><h4>DEM</td>
        </tr>
        <tr>
          <td colspan="2"><h4><span class="label label-default" title="The leading symbol is the single character symbol that is used to identify this coin.">Œ1</span><cite title="This is the amount of United States Dollars one unit of this currency is worth - this value is the average price pulled from coins-e.com"> = $<? echo $DEM; ?></h4></cite></td>
        </tr>
        <tr>
          <td colspan="2"><input class="h4" type="text" size="30" readonly="readonly" value="<? echo "$".money_format('%i', $_POST['usd'])." = ".$_POST['usd'] / $DEM; ?>"/></td>
        </tr>
      </table><p>&nbsp;</p></td>
      <td><p>&nbsp;</p><table class="table table-bordered table-hover" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="75%"><cite title="This is the full name of the coin."><h4>Dogecoin</h4></cite></td>
          <td width="25%"><cite title="This is the 3 or 4 letter trade symbol used on exchanges."><h4>DOGE</td>
        </tr>
        <tr>
          <td colspan="2"><h4><span class="label label-default" title="The leading symbol is the single character symbol that is used to identify this coin.">Đ1</span><cite title="This is the amount of United States Dollars one unit of this currency is worth - this value is the average price pulled from coins-e.com"> = $<? echo $DOGE; ?></h4></cite></td>
        </tr>
        <tr>
          <td colspan="2"><input class="h4" type="text" size="30" readonly="readonly" value="<? echo "$".money_format('%i', $_POST['usd'])." = ".$_POST['usd'] / $DOGE; ?>" /></td>
        </tr>
      </table><p>&nbsp;</p></td>
      <td><p>&nbsp;</p><table class="table table-bordered table-hover"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="75%"><cite title="This is the full name of the coin."><h4>Datacoin</h4></cite></td>
          <td width="25%"><cite title="This is the 3 or 4 letter trade symbol used on exchanges."><h4>DTC</td>
        </tr>
        <tr>
          <td colspan="2"><h4><span class="label label-default" title="The leading symbol is the single character symbol that is used to identify this coin.">a1</span><cite title="This is the amount of United States Dollars one unit of this currency is worth - this value is the average price pulled from coins-e.com"> = $<? echo $DTC; ?></h4></cite></td>
        </tr>
        <tr>
          <td colspan="2"><input class="h4" type="text" size="30" readonly="readonly" value="<? echo "$".money_format('%i', $_POST['usd'])." = ".$_POST['usd'] / $DTC; ?>" /></td>
        </tr>
      </table><p>&nbsp;</p></td>
      <td><p>&nbsp;</p><table class="table table-bordered table-hover"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="75%"><cite title="This is the full name of the coin."><h4>Elacoin</h4></cite></td>
          <td width="25%"><cite title="This is the 3 or 4 letter trade symbol used on exchanges."><h4>ELC</td>
        </tr>
        <tr>
          <td colspan="2"><h4><span class="label label-default" title="The leading symbol is the single character symbol that is used to identify this coin.">e1</span><cite title="This is the amount of United States Dollars one unit of this currency is worth - this value is the average price pulled from coins-e.com"> = $<? echo $ELC; ?></h4></cite></td>
        </tr>
        <tr>
          <td colspan="2"><input class="h4" type="text" size="30" readonly="readonly" value="<? echo "$".money_format('%i', $_POST['usd'])." = ".$_POST['usd'] / $ELC; ?>" /></td>
        </tr>
      </table><p>&nbsp;</p></td>
    </tr>
    <tr>
      <td><p>&nbsp;</p><table class="table table-bordered table-hover"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="75%"><cite title="This is the full name of the coin."><h4>Elephantcoin</h4></cite></td>
          <td width="25%"><cite title="This is the 3 or 4 letter trade symbol used on exchanges."><h4>ELP</td>
        </tr>
        <tr>
          <td colspan="2"><h4><span class="label label-default" title="The leading symbol is the single character symbol that is used to identify this coin.">Є1</span><cite title="This is the amount of United States Dollars one unit of this currency is worth - this value is the average price pulled from coins-e.com"> = $<? echo $ELP; ?></h4></cite></td>
        </tr>
        <tr>
          <td colspan="2"><input class="h4" type="text" size="30" readonly="readonly" value="<? echo "$".money_format('%i', $_POST['usd'])." = ".$_POST['usd'] / $ELP; ?>"/></td>
        </tr>
      </table><p>&nbsp;</p></td>
      <td><p>&nbsp;</p><table class="table table-bordered table-hover" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="75%"><cite title="This is the full name of the coin."><h4>Emerald</h4></cite></td>
          <td width="25%"><cite title="This is the 3 or 4 letter trade symbol used on exchanges."><h4>EMD</td>
        </tr>
        <tr>
          <td colspan="2"><h4><span class="label label-default" title="The leading symbol is the single character symbol that is used to identify this coin.">E1</span><cite title="This is the amount of United States Dollars one unit of this currency is worth - this value is the average price pulled from coins-e.com"> = $<? echo $EMD; ?></h4></cite></td>
        </tr>
        <tr>
          <td colspan="2"><input class="h4" type="text" size="30" readonly="readonly" value="<? echo "$".money_format('%i', $_POST['usd'])." = ".$_POST['usd'] / $EMD; ?>" /></td>
        </tr>
      </table><p>&nbsp;</p></td>
      <td><p>&nbsp;</p><table class="table table-bordered table-hover"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="75%"><cite title="This is the full name of the coin."><h4>Franko</h4></cite></td>
          <td width="25%"><cite title="This is the 3 or 4 letter trade symbol used on exchanges."><h4>FRK</td>
        </tr>
        <tr>
          <td colspan="2"><h4><span class="label label-default" title="The leading symbol is the single character symbol that is used to identify this coin.">Ƒ1</span><cite title="This is the amount of United States Dollars one unit of this currency is worth - this value is the average price pulled from coins-e.com"> = $<? echo $FRK; ?></h4></cite></td>
        </tr>
        <tr>
          <td colspan="2"><input class="h4" type="text" size="30" readonly="readonly" value="<? echo "$".money_format('%i', $_POST['usd'])." = ".$_POST['usd'] / $FRK; ?>" /></td>
        </tr>
      </table><p>&nbsp;</p></td>
      <td><p>&nbsp;</p><table class="table table-bordered table-hover"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="75%"><cite title="This is the full name of the coin."><h4>Feathercoin</h4></cite></td>
          <td width="25%"><cite title="This is the 3 or 4 letter trade symbol used on exchanges."><h4>FTC</td>
        </tr>
        <tr>
          <td colspan="2"><h4><span class="label label-default" title="The leading symbol is the single character symbol that is used to identify this coin.">ƒ1</span><cite title="This is the amount of United States Dollars one unit of this currency is worth - this value is the average price pulled from coins-e.com"> = $<? echo $FTC; ?></h4></cite></td>
        </tr>
        <tr>
          <td colspan="2"><input class="h4" type="text" size="30" readonly="readonly" value="<? echo "$".money_format('%i', $_POST['usd'])." = ".$_POST['usd'] / $FTC; ?>" /></td>
        </tr>
      </table><p>&nbsp;</p></td>
    </tr>
    <tr>
      <td><p>&nbsp;</p><table class="table table-bordered table-hover"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="75%"><cite title="This is the full name of the coin."><h4>Grandcoin</h4></cite></td>
          <td width="25%"><cite title="This is the 3 or 4 letter trade symbol used on exchanges."><h4>GDC</td>
        </tr>
        <tr>
          <td colspan="2"><h4><span class="label label-default" title="The leading symbol is the single character symbol that is used to identify this coin.">g1</span><cite title="This is the amount of United States Dollars one unit of this currency is worth - this value is the average price pulled from coins-e.com"> = $<? echo $GDC; ?></h4></cite></td>
        </tr>
        <tr>
          <td colspan="2"><input class="h4" type="text" size="30" readonly="readonly" value="<? echo "$".money_format('%i', $_POST['usd'])." = ".$_POST['usd'] / $GDC; ?>"/></td>
        </tr>
      </table><p>&nbsp;</p></td>
      <td><p>&nbsp;</p><table class="table table-bordered table-hover" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="75%"><cite title="This is the full name of the coin."><h4>Globalcoin</h4></cite></td>
          <td width="25%"><cite title="This is the 3 or 4 letter trade symbol used on exchanges."><h4>GLC</td>
        </tr>
        <tr>
          <td colspan="2"><h4><span class="label label-default" title="The leading symbol is the single character symbol that is used to identify this coin.">G1</span><cite title="This is the amount of United States Dollars one unit of this currency is worth - this value is the average price pulled from coins-e.com"> = $<? echo $GLC; ?></h4></cite></td>
        </tr>
        <tr>
          <td colspan="2"><input class="h4" type="text" size="30" readonly="readonly" value="<? echo "$".money_format('%i', $_POST['usd'])." = ".$_POST['usd'] / $GLC; ?>" /></td>
        </tr>
      </table><p>&nbsp;</p></td>
      <td><p>&nbsp;</p><table class="table table-bordered table-hover"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="75%"><cite title="This is the full name of the coin."><h4>Krugercoin</h4></cite></td>
          <td width="25%"><cite title="This is the 3 or 4 letter trade symbol used on exchanges."><h4>KGC</td>
        </tr>
        <tr>
          <td colspan="2"><h4><span class="label label-default" title="The leading symbol is the single character symbol that is used to identify this coin.">K1</span><cite title="This is the amount of United States Dollars one unit of this currency is worth - this value is the average price pulled from coins-e.com"> = $<? echo $KGC; ?></h4></cite></td>
        </tr>
        <tr>
          <td colspan="2"><input class="h4" type="text" size="30" readonly="readonly" value="<? echo "$".money_format('%i', $_POST['usd'])." = ".$_POST['usd'] / $KGC; ?>" /></td>
        </tr>
      </table><p>&nbsp;</p></td>
      <td><p>&nbsp;</p><table class="table table-bordered table-hover"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="75%"><cite title="This is the full name of the coin."><h4>Litecoin</h4></cite></td>
          <td width="25%"><cite title="This is the 3 or 4 letter trade symbol used on exchanges."><h4>LTC</td>
        </tr>
        <tr>
          <td colspan="2"><h4><span class="label label-default" title="The leading symbol is the single character symbol that is used to identify this coin.">Ł1</span><cite title="This is the amount of United States Dollars one unit of this currency is worth - this value is the average price pulled from coins-e.com"> = $<? echo $LTC; ?></h4></cite></td>
        </tr>
        <tr>
          <td colspan="2"><input class="h4" type="text" size="30" readonly="readonly" value="<? echo "$".money_format('%i', $_POST['usd'])." = ".$_POST['usd'] / $LTC; ?>" /></td>
        </tr>
      </table><p>&nbsp;</p></td>
    </tr>
    <tr>
      <td><p>&nbsp;</p><table class="table table-bordered table-hover"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="75%"><cite title="This is the full name of the coin."><h4>Megacoin</h4></cite></td>
          <td width="25%"><cite title="This is the 3 or 4 letter trade symbol used on exchanges."><h4>MEC</td>
        </tr>
        <tr>
          <td colspan="2"><h4><span class="label label-default" title="The leading symbol is the single character symbol that is used to identify this coin.">M1</span><cite title="This is the amount of United States Dollars one unit of this currency is worth - this value is the average price pulled from coins-e.com"> = $<? echo $MEC; ?></h4></cite></td>
        </tr>
        <tr>
          <td colspan="2"><input class="h4" type="text" size="30" readonly="readonly" value="<? echo "$".money_format('%i', $_POST['usd'])." = ".$_POST['usd'] / $MEC; ?>"/></td>
        </tr>
      </table><p>&nbsp;</p></td>
      <td><p>&nbsp;</p><table class="table table-bordered table-hover" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="75%"><cite title="This is the full name of the coin."><h4>Nanotoken</h4></cite></td>
          <td width="25%"><cite title="This is the 3 or 4 letter trade symbol used on exchanges."><h4>NAN</td>
        </tr>
        <tr>
          <td colspan="2"><h4><span class="label label-default" title="The leading symbol is the single character symbol that is used to identify this coin.">n1</span><cite title="This is the amount of United States Dollars one unit of this currency is worth - this value is the average price pulled from coins-e.com"> = $<? echo $NAN; ?></h4></cite></td>
        </tr>
        <tr>
          <td colspan="2"><input class="h4" type="text" size="30" readonly="readonly" value="<? echo "$".money_format('%i', $_POST['usd'])." = ".$_POST['usd'] / $NAN; ?>" /></td>
        </tr>
      </table><p>&nbsp;</p></td>
      <td><p>&nbsp;</p><table class="table table-bordered table-hover"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="75%"><cite title="This is the full name of the coin."><h4>Netcoin</h4></cite></td>
          <td width="25%"><cite title="This is the 3 or 4 letter trade symbol used on exchanges."><h4>NET</td>
        </tr>
        <tr>
          <td colspan="2"><h4><span class="label label-default" title="The leading symbol is the single character symbol that is used to identify this coin.">п1</span><cite title="This is the amount of United States Dollars one unit of this currency is worth - this value is the average price pulled from coins-e.com"> = $<? echo $NET; ?></h4></cite></td>
        </tr>
        <tr>
          <td colspan="2"><input class="h4" type="text" size="30" readonly="readonly" value="<? echo "$".money_format('%i', $_POST['usd'])." = ".$_POST['usd'] / $NET; ?>" /></td>
        </tr>
      </table><p>&nbsp;</p></td>
      <td><p>&nbsp;</p><table class="table table-bordered table-hover"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="75%"><cite title="This is the full name of the coin."><h4>Noirbits</h4></cite></td>
          <td width="25%"><cite title="This is the 3 or 4 letter trade symbol used on exchanges."><h4>NRB</td>
        </tr>
        <tr>
          <td colspan="2"><h4><span class="label label-default" title="The leading symbol is the single character symbol that is used to identify this coin.">П1</span><cite title="This is the amount of United States Dollars one unit of this currency is worth - this value is the average price pulled from coins-e.com"> = $<? echo $NRB; ?></h4></cite></td>
        </tr>
        <tr>
          <td colspan="2"><input class="h4" type="text" size="30" readonly="readonly" value="<? echo "$".money_format('%i', $_POST['usd'])." = ".$_POST['usd'] / $NRB; ?>" /></td>
        </tr>
      </table><p>&nbsp;</p></td>
    </tr>
    <tr>
      <td><p>&nbsp;</p><table class="table table-bordered table-hover"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="75%"><cite title="This is the full name of the coin."><h4>Novacoin</h4></cite></td>
          <td width="25%"><cite title="This is the 3 or 4 letter trade symbol used on exchanges."><h4>NVC</td>
        </tr>
        <tr>
          <td colspan="2"><h4><span class="label label-default" title="The leading symbol is the single character symbol that is used to identify this coin.">N1</span><cite title="This is the amount of United States Dollars one unit of this currency is worth - this value is the average price pulled from coins-e.com"> = $<? echo $NVC; ?></h4></cite></td>
        </tr>
        <tr>
          <td colspan="2"><input class="h4" type="text" size="30" readonly="readonly" value="<? echo "$".money_format('%i', $_POST['usd'])." = ".$_POST['usd'] / $NVC; ?>"/></td>
        </tr>
      </table><p>&nbsp;</p></td>
      <td><p>&nbsp;</p><table class="table table-bordered table-hover" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="75%"><cite title="This is the full name of the coin."><h4>Orbitcoin</h4></cite></td>
          <td width="25%"><cite title="This is the 3 or 4 letter trade symbol used on exchanges."><h4>ORB</td>
        </tr>
        <tr>
          <td colspan="2"><h4><span class="label label-default" title="The leading symbol is the single character symbol that is used to identify this coin.">O1</span><cite title="This is the amount of United States Dollars one unit of this currency is worth - this value is the average price pulled from coins-e.com"> = $<? echo $ORB; ?></h4></cite></td>
        </tr>
        <tr>
          <td colspan="2"><input class="h4" type="text" size="30" readonly="readonly" value="<? echo "$".money_format('%i', $_POST['usd'])." = ".$_POST['usd'] / $ORB; ?>" /></td>
        </tr>
      </table><p>&nbsp;</p></td>
      <td><p>&nbsp;</p><table class="table table-bordered table-hover"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="75%"><cite title="This is the full name of the coin."><h4>Peercoin</h4></cite></td>
          <td width="25%"><cite title="This is the 3 or 4 letter trade symbol used on exchanges."><h4>PPC</td>
        </tr>
        <tr>
          <td colspan="2"><h4><span class="label label-default" title="The leading symbol is the single character symbol that is used to identify this coin.">Ᵽ1</span><cite title="This is the amount of United States Dollars one unit of this currency is worth - this value is the average price pulled from coins-e.com"> = $<? echo $PPC; ?></h4></cite></td>
        </tr>
        <tr>
          <td colspan="2"><input class="h4" type="text" size="30" readonly="readonly" value="<? echo "$".money_format('%i', $_POST['usd'])." = ".$_POST['usd'] / $PPC; ?>" /></td>
        </tr>
      </table><p>&nbsp;</p></td>
      <td><p>&nbsp;</p><table class="table table-bordered table-hover"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="75%"><cite title="This is the full name of the coin."><h4>Protoshares</h4></cite></td>
          <td width="25%"><cite title="This is the 3 or 4 letter trade symbol used on exchanges."><h4>PTS</td>
        </tr>
        <tr>
          <td colspan="2"><h4><span class="label label-default" title="The leading symbol is the single character symbol that is used to identify this coin.">p1</span><cite title="This is the amount of United States Dollars one unit of this currency is worth - this value is the average price pulled from coins-e.com"> = $<? echo $PTS; ?></h4></cite></td>
        </tr>
        <tr>
          <td colspan="2"><input class="h4" type="text" size="30" readonly="readonly" value="<? echo "$".money_format('%i', $_POST['usd'])." = ".$_POST['usd'] / $PTS; ?>" /></td>
        </tr>
      </table><p>&nbsp;</p></td>
    </tr>
    <tr>
      <td><p>&nbsp;</p><table class="table table-bordered table-hover"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="75%"><cite title="This is the full name of the coin."><h4>Quarkcoin</h4></cite></td>
          <td width="25%"><cite title="This is the 3 or 4 letter trade symbol used on exchanges."><h4>QRK</td>
        </tr>
        <tr>
          <td colspan="2"><h4><span class="label label-default" title="The leading symbol is the single character symbol that is used to identify this coin.">Q1</span><cite title="This is the amount of United States Dollars one unit of this currency is worth - this value is the average price pulled from coins-e.com"> = $<? echo $QRK; ?></h4></cite></td>
        </tr>
        <tr>
          <td colspan="2"><input class="h4" type="text" size="30" readonly="readonly" value="<? echo "$".money_format('%i', $_POST['usd'])." = ".$_POST['usd'] / $QRK; ?>"/></td>
        </tr>
      </table><p>&nbsp;</p></td>
      <td><p>&nbsp;</p><table class="table table-bordered table-hover" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="75%"><cite title="This is the full name of the coin."><h4>Realcoin</h4></cite></td>
          <td width="25%"><cite title="This is the 3 or 4 letter trade symbol used on exchanges."><h4>REC</td>
        </tr>
        <tr>
          <td colspan="2"><h4><span class="label label-default" title="The leading symbol is the single character symbol that is used to identify this coin.">r1</span><cite title="This is the amount of United States Dollars one unit of this currency is worth - this value is the average price pulled from coins-e.com"> = $<? echo $REC; ?></h4></cite></td>
        </tr>
        <tr>
          <td colspan="2"><input class="h4" type="text" size="30" readonly="readonly" value="<? echo "$".money_format('%i', $_POST['usd'])." = ".$_POST['usd'] / $REC; ?>" /></td>
        </tr>
      </table><p>&nbsp;</p></td>
      <td><p>&nbsp;</p><table class="table table-bordered table-hover"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="75%"><cite title="This is the full name of the coin."><h4>Redcoin</h4></cite></td>
          <td width="25%"><cite title="This is the 3 or 4 letter trade symbol used on exchanges."><h4>RED</td>
        </tr>
        <tr>
          <td colspan="2"><h4><span class="label label-default" title="The leading symbol is the single character symbol that is used to identify this coin.">Ɍ1</span><cite title="This is the amount of United States Dollars one unit of this currency is worth - this value is the average price pulled from coins-e.com"> = $<? echo $RED; ?></h4></cite></td>
        </tr>
        <tr>
          <td colspan="2"><input class="h4" type="text" size="30" readonly="readonly" value="<? echo "$".money_format('%i', $_POST['usd'])." = ".$_POST['usd'] / $RED; ?>" /></td>
        </tr>
      </table><p>&nbsp;</p></td>
      <td><p>&nbsp;</p><table class="table table-bordered table-hover"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="75%"><cite title="This is the full name of the coin."><h4>Stablecoin</h4></cite></td>
          <td width="25%"><cite title="This is the 3 or 4 letter trade symbol used on exchanges."><h4>SBC</td>
        </tr>
        <tr>
          <td colspan="2"><h4><span class="label label-default" title="The leading symbol is the single character symbol that is used to identify this coin.">S1</span><cite title="This is the amount of United States Dollars one unit of this currency is worth - this value is the average price pulled from coins-e.com"> = $<? echo $SBC; ?></h4></cite></td>
        </tr>
        <tr>
          <td colspan="2"><input class="h4" type="text" size="30" readonly="readonly" value="<? echo "$".money_format('%i', $_POST['usd'])." = ".$_POST['usd'] / $SBC; ?>" /></td>
        </tr>
      </table><p>&nbsp;</p></td>
    </tr>
    <tr>
      <td><p>&nbsp;</p><table class="table table-bordered table-hover"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="75%"><cite title="This is the full name of the coin."><h4>Spots</h4></cite></td>
          <td width="25%"><cite title="This is the 3 or 4 letter trade symbol used on exchanges."><h4>SPT</td>
        </tr>
        <tr>
          <td colspan="2"><h4><span class="label label-default" title="The leading symbol is the single character symbol that is used to identify this coin.">s1</span><cite title="This is the amount of United States Dollars one unit of this currency is worth - this value is the average price pulled from coins-e.com"> = $<? echo $SPT; ?></h4></cite></td>
        </tr>
        <tr>
          <td colspan="2"><input class="h4" type="text" size="30" readonly="readonly" value="<? echo "$".money_format('%i', $_POST['usd'])." = ".$_POST['usd'] / $SPT; ?>"/></td>
        </tr>
      </table><p>&nbsp;</p></td>
      <td><p>&nbsp;</p><table class="table table-bordered table-hover" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="75%"><cite title="This is the full name of the coin."><h4>Tagcoin</h4></cite></td>
          <td width="25%"><cite title="This is the 3 or 4 letter trade symbol used on exchanges."><h4>TAG</td>
        </tr>
        <tr>
          <td colspan="2"><h4><span class="label label-default" title="The leading symbol is the single character symbol that is used to identify this coin.">T1</span><cite title="This is the amount of United States Dollars one unit of this currency is worth - this value is the average price pulled from coins-e.com"> = $<? echo $TAG; ?></h4></cite></td>
        </tr>
        <tr>
          <td colspan="2"><input class="h4" type="text" size="30" readonly="readonly" value="<? echo "$".money_format('%i', $_POST['usd'])." = ".$_POST['usd'] / $TAG; ?>" /></td>
        </tr>
      </table><p>&nbsp;</p></td>
      <td><p>&nbsp;</p><table class="table table-bordered table-hover"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="75%"><cite title="This is the full name of the coin."><h4>Terracoin</h4></cite></td>
          <td width="25%"><cite title="This is the 3 or 4 letter trade symbol used on exchanges."><h4>TRC</td>
        </tr>
        <tr>
          <td colspan="2"><h4><span class="label label-default" title="The leading symbol is the single character symbol that is used to identify this coin.">Ŧ1</span><cite title="This is the amount of United States Dollars one unit of this currency is worth - this value is the average price pulled from coins-e.com"> = $<? echo $TRC; ?></h4></cite></td>
        </tr>
        <tr>
          <td colspan="2"><input class="h4" type="text" size="30" readonly="readonly" value="<? echo "$".money_format('%i', $_POST['usd'])." = ".$_POST['usd'] / $TRC; ?>" /></td>
        </tr>
      </table><p>&nbsp;</p></td>
      <td><p>&nbsp;</p><table class="table table-bordered table-hover"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="75%"><cite title="This is the full name of the coin."><h4>Unobtanium</h4></cite></td>
          <td width="25%"><cite title="This is the 3 or 4 letter trade symbol used on exchanges."><h4>UNO</td>
        </tr>
        <tr>
          <td colspan="2"><h4><span class="label label-default" title="The leading symbol is the single character symbol that is used to identify this coin.">U1</span><cite title="This is the amount of United States Dollars one unit of this currency is worth - this value is the average price pulled from coins-e.com"> = $<? echo $UNO; ?></h4></cite></td>
        </tr>
        <tr>
          <td colspan="2"><input class="h4" type="text" size="30" readonly="readonly" value="<? echo "$".money_format('%i', $_POST['usd'])." = ".$_POST['usd'] / $UNO; ?>" /></td>
        </tr>
      </table><p>&nbsp;</p></td>
    </tr>
    <tr>
      <td><p>&nbsp;</p><table class="table table-bordered table-hover"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="75%"><cite title="This is the full name of the coin."><h4>Worldcoin</h4></cite></td>
          <td width="25%"><cite title="This is the 3 or 4 letter trade symbol used on exchanges."><h4>WDC</td>
        </tr>
        <tr>
          <td colspan="2"><h4><span class="label label-default" title="The leading symbol is the single character symbol that is used to identify this coin.">ω1</span><cite title="This is the amount of United States Dollars one unit of this currency is worth - this value is the average price pulled from coins-e.com"> = $<? echo $WDC; ?></h4></cite></td>
        </tr>
        <tr>
          <td colspan="2"><input class="h4" type="text" size="30" readonly="readonly" value="<? echo "$".money_format('%i', $_POST['usd'])." = ".$_POST['usd'] / $WDC; ?>"/></td>
        </tr>
      </table><p>&nbsp;</p></td>
      <td><p>&nbsp;</p><table class="table table-bordered table-hover" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="75%"><cite title="This is the full name of the coin."><h4>Xencoin</h4></cite></td>
          <td width="25%"><cite title="This is the 3 or 4 letter trade symbol used on exchanges."><h4>XNC</td>
        </tr>
        <tr>
          <td colspan="2"><h4><span class="label label-default" title="The leading symbol is the single character symbol that is used to identify this coin.">X1</span><cite title="This is the amount of United States Dollars one unit of this currency is worth - this value is the average price pulled from coins-e.com"> = $<? echo $XNC; ?></h4></cite></td>
        </tr>
        <tr>
          <td colspan="2"><input class="h4" type="text" size="30" readonly="readonly" value="<? echo "$".money_format('%i', $_POST['usd'])." = ".$_POST['usd'] / $XNC; ?>" /></td>
        </tr>
      </table><p>&nbsp;</p></td>
      <td><p>&nbsp;</p><table class="table table-bordered table-hover"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="75%"><cite title="This is the full name of the coin."><h4>Primecoin</h4></cite></td>
          <td width="25%"><cite title="This is the 3 or 4 letter trade symbol used on exchanges."><h4>XPM</td>
        </tr>
        <tr>
          <td colspan="2"><h4><span class="label label-default" title="The leading symbol is the single character symbol that is used to identify this coin.">Ψ1</span><cite title="This is the amount of United States Dollars one unit of this currency is worth - this value is the average price pulled from coins-e.com"> = $<? echo $XPM; ?></h4></cite></td>
        </tr>
        <tr>
          <td colspan="2"><input class="h4" type="text" size="30" readonly="readonly" value="<? echo "$".money_format('%i', $_POST['usd'])." = ".$_POST['usd'] / $XPM; ?>" /></td>
        </tr>
      </table><p>&nbsp;</p></td>
      <td><p>&nbsp;</p><table class="table table-bordered table-hover"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="75%"><cite title="This is the full name of the coin.">
          <h4><a href="#ZET">Zetacoin</a></h4></cite></td>
          <td width="25%"><cite title="This is the 3 or 4 letter trade symbol used on exchanges."><h4>ZET</td>
        </tr>
        <tr>
          <td colspan="2"><h4><span class="label label-default" title="The leading symbol is the single character symbol that is used to identify this coin.">ζ1</span><cite title="This is the amount of United States Dollars one unit of this currency is worth - this value is the average price pulled from coins-e.com"> = $<? echo $ZET; ?></h4></cite></td>
        </tr>
        <tr>
          <td colspan="2"><input class="h4" type="text" size="30" readonly="readonly" value="<? echo "$".money_format('%i', $_POST['usd'])." = ".$_POST['usd'] / $ZET; ?>" /></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td colspan="4"></td>
    </tr>
</table>
  <p>&nbsp;</p>
  <h1><font color="white">COIN LINKS & SYMBOLS</font></h1>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
<table class="table table-hover" style="height: 1838px;" border="0" width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr><th width="167" style="text-align: center" scope="col">
<h3>Coin/Unit Name</h3>
</th><th width="56" style="text-align: center" scope="col">
<h3>Trade Sign</h3>
</th><th style="text-align: center" scope="col" width="49">
<h3>Trade Symbol</h3>
</th><th width="228" style="text-align: center" scope="col">
<h3>Official Website</h3>
</th></tr>
<tr>
<td>
<h3>Alphacoin</h3>
</td>
<td style="text-align: center;">
<h3>ALP</h3>
</td>
<td style="text-align: center;">
<h3>α</h3>
</td>
<td style="text-align: center;">
<h3><a href="http://com-http.us/ccdir/alf/">com-http.us/ccdir/alf/</a></h3>
</td>
</tr>
<tr>
<td>
<h3>Americoin</h3>
</td>
<td style="text-align: center;">
<h3>AMC</h3>
</td>
<td style="text-align: center;">
<h3>A</h3>
</td>
<td style="text-align: center;">
<h3><a href="http://amccoin.com/resources.html">amccoin.com/</a></h3>
</td>
</tr>
<tr>
<td>
<h3>Anoncoin</h3>
</td>
<td style="text-align: center;">
<h3>ANC</h3>
</td>
<td style="text-align: center;">
<h3>a</h3>
</td>
<td style="text-align: center;">
<h3><a href="https://anoncoin.net/">anoncoin.net/</a></h3>
</td>
</tr>
<tr>
<td>
<h3>Betacoin</h3>
</td>
<td style="text-align: center;">
<h3>BET</h3>
</td>
<td style="text-align: center;">
<h3>ẞ</h3>
</td>
<td style="text-align: center;">
<h3><a href="http://betacoin.org/">betacoin.org/</a></h3>
</td>
</tr>
<tr>
<td>
<h3>BBQcoin</h3>
</td>
<td style="text-align: center;">
<h3>BQC</h3>
</td>
<td style="text-align: center;">
<h3>B</h3>
</td>
<td style="text-align: center;">
<h3><a href="http://bbqcoin.org/">bbqcoin.org/</a></h3>
</td>
</tr>
<tr>
<td>
<h3>Cryptogenicbullion</h3>
</td>
<td style="text-align: center;">
<h3>CGB</h3>
</td>
<td style="text-align: center;">
<h3>₡</h3>
</td>
<td style="text-align: center;">
<h3><a href="https://cryptogenicbullion.org/">cryptogenicbullion.org/</a></h3>
</td>
</tr>
<tr>
<td>
<h3>Cinnamoncoin</h3>
</td>
<td style="text-align: center;">
<h3>CIN</h3>
</td>
<td style="text-align: center;">
<h3>₵</h3>
</td>
<td style="text-align: center;">
<h3><a href="http://cinnamoncoin.org/">cinnamoncoin.org/</a></h3>
</td>
</tr>
<tr>
<td>
<h3>Craftcoin</h3>
</td>
<td style="text-align: center;">
<h3>CRC</h3>
</td>
<td style="text-align: center;">
<h3>c</h3>
</td>
<td style="text-align: center;">
<h3><a href="http://craftcoin.net/">craftcoin.net/</a></h3>
</td>
</tr>
<tr>
<td>
<h3>Ceutsche eMark</h3>
</td>
<td style="text-align: center;">
<h3>DEM</h3>
</td>
<td style="text-align: center;">
<h3>Œ</h3>
</td>
<td style="text-align: center;">
<h3><a href="http://www.deutsche-emark.org/">deutsche-emark.org/</a></h3>
</td>
</tr>
<tr>
<td>
<h3>Dogecoin</h3>
</td>
<td style="text-align: center;">
<h3>DOGE</h3>
</td>
<td style="text-align: center;">
<h3>Đ</h3>
</td>
<td style="text-align: center;">
<h3><a href="http://dogecoin.com/">dogecoin.com/</a></h3>
</td>
</tr>
<tr>
<td>
<h3>Datacoin</h3>
</td>
<td style="text-align: center;">
<h3>DTC</h3>
</td>
<td style="text-align: center;">
<h3>D</h3>
</td>
<td style="text-align: center;">
<h3><a href="http://datacoin.info/index.php?id=index">datacoin.info/</a></h3>
</td>
</tr>
<tr>
<td>
<h3>Elacoin</h3>
</td>
<td style="text-align: center;">
<h3>ELC</h3>
</td>
<td style="text-align: center;">
<h3>e</h3>
</td>
<td style="text-align: center;">
<h3><a href="http://elacoin.org/">elacoin.org/</a></h3>
</td>
</tr>
<tr>
<td>
<h3>Elephantcoin</h3>
</td>
<td style="text-align: center;">
<h3>ELP</h3>
</td>
<td style="text-align: center;">
<h3>Є</h3>
</td>
<td style="text-align: center;">
<h3><a href="http://elephantcoin.wordpress.com/">elephantcoin.wordpress.com/</a></h3>
</td>
</tr>
<tr>
<td>
<h3>Emerald</h3>
</td>
<td style="text-align: center;">
<h3>EMD</h3>
</td>
<td style="text-align: center;">
<h3>E</h3>
</td>
<td style="text-align: center;">
<h3><a href="http://emeraldcoin.wordpress.com/">emeraldcoin.wordpress.com/</a></h3>
</td>
</tr>
<tr>
<td>
<h3>Franko</h3>
</td>
<td style="text-align: center;">
<h3>FRK</h3>
</td>
<td style="text-align: center;">
<h3>Ƒ</h3>
</td>
<td style="text-align: center;">
<h3><a href="http://frankos.org/">frankos.org/</a></h3>
</td>
</tr>
<tr>
<td>
<h3>Feathercoin</h3>
</td>
<td style="text-align: center;">
<h3>FTC</h3>
</td>
<td style="text-align: center;">
<h3>ƒ</h3>
</td>
<td style="text-align: center;">
<h3><a href="http://feathercoin.com/">feathercoin.com/</a></h3>
</td>
</tr>
<tr>
<td>
<h3>Grandcoin</h3>
</td>
<td style="text-align: center;">
<h3>GDC</h3>
</td>
<td style="text-align: center;">
<h3>g</h3>
</td>
<td style="text-align: center;">
<h3><a href="http://grandcoin.org/">grandcoin.org/</a></h3>
</td>
</tr>
<tr>
<td>
<h3>Globalcoin</h3>
</td>
<td style="text-align: center;">
<h3>GLC</h3>
</td>
<td style="text-align: center;">
<h3>G</h3>
</td>
<td style="text-align: center;">
<h3><a href="http://www.global-coin.net/">global-coin.net/</a></h3>
</td>
</tr>
<tr>
<td>
<h3>Krugercoin</h3>
</td>
<td style="text-align: center;">
<h3>KGC</h3>
</td>
<td style="text-align: center;">
<h3>K</h3>
</td>
<td style="text-align: center;">
<h3><a href="http://www.krugercoin.co/home/">krugercoin.co/</a></h3>
</td>
</tr>
<tr>
<td>
<h3>Litecoin</h3>
</td>
<td style="text-align: center;">
<h3>LTC</h3>
</td>
<td style="text-align: center;">
<h3>Ł</h3>
</td>
<td style="text-align: center;">
<h3><a href="https://litecoin.org/">litecoin.org/</a></h3>
</td>
</tr>
<tr>
<td>
<h3>Megacoin</h3>
</td>
<td style="text-align: center;">
<h3>MEC</h3>
</td>
<td style="text-align: center;">
<h3>M</h3>
</td>
<td style="text-align: center;">
<h3><a href="http://www.megacoin.co.nz/">megacoin.co.nz/</a></h3>
</td>
</tr>
<tr>
<td>
<h3>Nanotoken</h3>
</td>
<td style="text-align: center;">
<h3>NAN</h3>
</td>
<td style="text-align: center;">
<h3>n</h3>
</td>
<td style="text-align: center;">
<h3><a href="http://nanotokens.com/">nanotokens.com</a>/</h3>
</td>
</tr>
<tr>
<td>
<h3>Netcoin</h3>
</td>
<td style="text-align: center;">
<h3>NET</h3>
</td>
<td style="text-align: center;">
<h3>п</h3>
</td>
<td style="text-align: center;">
<h3><a href="http://netcoinfoundation.org/">netcoinfoundation.org/</a></h3>
</td>
</tr>
<tr>
<td>
<h3>Noirbits</h3>
</td>
<td style="text-align: center;">
<h3>NRB</h3>
</td>
<td style="text-align: center;">
<h3>П</h3>
</td>
<td style="text-align: center;">
<h3><a href="http://www.noirbits.com/">noirbits.com/</a></h3>
</td>
</tr>
<tr>
<td>
<h3>Novacoin</h3>
</td>
<td style="text-align: center;">
<h3>NVC</h3>
</td>
<td style="text-align: center;">
<h3>N</h3>
</td>
<td style="text-align: center;">
<h3><a href="http://novacoin.org/?COLLCC=964205931&amp;">novacoin.org/</a></h3>
</td>
</tr>
<tr>
<td>
<h3>Orbitcoin</h3>
</td>
<td style="text-align: center;">
<h3>ORB</h3>
</td>
<td style="text-align: center;">
<h3>O</h3>
</td>
<td style="text-align: center;">
<h3><a href="http://orbitcoin.org/">orbitcoin.org/</a></h3>
</td>
</tr>
<tr>
<td>
<h3>Peercoin</h3>
</td>
<td style="text-align: center;">
<h3>PPC</h3>
</td>
<td style="text-align: center;">
<h3>Ᵽ</h3>
</td>
<td style="text-align: center;">
<h3><a href="http://peercoin.net/">peercoin.net/</a></h3>
</td>
</tr>
<tr>
<td>
<h3>Protoshares</h3>
</td>
<td style="text-align: center;">
<h3>PTS</h3>
</td>
<td style="text-align: center;">
<h3>p</h3>
</td>
<td style="text-align: center;">
<h3><a href="http://invictus-innovations.com/protoshares/">invictus-innovations.com/protoshares/</a></h3>
</td>
</tr>
<tr>
<td>
<h3>Quarkcoin</h3>
</td>
<td style="text-align: center;">
<h3>QRK</h3>
</td>
<td style="text-align: center;">
<h3>Q</h3>
</td>
<td style="text-align: center;">
<h3><a href="http://www.qrk.cc/">qrk.cc/</a></h3>
</td>
</tr>
<tr>
<td>
<h3>Realcoin</h3>
</td>
<td style="text-align: center;">
<h3>REC</h3>
</td>
<td style="text-align: center;">
<h3>r</h3>
</td>
<td style="text-align: center;">
<h3><a href="http://www.realcoin.org/">realcoin.org/</a></h3>
</td>
</tr>
<tr>
<td>
<h3>Redcoin</h3>
</td>
<td style="text-align: center;">
<h3>RED</h3>
</td>
<td style="text-align: center;">
<h3>Ɍ</h3>
</td>
<td style="text-align: center;">
<h3><a href="http://redcoin.pw/">redcoin.pw/</a></h3>
</td>
</tr>
<tr>
<td>
<h3>Stablecoin</h3>
</td>
<td style="text-align: center;">
<h3>SBC</h3>
</td>
<td style="text-align: center;">
<h3>S</h3>
</td>
<td style="text-align: center;">
<h3><a href="http://54.242.128.134/stablecoin.net/">54.242.128.134/stablecoin.net/</a></h3>
</td>
</tr>
<tr>
<td>
<h3>Spots</h3>
</td>
<td style="text-align: center;">
<h3>SPT</h3>
</td>
<td style="text-align: center;">
<h3>s</h3>
</td>
<td style="text-align: center;">
<h3><a href="http://www.igotspots.com/">igotspots.com/</a></h3>
</td>
</tr>
<tr>
<td>
<h3>Tagcoin</h3>
</td>
<td style="text-align: center;">
<h3>TAG</h3>
</td>
<td style="text-align: center;">
<h3>T</h3>
</td>
<td style="text-align: center;">
<h3><a href="http://tagcoin.org/">tagcoin.org/</a></h3>
</td>
</tr>
<tr>
<td>
<h3>Terracoin</h3>
</td>
<td style="text-align: center;">
<h3>TRC</h3>
</td>
<td style="text-align: center;">
<h3>Ŧ</h3>
</td>
<td style="text-align: center;">
<h3><a href="http://terracoin.org/">terracoin.org/</a></h3>
</td>
</tr>
<tr>
<td>
<h3>Unobtanium</h3>
</td>
<td style="text-align: center;">
<h3>UNO</h3>
</td>
<td style="text-align: center;">
<h3>U</h3>
</td>
<td style="text-align: center;">
<h3><a href="http://unobtanium.info/">unobtanium.info/</a></h3>
</td>
</tr>
<tr>
<td>
<h3>Worldcoin</h3>
</td>
<td style="text-align: center;">
<h3>WDC</h3>
</td>
<td style="text-align: center;">
<h3>ω</h3>
</td>
<td style="text-align: center;">
<h3><a href="http://worldcoinfoundation.org/">worldcoinfoundation.org/</a></h3>
</td>
</tr>
<tr>
<td>
<h3>Xencoin</h3>
</td>
<td style="text-align: center;">
<h3>XNC</h3>
</td>
<td style="text-align: center;">
<h3>X</h3>
</td>
<td style="text-align: center;">
<h3><a href="http://www.xencoin.com/">xencoin.com/</a></h3>
</td>
</tr>
<tr>
<td>
<h3>Primecoin</h3>
</td>
<td style="text-align: center;">
<h3>XPM</h3>
</td>
<td style="text-align: center;">
<h3>Ψ</h3>
</td>
<td style="text-align: center;">
<h3><a href="http://primecoin.org/">primecoin.org/</a></h3>
</td>
</tr>
<tr>
<td>
<a name="ZET"><h3>Zetacoin</h3>
</td>
<td style="text-align: center;">
<h3>ZET</h3>
</td>
<td style="text-align: center;">
<h3>ζ</h3>
</td>
<td style="text-align: center;">
<h3><a href="http://www.zeta-coin.org/">zeta-coin.org/</a></h3>
</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div class="alert"><h2><span class="glyphicon glyphicon-gift"> Like It? Donate! <input class="h4" name="" type="text" value="DQetB4jMUdFfi8vG4WEEnMuBJ8h6xkv6hv" size="45" readonly="readonly"></span></h2></div>
<script language="Javascript" src="http://dogehoster.com/data/counter.php?page=test"><!--
//--></script>
</body>
</html>