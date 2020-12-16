<?php $comments = getPostComments($post['id']); ?>

<article class="card mb-4">
    <div class="card-body">
        <?php echo $post['content']; ?>
    </div>
    <div class="card-footer">
        <?php echo $comments ?count($comments) : 0; ?> commentaires
    </div>
</article>