 <style>
    /*---------- 回到頂端Bottom設定 ----------*/

   .AlignGoTopBottom {
     display: flex;
     justify-content: flex-end;
     margin-right: 100px;
     margin-bottom: 50px;
   }

   .GoTopButtom:hover {
     cursor: pointer;
     opacity: 1;
   }

   .GoTopButtom {
     width: 50px;
     height: 50px;
     opacity: 50%;
   }

   /* RWD時Bottom消失 */
   @media screen and (max-width: 375px) {
     .AlignGoTopBottom {
       display: none;
     }
   }

   /*---------- 回到頂端Bottom設定 ----------*/

   /*---------- Footer RWD設定 ----------*/
   
   @media screen and (max-width: 375px) {
    .AlignFooterContent{
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }
    .NAVIGATE{
      margin-top: 30px;
    }
   }

   /*---------- Footer RWD設定 ----------*/
 </style>

 <!---------- 回到頂端的Buttom ---------->

 <div class="AlignGoTopBottom">
   <a class="GoTopButtom" id="goTop">
     <img src="img/footer/footer_top.svg" alt="">
   </a>
 </div>

 <!---------- 回到頂端的Buttom ---------->

 <footer class="foot d-flex">
   <!-- <img class="backtop" src="/title/Group 730.svg " alt=""> -->
   <div class="Alignarcadiaiconmob">
     <img class="arcadiaiconmob" src="img/footer/footer_logo.svg" alt="">
     <img class="arcadiaiconweb" src="img/footer/footer_logo.svg" alt="">
   </div>

   <!-- <div class="AlignFooterContent"> -->

     <div class="contact">
       <span style="list-style: none; color: #ffff;" class="h5eng">CONTACT</span>
       <span style="list-style: none; color: #ffff;" class="bodytexteng">Hoba Wawi, Wanokaka,
         </br>West Regency, East Nusa Tenggar</span>
       <span style="list-style: none; color: #ffff;" class="bodytexteng">TEL:</br>
         +62 361 757149</span>
       <span style="list-style: none; color: #ffff;" class="bodytexteng">E-MAIL:</br>
         ArcadiaResort@service.com</span>
     </div>

     <div class="NAVIGATE">
       <ul style="text-decoration: none; color: #ffff"><span class="h5eng">NAVIGATE</span>
         <a href="">
           <li style="list-style: none; color: #ffff;" class="bodytexteng">ABOUT</li>
         </a>
         <a href="">
           <li style="list-style: none; color: #ffff;" class="bodytexteng">ROOM</li>
         </a>
         <a href="">
           <li style="list-style: none; color: #ffff;" class="bodytexteng">EXPERIENCE</li>
         </a>
         <a href="">
           <li style="list-style: none; color: #ffff;" class="bodytexteng">WEDDING</li>
         </a>
         <a href="">
           <li style="list-style: none; color: #ffff;" class="bodytexteng">FACILITY</li>
         </a>
         <a href="">
           <li style="list-style: none; color: #ffff;" class="bodytexteng">GALLERY</li>
         </a>
       </ul>
     </div>

   <!-- </div> -->

   <div class="socialmedia">
     <a href=""><img class="fbicon" src="img/footer/footer_facebook.svg" alt=""></a>
     <a href=""><img class="insicon" src="img/footer/footer_instagram.svg" alt=""></a>
     <a href=""><img class="twittericon" src="img/footer/footer_twitter.svg" alt=""></a>
   </div>
   <img class="copyright" src="/title/© copyright by The Arcadia Resort 2020.png" alt="">
 </footer>

 <!---------- 回到頂端Buttom ---------->
 <script>
   $("#goTop").click(function() {
     //console.log("click")

     $("html").animate({
       scrollTop: 0
     }, 2500)
   })
 </script>
 <!---------- 回到頂端Buttom ---------->