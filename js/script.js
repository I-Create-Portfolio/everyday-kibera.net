$(function () {
    'use strict';
    // --------------------------------------------------------------------
    // PreLoader
    // --------------------------------------------------------------------
    (function () {
        $('#preloader').delay(200).fadeOut('slow');
    }());
    // --------------------------------------------------------------------
    // One Page Navigation
    // --------------------------------------------------------------------
    (function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() >= 50) {
                $('nav.navbar').addClass('sticky-nav');
            }
            else {
                $('nav.navbar').removeClass('sticky-nav');
            }
        });
    }());
    // --------------------------------------------------------------------
    // jQuery for page scrolling feature - requires jQuery Easing plugin
    // --------------------------------------------------------------------
    (function () {
        $('a.page-scroll').on('click', function (e) {
            e.preventDefault();
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top
            }, 1500, 'easeInOutExpo');
        });
    }());
    // -------------------------------------------------------------
    // mobile menu
    // -------------------------------------------------------------
    (function () {
        $('button.navbar-toggle').ucOffCanvasMenu({
            documentWrapper: '#main-wrapper'
            , contentWrapper: '.content-wrapper'
            , position: 'uc-offcanvas-left', // class name
            // opener         : 'st-menu-open',            // class name
            effect: 'slide-along', // class name
            closeButton: '#uc-mobile-menu-close-btn'
            , menuWrapper: '.uc-mobile-menu', // class name below-pusher
            documentPusher: '.uc-mobile-menu-pusher'
        });
    }());
    // -------------------------------------------------------------
    // top scrolling
    // -------------------------------------------------------------
    (function () {
        var offset = 220;
        var duration = 500;
        jQuery(window).scroll(function () {
            if (jQuery(this).scrollTop() > offset) {
                jQuery('.crunchify-top').fadeIn(duration);
            }
            else {
                jQuery('.crunchify-top').fadeOut(duration);
            }
        });
        jQuery('.crunchify-top').click(function (event) {
            event.preventDefault();
            jQuery('html, body').animate({
                scrollTop: 0
            }, duration);
            return false;
        });
    }());
    // --------------------------------------------------------------------
    // Search
    // --------------------------------------------------------------------
    $("#search-button, #search-icon").click(function (e) {
        e.preventDefault();
        $("#search-button, #search-form").toggle();
    });
    // --------------------------------------------------------------------
    // Carousel slider for blog page
    // --------------------------------------------------------------------
    $("#feature-news-carousel").owlCarousel({
        loop: true
        , dots: false
        , items: 1
        , autoplay: true
        , singleItem: true
            // "singleItem:true" is a shortcut for:
            // items : 1,
            // itemsDesktop : false,
            // itemsDesktopSmall : false,
            // itemsTablet: false,
            // itemsMobile : false
    });
});
// JQuery end
$(document).on('click', '.m-menu .dropdown-menu', function (e) {
    e.stopPropagation()
})



var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}


 let likes = 0;
      $(document).ready(function () {
        // ajax to get current likes
        // let likes from server are 10
        // assign the current likes to variable
        likes = 0;
        setLikes(likes);
      });
      

      
      $("body").on("click", ".likeBtn", function () {
        // ajax to post a current likes
        // in success add increment to likes
        likes++;
        setLikes(likes);
      });


      function setLikes(count) {
        $(".totalLikes").text(count);
      }


      function openNav() {
        document.getElementById("mySidebar").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
      }
      
      function closeNav() {
        document.getElementById("mySidebar").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
      }



//* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
} 


const slides = document.getElementById("slides");
const prev = document.getElementById("prev");
const next = document.getElementById("next");
const items = document.querySelectorAll(".item");
const indicators = document.getElementById("indicators");

let currentIndex = 0;

function createIndicators() {
  items.forEach((_, index) => {
    const indicator = document.createElement("div");
    indicator.classList.add("indicator");
    if (index === 0) indicator.classList.add("active");
    indicator.addEventListener("click", () => {
      currentIndex = index;
      updateSlide();
    });
    indicators.appendChild(indicator);
  });
}

function updateIndicators() {
  document.querySelectorAll(".indicator").forEach((indicator, index) => {
    indicator.classList.toggle("active", index === currentIndex);
  });
}

function updateSlide() {
  const offset = currentIndex * -100;
  slides.style.transform = `translateX(${offset}%)`;
  updateIndicators();
}

prev.addEventListener("click", () => {
  currentIndex = currentIndex === 0 ? items.length - 1 : currentIndex - 1;
  updateSlide();
});

