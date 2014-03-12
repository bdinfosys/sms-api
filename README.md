Bdinfosys SMS API
=========

Send SMS from your website, existing application or create new sms application

  - Send Single SMS
  - Send Multiple SMS
  - Send Unicode SMS

Sample Code

```php
require_once('sms.php');    // Include SMS class file.
$bdinfosys_sms=    new sms();		// Create SMS object.
$bdinfosys_sms->username=	'username';		// The HTTP API username of your account. 
$bdinfosys_sms->password=	'password';		// The HTTP API password of your account.
$bdinfosys_sms->msgtext=	"Hello World"; // The SMS Message text.
$bdinfosys_sms->originator=	'TestAccount';	// The desired Originator of your message 
$bdinfosys_sms->phone=	'recipient';   //(e.g. 8801711382665)
echo $bdinfosys_sms->send();	// Call method send() to send SMS Message.
```



[Details for SMS API Click Here]



[Details for SMS API Click Here]:http://www.bdinfosys.com/sms-api/


    
