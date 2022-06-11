<?php
/**
  * This Php function show the total number of movie in our database for admin
 * */
     require "../functions/functions.php";


          getAllMovie();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>Sidebar template</title>
    <link rel="stylesheet" type="text/css" href="../thirdparties/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/admin.css">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css">

    <style type="text/css">
      #upload_file{
             display: none !important;
         }

         #upload_file2{
             display: none !important;
         }


         label[for="upload_file"]{
             height: 50px;
             display: inline-block;
             padding-top: .5em;
             padding-right: .5em;
             padding-left: .5em;
             border-radius: 5px;
             color: white;
             font-weight: bolder;
             cursor: pointer;
             background-color: #6C757D;
         }

         }

         label[for="upload_file2"]{
             height: 50px;
             display: inline-block;
             padding-top: .5em;
             padding-right: .5em;
             padding-left: .5em;
             border-radius: 5px;
             color: white;
             font-weight: bolder;
             cursor: pointer;
             background-color: #6C757D;
         }
    </style>

</head>

<body>
<div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <a href="#">pro sidebar</a>
        <div id="close-sidebar">
          <i class="fas fa-times"></i>
        </div>
      </div>
      <div class="sidebar-header">
        <div class="user-pic">
          <img class="img-responsive img-rounded" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg"
            alt="User picture">
        </div>
        <div class="user-info">
          <span class="user-name">
            <strong></strong>
          </span>
          <span class="user-role">Administrator</span>
          <span class="user-status">
            <i class="fa fa-circle"></i>
            <span>Online</span>
          </span>
        </div>
      </div>
      <!-- sidebar-header  -->
      <div class="sidebar-search">
        <div>
          <div class="input-group">
            <input type="text" class="form-control search-menu" placeholder="Search...">
            <div class="input-group-append">
              <span class="input-group-text">
                <i class="fa fa-search" aria-hidden="true"></i>
              </span>
            </div>
          </div>
        </div>
      </div>
      <!-- sidebar-search  -->
      <div class="sidebar-menu">
        <ul>
          <li class="header-menu">
            <span>General</span>
          </li>


          <li class="header-menu">
            <a href="#">
              <i class="fa fa-shopping-cart"></i>
              <span>Dashboard</span>
              
            </a>
          </li>
          <li class="header-menu">
            <a href="../userlist">
              <i class="fa fa-shopping-cart"></i>
              <span>Manage Users</span>
              
            </a>
          </li>
          <li class="header-menu">
            <a href="#">
              <i class="far fa-gem"></i>
              <span>Components</span>
            </a>
          
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-chart-line"></i>
              <span>Charts</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Pie chart</a>
                </li>
                <li>
                  <a href="#">Line chart</a>
                </li>
                <li>
                  <a href="#">Bar chart</a>
                </li>
                <li>
                  <a href="#">Histogram</a>
                </li>
              </ul>
            </div>
          </li>
          
        </ul>
      </div>
      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
    <div class="sidebar-footer">
      <a href="#">
        <i class="fa fa-bell"></i>
        <span class="badge badge-pill badge-warning notification">3</span>
      </a>
      <a href="#">
        <i class="fa fa-envelope"></i>
        <span class="badge badge-pill badge-success notification">7</span>
      </a>
      <a href="#">
        <i class="fa fa-cog"></i>
        <span class="badge-sonar"></span>
      </a>
      <a href="#">
        <i class="fa fa-power-off"></i>
      </a>
    </div>
  </nav>
  <!-- sidebar-wrapper  -->
  <main class="page-content">
    <div class="container-fluid">
      <div class="row">
      <h2>Administrator</h2>

      </div>
      <hr>
      <div class="row">
        <div class="form-group col-md-12">
    <div class="col-md-6 m-auto">
    <button class="btn btn-dark btn-md" type="button" data-toggle='modal' data-target="#staticBackdrop">Create Movie</button>

    <div class="row mt-5">
      <div class="col-md-12">
      <h3 class="col-md-10 mr-0">Total Movie purchased : <?php echo "{$_SESSION['movie']}";?></h3>
      </div>
    </div>

    

          <!---The modal fired after the clicking create button -->

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
              <label>Movie Title</label>
              <input type="text" name="title" class="form-control">
            </div>

            <div class="form-group">
              <select class="form-control" name="genre">
              <option>select movies genre</option>
              <option value="drama">Drama</option>
              <option value="action">Action</option>
              <option value="horror">Horror</option>
              <option value="thriller">Thriller</option>
              <option value="romance">Romance</option>
              <option value="fiction">Fiction</option>
              <option value="adventure">Adventure</option>
              <option value="animation">Animation</option>


              </select>
            </div>


            <div class="form-group">
              <label>Year of production</label>
              <input type="date" name="production" class="form-control">
            </div>


            <div class="form-group">
              <label>Price</label><br>
              <span id="showformat"></span>
              <input type="text" name="price" class="form-control" id="movieprice">
            </div>

            <div class="form-group">
              <div id="upload_img"></div>
              <label for="upload_file" class="form-control text-center" >UPload Image</label>
              <input type="file" name="upload_file" id="upload_file">
              
            </div>
            
            
            <div class="modal-footer">
        <button type="reset" class="btn btn-secondary">Reset</button>
        <button class="btn btn-primary">Create</button>
      </div>
            
          </form>
          

        </div>
        
      </div>
      
    </div>
  </div>
