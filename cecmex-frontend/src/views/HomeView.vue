<script setup>
import { ref, onMounted } from 'vue';
import api from '../api';

const cursos = ref([]);
const error = ref(null);

onMounted(async () => {
  try {
    const response = await api.get('/courses'); 
    
    // AQUÍ ESTÁ EL TRUCO: Tu JSON tiene los cursos dentro de 'data'
    // response.data es el objeto completo, response.data.data es el arreglo
    cursos.value = response.data.data; 
    
  } catch (e) {
    console.error("Error al conectar con el backend:", e);
    error.value = "No se pudo conectar con el servidor. Revisa CORS o la ruta.";
  }
});
</script>

<template>
  <div style="padding: 20px; font-family: sans-serif;">
    <h1>Catálogo de Cursos CECMEX</h1>
    
    <div v-if="error" style="color: red; font-weight: bold;">
      {{ error }}
    </div>

    <div v-else-if="cursos.length === 0">
      Cargando cursos desde la base de datos...
    </div>

    <ul v-else style="list-style-type: none; padding: 0;">
      <!-- Usamos 'title' y 'description' porque así vienen en tu JSON -->
      <li v-for="curso in cursos" :key="curso.id" style="border: 1px solid #ccc; margin-bottom: 15px; padding: 15px; border-radius: 8px; background-color: #f9f9f9;">
        <h2 style="color: #2c3e50; margin-top: 0;">{{ curso.title }}</h2>
        <p style="color: #555;">{{ curso.description }}</p>
        <p style="font-size: 0.9em; color: #888;">
          <strong>Modalidad:</strong> {{ curso.modality }} | 
          <strong>Precio:</strong> ${{ curso.price }} MXN
        </p>
      </li>
    </ul>
  </div>
</template>