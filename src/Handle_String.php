<?php 
namespace Handle_String;
class Handle_String{
	private $output = array();

	public function __construct($arr,$String,$len){
		$arr =array_unique($arr);
		sort($arr);
		$length = strlen($String);
		$lenArr = count($arr);
		$arr2 = array();
		for($j=0;$j<$length;$j++){
			$arr2[$j]= $String[$j];
			}
		for($i= 0; $i< $lenArr;$i++){
			if($i%2==0){
				$color = '#'.$this->doNewColor();
			}else{
				$color = '#'.$this->doNewColorhot();
			}
			for($j=0;$j<count($arr2);$j++){
				if($j==$arr[$i]){
					$arr2[$j]= htmlentities("<span style ='color: $color'>[</span>").$arr2[$j];
				}
				if($j==$arr[$i]+$len-1){
					$arr2[$j]= $arr2[$j].htmlentities("<span span style ='color: $color'>]</span>");
				}
			}
		}
	$this->output = (html_entity_decode(implode($arr2)));

	}
	function doNewColor(){
	$color = dechex(rand(0xFFFF00, 0xFF1493));
	return $color;
	}
	function doNewColorhot(){
	$color = dechex(rand(0x8470FF, 0x006400));
	return $color;
	}
	public function ShowString(){
		return $this->output;
	}

}





 ?>