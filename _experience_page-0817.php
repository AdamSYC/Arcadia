<style>
    /* ---------- Experiences Icons---------- */

    .wrapper1 {
        max-width: 1920px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        background-color: #D7E6E8;

    }

    .top {
        position: relative;
        background-image: url(img/5_experience/experience_1index.jpg);
        width: 100vw;
        height: 800px;
        background-size: cover;
        background-position: center center;
    }

    .title {
        position: absolute;
        top: 45%;
        left: 15%;
    }

    @media screen and (max-width: 375px) {
        .top {
            height: 450px;
        }
    }

    .container-experiences1 {
        /* background-color: #fff; */

        /* 設定置中 */
        margin: 120px auto;
        width: 1000px;
    }

    .Exlist {
        width: 1000px;
        display: flex;
        justify-content: space-around;
        list-style-type: none;
        background-color: #fff;
    }

    .experiences {
        background-color: #fff;
        width: 100%;
    }


    .IconNameStyle {
        color: #09839C;
        display: flex;
        justify-content: center;
        text-decoration: none;
        cursor: pointer;
    }


    .exiconbutton {
        width: 100px;
        height: 100px;
        line-height: 100px;
        display: block;
        position: relative;
        border-radius: 50%;
        border: 2px solid #1594ad;
        text-align: center;
        display: inline-block;
        position: relative;
        z-index: 10;
        color: #09839C;
    }

    .exiconbutton:hover {
        color: #fff;
    }

    .exiconbutton:after {
        position: absolute !important;
        content: "";
        width: 80px;
        height: 80px;
        display: block;
        position: relative;
        border-radius: 50%;
        right: 8px;
        top: 8px;
        background-color: #09839C;
        visibility: hidden;
        opacity: 0;
        transition: all 0.4s ease;
        opacity: 1\9;
        visibility: visible\9;
        display: none\9;
        transform: scale(0.5, 0.5);
        z-index: -1;
        transition: all 0.2s ease;
    }

    .exiconbutton:hover:after {
        visibility: visible;
        opacity: 1;
        display: block\9;
        transform: scale(1, 1);

    }

    .exiconbutton svg {
        height: 46px;
        width: 46px;
        position: absolute;
        right: 25%;
        top: 25%;
        fill: #09839C;
        transition: all 0.2s ease;
    }

    .exiconbutton svg:hover {
        fill: #fff;
    }

    ul {
        padding: 0
    }



    /* ----- Experience Icons RWD ----- */
    @media screen and (max-width: 375px) {
        .experiences {
            width: 100%;
            display: none;
        }
    }

    /* ---------- Experiences Icons---------- */


    .container .carousel-nav button {
    background: none;
    border: none;
    cursor:pointer;
    text-transform: uppercase;
    margin: 0 .2rem;
    text-decoration: none;
    color: #CFCFCF;
    transition: color 0.15s ease;
  }

  .container .carousel-nav  button:hover {
    border: none;
    color: #09839C;
  }

  .container .carousel-nav .active-tab {
    border: none;
    color: #5D5D5D;
  }

  .container .carousel-wrapper {
    position: relative;
    overflow: hidden;
    height: 600px;
  }

  .container .carousel-wrapper .slide-belt {
    position: absolute;
    left: 0%;
    width: 300%;
  }

  .container .carousel-wrapper .slide-belt .slide-pair {
    width: 34%;
    float: left;
    display: flex;
  }

  .container .carousel-wrapper .slide-belt .slide-pair .slide {
    width: 50%;
    height: 500px;
    float: left;
    padding: 100px 80px 30px 80px;
    box-sizing: border-box;
  }

  
  .container .carousel-wrapper .slide-belt .slide-pair [class*="content-"] {
    background: #212b38;
  }

  .container .carousel-wrapper .slide-belt .slide-pair [class*="img-"] {
    background-size: cover;
    background-position: center center;
  }


  .exmain {
    margin: 120px auto;
    width: 1000px;
  }

  .AlignEXContent {
    display: flex;
    flex-direction: row;
    justify-content: center;
    margin-top: 35px;
    margin-bottom: 85px;

  }

  .boxEx {
    width: 100vw;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;

  }

  .ContainerSlider {
    max-width: 1000px;
    display: flex;
    flex-direction: row;
  }

  .OceanTitle {
    width: 1000px;
    display: flex;
    align-items: center;
  }

  .ExBigTitle {
    color: #09839C;
  }

  .exnav_item {
    text-decoration: none;
  }

  .AlignEXContent {
    display: flex;
    flex-direction: row;
    justify-content: center;
    margin-top: 35px;
    margin-bottom: 85px;

  }

  .Container-Part {
    z-index: 1;
  }

  .ExPics {
    background-color: darksalmon;
    width: 550px;
    height: 350px;
  }

  .AlignTextCard {
    z-index: 0;
    margin-top: 170px;
    margin-left: -28.5px;
  }

  .ExTextCard {
    background-color: white;
    width: 400px;
  }

  .aligntitle {
    margin-left: 44.5px;
    padding-top: 22.5px;
    font-weight: bold;
    color: #5D5D5D;
  }

  .aligntext {
    margin-top: 10px;
    margin-left: 44.5px;
    padding-bottom: 22.5px;
    color: #5D5D5D;
  }

  .coverfit {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }



  /* ----- Ocean RWD ----- */
  @media screen and (max-width: 1000px) {

    .exmain {
      margin: 0 auto;
      width: 100%;
    }

    .boxEx {
      display: flex;
      flex-direction: column;
      justify-content: center;
      /* align-items: center; */
      width: 100vw;
      height: 100%;
    }

    .coverfit {
    width: 100vw;}

    /* .ContainerSlider {
            max-width: 100%;
            display: flex;
            flex-direction: column;
        } */

    .OceanTitle {
      width: 100%;
    margin-top: 40px;
    }

    .AlignEXContent {
      display: flex;
      flex-direction: column;
      justify-content: center;
      margin-top: 20px;
      margin-bottom: 85px;
    }

    .Container-Part {
      margin-right: 0px;
      margin-bottom: 0px;
      z-index: 0;
    }

    .ExPics {
      background-color: darksalmon;
      width: 100%;
      height: 280px;
    }

    .AlignTextCard {
      display: flex;
      justify-content: center;
      z-index: 1;
      margin-top: -30px;
      margin-left: 0px;
      text-align: center;
    }

    .ExTextCard {
      background-color: white;
      width: 345px;
    }

    .aligntitle {
      margin-left: 0px;
      padding-top: -10px;
      font-weight: bold;
    }

    .aligntext {
      margin-top: 10px;
      margin-left: 0px;
      padding-bottom: 20px;
    }

  }



  @media screen and (max-width: 900px) {
    .container .carousel-wrapper .slide-belt .slide-pair {
      width: 100%;
      /* width: 100vw; */
      order: 1;
    }
  }










