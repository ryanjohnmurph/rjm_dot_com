<?php 
	echo 'This is the blog page. The blog posts will appear below.';?>
	
	</br></br>
	
	<a href="<?php base_url() ?>blog/create">Create a new post</a>
	
	</br></br>
	
	<div id="blog_wrapper">
		
		<?php
		foreach ($blog as $blog_item): 
		?>
		<div id="post_wrapper">
			<?php $phpdate = new DateTime($blog_item['datetime']); $dateformat = $phpdate->format('H:i a, m/d/Y '); ?>
			
			<div id="post_title"><?php echo $blog_item['title'] ?></div> <div id="post_date"><?php echo 'at '.$dateformat ?></div>
			</br>
			<div id="post_main">
				<?php echo $blog_item['text'] ?>
			</div>
			<p>
				<a href="blog/<?php echo $blog_item['slug'] ?>">View post</a>
			</p>
		</div>
		<?php 
		endforeach 
		?>
	</div>