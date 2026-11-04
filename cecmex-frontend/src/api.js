import axios from 'axios';

const api = axios.create({
  baseURL: 'http://127.0.0.1:8000/api', // Asegúrate de que esta sea la ruta de tu API
  headers: {
    'Content-Type': 'application/json',
    'Accept': 'application/json'
  }
});

export default api;