<?php 
    $this->view('home/cabecario');
?>
<!-- Navigation-->
<?php
            $this->view('home/menu');
        ?>
<!-- Page Content-->
<div class="container-fluid p-0">
    <!-- About-->
    <section class="resume-section" id="about">
        <div class="resume-section-content">
            <h1 class="mb-0">
                Beatriz
                <span class="text-primary">Soutilha</span>
            </h1>
            <div class="subheading mb-5">
                Rio de Janeiro . (21) 99999-9999 ·
                <a href="mailto:name@email.com">beatrizs@email.com</a>
            </div>
            <p class="lead mb-5">Comecei estudando astronomia,
                e no meio da graduação percebi que gostava mais de programação do que de física.
                Hoje estudo TI e tento aprender o máximo possível de várias áreas de
                desenvolvimento.</p>
            <div class="social-icons">
                <a class="social-icon" href="https://github.com/BeatrizSoutilha"><i class="fab fa-github"></i></a>
                <a class="social-icon" href="https://twitter.com/BeatrizSoutilha"><i class="fab fa-twitter"></i></a>
                <a class="social-icon" href="https://www.facebook.com/BeatrizSoutilha"><i
                        class="fab fa-facebook-f"></i></a>
            </div>
        </div>
    </section>
    <hr class="m-0" />
    <!-- Experience-->
    <section class="resume-section" id="experience">
        <div class="resume-section-content">
            <h2 class="mb-5">Experiencias Profissionais</h2>
            <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="flex-grow-1">
                    <h3 class="mb-0">Assistente de Produção - SAMSUNG</h3>
                    <p>Atender atletas e clientes na loja da SAMSUNG, na vila olímpica.</p>
                </div>
                <div class="flex-shrink-0"><span class="text-primary">Julho 2016 - Setembro 2016</span></div>
            </div>
            <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="flex-grow-1">
                    <h3 class="mb-0">Agente de Passgeiros - ORBITAL</h3>
                    <p>Atendimento de passageiros.</p>
                </div>
                <div class="flex-shrink-0"><span class="text-primary">Dezembro 2016 - Junho 2019</span></div>
            </div>
            <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="flex-grow-1">
                    <h3 class="mb-0">Agente de Passageiros - IBERIA</h3>
                    <p>Atendimento de passageiros.</p>
                </div>
                <div class="flex-shrink-0"><span class="text-primary">Julho 2019 - presente</span></div>
            </div>
    </section>
    <hr class="m-0" />
    <!-- Education-->
    <section class="resume-section" id="education">
        <div class="resume-section-content">
            <h2 class="mb-5">Educação</h2>
            <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="flex-grow-1">
                    <h3 class="mb-0">Santa Mônica Centro Educacional</h3>
                    <div class="subheading mb-3">Ensino Médio</div>
                </div>
                <div class="flex-shrink-0"><span class="text-primary">Janeiro 2011 - Dezembro 2013</span></div>
            </div>
            <div class="d-flex flex-column flex-md-row justify-content-between">
                <div class="flex-grow-1">
                    <h3 class="mb-0">Centro Universitário Senac</h3>
                    <div class="subheading mb-3">Gestão em TI</div>
                </div>
                <div class="flex-shrink-0"><span class="text-primary">Janeiro 2020 - Presente</span></div>
            </div>
        </div>
    </section>
    <hr class="m-0" />
    <!-- Form-->
    <section class="resume-section" id="interests">
        <div class="resume-section-content">
            <?php 
                $this->view('home/form');
            ?>
        </div>
    </section>
    <hr class="m-0" />
    <!-- Awards-->
    <section class="resume-section" id="awards">
        <div class="resume-section-content">
            <h2 class="mb-5">Certificados</h2>
            <ul class="fa-ul mb-0">
                <li>
                    <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                    Python for Data Science - IBM
                </li>
                <li>
                    <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                    Programador Web - IFTO
                </li>
                <li>
        </div>
    </section>
</div>

<?php 
    $this->view('home/rodape');
?>