<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com" ></script>
    <link rel="stylesheet" href="<?= base_url() ?>/swiper-bundle.min.css">
    <link href="./phone/css/demo.css">
    <link href="./phone/css/intlTelInput.css">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>/img/Teramalogo.png">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>TeramaFLix</title>
</head>
<body >
    <div class="wrapper max-w-screen px-6 overflow-x-hidden">
         <!--                                            header navBar                                               -->
     <?php include 'header.php' ?>
       <!--                                               fin header navBar                                               -->

       <div class="container max-w-full mt-[5rem] min-h-screen    ease-in-out  ">
       <?php include 'sidebar.php'; ?>
             <div class="scrollbar  lg:max-w-[80%] max-w-[100%] lg:ml-[20rem]"> 

             <?php include 'modal.php'; ?>


       <div class="filmslide">
       <?php 
       if($video)
        foreach($video as $key => $video){
            ?>
            <div class="flex gap-8 mb-8">
            <a href="<?=base_url()?>/Watch/<?=$video->ID?>">
                <img src="<?=base_url()?>/Thumbnails/<?=$video->image?>" class="rounded-md " height="120" width="240"/>
            </a>
                <div class="flex flex-col">
                    <div><h1 class="text-xl"><?=$video->Title?> </h1></div>
                    <div class="description truncate text-sm"><?=$video->Categorie?></div>
                </div>
            </div>
    <?php }
       ?>
            <div class="flex gap-8 mb-8">
                <img src="img/1.jpg" class="rounded-md " height="120" width="240"/>
                <div class="flex flex-col">
                    <div><h1 class="text-xl">La Casa De Papel </h1></div>
                    <div class="description truncate  text-sm">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae vero architecto ducimus, temporibus vitae dolorem quasi, voluptatem iste quia possimus commodi. Saepe, voluptatem numquam magnam impedit qui ducimus eligendi quas!</div>
                </div>

            </div>
            <div class="flex gap-8 mb-8">
                <img src="img/1.jpg" class="rounded-md" height="120" width="240"/>
                <div class="flex flex-col">
                    <div><h1 class="text-xl">La Casa De Papel </h1></div>
                    <div class="description text-sm">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae vero architecto ducimus, temporibus vitae dolorem quasi, voluptatem iste quia possimus commodi. Saepe, voluptatem numquam magnam impedit qui ducimus eligendi quas!</div>
                </div>

            </div>
            <div class="flex gap-8 mb-8">
                <img src="img/1.jpg" class="rounded-md" height="120" width="240"/>
                <div class="flex flex-col">
                    <div><h1 class="text-xl">La Casa De Papel </h1></div>
                    <div class="description truncate text-sm">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae vero architecto ducimus, temporibus vitae dolorem quasi, voluptatem iste quia possimus commodi. Saepe, voluptatem numquam magnam impedit qui ducimus eligendi quas!</div>
                </div>

            </div>
            <div class="flex gap-8 mb-8">
                <img src="img/1.jpg" class="rounded-md" height="120" width="240"/>
                <div class="flex flex-col">
                    <div><h1 class="text-xl">La Casa De Papel </h1></div>
                    <div class="description truncate text-sm">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae vero architecto ducimus, temporibus vitae dolorem quasi, voluptatem iste quia possimus commodi. Saepe, voluptatem numquam magnam impedit qui ducimus eligendi quas!</div>
                </div>

            </div>
       </div> 

       <script src="<?=base_url()?>/swiper-bundle.min.js"></script>
       <script src="<?=base_url()?>/index.js"></script>
       <script>
        function dropDown() {
            document.querySelector('.submenu').classList.toggle('hidden')
          document.querySelector('#arrow').classList.toggle('rotate-0')
        }
         function dropDown1() {
            document.querySelector('.submenu1').classList.toggle('hidden')
          document.querySelector('#arrow1').classList.toggle('rotate-0')
        }
        function dropDown2() {
            document.querySelector('.submenu2').classList.toggle('hidden')
          document.querySelector('#arrow2').classList.toggle('rotate-0')
        }
    
        function Openbar() {
          document.querySelector('.sideMenubar-Main').classList.toggle('hidden')
        }
        function Login(){
            var overlay=document.querySelector('#Login');
            overlay.classList.toggle('hidden');
            overlay.classList.toggle('flex');

        }
        function Register()
        {
            var overlay=document.querySelector('#Register');
            overlay.classList.toggle('hidden');
            overlay.classList.toggle('flex');
        }
        function CloseLogging(){
            var overlay=document.querySelector('#Login');
            overlay.classList.toggle('hidden');
            overlay.classList.toggle('flex');

        }
        function CloseRegister()
        {
            var overlay=document.querySelector('#Register');
            overlay.classList.toggle('hidden');
            overlay.classList.toggle('flex');
        }

      </script>
</body>
</html>
