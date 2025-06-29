<?php include 'template/head.php'; ?>

<div class="flip-container" id="flip-container">
  <div class="flipper" id="flipper">
    <!-- Login -->
    <section class="front">
      <h2 class="h2">Iniciar Sesión</h2>
      <form action="bd/validar_login.php" method="POST" class="campo-form">
        <div class="campo-form">
          <label for="login-apodo">Apodo</label>
          <input class="input-login" id="login-apodo" name="usuario" type="text" placeholder="Ingresa tu apodo" required>
        </div>
        <div class="campo-form">
          <label for="login-pass">Contraseña</label>
          <input class="input-login" id="login-pass" name="contraseña" type="password" placeholder="Ingresa tu contraseña" required>
        </div>
        <button class="btn" type="submit">Entrar</button>
      </form>
      <button class="btn" type="button" onclick="girarCarta()">¿No tienes una cuenta? Regístrate</button>
    </section>
    
    <!-- Registro -->
    <section class="back">
      <h2 class="h2">Registro</h2>
      <form action="bd/registro.php" method="POST" class="campo-form">
        <div class="campo-form">
          <label for="reg-apodo"><p class="p-login">Apodo</p></label>
          <input class="input-login" id="reg-apodo" name="usuario" type="text" placeholder="Elige un apodo" required>
        </div>
        <div class="campo-form">
          <label for="reg-tel">Teléfono</label>
          <input class="input-login" id="reg-tel" name="telefono" type="tel" placeholder="Tu número de teléfono" required>
        </div>
        <div class="campo-form">
          <label for="reg-correo">Correo</label>
          <input class="input-login" id="reg-correo" name="correo" type="email" placeholder="Tu correo electrónico" required>
        </div>
        <div class="campo-form">
          <label for="reg-pass">Contraseña</label>
          <input class="input-login" id="reg-pass" name="contraseña" type="password" placeholder="Crea una contraseña" required>
        </div>
        <button class="btn" type="submit">Crear Usuario</button>
      </form>
      <button class="btn" type="button" onclick="girarCarta()">¿Ya tienes cuenta? Inicia sesión</button>
    </section>
  </div>
</div>

<script src="js/funciones.js"></script>
</body>
</html>
