//map jquery
(function ($) {
  // USE STRICT
  "use strict";

  $(document).ready(function () {
    var selector_map = $("#google_map");
    var img_pin = selector_map.attr("data-pin");
    var data_map_x = selector_map.attr("data-map-x");
    var data_map_y = selector_map.attr("data-map-y");
    var scrollwhell = selector_map.attr("data-scrollwhell");
    var draggable = selector_map.attr("data-draggable");

    if (img_pin == null) {
      img_pin = "images/icons/location.png";
    }
    if (data_map_x == null || data_map_y == null) {
      data_map_x = 40.007749;
      data_map_y = -93.266572;
    }
    if (scrollwhell == null) {
      scrollwhell = 0;
    }

    if (draggable == null) {
      draggable = 0;
    }

    var style = [
      {
        featureType: "all",
        elementType: "labels.text.fill",
        stylers: [
          {
            saturation: 36
          },
          {
            color: "#000000"
          },
          {
            lightness: 40
          }
        ]
      },
      {
        featureType: "all",
        elementType: "labels.text.stroke",
        stylers: [
          {
            visibility: "on"
          },
          {
            color: "#000000"
          },
          {
            lightness: 16
          }
        ]
      },
      {
        featureType: "all",
        elementType: "labels.icon",
        stylers: [
          {
            visibility: "off"
          }
        ]
      },
      {
        featureType: "administrative",
        elementType: "geometry.fill",
        stylers: [
          {
            color: "#000000"
          },
          {
            lightness: 20
          }
        ]
      },
      {
        featureType: "administrative",
        elementType: "geometry.stroke",
        stylers: [
          {
            color: "#000000"
          },
          {
            lightness: 17
          },
          {
            weight: 1.2
          }
        ]
      },
      {
        featureType: "landscape",
        elementType: "geometry",
        stylers: [
          {
            color: "#000000"
          },
          {
            lightness: 20
          }
        ]
      },
      {
        featureType: "poi",
        elementType: "geometry",
        stylers: [
          {
            color: "#000000"
          },
          {
            lightness: 21
          }
        ]
      },
      {
        featureType: "road.highway",
        elementType: "geometry.fill",
        stylers: [
          {
            color: "#000000"
          },
          {
            lightness: 17
          }
        ]
      },
      {
        featureType: "road.highway",
        elementType: "geometry.stroke",
        stylers: [
          {
            color: "#000000"
          },
          {
            lightness: 29
          },
          {
            weight: 0.2
          }
        ]
      },
      {
        featureType: "road.arterial",
        elementType: "geometry",
        stylers: [
          {
            color: "#000000"
          },
          {
            lightness: 18
          }
        ]
      },
      {
        featureType: "road.local",
        elementType: "geometry",
        stylers: [
          {
            color: "#000000"
          },
          {
            lightness: 16
          }
        ]
      },
      {
        featureType: "transit",
        elementType: "geometry",
        stylers: [
          {
            color: "#000000"
          },
          {
            lightness: 19
          }
        ]
      },
      {
        featureType: "water",
        elementType: "geometry",
        stylers: [
          {
            color: "#000000"
          },
          {
            lightness: 17
          }
        ]
      }
    ];

    var latitude = data_map_x,
      longitude = data_map_y,
      map_zoom = 14;

    var locations = [["Welcome", latitude, longitude, 2]];

    if (selector_map !== undefined) {
      var map = new google.maps.Map(document.getElementById("google_map"), {
        zoom: 13,
        scrollwheel: false,
        zoomControl: false,
        disableDoubleClickZoom: true,
        navigationControl: true,
        mapTypeControl: false,
        scaleControl: false,
        draggable: draggable,
        styles: style,
        center: new google.maps.LatLng(latitude, longitude),
        mapTypeId: google.maps.MapTypeId.ROADMAP
      });
    }

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map,
        icon: img_pin
      });

      google.maps.event.addListener(
        marker,
        "click",
        (function (marker, i) {
          return function () {
            infowindow.setContent(locations[i][0]);
            infowindow.open(map, marker);
          };
        })(marker, i)
      );
    }
  });
})(jQuery);