</style>


<!---------- Experiences Icons ---------->


<div class="wrapper1">
    <div class="top">
        <div class="title h2eng">
            EXPERIENCE
        </div>


        <div class="scroll-btn">
            <div class="discoverText">Discover</div>
            <div class="mouse">
                <div class="discoverLine">
                </div>
            </div>
        </div>


    </div>



    <div class="experiences" id="experiences">
        <div class="container-experiences1">
            <div>
                <ul class="Exlist">
                    <li>
                        <a href="#Oceanbox" class="exiconbutton">
                            <svg>
                                <use xlink:href="#oceanicon" />
                            </svg>

                        </a>
                        <div class="IconNameStyle h5chi">暢遊海洋</div>
                    </li>

                    <li>
                        <a href="#" class="exiconbutton">
                            <svg>
                                <use xlink:href="#jungleicon" />
                            </svg>
                        </a>
                        <div class="IconNameStyle h5chi">探索森林</div>
                    </li>


                    <li>
                        <a href="#" class="exiconbutton">
                            <svg>
                                <use xlink:href="#Lotus" />
                            </svg>
                        </a>
                        <div class="IconNameStyle h5chi">體驗課程</div>
                    </li>

                    <li>
                        <a href="#" class="exiconbutton">
                            <svg>
                                <use xlink:href="#hearticon" />
                            </svg>
                        </a>
                        <div class="IconNameStyle h5chi">客製服務</div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <svg display="none">

        <symbol id="oceanicon" viewBox="0 -90 512 512" viewBox="0 -90 512 512" xmlns="http://www.w3.org/2000/svg">
            <path d="m409.597656 265.449219c-30.347656 0-46.011718 11.015625-59.828125 20.730469-12.136719 8.53125-21.722656 15.269531-42.578125 15.269531-20.851562 0-30.4375-6.738281-42.570312-15.269531-13.816406-9.71875-29.480469-20.730469-59.828125-20.730469-30.34375 0-46.007813 11.015625-59.824219 20.730469-12.132812 8.53125-21.71875 15.269531-42.570312 15.269531-20.851563 0-30.4375-6.738281-42.570313-15.269531-13.820313-9.714844-29.484375-20.730469-59.828125-20.730469v30c20.855469 0 30.4375 6.738281 42.570312 15.273437 13.820313 9.714844 29.480469 20.726563 59.828126 20.726563 30.34375 0 46.007812-11.011719 59.824218-20.726563 12.132813-8.535156 21.71875-15.273437 42.570313-15.273437 20.855469 0 30.4375 6.738281 42.574219 15.273437 13.816406 9.714844 29.480468 20.726563 59.824218 20.726563 30.347656 0 46.011719-11.011719 59.832032-20.726563 12.132812-8.53125 21.71875-15.273437 42.574218-15.273437 20.855469 0 30.4375 6.738281 42.574219 15.273437 13.816406 9.714844 29.480469 20.726563 59.828125 20.726563v-30c-20.855469 0-30.441406-6.738281-42.574219-15.269531-13.820312-9.714844-29.484375-20.730469-59.828125-20.730469zm0 0" />
            <path d="m409.597656 88.484375c-30.347656 0-46.011718 11.011719-59.828125 20.726563-12.136719 8.53125-21.722656 15.273437-42.578125 15.273437-20.851562 0-30.4375-6.742187-42.570312-15.273437-13.816406-9.714844-29.480469-20.726563-59.828125-20.726563-30.34375 0-46.007813 11.011719-59.824219 20.726563-12.132812 8.53125-21.71875 15.273437-42.570312 15.273437-20.851563 0-30.4375-6.742187-42.570313-15.273437-13.820313-9.714844-29.484375-20.726563-59.828125-20.726563v30c20.855469 0 30.4375 6.738281 42.570312 15.269531 13.820313 9.71875 29.480469 20.730469 59.828126 20.730469 30.34375 0 46.007812-11.015625 59.824218-20.730469 12.132813-8.53125 21.71875-15.269531 42.570313-15.269531 20.855469 0 30.4375 6.738281 42.574219 15.269531 13.816406 9.71875 29.480468 20.730469 59.824218 20.730469 30.347656 0 46.011719-11.015625 59.832032-20.730469 12.132812-8.53125 21.71875-15.269531 42.574218-15.269531 20.855469 0 30.4375 6.738281 42.574219 15.269531 13.816406 9.71875 29.480469 20.730469 59.828125 20.730469v-30c-20.855469 0-30.441406-6.742187-42.574219-15.273437-13.820312-9.714844-29.484375-20.726563-59.828125-20.726563zm0 0" />
            <path d="m409.597656 176.96875c-30.347656 0-46.011718 11.011719-59.828125 20.726562-12.136719 8.53125-21.722656 15.273438-42.578125 15.273438-20.851562 0-30.4375-6.742188-42.570312-15.273438-13.816406-9.714843-29.480469-20.726562-59.828125-20.726562-30.34375 0-46.007813 11.011719-59.824219 20.726562-12.132812 8.53125-21.71875 15.273438-42.570312 15.273438-20.851563 0-30.4375-6.742188-42.570313-15.273438-13.820313-9.714843-29.484375-20.726562-59.828125-20.726562v30c20.855469 0 30.4375 6.738281 42.570312 15.269531 13.820313 9.714844 29.480469 20.730469 59.828126 20.730469 30.34375 0 46.007812-11.015625 59.824218-20.730469 12.132813-8.53125 21.71875-15.269531 42.570313-15.269531 20.855469 0 30.4375 6.738281 42.574219 15.269531 13.816406 9.714844 29.480468 20.730469 59.824218 20.730469 30.347656 0 46.011719-11.015625 59.832032-20.730469 12.132812-8.53125 21.71875-15.269531 42.574218-15.269531 20.855469 0 30.4375 6.738281 42.574219 15.269531 13.816406 9.714844 29.480469 20.730469 59.828125 20.730469v-30c-20.855469 0-30.441406-6.742188-42.574219-15.273438-13.820312-9.714843-29.484375-20.726562-59.828125-20.726562zm0 0" />
            <path d="m469.425781 20.730469c-13.820312-9.71875-29.484375-20.730469-59.828125-20.730469-30.347656 0-46.011718 11.011719-59.828125 20.730469-12.136719 8.53125-21.722656 15.269531-42.578125 15.269531-20.851562 0-30.4375-6.738281-42.570312-15.269531-13.816406-9.71875-29.480469-20.730469-59.828125-20.730469-30.34375 0-46.007813 11.011719-59.824219 20.730469-12.132812 8.53125-21.71875 15.269531-42.570312 15.269531-20.851563 0-30.4375-6.738281-42.570313-15.269531-13.820313-9.71875-29.484375-20.730469-59.828125-20.730469v30c20.855469 0 30.4375 6.738281 42.570312 15.269531 13.820313 9.71875 29.480469 20.730469 59.828126 20.730469 30.34375 0 46.007812-11.011719 59.824218-20.730469 12.132813-8.53125 21.71875-15.269531 42.570313-15.269531 20.855469 0 30.4375 6.738281 42.574219 15.269531 13.816406 9.71875 29.480468 20.730469 59.824218 20.730469 30.347656 0 46.011719-11.011719 59.832032-20.730469 12.132812-8.53125 21.71875-15.269531 42.574218-15.269531 20.855469 0 30.4375 6.738281 42.574219 15.269531 13.816406 9.71875 29.480469 20.730469 59.828125 20.730469v-30c-20.855469 0-30.441406-6.738281-42.574219-15.269531zm0 0" />
        </symbol>



        <symbol version="1.1" id="jungleicon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
            <g>
                <g>
                    <path d="M406,421c58.449,0,106-47.103,106-105c0-34.303-17.079-66.251-44.718-85.703C476.863,215.769,482,198.787,482,181
        c0-38.554-25.226-72.608-61.467-85.037C415.507,42.205,370.543,0,316,0c-21.659,0-42.592,6.675-60.143,18.955
        C238.866,7.011,218.229,0,196,0C141.457,0,96.493,42.205,91.467,95.963C55.226,108.392,30,142.446,30,181
        c0,17.787,5.137,34.769,14.718,49.297C17.079,249.749,0,281.697,0,316c0,57.897,47.551,105,106,105h75v61h-75
        c-8.284,0-15,6.716-15,15s6.716,15,15,15h300c8.284,0,15-6.716,15-15s-6.716-15-15-15h-75v-61H406z M316,30
        c41.027,0,75.594,33.855,74.853,77.238c-0.125,7.241,4.942,13.538,12.043,14.964C431.349,127.919,452,152.647,452,181
        c0,16.165-6.383,31.344-17.973,42.74c-7.473,7.348-5.283,19.925,4.232,24.315C464.831,260.316,482,286.986,482,316
        c0,41.355-34.093,75-76,75h-46.596C378.887,371.927,391,345.354,391,316c0-34.303-17.079-66.251-44.718-85.703
        C355.863,215.769,361,198.787,361,181c0-38.602-24.804-72.621-60.464-85.011c-1.953-20.958-9.977-40.16-22.272-55.792
        C289.638,33.568,302.624,30,316,30z M301,482h-90v-61c14.8,0,80.875,0,90,0V482z M286,391c-7.836,0-67.566,0-75,0v-98.787
        l55.606-55.606c5.858-5.858,5.858-15.355,0-21.213c-5.857-5.858-15.355-5.858-21.213,0L211,249.787V106c0-8.284-6.716-15-15-15
        s-15,6.716-15,15v83.787l-34.394-34.393c-5.857-5.858-15.355-5.858-21.213,0c-5.858,5.858-5.858,15.355,0,21.213L181,232.213
        v77.574l-34.394-34.394c-5.857-5.858-15.355-5.858-21.213,0c-5.858,5.858-5.858,15.355,0,21.213L181,352.213V391h-75
        c-41.907,0-76-33.645-76-75c0-29.014,17.169-55.684,43.741-67.944c9.516-4.391,11.705-16.968,4.232-24.315
        C66.383,212.344,60,197.165,60,181c0-28.353,20.651-53.082,49.105-58.798c7.255-1.457,12.98-8.196,11.899-16.97
        C121.411,63.677,154.897,30,196,30c41.103,0,74.589,33.676,74.996,75.231c-1.071,8.684,4.56,15.497,11.899,16.971
        C310.769,127.802,331,152.53,331,181c0,16.165-6.383,31.344-17.973,42.74c-7.473,7.348-5.283,19.925,4.232,24.315
        C343.831,260.316,361,286.986,361,316C361,357.355,327.355,391,286,391z" />
                </g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
        </symbol>



        <symbol id="Lotus" enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
            <path d="m507.603 371.059c-.001-.001-.003-.003-.004-.004-14.586-14.585-31.085-26.391-49.229-35.296 34.099-37.457 47.43-82.462 47.43-89.651 0-7.061-4.884-12.982-11.456-14.577-24.377-6.486-49.898-8.414-74.955-5.777.924-4.675 1.714-9.389 2.341-14.146 3.806-28.909 1.91-57.846-5.634-86.009-2.233-8.334-10.699-12.664-18.378-10.607-28.257 7.568-54.789 20.78-77.885 38.609-15.348-42.422-39.06-69.623-53.223-83.787-2.813-2.813-6.637-4.394-10.615-4.394s-7.793 1.581-10.606 4.394c-14.118 14.118-37.86 41.322-53.223 83.786-23.096-17.829-49.628-31.041-77.885-38.609-8.004-2.142-16.225 2.604-18.37 10.605-5.246 19.571-12.141 55.423-3.302 100.157-25.04-2.635-50.543-.712-74.905 5.764-6.6 1.576-11.507 7.517-11.507 14.599 0 5.453 11.721 50.413 47.431 89.642-18.146 8.905-34.645 20.711-49.231 35.297-2.816 2.813-4.397 6.636-4.397 10.614s1.581 7.793 4.394 10.606c35.019 35.019 81.579 54.305 131.103 54.305 44.678 0 86.944-15.699 120.5-44.483 33.556 28.784 75.821 44.483 120.5 44.483 49.379 0 95.813-19.174 130.796-53.999 2.898-2.735 4.708-6.613 4.708-10.913-.001-4.143-1.682-7.895-4.398-10.609zm-96.911-113.832c20.104-3.509 40.79-3.504 60.895-.007-14.171 38.937-41.3 71.347-77.612 92.309-24.536 14.168-51.495 22.089-78.997 23.515 44.028-26.02 67.684-60.141 79.043-79.815 6.62-11.466 12.209-23.541 16.671-36.002zm-370.284-.008c20.104-3.496 40.79-3.502 60.892.007 4.461 12.461 10.052 24.538 16.671 36 11.356 19.669 35.014 53.798 79.043 79.816-27.5-1.427-54.464-9.349-78.999-23.516-36.303-20.955-63.43-53.365-77.607-92.307zm95.088 159.362c-36.208 0-70.523-12.297-98.18-34.919 12.111-9.914 25.51-17.837 40.033-23.669 8.106 6.474 16.709 12.346 25.666 17.516 17.546 10.132 50.664 25.934 96.034 27.575-19.73 8.845-41.282 13.497-63.553 13.497zm8.456-138.354c-10.659-18.46-34.046-66.383-22.505-129.59 22.68 8.13 43.728 20.532 61.833 36.467-3.105 15.105-4.675 30.519-4.675 45.941 0 23.924 3.708 67.705 30.765 114.417-36.333-22.354-55.918-50.781-65.418-67.235zm112.044 81.374c-43.498-50.888-47.391-106.33-47.391-128.556 0-22.249 3.9-77.679 47.391-128.557 43.491 50.879 47.391 106.305 47.391 128.557 0 22.246-3.901 77.679-47.391 128.556zm77.391-128.557c0-15.422-1.57-30.835-4.675-45.941 18.108-15.937 39.157-28.339 61.839-36.469 11.534 63.209-11.851 111.131-22.51 129.592-9.531 16.507-29.122 44.904-65.419 67.234 27.046-46.691 30.765-90.478 30.765-114.416zm43.109 185.537c-22.27 0-43.823-4.651-63.553-13.498 45.444-1.644 78.588-17.5 96.031-27.573 8.959-5.171 17.562-11.043 25.668-17.518 14.523 5.833 27.922 13.756 40.034 23.669-27.656 22.622-61.972 34.92-98.18 34.92z" />
        </symbol>




        <symbol version="1.1" id="hearticon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
            <g>
                <g>
                    <path d="M473.79,262.388c25.948-32.95,38.12-67.1,38.12-106.471c0-84.86-56.623-155.882-135.976-155.882
        c-42.557,0-79.451,21.773-106.692,62.965c-5.248,7.936-9.648,15.856-13.287,23.233c-3.638-7.377-8.039-15.297-13.287-23.233
        C215.427,21.808,178.534,0.035,135.976,0.035C56.514,0.035,0,71.182,0,155.917c0,83.722,55.82,130.104,140.313,200.312
        c26.339,21.886,56.08,46.606,88.083,75.708c25.18,47.552,75.179,80.028,132.629,80.028c83.247,0,150.973-67.278,150.973-149.974
        C511.999,323.795,497.543,288.895,473.79,262.388z M211.822,377.233c-18.578-16.017-36.102-30.583-52.339-44.075
        C78.734,266.062,29.995,225.564,29.995,155.917c0-71.767,45.562-125.887,105.981-125.887c32.243,0,59.577,16.442,81.244,48.868
        c17.177,25.706,24.144,52.094,24.206,52.334c1.697,6.628,7.666,11.255,14.507,11.266c0.008,0,0.016,0,0.024,0
        c6.831,0,12.804-4.629,14.519-11.243c0.068-0.264,7.035-26.65,24.213-52.357c21.666-32.426,49.001-48.868,81.244-48.868
        c60.419,0,105.981,54.12,105.981,125.887c0,31.531-9.696,59.219-30.333,86.149c-25.246-18.859-56.609-30.05-90.556-30.05
        c-82.696,0-149.974,67.278-149.974,149.974C211.052,367.135,211.313,372.22,211.822,377.233z M361.027,481.968
        c-66.146,0-119.979-53.823-119.979-119.979S294.87,242.01,361.027,242.01c66.708,0,120.979,53.823,120.979,119.979
        S427.735,481.968,361.027,481.968z" />
                </g>
            </g>
            <g>
                <g>
                    <path d="M446.616,306.392c-5.855-5.857-15.351-5.857-21.208,0l-79.38,79.379l-49.385-49.384c-5.856-5.857-15.352-5.857-21.209,0
        c-5.857,5.857-5.857,15.352,0,21.209l59.989,59.99c5.856,5.857,15.353,5.857,21.209,0l89.984-89.984
        C452.473,321.744,452.473,312.249,446.616,306.392z" />
                </g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
        </symbol>


    </svg>



    <!---------- Experiences Icons---------->


    <!---------- Experiences Main Content ---------->
    <section id="tab1" class="carousel Ocean-MainContent exmain">