</div>

          </div>

        </div>
        
      </div>
      
      <hr>

      

        <div class="card shadow container table-responsive">
          <div class=" services">
            <table class="table table-striped table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">

              <?php

              getMovie();


              ?>


            </table>
          </div>

        </div>

        <div id="pageOpen"></div>
        
      
      

      <footer class="text-center">
        
      </footer>
    </div>
  </main>
  <!-- page-content" -->
</div>
<script type="text/javascript" src="../thirdparties/jquery/jquery.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../thirdparties/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/admin.js"></script>
<script type="text/javascript" src="../thirdparties/accounting/accounting.js"></script>

    

<script type="text/javascript">
 $(document).ready( function () {
    $('#myTable').DataTable();
      })

  
  $("#staticBackdrop").on("hidden.bs.modal", function(){
              location.reload();
        })
</script>

<script type="text/javascript">

  /**
   * Function that edit movie individually after being loaded by the PHP function above 
   * 
   * */
  
  function openMovieEdit(id){
    
      $.post({

        url : "../_loaders/edit_movie.php",
        data : {id : id},
        success : function(feedback){
        feedback = JSON.parse(feedback);
          console.log(feedback);


        const staticBack = `
  
  <div class="modal fade" id="staticBack" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
          <form method="POST" enctype="=multipart/form-data" id="upload_form2">
            <div class="form-group">
              <label>Movie Title</label>
              <input type="text"  id='new_title' name="title2" class="form-control" 
              value='${feedback['data']['title']}'>
            </div>

            <div class="form-group">

               <span>select movies genre</span>
              <select id='new_genre' class="form-control" name="genre2" >

              <option></option>
              <option value="drama">Drama</option>
              <option value="action">Action</option>
              <option value="horror">Horror</option>
              <option value="thriller">Thriller</option>
              <option value="romance">Romance</option>
              <option value="fiction">Fiction</option>
              <option value="adventure">Adventure</option>
              <option value="animation">Animation</option>


              </select>
            </div>


            <div class="form-group">
              <label>Year of production</label>
              <input type="date" id='new_production' name="production2" class="form-control" 

              value = '${feedback['data']['production']}'>
            </div>


            <div class="form-group">
              <label>Price</label><br>
              <span id="showformat"></span>
              <input type="text" id='new_price' name="price2" class="form-control"
              value='${feedback['data']['price']}'>
            </div>

            <div class="form-group">
              <div id="upload_img2"><img src='../_loaders/${feedback['data']['img_path']}' width=200></div>
              <label for="upload_file2" class="form-control text-center" >UPload Image</label>
              <input type="file" name="upload_file2" id="upload_file2" onchange=changeImage()>
              
            </div>
            
            
            <div class="modal-footer">
        <button type=button class="btn btn-primary" onclick = "submitUpdate('${feedback['data']['movie_id']}')">Update</button>
      </div>
            
          </form>
          

        </div>
        
      </div>
      
    </div>
  </div>
</div>`;
$("#pageOpen").html(staticBack);

            $("#staticBack").modal("show");

            //when the modal closes..
        $("#staticBack").on("hidden.bs.modal", function(){
              location.reload();
        })


          
        }
      })



  }




  




function submitUpdate(id){
    let genre2 = document.querySelector("#new_genre").value;
    let title2 = document.querySelector("#new_title").value;
    let production2 = document.querySelector("#new_production").value;
    let price2 = document.querySelector("#new_price").value;



    $.post({
            url : "../_loaders/submitUpdate.php",
            data : {id : id, genre2 : genre2, title2 : title2, production2 : production2, price2 : price2},
            success : function(feedback){

              feedback = JSON.parse(feedback);

              if (feedback.code == 201) {
                alert(feedback.message);
              }else if (feedback.code==404) {
                alert(feedback.message);
              }else{

                alert("Erorr in Updating");
              }
            
            }
    })
  
}










    function deleteMovie(id){

      const res = confirm("Do you want to delete the product?");

    if (res) {



      $.post({

        url : "../_loaders/delete_movie.php",
        data : {id : id},
        success : function(feedback){
          //feedback = JSON.parse(feedback);

          console.log(feedback);

          if (feedback.code == 201) {

            location.reload();
          }





        }
      })

      }
    }




</script>

  


  





</body>
</html>