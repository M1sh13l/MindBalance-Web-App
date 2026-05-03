<?php
require 'db_connect.php';

if (isset($_GET['log_id'])) {
  $log_id = $_GET['log_id'];

  // Query to fetch the log data
  $stmt = $pdo->prepare("SELECT * FROM mood_logs WHERE log_id = ?");
  $stmt->execute([$log_id]);
  $log = $stmt->fetch(PDO::FETCH_ASSOC);

  if ($log) {
    echo json_encode($log);
  } else {
    echo json_encode(['error' => 'Log not found']);
  }
}
?>
