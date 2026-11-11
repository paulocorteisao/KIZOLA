Documentação da Base de Dados
Plataforma de Doações Solidárias
1. Introdução
A base de dados da Plataforma de Doações Solidárias tem como finalidade armazenar e organizar as informações dos utilizadores, doações, validações, pontos acumulados, parceiros, vouchers e resgates.

A estrutura foi concebida para permitir o acompanhamento das doações realizadas pelos utilizadores, a validação dessas doações pelo administrador e a utilização dos pontos acumulados para resgatar vouchers.

A base de dados é composta por sete tabelas:
- utilizadores
- doacoes
- carteiras_pontos
- parceiros
- vouchers
- resgates_vouchers

2. Descrição das tabelas
2.1. Tabela utilizadores
A tabela utilizadores é responsável por armazenar os dados pessoais e de acesso dos utilizadores da plataforma.

Esta tabela permite identificar os doadores e os administradores, diferenciando-os através do campo tipo.
Campo	Descrição
id	Identificador único de cada utilizador.
nome	Nome completo do utilizador.
email	Endereço de correio electrónico utilizado no acesso à plataforma.
palavra_passe	Palavra-passe armazenada de forma segura através de hash.
telefone	Número de telefone do utilizador.
tipo	Define se o utilizador é doador ou administrador.
estado	Indica se a conta está activa ou inactiva.
data_registo	Data e hora em que o utilizador foi registado.

Finalidade: gerir as contas de acesso e identificar os responsáveis pelas operações realizadas na plataforma.
2.2. Tabela doacoes
A tabela doacoes armazena as informações referentes às doações registadas pelos utilizadores.

Cada doação está associada a um utilizador, permitindo identificar quem realizou a doação.
Campo	Descrição
id	Identificador único da doação.
valor	Valor monetário representativo da doação.
estado	Indica se a doação está pendente, aprovada ou rejeitada.
observacao	Informação adicional sobre a doação.
data_doacao	Data e hora do registo da doação.
utilizador_id	Chave estrangeira que identifica o utilizador responsável pela doação.

Finalidade: registar e acompanhar as doações realizadas na plataforma.


Finalidade: garantir o controlo administrativo das doações e manter o registo das decisões tomadas.
2.4. Tabela carteiras_pontos
A tabela carteiras_pontos armazena o saldo de pontos acumulados por cada utilizador.

Cada utilizador possui uma carteira de pontos, que é utilizada para consultar o saldo disponível para o resgate de vouchers.
Campo	Descrição
id	Identificador único da carteira.
saldo	Quantidade actual de pontos acumulados.
utilizador_id	Chave estrangeira que identifica o proprietário da carteira.

Finalidade: gerir o saldo de pontos dos utilizadores.

A relação entre esta tabela e a tabela utilizadores é de um para um, pois cada utilizador possui uma única carteira de pontos.
2.5. Tabela parceiros
A tabela parceiros armazena os dados das entidades comerciais que disponibilizam vouchers na plataforma.
Campo	Descrição
id	Identificador único do parceiro.
nome	Nome da entidade parceira.
descricao	Descrição das actividades ou dos serviços do parceiro.
logotipo	Caminho ou referência à imagem do logotipo.
estado	Indica se o parceiro está activo ou inactivo.

Finalidade: gerir as entidades que disponibilizam benefícios aos utilizadores através dos vouchers.
2.6. Tabela vouchers
A tabela vouchers armazena os vouchers disponibilizados para resgate na plataforma.

Cada voucher pode estar associado a um parceiro, permitindo identificar a entidade que oferece o benefício.
Campo	Descrição
id	Identificador único do voucher.
titulo	Nome ou título do voucher.
descricao	Descrição do benefício oferecido.
custo_pontos	Quantidade de pontos necessária para resgatar o voucher.
codigo	Código identificador do voucher.
validade	Data limite de validade do voucher.
estado	Indica se o voucher está disponível ou indisponível.
parceiro_id	Chave estrangeira que identifica o parceiro associado ao voucher.

