<div class="comments">
    <hr>
    <button class="btn btn-default" id="comments-btn">Hide comments</button>
    <h3>Comments</h3>
    <ul id="comments-list">
        <?php foreach ($comments as $comment) { ?>
            <li class="">
                <h4>
                    <?= $comment['author'] ?>
                </h4>
                <?= $comment['text'] ?>
            </li>
        <?php } ?>
    </ul>
</div>