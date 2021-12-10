<!--Panel indicativo mejores productos-->
<div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading">Panel de Productos</div>
    <div class="panel-body">
        <p>De acuerdo a la experiencia de compra y de uso, nuestros clientes categorizan como mejores productos los siguientes:</p>
    </div>

    <!-- Table -->
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Categoria</th>
                <th scope="col">Nombre/Detalle</th>
                <th scope="col">Marca</th>
                <th scope="col">Valor</th>
                <th scope="col">Ver</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Laptops</td>
                <td>Inspiron 15 5000 15</td>
                <td>DELL</td>
                <td>$ 599.00</td>
                <td>
                    <?php
                    $conn = $pdo->open();

                    try {
                        $inc = 3;
                        $stmt = $conn->prepare("SELECT * FROM products WHERE name = 'DELL Inspiron 15 5000 15'");
                        $stmt->execute();
                        foreach ($stmt as $row) {
                            $inc = ($inc == 3) ? 1 : $inc + 1;
                            if ($inc == 1) echo "<b>";
                            echo "
														<a href='product.php?product=" . $row['slug'] . "'>Ir al Producto</a>";

                            if ($inc == 3) echo "</b>";
                        }
                        if ($inc == 1) echo "<i></i>";
                        if ($inc == 2) echo "<i></i>";
                    } catch (PDOException $e) {
                        echo "Hay algún problema en la conexión: " . $e->getMessage();
                    }

                    $pdo->close();

                    ?>

                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Desktop PC</td>
                <td> Pavilion Power 580-015na Gaming PC</td>
                <td>HP</td>
                <td>$ 799.99</td>
                <td> <?php
                        $conn = $pdo->open();

                        try {
                            $inc = 3;
                            $stmt = $conn->prepare("SELECT * FROM products WHERE name = 'HP Pavilion Power 580-015na Gaming PC'");
                            $stmt->execute();
                            foreach ($stmt as $row) {
                                $inc = ($inc == 3) ? 1 : $inc + 1;
                                if ($inc == 1) echo "<b>";
                                echo "
														<a href='product.php?product=" . $row['slug'] . "'>Ir al Producto</a>";

                                if ($inc == 3) echo "</b>";
                            }
                            if ($inc == 1) echo "<i></i>";
                            if ($inc == 2) echo "<i></i>";
                        } catch (PDOException $e) {
                            echo "Hay algún problema en la conexión: " . $e->getMessage();
                        }

                        $pdo->close();

                        ?></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Tablets</td>
                <td>10.5" iPad Pro - 64 GB, Space Grey (2017)</td>
                <td>APPLE</td>
                <td>$ 619.00</td>
                <td> <?php
                        $conn = $pdo->open();

                        try {
                            $inc = 3;
                            $stmt = $conn->prepare("SELECT * FROM products WHERE id = 7");
                            $stmt->execute();
                            foreach ($stmt as $row) {
                                $inc = ($inc == 3) ? 1 : $inc + 1;
                                if ($inc == 1) echo "<b>";
                                echo "
														<a href='product.php?product=" . $row['slug'] . "'>Ir al Producto</a>";

                                if ($inc == 3) echo "</b>";
                            }
                            if ($inc == 1) echo "";
                            if ($inc == 2) echo "";
                        } catch (PDOException $e) {
                            echo "Hay algún problema en la conexión: " . $e->getMessage();
                        }

                        $pdo->close();

                        ?></td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>Celulares</td>
                <td>S20</td>
                <td>Samsung</td>
                <td>$ 10.00</td>
                <td> <?php
                        $conn = $pdo->open();

                        try {
                            $inc = 3;
                            $stmt = $conn->prepare("SELECT * FROM products WHERE name = 'Samsung S20'");
                            $stmt->execute();
                            foreach ($stmt as $row) {
                                $inc = ($inc == 3) ? 1 : $inc + 1;
                                if ($inc == 1) echo "<b>";
                                echo "
														<a href='product.php?product=" . $row['slug'] . "'>Ir al Producto</a>";

                                if ($inc == 3) echo "</b>";
                            }
                            if ($inc == 1) echo "<i></i>";
                            if ($inc == 2) echo "<i></i>";
                        } catch (PDOException $e) {
                            echo "Hay algún problema en la conexión: " . $e->getMessage();
                        }

                        $pdo->close();

                        ?></td>
            </tr>
            <tr>
                <th scope="row">5</th>
                <td>Pantallas</td>
                <td>Pantalla 22" Pantalla Hp 4K aluminio </td>
                <td>Hp</td>
                <td>$ 1,500.00</td>
                <td> <?php
                        $conn = $pdo->open();

                        try {
                            $inc = 3;
                            $stmt = $conn->prepare("SELECT * FROM products WHERE name = 'Pantalla Hp 4K aluminio'");
                            $stmt->execute();
                            foreach ($stmt as $row) {
                                $inc = ($inc == 3) ? 1 : $inc + 1;
                                if ($inc == 1) echo "<b>";
                                echo "
														<a href='product.php?product=" . $row['slug'] . "'>Ir al Producto</a>";

                                if ($inc == 3) echo "</b>";
                            }
                            if ($inc == 1) echo "<i></i>";
                            if ($inc == 2) echo "<i></i>";
                        } catch (PDOException $e) {
                            echo "Hay algún problema en la conexión: " . $e->getMessage();
                        }

                        $pdo->close();

                        ?></td>
            </tr>
            <tr>
                <th scope="row">6</th>
                <td>Tarjetas graficas</td>
                <td>Nvidia GeForce GTX 1080</td>
                <td>Nvidia</td>
                <td>$ 900,090.00</td>
                <td> <?php
                        $conn = $pdo->open();

                        try {
                            $inc = 3;
                            $stmt = $conn->prepare("SELECT * FROM products WHERE name = 'Nvidia GeForce GTX 1080'");
                            $stmt->execute();
                            foreach ($stmt as $row) {
                                $inc = ($inc == 3) ? 1 : $inc + 1;
                                if ($inc == 1) echo "<b>";
                                echo "
														<a href='product.php?product=" . $row['slug'] . "'>Ir al Producto</a>";

                                if ($inc == 3) echo "</b>";
                            }
                            if ($inc == 1) echo "<i></i>";
                            if ($inc == 2) echo "<i></i>";
                        } catch (PDOException $e) {
                            echo "Hay algún problema en la conexión: " . $e->getMessage();
                        }

                        $pdo->close();

                        ?></td>
            </tr>
           

        </tbody>
    </table>
</div>