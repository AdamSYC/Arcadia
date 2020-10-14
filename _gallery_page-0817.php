<style>

 .top {
     position: relative;
     background-image: url(img/8_gallery/gallery_1index.jpg);
     width: 100vw;
     height: 800px;
     background-size: cover;
     background-position: center center;
     position: relative;
     z-index: -1;
 }

 .title {
     position: absolute;
     top: 40%;
     left: 15%;
 }

 @media screen and (max-width: 375px) {
     .top {
         height: 450px;
     }
 }

 body {
   background: #D7E6E8;
 }
 
 .wrapperGallery {
   margin: 50px auto;
   max-width: 1400px;
 }

 .filter {
   margin: 100px 0 100px 0;
   text-align: center;
   background-color: #D7E6E8;
   width: 100vw;
 }

 @media screen and (max-width: 375px) {

  .wrapperGallery {
   margin: 0px auto;
   max-width: 375px;
   display: flex;
   flex-direction: column;
   align-items: center;
   justify-content: center;
 }


 .filter {
   margin: 30px 0px 30px 20px;
   text-align: center;
   background-color: #D7E6E8;
   width: 100vw;
   display: flex;
   flex-direction: column;
 }
}

 .filter a {
   margin-right: 50px;
   color: #666;
   /* border-radius: 50px; */
   display: inline-block;
 }

 .filter a.current {
   color: #09839C;
 }

 .grid {
   margin: 0 auto;
   padding: 10px;
   -webkit-perspective: 1000px;
   perspective: 1000px;
   z-index: -1;
 }

 .grid-item {
   width: 180px;
   height: 100px;
   margin-bottom: 10px;
   border-radius: 4px;
   overflow: hidden;
   cursor: pointer;
   position: relative;
 }


 
 @media screen and (max-width: 375px) {
  .grid {
   margin: 0 auto;
   
   
 }

  .grid-item {
    
    width: 180px;
   height: 180px;
   margin-bottom: 10px;
   /* border-radius: 4px; */
   overflow: hidden;
   cursor: pointer;
   position: relative;
}
}

 .fancybox {
   display: block;
   width: 100%;
   height: 100%;
   height: 100%;
   width: 100%;
   border-radius: 4px;
   background-size: cover;
   background-repeat: no-repeat;
   background-position: center;
   transition: all 0.5s;
 
 }

 .grid-item:hover .fancybox {
   transform: scale(1.1);
 }

 .grid-item:nth-child(1) .fancybox {
   background-image: url(img/8_gallery/HOTEL/hotel_1.jpg);
 }

 .grid-item:nth-child(2) .fancybox {
   background-image: url(img/8_gallery/HOTEL/hotel_2.jpg);
 }

 .grid-item:nth-child(3) .fancybox {
   background-image: url(img/8_gallery/HOTEL/hotel_3.jpg);
 }

 .grid-item:nth-child(4) .fancybox {
   background-image: url(img/8_gallery/HOTEL/hotel_4.jpg);
 }

 .grid-item:nth-child(5) .fancybox {
   background-image: url(img/8_gallery/HOTEL/hotel_5.jpg);
 }

 .grid-item:nth-child(6) .fancybox {
   background-image: url(img/8_gallery/HOTEL/hotel_6.jpg);
 }

 .grid-item:nth-child(7) .fancybox {
   background-image: url(img/8_gallery/HOTEL/hotel_7.jpg);
 }

 .grid-item:nth-child(8) .fancybox {
   background-image: url(img/8_gallery/HOTEL/hotel_8.jpg);
 }

 .grid-item:nth-child(9) .fancybox {
   background-image: url(img/8_gallery/HOTEL/hotel_9.jpg);
 }

 .grid-item:nth-child(10) .fancybox {
   background-image: url(img/8_gallery/HOTEL/hotel_10.jpg);

 }



 
 .grid-item:nth-child(11) .fancybox {
   background-image: url(img/8_gallery/ROOM/room_1.jpg);
 }

 .grid-item:nth-child(12) .fancybox {
   background-image: url(img/8_gallery/ROOM/room_2.jpg);
 }

 .grid-item:nth-child(13) .fancybox {
   background-image: url(img/8_gallery/ROOM/room_3.jpg);
 }

 .grid-item:nth-child(14) .fancybox {
   background-image: url(img/8_gallery/ROOM/room_4.jpg);
 }

 .grid-item:nth-child(15) .fancybox {
   background-image: url(img/8_gallery/ROOM/room_5.jpg);
 }

 .grid-item:nth-child(16) .fancybox {
   background-image: url(img/8_gallery/ROOM/room_6.jpg);
 }

 .grid-item:nth-child(17) .fancybox {
   background-image: url(img/8_gallery/ROOM/room_7.jpg);
 }

 .grid-item:nth-child(18) .fancybox {
   background-image: url(img/8_gallery/ROOM/room_8.jpg);
 }

 .grid-item:nth-child(19) .fancybox {
   background-image: url(img/8_gallery/ROOM/room_9.jpg);
 }



 .grid-item:nth-child(20) .fancybox {
   background-image: url(img/8_gallery/ROOM/room_1.jpg);
 }

 .grid-item:nth-child(21) .fancybox {
   background-image: url(img/8_gallery/ROOM/room_2.jpg);
 }

 .grid-item:nth-child(22) .fancybox {
   background-image: url(img/8_gallery/ROOM/room_3.jpg);
 }

 .grid-item:nth-child(23) .fancybox {
   background-image: url(img/8_gallery/ROOM/room_4.jpg);
 }

 .grid-item:nth-child(24) .fancybox {
   background-image: url(img/8_gallery/ROOM/room_5.jpg);
 }

 .grid-item:nth-child(25) .fancybox {
   background-image: url(img/8_gallery/ROOM/room_6.jpg);
 }

 .grid-item:nth-child(26) .fancybox {
   background-image: url(img/8_gallery/ROOM/room_7.jpg);
 }

 .grid-item:nth-child(27) .fancybox {
   background-image: url(img/8_gallery/ROOM/room_8.jpg);
 }

 .grid-item:nth-child(28) .fancybox {
   background-image: url(img/8_gallery/ROOM/room_9.jpg);
 }

 .grid-item:nth-child(29) .fancybox {
   background-image: url(img/8_gallery/ROOM/room_10.jpg);
 }

 .grid-item:nth-child(30) .fancybox {
   background-image: url(img/8_gallery/FACILITY/facility_1.jpg);
 }

 .grid-item:nth-child(31) .fancybox {
   background-image: url(img/8_gallery/FACILITY/facility_2.jpg);
 }

 .grid-item:nth-child(32) .fancybox {
   background-image: url(img/8_gallery/FACILITY/facility_3.jpg);
 }

 .grid-item:nth-child(33) .fancybox {
   background-image: url(img/8_gallery/FACILITY/facility_4.jpg);
 }

 .grid-item:nth-child(34) .fancybox {
   background-image: url(img/8_gallery/FACILITY/facility_5.jpg);
 }

 .grid-item:nth-child(35) .fancybox {
   background-image: url(img/8_gallery/FACILITY/facility_6.jpg);
 }

 .grid-item:nth-child(36) .fancybox {
   background-image: url(img/8_gallery/FACILITY/facility_7.jpg);
 }

 .grid-item:nth-child(37) .fancybox {
   background-image: url(img/8_gallery/FACILITY/facility_8.jpg);
 }

 .grid-item:nth-child(38) .fancybox {
   background-image: url(img/8_gallery/FACILITY/facility_9.jpg);
 }

 .grid-item:nth-child(39) .fancybox {
   background-image: url(img/8_gallery/FACILITY/facility_10.jpg);
 }

 .grid-item:nth-child(40) .fancybox {
   background-image: url(img/8_gallery/EXPERIENCE/experience_1.jpg);
 }

 .grid-item:nth-child(41) .fancybox {
   background-image: url(img/8_gallery/EXPERIENCE/experience_2.jpg);
 }

 .grid-item:nth-child(42) .fancybox {
   background-image: url(img/8_gallery/EXPERIENCE/experience_3.jpg);
 }

 .grid-item:nth-child(43) .fancybox {
   background-image: url(img/8_gallery/EXPERIENCE/experience_4.jpg);
 }

 .grid-item:nth-child(44) .fancybox {
   background-image: url(img/8_gallery/EXPERIENCE/experience_5.jpg);
 }

 .grid-item:nth-child(45) .fancybox {
   background-image: url(img/8_gallery/EXPERIENCE/experience_6.jpg);
 }

 .grid-item:nth-child(46) .fancybox {
   background-image: url(img/8_gallery/EXPERIENCE/experience_7.jpg);
 }

 .grid-item:nth-child(47) .fancybox {
   background-image: url(img/8_gallery/EXPERIENCE/experience_8.jpg);
 }

 .grid-item:nth-child(48) .fancybox {
   background-image: url(img/8_gallery/EXPERIENCE/experience_9.jpg);
 }

 .grid-item:nth-child(49) .fancybox {
   background-image: url(img/8_gallery/EXPERIENCE/experience_10.jpg);
 }

 .grid-item:nth-child(50) .fancybox {
   background-image: url(img/8_gallery/EXPERIENCE/experience_11.jpg);
 }

 .grid-item:nth-child(51) .fancybox {
   background-image: url(img/8_gallery/EXPERIENCE/experience_12.jpg);
 }

 .grid-item:nth-child(52) .fancybox {
   background-image: url(img/8_gallery/EXPERIENCE/experience_13.jpg);
 }

 .grid-item:nth-child(53) .fancybox {
   background-image: url(img/8_gallery/EXPERIENCE/experience_14.jpg);
 }

 .grid-item:nth-child(54) .fancybox {
   background-image: url(img/8_gallery/EXPERIENCE/experience_15.jpg);
 }

 .grid-item:nth-child(55) .fancybox {
   background-image: url(img/8_gallery/EXPERIENCE/experience_16.jpg);
 }

 .grid-item:nth-child(56) .fancybox {
   background-image: url(img/8_gallery/EXPERIENCE/experience_17.jpg);
 }

 .grid-item:nth-child(57) .fancybox {
   background-image: url(img/8_gallery/EXPERIENCE/experience_18.jpg);
 }

 .grid-item:nth-child(58) .fancybox {
   background-image: url(img/8_gallery/EXPERIENCE/experience_19.jpg);
 }

 .grid-item:nth-child(59) .fancybox {
   background-image: url(img/8_gallery/EXPERIENCE/experience_20.jpg);
 }

 .grid-item:nth-child(60) .fancybox {
   background-image: url(img/8_gallery/EXPERIENCE/experience_21.jpg);
 }

 .grid-item:nth-child(61) .fancybox {
   background-image: url(img/8_gallery/EXPERIENCE/experience_22.jpg);
 }

 .grid-item:nth-child(62) .fancybox {
   background-image: url(img/8_gallery/EXPERIENCE/experience_23.jpg);
 }

 .grid-item:nth-child(63) .fancybox {
   background-image: url(img/8_gallery/EXPERIENCE/experience_24.jpg);
 }

 .grid-item:nth-child(64) .fancybox {
   background-image: url(img/8_gallery/EXPERIENCE/experience_25.jpg);
 }

 .grid-item:nth-child(65) .fancybox {
   background-image: url(img/8_gallery/EXPERIENCE/experience_26.jpg);
 }

 .grid-item:nth-child(66) .fancybox {
   background-image: url(img/8_gallery/EXPERIENCE/experience_27.jpg);
 }

 .grid-item:nth-child(67) .fancybox {
   background-image: url(img/8_gallery/EXPERIENCE/experience_28.jpg);
 }

 .grid-item:nth-child(68) .fancybox {
   background-image: url(img/8_gallery/EXPERIENCE/experience_29.jpg);
 }

 .grid-item:nth-child(69) .fancybox {
   background-image: url(img/8_gallery/HOTEL/hotel_11.jpg);
 }

 .grid-item:nth-child(70) .fancybox {
   background-image: url(img/8_gallery/HOTEL/hotel_12.jpg);
 }

 .grid-item:nth-child(71) .fancybox {
   background-image: url(img/8_gallery/HOTEL/hotel_13.jpg);
 }

 .grid-item:nth-child(72) .fancybox {
   background-image: url(img/8_gallery/HOTEL/hotel_14.jpg);
 }

 .grid-item:nth-child(73) .fancybox {
   background-image: url(img/8_gallery/HOTEL/hotel_15.jpg);
 }

 .grid-item:nth-child(74) .fancybox {
   background-image: url(img/8_gallery/HOTEL/hotel_16.jpg);
 }

 .grid-item:nth-child(75) .fancybox {
   background-image: url(img/8_gallery/HOTEL/hotel_17.jpg);
 }

 .grid-item:nth-child(76) .fancybox {
   background-image: url(img/8_gallery/HOTEL/hotel_18.jpg);
 }

 .grid-item:nth-child(77) .fancybox {
   background-image: url(img/8_gallery/HOTEL/hotel_19.jpg);
 }

 .grid-item:nth-child(78) .fancybox {
   background-image: url(img/8_gallery/HOTEL/hotel_20.jpg);
 }

 .grid-item:nth-child(79) .fancybox {
   background-image: url(img/8_gallery/HOTEL/hotel_21.jpg);
 }

 .grid-item:nth-child(80) .fancybox {
   background-image: url(img/8_gallery/HOTEL/hotel_22.jpg);
 }

 .grid-item:nth-child(81) .fancybox {
   background-image: url(img/8_gallery/HOTEL/hotel_23.jpg);
 }

 .grid-item:nth-child(82) .fancybox {
   background-image: url(img/8_gallery/HOTEL/hotel_24.jpg);
 }

 .grid-item:nth-child(83) .fancybox {
   background-image: url(img/8_gallery/HOTEL/hotel_25.jpg);
 }

 .grid-item:nth-child(84) .fancybox {
   background-image: url(img/8_gallery/ROOM/room_11.jpg);
 }

 .grid-item:nth-child(85) .fancybox {
   background-image: url(img/8_gallery/ROOM/room_12.jpg);
 }

 .grid-item:nth-child(86) .fancybox {
   background-image: url(img/8_gallery/ROOM/room_13.jpg);
 }

 .grid-item:nth-child(87) .fancybox {
   background-image: url(img/8_gallery/ROOM/room_14.jpg);
 }

 .grid-item:nth-child(88) .fancybox {
   background-image: url(img/8_gallery/ROOM/room_15.jpg);
 }

 .grid-item:nth-child(89) .fancybox {
   background-image: url(img/8_gallery/ROOM/room_16.jpg);
 }
 
 .grid-item:nth-child(90) .fancybox {
   background-image: url(img/8_gallery/ROOM/room_17.jpg);
 }

 .grid-item:nth-child(91) .fancybox {
   background-image: url(img/8_gallery/ROOM/room_18.jpg);
 }

 .grid-item:nth-child(92) .fancybox {
   background-image: url(img/8_gallery/ROOM/room_19.jpg);
 }

 .grid-item:nth-child(93) .fancybox {
   background-image: url(img/8_gallery/ROOM/room_20.jpg);
 }

 .grid-item:nth-child(94) .fancybox {
   background-image: url(img/8_gallery/ROOM/room_21.jpg);
 }

 .grid-item:nth-child(95) .fancybox {
   background-image: url(img/8_gallery/ROOM/room_22.jpg);
 }

 .grid-item:nth-child(96) .fancybox {
   background-image: url(img/8_gallery/ROOM/room_23.jpg);
 }

 .grid-item:nth-child(97) .fancybox {
   background-image: url(img/8_gallery/ROOM/room_24.jpg);
 }

 .grid-item:nth-child(98) .fancybox {
   background-image: url(img/8_gallery/ROOM/room_25.jpg);
 }

 .grid-item:nth-child(99) .fancybox {
   background-image: url(img/8_gallery/FACILITY/facility_11.jpg);
 }

 .grid-item:nth-child(100) .fancybox {
   background-image: url(img/8_gallery/FACILITY/facility_12.jpg);
 }

 .grid-item:nth-child(101) .fancybox {
   background-image: url(img/8_gallery/FACILITY/facility_13.jpg);
 }

 .grid-item:nth-child(102) .fancybox {
   background-image: url(img/8_gallery/FACILITY/facility_14.jpg);
 }

 .grid-item:nth-child(103) .fancybox {
   background-image: url(img/8_gallery/FACILITY/facility_15.jpg);
 }

 .grid-item:nth-child(104) .fancybox {
   background-image: url(img/8_gallery/FACILITY/facility_16.jpg);
 }

 .grid-item:nth-child(105) .fancybox {
   background-image: url(img/8_gallery/FACILITY/facility_17.jpg);
 }

 .grid-item:nth-child(106) .fancybox {
   background-image: url(img/8_gallery/FACILITY/facility_18.jpg);
 }

 .grid-item:nth-child(107) .fancybox {
   background-image: url(img/8_gallery/FACILITY/facility_19.jpg);
 }

 .grid-item:nth-child(108) .fancybox {
   background-image: url(img/8_gallery/FACILITY/facility_20.jpg);
 }




 .grid-item:nth-child(4n-5) {
     /* width: 250px; */
   height: 300px;
 }

 .grid-item:nth-child(2n) {
     /* width: 250px; */

   height: 400px;
 }

 .grid-item:nth-child(3n) {
     /* width: 250px; */

   height: 350px;
 }




