<img src="https://github.com/giansb/cadastro-dev/assets/107221898/52f45624-036d-40fa-9ca6-ad52af2d7c61" width="100%"/>


# Documentação do Projeto - CRUD de Cadastro de Desenvolvedores (Padrão MVC)

Este projeto consiste em uma aplicação web desenvolvida em PHP seguindo o padrão de arquitetura MVC (Model-View-Controller) para realizar operações básicas de CRUD (Create, Read, Update, Delete) para cadastro de desenvolvedores. A aplicação utiliza um banco de dados SQL para armazenar informações dos usuários, incluindo campos como CPF, nome, telefone, e-mail, nome do perfil no GitHub e o código do cargo. Além disso, há uma tabela para os cargos, que é referenciada através de uma chave estrangeira na tabela de usuários.

![image](https://github.com/giansb/cadastro-dev/assets/107221898/accfa72c-4367-4586-ab6b-091696e0e800)

## Tecnologias Utilizadas

- PHP
- HTML
- CSS
- MySQL (ou outro banco de dados SQL compatível)

## Funcionalidades

1. **Adicionar Desenvolvedor:**

![image](https://github.com/giansb/cadastro-dev/assets/107221898/206381a3-0e91-4686-99f0-de7ec7ef0b11)

   
   - Permite adicionar um novo desenvolvedor ao sistema, informando os seguintes dados:
     - CPF
     - Nome
     - Telefone
     - E-mail
     - Nome do perfil no GitHub (para referência da imagem do perfil)
     - Código do cargo

2. **Editar Desenvolvedor:**
   - Permite editar os dados de um desenvolvedor existente no sistema.

3. **Listar Desenvolvedores:**

![image](https://github.com/giansb/cadastro-dev/assets/107221898/39b3c56d-dbd8-40ce-8a0d-2e9f32002ca7)

   - Lista todos os desenvolvedores cadastrados, exibindo as seguintes informações:
     - CPF
     - Nome
     - Telefone
     - E-mail
     - Foto do perfil (referenciada através de um link)
     - Cargo

4. **Deletar Desenvolvedor:**
   - Permite excluir um desenvolvedor do sistema.

## Estrutura do Banco de Dados

1. **Tabela de Usuários (`usuarios`):**
   - `id` (chave primária, auto-incremento)
   - `cpf` (varchar)
   - `nome` (varchar)
   - `telefone` (varchar)
   - `email` (varchar)
   - `git` (varchar) - Nome do perfil no GitHub (utilizado para referência da imagem do perfil)
   - `cargo_id` (chave estrangeira referenciando `id` da tabela de cargos)

2. **Tabela de Cargos (`cargos`):**
   - `id` (chave primária, auto-incremento)
   - `nome` (varchar)

## Estrutura MVC

O projeto segue a estrutura de arquitetura MVC, organizado da seguinte forma:

- **Modelo (`models/`):** Contém as classes responsáveis pela interação com o banco de dados.
- **Visão (`views/`):** Contém os arquivos HTML responsáveis pela apresentação dos dados.
- **Controlador (`controllers/`):** Contém os controladores PHP que respondem às requisições do usuário e interagem com os modelos e visões.

## Instalação e Uso

1. Clone o repositório para sua máquina local.
2. Configure o arquivo de conexão com o banco de dados (`conexao.php`) com as credenciais apropriadas.
3. Importe o arquivo SQL fornecido (`cadastro.sql`) para criar a estrutura do banco de dados.
4. Execute a aplicação em um servidor web compatível com PHP.

## Observações

- Certifique-se de que o servidor web tenha permissões de escrita para realizar operações de CRUD no banco de dados, se necessário.
- A inclusão da foto do perfil do desenvolvedor na lista é feita através de um link fornecido no campo `git`, que deve apontar para a imagem do perfil no formato `.png`.
- Esta documentação fornece uma visão geral do projeto e dos requisitos necessários para executá-lo. Para informações detalhadas sobre implementação e funcionamento interno, consulte o código fonte e os comentários relevantes dentro do mesmo.

## Autor

[giansb] - [gianbraga1802@gmail.com]
