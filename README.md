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
    LLVM: A Compilation Framework for Lifelong Program Analysis & Transformation, a published paper by Chris Lattner, Vikram Adv





















HHVM

    Article
    Talk

    Read
    Edit
    View history

Tools

Appearance
Text

    Small
    Standard
    Large

Width

    Standard
    Wide

Color (beta)

    Automatic
    Light
    Dark

From Wikipedia, the free encyclopedia
HHVMHHVM logo, featuring white uppercase "HHVM" letters on a black background, with stylized triangular geometric shapes on the left
Developer(s)	Meta Platforms
Initial release	December 9, 2011; 12 years ago[1]
Stable release	
3.15.0[2] Edit this on Wikidata / 28 September 2016; 8 years ago
Repository	

    github.com/facebook/hhvm Edit this at Wikidata

Written in	PHP, C++,[3] OCaml[4][a] and Rust[5]
License	PHP License and Zend License[6]
Website	hhvm.com Edit this at Wikidata

HipHop Virtual Machine (HHVM) is an open-source virtual machine based on just-in-time (JIT) compilation that serves as an execution engine for the Hack programming language. By using the principle of JIT compilation, Hack code is first transformed into intermediate HipHop bytecode (HHBC), which is then dynamically translated into x86-64 machine code, optimized, and natively executed.[7][8] This contrasts with PHP's usual interpreted execution, in which the Zend Engine transforms PHP source code into opcodes that serve as a form of bytecode, and executes the opcodes directly on the Zend Engine's virtual CPU.[9]

HHVM is developed by Meta, with the project's source code hosted on GitHub;[10] it is licensed under the terms of the PHP License and Zend License.[1][6]
Overview

HHVM was created as the successor to the HipHop for PHP (HPHPc) PHP execution engine, which is a PHP-to-C++ transpiler also created by Facebook.[11][12] Based on the gained experience and aiming to solve issues introduced by HPHPc, Meta decided in early 2010 to create a JIT-based PHP virtual machine. Issues associated with HPHPc included reaching a plateau for further performance improvements, a fundamental inability to support all features of the PHP language, and difficulties arising from specific time- and resource-consuming development and deployment processes.[11] In Q1 2013, the production version of the facebook.com website stopped using HPHPc and switched to HHVM.

