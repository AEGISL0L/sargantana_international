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
   git clone https://github.com/AEGISL0L/sargantana_international.git
   ```
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











































LLVM is a set of compiler and toolchain technologies[5] that can be used to develop a frontend for any programming language and a backend for any instruction set architecture. LLVM is designed around a language-independent intermediate representation (IR) that serves as a portable, high-level assembly language that can be optimized with a variety of transformations over multiple passes.[6] The name LLVM originally stood for Low Level Virtual Machine, though the project has expanded and the name is no longer officially an initialism.

LLVM is written in C++ and is designed for compile-time, link-time, runtime, and "idle-time" optimization. Originally implemented for C and C++, the language-agnostic design of LLVM has since spawned a wide variety of frontends: languages with compilers that use LLVM (or which do not directly use LLVM but can generate compiled programs as LLVM IR) include ActionScript, Ada, C# for .NET,[7][8][9] Common Lisp, PicoLisp, Crystal, CUDA, D, Delphi, Dylan, Forth,[10] Fortran, FreeBASIC, Free Pascal, Halide, Haskell, Java bytecode, Julia, Kotlin, LabVIEW's G language,[11][12] Lua, Objective-C, OpenCL,[13] PostgreSQL's SQL and PLpgSQL,[14] Ruby,[15] Rust,[16] Scala,[17][18] Swift, Xojo, and Zig.
History

The LLVM project started in 2000 at the University of Illinois at Urbana–Champaign, under the direction of Vikram Adve and Chris Lattner. LLVM was originally developed as a research infrastructure to investigate dynamic compilation techniques for static and dynamic programming languages. LLVM was released under the University of Illinois/NCSA Open Source License,[3] a permissive free software licence. In 2005, Apple Inc. hired Lattner and formed a team to work on the LLVM system for various uses within Apple's development systems.[19] LLVM has been an integral part of Apple's Xcode development tools for macOS and iOS since Xcode 4 in 2011.[20]

In 2006, Lattner started working on a new project named Clang. The combination of Clang frontend and LLVM backend is named Clang/LLVM or simply Clang.

The name LLVM was originally an initialism for Low Level Virtual Machine. However, the LLVM project evolved into an umbrella project that has little relationship to what most current developers think of as a virtual machine. This made the initialism "confusing" and "inappropriate", and since 2011 LLVM is "officially no longer an acronym",[21] but a brand that applies to the LLVM umbrella project.[22] The project encompasses the LLVM intermediate representation (IR), the LLVM debugger, the LLVM implementation of the C++ Standard Library (with full support of C++11 and C++14[23]), etc. LLVM is administered by the LLVM Foundation. Compiler engineer Tanya Lattner became its president in 2014[24] and was in post as of March 2024.[25]

"For designing and implementing LLVM", the Association for Computing Machinery presented Vikram Adve, Chris Lattner, and Evan Cheng with the 2012 ACM Software System Award.[26]

The project was originally available under the UIUC license. After v9.0.0 released in 2019,[27] LLVM relicensed to the Apache License 2.0 with LLVM Exceptions.[3] As of November 2022 about 400 contributions had not been relicensed.[28][29]
Features

LLVM can provide the middle layers of a complete compiler system, taking intermediate representation (IR) code from a compiler and emitting an optimized IR. This new IR can then be converted and linked into machine-dependent assembly language code for a target platform. LLVM can accept the IR from the GNU Compiler Collection (GCC) toolchain, allowing it to be used with a wide array of extant compiler front-ends written for that project. LLVM can also be built with gcc after version 7.5.[30]

LLVM can also generate relocatable machine code at compile-time or link-time or even binary machine code at runtime.

LLVM supports a language-independent instruction set and type system.[6] Each instruction is in static single assignment form (SSA), meaning that each variable (called a typed register) is assigned once and then frozen. This helps simplify the analysis of dependencies among variables. LLVM allows code to be compiled statically, as it is under the traditional GCC system, or left for late-compiling from the IR to machine code via just-in-time compilation (JIT), similar to Java. The type system consists of basic types such as integer or floating-point numbers and five derived types: pointers, arrays, vectors, structures, and functions. A type construct in a concrete language can be represented by combining these basic types in LLVM. For example, a class in C++ can be represented by a mix of structures, functions and arrays of function pointers.

The LLVM JIT compiler can optimize unneeded static branches out of a program at runtime, and thus is useful for partial evaluation in cases where a program has many options, most of which can easily be determined unneeded in a specific environment. This feature is used in the OpenGL pipeline of Mac OS X Leopard (v10.5) to provide support for missing hardware features.[31]

Graphics code within the OpenGL stack can be left in intermediate representation and then compiled when run on the target machine. On systems with high-end graphics processing units (GPUs), the resulting code remains quite thin, passing the instructions on to the GPU with minimal changes. On systems with low-end GPUs, LLVM will compile optional procedures that run on the local central processing unit (CPU) that emulate instructions that the GPU cannot run internally. LLVM improved performance on low-end machines using Intel GMA chipsets. A similar system was developed under the Gallium3D LLVMpipe, and incorporated into the GNOME shell to allow it to run without a proper 3D hardware driver loaded.[32]

In 2011, programs compiled by GCC outperformed those from LLVM by 10%, on average.[33][34] In 2013, phoronix reported that LLVM had caught up with GCC, compiling binaries of approximately equal performance.[35]
Components

LLVM has become an umbrella project containing multiple components.
Frontends

LLVM was originally written to be a replacement for the extant code generator in the GCC stack,[36] and many of the GCC frontends have been modified to work with it, resulting in the now-defunct LLVM-GCC suite. The modifications generally involve a GIMPLE-to-LLVM IR step so that LLVM optimizers and codegen can be used instead of GCC's GIMPLE system. Apple was a significant user of LLVM-GCC through Xcode 4.x (2013).[37][38] This use of the GCC frontend was considered mostly a temporary measure, but with the advent of Clang and advantages of LLVM and Clang's modern and modular codebase (as well as compilation speed), is mostly obsolete.

LLVM currently[as of?] supports compiling of Ada, C, C++, D, Delphi, Fortran, Haskell, Julia, Objective-C, Rust, and Swift using various frontends.

Widespread interest in LLVM has led to several efforts to develop new frontends for many languages. The one that has received the most attention is Clang, a newer compiler supporting C, C++, and Objective-C. Primarily supported by Apple, Clang is aimed at replacing the C/Objective-C compiler in the GCC system with a system that is more easily integrated with integrated development environments (IDEs) and has wider support for multithreading. Support for OpenMP directives has been included in Clang since release 3.8.[39]

The Utrecht Haskell compiler can generate code for LLVM. While the generator was in early stages of development, in many cases it was more efficient than the C code generator.[40] The Glasgow Haskell Compiler (GHC) backend uses LLVM and achieves a 30% speed-up of compiled code relative to native code compiling via GHC or C code generation followed by compiling, missing only one of the many optimizing techniques implemented by the GHC.[41]

Many other components are in various stages of development, including, but not limited to, the Rust compiler, a Java bytecode frontend, a Common Intermediate Language (CIL) frontend, the MacRuby implementation of Ruby 1.9, various frontends for Standard ML, and a new graph coloring register allocator.[citation needed]
Intermediate representation
LLVM IR is used e.g., by radeonsi and by llvmpipe. Both are part of Mesa 3D.

The core of LLVM is the intermediate representation (IR), a low-level programming language similar to assembly. IR is a strongly typed reduced instruction set computer (RISC) instruction set which abstracts away most details of the target. For example, the calling convention is abstracted through call and ret instructions with explicit arguments. Also, instead of a fixed set of registers, IR uses an infinite set of temporaries of the form %0, %1, etc. LLVM supports three equivalent forms of IR: a human-readable assembly format,[42] an in-memory format suitable for frontends, and a dense bitcode format for serializing. A simple "Hello, world!" program in the IR format:

@.str = internal constant [14 x i8] c"Hello, world\0A\00"

declare i32 @printf(ptr, ...)

define i32 @main(i32 %argc, ptr %argv) nounwind {
entry:
    %tmp1 = getelementptr [14 x i8], ptr @.str, i32 0, i32 0
    %tmp2 = call i32 (ptr, ...) @printf( ptr %tmp1 ) nounwind
    ret i32 0
}

The many different conventions used and features provided by different targets mean that LLVM cannot truly produce a target-independent IR and retarget it without breaking some established rules. Examples of target dependence beyond what is explicitly mentioned in the documentation can be found in a 2011 proposal for "wordcode", a fully target-independent variant of LLVM IR intended for online distribution.[43] A more practical example is PNaCl.[44]

The LLVM project also introduces another type of intermediate representation named MLIR[45] which helps build reusable and extensible compiler infrastructure by employing a plugin architecture named Dialect.[46] It enables the use of higher-level information on the program structure in the process of optimization including polyhedral compilation.
Backends

At version 16, LLVM supports many instruction sets, including IA-32, x86-64, ARM, Qualcomm Hexagon, LoongArch, M68K, MIPS, NVIDIA Parallel Thread Execution (PTX, also named NVPTX in LLVM documentation), PowerPC, AMD TeraScale,[47] most recent AMD GPUs (also named AMDGPU in LLVM documentation),[48] SPARC, z/Architecture (also named SystemZ in LLVM documentation), and XCore.

Some features are not available on some platforms. Most features are present for IA-32, x86-64, z/Architecture, ARM, and PowerPC.[49] RISC-V is supported as of version 7.

In the past, LLVM also supported other backends, fully or partially, including C backend, Cell SPU, mblaze (MicroBlaze),[50] AMD R600, DEC/Compaq Alpha (Alpha AXP)[51] and Nios2,[52] but that hardware is mostly obsolete, and LLVM developers decided the support and maintenance costs were no longer justified.[citation needed]

LLVM also supports WebAssembly as a target, enabling compiled programs to execute in WebAssembly-enabled environments such as Google Chrome / Chromium, Firefox, Microsoft Edge, Apple Safari or WAVM. LLVM-compliant WebAssembly compilers typically support mostly unmodified source code written in C, C++, D, Rust, Nim, Kotlin and several other languages.

The LLVM machine code (MC) subproject is LLVM's framework for translating machine instructions between textual forms and machine code. Formerly, LLVM relied on the system assembler, or one provided by a toolchain, to translate assembly into machine code. LLVM MC's integrated assembler supports most LLVM targets, including IA-32, x86-64, ARM, and ARM64. For some targets, including the various MIPS instruction sets, integrated assembly support is usable but still in the beta stage.[citation needed]
Linker

The lld subproject is an attempt to develop a built-in, platform-independent linker for LLVM.[53] lld aims to remove dependence on a third-party linker. As of May 2017, lld supports ELF, PE/COFF, Mach-O, and WebAssembly[54] in descending order of completeness. lld is faster than both flavors of GNU ld.[citation needed]

Unlike the GNU linkers, lld has built-in support for link-time optimization (LTO). This allows for faster code generation as it bypasses the use of a linker plugin, but on the other hand prohibits interoperability with other flavors of LTO.[55]
C++ Standard Library

The LLVM project includes an implementation of the C++ Standard Library named libc++, dual-licensed under the MIT License and the UIUC license.[56]

Since v9.0.0, it was relicensed to the Apache License 2.0 with LLVM Exceptions.[3]
Polly

This implements a suite of cache-locality optimizations as well as auto-parallelism and vectorization using a polyhedral model.[57]
Debugger
Main article: LLDB (debugger)
C Standard Library

llvm-libc is an incomplete, upcoming, ABI independent C standard library designed by and for the LLVM project.[58]
Derivatives

Due to its permissive license, many vendors release their own tuned forks of LLVM. This is officially recognized by LLVM's documentation, which suggests against using version numbers in feature checks for this reason.[59] Some of the vendors include:

    AMD's AMD Optimizing C/C++ Compiler is based on LLVM, Clang, and Flang.
    Apple maintains an open-source fork for Xcode.[60]
    Arm provides a number of LLVM based toolchains, including Arm Compiler for Embedded targeting bare-metal development and Arm Compiler for Linux targeting the High Performance Computing market
    Flang, Fortran project in development as of 2022
    IBM is adopting LLVM in its C/C++ and Fortran compilers.[61]
    Intel has adopted LLVM for their next generation Intel C++ Compiler.[62]
    The Los Alamos National Laboratory has a parallel-computing fork of LLVM 8 named "Kitsune".[63]
    Nvidia uses LLVM in the implementation of its NVVM CUDA Compiler.[64] The NVVM compiler is distinct from the "NVPTX" backend mentioned in the Backends section, although both generate PTX code for Nvidia GPUs.
    Since 2013, Sony has been using LLVM's primary front-end Clang compiler in the software development kit (SDK) of its PlayStation 4 console.[65]

See also

    Free and open-source software portal

    Common Intermediate Language
    HHVM
    C--
    Amsterdam Compiler Kit (ACK)
    Optimizing compiler
    LLDB (debugger)
    GNU lightning
    GNU Compiler Collection (GCC)
    Pure
    OpenCL
    ROCm
    Emscripten
    TenDRA Distribution Format
    Architecture Neutral Distribution Format (ANDF)
    Comparison of application virtualization software
    SPIR-V
    University of Illinois at Urbana Champaign discoveries & innovations

Literature

    Chris Lattner - The Architecture of Open Source Applications - Chapter 11 LLVM, ISBN 978-1257638017, released 2012 under CC BY 3.0 (Open Access).[66]
    LLVM: A Compilation Framework for Lifelong Program Analysis & Transformation, a published paper by Chris Lattner, Vikram Adve
