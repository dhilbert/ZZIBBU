<?php 
    include_once('head.php');
  
?>
<style>
       table, th, td {
    border: 1px solid #bcbcbc;
  }
  table {
    width: 600px;
  }
    </style>

모눈 종이 전체의 크기가 1이라고 할 대, 색칠한 부분의 크기를 소수로 나타내어 보세요. 
<p><p><p><p><p><p>



<p>
<table >
<?php 
    $rand = rand(30,75);
       for($i=0;$i<10;$i++){
        echo "<tr>";
        for($j=0;$j<10;$j++){
            $temp = $j*10 + $i;
            if($temp<$rand){
                $check0 = floor($rand/10);
                $check1 = floor($temp/10);
                if($check0==$check1){
                    $colors = 'red';
                }
                else{
                    $colors = '#D9E5FF';

                }
                
                

            }else{$colors = '';}


            echo "<td bgcolor='".$colors."'>&nbsp &nbsp &nbsp </td>";


        }
        echo "</tr>";
    }


?>


</table><p><p><p><p><p><p>


<p>
<table >
<?php 
    $rand = rand(30,75);
       for($i=0;$i<10;$i++){
        echo "<tr>";
        for($j=0;$j<10;$j++){
            $temp = $i*10 + $j;
            if($temp<$rand){
                $check0 = floor($rand/10);
                $check1 = floor($temp/10);
                if($check0==$check1){
                    $colors = 'red';
                }
                else{
                    $colors = '#D9E5FF';

                }
                
                

            }else{$colors = '';}


            echo "<td bgcolor='".$colors."'>&nbsp &nbsp &nbsp </td>";


        }
        echo "</tr>";
    }


?>

</table><p><p><p><p><p><p>


















<p>
<table >
<?php 
    $rand = rand(30,75);
       for($i=0;$i<10;$i++){
        echo "<tr>";
        for($j=0;$j<10;$j++){
            $temp = $i*10 + $j+1;
            if($temp<$rand){
                $colors = '#D9E5FF';
            }else{$colors = '';}


            echo "<td bgcolor='".$colors."'>&nbsp &nbsp &nbsp </td>";


        }
        echo "</tr>";
    }


?>
</table><p><p><p><p><p><p>



<p>
<table >
<?php 
    $rand = rand(30,75);
       for($i=0;$i<10;$i++){
        echo "<tr>";
        for($j=0;$j<10;$j++){
            $temp = $j*10 + $i+1;
            if($temp<$rand){
                $colors = '#D9E5FF';
            }else{$colors = '';}


            echo "<td bgcolor='".$colors."'>&nbsp &nbsp &nbsp </td>";


        }
        echo "</tr>";
    }


?>


</table>

