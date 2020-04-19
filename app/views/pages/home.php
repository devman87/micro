<h1 class="welcome"><?php echo $hello; ?></h1>
<?php if (!empty($rows)): ?>
    <?php foreach ($rows as $row): ?>
        <p>
            <a href="/page/<?php echo $row['id'];?>"><?php echo $row['id'] . ' - ' . $row['name'];?></a>
        </p>
    <?php endforeach; ?>
<?php endif; ?>
 