<div class="container boxEx">

  <div class="OceanTitle">
    <span class="ExBigTitle h4chi">暢遊海洋</span>

    <div class="carousel-nav d-flex">
      <button class="OceanSmallTitle1 h5chi" href="#">浮潛潛水</button>
      <button class="OceanSmallTitle2 h5chi" href="#">衝浪體驗</button>
    </div>

  </div>


  <div class="carousel-wrapper">
    <div class="slide-belt d-flex">


      <div class="slide-pair">

        <div class="AlignEXContent">
          <div class="Container-Part">
            <div class="ExPics">
              <img class="coverfit" src="img/5_experience/experience_2ocean.jpg" alt="diving">
            </div>
          </div>
          <div class="AlignTextCard">
            <div class="ExTextCard">
              <div class="aligntitle">
                <span class="h5chi">浮潛潛水</span>
              </div>

              <div class="aligntext">
                <span class="bodytextchi">幾乎所有水域裡都可以浮潛，<br>
                  來到 ARCADIA 怎麼可以不浮潛？<br>
                  <br>體驗海底五彩繽紛世界，<br>
                  即使不會游泳也不要緊，<br>
                  只要穿上浮潛裝備，聽從當地教練指示，<br>
                  就能輕輕鬆鬆在大海裡探索美麗的海底世界。</span>
              </div>
            </div>
          </div>
        </div>

      </div>


      <div class="slide-pair">

        <div class="AlignEXContent">

          <div class="Container-Part">
            <div class="ExPics">
              <img class="coverfit" src="img/5_experience/experience_2surf.jpg" alt="diving">
            </div>
          </div>

          <div class="AlignTextCard">
            <div class="ExTextCard">
              <div class="aligntitle">
                <span class="h5chi">衝浪體驗</span>
              </div>

              <div class="aligntext">
                <span class="bodytextchi">歡迎來到ARCADIA的衝浪學校<br> <br>
                  如果你曾接觸過衝浪，<br>
                  專業的教練來帶你更深入的學習衝浪技巧，<br>
                  也會有中文助教預先說明衝浪相關知識，<br>
                  與你共同完成安全的衝浪學習之旅。</span>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>

