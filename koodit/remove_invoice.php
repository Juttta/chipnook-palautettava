<?php

$invoice_item_id = 2;

$conn = new PDO('mysql:host=localhost; dbname=chinook', 'root', '');

$sql = "DELETE FROM invoice_items WHERE InvoiceLineId = $invoice_item_id";

?>

