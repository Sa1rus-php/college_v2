<div class="content-wrapper">
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header"><?php echo $title; ?></div>
<div class="card-body">
    <div class="row">
        <div class="col-sm-4">
            <form action="/admin/editusers/<?php echo $data['id']; ?>" method="post" >
                <div class="form-group">
                    <label>Login</label>
                    <input class="form-control" type="text" value="<?php echo htmlspecialchars($data['login'], ENT_QUOTES); ?>" name="login">
                </div>
                <div class="form-group">
                    <br>
                    <label>Status: <?php echo $data['status']?></label>
                    <br>
                    <br>
                    <label>Choose status for user</label>
                    <br>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01" >Class</label>
                        <select class="form-select" id="inputGroupSelect01" name="status">
                            <option selected>Choose...</option>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-primary btn-block">Сохранить</button>
            </form>
        </div>
        
</div>
</div>
</div>
</div>