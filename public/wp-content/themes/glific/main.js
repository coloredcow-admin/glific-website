/*! ColoredCow 2020-09-27 */

function show_more_blogs(e){e.preventDefault();var o=jQuery(this);o.addClass("link-not-active"),o.text("Loading..."),jQuery.ajax({url:PARAMS.ajaxurl,method:"POST",data:{offset:blog_offset,action:"show_more_blogs"},success:function(e){jQuery(".glific-blogs-container").append(e.data),blog_offset+=9,ajax_object.total_blog_count<=jQuery(".glific-blog").length&&o.hide(),o.text("Show more")},error:function(e){console.log("there is an error")},complete:function(){o.removeClass("link-not-active")}})}jQuery(document).ready(function(){jQuery(".navbar-toggle").on("click",function(){jQuery(this).hasClass("navbar-toggle-cross")?(jQuery(".mobile-menu").removeClass("d-flex"),jQuery("html, body").removeClass("overflow-hidden position-relative h-100p")):(jQuery(".mobile-menu").addClass("d-flex"),jQuery("html, body").addClass("overflow-hidden position-relative h-100p")),jQuery(this).toggleClass("navbar-toggle-cross")}),jQuery(".single-video-container").on("click",function(){var e=jQuery(this).data("target"),o=jQuery(this).find(".video-title").text(),t=jQuery(this).find(".video-duration").text();jQuery(".selected-video-container .selected-video-title").html(o),jQuery(".selected-video-container .selected-video-duration").html(t);var i="https://www.youtube.com/embed/"+e;jQuery(".single-video-block iframe").attr("src",i)}),jQuery(".single-video").on("click",function(){var e=jQuery(this).data("target");jQuery(".video-content-block").removeClass("d-flex").addClass("d-none"),jQuery(e).addClass("d-flex").removeClass("d-none")}),jQuery(".desktop-menu .menu-item-has-children").hover(function(){jQuery(this).find(".sub-menu").show(),jQuery(this).find("a").addClass("open")},function(){jQuery(this).find(".sub-menu").hide(),jQuery(this).find("a").removeClass("open")}),jQuery(".mobile-primary-menu > li").each(function(){jQuery(this).hasClass("menu-item-has-children")&&jQuery(">a",this).after('<span class="mt-0 text-white-80 position-absolute c-pointer glific-menu-dropdown"></span>')}),jQuery(".mobile-primary-menu").on("click","li.menu-item-has-children>span",function(){jQuery(this).parent().find(".sub-menu").toggleClass("d-block")})}),jQuery(".show-more-blogs").on("click",show_more_blogs),blog_offset=9;