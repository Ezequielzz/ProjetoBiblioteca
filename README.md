# Sistema de Gerenciamento de Biblioteca

## Escopo

### Objetivo Geral
Nosso objetivo é oferecer uma plataforma intuitiva e acessível para gerenciar as operações essenciais de uma biblioteca, como empréstimos e devoluções, com foco na simplicidade e eficiência. Projetado para atender usuários de todas as faixas etárias, garantindo uma experiência amigável tanto para crianças quanto para adultos. A plataforma facilitará o acesso ao catálogo de livros, agilizará o processo de empréstimo e devolução, além de permitir que os usuários acompanhem suas atividades e histórico.

### Publico-Alvo
Usuários de todas as faixas etárias.

## Objetivos SMART

### Específico:

   - Implementar um sistema de cadastro e login intuitivo para usuários de todas as faixas etárias, permitindo acesso a funcionalidades essenciais como empréstimos, devoluções e consulta ao catálogo.
   - Desenvolver uma busca avançada que permita aos usuários localizar livros por título, autor, categoria, ou disponibilidade, e possibilite alocar livros diretamente pelo portal.
   - Criar uma interface simplificada para que os usuários visualizem facilmente o status de empréstimos e prazos de devolução.

### Mensurável:

   - Atingir 500 empréstimos realizados nos primeiros três meses após o lançamento.
   - Garantir que 80% dos usuários cadastrados façam pelo menos um empréstimo nos primeiros três meses.
   - Alcançar 3.000 buscas de livros realizadas dentro de dois meses após o lançamento.
   - Obter um índice de satisfação de 85% nos feedbacks coletados após o primeiro mês de uso.

### Atingível:

   - Concluir o desenvolvimento e testes das funcionalidades principais (empréstimos, devoluções, cadastro, busca avançada e reservas) em até quatro meses, com foco em usabilidade para diferentes faixas etárias.
   - Capacitar 100% da equipe da biblioteca para utilizar o sistema em até um mês antes do lançamento, com treinamento e materiais de apoio.
   - Garantir que o processo de empréstimo possa ser concluído em poucos cliques para maior simplicidade.

### Relevante:

   - Oferecer uma plataforma que seja acessível para usuários com diferentes níveis de habilidade digital, proporcionando uma experiência inclusiva para crianças, adultos e idosos.
   - Implementar notificações automatizadas via e-mail ou SMS para lembretes de devolução e confirmação de reservas até o segundo mês após o lançamento, incentivando a regularidade no uso do sistema.
   - Aumentar o engajamento dos usuários, mantendo-os informados sobre novidades, eventos e livros recém-adicionados ou livros que precisam ser devolvidos.

### Temporal:

   - Lançar a versão final do sistema em seis meses, com todas as funcionalidades básicas, acessibilidade validada e equipe treinada.
   - Adicionar uma funcionalidade de relatórios e análises até o quinto mês, permitindo que a administração monitore o desempenho do sistema e identifique padrões de uso e preferências dos usuários.
   - Iniciar a coleta de feedback dos usuários após o primeiro mês de lançamento, com ciclos de melhorias a cada dois meses baseados nas respostas.

## Recursos:

   - **IDE:** Visual Studio Code
   - **Banco de Dados**: PostgreSQL
   - **Linguagem/Framework:** PHP com Laravel
   - **Equipes:** Frontend, Backend, Segurança
   - **Serviços de Hospedagem:** DigitalOcean, AWS, Laravel Forge
   - **Serviços de Monitoramento:** Sentry, New Relic, Monolog
   - **Comunicação/Colaboração:** GitHub, Teams
   - **Backup:** AWS S3, Google Cloud Storage
   - **APIs Externas:** Google Maps, Email Services

## Análise de Riscos:

### 1. Riscos Técnicos

   - **Risco:** Falhas no desempenho do sistema (lentidão, travamentos).
       - **Causa:** Código mal otimizado, infraestrutura de servidor inadequada.
       - **Impacto:** Insatisfação dos usuários, desistência no uso do sistema, sobrecarga de suporte.
       - **Probabilidade:** Média.
       - **Mitigação:** Realizar testes de carga e desempenho, otimizar o código desde o início e garantir que a infraestrutura suporte o número esperado de usuários.

   - **Risco:** Incompatibilidade com diferentes dispositivos ou navegadores.
       - **Causa:** Falta de testes abrangentes em diferentes plataformas e navegadores.
       - **Impacto:** Usuários com dificuldade de acesso ou funcionalidade limitada.
       - **Probabilidade:** Média.
       - **Mitigação:** Testar em múltiplos dispositivos e navegadores, garantir um design responsivo e cross-browser.

   - **Risco:** Problemas de segurança e vulnerabilidades.
       - **Causa:** Falta de implementação de práticas de segurança como criptografia de dados, autenticação forte, etc.
       - **Impacto:** Vazamento de dados, perda de confiança dos usuários, penalidades legais.
       - **Probabilidade:** Alta.
       - **Mitigação:** Implementar boas práticas de segurança desde o início (SSL, criptografia de senhas, autenticação de dois fatores), realizar auditorias de segurança regulares.

