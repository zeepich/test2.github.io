<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            text-align: center;
        }

    </style>
</head>
<body>
    <h1>Hello World</h1>
    <?php

    echo "Hi<br>";
    echo "<b>testtttt</b>";
    echo "<h1>wowww</h1>";
    
    ?>

    <form action="">
        <h1><label for="">ชื่อ</label>
        <input type="text" name="" id="" value="">
        <label for="">นามสกุล</label>
        <input type="text" name="" id="" value=""></h1>
    </form>

    <?php
    $name = "zee"; //text
    $age = 15;
    echo "<h1>name = ".$name."</h1><br>";
    echo "age = ".$age."<br>";
    echo $age+20;

    echo "<hr>";
    echo gettype($name)."<br>";

    echo "<hr>";
    echo "before = ".gettype($age)."<br>";
    settype($age,"double");
    echo "after = ".gettype($age)."<br>";
    
    echo "<hr>";
    $price = 100.17;
    $shipping = 50.99;

    $total = $price+$shipping;

    echo "before = ".gettype($total)."<br>";
    echo $total."<br>";
    $total=(integer)$total;
    echo "after = ".gettype($total)."<br>";
    echo $total."<br>";

    echo "<hr>";
    $sum = "400.89";
    echo "before = ".gettype($sum)."<br>";
    echo $sum."<br>";
    $sum=(double)$sum;
    echo "after = ".gettype($sum)."<br>";
    echo $sum."<br>";

    echo "<hr>";
    define("pi",3.14);
    $r = 6;
    $area = pi*$r**2;
    echo "area = ".$area." m^2";

    echo "<hr>";
    $total1=null;
    $total2="";
    $total3=0;
    $total4="zee";

    //unset($total4);

    echo "total1 = ".$total1."<br>";
    echo "total2 = ".$total2."<br>";
    echo "total3 = ".$total3."<br>";
    echo "total4 = ".$total4."<br>";
    echo "<br>";

    echo "total1 = ".isset($total1)."<br>";
    echo "total2 = ".isset($total2)."<br>";
    echo "total3 = ".isset($total3)."<br>";
    echo "total4 = ".isset($total4)."<br>";
    echo "<br>";

    echo "total1 = ".empty($total1)."<br>";
    echo "total2 = ".empty($total2)."<br>";
    echo "total3 = ".empty($total3)."<br>";
    echo "total4 = ".empty($total4)."<br>";
    echo "<br>";

    echo "total1 = ".is_null($total1)."<br>";
    echo "total2 = ".is_null($total2)."<br>";
    echo "total3 = ".is_null($total3)."<br>";
    echo "total4 = ".is_null($total4)."<br>";
    echo "<br>";

    echo var_dump($total1)."<br>";
    echo var_dump($total2)."<br>";
    echo var_dump($total3)."<br>";
    echo var_dump($total4)."<br>";

    echo "<hr>";
    $a=500;
    $b="500";
    $c=400;

    var_dump($a==$b); //เท่ากันไหม
    var_dump($a===$b); //เหมือนกันไหม
    var_dump($a<=>$c);
    /* <=> 
    a<b =>-1
    a=b => 0
    a>b => 1 */

    echo "<hr>";
    $name="zee";
    echo $name."tun<br>";
    $name.="pich";
    echo $name."<br>";
    echo $name.=".com<br>";
    echo $name;

    echo "<hr>";
    $a=5;
    //เพิ่มค่า
    echo "ค่าเริ่มต้น = ".$a."<br>";
    echo "เพิ่มค่าแบบ prefix = ".(++$a)."<br>";
    echo "ค่าล่าสุดของ a = ".$a."<br><br>";
    $a=5;    
    echo "ค่าเริ่มต้น = ".$a."<br>";
    echo "เพิ่มค่าแบบ postfix = ".($a++)."<br>";
    echo "ค่าล่าสุดของ a = ".$a."<br><br>";

    //ลดค่า
    $a=5;
    echo "ค่าเริ่มต้น = ".$a."<br>";
    echo "ลดค่าแบบ prefix = ".(--$a)."<br>";
    echo "ค่าล่าสุดของ a = ".$a."<br><br>";
    $a=5;
    echo "ค่าเริ่มต้น = ".$a."<br>";
    echo "ลดค่าแบบ postfix = ".($a--)."<br>";
    echo "ค่าล่าสุดของ a = ".$a."<br><br>";

    echo "<hr>";
    $x=10;
    $y=5;
    $x+=$y; //x=10+5
    echo $x."<br>";
    $x=10;
    $y=5;
    $x-=$y; //x=10-5
    echo $x."<br>";
    $x=10;
    $y=5;
    $x*=$y; //x=10*5
    echo $x."<br>";
    $x=10;
    $y=5;
    $x/=$y; //x=10/5
    echo $x."<br>";
    $x=10;
    $y=5;
    $x%=$y; //x=10%5
    echo $x."<br>";

    echo "<hr>";
    $bal = 1000;
    $withdraw = 1000;
    echo "เงินในบช = ".$bal."<br>";
    if($withdraw<=$bal){
        echo "can <br><br>";
        $bal-=$withdraw;
        echo "ยอดคงเหลือ = ".$bal."<br>";
    }
    echo "คืนบัตร";

    echo "<hr>";
    $bal = 1000;
    $withdraw = -500;

    $a=$withdraw<=$bal;
    $b=$withdraw>0;

    echo "เงินในบช = ".$bal."<br>";
    echo "ถอน = ".$withdraw."<br><br>";
    if($a && $b){
        echo "can <br>";
        $bal-=$withdraw;
        echo "ยอดคงเหลือ = ".$bal."<br>";
    }else{
        echo "ยอดไม่พอ <br>";
    }
    echo "คืนบัตร <br><br>";
    
    if(!($a) || $b){
        echo "can <br>";
        $bal-=$withdraw;
        echo "ยอดคงเหลือ = ".$bal."<br>";
    }else{
        echo "ยอดไม่พอ <br>";
    }
    echo "คืนบัตร";

    echo "<hr>";
    $w=40;
    $h=40;

    if($w && $h >0){
        $area = $w*$h;
        echo "area = ".$area." ตร.นิ้ว";
    }else{
        echo "ต้องป้อนตัวเลขมากกว่า 0";
    }

    echo "<hr>"; //if แบบย่อ
    $w&&$h>0 ? print("area = ".$w*$h." ตร.นิ้ว") : print("ต้องป้อนตัวเลขมากกว่า 0");
    
    echo "<hr>";
    $score=50;
    $grade="";
    if($score>=80){
        $grade="A";
    }else if($score>=70){
        $grade="B";
    }else if($score>=60){
        $grade="C";
    }else if($score>=50){
        $grade="D";
    }else{
        $grade="F";
    }
    echo "score = ".$score." grade = ".$grade;

    echo "<hr>";
    $year = 5;
    switch($year){
        case 5:
            echo "ระยะเวลากู้ = ".$year." ปี คิดดอกเบี้ย 10%";
            break;
        case 10:
            echo "ระยะเวลากู้ = ".$year." ปี คิดดอกเบี้ย 20%";
            break;
        default:
        echo "ไม่เข้าเงื่อนไข";
        }

    echo "<hr>";
    $count=1;
    $limit=10;
    while($count<=$limit){
        echo "รอบที่ ".$count."<br>";
        $count++;
    }
    echo "จบ";

    echo "<hr>";
    $count=1;
    $limit=10;
    
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>รายการอาหาร</h1>
        <ul>
        <?php while($count<=$limit){?>
            <li>รายการที่ <?php echo $count;?></li>
        <?php
            $count++;
        }
        echo "<hr>";
        ?>
        </ul>

        <?php 
        $count=1;
        $limit=10;    
        ?>

        <select name="" id="">
            <?php while($count<=$limit){?>
            <option value="<?php echo $count;?>">รายการที่ <?php echo $count;?></option>
        <?php
            $count++;
        }
        ?>
        </select>

    </body>
    </html>

    <?php 
    
    echo "<hr>";
    for($i=1;$i<=10;$i+=3){
        echo "รอบที่ = ".$i."<br>";
    }

    echo "<hr>";
    for($i=10;$i>=1;$i--){
        echo "รอบที่ = ".$i."<br>";
    }

    echo "<hr>";
    $num=1;
    $lim=5;
    do{
        echo "รอบที่ ".$num."<br>";
        $num++;
    }while($num<=$lim);

    echo "<hr>";
    for($i=1;$i<=5;$i++){
        echo "รอบที่ = ".$i."<br>";
        if($i==3) break;
    }
    echo "end";

    echo "<hr>";
    for($i=1;$i<=5;$i++){
        if($i==3) continue;
        echo "รอบที่ = ".$i."<br>";
        
    }
    echo "end";

    echo "<hr>";
    for($i=1;$i<=5;$i++){
        echo "รอบที่ = ".$i."<br>";
        if($i==3) break;
    }
    exit;
    echo "end";

    ?>
</body>
</html>