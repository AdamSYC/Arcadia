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
   /* z-index: -1; */
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
        <div class="title h2eng" data-aos="fade-right" data-aos-duration="2000" data-aos-offset="100" data-aos-easing="ease-in-out">
            GALLERY
        </div>
  
      </div>
<!--    
      <div class="scroll-btn" style="z-index: -1;">
            <div class="discoverText">Discover</div>
            <div class="mouse">
                <div class="discoverLine">
                </div>
            </div>
        </div> -->
 
 
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
     

         <script>
      let fancyboxs = document.querySelectorAll('.fancybox');

      fancyboxs.forEach((v) => {
        v.style.backgroundImage = `url(${v.getAttribute("href")})`;
      });
    </script>
        
 
     </div>
   </div>