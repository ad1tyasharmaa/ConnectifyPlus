<!--post1-->
<div id="post">
    <div>
    <?php
        $image = "images/else.jpg"; // Default image

        if($user_data['gender'] == "male") {
            $image = "images/man.jpg";
        } elseif ($user_data['gender'] == "Female" || $user_data['gender'] == "Non-binary") {
            $image = "images/woman.jpg";
        }
        if(file_exists($user_data['profile_image']))
        {
            $image = $image_class->get_thumb_profile($user_data['profile_image']);
        }

    ?>

        <img src="<?php echo $image; ?>" style="width: 75px; margin-right: 4px;border-radius: 50%;">
    </div>


    <div style="width:100%;">
        <div style="font-weight: bold; color: #405d9b;">
            <?php 
                echo $user_data['first_name'] . " " . $user_data['last_name']; 
                if($ROW['is_profile_image'])
                {
                    $pronoun = "";
                    if($user_data['gender'] 
                        = "Male")
                    {
                        $pronoun = "his";
                    }
                    elseif($user_data['gender'] = "Female")
                    {
                        $pronoun = "her";
                    }
                    else
                    {
                        $pronoun = "their";
                    }
                    echo "<span style='font-weight:normal;color:dark-grey;'> updated $pronoun profile image.</span>";
                }
                if($ROW['is_cover_image'])
                {
                    $pronoun = "";
                    if($user_data['gender'] 
                        = "Male")
                    {
                        $pronoun = "his";
                    }
                    elseif($user_data['gender'] = "Female")
                    {
                        $pronoun = "her";
                    }
                    else
                    {
                        $pronoun = "their";
                    }
                    echo "<span style='font-weight:normal;color:dark-grey;'> updated $pronoun cover image.</span>";
                }


            ?>
        </div>
        <div>
            <?php echo $ROW['post']; ?>
            <br><br>
            <?php

                if(file_exists($ROW['image']))
                {
                    $post_image = $image_class->get_thumb_post($ROW['image']);
                    echo "<img src= '$post_image' style='width:400px' >";
                } 
                 
            ?>
        </div>
        <div>
            <br>
            <a href="">Like</a> . <a href="">Comment</a> . 
            <span>
                <?php echo $ROW['dates']; ?>
            </span>

            <span style="color: dark darkgrey;float:right;">
                
                Edit . Delete
            </span>

        </div>
    </div>
</div>

