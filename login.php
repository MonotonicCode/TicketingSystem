<?php
session_start();
$con = mysqli_connect("localhost","root","","tickets");
$un = $_POST['un'];
$p = $_POST['pass'];
$t = mysqli_query($con,"SELECT * FROM user_details WHERE USER_NAME = '$un'");
if(mysqli_num_rows($t) == 1){
    $t = mysqli_fetch_assoc($t);
    if($t['PASSWORD'] == $p){
        $_SESSION['li'] = "yep";
        $_SESSION['username'] = $un;
        echo "Done";
        echo "<script>location.href = 'index.php'</script>";
    }
    else{
        echo "
        <script>alert('Invalid Credentials') </script>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Ticket</title>
            <!-- CSS For Login Page-->
            <style type='text/css'>
              body {
                  background: #f2f2f2;
              }
              .form{
                  margin: auto;
                   margin-top:10%;
                  border-radius: 5px; 
                  text-align: center;
              }
              
              /* .form input{
                  width : 100%;
                  margin: 10px 0;
                  padding:10px;
                  border: none;
                  border-bottom: 2px solid #d9d9d9;
              } */
              .form button{
                  background : #000;
                  width : 100%;
                  margin: 20px 0;
                  padding:10px 0;
                  border-radius: 50px;
                  text-align: center;
                  color: white;
              }
              .card{
                width:40%;
                margin:auto;
              }
              </style>
              <!--End of CSS For Login Page-->
            <!-- Font Awesome -->
        <link
        href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css'
        rel='stylesheet'
        />
        <!-- Google Fonts -->
        <link
        href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap'
        rel='stylesheet'
        />
        <!-- MDB -->
        <link
        href='https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css'
        rel='stylesheet'
        />
            <style type='text/css'>
                .gradient-custom-3 {
          /* fallback for old browsers */
          background: #84fab0;
        
          /* Chrome 10-25, Safari 5.1-6 */
          background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5));
        
          /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
          background: linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5))
        }
        .gradient-custom-4 {
          /* fallback for old browsers */
          background: #84fab0;
        
          /* Chrome 10-25, Safari 5.1-6 */
          background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1));
        
          /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
          background: linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1))
        }
        
        #haaa{
          display: none;
        }
        .card{
          width:80%;
        }
        @media(min-width:1000px){
          #card{
            width: 40%;
          }
        }
            </style>
        </head>
        <body>
          <section class='vh-100' style='background-color: #eee;'>
            <div class='container h-100' id='card'>
              <div class='row d-flex justify-content-center align-items-center h-100'>
                <div class='col-lg-12 col-xl-11'>
                  <div class='card text-black' style='border-radius: 25px;'>
                    <div class='card-body p-md-5'>
                      <div class='row justify-content-center'>
                          <!--<img src='https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp' class='img-fluid' alt='Sample image'>-->
                          <div class='form' id='login'>
                            <p class='text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4'>Login</p>
                            <!-- <h2 style='margin-bottom:20px'>Login</h2> -->
                            <form action='login.php' method='POST'>
                              <div class='d-flex flex-row align-items-center mb-4'>
                                <i class='fas fa-user fa-lg me-3 fa-fw'></i>
                                <div class='form-outline flex-fill mb-2'>
                                  <input type='text' id='form3Example1c' class='form-control' name='un' required='required' />
                                  <label class='form-label' for='form3Example1c'>Username or Email</label>
                                </div>
                              </div>
                              <div class='d-flex flex-row align-items-center mb-4'>
                                <i class='fas fa-lock fa-lg me-3 fa-fw'></i>
                                <div class='form-outline flex-fill mb-0'>
                                  <input type='password' id='form3Example4c' class='form-control' name='pass' required='required' />
                                  <label class='form-label' for='form3Example4c'>Password</label>
                                </div>
                              </div>
                                <button type='submit'>Login</button>
                                
                            </form>
                        </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
              <!-- MDB -->
        <script
        type='text/javascript'
        src='https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js'
        ></script>
        </body>
        </html>";
    }
}
?>