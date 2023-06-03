<?php
    require_once 'dompdf/autoload.inc.php';
    use Dompdf\Dompdf; 

    $dompdf = new Dompdf();
    
    // Load HTML content 
    $dompdf->loadHtml('<h1>Welcome to CodexWorld.com</h1>'); 
    
    // (Optional) Setup the paper size and orientation 
    $dompdf->setPaper('A4', 'landscape'); 
    
    // Render the HTML as PDF 
    $dompdf->render();
    $dompdf->stream("documentopdffachero", array("Attachment" => 0));
    
    // Output the generated PDF to Browser 

    // Jose Alejandro Velandia Gonzalez -- CI: 30.841.489 -- 31/05/2023
    // Sumativa I -- Programacion IV -- Universidad Bicentenaria de Aragua

    // Clase para modelar usuarios
    class Usuario{
        // parametros (son privados para que sea necesario usar los getters y setters)
        private int $id;
        private string $nombre;
        private string $apellido;
        private int $edad;

        // constructor
        function __construct(int $id, string $nombre, string $apellido, int $edad){
            $this->id = $id;
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->edad = $edad;
        }

        // metodo que indica si es mayor de edad
        function esMayorEdad(){
           if ($this->edad >= 18) echo 'Es mayor de edad<br>';
           else echo 'Es menor de edad<br>';
        }

        // metodo de mostrar informacion
        function mostrarInfo(){
            echo "ID: $this->id<br>";
            echo "Nombre: $this->nombre<br>";
            echo "Apellido: $this->apellido<br>";
            echo "Edad: $this->edad años<br>";
        }

        // getters
        function getId(): int{
            return $this->id;
        }
        function getNombre(): string{
            return $this->nombre;
        }
        function getApellido(): string{
            return $this->apellido;
        }
        function getEdad(): int{
            return $this->edad;
        }

        // setters
        function setId(int $id){
            $this->id = $id;
        }
        function setNombre(string $nombre){
            $this->nombre = $nombre;
        }
        function setApellido(string $apellido){
            $this->apellido = $apellido;
        }
        function setEdad(int $edad){
            $this->edad = $edad;
        }
    }

    // usuario 1
    $user1 = new Usuario(20, 'Mirelly', 'Gonzalez', 50);
    // mostrando informacion
    $user1->mostrarInfo();
    // confirmando edad
    $user1->esMayorEdad();

    echo '<br>';
    
    // usuario 1
    $user2 = new Usuario(23, 'Alejandro', 'Velandia', 19);
    // mostrando informacion
    $user2->mostrarInfo();
    // confirmando edad
    $user2->esMayorEdad();

?>