next.addEventListener("click", () => {
  currentIndex = currentIndex === items.length - 1 ? 0 : currentIndex + 1;
  updateSlide();
});

createIndicators();





let currentSong = 0,
  active_source = null,
  isPlaying = false,
  buffers = {},
  context = new (window.AudioContext || window.webkitAudioContext)(),
  analyser = context.createAnalyser(),
  nowPlaying = [
    "Drug Church",
    "Blood Incantation",
    "The Chisel",
    "Prison Affair",
    "Dead Finks",
    "Cassandra Jenkins",
    "Font",
    "USA Nails",
    "Sheer Mag",
    "Dummy"
  ],
  songPlaying = [
    "Hey Listen",
    "The Stargate [Tablet 1]",
    "Cuts Like a Knife",
    "I'm Leaving Broken",
    "Propane Tanks",
    "Aurora, IL",
    "Sentence 1",
    "Feel Worse",
    "All Lined Up",
    "Nullspace"
  ],
  tracks = document.querySelectorAll("a");

document.querySelectorAll("li a").forEach((title, index) => {
  title.addEventListener("click", function () {
    document.querySelectorAll(".active").forEach((active) => {
      active.classList.remove("active");
    });
    document.querySelectorAll("img")[index].classList.add("active");
    title.classList.add("active");
    currentSong = index;
    document.getElementById("artist").textContent = nowPlaying[currentSong];
    document.getElementById("song").textContent = songPlaying[currentSong];
  });
});

window.addEventListener("keydown", (event) => {
  const key = event.key;
  if (key === "ArrowDown" || key === "ArrowRight") {
    playNext();
  }
  if (key === "ArrowUp" || key === "ArrowLeft") {
    playPrev();
  }
});

function playNext() {
  if (currentSong < 9) {
    currentSong++;
    document.querySelectorAll("li a")[currentSong].click();
  }
}

function playPrev() {
  if (currentSong > 0) {
    currentSong--;
    document.querySelectorAll("li a")[currentSong].click();
  }
}

Draggable.create(".window, .nowplaying, .analyzer", {
  bounds: document.body,
  type: "x,y",
  inertia: true
});

document.addEventListener("DOMContentLoaded", function () {
  document.body.classList.add("loaded");
  document.querySelectorAll("li a")[0].click();
  draw();
});

// Web Audio API stuff

function stopActiveSource() {
  if (active_source) {
    active_source.onended = null;
    active_source.stop(0);
  }
}
function playTrack(url) {
  let buffer = buffers[url];
  stopActiveSource();
  let source = context.createBufferSource();
  source.connect(analyser);
  active_source = source;
  source.onended = function () {
    active_source = null;
    if (currentSong < 9) {
      currentSong++;
      document.querySelectorAll("li a")[currentSong].click();
    }
  };

  source.buffer = buffer;
  source.connect(context.destination);

  source.start(0);
}

document.getElementById("play").addEventListener("click", function () {
  isPlaying = !isPlaying;
  this.classList.toggle("playing");
  document.querySelectorAll("li a")[currentSong].click();
  setTimeout(() => {
    if (isPlaying) {
      playTrack(tracks[currentSong]);
    } else {
      stopActiveSource();
    }
  }, 100);
});

for (let i = 0, len = tracks.length; i < len; i++) {
  tracks[i].addEventListener("click", function (e) {
    if (isPlaying) {
      playTrack(this.href);
    }
    analyser.fftSize = 2048;
    e.preventDefault();
  });
  getBuffer(tracks[i].href);
}

function draw() {
  requestAnimationFrame(draw);
  const bufferLength = analyser.frequencyBinCount;
  const dataArray = new Uint8Array(bufferLength);
  analyser.getByteFrequencyData(dataArray);
  for (let i = 0; i < 11; i++) {
    document.body.style.setProperty("--top" + i, dataArray[i * 2] * 0.015);
  }
}

function getBuffer(url) {
  let request = new XMLHttpRequest();
  request.open("GET", url, true);
  request.responseType = "arraybuffer";
  request.onload = function (evt) {
    context.decodeAudioData(request.response, store);
  };
  request.send();

  function store(buffer) {
    buffers[url] = buffer;
  }
}

let dt = new Date();
document.getElementById("date").textContent =
  dt.toLocaleString("en-us", { weekday: "short" }) +
  " " +
  dt.toLocaleString("default", { month: "short" }) +
  " " +
  dt.getDate();


