<?php
require('gwaf.php'); // Before all your code starts.
$gWAF = new gWAF();
$gWAF->start();
// Done, Protection enabled.
?>
<head>
    <style>
.form-control {
    display: block;
    background-color: #3c3c3c;
    border: 2px solid rgba(9, 146, 243, 0.43);
    border-radius: 4px;
    color: #fff;
    height: 26px;
    max-width: 100%;
    -webkit-box-shadow: none;
    box-shadow: none;
    -webkit-transition: all 300ms linear;
    -moz-transition: all 300ms linear;
    -o-transition: all 300ms linear;
    -ms-transition: all 300ms linear;
    transition: all 300ms linear;
    margin: 3px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;    
}    
.btn {
    display: inline-block;
    padding: 6px 12px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;    
}
.btn-group-xs>.btn, .btn-xs {
    padding: 1px 5px;
    font-size: 12px;
    line-height: 1.5;
    border-radius: 3px;
} 
.btn-danger {
    color: #fff;
    background-color: #d9534f;
    border-color: #d43f3a;
} 
.waves-effect {
    position: relative;
    cursor: pointer;
    display: inline-block;
    overflow: hidden;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -webkit-tap-highlight-color: transparent;
    vertical-align: middle;
    z-index: 1;
    will-change: opacity,transform;
    -webkit-transition: all .3s ease-out;
    -moz-transition: all .3s ease-out;
    -o-transition: all .3s ease-out;
    -ms-transition: all .3s ease-out;
    transition: all .3s ease-out;
} 
.btn-trans.btn-danger {
    border: 1px solid rgba(255,91,91,.2)!important;
    background-color: rgba(255,91,91,.3)!important;
    color: #ff5b5b!important;
}        
    </style>
</head>
<body style="background-color:black;color:white;">
<title>GST WAF Test</title>
<center><img src="https://www.securityteamvpn.com/addsimg/waflogo.png" height="40px" width="auto"></center>
<div align="center">
	<?php
	// This is optional
	if (isset($_POST['csrf'])) {
		// Aright! Form Requested.
		if ($gWAF->verifyCSRF($_POST['csrf'])) {
			echo "Form Validation Completed without Errors or Vulns!<br><br><br>";
			$Post = print_r($_POST);
			echo "<code>". $Post ."</code>";
		} else {
			echo "Invalid CSRF Token!";
		}
	}
	// This is optional
	?>
	<form method="POST">
		Sample Input: <input class="form-control" type="text" name="someinputname" value="Enter Attack" style="border-radius:3px;">
		<br>
		CSRF: <input class="form-control" type="text" name="csrf" value="<?php echo $gWAF->getCSRF(); ?>" style="border-radius:3px;">
		<br>
		<button class="btn btn-danger btn-trans waves-effect btn-xs" type="submit" style="border-radius:3px;">Submit Form POST</button>
	</form>
</div>
</body>
