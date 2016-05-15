<div class="row">
    <?php
    //var_dump($data);
        foreach ($data as $id => $sensorData){
    ?>
    <div class="col-md-10 col-sm-12">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Sensor Data - (device <?=$id?>)</h3>
            </div>
            <div class="modal-body">
                <?php
                    foreach ($sensorData as $sensor => $val){
                ?>
                <div class="alert alert-info" role="alert">
                    <h1><?=$sensor?>: <?=$val?></h1>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
    <?php }?>
</div>