
<!DOCTYPE html>
<html>
<head>
	<link href="css/commentStyle.css" rel="stylesheet"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
	<nav>
		<div class="">
			<a class="btn btn-danger m-3 position-absolute" href="./"> GERİ</a>
		</div>
	</nav>
	<div class="comment_block" style="margin-bottom: 100px;">
		<?php
		include 'baglan.php';
		$icerik=$db->prepare("select * from icerikler where seo=:seo");
		$icerik->execute(array('seo' => $_GET['seo']));
		$icerikgetir=$icerik->fetch(PDO::FETCH_ASSOC);
		?>
		<div style="text-align: center;">
			<img src="<?php echo $icerikgetir['img'];?>" width="100%">
			<div class="sub">
				<a href="<?php echo $icerikgetir['seo'];?>"><?php echo $icerikgetir['konu'];?></a>
			</div><br>
			<p class="metin"><?php echo $icerikgetir['metin'];?></p>
			<p class="metin">Tarih: <?php echo ($icerikgetir['icerik_tarih']);?></p>
		</div>
		<div class="create_new_comment">
			<form method="POST" id="yorum">
				<div class="input_comment">
					<input class="form-control mt-3" type="text" id="kullanici_ad" name="kullanici_ad" placeholder="Kullanıcı Adı">
				</div>		 	<div class="input_comment">
					<input class="form-control mt-3" type="mail" id="mail" name="mail" placeholder="Mail Adresi">
				</div>		 	<div class="input_comment">
					<textarea class="form-control mt-3" type="text" id="yorum_text" name="yorum" placeholder="Yorumunuz.."></textarea>
					<input type="hidden" name="icerik_id" value="<?php echo $icerikgetir['id'];?>">
					<input type="hidden" id="yorum_alt" name="yorum_alt" value="<?php if(isset($_GET["comment"])){echo $_GET['comment'];}  ?>">
				</div>
				<div class="input_comment">
					<input class="mt-3" type="button" name="ekle" id="ekle" value="Yorum Yap">
				</div>
			</div>
			<div class="new_comment">
				<ul class="user_comment">
					<?php 
function yorum($id,$array,$alt){ 
						global $db;
  if(!empty($id)){ 
  	$comment = array("all" => array(),
  		"alt" => array()
    );
  	$yorum=$db->prepare("SELECT * FROM yorumlar WHERE icerik_id=:icerik_id ORDER BY tarih DESC");
  	$yorum->execute(array("icerik_id" => $id));
  	while($liste = $yorum->fetch(PDO::FETCH_ASSOC)){
  if($liste["yorum_alt"] > 0){ 
  	$comment["alt"][$liste["yorum_alt"]][$liste["id"]] = $liste;

  }else{
  	$comment["all"][$liste["id"]] = $liste;
  }
}
  $for = $comment["all"];
  $alt = $comment["alt"];
  }else{
  	$for= $array;
  }
  foreach($for as $liste)
  	{if(isset($liste["id"])){
  		?>
  		<li id="<?php echo $liste["id"]; ?>">
  			<div class="comment_body">
  				<i class="fa fa-pencil"></i> <span class="user"><?php echo $liste["kullanici_ad"]; ?></span><p><?php echo $liste["yorum"]; ?></p>
  			</div>
  			<div class="comment_toolbar">
  				<div class="comment_details">
  					<ul>
  						<li><i class="fa fa-clock-o"></i> <?php echo date("H:i:s",strtotime($liste["tarih"])); ?></li>
  						<li><i class="fa fa-calendar"></i> <?php echo date("Y-m-d",strtotime($liste["tarih"])) ?></li>
  						<li><i class="fa fa-comment"></i><a href="?comment=<?php echo $liste["id"]; ?>">Yanıtla</a></li>

  					</ul>
  				</div>
  			</div>
  			<?php if (isset($alt[$liste["id"]]) ) {
  				echo "<ul class='user_comment ' style='width:80%;'>";
			 		yorum("",$alt[$liste["id"]],$alt);
			 		echo "</ul>";
			 	} ?>
			 </li>
			<?php }}} 
yorum($icerikgetir['id'],"","");
?>
</ul>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>
<script type="text/javascript">
	$("#ekle").on("click",function () {
		var yorum = $("#yorum").serialize();
		$.ajax({
			url:"yorum.php",
			type:"POST",
			data:yorum,
			dataType:"JSON",
			success:function(argument) {
				if (argument.yorum_alt == 0) {
					$(".user_comment").html(argument.html + $(".user_comment").html());	
				}else{
					$("#"+argument.yorum_alt).html($("#"+argument.yorum_alt).html() + "<ul class='user_comment ' style='width:80%;'>"+  argument.html +"</ul>");	
				}
				$("#kullanici_ad").val('');
				$("#mail").val('');
				$("#yorum_text").val('');
				$("#yorum_alt").val('');
			}
		});
	});
</script>
</body>
</html>
