/** @type {import('tailwindcss').Config} */

module.exports = {
	content: ["./**/*.{html,php}", "./**/*.php", "./src/js/app.js"],
	mode: "jit",
	safelist: [""],
	darkMode: "media", // or 'media' or 'class'
	theme: {
		colors: {
			transparent: "transparent",
			current: "currentColor",
			"dark-red": "#a51e23",
			"fox-red": "#e7282b",
			"cyber-blue": "#24e4eb",
			"threat-orange": "#ff8022",
			black: "#131e29",
			"fox-blue": "#002539",
			blue: "#1d3c4c",
			"dark-slate": "#5a6f76",
			"med-slate": "#7d9096",
			"light-slate": "#b6c6cb",
			"faded-slate": "#E9EEEF",
			gray: "#e0e0e0",
			"light-gray": "#f7f7f7",
			"faded-cyber": "#0F7785",
			white: "#ffffff",
		},
		container: {
			center: true,
		},
		customGroups: {
			names: ["menu", "button"],
		},
		fontFamily: {
			sans: ["Poppins", "sans-serif"],
			serif: ["Lora", "serif"],
			mono: ["Roboto", "monospace"],
		},
		fontSize: {
			xs: ["0.75rem", { lineHeight: "normal" }], // 12/17
			sm: ["0.875rem", { lineHeight: "1.428" }], // 14/20
			md: ["0.9375rem", { lineHeight: "1" }], // 15/15
			base: ["1rem", { lineHeight: "1.5625" }], // 16/25
			lg: ["1.125rem", { lineHeight: "1.35" }], // 18/20
			xl: ["1.25rem", { lineHeight: "1.35" }], // 20/27
			"2xl": ["1.3125rem", { lineHeight: "1.095" }], // 21/23
			"3xl": ["1.375rem", { lineHeight: "1.09" }], // 22/24
			"4xl": ["1.5rem", { lineHeight: "1.25" }], // 24/30
			"5xl": ["1.6875rem", { lineHeight: "1.074" }], // 27/29
			"6xl": ["1.875rem", { lineHeight: "1.066" }], // 30/32
			"7xl": ["2.1875rem", { lineHeight: "1.057" }], // 35/37
			"8xl": ["2.5rem", { lineHeight: "1.05" }], // 40/42
			"9xl": ["2.6875rem", { lineHeight: "1.046" }], // 43/45
			"10xl": ["2.8125rem", { lineHeight: "1.133" }], // 45/51
			"11xl": ["3.25rem", { lineHeight: "1.038" }], // 52/54
			"12xl": ["3.4375rem", { lineHeight: "1.036" }], // 55/57
			"13xl": ["3.625rem", { lineHeight: "1.034" }], // 58/60
			"14xl": ["3.75rem", { lineHeight: "1.05" }], // 60/63
			"15xl": ["4.0625rem", { lineHeight: "1.046" }], // 65/68
			"16xl": ["4.6875rem", { lineHeight: "1.04" }], // 75/78
			"17xl": ["5.313rem", { lineHeight: "1" }], // 85/85
			"quote-lg": ["14rem", { lineHeight: "1" }], // 224/224
			"quote-md": ["12.5rem", { lineHeight: "1" }], // 200/200
			"quote-sm": ["11.25rem", { lineHeight: "1" }], // 180/180
		},
		fontWeight: {
			light: "300",
			normal: "400",
			semibold: "600",
			bold: "700",
			extrabold: "800",
		},
		screens: {
			xs: "480px",
			sm: "640px",
			md: "768px",
			lg: "1024px",
			xl: "1280px",
			"2xl": "1640px",
			"3xl": "1768px",
		},
		extend: {
			borderWidth: {
				3: "3px",
				5: "5px",
				6: "6px",
				9: "9px",
				14: "14px",
			},
			boxShadow: {
				xs: "0 0 16px rgb(0 0 0 / 0.2)",
			},
			gap: {
				2.5: "0.625rem",
			},
			height: {
				0.75: "3px",
			},
			maxWidth: {
				"8xl": "1640px",
			},
			padding: {
				2.75: "0.688rem",
			},
			scale: {
				101: "1.1",
			},
			textDecorationThickness: {
				3: "3px",
			},
			textUnderlineOffset: {
				3: "3px",
			},
			transitionTimingFunction: {
				"in-expo": "cubic-bezier(0.95, 0.05, 0.795, 0.035)",
				"out-expo": "cubic-bezier(0.19, 1, 0.22, 1)",
				"expo-in": "cubic-bezier(.215,.61,.355,1)",
			},
			willChange: {
				opacity: "opacity",
			},
			zIndex: {
				1: "1",
				2: "2",
				200: "200",
			},
			keyframes: {
				"icon-scroll": {
					to: {
						transform: "translateX(calc(200vw * -0.5))",
					},
				},
				"fade-in-up": {
					to: {
						opacity: "1",
						visibility: "visible",
						transform: "translate3d(-50%,0,0)",
					},
				},
				"down-arrow": {
					"0%, to": {
						animationTimingFunction: "cubic-bezier(.8,0,1,1)",
						transform: "translateY(-50%)",
					},
					"50%": {
						animationTimingFunction: "cubic-bezier(0,0,.2,1)",
						transform: "translateY(0)",
					},
				},
			},
			animation: {
				"spin-slow": "spin 2s linear infinite",
				"icon-scroll-fast": "icon-scroll 20s linear 0s normal infinite",
				"icon-scroll": "icon-scroll 40s linear 0s normal infinite",
				"fade-in-up": "fade-in-up .3s ease forwards 150ms",
				"down-arrow": "down-arrow 1.5s infinite",
			},
		},
	},
	variants: {
		height: ["responsive", "stuck"],
		// or with extending the default variants
		// @see https://tailwindcss.com/docs/configuring-variants#extending-default-variants
		backgroundColor: ({ after }) => after(["stuck", "group-stuck"]),
		// or in Tailwind CSS >= v2.0
		extend: {
			backgroundColor: ["stuck", "group-stuck"],
			animation: ["hover", "group-hover"],
			display: ["group-hover"],
		},
	},
	plugins: [],
};
