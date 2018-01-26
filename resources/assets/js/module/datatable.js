
	/*!
	 DataTables 1.10.16
	 ©2008-2017 SpryMedia Ltd - datatables.net/license
	*/
	(function(h){"function"===typeof define&&define.amd?define(["jquery"],function(E){return h(E,window,document)}):"object"===typeof exports?module.exports=function(E,G){E||(E=window);G||(G="undefined"!==typeof window?require("jquery"):require("jquery")(E));return h(G,E,E.document)}:h(jQuery,window,document)})(function(h,E,G,k){function X(a){var b,c,d={};h.each(a,function(e){if((b=e.match(/^([^A-Z]+?)([A-Z])/))&&-1!=="a aa ai ao as b fn i m o s ".indexOf(b[1]+" "))c=e.replace(b[0],b[2].toLowerCase()),
	d[c]=e,"o"===b[1]&&X(a[e])});a._hungarianMap=d}function I(a,b,c){a._hungarianMap||X(a);var d;h.each(b,function(e){d=a._hungarianMap[e];if(d!==k&&(c||b[d]===k))"o"===d.charAt(0)?(b[d]||(b[d]={}),h.extend(!0,b[d],b[e]),I(a[d],b[d],c)):b[d]=b[e]})}function Ca(a){var b=m.defaults.oLanguage,c=a.sZeroRecords;!a.sEmptyTable&&(c&&"No data available in table"===b.sEmptyTable)&&F(a,a,"sZeroRecords","sEmptyTable");!a.sLoadingRecords&&(c&&"Loading..."===b.sLoadingRecords)&&F(a,a,"sZeroRecords","sLoadingRecords");
	a.sInfoThousands&&(a.sThousands=a.sInfoThousands);(a=a.sDecimal)&&cb(a)}function db(a){A(a,"ordering","bSort");A(a,"orderMulti","bSortMulti");A(a,"orderClasses","bSortClasses");A(a,"orderCellsTop","bSortCellsTop");A(a,"order","aaSorting");A(a,"orderFixed","aaSortingFixed");A(a,"paging","bPaginate");A(a,"pagingType","sPaginationType");A(a,"pageLength","iDisplayLength");A(a,"searching","bFilter");"boolean"===typeof a.sScrollX&&(a.sScrollX=a.sScrollX?"100%":"");"boolean"===typeof a.scrollX&&(a.scrollX=
	a.scrollX?"100%":"");if(a=a.aoSearchCols)for(var b=0,c=a.length;b<c;b++)a[b]&&I(m.models.oSearch,a[b])}function eb(a){A(a,"orderable","bSortable");A(a,"orderData","aDataSort");A(a,"orderSequence","asSorting");A(a,"orderDataType","sortDataType");var b=a.aDataSort;"number"===typeof b&&!h.isArray(b)&&(a.aDataSort=[b])}function fb(a){if(!m.__browser){var b={};m.__browser=b;var c=h("<div/>").css({position:"fixed",top:0,left:-1*h(E).scrollLeft(),height:1,width:1,overflow:"hidden"}).append(h("<div/>").css({position:"absolute",
	top:1,left:1,width:100,overflow:"scroll"}).append(h("<div/>").css({width:"100%",height:10}))).appendTo("body"),d=c.children(),e=d.children();b.barWidth=d[0].offsetWidth-d[0].clientWidth;b.bScrollOversize=100===e[0].offsetWidth&&100!==d[0].clientWidth;b.bScrollbarLeft=1!==Math.round(e.offset().left);b.bBounding=c[0].getBoundingClientRect().width?!0:!1;c.remove()}h.extend(a.oBrowser,m.__browser);a.oScroll.iBarWidth=m.__browser.barWidth}function gb(a,b,c,d,e,f){var g,j=!1;c!==k&&(g=c,j=!0);for(;d!==
	e;)a.hasOwnProperty(d)&&(g=j?b(g,a[d],d,a):a[d],j=!0,d+=f);return g}function Da(a,b){var c=m.defaults.column,d=a.aoColumns.length,c=h.extend({},m.models.oColumn,c,{nTh:b?b:G.createElement("th"),sTitle:c.sTitle?c.sTitle:b?b.innerHTML:"",aDataSort:c.aDataSort?c.aDataSort:[d],mData:c.mData?c.mData:d,idx:d});a.aoColumns.push(c);c=a.aoPreSearchCols;c[d]=h.extend({},m.models.oSearch,c[d]);ja(a,d,h(b).data())}function ja(a,b,c){var b=a.aoColumns[b],d=a.oClasses,e=h(b.nTh);if(!b.sWidthOrig){b.sWidthOrig=
	e.attr("width")||null;var f=(e.attr("style")||"").match(/width:\s*(\d+[pxem%]+)/);f&&(b.sWidthOrig=f[1])}c!==k&&null!==c&&(eb(c),I(m.defaults.column,c),c.mDataProp!==k&&!c.mData&&(c.mData=c.mDataProp),c.sType&&(b._sManualType=c.sType),c.className&&!c.sClass&&(c.sClass=c.className),c.sClass&&e.addClass(c.sClass),h.extend(b,c),F(b,c,"sWidth","sWidthOrig"),c.iDataSort!==k&&(b.aDataSort=[c.iDataSort]),F(b,c,"aDataSort"));var g=b.mData,j=Q(g),i=b.mRender?Q(b.mRender):null,c=function(a){return"string"===
	typeof a&&-1!==a.indexOf("@")};b._bAttrSrc=h.isPlainObject(g)&&(c(g.sort)||c(g.type)||c(g.filter));b._setter=null;b.fnGetData=function(a,b,c){var d=j(a,b,k,c);return i&&b?i(d,b,a,c):d};b.fnSetData=function(a,b,c){return R(g)(a,b,c)};"number"!==typeof g&&(a._rowReadObject=!0);a.oFeatures.bSort||(b.bSortable=!1,e.addClass(d.sSortableNone));a=-1!==h.inArray("asc",b.asSorting);c=-1!==h.inArray("desc",b.asSorting);!b.bSortable||!a&&!c?(b.sSortingClass=d.sSortableNone,b.sSortingClassJUI=""):a&&!c?(b.sSortingClass=
	d.sSortableAsc,b.sSortingClassJUI=d.sSortJUIAscAllowed):!a&&c?(b.sSortingClass=d.sSortableDesc,b.sSortingClassJUI=d.sSortJUIDescAllowed):(b.sSortingClass=d.sSortable,b.sSortingClassJUI=d.sSortJUI)}function Y(a){if(!1!==a.oFeatures.bAutoWidth){var b=a.aoColumns;Ea(a);for(var c=0,d=b.length;c<d;c++)b[c].nTh.style.width=b[c].sWidth}b=a.oScroll;(""!==b.sY||""!==b.sX)&&ka(a);r(a,null,"column-sizing",[a])}function Z(a,b){var c=la(a,"bVisible");return"number"===typeof c[b]?c[b]:null}function $(a,b){var c=
	la(a,"bVisible"),c=h.inArray(b,c);return-1!==c?c:null}function aa(a){var b=0;h.each(a.aoColumns,function(a,d){d.bVisible&&"none"!==h(d.nTh).css("display")&&b++});return b}function la(a,b){var c=[];h.map(a.aoColumns,function(a,e){a[b]&&c.push(e)});return c}function Fa(a){var b=a.aoColumns,c=a.aoData,d=m.ext.type.detect,e,f,g,j,i,h,l,q,t;e=0;for(f=b.length;e<f;e++)if(l=b[e],t=[],!l.sType&&l._sManualType)l.sType=l._sManualType;else if(!l.sType){g=0;for(j=d.length;g<j;g++){i=0;for(h=c.length;i<h;i++){t[i]===
	k&&(t[i]=B(a,i,e,"type"));q=d[g](t[i],a);if(!q&&g!==d.length-1)break;if("html"===q)break}if(q){l.sType=q;break}}l.sType||(l.sType="string")}}function hb(a,b,c,d){var e,f,g,j,i,n,l=a.aoColumns;if(b)for(e=b.length-1;0<=e;e--){n=b[e];var q=n.targets!==k?n.targets:n.aTargets;h.isArray(q)||(q=[q]);f=0;for(g=q.length;f<g;f++)if("number"===typeof q[f]&&0<=q[f]){for(;l.length<=q[f];)Da(a);d(q[f],n)}else if("number"===typeof q[f]&&0>q[f])d(l.length+q[f],n);else if("string"===typeof q[f]){j=0;for(i=l.length;j<
	i;j++)("_all"==q[f]||h(l[j].nTh).hasClass(q[f]))&&d(j,n)}}if(c){e=0;for(a=c.length;e<a;e++)d(e,c[e])}}function M(a,b,c,d){var e=a.aoData.length,f=h.extend(!0,{},m.models.oRow,{src:c?"dom":"data",idx:e});f._aData=b;a.aoData.push(f);for(var g=a.aoColumns,j=0,i=g.length;j<i;j++)g[j].sType=null;a.aiDisplayMaster.push(e);b=a.rowIdFn(b);b!==k&&(a.aIds[b]=f);(c||!a.oFeatures.bDeferRender)&&Ga(a,e,c,d);return e}function ma(a,b){var c;b instanceof h||(b=h(b));return b.map(function(b,e){c=Ha(a,e);return M(a,
	c.data,e,c.cells)})}function B(a,b,c,d){var e=a.iDraw,f=a.aoColumns[c],g=a.aoData[b]._aData,j=f.sDefaultContent,i=f.fnGetData(g,d,{settings:a,row:b,col:c});if(i===k)return a.iDrawError!=e&&null===j&&(J(a,0,"Requested unknown parameter "+("function"==typeof f.mData?"{function}":"'"+f.mData+"'")+" for row "+b+", column "+c,4),a.iDrawError=e),j;if((i===g||null===i)&&null!==j&&d!==k)i=j;else if("function"===typeof i)return i.call(g);return null===i&&"display"==d?"":i}function ib(a,b,c,d){a.aoColumns[c].fnSetData(a.aoData[b]._aData,
	d,{settings:a,row:b,col:c})}function Ia(a){return h.map(a.match(/(\\.|[^\.])+/g)||[""],function(a){return a.replace(/\\\./g,".")})}function Q(a){if(h.isPlainObject(a)){var b={};h.each(a,function(a,c){c&&(b[a]=Q(c))});return function(a,c,f,g){var j=b[c]||b._;return j!==k?j(a,c,f,g):a}}if(null===a)return function(a){return a};if("function"===typeof a)return function(b,c,f,g){return a(b,c,f,g)};if("string"===typeof a&&(-1!==a.indexOf(".")||-1!==a.indexOf("[")||-1!==a.indexOf("("))){var c=function(a,
	b,f){var g,j;if(""!==f){j=Ia(f);for(var i=0,n=j.length;i<n;i++){f=j[i].match(ba);g=j[i].match(U);if(f){j[i]=j[i].replace(ba,"");""!==j[i]&&(a=a[j[i]]);g=[];j.splice(0,i+1);j=j.join(".");if(h.isArray(a)){i=0;for(n=a.length;i<n;i++)g.push(c(a[i],b,j))}a=f[0].substring(1,f[0].length-1);a=""===a?g:g.join(a);break}else if(g){j[i]=j[i].replace(U,"");a=a[j[i]]();continue}if(null===a||a[j[i]]===k)return k;a=a[j[i]]}}return a};return function(b,e){return c(b,e,a)}}return function(b){return b[a]}}function R(a){if(h.isPlainObject(a))return R(a._);
	if(null===a)return function(){};if("function"===typeof a)return function(b,d,e){a(b,"set",d,e)};if("string"===typeof a&&(-1!==a.indexOf(".")||-1!==a.indexOf("[")||-1!==a.indexOf("("))){var b=function(a,d,e){var e=Ia(e),f;f=e[e.length-1];for(var g,j,i=0,n=e.length-1;i<n;i++){g=e[i].match(ba);j=e[i].match(U);if(g){e[i]=e[i].replace(ba,"");a[e[i]]=[];f=e.slice();f.splice(0,i+1);g=f.join(".");if(h.isArray(d)){j=0;for(n=d.length;j<n;j++)f={},b(f,d[j],g),a[e[i]].push(f)}else a[e[i]]=d;return}j&&(e[i]=e[i].replace(U,
	""),a=a[e[i]](d));if(null===a[e[i]]||a[e[i]]===k)a[e[i]]={};a=a[e[i]]}if(f.match(U))a[f.replace(U,"")](d);else a[f.replace(ba,"")]=d};return function(c,d){return b(c,d,a)}}return function(b,d){b[a]=d}}function Ja(a){return D(a.aoData,"_aData")}function na(a){a.aoData.length=0;a.aiDisplayMaster.length=0;a.aiDisplay.length=0;a.aIds={}}function oa(a,b,c){for(var d=-1,e=0,f=a.length;e<f;e++)a[e]==b?d=e:a[e]>b&&a[e]--; -1!=d&&c===k&&a.splice(d,1)}function ca(a,b,c,d){var e=a.aoData[b],f,g=function(c,d){for(;c.childNodes.length;)c.removeChild(c.firstChild);
	c.innerHTML=B(a,b,d,"display")};if("dom"===c||(!c||"auto"===c)&&"dom"===e.src)e._aData=Ha(a,e,d,d===k?k:e._aData).data;else{var j=e.anCells;if(j)if(d!==k)g(j[d],d);else{c=0;for(f=j.length;c<f;c++)g(j[c],c)}}e._aSortData=null;e._aFilterData=null;g=a.aoColumns;if(d!==k)g[d].sType=null;else{c=0;for(f=g.length;c<f;c++)g[c].sType=null;Ka(a,e)}}function Ha(a,b,c,d){var e=[],f=b.firstChild,g,j,i=0,n,l=a.aoColumns,q=a._rowReadObject,d=d!==k?d:q?{}:[],t=function(a,b){if("string"===typeof a){var c=a.indexOf("@");
	-1!==c&&(c=a.substring(c+1),R(a)(d,b.getAttribute(c)))}},m=function(a){if(c===k||c===i)j=l[i],n=h.trim(a.innerHTML),j&&j._bAttrSrc?(R(j.mData._)(d,n),t(j.mData.sort,a),t(j.mData.type,a),t(j.mData.filter,a)):q?(j._setter||(j._setter=R(j.mData)),j._setter(d,n)):d[i]=n;i++};if(f)for(;f;){g=f.nodeName.toUpperCase();if("TD"==g||"TH"==g)m(f),e.push(f);f=f.nextSibling}else{e=b.anCells;f=0;for(g=e.length;f<g;f++)m(e[f])}if(b=b.firstChild?b:b.nTr)(b=b.getAttribute("id"))&&R(a.rowId)(d,b);return{data:d,cells:e}}
	function Ga(a,b,c,d){var e=a.aoData[b],f=e._aData,g=[],j,i,n,l,q;if(null===e.nTr){j=c||G.createElement("tr");e.nTr=j;e.anCells=g;j._DT_RowIndex=b;Ka(a,e);l=0;for(q=a.aoColumns.length;l<q;l++){n=a.aoColumns[l];i=c?d[l]:G.createElement(n.sCellType);i._DT_CellIndex={row:b,column:l};g.push(i);if((!c||n.mRender||n.mData!==l)&&(!h.isPlainObject(n.mData)||n.mData._!==l+".display"))i.innerHTML=B(a,b,l,"display");n.sClass&&(i.className+=" "+n.sClass);n.bVisible&&!c?j.appendChild(i):!n.bVisible&&c&&i.parentNode.removeChild(i);
	n.fnCreatedCell&&n.fnCreatedCell.call(a.oInstance,i,B(a,b,l),f,b,l)}r(a,"aoRowCreatedCallback",null,[j,f,b])}e.nTr.setAttribute("role","row")}function Ka(a,b){var c=b.nTr,d=b._aData;if(c){var e=a.rowIdFn(d);e&&(c.id=e);d.DT_RowClass&&(e=d.DT_RowClass.split(" "),b.__rowc=b.__rowc?qa(b.__rowc.concat(e)):e,h(c).removeClass(b.__rowc.join(" ")).addClass(d.DT_RowClass));d.DT_RowAttr&&h(c).attr(d.DT_RowAttr);d.DT_RowData&&h(c).data(d.DT_RowData)}}function jb(a){var b,c,d,e,f,g=a.nTHead,j=a.nTFoot,i=0===
	h("th, td",g).length,n=a.oClasses,l=a.aoColumns;i&&(e=h("<tr/>").appendTo(g));b=0;for(c=l.length;b<c;b++)f=l[b],d=h(f.nTh).addClass(f.sClass),i&&d.appendTo(e),a.oFeatures.bSort&&(d.addClass(f.sSortingClass),!1!==f.bSortable&&(d.attr("tabindex",a.iTabIndex).attr("aria-controls",a.sTableId),La(a,f.nTh,b))),f.sTitle!=d[0].innerHTML&&d.html(f.sTitle),Ma(a,"header")(a,d,f,n);i&&da(a.aoHeader,g);h(g).find(">tr").attr("role","row");h(g).find(">tr>th, >tr>td").addClass(n.sHeaderTH);h(j).find(">tr>th, >tr>td").addClass(n.sFooterTH);
	if(null!==j){a=a.aoFooter[0];b=0;for(c=a.length;b<c;b++)f=l[b],f.nTf=a[b].cell,f.sClass&&h(f.nTf).addClass(f.sClass)}}function ea(a,b,c){var d,e,f,g=[],j=[],i=a.aoColumns.length,n;if(b){c===k&&(c=!1);d=0;for(e=b.length;d<e;d++){g[d]=b[d].slice();g[d].nTr=b[d].nTr;for(f=i-1;0<=f;f--)!a.aoColumns[f].bVisible&&!c&&g[d].splice(f,1);j.push([])}d=0;for(e=g.length;d<e;d++){if(a=g[d].nTr)for(;f=a.firstChild;)a.removeChild(f);f=0;for(b=g[d].length;f<b;f++)if(n=i=1,j[d][f]===k){a.appendChild(g[d][f].cell);
	for(j[d][f]=1;g[d+i]!==k&&g[d][f].cell==g[d+i][f].cell;)j[d+i][f]=1,i++;for(;g[d][f+n]!==k&&g[d][f].cell==g[d][f+n].cell;){for(c=0;c<i;c++)j[d+c][f+n]=1;n++}h(g[d][f].cell).attr("rowspan",i).attr("colspan",n)}}}}function N(a){var b=r(a,"aoPreDrawCallback","preDraw",[a]);if(-1!==h.inArray(!1,b))C(a,!1);else{var b=[],c=0,d=a.asStripeClasses,e=d.length,f=a.oLanguage,g=a.iInitDisplayStart,j="ssp"==y(a),i=a.aiDisplay;a.bDrawing=!0;g!==k&&-1!==g&&(a._iDisplayStart=j?g:g>=a.fnRecordsDisplay()?0:g,a.iInitDisplayStart=
	-1);var g=a._iDisplayStart,n=a.fnDisplayEnd();if(a.bDeferLoading)a.bDeferLoading=!1,a.iDraw++,C(a,!1);else if(j){if(!a.bDestroying&&!kb(a))return}else a.iDraw++;if(0!==i.length){f=j?a.aoData.length:n;for(j=j?0:g;j<f;j++){var l=i[j],q=a.aoData[l];null===q.nTr&&Ga(a,l);l=q.nTr;if(0!==e){var t=d[c%e];q._sRowStripe!=t&&(h(l).removeClass(q._sRowStripe).addClass(t),q._sRowStripe=t)}r(a,"aoRowCallback",null,[l,q._aData,c,j]);b.push(l);c++}}else c=f.sZeroRecords,1==a.iDraw&&"ajax"==y(a)?c=f.sLoadingRecords:
	f.sEmptyTable&&0===a.fnRecordsTotal()&&(c=f.sEmptyTable),b[0]=h("<tr/>",{"class":e?d[0]:""}).append(h("<td />",{valign:"top",colSpan:aa(a),"class":a.oClasses.sRowEmpty}).html(c))[0];r(a,"aoHeaderCallback","header",[h(a.nTHead).children("tr")[0],Ja(a),g,n,i]);r(a,"aoFooterCallback","footer",[h(a.nTFoot).children("tr")[0],Ja(a),g,n,i]);d=h(a.nTBody);d.children().detach();d.append(h(b));r(a,"aoDrawCallback","draw",[a]);a.bSorted=!1;a.bFiltered=!1;a.bDrawing=!1}}function S(a,b){var c=a.oFeatures,d=c.bFilter;
	c.bSort&&lb(a);d?fa(a,a.oPreviousSearch):a.aiDisplay=a.aiDisplayMaster.slice();!0!==b&&(a._iDisplayStart=0);a._drawHold=b;N(a);a._drawHold=!1}function mb(a){var b=a.oClasses,c=h(a.nTable),c=h("<div/>").insertBefore(c),d=a.oFeatures,e=h("<div/>",{id:a.sTableId+"_wrapper","class":b.sWrapper+(a.nTFoot?"":" "+b.sNoFooter)});a.nHolding=c[0];a.nTableWrapper=e[0];a.nTableReinsertBefore=a.nTable.nextSibling;for(var f=a.sDom.split(""),g,j,i,n,l,q,k=0;k<f.length;k++){g=null;j=f[k];if("<"==j){i=h("<div/>")[0];
	n=f[k+1];if("'"==n||'"'==n){l="";for(q=2;f[k+q]!=n;)l+=f[k+q],q++;"H"==l?l=b.sJUIHeader:"F"==l&&(l=b.sJUIFooter);-1!=l.indexOf(".")?(n=l.split("."),i.id=n[0].substr(1,n[0].length-1),i.className=n[1]):"#"==l.charAt(0)?i.id=l.substr(1,l.length-1):i.className=l;k+=q}e.append(i);e=h(i)}else if(">"==j)e=e.parent();else if("l"==j&&d.bPaginate&&d.bLengthChange)g=nb(a);else if("f"==j&&d.bFilter)g=ob(a);else if("r"==j&&d.bProcessing)g=pb(a);else if("t"==j)g=qb(a);else if("i"==j&&d.bInfo)g=rb(a);else if("p"==
	j&&d.bPaginate)g=sb(a);else if(0!==m.ext.feature.length){i=m.ext.feature;q=0;for(n=i.length;q<n;q++)if(j==i[q].cFeature){g=i[q].fnInit(a);break}}g&&(i=a.aanFeatures,i[j]||(i[j]=[]),i[j].push(g),e.append(g))}c.replaceWith(e);a.nHolding=null}function da(a,b){var c=h(b).children("tr"),d,e,f,g,j,i,n,l,q,k;a.splice(0,a.length);f=0;for(i=c.length;f<i;f++)a.push([]);f=0;for(i=c.length;f<i;f++){d=c[f];for(e=d.firstChild;e;){if("TD"==e.nodeName.toUpperCase()||"TH"==e.nodeName.toUpperCase()){l=1*e.getAttribute("colspan");
	q=1*e.getAttribute("rowspan");l=!l||0===l||1===l?1:l;q=!q||0===q||1===q?1:q;g=0;for(j=a[f];j[g];)g++;n=g;k=1===l?!0:!1;for(j=0;j<l;j++)for(g=0;g<q;g++)a[f+g][n+j]={cell:e,unique:k},a[f+g].nTr=d}e=e.nextSibling}}}function ra(a,b,c){var d=[];c||(c=a.aoHeader,b&&(c=[],da(c,b)));for(var b=0,e=c.length;b<e;b++)for(var f=0,g=c[b].length;f<g;f++)if(c[b][f].unique&&(!d[f]||!a.bSortCellsTop))d[f]=c[b][f].cell;return d}function sa(a,b,c){r(a,"aoServerParams","serverParams",[b]);if(b&&h.isArray(b)){var d={},
	e=/(.*?)\[\]$/;h.each(b,function(a,b){var c=b.name.match(e);c?(c=c[0],d[c]||(d[c]=[]),d[c].push(b.value)):d[b.name]=b.value});b=d}var f,g=a.ajax,j=a.oInstance,i=function(b){r(a,null,"xhr",[a,b,a.jqXHR]);c(b)};if(h.isPlainObject(g)&&g.data){f=g.data;var n=h.isFunction(f)?f(b,a):f,b=h.isFunction(f)&&n?n:h.extend(!0,b,n);delete g.data}n={data:b,success:function(b){var c=b.error||b.sError;c&&J(a,0,c);a.json=b;i(b)},dataType:"json",cache:!1,type:a.sServerMethod,error:function(b,c){var d=r(a,null,"xhr",
	[a,null,a.jqXHR]);-1===h.inArray(!0,d)&&("parsererror"==c?J(a,0,"Invalid JSON response",1):4===b.readyState&&J(a,0,"Ajax error",7));C(a,!1)}};a.oAjaxData=b;r(a,null,"preXhr",[a,b]);a.fnServerData?a.fnServerData.call(j,a.sAjaxSource,h.map(b,function(a,b){return{name:b,value:a}}),i,a):a.sAjaxSource||"string"===typeof g?a.jqXHR=h.ajax(h.extend(n,{url:g||a.sAjaxSource})):h.isFunction(g)?a.jqXHR=g.call(j,b,i,a):(a.jqXHR=h.ajax(h.extend(n,g)),g.data=f)}function kb(a){return a.bAjaxDataGet?(a.iDraw++,C(a,
	!0),sa(a,tb(a),function(b){ub(a,b)}),!1):!0}function tb(a){var b=a.aoColumns,c=b.length,d=a.oFeatures,e=a.oPreviousSearch,f=a.aoPreSearchCols,g,j=[],i,n,l,k=V(a);g=a._iDisplayStart;i=!1!==d.bPaginate?a._iDisplayLength:-1;var t=function(a,b){j.push({name:a,value:b})};t("sEcho",a.iDraw);t("iColumns",c);t("sColumns",D(b,"sName").join(","));t("iDisplayStart",g);t("iDisplayLength",i);var pa={draw:a.iDraw,columns:[],order:[],start:g,length:i,search:{value:e.sSearch,regex:e.bRegex}};for(g=0;g<c;g++)n=b[g],
	l=f[g],i="function"==typeof n.mData?"function":n.mData,pa.columns.push({data:i,name:n.sName,searchable:n.bSearchable,orderable:n.bSortable,search:{value:l.sSearch,regex:l.bRegex}}),t("mDataProp_"+g,i),d.bFilter&&(t("sSearch_"+g,l.sSearch),t("bRegex_"+g,l.bRegex),t("bSearchable_"+g,n.bSearchable)),d.bSort&&t("bSortable_"+g,n.bSortable);d.bFilter&&(t("sSearch",e.sSearch),t("bRegex",e.bRegex));d.bSort&&(h.each(k,function(a,b){pa.order.push({column:b.col,dir:b.dir});t("iSortCol_"+a,b.col);t("sSortDir_"+
	a,b.dir)}),t("iSortingCols",k.length));b=m.ext.legacy.ajax;return null===b?a.sAjaxSource?j:pa:b?j:pa}function ub(a,b){var c=ta(a,b),d=b.sEcho!==k?b.sEcho:b.draw,e=b.iTotalRecords!==k?b.iTotalRecords:b.recordsTotal,f=b.iTotalDisplayRecords!==k?b.iTotalDisplayRecords:b.recordsFiltered;if(d){if(1*d<a.iDraw)return;a.iDraw=1*d}na(a);a._iRecordsTotal=parseInt(e,10);a._iRecordsDisplay=parseInt(f,10);d=0;for(e=c.length;d<e;d++)M(a,c[d]);a.aiDisplay=a.aiDisplayMaster.slice();a.bAjaxDataGet=!1;N(a);a._bInitComplete||
	ua(a,b);a.bAjaxDataGet=!0;C(a,!1)}function ta(a,b){var c=h.isPlainObject(a.ajax)&&a.ajax.dataSrc!==k?a.ajax.dataSrc:a.sAjaxDataProp;return"data"===c?b.aaData||b[c]:""!==c?Q(c)(b):b}function ob(a){var b=a.oClasses,c=a.sTableId,d=a.oLanguage,e=a.oPreviousSearch,f=a.aanFeatures,g='<input type="search" class="'+b.sFilterInput+'"/>',j=d.sSearch,j=j.match(/_INPUT_/)?j.replace("_INPUT_",g):j+g,b=h("<div/>",{id:!f.f?c+"_filter":null,"class":b.sFilter}).append(h("<label/>").append(j)),f=function(){var b=!this.value?
	"":this.value;b!=e.sSearch&&(fa(a,{sSearch:b,bRegex:e.bRegex,bSmart:e.bSmart,bCaseInsensitive:e.bCaseInsensitive}),a._iDisplayStart=0,N(a))},g=null!==a.searchDelay?a.searchDelay:"ssp"===y(a)?400:0,i=h("input",b).val(e.sSearch).attr("placeholder",d.sSearchPlaceholder).on("keyup.DT search.DT input.DT paste.DT cut.DT",g?Na(f,g):f).on("keypress.DT",function(a){if(13==a.keyCode)return!1}).attr("aria-controls",c);h(a.nTable).on("search.dt.DT",function(b,c){if(a===c)try{i[0]!==G.activeElement&&i.val(e.sSearch)}catch(d){}});
	return b[0]}function fa(a,b,c){var d=a.oPreviousSearch,e=a.aoPreSearchCols,f=function(a){d.sSearch=a.sSearch;d.bRegex=a.bRegex;d.bSmart=a.bSmart;d.bCaseInsensitive=a.bCaseInsensitive};Fa(a);if("ssp"!=y(a)){vb(a,b.sSearch,c,b.bEscapeRegex!==k?!b.bEscapeRegex:b.bRegex,b.bSmart,b.bCaseInsensitive);f(b);for(b=0;b<e.length;b++)wb(a,e[b].sSearch,b,e[b].bEscapeRegex!==k?!e[b].bEscapeRegex:e[b].bRegex,e[b].bSmart,e[b].bCaseInsensitive);xb(a)}else f(b);a.bFiltered=!0;r(a,null,"search",[a])}function xb(a){for(var b=
	m.ext.search,c=a.aiDisplay,d,e,f=0,g=b.length;f<g;f++){for(var j=[],i=0,n=c.length;i<n;i++)e=c[i],d=a.aoData[e],b[f](a,d._aFilterData,e,d._aData,i)&&j.push(e);c.length=0;h.merge(c,j)}}function wb(a,b,c,d,e,f){if(""!==b){for(var g=[],j=a.aiDisplay,d=Oa(b,d,e,f),e=0;e<j.length;e++)b=a.aoData[j[e]]._aFilterData[c],d.test(b)&&g.push(j[e]);a.aiDisplay=g}}function vb(a,b,c,d,e,f){var d=Oa(b,d,e,f),f=a.oPreviousSearch.sSearch,g=a.aiDisplayMaster,j,e=[];0!==m.ext.search.length&&(c=!0);j=yb(a);if(0>=b.length)a.aiDisplay=
	g.slice();else{if(j||c||f.length>b.length||0!==b.indexOf(f)||a.bSorted)a.aiDisplay=g.slice();b=a.aiDisplay;for(c=0;c<b.length;c++)d.test(a.aoData[b[c]]._sFilterRow)&&e.push(b[c]);a.aiDisplay=e}}function Oa(a,b,c,d){a=b?a:Pa(a);c&&(a="^(?=.*?"+h.map(a.match(/"[^"]+"|[^ ]+/g)||[""],function(a){if('"'===a.charAt(0))var b=a.match(/^"(.*)"$/),a=b?b[1]:a;return a.replace('"',"")}).join(")(?=.*?")+").*$");return RegExp(a,d?"i":"")}function yb(a){var b=a.aoColumns,c,d,e,f,g,j,i,h,l=m.ext.type.search;c=!1;
	d=0;for(f=a.aoData.length;d<f;d++)if(h=a.aoData[d],!h._aFilterData){j=[];e=0;for(g=b.length;e<g;e++)c=b[e],c.bSearchable?(i=B(a,d,e,"filter"),l[c.sType]&&(i=l[c.sType](i)),null===i&&(i=""),"string"!==typeof i&&i.toString&&(i=i.toString())):i="",i.indexOf&&-1!==i.indexOf("&")&&(va.innerHTML=i,i=Wb?va.textContent:va.innerText),i.replace&&(i=i.replace(/[\r\n]/g,"")),j.push(i);h._aFilterData=j;h._sFilterRow=j.join("  ");c=!0}return c}function zb(a){return{search:a.sSearch,smart:a.bSmart,regex:a.bRegex,
	caseInsensitive:a.bCaseInsensitive}}function Ab(a){return{sSearch:a.search,bSmart:a.smart,bRegex:a.regex,bCaseInsensitive:a.caseInsensitive}}function rb(a){var b=a.sTableId,c=a.aanFeatures.i,d=h("<div/>",{"class":a.oClasses.sInfo,id:!c?b+"_info":null});c||(a.aoDrawCallback.push({fn:Bb,sName:"information"}),d.attr("role","status").attr("aria-live","polite"),h(a.nTable).attr("aria-describedby",b+"_info"));return d[0]}function Bb(a){var b=a.aanFeatures.i;if(0!==b.length){var c=a.oLanguage,d=a._iDisplayStart+
	1,e=a.fnDisplayEnd(),f=a.fnRecordsTotal(),g=a.fnRecordsDisplay(),j=g?c.sInfo:c.sInfoEmpty;g!==f&&(j+=" "+c.sInfoFiltered);j+=c.sInfoPostFix;j=Cb(a,j);c=c.fnInfoCallback;null!==c&&(j=c.call(a.oInstance,a,d,e,f,g,j));h(b).html(j)}}function Cb(a,b){var c=a.fnFormatNumber,d=a._iDisplayStart+1,e=a._iDisplayLength,f=a.fnRecordsDisplay(),g=-1===e;return b.replace(/_START_/g,c.call(a,d)).replace(/_END_/g,c.call(a,a.fnDisplayEnd())).replace(/_MAX_/g,c.call(a,a.fnRecordsTotal())).replace(/_TOTAL_/g,c.call(a,
	f)).replace(/_PAGE_/g,c.call(a,g?1:Math.ceil(d/e))).replace(/_PAGES_/g,c.call(a,g?1:Math.ceil(f/e)))}function ga(a){var b,c,d=a.iInitDisplayStart,e=a.aoColumns,f;c=a.oFeatures;var g=a.bDeferLoading;if(a.bInitialised){mb(a);jb(a);ea(a,a.aoHeader);ea(a,a.aoFooter);C(a,!0);c.bAutoWidth&&Ea(a);b=0;for(c=e.length;b<c;b++)f=e[b],f.sWidth&&(f.nTh.style.width=v(f.sWidth));r(a,null,"preInit",[a]);S(a);e=y(a);if("ssp"!=e||g)"ajax"==e?sa(a,[],function(c){var f=ta(a,c);for(b=0;b<f.length;b++)M(a,f[b]);a.iInitDisplayStart=
	d;S(a);C(a,!1);ua(a,c)},a):(C(a,!1),ua(a))}else setTimeout(function(){ga(a)},200)}function ua(a,b){a._bInitComplete=!0;(b||a.oInit.aaData)&&Y(a);r(a,null,"plugin-init",[a,b]);r(a,"aoInitComplete","init",[a,b])}function Qa(a,b){var c=parseInt(b,10);a._iDisplayLength=c;Ra(a);r(a,null,"length",[a,c])}function nb(a){for(var b=a.oClasses,c=a.sTableId,d=a.aLengthMenu,e=h.isArray(d[0]),f=e?d[0]:d,d=e?d[1]:d,e=h("<select/>",{name:c+"_length","aria-controls":c,"class":b.sLengthSelect}),g=0,j=f.length;g<j;g++)e[0][g]=
	new Option("number"===typeof d[g]?a.fnFormatNumber(d[g]):d[g],f[g]);var i=h("<div><label/></div>").addClass(b.sLength);a.aanFeatures.l||(i[0].id=c+"_length");i.children().append(a.oLanguage.sLengthMenu.replace("_MENU_",e[0].outerHTML));h("select",i).val(a._iDisplayLength).on("change.DT",function(){Qa(a,h(this).val());N(a)});h(a.nTable).on("length.dt.DT",function(b,c,d){a===c&&h("select",i).val(d)});return i[0]}function sb(a){var b=a.sPaginationType,c=m.ext.pager[b],d="function"===typeof c,e=function(a){N(a)},
	b=h("<div/>").addClass(a.oClasses.sPaging+b)[0],f=a.aanFeatures;d||c.fnInit(a,b,e);f.p||(b.id=a.sTableId+"_paginate",a.aoDrawCallback.push({fn:function(a){if(d){var b=a._iDisplayStart,i=a._iDisplayLength,h=a.fnRecordsDisplay(),l=-1===i,b=l?0:Math.ceil(b/i),i=l?1:Math.ceil(h/i),h=c(b,i),k,l=0;for(k=f.p.length;l<k;l++)Ma(a,"pageButton")(a,f.p[l],l,h,b,i)}else c.fnUpdate(a,e)},sName:"pagination"}));return b}function Sa(a,b,c){var d=a._iDisplayStart,e=a._iDisplayLength,f=a.fnRecordsDisplay();0===f||-1===
	e?d=0:"number"===typeof b?(d=b*e,d>f&&(d=0)):"first"==b?d=0:"previous"==b?(d=0<=e?d-e:0,0>d&&(d=0)):"next"==b?d+e<f&&(d+=e):"last"==b?d=Math.floor((f-1)/e)*e:J(a,0,"Unknown paging action: "+b,5);b=a._iDisplayStart!==d;a._iDisplayStart=d;b&&(r(a,null,"page",[a]),c&&N(a));return b}function pb(a){return h("<div/>",{id:!a.aanFeatures.r?a.sTableId+"_processing":null,"class":a.oClasses.sProcessing}).html(a.oLanguage.sProcessing).insertBefore(a.nTable)[0]}function C(a,b){a.oFeatures.bProcessing&&h(a.aanFeatures.r).css("display",
	b?"block":"none");r(a,null,"processing",[a,b])}function qb(a){var b=h(a.nTable);b.attr("role","grid");var c=a.oScroll;if(""===c.sX&&""===c.sY)return a.nTable;var d=c.sX,e=c.sY,f=a.oClasses,g=b.children("caption"),j=g.length?g[0]._captionSide:null,i=h(b[0].cloneNode(!1)),n=h(b[0].cloneNode(!1)),l=b.children("tfoot");l.length||(l=null);i=h("<div/>",{"class":f.sScrollWrapper}).append(h("<div/>",{"class":f.sScrollHead}).css({overflow:"hidden",position:"relative",border:0,width:d?!d?null:v(d):"100%"}).append(h("<div/>",
	{"class":f.sScrollHeadInner}).css({"box-sizing":"content-box",width:c.sXInner||"100%"}).append(i.removeAttr("id").css("margin-left",0).append("top"===j?g:null).append(b.children("thead"))))).append(h("<div/>",{"class":f.sScrollBody}).css({position:"relative",overflow:"auto",width:!d?null:v(d)}).append(b));l&&i.append(h("<div/>",{"class":f.sScrollFoot}).css({overflow:"hidden",border:0,width:d?!d?null:v(d):"100%"}).append(h("<div/>",{"class":f.sScrollFootInner}).append(n.removeAttr("id").css("margin-left",
	0).append("bottom"===j?g:null).append(b.children("tfoot")))));var b=i.children(),k=b[0],f=b[1],t=l?b[2]:null;if(d)h(f).on("scroll.DT",function(){var a=this.scrollLeft;k.scrollLeft=a;l&&(t.scrollLeft=a)});h(f).css(e&&c.bCollapse?"max-height":"height",e);a.nScrollHead=k;a.nScrollBody=f;a.nScrollFoot=t;a.aoDrawCallback.push({fn:ka,sName:"scrolling"});return i[0]}function ka(a){var b=a.oScroll,c=b.sX,d=b.sXInner,e=b.sY,b=b.iBarWidth,f=h(a.nScrollHead),g=f[0].style,j=f.children("div"),i=j[0].style,n=j.children("table"),
	j=a.nScrollBody,l=h(j),q=j.style,t=h(a.nScrollFoot).children("div"),m=t.children("table"),o=h(a.nTHead),p=h(a.nTable),s=p[0],r=s.style,u=a.nTFoot?h(a.nTFoot):null,x=a.oBrowser,T=x.bScrollOversize,Xb=D(a.aoColumns,"nTh"),O,K,P,w,Ta=[],y=[],z=[],A=[],B,C=function(a){a=a.style;a.paddingTop="0";a.paddingBottom="0";a.borderTopWidth="0";a.borderBottomWidth="0";a.height=0};K=j.scrollHeight>j.clientHeight;if(a.scrollBarVis!==K&&a.scrollBarVis!==k)a.scrollBarVis=K,Y(a);else{a.scrollBarVis=K;p.children("thead, tfoot").remove();
	u&&(P=u.clone().prependTo(p),O=u.find("tr"),P=P.find("tr"));w=o.clone().prependTo(p);o=o.find("tr");K=w.find("tr");w.find("th, td").removeAttr("tabindex");c||(q.width="100%",f[0].style.width="100%");h.each(ra(a,w),function(b,c){B=Z(a,b);c.style.width=a.aoColumns[B].sWidth});u&&H(function(a){a.style.width=""},P);f=p.outerWidth();if(""===c){r.width="100%";if(T&&(p.find("tbody").height()>j.offsetHeight||"scroll"==l.css("overflow-y")))r.width=v(p.outerWidth()-b);f=p.outerWidth()}else""!==d&&(r.width=
	v(d),f=p.outerWidth());H(C,K);H(function(a){z.push(a.innerHTML);Ta.push(v(h(a).css("width")))},K);H(function(a,b){if(h.inArray(a,Xb)!==-1)a.style.width=Ta[b]},o);h(K).height(0);u&&(H(C,P),H(function(a){A.push(a.innerHTML);y.push(v(h(a).css("width")))},P),H(function(a,b){a.style.width=y[b]},O),h(P).height(0));H(function(a,b){a.innerHTML='<div class="dataTables_sizing" style="height:0;overflow:hidden;">'+z[b]+"</div>";a.style.width=Ta[b]},K);u&&H(function(a,b){a.innerHTML='<div class="dataTables_sizing" style="height:0;overflow:hidden;">'+
	A[b]+"</div>";a.style.width=y[b]},P);if(p.outerWidth()<f){O=j.scrollHeight>j.offsetHeight||"scroll"==l.css("overflow-y")?f+b:f;if(T&&(j.scrollHeight>j.offsetHeight||"scroll"==l.css("overflow-y")))r.width=v(O-b);(""===c||""!==d)&&J(a,1,"Possible column misalignment",6)}else O="100%";q.width=v(O);g.width=v(O);u&&(a.nScrollFoot.style.width=v(O));!e&&T&&(q.height=v(s.offsetHeight+b));c=p.outerWidth();n[0].style.width=v(c);i.width=v(c);d=p.height()>j.clientHeight||"scroll"==l.css("overflow-y");e="padding"+
	(x.bScrollbarLeft?"Left":"Right");i[e]=d?b+"px":"0px";u&&(m[0].style.width=v(c),t[0].style.width=v(c),t[0].style[e]=d?b+"px":"0px");p.children("colgroup").insertBefore(p.children("thead"));l.scroll();if((a.bSorted||a.bFiltered)&&!a._drawHold)j.scrollTop=0}}function H(a,b,c){for(var d=0,e=0,f=b.length,g,j;e<f;){g=b[e].firstChild;for(j=c?c[e].firstChild:null;g;)1===g.nodeType&&(c?a(g,j,d):a(g,d),d++),g=g.nextSibling,j=c?j.nextSibling:null;e++}}function Ea(a){var b=a.nTable,c=a.aoColumns,d=a.oScroll,
	e=d.sY,f=d.sX,g=d.sXInner,j=c.length,i=la(a,"bVisible"),n=h("th",a.nTHead),l=b.getAttribute("width"),k=b.parentNode,t=!1,m,o,p=a.oBrowser,d=p.bScrollOversize;(m=b.style.width)&&-1!==m.indexOf("%")&&(l=m);for(m=0;m<i.length;m++)o=c[i[m]],null!==o.sWidth&&(o.sWidth=Db(o.sWidthOrig,k),t=!0);if(d||!t&&!f&&!e&&j==aa(a)&&j==n.length)for(m=0;m<j;m++)i=Z(a,m),null!==i&&(c[i].sWidth=v(n.eq(m).width()));else{j=h(b).clone().css("visibility","hidden").removeAttr("id");j.find("tbody tr").remove();var s=h("<tr/>").appendTo(j.find("tbody"));
	j.find("thead, tfoot").remove();j.append(h(a.nTHead).clone()).append(h(a.nTFoot).clone());j.find("tfoot th, tfoot td").css("width","");n=ra(a,j.find("thead")[0]);for(m=0;m<i.length;m++)o=c[i[m]],n[m].style.width=null!==o.sWidthOrig&&""!==o.sWidthOrig?v(o.sWidthOrig):"",o.sWidthOrig&&f&&h(n[m]).append(h("<div/>").css({width:o.sWidthOrig,margin:0,padding:0,border:0,height:1}));if(a.aoData.length)for(m=0;m<i.length;m++)t=i[m],o=c[t],h(Eb(a,t)).clone(!1).append(o.sContentPadding).appendTo(s);h("[name]",
	j).removeAttr("name");o=h("<div/>").css(f||e?{position:"absolute",top:0,left:0,height:1,right:0,overflow:"hidden"}:{}).append(j).appendTo(k);f&&g?j.width(g):f?(j.css("width","auto"),j.removeAttr("width"),j.width()<k.clientWidth&&l&&j.width(k.clientWidth)):e?j.width(k.clientWidth):l&&j.width(l);for(m=e=0;m<i.length;m++)k=h(n[m]),g=k.outerWidth()-k.width(),k=p.bBounding?Math.ceil(n[m].getBoundingClientRect().width):k.outerWidth(),e+=k,c[i[m]].sWidth=v(k-g);b.style.width=v(e);o.remove()}l&&(b.style.width=
	v(l));if((l||f)&&!a._reszEvt)b=function(){h(E).on("resize.DT-"+a.sInstance,Na(function(){Y(a)}))},d?setTimeout(b,1E3):b(),a._reszEvt=!0}function Db(a,b){if(!a)return 0;var c=h("<div/>").css("width",v(a)).appendTo(b||G.body),d=c[0].offsetWidth;c.remove();return d}function Eb(a,b){var c=Fb(a,b);if(0>c)return null;var d=a.aoData[c];return!d.nTr?h("<td/>").html(B(a,c,b,"display"))[0]:d.anCells[b]}function Fb(a,b){for(var c,d=-1,e=-1,f=0,g=a.aoData.length;f<g;f++)c=B(a,f,b,"display")+"",c=c.replace(Yb,
	""),c=c.replace(/&nbsp;/g," "),c.length>d&&(d=c.length,e=f);return e}function v(a){return null===a?"0px":"number"==typeof a?0>a?"0px":a+"px":a.match(/\d$/)?a+"px":a}function V(a){var b,c,d=[],e=a.aoColumns,f,g,j,i;b=a.aaSortingFixed;c=h.isPlainObject(b);var n=[];f=function(a){a.length&&!h.isArray(a[0])?n.push(a):h.merge(n,a)};h.isArray(b)&&f(b);c&&b.pre&&f(b.pre);f(a.aaSorting);c&&b.post&&f(b.post);for(a=0;a<n.length;a++){i=n[a][0];f=e[i].aDataSort;b=0;for(c=f.length;b<c;b++)g=f[b],j=e[g].sType||
	"string",n[a]._idx===k&&(n[a]._idx=h.inArray(n[a][1],e[g].asSorting)),d.push({src:i,col:g,dir:n[a][1],index:n[a]._idx,type:j,formatter:m.ext.type.order[j+"-pre"]})}return d}function lb(a){var b,c,d=[],e=m.ext.type.order,f=a.aoData,g=0,j,i=a.aiDisplayMaster,h;Fa(a);h=V(a);b=0;for(c=h.length;b<c;b++)j=h[b],j.formatter&&g++,Gb(a,j.col);if("ssp"!=y(a)&&0!==h.length){b=0;for(c=i.length;b<c;b++)d[i[b]]=b;g===h.length?i.sort(function(a,b){var c,e,g,j,i=h.length,k=f[a]._aSortData,m=f[b]._aSortData;for(g=
	0;g<i;g++)if(j=h[g],c=k[j.col],e=m[j.col],c=c<e?-1:c>e?1:0,0!==c)return"asc"===j.dir?c:-c;c=d[a];e=d[b];return c<e?-1:c>e?1:0}):i.sort(function(a,b){var c,g,j,i,k=h.length,m=f[a]._aSortData,o=f[b]._aSortData;for(j=0;j<k;j++)if(i=h[j],c=m[i.col],g=o[i.col],i=e[i.type+"-"+i.dir]||e["string-"+i.dir],c=i(c,g),0!==c)return c;c=d[a];g=d[b];return c<g?-1:c>g?1:0})}a.bSorted=!0}function Hb(a){for(var b,c,d=a.aoColumns,e=V(a),a=a.oLanguage.oAria,f=0,g=d.length;f<g;f++){c=d[f];var j=c.asSorting;b=c.sTitle.replace(/<.*?>/g,
	"");var i=c.nTh;i.removeAttribute("aria-sort");c.bSortable&&(0<e.length&&e[0].col==f?(i.setAttribute("aria-sort","asc"==e[0].dir?"ascending":"descending"),c=j[e[0].index+1]||j[0]):c=j[0],b+="asc"===c?a.sSortAscending:a.sSortDescending);i.setAttribute("aria-label",b)}}function Ua(a,b,c,d){var e=a.aaSorting,f=a.aoColumns[b].asSorting,g=function(a,b){var c=a._idx;c===k&&(c=h.inArray(a[1],f));return c+1<f.length?c+1:b?null:0};"number"===typeof e[0]&&(e=a.aaSorting=[e]);c&&a.oFeatures.bSortMulti?(c=h.inArray(b,
	D(e,"0")),-1!==c?(b=g(e[c],!0),null===b&&1===e.length&&(b=0),null===b?e.splice(c,1):(e[c][1]=f[b],e[c]._idx=b)):(e.push([b,f[0],0]),e[e.length-1]._idx=0)):e.length&&e[0][0]==b?(b=g(e[0]),e.length=1,e[0][1]=f[b],e[0]._idx=b):(e.length=0,e.push([b,f[0]]),e[0]._idx=0);S(a);"function"==typeof d&&d(a)}function La(a,b,c,d){var e=a.aoColumns[c];Va(b,{},function(b){!1!==e.bSortable&&(a.oFeatures.bProcessing?(C(a,!0),setTimeout(function(){Ua(a,c,b.shiftKey,d);"ssp"!==y(a)&&C(a,!1)},0)):Ua(a,c,b.shiftKey,d))})}
	function wa(a){var b=a.aLastSort,c=a.oClasses.sSortColumn,d=V(a),e=a.oFeatures,f,g;if(e.bSort&&e.bSortClasses){e=0;for(f=b.length;e<f;e++)g=b[e].src,h(D(a.aoData,"anCells",g)).removeClass(c+(2>e?e+1:3));e=0;for(f=d.length;e<f;e++)g=d[e].src,h(D(a.aoData,"anCells",g)).addClass(c+(2>e?e+1:3))}a.aLastSort=d}function Gb(a,b){var c=a.aoColumns[b],d=m.ext.order[c.sSortDataType],e;d&&(e=d.call(a.oInstance,a,b,$(a,b)));for(var f,g=m.ext.type.order[c.sType+"-pre"],j=0,i=a.aoData.length;j<i;j++)if(c=a.aoData[j],
	c._aSortData||(c._aSortData=[]),!c._aSortData[b]||d)f=d?e[j]:B(a,j,b,"sort"),c._aSortData[b]=g?g(f):f}function xa(a){if(a.oFeatures.bStateSave&&!a.bDestroying){var b={time:+new Date,start:a._iDisplayStart,length:a._iDisplayLength,order:h.extend(!0,[],a.aaSorting),search:zb(a.oPreviousSearch),columns:h.map(a.aoColumns,function(b,d){return{visible:b.bVisible,search:zb(a.aoPreSearchCols[d])}})};r(a,"aoStateSaveParams","stateSaveParams",[a,b]);a.oSavedState=b;a.fnStateSaveCallback.call(a.oInstance,a,
	b)}}function Ib(a,b,c){var d,e,f=a.aoColumns,b=function(b){if(b&&b.time){var g=r(a,"aoStateLoadParams","stateLoadParams",[a,b]);if(-1===h.inArray(!1,g)&&(g=a.iStateDuration,!(0<g&&b.time<+new Date-1E3*g)&&!(b.columns&&f.length!==b.columns.length))){a.oLoadedState=h.extend(!0,{},b);b.start!==k&&(a._iDisplayStart=b.start,a.iInitDisplayStart=b.start);b.length!==k&&(a._iDisplayLength=b.length);b.order!==k&&(a.aaSorting=[],h.each(b.order,function(b,c){a.aaSorting.push(c[0]>=f.length?[0,c[1]]:c)}));b.search!==
	k&&h.extend(a.oPreviousSearch,Ab(b.search));if(b.columns){d=0;for(e=b.columns.length;d<e;d++)g=b.columns[d],g.visible!==k&&(f[d].bVisible=g.visible),g.search!==k&&h.extend(a.aoPreSearchCols[d],Ab(g.search))}r(a,"aoStateLoaded","stateLoaded",[a,b])}}c()};if(a.oFeatures.bStateSave){var g=a.fnStateLoadCallback.call(a.oInstance,a,b);g!==k&&b(g)}else c()}function ya(a){var b=m.settings,a=h.inArray(a,D(b,"nTable"));return-1!==a?b[a]:null}function J(a,b,c,d){c="DataTables warning: "+(a?"table id="+a.sTableId+
	" - ":"")+c;d&&(c+=". For more information about this error, please see http://datatables.net/tn/"+d);if(b)E.console&&console.log&&console.log(c);else if(b=m.ext,b=b.sErrMode||b.errMode,a&&r(a,null,"error",[a,d,c]),"alert"==b)alert(c);else{if("throw"==b)throw Error(c);"function"==typeof b&&b(a,d,c)}}function F(a,b,c,d){h.isArray(c)?h.each(c,function(c,d){h.isArray(d)?F(a,b,d[0],d[1]):F(a,b,d)}):(d===k&&(d=c),b[c]!==k&&(a[d]=b[c]))}function Jb(a,b,c){var d,e;for(e in b)b.hasOwnProperty(e)&&(d=b[e],
	h.isPlainObject(d)?(h.isPlainObject(a[e])||(a[e]={}),h.extend(!0,a[e],d)):a[e]=c&&"data"!==e&&"aaData"!==e&&h.isArray(d)?d.slice():d);return a}function Va(a,b,c){h(a).on("click.DT",b,function(b){a.blur();c(b)}).on("keypress.DT",b,function(a){13===a.which&&(a.preventDefault(),c(a))}).on("selectstart.DT",function(){return!1})}function z(a,b,c,d){c&&a[b].push({fn:c,sName:d})}function r(a,b,c,d){var e=[];b&&(e=h.map(a[b].slice().reverse(),function(b){return b.fn.apply(a.oInstance,d)}));null!==c&&(b=h.Event(c+
	".dt"),h(a.nTable).trigger(b,d),e.push(b.result));return e}function Ra(a){var b=a._iDisplayStart,c=a.fnDisplayEnd(),d=a._iDisplayLength;b>=c&&(b=c-d);b-=b%d;if(-1===d||0>b)b=0;a._iDisplayStart=b}function Ma(a,b){var c=a.renderer,d=m.ext.renderer[b];return h.isPlainObject(c)&&c[b]?d[c[b]]||d._:"string"===typeof c?d[c]||d._:d._}function y(a){return a.oFeatures.bServerSide?"ssp":a.ajax||a.sAjaxSource?"ajax":"dom"}function ha(a,b){var c=[],c=Kb.numbers_length,d=Math.floor(c/2);b<=c?c=W(0,b):a<=d?(c=W(0,
	c-2),c.push("ellipsis"),c.push(b-1)):(a>=b-1-d?c=W(b-(c-2),b):(c=W(a-d+2,a+d-1),c.push("ellipsis"),c.push(b-1)),c.splice(0,0,"ellipsis"),c.splice(0,0,0));c.DT_el="span";return c}function cb(a){h.each({num:function(b){return za(b,a)},"num-fmt":function(b){return za(b,a,Wa)},"html-num":function(b){return za(b,a,Aa)},"html-num-fmt":function(b){return za(b,a,Aa,Wa)}},function(b,c){x.type.order[b+a+"-pre"]=c;b.match(/^html\-/)&&(x.type.search[b+a]=x.type.search.html)})}function Lb(a){return function(){var b=
	[ya(this[m.ext.iApiIndex])].concat(Array.prototype.slice.call(arguments));return m.ext.internal[a].apply(this,b)}}var m=function(a){this.$=function(a,b){return this.api(!0).$(a,b)};this._=function(a,b){return this.api(!0).rows(a,b).data()};this.api=function(a){return a?new s(ya(this[x.iApiIndex])):new s(this)};this.fnAddData=function(a,b){var c=this.api(!0),d=h.isArray(a)&&(h.isArray(a[0])||h.isPlainObject(a[0]))?c.rows.add(a):c.row.add(a);(b===k||b)&&c.draw();return d.flatten().toArray()};this.fnAdjustColumnSizing=
	function(a){var b=this.api(!0).columns.adjust(),c=b.settings()[0],d=c.oScroll;a===k||a?b.draw(!1):(""!==d.sX||""!==d.sY)&&ka(c)};this.fnClearTable=function(a){var b=this.api(!0).clear();(a===k||a)&&b.draw()};this.fnClose=function(a){this.api(!0).row(a).child.hide()};this.fnDeleteRow=function(a,b,c){var d=this.api(!0),a=d.rows(a),e=a.settings()[0],h=e.aoData[a[0][0]];a.remove();b&&b.call(this,e,h);(c===k||c)&&d.draw();return h};this.fnDestroy=function(a){this.api(!0).destroy(a)};this.fnDraw=function(a){this.api(!0).draw(a)};
	this.fnFilter=function(a,b,c,d,e,h){e=this.api(!0);null===b||b===k?e.search(a,c,d,h):e.column(b).search(a,c,d,h);e.draw()};this.fnGetData=function(a,b){var c=this.api(!0);if(a!==k){var d=a.nodeName?a.nodeName.toLowerCase():"";return b!==k||"td"==d||"th"==d?c.cell(a,b).data():c.row(a).data()||null}return c.data().toArray()};this.fnGetNodes=function(a){var b=this.api(!0);return a!==k?b.row(a).node():b.rows().nodes().flatten().toArray()};this.fnGetPosition=function(a){var b=this.api(!0),c=a.nodeName.toUpperCase();
	return"TR"==c?b.row(a).index():"TD"==c||"TH"==c?(a=b.cell(a).index(),[a.row,a.columnVisible,a.column]):null};this.fnIsOpen=function(a){return this.api(!0).row(a).child.isShown()};this.fnOpen=function(a,b,c){return this.api(!0).row(a).child(b,c).show().child()[0]};this.fnPageChange=function(a,b){var c=this.api(!0).page(a);(b===k||b)&&c.draw(!1)};this.fnSetColumnVis=function(a,b,c){a=this.api(!0).column(a).visible(b);(c===k||c)&&a.columns.adjust().draw()};this.fnSettings=function(){return ya(this[x.iApiIndex])};
	this.fnSort=function(a){this.api(!0).order(a).draw()};this.fnSortListener=function(a,b,c){this.api(!0).order.listener(a,b,c)};this.fnUpdate=function(a,b,c,d,e){var h=this.api(!0);c===k||null===c?h.row(b).data(a):h.cell(b,c).data(a);(e===k||e)&&h.columns.adjust();(d===k||d)&&h.draw();return 0};this.fnVersionCheck=x.fnVersionCheck;var b=this,c=a===k,d=this.length;c&&(a={});this.oApi=this.internal=x.internal;for(var e in m.ext.internal)e&&(this[e]=Lb(e));this.each(function(){var e={},g=1<d?Jb(e,a,!0):
	a,j=0,i,e=this.getAttribute("id"),n=!1,l=m.defaults,q=h(this);if("table"!=this.nodeName.toLowerCase())J(null,0,"Non-table node initialisation ("+this.nodeName+")",2);else{db(l);eb(l.column);I(l,l,!0);I(l.column,l.column,!0);I(l,h.extend(g,q.data()));var t=m.settings,j=0;for(i=t.length;j<i;j++){var o=t[j];if(o.nTable==this||o.nTHead.parentNode==this||o.nTFoot&&o.nTFoot.parentNode==this){var s=g.bRetrieve!==k?g.bRetrieve:l.bRetrieve;if(c||s)return o.oInstance;if(g.bDestroy!==k?g.bDestroy:l.bDestroy){o.oInstance.fnDestroy();
	break}else{J(o,0,"Cannot reinitialise DataTable",3);return}}if(o.sTableId==this.id){t.splice(j,1);break}}if(null===e||""===e)this.id=e="DataTables_Table_"+m.ext._unique++;var p=h.extend(!0,{},m.models.oSettings,{sDestroyWidth:q[0].style.width,sInstance:e,sTableId:e});p.nTable=this;p.oApi=b.internal;p.oInit=g;t.push(p);p.oInstance=1===b.length?b:q.dataTable();db(g);g.oLanguage&&Ca(g.oLanguage);g.aLengthMenu&&!g.iDisplayLength&&(g.iDisplayLength=h.isArray(g.aLengthMenu[0])?g.aLengthMenu[0][0]:g.aLengthMenu[0]);
	g=Jb(h.extend(!0,{},l),g);F(p.oFeatures,g,"bPaginate bLengthChange bFilter bSort bSortMulti bInfo bProcessing bAutoWidth bSortClasses bServerSide bDeferRender".split(" "));F(p,g,["asStripeClasses","ajax","fnServerData","fnFormatNumber","sServerMethod","aaSorting","aaSortingFixed","aLengthMenu","sPaginationType","sAjaxSource","sAjaxDataProp","iStateDuration","sDom","bSortCellsTop","iTabIndex","fnStateLoadCallback","fnStateSaveCallback","renderer","searchDelay","rowId",["iCookieDuration","iStateDuration"],
	["oSearch","oPreviousSearch"],["aoSearchCols","aoPreSearchCols"],["iDisplayLength","_iDisplayLength"]]);F(p.oScroll,g,[["sScrollX","sX"],["sScrollXInner","sXInner"],["sScrollY","sY"],["bScrollCollapse","bCollapse"]]);F(p.oLanguage,g,"fnInfoCallback");z(p,"aoDrawCallback",g.fnDrawCallback,"user");z(p,"aoServerParams",g.fnServerParams,"user");z(p,"aoStateSaveParams",g.fnStateSaveParams,"user");z(p,"aoStateLoadParams",g.fnStateLoadParams,"user");z(p,"aoStateLoaded",g.fnStateLoaded,"user");z(p,"aoRowCallback",
	g.fnRowCallback,"user");z(p,"aoRowCreatedCallback",g.fnCreatedRow,"user");z(p,"aoHeaderCallback",g.fnHeaderCallback,"user");z(p,"aoFooterCallback",g.fnFooterCallback,"user");z(p,"aoInitComplete",g.fnInitComplete,"user");z(p,"aoPreDrawCallback",g.fnPreDrawCallback,"user");p.rowIdFn=Q(g.rowId);fb(p);var u=p.oClasses;h.extend(u,m.ext.classes,g.oClasses);q.addClass(u.sTable);p.iInitDisplayStart===k&&(p.iInitDisplayStart=g.iDisplayStart,p._iDisplayStart=g.iDisplayStart);null!==g.iDeferLoading&&(p.bDeferLoading=
	!0,e=h.isArray(g.iDeferLoading),p._iRecordsDisplay=e?g.iDeferLoading[0]:g.iDeferLoading,p._iRecordsTotal=e?g.iDeferLoading[1]:g.iDeferLoading);var v=p.oLanguage;h.extend(!0,v,g.oLanguage);v.sUrl&&(h.ajax({dataType:"json",url:v.sUrl,success:function(a){Ca(a);I(l.oLanguage,a);h.extend(true,v,a);ga(p)},error:function(){ga(p)}}),n=!0);null===g.asStripeClasses&&(p.asStripeClasses=[u.sStripeOdd,u.sStripeEven]);var e=p.asStripeClasses,x=q.children("tbody").find("tr").eq(0);-1!==h.inArray(!0,h.map(e,function(a){return x.hasClass(a)}))&&
	(h("tbody tr",this).removeClass(e.join(" ")),p.asDestroyStripes=e.slice());e=[];t=this.getElementsByTagName("thead");0!==t.length&&(da(p.aoHeader,t[0]),e=ra(p));if(null===g.aoColumns){t=[];j=0;for(i=e.length;j<i;j++)t.push(null)}else t=g.aoColumns;j=0;for(i=t.length;j<i;j++)Da(p,e?e[j]:null);hb(p,g.aoColumnDefs,t,function(a,b){ja(p,a,b)});if(x.length){var w=function(a,b){return a.getAttribute("data-"+b)!==null?b:null};h(x[0]).children("th, td").each(function(a,b){var c=p.aoColumns[a];if(c.mData===
	a){var d=w(b,"sort")||w(b,"order"),e=w(b,"filter")||w(b,"search");if(d!==null||e!==null){c.mData={_:a+".display",sort:d!==null?a+".@data-"+d:k,type:d!==null?a+".@data-"+d:k,filter:e!==null?a+".@data-"+e:k};ja(p,a)}}})}var T=p.oFeatures,e=function(){if(g.aaSorting===k){var a=p.aaSorting;j=0;for(i=a.length;j<i;j++)a[j][1]=p.aoColumns[j].asSorting[0]}wa(p);T.bSort&&z(p,"aoDrawCallback",function(){if(p.bSorted){var a=V(p),b={};h.each(a,function(a,c){b[c.src]=c.dir});r(p,null,"order",[p,a,b]);Hb(p)}});
	z(p,"aoDrawCallback",function(){(p.bSorted||y(p)==="ssp"||T.bDeferRender)&&wa(p)},"sc");var a=q.children("caption").each(function(){this._captionSide=h(this).css("caption-side")}),b=q.children("thead");b.length===0&&(b=h("<thead/>").appendTo(q));p.nTHead=b[0];b=q.children("tbody");b.length===0&&(b=h("<tbody/>").appendTo(q));p.nTBody=b[0];b=q.children("tfoot");if(b.length===0&&a.length>0&&(p.oScroll.sX!==""||p.oScroll.sY!==""))b=h("<tfoot/>").appendTo(q);if(b.length===0||b.children().length===0)q.addClass(u.sNoFooter);
	else if(b.length>0){p.nTFoot=b[0];da(p.aoFooter,p.nTFoot)}if(g.aaData)for(j=0;j<g.aaData.length;j++)M(p,g.aaData[j]);else(p.bDeferLoading||y(p)=="dom")&&ma(p,h(p.nTBody).children("tr"));p.aiDisplay=p.aiDisplayMaster.slice();p.bInitialised=true;n===false&&ga(p)};g.bStateSave?(T.bStateSave=!0,z(p,"aoDrawCallback",xa,"state_save"),Ib(p,g,e)):e()}});b=null;return this},x,s,o,u,Xa={},Mb=/[\r\n]/g,Aa=/<.*?>/g,Zb=/^\d{2,4}[\.\/\-]\d{1,2}[\.\/\-]\d{1,2}([T ]{1}\d{1,2}[:\.]\d{2}([\.:]\d{2})?)?$/,$b=RegExp("(\\/|\\.|\\*|\\+|\\?|\\||\\(|\\)|\\[|\\]|\\{|\\}|\\\\|\\$|\\^|\\-)",
	"g"),Wa=/[',$£€¥%\u2009\u202F\u20BD\u20a9\u20BArfk]/gi,L=function(a){return!a||!0===a||"-"===a?!0:!1},Nb=function(a){var b=parseInt(a,10);return!isNaN(b)&&isFinite(a)?b:null},Ob=function(a,b){Xa[b]||(Xa[b]=RegExp(Pa(b),"g"));return"string"===typeof a&&"."!==b?a.replace(/\./g,"").replace(Xa[b],"."):a},Ya=function(a,b,c){var d="string"===typeof a;if(L(a))return!0;b&&d&&(a=Ob(a,b));c&&d&&(a=a.replace(Wa,""));return!isNaN(parseFloat(a))&&isFinite(a)},Pb=function(a,b,c){return L(a)?!0:!(L(a)||"string"===
	typeof a)?null:Ya(a.replace(Aa,""),b,c)?!0:null},D=function(a,b,c){var d=[],e=0,f=a.length;if(c!==k)for(;e<f;e++)a[e]&&a[e][b]&&d.push(a[e][b][c]);else for(;e<f;e++)a[e]&&d.push(a[e][b]);return d},ia=function(a,b,c,d){var e=[],f=0,g=b.length;if(d!==k)for(;f<g;f++)a[b[f]][c]&&e.push(a[b[f]][c][d]);else for(;f<g;f++)e.push(a[b[f]][c]);return e},W=function(a,b){var c=[],d;b===k?(b=0,d=a):(d=b,b=a);for(var e=b;e<d;e++)c.push(e);return c},Qb=function(a){for(var b=[],c=0,d=a.length;c<d;c++)a[c]&&b.push(a[c]);
	return b},qa=function(a){var b;a:{if(!(2>a.length)){b=a.slice().sort();for(var c=b[0],d=1,e=b.length;d<e;d++){if(b[d]===c){b=!1;break a}c=b[d]}}b=!0}if(b)return a.slice();b=[];var e=a.length,f,g=0,d=0;a:for(;d<e;d++){c=a[d];for(f=0;f<g;f++)if(b[f]===c)continue a;b.push(c);g++}return b};m.util={throttle:function(a,b){var c=b!==k?b:200,d,e;return function(){var b=this,g=+new Date,j=arguments;d&&g<d+c?(clearTimeout(e),e=setTimeout(function(){d=k;a.apply(b,j)},c)):(d=g,a.apply(b,j))}},escapeRegex:function(a){return a.replace($b,
	"\\$1")}};var A=function(a,b,c){a[b]!==k&&(a[c]=a[b])},ba=/\[.*?\]$/,U=/\(\)$/,Pa=m.util.escapeRegex,va=h("<div>")[0],Wb=va.textContent!==k,Yb=/<.*?>/g,Na=m.util.throttle,Rb=[],w=Array.prototype,ac=function(a){var b,c,d=m.settings,e=h.map(d,function(a){return a.nTable});if(a){if(a.nTable&&a.oApi)return[a];if(a.nodeName&&"table"===a.nodeName.toLowerCase())return b=h.inArray(a,e),-1!==b?[d[b]]:null;if(a&&"function"===typeof a.settings)return a.settings().toArray();"string"===typeof a?c=h(a):a instanceof
	h&&(c=a)}else return[];if(c)return c.map(function(){b=h.inArray(this,e);return-1!==b?d[b]:null}).toArray()};s=function(a,b){if(!(this instanceof s))return new s(a,b);var c=[],d=function(a){(a=ac(a))&&(c=c.concat(a))};if(h.isArray(a))for(var e=0,f=a.length;e<f;e++)d(a[e]);else d(a);this.context=qa(c);b&&h.merge(this,b);this.selector={rows:null,cols:null,opts:null};s.extend(this,this,Rb)};m.Api=s;h.extend(s.prototype,{any:function(){return 0!==this.count()},concat:w.concat,context:[],count:function(){return this.flatten().length},
	each:function(a){for(var b=0,c=this.length;b<c;b++)a.call(this,this[b],b,this);return this},eq:function(a){var b=this.context;return b.length>a?new s(b[a],this[a]):null},filter:function(a){var b=[];if(w.filter)b=w.filter.call(this,a,this);else for(var c=0,d=this.length;c<d;c++)a.call(this,this[c],c,this)&&b.push(this[c]);return new s(this.context,b)},flatten:function(){var a=[];return new s(this.context,a.concat.apply(a,this.toArray()))},join:w.join,indexOf:w.indexOf||function(a,b){for(var c=b||0,
	d=this.length;c<d;c++)if(this[c]===a)return c;return-1},iterator:function(a,b,c,d){var e=[],f,g,j,h,n,l=this.context,m,o,u=this.selector;"string"===typeof a&&(d=c,c=b,b=a,a=!1);g=0;for(j=l.length;g<j;g++){var r=new s(l[g]);if("table"===b)f=c.call(r,l[g],g),f!==k&&e.push(f);else if("columns"===b||"rows"===b)f=c.call(r,l[g],this[g],g),f!==k&&e.push(f);else if("column"===b||"column-rows"===b||"row"===b||"cell"===b){o=this[g];"column-rows"===b&&(m=Ba(l[g],u.opts));h=0;for(n=o.length;h<n;h++)f=o[h],f=
	"cell"===b?c.call(r,l[g],f.row,f.column,g,h):c.call(r,l[g],f,g,h,m),f!==k&&e.push(f)}}return e.length||d?(a=new s(l,a?e.concat.apply([],e):e),b=a.selector,b.rows=u.rows,b.cols=u.cols,b.opts=u.opts,a):this},lastIndexOf:w.lastIndexOf||function(a,b){return this.indexOf.apply(this.toArray.reverse(),arguments)},length:0,map:function(a){var b=[];if(w.map)b=w.map.call(this,a,this);else for(var c=0,d=this.length;c<d;c++)b.push(a.call(this,this[c],c));return new s(this.context,b)},pluck:function(a){return this.map(function(b){return b[a]})},
	pop:w.pop,push:w.push,reduce:w.reduce||function(a,b){return gb(this,a,b,0,this.length,1)},reduceRight:w.reduceRight||function(a,b){return gb(this,a,b,this.length-1,-1,-1)},reverse:w.reverse,selector:null,shift:w.shift,slice:function(){return new s(this.context,this)},sort:w.sort,splice:w.splice,toArray:function(){return w.slice.call(this)},to$:function(){return h(this)},toJQuery:function(){return h(this)},unique:function(){return new s(this.context,qa(this))},unshift:w.unshift});s.extend=function(a,
	b,c){if(c.length&&b&&(b instanceof s||b.__dt_wrapper)){var d,e,f,g=function(a,b,c){return function(){var d=b.apply(a,arguments);s.extend(d,d,c.methodExt);return d}};d=0;for(e=c.length;d<e;d++)f=c[d],b[f.name]="function"===typeof f.val?g(a,f.val,f):h.isPlainObject(f.val)?{}:f.val,b[f.name].__dt_wrapper=!0,s.extend(a,b[f.name],f.propExt)}};s.register=o=function(a,b){if(h.isArray(a))for(var c=0,d=a.length;c<d;c++)s.register(a[c],b);else for(var e=a.split("."),f=Rb,g,j,c=0,d=e.length;c<d;c++){g=(j=-1!==
	e[c].indexOf("()"))?e[c].replace("()",""):e[c];var i;a:{i=0;for(var n=f.length;i<n;i++)if(f[i].name===g){i=f[i];break a}i=null}i||(i={name:g,val:{},methodExt:[],propExt:[]},f.push(i));c===d-1?i.val=b:f=j?i.methodExt:i.propExt}};s.registerPlural=u=function(a,b,c){s.register(a,c);s.register(b,function(){var a=c.apply(this,arguments);return a===this?this:a instanceof s?a.length?h.isArray(a[0])?new s(a.context,a[0]):a[0]:k:a})};o("tables()",function(a){var b;if(a){b=s;var c=this.context;if("number"===
	typeof a)a=[c[a]];else var d=h.map(c,function(a){return a.nTable}),a=h(d).filter(a).map(function(){var a=h.inArray(this,d);return c[a]}).toArray();b=new b(a)}else b=this;return b});o("table()",function(a){var a=this.tables(a),b=a.context;return b.length?new s(b[0]):a});u("tables().nodes()","table().node()",function(){return this.iterator("table",function(a){return a.nTable},1)});u("tables().body()","table().body()",function(){return this.iterator("table",function(a){return a.nTBody},1)});u("tables().header()",
	"table().header()",function(){return this.iterator("table",function(a){return a.nTHead},1)});u("tables().footer()","table().footer()",function(){return this.iterator("table",function(a){return a.nTFoot},1)});u("tables().containers()","table().container()",function(){return this.iterator("table",function(a){return a.nTableWrapper},1)});o("draw()",function(a){return this.iterator("table",function(b){"page"===a?N(b):("string"===typeof a&&(a="full-hold"===a?!1:!0),S(b,!1===a))})});o("page()",function(a){return a===
	k?this.page.info().page:this.iterator("table",function(b){Sa(b,a)})});o("page.info()",function(){if(0===this.context.length)return k;var a=this.context[0],b=a._iDisplayStart,c=a.oFeatures.bPaginate?a._iDisplayLength:-1,d=a.fnRecordsDisplay(),e=-1===c;return{page:e?0:Math.floor(b/c),pages:e?1:Math.ceil(d/c),start:b,end:a.fnDisplayEnd(),length:c,recordsTotal:a.fnRecordsTotal(),recordsDisplay:d,serverSide:"ssp"===y(a)}});o("page.len()",function(a){return a===k?0!==this.context.length?this.context[0]._iDisplayLength:
	k:this.iterator("table",function(b){Qa(b,a)})});var Sb=function(a,b,c){if(c){var d=new s(a);d.one("draw",function(){c(d.ajax.json())})}if("ssp"==y(a))S(a,b);else{C(a,!0);var e=a.jqXHR;e&&4!==e.readyState&&e.abort();sa(a,[],function(c){na(a);for(var c=ta(a,c),d=0,e=c.length;d<e;d++)M(a,c[d]);S(a,b);C(a,!1)})}};o("ajax.json()",function(){var a=this.context;if(0<a.length)return a[0].json});o("ajax.params()",function(){var a=this.context;if(0<a.length)return a[0].oAjaxData});o("ajax.reload()",function(a,
	b){return this.iterator("table",function(c){Sb(c,!1===b,a)})});o("ajax.url()",function(a){var b=this.context;if(a===k){if(0===b.length)return k;b=b[0];return b.ajax?h.isPlainObject(b.ajax)?b.ajax.url:b.ajax:b.sAjaxSource}return this.iterator("table",function(b){h.isPlainObject(b.ajax)?b.ajax.url=a:b.ajax=a})});o("ajax.url().load()",function(a,b){return this.iterator("table",function(c){Sb(c,!1===b,a)})});var Za=function(a,b,c,d,e){var f=[],g,j,i,n,l,m;i=typeof b;if(!b||"string"===i||"function"===
	i||b.length===k)b=[b];i=0;for(n=b.length;i<n;i++){j=b[i]&&b[i].split&&!b[i].match(/[\[\(:]/)?b[i].split(","):[b[i]];l=0;for(m=j.length;l<m;l++)(g=c("string"===typeof j[l]?h.trim(j[l]):j[l]))&&g.length&&(f=f.concat(g))}a=x.selector[a];if(a.length){i=0;for(n=a.length;i<n;i++)f=a[i](d,e,f)}return qa(f)},$a=function(a){a||(a={});a.filter&&a.search===k&&(a.search=a.filter);return h.extend({search:"none",order:"current",page:"all"},a)},ab=function(a){for(var b=0,c=a.length;b<c;b++)if(0<a[b].length)return a[0]=
	a[b],a[0].length=1,a.length=1,a.context=[a.context[b]],a;a.length=0;return a},Ba=function(a,b){var c,d,e,f=[],g=a.aiDisplay;c=a.aiDisplayMaster;var j=b.search;d=b.order;e=b.page;if("ssp"==y(a))return"removed"===j?[]:W(0,c.length);if("current"==e){c=a._iDisplayStart;for(d=a.fnDisplayEnd();c<d;c++)f.push(g[c])}else if("current"==d||"applied"==d)f="none"==j?c.slice():"applied"==j?g.slice():h.map(c,function(a){return-1===h.inArray(a,g)?a:null});else if("index"==d||"original"==d){c=0;for(d=a.aoData.length;c<
	d;c++)"none"==j?f.push(c):(e=h.inArray(c,g),(-1===e&&"removed"==j||0<=e&&"applied"==j)&&f.push(c))}return f};o("rows()",function(a,b){a===k?a="":h.isPlainObject(a)&&(b=a,a="");var b=$a(b),c=this.iterator("table",function(c){var e=b,f;return Za("row",a,function(a){var b=Nb(a);if(b!==null&&!e)return[b];f||(f=Ba(c,e));if(b!==null&&h.inArray(b,f)!==-1)return[b];if(a===null||a===k||a==="")return f;if(typeof a==="function")return h.map(f,function(b){var e=c.aoData[b];return a(b,e._aData,e.nTr)?b:null});
	b=Qb(ia(c.aoData,f,"nTr"));if(a.nodeName){if(a._DT_RowIndex!==k)return[a._DT_RowIndex];if(a._DT_CellIndex)return[a._DT_CellIndex.row];b=h(a).closest("*[data-dt-row]");return b.length?[b.data("dt-row")]:[]}if(typeof a==="string"&&a.charAt(0)==="#"){var i=c.aIds[a.replace(/^#/,"")];if(i!==k)return[i.idx]}return h(b).filter(a).map(function(){return this._DT_RowIndex}).toArray()},c,e)},1);c.selector.rows=a;c.selector.opts=b;return c});o("rows().nodes()",function(){return this.iterator("row",function(a,
	b){return a.aoData[b].nTr||k},1)});o("rows().data()",function(){return this.iterator(!0,"rows",function(a,b){return ia(a.aoData,b,"_aData")},1)});u("rows().cache()","row().cache()",function(a){return this.iterator("row",function(b,c){var d=b.aoData[c];return"search"===a?d._aFilterData:d._aSortData},1)});u("rows().invalidate()","row().invalidate()",function(a){return this.iterator("row",function(b,c){ca(b,c,a)})});u("rows().indexes()","row().index()",function(){return this.iterator("row",function(a,
	b){return b},1)});u("rows().ids()","row().id()",function(a){for(var b=[],c=this.context,d=0,e=c.length;d<e;d++)for(var f=0,g=this[d].length;f<g;f++){var h=c[d].rowIdFn(c[d].aoData[this[d][f]]._aData);b.push((!0===a?"#":"")+h)}return new s(c,b)});u("rows().remove()","row().remove()",function(){var a=this;this.iterator("row",function(b,c,d){var e=b.aoData,f=e[c],g,h,i,n,l;e.splice(c,1);g=0;for(h=e.length;g<h;g++)if(i=e[g],l=i.anCells,null!==i.nTr&&(i.nTr._DT_RowIndex=g),null!==l){i=0;for(n=l.length;i<
	n;i++)l[i]._DT_CellIndex.row=g}oa(b.aiDisplayMaster,c);oa(b.aiDisplay,c);oa(a[d],c,!1);0<b._iRecordsDisplay&&b._iRecordsDisplay--;Ra(b);c=b.rowIdFn(f._aData);c!==k&&delete b.aIds[c]});this.iterator("table",function(a){for(var c=0,d=a.aoData.length;c<d;c++)a.aoData[c].idx=c});return this});o("rows.add()",function(a){var b=this.iterator("table",function(b){var c,f,g,h=[];f=0;for(g=a.length;f<g;f++)c=a[f],c.nodeName&&"TR"===c.nodeName.toUpperCase()?h.push(ma(b,c)[0]):h.push(M(b,c));return h},1),c=this.rows(-1);
	c.pop();h.merge(c,b);return c});o("row()",function(a,b){return ab(this.rows(a,b))});o("row().data()",function(a){var b=this.context;if(a===k)return b.length&&this.length?b[0].aoData[this[0]]._aData:k;b[0].aoData[this[0]]._aData=a;ca(b[0],this[0],"data");return this});o("row().node()",function(){var a=this.context;return a.length&&this.length?a[0].aoData[this[0]].nTr||null:null});o("row.add()",function(a){a instanceof h&&a.length&&(a=a[0]);var b=this.iterator("table",function(b){return a.nodeName&&
	"TR"===a.nodeName.toUpperCase()?ma(b,a)[0]:M(b,a)});return this.row(b[0])});var bb=function(a,b){var c=a.context;if(c.length&&(c=c[0].aoData[b!==k?b:a[0]])&&c._details)c._details.remove(),c._detailsShow=k,c._details=k},Tb=function(a,b){var c=a.context;if(c.length&&a.length){var d=c[0].aoData[a[0]];if(d._details){(d._detailsShow=b)?d._details.insertAfter(d.nTr):d._details.detach();var e=c[0],f=new s(e),g=e.aoData;f.off("draw.dt.DT_details column-visibility.dt.DT_details destroy.dt.DT_details");0<D(g,
	"_details").length&&(f.on("draw.dt.DT_details",function(a,b){e===b&&f.rows({page:"current"}).eq(0).each(function(a){a=g[a];a._detailsShow&&a._details.insertAfter(a.nTr)})}),f.on("column-visibility.dt.DT_details",function(a,b){if(e===b)for(var c,d=aa(b),f=0,h=g.length;f<h;f++)c=g[f],c._details&&c._details.children("td[colspan]").attr("colspan",d)}),f.on("destroy.dt.DT_details",function(a,b){if(e===b)for(var c=0,d=g.length;c<d;c++)g[c]._details&&bb(f,c)}))}}};o("row().child()",function(a,b){var c=this.context;
	if(a===k)return c.length&&this.length?c[0].aoData[this[0]]._details:k;if(!0===a)this.child.show();else if(!1===a)bb(this);else if(c.length&&this.length){var d=c[0],c=c[0].aoData[this[0]],e=[],f=function(a,b){if(h.isArray(a)||a instanceof h)for(var c=0,k=a.length;c<k;c++)f(a[c],b);else a.nodeName&&"tr"===a.nodeName.toLowerCase()?e.push(a):(c=h("<tr><td/></tr>").addClass(b),h("td",c).addClass(b).html(a)[0].colSpan=aa(d),e.push(c[0]))};f(a,b);c._details&&c._details.detach();c._details=h(e);c._detailsShow&&
	c._details.insertAfter(c.nTr)}return this});o(["row().child.show()","row().child().show()"],function(){Tb(this,!0);return this});o(["row().child.hide()","row().child().hide()"],function(){Tb(this,!1);return this});o(["row().child.remove()","row().child().remove()"],function(){bb(this);return this});o("row().child.isShown()",function(){var a=this.context;return a.length&&this.length?a[0].aoData[this[0]]._detailsShow||!1:!1});var bc=/^([^:]+):(name|visIdx|visible)$/,Ub=function(a,b,c,d,e){for(var c=
	[],d=0,f=e.length;d<f;d++)c.push(B(a,e[d],b));return c};o("columns()",function(a,b){a===k?a="":h.isPlainObject(a)&&(b=a,a="");var b=$a(b),c=this.iterator("table",function(c){var e=a,f=b,g=c.aoColumns,j=D(g,"sName"),i=D(g,"nTh");return Za("column",e,function(a){var b=Nb(a);if(a==="")return W(g.length);if(b!==null)return[b>=0?b:g.length+b];if(typeof a==="function"){var e=Ba(c,f);return h.map(g,function(b,f){return a(f,Ub(c,f,0,0,e),i[f])?f:null})}var k=typeof a==="string"?a.match(bc):"";if(k)switch(k[2]){case "visIdx":case "visible":b=
	parseInt(k[1],10);if(b<0){var m=h.map(g,function(a,b){return a.bVisible?b:null});return[m[m.length+b]]}return[Z(c,b)];case "name":return h.map(j,function(a,b){return a===k[1]?b:null});default:return[]}if(a.nodeName&&a._DT_CellIndex)return[a._DT_CellIndex.column];b=h(i).filter(a).map(function(){return h.inArray(this,i)}).toArray();if(b.length||!a.nodeName)return b;b=h(a).closest("*[data-dt-column]");return b.length?[b.data("dt-column")]:[]},c,f)},1);c.selector.cols=a;c.selector.opts=b;return c});u("columns().header()",
	"column().header()",function(){return this.iterator("column",function(a,b){return a.aoColumns[b].nTh},1)});u("columns().footer()","column().footer()",function(){return this.iterator("column",function(a,b){return a.aoColumns[b].nTf},1)});u("columns().data()","column().data()",function(){return this.iterator("column-rows",Ub,1)});u("columns().dataSrc()","column().dataSrc()",function(){return this.iterator("column",function(a,b){return a.aoColumns[b].mData},1)});u("columns().cache()","column().cache()",
	function(a){return this.iterator("column-rows",function(b,c,d,e,f){return ia(b.aoData,f,"search"===a?"_aFilterData":"_aSortData",c)},1)});u("columns().nodes()","column().nodes()",function(){return this.iterator("column-rows",function(a,b,c,d,e){return ia(a.aoData,e,"anCells",b)},1)});u("columns().visible()","column().visible()",function(a,b){var c=this.iterator("column",function(b,c){if(a===k)return b.aoColumns[c].bVisible;var f=b.aoColumns,g=f[c],j=b.aoData,i,n,l;if(a!==k&&g.bVisible!==a){if(a){var m=
	h.inArray(!0,D(f,"bVisible"),c+1);i=0;for(n=j.length;i<n;i++)l=j[i].nTr,f=j[i].anCells,l&&l.insertBefore(f[c],f[m]||null)}else h(D(b.aoData,"anCells",c)).detach();g.bVisible=a;ea(b,b.aoHeader);ea(b,b.aoFooter);xa(b)}});a!==k&&(this.iterator("column",function(c,e){r(c,null,"column-visibility",[c,e,a,b])}),(b===k||b)&&this.columns.adjust());return c});u("columns().indexes()","column().index()",function(a){return this.iterator("column",function(b,c){return"visible"===a?$(b,c):c},1)});o("columns.adjust()",
	function(){return this.iterator("table",function(a){Y(a)},1)});o("column.index()",function(a,b){if(0!==this.context.length){var c=this.context[0];if("fromVisible"===a||"toData"===a)return Z(c,b);if("fromData"===a||"toVisible"===a)return $(c,b)}});o("column()",function(a,b){return ab(this.columns(a,b))});o("cells()",function(a,b,c){h.isPlainObject(a)&&(a.row===k?(c=a,a=null):(c=b,b=null));h.isPlainObject(b)&&(c=b,b=null);if(null===b||b===k)return this.iterator("table",function(b){var d=a,e=$a(c),f=
	b.aoData,g=Ba(b,e),j=Qb(ia(f,g,"anCells")),i=h([].concat.apply([],j)),l,n=b.aoColumns.length,m,o,u,s,r,v;return Za("cell",d,function(a){var c=typeof a==="function";if(a===null||a===k||c){m=[];o=0;for(u=g.length;o<u;o++){l=g[o];for(s=0;s<n;s++){r={row:l,column:s};if(c){v=f[l];a(r,B(b,l,s),v.anCells?v.anCells[s]:null)&&m.push(r)}else m.push(r)}}return m}if(h.isPlainObject(a))return[a];c=i.filter(a).map(function(a,b){return{row:b._DT_CellIndex.row,column:b._DT_CellIndex.column}}).toArray();if(c.length||
	!a.nodeName)return c;v=h(a).closest("*[data-dt-row]");return v.length?[{row:v.data("dt-row"),column:v.data("dt-column")}]:[]},b,e)});var d=this.columns(b,c),e=this.rows(a,c),f,g,j,i,n,l=this.iterator("table",function(a,b){f=[];g=0;for(j=e[b].length;g<j;g++){i=0;for(n=d[b].length;i<n;i++)f.push({row:e[b][g],column:d[b][i]})}return f},1);h.extend(l.selector,{cols:b,rows:a,opts:c});return l});u("cells().nodes()","cell().node()",function(){return this.iterator("cell",function(a,b,c){return(a=a.aoData[b])&&
	a.anCells?a.anCells[c]:k},1)});o("cells().data()",function(){return this.iterator("cell",function(a,b,c){return B(a,b,c)},1)});u("cells().cache()","cell().cache()",function(a){a="search"===a?"_aFilterData":"_aSortData";return this.iterator("cell",function(b,c,d){return b.aoData[c][a][d]},1)});u("cells().render()","cell().render()",function(a){return this.iterator("cell",function(b,c,d){return B(b,c,d,a)},1)});u("cells().indexes()","cell().index()",function(){return this.iterator("cell",function(a,
	b,c){return{row:b,column:c,columnVisible:$(a,c)}},1)});u("cells().invalidate()","cell().invalidate()",function(a){return this.iterator("cell",function(b,c,d){ca(b,c,a,d)})});o("cell()",function(a,b,c){return ab(this.cells(a,b,c))});o("cell().data()",function(a){var b=this.context,c=this[0];if(a===k)return b.length&&c.length?B(b[0],c[0].row,c[0].column):k;ib(b[0],c[0].row,c[0].column,a);ca(b[0],c[0].row,"data",c[0].column);return this});o("order()",function(a,b){var c=this.context;if(a===k)return 0!==
	c.length?c[0].aaSorting:k;"number"===typeof a?a=[[a,b]]:a.length&&!h.isArray(a[0])&&(a=Array.prototype.slice.call(arguments));return this.iterator("table",function(b){b.aaSorting=a.slice()})});o("order.listener()",function(a,b,c){return this.iterator("table",function(d){La(d,a,b,c)})});o("order.fixed()",function(a){if(!a){var b=this.context,b=b.length?b[0].aaSortingFixed:k;return h.isArray(b)?{pre:b}:b}return this.iterator("table",function(b){b.aaSortingFixed=h.extend(!0,{},a)})});o(["columns().order()",
	"column().order()"],function(a){var b=this;return this.iterator("table",function(c,d){var e=[];h.each(b[d],function(b,c){e.push([c,a])});c.aaSorting=e})});o("search()",function(a,b,c,d){var e=this.context;return a===k?0!==e.length?e[0].oPreviousSearch.sSearch:k:this.iterator("table",function(e){e.oFeatures.bFilter&&fa(e,h.extend({},e.oPreviousSearch,{sSearch:a+"",bRegex:null===b?!1:b,bSmart:null===c?!0:c,bCaseInsensitive:null===d?!0:d}),1)})});u("columns().search()","column().search()",function(a,
	b,c,d){return this.iterator("column",function(e,f){var g=e.aoPreSearchCols;if(a===k)return g[f].sSearch;e.oFeatures.bFilter&&(h.extend(g[f],{sSearch:a+"",bRegex:null===b?!1:b,bSmart:null===c?!0:c,bCaseInsensitive:null===d?!0:d}),fa(e,e.oPreviousSearch,1))})});o("state()",function(){return this.context.length?this.context[0].oSavedState:null});o("state.clear()",function(){return this.iterator("table",function(a){a.fnStateSaveCallback.call(a.oInstance,a,{})})});o("state.loaded()",function(){return this.context.length?
	this.context[0].oLoadedState:null});o("state.save()",function(){return this.iterator("table",function(a){xa(a)})});m.versionCheck=m.fnVersionCheck=function(a){for(var b=m.version.split("."),a=a.split("."),c,d,e=0,f=a.length;e<f;e++)if(c=parseInt(b[e],10)||0,d=parseInt(a[e],10)||0,c!==d)return c>d;return!0};m.isDataTable=m.fnIsDataTable=function(a){var b=h(a).get(0),c=!1;if(a instanceof m.Api)return!0;h.each(m.settings,function(a,e){var f=e.nScrollHead?h("table",e.nScrollHead)[0]:null,g=e.nScrollFoot?
	h("table",e.nScrollFoot)[0]:null;if(e.nTable===b||f===b||g===b)c=!0});return c};m.tables=m.fnTables=function(a){var b=!1;h.isPlainObject(a)&&(b=a.api,a=a.visible);var c=h.map(m.settings,function(b){if(!a||a&&h(b.nTable).is(":visible"))return b.nTable});return b?new s(c):c};m.camelToHungarian=I;o("$()",function(a,b){var c=this.rows(b).nodes(),c=h(c);return h([].concat(c.filter(a).toArray(),c.find(a).toArray()))});h.each(["on","one","off"],function(a,b){o(b+"()",function(){var a=Array.prototype.slice.call(arguments);
	a[0]=h.map(a[0].split(/\s/),function(a){return!a.match(/\.dt\b/)?a+".dt":a}).join(" ");var d=h(this.tables().nodes());d[b].apply(d,a);return this})});o("clear()",function(){return this.iterator("table",function(a){na(a)})});o("settings()",function(){return new s(this.context,this.context)});o("init()",function(){var a=this.context;return a.length?a[0].oInit:null});o("data()",function(){return this.iterator("table",function(a){return D(a.aoData,"_aData")}).flatten()});o("destroy()",function(a){a=a||
	!1;return this.iterator("table",function(b){var c=b.nTableWrapper.parentNode,d=b.oClasses,e=b.nTable,f=b.nTBody,g=b.nTHead,j=b.nTFoot,i=h(e),f=h(f),k=h(b.nTableWrapper),l=h.map(b.aoData,function(a){return a.nTr}),o;b.bDestroying=!0;r(b,"aoDestroyCallback","destroy",[b]);a||(new s(b)).columns().visible(!0);k.off(".DT").find(":not(tbody *)").off(".DT");h(E).off(".DT-"+b.sInstance);e!=g.parentNode&&(i.children("thead").detach(),i.append(g));j&&e!=j.parentNode&&(i.children("tfoot").detach(),i.append(j));
	b.aaSorting=[];b.aaSortingFixed=[];wa(b);h(l).removeClass(b.asStripeClasses.join(" "));h("th, td",g).removeClass(d.sSortable+" "+d.sSortableAsc+" "+d.sSortableDesc+" "+d.sSortableNone);f.children().detach();f.append(l);g=a?"remove":"detach";i[g]();k[g]();!a&&c&&(c.insertBefore(e,b.nTableReinsertBefore),i.css("width",b.sDestroyWidth).removeClass(d.sTable),(o=b.asDestroyStripes.length)&&f.children().each(function(a){h(this).addClass(b.asDestroyStripes[a%o])}));c=h.inArray(b,m.settings);-1!==c&&m.settings.splice(c,
	1)})});h.each(["column","row","cell"],function(a,b){o(b+"s().every()",function(a){var d=this.selector.opts,e=this;return this.iterator(b,function(f,g,h,i,n){a.call(e[b](g,"cell"===b?h:d,"cell"===b?d:k),g,h,i,n)})})});o("i18n()",function(a,b,c){var d=this.context[0],a=Q(a)(d.oLanguage);a===k&&(a=b);c!==k&&h.isPlainObject(a)&&(a=a[c]!==k?a[c]:a._);return a.replace("%d",c)});m.version="1.10.16";m.settings=[];m.models={};m.models.oSearch={bCaseInsensitive:!0,sSearch:"",bRegex:!1,bSmart:!0};m.models.oRow=
	{nTr:null,anCells:null,_aData:[],_aSortData:null,_aFilterData:null,_sFilterRow:null,_sRowStripe:"",src:null,idx:-1};m.models.oColumn={idx:null,aDataSort:null,asSorting:null,bSearchable:null,bSortable:null,bVisible:null,_sManualType:null,_bAttrSrc:!1,fnCreatedCell:null,fnGetData:null,fnSetData:null,mData:null,mRender:null,nTh:null,nTf:null,sClass:null,sContentPadding:null,sDefaultContent:null,sName:null,sSortDataType:"std",sSortingClass:null,sSortingClassJUI:null,sTitle:null,sType:null,sWidth:null,
	sWidthOrig:null};m.defaults={aaData:null,aaSorting:[[0,"asc"]],aaSortingFixed:[],ajax:null,aLengthMenu:[10,25,50,100],aoColumns:null,aoColumnDefs:null,aoSearchCols:[],asStripeClasses:null,bAutoWidth:!0,bDeferRender:!1,bDestroy:!1,bFilter:!0,bInfo:!0,bLengthChange:!0,bPaginate:!0,bProcessing:!1,bRetrieve:!1,bScrollCollapse:!1,bServerSide:!1,bSort:!0,bSortMulti:!0,bSortCellsTop:!1,bSortClasses:!0,bStateSave:!1,fnCreatedRow:null,fnDrawCallback:null,fnFooterCallback:null,fnFormatNumber:function(a){return a.toString().replace(/\B(?=(\d{3})+(?!\d))/g,
	this.oLanguage.sThousands)},fnHeaderCallback:null,fnInfoCallback:null,fnInitComplete:null,fnPreDrawCallback:null,fnRowCallback:null,fnServerData:null,fnServerParams:null,fnStateLoadCallback:function(a){try{return JSON.parse((-1===a.iStateDuration?sessionStorage:localStorage).getItem("DataTables_"+a.sInstance+"_"+location.pathname))}catch(b){}},fnStateLoadParams:null,fnStateLoaded:null,fnStateSaveCallback:function(a,b){try{(-1===a.iStateDuration?sessionStorage:localStorage).setItem("DataTables_"+a.sInstance+
	"_"+location.pathname,JSON.stringify(b))}catch(c){}},fnStateSaveParams:null,iStateDuration:7200,iDeferLoading:null,iDisplayLength:10,iDisplayStart:0,iTabIndex:0,oClasses:{},oLanguage:{oAria:{sSortAscending:": activate to sort column ascending",sSortDescending:": activate to sort column descending"},oPaginate:{sFirst:"First",sLast:"Last",sNext:"Next",sPrevious:"Previous"},sEmptyTable:"No data available in table",sInfo:"Showing _START_ to _END_ of _TOTAL_ entries",sInfoEmpty:"Showing 0 to 0 of 0 entries",
	sInfoFiltered:"(filtered from _MAX_ total entries)",sInfoPostFix:"",sDecimal:"",sThousands:",",sLengthMenu:"Show _MENU_ entries",sLoadingRecords:"Loading...",sProcessing:"Processing...",sSearch:"Search:",sSearchPlaceholder:"",sUrl:"",sZeroRecords:"No matching records found"},oSearch:h.extend({},m.models.oSearch),sAjaxDataProp:"data",sAjaxSource:null,sDom:"lfrtip",searchDelay:null,sPaginationType:"simple_numbers",sScrollX:"",sScrollXInner:"",sScrollY:"",sServerMethod:"GET",renderer:null,rowId:"DT_RowId"};
	X(m.defaults);m.defaults.column={aDataSort:null,iDataSort:-1,asSorting:["asc","desc"],bSearchable:!0,bSortable:!0,bVisible:!0,fnCreatedCell:null,mData:null,mRender:null,sCellType:"td",sClass:"",sContentPadding:"",sDefaultContent:null,sName:"",sSortDataType:"std",sTitle:null,sType:null,sWidth:null};X(m.defaults.column);m.models.oSettings={oFeatures:{bAutoWidth:null,bDeferRender:null,bFilter:null,bInfo:null,bLengthChange:null,bPaginate:null,bProcessing:null,bServerSide:null,bSort:null,bSortMulti:null,
	bSortClasses:null,bStateSave:null},oScroll:{bCollapse:null,iBarWidth:0,sX:null,sXInner:null,sY:null},oLanguage:{fnInfoCallback:null},oBrowser:{bScrollOversize:!1,bScrollbarLeft:!1,bBounding:!1,barWidth:0},ajax:null,aanFeatures:[],aoData:[],aiDisplay:[],aiDisplayMaster:[],aIds:{},aoColumns:[],aoHeader:[],aoFooter:[],oPreviousSearch:{},aoPreSearchCols:[],aaSorting:null,aaSortingFixed:[],asStripeClasses:null,asDestroyStripes:[],sDestroyWidth:0,aoRowCallback:[],aoHeaderCallback:[],aoFooterCallback:[],
	aoDrawCallback:[],aoRowCreatedCallback:[],aoPreDrawCallback:[],aoInitComplete:[],aoStateSaveParams:[],aoStateLoadParams:[],aoStateLoaded:[],sTableId:"",nTable:null,nTHead:null,nTFoot:null,nTBody:null,nTableWrapper:null,bDeferLoading:!1,bInitialised:!1,aoOpenRows:[],sDom:null,searchDelay:null,sPaginationType:"two_button",iStateDuration:0,aoStateSave:[],aoStateLoad:[],oSavedState:null,oLoadedState:null,sAjaxSource:null,sAjaxDataProp:null,bAjaxDataGet:!0,jqXHR:null,json:k,oAjaxData:k,fnServerData:null,
	aoServerParams:[],sServerMethod:null,fnFormatNumber:null,aLengthMenu:null,iDraw:0,bDrawing:!1,iDrawError:-1,_iDisplayLength:10,_iDisplayStart:0,_iRecordsTotal:0,_iRecordsDisplay:0,oClasses:{},bFiltered:!1,bSorted:!1,bSortCellsTop:null,oInit:null,aoDestroyCallback:[],fnRecordsTotal:function(){return"ssp"==y(this)?1*this._iRecordsTotal:this.aiDisplayMaster.length},fnRecordsDisplay:function(){return"ssp"==y(this)?1*this._iRecordsDisplay:this.aiDisplay.length},fnDisplayEnd:function(){var a=this._iDisplayLength,
	b=this._iDisplayStart,c=b+a,d=this.aiDisplay.length,e=this.oFeatures,f=e.bPaginate;return e.bServerSide?!1===f||-1===a?b+d:Math.min(b+a,this._iRecordsDisplay):!f||c>d||-1===a?d:c},oInstance:null,sInstance:null,iTabIndex:0,nScrollHead:null,nScrollFoot:null,aLastSort:[],oPlugins:{},rowIdFn:null,rowId:null};m.ext=x={buttons:{},classes:{},build:"bs-3.3.7/jq-3.2.1/dt-1.10.16/r-2.2.1/sl-1.2.4",errMode:"alert",feature:[],search:[],selector:{cell:[],column:[],row:[]},internal:{},legacy:{ajax:null},pager:{},renderer:{pageButton:{},header:{}},
	order:{},type:{detect:[],search:{},order:{}},_unique:0,fnVersionCheck:m.fnVersionCheck,iApiIndex:0,oJUIClasses:{},sVersion:m.version};h.extend(x,{afnFiltering:x.search,aTypes:x.type.detect,ofnSearch:x.type.search,oSort:x.type.order,afnSortData:x.order,aoFeatures:x.feature,oApi:x.internal,oStdClasses:x.classes,oPagination:x.pager});h.extend(m.ext.classes,{sTable:"dataTable",sNoFooter:"no-footer",sPageButton:"paginate_button",sPageButtonActive:"current",sPageButtonDisabled:"disabled",sStripeOdd:"odd",
	sStripeEven:"even",sRowEmpty:"dataTables_empty",sWrapper:"dataTables_wrapper",sFilter:"dataTables_filter",sInfo:"dataTables_info",sPaging:"dataTables_paginate paging_",sLength:"dataTables_length",sProcessing:"dataTables_processing",sSortAsc:"sorting_asc",sSortDesc:"sorting_desc",sSortable:"sorting",sSortableAsc:"sorting_asc_disabled",sSortableDesc:"sorting_desc_disabled",sSortableNone:"sorting_disabled",sSortColumn:"sorting_",sFilterInput:"",sLengthSelect:"",sScrollWrapper:"dataTables_scroll",sScrollHead:"dataTables_scrollHead",
	sScrollHeadInner:"dataTables_scrollHeadInner",sScrollBody:"dataTables_scrollBody",sScrollFoot:"dataTables_scrollFoot",sScrollFootInner:"dataTables_scrollFootInner",sHeaderTH:"",sFooterTH:"",sSortJUIAsc:"",sSortJUIDesc:"",sSortJUI:"",sSortJUIAscAllowed:"",sSortJUIDescAllowed:"",sSortJUIWrapper:"",sSortIcon:"",sJUIHeader:"",sJUIFooter:""});var Kb=m.ext.pager;h.extend(Kb,{simple:function(){return["previous","next"]},full:function(){return["first","previous","next","last"]},numbers:function(a,b){return[ha(a,
	b)]},simple_numbers:function(a,b){return["previous",ha(a,b),"next"]},full_numbers:function(a,b){return["first","previous",ha(a,b),"next","last"]},first_last_numbers:function(a,b){return["first",ha(a,b),"last"]},_numbers:ha,numbers_length:7});h.extend(!0,m.ext.renderer,{pageButton:{_:function(a,b,c,d,e,f){var g=a.oClasses,j=a.oLanguage.oPaginate,i=a.oLanguage.oAria.paginate||{},n,l,m=0,o=function(b,d){var k,s,u,r,v=function(b){Sa(a,b.data.action,true)};k=0;for(s=d.length;k<s;k++){r=d[k];if(h.isArray(r)){u=
	h("<"+(r.DT_el||"div")+"/>").appendTo(b);o(u,r)}else{n=null;l="";switch(r){case "ellipsis":b.append('<span class="ellipsis">&#x2026;</span>');break;case "first":n=j.sFirst;l=r+(e>0?"":" "+g.sPageButtonDisabled);break;case "previous":n=j.sPrevious;l=r+(e>0?"":" "+g.sPageButtonDisabled);break;case "next":n=j.sNext;l=r+(e<f-1?"":" "+g.sPageButtonDisabled);break;case "last":n=j.sLast;l=r+(e<f-1?"":" "+g.sPageButtonDisabled);break;default:n=r+1;l=e===r?g.sPageButtonActive:""}if(n!==null){u=h("<a>",{"class":g.sPageButton+
	" "+l,"aria-controls":a.sTableId,"aria-label":i[r],"data-dt-idx":m,tabindex:a.iTabIndex,id:c===0&&typeof r==="string"?a.sTableId+"_"+r:null}).html(n).appendTo(b);Va(u,{action:r},v);m++}}}},s;try{s=h(b).find(G.activeElement).data("dt-idx")}catch(u){}o(h(b).empty(),d);s!==k&&h(b).find("[data-dt-idx="+s+"]").focus()}}});h.extend(m.ext.type.detect,[function(a,b){var c=b.oLanguage.sDecimal;return Ya(a,c)?"num"+c:null},function(a){if(a&&!(a instanceof Date)&&!Zb.test(a))return null;var b=Date.parse(a);
	return null!==b&&!isNaN(b)||L(a)?"date":null},function(a,b){var c=b.oLanguage.sDecimal;return Ya(a,c,!0)?"num-fmt"+c:null},function(a,b){var c=b.oLanguage.sDecimal;return Pb(a,c)?"html-num"+c:null},function(a,b){var c=b.oLanguage.sDecimal;return Pb(a,c,!0)?"html-num-fmt"+c:null},function(a){return L(a)||"string"===typeof a&&-1!==a.indexOf("<")?"html":null}]);h.extend(m.ext.type.search,{html:function(a){return L(a)?a:"string"===typeof a?a.replace(Mb," ").replace(Aa,""):""},string:function(a){return L(a)?
	a:"string"===typeof a?a.replace(Mb," "):a}});var za=function(a,b,c,d){if(0!==a&&(!a||"-"===a))return-Infinity;b&&(a=Ob(a,b));a.replace&&(c&&(a=a.replace(c,"")),d&&(a=a.replace(d,"")));return 1*a};h.extend(x.type.order,{"date-pre":function(a){return Date.parse(a)||-Infinity},"html-pre":function(a){return L(a)?"":a.replace?a.replace(/<.*?>/g,"").toLowerCase():a+""},"string-pre":function(a){return L(a)?"":"string"===typeof a?a.toLowerCase():!a.toString?"":a.toString()},"string-asc":function(a,b){return a<
	b?-1:a>b?1:0},"string-desc":function(a,b){return a<b?1:a>b?-1:0}});cb("");h.extend(!0,m.ext.renderer,{header:{_:function(a,b,c,d){h(a.nTable).on("order.dt.DT",function(e,f,g,h){if(a===f){e=c.idx;b.removeClass(c.sSortingClass+" "+d.sSortAsc+" "+d.sSortDesc).addClass(h[e]=="asc"?d.sSortAsc:h[e]=="desc"?d.sSortDesc:c.sSortingClass)}})},jqueryui:function(a,b,c,d){h("<div/>").addClass(d.sSortJUIWrapper).append(b.contents()).append(h("<span/>").addClass(d.sSortIcon+" "+c.sSortingClassJUI)).appendTo(b);
	h(a.nTable).on("order.dt.DT",function(e,f,g,h){if(a===f){e=c.idx;b.removeClass(d.sSortAsc+" "+d.sSortDesc).addClass(h[e]=="asc"?d.sSortAsc:h[e]=="desc"?d.sSortDesc:c.sSortingClass);b.find("span."+d.sSortIcon).removeClass(d.sSortJUIAsc+" "+d.sSortJUIDesc+" "+d.sSortJUI+" "+d.sSortJUIAscAllowed+" "+d.sSortJUIDescAllowed).addClass(h[e]=="asc"?d.sSortJUIAsc:h[e]=="desc"?d.sSortJUIDesc:c.sSortingClassJUI)}})}}});var Vb=function(a){return"string"===typeof a?a.replace(/</g,"&lt;").replace(/>/g,"&gt;").replace(/"/g,
	"&quot;"):a};m.render={number:function(a,b,c,d,e){return{display:function(f){if("number"!==typeof f&&"string"!==typeof f)return f;var g=0>f?"-":"",h=parseFloat(f);if(isNaN(h))return Vb(f);h=h.toFixed(c);f=Math.abs(h);h=parseInt(f,10);f=c?b+(f-h).toFixed(c).substring(2):"";return g+(d||"")+h.toString().replace(/\B(?=(\d{3})+(?!\d))/g,a)+f+(e||"")}}},text:function(){return{display:Vb}}};h.extend(m.ext.internal,{_fnExternApiFunc:Lb,_fnBuildAjax:sa,_fnAjaxUpdate:kb,_fnAjaxParameters:tb,_fnAjaxUpdateDraw:ub,
	_fnAjaxDataSrc:ta,_fnAddColumn:Da,_fnColumnOptions:ja,_fnAdjustColumnSizing:Y,_fnVisibleToColumnIndex:Z,_fnColumnIndexToVisible:$,_fnVisbleColumns:aa,_fnGetColumns:la,_fnColumnTypes:Fa,_fnApplyColumnDefs:hb,_fnHungarianMap:X,_fnCamelToHungarian:I,_fnLanguageCompat:Ca,_fnBrowserDetect:fb,_fnAddData:M,_fnAddTr:ma,_fnNodeToDataIndex:function(a,b){return b._DT_RowIndex!==k?b._DT_RowIndex:null},_fnNodeToColumnIndex:function(a,b,c){return h.inArray(c,a.aoData[b].anCells)},_fnGetCellData:B,_fnSetCellData:ib,
	_fnSplitObjNotation:Ia,_fnGetObjectDataFn:Q,_fnSetObjectDataFn:R,_fnGetDataMaster:Ja,_fnClearTable:na,_fnDeleteIndex:oa,_fnInvalidate:ca,_fnGetRowElements:Ha,_fnCreateTr:Ga,_fnBuildHead:jb,_fnDrawHead:ea,_fnDraw:N,_fnReDraw:S,_fnAddOptionsHtml:mb,_fnDetectHeader:da,_fnGetUniqueThs:ra,_fnFeatureHtmlFilter:ob,_fnFilterComplete:fa,_fnFilterCustom:xb,_fnFilterColumn:wb,_fnFilter:vb,_fnFilterCreateSearch:Oa,_fnEscapeRegex:Pa,_fnFilterData:yb,_fnFeatureHtmlInfo:rb,_fnUpdateInfo:Bb,_fnInfoMacros:Cb,_fnInitialise:ga,
	_fnInitComplete:ua,_fnLengthChange:Qa,_fnFeatureHtmlLength:nb,_fnFeatureHtmlPaginate:sb,_fnPageChange:Sa,_fnFeatureHtmlProcessing:pb,_fnProcessingDisplay:C,_fnFeatureHtmlTable:qb,_fnScrollDraw:ka,_fnApplyToChildren:H,_fnCalculateColumnWidths:Ea,_fnThrottle:Na,_fnConvertToWidth:Db,_fnGetWidestNode:Eb,_fnGetMaxLenString:Fb,_fnStringToCss:v,_fnSortFlatten:V,_fnSort:lb,_fnSortAria:Hb,_fnSortListener:Ua,_fnSortAttachListener:La,_fnSortingClasses:wa,_fnSortData:Gb,_fnSaveState:xa,_fnLoadState:Ib,_fnSettingsFromNode:ya,
	_fnLog:J,_fnMap:F,_fnBindAction:Va,_fnCallbackReg:z,_fnCallbackFire:r,_fnLengthOverflow:Ra,_fnRenderer:Ma,_fnDataSource:y,_fnRowAttributes:Ka,_fnCalculateEnd:function(){}});h.fn.dataTable=m;m.$=h;h.fn.dataTableSettings=m.settings;h.fn.dataTableExt=m.ext;h.fn.DataTable=function(a){return h(this).dataTable(a).api()};h.each(m,function(a,b){h.fn.DataTable[a]=b});return h.fn.dataTable});


	/*!
	 DataTables Bootstrap 3 integration
	 ©2011-2015 SpryMedia Ltd - datatables.net/license
	*/
	(function(b){"function"===typeof define&&define.amd?define(["jquery","datatables.net"],function(a){return b(a,window,document)}):"object"===typeof exports?module.exports=function(a,d){a||(a=window);if(!d||!d.fn.dataTable)d=require("datatables.net")(a,d).$;return b(d,a,a.document)}:b(jQuery,window,document)})(function(b,a,d,m){var f=b.fn.dataTable;b.extend(!0,f.defaults,{dom:"<'row'<'col-sm-6'l><'col-sm-6'f>><'row'<'col-sm-12'tr>><'row'<'col-sm-5'i><'col-sm-7'p>>",renderer:"bootstrap"});b.extend(f.ext.classes,
	{sWrapper:"dataTables_wrapper form-inline dt-bootstrap",sFilterInput:"form-control input-sm",sLengthSelect:"form-control input-sm",sProcessing:"dataTables_processing panel panel-default"});f.ext.renderer.pageButton.bootstrap=function(a,h,r,s,j,n){var o=new f.Api(a),t=a.oClasses,k=a.oLanguage.oPaginate,u=a.oLanguage.oAria.paginate||{},e,g,p=0,q=function(d,f){var l,h,i,c,m=function(a){a.preventDefault();!b(a.currentTarget).hasClass("disabled")&&o.page()!=a.data.action&&o.page(a.data.action).draw("page")};
	l=0;for(h=f.length;l<h;l++)if(c=f[l],b.isArray(c))q(d,c);else{g=e="";switch(c){case "ellipsis":e="&#x2026;";g="disabled";break;case "first":e=k.sFirst;g=c+(0<j?"":" disabled");break;case "previous":e=k.sPrevious;g=c+(0<j?"":" disabled");break;case "next":e=k.sNext;g=c+(j<n-1?"":" disabled");break;case "last":e=k.sLast;g=c+(j<n-1?"":" disabled");break;default:e=c+1,g=j===c?"active":""}e&&(i=b("<li>",{"class":t.sPageButton+" "+g,id:0===r&&"string"===typeof c?a.sTableId+"_"+c:null}).append(b("<a>",{href:"#",
	"aria-controls":a.sTableId,"aria-label":u[c],"data-dt-idx":p,tabindex:a.iTabIndex}).html(e)).appendTo(d),a.oApi._fnBindAction(i,{action:c},m),p++)}},i;try{i=b(h).find(d.activeElement).data("dt-idx")}catch(v){}q(b(h).empty().html('<ul class="pagination"/>').children("ul"),s);i!==m&&b(h).find("[data-dt-idx="+i+"]").focus()};return f});


	/*!
	 Responsive 2.2.1
	 2014-2017 SpryMedia Ltd - datatables.net/license
	*/
	(function(c){"function"===typeof define&&define.amd?define(["jquery","datatables.net"],function(l){return c(l,window,document)}):"object"===typeof exports?module.exports=function(l,k){l||(l=window);if(!k||!k.fn.dataTable)k=require("datatables.net")(l,k).$;return c(k,l,l.document)}:c(jQuery,window,document)})(function(c,l,k,q){function s(b,a,c){var e=a+"-"+c;if(m[e])return m[e];for(var f=[],b=b.cell(a,c).node().childNodes,a=0,c=b.length;a<c;a++)f.push(b[a]);return m[e]=f}function r(b,a,c){var e=a+
	"-"+c;if(m[e]){for(var b=b.cell(a,c).node(),c=m[e][0].parentNode.childNodes,a=[],f=0,g=c.length;f<g;f++)a.push(c[f]);c=0;for(f=a.length;c<f;c++)b.appendChild(a[c]);m[e]=q}}var o=c.fn.dataTable,j=function(b,a){if(!o.versionCheck||!o.versionCheck("1.10.10"))throw"DataTables Responsive requires DataTables 1.10.10 or newer";this.s={dt:new o.Api(b),columns:[],current:[]};this.s.dt.settings()[0].responsive||(a&&"string"===typeof a.details?a.details={type:a.details}:a&&!1===a.details?a.details={type:!1}:
	a&&!0===a.details&&(a.details={type:"inline"}),this.c=c.extend(!0,{},j.defaults,o.defaults.responsive,a),b.responsive=this,this._constructor())};c.extend(j.prototype,{_constructor:function(){var b=this,a=this.s.dt,d=a.settings()[0],e=c(l).width();a.settings()[0]._responsive=this;c(l).on("resize.dtr orientationchange.dtr",o.util.throttle(function(){var a=c(l).width();a!==e&&(b._resize(),e=a)}));d.oApi._fnCallbackReg(d,"aoRowCreatedCallback",function(e){-1!==c.inArray(!1,b.s.current)&&c(">td, >th",
	e).each(function(e){e=a.column.index("toData",e);!1===b.s.current[e]&&c(this).css("display","none")})});a.on("destroy.dtr",function(){a.off(".dtr");c(a.table().body()).off(".dtr");c(l).off("resize.dtr orientationchange.dtr");c.each(b.s.current,function(a,c){!1===c&&b._setColumnVis(a,!0)})});this.c.breakpoints.sort(function(a,b){return a.width<b.width?1:a.width>b.width?-1:0});this._classLogic();this._resizeAuto();d=this.c.details;!1!==d.type&&(b._detailsInit(),a.on("column-visibility.dtr",function(a,
	c,e,d,h){h&&(b._classLogic(),b._resizeAuto(),b._resize())}),a.on("draw.dtr",function(){b._redrawChildren()}),c(a.table().node()).addClass("dtr-"+d.type));a.on("column-reorder.dtr",function(){b._classLogic();b._resizeAuto();b._resize()});a.on("column-sizing.dtr",function(){b._resizeAuto();b._resize()});a.on("preXhr.dtr",function(){var c=[];a.rows().every(function(){this.child.isShown()&&c.push(this.id(true))});a.one("draw.dtr",function(){b._resizeAuto();b._resize();a.rows(c).every(function(){b._detailsDisplay(this,
	false)})})});a.on("init.dtr",function(){b._resizeAuto();b._resize();c.inArray(false,b.s.current)&&a.columns.adjust()});this._resize()},_columnsVisiblity:function(b){var a=this.s.dt,d=this.s.columns,e,f,g=d.map(function(a,b){return{columnIdx:b,priority:a.priority}}).sort(function(a,b){return a.priority!==b.priority?a.priority-b.priority:a.columnIdx-b.columnIdx}),i=c.map(d,function(a){return a.auto&&null===a.minWidth?!1:!0===a.auto?"-":-1!==c.inArray(b,a.includeIn)}),n=0;e=0;for(f=i.length;e<f;e++)!0===
	i[e]&&(n+=d[e].minWidth);e=a.settings()[0].oScroll;e=e.sY||e.sX?e.iBarWidth:0;a=a.table().container().offsetWidth-e-n;e=0;for(f=i.length;e<f;e++)d[e].control&&(a-=d[e].minWidth);n=!1;e=0;for(f=g.length;e<f;e++){var h=g[e].columnIdx;"-"===i[h]&&(!d[h].control&&d[h].minWidth)&&(n||0>a-d[h].minWidth?(n=!0,i[h]=!1):i[h]=!0,a-=d[h].minWidth)}g=!1;e=0;for(f=d.length;e<f;e++)if(!d[e].control&&!d[e].never&&!i[e]){g=!0;break}e=0;for(f=d.length;e<f;e++)d[e].control&&(i[e]=g);-1===c.inArray(!0,i)&&(i[0]=!0);
	return i},_classLogic:function(){var b=this,a=this.c.breakpoints,d=this.s.dt,e=d.columns().eq(0).map(function(a){var b=this.column(a),e=b.header().className,a=d.settings()[0].aoColumns[a].responsivePriority;a===q&&(b=c(b.header()).data("priority"),a=b!==q?1*b:1E4);return{className:e,includeIn:[],auto:!1,control:!1,never:e.match(/\bnever\b/)?!0:!1,priority:a}}),f=function(a,b){var d=e[a].includeIn;-1===c.inArray(b,d)&&d.push(b)},g=function(c,d,h,g){if(h)if("max-"===h){g=b._find(d).width;d=0;for(h=
	a.length;d<h;d++)a[d].width<=g&&f(c,a[d].name)}else if("min-"===h){g=b._find(d).width;d=0;for(h=a.length;d<h;d++)a[d].width>=g&&f(c,a[d].name)}else{if("not-"===h){d=0;for(h=a.length;d<h;d++)-1===a[d].name.indexOf(g)&&f(c,a[d].name)}}else e[c].includeIn.push(d)};e.each(function(b,e){for(var d=b.className.split(" "),f=!1,j=0,l=d.length;j<l;j++){var k=c.trim(d[j]);if("all"===k){f=!0;b.includeIn=c.map(a,function(a){return a.name});return}if("none"===k||b.never){f=!0;return}if("control"===k){f=!0;b.control=
	!0;return}c.each(a,function(a,b){var c=b.name.split("-"),d=k.match(RegExp("(min\\-|max\\-|not\\-)?("+c[0]+")(\\-[_a-zA-Z0-9])?"));d&&(f=!0,d[2]===c[0]&&d[3]==="-"+c[1]?g(e,b.name,d[1],d[2]+d[3]):d[2]===c[0]&&!d[3]&&g(e,b.name,d[1],d[2]))})}f||(b.auto=!0)});this.s.columns=e},_detailsDisplay:function(b,a){var d=this,e=this.s.dt,f=this.c.details;if(f&&!1!==f.type){var g=f.display(b,a,function(){return f.renderer(e,b[0],d._detailsObj(b[0]))});(!0===g||!1===g)&&c(e.table().node()).triggerHandler("responsive-display.dt",
	[e,b,g,a])}},_detailsInit:function(){var b=this,a=this.s.dt,d=this.c.details;"inline"===d.type&&(d.target="td:first-child, th:first-child");a.on("draw.dtr",function(){b._tabIndexes()});b._tabIndexes();c(a.table().body()).on("keyup.dtr","td, th",function(a){a.keyCode===13&&c(this).data("dtr-keyboard")&&c(this).click()});var e=d.target;c(a.table().body()).on("click.dtr mousedown.dtr mouseup.dtr","string"===typeof e?e:"td, th",function(d){if(c(a.table().node()).hasClass("collapsed")&&c.inArray(c(this).closest("tr").get(0),
	a.rows().nodes().toArray())!==-1){if(typeof e==="number"){var g=e<0?a.columns().eq(0).length+e:e;if(a.cell(this).index().column!==g)return}g=a.row(c(this).closest("tr"));d.type==="click"?b._detailsDisplay(g,false):d.type==="mousedown"?c(this).css("outline","none"):d.type==="mouseup"&&c(this).blur().css("outline","")}})},_detailsObj:function(b){var a=this,d=this.s.dt;return c.map(this.s.columns,function(c,f){if(!c.never&&!c.control)return{title:d.settings()[0].aoColumns[f].sTitle,data:d.cell(b,f).render(a.c.orthogonal),
	hidden:d.column(f).visible()&&!a.s.current[f],columnIndex:f,rowIndex:b}})},_find:function(b){for(var a=this.c.breakpoints,c=0,e=a.length;c<e;c++)if(a[c].name===b)return a[c]},_redrawChildren:function(){var b=this,a=this.s.dt;a.rows({page:"current"}).iterator("row",function(c,e){a.row(e);b._detailsDisplay(a.row(e),!0)})},_resize:function(){var b=this,a=this.s.dt,d=c(l).width(),e=this.c.breakpoints,f=e[0].name,g=this.s.columns,i,n=this.s.current.slice();for(i=e.length-1;0<=i;i--)if(d<=e[i].width){f=
	e[i].name;break}var h=this._columnsVisiblity(f);this.s.current=h;e=!1;i=0;for(d=g.length;i<d;i++)if(!1===h[i]&&!g[i].never&&!g[i].control){e=!0;break}c(a.table().node()).toggleClass("collapsed",e);var j=!1,k=0;a.columns().eq(0).each(function(a,c){!0===h[c]&&k++;h[c]!==n[c]&&(j=!0,b._setColumnVis(a,h[c]))});j&&(this._redrawChildren(),c(a.table().node()).trigger("responsive-resize.dt",[a,this.s.current]),0===a.page.info().recordsDisplay&&c("td",a.table().body()).eq(0).attr("colspan",k))},_resizeAuto:function(){var b=
	this.s.dt,a=this.s.columns;if(this.c.auto&&-1!==c.inArray(!0,c.map(a,function(a){return a.auto}))){c.isEmptyObject(m)||c.each(m,function(a){a=a.split("-");r(b,1*a[0],1*a[1])});b.table().node();var d=b.table().node().cloneNode(!1),e=c(b.table().header().cloneNode(!1)).appendTo(d),f=c(b.table().body()).clone(!1,!1).empty().appendTo(d),g=b.columns().header().filter(function(a){return b.column(a).visible()}).to$().clone(!1).css("display","table-cell").css("min-width",0);c(f).append(c(b.rows({page:"current"}).nodes()).clone(!1)).find("th, td").css("display",
	"");if(f=b.table().footer()){var f=c(f.cloneNode(!1)).appendTo(d),i=b.columns().footer().filter(function(a){return b.column(a).visible()}).to$().clone(!1).css("display","table-cell");c("<tr/>").append(i).appendTo(f)}c("<tr/>").append(g).appendTo(e);"inline"===this.c.details.type&&c(d).addClass("dtr-inline collapsed");c(d).find("[name]").removeAttr("name");d=c("<div/>").css({width:1,height:1,overflow:"hidden",clear:"both"}).append(d);d.insertBefore(b.table().node());g.each(function(c){c=b.column.index("fromVisible",
	c);a[c].minWidth=this.offsetWidth||0});d.remove()}},_setColumnVis:function(b,a){var d=this.s.dt,e=a?"":"none";c(d.column(b).header()).css("display",e);c(d.column(b).footer()).css("display",e);d.column(b).nodes().to$().css("display",e);c.isEmptyObject(m)||d.cells(null,b).indexes().each(function(a){r(d,a.row,a.column)})},_tabIndexes:function(){var b=this.s.dt,a=b.cells({page:"current"}).nodes().to$(),d=b.settings()[0],e=this.c.details.target;a.filter("[data-dtr-keyboard]").removeData("[data-dtr-keyboard]");
	a="number"===typeof e?":eq("+e+")":e;"td:first-child, th:first-child"===a&&(a=">td:first-child, >th:first-child");c(a,b.rows({page:"current"}).nodes()).attr("tabIndex",d.iTabIndex).data("dtr-keyboard",1)}});j.breakpoints=[{name:"desktop",width:Infinity},{name:"tablet-l",width:1024},{name:"tablet-p",width:768},{name:"mobile-l",width:480},{name:"mobile-p",width:320}];j.display={childRow:function(b,a,d){if(a){if(c(b.node()).hasClass("parent"))return b.child(d(),"child").show(),!0}else{if(b.child.isShown())return b.child(!1),
	c(b.node()).removeClass("parent"),!1;b.child(d(),"child").show();c(b.node()).addClass("parent");return!0}},childRowImmediate:function(b,a,d){if(!a&&b.child.isShown()||!b.responsive.hasHidden())return b.child(!1),c(b.node()).removeClass("parent"),!1;b.child(d(),"child").show();c(b.node()).addClass("parent");return!0},modal:function(b){return function(a,d,e){if(d)c("div.dtr-modal-content").empty().append(e());else{var f=function(){g.remove();c(k).off("keypress.dtr")},g=c('<div class="dtr-modal"/>').append(c('<div class="dtr-modal-display"/>').append(c('<div class="dtr-modal-content"/>').append(e())).append(c('<div class="dtr-modal-close">&times;</div>').click(function(){f()}))).append(c('<div class="dtr-modal-background"/>').click(function(){f()})).appendTo("body");
	c(k).on("keyup.dtr",function(a){27===a.keyCode&&(a.stopPropagation(),f())})}b&&b.header&&c("div.dtr-modal-content").prepend("<h2>"+b.header(a)+"</h2>")}}};var m={};j.renderer={listHiddenNodes:function(){return function(b,a,d){var e=c('<ul data-dtr-index="'+a+'" class="dtr-details"/>'),f=!1;c.each(d,function(a,d){d.hidden&&(c('<li data-dtr-index="'+d.columnIndex+'" data-dt-row="'+d.rowIndex+'" data-dt-column="'+d.columnIndex+'"><span class="dtr-title">'+d.title+"</span> </li>").append(c('<span class="dtr-data"/>').append(s(b,
	d.rowIndex,d.columnIndex))).appendTo(e),f=!0)});return f?e:!1}},listHidden:function(){return function(b,a,d){return(b=c.map(d,function(a){return a.hidden?'<li data-dtr-index="'+a.columnIndex+'" data-dt-row="'+a.rowIndex+'" data-dt-column="'+a.columnIndex+'"><span class="dtr-title">'+a.title+'</span> <span class="dtr-data">'+a.data+"</span></li>":""}).join(""))?c('<ul data-dtr-index="'+a+'" class="dtr-details"/>').append(b):!1}},tableAll:function(b){b=c.extend({tableClass:""},b);return function(a,
	d,e){a=c.map(e,function(a){return'<tr data-dt-row="'+a.rowIndex+'" data-dt-column="'+a.columnIndex+'"><td>'+a.title+":</td> <td>"+a.data+"</td></tr>"}).join("");return c('<table class="'+b.tableClass+' dtr-details" width="100%"/>').append(a)}}};j.defaults={breakpoints:j.breakpoints,auto:!0,details:{display:j.display.childRow,renderer:j.renderer.listHidden(),target:0,type:"inline"},orthogonal:"display"};var p=c.fn.dataTable.Api;p.register("responsive()",function(){return this});p.register("responsive.index()",
	function(b){b=c(b);return{column:b.data("dtr-index"),row:b.parent().data("dtr-index")}});p.register("responsive.rebuild()",function(){return this.iterator("table",function(b){b._responsive&&b._responsive._classLogic()})});p.register("responsive.recalc()",function(){return this.iterator("table",function(b){b._responsive&&(b._responsive._resizeAuto(),b._responsive._resize())})});p.register("responsive.hasHidden()",function(){var b=this.context[0];return b._responsive?-1!==c.inArray(!1,b._responsive.s.current):
	!1});p.registerPlural("columns().responsiveHidden()","column().responsiveHidden()",function(){return this.iterator("column",function(b,a){return b._responsive?b._responsive.s.current[a]:!1},1)});j.version="2.2.1";c.fn.dataTable.Responsive=j;c.fn.DataTable.Responsive=j;c(k).on("preInit.dt.dtr",function(b,a){if("dt"===b.namespace&&(c(a.nTable).hasClass("responsive")||c(a.nTable).hasClass("dt-responsive")||a.oInit.responsive||o.defaults.responsive)){var d=a.oInit.responsive;!1!==d&&new j(a,c.isPlainObject(d)?
	d:{})}});return j});


	/*!
	 Bootstrap integration for DataTables' Responsive
	 ©2015-2016 SpryMedia Ltd - datatables.net/license
	*/
	(function(c){"function"===typeof define&&define.amd?define(["jquery","datatables.net-bs","datatables.net-responsive"],function(a){return c(a,window,document)}):"object"===typeof exports?module.exports=function(a,b){a||(a=window);if(!b||!b.fn.dataTable)b=require("datatables.net-bs")(a,b).$;b.fn.dataTable.Responsive||require("datatables.net-responsive")(a,b);return c(b,a,a.document)}:c(jQuery,window,document)})(function(c){var a=c.fn.dataTable,b=a.Responsive.display,g=b.modal,e=c('<div class="modal fade dtr-bs-modal" role="dialog"><div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="modal-body"/></div></div></div>');
	b.modal=function(a){return function(b,d,f){if(c.fn.modal){if(!d){if(a&&a.header){var d=e.find("div.modal-header"),h=d.find("button").detach();d.empty().append('<h4 class="modal-title">'+a.header(b)+"</h4>").prepend(h)}e.find("div.modal-body").empty().append(f());e.appendTo("body").modal()}}else g(b,d,f)}};return a.Responsive});


	/*!
	 Select for DataTables 1.2.4
	 2015-2017 SpryMedia Ltd - datatables.net/license/mit
	*/
	(function(e){"function"===typeof define&&define.amd?define(["jquery","datatables.net"],function(j){return e(j,window,document)}):"object"===typeof exports?module.exports=function(j,m){j||(j=window);if(!m||!m.fn.dataTable)m=require("datatables.net")(j,m).$;return e(m,j,j.document)}:e(jQuery,window,document)})(function(e,j,m,h){function v(a,c,b){var d;d=function(b,c){if(b>c)var d=c,c=b,b=d;var f=!1;return a.columns(":visible").indexes().filter(function(a){a===b&&(f=!0);return a===c?(f=!1,!0):f})};var f=
	function(b,c){var d=a.rows({search:"applied"}).indexes();if(d.indexOf(b)>d.indexOf(c))var f=c,c=b,b=f;var e=!1;return d.filter(function(a){a===b&&(e=!0);return a===c?(e=!1,!0):e})};!a.cells({selected:!0}).any()&&!b?(d=d(0,c.column),b=f(0,c.row)):(d=d(b.column,c.column),b=f(b.row,c.row));b=a.cells(b,d).flatten();a.cells(c,{selected:!0}).any()?a.cells(b).deselect():a.cells(b).select()}function r(a){var c=a.settings()[0]._select.selector;e(a.table().container()).off("mousedown.dtSelect",c).off("mouseup.dtSelect",
	c).off("click.dtSelect",c);e("body").off("click.dtSelect"+a.table().node().id)}function x(a){var c=e(a.table().container()),b=a.settings()[0],d=b._select.selector;c.on("mousedown.dtSelect",d,function(b){if(b.shiftKey||b.metaKey||b.ctrlKey)c.css("-moz-user-select","none").one("selectstart.dtSelect",d,function(){return!1})}).on("mouseup.dtSelect",d,function(){c.css("-moz-user-select","")}).on("click.dtSelect",d,function(b){var c=a.select.items();if(j.getSelection){var d=j.getSelection();if((!d.anchorNode||
	e(d.anchorNode).closest("table")[0]===a.table().node())&&""!==e.trim(d.toString()))return}d=a.settings()[0];if(e(b.target).closest("div.dataTables_wrapper")[0]==a.table().container()){var k=a.cell(e(b.target).closest("td, th"));if(k.any()){var g=e.Event("user-select.dt");i(a,g,[c,k,b]);g.isDefaultPrevented()||(g=k.index(),"row"===c?(c=g.row,s(b,a,d,"row",c)):"column"===c?(c=k.index().column,s(b,a,d,"column",c)):"cell"===c&&(c=k.index(),s(b,a,d,"cell",c)),d._select_lastCell=g)}}});e("body").on("click.dtSelect"+
	a.table().node().id,function(c){b._select.blurable&&!e(c.target).parents().filter(a.table().container()).length&&(0!==e(c.target).parents("html").length&&!e(c.target).parents("div.DTE").length)&&p(b,!0)})}function i(a,c,b,d){if(!d||a.flatten().length)"string"===typeof c&&(c+=".dt"),b.unshift(a),e(a.table().node()).trigger(c,b)}function y(a){var c=a.settings()[0];if(c._select.info&&c.aanFeatures.i&&"api"!==a.select.style()){var b=a.rows({selected:!0}).flatten().length,d=a.columns({selected:!0}).flatten().length,
	f=a.cells({selected:!0}).flatten().length,l=function(b,c,d){b.append(e('<span class="select-item"/>').append(a.i18n("select."+c+"s",{_:"%d "+c+"s selected","0":"",1:"1 "+c+" selected"},d)))};e.each(c.aanFeatures.i,function(c,a){var a=e(a),g=e('<span class="select-info"/>');l(g,"row",b);l(g,"column",d);l(g,"cell",f);var h=a.children("span.select-info");h.length&&h.remove();""!==g.text()&&a.append(g)})}}function z(a,c,b,d){var f=a[c+"s"]({search:"applied"}).indexes(),d=e.inArray(d,f),l=e.inArray(b,
	f);if(!a[c+"s"]({selected:!0}).any()&&-1===d)f.splice(e.inArray(b,f)+1,f.length);else{if(d>l)var g=l,l=d,d=g;f.splice(l+1,f.length);f.splice(0,d)}a[c](b,{selected:!0}).any()?(f.splice(e.inArray(b,f),1),a[c+"s"](f).deselect()):a[c+"s"](f).select()}function p(a,c){if(c||"single"===a._select.style){var b=new g.Api(a);b.rows({selected:!0}).deselect();b.columns({selected:!0}).deselect();b.cells({selected:!0}).deselect()}}function s(a,c,b,d,f){var e=c.select.style(),g=c[d](f,{selected:!0}).any();"os"===
	e?a.ctrlKey||a.metaKey?c[d](f).select(!g):a.shiftKey?"cell"===d?v(c,f,b._select_lastCell||null):z(c,d,f,b._select_lastCell?b._select_lastCell[d]:null):(a=c[d+"s"]({selected:!0}),g&&1===a.flatten().length?c[d](f).deselect():(a.deselect(),c[d](f).select())):"multi+shift"==e?a.shiftKey?"cell"===d?v(c,f,b._select_lastCell||null):z(c,d,f,b._select_lastCell?b._select_lastCell[d]:null):c[d](f).select(!g):c[d](f).select(!g)}function q(a,c){return function(b){return b.i18n("buttons."+a,c)}}function t(a){a=
	a._eventNamespace;return"draw.dt.DT"+a+" select.dt.DT"+a+" deselect.dt.DT"+a}var g=e.fn.dataTable;g.select={};g.select.version="1.2.4";g.select.init=function(a){var c=a.settings()[0],b=c.oInit.select,d=g.defaults.select,b=b===h?d:b,d="row",f="api",l=!1,w=!0,k="td, th",j="selected",i=!1;c._select={};if(!0===b)f="os",i=!0;else if("string"===typeof b)f=b,i=!0;else if(e.isPlainObject(b)&&(b.blurable!==h&&(l=b.blurable),b.info!==h&&(w=b.info),b.items!==h&&(d=b.items),b.style!==h&&(f=b.style,i=!0),b.selector!==
	h&&(k=b.selector),b.className!==h))j=b.className;a.select.selector(k);a.select.items(d);a.select.style(f);a.select.blurable(l);a.select.info(w);c._select.className=j;e.fn.dataTable.ext.order["select-checkbox"]=function(b,c){return this.api().column(c,{order:"index"}).nodes().map(function(c){return"row"===b._select.items?e(c).parent().hasClass(b._select.className):"cell"===b._select.items?e(c).hasClass(b._select.className):!1})};!i&&e(a.table().node()).hasClass("selectable")&&a.select.style("os")};
	e.each([{type:"row",prop:"aoData"},{type:"column",prop:"aoColumns"}],function(a,c){g.ext.selector[c.type].push(function(b,a,f){var a=a.selected,e,g=[];if(a===h)return f;for(var k=0,i=f.length;k<i;k++)e=b[c.prop][f[k]],(!0===a&&!0===e._select_selected||!1===a&&!e._select_selected)&&g.push(f[k]);return g})});g.ext.selector.cell.push(function(a,c,b){var c=c.selected,d,f=[];if(c===h)return b;for(var e=0,g=b.length;e<g;e++)d=a.aoData[b[e].row],(!0===c&&d._selected_cells&&!0===d._selected_cells[b[e].column]||
	!1===c&&(!d._selected_cells||!d._selected_cells[b[e].column]))&&f.push(b[e]);return f});var n=g.Api.register,o=g.Api.registerPlural;n("select()",function(){return this.iterator("table",function(a){g.select.init(new g.Api(a))})});n("select.blurable()",function(a){return a===h?this.context[0]._select.blurable:this.iterator("table",function(c){c._select.blurable=a})});n("select.info()",function(a){return y===h?this.context[0]._select.info:this.iterator("table",function(c){c._select.info=a})});n("select.items()",
	function(a){return a===h?this.context[0]._select.items:this.iterator("table",function(c){c._select.items=a;i(new g.Api(c),"selectItems",[a])})});n("select.style()",function(a){return a===h?this.context[0]._select.style:this.iterator("table",function(c){c._select.style=a;if(!c._select_init){var b=new g.Api(c);c.aoRowCreatedCallback.push({fn:function(b,a,d){a=c.aoData[d];a._select_selected&&e(b).addClass(c._select.className);b=0;for(d=c.aoColumns.length;b<d;b++)(c.aoColumns[b]._select_selected||a._selected_cells&&
	a._selected_cells[b])&&e(a.anCells[b]).addClass(c._select.className)},sName:"select-deferRender"});b.on("preXhr.dt.dtSelect",function(){var c=b.rows({selected:!0}).ids(!0).filter(function(b){return b!==h}),a=b.cells({selected:!0}).eq(0).map(function(c){var a=b.row(c.row).id(!0);return a?{row:a,column:c.column}:h}).filter(function(b){return b!==h});b.one("draw.dt.dtSelect",function(){b.rows(c).select();a.any()&&a.each(function(c){b.cells(c.row,c.column).select()})})});b.on("draw.dtSelect.dt select.dtSelect.dt deselect.dtSelect.dt info.dt",
	function(){y(b)});b.on("destroy.dtSelect",function(){r(b);b.off(".dtSelect")})}var d=new g.Api(c);r(d);"api"!==a&&x(d);i(new g.Api(c),"selectStyle",[a])})});n("select.selector()",function(a){return a===h?this.context[0]._select.selector:this.iterator("table",function(c){r(new g.Api(c));c._select.selector=a;"api"!==c._select.style&&x(new g.Api(c))})});o("rows().select()","row().select()",function(a){var c=this;if(!1===a)return this.deselect();this.iterator("row",function(b,c){p(b);b.aoData[c]._select_selected=
	!0;e(b.aoData[c].nTr).addClass(b._select.className)});this.iterator("table",function(b,a){i(c,"select",["row",c[a]],!0)});return this});o("columns().select()","column().select()",function(a){var c=this;if(!1===a)return this.deselect();this.iterator("column",function(b,c){p(b);b.aoColumns[c]._select_selected=!0;var a=(new g.Api(b)).column(c);e(a.header()).addClass(b._select.className);e(a.footer()).addClass(b._select.className);a.nodes().to$().addClass(b._select.className)});this.iterator("table",
	function(b,a){i(c,"select",["column",c[a]],!0)});return this});o("cells().select()","cell().select()",function(a){var c=this;if(!1===a)return this.deselect();this.iterator("cell",function(b,c,a){p(b);c=b.aoData[c];c._selected_cells===h&&(c._selected_cells=[]);c._selected_cells[a]=!0;c.anCells&&e(c.anCells[a]).addClass(b._select.className)});this.iterator("table",function(b,a){i(c,"select",["cell",c[a]],!0)});return this});o("rows().deselect()","row().deselect()",function(){var a=this;this.iterator("row",
	function(c,b){c.aoData[b]._select_selected=!1;e(c.aoData[b].nTr).removeClass(c._select.className)});this.iterator("table",function(c,b){i(a,"deselect",["row",a[b]],!0)});return this});o("columns().deselect()","column().deselect()",function(){var a=this;this.iterator("column",function(c,b){c.aoColumns[b]._select_selected=!1;var a=new g.Api(c),f=a.column(b);e(f.header()).removeClass(c._select.className);e(f.footer()).removeClass(c._select.className);a.cells(null,b).indexes().each(function(b){var a=
	c.aoData[b.row],d=a._selected_cells;a.anCells&&(!d||!d[b.column])&&e(a.anCells[b.column]).removeClass(c._select.className)})});this.iterator("table",function(c,b){i(a,"deselect",["column",a[b]],!0)});return this});o("cells().deselect()","cell().deselect()",function(){var a=this;this.iterator("cell",function(c,b,a){b=c.aoData[b];b._selected_cells[a]=!1;b.anCells&&!c.aoColumns[a]._select_selected&&e(b.anCells[a]).removeClass(c._select.className)});this.iterator("table",function(c,b){i(a,"deselect",
	["cell",a[b]],!0)});return this});var u=0;e.extend(g.ext.buttons,{selected:{text:q("selected","Selected"),className:"buttons-selected",init:function(a,c,b){var d=this;b._eventNamespace=".select"+u++;a.on(t(b),function(){var a=d.rows({selected:!0}).any()||d.columns({selected:!0}).any()||d.cells({selected:!0}).any();d.enable(a)});this.disable()},destroy:function(a,c,b){a.off(b._eventNamespace)}},selectedSingle:{text:q("selectedSingle","Selected single"),className:"buttons-selected-single",init:function(a,
	c,b){var d=this;b._eventNamespace=".select"+u++;a.on(t(b),function(){var b=a.rows({selected:!0}).flatten().length+a.columns({selected:!0}).flatten().length+a.cells({selected:!0}).flatten().length;d.enable(1===b)});this.disable()},destroy:function(a,c,b){a.off(b._eventNamespace)}},selectAll:{text:q("selectAll","Select all"),className:"buttons-select-all",action:function(){this[this.select.items()+"s"]().select()}},selectNone:{text:q("selectNone","Deselect all"),className:"buttons-select-none",action:function(){p(this.settings()[0],
	!0)},init:function(a,c,b){var d=this;b._eventNamespace=".select"+u++;a.on(t(b),function(){var b=a.rows({selected:!0}).flatten().length+a.columns({selected:!0}).flatten().length+a.cells({selected:!0}).flatten().length;d.enable(0<b)});this.disable()},destroy:function(a,c,b){a.off(b._eventNamespace)}}});e.each(["Row","Column","Cell"],function(a,c){var b=c.toLowerCase();g.ext.buttons["select"+c+"s"]={text:q("select"+c+"s","Select "+b+"s"),className:"buttons-select-"+b+"s",action:function(){this.select.items(b)},
	init:function(a){var c=this;a.on("selectItems.dt.DT",function(a,d,e){c.active(e===b)})}}});e(m).on("preInit.dt.dtSelect",function(a,c){"dt"===a.namespace&&g.select.init(new g.Api(c))});return g.select});


	/**
	 * @author zhixin wen <wenzhixin2010@gmail.com>
	 * @version 1.2.1
	 *
	 * http://wenzhixin.net.cn/p/multiple-select/
	 */

	(function ($) {

	    'use strict';

	    // it only does '%s', and return '' when arguments are undefined
	    var sprintf = function (str) {
	        var args = arguments,
	            flag = true,
	            i = 1;

	        str = str.replace(/%s/g, function () {
	            var arg = args[i++];

	            if (typeof arg === 'undefined') {
	                flag = false;
	                return '';
	            }
	            return arg;
	        });
	        return flag ? str : '';
	    };

	    var removeDiacritics = function (str) {
	        var defaultDiacriticsRemovalMap = [
	            {'base':'A', 'letters':/[\u0041\u24B6\uFF21\u00C0\u00C1\u00C2\u1EA6\u1EA4\u1EAA\u1EA8\u00C3\u0100\u0102\u1EB0\u1EAE\u1EB4\u1EB2\u0226\u01E0\u00C4\u01DE\u1EA2\u00C5\u01FA\u01CD\u0200\u0202\u1EA0\u1EAC\u1EB6\u1E00\u0104\u023A\u2C6F]/g},
	            {'base':'AA','letters':/[\uA732]/g},
	            {'base':'AE','letters':/[\u00C6\u01FC\u01E2]/g},
	            {'base':'AO','letters':/[\uA734]/g},
	            {'base':'AU','letters':/[\uA736]/g},
	            {'base':'AV','letters':/[\uA738\uA73A]/g},
	            {'base':'AY','letters':/[\uA73C]/g},
	            {'base':'B', 'letters':/[\u0042\u24B7\uFF22\u1E02\u1E04\u1E06\u0243\u0182\u0181]/g},
	            {'base':'C', 'letters':/[\u0043\u24B8\uFF23\u0106\u0108\u010A\u010C\u00C7\u1E08\u0187\u023B\uA73E]/g},
	            {'base':'D', 'letters':/[\u0044\u24B9\uFF24\u1E0A\u010E\u1E0C\u1E10\u1E12\u1E0E\u0110\u018B\u018A\u0189\uA779]/g},
	            {'base':'DZ','letters':/[\u01F1\u01C4]/g},
	            {'base':'Dz','letters':/[\u01F2\u01C5]/g},
	            {'base':'E', 'letters':/[\u0045\u24BA\uFF25\u00C8\u00C9\u00CA\u1EC0\u1EBE\u1EC4\u1EC2\u1EBC\u0112\u1E14\u1E16\u0114\u0116\u00CB\u1EBA\u011A\u0204\u0206\u1EB8\u1EC6\u0228\u1E1C\u0118\u1E18\u1E1A\u0190\u018E]/g},
	            {'base':'F', 'letters':/[\u0046\u24BB\uFF26\u1E1E\u0191\uA77B]/g},
	            {'base':'G', 'letters':/[\u0047\u24BC\uFF27\u01F4\u011C\u1E20\u011E\u0120\u01E6\u0122\u01E4\u0193\uA7A0\uA77D\uA77E]/g},
	            {'base':'H', 'letters':/[\u0048\u24BD\uFF28\u0124\u1E22\u1E26\u021E\u1E24\u1E28\u1E2A\u0126\u2C67\u2C75\uA78D]/g},
	            {'base':'I', 'letters':/[\u0049\u24BE\uFF29\u00CC\u00CD\u00CE\u0128\u012A\u012C\u0130\u00CF\u1E2E\u1EC8\u01CF\u0208\u020A\u1ECA\u012E\u1E2C\u0197]/g},
	            {'base':'J', 'letters':/[\u004A\u24BF\uFF2A\u0134\u0248]/g},
	            {'base':'K', 'letters':/[\u004B\u24C0\uFF2B\u1E30\u01E8\u1E32\u0136\u1E34\u0198\u2C69\uA740\uA742\uA744\uA7A2]/g},
	            {'base':'L', 'letters':/[\u004C\u24C1\uFF2C\u013F\u0139\u013D\u1E36\u1E38\u013B\u1E3C\u1E3A\u0141\u023D\u2C62\u2C60\uA748\uA746\uA780]/g},
	            {'base':'LJ','letters':/[\u01C7]/g},
	            {'base':'Lj','letters':/[\u01C8]/g},
	            {'base':'M', 'letters':/[\u004D\u24C2\uFF2D\u1E3E\u1E40\u1E42\u2C6E\u019C]/g},
	            {'base':'N', 'letters':/[\u004E\u24C3\uFF2E\u01F8\u0143\u00D1\u1E44\u0147\u1E46\u0145\u1E4A\u1E48\u0220\u019D\uA790\uA7A4]/g},
	            {'base':'NJ','letters':/[\u01CA]/g},
	            {'base':'Nj','letters':/[\u01CB]/g},
	            {'base':'O', 'letters':/[\u004F\u24C4\uFF2F\u00D2\u00D3\u00D4\u1ED2\u1ED0\u1ED6\u1ED4\u00D5\u1E4C\u022C\u1E4E\u014C\u1E50\u1E52\u014E\u022E\u0230\u00D6\u022A\u1ECE\u0150\u01D1\u020C\u020E\u01A0\u1EDC\u1EDA\u1EE0\u1EDE\u1EE2\u1ECC\u1ED8\u01EA\u01EC\u00D8\u01FE\u0186\u019F\uA74A\uA74C]/g},
	            {'base':'OI','letters':/[\u01A2]/g},
	            {'base':'OO','letters':/[\uA74E]/g},
	            {'base':'OU','letters':/[\u0222]/g},
	            {'base':'P', 'letters':/[\u0050\u24C5\uFF30\u1E54\u1E56\u01A4\u2C63\uA750\uA752\uA754]/g},
	            {'base':'Q', 'letters':/[\u0051\u24C6\uFF31\uA756\uA758\u024A]/g},
	            {'base':'R', 'letters':/[\u0052\u24C7\uFF32\u0154\u1E58\u0158\u0210\u0212\u1E5A\u1E5C\u0156\u1E5E\u024C\u2C64\uA75A\uA7A6\uA782]/g},
	            {'base':'S', 'letters':/[\u0053\u24C8\uFF33\u1E9E\u015A\u1E64\u015C\u1E60\u0160\u1E66\u1E62\u1E68\u0218\u015E\u2C7E\uA7A8\uA784]/g},
	            {'base':'T', 'letters':/[\u0054\u24C9\uFF34\u1E6A\u0164\u1E6C\u021A\u0162\u1E70\u1E6E\u0166\u01AC\u01AE\u023E\uA786]/g},
	            {'base':'TZ','letters':/[\uA728]/g},
	            {'base':'U', 'letters':/[\u0055\u24CA\uFF35\u00D9\u00DA\u00DB\u0168\u1E78\u016A\u1E7A\u016C\u00DC\u01DB\u01D7\u01D5\u01D9\u1EE6\u016E\u0170\u01D3\u0214\u0216\u01AF\u1EEA\u1EE8\u1EEE\u1EEC\u1EF0\u1EE4\u1E72\u0172\u1E76\u1E74\u0244]/g},
	            {'base':'V', 'letters':/[\u0056\u24CB\uFF36\u1E7C\u1E7E\u01B2\uA75E\u0245]/g},
	            {'base':'VY','letters':/[\uA760]/g},
	            {'base':'W', 'letters':/[\u0057\u24CC\uFF37\u1E80\u1E82\u0174\u1E86\u1E84\u1E88\u2C72]/g},
	            {'base':'X', 'letters':/[\u0058\u24CD\uFF38\u1E8A\u1E8C]/g},
	            {'base':'Y', 'letters':/[\u0059\u24CE\uFF39\u1EF2\u00DD\u0176\u1EF8\u0232\u1E8E\u0178\u1EF6\u1EF4\u01B3\u024E\u1EFE]/g},
	            {'base':'Z', 'letters':/[\u005A\u24CF\uFF3A\u0179\u1E90\u017B\u017D\u1E92\u1E94\u01B5\u0224\u2C7F\u2C6B\uA762]/g},
	            {'base':'a', 'letters':/[\u0061\u24D0\uFF41\u1E9A\u00E0\u00E1\u00E2\u1EA7\u1EA5\u1EAB\u1EA9\u00E3\u0101\u0103\u1EB1\u1EAF\u1EB5\u1EB3\u0227\u01E1\u00E4\u01DF\u1EA3\u00E5\u01FB\u01CE\u0201\u0203\u1EA1\u1EAD\u1EB7\u1E01\u0105\u2C65\u0250]/g},
	            {'base':'aa','letters':/[\uA733]/g},
	            {'base':'ae','letters':/[\u00E6\u01FD\u01E3]/g},
	            {'base':'ao','letters':/[\uA735]/g},
	            {'base':'au','letters':/[\uA737]/g},
	            {'base':'av','letters':/[\uA739\uA73B]/g},
	            {'base':'ay','letters':/[\uA73D]/g},
	            {'base':'b', 'letters':/[\u0062\u24D1\uFF42\u1E03\u1E05\u1E07\u0180\u0183\u0253]/g},
	            {'base':'c', 'letters':/[\u0063\u24D2\uFF43\u0107\u0109\u010B\u010D\u00E7\u1E09\u0188\u023C\uA73F\u2184]/g},
	            {'base':'d', 'letters':/[\u0064\u24D3\uFF44\u1E0B\u010F\u1E0D\u1E11\u1E13\u1E0F\u0111\u018C\u0256\u0257\uA77A]/g},
	            {'base':'dz','letters':/[\u01F3\u01C6]/g},
	            {'base':'e', 'letters':/[\u0065\u24D4\uFF45\u00E8\u00E9\u00EA\u1EC1\u1EBF\u1EC5\u1EC3\u1EBD\u0113\u1E15\u1E17\u0115\u0117\u00EB\u1EBB\u011B\u0205\u0207\u1EB9\u1EC7\u0229\u1E1D\u0119\u1E19\u1E1B\u0247\u025B\u01DD]/g},
	            {'base':'f', 'letters':/[\u0066\u24D5\uFF46\u1E1F\u0192\uA77C]/g},
	            {'base':'g', 'letters':/[\u0067\u24D6\uFF47\u01F5\u011D\u1E21\u011F\u0121\u01E7\u0123\u01E5\u0260\uA7A1\u1D79\uA77F]/g},
	            {'base':'h', 'letters':/[\u0068\u24D7\uFF48\u0125\u1E23\u1E27\u021F\u1E25\u1E29\u1E2B\u1E96\u0127\u2C68\u2C76\u0265]/g},
	            {'base':'hv','letters':/[\u0195]/g},
	            {'base':'i', 'letters':/[\u0069\u24D8\uFF49\u00EC\u00ED\u00EE\u0129\u012B\u012D\u00EF\u1E2F\u1EC9\u01D0\u0209\u020B\u1ECB\u012F\u1E2D\u0268\u0131]/g},
	            {'base':'j', 'letters':/[\u006A\u24D9\uFF4A\u0135\u01F0\u0249]/g},
	            {'base':'k', 'letters':/[\u006B\u24DA\uFF4B\u1E31\u01E9\u1E33\u0137\u1E35\u0199\u2C6A\uA741\uA743\uA745\uA7A3]/g},
	            {'base':'l', 'letters':/[\u006C\u24DB\uFF4C\u0140\u013A\u013E\u1E37\u1E39\u013C\u1E3D\u1E3B\u017F\u0142\u019A\u026B\u2C61\uA749\uA781\uA747]/g},
	            {'base':'lj','letters':/[\u01C9]/g},
	            {'base':'m', 'letters':/[\u006D\u24DC\uFF4D\u1E3F\u1E41\u1E43\u0271\u026F]/g},
	            {'base':'n', 'letters':/[\u006E\u24DD\uFF4E\u01F9\u0144\u00F1\u1E45\u0148\u1E47\u0146\u1E4B\u1E49\u019E\u0272\u0149\uA791\uA7A5]/g},
	            {'base':'nj','letters':/[\u01CC]/g},
	            {'base':'o', 'letters':/[\u006F\u24DE\uFF4F\u00F2\u00F3\u00F4\u1ED3\u1ED1\u1ED7\u1ED5\u00F5\u1E4D\u022D\u1E4F\u014D\u1E51\u1E53\u014F\u022F\u0231\u00F6\u022B\u1ECF\u0151\u01D2\u020D\u020F\u01A1\u1EDD\u1EDB\u1EE1\u1EDF\u1EE3\u1ECD\u1ED9\u01EB\u01ED\u00F8\u01FF\u0254\uA74B\uA74D\u0275]/g},
	            {'base':'oi','letters':/[\u01A3]/g},
	            {'base':'ou','letters':/[\u0223]/g},
	            {'base':'oo','letters':/[\uA74F]/g},
	            {'base':'p','letters':/[\u0070\u24DF\uFF50\u1E55\u1E57\u01A5\u1D7D\uA751\uA753\uA755]/g},
	            {'base':'q','letters':/[\u0071\u24E0\uFF51\u024B\uA757\uA759]/g},
	            {'base':'r','letters':/[\u0072\u24E1\uFF52\u0155\u1E59\u0159\u0211\u0213\u1E5B\u1E5D\u0157\u1E5F\u024D\u027D\uA75B\uA7A7\uA783]/g},
	            {'base':'s','letters':/[\u0073\u24E2\uFF53\u00DF\u015B\u1E65\u015D\u1E61\u0161\u1E67\u1E63\u1E69\u0219\u015F\u023F\uA7A9\uA785\u1E9B]/g},
	            {'base':'t','letters':/[\u0074\u24E3\uFF54\u1E6B\u1E97\u0165\u1E6D\u021B\u0163\u1E71\u1E6F\u0167\u01AD\u0288\u2C66\uA787]/g},
	            {'base':'tz','letters':/[\uA729]/g},
	            {'base':'u','letters':/[\u0075\u24E4\uFF55\u00F9\u00FA\u00FB\u0169\u1E79\u016B\u1E7B\u016D\u00FC\u01DC\u01D8\u01D6\u01DA\u1EE7\u016F\u0171\u01D4\u0215\u0217\u01B0\u1EEB\u1EE9\u1EEF\u1EED\u1EF1\u1EE5\u1E73\u0173\u1E77\u1E75\u0289]/g},
	            {'base':'v','letters':/[\u0076\u24E5\uFF56\u1E7D\u1E7F\u028B\uA75F\u028C]/g},
	            {'base':'vy','letters':/[\uA761]/g},
	            {'base':'w','letters':/[\u0077\u24E6\uFF57\u1E81\u1E83\u0175\u1E87\u1E85\u1E98\u1E89\u2C73]/g},
	            {'base':'x','letters':/[\u0078\u24E7\uFF58\u1E8B\u1E8D]/g},
	            {'base':'y','letters':/[\u0079\u24E8\uFF59\u1EF3\u00FD\u0177\u1EF9\u0233\u1E8F\u00FF\u1EF7\u1E99\u1EF5\u01B4\u024F\u1EFF]/g},
	            {'base':'z','letters':/[\u007A\u24E9\uFF5A\u017A\u1E91\u017C\u017E\u1E93\u1E95\u01B6\u0225\u0240\u2C6C\uA763]/g}
	        ];

	        for (var i = 0; i < defaultDiacriticsRemovalMap.length; i++) {
	            str = str.replace(defaultDiacriticsRemovalMap[i].letters, defaultDiacriticsRemovalMap[i].base);
	        }

	        return str;

	    };

	    function MultipleSelect($el, options) {
	        var that = this,
	            name = $el.attr('name') || options.name || '';

	        this.options = options;

	        // hide select element
	        this.$el = $el.hide();

	        // label element
	        this.$label = this.$el.closest('label');
	        if (this.$label.length === 0 && this.$el.attr('id')) {
	            this.$label = $(sprintf('label[for="%s"]', this.$el.attr('id').replace(/:/g, '\\:')));
	        }

	        // restore class and title from select element
	        this.$parent = $(sprintf(
	            '<div class="ms-parent %s" %s/>',
	            $el.attr('class') || '',
	            sprintf('title="%s"', $el.attr('title'))));

	        // add placeholder to choice button
	        this.$choice = $(sprintf([
	                '<button type="button" class="ms-choice">',
	                '<span class="placeholder">%s</span>',
	                '<div></div>',
	                '</button>'
	            ].join(''),
	            this.options.placeholder));

	        // default position is bottom
	        this.$drop = $(sprintf('<div class="ms-drop %s"%s></div>',
	            this.options.position,
	            sprintf(' style="width: %s"', this.options.dropWidth)));

	        this.$el.after(this.$parent);
	        this.$parent.append(this.$choice);
	        this.$parent.append(this.$drop);

	        if (this.$el.prop('disabled')) {
	            this.$choice.addClass('disabled');
	        }
	        this.$parent.css('width',
	            this.options.width ||
	            this.$el.css('width') ||
	            this.$el.outerWidth() + 20);

	        this.selectAllName = 'data-name="selectAll' + name + '"';
	        this.selectGroupName = 'data-name="selectGroup' + name + '"';
	        this.selectItemName = 'data-name="selectItem' + name + '"';

	        if (!this.options.keepOpen) {
	            $(document).click(function (e) {
	                if ($(e.target)[0] === that.$choice[0] ||
	                    $(e.target).parents('.ms-choice')[0] === that.$choice[0]) {
	                    return;
	                }
	                if (($(e.target)[0] === that.$drop[0] ||
	                        $(e.target).parents('.ms-drop')[0] !== that.$drop[0] && e.target !== $el[0]) &&
	                    that.options.isOpen) {
	                    that.close();
	                }
	            });
	        }
	    }

	    MultipleSelect.prototype = {
	        constructor: MultipleSelect,

	        init: function () {
	            var that = this,
	                $ul = $('<ul></ul>');

	            this.$drop.html('');

	            if (this.options.filter) {
	                this.$drop.append([
	                    '<div class="ms-search">',
	                    '<input type="text" autocomplete="off" autocorrect="off" autocapitilize="off" spellcheck="false">',
	                    '</div>'].join('')
	                );
	            }

	            if (this.options.selectAll && !this.options.single) {
	                $ul.append([
	                    '<li class="ms-select-all">',
	                    '<label>',
	                    sprintf('<input type="checkbox" %s /> ', this.selectAllName),
	                    this.options.selectAllDelimiter[0],
	                    this.options.selectAllText,
	                    this.options.selectAllDelimiter[1],
	                    '</label>',
	                    '</li>'
	                ].join(''));
	            }

	            $.each(this.$el.children(), function (i, elm) {
	                $ul.append(that.optionToHtml(i, elm));
	            });
	            $ul.append(sprintf('<li class="ms-no-results">%s</li>', this.options.noMatchesFound));
	            this.$drop.append($ul);

	            this.$drop.find('ul').css('max-height', this.options.maxHeight + 'px');
	            this.$drop.find('.multiple').css('width', this.options.multipleWidth + 'px');

	            this.$searchInput = this.$drop.find('.ms-search input');
	            this.$selectAll = this.$drop.find('input[' + this.selectAllName + ']');
	            this.$selectGroups = this.$drop.find('input[' + this.selectGroupName + ']');
	            this.$selectItems = this.$drop.find('input[' + this.selectItemName + ']:enabled');
	            this.$disableItems = this.$drop.find('input[' + this.selectItemName + ']:disabled');
	            this.$noResults = this.$drop.find('.ms-no-results');

	            this.events();
	            this.updateSelectAll(true);
	            this.update(true);

	            if (this.options.isOpen) {
	                this.open();
	            }
	        },

	        optionToHtml: function (i, elm, group, groupDisabled) {
	            var that = this,
	                $elm = $(elm),
	                classes = $elm.attr('class') || '',
	                title = sprintf('title="%s"', $elm.attr('title')),
	                multiple = this.options.multiple ? 'multiple' : '',
	                disabled,
	                type = this.options.single ? 'radio' : 'checkbox';

	            if ($elm.is('option')) {
	                var value = $elm.val(),
	                    text = that.options.textTemplate($elm),
	                    selected = $elm.prop('selected'),
	                    style = sprintf('style="%s"', this.options.styler(value)),
	                    $el;

	                disabled = groupDisabled || $elm.prop('disabled');

	                $el = $([
	                    sprintf('<li class="%s %s" %s %s>', multiple, classes, title, style),
	                    sprintf('<label class="%s">', disabled ? 'disabled' : ''),
	                    sprintf('<input type="%s" %s%s%s%s>',
	                        type, this.selectItemName,
	                        selected ? ' checked="checked"' : '',
	                        disabled ? ' disabled="disabled"' : '',
	                        sprintf(' data-group="%s"', group)),
	                    sprintf('<span>%s</span>', text),
	                    '</label>',
	                    '</li>'
	                ].join(''));
	                $el.find('input').val(value);
	                return $el;
	            }
	            if ($elm.is('optgroup')) {
	                var label = that.options.labelTemplate($elm),
	                    $group = $('<div/>');

	                group = 'group_' + i;
	                disabled = $elm.prop('disabled');

	                $group.append([
	                    '<li class="group">',
	                    sprintf('<label class="optgroup %s" data-group="%s">', disabled ? 'disabled' : '', group),
	                    this.options.hideOptgroupCheckboxes || this.options.single ? '' :
	                        sprintf('<input type="checkbox" %s %s>',
	                            this.selectGroupName, disabled ? 'disabled="disabled"' : ''),
	                    label,
	                    '</label>',
	                    '</li>'
	                ].join(''));

	                $.each($elm.children(), function (i, elm) {
	                    $group.append(that.optionToHtml(i, elm, group, disabled));
	                });
	                return $group.html();
	            }
	        },

	        events: function () {
	            var that = this,
	                toggleOpen = function (e) {
	                    e.preventDefault();
	                    that[that.options.isOpen ? 'close' : 'open']();
	                };

	            if (this.$label) {
	                this.$label.off('click').on('click', function (e) {
	                    if (e.target.nodeName.toLowerCase() !== 'label' || e.target !== this) {
	                        return;
	                    }
	                    toggleOpen(e);
	                    if (!that.options.filter || !that.options.isOpen) {
	                        that.focus();
	                    }
	                    e.stopPropagation(); // Causes lost focus otherwise
	                });
	            }

	            this.$choice.off('click').on('click', toggleOpen)
	                .off('focus').on('focus', this.options.onFocus)
	                .off('blur').on('blur', this.options.onBlur);

	            this.$parent.off('keydown').on('keydown', function (e) {
	                switch (e.which) {
	                    case 27: // esc key
	                        that.close();
	                        that.$choice.focus();
	                        break;
	                }
	            });

	            this.$searchInput.off('keydown').on('keydown',function (e) {
	                // Ensure shift-tab causes lost focus from filter as with clicking away
	                if (e.keyCode === 9 && e.shiftKey) {
	                    that.close();
	                }
	            }).off('keyup').on('keyup', function (e) {
	                // enter or space
	                // Avoid selecting/deselecting if no choices made
	                if (that.options.filterAcceptOnEnter && (e.which === 13 || e.which == 32) && that.$searchInput.val()) {
	                    that.$selectAll.click();
	                    that.close();
	                    that.focus();
	                    return;
	                }
	                that.filter();
	            });

	            this.$selectAll.off('click').on('click', function () {
	                var checked = $(this).prop('checked'),
	                    $items = that.$selectItems.filter(':visible');

	                if ($items.length === that.$selectItems.length) {
	                    that[checked ? 'checkAll' : 'uncheckAll']();
	                } else { // when the filter option is true
	                    that.$selectGroups.prop('checked', checked);
	                    $items.prop('checked', checked);
	                    that.options[checked ? 'onCheckAll' : 'onUncheckAll']();
	                    that.update();
	                }
	            });
	            this.$selectGroups.off('click').on('click', function () {
	                var group = $(this).parent().attr('data-group'),
	                    $items = that.$selectItems.filter(':visible'),
	                    $children = $items.filter(sprintf('[data-group="%s"]', group)),
	                    checked = $children.length !== $children.filter(':checked').length;

	                $children.prop('checked', checked);
	                that.updateSelectAll();
	                that.update();
	                that.options.onOptgroupClick({
	                    label: $(this).parent().text(),
	                    checked: checked,
	                    children: $children.get(),
	                    instance: that
	                });
	            });
	            this.$selectItems.off('click').on('click', function () {
	                that.updateSelectAll();
	                that.update();
	                that.updateOptGroupSelect();
	                that.options.onClick({
	                    label: $(this).parent().text(),
	                    value: $(this).val(),
	                    checked: $(this).prop('checked'),
	                    instance: that
	                });

	                if (that.options.single && that.options.isOpen && !that.options.keepOpen) {
	                    that.close();
	                }

	                if (that.options.single) {
	                    var clickedVal = $(this).val();
	                    that.$selectItems.filter(function() {
	                        return $(this).val() !== clickedVal;
	                    }).each(function() {
	                        $(this).prop('checked', false);
	                    });
	                    that.update();
	                }
	            });
	        },

	        open: function () {
	            if (this.$choice.hasClass('disabled')) {
	                return;
	            }
	            this.options.isOpen = true;
	            this.$choice.find('>div').addClass('open');
	            this.$drop[this.animateMethod('show')]();

	            // fix filter bug: no results show
	            this.$selectAll.parent().show();
	            this.$noResults.hide();

	            // Fix #77: 'All selected' when no options
	            if (!this.$el.children().length) {
	                this.$selectAll.parent().hide();
	                this.$noResults.show();
	            }

	            if (this.options.container) {
	                var offset = this.$drop.offset();
	                this.$drop.appendTo($(this.options.container));
	                this.$drop.offset({
	                    top: offset.top,
	                    left: offset.left
	                });
	            }

	            if (this.options.filter) {
	                this.$searchInput.val('');
	                this.$searchInput.focus();
	                this.filter();
	            }
	            this.options.onOpen();
	        },

	        close: function () {
	            this.options.isOpen = false;
	            this.$choice.find('>div').removeClass('open');
	            this.$drop[this.animateMethod('hide')]();
	            if (this.options.container) {
	                this.$parent.append(this.$drop);
	                this.$drop.css({
	                    'top': 'auto',
	                    'left': 'auto'
	                });
	            }
	            this.options.onClose();
	        },

	        animateMethod: function (method) {
	            var methods = {
	                show: {
	                    fade: 'fadeIn',
	                    slide: 'slideDown'
	                },
	                hide: {
	                    fade: 'fadeOut',
	                    slide: 'slideUp'
	                }
	            };

	            return methods[method][this.options.animate] || method;
	        },

	        update: function (isInit) {
	            var selects = this.options.displayValues ? this.getSelects() : this.getSelects('text'),
	                $span = this.$choice.find('>span'),
	                sl = selects.length;

	            if (sl === 0) {
	                $span.addClass('placeholder').html(this.options.placeholder);
	            } else if (this.options.allSelected && sl === this.$selectItems.length + this.$disableItems.length) {
	                $span.removeClass('placeholder').html(this.options.allSelected);
	            } else if (this.options.ellipsis && sl > this.options.minimumCountSelected) {
	                $span.removeClass('placeholder').text(selects.slice(0, this.options.minimumCountSelected)
	                    .join(this.options.delimiter) + '...');
	            } else if (this.options.countSelected && sl > this.options.minimumCountSelected) {
	                $span.removeClass('placeholder').html(this.options.countSelected
	                    .replace('#', selects.length)
	                    .replace('%', this.$selectItems.length + this.$disableItems.length));
	            } else {
	                $span.removeClass('placeholder').text(selects.join(this.options.delimiter));
	            }

	            if (this.options.addTitle) {
	                $span.prop('title', this.getSelects('text'));
	            }

	            // set selects to select
	            this.$el.val(this.getSelects()).trigger('change');

	            // add selected class to selected li
	            this.$drop.find('li').removeClass('selected');
	            this.$drop.find('input:checked').each(function () {
	                $(this).parents('li').first().addClass('selected');
	            });

	            // trigger <select> change event
	            if (!isInit) {
	                this.$el.trigger('change');
	            }
	        },

	        updateSelectAll: function (isInit) {
	            var $items = this.$selectItems;

	            if (!isInit) {
	                $items = $items.filter(':visible');
	            }
	            this.$selectAll.prop('checked', $items.length &&
	                $items.length === $items.filter(':checked').length);
	            if (!isInit && this.$selectAll.prop('checked')) {
	                this.options.onCheckAll();
	            }
	        },

	        updateOptGroupSelect: function () {
	            var $items = this.$selectItems.filter(':visible');
	            $.each(this.$selectGroups, function (i, val) {
	                var group = $(val).parent().attr('data-group'),
	                    $children = $items.filter(sprintf('[data-group="%s"]', group));
	                $(val).prop('checked', $children.length &&
	                    $children.length === $children.filter(':checked').length);
	            });
	        },

	        //value or text, default: 'value'
	        getSelects: function (type) {
	            var that = this,
	                texts = [],
	                values = [];
	            this.$drop.find(sprintf('input[%s]:checked', this.selectItemName)).each(function () {
	                texts.push($(this).parents('li').first().text());
	                values.push($(this).val());
	            });

	            if (type === 'text' && this.$selectGroups.length) {
	                texts = [];
	                this.$selectGroups.each(function () {
	                    var html = [],
	                        text = $.trim($(this).parent().text()),
	                        group = $(this).parent().data('group'),
	                        $children = that.$drop.find(sprintf('[%s][data-group="%s"]', that.selectItemName, group)),
	                        $selected = $children.filter(':checked');

	                    if (!$selected.length) {
	                        return;
	                    }

	                    html.push('[');
	                    html.push(text);
	                    if ($children.length > $selected.length) {
	                        var list = [];
	                        $selected.each(function () {
	                            list.push($(this).parent().text());
	                        });
	                        html.push(': ' + list.join(', '));
	                    }
	                    html.push(']');
	                    texts.push(html.join(''));
	                });
	            }
	            return type === 'text' ? texts : values;
	        },

	        setSelects: function (values) {
	            var that = this;
	            this.$selectItems.prop('checked', false);
	            this.$disableItems.prop('checked', false);
	            $.each(values, function (i, value) {
	                that.$selectItems.filter(sprintf('[value="%s"]', value)).prop('checked', true);
	                that.$disableItems.filter(sprintf('[value="%s"]', value)).prop('checked', true);
	            });
	            this.$selectAll.prop('checked', this.$selectItems.length ===
	                this.$selectItems.filter(':checked').length + this.$disableItems.filter(':checked').length);

	            $.each(that.$selectGroups, function (i, val) {
	                var group = $(val).parent().attr('data-group'),
	                    $children = that.$selectItems.filter('[data-group="' + group + '"]');
	                $(val).prop('checked', $children.length &&
	                    $children.length === $children.filter(':checked').length);
	            });

	            this.update();
	        },

	        enable: function () {
	            this.$choice.removeClass('disabled');
	        },

	        disable: function () {
	            this.$choice.addClass('disabled');
	        },

	        checkAll: function () {
	            this.$selectItems.prop('checked', true);
	            this.$selectGroups.prop('checked', true);
	            this.$selectAll.prop('checked', true);
	            this.update();
	            this.options.onCheckAll();
	        },

	        uncheckAll: function () {
	            this.$selectItems.prop('checked', false);
	            this.$selectGroups.prop('checked', false);
	            this.$selectAll.prop('checked', false);
	            this.update();
	            this.options.onUncheckAll();
	        },

	        focus: function () {
	            this.$choice.focus();
	            this.options.onFocus();
	        },

	        blur: function () {
	            this.$choice.blur();
	            this.options.onBlur();
	        },

	        refresh: function () {
	            this.init();
	        },

	        filter: function () {
	            var that = this,
	                text = $.trim(this.$searchInput.val()).toLowerCase();

	            if (text.length === 0) {
	                this.$selectAll.parent().show();
	                this.$selectItems.parent().show();
	                this.$disableItems.parent().show();
	                this.$selectGroups.parent().show();
	                this.$noResults.hide();
	            } else {
	                this.$selectItems.each(function () {
	                    var $parent = $(this).parent();
	                    $parent[removeDiacritics($parent.text().toLowerCase()).indexOf(removeDiacritics(text)) < 0 ? 'hide' : 'show']();
	                });
	                this.$disableItems.parent().hide();
	                this.$selectGroups.each(function () {
	                    var $parent = $(this).parent();
	                    var group = $parent.attr('data-group'),
	                        $items = that.$selectItems.filter(':visible');
	                    $parent[$items.filter(sprintf('[data-group="%s"]', group)).length ? 'show' : 'hide']();
	                });

	                //Check if no matches found
	                if (this.$selectItems.parent().filter(':visible').length) {
	                    this.$selectAll.parent().show();
	                    this.$noResults.hide();
	                } else {
	                    this.$selectAll.parent().hide();
	                    this.$noResults.show();
	                }
	            }
	            this.updateOptGroupSelect();
	            this.updateSelectAll();
	            this.options.onFilter(text);
	        }
	    };

	    $.fn.multipleSelect = function () {
	        var option = arguments[0],
	            args = arguments,

	            value,
	            allowedMethods = [
	                'getSelects', 'setSelects',
	                'enable', 'disable',
	                'open', 'close',
	                'checkAll', 'uncheckAll',
	                'focus', 'blur',
	                'refresh', 'close'
	            ];

	        this.each(function () {
	            var $this = $(this),
	                data = $this.data('multipleSelect'),
	                options = $.extend({}, $.fn.multipleSelect.defaults,
	                    $this.data(), typeof option === 'object' && option);

	            if (!data) {
	                data = new MultipleSelect($this, options);
	                $this.data('multipleSelect', data);
	            }

	            if (typeof option === 'string') {
	                if ($.inArray(option, allowedMethods) < 0) {
	                    throw 'Unknown method: ' + option;
	                }
	                value = data[option](args[1]);
	            } else {
	                data.init();
	                if (args[1]) {
	                    value = data[args[1]].apply(data, [].slice.call(args, 2));
	                }
	            }
	        });

	        return typeof value !== 'undefined' ? value : this;
	    };

	    $.fn.multipleSelect.defaults = {
	        name: '',
	        isOpen: false,
	        placeholder: '',
	        selectAll: true,
	        selectAllDelimiter: ['[', ']'],
	        minimumCountSelected: 3,
	        ellipsis: false,
	        multiple: false,
	        multipleWidth: 80,
	        single: false,
	        filter: false,
	        width: undefined,
	        dropWidth: undefined,
	        maxHeight: 250,
	        container: null,
	        position: 'bottom',
	        keepOpen: false,
	        animate: 'none', // 'none', 'fade', 'slide'
	        displayValues: false,
	        delimiter: ', ',
	        addTitle: false,
	        filterAcceptOnEnter: false,
	        hideOptgroupCheckboxes: false,

	        selectAllText: 'Select all',
	        allSelected: 'All selected',
	        countSelected: '# of % selected',
	        noMatchesFound: 'No matches found',

	        styler: function () {
	            return false;
	        },
	        textTemplate: function ($elm) {
	            return $elm.html();
	        },
	        labelTemplate: function ($elm) {
	            return $elm.attr('label');
	        },

	        onOpen: function () {
	            return false;
	        },
	        onClose: function () {
	            return false;
	        },
	        onCheckAll: function () {
	            return false;
	        },
	        onUncheckAll: function () {
	            return false;
	        },
	        onFocus: function () {
	            return false;
	        },
	        onBlur: function () {
	            return false;
	        },
	        onOptgroupClick: function () {
	            return false;
	        },
	        onClick: function () {
	            return false;
	        },
	        onFilter: function () {
	            return false;
	        }
	    };
	})(jQuery);