# Manual de Instruções - Sistema de Gerenciamento de Biblioteca

## 1. Introdução

### 1.1. Objetivo do Sistema
O Sistema de Gerenciamento de Biblioteca é uma aplicação web desenvolvida para gerenciar o acervo de livros, os usuários da biblioteca e os empréstimos realizados. Este sistema foi projetado para bibliotecários e usuários, oferecendo uma interface simples para cadastrar livros, gerenciar usuários e controlar os empréstimos de maneira eficiente.

### 1.2. Tecnologias Utilizadas
- **Backend**: PHP com Laravel
- **Banco de Dados**: PostgreSQL
- **Deploy**: DigitalOcean, Laravel Forge, AWS
- **Monitoramento**: Sentry, New Relic, Monolog
- **Controle de Versão**: GitHub
- **Outros Serviços**: AWS S3, Google Cloud Storage, Google Maps, Email Services

### 1.3. Metodologia de Desenvolvimento
O desenvolvimento do sistema segue uma metodologia ágil, com reuniões quinzenais para revisões e ajustes contínuos de acordo com as necessidades do projeto.

## 2. Funcionalidades Principais

### 2.1. Cadastro de Usuários

#### 2.1.1. Descrição
Esta funcionalidade permite que o bibliotecário cadastre novos usuários no sistema. Os usuários podem ser usuarios comuns ou bibliotecarios da instituição.

#### 2.1.2. Passos para Cadastrar um Usuário
1. Acesse a página de Cadastro de Usuários.
2. Preencha os campos obrigatórios: Nome, E-mail, Senha, Endereço e Data de Nascimento.
3. Clique em "Salvar" para concluir o cadastro.

#### 2.1.3. Observações
- O bibliotecário tem acesso ao CRUD completo (criar, ler, atualizar e deletar) de livros e empréstimos.
- O sistema exige que o e-mail seja único no cadastro.

### 2.2. Cadastro de Livros

#### 2.2.1. Descrição
O bibliotecário pode adicionar novos livros ao acervo da biblioteca através desta funcionalidade.

#### 2.2.2. Passos para Cadastrar um Livro
1. Acesse a página de Cadastro de Livros.
2. Preencha os campos obrigatórios: Título, Autor, Categoria, e Disponibilidade (Disponível ou Indisponível).
3. Clique em "Salvar" para concluir o cadastro.

#### 2.2.3. Observações
- A disponibilidade do livro pode ser definida no momento do cadastro ou alterada posteriormente.
- O campo de disponibilidade possui duas opções: "Disponível" e "Indisponível".

### 2.3. Empréstimo de Livros

#### 2.3.1. Descrição
Esta funcionalidade permite ao bibliotecário registrar o empréstimo de um livro para um usuário.

#### 2.3.2. Passos para Realizar um Empréstimo
1. Acesse a página de Empréstimos.
2. Selecione o usuário que está realizando o empréstimo.
3. Selecione o livro que será emprestado.
4. O sistema define automaticamente a data de devolução para 7 dias após a data do empréstimo.
5. Clique em "Confirmar Empréstimo" para registrar.

#### 2.3.3. Observações
- Ao registrar um empréstimo, o sistema altera automaticamente o status do livro para "Indisponível".
- O status do empréstimo será "Em andamento" até a devolução do livro.

### 2.4. Devolução de Livros

#### 2.4.1. Descrição
O bibliotecário pode registrar a devolução de um livro, atualizando o status no sistema.

#### 2.4.2. Passos para Registrar a Devolução
1. Acesse a página de Empréstimos.
2. Localize o empréstimo correspondente ao livro a ser devolvido.
3. Clique no botão "Registrar Devolução".
4. O sistema atualizará automaticamente o status do livro para "Disponível" e o status do empréstimo para "Devolvido".

#### 2.4.3. Observações
- A devolução do livro altera a disponibilidade para "Disponível" no cadastro de livros.

## 3. Interface do Sistema

### 3.1. Páginas Públicas
- **Home**: Página inicial com informações sobre a biblioteca.
- **Login**: Página para acesso ao sistema.
- **Cadastro**: Página para novos usuários se cadastrarem no sistema.

### 3.2. Páginas Internas (Protegidas por Autenticação)
- **Dashboard do Bibliotecário**: Painel principal onde o bibliotecário pode acessar todas as funcionalidades do sistema.
- **Cadastro de Usuários**: Página para gerenciar usuários.
- **Livros**: Página para gerenciar o acervo da biblioteca.
- **Empréstimos**: Página para registrar e gerenciar empréstimos e devoluções.

## 4. Relatórios

### 4.1. Relatório de Empréstimos

#### 4.1.1. Descrição
Permite ao bibliotecário visualizar todos os empréstimos realizados, podendo filtrar por usuário, livro, data de empréstimo, e status do empréstimo.

### 4.2. Passos para Gerar um Relatório
1. Acesse a página de Relatórios.
2. Selecione os filtros desejados.
3. Clique em "Gerar Relatório".
