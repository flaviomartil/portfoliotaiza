<nav class="mainNav">
    <div id="dl-menu" class="dl-menuwrapper">
        <button class="dl-trigger">Abrir Menu</button>
        <ul class="dl-menu dl-menuopen">
            <li class="{{ Request::routeIs('home') ? 'active' : '' }}">
                <a href="{{ route('home') }}">Início</a>
            </li>
            <li class="{{ Request::routeIs('courses') ? 'active' : '' }}">
                <a href="{{ route('courses') }}">Cursos e Especializações</a>
            </li>
            <li class="{{ Request::routeIs('experiences') ? 'active' : '' }}">
                <a href="{{ route('experiences') }}">Experiências</a>
            </li>
            <li class="{{ Request::routeIs('contact') ? 'active' : '' }}">
                <a href="{{ route('contact') }}">Contato</a>
            </li>
        </ul>
    </div>
</nav>
