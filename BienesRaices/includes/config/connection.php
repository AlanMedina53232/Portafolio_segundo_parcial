    <?php
        function connection() : mysqli{
            $db = mysqli_connect("localhost", "root","","bienesraices");
            if($db){
                echo "Conectado";
            } else {
                echo "No conectado";
            }

        return $db;
        }

    ?>