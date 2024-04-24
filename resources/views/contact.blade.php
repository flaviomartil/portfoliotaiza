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
    <section class="mainContent">
        <div class="bg-map">
            <div class="row">
                <div class="container">
                    <div class="col-md-12 animated fadeInDown">
                        <iframe width="100%" height="420" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3728.5112462045167!2d-49.31472422322272!3d-20.85143396766518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94bc4c44f4d9355d%3A0x4a15e52378d0e8d!2sR.%20Silvio%20Panzarini%2C%2031%20-%20Est%C3%A2ncia%20Santa%20Catarina%2C%20S%C3%A3o%20Jos%C3%A9%20do%20Rio%20Preto%20-%20SP%2C%2015062-065!5e0!3m2!1spt-BR!2sbr!4v1713954867403!5m2!1spt-BR!2sbr" " style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container">
                <div class="contact-page-form">
                    <div class="col-md-6 animated fadeInLeft">
                        <h3 class="subTitle">ENTRE EM <span>CONTATO</span></h3>
                        <p>Para vagas disponíveis ou assuntos profisisonais relacionados a direito.</p>
                        <div class="contact-form2">
                            <form class="form-horizontal" role="form" method="POST" action="{{ route('sendEmail') }}">
                                <meta name="csrf-token" content="{{ csrf_token() }}">
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-4 control-label">Seu Nome:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="name" id="name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputSubject" class="col-sm-4 control-label">Assunto</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="subject" id="subject">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail" class="col-sm-4 control-label">Endereço de E-mail:</label>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control" name ="email" id="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputMessage" class="col-sm-4 control-label">Mensagem:</label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control" rows="5" name="message" id="message"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-4 col-sm-3">
                                        <button id="btn-submit" class="buton b_asset buton-2 buton-mini">ENVIAR</button></div>
                                </div>
                            </form>
                        </div>
                    </div>
                <div class="bg-contact-social">
                    <div class="col-md-6 animated fadeInRight">



                        <h3 class="subTitle">INFORMAÇÕES <span>DE CONTATO</span></h3>
                        <div class="contact-info">
                            <p><i class="vertec-telephone"></i> (17) 99718-5340</p>
                            <p><i class="vertec-envelope"></i> taizacristinasjp@gmail.com</p>
                            <p><i class="vertec-globe"></i> https://taizacristina.com.br/</p>
                            <p><i class="vertec-direction"></i> Silvio Panzarini, Santa Catarina, CEP: 15062065 - São José do Rio Preto, SP, BR</p>
                        </div>
                        <div class="contact-icons">
                            <a href="#"><div class="social-box"><i class="fa fa-facebook"></i></div></a>
                            <a href="#"><div class="social-box"><i class="fa fa-linkedin"></i></div></a>
                            <a href="#"><div class="social-box"><i class="fa fa-instagram"></i></div></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>
    <script>
        $('#btn-submit').click(function(e) {
            e.preventDefault();

            var name = $('#name').val();
            var subject = $('#subject').val();
            var email = $('#email').val();
            var message = $('#message').val();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: "{{ route('sendEmail') }}",
                type: 'POST',
                data: {
                    name: name,
                    subject: subject,
                    email: email,
                    message: message,
                },
                success: function(response) {
                    // Limpar os campos do formulário ou exibir mensagem de sucesso
                    $('#name').val('');
                    $('#subject').val('');
                    $('#email').val('');
                    $('#message').val('');
                    alert('E-mail enviado com sucesso!');
                },
                error: function(response) {
                    // Tratar erros aqui
                    alert('Erro ao enviar o e-mail!');
                }
            });
        });
    </script>
    @endsection
@section('footer')
    @include('layouts/footer')
@endsection
