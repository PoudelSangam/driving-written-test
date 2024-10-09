<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript">
	
  
  
		$(document).ready(function(e){

			$("#Login").on("click",function(e)
			{
				e.preventDefault();
				var rollno= $("#rollno").val();
				var password= $("#password").val();
			

			$.ajax({
				url:"student_login_process.php",
				type:"POST",
				data:{email:rollno, password:password,submit:"submit"},
				success:function(dataa){
					if(dataa=='Success')
					{
						window.location="student_dashboard.php"
					}
					else
					{
						$("#error").html(dataa);
					}
				
				}
			})
			
			})
		});

	</script>