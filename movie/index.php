<?php
require "../includes/user_data.php";

$id = $_SESSION['id'];
//echo $id;

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Movie Page</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/album/">
    <link rel="stylesheet" type="text/css" href="../thirdparties/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/pay.css">

    <link rel="stylesheet" type="text/css" href="../css/movie.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

  



    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">
  </head>
  <body>
    
<header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">About</h4>
          <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Contact</h4>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white">Follow on Twitter</a></li>
            <li><a href="#" class="text-white">Like on Facebook</a></li>
            <li><a href="#" class="text-white">Email me</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container d-flex justify-content-between">
      <a href="../user<?php $id?>" class="navbar-brand d-flex align-items-center">
        <button class=" btn btn-md btn-info">My Profile</button>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>

<main role="main">

  <section class="jumbotron text-center mb-0">
    <div class="container">
      <h1>Available Movies</h1>
        </div>
  </section>

  <div id="pageOpen"></div>

  <div class="album bg-light">
    <div class="container">
      <?php

      require "../functions/functions.php";
      showMovie();
        


      ?>

    </div>
  </div>

</main>

<footer class="text-muted">
  <div class="container">
    <p class="float-right">
      <a href="#">Back to top</a>
    <p class="m-auto">copywright @academician 2022 </p>
  </div>
</footer>



    <script type="text/javascript" src="../thirdparties/jquery/jquery.min.js"></script> 
    <script type="text/javascript" src="../thirdparties/bootstrap/js/bootstrap.min.js">
    </script> 
    <script type="text/javascript">
      
      function payMovieModal(id){
        
        $.post({

          url : "../_loaders/pay_movie.php",
          data : {id : id},
          success : function(feedback){
            feedback = JSON.parse(feedback);
            console.log(feedback);

            
       const staticBackdrop = `<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="staticBackdropLabel">${feedback['data']['title']}</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="container">
          <form class='form' id='payment-form' method='POST'>
    <div class='row'>
        
        <div class='col-md-12'>
            <div class='form-row'>
              <div class='col-12 form-group required'>
                <label class='control-label'>Name on Card</label>
                <input class='form-control' type='text' id='card-name'>
              </div>
            </div>
            <div class='form-row'>
              <div class='col-12 form-group card required'>
                <label class='control-label'>Card Number</label>
                <input autocomplete='off' class='form-control card-number' size='20' type='text' id='card-number'>
              </div>
            </div>
            <div class='form-row'>
              <div class='col-xs-4 form-group cvc required'>
                <label class='control-label'>CVC</label>
                <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text' id='cvc'>
              </div>
              <div class='col-xs-4 form-group expiration required'>
                <label class='control-label'>Expiration</label>
                <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text' id='monthV'>
              </div>
              <div class='col-xs-4 form-group expiration required'>
                <label class='control-label'> </label>
                <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text' id='yearV'>
              </div>
            </div>
            <div class='form-row'>
              <div class='col-md-12'>
                <div class='form-control total btn btn-info'>
                  Price:
                  <span class='amount'>$${feedback['data']['price']}</span>
                </div>
              </div>
            </div>
            <input type='hidden' name='title' value='${feedback['data']['title']}' id='title'>
            <input type='hidden' name='price' value='${feedback['data']['price']}' id='price'>
            <div class='form-row'>
              <div class='col-md-12 form-group'>
                <button class='form-control btn btn-primary submit-button'  type='button' onclick=paywithCard('${feedback['data']['movie_id']}')>Pay »</button>
              </div>
            </div>
            <div class='form-row'>
              
              </div>
            </div>
          </form>
        </div>
        <div class='col-md-4'></div>
    </div>
</div>
      
        
      </div>
    </div>
  </div>
</div>`;
$("#pageOpen").html(staticBackdrop);

            $("#staticBackdrop").modal("show");

            //when the modal closes..
        $("#staticBackdrop").on("hidden.bs.modal", function(){
              location.reload();
        })


          }

        })
      }



/***
 * 
 * function that pay the movie the card
 * */

  function paywithCard (movie_id){

    let card_number = document.querySelector("#card-number").value;
    let card_name = document.querySelector("#card-name").value;
    let cvc = document.querySelector("#cvc").value;
    let monthV = document.querySelector("#monthV").value;
    let yearV = document.querySelector("#yearV").value;

    let price = document.querySelector("#price").value;
    let title = document.querySelector("#title").value;


    if (card_number.length == 0 || card_name.length == 0 || cvc.length == 0 || monthV.length == 0 || yearV.length == 0) {

      alert("Fill up the input field/fields");
    }else{



        $.post({

            url : "../_loaders/paywithCard.php",
            data : {movie_id : movie_id, price : price, title : title},
            success : function(feedback){
              feedback = JSON.parse(feedback);
              console.log(feedback);

              if (feedback.code == 201) {

                alert(feedback.message);
              }else{
                if (feedback.code == 404) {
                  alert(feedback.message);
                }
              }

              
            }


            })

        }
  }



      
    </script>



  </body>
</html>
