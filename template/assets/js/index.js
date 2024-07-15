// var path = document.querySelector(".index-hero-animate-path");
// var length = path.getTotalLength();

// OVERLAY FORM
jQuery(function ($) {
  $("html").addClass("overflow-hidden");

  if ($(".landing-image-close")) {
    $(".landing-image-close").click(function () {
      $(".landing-image").fadeOut();
      $(".index-overlay-form").fadeIn().css("display", "flex");
    });
  }

  if ($(".index-overlay-form-close")) {
    $(".index-overlay-form-close").click(function () {
      $(".index-overlay-form").fadeOut();
      $(".theme-gradient-overlay").fadeOut();
      $("html").removeClass("overflow-hidden");
    });
  }
});

// INDEX HERO ANIMATE PATH
jQuery(function ($) {
  if ($(".index-hero-animate-path").length) {
    $(".index-hero-animate-path").each(function () {
      var $path = $(this);
      var animateWrapper = $path.closest(".animate-path-wrapper");
      var pin = animateWrapper.find(".hero-animate-pin");
      var heroPin = $("#index-hero-pin");
      var heroVector = $("#index-hero-vector");

      const path = $path;
      const ratioInView = 1 / 2;
      function inViewCallback() {
        if (!$("html").hasClass("overflow-hidden")) {
          path.addClass("in-view");
          pin.addClass("in-view");
        }
      }
      function outOfViewCallback() {}

      //play animation on finish navigating to hero
      var timer = setInterval(function () {
        if (!$("html").hasClass("overflow-hidden")) {
          path.addClass("in-view");
          pin.addClass("in-view");
          heroPin.addClass("bounce fadeInBounce");
          heroVector.addClass("bounce fadeInBounceTranslateX");
          clearInterval(timer);
        }
      }, 100);

      $(window).on("scroll resize", () => {
        checkIfInView(ratioInView, path, inViewCallback, outOfViewCallback);
      });

      checkIfInView(ratioInView, path, inViewCallback, outOfViewCallback);
    });
  }
});

// POSTITION TEXT TO TOP FOR IMAGE RATIO > 1
jQuery(function ($) {
  if ($(".masonry-grid-item .item-image img")) {
    $(".masonry-grid-item .item-image img").each(function () {
      var $img = $(this);

      $img.on("load", function () {
        var width = $img.width();
        var height = $img.height();
        var ratio = width / height;

        if (ratio > 0.9) {
          $img.closest(".masonry-grid-item").find(".item-text").addClass("top");
        }
      });

      if ($img[0].complete) {
        $img.trigger("load");
      }
    });
  }
});

// ANIMATE PIN INFINITELY WHEN HOVERED AND BACK TO 0 SMOOTHLY WHEN UNHOVERED
jQuery(function ($) {
  if ($(".masonry-grid .masonry-grid-item").length) {
    $(".masonry-grid .masonry-grid-item").each(function () {
      var _this = $(this);
      var itemPin = _this.find(".item-pin > img");
      var isHovered = false;
      var isAnimating = false;
      let yPixels = 0;
      let speed = 0.5;
      let direction = -1;

      function animate() {
        if (yPixels <= -20) {
          direction = 1;
        }

        if (yPixels >= 0) {
          direction = -1;
        }

        yPixels += speed * direction;

        itemPin.css("transform", `translateY(${yPixels}px)`);

        if (isHovered) {
          itemPin.css("transition", "transform ease");
          animationFrame = requestAnimationFrame(animate);
        } else {
          itemPin.css("transform", "translateY(0)");
          itemPin.css("transition", "transform 0.8s ease-in-out");

          yPixels = 0;
        }
      }

      _this.hover(
        function () {
          isHovered = true;
          if (!isAnimating) {
            animationFrame = requestAnimationFrame(animate);
          }
        },
        function () {
          isHovered = false;
        }
      );
    });
  }
});
