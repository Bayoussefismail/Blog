(function() {
  var t, e, a, o, r, i, c, n, s, l, d, u, m, h, g, y, p, b, v, f, w, L, S, k, q;
  window.applicationFlag = !0, new URLSearchParams(window.location.search).get("t"), (u = document.createEvent("Event")).initEvent("first_scroll", !0, !0), q = !1, m = function() {
      window.removeEventListener("scroll", m), q || (q = !0, window.dispatchEvent(u))
    }, window.addEventListener("scroll", m), perfMetrics.onFirstInputDelay(function() {
      q || (q = !0, window.dispatchEvent(u))
    }), S = !1, n = navigator.connection || navigator.mozConnection || navigator.webkitConnection, b = navigator.deviceMemory, n && n.effectiveType && n.effectiveType.includes("2g"), b && b < 4 && (S = !0), t = function() {
      var e;
      document.getElementById("mediavine-script") || ((e = document.createElement("script")).src = "//scripts.mediavine.com/tags/bucketlistly.js", e.data_nooptimize = 1, e.data_cfasync = !1, e.async = !0, e.id = "mediavine-script", document.getElementsByTagName("body")[0].appendChild(e))
    }, p = function() {
      var e;
      return e = void 0, setTimeout(function() {
        return t()
      }, 1e3), setTimeout(function() {
        if (document.getElementById("script-noncritical")) return (e = document.createElement("script")).src = document.getElementById("script-noncritical").getAttribute("data-src"), e.id = "script-noncritical-loaded", document.getElementsByTagName("body")[0].appendChild(e)
      }, 100)
    }, h = function(e, n) {
      var t, a;
      a = document.createElement("script"), t = document.getElementsByTagName("script")[0], a.async = 1, a.onload = a.onreadystatechange = function(e, t) {
        (t || !a.readyState || /loaded|complete/.test(a.readyState)) && (a.onload = a.onreadystatechange = null, a = void 0, !t && n && setTimeout(n, 0))
      }, a.src = e, t.parentNode.insertBefore(a, t)
    }, o = function() {
      if (document.querySelector(".call-to-a .btn, .extrabox .click-to-play")) return document.querySelectorAll(".call-to-a .btn, .extrabox .click-to-play").forEach(function(e) {
        if (e.getAttribute("href") && -1 !== e.getAttribute("href").indexOf("#")) return e.onclick = function() {
          return document.getElementById(e.getAttribute("href").replace("#", "")).scrollIntoView({
            behavior: "smooth"
          }), !1
        }
      })
    }, r = function() {
      var t, n, a, o;
      if (document.querySelector("body").classList.contains("posts") || document.querySelector("body").classList.contains("travel-gear-guide") || document.querySelector("body").classList.contains("home")) return o = window.innerWidth, n = window.innerHeight, a = !(t = 250), window.addEventListener("resize", function() {
        var e;
        if (!a && (window.innerWidth !== o || 120 < Math.abs(window.innerHeight - n))) return o = window.innerWidth, n = window.innerHeight, e = .01 * window.innerHeight, document.documentElement.style.setProperty("--vh", e + "px"), a = !0, setTimeout(function() {
          a = !1
        }, t)
      })
    }, v = function() {
      return document.querySelector(".icon-menu") && (document.querySelector(".icon-menu").onclick = function() {
        var e;
        if (e = document.querySelector(".navbar .nav-wrapper")) return e.classList.contains("close") ? (e.classList.remove("close"), document.querySelector(".icon-menu").classList.add("menu-open")) : (e.classList.add("close"), document.querySelector(".icon-menu").classList.remove("menu-open")), !1
      }), document.querySelector(".icon-search-mobile").onclick = function() {
        var e;
        if (e = document.querySelector(".navbar .search_wrapper")) return e.classList.contains("open") ? (e.classList.remove("open"), document.querySelector("body").classList.remove("search-open")) : (e.classList.add("open"), document.querySelector("body").classList.add("search-open"), document.getElementById("search") && document.getElementById("search").focus()), !1
      }
    }, l = function() {
      return document.querySelectorAll(".dropdown-toggle").forEach(function(a) {
        return a.onclick = function(e) {
          var t, n;
          return e.stopPropagation(), (n = document.querySelector(a.getAttribute("data-target"))).classList.add("animate"), t = function(e) {
            n.contains(e.target) || (window.removeEventListener("click", t), n.classList.remove("open"))
          }, n.classList.contains("open") ? n.classList.remove("open") : (n.classList.add("open"), window.addEventListener("click", t)), !1
        }
      })
    }, f = function() {
      if (document.querySelector("body.photos .explore .searchbox")) return document.querySelector("body.photos .explore .searchbox").onfocus = function() {
        return document.querySelector("body.photos .explore").classList.add("active")
      }
    }, c = function() {
      if (document.querySelector(".click-to-play:not(.not-player)")) return document.querySelectorAll(".click-to-play:not(.not-player)").forEach(function(i) {
        return i.onclick = function() {
          var e, t, n, a, o, r;
          return document.querySelector(".mediavine-video__player video") && document.querySelectorAll(".mediavine-video__player video").forEach(function(e) {
            return e.pause()
          }), o = i.getAttribute("data-url"), i.classList.contains("mediavine") ? r = '<div class="mediavine-vid loaded" id="' + o + '" data-sticky="1" data-automobile="true" data-autoplay="1" data-volume="70" data-ratio="' + i.getAttribute("data-ratio") + '" data-disable-jsonld="false"></div><script type="text/javascript" src="//video.mediavine.com/videos/' + o + '.js" async data-noptimize></script>' : -1 !== o.indexOf("youtube") ? (r = '<div id="ytplayer"></div>', n = function(e) {
            return e.target.playVideo()
          }, window.onYouTubePlayerAPIReady = function() {
            return new YT.Player("ytplayer", {
              height: "500",
              width: "1280",
              playerVars: {
                autoplay: 1,
                modestbranding: 1,
                widget_referrer: "https://www.bucketlistly.blog"
              },
              events: {
                onReady: n
              },
              videoId: o.replace("https://www.youtube.com/embed/", "")
            })
          }, (a = document.createElement("script")).src = "https://www.youtube.com/player_api", (t = document.getElementsByTagName("script")[0]).parentNode.insertBefore(a, t)) : r = '<iframe class="loaded" src="' + o + '?title=0&amp;byline=0&amp;portrait=0&amp;autoplay=1" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" width="1280" height="500" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>', document.cookie.split(";").some(function(e) {
            return 0 <= e.indexOf("dontshowsubscribe=true")
          }) || (e = '<div class="subscribe-btns"><a href="http://www.youtube.com/channel/UCootGfTV_uEDeB9mdpW26NQ?sub_confirmation=1" target="_blank" class="btn red btn-primary subscribe"><svg enable-background="new 0 0 32 32" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><path fill="#fff" d="m27.7 6.9s-3.9-1.3-11.7-1.3-11.7 1.3-11.7 1.3-1.3 3.9-1.3 9.1 1.3 9.1 1.3 9.1 3.9 1.3 11.7 1.3 11.7-1.3 11.7-1.3 1.3-3.9 1.3-9.1-1.3-9.1-1.3-9.1zm-14.3 13.6v-9l7.8 4.5z"/></svg> <span>Subscribe <em class="hidden-sm hidden-xs">to my Channel</em></span></a><a href="#" class="btn red btn-no-thanks"> <span>No Thanks!</span></a></div>', i.parentElement.parentElement.insertAdjacentHTML("beforeend", e), document.querySelectorAll("body .subscribe-btns .btn") && document.querySelectorAll("body .subscribe-btns .btn").forEach(function(a) {
            return a.onclick = function() {
              var e, t, n;
              return t = "Subscribe Youtube In Content", a.classList.contains("btn-no-thanks") && (t = "No Thanks Youtube In Content"), ga("send", {
                hitType: "event",
                eventCategory: "Videos",
                eventAction: t,
                eventLabel: document.title
              }), !a.classList.contains("btn-no-thanks") || (n = new Date, e = new Date(n.getFullYear() + 1, n.getMonth(), n.getDate()), document.cookie = "dontshowsubscribe=true; path=/; expires=" + e.toGMTString() + ";", a.parentElement.remove(), !1)
            }
          }), setTimeout(function() {
            return document.querySelector("body .subscribe-btns").classList.add("loaded")
          }, 100)), i.parentElement.classList.add("loaded"), i.parentElement.innerHTML = r, !1
        }
      })
    }, a = function() {
      var e, o;
      if (e = [].slice.call(document.querySelectorAll(".lazy-atf")), "IntersectionObserver" in window) return o = new IntersectionObserver(function(e) {
        return e.forEach(function(e) {
          var t, n, a;
          return t = e.target, e.isIntersecting ? "IMG" === t.tagName ? (t.closest(".image-parallax-block") ? ((n = t.closest(".image-parallax-block")).classList.add("animated-bg", "loading", "dark"), n.classList.remove("lazy"), t.onload = function() {
            return n.classList.remove("loading", "animated-bg", "dark"), n.classList.add("loaded"), t.onload = null
          }) : (n = t.parentElement, (t.closest(".img-wrapper") || t.closest(".thumb-bg")) && (t.closest(".img-wrapper") && (n = t.closest(".img-wrapper")), t.closest(".thumb-bg") && (n = t.closest(".thumb-bg")), n.classList.add("animated-bg", "loading")), t.onload = function() {
            n.classList.contains("loading") && n.classList.remove("loading", "animated-bg"), n.classList.add("loaded"), t.classList.add("loaded"), t.classList.remove("loading", "animated-bg")
          }), t.classList.add("lazyloaded"), t.classList.remove("lazy"), (a = t.parentNode) && "PICTURE" === a.tagName && a.querySelectorAll("source").forEach(function(e) {
            if (e.hasAttribute("data-srcset")) return e.setAttribute("srcset", e.getAttribute("data-srcset"))
          }), t.hasAttribute("data-srcset") && t.setAttribute("srcset", t.getAttribute("data-srcset")), t.setAttribute("src", t.getAttribute("data-original"))) : "VIDEO" === t.tagName ? (t.setAttribute("poster", t.getAttribute("data-poster")), t.querySelector("source").setAttribute("src", t.querySelector("source").getAttribute("data-original")), t.load()) : t.classList.contains("lazy-script") ? (t.querySelector(".lazy-script-id").setAttribute("src", t.querySelector(".lazy-script-id").getAttribute("data-original")), t.classList.remove("lazy")) : (t.classList.add("lazyloaded"), t.classList.remove("lazy"), t.style.backgroundImage = "url(" + t.getAttribute("data-original") + ")") : (t.classList.contains("lazy-script") && t.classList.contains("mediavine-vid-wrapper") && (t.querySelector(".mediavine-vid").classList.remove("loaded"), t.querySelector(".lazy-script-id").remove()), t.classList.remove("lazy-atf")), o.unobserve(e.target)
        })
      }), e.forEach(function(e) {
        return o.observe(e)
      })
    }, d = function() {
      var e;
      document.querySelector("body.posts article .audio-block audio") && document.querySelector(".call-to-a .btn") && !0 === (!!(e = window.navigator.userAgent).match(/iPad/i) || !!e.match(/iPhone/i)) && (document.querySelector(".call-to-a .btn").onclick = function() {
        document.querySelectorAll("body.posts article .audio-block audio").forEach(function(e) {
          e.classList.remove("lazy"), e.classList.contains("loaded") || (e.classList.remove("lazy"), e.classList.add("loaded"), e.querySelector("source").setAttribute("src", e.querySelector("source").getAttribute("data-original")), e.play(), e.pause())
        })
      })
    }, L = function() {
      if (document.querySelector("body .navbar .subscribe")) return document.querySelector("body .navbar .subscribe").onclick = function() {
        return ga("send", {
          hitType: "event",
          eventCategory: "Videos",
          eventAction: "Subscribe Youtube Topnav",
          eventLabel: document.title
        }), !0
      }
    }, s = function() {
      if (document.querySelector(".btn-darkmode")) return document.querySelector(".btn-darkmode").onclick = function() {
        return "dark" === document.documentElement.getAttribute("data-theme") ? (document.documentElement.setAttribute("data-theme", "light"), localStorage.setItem("theme", "light"), ga("send", {
          hitType: "event",
          eventCategory: "General",
          eventAction: "Switch to Light Mode",
          eventLabel: document.title
        })) : (document.documentElement.setAttribute("data-theme", "dark"), localStorage.setItem("theme", "dark"), ga("send", {
          hitType: "event",
          eventCategory: "General",
          eventAction: "Switch to Dark Mode",
          eventLabel: document.title
        })), !1
      }
    }, e = function() {
      var e, t;
      if (t = document.querySelector(".animated-bg.loading img")) {
        if (!t.complete) return t.onload = function() {
          if (e = t.closest(".animated-bg.loading")) return e.classList.remove("loading", "animated-bg", "dark"), e.classList.add("loaded"), e.onload = null
        };
        if (e = t.closest(".animated-bg.loading")) return e.classList.remove("loading", "animated-bg", "dark"), e.classList.add("loaded")
      }
    }, w = function() {
      if (document.querySelector(".expand-limit")) return document.querySelectorAll(".expand-limit").forEach(function(e) {
        return e.onclick = function() {
          return this.parentElement.querySelector(".desc-limit").classList.toggle("active"), this.classList.toggle("active"), "Less" === this.querySelector(".change-text").innerHTML ? this.querySelector(".change-text").innerHTML = "More" : this.querySelector(".change-text").innerHTML = "Less", !1
        }
      })
    }, i = function() {
      if (document.querySelector("body.posts") && document.documentElement.style.getPropertyValue("--vh") !== .01 * window.innerHeight + "px") return document.documentElement.style.setProperty("--vh", .01 * window.innerHeight + "px")
    }, y = function() {
      if (document.querySelector("#top-banner")) return document.querySelector("#top-banner .close").onclick = function() {
        var e, t;
        return t = new Date, e = new Date(t.getFullYear(), t.getMonth() + 1, t.getDate()), document.cookie = "hide_top_banner=true; path=/; expires=" + e.toGMTString() + ";", this.parentElement.remove(), ga("send", {
          hitType: "event",
          eventCategory: "General",
          eventAction: "Presets Top Banner Closed",
          eventLabel: document.title
        }), !1
      }
    }, k = function() {
      if (document.getElementById("top-banner")) return document.querySelector("#top-banner .main-link").onclick = function() {
        return ga("send", {
          hitType: "event",
          eventCategory: "General",
          eventAction: "Presets Top Banner Clicked",
          eventLabel: document.title
        })
      }
    }, g = function() {
      var t, n;
      if (a(), o(), v(), l(), n = [i, y, e, f, c, r, d, L, s, w, k], t = function(e) {
          for (; 0 < e.timeRemaining() && 0 < n.length;) n.shift()();
          0 < n.length && requestIdleCallback(t)
        }, "requestIdleCallback" in window) requestIdleCallback(t);
      else
        for (; n.length;) setTimeout(n.shift(), 1);
      window.location.hash && document.getElementById(window.location.hash.replace("#", "")) && document.getElementById(window.location.hash.replace("#", "")).scrollIntoView()
    },
    function() {
      if (document.querySelector("body.search")) h("//cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js", function() {
        return h("https://cdn.jsdelivr.net/npm/instantsearch.js@3.0.0", function() {
          var e;
          return (e = instantsearch({
            indexName: "locomotive-production-bucketlistly-blog-en",
            searchClient: algoliasearch("9WAEHJ4YGZ", "f7c644294d2cc0f5379f0c4399b939a5"),
            routing: {
              router: instantsearch.routers.history({
                windowTitle: function(e) {
                  return e.query ? "Search Results for: " + e.query + " - BucketListly Blog" : "Search for Travel Guides - BucketListly Blog"
                }
              })
            }
          })).addWidget(instantsearch.widgets.searchBox({
            container: "#instantsearch",
            placeholder: "Search",
            autofocus: !0
          })), e.addWidget(instantsearch.widgets.analytics({
            pushFunction: function(e, t, n) {
              ga("send", {
                hitType: "event",
                eventCategory: "Search",
                eventAction: "Instant Search",
                eventLabel: document.title.replace(" - BucketListly Blog", "") + " - from " + n.nbHits + " results"
              })
            }
          })), e.addWidget(instantsearch.widgets.infiniteHits({
            container: "#search-result",
            templates: {
              empty: '<div class="no-result-wrapper"><div class="no-result"> <meta name="robots" content="noindex"> <img class="svg-dark-contrast" src="https://assets.bucketlistly.blog/sites/5adf778b6eabcc00190b75b1/theme/images/icon-no-search.svg"> <h1>Sorry, your search didn\'t match any posts.</h1> </div></div>',
              item: function(e) {
                var t, n;
                return n = "<h4>" + instantsearch.highlight({
                  attribute: "data._label",
                  highlightedTagName: "em",
                  hit: e
                }) + "</h4>", t = "", "posts" === e.data._content_type && (n = n + "<h5>" + instantsearch.highlight({
                  attribute: "data.subtitle",
                  highlightedTagName: "em",
                  hit: e
                }) + "</h5>"), "videos" === e.data._content_type && (n = '<h4><span class="play"></span> ' + instantsearch.highlight({
                  attribute: "title",
                  highlightedTagName: "em",
                  hit: e
                }) + "</h4>", t = " click-to-play"), "destinations" === e.data._content_type && (n = "<h4>" + instantsearch.highlight({
                  attribute: "title",
                  highlightedTagName: "em",
                  hit: e
                }) + "</h4>"), '<a class="post-search-result" href="/' + e.data._content_type + "/" + e.data._slug + '"><div class="post-search-thumbnail' + t + '" style="background: var(--bg-third) url(' + e.data.thumbnail + ') no-repeat center center; background-size: cover;"></div><div class="post-search-content">' + n + "<p>" + instantsearch.highlight({
                  attribute: "data.description",
                  highlightedTagName: "em",
                  hit: e
                }) + "</p></div></a>"
              }
            }
          })), e.start()
        })
      })
    }(), window.addEventListener("first_scroll", p, !1), g()
}).call(this);
