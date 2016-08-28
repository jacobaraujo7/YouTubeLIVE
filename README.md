# YouTubeLIVE

Use essa lib para pegar informações sobre a sua transmissão AO VIVO realizadas pelo YouTube.

NOTA: O YouTube desencorajou os desenvolvedores a colocarem Players em seus sites pessoais obrigando a trocar o link do player em toda nova transmissão,
ESSA LIB AUTOMATIZA O ACESSO AO PLAYER PARA QUEM DESEJA QUE SEU USUÁRIO ASSISTA A TRANSMISSÃO AO VIVO PELO SEU SITE PESSOAL.
Não consta no YouTube nenhuma forma de quebra de contrato ou direitos de usos, por tanto, o uso dessa lib ATÉ ENTÃO é liberado a todos.


<h3>Instalação</h3>
<p>Baixe ou clone o projeto contendo os Arquivos 'youtubeAPI.php' e 'apiREST.php', depois coloque na raiz do seu site (ou onde desejar)</p>
<br>
<h3>Como Usar</h3>

<p>Primeiro você precisa adquirir uma key no YouTube API. É bem simples. Basta acessar esse <a target="_blank" href="https://developers.google.com/youtube/registering_an_application?hl=pt-br">link</a> e seguir as instruções para criar sua credencial(KEY)</p>
<p>Consiga também o ID DO CANAL(channel id). Veja como saber <a target="_blank" href="https://support.google.com/youtube/answer/3250431?hl=pt-BRNESSE">LINK</a></p>
<p>Agora basta incluir o arquivo baixado no seu index.php e executar uma das funções para obter o resultado necessário</p>

<h2>Exemplo de Uso</h2>

<p>
  Inclua no seu arquivo php
  <pre><code>
        //Inclua a lib no seu arquivo PHP
        include('youtubeAPI.php');
        
        //seu id do canal
        $channel_id = 'ID_DO_CANAL';
        //sua chave de acesso ao YouTube API
        $key = 'SUA_KEY';
        
        //instanciando o objeto
        $live = new YouTubeLIVE($channel_id, $key);
        //usar as funções
  </code></pre>
</p>

<p>Com a API instalada e instanciada, podemos usar alguns métodos úteis</p>

<p>
  Inclua no seu arquivo php
  <pre><code>
       $live->getVideoID(); // Retorna uma String com o ID do Vídeo que está em transmissão aovivo (LIVE)
       
       $live->isLive(); // Retorna um Booleano;
       
       $live->getEmbledUrl(); // Retorna uma String com a URL do vídeo em transmissão (Pronta para adicionar em um iFrame
  </code></pre>
</p>

<br><br>

<h3>Use a API Rest</h3>

<p>O Uso da API REST possibilita que descubra qual o link que está ao vivo sem a necessidade de programar, basta usar o link 
para fazer uma requisição e retornar o que deseja, como, o Status da Transmissão(Se está online ou offline), o ID do vídeo que está transmitindo, e o link
 para incorporar em um iframe no seu site
</p>

<h3>Como usar</h3>

<p>Basta ter o arquivo apiREST.php na raiz de seu site e completar a url</p>

<p>
  URL para requisições tipo /GET
  <pre><code>
       http://SEU-DOMINIO.com.br/apiREST.php?channelId=ID_DO_CANAL&key=SUA_KEY&type=embled   //redireciona para a url do vídeo em transmissão (PARA USAR NO SEU IFRAME)
       http://SEU-DOMINIO.com.br/apiREST.php?channelId=ID_DO_CANAL&key=SUA_KEY&type=status   //retorna 'live' ou 'none';
       http://SEU-DOMINIO.com.br/apiREST.php?channelId=ID_DO_CANAL&key=SUA_KEY&type=videoId   //retorna o ID do Video;
  </code></pre>
</p>

<p>
  Para usar no iFrame basta adicionar a url do apiREST.php com seus parametros corretos.
  <pre><code>
 
  <iframe  width="100%" height="100%"  src="http://SEU-DOMINIO.com.br/apiREST.php?channelId=ID_DO_CANAL&key=SUA_KEY&type=embled" frameborder="0" scrolling="no" allowfullscreen> </iframe>      
      
  </code></pre>
</p>


<br><br>
<h3>Qualquer dúvida @twitter: jacob_moura ou por email: jacobaraujo7@gmail.com</h3>



