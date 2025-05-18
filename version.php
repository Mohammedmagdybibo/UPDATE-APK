<?php
header('Content-Type: application/json');

$data = [
    "version" => "1.0.3",
    "update_url" => "https://bibo1010.blogspot.com/?m=1",
    "message" => "تم إصدار تحديث جديد، من فضلك قم بالتحميل 💌"
];

echo json_encode($data);
?>
