<div class="container max-w-full mt-[5rem] min-h-screen    ease-in-out  ">
    <?php include 'sidebar.php'; ?>
    <div id="scrollbar" class="scrollbar  lg:max-w-[80%] max-w-[100%] lg:ml-[20rem]"> 
    <?php include 'modal.php'; ?>
    


                <div class="filmslide  ">
                    <div class="slidecontainer top-4 z-0 swiper ">
                        <div class="swiper-wrapper mb-8 w-[100%] ">
                        <?php 
                            if (isset($mVideo)) {
                                foreach($mVideo as $key => $myVideo){
                        ?>
                          <div class="swiper-slide">
                            <div class="videocontainer ">
                                <div class="  h-[270px]  overflow-hidden">
                                    <a href="<?= base_url() ?>/Watch/<?=$myVideo->ID?>">
                                        <img src="<?= base_url() ?>/Thumbnails/<?=$myVideo->image?>" class="  h-[100%] object-cover">
                                    </a>
                                </div>
                                <h3 class="text-xl  font-medium "><?= substr($myVideo->Title, 0, 20) .'... '?></h3>
                                <span class="text-[13px]"><?= $myVideo->Categorie?></span>
                            </div>
                          </div>
                            <?php
                                }
                            }
                            ?>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                      </div>
                </div>
                <div class="filmcontainer mt-3 gap-[1rem] ">
                
                <?php 
                    foreach($video as $key => $video){
                ?>  
                <div class="videocontainer ">
                    <div class="imag w-[100%] h-[270px]  overflow-hidden">
                        <a href="<?= base_url() ?>/Watch/<?=$video->ID?>">
                        <img src="<?= base_url()?>/Thumbnails/<?=$video->image?>" class="w-[100%]  h-[100%] object-cover" alt="">
                        </a>
                    </div>
                    <h3 class="text-xl  font-medium "><?= substr($video->Title, 0, 20) .'... '?></h3>
                    <span class="text-base"><?= $video->Categorie?></span>
                </div>
                <?php
                }
                ?>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            
        </script>
        