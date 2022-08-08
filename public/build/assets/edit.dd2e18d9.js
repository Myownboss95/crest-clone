import{d as B,p as P,o as d,c as f,a as l,b as o,w as g,u as n,e as _,F as c,r as U,A as C,B as $,h as F}from"./main.bb41ae9d.js";import{b as w}from"./breadcrumb.cd2040c8.js";import{_ as u,a as b}from"./FormButton.0b4b44d6.js";import{_ as M}from"./FormSelect.4b8e24c1.js";import{_ as T}from"./ButtonLoader.b079e016.js";import{_ as N}from"./InputGroup.6f96caec.js";import"./FormInput.509c113a.js";const y={class:"col-lg-5 m-auto"},A={class:"card"},S={class:"card-body"},k=["onSubmit"],D=o("hr",null,null,-1),H={class:"d-flex justify-content-between"},j=o("h5",null,"Plan Features",-1),q=o("i",{class:"fa fa-plus"},null,-1),E=F(" Add "),L=o("hr",null,null,-1),Q={name:"edit",props:["plan","features"],setup(V){const s=V,e=B({name:s.plan.name,tenure:s.plan.tenure,min_investment:s.plan.min_investment,max_investment:s.plan.max_investment,bonus:s.plan.bonus,demo:s.plan.demo,features:s.features}),v=()=>e.features.push(""),h=i=>e.features=e.features.filter((a,r)=>e.features[i]!=r),x=()=>{if(!e.features.length)return C("At least a plan feature is required");e.put(route("admin.plans.update",s.plan.id))};return(i,a)=>{const r=P("Head");return d(),f(c,null,[l(r,{title:"Create Plan"}),l(w,{title:"Create Plan",crumbs:["Dashboard","Settings","Plans","Create"]}),o("div",y,[o("div",A,[o("div",S,[o("form",{onSubmit:g(x,["prevent"])},[l(u,{name:"name",placeholder:"Plan name",label:"Plan name",modelValue:n(e).name,"onUpdate:modelValue":a[0]||(a[0]=t=>n(e).name=t)},null,8,["modelValue"]),l(u,{name:"tenure",placeholder:"Trade Tenure in days",label:"Trade Tenure",modelValue:n(e).tenure,"onUpdate:modelValue":a[1]||(a[1]=t=>n(e).tenure=t)},null,8,["modelValue"]),l(u,{name:"bonus",placeholder:"Bonus eg. 25",label:"Bonus",modelValue:n(e).bonus,"onUpdate:modelValue":a[2]||(a[2]=t=>n(e).bonus=t)},null,8,["modelValue"]),l(M,{id:"demo",name:"demo",label:"Demo Plan",options:{1:"Yes",0:"No"},modelValue:n(e).demo,"onUpdate:modelValue":a[3]||(a[3]=t=>n(e).demo=t)},null,8,["modelValue"]),l(u,{name:"min_investment",placeholder:"Minimum investment",label:"Minimum investment",modelValue:n(e).min_investment,"onUpdate:modelValue":a[4]||(a[4]=t=>n(e).min_investment=t)},null,8,["modelValue"]),l(u,{name:"max_investment",placeholder:"Maximum investment",label:"Maximum investment",modelValue:n(e).max_investment,"onUpdate:modelValue":a[5]||(a[5]=t=>n(e).max_investment=t)},null,8,["modelValue"]),D,o("div",H,[j,l(b,{class:"btn btn-outline-primary btn-sm",onButtonClicked:v},{default:_(()=>[q,E]),_:1})]),o("div",null,[(d(!0),f(c,null,U(n(e).features,(t,m)=>(d(),$(N,{placeholder:`Plan feature ${m+1}`,class:"my-2",name:`features.${m}`,icon:"fa fa-times",onButtonClicked:p=>h(m),modelValue:n(e).features[m],"onUpdate:modelValue":p=>n(e).features[m]=p},null,8,["placeholder","name","onButtonClicked","modelValue","onUpdate:modelValue"]))),256))]),L,l(b,{type:"submit",class:"w-100 btn btn-outline-primary",disabled:n(e).processing},{default:_(()=>[l(T,{text:"Update Plan",loading:n(e).processing},null,8,["loading"])]),_:1},8,["disabled"])],40,k)])])])],64)}}};export{Q as default};
