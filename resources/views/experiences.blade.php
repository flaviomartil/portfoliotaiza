@extends('layouts.template')

@section('logo')
    <div id="qLoverlay">
        <div class="loadLogo">
            <img src="{{ asset('assets/img/logo.png') }}" alt="Logo">
        </div>
        <div class="spinner"></div>
    </div>
@endsection

@section('navbar')
    <div id="vertec-layout">
        @include('layouts/navbar')
    </div>
@endsection

@section('profile')
    <div id="vertec-layout">
    <section class="mainContent customPage" style="padding: 10%;">
        <div class="container">
                <div class="col-md-12 animated fadeInDown">
                    <div class="row">
                    <div class="subTitle"><h2>EXPERIÊNCIA</h2></div>
                        <div class="col-md-6 animated fadeInRight">
                    <h3>Estágio Direito | <span>Agu Advocacia Geral Da União</span></h3>
                    <div class="momentDiv" style="margin-bottom: 20px;margin-top: -0.9%;"><small>5/02/2024 até o momento</small></div>
                    <ul>
                        <li>Lançamentos e Consultas nos sistemas Institucionais</li>
                        <li>Auxílio supervisionado na elaboração de peças e ofícios</li>
                        <li>Visitas supervisionadas a Fóruns Federais/Estaduais</li>
                        <li>Pesquisas doutrinárias e jurisprudenciais.</li>
                    </ul>
                        </div>
                <div class="col-md-6 animated fadeInRight">
                    <h3>Estágio Direito | <span>Secretaria Municipal Da Fazenda</span></h3>
                    <div class="momentDiv" style="margin-bottom: 20px;margin-top: -0.9%;"><small>20/01/2023 até 20/01/2024</small></div>
                    <ul>
                        <li>Auxílio Na Leitura E Análise De Documentos</li>
                        <li>Apoio Na Elaboração De Relatórios De Processos Administrativos</li>
                        <li>Auxílio Nas Pesquisas De Jurisprudências, Doutrinas E Legislações</li>
                        <li>Auxílio No Controle De Arquivos</li>
                        <li>Auxílio Nos Protocolos De Documentos</li>
                        <li>Apoio Na Abertura, Digitalização E Cópias De Processos Administrativos</li>
                        <li>Apoio Na Alimentação E Atualização Dos Bancos De Dados</li>
                    </ul>
                </div>
                <div class="col-md-6 animated fadeInRight">
                    <h3>Estágio Direito |  <span>Consult Us Empresarial</span> </h3>
                    <div class="momentDiv" style="margin-bottom: 20px;margin-top: -0.9%;"><small>01/10/2021 até 30/12/2022</small></div>
                    <ul>
                        <li>Fornecer suporte geral às rotinas administrativas do escritório.</li>
                        <li>Acompanhamento de notícias e legislação relacionadas a projetos.</li>
                        <li>Auxiliar no atendimento a clientes.</li>
                        <li>Auxiliar nas rotinas administrativas jurídicas.</li>
                    </ul>
                </div>
            </div>
            </div>
    </section>
</div>
@endsection

@section('footer')
    @if(!isset($hide_menu_footer))
        @include('layouts/footer')
    @endif
@endsection