</div>

</section>



<section id="tab2" class="carousel Ocean-MainContent exmain">

<div class="container boxEx">

  <div class="OceanTitle">
    <span class="ExBigTitle h4chi">探索森林</span>

    <div class="carousel-nav d-flex">
      <button class="OceanSmallTitle1 h5chi" href="#">生態探訪</button>
      <button class="OceanSmallTitle2 h5chi" href="#">古蹟尋訪</button>
    </div>

  </div>


  <div class="carousel-wrapper">
    <div class="slide-belt d-flex">


      <div class="slide-pair">

        <div class="AlignEXContent">
          <div class="Container-Part">
            <div class="ExPics">
              <img class="coverfit" src="img/5_experience/experience_3jungle.jpg" alt="diving">
            </div>
          </div>
          <div class="AlignTextCard">
            <div class="ExTextCard">
              <div class="aligntitle">
                <span class="h5chi">生態探訪</span>
              </div>

              <div class="aligntext">
                <span class="bodytextchi">讓 ARCADIA 專業的團隊帶你<br>
                  體驗熱帶雨林之美，認識雨林中的多元生態。<br>
                  <br>生動有趣的導覽方式讓大人小孩都能<br>
                  快樂學習尊重生命、愛護生態環境，<br>
                  並且帶入生命教育與環保的概念，<br>
                  沐浴在雨林豐沛的芬多精中。</span>
              </div>
            </div>
          </div>
        </div>

      </div>


      <div class="slide-pair">

        <div class="AlignEXContent">

          <div class="Container-Part">
            <div class="ExPics">
              <img class="coverfit" src="img/5_experience/experience_3historic.jpg" alt="diving">
            </div>
          </div>

          <div class="AlignTextCard">
            <div class="ExTextCard">
              <div class="aligntitle">
                <span class="h5chi">古蹟尋訪</span>
              </div>

              <div class="aligntext">
                <span class="bodytextchi">歡迎來到ARCADIA的衝浪學校<br> <br>
                  如果你曾接觸過衝浪，<br>
                  專業的教練來帶你更深入的學習衝浪技巧，<br>
                  也會有中文助教預先說明衝浪相關知識，<br>
                  與你共同完成安全的衝浪學習之旅。</span>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>