// Contact Section jquery
(function ($) {
  "use strict";

  /*==================================================================
    [ Focus Contact2 ]*/
  $(".input100").each(function () {
    $(this).on("blur", function () {
      if (
        $(this)
          .val()
          .trim() != ""
      ) {
        $(this).addClass("has-val");
      } else {
        $(this).removeClass("has-val");
      }
    });
  });

  /*==================================================================
    [ Validate ]*/
  var input = $(".validate-input .input100");

  $(".validate-form").on("submit", function () {
    var check = true;

    for (var i = 0; i < input.length; i++) {
      if (validate(input[i]) == false) {
        showValidate(input[i]);
        check = false;
      }
    }

    return check;
  });

  $(".validate-form .input100").each(function () {
    $(this).focus(function () {
      hideValidate(this);
    });
  });

  function validate(input) {
    if ($(input).attr("type") == "email" || $(input).attr("name") == "email") {
      if (
        $(input)
          .val()
          .trim()
          .match(
            /^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/
          ) == null
      ) {
        return false;
      }
    } else {
      if (
        $(input)
          .val()
          .trim() == ""
      ) {
        return false;
      }
    }
  }

  function showValidate(input) {
    var thisAlert = $(input).parent();

    $(thisAlert).addClass("alert-validate");
  }

  function hideValidate(input) {
    var thisAlert = $(input).parent();

    $(thisAlert).removeClass("alert-validate");
  }
})(jQuery);

//pop up contact card

function openBox() {
  var j = jQuery; //Prevent jQuery conflicts by using J

  var overlayCls = ".overlay"; //Overlay class

  j(overlayCls).fadeToggle(); //Fadein

  j(".close").click(function () {
    j(overlayCls).fadeOut(); //Fade out when closebutton is clicked
  });

  j(document).keyup(function (e) {
    if (e.keyCode == 27) {
      // Close lightbox when escape key is clicked
      j(overlayCls).fadeOut();
    }
  });
}


// HEADER JAVASCRIPT 

