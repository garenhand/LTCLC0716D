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
    public function test()
    {
    	echo 'TESST';
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
	
	public function sochan($a)
	{
		$sochan="";
		if($a/2==0)
			return $sochan=$a;
		else
			echo $a ."không là số chẵn" ;

	}
	
	public function giaiphuongtrinhbac2($a,$b,$c)
	{
		$kq="";
		if($a==0)
			return $kq=-$c/$b;
		else
			if($a<0)
			{
				return "Phương trình vô nghiệm";
				return $kq;
			}
			else
				echo "Phương trình có 2 nghiệm phân biệt ".$kq=(sqrc($b+$C)/(2*$a)). "và" .$kq=(sqrc($b-$C)/(2*$a)) ;
		

	}
	

}
?>