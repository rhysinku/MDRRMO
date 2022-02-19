<?php 

session_start();
if(isset($_SESSION['userID']))
{
    if($_SESSION['userID'] ==8)
{
    include_once 'assets/php/adminNav.php';
}
else{
    include_once 'assets/php/userNav.php';
}
}
else{
    include_once 'assets/php/defaultNav.php';
}

if(isset($_GET['error']))
{
    if($_GET['error'] = 'Something Went')
    {
        $alert = "Invalid Account";
    }
}
 ?>


    <div style="padding: 49px;">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr style="border-style: none;border-top-color: rgb(33,;border-right-color: 37,;border-bottom-color: 41);border-left-color: 37,;text-align: center;font-size: 38px;font-family: Alatsi, sans-serif;">
                        <th style="border-style: none;">Log In<h1 class="text-secondary" style="font-size: 21.520000000000003px;">Welcome to the Community</h1>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <form method="POST" action="assets/php/userLogin.php">
                                <div class="d-flex justify-content-center">
                                    <div class="table-responsive d-flex justify-content-center align-content-center">
                                        <table class="table">
                                            <thead style="border-style: none;">
                                                <tr style="border-style: none;">
                                                    <th style="border-style: none;">Username:<br><input class="form-control" name="uname" type="text"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <p style="font-weight: bold;">Password:<input class="form-control" name="pass" type="password"></p>
                                                    </td>
                                                </tr>
                                                <tr class="d-flex">
                                                    <td class="d-flex flex-column flex-fill justify-content-center align-items-center"><button class="btn btn-primary" type="submit" style="width: 90.2656px;height: 48px;font-size: 18px;">Login</button>
                                                        <p style="margin: 10px;">Don't have an account?<a href="Signup.php">Signup</a></p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
<?php include_once 'assets/php/defaultFoot.php'; ?>