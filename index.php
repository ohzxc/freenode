<?php
$timezone = new DateTimeZone('Asia/Shanghai'); // 设置时区为北京时间
$today = new DateTime('now', $timezone); // 获取当前日期时间
$year = $today->format('Y');
$month = $today->format('m');
$day = $today->format('d');
$url = "https://nodefree.org/dy/" . $year . "/" . $month . "/" . $year . $month . $day . ".txt"; // 拼接URL

// 读取URL对应的文本内容
$content = file_get_contents($url);

// 设置HTTP头信息
header("Content-Type: text/plain");
header("Content-Disposition: attachment; filename=\"" . $year . $month . $day . ".txt\"");

// 输出文本内容
echo $content;
?>
