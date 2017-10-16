<?php 
/**
 * summary
 */
class Calculato 
{
    /**
     * summary
     */
	 
	public function __construct()
	{
		   
	}
	
	public function hello($world)
	{
		echo 'Hello '.$world;
	}
	public function tinhtong($a,$b)
	{
		$tong=$a+$b;
		return $tong;
	}
	public function tinhhieu($a,$b)
	{
		$hieu=$a-$b;
		return $hieu;
	}
	public function tinhtich($a,$b)
	{
		$tich=$a*$b;
		return $tich;
	}
	public function tinhthuong($a,$b)
	{
		$thuong=$a/$b;
		return $thuong;
	}
}
?>