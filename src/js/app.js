// Define a new component called todo-item
Vue.component("todo-item", {
	template: "<li>This is a todo</li>",
});

// Define a new component called tabs
Vue.component("tabs", {
	template: `<div>
    <ul
        class="list-none p-1.5 text-center overflow-auto whitespace-nowrap flex items-center mb-6"
    >
        <li
            v-for="(tab, index) in tabList"
            :key="index"
            class="w-full px-4 py-1.5 before:content-[''] font-bold text-sm"
            :class="{
                'text-fox-blue border-b-4 border-cyber-blue': index + 1 === activeTab,
                'text-med-slate border-b-2 border-med-slate': index + 1 !== activeTab
            }"
        >
            <label :for="index" v-text="tab" class="cursor-pointer block" />
            <input :id="index" type="radio" :name="index + '-tab'" :value="index + 1" v-model="activeTab" class="hidden" />
        </li>
    </ul>
    <transition appear name="fade" mode="out-in">
    <template v-for="(tab, index) in tabList">
        <div :key="index" v-if="index + 1 === activeTab" class="flex-grow p-4" :class="index">
            <slot :name="'tabpanel-' + (index + 1)"></slot>
        </div>
    </template>
</transition>
</div>`,
	props: {
		tabList: {
			type: Array,
			required: true,
		},
	},
	data() {
		return {
			activeTab: 1,
		};
	},
});

// Define a new component called item
// Vue.component("item", {
// 	name: "item",
// 	template: `<div>
//     <dt :id="item.id">
//         <button class="flex gap-4 items-center w-full py-4" @click="toggle" :class="buttonClass">
//             <div class="flex-1 text-left transition" :class="colorClass">
//                 <span :class="{ 'text-fox-red': item.active }">{{ item.title }}</span>
//             </div>
//             <svg class="w-6 h-6" viewBox="0 0 16 16" aria-hidden="true">
//                 <g
//                     class="arrow transition-transform duration-300 ease-expo-in will-change-transform"
//                     fill="none"
//                     stroke-linecap="round"
//                     stroke-miterlimit="10"
//                 >
//                     <path class="stroke-cyber-blue ease-expo-in" :class="{ 'stroke-fox-red': item.active }" d="M2 2l12 12" />
//                     <path class="stroke-cyber-blue ease-expo-in" :class="{ 'stroke-fox-red': item.active }" d="M14 2L2 14" />
//                 </g>
//             </svg>
//         </button>
//     </dt>
//     <transition
//         name="accordion-item"
//         @enter="startTransition"
//         @after-enter="endTransition"
//         @before-leave="startTransition"
//         @after-leave="endTransition"
//     >
//         <dd class="overflow-hidden" :class="contentClass" v-if="item.active">
//             <div
//                 class="py-2"
//                 :class="this.mode === 'dark_primary' || this.mode === 'dark_secondary' ? 'text-white' : 'text-fox-blue'"
//                 v-html="item.content"
//             ></div>
//         </dd>
//     </transition>
// </div>`,
// 	props: ["item", "mode", "align", "ismultiple"],
// 	computed: {
// 		buttonClass: function () {
// 			return {
// 				"is-active": this.item.active,
// 				"flex-row-reverse": this.align === "left",
// 			};
// 		},
// 		colorClass: function () {
// 			let cls = "";
// 			if (this.mode === "light") {
// 				cls = "text-lg md:text-3xl lg:text-4xl font-bold";
// 			} else if (
// 				this.mode === "dark_primary" ||
// 				this.mode === "dark_secondary"
// 			) {
// 				cls = "text-white text-lg md:text-3xl lg:text-4xl font-bold";
// 			} else {
// 				cls =
// 					"text-dark-slate text-base md:text-lg uppercase font-extrabold";
// 			}
// 			return cls;
// 		},
// 		contentClass: function () {
// 			if (this.align === "left") {
// 				var padding = "pl-10";
// 			} else {
// 				var padding = "pl-8 md:pl-16 lg:pl-36 lg:pr-8";
// 			}

// 			return padding;
// 		},
// 	},
// 	methods: {
// 		toggle(event) {
// 			if (this.ismultiple === true) {
// 				this.item.active = !this.item.active;
// 			} else {
// 				this.$parent.$children.forEach((item, index) => {
// 					if (
// 						item.$el.id ===
// 						event.currentTarget.parentElement.parentElement.id
// 					)
// 						item.item.active = !item.item.active;
// 					else item.item.active = false;
// 				});
// 			}
// 		},

