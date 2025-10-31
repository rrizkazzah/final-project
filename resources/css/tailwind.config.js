import formsPlugin from '@tailwindcss/forms';
import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./index.html",
    "./src/**/*.{js,css}",
  ],
  darkMode: 'class', // Mengaktifkan mode gelap berbasis class
  theme: {
    extend: {
      // Definisi font kustom
      fontFamily: {
        sans: ['Inter', ...defaultTheme.fontFamily.sans],
        serif: ['Playfair Display', ...defaultTheme.fontFamily.serif],
      },
      // Definisi palet warna kustom
      colors: {
        // Mode Terang (Light Mode)
        primary: '#C8A46B',
        'primary-content': '#ffffff', // Teks di atas primary
        secondary: '#4A4540',
        'secondary-content': '#ffffff', // Teks di atas secondary
        accent: '#9A8C78',
        neutral: '#2A2623', // Untuk footer/bg gelap
        'neutral-content': '#F9F6F3', // Teks di atas neutral
        'base-100': '#F9F6F3', // Background utama
        'base-200': '#EAE4DD', // Background sekunder (lebih gelap sedikit)
        'base-300': '#DCD3C9',
        'base-content': '#4A4540', // Teks utama

        // Warna semantik (FIXED: Menambahkan 'content' untuk setiap warna)
        info: {
          DEFAULT: '#3ABFF8',
          content: '#00529B' // Teks gelap untuk latar belakang info
        },
        success: {
          DEFAULT: '#36D399',
          content: '#004225' // Teks gelap untuk latar belakang success
        },
        warning: {
          DEFAULT: '#FBBD23',
          dark: '#E2A81B',
          content: '#664D03' // Teks gelap untuk latar belakang warning
        },
        danger: {
          DEFAULT: '#F87272',
          dark: '#E06464',
          content: '#58151C' // Teks gelap untuk latar belakang danger
        },

        // Mode Gelap (Dark Mode)
        'dark-primary': '#D1AD7B',
        'dark-primary-content': '#1A1816',
        'dark-secondary': '#EAE4DD',
        'dark-secondary-content': '#2A2623',
        'dark-accent': '#B0A391',
        'dark-neutral': '#1A1816', // BG tergelap di dark mode
        'dark-neutral-content': '#EAE4DD',
        'dark-base-100': '#2A2623', // Background utama dark
        'dark-base-200': '#3A3633', // Background sekunder dark
        'dark-base-300': '#4A423D',
        'dark-base-content': '#F9F6F3', // Teks utama dark
      },
      // Menambahkan transisi untuk backdrop-blur-sm
      transitionProperty: {
        'height': 'height',
        'spacing': 'margin, padding',
        'blur-sm': 'backdrop-filter',
      },
    },
  },
  plugins: [
    // Mendaftarkan plugin form
    formsPlugin,
  ],
};

