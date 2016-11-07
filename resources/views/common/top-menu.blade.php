<ul id="topnav">
    <div class="wrap">
        <li><a href="{{ URL::to('home') }}"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Inicio</a></li>
        <li>
            <a href="{{ URL::to('servicios') }}"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;Servicios</a>
				            <span>
				                <a href="">¿Quienes somos?</a> |
				                <a href="">Nuestro proceso</a> |
				                <a href="">Testimonios</a> |
								<a href="{{ URL::to('contacto') }}">Contacto</a>
				            </span>
        </li>
		<li>
			<a href="{{ URL::to('personal') }}"><i class="fa fa-bar-chart" aria-hidden="true"></i>&nbsp;Registro personal</a>
				            <span>
				                <a href="{{ URL::to('estadisticas-peso') }}">Peso</a> |
								<a href="{{ URL::to('estadisticas-cardio') }}">Cardio</a> |
								<a href="{{ URL::to('estadisticas-lab') }}">Laboratorio</a> |
				                <a href="{{ URL::to('cuestionario') }}">Cuestionario</a> |
				                <a href="{{ URL::to('valoracion')}}">Valoración biométrica</a>
				            </span>
		</li>
		<!--li>
			<a href="{{ URL::to('nosotros') }}">Registro personal</a>
				            <span>
				                <a href="">The Company</a> |
				                <a href="">The Team</a> |
				                <a href="">Careers</a>
				            </span>
		</li-->
        <!--li>
            <a href="#">Portafolio</a>
				            <span>
				                <a href="">Web Design</a> |
				                <a href="">Development</a> |
				                <a href="">Identity</a> |
				                <a href="">SEO &amp; Internet Marketing</a> |
				                <a href="">Print Design</a>
				            </span>
        </li-->

        <li><a href="{{ URL::to('apoyo-seguimiento') }}"><i class="fa fa-user-md" aria-hidden="true"></i>&nbsp;Apoyo y <br/>Seguimiento</a></li>
		<li><a href="{{ URL::to('blog') }}"><i class="fa fa-book" aria-hidden="true"></i>&nbsp;Blog</a></li>
    </div>
</ul>