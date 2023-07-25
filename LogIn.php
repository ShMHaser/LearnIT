<?php 

session_start();

include("connection.php");
include("functions.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<!DOCTYPE html>
<html >
  <head>
    <title>Log In</title>
    <link href="LogIn.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">
	     <div class="screen">
		       <div class="screen__content">

			          <form class="login" method="post">

				          <div class="login__field">
					              <input type="text" class="login__input" placeholder="User name / Email">
				          </div>

				          <div class="login__field">
					              <input type="password" class="login__input" placeholder="Password">
				          </div>

				          <button class="login__submit">
					              <span class="button__text">Log In</span>
				          </button>

                  <button class="login__submit">
                        <span class="button__text">Create an Account</span>
                  </button>

                </form>

         </div>

		            <div class="screen__background">
                  <span class="screen__background__shape screen__background__shape4"></span>
                  <span class="screen__background__shape screen__background__shape3"></span>
                  <span class="screen__background__shape screen__background__shape2"></span>
                  <span class="screen__background__shape screen__background__shape1"></span>
                </div>
              </div>
            </div>

  </body>

</html>
