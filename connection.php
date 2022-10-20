<?php
	$conn = pg_connect("postgres://hnrrtrikmoyman:9d112ca9a3b6d06e4fb062eb656fa25fe480d02e34aec9238654d371e434cabf@ec2-54-147-36-107.compute-1.amazonaws.com:5432/d471sfk7dsih5a");
	
    if (!$conn) {
        die("Connection failed");
    }
?>