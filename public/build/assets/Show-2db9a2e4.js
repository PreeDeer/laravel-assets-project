import{_ as c}from"./AppLayout-1c461420.js";import p from"./DeleteUserForm-a18eb635.js";import l from"./LogoutOtherBrowserSessionsForm-446cc541.js";import{S as s}from"./SectionBorder-19dcf47b.js";import f from"./TwoFactorAuthenticationForm-acb21c94.js";import u from"./UpdatePasswordForm-bbff624c.js";import _ from"./UpdateProfileInformationForm-054514f4.js";import{c as d,w as n,o,a as i,e as r,b as t,f as a,F as h}from"./app-952a0d4f.js";import"./_plugin-vue_export-helper-c27b6911.js";import"./DialogModal-530d97f4.js";import"./SectionTitle-ba3611ff.js";import"./DangerButton-35e4811b.js";import"./TextInput-143dfeb0.js";import"./SecondaryButton-9de8583e.js";import"./ActionMessage-347eed16.js";import"./PrimaryButton-bbfece1b.js";import"./InputLabel-79183ed5.js";import"./FormSection-20eea288.js";const g=i("h2",{class:"font-semibold text-xl text-gray-800 leading-tight"}," Profile ",-1),$={class:"max-w-7xl mx-auto py-10 sm:px-6 lg:px-8"},w={key:0},k={key:1},y={key:2},z={__name:"Show",props:{confirmsTwoFactorAuthentication:Boolean,sessions:Array},setup(m){return(e,x)=>(o(),d(c,{title:"Profile"},{header:n(()=>[g]),default:n(()=>[i("div",null,[i("div",$,[e.$page.props.jetstream.canUpdateProfileInformation?(o(),r("div",w,[t(_,{user:e.$page.props.auth.user},null,8,["user"]),t(s)])):a("",!0),e.$page.props.jetstream.canUpdatePassword?(o(),r("div",k,[t(u,{class:"mt-10 sm:mt-0"}),t(s)])):a("",!0),e.$page.props.jetstream.canManageTwoFactorAuthentication?(o(),r("div",y,[t(f,{"requires-confirmation":m.confirmsTwoFactorAuthentication,class:"mt-10 sm:mt-0"},null,8,["requires-confirmation"]),t(s)])):a("",!0),t(l,{sessions:m.sessions,class:"mt-10 sm:mt-0"},null,8,["sessions"]),e.$page.props.jetstream.hasAccountDeletionFeatures?(o(),r(h,{key:3},[t(s),t(p,{class:"mt-10 sm:mt-0"})],64)):a("",!0)])])]),_:1}))}};export{z as default};
