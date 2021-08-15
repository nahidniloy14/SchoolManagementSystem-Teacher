<script>

    function validate(){


      var Email=document.getElementById('email').value;

      var Password=document.getElementById('password').value;
      var errors = 0;
      

      if(email==="")
      {
        document.getElementById("emailError").innerText="Field Empty";
        errors = errors+1;
      }
      else if(email!=="")
      {
        document.getElementById("emailError").innerText="";
      }

      if(pass==="")
      {
        document.getElementById("passwordError").innerText="Field Empty";
        errors = errors+1;
      }
      else if(pass!=="")
      {
        document.getElementById("passwordError").innerText="";
      }
      
      if(errors > 0)
      {
        return false;
      }
      else
      {
        return true;
      }	

 

	</script>
