Users table
<a href="<?php echo WEBSITE_URL .'/slider_add.php'?>">Add user</a>
<table class="steelBlueCols">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Image</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th>Action</th>
    </tr>
    <?php
    foreach ( $slider as $slider ) {
        ?>
        <tr>
               <th><?php echo $slider['id']; ?></th>
               <th><?php echo $slider['Title']; ?></th>
               <th><?php echo $slider['ImgSrc']; ?></th>
               <th><?php echo $slider['created_at']; ?></th>
               <th><?php echo $slider['updated_at']; ?></th>
               <th>
                   <a href="<?php echo WEBSITE_URL; ?>/edit_slider.php?id=<?php echo $slider['id']; ?>">Edit</a><br>
                   <form action="<?php echo WEBSITE_URL; ?>/delete_slider.php?id=<?php echo $slider['id']?>" method="post">
                       <input type="hidden" name="form_type" value="delete_slider">
                       <input type="submit" value="Delete">
                   </form>
               </th>
           </tr>
        <?php
    }
    ?>
</table>
