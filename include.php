<?php
session_start();
$conn = new mysqli("localhost", "root",NULL,"splitpay");
if ($conn->connect_error) {
die("Database in vacation");
}
