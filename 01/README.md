# Proyecto de Reforestación - CBTA 35

## 📋 Descripción

Página web educativa sobre reforestación como proyecto escolar multidisciplinario. Integra conocimientos de matemáticas, humanidades, programación, estudio de ecosistemas y lengua y comunicación aplicados a la restauración forestal.

## 🌟 Características

### ✅ Funcionalidades Implementadas

- **Sistema de Autenticación**
  - Registro de usuarios con validación
  - Inicio de sesión con contraseñas hasheadas (bcrypt)
  - Manejo de sesiones PHP
  - Cookies para "recordar sesión"
  - Base de datos NoSQL (archivo JSON)

- **Sistema Multiidioma**
  - Traducción completa español/inglés
  - Diccionario de claves centralizado
  - Cambio de idioma dinámico

- **Calculadora de Reforestación**
  - Cálculo de árboles por área
  - Espaciamiento recomendado por especie
  - Eficiencia según tipo de suelo
  - Estimación de captura de carbono
  - 5 especies nativas mexicanas
  - 5 tipos de suelo

- **Contenido Educativo**
  - Información detallada sobre reforestación
  - Relación con 5 disciplinas escolares
  - Fundamentos científicos con referencias APA
  - Caso práctico CBTA 35 paso a paso

- **Diseño Profesional**
  - Bootstrap 5 responsivo
  - Iconos Bootstrap Icons
  - Placeholders para imágenes (placehold.co)
  - Animaciones y transiciones CSS
  - Tema verde/forestal

## 📁 Estructura de Archivos

```
/01/
├── index.php              # Página principal
├── config.php             # Configuración global
├── functions.php          # Funciones auxiliares
├── translations.php       # Sistema de traducción
├── styles.css             # Estilos personalizados
├── login.php              # Inicio de sesión
├── register.php           # Registro de usuarios
├── logout.php             # Cerrar sesión
├── calculator.php         # Calculadora de reforestación
├── disciplines.php        # Disciplinas relacionadas
├── cbta_project.php       # Proyecto CBTA 35
├── data/
│   └── users.json         # Base de datos de usuarios
└── Resumen_Reforestacion.md  # Investigación fuente
```

## 🚀 Instalación y Uso

### Requisitos

- PHP 7.4 o superior
- Servidor web (Apache/XAMPP recomendado)
- Navegador web moderno

### Instalación

1. Clonar o descargar el proyecto en tu servidor web:
   ```
   C:\xampp\htdocs\pec\01\
   ```

2. Asegurarse de que PHP está correctamente configurado en XAMPP

3. Acceder a través del navegador:
   ```
   http://localhost/pec/01/
   ```

### Uso

1. **Explorar sin cuenta**: Puedes navegar por todo el contenido sin registrarte

2. **Crear cuenta**: 
   - Click en "Registrarse"
   - Completar formulario
   - Contraseñas hasheadas automáticamente

3. **Calcular reforestación**:
   - Ir a "Calculadora"
   - Ingresar área en hectáreas
   - Seleccionar tipo de árbol y suelo
   - Ver resultados instantáneos

4. **Cambiar idioma**:
   - Click en menú "ES" o "EN"
   - Toda la página se traduce

## 🔒 Seguridad

- ✅ Contraseñas hasheadas con bcrypt
- ✅ Sanitización de entradas de usuario
- ✅ Protección contra XSS
- ✅ Validación de formularios (cliente y servidor)
- ⚠️ **NOTA**: Para producción, considerar:
  - Migrar a base de datos real (MySQL/PostgreSQL)
  - Implementar HTTPS
  - Añadir CSRF tokens
  - Rate limiting para login

## 🎓 Contenido Educativo

### Disciplinas Cubiertas

1. **Matemáticas**
   - Cálculos de densidad de plantación
   - Estimaciones de carbono
   - Modelos de crecimiento
   - Estadística para monitoreo

2. **Humanidades**
   - Participación comunitaria
   - Conocimiento tradicional
   - Aspectos culturales
   - Justicia ambiental

3. **Programación**
   - Sistemas de información geográfica
   - Bases de datos para monitoreo
   - Sensores remotos y drones
   - Modelado y simulación

4. **Estudio de Ecosistemas**
   - Sucesión ecológica
   - Biodiversidad
   - Servicios ecosistémicos
   - Adaptación al cambio climático

5. **Lengua y Comunicación**
   - Documentación científica
   - Comunicación comunitaria
   - Educación ambiental
   - Políticas públicas

## 📊 Calculadora - Especies y Suelos

### Especies Incluidas

| Especie | Nombre Científico | Espaciamiento | Captura CO₂ |
|---------|------------------|---------------|-------------|
| Pino | Pinus spp. | 3×3 m | 0.025 t/año |
| Encino | Quercus spp. | 4×4 m | 0.028 t/año |
| Cedro | Cedrela odorata | 3.5×3.5 m | 0.030 t/año |
| Mezquite | Prosopis spp. | 4.5×4.5 m | 0.020 t/año |
| Ahuehuete | Taxodium mucronatum | 5×5 m | 0.035 t/año |

### Tipos de Suelo

- Arcilloso
- Arenoso
- Franco (óptimo)
- Pedregoso
- Húmedo

## 📚 Referencias Bibliográficas

El contenido está basado en investigación científica rigurosa:

- Pan et al. (2011) - Carbon sink in world's forests
- FAO (2020) - Global Forest Resources Assessment
- Lamb et al. (2005) - Restoration of degraded tropical forests
- Gibson et al. (2011) - Primary forests and biodiversity
- Chazdon (2008) - Tropical forest regeneration
- Y más...

Ver `Resumen_Reforestacion.md` para referencias completas en formato APA.

## 🛠️ TODOs y Mejoras Futuras

### Corto Plazo
- [ ] Reemplazar placeholders con imágenes reales
- [ ] Añadir más especies nativas de la región
- [ ] Implementar validación de email con verificación
- [ ] Añadir recuperación de contraseña

### Mediano Plazo
- [ ] Gráficos interactivos (Chart.js) en calculadora
- [ ] Dashboard de progreso para proyectos
- [ ] Formularios de captura de datos de monitoreo
- [ ] Exportar cálculos a PDF
- [ ] Comparación entre especies

### Largo Plazo
- [ ] Migrar a base de datos MySQL/PostgreSQL
- [ ] API REST para integración con apps móviles
- [ ] Sistema de roles (admin, estudiante, profesor)
- [ ] Integración con sensores IoT para monitoreo
- [ ] Machine learning para predicciones

## 👨‍💻 Tecnologías Utilizadas

- **Backend**: PHP 7.4+
- **Frontend**: HTML5, CSS3, JavaScript
- **Framework CSS**: Bootstrap 5.3
- **Iconos**: Bootstrap Icons
- **Base de datos**: JSON (NoSQL)
- **Seguridad**: BCrypt para passwords
- **Placeholders**: placehold.co

## 📄 Licencia

Este proyecto es de código educativo abierto para fines académicos.

## 👥 Créditos

- **Investigación**: Basada en literatura científica peer-reviewed
- **Desarrollo**: Proyecto escolar CBTA 35
- **Referencias**: FAO, IPCC, revistas científicas

## 📞 Contacto

Para más información sobre el proyecto o para implementar uno similar en tu institución, consulta la sección "Proyecto CBTA 35" en la aplicación.

---

**Última actualización**: Noviembre 2025

🌲 **"Plantar un árbol es creer en el futuro"** 🌲