</div>

</section>



<section id="tab3" class="carousel Ocean-MainContent exmain">

<div class="container boxEx">

  <div class="OceanTitle">
    <span class="ExBigTitle h4chi">特色體驗</span>

    <div class="carousel-nav d-flex">
      <button class="OceanSmallTitle1 h5chi" href="#">熏香按摩</button>
      <button class="OceanSmallTitle2 h5chi" href="#">舒壓瑜珈</button>
    </div>

  </div>


  <div class="carousel-wrapper">
    <div class="slide-belt d-flex">


      <div class="slide-pair">

        <div class="AlignEXContent">
          <div class="Container-Part">
            <div class="ExPics">
              <img class="coverfit" src="img/5_experience/experience_4massage.jpg" alt="diving">
            </div>
          </div>
          <div class="AlignTextCard">
            <div class="ExTextCard">
              <div class="aligntitle">
                <span class="h5chi">熏香按摩</span>
              </div>

              <div class="aligntext">
                <span class="bodytextchi">把握每分每秒盡情體驗道地的異國風情，<br>
                  讓身體舒適的放鬆，融合當下愉悅氣氛，<br>
                  休息就顯得無比的重要。<br>
                  <br>
                  按摩是現代人不可或缺的日常保健之一，<br>
                  適度的按摩能夠疏通經絡、<br>恢復肌肉彈性、保持身心靈放鬆愉悅。</span>
              </div>
            </div>
          </div>
        </div>

      </div>


      <div class="slide-pair">

        <div class="AlignEXContent">

          <div class="Container-Part">
            <div class="ExPics">
              <img class="coverfit" src="img/5_experience/experience_4yoga.jpg" alt="diving">
            </div>
          </div>

          <div class="AlignTextCard">
            <div class="ExTextCard">
              <div class="aligntitle">
                <span class="h5chi">舒壓瑜珈</span>
              </div>

              <div class="aligntext">
                <span class="bodytextchi">歡迎來到ARCADIA的衝浪學校<br> <br>
                  如果你曾接觸過衝浪，<br>
                  專業的教練來帶你更深入的學習衝浪技巧，<br>
                  也會有中文助教預先說明衝浪相關知識，<br>
                  與你共同完成安全的衝浪學習之旅。</span>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>

