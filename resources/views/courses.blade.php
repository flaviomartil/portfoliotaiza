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
        @include('layouts/menu')
        @endsection

@section('profile')
    <div id="vertec-layout">
    <section class="mainContent customPage" style="padding: 10%;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 animated fadeInDown">
                    <div class="pageTitle"><h2> CURSOS E  <span>ESPECIALIZAÇÕES</span></h2></div>
                    <div class="row">
                        <div class="col-md-6 animated fadeInRight">
                            <div class="subTitle"><h2>     CURSO de Orientação Profissional <span>– FULBEAS</span></h2></div>
                            <ul>
                                <li>Fundamentos do marketing</li>
                                <li>Comportamento do consumidor</li>
                                <li>Mix de marketing (produto, preço, praça e promoção)</li>
                                <li>Estratégias de marketing digital</li>
                                <li>Pesquisa de mercado</li>
                            </ul>
                        </div>

                        <div class="col-md-6 animated fadeInRight">
                            <div class="subTitle"><h2>       CURSO Básico em Marketing <span>– SENAC</span></h2></div>
                            <ul>
                                <li>Fundamentos do marketing</li>
                                <li>Comportamento do consumidor</li>
                                <li>Mix de marketing (produto, preço, praça e promoção)</li>
                                <li>Estratégias de marketing digital</li>
                                <li>Pesquisa de mercado</li>
                            </ul>
                        </div>

                        <div class="col-md-6 animated fadeInRight">
                            <div class="subTitle"><h2>       CURSO Assistente administrativo <span>– PENSAR</span></h2></div>
                            <ul>
                                <li>Introdução à administração</li>
                                <li>Comunicação empresarial</li>
                                <li>Organização e arquivamento</li>
                                <li>Noções de contabilidade</li>
                                <li>Introdução aos princípios contábeis</li>
                                <li>Registros contábeis básicos</li>
                                <li>Noções de balanço patrimonial e demonstrativos financeiros</li>
                                <li>Conhecimentos nos sistemas: CPJ</li>
                                <li>Conhecimentos nos sistemas: PROJUDI/PR</li>
                                <li>Conhecimentos nos sistemas: E-PROC</li>
                                <li>Conhecimentos nos sistemas: E-SAJ</li>
                                <li>Conhecimentos nos sistemas: PJE</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        @endsection
@section('footer')
    @include('layouts/footer')
@endsection
