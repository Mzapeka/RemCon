<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-md-offset-3 col-sm-offset-2" id="regForm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Новая команда</h4>
            </div>
            <div class="modal-body">
                <form role="form" method="POST" id="regForm" action="<?=SITE?>user/infoUser">
                    <div class="form-group">
                        <div class="form-group has-feedback">
                            <label for="idPult">ID пульта</label>
                            <input class="form-control" placeholder="ID пульта" id="idPult" type="text" name="idRemout" required="">
                        </div>
                        <div class="form-group has-feedback">
                            <label for="idMod">ID модуля</label>
                            <input type="text" class="form-control" id="idMod" placeholder="ID модуля" name="idModule">
                        </div>
                        <div class="form-group has-feedback">
                            <label for="description">Описание команды</label>
                            <input type="text" class="form-control" id="description" placeholder="Описание" name="name">
                        </div>
                        <div class="form-group has-feedback">
                            <label for="mode">Режим</label>
                            <input type="text" class="form-control" id="mode" placeholder="Режим" name="mode" required="">
                        </div>
                        <div class="form-group has-feedback">
                            <label for="temp">Температура</label>
                            <input type="text" class="form-control" id="temp" placeholder="Температура" name="tempr">
                        </div>
                    </div>
                    <input type="submit" class="btn btn-primary btn-lg btn-block" id="sendForm" value="Сохранить">
                </form>

            </div>


        </div>
    </div>
</div>