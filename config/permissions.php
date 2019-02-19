<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Todas as permissões disponíveis no projeto
    |--------------------------------------------------------------------------
    |
    | Este arquivo é pra guardar as possíveis permissões que serão utilizadas
    | pelos papéis. Assim não precisamos cadastrar uma a uma durante o desenvolvimento,
    | já que serão fixas por projeto.
    | O formato do array abaixo é para auxiliar na hora da listagem.
    | O que é utilizado mesmo é a informação "inserir entidade", "excluir entidade" ...
    | Convenção: tudo minúsculo, entidade sem acentos e no plural, exemplo: "inserir usuarios"
    | Referência do pacote utilizado: https://github.com/mostafamaklad/laravel-permission-mongodb/
    |
    */

    'itens' => [

    	'Usuários' => [
	        'Insert'    => 'insert users',
	        'Edit'      => 'edit users',
	        'Delete'    => 'delete users',
	        'Show'      => 'show users',
        ],
        
        'Papéis' => [
	        'Insert'    => 'insert roles',
	        'Edit'      => 'edit roles',
	        'Delete'    => 'delete roles',
	        'Show'      => 'show roles',
	    ],
    ],

];
