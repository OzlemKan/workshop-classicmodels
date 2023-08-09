<h2>index</h2>




    <?php if (!empty($products)): ?>



    <ul>
        <?php foreach ($products as $product):  ?>

            <li>
                <?= $product['productName'] ?>
            </li>

        <?php  endforeach; ?>

    </ul>

    <?php endif ?>

   