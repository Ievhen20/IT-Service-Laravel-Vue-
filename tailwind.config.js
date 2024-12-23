import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
    './resources/js/**/*.vue',
  ],

  theme: {
    extend: {
      fontFamily: {
        sans: ['Figtree', ...defaultTheme.fontFamily.sans],
      },
      boxShadow: {
        'custom': '0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)',
      },
      clipPath: {
        'polygon-1': 'polygon(0 14%, 100% 0%, 100% 100%, 0% 100%)',
      },
      keyframes: {
        outlineAnimation: {
          '0%': { outlineWidth: '1px', opacity: '1' },
          '100%': { outlineWidth: '16px', opacity: '0' },
        },
      },
      animation: {
        'outline-animation': 'outlineAnimation 1.5s infinite',
      },
    },
  },

  plugins: [
    forms,
    function ({ addUtilities, theme, e }) {
      addUtilities(
        {
          '.clip-polygon-1': {
            clipPath: theme('clipPath.polygon-1'),
          },
        },
        ['responsive', 'hover']
      );
    },
  ],
};
