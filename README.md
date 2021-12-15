# Crud de uma Biblioteca
Projeto para a faculdade

+ Crud Bibliotecas
+ Crud Atendentes
+ Crud Livros
+ Crud Categorias
+ Crud Reservas
+ Crud Usários

# Sql demo
### Há um sql demo em "bd/bibliotecaria.sql"
![mer/der](bd/der-bibliotecaria.png)
### Há um arquivo .uml e dmm para importar em "bd/\*.uml" "bd/\*.dmm"

# Pre requisitos
+ PHP 
    + Windows
        + Wampserver
        + Xampp
    + Linux 
        + install php-7.4+
        + install modulo ```php{version}-mysqli```
        + install MariaDB/MySQL
+ Um navegador atualizado

# Configurações
+ Crie um banco no seu SGBD
+ altere as configurações do arquivo `config.php`
    + `{HOST_NAME}` = Host do bd
    + `{USER_NAME}` = Usuário do bd
    + `{PASS_USER}` = Senha do usuário
    + `{BASE_NAME}` = Nome do Banco

    ```php  
    [...]

    define('HOST', '{HOST_NAME}');
    define('USER', '{USER_NAME}');
    define('PASS', '{PASS_USER}');
    define('BASE', '{BASE_NAME}');
    
    [...]

    ```
# MER/DER
![mer/der](bd/bibliotecaria.png)

# Menu Princial
![menu](img/menu.png)

# Index
![Main](img/main.png)

# Bibliotecas

## Cadastro
![Cadastro](img/b-cad.png)
## Lista
![Cadastro](img/b-lista.png)


# Atendentes

## Cadastro
![Cadastro](img/at-cad.png)
## Lista
![Cadastro](img/at-lista.png)

# Livros
## Cadastro
![Cadastro](img/li-cad.png)
## Lista
![Cadastro](img/li-lista.png)

## Botão "Disponveis", para ver as bibliotecas que contém o livro
![Cadastro](img/li-dispo.png)

# Categorias
## Cadastro
![Cadastro](img/cat-cad.png)
## Lista
![Cadastro](img/cat-lista.png)

# Reservas
## Cadastro
![Cadastro](img/re-cad.png)
## Lista
![Cadastro](img/re-lista.png)

# Usuários
## Cadastro
![Cadastro](img/us-cad.png)
## Lista
![Cadastro](img/us-lista.png)