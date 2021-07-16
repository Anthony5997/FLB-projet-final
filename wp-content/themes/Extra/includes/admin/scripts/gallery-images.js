/*! This minified app bundle contains open source software from several third party developers. Please review CREDITS.md in the root directory or LICENSE.md in the current directory for complete licensing, copyright and patent information. This bundle.js file and the included code may not be redistributed without the attributions listed in LICENSE.md, including associate copyright notices and licensing information. */
!function(t){var e={};function n(r){if(e[r])return e[r].exports;var i=e[r]={i:r,l:!1,exports:{}};return t[r].call(i.exports,i,i.exports,n),i.l=!0,i.exports}n.m=t,n.c=e,n.d=function(t,e,r){n.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:r})},n.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},n.t=function(t,e){if(1&e&&(t=n(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var r=Object.create(null);if(n.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var i in t)n.d(r,i,function(e){return t[e]}.bind(null,i));return r},n.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return n.d(e,"a",e),e},n.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},n.p="",n(n.s=1)}([,function(t,e){var n;(n=jQuery)((function(){var t,e=n("#et_gallery_images"),r=n("#et_gallery_images_ids");function i(){var t=[];e.find("li.gallery_image").each((function(){t.push(n(this).data("id"))})),t=t.join(","),r.val(t)}function a(){e.sortable({items:".gallery_image",cursor:"move",forcePlaceholderSize:!0,update:function(){i()}})}a(),e.on("click","span.delete",(function(t){var e=n(this).closest("li.gallery_image");t.preventDefault(),e.slideUp("fast",(function(){e.remove(),i()}))})),n("#et_gallery_add_images").on("click",(function(r){var l=n(this);r.preventDefault(),void 0===t?((t=wp.media.frames.gallery_images=wp.media({title:l.data("title"),button:{text:l.data("title")},states:[new wp.media.controller.Library({title:l.data("title"),multiple:!0})]})).open(),t.on("select",(function(){t.state().get("selection").each((function(t){var n,r;t.has("id")&&(r=(n=t.get("sizes")).hasOwnProperty("thumbnail")?n.thumbnail.url:n.full.url,e.append('<li class="gallery_image" data-id="'+t.get("id")+'">\t\t\t\t\t\t\t\t<span class="delete">-</span>\t\t\t\t\t\t\t\t<img src="'+r+'" />\t\t\t\t\t\t\t</li>'))})),i()})),a()):t.open()}))}))}]);