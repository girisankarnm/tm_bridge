<?php
frontend\assets\AppAsset::register($this);
$this->registerCssFile('/css/ppe/style.css');
$this->registerCssFile('/css/datepicker.css');
?>
<div class="wrapper">
    <div class="page-heading-wrapper">
        <div class="page-heading">Post Publish Edit (PPE)</div>
    </div>
    <div class="resort-header-wrapper">
        <div class="resort-details-area">
            <figure>
                <img src="images/resort-logo.png" alt="">
            </figure>
            <article>
                <h4>Misty Rock Resort</h4>
                <div class="resort-location">
                    <span class="location-icon"><img src="images/location-icon.png" alt=""></span>
                    <h5 class="location-name">Wayanad, Kerala, India</h5>
                </div>
                <div class="resort-icons">
                    <img src="images/resort-icons/resort-icons-01.png" alt="">
                    <img src="images/resort-icons/resort-icons-02.png" alt="">
                </div>
            </article>
        </div>
        <div class="resort-peroid-area">
            <div class="resort-peroid">
                <div class="datepicker-wrapper">
                    <label>From</label>

                    <div class="datepicker-input-wrapper">
                        <img src="images/resort-icons/calender-icon.png" alt="">
                        <input type="text" class="datepicker-input month-picker" value="July-2022">
                    </div>
                </div>
                <button class="btn">Set Period</button>
            </div>
        </div>
    </div>
    <div class="booking-table-wrapper">

        <div class="book-date-table-wrapper fix-this-div">
            <table class="book-date-heading">
                <tr>
                    <td class="date-td">
                        <div class="calender-heading"><img src="images/property-icons/calender-icon.png" alt=""> <span
                                    class="date-text">Date</span></div>
                    </td>
                </tr>
            </table>
            <div class="book-date-table-contents">
                <div class="table-responsive scroll-table">
                    <table class="book-dates-table">
                        <tbody>
                        <tr>
                            <td>
                                <div class="day-content">
                                    <h5 class="day-text">Wed</h5>
                                    <h5 class="date-text-td">01</h5>
                                </div>
                            </td>
                            <td>
                                <div class="day-content">
                                    <h5 class="day-text">Thu</h5>
                                    <h5 class="date-text-td">02</h5>
                                </div>
                            </td>
                            <td>
                                <div class="day-content">
                                    <h5 class="day-text">Fri</h5>
                                    <h5 class="date-text-td">03</h5>
                                </div>
                            </td>
                            <td>
                                <div class="day-content">
                                    <h5 class="day-text">Sat</h5>
                                    <h5 class="date-text-td">04</h5>
                                </div>
                            </td>
                            <td>
                                <div class="day-content">
                                    <h5 class="day-text sun-color">Sun</h5>
                                    <h5 class="date-text-td">05</h5>
                                </div>
                            </td>
                            <td>
                                <div class="day-content">
                                    <h5 class="day-text">Mon</h5>
                                    <h5 class="date-text-td">06</h5>
                                </div>
                            </td>
                            <td>
                                <div class="day-content">
                                    <h5 class="day-text">Tue</h5>
                                    <h5 class="date-text-td">07</h5>
                                </div>
                            </td>
                            <td>
                                <div class="day-content">
                                    <h5 class="day-text">Wed</h5>
                                    <h5 class="date-text-td">08</h5>
                                </div>
                            </td>
                            <td>
                                <div class="day-content">
                                    <h5 class="day-text">Thu</h5>
                                    <h5 class="date-text-td">09</h5>
                                </div>
                            </td>
                            <td>
                                <div class="day-content">
                                    <h5 class="day-text">Fri</h5>
                                    <h5 class="date-text-td">10</h5>
                                </div>
                            </td>
                            <td>
                                <div class="day-content">
                                    <h5 class="day-text">Sat</h5>
                                    <h5 class="date-text-td">11</h5>
                                </div>
                            </td>
                            <td>
                                <div class="day-content">
                                    <h5 class="day-text sun-color">Sun</h5>
                                    <h5 class="date-text-td">12</h5>
                                </div>
                            </td>
                            <td>
                                <div class="day-content">
                                    <h5 class="day-text">Mon</h5>
                                    <h5 class="date-text-td">13</h5>
                                </div>
                            </td>
                            <td>
                                <div class="day-content">
                                    <h5 class="day-text">Tue</h5>
                                    <h5 class="date-text-td">14</h5>
                                </div>
                            </td>
                            <td>
                                <div class="day-content">
                                    <h5 class="day-text">Wed</h5>
                                    <h5 class="date-text-td">15</h5>
                                </div>
                            </td>
                            <td>
                                <div class="day-content">
                                    <h5 class="day-text">Thu</h5>
                                    <h5 class="date-text-td">16</h5>
                                </div>
                            </td>
                            <td>
                                <div class="day-content">
                                    <h5 class="day-text">Fri</h5>
                                    <h5 class="date-text-td">17</h5>
                                </div>
                            </td>
                            <td>
                                <div class="day-content">
                                    <h5 class="day-text">Sat</h5>
                                    <h5 class="date-text-td">18</h5>
                                </div>
                            </td>
                            <td>
                                <div class="day-content">
                                    <h5 class="day-text sun-color">Sun</h5>
                                    <h5 class="date-text-td">19</h5>
                                </div>
                            </td>
                            <td>
                                <div class="day-content">
                                    <h5 class="day-text">Mon</h5>
                                    <h5 class="date-text-td">20</h5>
                                </div>
                            </td>
                            <td>
                                <div class="day-content">
                                    <h5 class="day-text">Tue</h5>
                                    <h5 class="date-text-td">21</h5>
                                </div>
                            </td>
                            <td>
                                <div class="day-content">
                                    <h5 class="day-text">Wed</h5>
                                    <h5 class="date-text-td">22</h5>
                                </div>
                            </td>
                            <td>
                                <div class="day-content">
                                    <h5 class="day-text">Thu</h5>
                                    <h5 class="date-text-td">23</h5>
                                </div>
                            </td>
                            <td>
                                <div class="day-content">
                                    <h5 class="day-text">Fri</h5>
                                    <h5 class="date-text-td">24</h5>
                                </div>
                            </td>
                            <td>
                                <div class="day-content">
                                    <h5 class="day-text">Sat</h5>
                                    <h5 class="date-text-td">25</h5>
                                </div>
                            </td>
                            <td>
                                <div class="day-content">
                                    <h5 class="day-text sun-color">Sun</h5>
                                    <h5 class="date-text-td">26</h5>
                                </div>
                            </td>
                            <td>
                                <div class="day-content">
                                    <h5 class="day-text">Mon</h5>
                                    <h5 class="date-text-td">27</h5>
                                </div>
                            </td>
                            <td>
                                <div class="day-content">
                                    <h5 class="day-text">Tue</h5>
                                    <h5 class="date-text-td">28</h5>
                                </div>
                            </td>
                            <td>
                                <div class="day-content">
                                    <h5 class="day-text">Wed</h5>
                                    <h5 class="date-text-td">29</h5>
                                </div>
                            </td>
                            <td>
                                <div class="day-content">
                                    <h5 class="day-text">Thu</h5>
                                    <h5 class="date-text-td">30</h5>
                                </div>
                            </td>
                            <td>
                                <div class="day-content">
                                    <h5 class="day-text">Fri</h5>
                                    <h5 class="date-text-td">31</h5>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="right-arrow" onClick="moveToRight()">
                <img src="images/property-icons/right-arrow.png" alt="">
            </div>
        </div>

        <div class="single-room-details-wrapper">
            <div class="resort-header-wrapper bottom-radius-none hotel-rates-wrapper">
                <div class="resort-details-area">
                    <div class="room-rate-heading">Standard Room with AC (INR Rates)</div>
                </div>
                <div class="resort-peroid-area">
                    <div class="tariff-edit-wrapper">
                        <div class="tariff-btn-wrapper">
                            <button class="tariff-btn" onClick="toggleTable(1)">
                                <span class="eye-icon-btn"><img src="images/property-icons/eye-icon.png" alt=""></span>
                                View Tariff
                            </button>
                        </div>
                        <button class="btn" onClick="bulkEdit()">Bullk Edit</button>
                    </div>
                </div>
            </div>
            <div class="date-table-wrapper">
                <div class="room-table-wrapper">
                    <table id="room-heading-table-1" class="room-heading-table">
                        <tr class="first-row">
                            <td>
                                <div class="room-rates">Rack</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="room-rates">Slab 1</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="room-rates">Slab 2</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="room-rates">Slab 3</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="room-rates">Slab 4</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="room-rates">Slab 5</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="room-rates">Hike</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="room-rates ppe-color">PPE</div>
                            </td>
                        </tr>
                    </table>
                    <div class="table-responsive scroll-table">
                        <table id="available-room-rates-1" class="available-room-rates">
                            <tbody>
                            <tr class="first-row">
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="single-room-details-wrapper">
            <div class="resort-header-wrapper bottom-radius-none hotel-rates-wrapper">
                <div class="resort-details-area">
                    <div class="room-rate-heading">Standard Room with AC (INR Rates)</div>
                </div>
                <div class="resort-peroid-area">
                    <div class="tariff-edit-wrapper">
                        <div class="tariff-btn-wrapper">
                            <button class="tariff-btn" onClick="toggleTable(2)">
                                <span class="eye-icon-btn"><img src="images/property-icons/eye-icon.png" alt=""></span>
                                View Tariff
                            </button>
                        </div>
                        <button class="btn" onClick="bulkEdit()">Bullk Edit</button>
                    </div>
                </div>
            </div>
            <div class="date-table-wrapper">
                <div class="room-table-wrapper">
                    <table id="room-heading-table-2" class="room-heading-table">
                        <tr class="first-row">
                            <td>
                                <div class="room-rates">Rack</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="room-rates">Slab 1</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="room-rates">Slab 2</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="room-rates">Slab 3</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="room-rates">Slab 4</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="room-rates">Slab 5</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="room-rates">Hike</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="room-rates ppe-color">PPE</div>
                            </td>
                        </tr>
                    </table>
                    <div class="table-responsive scroll-table">
                        <table id="available-room-rates-2" class="available-room-rates">
                            <tbody>
                            <tr class="first-row">
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="single-room-details-wrapper">
            <div class="resort-header-wrapper bottom-radius-none hotel-rates-wrapper">
                <div class="resort-details-area">
                    <div class="room-rate-heading">Standard Room with AC (INR Rates)</div>
                </div>
                <div class="resort-peroid-area">
                    <div class="tariff-edit-wrapper">
                        <div class="tariff-btn-wrapper">
                            <button onClick="toggleTable(3)" class="tariff-btn">
                                <span class="eye-icon-btn"><img src="images/property-icons/eye-icon.png" alt=""></span>
                                View Tariff
                            </button>
                        </div>
                        <button class="btn" onClick="bulkEdit()">Bullk Edit</button>
                    </div>
                </div>
            </div>
            <div class="date-table-wrapper">
                <div class="room-table-wrapper">
                    <table id="room-heading-table-3" class="room-heading-table">
                        <tr class="first-row">
                            <td>
                                <div class="room-rates">Rack</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="room-rates">Slab 1</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="room-rates">Slab 2</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="room-rates">Slab 3</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="room-rates">Slab 4</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="room-rates">Slab 5</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="room-rates">Hike</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="room-rates ppe-color">PPE</div>
                            </td>
                        </tr>
                    </table>
                    <div class="table-responsive scroll-table">
                        <table id="available-room-rates-3" class="available-room-rates">
                            <tbody>
                            <tr class="first-row">
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-room-details-wrapper">
            <div class="resort-header-wrapper bottom-radius-none hotel-rates-wrapper">
                <div class="resort-details-area">
                    <div class="room-rate-heading">Standard Room with AC (INR Rates)</div>
                </div>
                <div class="resort-peroid-area">
                    <div class="tariff-edit-wrapper">
                        <div class="tariff-btn-wrapper">
                            <button onClick="toggleTable(3)" class="tariff-btn">
                                <span class="eye-icon-btn"><img src="images/property-icons/eye-icon.png" alt=""></span>
                                View Tariff
                            </button>
                        </div>
                        <button class="btn" onClick="bulkEdit()">Bullk Edit</button>
                    </div>
                </div>
            </div>
            <div class="date-table-wrapper">
                <div class="room-table-wrapper">
                    <table id="room-heading-table-3" class="room-heading-table">
                        <tr class="first-row">
                            <td>
                                <div class="room-rates">Rack</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="room-rates">Slab 1</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="room-rates">Slab 2</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="room-rates">Slab 3</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="room-rates">Slab 4</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="room-rates">Slab 5</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="room-rates">Hike</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="room-rates ppe-color">PPE</div>
                            </td>
                        </tr>
                    </table>
                    <div class="table-responsive scroll-table">
                        <table id="available-room-rates-3" class="available-room-rates">
                            <tbody>
                            <tr class="first-row">
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-room-details-wrapper">
            <div class="resort-header-wrapper bottom-radius-none hotel-rates-wrapper">
                <div class="resort-details-area">
                    <div class="room-rate-heading">Standard Room with AC (INR Rates)</div>
                </div>
                <div class="resort-peroid-area">
                    <div class="tariff-edit-wrapper">
                        <div class="tariff-btn-wrapper">
                            <button onClick="toggleTable(3)" class="tariff-btn">
                                <span class="eye-icon-btn"><img src="images/property-icons/eye-icon.png" alt=""></span>
                                View Tariff
                            </button>
                        </div>
                        <button class="btn" onClick="bulkEdit()">Bullk Edit</button>
                    </div>
                </div>
            </div>
            <div class="date-table-wrapper">
                <div class="room-table-wrapper">
                    <table id="room-heading-table-3" class="room-heading-table">
                        <tr class="first-row">
                            <td>
                                <div class="room-rates">Rack</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="room-rates">Slab 1</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="room-rates">Slab 2</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="room-rates">Slab 3</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="room-rates">Slab 4</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="room-rates">Slab 5</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="room-rates">Hike</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="room-rates ppe-color">PPE</div>
                            </td>
                        </tr>
                    </table>
                    <div class="table-responsive scroll-table">
                        <table id="available-room-rates-3" class="available-room-rates">
                            <tbody>
                            <tr class="first-row">
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td class="seven-days-td">
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="day-content day-rate">
                                        <div class="day-text">900</div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="right-side-popup-wrapper">
    <div class="right-side-container">
        <div class="pop-head-btn-wrapper">
            <h5 class="pop-header">Standard Room with AC (INR Rates)</h5>
            <div class="pop-close-btn-wrapper">
                <button class="pop-close-btn" onClick="popClose()"><img src="images/property-icons/close-btn.png"
                                                                        alt="">
                    Close</button>
            </div>
        </div>
        <div class="select-dates-wrapper">
            <div class="select-dates-heading">Select Dates</div>
            <div class="month-name">August 2022</div>
            <!-- <div class="selected-dates-wrapper">
                <div class="selected-dates">15</div>
                <div class="selected-dates">20</div>
                <div class="selected-dates">22</div>
                <div class="selected-dates">24</div>
            </div> -->
            <div class="multiple-date-calendar-wrapper">
                <input type="text" class="form-control date" placeholder="Pick the multiple dates">
            </div>
            <div class="ppe-rate-wrapper">
                <div class="ppe-rate">PPE Rate</div>
                <input type="text" value="3250">
            </div>
            <div class="text-right mt-3">
                <button class="btn secondary-btn">Apply</button>
            </div>
        </div>
    </div>
