
<div id="friends">
    <?php
        $image = "images/else.jpg"; // Default image

        if ($FRIEND_ROW['gender'] == "male") {
            $image = "images/man.jpg";
        } elseif ($FRIEND_ROW['gender'] == "Female" || $FRIEND_ROW['gender'] == "Non-binary") {
            $image = "images/woman.jpg";
        }
        if(file_exists($FRIEND_ROW['profile_image']))
        {
            $image = $image_class->get_thumb_profile($FRIEND_ROW['profile_image']);
        }
    ?>
    <a href="profile.php?id=<?php echo $FRIEND_ROW['userid']; ?>">
        <img id="friends_img"src="<?php echo $image  ?>">
        <br>
        <?php echo $FRIEND_ROW['first_name'] . " " . $FRIEND_ROW['last_name'] ?>
    </a>
</div>

<!--<div id="friends">
    <img id="friends_img"src="tyler.3.jpg">
    <br>
    Dr. TC 
</div>

<div id="friends">
    <img id="friends_img"src="tyler.4.jpg">
    <br>
    Graduation Bear 
    </div>

    <div id="friends">
    <img id="friends_img"src="tyler.5.jpg">
    <br>
    ACE 
</div>-->