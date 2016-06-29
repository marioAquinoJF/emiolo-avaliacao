# Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

A aplicação foi desenvolvida em laravel como avaliação.

## Pontos a serem desenvovidos:

 1- Site Simples no máximo 2 paginas contendo Textos e Imagens e cadastro de usuários
 
 2- Painel Administrador onde eu consiga Cadastrar e editar os textos e imagens do site como também consultar os usuários que se cadastraram.

## APIs sugeridas

- https://api.stackexchange.com/docs

- https://developers.google.com/maps/get-started/?hl=pt-br

## Comentários

 O site usa o próprio sistema "Auth" do Laravel para a autenticação e consiste numa lista de perfís de usuários, na qual o 
usuário pode ver os demais perfís e editar o seu.
 
 Foi utilizado um código "embed" do GoogleMaps para exibr aa localização da Emiolo 
e, no perfíl de teste, foram recuperadas as informações de perfil do site StackOverflow por meio de uma requisição AJAX. 

## Instalação
    
Para a instalação:

Clone o repositório

Execute:

    composer install

    php artisan migrate --seed

Usuário e senha padrão:

    user@user.com
    123456

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).

