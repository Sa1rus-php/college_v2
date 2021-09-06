
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header"> <?php echo $title; ?></div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <form action="/admin/register" method="post">
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Логин:</label>
                                    <input type="text" class="form-control" name="login">
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Пароль</label>
                                    <input type="password" class="form-control" name="password">
                                </div>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Добавить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>