</div>

</section>



<section id="tab4" class="carousel Ocean-MainContent exmain">

<div class="container boxEx">

  <div class="OceanTitle">
    <span class="ExBigTitle h4chi">客製服務</span>

    <div class="carousel-nav d-flex">
      <button class="OceanSmallTitle1 h5chi" href="#">派對規劃</button>
      <button class="OceanSmallTitle2 h5chi" href="#">尾牙春酒</button>
    </div>

  </div>


  <div class="carousel-wrapper">
    <div class="slide-belt d-flex">


      <div class="slide-pair">

        <div class="AlignEXContent">
          <div class="Container-Part">
            <div class="ExPics">
              <img class="coverfit" src="img/5_experience/experience_5party.jpg" alt="diving">
            </div>
          </div>
          <div class="AlignTextCard">
            <div class="ExTextCard">
              <div class="aligntitle">
                <span class="h5chi">派對規劃</span>
              </div>

              <div class="aligntext">
                <span class="bodytextchi">特殊紀念日選擇來 ARCADIA 渡假嗎？<br>
                  <br>我們提供優質有質感的佈置，<br>
                  針對您的派對有不同的選擇，<br>
                  幫您籌備派對流程，<br>
                  留下永生難忘的絕妙回憶。</span>
              </div>
            </div>
          </div>
        </div>

      </div>


      <div class="slide-pair">

        <div class="AlignEXContent">

          <div class="Container-Part">
            <div class="ExPics">
              <img class="coverfit" src="img/5_experience/experience_5drink.jpg" alt="diving">
            </div>
          </div>

          <div class="AlignTextCard">
            <div class="ExTextCard">
              <div class="aligntitle">
                <span class="h5chi">尾牙春酒</span>
              </div>

              <div class="aligntext">
                <span class="bodytextchi">歡迎來到ARCADIA的衝浪學校<br> <br>
                  如果你曾接觸過衝浪，<br>
                  專業的教練來帶你更深入的學習衝浪技巧，<br>
                  也會有中文助教預先說明衝浪相關知識，<br>
                  與你共同完成安全的衝浪學習之旅。</span>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>

</div>
</section>



