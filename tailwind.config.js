import colors from 'tailwindcss/colors'
import forms from '@tailwindcss/forms'
import typography from '@tailwindcss/typography'

export default {
    content: [
        './resources/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
    ],
    theme: {
        extend: {
            colors: {
                danger: colors.rose,
                primary: colors.red,
                success: colors.green,
                warning: colors.yellow,
            },
        },
    },
    plugins: [
        forms,
        typography,
    ],
}
