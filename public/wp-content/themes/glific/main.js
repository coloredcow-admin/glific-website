/*! ColoredCow 2020-09-23 */

jQuery(document).ready(function(){jQuery(".navbar-toggle").on("click",function(){jQuery(this).hasClass("navbar-toggle-cross")?(jQuery(".mobile-menu").removeClass("d-flex"),jQuery("html, body").removeClass("overflow-hidden position-relative h-100p")):(jQuery(".mobile-menu").addClass("d-flex"),jQuery("html, body").addClass("overflow-hidden position-relative h-100p")),jQuery(this).toggleClass("navbar-toggle-cross")}),jQuery(".single-video-container").on("click",function(){var e=jQuery(this).data("target"),t=jQuery(this).find(".video-title").text(),o=jQuery(this).find(".video-duration").text();jQuery(".selected-video-container .selected-video-title").html(t),jQuery(".selected-video-container .selected-video-duration").html(o);var i="https://www.youtube.com/embed/"+e;jQuery(".single-video-block iframe").attr("src",i)}),jQuery(".single-video").on("click",function(){var e=jQuery(this).data("target");jQuery(".video-content-block").removeClass("d-flex").addClass("d-none"),jQuery(e).addClass("d-flex").removeClass("d-none")})});