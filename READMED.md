# Plataforma de Doações Solidárias

Uma plataforma web desenvolvida para incentivar a solidariedade, facilitar o acompanhamento de campanhas sociais e demonstrar como um sistema de pontos e recompensas pode estimular a participação comunitária em Angola.

## Sobre o Projeto

A Plataforma de Doações Solidárias é um projeto académico que procura aproximar pessoas de causas sociais através da tecnologia.

O sistema permite consultar campanhas solidárias, registar doações demonstrativas, acompanhar o histórico de contribuições e acumular pontos após a validação das doações pelo administrador. Os pontos podem ser utilizados para experimentar o processo de consulta e resgate de vouchers demonstrativos.

O projeto pretende demonstrar como a tecnologia pode contribuir para a organização de iniciativas solidárias, promovendo a transparência e a participação social.

## Objetivos

- Facilitar a consulta de campanhas solidárias.
- Permitir o registo e acompanhamento de doações.
- Implementar um processo de validação administrativa.
- Demonstrar um sistema de atribuição de pontos.
- Disponibilizar um catálogo demonstrativo de vouchers.
- Criar uma interface simples, intuitiva e responsiva.
- Aplicar conhecimentos de desenvolvimento web, APIs e bases de dados.

## Funcionalidades

### Utilizador / Doador
- Registo de conta e autenticação.
- Consulta de campanhas disponíveis.
- Registo de doações demonstrativas.
- Consulta do estado das doações.
- Histórico de contribuições.
- Consulta do saldo de pontos.
- Consulta de vouchers e simulação de resgate.

### Administrador
- Consulta e gestão de utilizadores.
- Criação e gestão de campanhas.
- Consulta e validação de doações.
- Aprovação ou rejeição de doações.
- Atribuição de pontos após aprovação.
- Gestão do catálogo demonstrativo de vouchers.

## Como funciona

1. O utilizador cria uma conta e inicia sessão.
2. Consulta as campanhas disponíveis.
3. Regista uma doação demonstrativa.
4. A doação fica pendente de validação.
5. O administrador aprova ou rejeita a doação.
6. Quando aprovada, a doação é registada e os pontos são atribuídos de acordo com as regras do sistema.
7. O utilizador consulta os pontos acumulados e pode experimentar o processo demonstrativo de resgate de vouchers.

## Tecnologias utilizadas

### Frontend
- HTML5 — estrutura das páginas.
- CSS3 — estilos e responsividade.
- JavaScript — interatividade e comunicação com a API.

### Backend
- Node.js — ambiente de execução JavaScript.
- Express.js — criação das rotas e da API REST.

### Base de dados
- MySQL — armazenamento dos utilizadores, campanhas, doações, pontos e vouchers.

### Ferramentas de desenvolvimento
- Visual Studio Code.
- Git e GitHub.
- diagrams.net ou PlantUML para diagramas UML.




## Pré-requisitos

Antes de executar o projeto, instala:

- [Node.js](https://nodejs.org/)
- [MySQL Community Server](https://dev.mysql.com/downloads/mysql/)
- [Visual Studio Code](https://code.visualstudio.com/)
- Git, para controlo de versões.

## Instalação e execução

### 1. Clonar o repositório

```bash
git clone URL_DO_TEU_REPOSITORIO
cd plataforma-doacoes
```

Substitui `URL_DO_TEU_REPOSITORIO` pelo endereço real do teu repositório GitHub.

### 2. Configurar a base de dados

1. Inicia o servidor MySQL.
2. Cria a base de dados.
3. Executa o script `database/schema.sql`, caso já esteja implementado.
4. Opcionalmente, executa `database/seed.sql` para inserir dados demonstrativos.

Exemplo:

```sql
CREATE DATABASE plataforma_doacoes;
```

### 3. Configurar o backend

Entra na pasta do backend:

```bash
cd backend
npm install
```

Se o ficheiro `package.json` ainda não existir, inicializa o projeto com `npm init -y` e instala as dependências necessárias.

```bash
npm install express mysql2 dotenv cors
```

Cria um ficheiro `.env` na pasta `backend/`, seguindo o modelo de `.env.example`:

```env
PORT=3000
DB_HOST=localhost
DB_USER=root
DB_PASSWORD=
DB_NAME=plataforma_doacoes
```

Utiliza as credenciais correspondentes à tua instalação do MySQL. Não publiques o ficheiro `.env` no GitHub.

Inicia o servidor através do script definido no `package.json`. Por exemplo, se existir o script `start`:

```bash
npm start
```

### 4. Executar o frontend

Abre o ficheiro `frontend/index.html` no navegador ou utiliza a extensão Live Server no Visual Studio Code.

Se o backend estiver em execução, configura o JavaScript do frontend para comunicar com a API no endereço correspondente, por exemplo:

```text
http://localhost:3000
```

A execução completa depende de as páginas, rotas, tabelas e configurações necessárias já estarem implementadas.

## Regras do sistema de pontos

A atribuição de pontos ocorre apenas após a aprovação da doação pelo administrador.

A taxa de conversão, os limites e as regras de resgate devem ser definidos na aplicação. Se for utilizada a regra demonstrativa de 1 ponto por cada 100 Kz, essa regra deve ser aplicada de forma consistente e documentada.

## Segurança

- As palavras-passe devem ser armazenadas com hash seguro.
- As rotas administrativas devem exigir autenticação e autorização.
- Os dados recebidos devem ser validados no backend.
- As consultas à base de dados devem utilizar parâmetros para reduzir o risco de SQL injection.
- As credenciais e chaves secretas devem permanecer em variáveis de ambiente.
- Os pontos devem ser atribuídos no servidor, nunca confiando apenas nos valores enviados pelo frontend.

## Estado do Projeto

**Estado:** Projeto académico demonstrativo em desenvolvimento.

As doações, os pontos e os vouchers não representam necessariamente transações financeiras ou benefícios comerciais reais. A disponibilização de descontos efetivos depende da existência de parcerias confirmadas e de regras operacionais adequadas.

## Contribuição

Para contribuir para o projeto:

1. Cria um fork do repositório.
2. Cria uma branch para a tua funcionalidade.
3. Implementa e testa as alterações.
4. Envia um pull request com uma descrição clara.

## Autor

Desenvolvido como projeto académico de desenvolvimento web, com foco na solidariedade, na tecnologia e no impacto social em Angola.

## Licença

A licença do projeto deverá ser definida pelo autor. Até à sua definição, não se deve presumir que o código está disponível sob uma licença de código aberto.