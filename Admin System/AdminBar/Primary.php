
    <!-- This is my custom Admin Bar Component -->
<?php

if(isset($_POST['LogOut'])){
    $CookieFix = $GLOBALS['Cookie'];
                            //Setting Cookies
    setcookie('Session',       'FALSEY',     time()-10, '/', $CookieFix, false);
    setcookie('Loggid-in',     'Logged-out', time()-10, '/', $CookieFix, false);    
    setcookie('UserName',      '',           time()-10, '/', $CookieFix, false);
    setcookie('Admin',         '',           time()-10, '/', $CookieFix, false);
    setcookie('ServerAdmin',   '',           time()-10, '/', $CookieFix, false);
    setcookie('BanAdmins',     '',           time()-10, '/', $CookieFix, false);
    setcookie('RegAdmins',     '',           time()-10, '/', $CookieFix, false);
    setcookie('DeleteAccounts','',           time()-10, '/', $CookieFix, false);
    setcookie('Code',          '',           time()-10, '/', $CookieFix, false);
        echo "Logged out";
        echo "<script>alert('You Have Logged-Out!');</script>";
        header('location: ../Index/index.php');
}





if(isset($_COOKIE['Session'])){
    if(isset($_COOKIE['UserName']) && $_COOKIE['Session'] === 'TRUELY'){
?>
        <form method='POST' id="AdminBarContainer"> 
            <ul> Welcome </br><?php echo $_COOKIE['UserName']?>!</ul>
            <input type='submit' name='LogOut' value="Logout"/>
        </form>
<?php //";
    }
    else{ ?>
        <a id="admin_page_btn" href="../Admin System/Index/index.php">Admin Login</a>
        <?php
    }
}
?>


<style>
    html, body{
        padding: 0px;
        margin: 0px;
    }
    #admin_page_btn {
    position: absolute;
    top: 10px;
    right: 10px;
    color: red;
    font-size: 120%;
}

#AdminBarContainer{
    z-index: 100;
    width: auto;
    display: inline-block;
    min-width: 250px;
    max-width: 400px;
    height: auto;
    position: fixed;
    right: 170px;
    top: 20px;
    background-color: darkgrey;
    /* padding: 10px; */
    border-radius: 5px;
    text-align: center;
    padding-right: 70px;
}

#AdminBarContainer ul{
    width: auto;
    height: auto;
    min-width: 200px;
    max-width: 300px;
    font-size: 140%;
    display: inline-grid;
    padding: 0;
}

input[name='LogOut']{
    font-size: 110%;
    width: 80px;
    height: 60px;
    position: absolute;
    right: 5px;
    top: 5px;
    border-radius: 5px;
    color: white;
    background-color: red;
}
input[name='LogOut']:hover{
    color: black;
    background-color: green;
}

@media only screen and (max-width: 950px) {
    #AdminBarContainer{
        width: 340px;
        height: 70px;
        position: fixed;
        right: 20px;
        top: 20px;
    }
    
    #AdminBarContainer ul{
        font-size: 120%;
    }
        
}
</style>




