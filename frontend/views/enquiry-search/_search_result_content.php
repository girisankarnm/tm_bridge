<div class="card-title">Search  result for <?= $property_destination_name?></div>
           <?php foreach ($searchResult as $index => $properties) :?>
    <div class="card search-card-list shadow-div card-overflow-hidden" >
        <div id="mainHeding-search-hotel" >
            <div > <img class="image-search-property img-property" src="uploads/<?= $properties['property']['image'] ?>" alt="Matrix"></div>
            <div   >
                <div id="mainHeding-search-hotel-list">
                    <div>
                        <span class="serach-hotelHeading" > <span class="cut-text" style="display: inline"><?= $properties['property']['name'] ?><span/>
                            <?php if($index==2)
                            { ?>
                                <span class="badge badge-pill badge-css font-bw-mitga-low-weight" style="margin-left: 6px"> Luxury </span>
                            <?php   } else
                            {?>
                               <img class="f-star" src="images/Star-1.svg" alt="Matrix">
                             <img class="f-star" style="padding-left: 2px"  src="images/Star-1.svg" alt="Matrix">
                             <img  class="f-star" style="padding-left: 2px" src="images/Star-1.svg" alt="Matrix">
                           </span>
                            <?php  } ?>
                    </div>
                    <div> <small  class="smallFonts fontsize-location"><i  class="fa fa-map-marker locatiospace" aria-hidden="true"></i> Alappuzha ,Punnamada.kerala</small></div>
                    <div>
                        <?php if(($properties['property']->smoking_policy_id) != 3):?>
                            <img class="span-gap-image" src="images/smoke-icon.svg" alt="Matrix">
                        <?php else: ?>
                            <img class="span-gap-image" src="images/smoke-icon.svg" alt="Matrix">
                        <?php endif ?>
                        <?php if(($properties['property']->pets_policy_id) != 3):?>
                            <img class="span-gap-image" src="images/animal-restrict.svg" alt="Matrix">
                        <?php else: ?>
                            <img class="span-gap-image" src="images/animal-restrict.svg" alt="Matrix">
                        <?php endif ?>

                    </div>
                </div>
            </div>
            <div>
                <div id="column-listing-search" >
                    <div> <img class="img-property" src="images/bridge-icon.svg" alt="Matrix"></div>
                    <div><span class="badge badge-pill badge-secondary font-bw-mitga-low-weight"> 4.1/5 (very good)</span>
                        <span class="smallFonts font-bw-mitga-low-weight" style="font-size: 12px;">5879 Rating</span>
                    </div>
                    <div>
                        <div class="favorite-icon">
                            <input data-property-id="<?= $properties['property']['id'] ?>" type="checkbox" class="btn-favorite favorite fav-check<?= $properties['property']['id'] ?>" id="favorite-2<?= $properties['property']['id'] ?>" <?php if ($properties['favourite'] == true) {?> Checked <?php } ?> />
                            <label for="favorite-2<?= $properties['property']['id'] ?>">
                                <svg id="heart-svg" viewBox="467 392 58 57" xmlns="http://www.w3.org/2000/svg">
                                    <g id="Group" fill="none" fill-rule="evenodd" transform="translate(467 392)">
                                        <path d="M29.144 20.773c-.063-.13-4.227-8.67-11.44-2.59C7.63 28.795 28.94 43.256 29.143 43.394c.204-.138 21.513-14.6 11.44-25.213-7.214-6.08-11.377 2.46-11.44 2.59z" id="heart" fill="#AAB8C2"/>
                                        <circle id="main-circ" fill="#E2264D" opacity="0" cx="29.5" cy="29.5" r="1.5"/>

                                        <g id="grp7" opacity="0" transform="translate(7 6)">
                                            <circle id="oval1" fill="#9CD8C3" cx="2" cy="6" r="2"/>
                                            <circle id="oval2" fill="#8CE8C3" cx="5" cy="2" r="2"/>
                                        </g>

                                        <g id="grp6" opacity="0" transform="translate(0 28)">
                                            <circle id="oval1" fill="#CC8EF5" cx="2" cy="7" r="2"/>
                                            <circle id="oval2" fill="#91D2FA" cx="3" cy="2" r="2"/>
                                        </g>

                                        <g id="grp3" opacity="0" transform="translate(52 28)">
                                            <circle id="oval2" fill="#9CD8C3" cx="2" cy="7" r="2"/>
                                            <circle id="oval1" fill="#8CE8C3" cx="4" cy="2" r="2"/>
                                        </g>

                                        <g id="grp2" opacity="0" transform="translate(44 6)">
                                            <circle id="oval2" fill="#CC8EF5" cx="5" cy="6" r="2"/>
                                            <circle id="oval1" fill="#CC8EF5" cx="2" cy="2" r="2"/>
                                        </g>

                                        <g id="grp5" opacity="0" transform="translate(14 50)">
                                            <circle id="oval1" fill="#91D2FA" cx="6" cy="5" r="2"/>
                                            <circle id="oval2" fill="#91D2FA" cx="2" cy="2" r="2"/>
                                        </g>

                                        <g id="grp4" opacity="0" transform="translate(35 50)">
                                            <circle id="oval1" fill="#F48EA7" cx="6" cy="5" r="2"/>
                                            <circle id="oval2" fill="#F48EA7" cx="2" cy="2" r="2"/>
                                        </g>

                                        <g id="grp1" opacity="0" transform="translate(24)">
                                            <circle id="oval1" fill="#9FC7FA" cx="2.5" cy="3" r="2"/>
                                            <circle id="oval2" fill="#9FC7FA" cx="7.5" cy="2" r="2"/>
                                        </g>
                                    </g>
                                </svg>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                 <?php foreach ($properties['property_rooms'] as $rooms) :?>
                <div id="column-4th-colomn-search" >
                    <div>  <span class="font-bw-mitga" style="font: bold;font-size: 13px;float: left;margin-left: 10px; color: #292931 "> <?= $rooms['RoomDetails']['name'] ?> </span>
                        <span style="float: right;margin-left: 10px;font-size: 11px" class="badge badge-pill badge-secondary size-badge font-bw-mitga-text"><img class="img-property-search" src="images/note-search.svg"  alt="Matrix"> 4/10</span>
                    </div>
                    <div>
                        <span class="span-gap font-span font-bw-mitga-text " style=";margin-left: 10px">  <img class="img-property color-140F0F " src="images/baby-icon.svg" alt="Matrix"><?= $rooms['RoomDetails']['property']['complimentary_from_age'] ?>-<span><?= $rooms['RoomDetails']['property']['complimentary_to_age'] ?></span>YR </span>
                        <span class=" font-span font-bw-mitga-text">  <img class="img-property color-140F0F " src="images/adult-age-icon.svg" alt="Matrix"> <span><?= $rooms['RoomDetails']['property']['child_rate_from_age'] ?></span>-<span><?= $rooms['RoomDetails']['property']['child_rate_to_age'] ?></span> YR</span>
                        <span class="span-gap font-span font-bw-mitga-text">  <img class="img-property bed-icon-style "  src="images/bed-hotel.svg" alt="Matrix">DB: <span class="margin-right-icon-search"><?= $rooms['RoomDetails']['number_of_adults'] ?>|</span>EB: <span class="margin-right-icon-search"><?= $rooms['RoomDetails']['number_of_extra_beds'] ?>|</span>SB: <span class="margin-right-icon-search"><?= $rooms['RoomDetails']['number_of_kids_on_sharing'] ?></span> </span>
                    </div>
                    <div>
                        <?php if($rooms['total_rate'] != 0) : ?>
                        <span class="line-through-text font-color-E40967 font-bw-mitga" style="font-size: 13px;margin-left: 10px">₹ <?= $rooms['total_rack_rate'] ?> </span> <span class=" color-586ADA  font-bw-mitga"  style="font-size: 17px;margin-left: 6px">₹ <?= $rooms['total_rate'] ?></span>

                        <?php else : ?>
                            <span class=" color-586ADA  font-bw-mitga"  style="font-size: 17px;margin-left: 6px">Rate Not Available</span>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
<?php endforeach;  ?>
