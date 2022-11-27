<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="swiper-bundle.min.css">
    <script src="https://cdn.tailwindcss.com" ></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>PROJET AGA</title>
</head>
<body >
    <div class="wrapper max-w-screen px-6 overflow-x-hidden">
         <!--                                            header navBar                                               -->
     <header class=" relative " >
        <div class="headercontainer shadow-lg  pl-6 min-h-min w-[100%] bg-white fixed right-0 lef-0 top-0 z-20">
            <nav class="flex sm:flex-row sm:sticky sm:top-0 flex-col sm:items-center sm:justify-center items-center justify-center space-y-2 pb-2 relative  ">
                <div class="logo flex-initial flex sm:items-center sm:justify-start sm:w-64 sm:h-full w-full items-center justify-center sm:static">
                    <img src="/src/img/logo.png" class="w-13 h-12 my-1  rounded-full " alt="logo">
                    <h1 class="text-gray-700 font-bold text-2xl">LOGO</h1>
                </div>
                <div class="searchDiv sm:flex flex-1  sm:justify-center sm:items-center sm:w-64 sm:h-full hidden w-full items-center justify-center  ">
                    <input type="text" class=" min-w-min h-9 border-none ring-2 ring-blue-700 rounded-l-full pl-5 pr-5 " placeholder="recherche" name="search" >
                    <button class="bg-blue-500 h-10 hover:bg-blue-900 duration-1000  px-4 py-2   sm:mr-5 font-semibold rounded-r-full text-white ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                          </svg>
                    </button>
                </div>
                <div class="buttons flex-initial sm:flex space-x-3 sm:items-center sm:justify-center items-center justify-center w-full sm:w-64 h-full  hidden">
                    <button class=" font-semibold rounded px-4 py-1.5  bg-gradient-to-r from-[#0088ff] to-[#742AFE] duration-3000  p-1 text-white hover:from-[#742AFE] hover:to-[#0088ff] transition ease-in-out  " onclick="Login()">Login</button>
                    <button class=" font-semibold rounded bg-blue-500 px-4 py-1.5 text-white hover:bg-blue-900 duration-1000"  onclick="Register()" >Register</button>
                    <button class="">
                        
                </div>
                <button class="navOpen block sm:hidden absolute left-3 bottom-6 mt-20 " onclick="Openbar()">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                      </svg>
                </button> 
            </nav>
        </div>
        <div class="sideMenubar-Main hidden   shadow-lg   absolute  sm:hidden sm:h-full sm:w-230    min-h-min w-[100%] bg-white   z-20  " >
       <span class="absolute text-white text-3xl top-5 left-4 cursor-pointer" onclick="Openbar()">
    <i class="bi bi-filter-left px-2 bg-gray-900 rounded-md"></i>
  </span>
  <div class="sideMenubar  duration-1000
    p-2 w-[200px]   text-left bg-gray-900 shadow h-screen">
    <div class="text-gray-100 text-xl ">
      <div class="p-2.5 mt-1 flex items-center rounded-md ">
      <i class="bi bi-app-indicator px-2 py-1  bg-blue-600 rounded-md"></i>
        <h1 class="text-[15px]  ml-3 text-xl text-gray-200 font-bold">KABURA Jean Bosco</h1>
        <i class="bi bi-x   cursor-pointer lg:hidden" onclick="Openbar()"></i>
      </div>
      <hr class="my-2 text-gray-600">

      <div>
        <div class="p-2.5 mt-3 flex items-center rounded-md 
        px-4 duration-300 cursor-pointer  bg-gray-700">
          <i class="bi bi-search text-sm "></i>
          <input class="text-[15px] ml-4 w-full bg-transparent focus:outline-none" placeholder="Recherche" />
        </div>

        <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-600">
          <i class="bi bi-house-door-fill"></i>
          <span class="text-[15px] ml-4 text-gray-200">Home</span>
        </div>
        <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-600">
          <i class="bi bi-bookmark-fill"></i>
          <span class="text-[15px] ml-4 text-gray-200">Historique</span>
        </div>
        <hr class="my-4 text-gray-600">
        <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-600">
          <i class="bi bi-envelope-fill"></i>
          <span class="text-[15px] ml-4 text-gray-200">Messages</span>
        </div>

        <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-600">
          <div class="flex justify-between w-full items-center" onclick="dropDown()">
          <h1 class="text-xl m-3 text-left pl-0 font-medium">Categories</h1>
            <span class="text-sm rotate-180" id="arrow">
              <i class="bi bi-chevron-down"></i>
            </span>
          </div>
        </div>
        <div class="submenu leading-7 text-left pl-0 text-sm font-thin mt-2 w-4/5 mx-auto">
        <ul class="flex flex-col pl-3 border-l border-blue-500">
                        <li><a href="#" class="text-xl w-full ">Films</a> </li>
                        <li><a href="#" class="text-xl ">Series</a> </li>
                        <li><a href="#" class="text-xl ">Animes</a> </li>
                        <li><a href="#" class="text-xl ">Demandes</a> </li>
                    </ul>
        </div>
        <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-600">
          <div class="flex justify-between w-full items-center" onclick="dropDown1()">
          <h1 class="text-xl m-3 text-left font-medium">Genre</h1>
            <span class="text-sm rotate-180" id="arrow1">
              <i class="bi bi-chevron-down"></i>
            </span>
          </div>
        </div>
        <div class="submenu1 leading-7 text-left  pl-0 text-sm font-thin mt-2 w-4/5 mx-auto" >
        <ul class="flex flex-col pl-3 border-l border-blue-500">
                        <li><a href="" class="text-xl ">Action</a> </li>
                        <li><a href="" class="text-xl ">Art Martiaux</a> </li>
                        <li><a href="" class="text-xl ">Animation</a> </li>
                        <li><a href="" class="text-xl ">Aventure</a> </li>
                        <li><a href="" class="text-xl ">Comedie</a> </li>
                        <li><a href="" class="text-xl ">Epouvante Horreur</a> </li>
                        <li><a href="" class="text-xl ">Romance</a> </li>
                        <li><a href="" class="text-xl ">Historique</a> </li>
                        <li><a href="" class="text-xl ">Science Fiction</a> </li>
                        <li><a href="" class="text-xl ">Policier</a> </li>
                        <li><a href="" class="text-xl "> Guerre</a></li>
                        <li><a href="" class="text-xl ">Documentaire</a> </li>
                    </ul>

        </div>
        <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-600">
          <div class="flex justify-between w-full items-center" onclick="dropDown2()">
          <h1 class="text-xl m-3 text-left font-medium">Recent</h1>
            <span class="text-sm rotate-180" id="arrow2">
              <i class="bi bi-chevron-down"></i>
            </span>
          </div>
        </div>
        <div class="submenu2 leading-7 text-left text-sm font-thin mt-2 w-4/5 mx-auto" >
        <ul class="flex flex-col pl-3 border-l border-blue-500">
                        <li><a href="#" class="text-xl w-full ">Films</a> </li>
                        <li><a href="#" class="text-xl ">Series</a> </li>
                        <li><a href="#" class="text-xl ">Animes</a> </li>
                        <li><a href="#" class="text-xl ">Demandes</a> </li>
                    </ul>
        </div>
        
        <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-600">
          <i class="bi bi-box-arrow-in-right"></i>
          <span class="text-[15px] ml-4 text-gray-200">Logout</span>
        </div>

      </div>
    </div>
  </div>
