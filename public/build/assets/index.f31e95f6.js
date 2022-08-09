import{b as x}from"./breadcrumb.cd2040c8.js";import{_ as w,d as y,E as _,j as h,y as k,p as $,o as l,c,a as n,b as s,u as t,F as v,r as z,t as o,n as S,G as V,I as j,q as D}from"./main.bb41ae9d.js";import{a as I}from"./FormInput.509c113a.js";import{_ as N}from"./FormSelect.4b8e24c1.js";import{_ as U}from"./paginator.b57f9322.js";const i=d=>(V("data-v-5a889d5a"),d=d(),j(),d),A={class:"col-lg-11 mx-auto"},E={class:"w-100 mb-3 d-flex justify-content-between"},B={class:"col-sm-6 col-md-3"},F={class:"col-sm-6 col-md-2"},C={key:0},H={class:"card-body"},P={class:"row align-items-center"},q={class:"col-xl-3 col-lg-6 col-sm-12 d-flex mb-sm-2"},G=i(()=>s("span",{class:"user-img-wrapper me-sm-4 me-3"},[s("img",{class:"h-100 w-100",src:"https://griya.dexignzone.com/xhtml/images/customers/11.jpg",alt:"DexignZone",width:"95"})],-1)),L={class:"media-body"},M={class:"d-block"},Z={class:"col-xl-3 col-lg-3 col-sm-4 col-6 mb-3"},J=i(()=>s("small",{class:"mb-2 d-block font-size-14 fw-bold"},"Address",-1)),K={class:"col-xl-2 col-lg-3 col-sm-4 col-6 mb-3 text-lg-center"},O=i(()=>s("small",{class:"mb-2 d-block font-size-14 fw-bold"},"Phone Number",-1)),Q={class:"col-xl-2 col-lg-6 col-sm-4 mb-sm-3 mb-3"},R=i(()=>s("small",{class:"mb-2 d-block font-size-14 fw-bold"},"Email Address",-1)),T={class:"col-xl-2 col-md-12 col-lg-6 col-sm-12 mb-sm-4 mb-0"},W=i(()=>s("hr",{class:"d-md-none mt-0"},null,-1)),X={class:"d-flex justify-content-between items-center my-auto"},Y=D('<div class="dropdown ms-4" data-v-5a889d5a><div class="btn-link" data-bs-toggle="dropdown" data-v-5a889d5a><i class="fa fa-cog font-size-20" data-v-5a889d5a></i></div><div class="dropdown-menu dropdown-menu-right" data-v-5a889d5a><a class="dropdown-item" href="javascript:void(0);" data-v-5a889d5a>Edit</a><a class="dropdown-item" href="javascript:void(0);" data-v-5a889d5a>Delete</a></div></div>',1),ss={class:"w-100 pb-3 d-flex justify-content-center"},es={key:1,class:"text-center pt-5 pb-5 border rounded text-muted"},ts={name:"index",props:["users"],setup(d){const p=d,a=y({status:_().params.status||"all",search:_().params.search||""}),u=h(()=>p.users.data),f=h(()=>p.users.links);return k(()=>a.data(),()=>{a.transform(r=>(r.search==""&&delete r.search,r)).get(_("admin.users.index"),{preserveState:!0})}),(r,m)=>{const b=$("Head");return l(),c(v,null,[n(b,{title:"Users"}),n(x,{title:"Users",crumbs:["Dashboard","Users"]}),s("div",A,[s("div",E,[s("div",B,[n(I,{placeholder:"Search...",modelValue:t(a).search,"onUpdate:modelValue":m[0]||(m[0]=e=>t(a).search=e),modelModifiers:{lazy:!0}},null,8,["modelValue"])]),s("div",F,[n(N,{name:"search",modelValue:t(a).status,"onUpdate:modelValue":m[1]||(m[1]=e=>t(a).status=e),options:{all:"All",active:"Active",pending:"Pending",suspended:"Suspended"}},null,8,["modelValue"])])]),t(u).length?(l(),c("div",C,[(l(!0),c(v,null,z(t(u),(e,g)=>(l(),c("div",{class:"card shadow rounded-lg",key:g},[s("div",H,[s("div",P,[s("div",q,[G,s("div",L,[s("h6",null,o(`${e.first_name} ${e.last_name}`),1),s("span",M,o(new Date(e.created_at).toDateString()),1)])]),s("div",Z,[J,s("span",null,o(`${e.address}. ${e.city}, ${e.state}, ${e.zip_code}, ${e.country}.`),1)]),s("div",K,[O,s("span",null,o(e.phone),1)]),s("div",Q,[R,s("span",null,o(e.email),1)]),s("div",T,[W,s("div",X,[s("h4",{class:S(["badge rounded-pill my-auto font-size-18",{"text-danger":e.status=="suspended","text-success":e.status=="active","text-info":e.status=="pending"}])},o(e.status),3),Y])])])])]))),128)),s("div",ss,[n(U,{links:t(f)},null,8,["links"])])])):(l(),c("div",es," No users found "))])],64)}}};var ns=w(ts,[["__scopeId","data-v-5a889d5a"]]);export{ns as default};