### 2. Riscos de Cronograma

   - **Risco:** Atrasos no desenvolvimento.
       - **Causa:** Subestimação do esforço necessário para implementar certas funcionalidades, problemas inesperados durante o desenvolvimento.
       - **Impacto:** Não cumprimento do prazo de lançamento, necessidade de cortes de funcionalidades.
       - **Probabilidade:** Média.
       - **Mitigação:** Realizar uma estimativa detalhada das tarefas, adotar uma metodologia ágil com ciclos curtos de desenvolvimento e revisão contínua dos prazos.

   - **Risco:** Falta de tempo para testes.
       - **Causa:** O desenvolvimento toma mais tempo do que o previsto, deixando menos tempo para testes.
       - **Impacto:** Lançamento de um sistema com bugs e falhas.
       - **Probabilidade:** Média.
       - **Mitigação:** Alocar tempo suficiente para testes no cronograma inicial e priorizar testes contínuos ao longo do desenvolvimento.

### 3. Riscos de Recursos Humanos

   - **Risco:** Rotatividade na equipe de desenvolvimento.
       - **Causa:** Saída de desenvolvedores-chave durante o projeto.
       - **Impacto:** Perda de conhecimento, atraso no projeto.
       - **Probabilidade:** Média.
       - **Mitigação:** Documentar processos e código detalhadamente, promover um ambiente de trabalho saudável para evitar turnover (taxa de rotatividade de colaboradores de uma empresa) e garantir que a equipe seja cross-funcional.

   - **Risco:** Falta de habilidades específicas.
       - **Causa:** Equipe sem experiência suficiente em áreas críticas como usabilidade ou segurança.
       - **Impacto:** Entrega de um sistema que não atenda completamente às necessidades dos usuários ou que tenha vulnerabilidades.
       - **Probabilidade:** Média.
       - **Mitigação:** Investir em treinamento contínuo e, se necessário, contratar especialistas externos para áreas críticas.

### 4. Riscos Operacionais

   - **Risco:** Resistência dos usuários à adoção do novo sistema.
       - **Causa:** Familiaridade com processos antigos, dificuldade de adaptação a novas tecnologias.
       - **Impacto:** Baixa adoção e utilização do sistema, necessidade de suporte intensivo.
       - **Probabilidade:** Alta.
       - **Mitigação:** Realizar campanhas de treinamento e sensibilização, fornecer suporte inicial intensivo e tornar o sistema intuitivo.

   - **Risco:** Problemas de integração com sistemas legados (desatualizados) ou bases de dados existentes.
       - **Causa:** Incompatibilidades entre o novo sistema e sistemas legados.
       - **Impacto:** Perda de dados ou falhas na migração.
       - **Probabilidade:** Média.
       - **Mitigação:** Realizar testes de integração antes da migração completa, planejar uma migração em fases, com backups regulares.

### 5. Riscos Financeiros

   - **Risco:** Estouro do orçamento.
       - **Causa:** Necessidade de contratações adicionais, compra de novos equipamentos, ou atraso que aumenta os custos.
       - **Impacto:** Comprometimento dos recursos financeiros, necessidade de cortes de escopo.
       - **Probabilidade:** Média.
       - **Mitigação:** Estabelecer um orçamento detalhado com margens para contingências, monitorar regularmente os gastos e revisar o escopo conforme necessário.

### 6. Riscos Legais e de Conformidade

   - **Risco:** Não conformidade com leis e regulamentações (LGPD, por exemplo).
       - **Causa:** Falta de atenção às exigências legais de proteção de dados e privacidade.
       - **Impacto:** Multas, perda de reputação e confiança dos usuários.
       - **Probabilidade:** Média.
       - **Mitigação:** Consultar especialistas legais e implementar práticas de conformidade desde o início, como consentimento explícito para coleta de dados e políticas de privacidade claras.

