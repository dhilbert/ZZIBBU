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

<script type="text/x-mathjax-config">

MathJax.Hub.Config({

  tex2jax: {inlineMath: [['$','$'], ['\\(','\\)']]}

});

</script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.5/latest.js?config=TeX-MML-AM_CHTML' async></script>

<?php 
    function hd_rand($a,$b){
        $rands = rand($a,$b);
        echo $rands;
    }
?>




다른 수를 설명한 사람을 찾아 이름을 써보세요. 



<p>
<table>
    <tr>
        <td>
            <?php
                $rands = rand(1234,9999);
                $rand_di = rand(0,2);
                $aaaa = array(10,100,1000);
                $want_check = $rands/$aaaa[$rand_di];
         
                $last_array =array();
                $error_check = rand(0,3);
                
                
                
                if($error_check==0){
                    $check =array(100,10,1/10);
                    $error_check = rand(0,2);                    
                    $want_array =array($want_check*$check[$error_check],100);
                    array_push($last_array,$want_array);
                }
                else{
                    $want_array =array($want_check/100,100);
                    array_push($last_array,$want_array);
                }


                
                if($error_check==1){
                    $check =array(100,10,1/100);
                    $error_check = rand(0,2);
                    $want_array =array($want_check*$check[$error_check],10);
                    array_push($last_array,$want_array);
                }
                else{
                    $want_array =array($want_check/10,10);
                    array_push($last_array,$want_array);
                }


                

                
                if($error_check==2){
                    $check =array(100,1/10,1/100);
                    $error_check = rand(0,2);
                    $want_array =array($want_check*$check[$error_check],1/10);

                    $temp_rand = rand(0,1);
                    if($temp_rand==0){
                        $want_array =array($want_check*$check[$error_check],1/10);
                        
                    }
                    else{
                        $want_array =array($want_check*$check[$error_check],"  $ \\frac{1}{10} $  ");
                    }                   
                    array_push($last_array,$want_array);
                }
                else{
                    $temp_rand = rand(0,1);
                    
                    if($temp_rand==0){
                        $want_array =array($want_check*10,1/10);
                    }
                    else{
                        $want_array =array($want_check*10,"  $ \\frac{1}{10} $  ");
                    }
                    array_push($last_array,$want_array);
                }


                
                if($error_check==3){
                    $check =array(10,1/10,1/100);
                    $error_check = rand(0,2);
                    $temp_rand = rand(0,1);
                    if($temp_rand==0){
                        $want_array =array($want_check*$check[$error_check],1/100);
                        
                    }
                    else{
                        $want_array =array($want_check*$check[$error_check],"  $ \\frac{1}{100} $  ");
                    }                   
                    array_push($last_array,$want_array);
                }
                else{
                    $temp_rand = rand(0,1);
                    
                    if($temp_rand==0){
                        $want_array =array($want_check*100,1/100);
                    }
                    else{
                        $want_array =array($want_check*100,"  $ \\frac{1}{100} $  ");
                    }
                    
                    array_push($last_array,$want_array);
                }
                shuffle($last_array);

                $names = array('나연','정연','모모','사나','지효','미나','다연','채영','쯔위');
                shuffle($names);


                for($i = 0 ; $i < 4 ; $i++){
                    echo "<p>";
                    echo " - ".$names[$i];
                    echo " : ";
                    echo $last_array[$i][0]."의".$last_array[$i][1] ;
                    echo "<p>";


                }
            
            
            ?>
        </td>
    </tr>
</table>




<p><br><p><br><p><br><p><br>

ㅁ안에 들어가는 수를 모두 더하면 얼마인지 구해 보세요. <p>

- <?php 
$digit = array(10,100,1000);

$want = rand(1111,9999);
$rand = rand(0,2);

echo $want."은".$want/$digit[$rand]."의 ㅁ배입니다. ";

?><p>

- <?php 
$digit = array(10,100,1000);

$want = rand(1111,9999);
$rand = rand(0,2);

echo $want."은".$want/$digit[$rand]."의 ㅁ배입니다. ";

?>




