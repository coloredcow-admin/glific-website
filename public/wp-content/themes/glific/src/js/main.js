jQuery(document).ready(function() {
	jQuery('.navbar-toggle').on('click', function(){
		if (jQuery(this).hasClass('navbar-toggle-cross')) {
			jQuery('.mobile-menu').removeClass('d-flex');
			jQuery('html, body').removeClass('overflow-hidden position-relative h-100p');
		} else {
			jQuery('.mobile-menu').addClass('d-flex');
			jQuery('html, body').addClass('overflow-hidden position-relative h-100p');
		}
		jQuery(this).toggleClass('navbar-toggle-cross');
	});
	
	jQuery('.single-video-container').on('click', function(){
		var target = jQuery(this).data('target');
		var videoTitle = jQuery(this).find('.video-title').text();
		var videoDuration = jQuery(this).find('.video-duration').text();
		jQuery('.selected-video-container .selected-video-title').html(videoTitle);
		jQuery('.selected-video-container .selected-video-duration').html(videoDuration);
		var url = 'https://www.youtube.com/embed/'+target;
		jQuery('.single-video-block iframe').attr('src', url);
	});

	jQuery('.single-video').on('click', function(){
		var target = jQuery(this).data('target');
		jQuery('.video-content-block').removeClass('d-flex').addClass('d-none');
		jQuery(target).addClass('d-flex').removeClass('d-none');
	});

	jQuery('.show-more-blogs').on('click', show_more_blogs);
});

blog_offset = 9;
function show_more_blogs(event) {
	event.preventDefault();
	var show_more_link = jQuery(this);
	show_more_link.addClass('link-not-active');
	show_more_link.text('Loading...');
	jQuery.ajax({
		url: ajax_object.ajaxurl,
		method: 'POST',
		data: {
			'offset' : blog_offset,
			'action' : 'show_more_blogs'
		},
		success: function(res) {
			jQuery('.glific-blogs-container').append(res.data);
			blog_offset += 9;
			if (ajax_object.total_blog_count <= jQuery('.glific-blog').length ) {
				show_more_link.hide();
			}
			show_more_link.text('Show more');
		},
		error: function(res) {
			console.log('there is an error');
		},
		complete: function() {
			show_more_link.removeClass('link-not-active');
		}
	});
}
