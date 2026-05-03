<?php
require 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $log_id = $_POST['log_id'];
    $mood = $_POST['mood'];
    $note = $_POST['note'];
    $log_date = $_POST['log_date'];

    // Update the log record in the database
    $stmt = $pdo->prepare("UPDATE mood_logs SET mood = ?, note = ?, log_date = ? WHERE log_id = ?");
    $stmt->execute([$mood, $note, $log_date, $log_id]);

    echo 'success';
}
?>