// 		startTransition(el) {
// 			el.style.height = el.scrollHeight + "px";
// 		},

// 		endTransition(el) {
// 			el.style.height = "";
// 		},
// 	},
// });

// Define a new component called accordion-0
Vue.component("accordion-0", {
	name: "Accordion-0",
	template: `<dl role="presentation">
    <div v-for="(item, index) in content" :key="index" class="border-b-2 border-gray border-dotted">
    <dt :id="'faq-item-' + index">
        <button class="flex gap-4 items-center w-full py-4" @click="toggle(index)" :class="{'is-active': item.active}">
            <div class="flex-1 text-left transition text-base md:text-lg uppercase font-extrabold">
                <span :class="{ 'text-faded-cyber': item.active,
				'text-dark-slate': !item.active 
			 }">{{ item.question }}</span>
            </div>
            <svg class="w-6 h-6" viewBox="0 0 16 16" aria-hidden="true">
                <g
                    class="arrow transition-transform duration-300 ease-expo-in will-change-transform"
                    fill="none"
                    stroke-linecap="round"
                    stroke-miterlimit="10"
                >
                    <path class="stroke-cyber-blue ease-expo-in" :class="{ 'stroke-faded-cyber': item.active }" d="M2 2l12 12" />
                    <path class="stroke-cyber-blue ease-expo-in" :class="{ 'stroke-faded-cyber': item.active }" d="M14 2L2 14" />
                </g>
            </svg>
        </button>
    </dt>
    <transition
        name="accordion-item"
        @enter="startTransition"
        @after-enter="endTransition"
        @before-leave="startTransition"
        @after-leave="endTransition"
    >
        <dd class="overflow-hidden" v-if="item.active">
            <div
                class="py-2 text-fox-blue"
                v-html="item.answer"
            ></div>
        </dd>
    </transition>
</div>
</dl>`,
	props: ["data", "mode", "align", "ismultiple"],
	data() {
		return {
			content: this.data,
		};
	},
	created() {},
	destroyed() {
		window.removeEventListener("resize", this.resizeHandler);
	},
	computed: {
		buttonClass: function () {
			return {
				"is-active": this.item.active,
				"flex-row-reverse": this.align === "left",
			};
		},
	},
	methods: {
		toggle(index) {
			const btn = document.querySelector(
				".faq-full-0" + " #faq-item-" + index
			).firstElementChild;

			this.content.forEach((item) => {
				item.active = false;
			});

			if (btn.classList.contains("is-active")) {
				this.content[index].active = false;
			} else {
				this.content.forEach((item) => {
					item.active = false;
				});
				this.content[index].active = true;
			}
		},
		startTransition(el) {
			el.style.height = el.scrollHeight + "px";
		},

		endTransition(el) {
			el.style.height = "";
		},
		resizeHandler(fn) {
			// This holds the requestAnimationFrame reference, so we can cancel it if we wish
			let frame;

			// The debounce function returns a new function that can receive a variable number of arguments
			return (...params) => {
				// If the frame variable has been defined, clear it now, and queue for next frame
				if (frame) {
					cancelAnimationFrame(frame);
				}

				// Queue our function call for the next frame
				frame = requestAnimationFrame(() => {
					// Call our function and pass any params we received
					fn(...params);
				});
			};
		},
	},
});

