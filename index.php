<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>메트라이프 재단 현황판</title>
    <link rel="icon" type="image/x-icon" href="https://metlifewelfare.org/images/comm/favicon.ico" />
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
<?php
    
    include_once('lib/dbcon.php');
    
















	$total = 0;
	$num1 = 0;
	$num2 = 0;
	$num3 = 0;
	
	$total = 0;
	$want_text = '';
	$sql = "select  * from ia_table where it_trans='수정' order by it_sttu,it_screen";
	$res	=  mysqli_query($real_sock,$sql) or die(mysqli_error($real_sock));
	while($info	 = mysqli_fetch_array($res)){
		$total += 1;
		$num = 0;
        $num += 1;
		$temp_text="<tr>";


		$values = $info['it_sttu'];		$temp_text=$temp_text.Cutie_hd_td($num,$values);$num += 1;
		if($values=='기획중'){$num1 += 1;	}
		elseif($values==' 진행중'){$num2 += 1;	}
		elseif($values==' 완료'){$num3 += 1;	}


		//$values = $info['it_1dep'];		$temp_text=$temp_text.Cutie_hd_td($num,$values);$num += 1;
		//$values = $info['it_2dep'];		$temp_text=$temp_text.Cutie_hd_td($num,$values);$num += 1;
		//$values = $info['it_3dep'];		$temp_text=$temp_text.Cutie_hd_td($num,$values);$num += 1;
		$values = $info['it_screenname'];		$temp_text=$temp_text.Cutie_hd_td($num,$values);$num += 1;
		$values = "<a href='https://metlifewelfare.org".$info['it_url']."' class='btn btn-primary' target='_blank'>보기<a/>";		$temp_text=$temp_text.Cutie_hd_td($num,$values);$num += 1;

		if($info['it_int']==38){
			$values = "<a href='".$info['it_url2']."' class='btn btn-primary' target='_blank'>보기<a/> / 
			<a href='/METLIFE_PROTOTYPE/list/list2.php' class='btn btn-primary' target='_blank'>보기(임의삭제)<a/>
			
			";		$temp_text=$temp_text.Cutie_hd_td($num,$values);$num += 1;
			
			
		}else{
			if($info['it_url2']!=Null){
				$values = "<a href='".$info['it_url2']."' class='btn btn-primary' target='_blank'>보기<a/>";		$temp_text=$temp_text.Cutie_hd_td($num,$values);$num += 1;
			}else{
				$values = "공사중";		$temp_text=$temp_text.Cutie_hd_td($num,$values);$num += 1;			
			}
		}
		

		
		if($info['it_result']==""){
			$values = "개발중";
		}
		else{
			$values = "<a href='".$info['it_result']."' class='btn btn-primary' target='_blank'>보기<a/>";

		}
		$temp_text=$temp_text.Cutie_hd_td($num,$values);$num += 1;		
		$values = $info['it_comment'];		$temp_text=$temp_text.Cutie_hd_td($num,$values);$num += 1;





		$temp_text=$temp_text."</tr>";
		$want_text = 	$want_text.$temp_text;
	}	
		$num1 += 0;
		$num2 += 5;
		$num3 += 0;
		$total += 5;


	?>
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">프로토 타입 기준</h1>
			</div>
		</div><!--/.row-->
		<div class="row">
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-blue panel-widget ">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
						<div class="large"><?php echo 	$total ?></div>
							<div class="text-muted">총 화면본수</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-orange panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked empty-message"><use xlink:href="#stroked-empty-message"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
						<div class="large"><?php echo 	$num1 ?></div>
							<div class="text-muted">기획중</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-teal panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php echo 	$num2 ?></div>
							<div class="text-muted">진행중</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-red panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked app-window-with-content"><use xlink:href="#stroked-app-window-with-content"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php echo 	$num3 ?></div>
							<div class="text-muted">완료</div>
						</div>
					</div>
				</div>
			</div>
			
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">가이드</h1>
				<a href = "/METLIFE_PROTOTYPE/biz/environment/check.php">가이드</a>
			</div>
		</div><!--/.row-->



		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">사용자 페이지 현황판</h1>
			</div>
		</div><!--/.row-->
        <div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					
					<div class="panel-body">
						<table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
                                <?php
                                    $num = 0;
                                    $num += 1;
									$values = "상태";
                                    index_table_th($num,$values);
									  /*
									$num += 1;
                                    $values = "1depth";
                                    index_table_th($num,$values);
                                 
									$num += 1;
                                    $values = "2depth";
                                   // index_table_th($num,$values);
                                    $num += 1;
                                    $values = "3depth";
                                    index_table_th($num,$values);
									*/
                                    $num += 1;
                                    $values = "화면명";
                                    index_table_th($num,$values);
                                    $num += 1;
                                    $values = "기존 URL";
                                    index_table_th($num,$values);
                                    $num += 1;
                                    $values = "신규";
                                    index_table_th($num,$values);
                                    $num += 1;
                                    $values = "산출물";
                                    index_table_th($num,$values);
									$num += 1;
                                    $values = "코멘트";
                                    index_table_th($num,$values);
                                
                                ?>
						        
						        
						    </tr>
						    </thead>
                            <tbody>
							
						        <?php
								echo $want_text;
								
								?>
                            </tbody>
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->	


		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">관리자 페이지 현황판</h1>
				<p>
				<p>https://211.47.7.16:7070/ntapp/auth/login
				<!--
				<p>※ 로그인 정보 : mtlf_admin/ aprkwhs12#$ 
-->
				<p>먼저 로그인 확인 가능 
				<p>

			</div>
		</div><!--/.row-->
        <div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					
					<div class="panel-body">
						<table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
                                <?php






                                    $num = 0;
                                    $num += 1;
									$values = "상태";
                                    index_table_th($num,$values);
									$num += 1;
                                    $values = "기능명";
                                    index_table_th($num,$values);
                                    $num += 1;
                                    $values = "신규";
                                    index_table_th($num,$values);
									$num += 1;
                                    $values = "산출물";
                                    index_table_th($num,$values);
                                    
									
									$num += 1;
                                    $values = "코멘트";
                                    index_table_th($num,$values);
                                
                                ?>
						        
						        
						    </tr>
						    </thead>
                            <tbody>
							<?php
								
								$want_array = array("진행중","메인 비주얼 관리","/METLIFE_PROTOTYPE/admin/main.php","기능확인 필요","https://211.47.7.16:7070/ntapp/article/main/visual/list");
								index_table_admin3($want_array);						
								$want_array = array("진행중","메인 게시물 관리","/METLIFE_PROTOTYPE/admin/01.main.php","기능확인 필요","https://211.47.7.16:7070/ntapp/article/main/banner/list");
								index_table_admin3($want_array);						
								$want_array = array("진행중","후기 관리","/METLIFE_PROTOTYPE/admin/02.main.php","노출 콘텐츠 확인 필요");
								index_table_admin($want_array);
								$want_array = array("진행중","공지사항 관리","#","노출 콘텐츠 확인 필요");
								index_table_admin2($want_array);
								$want_array = array("진행중","뉴스 관리","#","노출 콘텐츠 확인 필요");
								index_table_admin2($want_array);
						







?>



							
						      
                            </tbody>
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->	


	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/bootstrap-table.js"></script>
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	

</html>
