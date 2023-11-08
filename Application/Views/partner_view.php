<h1>Наши Партнеры:</h1> 


<div class="partner-list">
    <?php foreach ($data as $el) : ?>

        <div class="partner-item">

            <h4><?= $el['Name'] ?></h4>
            <p>Из компании: <?= $el['Compay'] ?></p>
            <p>Коментарий: <?= $el['Description'] ?></p>

        </div>

    <?php endforeach; ?>
</div>
