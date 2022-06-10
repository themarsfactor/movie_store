
/***
 * Javascript jQuery that power the admin dashboard
 * */

jQuery(function ($) {

    $(".sidebar-dropdown > a").click(function() {
  $(".sidebar-submenu").slideUp(200);
  if (
    $(this)
      .parent()
      .hasClass("active")
  ) {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .parent()
      .removeClass("active");
  } else {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .next(".sidebar-submenu")
      .slideDown(200);
    $(this)
      .parent()
      .addClass("active");
  }
});

$("#close-sidebar").click(function() {
  $(".page-wrapper").removeClass("toggled");
});
$("#show-sidebar").click(function() {
  $(".page-wrapper").addClass("toggled");
});


   
   
});






/**
 * The javascript code that format the input field price
 * */
  document.querySelector("#movieprice").addEventListener("keyup", function(event){

    input_price = Number(event.target.value.trim());

    check = accounting.formatMoney(input_price,[symbol = "$"],[precision = 2],[thousand = ","],[decimal = "."],[format = "%s%v"])

    let show = document.querySelector("#showformat");

    show.innerHTML = check;





  })



  /***
   * Javascript code to process the form
   * 
   * 
   * */
   

   let upload_form =document.querySelector("#upload_form");
   let img_uploaded =document.querySelector("#upload_img");
   let file_upload = document.querySelector("#upload_file");
  

    


   file_upload.onchange = function(){
    const file_item = this.files[0];
    const reader = new FileReader();

    reader.readAsDataURL(file_item);

    reader.onload = function(){
      img_uploaded.innerHTML = `<img src= '${this.result}' width=200 class = 'align-middle'>`;
    }
   }


   /**
    * Submit the form data
    * */


upload_form.addEventListener("submit", function(e){
  e.preventDefault();

  if (this.title.value.trim().length == 0 || this.production.value.trim().length == 0 ||
   this.genre.value.trim().length == 0 || this.price.value.trim().length == 0 
   || this.upload_file.value.length == 0) {

    alert("Fill up the empty field/fields");
  }else{

    const formData = new FormData(upload_form);

    const xhr = new XMLHttpRequest;

    xhr.open("POST", "../_loaders/load-form.php");

    xhr.onload = function(){

      if(xhr.response == 1){
      
        alert("Movie Created");
      }else{
        alert("Error in reating ");    }
    }

    xhr.send(formData);


}
})






/**
 * Function that update the movie
 * */


  
