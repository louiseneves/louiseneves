<?php include('header.php'); ?>

<section class="apre" id="home">
  <div class="texto">
    <p>Olá! Eu sou a <strong>Louise Neves</strong>.</p>
    <p>Todos os meus projetos desenvolvidos por mim estão aqui.</p>
    <a href="curriculo/Currículo Louise.pdf" download class="btn-cv">
      <i class="fas fa-download"></i> Download CV
    </a>
  </div>
  <div class="foto-container">
    <img src="imagens/foto Louise.jpeg" alt="Foto da Louise" />
  </div>
</section>

<section class="sobre" id="sobre">
  <div class="container_sobre">
    <h1>Sobre mim</h1>
    <p>Sou apaixonada por tecnologia e inovação. Formada em Engenharia de Software e cursando pós-graduação em Desenvolvimento FullStack na Descomplica. Estou buscando uma oportunidade como desenvolvedora júnior.</p>
  </div>
</section>

<section class="habilidade" id="habilidades">
  <div class="container_habilidade">
    <h1>Habilidades</h1>
    <div class="accordion" id="accordionHabilidades">

      <!-- Front-end -->
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#frontend">
            Front-end
          </button>
        </h2>
        <div id="frontend" class="accordion-collapse collapse show" data-bs-parent="#accordionHabilidades">
          <div class="accordion-body">
            <?php
              $skillsFront = [
                ['nome' => 'HTML', 'classe' => 'html', 'porcentagem' => 90],
                ['nome' => 'CSS', 'classe' => 'css', 'porcentagem' => 85],
                ['nome' => 'JavaScript', 'classe' => 'javascript', 'porcentagem' => 75],
                ['nome' => 'Angular', 'classe' => 'angular', 'porcentagem' => 40],
                ['nome' => 'Bootstrap', 'classe' => 'bootstrap', 'porcentagem' => 75],
                ['nome' => 'jQuery', 'classe' => 'jquery', 'porcentagem' => 60],
              ];
              foreach ($skillsFront as $skill):
            ?>
              <div class="skill">
                <div class="skill-info">
                  <span class="skill-name"><?= $skill['nome'] ?></span>
                  <span class="skill-percent"><?= $skill['porcentagem'] ?>%</span>
                </div>
                <div class="progress">
                  <div class="progress-bar <?= $skill['classe'] ?>" style="width: <?= $skill['porcentagem'] ?>%;">
                    <?= $skill['porcentagem'] ?>%
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>

      <!-- Back-end -->
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#backend">
            Back-end
          </button>
        </h2>
        <div id="backend" class="accordion-collapse collapse" data-bs-parent="#accordionHabilidades">
          <div class="accordion-body">
            <?php
              $skillsBack = [
                ['nome' => 'Node.js', 'classe' => 'node', 'porcentagem' => 65],
                ['nome' => 'Java', 'classe' => 'java', 'porcentagem' => 70],
                ['nome' => 'PHP', 'classe' => 'php', 'porcentagem' => 60],
              ];
              foreach ($skillsBack as $skill):
            ?>
              <div class="skill">
                <div class="skill-info">
                  <span class="skill-name"><?= $skill['nome'] ?></span>
                  <span class="skill-percent"><?= $skill['porcentagem'] ?>%</span>
                </div>
                <div class="progress">
                  <div class="progress-bar <?= $skill['classe'] ?>" style="width: <?= $skill['porcentagem'] ?>%;">
                    <?= $skill['porcentagem'] ?>%
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>

      <!-- Mobile -->
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#mobile">
            Mobile
          </button>
        </h2>
        <div id="mobile" class="accordion-collapse collapse" data-bs-parent="#accordionHabilidades">
          <div class="accordion-body">
            <div class="skill">
              <div class="skill-info">
                <span class="skill-name">React Native</span>
                <span class="skill-percent">60%</span>
              </div>
              <div class="progress">
                <div class="progress-bar rn" style="width: 60%;">60%</div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Ferramentas -->
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ferramentas">
            Ferramentas
          </button>
        </h2>
        <div id="ferramentas" class="accordion-collapse collapse" data-bs-parent="#accordionHabilidades">
          <div class="accordion-body">
            <div class="skill">
              <div class="skill-info">
                <span class="skill-name">VS Code</span>
                <span class="skill-percent">80%</span>
              </div>
              <div class="progress">
                <div class="progress-bar vscode" style="width: 80%;">80%</div>
              </div>
            </div>
            <div class="skill">
              <div class="skill-info">
                <span class="skill-name">Firebase</span>
                <span class="skill-percent">50%</span>
              </div>
              <div class="progress">
                <div class="progress-bar firebase" style="width: 50%;">50%</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="projeto" id="projeto">
  <div class="container_projeto">
    <h1 class="titulo-projeto">Projetos</h1>
    <div class="row">
      <div class="col-12 col-lg-4 mb-4">
        <div class="card projeto-card">
        <a href="imagens/imc-calculadora.jpg" target="_blank">
          <img src="imagens/imc-calculadora.jpg" class="card-img-top projeto-img" alt="Calculadora de IMC" onerror="this.src='imagens/default.jpg'">
        </a>
          <div class="card-body text-center">
            <h5 class="card-title">Calculadora de IMC</h5>
            <p class="card-text">
              Projeto que calcula o Índice de Massa Corporal (IMC) de acordo com o peso e a altura informados pelo usuário. Desenvolvido com HTML, CSS e JavaScript para praticar lógica e interatividade no front-end.
            </p>
            <div class="tecnologias mb-3">
              <span class="tech-tag">HTML</span>
              <span class="tech-tag">CSS</span>
              <span class="tech-tag">JavaScript</span>
            </div>
            <div class="botoes">
              <a href="https://github.com/louiseneves/Calculadora-de-IMC" class="btn-icon" target="_blank" aria-label="GitHub">
                <i class="fab fa-github"></i>
              </a>
              <a href="https://imcexpress.netlify.app/" class="btn-icon" target="_blank" aria-label="Ver Projeto">
                <i class="fas fa-globe"></i>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-lg-4 mb-4">
  <div class="card projeto-card">
    <a href="imagens/default.png" target="_blank">
      <img src="imagens/default.png" class="card-img-top projeto-img" alt="Mais projetos em breve">
    </a>
    <div class="card-body text-center">
      <h5 class="card-title">Mais projetos a caminho!</h5>
      <p class="card-text">
        Estou trabalhando em novos projetos e em breve eles estarão disponíveis aqui.<br>
        Enquanto novos projetos estão sendo desenvolvidos, confira o projeto publicado ao lado.
      </p>
    </div>
  </div>
</div>
 
    </div>
  </div>
</section>

<section id="contato">
  <div class="container_contato">
    <h1>Contato</h1>
    <div class="form_contato">
     <form action="https://formsubmit.co/louiseneves87@gmail.com" method="POST">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" placeholder="Digite seu nome" />
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Digite seu email" />
        <label for="mensagem">Mensagem</label>
        <textarea name="mensagem" id="mensagem" rows="8" cols="40" placeholder="Digite sua mensagem..."></textarea>
        <input type="hidden" name="_next" value="https://louiseneves.github.io/portfolio/obrigado.html">
        <input type="hidden" name="_captcha" value="false">
        <input type="submit" name="submit" id="submit" value="Enviar" />
      </form>
    </div>
  </div>
</section>

<?php include('footer.php'); ?>
