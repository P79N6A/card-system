<?php
require_once '../lib/WxPay.Api.php'; if (isset($_REQUEST['bill_date']) && $_REQUEST['bill_date'] != '') { $sp74c02a = $_REQUEST['bill_date']; $sp9d2c4e = $_REQUEST['bill_type']; $sp02dbf9 = new WxPayDownloadBill(); $sp02dbf9->SetBill_date($sp74c02a); $sp02dbf9->SetBill_type($sp9d2c4e); $sp88bc5b = WxPayApi::downloadBill($sp02dbf9); echo $sp88bc5b; die(0); } ?>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1" /> 
    <title>微信支付样例-查退款单</title>
</head>
<body>  
	<form action="#" method="post">
        <div style="margin-left:2%;">对账日期：</div><br/>
        <input type="text" style="width:96%;height:35px;margin-left:2%;" name="bill_date" /><br /><br />
        <div style="margin-left:2%;">账单类型：</div><br/>
        <select style="width:96%;height:35px;margin-left:2%;" name="bill_type">
		  <option value ="ALL">所有订单信息</option>
		  <option value ="SUCCESS">成功支付的订单</option>
		  <option value="REFUND">退款订单</option>
		  <option value="REVOKED">撤销的订单</option>
		</select><br /><br />
       	<div align="center">
			<input type="submit" value="下载订单" style="width:210px; height:50px; border-radius: 15px;background-color:#FE6714; border:0px #FE6714 solid; cursor: pointer;  color:white;  font-size:16px;" type="button" onclick="callpay()" />
		</div>
	</form>
</body>
</html><?php 