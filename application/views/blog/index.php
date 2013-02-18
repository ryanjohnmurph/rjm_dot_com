<div id="blog_header">Blog</div>

<div id="create"><a href="<?php base_url() ?>blog/create">CREATE NEW POST</a></div>
	
<div id="blog_wrapper">
		
	<?php
	foreach ($blog as $blog_item): 
	
	?>
	<div id="post_wrapper">
		<?php 
			$phpdate = new DateTime($blog_item['datetime']);
			$dateformat = $phpdate->format('m/d/Y'); 
			$stt = strtotime($dateformat);
			$date = strtoupper(date("F d, Y", $stt));
		?>
			
		<div id="post_date"><?php echo $date ?></div>
		<div id="post_title"><?php echo $blog_item['title'] ?></div> 
		<div id="post_img_wrapper"><?php echo "<img id='post_img' src='".$blog_item['img']."' />" ?></div>
		<div id="post_main">
			<?php 	
				$summary = substr($blog_item['text'],0,999);
				echo $summary."...";
			?>
			<a id="read_full" href="blog/<?php echo $blog_item['slug'] ?>">(read full post)</a>
		</div>
	</div>
	<?php 
	endforeach 
	?>
</div>