## comando git
git checkout -b "001" && git add . && git commit -m "001"

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

# Aula 22

## 1. Cria model e migration para usuário(user)

````
php artisan make:model User -m
````

## 2. Cria model e migration para empresa(company)

````
php artisan make:model Company -m
````

## 2. Cria model e migration para fila(queue)

````
php artisan make:model Queue -m
````
