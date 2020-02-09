<div class="sharesMainDiv">

    <?php if(isset($_SESSION['is_logged_in'])) : ?>
    <a class="btn btn-success btn-share" href="<?php echo ROOT_PATH; ?>shares/add">Share Something</a>
    <?php endif; ?>
    
        <?php foreach($viewmodel as $item): ?>
            <div class="card">
                <div class="card-header custom-card-class">
                    <?php echo $item['title']; ?>
                    <small><?php echo $item['create_date']; ?></small>
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <h6><?php echo $item['body']; ?></h6>
                        <div class="custom-card-class">
                            <footer class="blockquote-footer"> <?php echo $item['username']; ?></footer>
                            <a class="btn btn-secondary" href="<?php echo $item['link']; ?>" target="_blank">Find out more</a>
                        </div>
                    </blockquote>
                </div>
            </div>
        <?php endforeach; ?>
</div>