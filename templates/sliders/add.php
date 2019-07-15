Add user
<form action="slider_add.php" method="post">
    <div class="input-group">
        <label for="name">Title</label>
        <input type="text" name="Title" id="title" value="">
    </div>
	<div class="input-group">
        <label for="email">Image</label>
        <input type="text" name="ImgSrc" id="image" value="">
    </div>
   
	<input type="hidden" name="form_type" value="create_slider">
    <input type="submit" value="Update">
</form>
