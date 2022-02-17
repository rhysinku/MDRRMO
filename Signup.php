<?php include_once'assets/php/defaultNav.php'; ?>
    <div style="padding: 118px;">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr style="border-style: none;border-top-color: rgb(33,;border-right-color: 37,;border-bottom-color: 41);border-left-color: 37,; text-align: center;font-size: 38px;font-family: Alatsi, sans-serif;">
                        <th style="border-style: none;">Sign Up<h1 class="text-secondary" style="font-size: 21.520000000000003px;">Create Account to Join the Community</h1>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <form method="POST" action="assets/php/userReg.php">
                                <div class="d-flex justify-content-center">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead style="border-style: none;">
                                                <tr style="border-style: none;">
                                                    <th style="border-style: none;">Email:<br><input name="email" class="form-control" type="email" require></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <p style="font-weight: bold;">First Name:<input name="fname" class="form-control" type="text" require></p>
                                                    </td>
                                                    <td>
                                                        <p style="font-weight: bold;">Last Name:<input name="lname" class="form-control" type="text" require></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p style="font-weight: bold;">Username:<input name="uname" class="form-control" type="text" require></p>
                                                    </td>
                                                </tr>
                                                <tr style="border-style: none;">
                                                    <td>
                                                        <p style="font-weight: bold;">Password:<input name="pass" class="form-control" type="password" require></p>
                                                    </td>
                                                    <td>
                                                        <p style="font-weight: bold;">Confirm Password:<input name="repass" class="form-control" type="password" require></p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="d-flex flex-column justify-content-center align-items-center"><button class="btn btn-primary" type="submit" style="width: 90.2656px;height: 48px;font-size: 19px;">Sign up</button>
                                    <p style="margin: 15px;">Registered already?&nbsp;&nbsp;<a href="Login.php">Log in</a></p>
                                </div>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

<?php include_once'assets/php/defaultFoot.php';?>