import{h as c,s as u,a as b,b as _,d as t,e as s,w as f,u as a,i as y,F as V}from"./main.2ec1ac8a.js";import{b as g}from"./breadcrumb.3cbbe6fe.js";import{_ as h}from"./FormGroup.a50f965d.js";import{_ as A}from"./FormSelect.86406c0e.js";import{_ as C}from"./FormButton.62df0933.js";import{_ as v}from"./ButtonLoader.75e5e296.js";import"./FormLabel.880193f6.js";import"./FormInput.2f97439c.js";import"./error.51fe4e46.js";const w={class:"col-lg-4 m-auto"},x={class:"card"},E={class:"card-body"},T=["onSubmit"],P={name:"edit",props:["tradeable"],setup(l){var n,d;const r=l,e=c({name:((n=r.tradeable)==null?void 0:n.name)||"",type:((d=r.tradeable)==null?void 0:d.type)||"crypto"}),i=()=>{e.put(route("admin.tradeables.update",r.tradeable.id))};return($,o)=>{const p=u("Head");return b(),_(V,null,[t(p,{title:"Edit Tradeable Asset"}),t(g,{title:"Edit Tradeable Asset",crumbs:["Dashboard","Settings","Tradeable assets","Edit"]}),s("div",w,[s("div",x,[s("div",E,[s("form",{onSubmit:f(i,["prevent"])},[t(h,{name:"name",placeholder:"Asset name",label:"Asset name",modelValue:a(e).name,"onUpdate:modelValue":o[0]||(o[0]=m=>a(e).name=m)},null,8,["modelValue"]),t(A,{id:"demo",name:"type",label:"Demo Plan",options:{crypto:"Crypto Currency",commodity:"Commodity",currency:"Currency"},modelValue:a(e).type,"onUpdate:modelValue":o[1]||(o[1]=m=>a(e).type=m)},null,8,["modelValue"]),t(C,{type:"submit",class:"w-100 btn btn-outline-primary mt-3",disabled:a(e).processing},{default:y(()=>[t(v,{text:"Update Tradeable Asset",loading:a(e).processing},null,8,["loading"])]),_:1},8,["disabled"])],40,T)])])])],64)}}};export{P as default};