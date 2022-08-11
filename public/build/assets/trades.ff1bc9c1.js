import{G as c,s as w,o as $,a as d,b as l,c as C,i as F,z as D,r as _,d as g,e as b,u,w as T,F as O,I as N,B}from"./main.a4388b13.js";import{_ as X}from"./FormGroup.4594be7e.js";import{_ as y}from"./FormSelect.28502935.js";import{_ as E}from"./FormButton.1c8871a2.js";import{_ as S}from"./ButtonLoader.399048fd.js";import"./FormLabel.115ae360.js";import"./FormInput.7b1a5695.js";import"./error.e7db4921.js";window.TradingView=window.TradingView||{};var U=c({name:"Chart",props:{options:{type:Object,default:()=>({})}},setup(e){const n=w("tradingview-chart"),i=w("tradingview-chart-script"),t={width:980,height:610,symbol:"NASDAQ:AAPL",interval:"D",timezone:"Etc/UTC",theme:"light",style:"1",locale:"en",toolbar_bg:"#f1f3f6",enable_publishing:!1,allow_symbol_change:!0,container_id:"tradingview-chart"},r=()=>typeof window!="undefined"&&window.document&&window.document.createElement,o=()=>document.getElementById(i.value),a=()=>o()!==null,h=s=>{if(!r()||a())return;const m=document.createElement("script");m.id=i.value,m.type="text/javascript",m.async=!0,m.src="https://s3.tradingview.com/tv.js",m.onload=s,document.getElementsByTagName("head")[0].appendChild(m)},v=()=>{setTimeout(()=>{if(typeof window.TradingView=="undefined")return;const s={...t,...e.options};if(s.container_id!==n.value){console.error('container_id in Chart component must be "tradingview-chart"');return}new window.TradingView.widget(Object.assign({container_id:n},s))},300)};return $(()=>{h(()=>v())}),{container:n}}});const M=["id"];function x(e,n,i,t,r,o){return d(),l("div",{id:e.container},null,8,M)}U.render=x;var p=(e,n,i,t)=>{const r=w(n),o=w(i),a=w(),h=()=>typeof window!="undefined"&&window.document&&window.document.createElement,v=()=>document.getElementById(o.value),s=()=>v()!==null,m=()=>{if(!h()||s())return;const f=document.createElement("script");f.id=o.value,f.type="text/javascript",f.async=!0,f.src=t,f.textContent=JSON.stringify(e),a.value&&a.value.appendChild(f)};return $(()=>{setTimeout(()=>{m()},300)}),{container:r,tradingview:a}},j=c({name:"CompanyProfile",props:{options:{type:Object,default:()=>({})}},setup(e){const n={symbol:"NASDAQ:AAPL",width:480,height:650,colorTheme:"light",isTransparent:!1,locale:"en",...e.options},{container:i,tradingview:t}=p(n,"tradingview-company-profile","tradingview-company-profile-script","https://s3.tradingview.com/external-embedding/embed-widget-symbol-profile.js");return{container:i,tradingview:t}}});const k=["id"];function A(e,n,i,t,r,o){return d(),l("div",{ref:"tradingview",id:e.container},null,8,k)}j.render=A;var L=c({name:"CryptoMarket",props:{options:{type:Object,default:()=>({})}},setup(e){const n={width:"100%",height:"100%",defaultColumn:"overview",screener_type:"crypto_mkt",displayCurrency:"USD",colorTheme:"light",locale:"en",...e.options},{container:i,tradingview:t}=p(n,"tradingview-crypto-market","tradingview-crypto-market-script","https://s3.tradingview.com/external-embedding/embed-widget-screener.js");return{container:i,tradingview:t}}});const P=["id"];function I(e,n,i,t,r,o){return d(),l("div",{id:e.container,ref:"tradingview"},null,8,P)}L.render=I;var R=c({name:"EconomicCalendar",props:{options:{type:Object,default:()=>({})}},setup(e){const n={colorTheme:"light",isTransparent:!1,width:"510",height:"600",locale:"en",importanceFilter:"-1,0,1",...e.options},{container:i,tradingview:t}=p(n,"tradingview-economic-calendar","tradingview-economic-calendar-script","https://s3.tradingview.com/external-embedding/embed-widget-events.js");return{container:i,tradingview:t}}});const G=["id"];function V(e,n,i,t,r,o){return d(),l("div",{ref:"tradingview",id:e.container},null,8,G)}R.render=V;var Y=c({name:"ForexCrossRates",props:{options:{type:Object,default:()=>({})}},setup(e){const n={symbol:"NASDAQ:AAPL",color:"blak",isTransparent:!1,largeChartUrl:"",displayMode:"regular",width:"100%",height:"100%",locale:"br",...e.options},{container:i,tradingview:t}=p(n,"tradingview-forex-cross-rates","tradingview-forex-cross-rates-script","https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js");return{container:i,tradingview:t}}});const H=["id"];function J(e,n,i,t,r,o){return d(),l("div",{ref:"tradingview",id:e.container},null,8,H)}Y.render=J;var K=c({name:"ForexHeatMap",props:{options:{type:Object,default:()=>({})}},setup(e){const n={width:770,height:400,currencies:["EUR","USD","JPY","GBP","CHF","AUD","CAD","NZD","CNY"],isTransparent:!1,colorTheme:"light",locale:"en",...e.options},{container:i,tradingview:t}=p(n,"tradingview-forex-heat-map","tradingview-forex-heat-map-script","https://s3.tradingview.com/external-embedding/embed-widget-forex-heat-map.js");return{container:i,tradingview:t}}});const z=["id"];function Q(e,n,i,t,r,o){return d(),l("div",{id:e.container,ref:"tradingview"},null,8,z)}K.render=Q;var Z=c({name:"FundamentalData",props:{options:{type:Object,default:()=>({})}},setup(e){const n={symbol:"NASDAQ:AAPL",colorTheme:"light",isTransparent:!1,largeChartUrl:"",displayMode:"regular",width:480,height:830,locale:"en",...e.options},{container:i,tradingview:t}=p(n,"tradingview-fundamental-data","tradingview-fundamental-data-script","https://s3.tradingview.com/external-embedding/embed-widget-financials.js");return{container:i,tradingview:t}}});const W=["id"];function q(e,n,i,t,r,o){return d(),l("div",{ref:"tradingview",id:e.container},null,8,W)}Z.render=q;var ee=c({name:"MarketData",props:{options:{type:Object,default:()=>({})}},setup(e){const n={width:770,height:450,symbolsGroups:[{name:"Indices",originalName:"Indices",symbols:[{name:"FOREXCOM:SPXUSD",displayName:"S&P 500"},{name:"FOREXCOM:NSXUSD",displayName:"US 100"},{name:"FOREXCOM:DJI",displayName:"Dow 30"},{name:"INDEX:NKY",displayName:"Nikkei 225"},{name:"INDEX:DEU40",displayName:"DAX Index"},{name:"FOREXCOM:UKXGBP",displayName:"UK 100"}]},{name:"Futures",originalName:"Futures",symbols:[{name:"CME_MINI:ES1!",displayName:"S&P 500"},{name:"CME:6E1!",displayName:"Euro"},{name:"COMEX:GC1!",displayName:"Gold"},{name:"NYMEX:CL1!",displayName:"Crude Oil"},{name:"NYMEX:NG1!",displayName:"Natural Gas"},{name:"CBOT:ZC1!",displayName:"Corn"}]},{name:"Bonds",originalName:"Bonds",symbols:[{name:"CME:GE1!",displayName:"Eurodollar"},{name:"CBOT:ZB1!",displayName:"T-Bond"},{name:"CBOT:UB1!",displayName:"Ultra T-Bond"},{name:"EUREX:FGBL1!",displayName:"Euro Bund"},{name:"EUREX:FBTP1!",displayName:"Euro BTP"},{name:"EUREX:FGBM1!",displayName:"Euro BOBL"}]},{name:"Forex",originalName:"Forex",symbols:[{name:"FX:EURUSD"},{name:"FX:GBPUSD"},{name:"FX:USDJPY"},{name:"FX:USDCHF"},{name:"FX:AUDUSD"},{name:"FX:USDCAD"}]}],showSymbolLogo:!0,colorTheme:"light",isTransparent:!1,locale:"en",...e.options},{container:i,tradingview:t}=p(n,"tradingview-market-data","tradingview-market-data-script","https://s3.tradingview.com/external-embedding/embed-widget-market-quotes.js");return{container:i,tradingview:t}}});const te=["id"];function ne(e,n,i,t,r,o){return d(),l("div",{ref:"tradingview",id:e.container},null,8,te)}ee.render=ne;var ie=c({name:"MiniChart",props:{options:{type:Object,default:()=>({})}},setup(e){const n={symbol:"FX:EURUSD",width:350,height:220,locale:"en",dateRange:"12M",colorTheme:"light",trendLineColor:"rgba(41, 98, 255, 1)",underLineColor:"rgba(41, 98, 255, 0.3)",underLineBottomColor:"rgba(41, 98, 255, 0)",isTransparent:!1,autosize:!1,largeChartUrl:"",...e.options},{container:i,tradingview:t}=p(n,"tradingview-mini-chart","tradingview-mini-chart-script","https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js");return{container:i,tradingview:t}}});const oe=["id"];function re(e,n,i,t,r,o){return d(),l("div",{ref:"tradingview",id:e.container},null,8,oe)}ie.render=re;var ae=c({name:"Screener",props:{options:{type:Object,default:()=>({})}},setup(e){const n={width:1100,height:523,defaultColumn:"overview",defaultScreen:"general",market:"forex",showToolbar:!0,colorTheme:"light",locale:"en",...e.options},{container:i,tradingview:t}=p(n,"tradingview-screener","tradingview-screener-script","https://s3.tradingview.com/external-embedding/embed-widget-screener.js");return{container:i,tradingview:t}}});const se=["id"];function de(e,n,i,t,r,o){return d(),l("div",{ref:"tradingview",id:e.container},null,8,se)}ae.render=de;var le=c({name:"SingleTicker",props:{options:{type:Object,default:()=>({})}},setup(e){const n={symbol:"FX:EURUSD",width:350,colorTheme:"light",isTransparent:!1,locale:"en",...e.options},{container:i,tradingview:t}=p(n,"tradingview-single-ticker","tradingview-single-ticker-script","https://s3.tradingview.com/external-embedding/embed-widget-single-quote.js");return{container:i,tradingview:t}}});const ce=["id"];function pe(e,n,i,t,r,o){return d(),l("div",{ref:"tradingview",id:e.container},null,8,ce)}le.render=pe;var me=c({name:"Snaps",props:{options:{type:Object,default:()=>({})}},setup(e){const n={feedMode:"all_symbols",colorTheme:"light",isTransparent:!1,displayMode:"regular",width:480,height:830,locale:"en",...e.options},{container:i,tradingview:t}=p(n,"tradingview-snaps","tradingview-snaps-script","https://s3.tradingview.com/external-embedding/embed-widget-timeline.js");return{container:i,tradingview:t}}});const ue=["id"];function ge(e,n,i,t,r,o){return d(),l("div",{ref:"tradingview",id:e.container},null,8,ue)}me.render=ge;var we=c({name:"StockMarket",props:{options:{type:Object,default:()=>({})}},setup(e){const n={colorTheme:"light",dateRange:"12M",exchange:"US",showChart:!0,locale:"en",largeChartUrl:"",isTransparent:!1,showSymbolLogo:!1,showFloatingTooltip:!1,width:"400",height:"600",plotLineColorGrowing:"rgba(41, 98, 255, 1)",plotLineColorFalling:"rgba(41, 98, 255, 1)",gridLineColor:"rgba(240, 243, 250, 0)",scaleFontColor:"rgba(120, 123, 134, 1)",belowLineFillColorGrowing:"rgba(41, 98, 255, 0.12)",belowLineFillColorFalling:"rgba(41, 98, 255, 0.12)",belowLineFillColorGrowingBottom:"rgba(41, 98, 255, 0)",belowLineFillColorFallingBottom:"rgba(41, 98, 255, 0)",symbolActiveColor:"rgba(41, 98, 255, 0.12)",...e.options},{container:i,tradingview:t}=p(n,"tradingview-stock-market","tradingview-stock-market-script","https://s3.tradingview.com/external-embedding/embed-widget-hotlists.js");return{container:i,tradingview:t}}});const he=["id"];function ve(e,n,i,t,r,o){return d(),l("div",{ref:"tradingview",id:e.container},null,8,he)}we.render=ve;window.TradingView=window.TradingView||{};var be=c({name:"SymbolOverview",props:{options:{type:Object,default:()=>({})}},setup(e){const n=w("tradingview-symbol-overview"),i=w("tradingview-symbol-overview-script"),t={symbols:[["Apple","AAPL"],["Google","GOOGL"],["Microsoft","MSFT"]],chartOnly:!1,width:1e3,height:400,locale:"en",colorTheme:"light",gridLineColor:"rgba(240, 243, 250, 0)",fontColor:"#787B86",isTransparent:!1,autosize:!1,showVolume:!1,scalePosition:"no",scaleMode:"Normal",fontFamily:"Trebuchet MS, sans-serif",noTimeScale:!1,valuesTracking:"1",chartType:"area",lineColor:"#2962FF",bottomColor:"rgba(41, 98, 255, 0)",topColor:"rgba(41, 98, 255, 0.3)",container_id:"tradingview-symbol-overview"},r=()=>typeof window!="undefined"&&window.document&&window.document.createElement,o=()=>document.getElementById(i.value),a=()=>o()!==null,h=s=>{if(!r()||a())return;const m=document.createElement("script");m.id=i.value,m.type="text/javascript",m.async=!0,m.src="https://s3.tradingview.com/tv.js",m.onload=s,document.getElementsByTagName("head")[0].appendChild(m)},v=()=>{setTimeout(()=>{if(typeof window.TradingView=="undefined")return;const s={...t,...e.options};if(s.container_id!==n.value){console.error('container_id in SymbolOverview component must be "tradingview-symbol-overview"');return}new window.TradingView.MediumWidget(Object.assign({container_id:n},s))},300)};return $(()=>{h(()=>v())}),{container:n}}});const fe=["id"];function ye(e,n,i,t,r,o){return d(),l("div",{ref:"tradingview",id:e.container},null,8,fe)}be.render=ye;var $e=c({name:"TechnicalAnalysis",props:{options:{type:Object,default:()=>({})}},setup(e){const n={interval:"1m",width:425,isTransparent:!1,height:450,symbol:"NASDAQ:AAPL",showIntervalTabs:!0,locale:"en",colorTheme:"light",...e.options},{container:i,tradingview:t}=p(n,"tradingview-technical-analysis","tradingview-technical-analysis-script","https://s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js");return{container:i,tradingview:t}}});const Ce=["id"];function _e(e,n,i,t,r,o){return d(),l("div",{ref:"tradingview",id:e.container},null,8,Ce)}$e.render=_e;var Te=c({name:"Ticker",props:{options:{type:Object,default:()=>({})}},setup(e){const n={symbols:[{proName:"FOREXCOM:SPXUSD",title:"S&P 500"},{proName:"FOREXCOM:NSXUSD",title:"US 100"},{proName:"FX_IDC:EURUSD",title:"EUR/USD"},{proName:"BITSTAMP:BTCUSD",title:"Bitcoin"},{proName:"BITSTAMP:ETHUSD",title:"Ethereum"}],colorTheme:"light",isTransparent:!1,showSymbolLogo:!0,locale:"en",...e.options},{container:i,tradingview:t}=p(n,"tradingview-ticker","tradingview-ticker-script","https://s3.tradingview.com/external-embedding/embed-widget-tickers.js");return{container:i,tradingview:t}}});const Ee=["id"];function Se(e,n,i,t,r,o){return d(),l("div",{ref:"tradingview",id:e.container},null,8,Ee)}Te.render=Se;var Ue=c({name:"TickerTape",props:{options:{type:Object,default:()=>({})}},setup(e){const n={symbols:[{proName:"FOREXCOM:SPXUSD",title:"S&P 500"},{proName:"FOREXCOM:NSXUSD",title:"US 100"},{proName:"FX_IDC:EURUSD",title:"EUR/USD"},{proName:"BITSTAMP:BTCUSD",title:"Bitcoin"},{proName:"BITSTAMP:ETHUSD",title:"Ethereum"}],showSymbolLogo:!0,colorTheme:"light",isTransparent:!1,displayMode:"adaptive",locale:"en",...e.options},{container:i,tradingview:t}=p(n,"tradingview-ticker-tape","tradingview-ticker-tape-script","https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js");return{container:i,tradingview:t}}});const Fe=["id"];function De(e,n,i,t,r,o){return d(),l("div",{ref:"tradingview",id:e.container},null,8,Fe)}Ue.render=De;var Oe=c({name:"MarketOverview",props:{options:{type:Object,default:()=>({})}},setup(e){const n={colorTheme:"light",dateRange:"12M",showChart:!0,locale:"en",largeChartUrl:"",isTransparent:!1,showSymbolLogo:!0,showFloatingTooltip:!1,width:"400",height:"660",plotLineColorGrowing:"rgba(41, 98, 255, 1)",plotLineColorFalling:"rgba(41, 98, 255, 1)",gridLineColor:"rgba(240, 243, 250, 0)",scaleFontColor:"rgba(120, 123, 134, 1)",belowLineFillColorGrowing:"rgba(41, 98, 255, 0.12)",belowLineFillColorFalling:"rgba(41, 98, 255, 0.12)",belowLineFillColorGrowingBottom:"rgba(41, 98, 255, 0)",belowLineFillColorFallingBottom:"rgba(41, 98, 255, 0)",symbolActiveColor:"rgba(41, 98, 255, 0.12)",tabs:[{title:"Indices",symbols:[{s:"FOREXCOM:SPXUSD",d:"S&P 500"},{s:"FOREXCOM:NSXUSD",d:"US 100"},{s:"FOREXCOM:DJI",d:"Dow 30"},{s:"INDEX:NKY",d:"Nikkei 225"},{s:"INDEX:DEU40",d:"DAX Index"},{s:"FOREXCOM:UKXGBP",d:"UK 100"}],originalTitle:"Indices"},{title:"Futures",symbols:[{s:"CME_MINI:ES1!",d:"S&P 500"},{s:"CME:6E1!",d:"Euro"},{s:"COMEX:GC1!",d:"Gold"},{s:"NYMEX:CL1!",d:"Crude Oil"},{s:"NYMEX:NG1!",d:"Natural Gas"},{s:"CBOT:ZC1!",d:"Corn"}],originalTitle:"Futures"},{title:"Bonds",symbols:[{s:"CME:GE1!",d:"Eurodollar"},{s:"CBOT:ZB1!",d:"T-Bond"},{s:"CBOT:UB1!",d:"Ultra T-Bond"},{s:"EUREX:FGBL1!",d:"Euro Bund"},{s:"EUREX:FBTP1!",d:"Euro BTP"},{s:"EUREX:FGBM1!",d:"Euro BOBL"}],originalTitle:"Bonds"},{title:"Forex",symbols:[{s:"FX:EURUSD"},{s:"FX:GBPUSD"},{s:"FX:USDJPY"},{s:"FX:USDCHF"},{s:"FX:AUDUSD"},{s:"FX:USDCAD"}],originalTitle:"Forex"}],...e.options},{container:i,tradingview:t}=p(n,"tradingview-market-overview","tradingview-market-overview-script","https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js");return{container:i,tradingview:t}}});const Ne=["id"];function Be(e,n,i,t,r,o){return d(),l("div",{ref:"tradingview",id:e.container},null,8,Ne)}Oe.render=Be;const Xe={class:"row p-3 m-1"},Me={class:"card shadow col-md-4 col-sm-12"},xe={class:"card-body"},je={class:"d-flex justify-content-between"},ke={class:"card shadow col-md-8 col-sm-12"},Ae={class:"card-body"},Je={name:"trades",props:{trades:Object},setup(e){const n=e,i=w(null);C(()=>n.trades.data),C(()=>n.trades.links);const t=F({name:"",type:"",tradeable_type:""});D(()=>t.tradeable_type,o=>{o!=""&&N.get(route("admin.trades.getTradeables",{type:o})).then(a=>{if(a.status!=200)throw Error();i.value=a.data.data}).catch(a=>{B("Failed to load assets, refresh page.")})});const r=o=>{t.type=o,console.log(t.data()),t.post(route("admin.tradeables.store"))};return(o,a)=>{const h=_("Head"),v=_("breadcrumb");return d(),l(O,null,[g(h,{title:"Trades"}),g(v,{title:"Trades",crumbs:["Dashboard","Trades"]}),b("div",Xe,[b("div",Me,[b("div",xe,[b("form",null,[g(X,{name:"amount",placeholder:"Enter Amount",label:"Amount",modelValue:u(t).amount,"onUpdate:modelValue":a[0]||(a[0]=s=>u(t).amount=s)},null,8,["modelValue"]),g(y,{id:"tradeable_type",name:"tradeable_type",label:"Demo Plan",options:{crypto:"Crypto Currency",commodity:"Commodity",currency:"Currency"},modelValue:u(t).tradeable_type,"onUpdate:modelValue":a[1]||(a[1]=s=>u(t).tradeable_type=s)},null,8,["modelValue"]),g(y,{id:"asset",name:"tradeable_id",label:"Demo Plan",options:i.value,modelValue:u(t).type,"onUpdate:modelValue":a[2]||(a[2]=s=>u(t).type=s)},null,8,["options","modelValue"]),g(y,{id:"demo",name:"stoploss",label:"Stop Loss",options:{5:"5%",15:"15%",25:"25%",35:"35%",50:"50%"},modelValue:u(t).stoploss,"onUpdate:modelValue":a[3]||(a[3]=s=>u(t).stoploss=s)},null,8,["modelValue"]),b("div",je,[g(E,{type:"button",class:"w-100 btn btn-success mt-3 m-1",disabled:u(t).processing,onButtonClicked:a[4]||(a[4]=s=>r("buy"))},{default:T(()=>[g(S,{text:"Buy",loading:u(t).processing},null,8,["loading"])]),_:1},8,["disabled"]),g(E,{type:"button",class:"w-100 btn btn-danger mt-3 m-1",disabled:u(t).processing,onButtonClicked:a[5]||(a[5]=s=>r("sell"))},{default:T(()=>[g(S,{text:"Sell",loading:u(t).processing},null,8,["loading"])]),_:1},8,["disabled"])])])])]),b("div",ke,[b("div",Ae,[g(u(U),{options:{theme:"light",autosize:!0},style:{height:"400px",width:"100%"}})])])])],64)}}};export{Je as default};