<?php

    require_once "./header.php";
    require_once "../connect.php"

?>
  <main>

    <section class="py-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <h1>Добро пожаловать в наш интернет-магазин!</h1>
            <p class="lead">Мы предлагаем широкий ассортимент услуг по доступным ценам</p>
            <a href="insex.php" class="btn btn-primary">Перейти в каталог</a>
          </div>
          <div class="col-md-6">
            <img src="../images/main/XL.webp" style="height: 400px; wight: 400px;" alt="Товар" class="img-fluid rounded">
          </div>
        </div>
      </div>
    </section>

    <?php
        $result = $conn->query("SELECT TOP 3 FROM Goods");

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            
            
        } 
   ?> 
    <section class="py-5 bg-light">
        <div class="container">
            <h2>Популярный товар</h2>
            <div class="row">
            <?php
                
                $result = $conn->query("SELECT id, name, description, price, image_url FROM Goods ORDER BY id DESC LIMIT 3");

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                ?>
                    <div class="col-md-4">
                        <div class="card" style="height:650px;">
                        <img style="height: 400px; wight: 400px;" src="<?php echo $row["image_url"]; ?>" class="card-img-top" alt="<?php echo $row["name"]; ?> ">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row["name"]; ?></h5>
                            <p class="card-text"><?php echo $row["description"]; ?></p>
                            <p class="card-text">Цена: <?php echo $row["price"]; ?> руб.</p>
                            <a href="#" class="btn btn-primary">Купить</a>
                        </div>
                        </div>
                    </div>
                <?php
                    }
                } else {
                    echo "Нет доступных товаров.";
                }

            ?>
            </div>
        </div>
    </section>

  </main>
  <?php
  require_once "./footer.php";
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>