Finalidade: disponibilizar benefícios que podem ser obtidos através dos pontos acumulados pelos utilizadores.
2.7. Tabela resgates_vouchers
A tabela resgates_vouchers regista as operações de resgate de vouchers realizadas pelos utilizadores.

Permite identificar o utilizador que efectuou o resgate, o voucher escolhido, os pontos utilizados e o estado da operação.
Campo	Descrição
id	Identificador único do resgate.
codigo_resgate	Código único atribuído ao resgate.
pontos_utilizados	Quantidade de pontos utilizada na operação.
estado	Indica se o resgate está pendente, concluído ou cancelado.
data_resgate	Data e hora em que o resgate foi registado.
utilizador_id	Chave estrangeira que identifica o utilizador que efectuou o resgate.
voucher_id	Chave estrangeira que identifica o voucher resgatado.

Finalidade: controlar e manter o registo dos resgates realizados na plataforma.

3. Descrição das relações entre as tabelas
As relações entre as tabelas permitem estabelecer ligações entre os dados armazenados, garantindo a organização e a integridade da base de dados.
3.1. Utilizadores e Doações
Relação: Um para Muitos (1:N)

Um utilizador pode realizar várias doações, mas cada doação pertence a um único utilizador.
- Tabela principal: utilizadores
- Tabela dependente: doacoes
- Chave estrangeira: utilizador_id
3.2. Doações e Validações de Doações
Relação: Um para Muitos (1:N)


Cada utilizador possui uma única carteira de pontos, e cada carteira pertence exclusivamente a um utilizador.
- Tabela principal: utilizadores
- Tabela dependente: carteiras_pontos
- Chave estrangeira: utilizador_id
3.5. Parceiros e Vouchers
Relação: Um para Muitos (1:N)

Um parceiro pode disponibilizar vários vouchers. Cada voucher pode estar associado a um único parceiro.
- Tabela principal: parceiros
- Tabela dependente: vouchers
- Chave estrangeira: parceiro_id
3.6. Utilizadores e Resgates de Vouchers
Relação: Um para Muitos (1:N)

Um utilizador pode realizar vários resgates de vouchers. Cada resgate pertence a um único utilizador.
- Tabela principal: utilizadores
- Tabela dependente: resgates_vouchers
- Chave estrangeira: utilizador_id
3.7. Vouchers e Resgates de Vouchers
Relação: Um para Muitos (1:N)

Um voucher pode ser resgatado várias vezes por diferentes utilizadores. Cada registo de resgate corresponde a um único voucher.
- Tabela principal: vouchers
- Tabela dependente: resgates_vouchers
- Chave estrangeira: voucher_id

4. Resumo das relações
Relação	Cardinalidade	Descrição
Utilizadores — Doações	1:N	Um utilizador realiza várias doações.
Doações — Validações	1:N	Uma doação pode ter vários registos de validação.
Utilizadores — Validações	1:N	Um administrador valida várias doações.
Utilizadores — Carteiras de Pontos	1:1	Cada utilizador possui uma carteira.
Parceiros — Vouchers	1:N	Um parceiro disponibiliza vários vouchers.
Utilizadores — Resgates	1:N	Um utilizador realiza vários resgates.
Vouchers — Resgates	1:N	Um voucher pode ser resgatado várias vezes.

5. Considerações finais
A estrutura da base de dados permite gerir os principais processos da Plataforma de Doações Solidárias, desde o registo dos utilizadores e das doações até à validação administrativa, acumulação de pontos e resgate de vouchers.

A utilização de chaves primárias e estrangeiras permite estabelecer relações entre as tabelas e assegurar a integridade dos dados.

É importante destacar que a tabela carteiras_pontos armazena apenas o saldo actual dos pontos. Como a tabela movimentos_pontos foi removida, não será possível consultar detalhadamente o histórico de entradas e saídas de pontos através da base de dados actual.

terminando 