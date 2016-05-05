<div class="jumbotron" xmlns="http://www.w3.org/1999/html">
        <h1>AirCon</h1>


    <form class="form-horizontal" role="form" action="<?=MYSITE?>main/auth" method="post">
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">E-mail</label>
            <div class="col-sm-10">
                <input type="email" name="login" class="form-control" id="inputEmail3" placeholder="E-mail">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Пароль</label>
            <div class="col-sm-10">
                <input type="password" name="pass" class="form-control" id="inputPassword3" placeholder="Пароль">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="rememberMe"> Запомнить меня
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-lg btn-success form-control">Войти</button>
            </div>
        </div>
    </form>

    <div class="row marketing">
    </div>

