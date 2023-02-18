<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- style.css  -->
    <link rel="stylesheet" href="STYLE.css">


    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"/>
</svg>

    <title>Hello, world!</title>
  </head>
  <body>
    <section class="form">
        <div class= container-fluid	>
            <div class="row">
                <div class="col-xl-8"  >
                

                  
                   <img src="img/imgmain.jpg" alt="" class = "img-fluid"  >
                   
                  
                 </div>
                 <div class="col-lg-4" >
                    <form action="code.php" method="post">
                    <h1 class="font-weight-bold py-3"> <b>  Sign Up </b> </h1>
                        
                              <div class=labb px-5  >
                              <label  >Full Name</label> 
                              <input type="text" class="form-control" labb name="name" placeholder="name">
                              </div>
                              
                              <div class=labb>
                              <label >Email</label>
                              <input type="Email" class="form-control" name="email" placeholder="Email addess">
                              </div>
                            
                              
                              
                              <div class=labb >
                              <label >Username </label>
                              <input type="text" class="form-control" name="Username" placeholder="Username...">
                              </div>
                              
                              <div class=labb>
                              <label>Password </label>
                              <input type="password"class="form-control" name="Password" placeholder="**********">
                              </div>
                              
                              <div class=labb >
                              <label>Repeat password </label>
                              <input type="password"class="form-control" name="RepeatPassword" placeholder="**********">
                              </div>
                              
                              <div class=labb>
                              
                              <div class="form-check"   >
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                              <label class="form-check-label" for="flexCheckDefault">
                               i agree to the <b>term of user</b>
                              </label>
                              </div>
                              
                              <div id = "btnn">
                              <br>
                              <button type="submit" name = "sb" class ="main">
                              sign up
                              </button>
                              <button type="submit" name="sbB" class="NMAIN" >
                                 sign in
                               <i class="bi bi-arrow-right-short"></i>
                                 </button>



                              </div>   
                              </div>  
                              </div>
                              
                              

                            </div>

                        </div>
                    </form>

                 </div>

            </div>

        </div>

    </section>

    

    

   

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>