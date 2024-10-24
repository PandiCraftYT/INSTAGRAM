<?php
  $db = new PDO('pgsql:host=localhost;dbname=instagram_clone', 'user', 'password');

  $stmt = $db->query("SELECT * FROM messages ORDER BY timestamp DESC");
  $messages = $stmt->fetchAll(PDO::FETCH_ASSOC);

  echo json_encode($messages);
?>