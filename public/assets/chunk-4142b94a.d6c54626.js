(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-4142b94a","chunk-316f9acc"],{"07e6":function(e,t,n){"use strict";var r=n("3a1a"),o=n.n(r);o.a},"3a1a":function(e,t,n){},4082:function(e,t,n){n("a4d3"),n("c975");var r=n("f0e4");function o(e,t){if(null==e)return{};var n,o,i=r(e,t);if(Object.getOwnPropertySymbols){var a=Object.getOwnPropertySymbols(e);for(o=0;o<a.length;o++)n=a[o],t.indexOf(n)>=0||Object.prototype.propertyIsEnumerable.call(e,n)&&(i[n]=e[n])}return i}e.exports=o},"90ca":function(e,t,n){"use strict";n.r(t);var r=function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("div",{staticClass:"lang-menu relative no-select z-index-1",class:{"lang-menu--bottom":e.bottom,"flex flex-column items-center width-full":e.mobile}},[n("button",{staticClass:"flex items-center text-accent padding-1 border-rounded-3",class:{"hover-shade color-white":!e.iconButton},attrs:{type:"button"},on:{click:function(t){e.isMenuShown=!0}}},[n("div",{staticClass:"flex margin-right-2 width-1-75 height-1-75"},[n("svg",{staticClass:"flag border-round",attrs:{width:"100%",viewBox:"0 0 16 16",xmlns:"http://www.w3.org/2000/svg",role:"presentation"}},[n("g",[n(e.localeFlag(e.LOCALES_LIST.active.slug),{tag:"component"})],1)])]),n("span",[e._v(e._s(e.LOCALES_LIST.active.locale))]),n("icon-triangle-down",{staticClass:"icon-triangle-down height-0-25 margin-left-2",class:[{"icon-triangle-down--active":e.isMenuShown},e.iconButton?"fill-default":"fill-white"]})],1),n("transition",{attrs:{name:e.bottom?"fade":"fade-in-scale-down-center"}},[e.isMenuShown?n("div",{directives:[{name:"on-clickaway",rawName:"v-on-clickaway",value:e.reset,expression:"reset"}],class:{"width-full":e.mobile}},[n("div",{staticClass:"lang-menu__body",class:[e.bottom?"bottom-full margin-bottom-3":"top-full margin-top-3",{"absolute center-x":!e.mobile}]},[n("div",{staticClass:"flex flex-column bg-white border-rounded-3 overflow-hidden shadow"},[n("div",{staticClass:"lang-menu__input padding-3"},[n("div",{staticClass:"flex items-center border-bottom"},[n("base-input",{ref:"input",class:e.mobile?"width-full":"width-10",attrs:{type:"text",placeholder:e.$t("placeholder.search")},model:{value:e.search,callback:function(t){e.search="string"===typeof t?t.trim():t},expression:"search"}})],1)]),n("ul",{staticClass:"grid no-list margin-y-0 padding-left-0"},e._l(e.localesListAutocomplete,(function(t){return n("li",{key:t.locale,staticClass:"border-rounded-3 grid-column-6 grid-column-4--sm grid-column-3--md grid-column-6--lg flex items-center cursor-pointer no-outline text-accent padding-x-3 padding-y-2",class:t.locale===e.$LOCALE?"bg-primary-gradient color-white":"hover-shade",attrs:{title:t.title,tabindex:"0"},on:{click:function(n){return e.fetchLocale(t.locale)},keyup:function(n){return!n.type.indexOf("key")&&e._k(n.keyCode,"enter",13,n.key,"Enter")?null:e.fetchLocale(t.locale)}}},[n("div",{staticClass:"flex margin-right-2 width-1-75 height-1-75"},[n("svg",{staticClass:"flag border-round",attrs:{width:"100%",viewBox:"0 0 16 16",xmlns:"http://www.w3.org/2000/svg",role:"presentation"}},[n("g",[n(e.localeFlag(t.slug),{tag:"component"})],1)])]),n("span",[e._v(e._s(t.locale))])])})),0)])])]):e._e()])],1)},o=[],i=(n("4de4"),n("d3b7"),n("4d63"),n("ac1f"),n("25f0"),n("5319"),n("841c"),n("96cf"),n("1da1")),a=n("5530"),c=n("2f62"),l=n("6531"),s=new l["CountryIcons"],u={name:"LangMenu",components:{IconArrowDown:function(){return n.e("chunk-2d217ac8").then(n.t.bind(null,"c874",7))},IconTriangleDown:function(){return n.e("chunk-2d0af809").then(n.t.bind(null,"0f30",7))}},props:{bottom:{type:Boolean,default:!1},mobile:{type:Boolean,default:!1},iconButton:{type:Boolean,default:!1}},data:function(){return{isMenuShown:!1,search:""}},computed:Object(a["a"])(Object(a["a"])({},Object(c["b"])({LOCALES_LIST:"global/LOCALES_LIST"})),{},{localesListAutocomplete:function(){if(!this.search)return this.LOCALES_LIST.items;var e=new RegExp(this.search,"gi");return this.LOCALES_LIST.items.filter((function(t){if(e.test(t.title)||e.test(t.slug))return!0}))}}),watch:{isMenuShown:function(e){var t=this;this.$nextTick((function(){return!!e&&t.$focusInput("input")}))}},methods:{localeFlag:function(e){var t=s.getItemBy("alpha2",e),r=t.svg;return!!r&&n("fc1b")("./".concat(r))},fetchLocale:function(e){var t=this;return Object(i["a"])(regeneratorRuntime.mark((function n(){return regeneratorRuntime.wrap((function(n){while(1)switch(n.prev=n.next){case 0:return t.reset(),n.next=3,t.$store.dispatch("global/fetchTranslations",e);case 3:document.title=document.$TITLE_TEMPLATE.replace("%title%",t.$t(t.$route.meta.title));case 4:case"end":return n.stop()}}),n)})))()},reset:function(){this.isMenuShown=!1,this.search=""}}},d=u,f=(n("07e6"),n("2877")),p=Object(f["a"])(d,r,o,!1,null,"0298d4cc",null);t["default"]=p.exports},9523:function(e,t){function n(e,t,n){return t in e?Object.defineProperty(e,t,{value:n,enumerable:!0,configurable:!0,writable:!0}):e[t]=n,e}e.exports=n},ded3:function(e,t,n){n("a4d3"),n("4de4"),n("4160"),n("e439"),n("dbb4"),n("b64b"),n("159b");var r=n("9523");function o(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),n.push.apply(n,r)}return n}function i(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?o(Object(n),!0).forEach((function(t){r(e,t,n[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):o(Object(n)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))}))}return e}e.exports=i},f0e4:function(e,t,n){function r(e,t){if(null==e)return{};var n,r,o={},i=Object.keys(e);for(r=0;r<i.length;r++)n=i[r],t.indexOf(n)>=0||(o[n]=e[n]);return o}n("c975"),n("b64b"),e.exports=r}}]);