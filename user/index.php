<?php
require "../functions/functions.php";
require "../includes/user_data.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User</title>
	<link rel="stylesheet" type="text/css" href="../thirdparties/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/user.css">
</head>
<body>


	<div class="container">
		<div class="col-md-12 mt-5" >
			<div class="col-md-6 m-auto">
				
				<div class="card p-4">
					<div class="row">
						<div class="col-md-3"><a href="../logout">Logout</a></div>
						
					</div>

					<div class="card-head bg-info text-center mb-4" >
						<h2>My Profile</h2>


						<?php getUser($id);



						?>
						
					</div>
				<p>Name : <?php echo $name; ?></p>
				<p>Email : <?php echo $email;?> </p>
				<p>Date of birth : <?php echo $birth;?> </p>

				<p class="m-auto mt-3" onclick="editUser('<?php echo $id?>')"><button class="btn btn-primary btn-md">Edit profile</button></p>

				</div>
			</div>
			
			<span id="pageOpen2"></span>
		</div>
      
     </div>


<script type="text/javascript" src="../thirdparties/jquery/jquery.min.js"></script>
<script type="text/javascript" src="../thirdparties/bootstrap/js/bootstrap.min.js"></script>




<script type="text/javascript">
	
	function editUser(id){

		//alert(id);

		$.post({
			url :"../_loaders/returnUpdate.php",
			data : {id : id},
			success : function(feedback){
				feedback = JSON.parse(feedback);
				console.log(feedback['data']);



				const staticBackdrop = `
  <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Movies</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div>
          <form method="POST" enctype="=multipart/form-data" id="upload_form">
            <div class="form-group">
              <label>Name</label>
              <input type="text" name="name" class="form-control" id='new_name'
               value="${feedback['data']['name']}">
            </div>

            

            <div class="form-group">
              <label>Email</label>
              <input type="email" name="email" class="form-control"
               value ="${feedback['data']['email']}" id = 'new_email'>
            </div>


            <div class="form-group">
              <label>Password</label><br>
              <span id="showformat"></span>
              <input type="password" name="password" class="form-control" id="new_password" 
              value = "${feedback['data']['password']}">
            </div>

            
            
            <div class="modal-footer">
        
        <button type='button' onclick = updateEditUser('${feedback['data']['id']}') class="btn btn-primary">Update</button>
      </div>
            
          </form>
          

        </div>
        
      </div>
      
    </div>
  </div>
</div>`;
$("#pageOpen2").html(staticBackdrop);

            $("#staticBackdrop").modal("show");

            //when the modal closes..
				$("#staticBackdrop").on("hidden.bs.modal", function(){
							location.reload();
				})


			}
		})
		//alert(id);



	}




	function updateEditUser(id){
		let new_name = document.querySelector("#new_name").value.trim();
		let email = document.querySelector("#new_email").value.trim();
		let new_password = document.querySelector("#new_password").value.trim();



		if (new_name.length == 0 || email.length == 0 || new_password.length == 0) {
			alert("Fill the input field/fields");
		}else{
			$.post({

				url : "../_loaders/updatedData.php",
				data : {id : id, name : new_name, email : email, password : new_password},
				success : function(feedback){

					
					feedback = JSON.parse(feedback);

					if (feedback.code == 201) {
						alert(feedback.message);
						location.reload();
					}
					//console.log(feedback);
				}
			})
		}
	}



</script>
</body>
</html>