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
        @endsection

        @section('profile')
            <section class="mainContent customPage" style="padding: 10%;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 animated fadeInDown">
                            <div style="text-align: right;">
                                <a href="{{ route('cv.download') }}" class="b_asset buton-3 buton-mini" style="color:white">Baixar Currículo</a>
                            </div>
                            <div class="col-md-12 animated fadeInDown">
                                <div class="pageTitle"><h1>Taiza Cristina de <span>Souza</span></h1></div>
                                <img src="{{ asset('assets/img/taiza.jpg') }}" align="right">
                                <p>
                                    Feminino, Solteira, 02/10/1998 <br>
                                    Endereço: Silvio Panzarini, Santa Catarina, CEP: 15062065 - São José do Rio Preto, SP, BR <br>
                                    (17) 99718-5340 <br>
                                    E-mail: taizacristinasjp@gmail.com
                                </p>
                                <h2>EDUCAÇÃO</h2>
                                <p>
                                    Graduação em Direito, Unip - 2/2021 a 12/2026 (cursando) <br>
                                    Técnico em Administração, ETEC Philadelpho Gouvêa Netto - 8/2020 a 12/2021 (concluído) <br>
                                    Ensino Médio - Completo em E.E Padre Clemente Marton Segura - 2/2006 a 12/2016 (concluído)
                                </p>
                            </div>
                            <div class="row">
                                <div class="col-md-6 animated fadeInRight">
                                    <div class="subTitle"><h2>COMPETÊNCIAS <span>COMPORTAMENTAIS</span></h2></div>
                                    <ul>
                                        <li>Forte relacionamento interpessoal.</li>
                                        <li>Automotivado.</li>
                                        <li>Boa comunicação.</li>
                                        <li>Facilidade em trabalho em equipe.</li>
                                        <li>Adaptabilidade e resiliência.</li>
                                        <li>Vontade de crescimento.</li>
                                        <li>Bom humor.</li>
                                        <li>Criatividade e iniciativa.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    </div>  <!-- closing div for "vertec-layout" -->
@endsection

@section('footer')
    @include('layouts/footer')
@endsection
