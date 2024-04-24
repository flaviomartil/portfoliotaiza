<div class="mobileNav">
    <div class="logo">
        <a href="#"><img src="{{ asset('assets/img/logotxt.png') }}" alt="vertec"></a>
    </div>
    <div class="mobileClick">
        <i class="fa fa-align-justify"></i>
    </div>
</div>
<div class="siteWrapper">
    <div class="hideHeader"><i class="fa fa-angle-left"></i></div>
    <div class="header header1 animated fadeIn">
        <header class="mainHeader">
            <div class="closeMobile visible-xs visible-sm">
                <i class="fa fa-times"></i>
            </div>
            <div class="logo visible-md visible-lg">
                <a href="#"><img src="{{ asset('assets/img/logotxt.png') }}" alt="logo"></a>
            </div>
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
        </header>
    </div>
</div>
