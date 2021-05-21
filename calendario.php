<?php include_once 'includes/templates/header.php'; ?>

    <section class="seccion contenedor">
        <h2>Calendario de Eventos</h2>

      <?php     
      try {
          require_once ('includes/funciones/bd_conexion.php');
          $sql= "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, c.cat_evento, c.icon,i.nombre_invitado, i.ape_invotado FROM `eventos`  INNER JOIN categoria_evento c on c.id_categoria=eventos.id_cat_evento INNER JOIN invitados i on i.id_invitados=eventos.id_inv";
          $resultado = $conn->query($sql);
      } catch (\Exception $e) {
          echo $e->getMessage();
      } ?>

        <div class="calendario">


            <?php
                
                $calendario = array (); // arreglo para controlar el arreglo de eventos 
                while ($eventos = $resultado->fetch_assoc()) {
                    $fecha = $eventos["fecha_evento"]; // Almacena la fecha para que sirva de parametro
                    $categotia = $eventos ["cat_evento"];

                    $evento = array( // Arreglo que tiene toda la informacion de la tabla 
                        'titulo' => $eventos["nombre_evento"],
                        'fecha' => $eventos["fecha_evento"],
                        'hora' => $eventos ["hora_evento"],
                        'categoria' => $eventos ["cat_evento"],
                        'icono' => "fas " . $eventos["icon"],
                        'invitados' => $eventos["nombre_invitado"] . " " . $eventos["ape_invotado"]
                    );
                    $calendario[$fecha][] = $evento; // El arreglo calendario recibe como parametro fecha para que el arreglo evento sea odenado 
                
           

             } //While de fetch_assoc ?>

            <?php 
                //Imprimir todos los eventos 
                foreach ($calendario as $dia => $lista_evento) {  //Dia es el parametro que se imprime es la variable que se recorre 
            ?> 
                    <h3>
                        <i class="fa fa-calendar"></i>

                        <?php
                         
                            //Windows
                            setlocale(LC_TIME,'spanish');

                            echo strftime("%A, %d de %B del %Y", strtotime($dia));
                        ?>
                    </h3>
                    
                    <?php foreach ($lista_evento as $evento ) { ?>

                        
                        <div class="dia">
                            <p class="titulo"><?php echo $evento["titulo"]; ?></p>
                            <p class="hora">
                                <i class="fas fa-clock"></i>
                                <?php echo $evento["fecha"] . " " . $evento["hora"]; ?>
                            </p>
                            <p>
                                <i class=" <?php echo $evento["icono"]; ?>" aria-hidden="true"></i>
                                <?php echo $evento["categoria"]; ?>
                            </p>
                            <p>
                                <i class="fas fa-user"></i>
                                <?php echo $evento["invitados"]; ?>
                            </p>
                        </div>
                       

                    <?php } // foreach lista eventos?> 
            <?php } // foreach dia ?>

        </div>

        <?php 
            $conn->close(); 
        ?>

    </section>

    
    <?php include_once 'includes/templates/footer.php'; ?>