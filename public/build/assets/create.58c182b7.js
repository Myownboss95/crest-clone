import{d as h,p as x,o as d,c as p,a as l,b as o,w as B,u as a,e as _,F as c,r as P,A as g,B as C,h as U}from"./main.bb41ae9d.js";import{b as $}from"./breadcrumb.cd2040c8.js";import{_ as m,a as f}from"./FormButton.0b4b44d6.js";import{_ as F}from"./FormSelect.4b8e24c1.js";import{_ as w}from"./ButtonLoader.b079e016.js";import{_ as M}from"./InputGroup.6f96caec.js";import"./FormInput.509c113a.js";const T={class:"col-lg-5 m-auto"},N={class:"card"},y={class:"card-body"},A=["onSubmit"],S=o("hr",null,null,-1),k={class:"d-flex justify-content-between"},D=o("h5",null,"Plan Features",-1),H=o("i",{class:"fa fa-plus"},null,-1),j=U(" Add "),q=o("hr",null,null,-1),O={name:"create",setup(E){const e=h({name:"",tenure:"",min_investment:"",max_investment:"",bonus:"",demo:0,features:[]}),b=()=>e.features.push(""),V=r=>e.features=e.features.filter((n,u)=>e.features[r]!=u),v=r=>{if(!e.features.length)return g("At least a plan feature is required");e.post(route("admin.plans.store"))};return(r,n)=>{const u=x("Head");return d(),p(c,null,[l(u,{title:"Create Plan"}),l($,{title:"Create Plan",crumbs:["Dashboard","Settings","Plans","Create"]}),o("div",T,[o("div",N,[o("div",y,[o("form",{onSubmit:B(v,["prevent"])},[l(m,{name:"name",placeholder:"Plan name",label:"Plan name",modelValue:a(e).name,"onUpdate:modelValue":n[0]||(n[0]=t=>a(e).name=t)},null,8,["modelValue"]),l(m,{name:"tenure",placeholder:"Trade Tenure in days",label:"Trade Tenure",modelValue:a(e).tenure,"onUpdate:modelValue":n[1]||(n[1]=t=>a(e).tenure=t)},null,8,["modelValue"]),l(m,{name:"bonus",placeholder:"Bonus eg. 25",label:"Bonus",modelValue:a(e).bonus,"onUpdate:modelValue":n[2]||(n[2]=t=>a(e).bonus=t)},null,8,["modelValue"]),l(F,{id:"demo",name:"demo",label:"Demo Plan",options:{1:"Yes",0:"No"},modelValue:a(e).demo,"onUpdate:modelValue":n[3]||(n[3]=t=>a(e).demo=t)},null,8,["modelValue"]),l(m,{name:"min_investment",placeholder:"Minimum investment",label:"Minimum investment",modelValue:a(e).min_investment,"onUpdate:modelValue":n[4]||(n[4]=t=>a(e).min_investment=t)},null,8,["modelValue"]),l(m,{name:"max_investment",placeholder:"Maximum investment",label:"Maximum investment",modelValue:a(e).max_investment,"onUpdate:modelValue":n[5]||(n[5]=t=>a(e).max_investment=t)},null,8,["modelValue"]),S,o("div",k,[D,l(f,{class:"btn btn-outline-primary btn-sm",onButtonClicked:b},{default:_(()=>[H,j]),_:1})]),o("div",null,[(d(!0),p(c,null,P(a(e).features,(t,s)=>(d(),C(M,{placeholder:`Plan feature ${s+1}`,class:"my-2",name:`features.${s}`,icon:"fa fa-times",onButtonClicked:i=>V(s),modelValue:a(e).features[s],"onUpdate:modelValue":i=>a(e).features[s]=i},null,8,["placeholder","name","onButtonClicked","modelValue","onUpdate:modelValue"]))),256))]),q,l(f,{type:"submit",class:"w-100 btn btn-outline-primary",disabled:a(e).processing},{default:_(()=>[l(w,{text:"Create Plan",loading:a(e).processing},null,8,["loading"])]),_:1},8,["disabled"])],40,A)])])])],64)}}};export{O as default};