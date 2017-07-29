<code><?=__FILE__?></code>
<br>
<h2><?php echo $hello_var; ?></h2>
<h1><a href="test">Manuals and tutorials</a></h1>
<hr>
<?php if(!empty($posts)): ?>
    <?php foreach ($posts as $post): ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><a href="#"><?= $post->title; ?></a></h3>
            </div>
            <div class="panel-body">
                <?= $post->text; ?>
            </div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>
