INSTITUTO POLITÉCNICO CATÓLICO
DOM DAMIÃO N.º 6026
DOCUMENTAÇÃO DO PROJECTO INDIVIDUAL DE ESTÁGIO
Desenvolvimento de uma plataforma de doações com sistema de pontos e descontos
Área: Desenvolvimento Web
Tipo de projecto: Projecto individual de estágio
Luanda, 2026

1. Introdução
A solidariedade e a participação em iniciativas sociais são importantes para apoiar pessoas e comunidades. Contudo, pode ser difícil encontrar campanhas de doação num único local e acompanhar as contribuições realizadas.
Este projecto consiste no desenvolvimento de uma aplicação web demonstrativa que permite consultar campanhas, registar doações fictícias, acumular pontos e trocar esses pontos por vouchers de desconto simulados. A ideia é demonstrar como a tecnologia pode incentivar a participação em acções solidárias.
A aplicação é inspirada num modelo em que lojas como a Kero e a Worten poderiam disponibilizar descontos no futuro. No âmbito deste estágio, estas marcas são apenas exemplos: não se pressupõem parcerias reais, pagamentos efectivos ou utilização comercial da plataforma.
2. Problema identificado
As campanhas de doação podem estar dispersas por diferentes canais, tornando mais difícil a sua consulta e o acompanhamento das contribuições. Uma plataforma demonstrativa pode mostrar como centralizar campanhas e reconhecer a participação dos utilizadores através de pontos e recompensas virtuais.
3. Justificação do projecto
O projecto permitirá aplicar conhecimentos de desenvolvimento web na criação de uma solução com utilidade social. A implementação de um sistema simplificado de pontos e vouchers possibilitará demonstrar funcionalidades de registo, processamento de dados e gestão de recompensas, sem a complexidade de uma plataforma financeira real.
4. Objectivos
4.1. Objectivo geral
Desenvolver uma aplicação web demonstrativa de doações com um sistema básico de pontos e resgate de vouchers virtuais, para apresentação no estágio.
4.2. Objectivos específicos
⦁	Criar uma interface simples e responsiva.
⦁	Permitir o registo e a autenticação básica dos utilizadores.
⦁	Apresentar campanhas de doação fictícias.
⦁	Simular o registo e a confirmação de uma doação.
⦁	Atribuir pontos automaticamente após a confirmação da doação simulada.
⦁	Permitir consultar o saldo de pontos e resgatar vouchers de demonstração.
⦁	Criar um painel administrativo simples para gerir campanhas e confirmar doações simuladas.
5. Descrição da solução
A aplicação terá uma área para utilizadores e uma área administrativa. Os utilizadores poderão entrar na plataforma, consultar campanhas, registar uma doação de demonstração e verificar os pontos recebidos. Na área de recompensas, poderão trocar pontos por vouchers fictícios, sujeitos a regras definidas no sistema.
O administrador poderá adicionar ou actualizar campanhas de demonstração e confirmar os registos de doação. A aplicação não processará dinheiro real, não emitirá descontos comerciais válidos e não estará ligada aos sistemas de lojas ou instituições beneficiárias.
6. Funcionamento da aplicação
1.	O utilizador cria uma conta ou inicia sessão.
2.	Consulta a lista de campanhas disponíveis.
3.	Escolhe uma campanha e regista uma doação fictícia.
4.	O administrador confirma o registo, ou a aplicação utiliza um estado de confirmação próprio para a demonstração.
5.	O sistema atribui pontos de acordo com uma regra simples previamente definida.
6.	O utilizador consulta o saldo de pontos e escolhe um voucher virtual.
7.	Se tiver pontos suficientes, o sistema desconta os pontos e apresenta um voucher de demonstração.
7. Regra de conversão de pontos
Para fins de demonstração, a aplicação utilizará uma regra de conversão simples, definida no código ou na configuração do sistema. Por exemplo, uma doação fictícia de 5.000 Kz poderá corresponder a 50 pontos, se for utilizada a regra de 1 ponto por cada 100 Kz.
Os valores são meramente ilustrativos. Não haverá transferência de dinheiro, conversão de pontos em dinheiro levantável ou atribuição de benefícios comerciais reais. O objectivo é demonstrar a lógica de cálculo, acumulação e resgate.
8. Requisitos funcionais
⦁	RF01 — O sistema deve permitir o registo e a autenticação básica dos utilizadores.
⦁	RF02 — O sistema deve apresentar uma lista de campanhas fictícias com título e descrição.
⦁	RF03 — O utilizador deve poder registar uma doação de demonstração para uma campanha.
⦁	RF04 — O administrador deve poder confirmar uma doação simulada.
⦁	RF05 — O sistema deve atribuir pontos após a confirmação e apresentar o saldo do utilizador.
⦁	RF06 — O sistema deve apresentar uma lista de vouchers fictícios e permitir o resgate quando houver pontos suficientes.
⦁	RF07 — O sistema deve permitir ao administrador criar, editar ou desactivar campanhas de demonstração.
9. Requisitos não funcionais
⦁	RNF01 — A interface deve ser simples, clara e responsiva.
⦁	RNF02 — O sistema deve validar os dados introduzidos nos formulários.
⦁	RNF03 — As palavras-passe não devem ser guardadas em texto simples.
⦁	RNF04 — Cada utilizador deve aceder apenas às suas informações e operações.
⦁	RNF05 — O código deve estar organizado e ser suficientemente claro para manutenção e apresentação académica.
10. Utilizadores e intervenientes
⦁	Utilizador/doador: consulta campanhas, regista doações simuladas, acompanha pontos e resgata vouchers virtuais.
⦁	Administrador: gere campanhas e confirma os registos de doações da demonstração.
⦁	Orientador de estágio: acompanha o desenvolvimento e avalia o funcionamento e a documentação do projecto.
11. Linguagens de programação
11.1. HTML5
Será utilizado para estruturar as páginas, formulários, cartões de campanhas e área de recompensas.
11.2. CSS3
Será utilizado para definir o aspecto visual, a disposição dos elementos, as cores, a tipografia e a adaptação a diferentes tamanhos de ecrã.
11.3. JavaScript
Será utilizado no frontend para criar interacções, validar formulários e comunicar com o servidor através de pedidos HTTP.
11.4. Node.js
Será utilizado no backend para executar JavaScript no servidor, processar pedidos, implementar as regras da aplicação e gerir a comunicação com a base de dados.
11.5. SQL
Será utilizado para consultar e gerir os dados armazenados na base de dados relacional MySQL.
12. Tecnologias e ferramentas
12.1. Node.js e Express
Node.js permitirá executar o código JavaScript no servidor. Express será utilizado para criar as rotas e organizar os pedidos enviados pelo frontend.
12.2. MySQL
Será utilizado para guardar os utilizadores, campanhas, registos de doações, movimentos de pontos e vouchers de demonstração.
12.3. Visual Studio Code
Será o editor principal para escrever e organizar o código-fonte.
12.4. Figma
Será utilizado para planear e desenhar os protótipos das principais interfaces antes da implementação.
12.5. Git e GitHub
Serão utilizados para controlar as versões do código e guardar o repositório do projecto.
12.6. Postman ou Thunder Client
Poderá ser utilizado para testar as rotas da API do backend, verificando os pedidos e as respostas do servidor.
12.7. Navegador web
Será utilizado para executar e testar a aplicação, verificar a interface e identificar erros.
13. Modelo de dados preliminar
A base de dados poderá incluir as seguintes tabelas, ajustadas à dimensão do protótipo:
⦁	Utilizadores: identificador, nome, e-mail, palavra-passe protegida e perfil.
⦁	Campanhas: identificador, título, descrição e estado.
⦁	Doações: identificador, utilizador, campanha, valor fictício, estado e data.
⦁	Movimentos de pontos: identificador, utilizador, quantidade, motivo e data.
⦁	Vouchers: identificador, título, descrição, pontos necessários, código demonstrativo e estado.
14. Segurança básica
Mesmo sendo uma aplicação de demonstração, o sistema deverá validar os dados recebidos, proteger as palavras-passe, controlar o acesso às áreas administrativas e verificar o saldo antes de permitir o resgate. As operações de pontos deverão ser processadas no backend, evitando que o utilizador altere directamente o seu saldo no navegador.
15. Delimitação do projecto
O projecto será limitado a um protótipo académico para apresentação no estágio. Incluirá campanhas fictícias, registo simulado de doações, cálculo de pontos e vouchers virtuais.
Não serão desenvolvidos pagamentos reais, integração com bancos ou carteiras digitais, aplicação móvel nativa, contratos com lojas, descontos comerciais válidos, integração com sistemas de caixa ou conversão de pontos em dinheiro real. Estas funcionalidades ficam fora do âmbito por exigirem recursos, validações e acordos que não são necessários para demonstrar o conceito.
16. Testes previstos
⦁	Verificar o registo e o início de sessão.
⦁	Confirmar que uma doação simulada só gera pontos quando é confirmada.
⦁	Verificar se o saldo de pontos é actualizado correctamente.
⦁	Confirmar que o resgate não é permitido quando os pontos são insuficientes.
⦁	Verificar se os utilizadores não conseguem aceder à área administrativa sem autorização.
⦁	Testar os formulários e a apresentação em computador e telemóvel.
17. Resultados esperados
Espera-se obter uma aplicação web funcional e demonstrável, na qual seja possível consultar campanhas fictícias, registar doações de teste, acumular pontos e resgatar vouchers virtuais. O projecto permitirá demonstrar competências em frontend, backend com Node.js, integração com base de dados, validação e testes.
18. Conclusão
O projecto propõe uma plataforma demonstrativa que associa doações, pontos e recompensas virtuais, mostrando como a tecnologia pode incentivar a participação em iniciativas solidárias. Ao limitar o âmbito a operações simuladas, será possível desenvolver uma solução viável para o estágio, sem depender de pagamentos reais ou de parcerias comerciais efectivas.