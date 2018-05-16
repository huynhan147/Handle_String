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
			$color = '#'.$this->random_color();
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
	public function random_color_part() {
    return str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
	}
	public function random_color(){
    return $this->random_color_part() . $this->random_color_part() . $this->random_color_part();
	}
	public function ShowString(){
		return $this->output;
	}

}





 ?>