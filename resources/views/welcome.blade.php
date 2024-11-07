<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link rel="stylesheet" href="{{ asset('../css/registration.css') }}">

    <!-- Icons Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- jQuery for selectors -->
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
                            <form id="registerForm" method="POST">
                                @csrf
                                <div class="row clearfix">
                                    <div class="col_half">
                                        <div class="input_field"> <span><i aria-hidden="true"
                                                    class="fa fa-user"></i></span>
                                            <input type="text" id="fullname" name="fullname" placeholder="Fullname"
                                                required />
                                        </div>
                                    </div>
                                    <div class="col_half">

                                        <div class="input_field"> <span><i aria-hidden="true"
                                                    class="fa fa-envelope"></i></span>
                                            <input type="email" id="email" name="email" placeholder="Email"
                                                required />
                                        </div>
                                    </div>
                                </div>


                                <div class="row clearfix">
                                    <div class="col_half">
                                        <div class="input_field"> <span><i aria-hidden="true"
                                                    class="fa fa-phone"></i></span>
                                            <input type="text" id="mobile" name="mobile" placeholder="Mobile no"
                                                required />
                                        </div>
                                    </div>
                                    <div class="col_half">
                                        <div class="input_field"> <span><i aria-hidden="true"
                                                    class="fa fa-id-card"></i></span>
                                            <input type="text" id="gov_id" name="gov_id"
                                                placeholder="Government ID" required />
                                        </div>
                                    </div>
                                </div>


                                <div class="row clearfix">
                                    <div class="col_half">
                                        <div class="input_field"> <span><i aria-hidden="true"
                                                    class="fa fa-calendar"></i></span>
                                            <input type="date" id="arrival_date" name="arrival_date"
                                                placeholder="Arrival Date" required />
                                        </div>
                                    </div>
                                    <div class="col_half">
                                        <div class="input_field"> <span><i aria-hidden="true"
                                                    class="fa fa-clock"></i></span>
                                            <input type="time" id="arrival_time" name="arrival_time"
                                                placeholder="Arrival Time" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col_half">
                                        <div class="input_field"> <span><i aria-hidden="true"
                                                    class="fa fa-location-arrow"></i></span>
                                            <input type="text" id="working_place" name="working_place"
                                                placeholder="Working Place" required />
                                        </div>
                                    </div>
                                    <div class="col_half">

                                        <div class="input_field"> <span><i aria-hidden="true"
                                                    class="fa fa-location-arrow"></i></span>
                                            <input type="text" id="stay_selected_at" name="stay_selected_at"
                                                placeholder="Staying Place" required />
                                        </div>
                                    </div>
                                </div>

                                <div class="input_field"> <span><i aria-hidden="true"
                                            class="fa fa-location-arrow"></i></span>
                                    <input type="text" id="departuring_place" name="departuring_place"
                                        placeholder="Departuring Place" required />
                                </div>
                                <div class="row clearfix">
                                    <div class="col_half">
                                        <div class="input_field"> <span><i aria-hidden="true"
                                                    class="fa fa-calendar"></i></span>
                                            <input type="date" id="departuring_date" name="departuring_date"
                                                placeholder="Departuring Date" required />
                                        </div>
                                    </div>
                                    <div class="col_half">
                                        <div class="input_field"> <span><i aria-hidden="true"
                                                    class="fa fa-clock"></i></span>
                                            <input type="time" id="departuring_time" name="departuring_time"
                                                placeholder="Departuring Time" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col_half">
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
    </div>

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
                            window.location.reload();
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
</body>

</html>