// Define a new component called accordion-1
Vue.component("accordion-1", {
	name: "Accordion-1",
	template: `<dl role="presentation">
    <div v-for="(item, index) in content" :key="index" class="border-b-2 border-gray border-dotted">
    <dt :id="'faq-item-' + index">
        <button class="flex gap-4 items-center w-full py-4" @click="toggle(index)" :class="{'is-active': item.active}">
            <div class="flex-1 text-left transition text-base md:text-lg uppercase font-extrabold">
                <span :class="{ 'text-faded-cyber': item.active,
				'text-dark-slate': !item.active 
			 }">{{ item.question }}</span>
            </div>
            <svg class="w-6 h-6" viewBox="0 0 16 16" aria-hidden="true">
                <g
                    class="arrow transition-transform duration-300 ease-expo-in will-change-transform"
                    fill="none"
                    stroke-linecap="round"
                    stroke-miterlimit="10"
                >
                    <path class="stroke-cyber-blue ease-expo-in" :class="{ 'stroke-faded-cyber': item.active }" d="M2 2l12 12" />
                    <path class="stroke-cyber-blue ease-expo-in" :class="{ 'stroke-faded-cyber': item.active }" d="M14 2L2 14" />
                </g>
            </svg>
        </button>
    </dt>
    <transition
        name="accordion-item"
        @enter="startTransition"
        @after-enter="endTransition"
        @before-leave="startTransition"
        @after-leave="endTransition"
    >
        <dd class="overflow-hidden" v-if="item.active">
            <div
                class="py-2 text-fox-blue"
                v-html="item.answer"
            ></div>
        </dd>
    </transition>
</div>
</dl>`,
	props: ["data", "mode", "align", "ismultiple"],
	data() {
		return {
			content: this.data,
		};
	},
	created() {},
	destroyed() {
		window.removeEventListener("resize", this.resizeHandler);
	},
	computed: {
		buttonClass: function () {
			return {
				"is-active": this.item.active,
				"flex-row-reverse": this.align === "left",
			};
		},
	},
	methods: {
		toggle(index) {
			const btn = document.querySelector(
				".faq-full-1" + " #faq-item-" + index
			).firstElementChild;

			if (btn.classList.contains("is-active")) {
				this.content[index].active = false;
			} else {
				this.content.forEach((item) => {
					item.active = false;
				});
				this.content[index].active = true;
			}
		},
		startTransition(el) {
			el.style.height = el.scrollHeight + "px";
		},

		endTransition(el) {
			el.style.height = "";
		},
		resizeHandler(fn) {
			// This holds the requestAnimationFrame reference, so we can cancel it if we wish
			let frame;

			// The debounce function returns a new function that can receive a variable number of arguments
			return (...params) => {
				// If the frame variable has been defined, clear it now, and queue for next frame
				if (frame) {
					cancelAnimationFrame(frame);
				}

				// Queue our function call for the next frame
				frame = requestAnimationFrame(() => {
					// Call our function and pass any params we received
					fn(...params);
				});
			};
		},
	},
});

// Define a new component called accordion-2
Vue.component("accordion-2", {
	name: "Accordion-2",
	template: `<dl role="presentation">
    <div v-for="(item, index) in content" :key="index" class="border-b-2 border-gray border-dotted">
    <dt :id="'faq-item-' + index">
        <button class="flex gap-4 items-center w-full py-4" @click="toggle(index)" :class="{'is-active': item.active}">
            <div class="flex-1 text-left transition text-base md:text-lg uppercase font-extrabold">
                <span :class="{ 'text-faded-cyber': item.active,
								'text-dark-slate': !item.active }
								">{{ item.question }}</span>
            </div>
            <svg class="w-6 h-6" viewBox="0 0 16 16" aria-hidden="true">
                <g
                    class="arrow transition-transform duration-300 ease-expo-in will-change-transform"
                    fill="none"
                    stroke-linecap="round"
                    stroke-miterlimit="10"
                >
                    <path class="stroke-cyber-blue ease-expo-in" :class="{ 'stroke-faded-cyber': item.active }" d="M2 2l12 12" />
                    <path class="stroke-cyber-blue ease-expo-in" :class="{ 'stroke-faded-cyber': item.active }" d="M14 2L2 14" />
                </g>
            </svg>
        </button>
    </dt>
    <transition
        name="accordion-item"
        @enter="startTransition"
        @after-enter="endTransition"
        @before-leave="startTransition"
        @after-leave="endTransition"
    >
        <dd class="overflow-hidden" v-if="item.active">
            <div
                class="py-2 text-fox-blue"
                v-html="item.answer"
            ></div>
        </dd>
    </transition>
</div>
</dl>`,
	props: ["data", "mode", "align", "ismultiple"],
	data() {
		return {
			content: this.data,
		};
	},
	created() {},
	destroyed() {
		window.removeEventListener("resize", this.resizeHandler);
	},
	computed: {
		buttonClass: function () {
			return {
				"is-active": this.item.active,
				"flex-row-reverse": this.align === "left",
			};
		},
	},
	methods: {
		toggle(index) {
			const btn = document.querySelector(
				".faq-full-2" + " #faq-item-" + index
			).firstElementChild;

			if (btn.classList.contains("is-active")) {
				this.content[index].active = false;
			} else {
				this.content.forEach((item) => {
					item.active = false;
				});
				this.content[index].active = true;
			}
		},
		startTransition(el) {
			el.style.height = el.scrollHeight + "px";
		},

		endTransition(el) {
			el.style.height = "";
		},
		resizeHandler(fn) {
			// This holds the requestAnimationFrame reference, so we can cancel it if we wish
			let frame;

			// The debounce function returns a new function that can receive a variable number of arguments
			return (...params) => {
				// If the frame variable has been defined, clear it now, and queue for next frame
				if (frame) {
					cancelAnimationFrame(frame);
				}

				// Queue our function call for the next frame
				frame = requestAnimationFrame(() => {
					// Call our function and pass any params we received
					fn(...params);
				});
			};
		},
	},
});

