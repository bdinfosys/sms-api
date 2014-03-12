<?php
/*
.---------------------------------------------------------------------------.
|  Software: 	SMS - HTTP API BULK SMS Messaging class     	            |
|  Version: 	3.07														|
|  Email: 		sales@bdinfosys.com										    |
|  Info: 		http://www.bdinfosys.com								    |
|  Phone:		+88 018 333 333 39										    |
| ------------------------------------------------------------------------- |
| Copyright (c) 2014, BD Infosys Ltd. All Rights Reserved.                  |
| ------------------------------------------------------------------------- |
| LICENSE:																	|
| Distributed under the General Public License v3 (GPLv3)					|
| http://www.gnu.org/licenses/gpl-3.0.html									|
| This program is distributed AS IS and in the hope that it will be useful	|
| WITHOUT ANY WARRANTY; without even the implied warranty of				|
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.                      |
| ------------------------------------------------------------------------- |
| SERVICES:																	|
| We offer a number of paid services at http//www.bdinfosys.com:            |
| - Bulk SMS / MMS / Premium SMS Services	/ HLR Lookup Service	    	|
| ------------------------------------------------------------------------- |
| HELP:																		|
| - This class requires a valid HTTP API Account. Please email to			|
| sales@bdinfosys.com to get if you don't have already.						|
'---------------------------------------------------------------------------'

/**
 * SMS - HTTP API BULK SMS Messaging class
 * @copyright 2014 BD Infosys Ltd.
 */

require_once('sms.php');									// Include SMS class file.
$bdinfosys_sms=	new sms();									// Create SMS object.
$bdinfosys_sms->username=	'username';				// The HTTP API username of your account. 
$bdinfosys_sms->password=	'password';				// The HTTP API password of your account.
$bdinfosys_sms->showDLR=	1;								// Set to 1 for requesting delivery report 
																					// of this sms. A unique id is returned to use
																					// with your delivery report request.
$bdinfosys_sms->msgtext=	"Hello World";		// The SMS Message text.
$bdinfosys_sms->originator=	'TestAccount';	// The desired Originator of your message. 
$bdinfosys_sms->phone=	'recipient';				// The full International mobile number of the
																					// recipient excluding the leeding +.
echo $bdinfosys_sms->send();								// Call method send() to send SMS Message.

/**
* IMPORTANT: Store the unique id and use it with Automatic DLR Forwarding.
*/