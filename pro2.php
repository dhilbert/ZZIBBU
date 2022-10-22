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










ㅁ 안에 알맞은 소수를 써넣으세요.<p><p><p><p><p><p>


<p>
<table>
    <tr>
        <td>
            10이 <?php $a = 1; $b=19;hd_rand($a,$b) ?>개, 1이 <?php $a = 1; $b=19;hd_rand($a,$b) ?>개,   
            <?php 
                $rand = rand(0,1);
                $digit= rand(0,1);
                if($rand<1){
                    if($digit<1){
                        ?>
                        $\frac{1}{10} $
                        <?php
                    }
                    else{
                         ?>$\frac{1}{100} $ <?php

                    }
                }
                else{
                    if($digit<1){
                        echo "0.1";
                    }
                    else{
                        echo "0.01";

                    }


                }
            
            ?>이 <?php $a = 10; $b=50;hd_rand($a,$b) ?>개인 수는 ㅁ 이다. 
            
            

        </td>
    </tr>
</table>




<p><br><p><br><p><br><p><br>



<p>
            
<?php 
        
        $digit= rand(0,1);            
        if($digit<1){
            ?>
            $\frac{1}{10} $
            <?php
        }
        else{
            echo "0.1";
        }
    ?>이 <?php $a = 1; $b=99;hd_rand($a,$b) ?>개, 
    <?php   
        $digit= rand(0,1);
        if($digit<1){
            ?>
            $\frac{1}{100} $
            <?php
        }
        else{
            echo "0.01";
        }
    ?>이 <?php $a = 1; $b=99;hd_rand($a,$b) ?> 개, 
    <?php   
        $digit= rand(0,1);
        if($digit<1){
            ?>
            $\frac{1}{1000} $
            <?php
        }
        else{
            echo "0.001";
        }
    ?>이 <?php $a = 1; $b=99;hd_rand($a,$b) ?> 
            
            
            
            
            
            
            
            
            
            개인 세 자리 소수를 써보세요. 
            
            



            <p><br><p><br><p><br><p><br>





설명하는 수를 구해 보세요.<p><p><p><p><p><p>


<p>
<table>
    <tr>
        <td>
        <?php   
        
    ?>1 이 <?php $a = 2; $b=9;  $rands = rand($a,$b);
    echo $rands; ;
    $total = $rands;
    ?> 개, 
            
            
    
                     
    <?php 



        
        $digit= rand(0,1);            
        if($digit<1){
            ?>
            $\frac{1}{10} $
            <?php
        }
        else{
            echo "0.1";
        }
    ?>이 <?php $a = 1; $b=99; $rands = rand($a,$b);
    echo $rands; ;
    $total = $total+$rands*0.1;
    
    ?>개, 
    <?php   
        $digit= rand(0,1);
        if($digit<1){
            ?>
            $\frac{1}{100} $
            <?php
        }
        else{
            echo "0.01";
        }
    ?>이 <?php $a = 1; $b=99;$rands = rand($a,$b);
    echo $rands; ;
    $total = $total+$rands*0.1; ?> 개 보다


<?php 
$digit =rand(0,1);
$digit =1;
if($digit<0){
    echo rand(11,50)/10;
    echo "큰수";
}
else{
    $rand_check = rand(11,50)/10;
    while($rand_check>$total){
        $rand_check = rand(11,50)/10;
    }
    echo $rand_check;
    echo "작은수";


}









?>
            
            
            
            
            

        </td>
    </tr>
</table>




<p><br><p><br><p><br><p><br>





<p><br><p><br><p><br><p><br>


