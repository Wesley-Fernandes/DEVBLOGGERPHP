<?php
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "http://";
$server = $_SERVER['SERVER_NAME'];
$project_path = str_replace($_SERVER['DOCUMENT_ROOT'], '', dirname($_SERVER['SCRIPT_FILENAME']));
$project_path = str_replace('/post.php', '', $project_path);
$BASE_URL = $protocol . $server . $project_path . '/';
