<?php
// Include the database connection
include 'database/database.php'; // Adjust the path if necessary

// Fetch all products
$stmt = $pdo->query("SELECT * FROM produit");

// Fetch all rows
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>





<section class="shop_section layout_padding" style="padding: 0px 0;">
    <div class="container">
         
        <div class="row">
            <?php if ($products): ?>
                <?php foreach ($products as $product): ?>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="box">
                            <a href="#">
                                <div class="img-box">
                                    <img src="images/<?php echo htmlspecialchars($product['image']); ?>" style= "max-height: 100%;"alt="<?php echo htmlspecialchars($product['libelle']); ?>">
                                </div>
                                <div class="detail-box">
                                    <h6><?php echo htmlspecialchars($product['libelle']); ?></h6>
                                    <h6>
                                        Price <span>$<?php echo htmlspecialchars($product['prix']); ?></span>
                                    </h6>
                                </div>
                                <?php if ($product['discount'] > 0): ?>
                                    <div class="new">
                                        <span>Solde</span>
                                    </div>
                                <?php endif; ?>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No products available.</p>
            <?php endif; ?>
        </div>
        <div class="btn-box">
        <a href="blog.php">
          View All Products
        </a>
      </div>
    </div>
</section>