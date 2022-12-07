<?php
frontend\assets\AppAsset::register($this);
$this->registerCssFile('/css/ppe/style.css');
$this->registerCssFile('/css/datepicker.css');
$this->registerCssFile('/css/users/user-styles.css');
$this->registerCssFile('/css/booking-request/booking-request.css');
$this->registerCssFile('/css/custom-style.css');
$this->registerCssFile('/css/datepicker/jquery-ui.css');
$this->registerCssFile('/css/ssr-special-rate/ssr-special-rate.css');
?>
<div class="wrapper">

    <div class="text-right mt-1 mb-3">
        <button class="btn primary-btn" style="min-width: 150px;">Print</button>
    </div>
    <div class="table-print-wrapper">
        <table cellpadding="0" cellspacing="0" style="width: 100%; border: none !important; margin: 0 0 15px;
    box-shadow: none; background: none !important;">
            <tr style="background: none;">
                <td>
                    <table cellpadding="0" cellspacing="0" style="width: 100%; border: none !important;
    box-shadow: none; background: #5968DB !important; -webkit-print-color-adjust:exact;">
                        <tr style="background: #5968DB;">
                            <td
                                style="width: 50%;color: #fff; font-weight: bold; padding: 10px 15px; margin: 0 10px 0 0;font-size: 14px !important;">
                                Hotel Reservation voucher</td>
                            <td
                                style="width: 50%;color: #fff; padding: 10px 10px; margin: 0 10px 0 0; font-size: 14px !important;text-align:right;">


                                <table cellpadding="0" cellspacing="0"
                                    style="width: 410px; float: right; border: none !important; box-shadow: none;">
                                    <tr style="background: none;">
                                        <td style="width: 240px;"><span
                                                style="font-size: 12px; min-height: 40px; padding: 2px 10px; margin: 0; color: #fff; letter-spacing: 0.5px;   background: #7280e0; border:2px solid #fff; display: inline-block; line-height: 32px;">Ref
                                                No: AB67788-352-11A</span></td>
                                        <td style="width: 240px;"><span
                                                style="font-size: 12px;min-height: 40px; padding: 2px 10px; margin: 0 0 0 15px; color: #fff; letter-spacing: 0.5px;    background: #7280e0; border:2px solid #fff; display: inline-block; line-height: 32px;">Enq
                                                No: AB67788-352-11A</span></td>
                                    </tr>
                                </table>

                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr style="background: none;">
                <td>
                    <table cellpadding="0" cellspacing="0"
                        style="width: 100%; float: right; border: none !important; box-shadow: none; margin: 15px 0;">
                        <tr style="background: none;">
                            <td style="width: 50%; border: 1px solid #999FB4; padding: 10px;">

                                <table cellpadding="0" cellspacing="0"
                                    style="width: 100%; float: right; border: none !important; box-shadow: none;">
                                    <tr style="background: none;">
                                        <td style="width: 75px;"><img style="width:75px;"
                                                src="images/booking-request/thumb-01.png" alt="">
                                        </td>
                                        <td style="padding: 10px;">
                                            <h4
                                                style="font-size: 14px; color: #1e2339; line-height: 20px; font-weight: 600; margin: 0;">
                                                Kallada Tours and
                                                Travels
                                                <span
                                                    style="font-size: 9px;padding: 4px 10px;letter-spacing: 0.2px;background: #f0f2ff; text-transform: uppercase;margin: 0 0 0 5px; padding: 0 0 0 5px; border-left: 1px solid #333;">Luxury</span>
                                            </h4>
                                            <div style="display: flex;">
                                                <span><img src="images/location-icon.png" alt=""></span>
                                                <h5
                                                    style="margin: 0 0 0 5px;color: #9399a8 !important;line-height: 13px;font-size: 11px;">
                                                    Ernakulam, Kerala, India</h5>
                                            </div>
                                            <div style="font-size: 11px;
    color: #1E2339; font-weight: 700;">+91 123 456 7890</div>
                                        </td>
                                    </tr>
                                </table>

                            </td>
                            <td style="width: 50%; border: 1px solid #999FB4; border-left: none; padding: 10px;">
                                <table cellpadding="0" cellspacing="0"
                                    style="width: 100%; float: right; border: none !important; box-shadow: none;">
                                    <tr style="background: none;">
                                        <td style="width: 75px;"><img style="width:75px;"
                                                src="images/booking-request/thumb-02.png" alt="">
                                        </td>
                                        <td style="padding: 10px;">
                                            <h4
                                                style="font-size: 14px; color: #1e2339; line-height: 20px; font-weight: 600; margin: 0;">
                                                Kallada Tours and
                                                Travels
                                                <span
                                                    style="font-size: 9px;padding: 4px 10px;letter-spacing: 0.2px;background: #f0f2ff; text-transform: uppercase;margin: 0 0 0 5px; padding: 0 0 0 5px; border-left: 1px solid #333;">Luxury</span>
                                            </h4>
                                            <div style="display: flex;">
                                                <span><img src="images/location-icon.png" alt=""></span>
                                                <h5
                                                    style="margin: 0 0 0 5px;color: #9399a8 !important;line-height: 13px;font-size: 11px;">
                                                    Wayanad, Kerala, India</h5>
                                            </div>
                                            <div style="font-size: 11px;
    color: #1E2339; font-weight: 700;">+91 123 456 7890</div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr style="background: none;">
                <td>
                    <table cellpadding="0" cellspacing="0"
                        style="width: 100%; float: left; border: none !important; box-shadow: none; margin: 15px 0;">
                        <tr style="background: none;">
                            <td style="width: 50%; border: 1px solid #999FB4; padding: 10px;">
                                <table cellpadding="0" cellspacing="0"
                                    style="width: 100%; float: left; border: none !important; box-shadow: none; margin: 0;">
                                    <tr style="background: none;">
                                        <td style="padding: 5px 0;"><strong>Guest Name</strong></td>
                                        <td style="padding: 5px 0;">: Mahesh</td>
                                    </tr>
                                    <tr style="background: none;">
                                        <td style="padding: 5px 0;"><strong>Nationality</strong></td>
                                        <td style="padding: 5px 0;">: Indian</td>
                                    </tr>
                                    <tr style="background: none;">
                                        <td style="padding: 5px 0;"><strong>Confirmed By</strong></td>
                                        <td style="padding: 5px 0;">: Srinivasan</td>
                                    </tr>
                                    <tr style="background: none;">
                                        <td style="padding: 5px 0;"><strong>Confirmation Ref</strong></td>
                                        <td style="padding: 5px 0;">: ACDPR 123456789(Optional)</td>
                                    </tr>
                                </table>
                            </td>
                            <td style="width: 50%; border: 1px solid #999FB4; padding: 10px;">
                                <table cellpadding="0" cellspacing="0"
                                    style="width: 100%; float: left; border: none !important; box-shadow: none; margin: 0;">
                                    <tr style="background: none;">
                                        <td style="padding: 5px 0;"><strong>Check In</strong></td>
                                        <td style="padding: 5px 0;">: Wed, October 31, 2022</td>
                                    </tr>
                                    <tr style="background: none;">
                                        <td style="padding: 5px 0;"><strong>Check Out</strong></td>
                                        <td style="padding: 5px 0;">: Wed, October 31, 2023</td>
                                    </tr>
                                    <tr style="background: none;">
                                        <td style="padding: 5px 0;"><strong>Check In Time</strong></td>
                                        <td style="padding: 5px 0;">: 14:00</td>
                                    </tr>
                                    <tr style="background: none;">
                                        <td style="padding: 5px 0;"><strong>Check Out Time</strong></td>
                                        <td style="padding: 5px 0;">: 11:00</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr style="background: none;">
                <td>
                    <table cellpadding="0" cellspacing="0"
                        style="width: 100%; float: left; border: 1px 1px 8px 1px #e3e3e3 !important; box-shadow: none; margin: 0 0 20px;">
                        <thead>
                            <tr>
                                <th
                                    style="text-align: center; padding: 5px 15px !important; border-right: 1px solid #ABB0C1; font-size: 11px !important; background: #E1E5FF; font-weight: 700;text-align:center; width: 8%;">
                                    Date</th>
                                <th
                                    style="text-align: left; padding: 5px 15px !important; border-right: 1px solid #ABB0C1; font-size: 11px !important; background: #E1E5FF; font-weight: 700; width: 10%;">
                                    Room Name</th>
                                <th
                                    style="text-align: center; padding: 5px 15px !important; border-right: 1px solid #ABB0C1; font-size: 11px !important; background: #E1E5FF; font-weight: 700;text-align:center; width: 10%;">
                                    Guests</th>
                                <th
                                    style="text-align: center; padding: 5px 15px !important; border-right: 1px solid #ABB0C1; font-size: 11px !important; background: #E1E5FF; font-weight: 700;text-align:center; width: 5%;">
                                    Room</th>
                                <th
                                    style="text-align: center; padding: 5px 15px !important; border-right: 1px solid #ABB0C1; font-size: 11px !important; background: #E1E5FF; font-weight: 700;text-align:center; width: 5%;">
                                    EBA</th>
                                <th
                                    style="text-align: center; padding: 5px 15px !important; border-right: 1px solid #ABB0C1; font-size: 11px !important; background: #E1E5FF; font-weight: 700;text-align:center; width: 5%;">
                                    CWB</th>
                                <th
                                    style="text-align: center; padding: 5px 15px !important; border-right: 1px solid #ABB0C1; font-size: 11px !important; background: #E1E5FF; font-weight: 700;text-align:center; width: 5%;">
                                    CNB</th>
                                <th
                                    style="text-align: center; padding: 5px 15px !important; border-right: 1px solid #ABB0C1; font-size: 11px !important; background: #E1E5FF; font-weight: 700;text-align:center; width: 5%;">
                                    SGL</th>
                                <th
                                    style="white-space: nowrap; text-align: center; padding: 5px 15px !important; border-right: 1px solid #ABB0C1; font-size: 11px !important; background: #E1E5FF; font-weight: 700;text-align:center; width: 5%;">
                                    Meal Plan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td
                                    style="white-space: nowrap; padding: 6px 15px;color: #1E2339;background: none;text-align: center;font-size: 11px !important;border: 1px solid #ABB0C1;">
                                    01 Jan 2023</td>
                                <td
                                    style="white-space: nowrap; padding: 6px 15px;color: #1E2339;background: none;text-align: left;font-size: 11px !important;border: 1px solid #ABB0C1;">
                                    Business Crown Suit</td>
                                <td
                                    style="padding: 6px 15px;color: #1E2339;background: none;text-align: center;font-size: 11px !important;border: 1px solid #ABB0C1;">
                                    <table cellpadding="0" cellspacing="0"
                                        style="width: 150px; border: none !important; box-shadow: none; margin: 0 auto;">
                                        <tr>
                                            <td><img src="images/user-icons/man-icon.svg" alt=""
                                                    style="width: 10px; margin:0 5px 0 0;"> 15</td>
                                            <td><img src="images/user-icons/women-icon.svg" alt=""
                                                    style="width: 14px; margin:0 5px 0 0;"> 15</td>
                                            <td><img src="images/user-icons/child-icon.svg" alt=""
                                                    style="width: 13px; margin:0 5px 0 0;"> 15</td>
                                        </tr>
                                    </table>
                                </td>
                                <td
                                    style="padding: 6px 15px;color: #1E2339;background: none;text-align: center;font-size: 11px !important;border: 1px solid #ABB0C1;">
                                    15</td>
                                <td
                                    style="padding: 6px 15px;color: #1E2339;background: none;text-align: center;font-size: 11px !important;border: 1px solid #ABB0C1;">
                                    15</td>
                                <td
                                    style="padding: 6px 15px;color: #1E2339;background: none;text-align: center;font-size: 11px !important;border: 1px solid #ABB0C1;">
                                    15</td>
                                <td
                                    style="padding: 6px 15px;color: #1E2339;background: none;text-align: center;font-size: 11px !important;border: 1px solid #ABB0C1;">
                                    15</td>
                                <td
                                    style="padding: 6px 15px;color: #1E2339;background: none;text-align: center;font-size: 11px !important;border: 1px solid #ABB0C1;">
                                    15</td>
                                <td
                                    style="padding: 6px 15px;color: #1E2339;background: none;text-align: center;font-size: 11px !important;border: 1px solid #ABB0C1;">
                                    MAP</td>
                            </tr>
                            <tr>
                                <td
                                    style="white-space: nowrap; padding: 6px 15px;color: #1E2339;background: none;text-align: center;font-size: 11px !important;border: 1px solid #ABB0C1;">
                                    01 Jan 2023</td>
                                <td
                                    style="white-space: nowrap; padding: 6px 15px;color: #1E2339;background: none;text-align: left;font-size: 11px !important;border: 1px solid #ABB0C1;">
                                    Business Crown Suit</td>
                                <td
                                    style="padding: 6px 15px;color: #1E2339;background: none;text-align: center;font-size: 11px !important;border: 1px solid #ABB0C1;">
                                    <table cellpadding="0" cellspacing="0"
                                        style="width: 150px; border: none !important; box-shadow: none; margin: 0 auto;">
                                        <tr>
                                            <td><img src="images/user-icons/man-icon.svg" alt=""
                                                    style="width: 10px; margin:0 5px 0 0;"> 15</td>
                                            <td><img src="images/user-icons/women-icon.svg" alt=""
                                                    style="width: 14px; margin:0 5px 0 0;"> 15</td>
                                            <td><img src="images/user-icons/child-icon.svg" alt=""
                                                    style="width: 13px; margin:0 5px 0 0;"> 15</td>
                                        </tr>
                                    </table>
                                </td>
                                <td
                                    style="padding: 6px 15px;color: #1E2339;background: none;text-align: center;font-size: 11px !important;border: 1px solid #ABB0C1;">
                                    15</td>
                                <td
                                    style="padding: 6px 15px;color: #1E2339;background: none;text-align: center;font-size: 11px !important;border: 1px solid #ABB0C1;">
                                    15</td>
                                <td
                                    style="padding: 6px 15px;color: #1E2339;background: none;text-align: center;font-size: 11px !important;border: 1px solid #ABB0C1;">
                                    15</td>
                                <td
                                    style="padding: 6px 15px;color: #1E2339;background: none;text-align: center;font-size: 11px !important;border: 1px solid #ABB0C1;">
                                    15</td>
                                <td
                                    style="padding: 6px 15px;color: #1E2339;background: none;text-align: center;font-size: 11px !important;border: 1px solid #ABB0C1;">
                                    15</td>
                                <td
                                    style="padding: 6px 15px;color: #1E2339;background: none;text-align: center;font-size: 11px !important;border: 1px solid #ABB0C1;">
                                    MAP</td>
                            </tr>
                            <tr>
                                <td
                                    style="white-space: nowrap; padding: 6px 15px;color: #1E2339;background: none;text-align: center;font-size: 11px !important;border: 1px solid #ABB0C1;">
                                    01 Jan 2023</td>
                                <td
                                    style="white-space: nowrap; padding: 6px 15px;color: #1E2339;background: none;text-align: left;font-size: 11px !important;border: 1px solid #ABB0C1;">
                                    Business Crown Suit</td>
                                <td
                                    style="padding: 6px 15px;color: #1E2339;background: none;text-align: center;font-size: 11px !important;border: 1px solid #ABB0C1;">
                                    <table cellpadding="0" cellspacing="0"
                                        style="width: 150px; border: none !important; box-shadow: none; margin: 0 auto;">
                                        <tr>
                                            <td><img src="images/user-icons/man-icon.svg" alt=""
                                                    style="width: 10px; margin:0 5px 0 0;"> 15</td>
                                            <td><img src="images/user-icons/women-icon.svg" alt=""
                                                    style="width: 14px; margin:0 5px 0 0;"> 15</td>
                                            <td><img src="images/user-icons/child-icon.svg" alt=""
                                                    style="width: 13px; margin:0 5px 0 0;"> 15</td>
                                        </tr>
                                    </table>
                                </td>
                                <td
                                    style="padding: 6px 15px;color: #1E2339;background: none;text-align: center;font-size: 11px !important;border: 1px solid #ABB0C1;">
                                    15</td>
                                <td
                                    style="padding: 6px 15px;color: #1E2339;background: none;text-align: center;font-size: 11px !important;border: 1px solid #ABB0C1;">
                                    15</td>
                                <td
                                    style="padding: 6px 15px;color: #1E2339;background: none;text-align: center;font-size: 11px !important;border: 1px solid #ABB0C1;">
                                    15</td>
                                <td
                                    style="padding: 6px 15px;color: #1E2339;background: none;text-align: center;font-size: 11px !important;border: 1px solid #ABB0C1;">
                                    15</td>
                                <td
                                    style="padding: 6px 15px;color: #1E2339;background: none;text-align: center;font-size: 11px !important;border: 1px solid #ABB0C1;">
                                    15</td>
                                <td
                                    style="padding: 6px 15px;color: #1E2339;background: none;text-align: center;font-size: 11px !important;border: 1px solid #ABB0C1;">
                                    MAP</td>
                            </tr>
                            <tr style="background: none;">
                                <td colspan="9"
                                    style="padding: 35px 15px 10px;color: #1E2339;background: none;text-align: left;font-size: 11px !important;border: 1px solid #ABB0C1;">
                                    <p style="display: block; margin: 0 0 5px; font-weight: bold; color: #222">EBA:
                                        Extra Bed for Adults | CWB: Child With Extra Bed | CNB: Child Sharing Bed |
                                        SGL: Single-Occupancy Room</p>
                                    <p style="display: block; margin: 0 0 5px; font-weight: bold; color: #222">EP: Room
                                        Only | CP: Room With Breakfast | MAP: Room With Breakfast & Dinner | AP:
                                        Room with Breakfast, Lunch & Dinner</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table cellpadding="0" cellspacing="0"
                        style="width: 100%; float: left; border: 1px 1px 8px 1px #e3e3e3 !important; box-shadow: none; margin: 0;">
                        <thead>
                            <tr>
                                <th
                                    style="text-align: center; padding: 5px 15px !important; border-right: 1px solid #ABB0C1; font-size: 11px !important; background: #E1E5FF; font-weight: 700;text-align:center; width: 10%;">
                                    Date</th>
                                <th
                                    style="text-align: left; padding: 5px 15px !important; border-right: 1px solid #ABB0C1; font-size: 11px !important; background: #E1E5FF; font-weight: 700; width: 75%;">
                                    Item</th>
                                <th
                                    style="text-align: center; padding: 5px 15px !important; border-right: 1px solid #ABB0C1; font-size: 11px !important; background: #E1E5FF; font-weight: 700;text-align:center; width: 15%;">
                                    Guests</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td
                                    style="white-space: nowrap;padding: 6px 15px;color: #1E2339;background: none;text-align: center;font-size: 11px !important;border: 1px solid #ABB0C1;">
                                    01 Jan 2023</td>
                                <td
                                    style="white-space: nowrap;padding: 6px 15px;color: #1E2339;background: none;text-align: left;font-size: 11px !important;border: 1px solid #ABB0C1;">
                                    Gala Dinner on Christmas evening</td>
                                <td
                                    style="padding: 6px 15px;color: #1E2339;background: none;text-align: center;font-size: 11px !important;border: 1px solid #ABB0C1;">
                                    <table cellpadding="0" cellspacing="0"
                                        style="width: 150px; border: none !important; box-shadow: none; margin: 0 auto;">
                                        <tr>
                                            <td><img src="images/user-icons/man-icon.svg" alt=""
                                                    style="width: 10px; margin:0 5px 0 0;"> 15</td>
                                            <td><img src="images/user-icons/women-icon.svg" alt=""
                                                    style="width: 14px; margin:0 5px 0 0;"> 15</td>
                                            <td><img src="images/user-icons/child-icon.svg" alt=""
                                                    style="width: 13px; margin:0 5px 0 0;"> 15</td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="padding: 6px 15px;color: #1E2339;background: none;text-align: center;font-size: 11px !important;border: 1px solid #ABB0C1;">
                                    01 Jan 2023</td>
                                <td
                                    style="padding: 6px 15px;color: #1E2339;background: none;text-align: left;font-size: 11px !important;border: 1px solid #ABB0C1;">
                                    Gala Dinner on Christmas evening</td>
                                <td
                                    style="padding: 6px 15px;color: #1E2339;background: none;text-align: center;font-size: 11px !important;border: 1px solid #ABB0C1;">
                                    <table cellpadding="0" cellspacing="0"
                                        style="width: 150px; border: none !important; box-shadow: none; margin: 0 auto;">
                                        <tr>
                                            <td><img src="images/user-icons/man-icon.svg" alt=""
                                                    style="width: 10px; margin:0 5px 0 0;"> 15</td>
                                            <td><img src="images/user-icons/women-icon.svg" alt=""
                                                    style="width: 14px; margin:0 5px 0 0;"> 15</td>
                                            <td><img src="images/user-icons/child-icon.svg" alt=""
                                                    style="width: 13px; margin:0 5px 0 0;"> 15</td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table cellpadding="0" cellspacing="0"
                        style="width: 100%; float: left; border: none !important; box-shadow: none; margin: 15px 0 0;">
                        <tr style="background: none;">
                            <td style="width: 85%;"
                                style="padding: 10px 0px;color: #1E2339;background: none;text-align: left;font-size: 11px !important;border: none;">
                                <p style="display: block; margin: 0 0 5px; font-weight: bold; color: #222">This is a
                                    computer generated voucher and does not contain any signature.</p>
                                <p style="display: block; margin: 0 0 5px; font-weight: bold; color: #222">Voucher
                                    generated <img src="images/logo.svg" style="width: 60px;" alt=""></p>
                            </td>
                            <td style="width: 10%; text-align: right;"
                                style="padding: 10px 0px;color: #1E2339;background: none;text-align: left;font-size: 11px !important;border: none;">
                                <img src="images/qr-code.png" alt="" style="width: 50px;">
                            </td>
                        </tr>
                    </table>
                    <table cellpadding="0" cellspacing="0"
                        style="width: 100%; float: left; border: none !important; box-shadow: none; margin: 15px 0 0;">
                        <tr style="background: none;">
                            <td style="width: 100%; text-align: right;"
                                style="padding: 10px 0px;color: #1E2339;background: none;text-align: left;font-size: 11px !important;border: none;">
                                <button style="color: #fff; -webkit-print-color-adjust:exact;
    background: #E40968 !important; border: 1px solid transparent;
    padding: 0.375rem 0.75rem; line-height: 1.5;text-align: center; display: inline-block;
    font-weight: 400;    border-radius: 5px;
    min-width: 150px;">Print</button>
                            </td>
                        </tr>
                    </table>

                </td>
            </tr>
        </table>
    </div>
