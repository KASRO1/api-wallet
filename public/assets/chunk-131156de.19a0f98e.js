(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-131156de"],{"6aef":function(e,t,i){},cebf:function(e,t,i){"use strict";var n=i("6aef"),o=i.n(n);o.a},f535:function(e,t,i){"use strict";i.r(t);var n=function(){var e=this,t=e.$createElement,i=e._self._c||t;return i("div",{staticClass:"iframe-video grid-column-12 grid-column-6--lg bg-no-repeat bg-cover bg-center relative",style:{backgroundImage:"url(/img/video-meeting."+e.PREFERABLE_IMAGE_FORMAT}},[e.youtubeVideoShown?i("div",{staticClass:"iframe-video"},[i("div",{staticClass:"absolute center color-white"},[e._v(" "+e._s(e.$t("ui.loading"))+" ")]),i("iframe",{attrs:{width:"560",height:"315",src:"https://www.youtube.com/embed/mfLDpYGQUJE",frameborder:"0",allow:"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture",allowfullscreen:""}})]):i("div",{staticClass:"iframe-video-trigger flex flex-column justify-center items-center absolute stretch z-index-1 overflow-hidden cursor-pointer",attrs:{tabindex:"0"},on:{click:function(t){e.youtubeVideoShown=!0}}},[i("div",{staticClass:"iframe-video-trigger__play flex flex-column items-center color-white"},[i("icon-triangle-right",{staticClass:"height-2-5 fill-white margin-bottom-2"}),i("div",{staticClass:"text-accent font-medium no-select"},[e._v(e._s(e.$t("ui.play_video")))])],1),i("icon-globe-orange",{staticClass:"iframe-video-trigger__icon hidden block--sm absolute bottom-0 right-0"})],1)])},o=[],r=(i("d3b7"),{name:"VideoIframe",components:{IconTriangleRight:function(){return i.e("chunk-2184f6d6").then(i.t.bind(null,"904f",7))},IconGlobeOrange:function(){return i.e("chunk-13846304").then(i.t.bind(null,"82a9",7))}},data:function(){return{youtubeVideoShown:!1}},computed:{PREFERABLE_IMAGE_FORMAT:function(e){return e.$store.getters["global/PREFERABLE_IMAGE_FORMAT"]}}}),c=r,a=(i("cebf"),i("2877")),l=Object(a["a"])(c,n,o,!1,null,"17b8cd93",null);t["default"]=l.exports}}]);