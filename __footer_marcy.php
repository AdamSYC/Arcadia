 <style>
   /*---------- 回到頂端Bottom設定 ----------*/

   .AlignGoTopBottom {
    /* margin-bottom: 150px; */
    position: absolute;
    top:-100px;
    right: 5rem;
   }

   .GoTopButtom:hover {
     cursor: pointer;
     opacity: 1;
     opacity: 50%;
   }

   .GoTopButtom {
     width: 50px;
     height: 50px;
     transition: .5s;
     
   }

   /* RWD時Bottom消失 */
   @media screen and (max-width: 1000px) {
     .AlignGoTopBottom {
       display: none;
     }

   }

   /*---------- 回到頂端Bottom設定 ----------*/

   /*---------- foot設定 ----------*/

   .foot{
     position: relative;
   }
   

   .footFlex {
     margin:  0 auto;
     justify-content: space-around;
     width: 1100px;
   }

   .footMiddle {
     flex-flow: row;
   }

   span {
     list-style: none;
   }


   .footTitle,
   .footCopyright {
     color: #fff;
   }

   .contacttext {
     list-style: none;
     color: #D7E6E8;
   }

   .footNavLink {
     list-style: none;
     color: #D7E6E8;
   }

   .NAVIGATE,
   .contact {
     margin-left: 5rem;
     transform: none;
   }

   .NAVIGATE ul a {
     color: #D7E6E8;
     transition: .5s;
   }

   .NAVIGATE ul a:hover {
     color: #fff;
     list-style: none;
     text-decoration: none;
   }



   .footsocialmedia {
     flex-direction: column;
     justify-content: space-evenly;
   }

   .footsocialmedia svg {
     width: 30px;
     height: 30px;
     fill: #d7e6e8;
     transition: .5s;
   }

   .footsocialmedia svg:hover {
     fill: #fff;
   }

   .footCopyright {
     padding: 1rem;
     margin:  0 auto;
     justify-content: center;
   }



   /*---------- Footer RWD設定 ----------*/

   @media screen and (max-width: 375px) {

     .foot{
       height: auto;
     }

     

     .AlignFooterContent {
       flex-direction: column;
       justify-content: center;
       align-items: center;
     }

     .arcadiaiconmob {
       padding: 2rem;
       width: 100%;
     }

     .footFlex {
       flex-flow: column;
       justify-content: space-around;
       width: 100%;
     }

     .footMiddle {
       margin: 1rem;
       flex-direction: row;
       justify-content: space-evenly;
     }

     .NAVIGATE,
     .contact {
       transform: none;
       margin: 0;
     }

     .footsocialmedia {
       flex-direction: row;
       margin: 0 auto;
       justify-content: space-evenly;
       width: 50vw;

     }

     .footsocialmedia svg {
       width: 30px;
       height: 30px;
       fill: #d7e6e8;
       transition: .5s;
     }

     .footsocialmedia svg:hover {
       fill: #fff;
     }

     .footCopyright {
     padding:2rem 0 0 0;
   }

   }

   /*---------- Footer RWD設定 ----------*/
 </style>



 <footer class="foot">
    <!---------- 回到頂端的Buttom ---------->

 <div class="AlignGoTopBottom">
   <a class="GoTopButtom" id="goTop">
     <img src="img/footer/footer_top.svg" alt="">
   </a>
 </div>



 <!---------- 回到頂端的Buttom ---------->
   <div class="footFlex d-flex">
     <!-- <img class="backtop" src="/title/Group 730.svg " alt=""> -->
     <div class="Alignarcadiaiconmob">
       <img class="arcadiaiconmob" src="img/footer/footer_logo.svg" alt="">
       <img class="arcadiaiconweb" src="img/footer/footer_logo.svg" alt="">
     </div>

     <!-- <div class="AlignFooterContent"> -->

     <div class="footMiddle d-flex">

       <div class="contact">
         <span class="footTitle h5eng">CONTACT</span>
         <span class="contacttext bodytexteng">Hoba Wawi, Wanokaka,
           </br>West Regency, East Nusa</span>
         <span class="contacttext bodytexteng">TEL:</br>
           +62 361 757149</span>
         <span class="contacttext bodytexteng">E-MAIL:</br>
           ArcadiaResort<br>
           @service.com</span>
       </div>


       <div class="NAVIGATE">
         <ul>
           <span class="footTitle h5eng">NAVIGATE</span>

           <li class="footNavLink bodytexteng">
             <a href="">ABOUT</a>
           </li>

           <li class="footNavLink bodytexteng">
             <a href="">ROOM</a>
           </li>

           <li class="footNavLink bodytexteng">
             <a href="">EXPERIENCE</a>
           </li>

           <li class="footNavLink bodytexteng">
             <a href="">WEDDING</a>
           </li>

           <li class="footNavLink bodytexteng">
             <a href="">FACILITY</a>
           </li>

           <li class="footNavLink bodytexteng">
             <a href="">GALLERY</a>
           </li>

         </ul>
       </div>
     </div>

     <svg display="none">

       <symbol id="fbicon" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 26.516 26.008">
         <path id="Icon_awesome-facebook-square" data-name="Icon awesome-facebook-square" d="M23.675,2.25H2.841A2.814,2.814,0,0,0,0,5.037V25.471a2.814,2.814,0,0,0,2.841,2.787h8.124V19.416H7.236V15.254h3.729V12.082c0-3.608,2.19-5.6,5.544-5.6a23.018,23.018,0,0,1,3.286.281V10.3H17.944a2.1,2.1,0,0,0-2.392,2.248v2.7h4.071l-.651,4.162h-3.42v8.842h8.124a2.814,2.814,0,0,0,2.841-2.787V5.037A2.814,2.814,0,0,0,23.675,2.25Z" transform="translate(0 -2.25)" />
       </symbol>

       <symbol id="igicon" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 28.113 26.008">
         <g id="Group_610" data-name="Group 610" transform="translate(-280.094 -90.072)">
           <path id="Path_1628" data-name="Path 1628" d="M24.414,6.667A6.1,6.1,0,0,1,28.55,8.259a5.175,5.175,0,0,1,1.72,3.827V22.922a5.213,5.213,0,0,1-1.72,3.827,6.05,6.05,0,0,1-4.136,1.592H12.7a6.1,6.1,0,0,1-4.136-1.592,5.175,5.175,0,0,1-1.72-3.827V12.086a5.213,5.213,0,0,1,1.72-3.827A6.05,6.05,0,0,1,12.7,6.667H24.414m0-2.167H12.7c-4.51,0-8.2,3.413-8.2,7.586V22.922c0,4.172,3.69,7.586,8.2,7.586H24.414c4.51,0,8.2-3.413,8.2-7.586V12.086c0-4.172-3.69-7.586-8.2-7.586Z" transform="translate(275.594 85.572)" fill="#d7e6e8" />
           <path id="Path_1629" data-name="Path 1629" d="M25.382,12.251a1.691,1.691,0,0,1-1.757-1.625,1.762,1.762,0,0,1,3.514,0A1.7,1.7,0,0,1,25.382,12.251Z" transform="translate(276.382 85.407)" fill="#d7e6e8" />
           <path id="Path_1630" data-name="Path 1630" d="M18.278,13.417a4.525,4.525,0,0,1,4.686,4.335,4.525,4.525,0,0,1-4.686,4.335,4.525,4.525,0,0,1-4.686-4.335,4.525,4.525,0,0,1,4.686-4.335m0-2.167a6.782,6.782,0,0,0-7.028,6.5,6.782,6.782,0,0,0,7.028,6.5,6.782,6.782,0,0,0,7.028-6.5,6.782,6.782,0,0,0-7.028-6.5Z" transform="translate(275.872 85.324)" />
         </g>
       </symbol>

       <symbol id="twicon" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30.03 31.953">
         <path id="Icon_awesome-twitter-square" data-name="Icon awesome-twitter-square" d="M26.813,2.25H3.218A3.326,3.326,0,0,0,0,5.674V30.779A3.326,3.326,0,0,0,3.218,34.2h23.6a3.326,3.326,0,0,0,3.218-3.424V5.674A3.326,3.326,0,0,0,26.813,2.25ZM23.535,13.576c.013.2.013.407.013.606,0,6.184-4.424,13.309-12.508,13.309a11.912,11.912,0,0,1-6.75-2.1,8.71,8.71,0,0,0,1.059.057,8.483,8.483,0,0,0,5.456-2A4.446,4.446,0,0,1,6.7,20.209a4.461,4.461,0,0,0,1.984-.086A4.616,4.616,0,0,1,5.161,15.53v-.057a4.2,4.2,0,0,0,1.984.592,4.754,4.754,0,0,1-1.957-3.894,4.848,4.848,0,0,1,.6-2.361A12.252,12.252,0,0,0,14.848,14.7a4.616,4.616,0,0,1,4.29-5.749,4.262,4.262,0,0,1,3.211,1.476A8.306,8.306,0,0,0,25.137,9.3a4.625,4.625,0,0,1-1.931,2.575,8.339,8.339,0,0,0,2.534-.728A9.6,9.6,0,0,1,23.535,13.576Z" transform="translate(0 -2.25)" />
       </symbol>

     </svg>

     <div class="footsocialmedia d-flex">
       <svg>
         <use xlink:href="#fbicon" />
       </svg>
       <svg>
         <use xlink:href="#igicon" />
       </svg>
       <svg>
         <use xlink:href="#twicon" />
       </svg>
     </div>











   </div>

   <!-- </div> -->



   <span class="footCopyright d-flex bodytexteng">© copyright by The Arcadia Resort 2020</span>
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