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







ⓐ과 ⓑ의 차를 구해 보세요.<p><p><p><p><p><p>


<p>
<table>
    <tr>
        <td>
        ⓐ : 
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
    ?> 개인 수 
            
            <p>
            ⓑ : 
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
   ; ?> 개인 수 
            
            
            
            
            
            

        </td>
    </tr>
</table>




<p><br><p><br><p><br><p><br>




