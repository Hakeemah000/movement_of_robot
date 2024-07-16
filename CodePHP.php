<!--*********************************************-->


<!--Buttons commands in html.-->

<form action="" method="POST" enctype="multipart/form-data">

        <input type="submit" class="btn btn--forward" onclick="finalPosition()" name="forward1" value="forward">
        <input type="submit" class="btn btn--left" onclick="finalPosition()" name="left2" value="left">
        <input type="submit" class="btn btn--right" onclick="finalPosition()" name="right3" value="right">
        <input type="submit" class="btn btn--backward" onclick="finalPosition()" name="backward4" value="backward">
        <input type="submit" class="btn btn--stop" onclick="finalPosition()" name="stop5" value="stop">
          </form>

<!--*********************************************-->

<!--Code for format a one of the buttons in html.-->

<style>
.btn--stop { 
                position: absolute;
                bottom: 380px;
                left: 675px;
                color: rgb(94, 4, 4);
                font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; 
                font-size: 100%;}
                </style>

<!--*********************************************-->

<!--Codes for sending data to the database.-->

<?php
if(isset($_POST['forward1'])){
    $sql='insert into `directions robots` (`ID`,`directions`) value ("INT","forward")';
    mysqli_query($conn,$sql);
}
elseif(isset($_POST['backward4'])){
    $sql='insert into `directions robots` (`ID`,`directions`) value ("INT","backward")';
    mysqli_query($conn,$sql);
}
elseif(isset($_POST['left2'])){
    $sql='insert into `directions robots` (`ID`,`directions`) value ("INT","left")';
    mysqli_query($conn,$sql);
}
elseif(isset($_POST['right3'])){
    $sql='insert into `directions robots` (`ID`,`directions`) value ("INT","right")';
    mysqli_query($conn,$sql);
}
elseif(isset($_POST['stop5'])){
    $sql='insert into `directions robots` (`ID`,`directions`) value ("INT","stop")';
    mysqli_query($conn,$sql);

}
        ?>
