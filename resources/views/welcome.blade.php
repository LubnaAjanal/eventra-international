<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link rel="stylesheet" href="{{ asset('../website/registration.css') }}">

    <!-- Icons Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>

<body>
    <div class="container">
        <div class="register-form">
            <div class="form_wrapper">
                <div class="form_container">
                    <div class="title_container">
                        <h2>Registration Form</h2>
                    </div>
                    <div class="row clearfix">
                        <div class="">
                            <form >
                                <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                                    <input type="text" name="fullname" placeholder="Fullname" required />
                                </div>
                                <!-- End Fullname Field -->

                                <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
                                    <input type="email" name="email" placeholder="Email" required />
                                </div>
                                <!-- End Email ID Field -->

                                <div class="input_field"> <span><i aria-hidden="true" class="fa fa-phone"></i></span>
                                    <input type="text" name="mobile" placeholder="Mobile no" required />
                                </div>
                                <!-- End Mobile No Field -->

                                <div class="input_field"> <span><i aria-hidden="true" class="fa fa-id-card"></i></span>
                                    <input type="text" name="gov_id" placeholder="Governemnt ID" required />
                                </div>
                                <!-- End Government ID Field -->

                                <div class="row clearfix">
                                    <div class="col_half">
                                        <div class="input_field"> <span><i aria-hidden="true"
                                                    class="fa fa-calendar"></i></span>
                                            <input type="date" name="arrival_date" placeholder="Arrival Date"
                                                required />
                                        </div>
                                    </div>
                                    <div class="col_half">
                                        <div class="input_field"> <span><i aria-hidden="true"
                                                    class="fa fa-clock"></i></span>
                                            <input type="time" name="arrival_time" placeholder="Arrival Time" />
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="input_field radio_option">
                                    <input type="radio" name="radiogroup1" id="rd1">
                                    <label for="rd1">Male</label>
                                    <input type="radio" name="radiogroup1" id="rd2">
                                    <label for="rd2">Female</label>
                                </div> --}}

                                <div class="input_field"> <span><i aria-hidden="true"
                                            class="fa fa-location-arrow"></i></span>
                                    <input type="text" name="working_place" placeholder="Working Place" required />
                                </div>
                                <!-- End Working Place Field -->

                                <div class="input_field"> <span><i aria-hidden="true"
                                            class="fa fa-location-arrow"></i></span>
                                    <input type="text" name="stay_selected_at" placeholder="Staying Place"
                                        required />
                                </div>
                                <!-- End Stay Selected at  Field -->

                                <div class="input_field"> <span><i aria-hidden="true"
                                            class="fa fa-location-arrow"></i></span>
                                    <input type="text" name="departuring_place" placeholder="Departuring Place"
                                        required />
                                </div>
                                <!-- End Departuring Place  Field -->

                                <div class="row clearfix">
                                    <div class="col_half">
                                        <div class="input_field"> <span><i aria-hidden="true"
                                                    class="fa fa-calendar"></i></span>
                                            <input type="date" name="departuring_date" placeholder="Departuring Date"
                                                required />
                                        </div>
                                    </div>
                                    <div class="col_half">
                                        <div class="input_field"> <span><i aria-hidden="true"
                                                    class="fa fa-clock"></i></span>
                                            <input type="time" name="departuring_time"
                                                placeholder="Departuring Time" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col_half">
                                        <div class="input_field select_option">
                                            <select>
                                                <option>Select adults</option>
                                                <option>Option 1</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                                <option>Option 4</option>
                                            </select>
                                            <div class="select_arrow"></div>
                                        </div>
                                    </div>
                                    <div class="col_half">
                                        <div class="input_field select_option">
                                            <select>
                                                <option>Select children</option>
                                                <option>Option 1</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                                <option>Option 4</option>
                                            </select>
                                            <div class="select_arrow"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="input_field select_option">
                                    <select>
                                        <option>Select accomodation system request</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                    <div class="select_arrow"></div>
                                </div>

                                <input class="button" type="submit" value="Register" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <p class="credit">Developed by <a href="http://www.designtheway.com" target="_blank">Medya Web Tech</a>
            </p>

        </div>
    </div>
</body>
</html>
