<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bethany Sibala - Frontend Developer</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/output.css">
</head>
<body>

<!--section 1-->
<div class="h-screen homeBg flex flex-col">
    <nav class="flex p-4">
        <div class="logo">
            <img src="assets/img/logo-light.png" width="150px">
        </div>
        <div class="flex justify-end w-full">
            <ul class="navItems flex items-center space-x-6 text-md">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li class="flex">
                    <button class="border border-sky-500 px-2 py-1 font-semibold">Hire Me</button>
                </li>
            </ul>
        </div>
    </nav>
    <!---->
    <div class="h-screen flex items-end justify-end">
        <div class="flex-col mb-8">            
            <div>
                <h1 class="name">I'm Bethany Sibala.</h1>
            </div>
            <div>
                <span>Frontend Web Developer</span>
            </div>
        </div>
        <div>
            <img class="beth" src="assets/img/beth.png">
        </div>
    </div>
    <!---->
    <div class="h-20 bg-black flex justify-between items-center">
         <div class="github">
            <img src="assets/img/logo-light.png" width="150px">
        </div>
         <div class="linkedin">
            <img src="assets/img/logo-light.png" width="150px">
        </div>
          <div class="facebook">
            <img src="assets/img/logo-light.png" width="150px">
        </div>
         <div class="icon">
            <img src="assets/img/logo-light.png" width="150px">
        </div>
         <div class="icon">
            <img src="assets/img/logo-light.png" width="150px">
        </div>
    </div>

</div>


<!--end of section 1-->
<!--section 2-->
<div class="h-full homeBg flex flex-col items-center space-y-8 pb-8">
    <div class="flex mt-12 justify-center w-full space-x-20">
        <div>
            <img class="img2" src="assets/img/beth.png">
        </div>            
        <div class="w-1/2 space-y-4 mt-10">
            <h2 class="content uppercase">Frontend Developer currently based in the Philippines</h2>
            <h4 class="content w-2/3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis.</h4>
        </div>
    </div>

    <hr>

    <div class="flex justify-center w-full px-16 space-x-8 items-center pt-8">
        <div class="w-1/2 px-8">
            <h2 class="content uppercase">WHAT DO I HELP</h2>
            <h4 class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus..</h4>
            
        </div>
        <div  class="w-1/2 px-8">
           <div class="flex flex-col space-y-10">
                <div class="box bg-gray-700 p-4 flex items-center space-x-4">
                    <img class="icons" src="assets/img/uiDesign.png">
                    <h5 class="content">WordPress Development</h5>
                </div>
                <div class="box bg-gray-600 p-4 flex items-center space-x-4">
                    <img class="icons" src="assets/img/uiDesign.png">
                    <h5 class="content">Frontend Development</h5>
                </div>
                <div class="box bg-gray-500 p-4 flex items-center space-x-4">
                    <img class="icons" src="assets/img/uiDesign.png">
                    <h5 class="content">User Interface Design</h5>
                </div>
            </div>
        </div>
    </div>

</div>
<!--end section 2-->



    
</body>
</html>