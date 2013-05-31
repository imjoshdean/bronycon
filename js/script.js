(function($){
  $(function() {
    $('li.children, li.children ul').hover(function() {
      $(this).children('ul').show();
    }, function() {
      $(this).children('ul').hide();
    });

    $('area').each(function() {
      $(this).qtip({
        content: {
          text: $(this).data('description'),
          title: {
            text: $(this).data('title'),
            button: true
          }
        },
        style: {
          classes: 'qtip-blue qtip-rounded'
        },
        position: {
          my: 'left center',
          at: 'right center',
          viewport: $('.vendors')
        },
        show: 'click',
        hide: 'unfocus'
      });
    });

    $('.panel').each(function() {
      var $this = $(this),
        description = $this.data('start') + ' - ' + $this.data('end') + ' <span style="float:right;">@' + $this.data('track') + '</span><br/><br/><em>' + $this.data('description') + '</em>';

      $this.qtip({
        content: {
          text: description,
          title: {
            text: $this.text(),
            button: true
          }
        },
        position: {
            my: 'center', // ...at the center of the viewport
            at: 'center',
            target: $(window)
        },
        show: {
          event: 'click', // Show it on click...
          solo: true, // ...and hide all other tooltips...
          modal: true // ...and make it modal
        },
        hide: 'unfocus',
        style: {
          classes: 'qtip-blue qtip-panel qtip-rounded'
        }
      });
    });

    $('.rotating-banner').bronyconRotator();
  });
})(jQuery)