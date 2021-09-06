<div class="content-wrapper">
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header"> <?php echo $title; ?></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                        <form action="/admin/add" method="post">
                            <div class="form-group">
                                <label>Название</label>
                                <input class="form-control" type="text" name="name">
                            </div>
                            <div class="form-group">
                                <label>Описание</label>
                                <input class="form-control" type="text" name="description">
                            </div>
                            <div class="form-group">
                                <label>Текст</label>
                                <textarea class="form-control" rows="3" name="text"></textarea>
                            </div>
                            <br>
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupSelect01">Який відділ</label>
                                <select class="form-select" id="inputGroupSelect01" name="status">
                                    <option selected>Виберіть</option>
                                    <option value="entrant">Абітурієтам</option>
                                    <option value="advertisement">Оголошення</option>
                                    <option value="study">Дистанційне навчання</option>
                                    <option value="eduactiv">Освітня діяльність</option>
                                    <option value="achiev">Досягнення</option>
                                    <option value="reference">Довідкова</option>
                                </select>
                            </div>
                            <br>
                            <div class="form-group">
                                <input class="form-control" type="file" name="filename">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary btn-block">Добавить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>