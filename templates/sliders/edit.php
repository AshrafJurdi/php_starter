Change
<form action="edit_slider.php?id=<?php echo $slider->id?>" method="post">
    <div class="input-group">
        <label for="Title">Title</label>
        <input type="text" name="Title" id="Title" value="<?php echo $slider->Title; ?>">
    </div>
    <div class="input-group">
        <label for="ImgSrc">Image</label>
        <input type="text" name="ImgSrc" id="ImgSrc" value="<?php echo $slider->ImgSrc; ?>">
    </div>
     <input type="hidden" name="form_type" value="update_slider">
    <input type="hidden" name="slider_id" value="<?php echo $slider->id; ?>">
    <input type="submit" value="Update">
</form>
