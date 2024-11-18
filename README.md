# Sargantana
![Sargantana](./assets/sargantana.webp)
Sargantana es un sistema de gestión web modular y escalable, diseñado para manejar diferentes aspectos de una aplicación empresarial. El proyecto incluye módulos para autenticación, administración de contenido, integración con servicios externos, monitoreo del sistema, optimización de rendimiento y mucho más.

## 📋 Tabla de Contenidos

- [Características](#Características)
- [Requisitos](#Requisitos)
- [Instalación](#Instalación)
- [Configuración](#Configuración)
- [Estructura del Proyecto](#Estructura-del-Proyecto)
- [Uso](#Uso)
- [Contribuir](#Contribuir)
- [Licencia](#Licencia)

## 🚀 Características

- **Autenticación**: Gestión de usuarios, roles y permisos (`auth/`).
- **Administración**: Panel de control para aprobación de contenido, manejo de usuarios y permisos (`admin/`).
- **Integración**: Conexiones con APIs externas para pagos (PayPal, Stripe) y redes sociales (`integration/`).
- **Monitoreo**: Recolección de métricas y alertas (`monitoring/`).
- **Optimización**: Estrategias avanzadas de caché y balanceo de carga (`backend/cache/`, `loadbalancer/`).
- **Documentación Técnica**: Amplia documentación interna (`docs/`).
- **Automatización**: Scripts para despliegue y gestión continua con Jenkins (`jenkins/`).
- **Soporte Multilenguaje**: Traducción y adaptación regional (`language/`).

## ⚙️ Requisitos

- **Servidor Web**: Apache o Nginx
- **PHP**: Versión 7.4 o superior
- **Base de Datos**: MariaDB o MySQL
- **Herramientas Adicionales**:
  - Redis para manejo de caché
  - Memcached (opcional)
  - Git para control de versiones
  - Jenkins para integración continua (opcional)

## 🛠️ Instalación

1. Clona el repositorio:

   ```bash
   git clone https://github.com/tuusuario/sargantana.git
   cd sargantana


🛠️ Instalación de HHVM en openSUSE

HHVM (HipHop Virtual Machine) es una máquina virtual diseñada para ejecutar código Hack y PHP (aunque el soporte para PHP se ha descontinuado desde 2018). Esta guía te ayudará a instalar HHVM en openSUSE y ejecutar tu primer script Hack.
Requisitos

Asegúrate de que tu sistema tiene las siguientes dependencias:

sudo zypper install cmake git gcc-c++ boost-devel libevent-devel libopenssl-devel pcre-devel

Clonar y compilar HHVM

git clone https://github.com/facebook/hhvm.git
cd hhvm
cmake .
make -j$(nproc)
sudo make install

Verificar la instalación

hhvm --version

Deberías ver la versión instalada de HHVM si todo ha sido configurado correctamente.
⚙️ Configuración

Crea un archivo de configuración en /etc/hhvm/hhvm.ini con el siguiente contenido:

hhvm.server.port = 8080
hhvm.server.type = fastcgi
hhvm.log.level = Verbose
hhvm.repo.central.path = /var/run/hhvm/hhvm.hhbc

Inicia el servidor HHVM con:

sudo hhvm --mode server -c /etc/hhvm/hhvm.ini

📝 Ejemplo de Script Hack

Guarda el siguiente código en un archivo llamado index.hack:

<?hh
<<__EntryPoint>>
function main(): void {
    echo "¡Hola, Hack!\n";
}

Ejecuta el script:

hhvm index.hack

Deberías ver la salida:

¡Hola, Hack!

🌐 Uso de HHVM con Nginx

HHVM puede configurarse como un backend FastCGI con Nginx. Añade esta configuración a tu archivo de Nginx:

server {
    listen 80;
    server_name localhost;

    location / {
        fastcgi_pass 127.0.0.1:9000;
        include fastcgi_params;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
    }
}

Reinicia Nginx:

sudo systemctl restart nginx


🛠️ Compilación de HHVM en openSUSE: Solución de Problemas
Error: Could NOT find Glog

Si durante la compilación ves el siguiente error:

Could NOT find Glog (missing: GLOG_LIBRARY GLOG_INCLUDE_DIR)

Significa que la biblioteca Glog no está instalada o CMake no puede encontrarla. Para solucionarlo, sigue estos pasos:
1. Instalar Glog y otras dependencias

Ejecuta los siguientes comandos para instalar Glog y otras bibliotecas requeridas:

sudo zypper install glog glog-devel jemalloc-devel libboost-devel libevent-devel \
    libsqlite3-devel libxml2-devel openssl-devel pcre-devel zlib-devel

2. Verificar la instalación de Glog

Puedes comprobar si Glog está correctamente instalado con:

pkg-config --modversion libglog

Si ves una versión de Glog, significa que está correctamente instalado.
3. Configurar CMake

Si el error persiste, intenta especificar manualmente la ruta de Glog al ejecutar cmake:

cmake -DGLOG_LIBRARY=/usr/local/lib/libglog.so -DGLOG_INCLUDE_DIR=/usr/local/include/glog .

4. Compilar HHVM

Una vez resuelto el problema con Glog, continúa con la compilación:

make -j$(nproc)
sudo make install

5. Problemas con la versión de CMake

Si ves una advertencia sobre la versión de CMake, asegúrate de tener una versión reciente. Verifica tu versión actual con:

cmake --version

Para actualizar CMake en openSUSE:

sudo zypper install cmake

⚙️ Verificar la Instalación

Después de la compilación, verifica que HHVM esté instalado correctamente:

hhvm --version
