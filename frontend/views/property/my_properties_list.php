
<div class="content">
    <style>
        .dropdown-menue
        {}

        .dropdown-content {
            display: none;/*Hides the content*/
            position: absolute;
            background-color: #fff;
            min-width: 150px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.5);/*Adds a drop shadow*/
            z-index: 1;
            border-radius: 2%;
        }

        .dropdown-content:after{
            content: '';
            position: absolute;
            top: 0px;
            left: 42%;
            margin-left: -16px;
            margin-top: -15px;
            width: 0;
            z-index: 1;
            height: 0;
            border-bottom: solid 15px #586ada;
            border-left: solid 15px transparent;
            border-right: solid 15px transparent;
        }

        /* Style the links inside the dropdown */
        .dropdown-content a {
            float: none;
            color: #333;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropbtn
        {
            cursor: pointer;
        }

        .dropbtn-basic
        {
            cursor: pointer;
        }
        .dro
        {
            color: white;
        }


        .dro:hover, .dro:focus {
            background-color: #2980B9;

        }
        .dropdown {
            position: relative;
            display: inline-block;
        }


.dropdown-content-basic-details {
            display: none;
            position: absolute;
            margin-top:3px;
            width:40px;
            height:40px;
            background-color: #f1f1f1;
            min-width: 160px;
            overflow: auto;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    border-up: solid -15px #a71d2a; /* Creates the arrow pointing up, to change to a notch instead user border-top */

    border-right: solid 15px transparent; /* Creates triangle effect */
    border-top-left-radiu: -2px;
            z-index: 1;
        }





        .dropdown-content-basic-details a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown a:hover {background-color: #ddd;}

        .show-content {display: block;}
    </style>
    <div class="container-fluid" >
        <div class="card-title">My properties</div>
            <div class="card property-card-list shadow-div" >

                <div id="mainHeding-location-listing"style="height: 43px">
                    <div > <img class="image-property img-property" src="images/chess-board.jpg" alt="Matrix"></div>
                    <div >
                        <div id="column-2-listing">
                        <div>

                          <span class="hotelHeading" >American Tourister  <img class="f-star" src="images/Star-1.svg" alt="Matrix">
                           <img class="f-star" style="padding-left: 2px"  src="images/Star-1.svg" alt="Matrix">
                           <img  class="f-star" style="padding-left: 2px" src="images/Star-1.svg" alt="Matrix">
                           </span>

                        </div>
                         <div> <small  class="smallFonts fontsize-location"><i  class="fa fa-map-marker locatiospace" aria-hidden="true"></i> Alappuzha ,Punnamada.kerala</small></div>
                        </div>
                    </div>
                    <div >
                        <div id="column-3links-listing">

                            <div id="link-properties-notification">
                              <div>  <span class="icon-button__badge">2</span></div>
                              <div>  <span class="icon-button__badge">2</span></div>
                              <div>  <span class="icon-button__badge">2</span></div>
                              <div>  <span class="icon-button__badge">2</span></div>
                              <div>  <span class="icon-button__badge">2</span></div>

                            </div>
                            <div id="link-properties">

                                <div>  <img class="margin-left-right-spacing" src="images/message-1.svg"></div>
                                <div>  <img class="margin-left-right-spacing" src="images/note-1.svg"></div>
                                <div>  <img class="margin-left-right-spacing" src="images/tick-properties.svg"></div>
                                <div>  <img class="margin-left-right-spacing" src="images/blocking-icon.svg"></div>
                                <div>  <img class="margin-left-right-spacing" src="images/booking-icon.svg"></div>

                             </div>
                             <div id="link-properties-label">
                                <div><span class="spanText-size">messages</span> </div>
                                 <div><span class="spanText-size" >srr</span> </div>
                                   <div><span class="spanText-size">Availability</span> </div>
                                 <div><span class="spanText-size">blocking</span> </div>
                                 <div><span class="spanText-size">booking</span> </div>

                             </div>

                       </div>


                            <div>


                            </div>

                        </div>

                    <div> </div>

                      <div >


                          <div id="column-4links-listing">
                              <div id="link-properties-action">
                                  <div> <img class="margin-left-right-spacing dropbtn"  onclick="myFunction()" src="images/edit-details.svg" >
                                          <div id="myDropdown" class="dropdown-content" style="height: 120px; background-color: #586ADA; margin-left: -49px; margin-top: 10px;             ">
                                              <a href="#home" class="dro"><img  src="images/edit-sub-menue-icon.svg" style="margin-right: 2px;"> <span style="color: white"> Basic Details</span></a>
                                              <a href="#about" class="dro"><img  src="images/edit-sub-menue-icon.svg" style="margin-right: 2px;"> <span style="color: white"> Basic Details</span></a>
                                              <a href="#contact" class="dro"><img  src="images/edit-sub-menue-icon.svg" style="margin-right: 2px;"> <span style="color: white"> Basic Details</span></a>
                                          </div>
                                     </div>
                                  <div> <img class="margin-left-right-spacing dropbtn-basic"  onclick="myFunctionBasic()"  src="images/basic-details.svg" ></a>
                                      <div id="myDropdown-basic" class="dropdown-content-basic-details" style="height: 80px; background-color: #586ADA;">
                                          <a href="#home" class="dro"> <img  src="images/edit-sub-menue-icon.svg"  style="margin-right: 2px;" > <span style="color: white">  Assign Slab </span></a>
                                          <a href="#about" class="dro"><img  src="images/edit-sub-menue-icon.svg" style="margin-right: 2px;"> <span style="color: white"> Campaign </span></a>
                                      </div>
                                  </div>


                                  <div>  <a href="#"> <img class="margin-left-right-spacing" src="images/eye-view-icon.svg"></a></div>
                                  <div>  <a href="#"> <img class="margin-left-right-spacing" src="images/delete-1-icon.svg"></a></div>


                              </div>

                          </div>

                       </div>
               </div>




                </div>
        <div class="card property-card-list  shadow-div" >

            <div id="mainHeding-location-listing"style="height: 43px">
                <div > <img class="image-property img-property" src="images/chess-board.jpg" alt="Matrix"></div>
                <div >
                    <div id="column-2-listing">
                        <div>

                          <span class="hotelHeading" > American Tourister  <img class="f-star" src="images/Star-1.svg" alt="Matrix">
                           <img class="f-star" style="padding-left: 2px"  src="images/Star-1.svg" alt="Matrix">
                           <img  class="f-star" style="padding-left: 2px" src="images/Star-1.svg" alt="Matrix">
                           </span>

                        </div>
                        <div> <small  class="smallFonts fontsize-location"><i  class="fa fa-map-marker locatiospace" aria-hidden="true"></i> Alappuzha ,Punnamada.kerala</small></div>
                    </div>
                </div>
                <div >
                    <div id="column-3links-listing">
                        <div id="link-properties-notification">
                            <div>  </div>
                            <div> </div>
                            <div>  </div>
                            <div> </div>
                            <div> </div>

                        </div>
                        <div id="link-properties">
                            <div >  <img class="margin-left-right-spacing" src="images/message-1.svg"></div>
                            <div>  <img class="margin-left-right-spacing" src="images/note-1.svg"></div>
                            <div>  <img class="margin-left-right-spacing" src="images/tick-properties.svg"></div>
                            <div>  <img class="margin-left-right-spacing" src="images/blocking-icon.svg"></div>
                            <div>  <img class="margin-left-right-spacing" src="images/booking-icon.svg"></div>

                        </div>
                        <div id="link-properties-label">
                            <div><span class="spanText-size">messages</span> </div>
                            <div><span class="spanText-size" >srr</span> </div>
                            <div><span class="spanText-size">Availability</span> </div>
                            <div><span class="spanText-size">blocking</span> </div>
                            <div><span class="spanText-size">booking</span> </div>

                        </div>

                    </div>


                    <div>


                    </div>

                </div>

                <div> </div>

                <div >

                    <div id="column-4links-listing">
                        <div id="link-properties-action">
                            <div> <a href="#">  <img class="margin-left-right-spacing" src="images/edit-details.svg"></a></div>
                            <div> <a href="#">  <img class="margin-left-right-spacing" src="images/basic-details.svg"></a></div>
                            <div>  <a href="#"> <img class="margin-left-right-spacing" src="images/eye-view-icon.svg"></a></div>
                            <div>   <a href="#"><img class="margin-left-right-spacing" src="images/delete-1-icon.svg"></a></div>


                        </div>

                    </div>

                </div>
            </div>




        </div>
        <div class="card property-card-list  shadow-div" >

            <div id="mainHeding-location-listing"style="height: 43px">
                <div > <img class="image-property img-property" src="images/chess-board.jpg" alt="Matrix"></div>
                <div >
                    <div id="column-2-listing">
                        <div>

                          <span class="hotelHeading" > American Tourister <img class="f-star" src="images/Star-1.svg" alt="Matrix">
                           <img class="f-star" style="padding-left: 2px"  src="images/Star-1.svg" alt="Matrix">
                           <img  class="f-star" style="padding-left: 2px" src="images/Star-1.svg" alt="Matrix">
                           </span>

                        </div>
                        <div> <small  class="smallFonts fontsize-location"><i  class="fa fa-map-marker locatiospace" aria-hidden="true"></i> Alappuzha ,Punnamada.kerala</small></div>
                    </div>
                </div>
                <div >
                    <div id="column-3links-listing">
                        <div id="link-properties-notification">
                            <div>  </div>
                            <div> </div>
                            <div>  </div>
                            <div> </div>
                            <div> </div>

                        </div>
                        <div id="link-properties">
                            <div>  <img class="margin-left-right-spacing" src="images/message-1.svg"></div>
                            <div>  <img class="margin-left-right-spacing" src="images/note-1.svg"></div>
                            <div>  <img class="margin-left-right-spacing" src="images/tick-properties.svg"></div>
                            <div>  <img class="margin-left-right-spacing" src="images/blocking-icon.svg"></div>
                            <div>  <img class="margin-left-right-spacing" src="images/booking-icon.svg"></div>

                        </div>
                        <div id="link-properties-label">
                            <div><span class="spanText-size">messages</span> </div>
                            <div><span class="spanText-size" >srr</span> </div>
                            <div><span class="spanText-size">Availability</span> </div>
                            <div><span class="spanText-size">blocking</span> </div>
                            <div><span class="spanText-size">booking</span> </div>

                        </div>

                    </div>


                    <div>


                    </div>

                </div>

                <div> </div>

                <div >

                    <div id="column-4links-listing">
                        <div id="link-properties-action">
                            <div> <a href="#"> <img class="margin-left-right-spacing" src="images/edit-details.svg"></a></div>
                            <div>  <a href="#"> <img class="margin-left-right-spacing" src="images/basic-details.svg"></a></div>
                            <div>  <a href="#"> <img class="margin-left-right-spacing" src="images/eye-view-icon.svg"></a></div>
                            <div>  <a href="#"> <img class="margin-left-right-spacing" src="images/delete-1-icon.svg"></a></div>


                        </div>

                    </div>

                </div>
            </div>




        </div>

    </div>


    </div>

<script>
    /* When the user clicks on the button,
    toggle between hiding and showing the dropdown content */
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show-content");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show-content')) {
                    openDropdown.classList.remove('show-content');
                }
            }
        }
    }


     function myFunctionBasic() {
        document.getElementById("myDropdown-basic").classList.toggle("show-content");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn-basic')) {
            var dropdowns = document.getElementsByClassName("dropdown-content-basic-details");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show-content')) {
                    openDropdown.classList.remove('show-content');
                }
            }
        }
    }



</script>

</div>