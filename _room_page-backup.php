<style>
.coverfit{
          width: 100%;
          height: 100%;
          object-fit: cover;
      }
      .rwdShow{
          display: none;
      }
      
      .topimg{
          height: 800px;
          /* width: 100vw; */
          background-image:url("images/roomOverview-room1.jpg");
          background-size: cover;
          background-position: center center;
          display: flex;
          position: relative;
      }
      .topText{
          margin: 250px 0 0 20%;
      }
      .topNumber{
          -webkit-text-stroke: 3px #EB9851;
          font-weight: bold;
          font-size: 100px;
          color: transparent;
      }
      .h2chi{
          color: white;
      }
      .readBtn{
          margin: 60px 0 0 0;
      }
      .readMore{
            background: #EB9851;
            padding: 12px 50px 12px 50px;
            color: white;
            font-family: 'Crimson Text', serif;
            font-size: 18px;
            letter-spacing: 0.03em;
     }
     .readMore:hover{
         text-decoration: none;
        
     }
     @media screen and (max-width: 375px) {
         .rwdShow{
          display: unset;
      }
      .topimg{
            display: none;
        }
      .topNumber{
        -webkit-text-stroke: 1px #EB9851;
          font-size: 50px;
        margin-left: 50px;
      }
      
      .readBtn{
          text-align: center;
          align-items: center;
          margin: 10px 0 0 0;
         
      }
     .readMore{
          
          text-align: center;
      }


      }


