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
- Creamos una plantilla en nuestra carpeta **template** con el formato **.tpl**

- En nuestro controlador renderizaremos la vista usando:
```php
 $this->smarty_tpl->view('page_example');
```
