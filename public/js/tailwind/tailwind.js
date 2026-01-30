tailwind.config = {
    theme: {
        extend: {
            fontFamily: {
                sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                display: ['"Montserrat"', 'sans-serif'],
            },
            colors: {
                gold: {
                    400: '#FACC15',
                    500: '#EAB308',
                    600: '#CA8A04',
                    glow: 'rgba(234, 179, 8, 0.5)'
                },
                dark: {
                    bg: '#050505',
                    surface: '#0A0A0A',
                    border: '#1F1F1F',
                }
            },
            animation: {
                'blob': 'blob 10s infinite',
                'shimmer': 'shimmer 2s linear infinite',
                'scroll': 'scroll 30s linear infinite',
            },
            keyframes: {
                blob: {
                    '0%': { transform: 'translate(0px, 0px) scale(1)' },
                    '33%': { transform: 'translate(30px, -50px) scale(1.1)' },
                    '66%': { transform: 'translate(-20px, 20px) scale(0.9)' },
                    '100%': { transform: 'translate(0px, 0px) scale(1)' },
                },
                shimmer: {
                    from: { backgroundPosition: '0 0' },
                    to: { backgroundPosition: '-200% 0' },
                },
                scroll: {
                    '0%': { transform: 'translateX(0)' },
                    '100%': { transform: 'translateX(-50%)' }
                }
            }
        }
    }
}