</div>


<style>
* {
    /* -webkit-print-color-adjust: exact; */
}
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>

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
        d.scrollRight = div.scrollRight;
    });
}));


// function moveToLeft() {
//     divs.forEach(element => {
//         element.scrolRight -= (element.offsetWidth);
//     });
// }

// function moveToRight() {
//     divs.forEach(element => {
//         element.scrollLeft += (element.offsetWidth);
//     });
// }

function moveToRight() {
    event.preventDefault();
    $('#scroll-table-1').animate({
        scrollLeft: "+=1000px"
    }, "slow");
}

function moveToLeft() {
    event.preventDefault();
    $('.scroll-table').animate({
        scrollLeft: "-=1000px"
    }, "slow");
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

function viewDetails(id) {
    $(`#matching-boxes-main-${id}`).slideToggle(500);
    $(`#view-details-btn-0${id}`).toggleClass(`view-details-on`);
}

// $(window).on('load', function() {
//     $('#BookingConfirmationModal').modal('show');
// });
$(document).ready(function() {
    $(".comment-btn").click(function() {
        $(".comment-box-main").slideToggle();
    });
    $(".activity-btn").click(function() {
        $(".show-activity-wrapper").slideToggle();
    });
    $(function() {
        // $("#datepicker").datepicker();
        $(".datepicker").datepicker();
    });

});

// jQuery(document).ready(function($) {
//     $(".show-more-btn").click(function(e) {
//         $(".activity-chat-single:hidden").slice(0, 3).fadeIn();
//         if ($(".activity-chat-single:hidden").length < 1) $(this).fadeOut();
//     })
// })
</script>