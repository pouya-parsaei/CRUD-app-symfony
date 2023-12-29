let tailwindcss = require('tailwindcss')

module.exports = {
    plugins: [
        tailwindcss('./tailwind.config.css'),
        require('postcss-import'),
        require('autoprefixer')
    ],
}
