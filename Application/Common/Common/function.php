<?php
/**
 * 属性值转换数组
 * @param mixed &$data 属性数组
 * @param string $field 待分割字段名
 * @param bool $empty 是否包含文本框属性
 */
function valToArr(&$data,$field,$empty=false){
	foreach($data as $k=>$v){
		$data[$k][$field] = explode(',',$v[$field]);
		if($empty && count($data[$k][$field])==1){
			unset($data[$k]);
		}
	}
}
