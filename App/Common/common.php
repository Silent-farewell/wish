<?php

function p ($array) {
	dump($array, 1, '<pre>', 0);
}

/*
发布内容表情替换   用正则替换表情
*/
function replace_phiz ($content) {
	preg_match_all('/\[.*?\]/is', $content, $arr);

	if ($arr[0]) {
		$phiz = F('phiz', '', './Data/');
		foreach ($arr[0] as $v) {
			foreach ($phiz as $key => $value) {
				if ($v == '[' . $value .']') {
					$content = str_replace($v, '<img src="' . __ROOT__ . '/Public/Images/phiz/' . $key . '.gif"/>', $content);
					break;
				}
			}
		}
	}
	return $content;
}

?>