</div>

<!--<div class="pop-wrapper search-popup-wrapper">-->
<!--    <div class="pop-header">-->
<!--        <div class="pop-container">-->
<!--            <div class="pop-close-wrapper">-->
<!--                <button class="pop-close"><img src="images/search-popup/close-btn.svg" alt=""></button>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="pop-container">-->
<!--        <div class="search-result-card">-->
<!--            <div class="card-img"><img src="images/search-popup/hotel-img.png" alt=""></div>-->
<!--            <div class="card-details">-->
<!--                <div class="card-heading-row">-->
<!--                    <h4 class="card-heading">Misty Rock Resort</h4>-->
<!--                    <div class="star-wrapper">-->
<!--                        <img src="images/search-popup/star.svg" alt="">-->
<!--                        <img src="images/search-popup/star.svg" alt="">-->
<!--                        <img src="images/search-popup/star.svg" alt="">-->
<!--                        <img src="images/search-popup/star.svg" alt="">-->
<!--                        <img src="images/search-popup/star.svg" alt="">-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="resort-details-area">-->
<!--                    <figure>-->
<!--                        <img src="images/resort-logo.png" alt="">-->
<!--                    </figure>-->
<!--                    <article>-->
<!--                        <div class="card-heading-row">-->
<!--                            <h4 class="card-heading">Misty Rock Resort</h4>-->
<!--                            <div class="star-wrapper">-->
<!--                                <img src="images/search-popup/star-icon.svg" alt="">-->
<!--                                <img src="images/search-popup/star-icon.svg" alt="">-->
<!--                                <img src="images/search-popup/star-icon.svg" alt="">-->
<!--                                <img src="images/search-popup/star-icon.svg" alt="">-->
<!--                                <img src="images/search-popup/star-icon.svg" alt="">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="resort-location">-->
<!--                            <span class="location-icon"><img src="images/location-icon.png" alt=""></span>-->
<!--                            <h5 class="location-name">Wayanad, Kerala, India</h5>-->
<!--                        </div>-->
<!--                        <div class="resort-icons">-->
<!--                            <img src="images/resort-icons/resort-icons-01.png" alt="">-->
<!--                            <img src="images/resort-icons/resort-icons-02.png" alt="">-->
<!--                        </div>-->
<!--                    </article>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>

