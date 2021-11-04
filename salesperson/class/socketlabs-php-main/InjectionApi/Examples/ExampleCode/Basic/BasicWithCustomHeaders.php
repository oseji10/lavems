<?php
include_once (__DIR__ . "../../includes.php");

use Socketlabs\Message\BasicMessage;
use Socketlabs\Message\EmailAddress;
use Socketlabs\SocketLabsClient;
 
$client = new SocketLabsClient(exampleConfig::serverId(), exampleConfig::password());

//Build the message
$message = new BasicMessage();

$message->subject = "Sending An Email With Custom Headers";
$message->htmlBody = "<body><strong>Lorem Ipsum</strong></body>";
$message->plainTextBody = "Lorem Ipsum";
$message->from = new EmailAddress("from@example.com");
$message->addToAddress(new EmailAddress("recipient1@example.com", "Recipient #1"));

//Add custom headers to the message
$message->customHeaders = array(
    "My-Header" => "1...2...3...",
    "Example-Type" => "BasicWithCustomHeaders",
);

//Create the client and send the message
$response = $client->send($message);