@extends('layouts.main')

<link rel="stylesheet" href="{{ asset('../css/registration.css') }}">
<!-- Icons Link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- jQuery for selectors -->

@section('body')
    {{-- slider --}}
    <section class="slider">
        <div id="uniqueSlider" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#uniqueSlider" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="Slide 1"></button>
                {{-- <button type="button" data-bs-target="#uniqueSlider" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#uniqueSlider" data-bs-slide-to="2" aria-label="Slide 3"></button> --}}
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../img/slider/slide1.jpeg" class="d-block w-100" alt="First Slide">
                </div>
                {{-- <div class="carousel-item">
                    <img src="../img/slider/slide2.jpg" class="d-block w-100" alt="Second Slide">
                </div>
                <div class="carousel-item">
                    <img src="../img/slider/slide3.jpg" class="d-block w-100" alt="Third Slide">
                </div> --}}
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#uniqueSlider" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#uniqueSlider" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    {{-- registeration form --}}
    <section class="registeration mb-3">
        <div class="register-form">
            <div class="form_wrapper">
                <div class="form_container">
                    <div class="title_container">
                        <h2>Fill In Details</h2>
                    </div>
                    <div class="row clearfix">
                        <div class="">
                            <form id='registerForm' method="POST">
                                @csrf
                                <div class="row clearfix">
                                    <div class="col_half">
                                        <label for="fullname">Fullname</label>
                                        <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                                            <input type="text" id="fullname" name="fullname" placeholder="Fullname"
                                                required />
                                        </div>
                                    </div>
                                    <div class="col_half">
                                        <label for="email">Email</label>
                                        <div class="input_field"> <span><i aria-hidden="true"
                                                    class="fa fa-envelope"></i></span>
                                            <input type="email" id="email" name="email" placeholder="Email" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col_half">
                                        <label for="mobile">Mobile no</label>
                                        <div class="input_field"> <span><i aria-hidden="true"
                                                    class="fa fa-phone"></i></span>
                                            <input type="text" id="mobile" name="mobile" placeholder="Mobile no"
                                                required />
                                        </div>
                                    </div>
                                    <div class="col_half">
                                        <label for="gov_id">KMC ID</label>
                                        <div class="input_field"> <span><i aria-hidden="true"
                                                    class="fa fa-id-card"></i></span>
                                            <input type="text" id="kmc_id" name="kmc_id" placeholder="KMC ID"
                                                required />
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col_half">
                                        <label for="working_place">Working Place</label>
                                        <div class="input_field"> <span><i aria-hidden="true"
                                                    class="fa fa-location-arrow"></i></span>
                                            <input type="text" id="working_place" name="working_place"
                                                placeholder="Working Place" />
                                        </div>
                                    </div>
                                    <div class="col_half">
                                        <label for="departuring_place">Departuring Place</label>
                                        <div class="input_field"> <span><i aria-hidden="true"
                                                    class="fa fa-location-arrow"></i></span>
                                            <input type="text" id="departuring_place" name="departuring_place"
                                                placeholder="Departuring Place" />
                                        </div>

                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col_half">
                                        <label for="departuring_date">Departuring Date</label>
                                        <div class="input_field"> <span><i aria-hidden="true"
                                                    class="fa fa-calendar"></i></span>
                                            <input type="date" id="departuring_date" name="departuring_date"
                                                placeholder="Departuring Date" />
                                        </div>
                                    </div>
                                    <div class="col_half">
                                        <label for="departuring_time">Departuring Time</label>
                                        <div class="input_field"> <span><i aria-hidden="true"
                                                    class="fa fa-clock"></i></span>
                                            <input type="time" id="departuring_time" name="departuring_time"
                                                placeholder="Departuring Time" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col_half">
                                        <label for="arrival_date">Arrival Date</label>
                                        <div class="input_field"> <span><i aria-hidden="true"
                                                    class="fa fa-calendar"></i></span>
                                            <input type="date" id="arrival_date" name="arrival_date"
                                                placeholder="Arrival Date" />
                                        </div>
                                    </div>
                                    <div class="col_half">
                                        <label for="arrival_time">Arrival Time</label>
                                        <div class="input_field"> <span><i aria-hidden="true"
                                                    class="fa fa-clock"></i></span>
                                            <input type="time" id="arrival_time" name="arrival_time"
                                                placeholder="Arrival Time" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col_half">
                                        <label for="accomodation_request">Accommodation Assistance
                                            Required?</label>
                                        <div class="input_field radio_option">
                                            <input type="radio" name="accomodation_request"
                                                id="accomodation_request_yes" value="Yes">
                                            <label for="accomodation_request_yes">Yes</label>

                                            <input type="radio" name="accomodation_request"
                                                id="accomodation_request_no" value="No">
                                            <label for="accomodation_request_no">No</label>
                                        </div>

                                        <div id="accommodation_dropdown" class="input_field select_option"
                                            style="display: none;">
                                            <div class="input_field select_option">
                                                <label for="accommodation_type">Accommodation At</label>
                                                <select id="accommodation_type" name="accommodation_type"
                                                    onchange="showHotelDetails()">
                                                    <option value="">Select Hotel</option>
                                                    <option>The Fern Residency</option>
                                                    <option>Hotel Le Grande</option>
                                                    <option>Town Palace Hotel</option>
                                                    <option>Kyriad Hotel</option>
                                                    <option>Hotel Madhuvan International</option>
                                                    <option>Hotel Basava Residency</option>
                                                    <option>Hotel Magis Inn</option>
                                                    <option>Hotel Kanishka International</option>
                                                    <option>Hotel Ashoka Residency</option>
                                                    <option>Hotel Royal Residency</option>
                                                    <option>Hotel Godavari Lodging & Boarding</option>
                                                    <option>Hotel Shree Sai Prabhat Lodging</option>
                                                    <option>Hotel Milan</option>
                                                    <option>Spoorti Resorts</option>
                                                    <option>Hotel Pleasant Stay</option>
                                                    <option>Hotel Shashinag Residency</option>
                                                    <option>Hotel Kanishka International</option>
                                                    <option>Ashoka Village</option>
                                                    <option>Hotel Navaratna International</option>
                                                    <option>Hotel Golden Heights</option>
                                                    <option>Galaxy Club & Hotel</option>
                                                    <option>Hotel Ratna Palace</option>
                                                    <option>Hotel Ashoka Residency</option>
                                                    <option>Hotel Heritage International</option>
                                                    <!-- Add more hotel options here -->
                                                </select>
                                                <div class="select_arrow mt-3"></div>
                                            </div>

                                            <div id="hotel_details" style="display: none;">
                                                <!--<h4>Hotel Details:</h4>-->
                                                <p id="hotel_address"></p>
                                                <p id="hotel_mobile"></p>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col_half">
                                        <label for="fees">Registration Fee Type</label>
                                        <div class="input_field radio_option">
                                            <input type="radio" name="fees" id="fees_cash" value="cash">
                                            <label for="fees_cash">Cash</label>
                                            <input type="radio" name="fees" id="fees_online" value="online">
                                            <label for="fees_online">Online</label>
                                        </div>

                                        <!-- Conditional input fields -->
                                        <div id="cash_field" class="conditional_field" style="display: none;">
                                            <label for="receipt_no">Receipt Number</label>
                                            <div class="input_field">
                                                <span><i aria-hidden="true" class="fa fa-location-arrow"></i></span>
                                                <input type="text" id="receipt_no" name="receipt_no"
                                                    placeholder="Enter Receipt Number" />
                                            </div>

                                            <!-- New Fees Paid Field for Cash -->
                                            <label for="fees_paid_cash">Fees Paid</label>
                                            <div class="input_field">
                                                <span><i aria-hidden="true" class="fa fa-location-arrow"></i></span>
                                                <input type="text" id="fees_paid_cash" name="fees_paid_cash"
                                                    placeholder="Enter Fees Paid" />
                                            </div>
                                        </div>

                                        <!-- Online Payment Section -->
                                        <div id="online_field" class="conditional_field" style="display: none;">
                                            <label for="utr_no">UTR Number</label>
                                            <div class="input_field">
                                                <span><i aria-hidden="true" class="fa fa-location-arrow"></i></span>
                                                <input type="text" id="utr_no" name="utr_no"
                                                    placeholder="Enter UTR Number" />
                                            </div>

                                            <!-- New Fees Paid Field for Online -->
                                            <label for="fees_paid_online">Fees Paid</label>
                                            <div class="input_field">
                                                <span><i aria-hidden="true" class="fa fa-location-arrow"></i></span>
                                                <input type="text" id="fees_paid_online" name="fees_paid_online"
                                                    placeholder="Enter Fees Paid" />
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <input class="button" type="submit" value="Register" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        const hotels = {
            "The Fern Residency": {
                address: "Athani Road, Vijayapura",
                mobile: "7947413606"
            },
            "Hotel Le Grande": {
                address: "Sainik School Road, Vijayapura",
                mobile: "7942690655"
            },
            "Town Palace Hotel": {
                address: "Sainik School Road, Vijayapura",
                mobile: "738087071"
            },
            "Kyriad Hotel": {
                address: "Station Road, Vijayapura",
                mobile: "9380902500"
            },
            "Hotel Madhuvan International": {
                address: "Station Road, Vijayapura",
                mobile: "9341000999"
            },
            "Hotel Basava Residency": {
                address: "Station Road, Vijayapura",
                mobile: "7947430112"
            },
            "Hotel Magis Inn": {
                address: "Station Road, Vijayapura",
                mobile: "7383474362"
            },
            "Hotel Kanishka International": {
                address: "Rly Station Road, Vijayapura",
                mobile: "7942698109"
            },
            "Hotel Ashoka Residency": {
                address: "New College,Solapur Road, Vijayapura",
                mobile: "8485980814"
            },
            "Hotel Royal Residency": {
                address: "Station Road, Vijayapura",
                mobile: "7947433774"
            },
            "Hotel Godavari Lodging & Boarding": {
                address: "Athani Road, Vijayapura",
                mobile: "7383104717"
            },
            "Hotel Shree Sai Prabhat Lodging": {
                address: "Jamkhandi Road, Vijayapura",
                mobile: "8147955742"
            },
            "Hotel Milan": {
                address: "Solapur Road, Vijayapura",
                mobile: "7947103732"
            },
            "Spoorti Resorts": {
                address: "Athani-Solapur Ring Road, Vijayapura",
                mobile: "7947105486"
            },
            "Hotel Pleasant Stay": {
                address: "Solapur Road, Vijayapura",
                mobile: "7942700850"
            },
            "Hotel Shashinag Residency": {
                address: "Solapur-Vijayapura Bypass Road",
                mobile: "738163292"
            },
            "Ashoka Village": {
                address: "Vijayapura Road, Horti",
                mobile: "8123036163"
            },
            "Hotel Navaratna International": {
                address: "Station Road, Vijayapura",
                mobile: "7947416923"
            },
            "Hotel Golden Heights": {
                address: "Station Road, Vijayapura",
                mobile: "7947130588"
            },
            "Galaxy Club & Hotel": {
                address: "Cross Solapur Road, Vijayapura",
                mobile: "7947419035"
            },
            "Hotel Ratna Palace": {
                address: "Solapur Road, Vijayapura",
                mobile: "7942681319"
            },
            "Hotel Heritage International": {
                address: "Station Road, Vijayapura",
                mobile: "7947148054"
            }
        };

        function showHotelDetails() {
            const hotelSelect = document.getElementById('accommodation_type');
            const hotelId = hotelSelect.value;
            const hotelDetailsDiv = document.getElementById('hotel_details');

            if (hotelId && hotels[hotelId]) {
                const selectedHotel = hotels[hotelId];

                // Show the hotel details
                document.getElementById('hotel_address').innerText = "Address: " + selectedHotel.address;
                document.getElementById('hotel_mobile').innerText = "Mobile: " + selectedHotel.mobile;

                hotelDetailsDiv.style.display = "block"; // Show details div
            } else {
                hotelDetailsDiv.style.display = "none"; // Hide details if no hotel selected
            }
        }

        document.addEventListener("DOMContentLoaded", function() {
            // Initialize required elements
            const cashRadio = document.getElementById("fees_cash");
            const onlineRadio = document.getElementById("fees_online");
            const cashField = document.getElementById("cash_field");
            const onlineField = document.getElementById("online_field");
            const accomodationYesRadio = document.getElementById("accomodation_request_yes");
            const accomodationNoRadio = document.getElementById("accomodation_request_no");
            const accommodationDropdown = document.getElementById("accommodation_dropdown");

            function toggleFields() {
                if (cashRadio.checked) {
                    cashField.style.display = "block";
                    onlineField.style.display = "none";
                } else if (onlineRadio.checked) {
                    onlineField.style.display = "block";
                    cashField.style.display = "none";
                } else {
                    cashField.style.display = "none";
                    onlineField.style.display = "none";
                }
            }

            function toggleAccommodationDropdown() {
                if (accomodationYesRadio.checked) {
                    accommodationDropdown.style.display = "block";
                } else {
                    accommodationDropdown.style.display = "none";
                }
            }

            cashRadio.addEventListener("change", toggleFields);
            onlineRadio.addEventListener("change", toggleFields);
            accomodationYesRadio.addEventListener("change", toggleAccommodationDropdown);
            accomodationNoRadio.addEventListener("change", toggleAccommodationDropdown);

            // Initialize fields based on the default selection
            toggleFields();
            toggleAccommodationDropdown();
        });

        // Form Submit Button
        document.getElementById('registerForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const feesType = $('input[name="fees"]:checked').val();
            let fees_no = '';
            let fees_paid = '';

            if (feesType === 'cash') {
                fees_no = $('#receipt_no').val();
                fees_paid = $('#fees_paid_cash').val();
            } else if (feesType === 'online') {
                fees_no = $('#utr_no').val();
                fees_paid = $('#fees_paid_online').val();
            }

            // Validation for fees_paid to ensure value is present
            // if (!fees_paid) {
            //     Swal.fire({
            //         icon: 'warning',
            //         title: 'Missing Payment Amount',
            //         text: 'Please enter the fees paid amount.',
            //         confirmButtonText: 'OK'
            //     });
            //     return;
            // }

            const data = {
                fullname: $('#fullname').val(),
                email: $('#email').val(),
                mobile: $('#mobile').val(),
                kmc_id: $('#kmc_id').val(),
                working_place: $('#working_place').val(),
                departuring_place: $('#departuring_place').val(),
                departuring_date: $('#departuring_date').val(),
                departuring_time: $('#departuring_time').val(),
                arrival_date: $('#arrival_date').val(),
                arrival_time: $('#arrival_time').val(),
                accommodation_assistance: $('input[name="accomodation_request"]:checked').val(),
                fees_type: feesType,
                fees_no: fees_no,
                fees_paid: fees_paid
            };

            axios.post('{{ url('api/registers') }}', data)
                .then(response => {
                    if (response.data.status) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: response.data.message,
                            confirmButtonText: 'OK'
                        }).then(() => {
                            // window.location.reload();
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error!',
                            text: response.data.message,
                            confirmButtonText: 'OK'
                        });
                    }
                })
                .catch(error => {
                    console.error(error);
                    Swal.fire({
                        icon: 'error',
                        title: 'Submission Failed!',
                        text: 'There was an issue submitting the form. Please try again.',
                        confirmButtonText: 'OK'
                    });
                });
        });
    </script>
@endsection
