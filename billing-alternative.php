<?php
require_once('auth.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars(APP_NAME); ?>: Alternative Billing</title>
    <link href="stylesheets/user_styles.css" rel="stylesheet" type="text/css" />
    <script language="JavaScript" src="validation/user.js"></script>
</head>
<body>
<div id="page">
    <div id="menu">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="foodzone.php">Food Zone</a></li>
            <li><a href="specialdeals.php">Special Deals</a></li>
            <li><a href="member-index.php">My Account</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
        </ul>
    </div>
    <div id="header">
        <div id="logo"><a href="index.php" class="blockLink"></a></div>
        <div id="company_name"><?php echo htmlspecialchars(APP_NAME); ?> Restaurant</div>
    </div>
    <div id="center">
    <h1>Billing Address</h1>
<hr>
<p>We have found out that you don't have a billing address in your account. Please add a billing address in the form below. It is the same address that will be used to deliver your food orders. Please note that ONLY correct street/physical addresses should be used in order to ensure smooth delivery of your food orders. For more information <a href="contactus.php">Click Here</a> to contact us.</p>
<div style="border:#bd6f2f solid 1px;padding:4px 6px 2px 6px">
    <form id="billingForm" name="billingForm" method="post" action="billing-exec.php?id=<?php echo htmlspecialchars($_SESSION['SESS_MEMBER_ID']); ?>" onsubmit="return billingValidate(this)">
        <table width="300" border="0" align="center" cellpadding="2" cellspacing="0">
            <caption><h3>ADD DELIVERY/BILLING ADDRESS</h3></caption>
            <tr>
                <td colspan="2" style="text-align:center;"><font color="#FF0000">* </font>Required fields</td>
            </tr>
            <tr>
                <th>Street Address </th>
                <td><font color="#FF0000">* </font><input name="sAddress" type="text" class="textfield" id="sAddress" required /></td>
            </tr>
            <tr>
                <th>P.O. Box No </th>
                <td><font color="#FF0000">* </font><input name="box" type="text" class="textfield" id="box" required /></td>
            </tr>
            <tr>
                <th>City </th>
                <td><font color="#FF0000">* </font><input name="city" type="text" class="textfield" id="city" required /></td>
            </tr>
            <tr>
                <th width="124">Mobile No</th>
                <td width="168"><font color="#FF0000">* </font><input name="mNumber" type="text" class="textfield" id="mNumber" required /></td>
            </tr>
            <tr>
                <th>Landline No</th>
                <td><input name="lNumber" type="text" class="textfield" id="lNumber" /></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" name="Submit" value="Add" /></td>
            </tr>
        </table>
    </form>
</div>