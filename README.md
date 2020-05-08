# Laravel Udemy
## Curso laravel

Curso de Laravel completo

# Instruções pacotes node_modules

Instale com *npm install NOME*

## Instalando Jquery 
npm install jquery


## Instalando Bootstrap 
npm install bootstrap

## Configurando webpack.mix.js

No **webpack.mix.js** coloque 

```
mix
	.sass('resources/views/scss/style.scss', 'public/site/style.css')
	.scripts('node_modules/jquery/dist/jquery.js', 'public/site/jquery.js')
	.scripts('node_modules/bootstrap/dist/js/bootstrap.bundle.js', 'public/site/bootstrap.js');	
```

Após isto rodar o **npm** para compilar as dependencias que estão anotadas no **package.json**

```
npm run dev
```
## Uso dos recursos

```
{{asset('site/bootstrap.js')}}
```

# Tinker

## Usando o Tinker pelo terminal

Iniciando o tiker, necessita parar o **namespace**
```
dumon@Dell:~/Documentos/laravel_udemy$ php artisan tinker
Psy Shell v0.10.3 (PHP 7.4.3 — cli) by Justin Hileman
>>> use \App\Brand;
>>> Brand::all()
=> Illuminate\Database\Eloquent\Collection {#3039
     all: [],
   }
>>> 
```
Salvando um registro, com o save()
```
>>> $brand = new Brand;
=> App\Brand {#3028}
>>> $brand->name = "Toshiba"
=> "Toshiba"
>>> $brand->save()
=> true
```
Buscando o registro salvo na base de dados, com o all()
```
>>> Brand::all()
=> Illuminate\Database\Eloquent\Collection {#3043
     all: [
       App\Brand {#3042
         id: 1,
         name: "Toshiba",
         created_at: "2020-05-08 19:07:22",
         updated_at: "2020-05-08 19:07:22",
       },
     ],
   }

```
