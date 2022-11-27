<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TeramaFLix</title>
    <link rel="stylesheet" href="<?= base_url() ?>/style.css">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>/img/Teramalogo.png">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="flex-div">
        <div class="nav-left flex-div ">
            <img src="<?= base_url() ?>/images/menu.png " alt="" class="menu-icon">
            <img src="<?= base_url() ?>/images/logo.png " alt="" class="logo">
        </div>
        <div class="nav-middle flex-div">
            <div class="search-box flex-div ">
                <input type="text " placeholder="Search ">
                <img src="<?= base_url() ?>/images/search.png " alt=" " srcset=" ">
            </div>
            <img src="<?= base_url() ?>/images/voice-search.png " alt=" " class="mic-icon ">


        </div>
        <div class="nav-right flex-div ">
            <img src="<?= base_url() ?>/images/upload.png " alt=" ">
            <img src="<?= base_url() ?>/images/more.png " alt=" ">
            <img src="<?= base_url() ?>/images/notification.png " alt=" ">
            <img src="<?= base_url() ?>/images/Jack.png " alt=" " class="user-icon ">
        </div>
    </nav>

    <div class="container play-container">
        <div class="row">
            <div class="play-video">
                <div id="played">
                    <?php 
                    if(isset($myVideo)){
                        foreach($myVideo as $key =>$myVideo){
                        
                            ?>
                            <video id="playing" src="<?= base_url() ?>/Videos/<?= $myVideo->video ?>" poster="Thumbnails/<?=$myVideo->image?>" controls autoplay></video>
                            <?php
                        }
                    }
                    ?>
                    <div class="tags">
                        <a href="">#Coding</a> <a href="">#HTML</a> <a href="">#CSS</a> <a href="">#Java script</a>
                    </div>
                    <h3><?=$myVideo->Title?></h3>
                </div>

                <div class="play-video-info">
                    <p>1225 Views &bull; 2 days ago</p>
                    <div>
                        <a href=""><img src="<?= base_url() ?>/images/like.png" alt="">125</a>
                        <a href=""><img src="<?= base_url() ?>/images/dislike.png" alt="">2</a>
                        <a href=""><img src="<?= base_url() ?>/images/share.png" alt="">Share</a>
                        <a href=""><img src="<?= base_url() ?>/images/save.png" alt="">Save</a>
                    </div>
                </div>
                <hr>
                <div class="publisher">
                    <img src="<?= base_url() ?>/images/Jack.png" alt="">
                    <div>
                        <p>Burundi</p>
                        <span>500k subscribes</span>
                    </div>
                    <button type="button">Subscribe</button>
                </div>
                <div class="vid-descripion">
                    <p>Chanel that make eay learnning</p>
                    <p>Subscribe Eay Tutorials to watch more tutorials on we development</p>
                    <hr>
                    <h4>134 Cmments</h4>
                    <div class="add-omment">
                        <img src="<?= base_url() ?>/images/Jack.png" alt=""> <input type="text" placeholder="Write Comment...">
                    </div>
                    <div class="old-comment">
                        <img src="<?= base_url() ?>/images/Jack.png" alt="">
                        <div>
                            <h3>Jack Nicholison <span>2 days ago</span></h3>
                            <p> aglobal computer netork providing a variety of information and communication facilities, Consisting of interconneted networks using standardized communication protocols</p>
                            <div class="acomment-action">
                                <img src="<?= base_url() ?>/images/like.png" alt=""><span>244</span>
                                <img src="<?= base_url() ?>/images/dislike.png" alt=""><span>244</span><span>REPLY</span>
                                <a href="">All replies</a>
                            </div>
                        </div>
                    </div>
                    <div class="old-comment">
                        <img src="<?= base_url() ?>/images/Jack.png" alt="">
                        <div>
                            <h3>Jack Nicholison <span>2 days ago</span></h3>
                            <p> aglobal computer netork providing a variety of information and communication facilities, Consisting of interconneted networks using standardized communication protocols</p>
                            <div class="acomment-action">
                                <img src="<?= base_url() ?>/images/like.png" alt=""><span>244</span>
                                <img src="<?= base_url() ?>/images/dislike.png" alt=""><span>244</span><span>REPLY</span>
                                <a href="">All replies</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sidebar" class="right-sidebar">
                <?php
                    if(isset($video)){
                        foreach($video as $key =>$video){
                            ?>
                            <div class="side-video-list">
                                    <input type="hidden" id="value" name="IdVideo" value="<?=$video->ID?>">
                                   <div class="small-thumbnail"> 
                                    <a href="<?= base_url() ?> /Watch/<?=$video->ID?>">
                                        <img  id="thumbnimg" src="<?= base_url() ?>/Thumbnails/<?= $video->image ?>" alt=""></a>
                                   </div>
                                <div class="vid-info">
                                    <a href=""><?= $video->Title ?></a>
                                    <p><?= $video->Categorie ?></p>
                                    <p>15k Views</p>
                                </div>
                            </div>
                            <?php
                        }
                    }
                ?>
            </div>
        </div>
    <script type="text/javascript">
    $(document).ready(function(){
        $(document).on('click','#thumbn', function(){
            var value = $(this).attr('class');
            if (value != '') {
                $.ajax({
                    url: '<?= base_url('read/play')?>',
                    method: 'post',
                    data: {query:value},
                    success: function(data){
                        $('#played').html(data)
                    }
                })
                $.ajax({
                    url: '<?= base_url('read/list')?>',
                    method: 'post',
                    data: {query:value},
                    success: function(data){
                        $('#sidebar').html(data)
                    }
                })
            } else {
            }
        });
    });
    </script>
</body>

</html>