//text changing
! function ($) {

  "use strict";

  var Typed = function (el, options) {

    // chosen element to manipulate text
    this.el = $(el);

    // options
    this.options = $.extend({}, $.fn.typed.defaults, options);

    // attribute to type into
    this.isInput = this.el.is('input');
    this.attr = this.options.attr;

    // show cursor
    this.showCursor = this.isInput ? false : this.options.showCursor;

    // text content of element
    this.elContent = this.attr ? this.el.attr(this.attr) : this.el.text()

    // html or plain text
    this.contentType = this.options.contentType;

    // typing speed
    this.typeSpeed = this.options.typeSpeed;

    // add a delay before typing starts
    this.startDelay = this.options.startDelay;

    // backspacing speed
    this.backSpeed = this.options.backSpeed;

    // amount of time to wait before backspacing
    this.backDelay = this.options.backDelay;

    // div containing strings
    this.stringsElement = this.options.stringsElement;

    // input strings of text
    this.strings = this.options.strings;

    // character number position of current string
    this.strPos = 0;

    // current array position
    this.arrayPos = 0;

    // number to stop backspacing on.
    // default 0, can change depending on how many chars
    // you want to remove at the time
    this.stopNum = 0;

    // Looping logic
    this.loop = this.options.loop;
    this.loopCount = this.options.loopCount;
    this.curLoop = 0;

    // for stopping
    this.stop = false;

    // custom cursor
    this.cursorChar = this.options.cursorChar;

    // shuffle the strings
    this.shuffle = this.options.shuffle;
    // the order of strings
    this.sequence = [];

    // All systems go!
    this.build();
  };

  Typed.prototype = {

    constructor: Typed

    ,
    init: function () {
      // begin the loop w/ first current string (global self.strings)
      // current string will be passed as an argument each time after this
      var self = this;
      self.timeout = setTimeout(function () {
        for (var i = 0; i < self.strings.length; ++i) self.sequence[i] = i;

        // shuffle the array if true
        if (self.shuffle) self.sequence = self.shuffleArray(self.sequence);

        // Start typing
        self.typewrite(self.strings[self.sequence[self.arrayPos]], self.strPos);
      }, self.startDelay);
    }

    ,
    build: function () {
      var self = this;
      // Insert cursor
      if (this.showCursor === true) {
        this.cursor = $("<span class=\"typed-cursor\">" + this.cursorChar + "</span>");
        this.el.after(this.cursor);
      }
      if (this.stringsElement) {
        self.strings = [];
        this.stringsElement.hide();
        var strings = this.stringsElement.find('p');
        $.each(strings, function (key, value) {
          self.strings.push($(value).html());
        });
      }
      this.init();
    }

    // pass current string state to each function, types 1 char per call
    ,
    typewrite: function (curString, curStrPos) {
      // exit when stopped
      if (this.stop === true) {
        return;
      }

      // varying values for setTimeout during typing
      // can't be global since number changes each time loop is executed
      var humanize = Math.round(Math.random() * (100 - 30)) + this.typeSpeed;
      var self = this;

      // ------------- optional ------------- //
      // backpaces a certain string faster
      // ------------------------------------ //
      // if (self.arrayPos == 1){
      //  self.backDelay = 50;
      // }
      // else{ self.backDelay = 500; }

      // contain typing function in a timeout humanize'd delay
      self.timeout = setTimeout(function () {
        // check for an escape character before a pause value
        // format: \^\d+ .. eg: ^1000 .. should be able to print the ^ too using ^^
        // single ^ are removed from string
        var charPause = 0;
        var substr = curString.substr(curStrPos);
        if (substr.charAt(0) === '^') {
          var skip = 1; // skip atleast 1
          if (/^\^\d+/.test(substr)) {
            substr = /\d+/.exec(substr)[0];
            skip += substr.length;
            charPause = parseInt(substr);
          }

          // strip out the escape character and pause value so they're not printed
          curString = curString.substring(0, curStrPos) + curString.substring(curStrPos + skip);
        }

        if (self.contentType === 'html') {
          // skip over html tags while typing
          var curChar = curString.substr(curStrPos).charAt(0)
          if (curChar === '<' || curChar === '&') {
            var tag = '';
            var endTag = '';
            if (curChar === '<') {
              endTag = '>'
            } else {
              endTag = ';'
            }
            while (curString.substr(curStrPos).charAt(0) !== endTag) {
              tag += curString.substr(curStrPos).charAt(0);
              curStrPos++;
            }
            curStrPos++;
            tag += endTag;
          }
        }

        // timeout for any pause after a character
        self.timeout = setTimeout(function () {
          if (curStrPos === curString.length) {
            // fires callback function
            self.options.onStringTyped(self.arrayPos);

            // is this the final string
            if (self.arrayPos === self.strings.length - 1) {
              // animation that occurs on the last typed string
              self.options.callback();

              self.curLoop++;

              // quit if we wont loop back
              if (self.loop === false || self.curLoop === self.loopCount)
                return;
            }

            self.timeout = setTimeout(function () {
              self.backspace(curString, curStrPos);
            }, self.backDelay);
          } else {

            /* call before functions if applicable */
            if (curStrPos === 0)
              self.options.preStringTyped(self.arrayPos);

            // start typing each new char into existing string
            // curString: arg, self.el.html: original text inside element
            var nextString = curString.substr(0, curStrPos + 1);
            if (self.attr) {
              self.el.attr(self.attr, nextString);
            } else {
              if (self.isInput) {
                self.el.val(nextString);
              } else if (self.contentType === 'html') {
                self.el.html(nextString);
              } else {
                self.el.text(nextString);
              }
            }

            // add characters one by one
            curStrPos++;
            // loop the function
            self.typewrite(curString, curStrPos);
          }
          // end of character pause
        }, charPause);

        // humanized value for typing
      }, humanize);

    }

    ,
    backspace: function (curString, curStrPos) {
      // exit when stopped
      if (this.stop === true) {
        return;
      }

      // varying values for setTimeout during typing
      // can't be global since number changes each time loop is executed
      var humanize = Math.round(Math.random() * (100 - 30)) + this.backSpeed;
      var self = this;

      self.timeout = setTimeout(function () {

        // ----- this part is optional ----- //
        // check string array position
        // on the first string, only delete one word
        // the stopNum actually represents the amount of chars to
        // keep in the current string. In my case it's 14.
        // if (self.arrayPos == 1){
        //  self.stopNum = 14;
        // }
        //every other time, delete the whole typed string
        // else{
        //  self.stopNum = 0;
        // }

        if (self.contentType === 'html') {
          // skip over html tags while backspacing
          if (curString.substr(curStrPos).charAt(0) === '>') {
            var tag = '';
            while (curString.substr(curStrPos).charAt(0) !== '<') {
              tag -= curString.substr(curStrPos).charAt(0);
              curStrPos--;
            }
            curStrPos--;
            tag += '<';
          }
        }

        // ----- continue important stuff ----- //
        // replace text with base text + typed characters
        var nextString = curString.substr(0, curStrPos);
        if (self.attr) {
          self.el.attr(self.attr, nextString);
        } else {
          if (self.isInput) {
            self.el.val(nextString);
          } else if (self.contentType === 'html') {
            self.el.html(nextString);
          } else {
            self.el.text(nextString);
          }
        }

        // if the number (id of character in current string) is
        // less than the stop number, keep going
        if (curStrPos > self.stopNum) {
          // subtract characters one by one
          curStrPos--;
          // loop the function
          self.backspace(curString, curStrPos);
        }
        // if the stop number has been reached, increase
        // array position to next string
        else if (curStrPos <= self.stopNum) {
          self.arrayPos++;

          if (self.arrayPos === self.strings.length) {
            self.arrayPos = 0;

            // Shuffle sequence again
            if (self.shuffle) self.sequence = self.shuffleArray(self.sequence);

            self.init();
          } else
            self.typewrite(self.strings[self.sequence[self.arrayPos]], curStrPos);
        }

        // humanized value for typing
      }, humanize);

    }
    /**
     * Shuffles the numbers in the given array.
     * @param {Array} array
     * @returns {Array}
     */
    , shuffleArray: function (array) {
      var tmp, current, top = array.length;
      if (top) while (--top) {
        current = Math.floor(Math.random() * (top + 1));
        tmp = array[current];
        array[current] = array[top];
        array[top] = tmp;
      }
      return array;
    }

    // Start & Stop currently not working

    // , stop: function() {
    //     var self = this;

    //     self.stop = true;
    //     clearInterval(self.timeout);
    // }

    // , start: function() {
    //     var self = this;
    //     if(self.stop === false)
    //        return;

    //     this.stop = false;
    //     this.init();
    // }

    // Reset and rebuild the element
    ,
    reset: function () {
      var self = this;
      clearInterval(self.timeout);
      var id = this.el.attr('id');
      this.el.after('<span id="' + id + '"/>')
      this.el.remove();
      if (typeof this.cursor !== 'undefined') {
        this.cursor.remove();
      }
      // Send the callback
      self.options.resetCallback();
    }

  };

  $.fn.typed = function (option) {
    return this.each(function () {
      var $this = $(this),
        data = $this.data('typed'),
        options = typeof option == 'object' && option;
      if (!data) $this.data('typed', (data = new Typed(this, options)));
      if (typeof option == 'string') data[option]();
    });
  };

  $.fn.typed.defaults = {
    strings: ["These are the default values...", "You know what you should do?", "Use your own!", "Have a great day!"],
    stringsElement: null,
    // typing speed
    typeSpeed: 0,
    // time before typing starts
    startDelay: 0,
    // backspacing speed
    backSpeed: 0,
    // shuffle the strings
    shuffle: false,
    // time before backspacing
    backDelay: 500,
    // loop
    loop: false,
    // false = infinite
    loopCount: false,
    // show cursor
    showCursor: true,
    // character for cursor
    cursorChar: "|",
    // attribute to type (null == text)
    attr: null,
    // either html or text
    contentType: 'html',
    // call when done callback function
    callback: function () { },
    // starting callback function before each string
    preStringTyped: function () { },
    //callback for every typed string
    onStringTyped: function () { },
    // callback for reset
    resetCallback: function () { }
  };


}(window.jQuery);

