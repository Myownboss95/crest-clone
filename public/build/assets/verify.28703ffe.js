import{y as _,p as o,o as h,c as m,a,b as e,t as u,e as n,F as f,h as s,z as c}from"./main.bb41ae9d.js";const p={class:"auth-content my-auto"},v={class:"text-center"},b=e("div",{class:"avatar-lg mx-auto"},[e("div",{class:"avatar-title rounded-circle bg-light"},[e("i",{class:"bx bxs-envelope h2 mb-0 text-primary"})])],-1),y={class:"p-2 mt-4"},x=e("h4",null,"Verify your email",-1),g=s(" We have sent you verification email "),w={class:"fw-bold"},k=s(", Please check it "),V={class:"mt-4"},B=s("Verify email"),N={class:"mt-5 text-center"},W={class:"text-muted mb-0"},C=s(" Didn't receive an email ? "),D=s(" Resend "),H={name:"verify",props:["flash"],setup(r){const l=r;return _(()=>l.flash,t=>{"status"in t&&(t.status==="verification-link-sent"?c("We have sent you a new verification email"):c("We were unable to resend the verification email. Try again."))}),(t,E)=>{const d=o("Head"),i=o("inertia-link");return h(),m(f,null,[a(d,{title:"Email verification"}),e("div",p,[e("div",v,[b,e("div",y,[x,e("p",null,[g,e("span",w,u(t.$page.props.auth.user.email||""),1),k]),e("div",V,[a(i,{href:t.route("user.index"),class:"btn btn-primary w-10"},{default:n(()=>[B]),_:1},8,["href"])])])]),e("div",N,[e("p",W,[C,a(i,{as:"button",method:"post",href:t.route("verification.send"),class:"text-primary fw-semibold a-button"},{default:n(()=>[D]),_:1},8,["href"])])])])],64)}}};export{H as default};
