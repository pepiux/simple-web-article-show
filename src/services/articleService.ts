
import { dataSource } from '../config';
import { mockArticles } from '../data/mockArticles';

// Interfaz para el modelo de artículo
export interface Article {
  id: number;
  titulo: string;
  contenido: string;
  imagen: string;
  autor: string;
  fecha_publicacion: string;
}

/**
 * Obtiene los artículos desde el origen configurado (mock o backend)
 * @returns Promise con array de artículos
 */
export const getArticles = async (): Promise<Article[]> => {
  // Si estamos en modo 'mock', devolvemos los datos simulados
  if (dataSource === 'mock') {
    // Simulamos un pequeño retraso para emular una llamada a API
    return new Promise((resolve) => {
      setTimeout(() => {
        resolve(mockArticles);
      }, 500);
    });
  }
  
  // Si estamos en modo 'backend', hacemos la llamada real al backend PHP
  try {
    const response = await fetch('/php/get_articles.php');
    if (!response.ok) {
      throw new Error('Error al obtener artículos del backend');
    }
    const data = await response.json();
    return data;
  } catch (error) {
    console.error('Error en la llamada al backend:', error);
    // Si falla la llamada al backend, podemos devolver los datos mock como fallback
    return mockArticles;
  }
};