/* slide show */
  .container {
    height: 100%;
  }

  body {
    font-family: 'Open Sans', sans-serif;
    font-size: 14px;
  }

  .container {
    display: -webkit-box;
    display: flex;
    -webkit-box-pack: center;
            justify-content: center;
    -webkit-box-align: center;
            align-items: center;
    background-color: #fff;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
            flex-direction: column;
  }

  .title {
    font-size: 38px;
    color: #616161;
    /* font-style: italic; */
    font-weight: 800;
  }

  .timeline {
    width: 100%;
    background-color: #fff;
    box-shadow: 0 5px 25px 5px rgba(0, 0, 0, 0.2);
  }
  .readMoreBtn{
  margin-top: 50px;
  }
  .timeline-text{
    padding: 10px 50px 10px 50px;
    color: white;
    font-family: 'Crimson Text', serif;
    font-size: 16px;
    letter-spacing: 0.03em;
    background-color: #EB9851;
  }
  .timeline .swiper-container {
    height: 800px;
    width: 100%;
    position: relative;
  }
  .timeline .swiper-wrapper {
    -webkit-transition: 2s cubic-bezier(0.68, -0.4, 0.27, 1.34) 0.2s;
    transition: 2s cubic-bezier(0.68, -0.4, 0.27, 1.34) 0.2s;
  }
  .timeline .swiper-slide {
    position: relative;
    color: #fff;
    overflow: hidden;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
  }
  .timeline .swiper-slide::after {
    content: "";
    position: absolute;
    z-index: 1;
    right: -115%;
    bottom: -10%;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
    /* box-shadow: -230px 0 150px 60vw rgba(0, 0, 0, 0.7); */
    border-radius: 100%;
  }
  .timeline .swiper-slide-content {
    position: absolute;
    text-align: center;
    width: 80%;
    min-width: 340px;
    right: 50%;
    top: 13%;
    -webkit-transform: translate(50%, 0);
            transform: translate(50%, 0);
    font-size: 12px;
    z-index: 2;
  }
  .timeline .swiper-slide .timeline-year {
    display: block;

    margin-bottom: 50px;
    -webkit-transform: translate3d(20px, 0, 0);
            transform: translate3d(20px, 0, 0);
    -webkit-text-stroke: 3px #EB9851;
    font-weight: bold;
    font-size: 100px;
    color: transparent;
    
    opacity: 0;
    -webkit-transition: .2s ease .4s;
    transition: .2s ease .4s;
  }
  .timeline .swiper-slide .timeline-title {
    font-weight: 800;
    font-size: 34px;
    margin: 0 0 30px;
    opacity: 0;
    -webkit-transform: translate3d(20px, 0, 0);
            transform: translate3d(20px, 0, 0);
    -webkit-transition: .2s ease .5s;
    transition: .2s ease .5s;
  }
  .timeline .swiper-slide .timeline-text {
    line-height: 1.5;
    opacity: 0;
    -webkit-transform: translate3d(20px, 0, 0);
            transform: translate3d(20px, 0, 0);
    -webkit-transition: .2s ease .6s;
    transition: .2s ease .6s;
  }
  .timeline .swiper-slide-active .timeline-year {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
    -webkit-transition: .4s ease 1.6s;
    transition: .4s ease 1.6s;
  }
  .timeline .swiper-slide-active .timeline-title {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
    -webkit-transition: .4s ease 1.7s;
    transition: .4s ease 1.7s;
  }
  .timeline .swiper-slide-active .timeline-text {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
    -webkit-transition: .4s ease 1.8s;
    transition: .4s ease 1.8s;
  }
  .timeline .swiper-pagination {
    right: 15% !important;
    height: 100%;
    display: none;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
            flex-direction: column;
    -webkit-box-pack: center;
            justify-content: center;
    
    font-weight: 300;
    font-size: 18px;
    z-index: 1;
  }
  .timeline .swiper-pagination::before {
    content: "";
    position: absolute;
    left: -30px;
    top: 0;
    height: 100%;
    width: 1px;
    background-color: rgba(255, 255, 255, 0.2);
  }
  .timeline .swiper-pagination-bullet {
    letter-spacing: 0.1em;
    line-height: 14px;
    font-family: 'Noto Serif TC', serif;
    font-size: 18px;
    font-weight: 700;
    width: auto;
    height: auto;
    text-align: center;
    opacity: 1;
    background: transparent;
    color: white;
    margin: 15px 0 !important;
    position: relative;
  }
  .timeline .swiper-pagination-bullet::before {
    content: "";
    position: absolute;
    top: 8px;
    left: -32.5px;
    letter-spacing: 0.1em;
    line-height: 14px;
    font-family: 'Noto Serif TC', serif;
    font-size: 18px;
    width: 6px;
    height: 6px;
    border-radius: 100%;
    background-color: #09839C;
    -webkit-transform: scale(0);
            transform: scale(0);
    -webkit-transition: .2s;
    transition: .2s;
  }
  .timeline .swiper-pagination-bullet-active {
    letter-spacing: 0.1em;
    line-height: 14px;
    font-family: 'Noto Serif TC', serif;
    font-size: 20px;
    font-weight: 700;
    color: #09839C;
  }
  .timeline .swiper-pagination-bullet-active::before {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
  .timeline .swiper-button-next,
  .timeline .swiper-button-prev {
    background-size: 20px 20px;
    top: 15%;
    width: 20px;
    height: 20px;
    margin-top: 0;
    z-index: 2;
    -webkit-transition: .2s;
    transition: .2s;
  }
  .timeline .swiper-button-prev {
    left: 8%;
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23d4a024'%2F%3E%3C%2Fsvg%3E");
  }
  .timeline .swiper-button-prev:hover {
    -webkit-transform: translateX(-3px);
            transform: translateX(-3px);
  }
  .timeline .swiper-button-next {
    right: 8%;
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23d4a024'%2F%3E%3C%2Fsvg%3E");
  }
  .timeline .swiper-button-next:hover {
    -webkit-transform: translateX(3px);
            transform: translateX(3px);
  }
  @media screen and (min-width: 768px) {
    .timeline .swiper-slide::after {
      right: -30%;
      bottom: -8%;
      width: 240px;
      height: 50%;
      /* box-shadow: -230px 0 150px 50vw rgba(0, 0, 0, 0.7); */
    }
    .timeline .swiper-slide-content {
      right: 30%;
      top: 50%;
      -webkit-transform: translateY(-50%);
              transform: translateY(-50%);
      width: 310px;
      font-size: 11px;
      text-align: right;
    }
    .timeline .swiper-slide .timeline-year {
      margin-bottom: 0;
      font-size: 100px;
    }
    .timeline .swiper-slide .timeline-title {
      font-size: 46px;
      margin: 0;
    }
    .timeline .swiper-pagination {
      display: -webkit-box;
      display: flex;
    }
    .timeline .swiper-button-prev {
      top: 30%;
      left: auto;
      right: 15%;
      -webkit-transform: rotate(90deg) translate(0, 10px);
              transform: rotate(90deg) translate(0, 10px);
    }
    .timeline .swiper-button-prev:hover {
      -webkit-transform: rotate(90deg) translate(-3px, 10px);
              transform: rotate(90deg) translate(-3px, 10px);
    }
    .timeline .swiper-button-next {
      top: auto;
      bottom: 30%;
      right: 15%;
      -webkit-transform: rotate(90deg) translate(0, 10px);
              transform: rotate(90deg) translate(0, 10px);
    }
    .timeline .swiper-button-next:hover {
      -webkit-transform: rotate(90deg) translate(3px, 10px);
              transform: rotate(90deg) translate(3px, 10px);
    }
  }
  @media screen and (min-width: 1024px) {
    .timeline .swiper-slide::after {
      right: -20%;
      bottom: -12%;
      width: 240px;
      height: 50%;
      /* box-shadow: -260px 0 150px 39vw rgba(0, 0, 0, 0.6); */
    }
    .timeline .swiper-slide-content {
      right: 25%;
    }
  }
  @media screen and (max-width: 375px) {
    .container1{
      display: none;
    }
      }
   /* discover */
   .blank{
        text-align: center;
    }  
    .discoverbtn{
        position: relative;
    }
    .discover{
        border-radius:100% ;
        background: #D7E6E8;
        color: white;
        padding: 60px 24px 60px 24px;
        font-family: 'Crimson Text', serif;
        font-size: 25px;
        font-weight: bold;
        letter-spacing: 0.03em;
        z-index: 500;

            
    }
    .discover:hover{
        text-decoration: none;
        color: white;
    }
    .line{
        height: 70px;
        width: 2px;
        background: white;
        margin: 0 auto;
        position: absolute;
        bottom: -230%;
        left: 50%;
    }
    @media screen and (max-width: 375px) {
       .blank{
           display: none;
       }
      }

 /* room overview */
      .roomOverview{
          max-width: 900px;
          margin: 0 auto 200px auto;
      }
      .room{
          margin: 50px auto;
          position: relative;
          width: 350px;
      }
      .topRoom{
          display: flex;
          margin-top: 140px;
      }
      .bottomRoom{
         display: flex;
         margin-top: 60px ;
      }
      .ourRooms{
        color: #09839C;
        text-align: center;
        margin: 200px auto 0 auto;
      }
      .roomimg{
          height: 350px;
      }
      .roomText {
        background-color: #09839C;
        color: white;
        width: 350px;
        justify-content: center;
        text-align: center;
        position: absolute;
        bottom: 0;
      }
     
      @media screen and (max-width: 375px) {
        .roomOverview{
            width: 375px;
            margin: 0;
            padding: 0;
        }
        .ourRooms{
            display: none;
        }
        .topRoom{
             width: 100%;
            flex-direction: column;
              margin: 0;
          }
          .bottomRoom{
            width: 100%;
              flex-direction: column;
              padding: 0;
              margin: 0;
          }
          .room{
             margin-top: 30px;
             width: 375px;
             display: flex;
            flex-direction: column;
         }
         .roomimg{
          height: 450px;
          width: 375px;
         }
         .roomText{
             position: unset;
             width: 375px;
             padding: 30px 0 30px 0;
             align-items: center;
             justify-content: center;
             background-color: transparent;
             color: #5D5D5D;
             margin-top: -75px ;
         }
        

      }
      /* overflow */
      .overflow{
        flex-direction: column;
        width: 100%;
        height: 100%;
        background-color: hsla(0, 0%, 0%, 0.6);  
        position: absolute;
        text-align: center;
        bottom: 0%;
        left: 0;
        right: 0;
        opacity: 0;
        transition: 1s;
      }
      .overflow:hover{
        opacity: 1;
      }
      .overflowText{
        margin-top: 20px;
        color: white;
      }
      .overflowimg{
        margin-top: 20px ;
      }
     .overBtn{
         margin-top: 40px;
     }
    .overflowBtn{
        background: transparent;
        border: 1px solid #EB9851;
        padding: 8px 50px 8px 50px;
        color: #EB9851;
        font-family: 'Crimson Text', serif;
        font-size: 18px;
        letter-spacing: 0.03em;
      }
    .overflowBtn:hover{
        color: #EB9851;
        text-decoration: none;
    }
    .overflow:hover ~ .roomText:after {
      color:red;
    }
    @media screen and (max-width: 375px) {
    .overflow{
       display: none;
       width: 100%;
    }
    .overflow:hover{
        
        display: none;
    }
  
    .overflowBtn{
        font-size: 16px;
    }
    
    }
 /* -----------------discoverButton------------------ */
 @-webkit-keyframes ani-mouse {
        0% {
            opacity: 1;
            top: 55%;
        }

        15% {
            opacity: 1;
            top: 60%;
        }

        50% {
            opacity: 1;
            top: 65%;
        }

        100% {
            opacity: 1;
            top: 55%;
        }

    }

    @-moz-keyframes ani-mouse {
        0% {
            opacity: 1;
            top: 55%;
        }

        15% {
            opacity: 1;
            top: 60%;
        }

        50% {
            opacity: 1;
            top: 65%;
        }

        100% {
            opacity: 1;
            top: 55%;
        }
    }

    @keyframes ani-mouse {
        0% {
            opacity: 1;
            top: 55%;
        }

        15% {
            opacity: 1;
            top: 60%;
        }

        50% {
            opacity: 1;
            top: 65%;
        }

        100% {
            opacity: 1;
            top: 55%;
        }
    }

    .scroll-btn {
        display: flex;
        flex-direction: column;
        align-items: center;
        position: relative;
        margin-top: -250px;
        z-index: 999;
        /* display: block;
	position: absolute;
	left: 0;
	right: 0;
	text-align: center; */
    }

    .discoverText {
        /* display: inline-block; */
        /* line-height: 18px; */
        position: absolute;
        top: 65px;
        z-index: 1;
        font-size: 20px;
        font-weight: 800;
        font-family: 'Crimson Text', serif;
        color: #ffffff;
        /* font-family: "proxima-nova", "Helvetica Neue", Helvetica, Arial, sans-serif; */
        letter-spacing: 3px;
    }

    /* .scroll-btn > *:hover,
.scroll-btn > *:focus,
.scroll-btn > *.active {
	color: #ffffff;
} */
    /* .scroll-btn > *:hover,
.scroll-btn > *:focus,
.scroll-btn > *:active,
.scroll-btn > *.active {
	opacity: 0.8;
	filter: alpha(opacity=80);
} */
    .scroll-btn .mouse {
        position: relative;
        display: block;
        width: 150px;
        height: 150px;
        margin: 0 auto 20px;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        /* border: 3px solid white; */
        border-radius: 50%;
        background: #D7E6E8;
    }

    .scroll-btn .mouse>* {
        position: absolute;
        display: block;
        top: 100%;
        left: 50%;
        width: 2px;
        height: 70px;
        margin: 20px 0 0 0;
        background: white;
        /* border-radius: 50%; */
        -webkit-animation: ani-mouse 2.5s linear infinite;
        -moz-animation: ani-mouse 2.5s linear infinite;
        animation: ani-mouse 2.5s linear infinite;
    }

    @media screen and (max-width: 375px) {
        .scroll-btn{
            display: none;
        }
    }



    /* -----------------discoverButton------------------ */
    @-webkit-keyframes ani-mouse {
        0% {
            opacity: 1;
            top: 55%;
        }

        15% {
            opacity: 1;
            top: 60%;
        }

        50% {
            opacity: 1;
            top: 65%;
        }

        100% {
            opacity: 1;
            top: 55%;
        }

    }

    @-moz-keyframes ani-mouse {
        0% {
            opacity: 1;
            top: 55%;
        }

        15% {
            opacity: 1;
            top: 60%;
        }

        50% {
            opacity: 1;
            top: 65%;
        }

        100% {
            opacity: 1;
            top: 55%;
        }
    }

    @keyframes ani-mouse {
        0% {
            opacity: 1;
            top: 55%;
        }

        15% {
            opacity: 1;
            top: 60%;
        }

        50% {
            opacity: 1;
            top: 65%;
        }

        100% {
            opacity: 1;
            top: 55%;
        }
    }

    .scroll-btn {
        display: flex;
        flex-direction: column;
        align-items: center;
        position: relative;
        /* margin-top: 700px; */
        /* display: block;
	position: absolute;
	left: 0;
	right: 0;
	text-align: center; */
    }

    .discoverText {
        /* display: inline-block; */
        /* line-height: 18px; */
        position: absolute;
        top: 65px;
        z-index: 1;
        font-size: 20px;
        font-weight: 800;
        font-family: 'Crimson Text', serif;
        color: #ffffff;
        /* font-family: "proxima-nova", "Helvetica Neue", Helvetica, Arial, sans-serif; */
        letter-spacing: 3px;
    }

    /* .scroll-btn > *:hover,
.scroll-btn > *:focus,
.scroll-btn > *.active {
	color: #ffffff;
} */
    /* .scroll-btn > *:hover,
.scroll-btn > *:focus,
.scroll-btn > *:active,
.scroll-btn > *.active {
	opacity: 0.8;
	filter: alpha(opacity=80);
} */
    .scroll-btn .mouse {
        position: relative;
        display: block;
        width: 150px;
        height: 150px;
        margin: 0 auto 20px;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        /* border: 3px solid white; */
        border-radius: 50%;
        background: #D7E6E8;
    }

    .scroll-btn .mouse>* {
        position: absolute;
        display: block;
        top: 100%;
        left: 50%;
        width: 2px;
        height: 70px;
        margin: 20px 0 0 0;
        background: white;
        /* border-radius: 50%; */
        -webkit-animation: ani-mouse 2.5s linear infinite;
        -moz-animation: ani-mouse 2.5s linear infinite;
        animation: ani-mouse 2.5s linear infinite;
    }

    @media screen and (max-width: 375px) {
        .scroll-btn{
            display: none;
        }
    }




    </style>

<!-- slide show -->
<div class="container1">

        <div class="timeline">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide" style="background-image:url(img/3_room/roomOverview_1index.jpg)" data-year="海景雙人別墅">
                <div class="swiper-slide-content"><span class="timeline-year">01</span>
                  <h4 class="timeline-title h5chi">海景雙人別墅</h4>
                  <div class="readMoreBtn"><a class="timeline-text" href="">Read More</a></div>
                </div>
              </div>
              <div class="swiper-slide" style="background-image: url(img/3_room/roomOverview_2index.jpg)" data-year="沙灘雙人別墅">
                <div class="swiper-slide-content"><span class="timeline-year">02</span>
                  <h4 class="timeline-title h5chi">沙灘雙人別墅</h4>
                  <div class="readMoreBtn"><a class="timeline-text" href="">Read More</a></div>
                </div>
              </div>
              <div class="swiper-slide" style="background-image: url(img/3_room/roomOverview_3index.jpg)" data-year="海景四人別墅">
                <div class="swiper-slide-content"><span class="timeline-year">03</span>
                  <h4 class="timeline-title h5chi">海景四人別墅</h4>
                  <div class="readMoreBtn"><a class="timeline-text" href="">Read More</a></div>
                </div>
              </div>
             

              
              <div class="swiper-slide" style="background-image:url(img/3_room/roomOverview_4index.jpg)" data-year="沙灘家庭別墅">
                <div class="swiper-slide-content"><span class="timeline-year">04</span>
                  <h4 class="timeline-title h5chi">沙灘家庭別墅</h4>
                  <div class="readMoreBtn"><a class="timeline-text" href="">Read More</a></div>
                </div>
              </div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
        
    <div class="scroll-btn">
            <div class="discoverText">Discover</div>
            <div class="mouse">
                <div class="discoverLine">
                </div>
            </div>
        </div>
      </div>
<!-- discover Btn -->

<!-- room overview -->

<div class="roomOverview">
  <div class="ourRooms h3eng">OUR ROOMS</div>
  <div class="topRoom">
      <div class="room">
          <div class="roomimg"><img class="coverfit" src="img/3_room/roomOverview_5room1.jpg" alt=""></div>
          <span class="topNumber rwdShow">01</span>
          <div class="roomText h4chi">海景雙人別墅</div>
          <div class="readBtn rwdShow"><a class="readMore" href="">Read More</a></div>
              <div class="overflow">
                  <div class="overflowText h4chi">海景雙人別墅</div>
                  <img class="overflowimg" src="img/3_room/roomOverflow_room1.png" width="220px" alt="">
                  <div class="overBtn"><a class="overflowBtn" href="">Read more</a></div>
              </div>
      </div>
      <div class="room">
          <div class="roomimg"><img class="coverfit" src="img/3_room/roomOverview_6room2.jpg" alt=""></div>
          <span class="topNumber rwdShow">02</span>
          <div class="roomText h4chi">沙灘雙人別墅</div>
          <div class="readBtn rwdShow"><a class="readMore" href="">Read More</a></div>
              <div class="overflow">
                  <div class="overflowText h4chi">沙灘雙人別墅</div>
                  <img class="overflowimg" src="img/3_room/roomOverflow_room2.png" width="220px" alt="">
                  <div class="overBtn"><a class="overflowBtn" href="">Read more</a></div>
              </div>
      </div>
  </div>    
  <div class="bottomRoom">
      <div class="room">
          <img class="roomimg coverfit" src="img/3_room/roomOverview_7room3.jpg" alt="">
          <span class="topNumber rwdShow">03</span>
          <div class="roomText h4chi">海景四人別墅</div>
          <div class="readBtn rwdShow"><a class="readMore" href="">Read More</a></div>
              <div class="overflow">
                  <div class="overflowText h4chi">海景四人別墅</div>
                  <img class="overflowimg" src="img/3_room/roomOverflow_room3.png" width="220px" alt="">
                  <div class="overBtn"><a class="overflowBtn" href="">Read more</a></div>
              </div>
      </div>
      <div class="room">
          <img class="roomimg coverfit" src="img/3_room/roomOverview_8room4.jpg" alt="">
          <span class="topNumber rwdShow">04</span>
          <div class="roomText h4chi">沙灘家庭別墅</div>
          <div class="readBtn rwdShow"><a class="readMore" href="">Read More</a></div>
              <div class="overflow">
                  <div class="overflowText h4chi">沙灘家庭別墅</div>
                  <img class="overflowimg" src="img/3_room/roomOverflow_room4.png" width="220px" alt="">
                  <div class="overBtn"><a class="overflowBtn" href="">Read more</a></div>
              </div>
      </div>
  </div>    
</div>