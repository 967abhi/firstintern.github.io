 <!-- abhishek kumar singh  -->
<html>
  <head>
  	 <title>Payment Page</title>
  	 <style>
      *{
        margin:0px;
        padding:0px;
       }
       .parent{
         width:100%;
         position:relative
        }
        .child1{
         width:50%;
         height:400px;
         background:white;
         border:2px solid cornflowerblue;
        }
        .child2{
          position:absolute;
          right:0px;
          top:0px;
         width:50%;
         height:400px;
         background:#fff;
         border:2px solid cornflowerblue;
         padding: 82px;
         box-sizing: border-box; 
        }
        .mobile{
          width: 400px;
          height: 300px;
          padding: 20px;
          margin-top: 50px;
          margin-left: 128px;
          box-sizing: border-box;
        }
        .paynow{
          padding: 20px 30px;
          text-decoration:none;
          background: #5b41c3;
          border: none;
          color: #fff;
          font-size: 16px;
        }
  	 </style>
  </head>
  <body>
    
    <div class="parent">

       <div class="child1">
         
         <img src="ismart.jpg" class="shirt">
       </div>

       <div class="child2">
         <h2>BLACK T-SHIRT </h2>
         <br>
         <p><ul> <li> Built for comfort</li>
                 <li> Feel the fabric</li>
                <li> Smooth inside</li>
               <li> Stylish outside</li>
              <li> The t-shirt you need</li>
               <li>Wear the swag</li>
              <li>Love what you do</li>
               <li>Built for the style</li>
               <li>Your fashion statements</li>
               <li>Style that suits you</li> <ul> </p>
         <br><br><br>
           <?php
            $custid=base64_encode('cust'.rand(1000,1000));
            $amount=base64_encode(400);
           ?>

         <a href="ordernow.php?custid=<?php echo $custid;?>&am=<?php echo $amount; ?>"  class="paynow">PayNow</a>
       </div>
      
    </div>


  </body>
</html>

<!-- /*https://github.com/devchandansh/payment-using-paytm-php*/ -->

