import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.js",
                "styleAdmin/css/sb-admin-2.min.css",
            ],
            refresh: true,
        }),
    ],
});
