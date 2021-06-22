<?php
var_dump(http_response_code(500));
var_dump(http_response_code());
header("HTTP/1.0 500 Внутренняя ошибка сервера");
?>