Following the JIT compilation principle, HHVM first converts the executed code into an intermediate language, the high-level bytecode HHBC. HHBC is a bytecode format created specifically for HHVM, appropriate for consumption by both interpreters and just-in-time compilers. Next, HHVM dynamically ("just-in-time") translates the HHBC into x86-64 machine code, optimized through dynamic analysis of the translated bytecode. Finally, it executes the x86-64 machine code.[1][11][13] As a result, HHVM has certain similarities to the virtual machines used by other programming languages, including the Common Language Runtime (CLR, for the C# language) and Java virtual machine (JVM, for the Java language).

HHVM brings many benefits in comparison with HPHPc. HHVM uses the same execution engine when deployed in both production and development environments, while supporting integration between the execution engine and the HPHPd debugger in both environment types; as a result, maintaining HPHPi (HipHop interpreter) separately as a development utility is no longer needed as it was the case with HPHPc. HHVM also eliminates the lengthy builds required by HPHPc to run programs, resulting in much simpler development and deployment processes than it was the case with HPHPc.[1] Finally, versions of HHVM before 4.0 have almost complete support for the entire PHP language (as defined by the official implementation of PHP version 5.4), including the support for the create_function() and eval() constructs, which was impossible with HPHPc.[14][15]

Together with HHVM 3.0,[16] Meta also released Hack, a derivative of PHP[17][18] that allows programmers to use both dynamic typing and static typing (a concept also known as gradual typing), and allows types to be specified for function arguments, function return values, and class properties. However, Hack does not provide complete backward compatibility since it removes several PHP features, such as the goto statement and dynamic variable names.[19][20][21][22]

In September 2017, it was announced that version 3.30 would be the last version of HHVM to officially support PHP, and that HHVM will only support Hack going forward.[23] This was due to differences and incompatibilities in PHP 7.[24] HHVM 4.0, released in February 2019, was the first version without support for PHP.[25]
Performance

As a process virtual machine that provides the execution environment, HHVM has the ability to use live type information to produce more efficient native code, leading to a higher web server throughput and lower latency. In Q4 2012, the execution of facebook.com's source code on HHVM achieved performance parity with HPHPc,[11] and in December 2013 HPHPc was even surpassed by around 15%.[26]
See also

    iconComputer programming portal

    LLVM
    Parrot virtual machine
    Phalanger

Notes

    Only the Hack's type-checking (hh_server and hh_client) and code-formatting (hh_format) command-line utilities and daemons bundled together with the HipHop Virtual Machine are written in OCaml.

References

Jason Evans (December 9, 2011). "The HipHop Virtual Machine". Meta Platforms. Retrieved August 2, 2014.
"Release 3.15.0". September 28, 2016. Retrieved March 13, 2018.
"Building and installing HHVM on CentOS 7.x". github.com. Meta Platforms. May 26, 2015. Retrieved June 12, 2015.
"Building the Hack typechecker". github.com. Meta. September 10, 2014. Retrieved June 12, 2015.
"Facebook's HHVM Begins Seeing Rust Rewrite - Phoronix". Retrieved August 29, 2019.
"facebook/hhvm: License". github.com. Facebook, Inc. Retrieved August 2, 2014.
Ottoni, Guilherme (June 20, 2018). "HHVM JIT: A Profile-Guided, Region-Based Compiler for PHP and Hack". Proceedings of the 39th ACM SIGPLAN Conference on Programming Language Design and Implementation (PLDI). ACM. pp. 151–165.
"facebook/hhvm". github.com. Meta Platforms. Retrieved August 2, 2014.
Kaushik Pal (April 28, 2014). "PHP and Zend Engine Internals". phpbuilder.com. Archived from the original on September 15, 2014. Retrieved September 23, 2014.
HHVM source code on GitHub
Drew Paroski (November 29, 2012). "Speeding up PHP-based development with HHVM". Meta Platforms. Retrieved August 2, 2014.
"Announcement on GitHub removing HPHPc support". github.com. Meta Platforms. February 19, 2013. Retrieved May 24, 2013.
"HipHop Bytecode v1 revision 18". github.com. Meta Platforms. July 31, 2014. Retrieved May 24, 2013.
"facebook/hhvm: About upgrade to PHP 5.4 engine". github.com. May 2013. Retrieved August 2, 2014.
"facebook/hhvm: Home". github.com. Meta Platforms. May 8, 2014. Retrieved August 2, 2014.
Paul Tarjan (March 28, 2014). "HHVM 3.0.0". Facebook. Retrieved December 26, 2022.
Cade Metz (March 20, 2014). "Facebook Introduces 'Hack,' the Programming Language of the Future". Wired. Retrieved April 15, 2014.
Julien Verlaguet; Alok Menghrajani (April 2014). "Hack: a new programming language for HHVM". code.facebook.com. Facebook. Retrieved March 23, 2014.
Josh Lockhart (April 3, 2014). "Facebook's Hack, HHVM, and the future of PHP". O'Reilly Media. Retrieved August 2, 2014.
"Hack and HHVM: Type Annotations (Hack Manual)". docs.hhvm.com. Retrieved March 25, 2014.
"Hack and HHVM: Type Inference (Hack Manual)". docs.hhvm.com. Archived from the original on March 26, 2014. Retrieved March 25, 2014.
"Hack and HHVM: Unsupported PHP Features in Hack (Hack Manual)". docs.hhvm.com. Archived from the original on November 4, 2015. Retrieved April 2, 2014.
Fred Emmott (September 12, 2018). "Ending PHP Support, and The Future Of Hack". Retrieved December 26, 2022.
Krill, Paul (September 20, 2017). "Forget PHP! Facebook's HHVM engine switches to Hack instead". InfoWorld. Retrieved February 6, 2019.
Fred Emmott (February 11, 2019). "HHVM 4.0.0". Retrieved December 26, 2022.
"We are the 98.5% (and the 16%)". hhvm.com. December 19, 2013. Retrieved August 2, 2014.

















Computer programming or coding is the composition of sequences of instructions, called programs, that computers can follow to perform tasks.[1][2] It involves designing and implementing algorithms, step-by-step specifications of procedures, by writing code in one or more programming languages. Programmers typically use high-level programming languages that are more easily intelligible to humans than machine code, which is directly executed by the central processing unit. Proficient programming usually requires expertise in several different subjects, including knowledge of the application domain, details of programming languages and generic code libraries, specialized algorithms, and formal logic.

Auxiliary tasks accompanying and related to programming include analyzing requirements, testing, debugging (investigating and fixing problems), implementation of build systems, and management of derived artifacts, such as programs' machine code. While these are sometimes considered programming, often the term software development is used for this larger overall process – with the terms programming, implementation, and coding reserved for the writing and editing of code per se. Sometimes software development is known as software engineering, especially when it employs formal methods or follows an engineering design process.
History
Ada Lovelace, whose notes were added to the end of Luigi Menabrea's paper included the first algorithm designed for processing by Charles Babbage's Analytical Engine. She is often recognized as history's first computer programmer.
See also: Computer program § History, Programmer § History, and History of programming languages

Programmable devices have existed for centuries. As early as the 9th century, a programmable music sequencer was invented by the Persian Banu Musa brothers, who described an automated mechanical flute player in the Book of Ingenious Devices.[3][4] In 1206, the Arab engineer Al-Jazari invented a programmable drum machine where a musical mechanical automaton could be made to play different rhythms and drum patterns, via pegs and cams.[5][6] In 1801, the Jacquard loom could produce entirely different weaves by changing the "program" – a series of pasteboard cards with holes punched in them.

Code-breaking algorithms have also existed for centuries. In the 9th century, the Arab mathematician Al-Kindi described a cryptographic algorithm for deciphering encrypted code, in A Manuscript on Deciphering Cryptographic Messages. He gave the first description of cryptanalysis by frequency analysis, the earliest code-breaking algorithm.[7]

The first computer program is generally dated to 1843 when mathematician Ada Lovelace published an algorithm to calculate a sequence of Bernoulli numbers, intended to be carried out by Charles Babbage's Analytical Engine.[8] However, Charles Babbage himself had written a program for the AE in 1837.[9][10]
Data and instructions were once stored on external punched cards, which were kept in order and arranged in program decks.

In the 1880s, Herman Hollerith invented the concept of storing data in machine-readable form.[11] Later a control panel (plug board) added to his 1906 Type I Tabulator allowed it to be programmed for different jobs, and by the late 1940s, unit record equipment such as the IBM 602 and IBM 604, were programmed by control panels in a similar way, as were the first electronic computers. However, with the concept of the stored-program computer introduced in 1949, both programs and data were stored and manipulated in the same way in computer memory.[12]
Machine language

Machine code was the language of early programs, written in the instruction set of the particular machine, often in binary notation. Assembly languages were soon developed that let the programmer specify instructions in a text format (e.g., ADD X, TOTAL), with abbreviations for each operation code and meaningful names for specifying addresses. However, because an assembly language is little more than a different notation for a machine language, two machines with different instruction sets also have different assembly languages.
Wired control panel for an IBM 402 Accounting Machine. Wires connect pulse streams from the card reader to counters and other internal logic and ultimately to the printer.
Compiler languages
See also: Compiler

High-level languages made the process of developing a program simpler and more understandable, and less bound to the underlying hardware. The first compiler related tool, the A-0 System, was developed in 1952[13] by Grace Hopper, who also coined the term 'compiler'.[14][15] FORTRAN, the first widely used high-level language to have a functional implementation, came out in 1957,[16] and many other languages were soon developed—in particular, COBOL aimed at commercial data processing, and Lisp for computer research.

These compiled languages allow the programmer to write programs in terms that are syntactically richer, and more capable of abstracting the code, making it easy to target varying machine instruction sets via compilation declarations and heuristics. Compilers harnessed the power of computers to make programming easier[16] by allowing programmers to specify calculations by entering a formula using infix notation.
Source code entry
See also: Computer programming in the punched card era

Programs were mostly entered using punched cards or paper tape. By the late 1960s, data storage devices and computer terminals became inexpensive enough that programs could be created by typing directly into the computers. Text editors were also developed that allowed changes and corrections to be made much more easily than with punched cards.
Modern programming
Quality requirements
Main article: Software quality

Whatever the approach to development may be, the final program must satisfy some fundamental properties. The following properties are among the most important:[17] [18]

    Reliability: how often the results of a program are correct. This depends on conceptual correctness of algorithms and minimization of programming mistakes, such as mistakes in resource management (e.g., buffer overflows and race conditions) and logic errors (such as division by zero or off-by-one errors).
    Robustness: how well a program anticipates problems due to errors (not bugs). This includes situations such as incorrect, inappropriate or corrupt data, unavailability of needed resources such as memory, operating system services, and network connections, user error, and unexpected power outages.
    Usability: the ergonomics of a program: the ease with which a person can use the program for its intended purpose or in some cases even unanticipated purposes. Such issues can make or break its success even regardless of other issues. This involves a wide range of textual, graphical, and sometimes hardware elements that improve the clarity, intuitiveness, cohesiveness, and completeness of a program's user interface.
    Portability: the range of computer hardware and operating system platforms on which the source code of a program can be compiled/interpreted and run. This depends on differences in the programming facilities provided by the different platforms, including hardware and operating system resources, expected behavior of the hardware and operating system, and availability of platform-specific compilers (and sometimes libraries) for the language of the source code.
    Maintainability: the ease with which a program can be modified by its present or future developers in order to make improvements or to customize, fix bugs and security holes, or adapt it to new environments. Good practices[19] during initial development make the difference in this regard. This quality may not be directly apparent to the end user but it can significantly affect the fate of a program over the long term.
    Efficiency/performance: Measure of system resources a program consumes (processor time, memory space, slow devices such as disks, network bandwidth and to some extent even user interaction): the less, the better. This also includes careful management of resources, for example cleaning up temporary files and eliminating memory leaks. This is often discussed under the shadow of a chosen programming language. Although the language certainly affects performance, even slower languages, such as Python, can execute programs instantly from a human perspective. Speed, resource usage, and performance are important for programs that bottleneck the system, but efficient use of programmer time is also important and is related to cost: more hardware may be cheaper.

Using automated tests and fitness functions can help to maintain some of the aforementioned attributes. [20]
Readability of source code

In computer programming, readability refers to the ease with which a human reader can comprehend the purpose, control flow, and operation of source code. It affects the aspects of quality above, including portability, usability and most importantly maintainability.

Readability is important because programmers spend the majority of their time reading, trying to understand, reusing, and modifying existing source code, rather than writing new source code. Unreadable code often leads to bugs, inefficiencies, and duplicated code. A study found that a few simple readability transformations made code shorter and drastically reduced the time to understand it.[21]

Following a consistent programming style often helps readability. However, readability is more than just programming style. Many factors, having little or nothing to do with the ability of the computer to efficiently compile and execute the code, contribute to readability.[22] Some of these factors include:

    Different indent styles (whitespace)
    Comments
    Decomposition
    Naming conventions for objects (such as variables, classes, functions, procedures, etc.)

The presentation aspects of this (such as indents, line breaks, color highlighting, and so on) are often handled by the source code editor, but the content aspects reflect the programmer's talent and skills.

Various visual programming languages have also been developed with the intent to resolve readability concerns by adopting non-traditional approaches to code structure and display. Integrated development environments (IDEs) aim to integrate all such help. Techniques like Code refactoring can enhance readability.
Algorithmic complexity

The academic field and the engineering practice of computer programming are concerned with discovering and implementing the most efficient algorithms for a given class of problems. For this purpose, algorithms are classified into orders using Big O notation, which expresses resource use—such as execution time or memory consumption—in terms of the size of an input. Expert programmers are familiar with a variety of well-established algorithms and their respective complexities and use this knowledge to choose algorithms that are best suited to the circumstances.
Methodologies

The first step in most formal software development processes is requirements analysis, followed by testing to determine value modeling, implementation, and failure elimination (debugging). There exist a lot of different approaches for each of those tasks. One approach popular for requirements analysis is Use Case analysis. Many programmers use forms of Agile software development where the various stages of formal software development are more integrated together into short cycles that take a few weeks rather than years. There are many approaches to the Software development process.

Popular modeling techniques include Object-Oriented Analysis and Design (OOAD) and Model-Driven Architecture (MDA). The Unified Modeling Language (UML) is a notation used for both the OOAD and MDA.

A similar technique used for database design is Entity-Relationship Modeling (ER Modeling).

Implementation techniques include imperative languages (object-oriented or procedural), functional languages, and logic programming languages.
Measuring language usage

It is very difficult to determine what are the most popular modern programming languages. Methods of measuring programming language popularity include: counting the number of job advertisements that mention the language,[23] the number of books sold and courses teaching the language (this overestimates the importance of newer languages), and estimates of the number of existing lines of code written in the language (this underestimates the number of users of business languages such as COBOL).

Some languages are very popular for particular kinds of applications, while some languages are regularly used to write many different kinds of applications. For example, COBOL is still strong in corporate data centers[24] often on large mainframe computers, Fortran in engineering applications, scripting languages in Web development, and C in embedded software. Many applications use a mix of several languages in their construction and use. New languages are generally designed around the syntax of a prior language with new functionality added, (for example C++ adds object-orientation to C, and Java adds memory management and bytecode to C++, but as a result, loses efficiency and the ability for low-level manipulation).
Debugging
Main article: Debugging
The first known actual bug causing a problem in a computer was a moth, trapped inside a Harvard mainframe, recorded in a log book entry dated September 9, 1947.[25] "Bug" was already a common term for a software defect when this insect was found.

Debugging is a very important task in the software development process since having defects in a program can have significant consequences for its users. Some languages are more prone to some kinds of faults because their specification does not require compilers to perform as much checking as other languages. Use of a static code analysis tool can help detect some possible problems. Normally the first step in debugging is to attempt to reproduce the problem. This can be a non-trivial task, for example as with parallel processes or some unusual software bugs. Also, specific user environment and usage history can make it difficult to reproduce the problem.

After the bug is reproduced, the input of the program may need to be simplified to make it easier to debug. For example, when a bug in a compiler can make it crash when parsing some large source file, a simplification of the test case that results in only few lines from the original source file can be sufficient to reproduce the same crash. Trial-and-error/divide-and-conquer is needed: the programmer will try to remove some parts of the original test case and check if the problem still exists. When debugging the problem in a GUI, the programmer can try to skip some user interaction from the original problem description and check if the remaining actions are sufficient for bugs to appear. Scripting and breakpointing are also part of this process.

Debugging is often done with IDEs. Standalone debuggers like GDB are also used, and these often provide less of a visual environment, usually using a command line. Some text editors such as Emacs allow GDB to be invoked through them, to provide a visual environment.
Programming languages
Main articles: Programming language and List of programming languages
See also: Computer program § Languages

Different programming languages support different styles of programming (called programming paradigms). The choice of language used is subject to many considerations, such as company policy, suitability to task, availability of third-party packages, or individual preference. Ideally, the programming language best suited for the task at hand will be selected. Trade-offs from this ideal involve finding enough programmers who know the language to build a team, the availability of compilers for that language, and the efficiency with which programs written in a given language execute. Languages form an approximate spectrum from "low-level" to "high-level"; "low-level" languages are typically more machine-oriented and faster to execute, whereas "high-level" languages are more abstract and easier to use but execute less quickly. It is usually easier to code in "high-level" languages than in "low-level" ones. Programming languages are essential for software development. They are the building blocks for all software, from the simplest applications to the most sophisticated ones.

Allen Downey, in his book How To Think Like A Computer Scientist, writes:

    The details look different in different languages, but a few basic instructions appear in just about every language:

        Input: Gather data from the keyboard, a file, or some other device.
        Output: Display data on the screen or send data to a file or other device.
        Arithmetic: Perform basic arithmetical operations like addition and multiplication.
        Conditional Execution: Check for certain conditions and execute the appropriate sequence of statements.
        Repetition: Perform some action repeatedly, usually with some variation.

Many computer languages provide a mechanism to call functions provided by shared libraries. Provided the functions in a library follow the appropriate run-time conventions (e.g., method of passing arguments), then these functions may be written in any other language.
Programmers
Main articles: Programmer and Software engineer

Computer programmers are those who write computer software. Their jobs usually involve:

    Prototyping
    Coding
    Debugging
    Documentation
    Integration
    Maintenance
    Requirements analysis
    Software architecture
    Software testing
    Specification

Although programming has been presented in the media as a somewhat mathematical subject, some research shows that good programmers have strong skills in natural human languages, and that learning to code is similar to learning a foreign language.[26][27]
See also

    iconComputer programming portal

Main article: Outline of computer programming

    Code smell
    Computer networking
    Competitive programming
    Programming best practices
    Systems programming

References

Bebbington, Shaun (2014). "What is coding". Tumblr. Archived from the original on April 29, 2020. Retrieved March 3, 2014.
Bebbington, Shaun (2014). "What is programming". Tumblr. Archived from the original on April 29, 2020. Retrieved March 3, 2014.
Koetsier, Teun (2001). "On the prehistory of programmable machines: musical automata, looms, calculators". Mechanism and Machine Theory. 36 (5). Elsevier: 589–603. doi:10.1016/S0094-114X(01)00005-2.
Kapur, Ajay; Carnegie, Dale; Murphy, Jim; Long, Jason (2017). "Loudspeakers Optional: A history of non-loudspeaker-based electroacoustic music". Organised Sound. 22 (2). Cambridge University Press: 195–205. doi:10.1017/S1355771817000103. ISSN 1355-7718.
Fowler, Charles B. (October 1967). "The Museum of Music: A History of Mechanical Instruments". Music Educators Journal. 54 (2): 45–49. doi:10.2307/3391092. JSTOR 3391092. S2CID 190524140.
Noel Sharkey (2007), A 13th Century Programmable Robot, University of Sheffield
Dooley, John F. (2013). A Brief History of Cryptology and Cryptographic Algorithms. Springer Science & Business Media. pp. 12–3. ISBN 9783319016283.
Fuegi, J.; Francis, J. (2003). "Lovelace & Babbage and the Creation of the 1843 'notes'". IEEE Annals of the History of Computing. 25 (4): 16. doi:10.1109/MAHC.2003.1253887.
Rojas, R. (2021). "The Computer Programs of Charles Babbage". IEEE Annals of the History of Computing. 43 (1): 6–18. doi:10.1109/MAHC.2020.3045717.
Rojas, R. (2024). "The First Computer Program". Communications of the ACM. 67 (6): 78–81. doi:10.1145/3624731.
da Cruz, Frank (March 10, 2020). "Columbia University Computing History – Herman Hollerith". Columbia University. Columbia.edu. Archived from the original on April 29, 2020. Retrieved April 25, 2010.
"Memory & Storage | Timeline of Computer History | Computer History Museum". www.computerhistory.org. Archived from the original on May 27, 2021. Retrieved June 3, 2021.
Ridgway, Richard (1952). "Compiling routines". Proceedings of the 1952 ACM national meeting (Toronto) on - ACM '52. pp. 1–5. doi:10.1145/800259.808980. ISBN 9781450379250. S2CID 14878552.
Maurice V. Wilkes. 1968. Computers Then and Now. Journal of the Association for Computing Machinery, 15(1):1–7, January. p. 3 (a comment in brackets added by editor), "(I do not think that the term compiler was then [1953] in general use, although it had in fact been introduced by Grace Hopper.)"
[1] The World's First COBOL Compilers Archived 13 October 2011 at the Wayback Machine
Bergstein, Brian (March 20, 2007). "Fortran creator John Backus dies". NBC News. Archived from the original on April 29, 2020. Retrieved April 25, 2010.
"NIST To Develop Cloud Roadmap". InformationWeek. November 5, 2010. "Computing initiative seeks to remove barriers to cloud adoption in security, interoperability, portability and reliability."
"What is it based on". Computerworld. April 9, 1984. p. 13. "Is it based on ... Reliability Portability. Compatibility"
"Programming 101: Tips to become a good programmer - Wisdom Geek". Wisdom Geek. May 19, 2016. Archived from the original on May 23, 2016. Retrieved May 23, 2016.
Fundamentals of Software Architecture: An Engineering Approach. O'Reilly Media. 2020. ISBN 978-1492043454.
Elshoff, James L.; Marcotty, Michael (1982). "Improving computer program readability to aid modification". Communications of the ACM. 25 (8): 512–521. doi:10.1145/358589.358596. S2CID 30026641.
Multiple (wiki). "Readability". Docforge. Archived from the original on April 29, 2020. Retrieved January 30, 2010.
Enticknap, Nicholas (September 11, 2007). "SSL/Computer Weekly IT salary survey: finance boom drives IT job growth". Archived from the original on October 26, 2011. Retrieved June 24, 2009.
Mitchell, Robert (May 21, 2012). "The Cobol Brain Drain". Computer World. Archived from the original on February 12, 2019. Retrieved May 9, 2015.
"Photograph courtesy Naval Surface Warfare Center, Dahlgren, Virginia, from National Geographic Sept. 1947". July 15, 2020. Archived from the original on November 13, 2020. Retrieved November 10, 2020.
Prat, Chantel S.; Madhyastha, Tara M.; Mottarella, Malayka J.; Kuo, Chu-Hsuan (March 2, 2020). "Relating Natural Language Aptitude to Individual Differences in Learning Programming Languages". Scientific Reports. 10 (1): 3817. Bibcode:2020NatSR..10.3817P. doi:10.1038/s41598-020-60661-8. ISSN 2045-2322. PMC 7051953. PMID 32123206.
"To the brain, reading computer code is not the same as reading language". MIT News | Massachusetts Institute of Technology. December 15, 2020. Retrieved July 29, 2023.
