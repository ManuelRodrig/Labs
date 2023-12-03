<?php
class Factorial
{
    private $conn;

    public function __construct($servername, $username, $password, $dbname)
    {
        $this->conn = new mysqli($servername, $username, $password, $dbname);

        if ($this->conn->connect_error) {
            die("Conexión fallida: " . $this->conn->connect_error);
        }
    }

    public function __destruct()
    {
        $this->conn->close();
    }

    public function calcularFactorial($numero)
    {
        if ($numero === 0 || $numero === 1) {
            return 1;
        } else {
            return $numero * $this->calcularFactorial($numero - 1);
        }
    }

    public function mostrarTabla()
    {
        $sql = "SELECT id, N, Factorial,Sumatoria FROM parcial2";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>ID</th><th>N</th><th>Factorial</th><th>Acciones</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>{$row['id']}</td>";
                echo "<td>{$row['N']}</td>";
                echo "<td>{$row['Factorial']}</td>";
                echo "<td>{$row['Sumatoria']}</td>";
                echo "<td>
                        <form action='editar.php' method='post'>
                            <input type='hidden' name='id' value='{$row['id']}'>
                            <button class='edit-btn' type='submit'>Editar</button>
                        </form>
                    </td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "No hay datos en la tabla.";
        }
    }

    public function calcularSumatoria()
    {
        $sql = "SELECT SUM(factorial) AS sumatoria FROM parcial2";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row['sumatoria'];
        } else {
            return 0;
        }
    }
}
?>

