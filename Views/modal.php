<div class="bg-black bg-opacity-50 h-full  fixed inset-0 hidden justify-center items-center z-30" id="Login">
        <div class="relative max-h-screen ml-50 bg-white lg:w-4/12 rounded-lg">
            <div class="m-auto py-1 px-1 sm:p-21  w-10/12">
                <div class="space-y-4 items-center pt-6 ">
                   <div class="px-40 flex flex-row  items-center ">
                    <img src="<?= base_url() ?>/img/Teramalogo.png" class="w-11 h-11 " alt="logo">
                    <button class="text-slate-600 cursor-pointer ml-36 text-lg rounded-full bg-gray-200 p-2" onclick="CloseLogging()">X</button>
                   </div>
                    <p class="font-medium text-lg text-gray-600 text-center ">Welcome to TeramaFLix ! Login first</p>
                </div>
                
                <div class="mt-12 grid gap-6 sm:grid-cols-2">
                    <button class="h-10 py-3 px-6 rounded-xl bg-cyan-500 transition hover:bg-gray-800 active:bg-gray-600 focus:bg-gray-700">
                        <div class="flex gap-4 items-center justify-center text-white">
                           
                            <span class="block w-max font-medium tracking-wide text-sm text-white">with Facebook</span>
                        </div>
                    </button>
                    <button class="h-10 py-3 px-6 rounded-xl bg-gray-900 transition hover:bg-gray-800 active:bg-gray-600 focus:bg-gray-700">
                        <div class="flex gap-4 items-center justify-center text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5" viewBox="0 0 16 16">
                                <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                            </svg>
                            <span class="block w-max font-medium tracking-wide text-sm text-white">with Github</span>
                        </div>
                    </button>
                </div>

                <div role="hidden" class="mt-12 border-t">
                    <span class="block w-max mx-auto -mt-3 px-4 text-center text-gray-500 bg-white">Or</span>
                </div>

                <form id="login_form" action="<?= base_url() ?>/login" enctype="multipart/form-data" class="space-y-6 py-6" novalidate>
                    <div>
                        <input 
                                type="text" 
                                placeholder="Your Email"
                                name="mail"
                                class="w-full py-3 px-6 ring-1 ring-gray-300 rounded-xl placeholder-gray-600 bg-transparent transition disabled:ring-gray-200 disabled:bg-gray-100 disabled:placeholder-gray-400 invalid:ring-red-400 focus:invalid:outline-none"
                                required
                        >
                        <div class="invalid-feedback">email is required</div>
                    </div>

                    <div class="flex flex-col items-end">
                        <input 
                                type="password"
                                placeholder="Password"
                                name="pass"
                                class="w-full py-3 px-6 ring-1 ring-gray-300 rounded-xl placeholder-gray-600 bg-transparent transition disabled:ring-gray-200 disabled:bg-gray-100 disabled:placeholder-gray-400 invalid:ring-red-400 focus:invalid:outline-none"
                                required
                        >
                        <div class="invalid-feedback">password is required</div>
                        <button type="reset" class="w-max p-3 -mr-3">
                            <span class="text-sm tracking-wide text-blue-600">Forgot password ?</span>
                        </button>
                    </div>

                    <div>
                    <button id="login_btn" class="w-full px-6 py-3 rounded-xl   bg-gradient-to-r from-[#0088ff] to-[#1fc812] duration-3000">
                      <span class="font-semibold text-white text-lg ">Login</span>
                    </button>
                    <span class="text-sm tracking-wide text-blue-600" onclick="create()">Create new account</span>
                        </a>
                    </div>
                </form>
            </div>
        </div>
       
    </div>
    <div class="bg-black bg-opacity-50  h-full  fixed inset-0 hidden justify-center items-center z-30" id="Register">
        <div class="relative max-h-screen ml-50 bg-white lg:w-3/6 rounded-lg">
            <div class="m-auto py-1 px-1 sm:p-21  w-10/12">
                <div class="space-y-4 items-center pt-6 ">
                   <div class="px-64 flex flex-row  items-center ">
                    <img src="<?= base_url() ?>/img/Teramalogo.png" class="w-11 h-11 " alt="logo">
                    <button class="text-slate-600 cursor-pointer ml-56 text-lg rounded-full bg-gray-200 p-2" onclick="CloseRegister()">X</button>
                   </div>
                    <p class="font-medium text-lg text-gray-600 text-center ">Welcome to Registration!</p>
                </div>
                
                <div class="mt-12 grid gap-6 sm:grid-cols-2">
                    <button class="h-10 py-3 px-6 rounded-xl bg-cyan-500 transition hover:bg-gray-800 active:bg-gray-600 focus:bg-gray-700">
                        <div class="flex gap-4 items-center justify-center text-white">
                           
                            <span class="block w-max font-medium tracking-wide text-sm text-white">with Facebook</span>
                        </div>
                    </button>
                    <button class="h-10 py-1 px-6 rounded-xl bg-gray-900 transition hover:bg-gray-800 active:bg-gray-600 focus:bg-gray-700">
                        <div class="flex gap-4 items-center justify-center text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5" viewBox="0 0 16 16">
                                <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                            </svg>
                            <span class="block w-max font-medium tracking-wide text-sm text-white">with Github</span>
                        </div>
                    </button>
                </div>

                <div role="hidden" class="mt-12 border-t">
                    <span class="block w-max mx-auto -mt-3 px-4 text-center text-gray-500 bg-white">Or</span>
                </div>

                <form id="register_form" action="" enctype="multipart/form-data" class="space-y-1 py-1" novalidate>
                    <!-- nom et prenom-->
                    <div class="flex items-center justify-center">
                        <div class="w-9/12 py-3">
                          <input type="text" name="nom" 
                           placeholder="Your FirstName" 
                           required
                           class="h-10 w-11/12 rounded-xl bg-transparent placeholder-gray-600 ring-1 ring-gray-300 transition invalid:ring-red-400 focus:invalid:outline-none disabled:bg-gray-100 disabled:placeholder-gray-400 disabled:ring-gray-200" />
                          <div class="invalid-feedback">Your FirstName is required</div>
                        </div>
                        <div class="w-9/12">
                          <input type="text" name="prenom" 
                          placeholder="Your LastName"
                          required 
                          class="h-10 w-11/12 rounded-xl bg-transparent placeholder-gray-600 ring-1 ring-gray-300 transition invalid:ring-red-400 focus:invalid:outline-none disabled:bg-gray-100 disabled:placeholder-gray-400 disabled:ring-gray-200" />
                          <div class="invalid-feedback">Your LastName is required</div>
                        </div>
                      </div>
                      <!-- password et confirmer-->
                      <div class="flex flex-row items-center justify-center">
                        <div class="w-full py-3">
                          <input type="text" name="password" placeholder="Password "
                          required   
                          class="h-10 w-11/12 rounded-xl bg-transparent placeholder-gray-600 ring-1 ring-gray-300 transition invalid:ring-red-400 focus:invalid:outline-none disabled:bg-gray-100 disabled:placeholder-gray-400 disabled:ring-gray-200" />
                          <div class="invalid-feedback">Password is required</div>
                        </div>
                        <div class="w-full py-3">
                          <input type="text" id="" name="cpassword" placeholder="Confirm" 
                          required
                          class="h-10 w-11/12 rounded-xl bg-transparent placeholder-gray-600 ring-1 ring-gray-300 transition invalid:ring-red-400 focus:invalid:outline-none disabled:bg-gray-100 disabled:placeholder-gray-400 disabled:ring-gray-200" />
                          <div class="invalid-feedback">Password is required</div>
                        </div>
                      </div>
                      <!-- mail et telephone-->
                      <div class="flex flex-row items-center justify-center">
                        <div class="w-full py-3">
                          <input type="mail" name="mail" placeholder="mail "
                          class="h-10 w-11/12 rounded-xl bg-transparent placeholder-gray-600 ring-1 ring-gray-300 transition invalid:ring-red-400 focus:invalid:outline-none disabled:bg-gray-100 disabled:placeholder-gray-400 disabled:ring-gray-200" />
                          
                        </div>
                        <div class="w-full py-3">
                          <input type="tel" id="phone" name="phone" placeholder="telephone" 
                          class="h-10 w-11/12 rounded-xl bg-transparent placeholder-gray-600 ring-1 ring-gray-300 transition invalid:ring-red-400 focus:invalid:outline-none disabled:bg-gray-100 disabled:placeholder-gray-400 disabled:ring-gray-200" />
                        </div>
                      </div>
                      <!-- sexe et naissance-->
                      <div class="flex flex-row items-center justify-center">
                        <div class="w-full py-3">
                          <input type="text" name="sexe" placeholder="Sexe" required
                          class="h-10 w-11/12 rounded-xl bg-transparent placeholder-gray-600 ring-1 ring-gray-300 transition invalid:ring-red-400 focus:invalid:outline-none disabled:bg-gray-100 disabled:placeholder-gray-400 disabled:ring-gray-200" />
                          <div class="invalid-feedback">Sexe is required</div>
                        </div>
                        <div class="w-full py-3">
                          <input type="date" id="naissance" name="naissance" placeholder="date de naissance" required
                          class="h-10 w-11/12 rounded-xl bg-transparent placeholder-gray-600 ring-1 ring-gray-300 transition invalid:ring-red-400 focus:invalid:outline-none disabled:bg-gray-100 disabled:placeholder-gray-400 disabled:ring-gray-200" />
                          <div class="invalid-feedback">birth day is required</div>
                        </div>
                      </div>
                      <!-- sign up-->
                      <div class="flex flex-col items-center justify-center">
                        <button id="register_btn" class="h-10 w-2/6 rounded-xl bg-gradient-to-r from-[#0088ff] to-[#1fc812] py-3 px-6 transition hover:bg-gray-800 focus:bg-gray-700 active:bg-gray-600">
                          <div class="flex items-center justify-center text-white">
                            <span class="block w-max text-sm font-medium tracking-wide text-white">Sign Up</span>
                          </div>
                        </button>
                      </div>
                </form>
                
            </div>
        </div>
       
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
       
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
        function create() {
          CloseLogging()
          Register()
        }
      </script>
      <script type="text/javascript">
    $(document).ready(function(){
        var value;
        $(document).on('keyup','#search', function(){
            value = $(this).val()
            if (value != '') {
                $.ajax({
                    url: '<?= base_url('post/search') ?>',
                    method: 'post',
                    data: {query:value},
                    success: function(data){
                        $('#searchedprop').html(data)
                    }
                })
            } else {
                $('#searchedprop').html('')
            }
      });
      $(document).on('click','.searched', function(){
        if (value != '') {
                $.ajax({
                    url: '<?= base_url('post/searched') ?>',
                    method: 'post',
                    data: {query:value},
                    success: function(data){
                        $('.filmcontainer').html(data)
                        $('#searchedprop').html('')
                    }
                })
            } else {
            }
      });
      $(document).on('click','#searchbtn', function(){
        if (value != '') {
                $.ajax({
                    url: '<?= base_url('post/searched') ?>',
                    method: 'post',
                    data: {query:value},
                    success: function(data){
                        $('.filmcontainer').html(data)
                        $('#searchedprop').html('')
                    }
                })
            } else {
            }
      });
      
    });
    //add new teramaflix user
    $(function(){
        $('#register_form').submit(function (e) { 
            e.preventDefault();
            const values = new FormData(this)
            if(!this.checkValidity()){
                e.preventDefault();
                $(this).addClass('was-validated');
            }else{
                $('#register_btn').text("Registing...");
                $.ajax({
                    url: '<?= base_url('/SignUp') ?>',
                    method: 'post',
                    data: values,
                    contentType: false,
                    cache: false,
                    processData: false,
                    dataType: 'json',
                    success:function(response){
                        if (response.error) {
                            Swal.fire(
                                    'Unloged!',
                                    response.message,
                                    'error'
                            )
                            $("#register_btn").text('Sign Up')
                        }else{
                            var overlay=document.querySelector('#Register');
                            overlay.classList.toggle('hidden');
                            overlay.classList.toggle('flex');
                            $("#register_form")[0].reset()
                            $("#register_form").removeClass('was-validated')
                            Swal.fire(
                                    'Loged!',
                                    response.message,
                                    'success'
                            )
                            Login()
                            console.log(response.sms.ID)
                            $("#register_btn").text('Sign Up')
                            }
                        }
                });
            }
        });
    })
    
    $(function(){
        $('#login_form').submit(function (e) { 
            e.preventDefault();
            const formData = new FormData(this);
            if(!this.checkValidity()){
                e.preventDefault()
                $(this).addClass('was-validated');
            }else{
                $("#login_btn").text('connecting...')
                $.ajax({
                    url: '<?= base_url('/login') ?>',
                    method: 'post',
                    data: formData,
                    contentType: false,
                    cache: false,
                    processData: false,
                    dataType: 'json',
                    success:function(response){
                        if (response.error) {
                            Swal.fire(
                                    'Unloged!',
                                    response.message,
                                    'error'
                            )
                            $("#login_btn").text('Login')
                        }else{
                            var overlay=document.querySelector('#Login');
                            overlay.classList.toggle('hidden');
                            overlay.classList.toggle('flex');
                            $("#login_form")[0].reset()
                            $("#login_form").removeClass('was-validated')
                            Swal.fire(
                                    'Loged!',
                                    response.message,
                                    'success'
                            )
                            $('#session').val(response.sms.ID);
                            $('.buttons').hide();
                            $("#login_btn").text('Login')
                            }
                        }

                });
            }
        });
    })
    $(function(){
        $('#session').change(function (e) { 
            e.preventDefault();
            
        });
    })
    
  </script>
       