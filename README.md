# CodeIgniter template smarty

- Integracion del motor de plantilla smarty en el framework codeigniter 3.1.11

# Requerimientos

- PHP 5.6 o superior
- Smarty 3.1.36

# Instalación
```
  # clonar el repositorio
  $ git clone https://github.com/alf1995/smarty-codeigniter.git
  
  # acceder al directorio de nuestro proyecto
  $ cd smarty-codeigniter
  
  # instalar dependencias
  $ composer install
```
# Uso
- La libreria ya esta cargada de manera global en nuestro archivo autoload;
```php
  $autoload['libraries'] = array('smarty_tpl');
```

- Creamos una plantilla en nuestra carpeta **template** con el formato **.tpl**

- En nuestro controlador renderizaremos la vista usando:
```php
  $this->smarty_tpl->view('page_example');
```

- Para enviar datos a nuestra plantilla smarty lo podremos realizar de la siguiente forma:
```php
  $data1['data_1'] = 'Example 1';
  $data2['data_2'] = 'Example 2';
  $data = array_merge($data1,$data2);
  $this->smarty_tpl->view('page_example', $data);
  
  or
  
  $data['data_1'] = 'Example 1';
  $data['data_2'] = 'Example 2';
  $this->smarty_tpl->view('page_example', $data);
```

- En nuestra plantilla podremos imprimir el registro:
```html
  <body>
    <h1>{$data_1}</h1>
    <h2>{$data_2}</h2>
  </body>
```
