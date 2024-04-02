import preset from '../../../../vendor/filament/filament/tailwind.config.preset'
import defaultTheme from "tailwindcss/defaultTheme.js";

export default {
    presets: [preset],
    content: [
        './app/Filament/**/*.php',
        './resources/views/filament/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
        './vendor/awcodes/filament-tiptap-editor/resources/**/*.blade.php',
        './vendor/awcodes/filament-curator/resources/**/*.blade.php',
        './vendor/awcodes/preset-color-picker/resources/views/**/*.blade.php'
    ],
}