</style>


     

    <div class="top">
        <div class="title h2eng">
            GALLERY
        </div>
    </div>
    <div class="scroll-btn" style="z-index: -1;">
            <div class="discoverText">Discover</div>
            <div class="mouse">
                <div class="discoverLine">
                </div>
            </div>
        </div>
    

 
 
 
     <div class="filter">
     <a href="#" data-filter="*" class="current h5eng">All </a>
       <a href="#" data-filter=".HOTEL" class="h5eng">HOTEL</a>
       <a href="#" data-filter=".ROOM" class="h5eng">ROOM</a>
       <a href="#" data-filter=".FACILITY" class="h5eng">FACILITY</a>
       <a href="#" data-filter=".EXPERIENCE" class="h5eng">EXPERIENCE</a>
     </div>


     <div class="wrapperGallery">
       <div class="grid">
         
       <div class="grid-item HOTEL">
       <a class="fancybox" href="img/8_gallery/HOTEL/hotel_1.jpg"></a>
         </div>
         <div class="grid-item HOTEL">
         <a class="fancybox" href="img/8_gallery/HOTEL/hotel_2.jpg"></a>
         </div>
         <div class="grid-item HOTEL">
         <a class="fancybox" href="img/8_gallery/HOTEL/hotel_3.jpg"></a>
     
         </div>
         <div class="grid-item HOTEL">
         <a class="fancybox" href="img/8_gallery/HOTEL/hotel_4.jpg"></a>
     
         </div>
         <div class="grid-item HOTEL">
         <a class="fancybox" href="img/8_gallery/HOTEL/hotel_5.jpg"></a>
         </div>
         <div class="grid-item HOTEL">
         <a class="fancybox" href="img/8_gallery/HOTEL/hotel_6.jpg"></a>
         </div>
         <div class="grid-item HOTEL">
         <a class="fancybox" href="img/8_gallery/HOTEL/hotel_7.jpg"></a>
     
         </div>
         <div class="grid-item HOTEL">
         <a class="fancybox" href="img/8_gallery/HOTEL/hotel_8.jpg"></a>
     
         </div>
         <div class="grid-item HOTEL">
         <a class="fancybox" href="img/8_gallery/HOTEL/hotel_9.jpg"></a>
         </div>
         <div class="grid-item HOTEL">
         <a class="fancybox" href="img/8_gallery/HOTEL/hotel_10.jpg"></a>
         </div>

         <div class="grid-item HOTEL">
       <a class="fancybox" href="img/8_gallery/HOTEL/hotel_11.jpg"></a>
         </div>
         <div class="grid-item HOTEL">
         <a class="fancybox" href="img/8_gallery/HOTEL/hotel_12.jpg"></a>
         </div>
         <div class="grid-item HOTEL">
         <a class="fancybox" href="img/8_gallery/HOTEL/hotel_13.jpg"></a>
     
         </div>
         <div class="grid-item HOTEL">
         <a class="fancybox" href="img/8_gallery/HOTEL/hotel_14.jpg"></a>
     
         </div>
         <div class="grid-item HOTEL">
         <a class="fancybox" href="img/8_gallery/HOTEL/hotel_15.jpg"></a>
         </div>
         <div class="grid-item HOTEL">
         <a class="fancybox" href="img/8_gallery/HOTEL/hotel_16.jpg"></a>
         </div>
         <div class="grid-item HOTEL">
         <a class="fancybox" href="img/8_gallery/HOTEL/hotel_17.jpg"></a>
     
         </div>
         <div class="grid-item HOTEL">
         <a class="fancybox" href="img/8_gallery/HOTEL/hotel_18.jpg"></a>
     
         </div>
         <div class="grid-item HOTEL">
         <a class="fancybox" href="img/8_gallery/HOTEL/hotel_19.jpg"></a>
         </div>
         <div class="grid-item HOTEL">
         <a class="fancybox" href="img/8_gallery/HOTEL/hotel_20.jpg"></a>
         </div>
         <div class="grid-item HOTEL">
       <a class="fancybox" href="img/8_gallery/HOTEL/hotel_21.jpg"></a>
         </div>
         <div class="grid-item HOTEL">
         <a class="fancybox" href="img/8_gallery/HOTEL/hotel_22.jpg"></a>
         </div>
         <div class="grid-item HOTEL">
         <a class="fancybox" href="img/8_gallery/HOTEL/hotel_23.jpg"></a>
     
         </div>
         <div class="grid-item HOTEL">
         <a class="fancybox" href="img/8_gallery/HOTEL/hotel_24.jpg"></a>
     
         </div>
         <div class="grid-item HOTEL">
         <a class="fancybox" href="img/8_gallery/HOTEL/hotel_25.jpg"></a>
         </div>
     
     
     
         <div class="grid-item ROOM">
         <a class="fancybox" href="img/8_gallery/ROOM/room_1.jpg"></a>
         </div>
         <div class="grid-item ROOM">
         <a class="fancybox" href="img/8_gallery/ROOM/room_2.jpg"></a>
         </div>
         <div class="grid-item ROOM">
         <a class="fancybox" href="img/8_gallery/ROOM/room_3.jpg"></a>
         </div>
         <div class="grid-item ROOM">
         <a class="fancybox" href="img/8_gallery/ROOM/room_4.jpg"></a>
         </div>
         <div class="grid-item ROOM">
         <a class="fancybox" href="img/8_gallery/ROOM/room_5.jpg"></a>
         </div>
         <div class="grid-item ROOM">
         <a class="fancybox" href="img/8_gallery/ROOM/room_6.jpg"></a>
         </div>
         <div class="grid-item ROOM">
         <a class="fancybox" href="img/8_gallery/ROOM/room_7.jpg"></a>
         </div>
         <div class="grid-item ROOM">
         <a class="fancybox" href="img/8_gallery/ROOM/room_8.jpg"></a>
         </div>
         <div class="grid-item ROOM">
         <a class="fancybox" href="img/8_gallery/ROOM/room_9.jpg"></a>
         </div>
         <div class="grid-item ROOM">
         <a class="fancybox" href="img/8_gallery/ROOM/room_10.jpg"></a>
         </div>
         <div class="grid-item ROOM">
         <a class="fancybox" href="img/8_gallery/ROOM/room_11.jpg"></a>
         </div>
         <div class="grid-item ROOM">
         <a class="fancybox" href="img/8_gallery/ROOM/room_12.jpg"></a>
         </div>
         <div class="grid-item ROOM">
         <a class="fancybox" href="img/8_gallery/ROOM/room_13.jpg"></a>
         </div>
         <div class="grid-item ROOM">
         <a class="fancybox" href="img/8_gallery/ROOM/room_14.jpg"></a>
         </div>
         <div class="grid-item ROOM">
         <a class="fancybox" href="img/8_gallery/ROOM/room_15.jpg"></a>
         </div>
         <div class="grid-item ROOM">
         <a class="fancybox" href="img/8_gallery/ROOM/room_16.jpg"></a>
         </div>
         <div class="grid-item ROOM">
         <a class="fancybox" href="img/8_gallery/ROOM/room_17.jpg"></a>
         </div>
         <div class="grid-item ROOM">
         <a class="fancybox" href="img/8_gallery/ROOM/room_18.jpg"></a>
         </div>
         <div class="grid-item ROOM">
         <a class="fancybox" href="img/8_gallery/ROOM/room_19.jpg"></a>
         </div>
         <div class="grid-item ROOM">
         <a class="fancybox" href="img/8_gallery/ROOM/room_20.jpg"></a>
         </div>
         <div class="grid-item ROOM">
         <a class="fancybox" href="img/8_gallery/ROOM/room_21.jpg"></a>
         </div>
         <div class="grid-item ROOM">
         <a class="fancybox" href="img/8_gallery/ROOM/room_22.jpg"></a>
         </div>
         <div class="grid-item ROOM">
         <a class="fancybox" href="img/8_gallery/ROOM/room_23.jpg"></a>
         </div>
         <div class="grid-item ROOM">
         <a class="fancybox" href="img/8_gallery/ROOM/room_24.jpg"></a>
         </div>
         <div class="grid-item ROOM">
         <a class="fancybox" href="img/8_gallery/ROOM/room_25.jpg"></a>
         </div>
        
     
         <div class="grid-item FACILITY">
           <a class="fancybox" href="img/8_gallery/FACILITY/facility_1.jpg"></a>
         </div>
         <div class="grid-item FACILITY">
           <a class="fancybox" href="img/8_gallery/FACILITY/facility_2.jpg"></a>
         </div>
         
         <div class="grid-item FACILITY">
           <a class="fancybox" href="img/8_gallery/FACILITY/facility_3.jpg"></a>
         </div>
         <div class="grid-item FACILITY">
           <a class="fancybox" href="img/8_gallery/FACILITY/facility_4.jpg"></a>
         </div>
         
         <div class="grid-item FACILITY">
           <a class="fancybox" href="img/8_gallery/FACILITY/facility_5.jpg"></a>
         </div>
         <div class="grid-item FACILITY">
           <a class="fancybox" href="img/8_gallery/FACILITY/facility_6.jpg"></a>
         </div>
         
         <div class="grid-item FACILITY">
           <a class="fancybox" href="img/8_gallery/FACILITY/facility_7.jpg"></a>
         </div>
         <div class="grid-item FACILITY">
           <a class="fancybox" href="img/8_gallery/FACILITY/facility_8.jpg"></a>
         </div>
         
         <div class="grid-item FACILITY">
           <a class="fancybox" href="img/8_gallery/FACILITY/facility_9.jpg"></a>
         </div>
         <div class="grid-item FACILITY">
           <a class="fancybox" href="img/8_gallery/FACILITY/facility_10.jpg"></a>
         </div>

         <div class="grid-item FACILITY">
           <a class="fancybox" href="img/8_gallery/FACILITY/facility_11.jpg"></a>
         </div>
         <div class="grid-item FACILITY">
           <a class="fancybox" href="img/8_gallery/FACILITY/facility_12.jpg"></a>
         </div>
         
         <div class="grid-item FACILITY">
           <a class="fancybox" href="img/8_gallery/FACILITY/facility_13.jpg"></a>
         </div>
         <div class="grid-item FACILITY">
           <a class="fancybox" href="img/8_gallery/FACILITY/facility_14.jpg"></a>
         </div>
         
         <div class="grid-item FACILITY">
           <a class="fancybox" href="img/8_gallery/FACILITY/facility_15.jpg"></a>
         </div>
         <div class="grid-item FACILITY">
           <a class="fancybox" href="img/8_gallery/FACILITY/facility_16.jpg"></a>
         </div>
         
         <div class="grid-item FACILITY">
           <a class="fancybox" href="img/8_gallery/FACILITY/facility_17.jpg"></a>
         </div>
         <div class="grid-item FACILITY">
           <a class="fancybox" href="img/8_gallery/FACILITY/facility_18.jpg"></a>
         </div>
         
         <div class="grid-item FACILITY">
           <a class="fancybox" href="img/8_gallery/FACILITY/facility_19.jpg"></a>
         </div>
         <div class="grid-item FACILITY">
           <a class="fancybox" href="img/8_gallery/FACILITY/facility_20.jpg"></a>
         </div>
         <div class="grid-item FACILITY">
           <a class="fancybox" href="img/8_gallery/FACILITY/facility_15.jpg"></a>
         </div>
         <div class="grid-item FACILITY">
           <a class="fancybox" href="img/8_gallery/FACILITY/facility_16.jpg"></a>
         </div>
         
         <div class="grid-item FACILITY">
           <a class="fancybox" href="img/8_gallery/FACILITY/facility_17.jpg"></a>
         </div>
         <div class="grid-item FACILITY">
           <a class="fancybox" href="img/8_gallery/FACILITY/facility_18.jpg"></a>
         </div>
         
         <div class="grid-item FACILITY">
           <a class="fancybox" href="img/8_gallery/FACILITY/facility_19.jpg"></a>
         </div>
         <div class="grid-item FACILITY">
           <a class="fancybox" href="img/8_gallery/FACILITY/facility_20.jpg"></a>
         </div>
     
     
     
     
         <div class="grid-item EXPERIENCE">
           <a class="fancybox" href="img/8_gallery/EXPERIENCE/experience_1.jpg"></a>
         </div>
         <div class="grid-item EXPERIENCE">
           <a class="fancybox" href="img/8_gallery/EXPERIENCE/experience_2.jpg"></a>
         </div>
     
         <div class="grid-item EXPERIENCE">
           <a class="fancybox" href="img/8_gallery/EXPERIENCE/experience_3.jpg"></a>
         </div>
     
         <div class="grid-item EXPERIENCE">
           <a class="fancybox" href="img/8_gallery/EXPERIENCE/experience_4.jpg"></a>
         </div>
     
         <div class="grid-item EXPERIENCE">
           <a class="fancybox" href="img/8_gallery/EXPERIENCE/experience_5.jpg"></a>
         </div>
     
         <div class="grid-item EXPERIENCE">
           <a class="fancybox" href="img/8_gallery/EXPERIENCE/experience_6.jpg"></a>
         </div>
     
         <div class="grid-item EXPERIENCE">
           <a class="fancybox" href="img/8_gallery/EXPERIENCE/experience_7.jpg"></a>
         </div>
     
         <div class="grid-item EXPERIENCE">
           <a class="fancybox" href="img/8_gallery/EXPERIENCE/experience_8.jpg"></a>
         </div>
     
         <div class="grid-item EXPERIENCE">
           <a class="fancybox" href="img/8_gallery/EXPERIENCE/experience_9.jpg"></a>
         </div>
     
         <div class="grid-item EXPERIENCE">
           <a class="fancybox" href="img/8_gallery/EXPERIENCE/experience_10.jpg"></a>
         </div>
         <div class="grid-item EXPERIENCE">
           <a class="fancybox" href="img/8_gallery/EXPERIENCE/experience_11.jpg"></a>
         </div>
         <div class="grid-item EXPERIENCE">
           <a class="fancybox" href="img/8_gallery/EXPERIENCE/experience_12.jpg"></a>
         </div>
     
         <div class="grid-item EXPERIENCE">
           <a class="fancybox" href="img/8_gallery/EXPERIENCE/experience_13.jpg"></a>
         </div>
     
         <div class="grid-item EXPERIENCE">
           <a class="fancybox" href="img/8_gallery/EXPERIENCE/experience_14.jpg"></a>
         </div>
     
         <div class="grid-item EXPERIENCE">
           <a class="fancybox" href="img/8_gallery/EXPERIENCE/experience_15.jpg"></a>
         </div>
     
         <div class="grid-item EXPERIENCE">
           <a class="fancybox" href="img/8_gallery/EXPERIENCE/experience_16.jpg"></a>
         </div>
     
         <div class="grid-item EXPERIENCE">
           <a class="fancybox" href="img/8_gallery/EXPERIENCE/experience_17.jpg"></a>
         </div>
     
         <div class="grid-item EXPERIENCE">
           <a class="fancybox" href="img/8_gallery/EXPERIENCE/experience_18.jpg"></a>
         </div>
     
         <div class="grid-item EXPERIENCE">
           <a class="fancybox" href="img/8_gallery/EXPERIENCE/experience_19.jpg"></a>
         </div>
     
         <div class="grid-item EXPERIENCE">
           <a class="fancybox" href="img/8_gallery/EXPERIENCE/experience_20.jpg"></a>
         </div>
     
         <div class="grid-item EXPERIENCE">
           <a class="fancybox" href="img/8_gallery/EXPERIENCE/experience_21.jpg"></a>
         </div>
         <div class="grid-item EXPERIENCE">
           <a class="fancybox" href="img/8_gallery/EXPERIENCE/experience_22.jpg"></a>
         </div>
     
         <div class="grid-item EXPERIENCE">
           <a class="fancybox" href="img/8_gallery/EXPERIENCE/experience_23.jpg"></a>
         </div>
     
         <div class="grid-item EXPERIENCE">
           <a class="fancybox" href="img/8_gallery/EXPERIENCE/experience_24.jpg"></a>
         </div>
     
         <div class="grid-item EXPERIENCE">
           <a class="fancybox" href="img/8_gallery/EXPERIENCE/experience_25.jpg"></a>
         </div>
     
         <div class="grid-item EXPERIENCE">
           <a class="fancybox" href="img/8_gallery/EXPERIENCE/experience_26.jpg"></a>
         </div>
     
         <div class="grid-item EXPERIENCE">
           <a class="fancybox" href="img/8_gallery/EXPERIENCE/experience_27.jpg"></a>
         </div>
     
         <div class="grid-item EXPERIENCE">
           <a class="fancybox" href="img/8_gallery/EXPERIENCE/experience_28.jpg"></a>
         </div>
     
         <div class="grid-item EXPERIENCE">
           <a class="fancybox" href="img/8_gallery/EXPERIENCE/experience_29.jpg"></a>
         </div>
     

     
        
 
     </div>
   </div>