<?php
header('Content-Type: application/json');

$data = array('mensagem' => 'Olá do PHP no Vercel!');
echo json_encode($data);
?>
