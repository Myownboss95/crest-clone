import{o as r,c as a,F as t,r as l,B as o,n as c,D as i}from"./main.bb41ae9d.js";const m={name:"paginator",props:{links:Array,show:Boolean},setup(n){return(u,p)=>(r(),a("div",null,[(r(!0),a(t,null,l(n.links,(e,s)=>(r(),o(i(e.url?"InertiaLink":"span"),{key:s,href:e.url,innerHTML:e.label,class:c(["btn",{"btn-primary":e.active,"btn-outline-primary":!e.active,disabled:!e.url}])},null,8,["href","innerHTML","class"]))),128))]))}};export{m as _};
