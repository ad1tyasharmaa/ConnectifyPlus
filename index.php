<?php

    //unset($_SESSION['connectifyplus_userid']);

    include("classes/autoload.php");

    $login = new Login();
    $user_data = $login->check_login($_SESSION['connectifyplus_userid']);


?>

<!DOCTYPE html>
    <html>
    <head>
        <title>Profile | ConnectifyPlus</title>
    </head>

    <style type="text/css">
        
        #blue_bar{

            height: 50px;
            background-color: #405d9b;
            color: #147dbd;
        }

          #search_box {
            width: 400px;
            height: 30px;
            border-radius: 5px;
            border: none;
            padding: 4px 10px 4px 10px;
            font-size: 14px;
            background-image: url('search.png');
            background-repeat: no-repeat;
            background-position: right 10px center;
            background-size: 16px 16px;
            margin: auto;
        } 

        #profile_pic{
            width: 150px;
            border-radius: 13%;
            border: solid 2px white;

        } 

        #menu_buttons{

            width: 100px;
            display: inline-block;
            margin: 2px;

        }

        #friends_img{
            width: 75px;
            float: left;
            margin: 8px;
        }

        #friends_bar{
            min-height: 400px;
            margin-top: 20px;
            color: #405d9b;
            padding: 8px;
            text-align: center;
            font-size: 20px;
            
        }

        #friends{
            clear: both;
            font-size: 12px;
            font-weight: bold;
            color: 147dbd;
        }

        textarea{

            width: 100%;
            border: none;
            font-family: tahoma;
            font-size: 14px;
            height: 60px;
        }

        #post_button{
            float: right;
            background-color: #d0d890;
            color: white;
            padding: 4px;
            font-size: 14px;
            border: none;
            border-radius: 2px;
            width: 50px;

        }

        #post_bar{
            margin-top: 20px;
            background-color: white;
            padding: 10px;
        }

        #post{
            padding: 4px;
            font-size: 13px;
            display: flex;
            margin-bottom: 20px;
        }

    </style>

    <body style="font-family: tahoma; background-color: #d0d8e4;">
        <br>
        <?php include
        ('header.php'); ?>
        
        <!--cover area-->
        <div style="width: 800px;margin: auto;min-height: 400px;">

            <!--below cover-->
            <div style="display: flex;">

                <!--friends area-->
                <div style="min-height: 400px;flex:1 ;">
                    
                    <div id="friends_bar">
                        <img src="tyler.1.jpg" id="profile_pic"><br>
                        <a href="profile.php" style="text-decoration: none;">
                            <?php echo $user_data['first_name'] . "<br> " . $user_data['last_name']?>
                        </a>

                        
                    </div>

                </div>

                <!--post area-->
                <div style="min-height: 400px;flex:2.5;padding:20px;padding-right: 0px;">

                    <div style="border: solid thin #aaa; padding: 10px;background-color: white;">
                        <textarea placeholder="What's on your mind ?"></textarea>
                        <input id="post_button"type="Submit" value="Post">
                        <br>
                    </div>

                    <!--posts area--> 
                    <div id="post_bar">

                        <div id="post">
                            <div>
                                <img src="tyler.7.jpg" style="width: 75px;margin-right: 4px;">
                            </div>
                            <div>
                                <div style="font-weight: bold;color: #405d9b;">Pancakegoblin</div>
                                pancakegoblin turned breakfast into a wild show. He slapped a stack of pancakes on his noggin with a cheeky smirk. The golden pile wobbled like crazy up there. He sliced into the top flapjack, and syrup oozed down in a sticky waterfall. The sweet smell took over the room. He flicked his fork to snag a syrup-drenched chunk and pulled off a tricky move to get it in his mouth. Every bite felt like winning a game of balance and taste. His eyes sparkled with glee at how ridiculous the whole thing was. Folks might see this as a wacky stunt, but for Tyler, it spiced up the boring old breakfast routine with a dash of fun and pizzazz.
                                <br><br>
                                <a href="">Like</a> . <a href="">Comment</a> . <span>July 4 2024</span>

                            </div>         
                        </div>

                        <!--post no2-->
                        <div id="post">
                            <div>
                                <img src="tyler.8.jpg" style="width: 75px;margin-right: 4px;">
                            </div>
                            <div>
                                <div style="font-weight: bold;color: #405d9b;">EggnogtheSecond</div>
                                eggywolf, the rule-breaker, landed in a wacky pickle. A perfect omelet sat on his noggin. He reached up - classic eggywolf move - and pinched the fluffy edge. Down it went into his mouth. Boy, did that omelet pack a punch! Veggies of all hues and gooey cheese made it a taste sensation. He chomped again, eyes all . That's eggywolf for ya - wild ideas meets cheeky rebel. Leave it to him to jazz up a boring breakfast into something you'd never forget!
                                <br><br>
                                <a href="">Like</a> . <a href="">Comment</a> . <span>July 4 2024</span>
                            </div>    
                        </div>

                        <!--post 3-->
                        <div id="post">
                            <div>
                                <img src="tyler.9.jpg" style="width: 75px;margin-right: 4px;">
                            </div>
                            <div>
                                <div style="font-weight: bold;color: #405d9b;">Cabbagepatchbastard</div>
                                cabbagepatchbastard, ever the eccentric, sat with a mischievous grin. Perched on his head was an intricate arrangement of cabbage leaves, resembling a whimsical crown—part of his latest creative endeavor. As curious onlookers whispered and pointed, Tyler reached up and plucked a particularly crisp leaf from the cabbage patch adorning his head. With a playful glint in his eye, he took a crunchy bite, the fresh, slightly bitter taste mingling with his laughter. This unconventional snack, consumed with characteristic flair, was yet another reminder of Tyler's unique approach to life, transforming the mundane into the extraordinary.
                                <br><br>
                                <a href="">Like</a> . <a href="">Comment</a> . <span>July 4 2024</span>
                            </div>    
                        </div>

                 
                    </div> 
              
                </div>
            </div>

        </div>
    </body>
    
</html>