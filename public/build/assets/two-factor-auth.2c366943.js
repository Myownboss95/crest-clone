import{x as V,M as E,y as $,o as r,c as i,b as t,t as v,l as P,n as j,z as q,A as M,d as C,m as T,p as D,a as o,e as p,w,h as y,u as c,k as b,F,r as H}from"./main.bb41ae9d.js";import{b as R}from"./breadcrumb.cd2040c8.js";import{a as m,_ as L}from"./FormButton.0b4b44d6.js";import{_ as h}from"./ButtonLoader.b079e016.js";import"./FormInput.509c113a.js";const N=["id"],O={class:"modal-content"},I={class:"modal-header"},U={class:"modal-title"},x={name:"modal",props:{open:{type:Boolean,default:!1},title:{type:String,default:""},id:{type:String,default:"myModal"},size:{type:String,default:""}},emits:["modealClosed"],setup(f,{emit:_}){const a=f;let d=null;V(()=>{d=new E(document.getElementById(a.id,{backdrop:"static",keyboard:!1}))}),$(()=>a.open,n=>{d.show()});const l=()=>{d.hide(),_("modealClosed")};return(n,g)=>(r(),i("div",{class:"modal fade bs-example-modal-center",tabindex:"-1","aria-hidden":"true",id:a.id,"data-bs-backdrop":"static","data-bs-keyboard":"false"},[t("div",{class:j(["modal-dialog modal-dialog-centered",a.size!=""?`modal-${a.size}`:""])},[t("div",O,[t("div",I,[t("h5",U,v(a.title),1),t("button",{type:"button",class:"btn-close",onClick:l})]),P(n.$slots,"default")])],2)],8,N))}},A=f=>{navigator.clipboard.writeText(f).then(_=>q("Copied to clipboard"),_=>M("Copy to clipboard failed."))};const G={class:"col-lg-4 col-md-4 m-auto mt-5"},J={class:"card shadow"},K={class:"card-body"},Q={class:"d-flex justify-content-center align-items-center",style:{"min-height":"300px"}},W={key:0,class:"text-center"},X=t("p",null," Two factor authentication is enabled. ",-1),Y={key:1},Z={class:"text-center"},tt=t("p",null," To enable two factor authentication, click on the button below to get started on the process. ",-1),ot=["onSubmit"],et={key:1},st={class:"text-center px-3 py-2"},at=t("p",null," Download the google authenticator app from App Store or Play store, scan the qr code below ",-1),nt={class:"d-flex justify-content-center py-3"},lt=["innerHTML"],ct={class:"text-justify"},rt=y(" Alternatively you can use "),it=y(" as a setup key to create a secure link from authenticator to your account. "),dt=t("p",null,"Copy your recovery codes and store them securely as they can be used to disable Two Factor Authentication.",-1),ut={class:"text-center"},pt=t("p",null," After set up click on the confirm status button below to enter code from the authenticator app to verify the setup. ",-1),_t={class:""},ft={class:"modal-body"},mt={class:"list-group"},ht={class:"copy"},bt=["onClick"],yt=t("i",{class:"fa fa-copy"},null,-1),wt=y(" copy "),vt=[yt,wt],gt={class:"modal-body"},kt=["onSubmit"],Ct=t("p",{class:"text-center"},"Enter the TOTP from the google authenticator app and click the confirm button",-1),St={name:"two-factor-auth",props:["auth","errors"],setup(f){const _=f,a=C(),d=C({code:""});$(()=>_.errors,s=>{"confirmTwoFactorAuthentication"in s&&M(s.confirmTwoFactorAuthentication.code)});let l=T(!1),n=T(!1);const g=()=>{a.post(route("two-factor.enable"))},S=()=>{a.delete(route("two-factor.disable"))},k=()=>{d.post(route("two-factor.confirm"),{onSuccess:()=>{document.querySelectorAll(".btn-close").forEach(s=>{s.click()})}})};return(s,e)=>{const B=D("Head");return r(),i(F,null,[o(B,{title:"Two Factor Auth"}),o(R,{title:"Two Factor Auth",crumbs:["Dashboard","Two Factor Auth"]}),t("div",G,[t("div",J,[t("div",K,[t("div",Q,[s.$page.props.auth.user.two_factor_status?(r(),i("div",W,[X,o(m,{class:"btn btn-outline-danger",onButtonClicked:S},{default:p(()=>[o(h,{text:"Disable Two Factor Auth",loading:c(a).processing},null,8,["loading"])]),_:1})])):(r(),i("div",Y,[s.$page.props.auth.user.two_factor_auth_status===!1?(r(),i("form",{key:0,onSubmit:e[0]||(e[0]=w((...u)=>s.changePassword&&s.changePassword(...u),["prevent"]))},[t("div",Z,[tt,t("form",{onSubmit:w(g,["prevent"])},[o(m,{class:"btn btn-outline-primary",type:"submit"},{default:p(()=>[o(h,{text:"Enable Two Factor Auth",loading:c(a).processing},null,8,["loading"])]),_:1})],40,ot)])],32)):(r(),i("form",et,[t("div",st,[at,t("div",nt,[t("div",{class:"text-center mb-3 p-2 bg-white",innerHTML:s.$page.props.auth.user.two_factor_qr_code_svg},null,8,lt)]),t("div",ct,[t("p",null,[rt,t("strong",null,[y(v(s.$page.props.auth.user.two_factor_recovery_codes[0])+" ",1),t("i",{class:"fa fa-copy cursor-pointer",onClick:e[1]||(e[1]=u=>c(A)(s.$page.props.auth.user.two_factor_recovery_codes[0]))})]),it]),dt,t("div",ut,[o(m,{class:"btn btn-outline-success mb-3",onButtonClicked:e[2]||(e[2]=()=>b(l)?l.value=!0:l=!0)},{default:p(()=>[o(h,{text:"Recovery Codes"})]),_:1})]),pt]),t("div",_t,[o(m,{class:"btn btn-outline-info mr-auto",onButtonClicked:e[3]||(e[3]=()=>b(n)?n.value=!0:n=!0)},{default:p(()=>[o(h,{text:"Confirm 2FA Status"})]),_:1})])])]))]))])])]),o(x,{title:"Recovery codes",id:"recoveryCodesModal",open:c(l),onModealClosed:e[4]||(e[4]=()=>{b(l)?l.value=!1:l=!1})},{default:p(()=>[t("div",ft,[t("ol",mt,[(r(!0),i(F,null,H(_.auth.user.two_factor_recovery_codes,(u,z)=>(r(),i("li",{class:"list-group-item d-flex justify-content-between",key:z},[t("span",ht,v(u),1),t("span",{class:"text-info",onClick:Tt=>c(A)(u)},vt,8,bt)]))),128))])])]),_:1},8,["open"]),o(x,{id:"ConfirmTwoFactorModal",size:"sm",title:"Confirm two factor auth",open:c(n),onModealClosed:e[6]||(e[6]=()=>b(n)?n.value=!1:n=!1)},{default:p(()=>[t("div",gt,[t("form",{class:"pb-3",onSubmit:w(k,["prevent"])},[Ct,o(L,{placeholder:"TOTP code",modelValue:c(d).code,"onUpdate:modelValue":e[5]||(e[5]=u=>c(d).code=u)},null,8,["modelValue"]),o(m,{class:"btn btn-outline-success w-100",type:"submit"},{default:p(()=>[o(h,{text:"Confirm",loading:k.processing},null,8,["loading"])]),_:1})],40,kt)])]),_:1},8,["open"])])],64)}}};export{St as default};