</div>

    </header>
       <!--                                               fin header navBar                                               -->

       
      

        
    </div>
    <div class="bg-black bg-opacity-50 absolute inset-0 hidden justify-center items-center z-30" id="Register">
      
        <div class="bg-gray-200 max-w-sm py-2 px-3 rounded shadow-xl text-gray-800 ">
            <form action="" method="post">   
                <h2>REGISTER</h2>
                <?php if(isset($_GET['error'])){ ?>
                    <p class="error"><?= $_GET['error'];?></p>
                <?php } ?>
                <label>Username</label>
                <input type="text" name="uname" placeholder="Username">
                <label>Email</label>
                <input type="text" name="mail" placeholder="Email@gmail....">
                <label>Password</label>
                <input type="password" name="pass" placeholder="">
                <label>Confirm password</label>
                <input type="password" name="cpass" placeholder="">
                <label>Birthday</label>
                <input type="date" name="bday" placeholder="">
                <label>Phone</label>
                <input type="number" name="phone" placeholder="">
                
                <button type="submit" name="register">Next</button>
                <a href="index.php">&#x2302;</a>
            </form>
        </div>
    </div>

                
                

       <script src="swiper-bundle.min.js"></script>
       <script src="index.js"></script>
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

      </script>

<form action="" class=" px-11 my-32 p-5 max-w-4xl mx-auto space-y-10 border border-blue-500 rounded">
   <div class="flex justify-between">
    <div class="">
      <label class="" for="Titre">Titre</label>
      <input class="border border-gray-400 bg-gray-100  rounded focus:outline-none focus:border-blue-600" id="" type="text" name="nom"  autofocus required>
  </div>
  <div class="flex space-x-2">
      <label class="" for="Description">Description</label>
      <textarea class="rounded focus:outline-none focus:border-blue-600 border  border-gray-400  bg-gray-100 " name="" id="" cols="35" rows="3"></textarea> 
   </div>
   </div>

   <div class="flex justify-between">

    <div class="grid grid-cols-1 space-y-2 sm:max-w-lg p-10 bg-white rounded-xl">
      <label class="text-sm font-bold text-gray-500 tracking-wide">Add Covers</label>
  
  <div class="flex flex-col rounded-lg border-4 border-dashed h-55 py-5 px-14 group text-center">
  <div class="h-full w-full text-center flex flex-col items-center justify-center items-center  ">
        <br><br>
      <div id="dropcover" class="flex flex-auto max-h-48 mx-auto -mt-10">
      <img class="has-mask h-30 w-50 object-center" src="images/upl.jpg" alt="freepik image">
      </div>
      <p class="pointer-none text-gray-500 "><span class="text-sm"></span>Glissez-déposez des fichiers ici
        <br /> à partir de votre ordinateur</p>
  </div>
  <label class=" bg-blue-500 text-white font-bold py-2 px-10 rounded-full" for="image">Select file</label><br>
  <input type="file" name="file" id="image" class="hidden" accept="image/*" >
  <img id="img" src="" alt="preview" style="width: 60px; height: 40px;">
  </div>
  
  </div>
  
  
  <div class="grid grid-cols-1 space-y-2 sm:max-w-lg p-10 bg-white rounded-xl">
    <label class="text-sm font-bold text-gray-500 tracking-wide">Add Video</label>
  
  <div class="flex flex-col rounded-lg border-4 border-dashed h-55 py-5 px-14 group text-center">
  <div class="h-full w-full text-center flex flex-col items-center justify-center items-center  ">
        <br><br>
    <div class="flex flex-auto max-h-48 mx-auto -mt-10">
    <img class="has-mask h-30 w-50 object-center" src="images/upl.jpg" alt="freepik image">
    </div>
    <p class="pointer-none text-gray-500 "><span class="text-sm"></span>Glissez-déposez des fichiers ici
      <br /> à partir de votre ordinateur</p>
  </div>
    
  <label class=" bg-blue-500 text-white font-bold py-2 px-10 rounded-full" for="video">Select file</label><br>
  <input type="file" class="hidden" accept="video/*" id="video">
  <video src="" id="viewVideo" alt="preview" style="width: 50px; height: 50px;">
  </div>
  
  </div>
  
  </div>
<br>


 <div class="text-center">
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-10 rounded-full">Upload</button>  
 </div>

 <script>

  var myFile = document.getElementById("video");
  var  video= document.getElementById("viewVideo");
  myFile.onchange = evt => {
 const [file] = myFile.files;
 if(file){
  video.src = URL.createObjectURL(file);
 }
  }

  var Myimage = document.getElementById("image");
  var img = document.getElementById("img");
  Myimage.onchange = evt => {
 const [file] = Myimage.files;
 if(file){
    img.src = URL.createObjectURL(file);
 }
  }
</script>

</body>
</html>