// Define a new component called accordion-2
Vue.component("accordion-3", {
	name: "Accordion-3",
	template: `<dl role="presentation">
    <div v-for="(item, index) in content" :key="index" class="border-b-2 border-gray border-dotted">
    <dt :id="'faq-item-' + index">
        <button class="flex gap-4 items-center w-full py-4" @click="toggle(index)" :class="{'is-active': item.active}">
            <div class="flex-1 text-left transition text-base md:text-lg uppercase font-extrabold">
                <span :class="{ 'text-faded-cyber': item.active,
								'text-dark-slate': !item.active }
								">{{ item.question }}</span>
            </div>
            <svg class="w-6 h-6" viewBox="0 0 16 16" aria-hidden="true">
                <g
                    class="arrow transition-transform duration-300 ease-expo-in will-change-transform"
                    fill="none"
                    stroke-linecap="round"
                    stroke-miterlimit="10"
                >
                    <path class="stroke-cyber-blue ease-expo-in" :class="{ 'stroke-faded-cyber': item.active }" d="M2 2l12 12" />
                    <path class="stroke-cyber-blue ease-expo-in" :class="{ 'stroke-faded-cyber': item.active }" d="M14 2L2 14" />
                </g>
            </svg>
        </button>
    </dt>
    <transition
        name="accordion-item"
        @enter="startTransition"
        @after-enter="endTransition"
        @before-leave="startTransition"
        @after-leave="endTransition"
    >
        <dd class="overflow-hidden" v-if="item.active">
            <div
                class="py-2 text-fox-blue"
                v-html="item.answer"
            ></div>
        </dd>
    </transition>
</div>
</dl>`,
	props: ["data", "mode", "align", "ismultiple"],
	data() {
		return {
			content: this.data,
		};
	},
	created() {},
	destroyed() {
		window.removeEventListener("resize", this.resizeHandler);
	},
	computed: {
		buttonClass: function () {
			return {
				"is-active": this.item.active,
				"flex-row-reverse": this.align === "left",
			};
		},
	},
	methods: {
		toggle(index) {
			const btn = document.querySelector(
				".faq-full-3" + " #faq-item-" + index
			).firstElementChild;

			if (btn.classList.contains("is-active")) {
				this.content[index].active = false;
			} else {
				this.content.forEach((item) => {
					item.active = false;
				});
				this.content[index].active = true;
			}
		},
		startTransition(el) {
			el.style.height = el.scrollHeight + "px";
		},

		endTransition(el) {
			el.style.height = "";
		},
		resizeHandler(fn) {
			// This holds the requestAnimationFrame reference, so we can cancel it if we wish
			let frame;

			// The debounce function returns a new function that can receive a variable number of arguments
			return (...params) => {
				// If the frame variable has been defined, clear it now, and queue for next frame
				if (frame) {
					cancelAnimationFrame(frame);
				}

				// Queue our function call for the next frame
				frame = requestAnimationFrame(() => {
					// Call our function and pass any params we received
					fn(...params);
				});
			};
		},
	},
});

// Define a new component called animated-list
Vue.component("animated-list", {
	template: "<div><slot name='body'></slot></div>",
	mounted: function () {
		let elements = this.$el.querySelectorAll("li");

		if ("IntersectionObserver" in window) {
			var observer = new IntersectionObserver(
				function (entries, observer) {
					entries.forEach(function (entry, i) {
						if (entry.isIntersecting) {
							elements.forEach((element, i) => {
								setTimeout(function () {
									element.firstChild.classList.add(
										"opacity-100"
									);
									element.classList.add("animate");
								}, i * 300);
							});

							observer.unobserve(entry.target);
						}
					});
				},
				{ threshold: 0.6 }
			);

			observer.observe(this.$el);
		}
	},
});

var app = new Vue({
	el: "#app",
	data: {
		message: "Hello Vue!",
	},
	mounted: function () {},
});
