🔁 1. O que normalmente precisa ser transferido do tema pai para o tema filho:
Arquivos CSS personalizados (style.css)

Modificações em header.php, footer.php ou functions.php

Arquivos de templates que foram alterados

Ícones, imagens ou trechos HTML/CSS adicionados manualmente
  
📁 2. Como transferir para o tema filho
A) Crie os arquivos necessários no tema filho
Crie um tema filho (se ainda não criou), com ao menos esses arquivos:

/wp-content/themes/inspiro-child/style.css

/wp-content/themes/inspiro-child/functions.php

B) Copie os arquivos alterados
Se você editou algo como:

header.php

footer.php

functions.php

Copie o arquivo inteiro do tema pai para o tema filho e mantenha o mesmo nome.

Exemplo:
Se você adicionou os ícones no footer.php:

Vá até: wp-content/themes/inspiro/footer.php

Copie esse arquivo

Cole em: wp-content/themes/inspiro-child/footer.php

No arquivo do tema filho, mantenha somente a parte modificada (se preferir) ou edite como estava.

C) CSS personalizado
Se você colocou estilos no style.css do tema pai, transfira para o style.css do tema filho:

/* No style.css do tema filho */
.social-icons {
  display: flex;
  justify-content: center;
  gap: 15px;
  margin-top: 30px;
}

.social-icons a {
  color: #fff;
  font-size: 24px;
  transition: 0.3s;
}

.social-icons a:hover {
  color: #1da1f2;
}
📌 Dica importante:
No functions.php do tema filho, certifique-se de importar os estilos do tema pai, assim:

<?php
add_action('wp_enqueue_scripts', 'child_theme_enqueue_styles');
function child_theme_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}
❓Você lembra se adicionamos código no functions.php ou style.css?
Se sim, posso te ajudar a localizar com um exemplo prático, mas normalmente os ícones foram:

Inseridos via HTML no footer.php

Estilizados no style.css

Sim, você mencionou que havia adicionado ícones de redes sociais diretamente no tema pai do WordPress (Inspiro da WPZOOM). Para transferir essas alterações para o tema filho, siga este passo a passo:

🔁 1. O que normalmente precisa ser transferido do tema pai para o tema filho:
Arquivos CSS personalizados (style.css)

Modificações em header.php, footer.php ou functions.php

Arquivos de templates que foram alterados

Ícones, imagens ou trechos HTML/CSS adicionados manualmente

📁 2. Como transferir para o tema filho
A) Crie os arquivos necessários no tema filho
Crie um tema filho (se ainda não criou), com ao menos esses arquivos:

/wp-content/themes/inspiro-child/style.css

/wp-content/themes/inspiro-child/functions.php

B) Copie os arquivos alterados
Se você editou algo como:

header.php

footer.php

functions.php

Copie o arquivo inteiro do tema pai para o tema filho e mantenha o mesmo nome.

Exemplo:
Se você adicionou os ícones no footer.php:

Vá até: wp-content/themes/inspiro/footer.php

Copie esse arquivo

Cole em: wp-content/themes/inspiro-child/footer.php

No arquivo do tema filho, mantenha somente a parte modificada (se preferir) ou edite como estava.

C) CSS personalizado
Se você colocou estilos no style.css do tema pai, transfira para o style.css do tema filho:

/* No style.css do tema filho */
.social-icons {
  display: flex;
  justify-content: center;
  gap: 15px;
  margin-top: 30px;
}

.social-icons a {
  color: #fff;
  font-size: 24px;
  transition: 0.3s;
}

.social-icons a:hover {
  color: #1da1f2;
}
📌 Dica importante:
No functions.php do tema filho, certifique-se de importar os estilos do tema pai, assim:

<?php
add_action('wp_enqueue_scripts', 'child_theme_enqueue_styles');
function child_theme_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}
❓Você lembra se adicionamos código no functions.php ou style.css?
Se sim, posso te ajudar a localizar com um exemplo prático, mas normalmente os ícones foram:

Inseridos via HTML no footer.php

Estilizados no style.css

"Eu não posso copiar do conteúdo daqui /wp-content/themes/inspiro/functions.php para aqui /wp-content/themes/inspiro-child/functions.php e adicionar esse código?"

<?php
add_action('wp_enqueue_scripts', 'child_theme_enqueue_styles');
function child_theme_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}


"Você pode sim copiar parte do conteúdo de functions.php do tema pai para o functions.php do tema filho — mas com muito cuidado. Vamos por partes:"

✅ O QUE FAZER
No functions.php do tema filho (/wp-content/themes/inspiro-child/functions.php), o código abaixo deve estar presente (ou equivalente), pois ele herda os estilos do tema pai:

<?php
add_action('wp_enqueue_scripts', 'child_theme_enqueue_styles');
function child_theme_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}
Isso está correto e necessário.

⚠️ SOBRE COPIAR CÓDIGO DO functions.php DO TEMA PAI
Você não deve copiar tudo de functions.php do tema pai para o filho. Isso pode causar conflitos ou funções duplicadas.

O ideal é:

Copiar apenas as funções que você modificou ou adicionou manualmente no tema pai.

Se você não lembra o que foi alterado, recomendo comparar os arquivos com um editor como o VS Code ou o app gratuito WinMerge para ver as diferenças.

🧠 Exemplo:
Se no tema pai você adicionou algo como:

function custom_social_icons() {
    // Seu código para ícones sociais
}
add_action('wp_footer', 'custom_social_icons');
Você pode copiar apenas isso para o functions.php do tema filho.

❌ NÃO COPIAR:
Funções internas já existentes no tema pai.

Includes ou require de arquivos do tema pai (eles já são carregados automaticamente).

Hooks do próprio WPZOOM a não ser que você esteja modificando.