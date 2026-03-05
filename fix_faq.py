
import os
import re

file_path = r"c:\Users\Marianh\Downloads\Plantilla para Niumedia\Renev-PHP_v1.0\Renev\dist\faq.html"

with open(file_path, 'r', encoding='utf-8') as f:
    content = f.read()

# Patrón genérico para los items del acordeón (pregunta y respuesta)
def replace_item(content, original_text, new_question, new_answer):
    # Escapar el texto original para regex
    escaped_text = re.escape(original_text)
    # Patrón: Busca la pregunta original y el párrafo de respuesta genérica que le sigue
    pattern = rf'({escaped_text}.*?<p>).*?(</p>)'
    # Construir el nuevo bloque
    replacement = rf'\1{new_answer}\2'
    
    # Primero reemplazamos la pregunta
    content = content.replace(original_text, new_question)
    # Luego reemplazamos el contenido de la respuesta usando regex para el párrafo
    # Pero el párrafo es el mismo para todos, así que mejor buscamos el bloque completo
    return content

# Definición de cambios
changes = [
    {
        "old_q": "¿Qué servicios ofrece Niumedia?",
        "new_q": "¿Qué es una Consultoría de Crecimiento Digital basada en ROI?",
        "new_a": "Es un enfoque centrado en resultados tangibles. A diferencia de las agencias que solo miden 'likes', nosotros medimos el Retorno de Inversión (ROI) de cada peso invertido en marketing, asegurando que tus estrategias digitales generen ventas reales y crecimiento rentable."
    },
    {
        "old_q": "Can you update my existing website?",
        "new_q": "¿Cómo utilizan la IA en mis procesos de marketing?",
        "new_a": "Implementamos agentes de IA y automatización para optimizar tareas repetitivas, calificar leads en tiempo real y personalizar la experiencia del cliente a escala. Esto permite que tu equipo comercial se enfoque en cerrar ventas mientras la tecnología nutre a los prospectos 24/7."
    },
    {
        "old_q": "Will I have input in the design process?",
        "new_q": "¿Soy dueño de mis activos en HubSpot si dejamos de trabajar juntos?",
        "new_a": "Sí, totalmente. Como HubSpot Partners, configuramos tu portal de manera que tú seas el propietario único de toda la data, flujos y activos. Nuestra meta es que te quedes con nosotros por los resultados, no por una dependencia técnica."
    },
    {
        "old_q": "How much does a new website cost?",
        "new_q": "¿En cuánto tiempo veré resultados reales con el Inbound Marketing?",
        "new_a": "El Inbound es una estrategia de mediano a largo plazo que genera autoridad y activos digitales permanentes. Típicamente, los primeros resultados de tracción se ven entre el mes 3 y 6, volviéndose un motor exponencial de leads calificados conforme el sistema madura."
    },
    {
        "old_q": "Will my website be mobile-friendly?",
        "new_q": "¿Qué diferencia a Niumedia de una agencia tradicional?",
        "new_a": "Las agencias tradicionales suelen enfocarse en la creatividad o el manejo de redes. Niumedia se enfoca en sistemas de ventas. Integramos tecnología (HubSpot, IA) con marketing de desempeño para crear una máquina de crecimiento predecible y escalable."
    }
]

# El párrafo genérico que queremos reemplazar en cada uno
generic_p = "We’ve worked with clients across various industries, including retail, healthcare, technology, to education, hospitality, more. Our team every design to meet the unique needs your business."

for ch in changes:
    # Reemplazar la pregunta
    content = content.replace(ch["old_q"], ch["new_q"])

# Reemplazar el párrafo genérico de respuesta. Como hay varios, necesitamos hacerlo uno por uno o con cuidado.
# Los párrafos están en orden:
pattern_p = re.escape(generic_p)
for ch in changes:
    content = re.sub(pattern_p, ch["new_a"], content, count=1)

with open(file_path, 'w', encoding='utf-8') as f:
    f.write(content)

print("Actualización de FAQ completada con éxito vía Python.")
