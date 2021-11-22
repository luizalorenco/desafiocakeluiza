# CakePHP Application Skeleton

![Build Status](https://github.com/cakephp/app/actions/workflows/ci.yml/badge.svg?branch=master)
[![Total Downloads](https://img.shields.io/packagist/dt/cakephp/app.svg?style=flat-square)](https://packagist.org/packages/cakephp/app)
[![PHPStan](https://img.shields.io/badge/PHPStan-level%207-brightgreen.svg?style=flat-square)](https://github.com/phpstan/phpstan)

A skeleton for creating applications with [CakePHP](https://cakephp.org) 4.x.

The framework source code can be found here: [cakephp/cakephp](https://github.com/cakephp/cakephp).

## Installation

1. Download [Composer](https://getcomposer.org/doc/00-intro.md) or update `composer self-update`.
2. Run `php composer.phar create-project --prefer-dist cakephp/app [app_name]`.

If Composer is installed globally, run

```bash
composer create-project --prefer-dist cakephp/app
```

In case you want to use a custom app dir name (e.g. `/myapp/`):

```bash
composer create-project --prefer-dist cakephp/app myapp
```

You can now either use your machine's webserver to view the default home page, or start
up the built-in webserver with:

```bash
bin/cake server -p 8765
```

Then visit `http://localhost:8765` to see the welcome page.

## Update

Since this skeleton is a starting point for your application and various files
would have been modified as per your needs, there isn't a way to provide
automated upgrades, so you have to do any updates manually.

## Configuration

Read and edit the environment specific `config/app_local.php` and setup the 
`'Datasources'` and any other configuration relevant for your application.
Other environment agnostic settings can be changed in `config/app.php`.

## Layout

The app skeleton uses [Milligram](https://milligram.io/) (v1.3) minimalist CSS
framework by default. You can, however, replace it with any other library or
custom styles.

## Passo a Passo de como foi feito, e todos os itens necessarios para rodar o projeto

1- Estar com o Wamp funcionando.
2- Verificar se o módulo rewrite_module e as extensões mbstring e intl estão rodando. 
3- Verificar se o composer está ali (digitando composer no terminal). Instalar caso não esteja.
4- Criar uma pasta no C:\wamp64\www (nome usado no projeto: desafiocakeluiza).
5- Abrir a pasta criada anteriormente no VS Code, abrir o terminal e rodar o comando: composer create-project --prefer-dist cakephp/app [nome] (nome usado: desafiocakeluiza).
6- Criar um banco de dados (nome usado: bd_desafcakeluiza)
7- Abrir o arquivo app_local.php no VS Code, e configurar com o banco, informações mais ou menos na linha 47 (username, password, database).
8- Criar as tabelas onde o banco foi criado. Tabelas utilizadas:
                                                               usuarios (id, nome, email)
                                                               consoles (id, nome, lancamento, preco)
                                                               jogos (id, nome, lancamento, plataforma, preco, consoles_id) 
                                                               * os id serão auto increment e not null
                                                               * não é necessario fazer algo a mais no 'consoles_id' da tabela jogos, pois o cake reconhece que ela é uma foreign key ao nomear com o _id
9- Entrar no terminal e rodar os comandos no terminal: 
                                                   bin\cake bake all usuarios
                                                   bin\cake bake all consoles
                                                   bin\cake bake all jogos
                                                   * esses comandos fazem com que tudo feito nessas tabelas no banco seja criado também no projeto.
10- Para abrir o projeto no navegador, rodar o comando no terminal:
                                                                   bin\cake server
                                                                   * depois disso pode ser aberto como: http://localhost:8765
                                                                                                        http://localhost:8765/usuarios
                                                                                                        http://localhost:8765/jogos
                                                                                                        http://localhost:8765/consoles

- Não esquecer do:
                 cd desafiocakeluiza   
                 bin\cake server                                                                
                                          

