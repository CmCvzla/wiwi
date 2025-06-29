<?php
    include 'template/head.php';
?>
<!-- Contenedor de botones de usuario en la esquina superior derecha -->
<header class="head-botones">
    <a  class="btn-home" href="http://localhost/wiwi/" role="button">Salir</a>
     <a class="btn-perfil" title="Perfil"  href="http://localhost/wiwi/perfil.php" role="button" >
        <img class="head-home" src="img/perfil.png" alt="Perfil">
    </a>
</header>



<div class="home-contenedor">

    <div class="home-div">
        <h2>Sabores</h2>
        <div class="producto-hover">
            <a name="" id=""class="btn-home" title="Cereal" href="" role="button" >
                <img class="img-home" src="img/cereal.jpg" alt="Cereal">
            </a>
            <section class="ingredientes-info"><P>Ingredientes utilizados </P></section>
        </div>
        <div class="producto-hover">
            <a name="" id=""class="btn-home" title="durazno" href="" role="button" >
                <img class="img-home" src="img/durazno.jpg" alt="Durazno">
              </a>
              <section class="ingredientes-info"><P>Ingredientes utilizados </P></section>
        </div>
        <div class="producto-hover">
            <a name="" id=""class="btn-home" title="fresa" href="" role="button" >
                <img class="img-home" src="img/fresa.jpg" alt="Fresa">
              </a>
              <section class="ingredientes-info"><P>Ingredientes utilizados </P></section>
        </div>
        <div class="producto-hover">
             <a name="" id=""class="btn-home" title="pasas" href="" role="button" >
                <img class="img-home" src="img/pasas.jpg" alt="Pasas">
              </a>
              <section class="ingredientes-info"><P>Ingredientes utilizados </P></section>
        </div>
    </div>

 

    <div class="home-div2">
        <h2>Pedido personalizado</h2>
        <button class="btn-home" title="Pedido personalizado">
            <img class="img-home" src="img/preparacion.jpg" alt="Pedido personalizado">
        </button>
         <div class="selecion-div">
         <label for="Tamaño">Tamaño</label>
            <select id="Tamaño" name="Tamaño" class="input-solicitud" required>
                <option value="">Elige un tamaño</option>
                <option value="chico">Chico</option>
                <option value="grande">Grande</option>
            </select>
        </div>
        <div class="selecion-div">
         <label for="sabor">sabor</label>
            <select id="sabor" name="sabor" class="input-solicitud" required>
                <option value="">Elige un sabor</option>
                <option value="fresa">fresa</option>
                <option value="pasas">pasas</option>
                <option value="cereal">cereal</option>
                <option value="durazno">durazno</option>
            </select>
        </div>
        <div class="selecion-div">
                    <label for="reg-cantidad">cantidad</label>
                    <input class="input-cantidad" id="reg-cantidad" type="int" placeholder="cantidad" required>
        </div>


        <div class="datos-direccion" style="margin-top:24px; padding:18px; background:#f8fbe9; border-radius:12px; box-shadow:0 2px 8px rgba(46,110,27,0.08); max-width:400px;">
                <h3 style="margin-top:0;">Dirección de entrega</h3>
                <p><strong>Nombre:</strong> <input class="input-direccion" id="reg-direccion" type="text" placeholder="Ingresa tu Nombre" required></p>
                <p><strong>Dirección:</strong> <input class="input-direccion" id="reg-direccion" type="text" placeholder="Ingresa tu dirección" required></p>
                <p><strong>Referencia:</strong> <input class="input-direccion" id="reg-direccion" type="text" placeholder="Ingresa tu Referencia" required></p>
                <p><strong>Teléfono:</strong> <input class="input-direccion" id="reg-direccion" type="text" placeholder="Ingresa tu Teléfono" required></p>
        </div> 

        <button class="btn">solicitar pedido</button>

     </div>

</div>

<script src="js/funciones.js"></script>

<?php
    include 'template/footer.php';
?>