<script>
    // $(window).scroll(function() {
    //     console.log($(this).scrollTop())
    //     if ($(this).scrollTop() > 50) {
    //         $('.fix-this-div').addClass('newClass');
    //     } else {
    //         $('.fix-this-div').removeClass('newClass');
    //     }
    // });
    // window.addEventListener("scroll", function() {
    //     console.log(123)
    // }, false);
    window.addEventListener('scroll', function() {
        console.log('Scroll event');
    });

    const divs = document.querySelectorAll('.scroll-table');
    divs.forEach(div => div.addEventListener('scroll', e => {
        divs.forEach(d => {
            // d.scrollTop = div.scrollTop;
            d.scrollLeft = div.scrollLeft;
        });
    }));

    function moveToRight() {
        divs.forEach(element => {
            element.scrollLeft += (element.offsetWidth / 3);
        });
    }
    // $(document).ready(function() {
    //     $(".bulk-edit-btn").click(function() {
    //         $(".right-side-popup-wrapper").toggleClass("bulk-edit-on");
    //     });
    // });
    var flag = 0;

    function bulkEdit() {
        $('.right-side-popup-wrapper').addClass("bulk-edit-on");
        // $('.datepicker').addClass("datepicker-on");
        flag = 0;
        $('.date').datepicker('show')
    }

    function popClose() {
        $('.right-side-popup-wrapper').removeClass("bulk-edit-on");
        // $('.datepicker').removeClass("datepicker-on");
        flag = 1;
        $('.date').datepicker('hide')
    }

    function toggleTable(id) {
        $(`#room-heading-table-${id} tr`).toggleClass("row-on");
        $(`#available-room-rates-${id} tr`).toggleClass("row-on");
    }
    // $('.month-picker').datepicker({
    //     multidate: false,
    //     format: "MM-yyyy",
    //     viewMode: "months",
    //     minViewMode: "months"
    // });
    $('.date').datepicker({
        multidate: true,
        format: 'dd-mm-yyyy'
    });
    // $('.date').datepicker('show')
    $('.date').datepicker()
        .on('hide', function(e) {
            if (flag === 0) {
                $('.date').datepicker('show')
            }
        });
    $(function() {
        $(".month-picker").datepicker({
            multidate: false,
            format: "MM-yyyy",
            viewMode: "months",
            minViewMode: "months",
        }).datepicker('update', new Date());
    });
