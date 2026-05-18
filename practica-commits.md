# Práctica de commits — Git · ENP6 UNAM

Cada nivel te pide un cambio concreto en este archivo.  
Edita → `git add practica-commits.md` → `git commit -m "..."`

---

## Nivel 1 · Preséntate

**Qué hacer:** Llena los campos con tus datos.  
**Commit:** `feat(perfil): agrega presentación de [tu nombre]`

```
Nombre     : Fatima Elvira Rosales Tecuapetla
GitHub     : https://github.com/Faty1108 
Algo sobre mí : Me gusta el kpop y nadar
```

---

## Nivel 2 · Lo que ya sabes hacer

**Qué hacer:** Agrega al menos tres cosas que sabes hacer (no tienen que ser de programación).  
**Commit:** `feat(habilidades): agrega lista de habilidades`

- Me gusta nadar
- Me agrada conocer nuevas personas
- Me gusta la saga de "El cementerio de los libros olvidados"

---

## Nivel 3 · Corrige los errores

**Qué hacer:** El párrafo de abajo tiene **cuatro errores**. Corrígelos todos en un solo commit.  
**Commit:** `fix(convenciones): corrige errores en descripción de Git`

> Git es un sistema de control de versiones creado en 2005 por Linus Torvalds
> para reemplazar a BitKeeper, que era un programa de licencia y dejó de darse gratis al proyecto Linux.
> Cada commit guarda una fotografía de todos los archivos del repositorio en ese momento,
> identificada con un hash SHA-1 único. Para subir cambios al servidor usamos `git push`.

---

## Nivel 4 · Qué aprendí hoy

**Qué hacer:** Escribe tres cosas concretas que aprendiste en esta sesión.  
**Commit:** `docs(aprendizaje): agrega notas de la sesión`

1. Aprendí sobre cual fue la razón por la que crearon Git
2. Sobre el nombre único que se le da a un commit, que es el SHA-1
3. ¿Qué es un hash? y los estados de un archivo

---

## Nivel 5 · Tabla de comandos

**Qué hacer:** Completa las celdas vacías de la tabla.  
**Commit:** `docs(comandos): completa tabla de referencia`

| Comando | ¿Qué hace? |
|---------|------------|
| `git init` | |Sirve para decirle a Git, que vea los archivos creados y vea sus cambios, una antesala para crear un repositorio
| `git status` | |Muestra que archivos ya están respaldados por Git y cuales aún no se suben o tienen cambios
| `git add .` | | Agrega el archivo que se va a subir al commit
| `git commit -m "..."` | | Crea el commit con un código único, así como de los archivos
| `git log --oneline` | |Sirve para ver el historial de commits verticalmente, en texto
| `git push` | | Sube los archivos añadidos anteriormente a el repositorio remoto

---

## Nivel 6 · Marca tu avance

**Qué hacer:** Cambia `[ ]` por `[x]` en cada punto que ya dominas.  
**Commit:** `chore(practica): actualiza checklist de avance`

- [ ] Hice `git init` sin ayuda
- [ ] Entiendo para qué sirve el Staging Area
- [ ] Escribí un mensaje de commit con formato Conventional Commits
- [ ] Puedo ver el historial con `git log`
- [ ] Completé todos los niveles de esta práctica

---

## Referencia rápida

| Tipo | Cuándo |
|------|--------|
| `feat` | Agrego algo nuevo |
| `fix` | Corrijo un error |
| `docs` | Solo toco documentación o notas |
| `style` | Formato, sin cambiar contenido |
| `refactor` | Reorganizo sin cambiar el resultado |
| `chore` | Tareas de mantenimiento |
