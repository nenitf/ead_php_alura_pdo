# ead_php_alura_pdo

> Projeto referente a [este](https://cursos.alura.com.br/course/php-pdo-banco-de-dados) curso.

## Setup inicial

1. Habilite as extensões necessárias
```sh
php -r "var_dump([
    'postgresql' => extension_loaded('pgsql'),
    'pdo' => extension_loaded('pdo'),
    'integração postgresql-pdo' => extension_loaded('pdo_pgsql')
]);"

# caso precise habilitar alguma, edite seu php.ini que se encontra em:
# php --ini
```
2. Crie o autoload: ``composer du``
3. Crie o banco de dados
```sh
createdb -U postgres ead_php_alura_pdo

# dicas do postgresql no terminal:
# Entrar
psql -U postgres -d ead_php_alura_pdo

# \?                    exibe ajuda
# \q                    sai
# \l                    lista databases
# \c <databasename>     conecta uma database
# \dt                   lista tables da database
# \d <tablename>        descreve uma tabela
```

## Execução dos scripts

- Terminal com `php nomedoarquivo.php`
- Vim com `:!php %`
- Browser com servidor embutido
    1. Levantar servidor pelo terminal com `php -S localhost:8001`
    2. Acessar em `localhost:8001/nomedoarquivo.php`
