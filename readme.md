# Demostracion Arquitectura MVC con breve proyecto de php con mysql

### Explicacion:
- Tenemos clase conexion en config y esta es requerida en los archivos necesarios.

- en la carpeta modelos tenemos el modeloBase y el modelo generico. el modelo base solo es una demostracion
  en la cual el generico puede heredar del base. pero en el demostramos el metodo listar con parametro tabla que es
  el nombre de la tabla donde lo vamos a utilizar todo con su respectivo constructor.

- en PartidoModelo tenemos los demas metodos con las consultas con interpolacion de variables.

- en las vistas tenemos un formulario con fraccion de codigo para enviar datos por post y se reciban en el controlador.

- en cada metodo del controlador se requiere el archivo, se hace una instancia de la clase y se requiere la vista para operar 
  los datos.

- el proyecto tiene plugins js para charts.

la idea es tener un concepto aplicativo de la arquitectura como tal por tanto no se describe conceptualmente.


Recordar crear la tabla con los siguientes datos.
``` 
idpartido,
nombre,
num_seguidores,
nombre_lider,
num_alcaldes,
num_concejales,
lema

en mysql
```

