<?php
#Header
require(APPROOT.'/views/inc/header.php');

if (isset($_SESSION['login_name']) || isset($_SESSION['type_user'])) {
    echo '<h1>'.$data['title'].'</h1>';
    echo '<h2>'.$_SESSION['login_name'].'</h2>';

   // header('Location:'.URLROOT.'/pages/portal');
} else {
    ?>

<div class="position-relative" style="margin-right: 30%; margin-left:20%; margin-top:2%; padding: 3%;">
<form action="<?php echo URLROOT; ?>Session/startSession" method="post">
        <h1><span>Tecno</span> Contract</h1>

        <input name="usuario" placeholder="Username" type="text" />
        <input name="password" placeholder="Password" type="password" />
        <input class="btn" type="submit" value="Log in" name='sendLogin' id='sendLogin'>

        <p style="padding:5px;"><i class="fas fa-laptop-code"></i> <span style="font-size: 10px;">Versión: 2.0 - JMGA</span> </p>
    </form>
    </div>

<?php  
}

#Footer:
require(APPROOT.'/views/inc/footer.php');
?>