$("document").ready(function () {
  handleShowHideSidebar();
  handleEscKey();
  handleSideBarClick();
  handleTyping();
});

function handleShowHideSidebar() {
  var $menuButton = $("#menu-button i"),
    show = "animated slideInLeft",
    hide = "animated slideOutLeft";

  $menuButton.on("click", function () {
    var $sideBar = $("#sidebar");

    if ($sideBar.hasClass("slideInLeft")) {
      $sideBar
        .removeClass(show)
        .addClass(hide)
        .removeClass("hidden");
    } else {
      $sideBar
        .removeClass(hide)
        .addClass(show)
        .removeClass("hidden");
    }
  });
}

function handleSideBarClick() {
  $("#sidebar li a").on("click", function () {
    var href = $(this).attr("href");
    $("html, body").animate({
      scrollTop: $(href).offset().top
    }, 600);
    $("#sidebar")
      .removeClass("animated slideInLeft")
      .addClass("animated slideOutLeft");
    return false;
  });
}

function handleEscKey() {
  $(document).on("keyup", function (e) {
    if (e.keyCode === 27) {
      var href = $(this).attr("href");
      $("html, body").animate({
        scrollTop: $(href).offset().top
      }, 600);
      $("#sidebar")
        .removeClass("animated slideInLeft")
        .addClass("animated slideOutLeft");
      return false;
    }
  });
}

function handleTyping(arr) {
  $(".element").typed({
    strings: arr,
    typeSpeed: 50,
    starDelay: 200,
    backDelay: 600,
    loop: true,
    showCursor: true,
    cursorChar: "|"
  });
}

const arr = ["Rent Clean Cars", "Alternative cars in case of breakdowns and accidents", "Different Types Of Cars"]
handleTyping(arr);

//nav script



