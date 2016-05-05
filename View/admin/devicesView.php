<h1>Устройства</h1>

<div class="panel-body">
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>№</th>
                <th>ID устройства</th>
                <th>Имя</th>
                <th>Роль</th>
                <th>Действие</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $j = 1;
            foreach ($info as $devicesInfo){
                 //print_r ($devicesInfo);
                    ?>
                    <tr>
                        <td><?=$j?></td>
                        <td><?=$devicesInfo['deviceId']?></td>
                        <td><?=$devicesInfo['name']?></td>
                        <td><?=$devicesInfo['role']?></td>
                        <td class="action">
                            <button type="button" class="btn btn-default btn-xs editDill" data-idDill="<?=$devicesInfo['deviceId']?>">
                                <span>
                                    <img src="<?=MYSITE."sourses/buttons/edit.png"?>" alt="#"/>
                                </span>
                            </button>
                            <button type="button" class="btn btn-default btn-xs deleteDill" data-toggle="modal" data-target="#deleteDillModal" data-idDill="<?=$devicesInfo['deviceId']?>">
                                <span>
                                    <img src="<?=MYSITE."sourses/buttons/drop.png"?>" alt="#"/>
                                </span>
                            </button>
                        </td>
                    </tr>
                    <?php $j++;
            }?>

            </tbody>
        </table>
    </div>
</div>

<div class="modal fade" id="deleteDillModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Закрити</span></button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <h4>Вы действительно хотите удалить устройство?</h4>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-xs" data-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-primary btn-xs" id="deleteDill">Удалить</button>
            </div>
        </div>
    </div>
</div>