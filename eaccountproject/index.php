<html>
    <head>
        <style>
            table{border: 1px solid black;}
            body,table,input,button{font-size: 30px;}
            table{margin: 10px auto;}

        </style>
    </head>
    <bodY>
        <table>
            <form method="post" action="index.php">
                <tr><th colspan="2">Customer E-Account Info</th></tr>
                <tr><td>Customer Name:</td><td><input type="text" name="name"></td></tr>
                <tr><td>Email Address:</td><td><input type="text" name="email"></td></tr>
                <tr><td>Account No:</td><td><input type="text" name="account"></td></tr>
                <tr><td>Opening Date:</td><td><input type="text" name="date"></td></tr>
                <tr><td></td><td><input type="submit" value="Create Account" name="create"></td></tr>
            </form>
        </table>
        <br/>
        <table>
            <form>
                <tr><th colspan="3">Transection</th></tr>
                <tr>
                    <td>Amount</td>
                    <form method="post" action="index.php">
                    <td colspan="2"><input type="text" name="amount"> </td>
                </tr>
                <tr>
                    <td><input type="submit" value="Deposit" name="deposit"></td>
                    <td><input type="submit" value="Withdraw" name="withdraw"></td>
                    </form>
                    <td><button onclick="window.location.href='details.php'">Show Details</button></td>
                </tr>
            </form>
        </table>

    </bodY>
</html>

<?php
    require_once 'account.php';
    require_once 'customer.php';

    session_start();

    if(isset($_POST['create']))
    {
        $customer = new Customer();
        $account  = new Account('007','15th-july,2014');

        $_SESSION['account'] = $account;
        $_SESSION['customer'] = $customer;

        $customer -> setName($_POST['name']);
        $customer -> setEmail($_POST['email']);
        $customer -> setAccount($account);

        echo $customer -> getName()."<br/>";
        echo $customer -> getEmail()."<br/>";
        echo $customer -> getAccount() -> getAccountNumber()."<br/>";
        echo $customer -> getAccount() -> getOpenDate()."<br/>";
    }

    if(isset($_POST['deposit']))
    {
        $customer -> getAccount() -> deposit($_POST['amount']);
    }
    if(isset($_POST['withdraw']))
    {
        $customer -> getAccount() -> withdraw($_POST['amount']);
    }


   /* $account = new Account('007','2nd july');

    echo $account -> deposit(300);
    $account -> withdraw(200);

    $customer = new Customer();

    $customer -> setName('bappa');
    $customer -> setEmail('w@gmail.com');
    $customer -> setAccount($account);

    $customer -> getAccount() -> getBalance()."<br/>";

    $customer -> getAccount() -> deposit(400);

    $customer -> getAccount() -> getBalance();*/