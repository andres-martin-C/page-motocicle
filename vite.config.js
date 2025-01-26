// vite.config.js
import { defineConfig } from "vite";
import tailwindcss from "@tailwindcss/vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        tailwindcss(),
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
    ],
    server: {
        host: "0.0.0.0", // Esto asegura que Vite escuche en todas las interfaces de red.
        port: 5173, // El puerto en el que Vite está sirviendo los archivos estáticos.
        cors: true, // Habilitar CORS para permitir que otros dispositivos accedan a los recursos.
    },
});
