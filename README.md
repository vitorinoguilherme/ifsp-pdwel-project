# Projeto Fórum Online

## IFSP - (PDWEL) - Programação Dinâmica para Web

## Autores

-   [Edilene Shizue](https://github.com/ShizueOnizuka) (SP3039005)
-   [Guilherme Vitorino](https://github.com/vitorinoguilherme) (SP3039439)
-   [Jesiel Gomes](https://github.com/JesielGomes) (SP3039081)

---

## Requisitos Mínimos

-   PHP >= 5.5.0 (versão utilizada 8.0.10)
-   PostgreSQL
-   Composer
-   Laravel 8
    -   BCMath PHP Extension
    -   Ctype PHP Extension
    -   Fileinfo PHP Extension
    -   JSON PHP Extension
    -   Mbstring PHP Extension
    -   OpenSSL PHP Extension
    -   PDO PHP Extension
    -   Tokenizer PHP Extension
    -   XML PHP Extension

## Acesso ao Sistema

Configurações para utilização do banco de dados PostgreSQL.

**php.ini**

```
extension=pdo_pgsql
extension=pgsql
```

**.env**

```
DB_CONNECTION=pgsql
DB_HOST= change-host
DB_PORT= 5432
DB_DATABASE= change-dbname
DB_USERNAME= change-user
DB_PASSWORD= change-password
```

Comandos para execução do projeto.

```
php artisan migrate     // Create tables on DB
yarn dev                // Compile changes in assets/styles
php artisan serve       // Start server
```
