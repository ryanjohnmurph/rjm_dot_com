<h2>Create Blog Post</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('blog/create') ?>

		<div class="blog_label">
			<label for="title">Title:</label>
		</div>
		
				
		<div class="blog_input">	
			<input type="input" name="title" id="blog_title"/>
		</div>
	
		</br>
		
		<div class="blog_label">
			<label for="tools">Tools:</label>
		</div>
		
		<div id="tools" class="blog_input">
			<input type='button' name="link_button" id="blog_link_button" value='Insert Link' onClick='thisurl = prompt("Please enter a url", ""); document.forms[0].text.value += "<a href=\"" + thisurl + "\">" + thisurl + "</a>"'>
		</div>
		
		</br>
		
		<div class="blog_label">
			<label for="text" class="blog_label">Text:</label>
		</div>
		
		<div class="blog_input">
			<textarea name="text" id="blog_text"></textarea><br />
		
			<div class="blog_submit">
				<input type="submit" name="preview" id="blog_preview" value="Preview Post" />
				<input type="submit" name="submit" id="blog_submit" value="Submit Post" /> 
			</div>
		</div>
		
		</br></br>
		
</form>