<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Nossas Lojas - Full Stack Eletro</title>
        <link rel="stylesheet" href="CSS/Estilo.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    </head>

    <body class="container-fluid mx-0 px-0">

        <?php
            include_once('Menu.html');
        ?>

        <br><br>
        
        <header>

            <h2 class="font-weight-bold">Nossas Lojas</h2>

        </header>

        <hr>
         
        <table class="table text-center">

            <thead>
                <tr>
                    <th scope="col"><h3>Rio de Janeiro</h3></th>
                    <th scope="col"><h3>São Paulo</h3></th>
                    <th scope="col"><h3>Santa Catarina</h3></th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>
                        <p>Avenida Presidente Vargas, 5000</p>
                        <p>10 &ordm; andar</p>
                        <p>Centro</p>
                        <p>(21) 3333-3333</p>
                    </td>
                    <td>
                        <p>Avenida Paulista, 985</p>
                        <p>3 &ordm; andar</p>
                        <p>Jardins</p>
                        <p>(11) 4444-4444</p>
                    </td>
                    <td>
                        <p>Rua Major &Aacute;vila, 370</p>
                        <p>3 &ordm; andar</p>
                        <p>Vila Mariana</p>
                        <p>(47) 5555-5555</p>
                    </td>
                </tr>

            </tbody>

        </table>

        <?php
            include_once('Footer.html');
        ?>

    </body>

</html>