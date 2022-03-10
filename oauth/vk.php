<?php

require_once '../cfg/config.php';

ini_set('display_errors', 1);

$code = (string)$_GET['code'];
$state = (string)$_GET['state'];

$coreUrl = sprintf('%s?code=%s&state=%s', $coreHost, $code, $state);

$handle = curl_init($coreUrl);

$headers = [];
curl_setopt($handle, CURLOPT_RETURNTRANSFER, 1);
//curl_setopt($handle, CURLOPT_HEADER, 1);
curl_setopt($handle, CURLOPT_HEADERFUNCTION,
  function ($curl, $header) use (&$headers) {
    $len = strlen($header);
    $header = explode(':', $header, 2);
    if (count($header) < 2) // ignore invalid headers
      return $len;

    $headers[strtolower(trim($header[0]))][] = trim($header[1]);

    return $len;
  }
);

$response = curl_exec($handle);
if ($response === false) {
  file_put_contents('../log/log.txt', 'err:'.curl_error($handle).PHP_EOL, FILE_APPEND);
  exit('There is not any response');
}

file_put_contents('../log/log.txt', 'headers:'.print_r($headers, true).PHP_EOL, FILE_APPEND);

$location = $headers['location'][0];
$query = parse_url($location, PHP_URL_QUERY);
parse_str($query, $args);

if (!isset($args['token'])) {
  exit('There is not any token near here!');
}

setcookie('token', $args['token'], 0, '/', 'teplo.volochai.ru', true, true);
header('Location: https://teplo.volochai.ru');

curl_close($handle);
