(window.webpackJsonp=window.webpackJsonp||[]).push([[2],{332:function(t,e,n){},333:function(t,e,n){t.exports=function(){"use strict";return function(t,e,n){var a=e.prototype,r=a.format;n.en.ordinal=function(t){var e=["th","st","nd","rd"],n=t%100;return"["+t+(e[(n-20)%10]||e[n]||e[0])+"]"},a.format=function(t){var e=this,n=this.$locale(),a=this.$utils(),s=(t||"YYYY-MM-DDTHH:mm:ssZ").replace(/\[([^\]]+)]|Q|wo|ww|w|WW|W|zzz|z|gggg|GGGG|Do|X|x|k{1,2}|S/g,(function(t){switch(t){case"Q":return Math.ceil((e.$M+1)/3);case"Do":return n.ordinal(e.$D);case"gggg":return e.weekYear();case"GGGG":return e.isoWeekYear();case"wo":return n.ordinal(e.week(),"W");case"w":case"ww":return a.s(e.week(),"w"===t?1:2,"0");case"W":case"WW":return a.s(e.isoWeek(),"W"===t?1:2,"0");case"k":case"kk":return a.s(String(0===e.$H?24:e.$H),"k"===t?1:2,"0");case"X":return Math.floor(e.$d.getTime()/1e3);case"x":return e.$d.getTime();case"z":return"["+e.offsetName()+"]";case"zzz":return"["+e.offsetName("long")+"]";default:return t}}));return r.bind(this)(s)}}}()},334:function(t,e,n){"use strict";n(332)},336:function(t,e,n){"use strict";n.r(e);var a=n(188),r=n.n(a),s=n(333),o=n.n(s);r.a.extend(o.a);var i={methods:{postDate:function(t){return r()(t).format("MMMM Do, YYYY")}}},c=(n(334),n(9)),u=Object(c.a)(i,(function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("section",{staticClass:"content"},["post"==t.$page.id?n("h1",[t._v(t._s(t.$page.title))]):t._e(),t._v(" "),"post"==t.$page.id?n("small",{staticClass:"meta"},[t._v("on "),n("span",[t._v(t._s(t.postDate(t.$page.frontmatter.date))+" ")]),t._v(" by "),n("span",[t._v(t._s(t.$page.frontmatter.author))]),t._v(" | 0 Comments")]):t._e(),t._v(" "),t.$pagination?n("div",t._l(t.$pagination.pages,(function(e){return n("div",[n("h2",[n("a",{attrs:{href:e.path}},[t._v(t._s(e.title))])]),t._v(" "),n("small",{staticClass:"meta"},[t._v("on "),n("span",[t._v(t._s(t.postDate(e.frontmatter.date))+" ")]),t._v(" by "),n("span",[t._v(t._s(e.frontmatter.author))])]),t._v(" "),n("div",{domProps:{innerHTML:t._s(e.excerpt)}})])})),0):n("Content")],1)}),[],!1,null,null,null);e.default=u.exports}}]);