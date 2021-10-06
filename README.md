# GST WAF - Web Application Firewall
Original Free Web Application Firewall, Open-Source.
#
# Features
- [x] XSS Vulns Fixed.
- [x] SQL Injection Fixed.
- [x] Anti-Cookie-Steal Method.
- [x] HTML Malicious Code's Vulns Fixed.
- [x] CSRF Easy to use, and validation.
- [x] Block HTML Upgraded.
- [x] Lightweight.
- [x] Array Support, All Bypass fixed.
- [x] Advanced Bot validation, Browser Validation.
- [x] Most Poc's SQLi and XSS.
- [x] Security upgraded.
- [x] Errors supression.
- [x] Cloudflare and BlazingFast Support.

# Sample Usage
```ruby
// Before all your code starts.
require('gWAF.php');
$gWAF = new gWAF();
$gWAF->start();
// Your code below.
```

# Advanced Usage
```ruby
// Before of all your CODE.
require('gWAF.php');
$gWAF = new gWAF();
// Cloudflare Mode [Optional]
$gWAF->useCloudflare();
// BlazingFast Mode [Optional]
$gWAF->useBlazingfast();
// Use Own IP Header [Optional]
$gWAF->customIPHeader('IP-Header');
// Anti-Cookie-Steal Method [Optional]
$gWAF->antiCookieSteal('username'); // For trigger if on PHPSESSID is logged.

// Check separated types.
$gWAF->checkGET();
$gWAF->checkPOST();
$gWAF->checkCOOKIE();
// Your code below.
```

# CSRF Validation Example
Please read demo.php

# Requirements
- [x] Min: PHP5.3 (With common functions)
