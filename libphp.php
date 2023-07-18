<?php
error_reporting(E_ALL); error_reporting(-1); ini_set('error_reporting', E_ALL);
require __DIR__ . '/vendor/autoload.php'; // remove this line if you use a PHP Framework.
use Orhanerday\OpenAi\OpenAi;

$open_ai = new OpenAi("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");
$chat = $open_ai->chat([
   'model' => 'gpt-3.5-turbo',
   'messages' => [
       [
           "role" => "system",
           "content" => "You are a helpful assistant."
       ],
       [
           "role" => "user",
           "content" => "Who won the world series in 2020?"
       ],
       [
           "role" => "assistant",
           "content" => "The Los Angeles Dodgers won the World Series in 2020."
       ],
       [
           "role" => "user",
           "content" => "Where was it played?"
       ],
   ],
   'temperature' => 1.0,
   'max_tokens' => 4000,
   'frequency_penalty' => 0,
   'presence_penalty' => 0,
]);


var_dump($chat);
echo "<br>";
echo "<br>";
echo "<br>";
// decode response
$d = json_decode($chat);
// Get Content
echo($d->choices[0]->message->content);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>open ai | php testing</title>
</head>
<body>
<h1>Chat GPT API Form</h1>
<form>
<label>Enter Query here...</label><br>
<textarea name="query"></textarea><br>
<input type="submit" value="submit">
</form>
</body>
</html>