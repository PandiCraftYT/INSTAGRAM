<?php
  $db = new PDO('pgsql:host=localhost;dbname=instagram_main', 'user', 'password');

  $data = json_decode(file_get_contents("php://input"), true);
  $content = $data['content'];

  $stmt = $db->prepare("INSERT INTO messages (sender_id, receiver_id, content) VALUES (1, 2, ?)");
  $stmt->execute([$content]);

  echo json_encode(['content' => $content]);
?>