### 7. Riscos de Usuários e Experiência

   - **Risco:** Baixa usabilidade e experiência do usuário.
       - **Causa:** Interface complexa ou mal desenhada, falta de testes com diferentes faixas etárias.
       - **Impacto:** Frustração dos usuários, desistência no uso do sistema.
       - **Probabilidade:** Alta.
       - **Mitigação:** Conduzir testes de usabilidade com amostras representativas do público-alvo e ajustar a interface com base no feedback.

## Cronograma de 6 Meses:
### Mês 1: Planejamento e Levantamento de Requisitos

   - **Semana 1-2:**
       - Reuniões iniciais para levantamento de requisitos com stakeholders (equipe da biblioteca, administradores, usuários).
       - Definição do escopo detalhado e funcionalidades principais.
       - Análise das necessidades de acessibilidade para diferentes faixas etárias.
   - **Semana 3-4:**
       - Criação dos fluxos de usuários e mapeamento das jornadas.
       - Desenvolvimento de wireframes e protótipos da interface.
       - Revisão e validação dos requisitos com a equipe e stakeholders.

### Mês 2: Arquitetura e Design

   - **Semana 5-6:**
       - Definição da arquitetura do sistema (backend, frontend, banco de dados).
       - Escolha e configuração das tecnologias e ferramentas (IDE, banco de dados, hospedagem).
       - Finalização do design da interface com foco em usabilidade e acessibilidade.
   - **Semana 7-8:**
       - Criação dos ambientes de desenvolvimento e configuração do repositório (GitHub).
       - Início da implementação da estrutura de banco de dados e integração inicial.

### Mês 3: Desenvolvimento das Funcionalidades Principais (Parte 1)

  - ** Semana 9-10:**
       - Desenvolvimento dos módulos de cadastro e login de usuários.
       - Implementação das funcionalidades de empréstimos e devoluções.
       - Testes unitários e integração contínua.
   - **Semana 11-12:**
       - Desenvolvimento do sistema de busca e reserva de livros.
       - Implementação de funcionalidades de notificação (e-mail/SMS) para lembretes.
       - Primeiros testes de usabilidade com grupos de usuários de diferentes faixas etárias.

### Mês 4: Desenvolvimento das Funcionalidades Principais (Parte 2)

   - **Semana 13-14:**
       - Desenvolvimento da interface para visualização de histórico e status de empréstimos.
       - Integração de APIs externas (Google Maps, e-mail).
       - Testes de segurança e auditorias de vulnerabilidades.
   - **Semana 15-16:**
       - Refinamento do design responsivo para diferentes dispositivos.
       - Ajustes finais na experiência do usuário (UX) com base em feedback dos testes.
       - Conclusão dos testes unitários e de integração.

### Mês 5: Testes, Capacitação e Preparação para Lançamento

   - **Semana 17-18:**
       - Testes finais de desempenho, carga e compatibilidade cross-browser.
       - Capacitação da equipe da biblioteca (treinamento e manuais de uso).
       - Implementação de relatórios e dashboards de análise de uso.
   - **Semana 19-20:**
       - Revisão e correção de bugs.
       - Configuração de backups automáticos e plano de contingência.
       - Testes de migração de dados (se aplicável).

### Mês 6: Lançamento e Pós-Lançamento

   - **Semana 21-22:**
       - Lançamento do sistema para o público.
       - Monitoramento ativo do uso e desempenho nos primeiros dias.
       - Campanha de divulgação interna e suporte intensivo inicial.
   - **Semana 23-24:**
       - Coleta de feedback dos usuários e análise de métricas.
       - Planejamento de ciclos de melhoria contínua com base no feedback.
       - Atualização do roadmap para futuras melhorias e novas funcionalidades.

### Considerações Finais

  - **Reuniões** quinzenais para revisão do progresso e ajustes no cronograma conforme necessário.
  - **Metodologia ágil** para permitir flexibilidade durante o desenvolvimento e a adaptação a imprevistos.

## Diagrama de Classe

<div align="center">
    <img src="/BibliotecaIMG/Diagrama Classes Biblioteca.png">
</div>

## Diagrama de Uso
<div align="center">
    <img src="/BibliotecaIMG/Diagrama Uso Biblioteca.png">
</div>

## Diagrama de Uso
<div align="center">
    <img src="/BibliotecaIMG/Diagrama Fluxo Biblioteca.png">
</div>
