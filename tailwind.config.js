/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                ubuntu: ['ubuntu'],
                poppins: ['poppins']
            },
            screen: {
                'sm': '680px'
            }
        },
    },
    plugins: [],
}
