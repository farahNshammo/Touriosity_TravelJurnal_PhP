<?php
if(isset($_SESSION["error"])&&is_array($_SESSION["error"])&&count($_SESSION["error"])>0){
    ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <ul>
            <?php
            foreach($_SESSION["error"] as $key=>$value){
                ?>
                <li style="list-style:disc"><?php echo $value;?></li>
                <?php
            }
            ?>
        </ul>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php
    $_SESSION["error"]=array();
}else if(isset($_SESSION["success"])&&is_array($_SESSION["success"])&&count($_SESSION["success"])>0){
    ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <ul>
            <?php
            foreach($_SESSION["success"] as $key=>$value){
                ?>
                <li style="list-style:disc"><?php echo $value;?></li>
                <?php
            }
            ?>
        </ul>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php
    $_SESSION["success"]=array();
}
?>