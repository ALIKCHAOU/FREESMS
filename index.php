<?php



	include ( "./src/NexmoMessage.php" );


	/**
	 * To send a text message.
	 *
	 */

	// Step 1: Declare new NexmoMessage.
	$nexmo_sms = new NexmoMessage('e2392251', 'VyAHexNC26sabgOQ');

	// Step 2: Use sendText( $to, $from, $message ) method to send a message. 
	$info = $nexmo_sms->sendText( '+21654079859', 'ALIISYOUBOSS', 'hello form the other side  !' );

	// Step 3: Display an overview of the message
	echo $nexmo_sms->displayOverview($info);

	// Done!

?>