<?php
include('header.php'); ?>
    <div class="container">
        <div class="col s12 m6">
            <h1 class="center-align">Webservice SOAP y AJAX</h1>
        </div>
        <form id="formOperacion" method="post" action="ajaxCalculadora.php" >
            <div class="col s12 m6">
                <div class="row">
                    <div class="input-field col s4">
                        <input placeholder="Introduce un numero" id="valx" name="valx" type="text" class="validate">
                        <label for="valx">X</label>
                    </div>
                    <div class="input-field col s4">
                        <input placeholder="Introduce un numero" id="valy" name="valy" type="text" class="validate">
                        <label for="valy">Y</label>
                    </div>
                    <div class="input-field col s4">
                        <select id="operacion" name="operacion">
                            <option value="" disabled selected>Selecciona una operacion:</option>
                            <option value="suma">Sumar</option>
                            <option value="resta">Restar</option>
                            <option value="multiplica">Multiplicar</option>
                            <option value="divide">Dividir</option>
                        </select>
                        <label>Operacion</label>
                    </div>
                    <div class="input-field col s12">
                        <button type="submit" name="enviaDatos" id="enviaDatos" class="btn waves-effect waves-light"> Enviar datos
                        <i class="material-icons right">send</i></button>
                    </div>
                </div>
            </div>
        </form>
    </div>
<?php include('footer.php') ?>