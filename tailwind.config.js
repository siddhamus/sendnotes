import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./vendor/wireui/wireui/src/**/*.php",
        "./vendor/wireui/wireui/ts/**/*.ts",
        "./vendor/wireui/wireui/src/View/**/*.php",
        "./vendor/wireui/wireui/src/WireUi/**/*.php",
        "./vendor/wireui/wireui/src/resources/**/*.blade.php",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: defaultTheme.colors.indigo,
                secondary: defaultTheme.colors.gray,
                positive: defaultTheme.colors.emerald,
                negative: defaultTheme.colors.red,
                warning: defaultTheme.colors.amber,
                info: defaultTheme.colors.blue,
            },
        },
    },
    presets: [require("./vendor/wireui/wireui/tailwind.config.js")],
    plugins: [forms],
};
