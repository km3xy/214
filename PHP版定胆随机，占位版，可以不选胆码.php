

<legend>PHP版定胆随机，占位版，可以不选胆码：</legend>
 
 核心方法
 
 
<br>
 
 注！注！注!
 没有号码清空返回还原，重选，
 
<br>

可以把自己已选好的中意号码

<br>


全部选中，定胆复选


<br>


也可以把上期号码，全部选中，定胆复选



<br>
<hr>
<br>


其他方法


<br>



 <legend>PHP版定胆随机，最少选一位胆码：</legend>


定胆随机新玩法2023



<br>


方法1#随机定位码定胆



<br>



方法2#




<br>



从1定到35，先抄下来

从1定到33，先抄下来


<br>


然后点入走势图，然后看效果挑

<br>

然后
挑，

然后关连

<h1>
    
    
<br>

<hr>

<br>




<?php



error_reporting(E_ALL^E_NOTICE^E_WARNING);     //php关闭错误报告



/*

注释――必须把php代码放到 form标签内

点击提交按钮不跳转


*/


echo "<br>";


echo "定胆随机后―――>随机的前区号码";


echo "<br>";



//$arr3=$_POST['c'];   //把c数组赋值给arr4





//$y=count($arr3);//获取C数组长度



//$x=mt_rand(1,$y);  //取随机个数



//echo "C数组长度是";



//echo   $y;


//echo "<br>";


//echo "随机个数是";




//echo   $x;



//$xy=$y - $x;  //减法计算



//echo "数组长度减去——随机的个数=";



//echo  $xy;



//echo "<br>";



//$arr33=array_rand($arr3,$xy);


//print_r($arr33);





//echo  "$arr33";

// 只能 echo 出 1个  数字

//echo "<br>";

 


//$join22=join("    ", $arr33);



//echo   "$join22";


//  可以 echo 出 2个或多个数字


//print_r(array_rand($a2,$xy));


//定胆随机核心代码


$at2=$_POST['c'];


echo  "获取数组长度=";


$ty=count($at2);

//获取C数组长度



echo  "$ty";


echo "<br>";



echo  "取随机个数=";



$tx=mt_rand(1,$ty);  //取随机个数



echo "$tx";



echo "<br>";



echo  "减法计算结果=";


echo "<br>";


$txty=$ty- $tx; 


//减法计算


print_r($txty);


echo "<br>";



$a2=array_rand($at2,$txty);


echo  "输出结果集";



echo "<br>";



print_r($a2);



echo "<br>";



//可以print_r 出 2个或多个数字


//echo  "$a2";

// 只能 echo 出 1个  数字

echo "<br>";


//把c数组赋值给a2

//创建a1数组

//用于比较数组得到差集


//得到数组差集前先创建数组赋值给$a1

//得出a1数组和c数组的差集


$a1=array("1"=>"1","2"=>"2","3"=>"3","4"=>"4","5"=>"5","6"=>"6","7"=>"7","8"=>"8","9"=>"9","10"=>"10","11"=>"11","12"=>"12","13"=>"13","14"=>"14","15"=>"15","16"=>"16","17"=>"17","18"=>"18","19"=>"19","20"=>"20","21"=>"21","22"=>"22","23"=>"23","24"=>"24","25"=>"25","26"=>"26","27"=>"27","28"=>"28","29"=>"29","30"=>"30","31"=>"31","32"=>"32","33"=>"33");



$result2=array_diff_assoc($a1,$a2);


//得出a1数组和c数组的差集


//$arr4=$_POST['c'];   //把c数组赋值给arr4


$x=mt_rand(6,8);  //取随机数



$y=count($a2);//获取C数组长度


$xy=$x - $y;  //减法计算




$b5=mt_rand($xy,$xy); //设定位数值




 $arr5=array_rand($result2,$b5);  

 //在勾选号码中随机




//$arr4=$_POST['c'];  


// 把c数组赋值给arr4



$he= array_merge($arr5,$a2); 

//合并arr5和a2数组








sort($he);      //按照顺序排列数组

$hejoin=join("+", $he);   


 //把数组转换成字符串
 
echo  $hejoin;


//输出结果集

echo "<br>";

echo "<br>";


echo "定胆随机后―――>随机的后区号码";

echo "<br>";


echo "<br>";


$arr2=$_POST['b'];   //把b数组赋值给arr2
 




$b1=mt_rand(1,2);  //设定位数值

echo "   ";


 $array_name=array_rand($arr2,$b1);   //在勾选号码中随机

$join2=join("    ", $array_name);


echo $join2;   //输出2个或多个结果集



echo "<br>";


echo $array_name;  //输出1个结果集



echo "<br>";""




 ?>



<a href="dlt_join_dlt_join.php" target="_blank"  style="font-size:38px;">点我，返回复选框，独立版主页</a>



    </form>
  </div>
</div>
​
</body>
</html>
