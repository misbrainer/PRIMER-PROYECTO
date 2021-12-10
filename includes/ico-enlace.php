<!-- Iconos con enlace a las categorias -->

<div id="app">

    <div class="container row" style="display: flex; justify-content: center">
        <div class="iconos-index col-xs-6 col-sm-2 text-center">
    
            <figure>
                <img src="images/ordenador-portatil.png" alt="portatil" style="width: 40%;">
            </figure>
            
            <?php
    
            $conn = $pdo->open();
            try {
                $stmt = $conn->prepare("SELECT * FROM category where id = 1");
                $stmt->execute();
                foreach ($stmt as $row) {
                    echo "
                        <h3><a href='category.php?category=" . $row['cat_slug'] . "'>" . $row['name'] . "</a></h3>";
                }
            } catch (PDOException $e) {
                echo "Hay algún problema en la conexión.: " . $e->getMessage();
            }
    
            $pdo->close();
    
            ?>
    
        </div>
        <div class="iconos-index col-xs-6 col-sm-2 text-center">
            
            <figure>
                <img src="images/pc-de-la-torre.png" alt="torre" style="width: 40%;">
            </figure>
            
      
            <?php
    
            $conn = $pdo->open();
            try {
                $stmt = $conn->prepare("SELECT * FROM category Where id = 2");
                $stmt->execute();
                foreach ($stmt as $row) {
                    echo "
                            <h3><a href='category.php?category=" . $row['cat_slug'] . "'>" . $row['name'] . "</a></h3>";
                }
            } catch (PDOException $e) {
                echo "Hay algún problema en la conexión.: " . $e->getMessage();
            }
    
            $pdo->close();
    
            ?>
    
    
        </div>
        <div class="iconos-index col-xs-6 col-sm-2 text-center">
    
            <figure>
                <img src="images/tableta.png" alt="tableta" style="width: 40%;">
            </figure>
            <?php
    
            $conn = $pdo->open();
            try {
                $stmt = $conn->prepare("SELECT * FROM category where id = 3");
                $stmt->execute();
                foreach ($stmt as $row) {
                    echo "
                                <h3><a href='category.php?category=" . $row['cat_slug'] . "'>" . $row['name'] . "</a></h3>";
                }
            } catch (PDOException $e) {
                echo "Hay algún problema en la conexión.: " . $e->getMessage();
            }
    
            $pdo->close();
    
            ?>
    
    
        </div>
        <div class="iconos-index col-xs-6 col-sm-2 text-center">
    
            <figure>
                <img src="images/telefono-inteligente.png" alt="telefono" style="width: 40%;">
            </figure>
            <?php
    
            $conn = $pdo->open();
            try {
                $stmt = $conn->prepare("SELECT * FROM category where id = 5");
                $stmt->execute();
                foreach ($stmt as $row) {
                    echo "
                                <h3><a href='category.php?category=" . $row['cat_slug'] . "'>" . $row['name'] . "</a></h3>";
                }
            } catch (PDOException $e) {
                echo "Hay algún problema en la conexión.: " . $e->getMessage();
            }
    
            $pdo->close();
    
            ?>
    
    
        </div>
        <div class="iconos-index col-xs-6 col-sm-2 text-center">
    
            <figure>
                <img src="images/lcd.png" alt="pantalla" style="width: 40%;">
            </figure>
            <?php
    
            $conn = $pdo->open();
            try {
                $stmt = $conn->prepare("SELECT * FROM category where id = 6");
                $stmt->execute();
                foreach ($stmt as $row) {
                    echo "
                                <h3><a href='category.php?category=" . $row['cat_slug'] . "'>" . $row['name'] . "</a></h3>";
                }
            } catch (PDOException $e) {
                echo "Hay algún problema en la conexión.: " . $e->getMessage();
            }
    
            $pdo->close();
    
            ?>
    
    
        </div>
        <div class="iconos-index col-xs-6 col-sm-2 text-center">
    
            <figure>
                <img src="images/tarjeta-grafica.png" alt="tarjeta-grafica" style="width: 40%;">
            </figure>
            <?php
    
            $conn = $pdo->open();
            try {
                $stmt = $conn->prepare("SELECT * FROM category where id = 7");
                $stmt->execute();
                foreach ($stmt as $row) {
                    echo "
                                <h3><a href='category.php?category=" . $row['cat_slug'] . "'>" . $row['name'] . "</a></h3>";
                }
            } catch (PDOException $e) {
                echo "Hay algún problema en la conexión.: " . $e->getMessage();
            }
    
            $pdo->close();
    
            ?>
    
    
        </div>
    </div>

</div>

