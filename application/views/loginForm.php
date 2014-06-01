<html>
<body>
    <h1>
        Loggeo
    </h1>
    <?php
        echo form_open('/login/doLogin');
        echo form_label('correo: ', 'correo');echo "</br>";
        echo form_input('correo');echo '<br>';
        echo form_label('password', 'password');echo "</br>";
        echo form_input('password');echo '<br>';      
        echo form_submit('botonSubmit', 'Entrar');
        echo form_close();
    ?>
</body>
</html>