</script>

<style>
    /* .datepicker {
    display: none !important;
} */

    .datepicker-on {
        /* display: block !important; */
        width: 305px;
        height: 280px;
        box-shadow: none !important;
        padding: 0;
        margin: -40px 0 0;
        box-shadow: none !important;
    }

    .datepicker-days {
        border: 1px solid #586ADA !important;
        border-radius: 0px;
    }

    .datepicker table.table-condensed {
        margin: 0;
        width: 100%;
        border: none !important;
    }

    .datepicker .prev,
    .datepicker .next {
        border-radius: 0;
        background: #fff !important;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 0;
        margin: 0;
    }

    table thead tr {
        background: none
    }

    .datepicker-days table thead,
    .datepicker-days table tbody,
    .datepicker-days table tfoot {
        padding: 10px;
        display: table-row-group;
    }

    .datepicker-days table thead tr:nth-child(2n + 0) td,
    .datepicker-days table thead tr:nth-child(2n + 0) th,
    .datepicker .datepicker-switch {
        border-radius: 0;
        background: #fff !important;
    }

    table thead {
        background-color: #fff;
    }

    .table-condensed>thead>tr>th {
        text-align: center;
    }

    /* .datepicker table tr td {
    padding: 12px 0;
    min-width: 45px;
    min-height: 45px;
} */

    .datepicker table tr td:hover,
    .datepicker table tr td.active,
    .daterangepicker td.active,
    .daterangepicker td.active:hover {
        background: #EFEDFF !important;
        color: #5968DB !important;
    }

    .datepicker.dropdown-menu {
        width: 100%;
        max-width: 309px;
    }

    .datepicker-dropdown.datepicker-orient-top:before {
        top: -15px;
    }


    .datepicker-dropdown.datepicker-orient-top:before {
        border: none;
    }

    .multiple-date-calendar-wrapper input.form-control.date {
        height: 0;
        border: none;
        padding: 0;
        margin: 0;
    }

    .datepicker.dropdown-menu {
        border: none !important;
        box-shadow: none !important;
    }
</style>
