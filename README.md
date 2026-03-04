# Maquetado Estructural - Proyecto La Liga

**Equipo:** * Angulo Diaz Julio Abraham
* Pantoja Araiza Ismael

## 1. Cómo respetamos el wireframe
Para lograr una fidelidad total (30% de los criterios) entre el diseño original en Figma y el navegador, aplicamos un mapeo directo de las áreas visuales a etiquetas HTML5 semánticas. 

Cada bloque gris del wireframe se tradujo a su contenedor correspondiente: utilizamos `<header>` y `<nav>` para la barra superior (incluyendo la barra de búsqueda persistente), `<main>` para el contenedor principal, `<section>` para delimitar áreas de contenido masivo (como el catálogo o las tablas), `<article>` para elementos repetitivos independientes (tarjetas de noticias, equipos, partidos) y `<aside>` para contenido secundario como la tabla de posiciones resumida en la página de inicio. 

Nos apegamos estrictamente al concepto de "maquetado estructural", utilizando textos de relleno y bordes simples (`border: 2px solid #666;`) para marcar las cajas, omitiendo intencionalmente cualquier diseño visual, color de marca o imágenes reales, tal como exige la rúbrica.

## 2. Sistema de distribución utilizado
Implementamos un sistema híbrido en CSS puro utilizando **Flexbox** y **CSS Grid**, definidos mediante clases estructurales para no ensuciar el HTML:

* **Flexbox (`display: flex;`):** Lo utilizamos para alineaciones unidimensionales. Por ejemplo, en el `<header>` para separar el logo del buscador usando `justify-content: space-between;`, en el `<nav>` para distribuir los enlaces horizontalmente, y en el layout de la página de inicio para colocar la `<section>` principal al lado del `<aside>`.
* **CSS Grid (`display: grid;`):** Fue la herramienta principal para crear retículas bidimensionales perfectas. Lo implementamos en la clase `.cuadricula-elementos` usando `grid-template-columns: repeat(X, 1fr);` para acomodar los 12 equipos del catálogo, las 6 tarjetas de noticias y los perfiles de los jugadores, garantizando que todas las cajas mantuvieran la misma anchura sin importar el contenido.

## 3. Definición de proporciones
Para mantener la proporción visual equivalente a los wireframes de Figma sin recurrir a medidas rígidas en píxeles absolutos, utilizamos unidades relativas y fraccionales:

* **Fracciones de Grid (`fr`):** Al usar `1fr` en nuestras cuadrículas, indicamos al navegador que divida el espacio disponible en partes exactamente iguales (ej. 3 columnas del mismo ancho para las noticias).
* **Proporciones Flex (`flex: grow`):** En las vistas divididas, como la página de inicio, asignamos `flex: 3` a la sección principal y `flex: 1` a la barra lateral. Esto asegura que la noticia principal siempre ocupe el 75% del ancho y la tabla de posiciones el 25%, simulando perfectamente la jerarquía y el espacio en blanco dibujado en el diseño original. 
* **Dimensiones de contención:** Utilizamos un `max-width: 1200px;` con `margin: 0 auto;` en el contenedor principal para evitar que la página se desborde en pantallas muy anchas, manteniendo el diseño centrado y estructurado.