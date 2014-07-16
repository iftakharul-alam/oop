<html>
    <head>
        
    </head>
    <body>
        <form method="post" action="index.php">
            <fieldset>
                <legend>Customer E-Account Info Entry</legend>
                
                Customer Name:  <input type="text" name="name"/><br/>
                Email Address:  <input type="text" name="mail"/><br/>
                Account Number: <input type="text" name="number"/><br/>
                Opening Date:   <input type="text" name="date"/><br/>
                <input type="submit" name="submit" value="Create"/><br/>
            </fieldset>
        </form>
        
        <form method="post" action="index.php">
            <fieldset>
                <legend>Transection</legend>
                
                Amount: <input type="text" name="amount"/>
                <input type="submit" name="deposit" value="deposit"/>
                <input type="submit" name="withdraw" value="Withdraw"/>
            </fieldset>
        </form>
        <form method="post" action="index.php">
            <fieldset>
                <legend>Show Details</legend>
                <input type="submit" name="details" value="Details"/>
            </fieldset>
        </form>
        
        
        <?php
            require 'customer.php';
            require 'account.php';
            require 'calculator.php';
            
            session_start();
            
            if(isset($_POST['submit']))
            {
                $customer = new Customer($_POST['name'],$_POST['mail']);
                $_SESSION['customer'] = $customer;
                $account = new Account($_POST['number'],$_POST['date']);
                $_SESSION['account'] = $account;
                $customer ->set_account($account);
                echo "Account created";
            }
            
            if(isset($_POST['deposit']))
            {
                $customer = $_SESSION['customer'];
                echo $customer->get_account()->deposit($_POST['amount']);
                $_SESSION['customer'] = $customer;
            }
            if(isset($_POST['withdraw']))
            {   
                $customer = $_SESSION['customer'];
                echo $customer->get_account()->withdraw($_POST['amount']);
                $_SESSION['customer'] = $customer;
            }
            if(isset($_POST['details']))
            {   
                $customer = $_SESSION['customer'];
                echo 'Account No:'.$customer->get_account()->get_number()."<br/>";
                echo 'Account name:'.$customer->get_name()."<br/>";
                echo 'Account Date:'.$customer->get_account()->get_date()."<br/>";
                echo 'Account Balance:'.$customer->get_account()->get_balance()."<br/>";
            }
        ?>
    </body>
</html>