<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript">

			function printError(elemId, error) {
    				$(elemId).html(error);
					}

        $(document).ready(function(e){

			$("#signup").on("click",function(e)
			{
				e.preventDefault();
                var username=$("#name").val();
                var password=$("#password").val();
                 var rollno=$("#rollno").val();
              

				  var usernameErr = passwordErr= rollnoErr=  true;
                

	
    
    
    if(username === "")
    {
        printError("#usernameErr", "*Please enter your name");
		

    }
        else 
         {
            var regex = /^[a-zA-Z\s]/;                
                if(regex.test(username) === false) {
                     printError("#usernameErr", "*Please enter a valid name");
                } else {
                    printError("#usernameErr", "");
                    usernameErr = false;
        }
    }

     if(password == "")
     {
        printError("#passwordErr", "*Please enter your password");
     }
     else {
            printError("#passwordErr", "");
            passwordErr = false;
        }


    
    
    


     if(rollno == "")
     {
        printError("#rollnoErr", "*Please enter your Roll number");
     }
     else
     {
      var regex = /^[0-9]/;
        if(regex.test(rollno) === false) {
            printError("#rollnoErr", "*Please enter a valid Roll number");
        } 
        else{
            printError("#rollnoErr", "");
            rollnoErr = false;
        }
     }
	 if( usernameErr||rollnoErr||passwordErr === true) 
    {
       return false;
    }
    else
    {
        var hideError = function () {
                $("#Error").hide();
                $("#Success").hide();
                };
                
        	$.ajax({
				url:"student_register_process.php",
				type: "POST",
				data: {name:username, password:password, rollno:rollno, submit:"submit"},
				success : function(dataa){
					if(dataa== 1)
					{
                     
                        window.location="index.php";
                        
					}
					else
					{
                        $(".error").css("display","block");
                        $("#Error").html(dataa);
                        setTimeout(hideError,"3000");
                        $("#Error").html(dataa);		
					}
				
				}
			})
    }  
			
			})
		});
	
        </script>
    
   