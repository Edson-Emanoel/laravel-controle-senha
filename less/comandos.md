# Configuração do projeto depois de fazer o `git clone`.

## 1. Certifique-se que o projeto está dentro da pasta root do laragon

```` exemplo de pasta root
C:\laragon\www
````

## 2. Rode o comando para instalar as dependências do composer

````
composer install
````

## 3. Rode o comando para criar a chave do app

````
php artisan key:generate
````

## 4. Certifique-se também de rodar os comandos, para criar a tabela de sessão(session) e a migration, respectivamente

````
php artisan session:table
````

````
php artisan migrate
````

# Explicando um pouco do fluxo de arquivos

## 1. criar view com make make
php artisan make:view teste

## 2. instalar o tailwindcss
```
npm install tailwindcss @tailwindcss/vite
```

## 3. criar a view blade configurar o  projeto
> * na pastas criou usando o make
```
resources/views/teste.blade.php
```

```
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="h-full bg-slate-800 w-full">
    <h1 class="text-3xl text-red-500 font-bold underline">Hello World!</h1>
</body>
</html>
```

> * rodar o node
```
npm run dev
```

## 4. Configura a rota
```
Route::get('/test', function() {
    return view('teste');
});
```

# "Mapeamento" das aulas

## Aula 22 - Criando a migration e model para o Empresas

### Cria model e migration para usuário(user)

````
php artisan make:model User -m
````

## Aula 23 - Criando a migration e model para o Empresas

### Cria model e migration para empresa(company)

````
php artisan make:model Company -m
````

## Aula 24 - Criando a migration e model para a Fila

### Cria model e migration para fila(queue)

````
php artisan make:model Queue -m
````

## Aula 25 - Criando a migration e model para o Ticket da Fila

### Cria model e migration para o ticket da fila(queue ticket)

````
php artisan make:model QueueTicket -m
````

## Aula 27 - Executando as migrations

### Comando para rodar as migrations

````
php artisan migrate
````

## Aula 28 - Seeders Parte 1 (UserSeeder)

### Comando para criar o Seeder para User

````
php artisan make:seeder UserSeeder
````

### Comando para rodar o UserSeeder

````
php artisan db:seed --class=UserSeeder
````

## Aula 29 - Seeders Parte 2 (Empresas)

### Comando para criar o Seeder para Company

````
php artisan make:seeder CompanySeeder
````

### Comando para rodar o CompanySeeder

````
php artisan db:seed --class=CompanySeeder
````

## Aula 30 - Criando pagina Layout para Visitantes(Guests)

### Comando para criar o componente `php artisan make:component layouts.guest-layout --view`
