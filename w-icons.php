<?php
//POSICION DE JUGADORES
$rst_posicion=mysql_query("SELECT * FROM pf_posicion_fija ORDER BY id ASC;", $conexion);
?>
<section id="main-cont-icons">

    <div id="icons-lista">

        <ul>
            <li>
                <a id="enl-lista-jugadores" href="javascript:;">Jugadores</a>
            </li>
            <li>
                <a id="enl-lista-entrevista" href="javascript:;">Entrevista</a>
            </li>
            <li class="last">
                <a id="enl-lista-galeria" href="javascript:;">Galería</a>
            </li>
        </ul>

    </div>

    <div id="icons-contenido">

        <img id="progressbar" src="imagenes/progressbar.gif" width="220" height="19" class="ocultar">

        <a href="javascript:;" id="cerrar-contenido" class="ocultar">
            <img src="imagenes/icon-cerrar.png" width="970" height="28">
        </a>

        <div id="lista-jugadores" class="ic-contenido">

            <?php while($fila_posicion=mysql_fetch_array($rst_posicion)){
                $posicion_id=$fila_posicion["id"];
                $posicion_titulo=$fila_posicion["posicion"];
                
                //LISTA DE JUGADORES
                $rst_jugadores=mysql_query("SELECT * FROM pf_jugadores WHERE posicion_fija=$posicion_id AND publicar=1 ORDER BY apellidos ASC;", $conexion);
            ?>

            <aside>
                <h3><?php echo $posicion_titulo; ?></h3>
                <ul>
                    <?php while($fila_jugadores=mysql_fetch_array($rst_jugadores)){
                        $jugadores_id=$fila_jugadores["id"];
                        $jugadores_url=$fila_jugadores["url"];
                        $jugadores_nombre=$fila_jugadores["nombre"];
                        $jugadores_apellidos=$fila_jugadores["apellidos"];
                    ?>
                    <li><a href="jugador/<?php echo $jugadores_id."-".$jugadores_url; ?>">
                        <?php echo $jugadores_apellidos.", ".$jugadores_nombre; ?></a></li>
                    <?php } ?>
                </ul>
            </aside>

            <?php } ?>

        </div>

        <div id="lista-entrevista" class="ic-contenido">                                

            <h2>Pedro Ascoy</h2>

            <p style="text-align:center;">
            <img src="imagenes/upload/pedro-ascoy.jpg" width="450" height="300"></p>

            <p>En diálogo con Ovación Digital, Pedro Ascoy se mostró muy satisfecho con el presente que viene teniendo con Manta de Ecuador, en donde el fin de semana anotó su primer gol. En esta entrevista, el Burrito no ocultó su tristeza porque le hubiera gustado vivir esta experiencia un poco más joven y dijo sin pelos en la lengua que no entiende por qué Sergio Markarián nunca lo tomó en cuenta para la Selección.</p>

            <p><strong>- Hasta que por fin se te abrió el arco...</strong></p>
            <p>- Sí, demoró un poco, pero tengo la tranquilidad que vengo haciendo bien las cosas en Manta. Ahora tengo que seguir trabajando fuerte para seguir gozando de la confianza del técnico.</p>
             
            <p><strong>- En Manta comenzaste como titular, pero luego el técnico te utilizaba como pieza de recambio, ¿por algo en especial?</strong></p>
            <p>- No, simplemente fueron por disposiciones tácticas. Sucede que el 'profe' elige a los jugadores dependiendo de rival, pero lo importante que cuando me toma en cuenta trato de no desperdiciar mi oportunidad. Por ejemplo, ante Independiente de Terán ingresé y aseguré el triunfo.</p>
             
            <p><strong>- En el gol que anotaste, el narrador se lo asignó a otro jugador...</strong></p>
            <p>- (Risas) Sí, me confundió con otro jugador con quien me parezco mucho, incluso este compañero se abrazó con el asistente técnico y eso terminó por confundirlo.</p>
             
            <p><strong>- ¿En qué posición vienes jugando?</strong></p>
            <p>- Como volante por izquierda, como delantero por los costados..., yo realmente me ajusto a lo que me diga el entrenador.</p>
             
            <p><strong>- ¿Qué torneo es más competitivo: el peruano o ecuatoriano?</strong></p>
            <p>- Sinceramente me quedo con el ecuatoriano, porque casi todos los equipos tienen saneadas sus economías, los sueldos son buenos y, sobre todo, pagan puntual.</p>
             
            <p><strong>- Y en la parte futbolística...</strong></p>
            <p>- También. Acá se juega con mayor fuerza y dinámica, no es fácil acoplarte al fútbol ecuatoriano porque se juega mucho en ciudades de altura.</p>

            <p><strong>- Pero, tú ya estás acoplado...</strong></p>
            <p>- Sí, yo me siento muy feliz porque acá sigo creciendo como profesoional, aunque triste a la vez porque me hubiera gustado vivir esta experiencia más joven. Por lo demás, esta ciudad es muy parecida a Chiclayo, hay playa, sol y su gente es muy buena.</p>
             
            <p><strong>- ¿A qué apunta Manta?</strong></p>
            <p>- A seguir siendo protagonista en el campeonato, estamos sólo a cuatro puntos del puntero que es Emelec. La consigna es terminar entre los seis primeros para pelear también un cupo a un torneo internacional y creo que equipo tenemos para lograrlo. Ahora tenemos que ir a Ambato y esperamos sacar un buen resultado.</p>
             
            <p><strong>- El tema de llegar a la Selección peruana sigue presente...</strong></p>
            <p>- Eso lo veo cada vez más lejano.</p>
             
            <p><strong>- ¿Por qué lo dices?</strong></p>
            <p>- Porque cuando pude ser convocado, no me dieron la oportunidad. Recuerdo que hice una buena Copa Libertadores, jugué bien con Juan Aurich, pero el profesor Markarián nunca me tomó en cuenta. No me explico por qué, incluso mi amigo Chiroque y los diferentes entrenadores que pasaron por Aurich, como Juan Reynoso, me decían que Markarián me iba a llamar, pero eso jamás ocurrió. No sé qué pasaba por la cabeza de Markarián. Por ello, le deseo lo mejor a todos los que llegan a ser convocados, porque todos no gozan de ese privilegio. Yo simplemente trabajaré fuerte en mi equipo para seguir creciendo como profesional y a la distancia le daré las vibras positivas para que le vaya bien a la Selección peruana.</p>
             
            <p>Fuente: OVACION</p>

        </div>

    </div>

</section>