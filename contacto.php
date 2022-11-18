<?php
# Include the Autoloader (see "Libraries" for install instructions)
require 'vendor/autoload.php';
use Mailgun\Mailgun;

# Instantiate the client.
$mgClient = new Mailgun('fb12fa0ecd924e366a7a1c1b39261cf5-2de3d545-16924a94');
$domain = "sandbox135942d4cc284493910e6dfaab12dfce.mailgun.org";

# Make the call to the client.
$result = $mgClient->sendMessage("$domain",
	array('from'    => 'Mailgun Sandbox <postmaster@sandbox135942d4cc284493910e6dfaab12dfce.mailgun.org>',
		  'to'      => 'Heroku <app284077190@heroku.com>',
		  'subject' => 'Hello Heroku',
		  'template'    => 'antonella',
		  'h:X-Mailgun-Variables'    => '{"test": "test"}'));
?>
