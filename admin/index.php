<?php


session_start();

if(isset($_SESSION['username'])){

}else{
    header("location:login.php");
}

?>


<?php include "../assest/header.php";?>


<!--<div class="container">-->

<?php include "pages/navbar.php";?>
    <div class="row">


<!--       the left-->
        <div class="col-sm-3">


            <h3>Server & FILE Name </h3>
            <?php require "server-info.php";?>
            <?php if($server): ?>

                <ul class="list-group">
                    <?php foreach ($server as $key => $value):?>
                        <li class="list-group-item">
                            <strong><?php echo "$key :"; ?></strong>
                            <?php echo "$value"; ?>
                        </li>
                    <?php endforeach;?>


                </ul>

            <?php endif ?>

            <br>
            <h3>Your info </h3>
            <?php if($client): ?>

                <ul class="list-group">
                    <?php foreach ($client as $key => $value):?>
                        <li class="list-group-item">
                            <strong><?php echo "$key :";?></strong>
                            <?php echo "$value"; ?>
                        </li>
                    <?php endforeach;?>


                </ul>

            <?php endif ?>

        </div>

    <!--        the right!-->
        <div class="col-sm-9">

    </div>


</div>




<?php include "../assest/footer.php";?>
