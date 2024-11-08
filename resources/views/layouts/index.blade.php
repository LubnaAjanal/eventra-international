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
    <section class="registeration">
        <div class="register-form">
            <div class="form_wrapper">
                <div class="form_container">
                    <div class="title_container">
                        <h2>Registration Form</h2>
                    </div>
                    <div class="row clearfix">
                        <div class="">
                            <form id="registerForm" method="POST">
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
                                            <input type="email" id="email" name="email" placeholder="Email"
                                                required />
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
                                        <label for="gov_id">Government ID</label>
                                        <div class="input_field"> <span><i aria-hidden="true"
                                                    class="fa fa-id-card"></i></span>
                                            <input type="text" id="gov_id" name="gov_id" placeholder="Government ID"
                                                required />
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col_half">
                                        <label for="arrival_date">Arrival Date</label>
                                        <div class="input_field"> <span><i aria-hidden="true"
                                                    class="fa fa-calendar"></i></span>
                                            <input type="date" id="arrival_date" name="arrival_date"
                                                placeholder="Arrival Date" required />
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
                                        <label for="working_place">Working Place</label>
                                        <div class="input_field"> <span><i aria-hidden="true"
                                                    class="fa fa-location-arrow"></i></span>
                                            <input type="text" id="working_place" name="working_place"
                                                placeholder="Working Place" required />
                                        </div>
                                    </div>
                                    <div class="col_half">
                                        <label for="stay_selected_at">Staying Place</label>
                                        <div class="input_field"> <span><i aria-hidden="true"
                                                    class="fa fa-location-arrow"></i></span>
                                            <input type="text" id="stay_selected_at" name="stay_selected_at"
                                                placeholder="Staying Place" required />
                                        </div>
                                    </div>
                                </div>

                                <label for="departuring_place">Departuring Place</label>
                                <div class="input_field"> <span><i aria-hidden="true"
                                            class="fa fa-location-arrow"></i></span>
                                    <input type="text" id="departuring_place" name="departuring_place"
                                        placeholder="Departuring Place" required />
                                </div>

                                <div class="row clearfix">
                                    <div class="col_half">
                                        <label for="departuring_date">Departuring Date</label>
                                        <div class="input_field"> <span><i aria-hidden="true"
                                                    class="fa fa-calendar"></i></span>
                                            <input type="date" id="departuring_date" name="departuring_date"
                                                placeholder="Departuring Date" required />
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
                                        <label for="adults">Select Adults</label>
                                        <div class="input_field select_option">
                                            <select id="adults" name="adults">
                                                <option value="">Select adults</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                            </select>
                                            <div class="select_arrow"></div>
                                        </div>
                                    </div>
                                    <div class="col_half">
                                        <label for="children">Select Children</label>
                                        <div class="input_field select_option">
                                            <select id="children" name="children">
                                                <option value="">Select children</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                            </select>
                                            <div class="select_arrow"></div>
                                        </div>
                                    </div>
                                </div>

                                <label for="accomodation_request">Select Accommodation Request</label>
                                <div class="input_field select_option">
                                    <select id="accomodation_request" name="accomodation_request">
                                        <option value="">Select accommodation request</option>
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
        </div>
    </section>

    <script>
        document.getElementById('registerForm').addEventListener('submit', function(e) {
            e.preventDefault();

            // Manually create the data object from input fields
            let data = {
                fullname: $('#fullname').val(),
                email: $('#email').val(),
                mobile: $('#mobile').val(),
                gov_id: $('#gov_id').val(),
                arrival_date: $('#arrival_date').val(),
                arrival_time: $('#arrival_time').val(),
                working_place: $('#working_place').val(),
                stay_selected_at: $('#stay_selected_at').val(),
                departuring_place: $('#departuring_place').val(),
                departuring_date: $('#departuring_date').val(),
                departuring_time: $('#departuring_time').val(),
                adults: $('#adults').val(),
                children: $('#children').val(),
                accomodation_request: $('#accomodation_request').val()
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
