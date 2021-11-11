<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registration Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function validationForm() {
            var name = document.registration.name;
            var address = document.registration.address;
            var email = document.registration.email;
            var pass = document.registration.pass;
            var phone = document.registration.phone;
            var course = document.registration.course;
            var zip = document.registration.zip;

            if (name_valid(name)) {
                if (address_valid(address)) {
                    if (email_valid(email)) {
                        if (pass_valid(pass)) {
                            if (phone_valid(phone)) {
                                if (course_valid(course)) {
                                    if (zip_valid(zip)) {
                                        return true;
                                    }
                                }
                            }
                        }
                    }
                }
            }
            return false;
        }

        function name_valid(name) {
            var letter = /^[A-Za-z\s]+$/;
            if (name.value.match(letter)) {
                return true;
            }
            else {
                alert("Name must use alphabet characters only");
                name.focus();
                return false;
            }
        }

        function address_valid(address) {
            if (address.value == "") {
                alert("Address should not be empty");
                return false;
            }
            else {
                address.focus();
                return true;
            }
        }

        function email_valid(email) {
            var format = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            if (email.value.match(format)) {
                return true;
            }
            else {
                alert("You have entered an invalid email address!");
                email.focus();
                return false;
            }
        }

        function pass_valid(pass) {
            var pass_len = pass.value.length;
            if (pass_len == 0) {
                alert("Password should not be empty");
                return false;
            }

            else if (pass_len <= 7 || pass_len >= 17) {
                alert("Password length must be between 8 to 16");
                return false;
            }

            else {
                pass.focus();
                return true;
            }
        }

        function phone_valid(phone) {
            var numbers = /^[0-9]+$/;
            var num_len = phone.value.length;
            if (num_len == 0) {
                alert("Phone number should not be empty");
                return false;
            }

            else if (num_len <= 6) {
                alert("phone number at least 7 digits");
                return false;
            }

            else if (phone.value.match(numbers)) {
                phone.focus();
                return true;
            }
        }

        function course_valid(course) {
            if (course.selectedIndex < 1) {
                alert("Select your course from the list");
                course.focus();
                return false;
            }
            else {
                return true;
            }
        }

        function zip_valid(zip) {
            var zips = /^[0-9]+$/;
            var zip_len = zip.value.length;
            if (zip_len == 0) {
                alert("Zip code should not be empty and must use numeric only");
                return false;
            }

            else if (zip_len != 6) {
                alert("Zip code length must be 6 digits and must use numeric only");
                return false;
            }

            else if (zip.value.match(zips)) {
                zip.focus();
                return true;
            }
        }
    </script>
</head>
<body style="height: max-content; background-size: cover; background-image:url(https://wallup.net/wp-content/uploads/2019/10/884245-sakura-tokyo-spring-flower-peoples-tree-nature-pink.jpg); ">
    <div class="text-black-100"> <!--warnai text-->
        <div class="card-body"></div><!--agar background putih ditengah-->
            <div class="container mt-3">
                <div class="p-5  bg-white rounded"><!--beri background putih-->
                    <div class="col-12"></div><!--span 12(grid system)-->
                        <div>
                            <h1 class="text-center font-weight-bold">Registration Form</h1>
                        </div>
                        <form name="registration" onSubmit="return validationForm();" action="https://itemku.com/" method="post">
                            <div class="form-group">
                                <label for="name"><b>Name:</b></label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>

                            <div class="form-group">
                                <label for="address"><b>Address:</b></label>
                                <input type="text" class="form-control" id="address" name="address">
                            </div>

                            <div class="form-group">
                                <label for="email"><b>E-mail Address:</b></label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>

                            <div class="form-group">
                                <label for="pass"><b>Password:</b></label>
                                <input type="password" class="form-control" id="pass" name="pass">
                            </div>

                            <div class="form-group">
                                <label for="phone"><b>Telephone:</b></label>
                                <input type="tel" class="form-control" id="phone" name="phone">
                            </div>

                            <div class="form-group">
                                <label for="course"><b>Select Your Course:</b></label>
                                <select id="course" name="course" class="form-control">
                                    <option> </option>
                                    <option>BTECH</option>
                                    <option>BBA</option>
                                    <option>BCA</option>
                                    <option>B COM</option>
                                    <option>GEEKFORGEEKS</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="zip"><b>ZIP Code:</b></label>
                                <input type="text" class="form-control" id="zip" name="zip">
                            </div>

                            <div class="button form-group">
                                <button type="submit" class="btn btn-info btn-md">Send</button>
                                <button type="reset" class="btn btn-info bg-danger">Reset</button>
                            </div>
                        </form>
                </div>
            </div>
    </div>
</body>
</html>
