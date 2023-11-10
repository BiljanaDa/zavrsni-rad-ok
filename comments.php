<div class="comments">
    <hr>
    <h3>Comments</h3>
    <ul>
        <?php foreach ($comments as $comment) { ?>
            <li>
                <h4>
                    <?='<strong>' . $comment['author'] . ':</strong> '?>
                </h4>
                <?= $comment['text'] ?>
            </li>
            <hr>
        <?php } ?>
    </ul>
</div>