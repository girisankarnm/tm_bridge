<?php
frontend\assets\AppAsset::register($this);
$this->registerCssFile('/css/ppe/style.css');
$this->registerCssFile('/css/datepicker.css');
$this->registerCssFile('/css/users/user-styles.css');
$this->registerCssFile('/css/booking-request/booking-request.css');
$this->registerCssFile('/css/custom-style.css');
$this->registerCssFile('/css/datepicker/jquery-ui.css');
$this->registerCssFile('/css/messages/messages.css');
$this->registerCssFile('/css/data-table.css');
?>
<div class="wrapper">
    <div class="room-booking-header" style="-webkit-print-color-adjust: exact;">
        <div class="room-booking-header-left">
            <div class="heading border-none" style="font-size: 12px;">Booking Status Report</div>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="search-area">
                <div class="search-box">
                    <h5 class="search-head">Enq No.</h5>
                    <input type="text" class="search-input" placeholder="Search" style="min-width: 70%;">
                    <button class="btn primary-btn small-btn">Search</button>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="text-right">
                <button class="print-icons" style="margin: 0 0 0 0; border: none;background: none;"><img
                        src="images/printer.png" alt=""></button>
            </div>
        </div>
    </div>
    <div class="table-top-strip">
        <table class="table" style="border: 1px solid #dee2e6 !important;" cellpadding="0" cellspacing="0">
            <tr>
                <td style="padding: 10px;">Enq No: <strong>XXXX | 2023 </strong></td>
                <td style="padding: 10px;"> Guest: <strong>Manoj John</strong></td>
                <td style="padding: 10px;padding: 10px;" colspan="2">Tour Date:
                    <strong>15 Mar 23 To 22 Mar 23 (7 N)</strong>
                </td>
            </tr>
            <tr>
                <td style="padding: 10px;">Destinations: <strong>3</strong></td>
                <td style="padding: 10px;">Accommodation Requirement: <strong>6N</strong></td>
                <td style="padding: 10px;">Booked: <strong>5N</strong></td>
                <td style="padding: 10px;">Pending: <strong>1N</strong></td>
            </tr>
        </table>
    </div>

    <div class="booking-report-table">
        <table style="width: 100%;border: 1px solid #dee2e6 !important;" cellpadding="0" cellspacing="0">
            <tbody>
                <tr>
                    <td style="width: 200px; min-width: 200px;background:#5968DB;-webkit-print-color-adjust: exact; color: #fff;padding: 5px 10px;white-space: nowrap;"
                        rowspan="2">
                        Destination
                        Date of Stay
                    </td>
                    <td style="background:#5968DB;-webkit-print-color-adjust: exact; color: #fff;padding: 5px 10px;border-left: 1px solid #dee2e6;"
                        rowspan="2">Property | Room Category
                    </td>
                    <td style="background:#5968DB;-webkit-print-color-adjust: exact; color: #fff;padding: 5px 10px;border-left: 1px solid #dee2e6; border-right:1px solid #dee2e6; width: 90px;text-align: center; min-width: 90px;"
                        rowspan="2">Meal Plan</td>
                    <td
                        style="background:#5968DB;-webkit-print-color-adjust: exact; color: #fff;padding: 5px 10px;border-left: 1px solid #dee2e6;width: 350px;text-align: center;">
                        Booked
                        Units</td>
                </tr>
                <tr>
                    <td>
                        <table style="width: 350px;box-shadow: none;width: 100%;border: 1px solid #dee2e6 !important;border-left: none !important;
    border-bottom: none !important;" cellpadding="0" cellspacing="0">
                            <tr>
                                <td
                                    style="background:#5968DB;-webkit-print-color-adjust: exact; border-right: 1px solid #fff; color: #fff;width: 70px; padding: 5px 10px;text-align: center; min-width: 70px;">
                                    Room</td>
                                <td
                                    style="background:#5968DB;-webkit-print-color-adjust: exact; border-right: 1px solid #fff; color: #fff;width: 70px; padding: 5px 10px;text-align: center; min-width: 70px;">
                                    EBA</td>
                                <td
                                    style="background:#5968DB;-webkit-print-color-adjust: exact; border-right: 1px solid #fff; color: #fff;width: 70px; padding: 5px 10px;text-align: center; min-width: 70px;">
                                    CWB</td>
                                <td
                                    style="background:#5968DB;-webkit-print-color-adjust: exact; border-right: 1px solid #fff; color: #fff;width: 70px; padding: 5px 10px;text-align: center; min-width: 70px;">
                                    CNB</td>
                                <td
                                    style="background:#5968DB;-webkit-print-color-adjust: exact; border-right: 1px solid #fff; color: #fff;width: 70px; padding: 5px 10px;text-align: center; min-width: 70px;">
                                    SGL</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr style="border-bottom: 1px solid #ddd;">
                    <td style="border-right: 1px solid #dee2e6; padding: 5px 10px; vertical-align: top;">
                        <h4 class="place-name">Munnar</h4>
                        <p class="place-dates">Wed, 15 Mar 2023</p>
                    </td>
                    <td colspan="3" style="border-right: 1px solid #dee2e6; padding: 0px;">
                        <table class=""
                            style="box-shadow: none;border:none !important; padding: 5px 10px; width: 100%; margin:0 0 20px;">
                            <tr>
                                <td colspan="7" style="padding: 5px 10px 0px;">
                                    <h4 class="place-name">Munnar</h4>
                                </td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #dee2e6;padding: 5px 10px;">Standard Room</td>
                                <td
                                    style="border: 1px solid #dee2e6;padding: 5px 10px; width: 90px; text-align: center; min-width: 90px">
                                    CP</td>
                                <td
                                    style="border: 1px solid #dee2e6;padding: 5px 10px; width: 70px; text-align: center; min-width: 70px">
                                    6</td>
                                <td
                                    style="border: 1px solid #dee2e6;padding: 5px 10px; width: 70px; text-align: center; min-width: 70px">
                                    3</td>
                                <td
                                    style="border: 1px solid #dee2e6;padding: 5px 10px; width: 70px; text-align: center; min-width: 70px">
                                    2</td>
                                <td
                                    style="border: 1px solid #dee2e6;padding: 5px 10px; width: 70px; text-align: center; min-width: 70px">
                                    2</td>
                                <td
                                    style="border: 1px solid #dee2e6;padding: 5px 10px; width: 70px; text-align: center; min-width: 70px">
                                    2</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #dee2e6;padding: 5px 10px;">Deluxe Room</td>
                                <td
                                    style="border: 1px solid #dee2e6;padding: 5px 10px; width: 90px; text-align: center; min-width: 90px">
                                    CP</td>
                                <td
                                    style="border: 1px solid #dee2e6;padding: 5px 10px; width: 70px; text-align: center; min-width: 70px">
                                    6</td>
                                <td
                                    style="border: 1px solid #dee2e6;padding: 5px 10px; width: 70px; text-align: center; min-width: 70px">
                                    3</td>
                                <td
                                    style="border: 1px solid #dee2e6;padding: 5px 10px; width: 70px; text-align: center; min-width: 70px">
                                    2</td>
                                <td
                                    style="border: 1px solid #dee2e6;padding: 5px 10px; width: 70px; text-align: center; min-width: 70px">
                                    2</td>
                                <td
                                    style="border: 1px solid #dee2e6;padding: 5px 10px; width: 70px; text-align: center; min-width: 70px">
                                    2</td>
                            </tr>
                        </table>
                        <table class=""
                            style="box-shadow: none;border:none !important; padding: 5px 10px; width: 100%; margin:0 0 20px;">
                            <tr>
                                <td colspan="7" style="padding: 5px 10px 0px;">
                                    <h4 class="place-name">Munnar</h4>
                                </td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #dee2e6;padding: 5px 10px;">Standard Room</td>
                                <td
                                    style="border: 1px solid #dee2e6;padding: 5px 10px; width: 90px; text-align: center; min-width: 90px">
                                    CP</td>
                                <td
                                    style="border: 1px solid #dee2e6;padding: 5px 10px; width: 70px; text-align: center; min-width: 70px">
                                    6</td>
                                <td
                                    style="border: 1px solid #dee2e6;padding: 5px 10px; width: 70px; text-align: center; min-width: 70px">
                                    3</td>
                                <td
                                    style="border: 1px solid #dee2e6;padding: 5px 10px; width: 70px; text-align: center; min-width: 70px">
                                    2</td>
                                <td
                                    style="border: 1px solid #dee2e6;padding: 5px 10px; width: 70px; text-align: center; min-width: 70px">
                                    2</td>
                                <td
                                    style="border: 1px solid #dee2e6;padding: 5px 10px; width: 70px; text-align: center; min-width: 70px">
                                    2</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #dee2e6;padding: 5px 10px;">Deluxe Room</td>
                                <td
                                    style="border: 1px solid #dee2e6;padding: 5px 10px; width: 90px; text-align: center; min-width: 90px">
                                    CP</td>
                                <td
                                    style="border: 1px solid #dee2e6;padding: 5px 10px; width: 70px; text-align: center; min-width: 70px">
                                    6</td>
                                <td
                                    style="border: 1px solid #dee2e6;padding: 5px 10px; width: 70px; text-align: center; min-width: 70px">
                                    3</td>
                                <td
                                    style="border: 1px solid #dee2e6;padding: 5px 10px; width: 70px; text-align: center; min-width: 70px">
                                    2</td>
                                <td
                                    style="border: 1px solid #dee2e6;padding: 5px 10px; width: 70px; text-align: center; min-width: 70px">
                                    2</td>
                                <td
                                    style="border: 1px solid #dee2e6;padding: 5px 10px; width: 70px; text-align: center; min-width: 70px">
                                    2</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr style="border-bottom: 1px solid #ddd;">
                    <td style="border-right: 1px solid #dee2e6; padding: 5px 10px; vertical-align: top;">
                        <h4 class="place-name">Munnar</h4>
                        <p class="place-dates">Wed, 15 Mar 2023</p>
                    </td>
                    <td colspan="3" style="border-right: 1px solid #dee2e6; padding: 0px;">
                        <table class=""
                            style="box-shadow: none;border:none !important; padding: 5px 10px; width: 100%; margin:0 0 20px;">
                            <tr>
                                <td colspan="7" style="padding: 5px 10px 0px;">
                                    <h4 class="place-name">Munnar</h4>
                                </td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #dee2e6;padding: 5px 10px;">Standard Room</td>
                                <td
                                    style="border: 1px solid #dee2e6;padding: 5px 10px; width: 90px; text-align: center; min-width: 90px">
                                    CP</td>
                                <td
                                    style="border: 1px solid #dee2e6;padding: 5px 10px; width: 70px; text-align: center; min-width: 70px">
                                    6</td>
                                <td
                                    style="border: 1px solid #dee2e6;padding: 5px 10px; width: 70px; text-align: center; min-width: 70px">
                                    3</td>
                                <td
                                    style="border: 1px solid #dee2e6;padding: 5px 10px; width: 70px; text-align: center; min-width: 70px">
                                    2</td>
                                <td
                                    style="border: 1px solid #dee2e6;padding: 5px 10px; width: 70px; text-align: center; min-width: 70px">
                                    2</td>
                                <td
                                    style="border: 1px solid #dee2e6;padding: 5px 10px; width: 70px; text-align: center; min-width: 70px">
                                    2</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #dee2e6;padding: 5px 10px;">Deluxe Room</td>
                                <td
                                    style="border: 1px solid #dee2e6;padding: 5px 10px; width: 90px; text-align: center; min-width: 90px">
                                    CP</td>
                                <td
                                    style="border: 1px solid #dee2e6;padding: 5px 10px; width: 70px; text-align: center; min-width: 70px">
                                    6</td>
                                <td
                                    style="border: 1px solid #dee2e6;padding: 5px 10px; width: 70px; text-align: center; min-width: 70px">
                                    3</td>
                                <td
                                    style="border: 1px solid #dee2e6;padding: 5px 10px; width: 70px; text-align: center; min-width: 70px">
                                    2</td>
                                <td
                                    style="border: 1px solid #dee2e6;padding: 5px 10px; width: 70px; text-align: center; min-width: 70px">
                                    2</td>
                                <td
                                    style="border: 1px solid #dee2e6;padding: 5px 10px; width: 70px; text-align: center; min-width: 70px">
                                    2</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr style="border-bottom: 1px solid #ddd;">
                    <td style="border-right: 1px solid #dee2e6; padding: 5px 10px; vertical-align: top;">
                        <h4 class="place-name">Munnar</h4>
                        <p class="place-dates">Wed, 15 Mar 2023</p>
                    </td>
                    <td colspan="3" style="border-right: 1px solid #dee2e6; padding: 0px;">
                        <table class=""
                            style="box-shadow: none;border:none !important; padding: 5px 10px; width: 100%; margin:0 0 20px;">
                            <tr>
                                <td colspan="7" style="padding: 5px 10px 0px;">
                                    <h4 class="place-name">Munnar</h4>
                                </td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #dee2e6;padding: 5px 10px;">Standard Room</td>
                                <td
                                    style="border: 1px solid #dee2e6;padding: 5px 10px; width: 90px; text-align: center; min-width: 90px">
                                    CP</td>
                                <td
                                    style="border: 1px solid #dee2e6;padding: 5px 10px; width: 70px; text-align: center; min-width: 70px">
                                    6</td>
                                <td
                                    style="border: 1px solid #dee2e6;padding: 5px 10px; width: 70px; text-align: center; min-width: 70px">
                                    3</td>
                                <td
                                    style="border: 1px solid #dee2e6;padding: 5px 10px; width: 70px; text-align: center; min-width: 70px">
                                    2</td>
                                <td
                                    style="border: 1px solid #dee2e6;padding: 5px 10px; width: 70px; text-align: center; min-width: 70px">
                                    2</td>
                                <td
                                    style="border: 1px solid #dee2e6;padding: 5px 10px; width: 70px; text-align: center; min-width: 70px">
                                    2</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #dee2e6;padding: 5px 10px;">Deluxe Room</td>
                                <td
                                    style="border: 1px solid #dee2e6;padding: 5px 10px; width: 90px; text-align: center; min-width: 90px">
                                    CP</td>
                                <td
                                    style="border: 1px solid #dee2e6;padding: 5px 10px; width: 70px; text-align: center; min-width: 70px">
                                    6</td>
                                <td
                                    style="border: 1px solid #dee2e6;padding: 5px 10px; width: 70px; text-align: center; min-width: 70px">
                                    3</td>
                                <td
                                    style="border: 1px solid #dee2e6;padding: 5px 10px; width: 70px; text-align: center; min-width: 70px">
                                    2</td>
                                <td
                                    style="border: 1px solid #dee2e6;padding: 5px 10px; width: 70px; text-align: center; min-width: 70px">
                                    2</td>
                                <td
                                    style="border: 1px solid #dee2e6;padding: 5px 10px; width: 70px; text-align: center; min-width: 70px">
                                    2</td>
                            </tr>
                        </table>
                        <table class=""
                            style="box-shadow: none;border:none !important; padding: 5px 10px; width: 100%; margin:0 0 20px;">
                            <tr>
                                <td colspan="7" style="padding: 5px 10px 0px;">
                                    <h4 class="place-name">Munnar</h4>
                                </td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #dee2e6;padding: 5px 10px;">Standard Room</td>
                                <td
                                    style="border: 1px solid #dee2e6;padding: 5px 10px; width: 90px; text-align: center; min-width: 90px">
                                    CP</td>
                                <td
                                    style="border: 1px solid #dee2e6;padding: 5px 10px; width: 70px; text-align: center; min-width: 70px">
                                    6</td>
                                <td
                                    style="border: 1px solid #dee2e6;padding: 5px 10px; width: 70px; text-align: center; min-width: 70px">
                                    3</td>
                                <td
                                    style="border: 1px solid #dee2e6;padding: 5px 10px; width: 70px; text-align: center; min-width: 70px">
                                    2</td>
                                <td
                                    style="border: 1px solid #dee2e6;padding: 5px 10px; width: 70px; text-align: center; min-width: 70px">
                                    2</td>
                                <td
                                    style="border: 1px solid #dee2e6;padding: 5px 10px; width: 70px; text-align: center; min-width: 70px">
                                    2</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #dee2e6;padding: 5px 10px;">Deluxe Room</td>
                                <td
                                    style="border: 1px solid #dee2e6;padding: 5px 10px; width: 90px; text-align: center; min-width: 90px">
                                    CP</td>
                                <td
                                    style="border: 1px solid #dee2e6;padding: 5px 10px; width: 70px; text-align: center; min-width: 70px">
                                    6</td>
                                <td
                                    style="border: 1px solid #dee2e6;padding: 5px 10px; width: 70px; text-align: center; min-width: 70px">
                                    3</td>
                                <td
                                    style="border: 1px solid #dee2e6;padding: 5px 10px; width: 70px; text-align: center; min-width: 70px">
                                    2</td>
                                <td
                                    style="border: 1px solid #dee2e6;padding: 5px 10px; width: 70px; text-align: center; min-width: 70px">
                                    2</td>
                                <td
                                    style="border: 1px solid #dee2e6;padding: 5px 10px; width: 70px; text-align: center; min-width: 70px">
                                    2</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="summary-table" style="margin: 30px 0 0;">
        <h4 class="summary-table-head" style="color: #333;font-size: 14px;margin: 0 0 5px; font-weight: 700;">
            Booking Summary</h4>
        <table style="width: 100%;box-shadow: none;">
            <thead>
                <tr>
                    <th
                        style="width: 20%; background: #5968DB; -webkit-print-color-adjust: exact; color: #fff; padding: 5px 10px !important;  white-space: nowrap;font-family: Bw-Mitga-regular !important; font-weight: inherit;">
                        Destination | Dur</th>
                    <th
                        style="width: 35%; background: #5968DB; -webkit-print-color-adjust: exact; color: #fff; padding: 5px 10px !important; border-right: 1px solid #fff; white-space: nowrap;font-family: Bw-Mitga-regular !important; font-weight: inherit;">
                        Property</th>
                    <th
                        style="width: 10%; text-align: center; background: #5968DB; -webkit-print-color-adjust: exact; color: #fff; padding: 5px 10px !important; border-right: 1px solid #fff; white-space: nowrap;font-family: Bw-Mitga-regular !important; font-weight: inherit;">
                        BKG Ref</th>
                    <th
                        style="width: 10%; text-align: center; background: #5968DB; -webkit-print-color-adjust: exact; color: #fff; padding: 5px 10px !important; border-right: 1px solid #fff; white-space: nowrap;font-family: Bw-Mitga-regular !important; font-weight: inherit;">
                        BKG Date</th>
                    <th
                        style="width: 5%; text-align: center; background: #5968DB; -webkit-print-color-adjust: exact; color: #fff; padding: 5px 10px !important; border-right: 1px solid #fff; white-space: nowrap;font-family: Bw-Mitga-regular !important; font-weight: inherit;">
                        Dur</th>
                    <th
                        style="width: 10%; text-align: center; background: #5968DB; -webkit-print-color-adjust: exact; color: #fff; padding: 5px 10px !important;  white-space: nowrap;font-family: Bw-Mitga-regular !important; font-weight: inherit;">
                        Amount</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="border: 1px solid #dee2e6; padding: 5px 10px;">Munnar</td>
                    <td style="border: 1px solid #dee2e6; padding: 5px 10px;">Munnar Queen Resort</td>
                    <td style="border: 1px solid #dee2e6; padding: 5px 10px;text-align: center;">1234567359</td>
                    <td style="border: 1px solid #dee2e6; padding: 5px 10px;text-align: center;">15 Jan 23</td>
                    <td style="border: 1px solid #dee2e6; padding: 5px 10px;text-align: center;">1</td>
                    <td style="border: 1px solid #dee2e6; padding: 5px 10px;text-align: center;">20,000</td>
                </tr>
                <tr>
                    <td style="border: 1px solid #dee2e6; padding: 5px 10px;">Munnar</td>
                    <td style="border: 1px solid #dee2e6; padding: 5px 10px;">The Leaf Resort & Spa</td>
                    <td style="border: 1px solid #dee2e6; padding: 5px 10px;text-align: center;">1234567359</td>
                    <td style="border: 1px solid #dee2e6; padding: 5px 10px;text-align: center;">15 Jan 23</td>
                    <td style="border: 1px solid #dee2e6; padding: 5px 10px;text-align: center;">1</td>
                    <td style="border: 1px solid #dee2e6; padding: 5px 10px;text-align: center;">25,000</td>
                </tr>
                <tr>
                    <td style="border: 1px solid #dee2e6; padding: 5px 10px;">Thekkady</td>
                    <td style="border: 1px solid #dee2e6; padding: 5px 10px;">Elephant Courtyard</td>
                    <td style="border: 1px solid #dee2e6; padding: 5px 10px;text-align: center;">1234567359</td>
                    <td style="border: 1px solid #dee2e6; padding: 5px 10px;text-align: center;">10 Jan 23</td>
                    <td style="border: 1px solid #dee2e6; padding: 5px 10px;text-align: center;">2</td>
                    <td style="border: 1px solid #dee2e6; padding: 5px 10px;text-align: center;">15,000</td>
                </tr>
                <tr>
                    <td style="border: 1px solid #dee2e6; padding: 5px 10px;">Alappuzha</td>
                    <td style="border: 1px solid #dee2e6; padding: 5px 10px;">Pending Booking</td>
                    <td style="border: 1px solid #dee2e6; padding: 5px 10px;text-align: center;">-</td>
                    <td style="border: 1px solid #dee2e6; padding: 5px 10px;text-align: center;">-</td>
                    <td style="border: 1px solid #dee2e6; padding: 5px 10px;text-align: center;">-</td>
                    <td style="border: 1px solid #dee2e6; padding: 5px 10px;text-align: center;">-</td>
                </tr>
            </tbody>
        </table>
    </div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>

<script>
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
</script>

<style>
@media print {
    .content-contr .sidebar-contr {
        display: none;
    }
}
</style>