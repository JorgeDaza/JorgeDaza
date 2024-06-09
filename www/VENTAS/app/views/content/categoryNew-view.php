<div class="container is-fluid mb-6">
    <h1 class="title">Duración juego </h1>
    <h2 class="subtitle"><i class="fas fa-tag fa-fw"></i> &nbsp; Nuevo juego</h2>
</div>

<div class="container pb-6 pt-6">

    <form class="FormularioAjax" action="<?php echo APP_URL; ?>app/ajax/categoriaAjax.php" method="POST" autocomplete="off" >

        <input type="hidden" name="modulo_categoria" value="registrar">

        <div class="columns">
            <div class="column">
                <div class="control">
                    <label>Tiempo jugado <?php echo CAMPO_OBLIGATORIO; ?></label>
                    <input class="input" type="text" name="categoria_nombre" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{4,50}" maxlength="50" required >
                </div>
            </div>
            <div class="column">
                <div class="control">
                    <label>Ubicación</label>
                    <input class="input" type="text" name="categoria_ubicacion" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{5,150}" maxlength="150" >
                </div>
            </div>
        </div>
        <p class="has-text-centered">
            <button type="reset" class="button is-link is-light is-rounded"><i class="fas fa-paint-roller"></i> &nbsp; Limpiar</button>
            <button type="submit" class="button is-info is-rounded"><i class="far fa-save"></i> &nbsp; Guardar</button>
        </p>
        <p class="has-text-centered pt-6">
            <small>Los campos marcados con <?php echo CAMPO_OBLIGATORIO; ?> son obligatorios</small>
        </p>
		<div class="column">
		  		<label>mesa<?php echo CAMPO_OBLIGATORIO; ?></label><br>
				<div class="select">
				  	<select name="usuario_caja">
				    	<option value="" selected="" >Seleccione una opción</option>
                        <?php
                            $datos_cajas=$insLogin->seleccionarDatos("Normal","caja","*",0);

                            while($campos_caja=$datos_cajas->fetch()){
                                echo '<option value="'.$campos_caja['caja_id'].'">mesa no.'.$campos_caja['caja_numero'].' - '.$campos_caja['caja_nombre'].'</option>';
                            }
                        ?>
				  	</select>
				</div>
		  	</div>
		</div>
    </form>
</div>
