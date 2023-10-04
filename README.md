# tinker
En el terminal

```shell
php artisan tinker
$obj=new \App\Repo\ArtistRepo();
$obj->listarTodo();
```

# sobre las pruebas del codigo.

* Pruebas unitarias: Las pruebas unitarias son pruebas que a una funcion determinada se espera el mismo resultado.

* Prueba de integracion: Cuando las pruebas unitarias involucran otros factores, entonces es una prueba de integracion (ejemplo: base de datos).

La tecnologia para hacer las pruebas se llama PHPUnit.


## Ejercicio 4/10/2023

* Cree un proyecto nuevo
* Use la base de datos Chinook.
    * copiela en la carpeta database, y cambiele el nombre a database.sqlite
* Modifique el .env
* Cree un modelo para la tabla Customer.
* Cree una clase de repositorio para Customer llamado CustomerRepo (carpeta app\repo)
* Dentro de la clase de repositorio, cree una funcion para listar todos los clientes
* Y pruebelo en el tinker.

```shell
php artisan tinker
$obj=new \App\Repo\CustomerRepo();
$obj->listar();
```
* Luego, cree una funcion para listar ordenado por nombre.
* Cree otra funcion para listrar filtrado por pais (country) y pruebelo en el tinker.

* Cree un controlador llamado CustomerController con una funcion que liste por nombre pais
* Cree un enrutador que llame a esa funcion y que le pase como parametro el pais
> Route::get('/customer/{pais}'...)
> La funcion del controlador debe tener un argumento llamado nombreFn($pais) 


