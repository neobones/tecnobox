# tecnobox

## Estructura

| Donde deben ir los componentes ... | ... directorio: |
| ----------------------------------------------- | -------------------------- |
| command-line executables                        | `bin/`                     |
| configuration files                             | `config/`                  |
| documentation files                             | `docs/`                    |
| web server files                                | `public/`                  |
| other resource files                            | `resources/`               |
| PHP source code                                 | `src/`                     |
| test code                                       | `tests/`                   |

Definición:

### bin/

Si el paquete proporciona un directorio de nivel raíz para archivos ejecutables de línea de comandos, DEBE llamarse `bin/`.

Esta publicación no define de otro modo la estructura y el contenido del directorio.

### config/

Si el paquete proporciona un directorio de nivel raíz para los archivos de configuración, DEBE llamarse `config/`.

Esta publicación no define de otro modo la estructura y el contenido del directorio.

### docs/

Si el paquete proporciona un directorio de nivel raíz para los archivos de documentación, DEBE llamarse `docs/`.

Esta publicación no define de otro modo la estructura y el contenido del directorio.

### public/

Si el paquete proporciona un directorio de nivel raíz para los archivos del servidor web, DEBE llamarse `public/`.

Esta publicación no define de otro modo la estructura y el contenido del directorio.

> N.b.: Este directorio PUEDE estar destinado a ser una raíz de documentos del servidor web.
> Alternativamente, PUEDE ser que los archivos se sirvan dinámicamente a través de otros
> código, copiado o vinculado a la raíz del documento "real", o administrado de otra manera
> que estén disponibles públicamente en la web.

### resources/

Si el paquete proporciona un directorio de nivel raíz para otros archivos de recursos, DEBE llamarse `resources/`.

Esta publicación no define de otro modo la estructura y el contenido del directorio.

### src/

Si el paquete proporciona un directorio de nivel raíz para los archivos de código fuente de PHP, DEBE llamarse `src/`.

Esta publicación no define de otro modo la estructura y el contenido del directorio.

### tests/

Si el paquete proporciona un directorio de nivel raíz para archivos de prueba, DEBE llamarse `tests/`.

Esta publicación no define de otro modo la estructura y el contenido del directorio.

### Other Directories

El paquete PUEDE contener otros directorios de nivel raíz para fines no descritos en esta publicación.

Esta publicación no define la estructura y el contenido de los otros directorios de nivel raíz.

## Root-Level Files

### CHANGELOG

Si el paquete proporciona un archivo de nivel raíz con una lista de cambios desde la última publicación o versión, DEBE llamarse `CHANGELOG`.

PUEDE tener una extensión de nombre de archivo en minúsculas que indique el formato del archivo.

Esta publicación no define de otro modo la estructura y el contenido del archivo.

### CONTRIBUTING

Si el paquete proporciona un archivo de nivel raíz que describe cómo contribuir al paquete, DEBE llamarse `CONTRIBUCIÓN`.

PUEDE tener una extensión de nombre de archivo en minúsculas que indique el formato del archivo.

Esta publicación no define de otro modo la estructura y el contenido del archivo.

### LICENSE

Mientras que los consumidores del paquete pueden violar la ley de derechos de autor al copiar propiedad intelectual sin licencia, el paquete DEBE incluir un archivo de nivel raíz que indique los términos de licencia y derechos de autor del contenido del paquete.

Si el paquete proporciona un archivo de nivel raíz que indica los términos de licencia y derechos de autor del contenido del paquete, DEBE llamarse "LICENCIA".

PUEDE tener una extensión de nombre de archivo en minúsculas que indique el formato del archivo.

Esta publicación no define de otro modo la estructura y el contenido del archivo.

### README

Si el paquete proporciona un archivo de nivel raíz con información sobre el paquete en sí, DEBE llamarse `README`.

PUEDE tener una extensión de nombre de archivo en minúsculas que indique el formato del archivo.

Esta publicación no define de otro modo la estructura y el contenido del archivo.

### Other Files

El paquete PUEDE contener otros archivos de nivel raíz para fines no descritos en esta publicación.

Esta publicación no define la estructura y el contenido de los otros archivos de nivel raíz.