
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <br>
                <h1><?php echo htmlspecialchars($data['name'], ENT_QUOTES); ?></h1>
                <br>
                <span><?php echo htmlspecialchars($data['description'], ENT_QUOTES); ?></span>
            </div>
        </div>
    </div>
    <br>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <p><?php echo htmlspecialchars($data['text'], ENT_QUOTES); ?></p>
            <?php if ($data['files'] != null):?>
                <a href="/public/files/<?php echo $data['files']?>" type="button" class="btn btn-outline-info">Файл</a>
            <?php endif;?>
        </div>
    </div>
</div>
