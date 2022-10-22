<?php 
    include_once('head.php');
  
?>
<style>
       table, th, td {
    border: 0px solid #bcbcbc;
  }
  table {
    width: 50px;
  }
    </style>

<script type="text/x-mathjax-config">

MathJax.Hub.Config({

  tex2jax: {inlineMath: [['$','$'], ['\\(','\\)']]}

});

</script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.5/latest.js?config=TeX-MML-AM_CHTML' async></script>



ㅁ 안에 알맞은 수를 써넣으세요. <p>

<?php
    $rand = rand(111,999);

    echo $rand."의 ";

    $temp_rand = rand(0,1);

    if($temp_rand==0){
       echo 0.1;        
    }
    else{
        echo "  $ \\frac{1}{10} $  ";
    }                   
    echo "은 ㅁ, ";
    $temp_rand = rand(0,1);

    if($temp_rand==0){
       echo 0.01;        
    }
    else{
        echo "  $ \\frac{1}{100} $  ";
    }                   
    echo "은 ㅁ입니다. ";

?>

<p><br><p><br><p><br><p><br><p><br>
㉠이 나타내는 수는 ㉡이 나타내는 수의 몇 배일까요?

<table>
<tr>   
        <td><?php echo rand(1,9)?> </td> 
        <td><?php $temp = rand(0,9); echo $temp?> </td> 
        <td>. </td> 
        <td><?php echo rand(0,9)?> </td> 
        <td><?php echo $temp?> </td> 
        <td><?php echo rand(1,9)?> </td>        
        
    </tr>   
    <tr>   
        <td></td> 
        <td>㉠ </td> 
        <td> </td> 
        <td> </td> 
        <td> ㉡</td> 
        <td> </td>        
        
    </tr>   
</table>

    <p><br><p><br><p><br><p><br><p><br>
㉠이 나타내는 수는 ㉡이 나타내는 수의 몇 배일까요?

<table>
<tr>   
        <td><?php echo rand(1,9)?> </td> 
        <td><?php $temp = rand(0,9); echo $temp?> </td> 
        <td>. </td> 
        <td><?php echo rand(0,9)?> </td> 
        <td><?php echo $temp?> </td> 
        <td><?php echo rand(1,9)?> </td>        
        
    </tr>   
    <tr>   
        <td></td> 
        <td>㉠ </td> 
        <td> </td> 
        <?php
            $rand = rand(0,2);
            for($i = 0 ; $i <3;$i++){
                if($i==$rand){
                    echo "<td> ㉡</td> ";
                }

            
            else{
                echo "<td> </td> ";
            }
        }

        ?>

        
        
        
        
    </tr>   
    </table>

























