<?php

    require_once "./header.php";
    require_once "../connect.php"

?>
<section style="background-color: #eee;">
  <div class="container py-5">
    <div class="row">
    <?php
                
                $result = $conn->query("SELECT * FROM Goods");

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                ?>
                    <div class="col-md-4">
                        <div class="card" style="height:650px;">
                        <img style="height: 400px; wight: 400px;" src="<?php echo $row["image_url"]; ?>" class="card-img-top" alt="<?php echo $row["name"]; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row["name"]; ?></h5>
                            <p class="card-text"><?php echo $row["description"]; ?></p>
                            <p class="card-text">Цена: <?php echo $row["price"]; ?> руб.</p>
                            <a href="#" class="btn btn-primary">Оставить заявку</a>
                        </div>
                        </div>
                    </div>
                <?php
                    }
                } else {
                    echo "Нет доступных товаров.";
                }

        ?>

</section>
  <?php
  require_once "./footer.php";
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>