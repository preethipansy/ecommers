
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ecommers</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="design.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
    .imageone{
        display: none;
    }
</style>
</head>
<body>
    <input type="checkbox" id="check">
   
    <label for="check"> <i class="fa fa-arrow-down fa-2x" style="color:green ;" id="sidebar" ></i></label>
    <button class="cart"><i class="fa fa-cart-plus fa-2x" aria-hidden="true"></i>
    </button>


    <h1><i class="fa fa-pagelines"></i><span class="start">l</span><span class="end">ooks</span></h1>
    <div class="menu">
        <ul>
            <li>
               <i class="fa fa-home"></i><a href=main.php>HOME</a>
            </li>
            <li>
                <i class="fa fa-user"></i><a href=login.php>LOGIN</a>
            </li>
            <li>
                <i class="fa fa-envelope"></i><a href=contact.php>CONTACT US </a>
            </li>
        </ul>

    </div>
    <div class="imageinside">
        <img src="max.jpg" class="imageone">
        <img src="myntra.jpg" class="imageone">
        <img src="shein.jpg" class="imageone">
    </div>
    <div class="dressshop">
        <ul class="mainone">
            <li>
                 <i class="fa fa-female fa-2x"><span>WOMEN</span></i>
                     <ul>
                         <li>
                          Traditional
                         </li>
                         <li>
                         western  
                        </li>
                        <li>
                          Slippers   
                        </li>
                        <li>
                          Inner wear   
                        </li>
                        <li>
                          Cosmetics   
                        </li>
                     </ul>
            </li>
            <li>
                <i class="fa fa-male fa-2x"><span>MEN</span></i>
                <ul>
                    <li>
                        Traditional
                    </li>
                    <li>
                        Western
                   </li>
                   <li>
                        Shoes
                   </li>
                   <li>
                        Perfumes
                   </li>
                </ul>
            </li>
            <li>
                <i class="fa fa-child fa-2x"><span>KIDS</span></i>

                <ul>
                    <li>
                       Girls
                    </li>
                    <li>
                       Boys 
                   </li>
                   <li>
                      Infant
                   </li>
                </ul>
            </li>
        </ul>
    </div>
<div class="loader-container">
   <div class="loader">
 </div>
</div>
<div class="foot">
   
    <ul>
        <li>
           <i class="fa fa-facebook-official"></i>
        </li>
        <li>
            <i class="fa fa-instagram"></i>
        </li>
        <li>
            <i class="fa fa-envelope"></i>
        </li>
    </ul>
</div>
<!-- database -->
<div class="database">
     <div > 
           <img src="images/women1.jpg">
           <h1>womens</h1>
           <p>This one was made with pure cotton</p>
           <button><i class="fa fa-arrow-down fa-2x" aria-hidden="true"></i></button>
     </div>
     <div> 
        <img src="images/girl1.jpg">
        <h1>girls</h1>
        <p>This one was made with pure cotton</p>
        <button><i class="fa fa-arrow-down fa-2x" aria-hidden="true"></i></button>
    </div>
    <div> 
        <img src="images/men1.jpg">
        <h1>mens</h1>
        <p>This one was made with pure cotton</p>
        <button><i class="fa fa-arrow-down fa-2x" aria-hidden="true"></i>
        </button>
    </div>
    <div> 
        <img src="images/boy1.jpg">
           <h1>boys</h1>
           <p>This one was made with pure cotton</p>
           <button><i class="fa fa-arrow-down fa-2x" aria-hidden="true"></i></button>

    </div>
</div>
<!-- javascript -->
<script>
    $(window).on("load",function(){
        
        $(".loader-container").fadeOut(1000);
    });
    </script>
    <script>
        var myIndex = 0;
        carousel();
        
        function carousel() {
          var i;
          var x = document.getElementsByClassName("imageone");
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
          }
          myIndex++;
          if (myIndex > x.length)
           {
               myIndex = 1
               }    
          x[myIndex-1].style.display = "block";  
          setTimeout(carousel, 2000); // Change image every 2 seconds
        }
        </script>
</body>
</html>