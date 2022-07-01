initMap = !1,
    function(e) {
        if ("undefined" == typeof jQuery) throw "Requires jQuery to be loaded first";
        ! function(h) {
            "use strict";
            h("body");
            var e, a = function() {
                e && clearTimeout(e), e = setTimeout(function() {
                    h(window).trigger("resize").trigger("scroll"), e = null
                }, 50)
            };

            function t() {
                h(window).off("load.loader"), h(".page-loader").fadeOut(500, function() {
                    h(this).remove()
                })
            }
            h(window).on("load.loader", function() {
                t()
            }), setTimeout(t, 1e4), h("[data-bar]").each(function(e, t) {
                var i = h(t),
                    a = 100 * parseFloat(parseFloat(i.attr("aria-valuenow") / i.attr("aria-valuemax")));
                a < 0 ? a = 0 : 100 < a && (a = 100), i.css("width", a + "%")
            }), h(".navbar-toggler").on("click", function(e) {
                e.preventDefault(), h(this).toggleClass("active").closest("header").toggleClass("active")
            }), h('[data-role="nav-toggler"], .nav-arrow').on("click", function(e) {
                e.preventDefault(), h(this).parent().toggleClass("active")
            }), h('[data-role="nav-self-toggle"]').on("click", function(e) {
                e.preventDefault(), h(this).toggleClass("active")
            });
            var i = function() {
                0 < h(window).scrollTop() ? (h(".scroll-top").removeClass("disabled"), window.innerHeight + window.scrollY >= document.body.offsetHeight ? h(".scroll-top").addClass("end") : h(".scroll-top").removeClass("end")) : h(".scroll-top").addClass("disabled")
            };
            i(), h(window).on("scroll resize orientationchange focus", i), h(".scroll-top").on("click", function(e) {
                e.preventDefault(), h("html, body").animate({
                    scrollTop: 0
                }, 1e3)
            }), h(".form-check .form-check-icon").on("click", function(e, t) {
                var i = h(this).closest(".form-check").find("input.form-check-input"),
                    a = "radio" === i.attr("type") || !i.prop("checked");
                i.prop("checked", a)
            }), h("[data-left]").each(function(e, t) {
                h(t).css("left", h(t).data("left"))
            }), h("[data-top]").each(function(e, t) {
                h(t).css("top", h(t).data("top"))
            }), h("[data-svg]").each(function(e, t) {
                var i = h(t);
                i.load(i.data("svg"), null, a)
            }), h("[data-background]").each(function(e, t) {
                var i = h(t);
                i.css("backgroundImage", "url(" + i.data("background") + ")")
            }), h('[data-slider="top-side-dots"]').each(function(e, t) {
                h(t).find(".slick-slides").slick({
                    infinite: !0,
                    dots: !0,
                    arrows: !1
                })
            }), h('[data-slider="top-side-numbers"]').each(function(e, t) {
                h(t).find(".slick-slides").slick({
                    infinite: !0,
                    dots: !0,
                    arrows: !1,
                    customPaging: function(e, t) {
                        return h(e.$slides[t]).data(), "<button>0" + (t + 1) + "</button>"
                    }
                })
            }), h('[data-slider="top-with-numbers"]').each(function(e, t) {
                var i = h(t),
                    a = i.find(".slick-dots-container");
                i.find(".slick-slides").slick({
                    infinite: !0,
                    dots: !0,
                    arrows: !1,
                    autoplay: !0,
                    autoplaySpeed: 1e4,
                    appendDots: a.length ? a : i,
                    customPaging: function(e, t) {
                        return h(e.$slides[t]).data(), "<button>0" + (t + 1) + "</button>"
                    }
                })
            }), h('[data-slider="images-carousel"]').each(function(e, t) {
                var i = h(t);
                i.find(".slick-slides").slick({
                    slidesToShow: 4,
                    infinite: !0,
                    dots: !1,
                    arrows: !0,
                    swipeToSlide: !0,
                    nextArrow: i.find(".slick-arrow-next"),
                    prevArrow: i.find(".slick-arrow-prev"),
                    responsive: [{
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 3
                        }
                    }, {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2
                        }
                    }, {
                        breakpoint: 576,
                        settings: {
                            slidesToShow: 1
                        }
                    }]
                })
            }), h('[data-slider="featured-products"]').each(function(e, t) {
                var i = h(t);
                i.find(".slick-slides").slick({
                    slidesToShow: 3,
                    infinite: !0,
                    dots: !1,
                    arrows: !0,
                    focusOnSelect: !0,
                    swipeToSlide: !0,
                    nextArrow: i.find(".slick-arrow-next"),
                    prevArrow: i.find(".slick-arrow-prev"),
                    responsive: [{
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2
                        }
                    }, {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1
                        }
                    }]
                })
            }), h('[data-slider="testimonials"]').each(function(e, t) {
                var i = h(t);
                i.find(".slick-slides").slick({
                    slidesToShow: 3,
                    infinite: !0,
                    dots: !1,
                    arrows: !0,
                    focusOnSelect: !0,
                    swipeToSlide: !0,
                    nextArrow: i.find(".slick-arrow-next"),
                    prevArrow: i.find(".slick-arrow-prev"),
                    responsive: [{
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2
                        }
                    }, {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1
                        }
                    }]
                })
            }), h('[data-slider="testimonials-side"]').each(function(e, t) {
                var i = h(t);
                i.find(".slick-slides").slick({
                    slidesToShow: 1,
                    infinite: !0,
                    dots: !1,
                    arrows: !0,
                    swipeToSlide: !0,
                    nextArrow: i.find(".slick-arrow-next"),
                    prevArrow: i.find(".slick-arrow-prev")
                })
            }), h('[data-role="fill-line"]').each(function(e, t) {
                var r, i = h(t),
                    a = i.find('> [data-role="fill-line-segment"]'),
                    n = h([]),
                    l = 100,
                    c = 100,
                    s = i.width();
                a.each(function(e, t) {
                    var i = h(t),
                        a = i.data(),
                        o = a.hasOwnProperty("minWidth") ? a.minWidth : 0;
                    a.hasOwnProperty("width") ? (r = a.width, a.hasOwnProperty("maxWidth") && a.maxWidth, s < a.minWidth && (s = a.minWidth), s > a.maxWidth && (s = a.maxWidth), l -= s, i.width(s + "%")) : (n = n.add(i), c -= o)
                }), n.each(function(e, t) {
                    var i = h(t),
                        a = i.data(),
                        o = a.hasOwnProperty("maxWidth") ? a.maxWidth : 100,
                        n = a.hasOwnProperty("minWidth") ? a.minWidth : 0,
                        s = a.hasOwnProperty("prefferedWidth") ? a.prefferedWidth : a.minWidth + (a.maxWidth - a.minWidth) / 2;
                    o = Math.min(o, s, c, l), r = o <= n ? n : Math.random() * (o - n) + n, l -= r, i.width(r + "%")
                }), 0 < l && a.last().width(r + l + "%")
            }), h("[data-waypoint-counter]").each(function(e, i) {
                h(i).waypoint({
                    handler: function() {
                        var t = h(i).data("waypointCounterExtra");
                        h(i).prop("CounterValue", 0).animate({
                            CounterValue: h(i).data("waypointCounter")
                        }, {
                            duration: 2e3,
                            step: function(e) {
                                h(this).text(Math.ceil(e) + t || "")
                            }
                        }), this.destroy()
                    },
                    offset: "bottom-in-view"
                })
            }), h(".input-spin").each(function(e, t) {
                var i = h(t),
                    o = i.find(".form-control"),
                    n = i.find(".input-decrement"),
                    s = i.find(".input-increment"),
                    a = function(e) {
                        var t = parseInt(o.val()),
                            i = parseInt(o.attr("min")),
                            a = parseInt(o.attr("max"));
                        e && (t = isNaN(t) ? 0 : t + e, o.val(t)), !isNaN(i) && t <= i ? (n.addClass("disabled"), o.val(i)) : n.removeClass("disabled"), !isNaN(a) && a <= t ? (s.addClass("disabled"), o.val(a)) : s.removeClass("disabled")
                    };
                a(), o.on("blur", function() {
                    a()
                }), n.on("click", function() {
                    a(-1)
                }), s.on("click", function() {
                    a(1)
                })
            }), h(".shuffle-js").each(function(e, t) {
                var a = h(t),
                    i = h(t).find(".shuffle-items"),
                    o = new Shuffle(i[0], {
                        itemSelector: ".shuffle-item"
                    }),
                    n = a.find("[data-filter]");
                n.on("click", function(e) {
                    e.preventDefault(), a.find(".shuffle-empty").css("display", "none");
                    var t, i = h(this);
                    try {
                        t = JSON.parse(i.data("filter"))
                    } catch (e) {
                        t = i.data("filter")
                    }
                    n.removeClass("active"), i.addClass("active"), o.filter(t)
                }), o.on(Shuffle.EventType.LAYOUT, function() {
                    h(window).trigger("resize"), a.find(".shuffle-empty").css("display", o.visibleItems ? "none" : "block")
                })
            }), h(".form-control-file").each(function(e, t) {
                var i = h(t);
                i.on("change.fileField", function() {
                    var e = h(this).closest(".input-group-file").find(".form-control");
                    e.val(this.value ? this.value : e.attr("data-value-current") || "")
                }).triggerHandler("change.fileField");
                var a = i.closest("form");
                a.length && a.data("fileFields", (a.data("fileFields") || h([])).add(i)).off(".fileFields").on("reset.fileFields", function() {
                    var e = h(this);
                    setTimeout(function() {
                        e.data("fileFields").each(function(e, t) {
                            h(t).triggerHandler("change.fileField")
                        })
                    })
                }), i.closest(".input-group-file").find(".form-control, .form-control-file-btn").on("click", function(e) {
                    e.preventDefault(), i.trigger("click")
                })
            }), "undefined" != typeof FileReader && h(".file-preview").each(function(e, t) {
                var i = h(t),
                    a = !1,
                    o = h(t).closest(".form-group-preview").find(".form-control-file");
                i.find(".file-preview-image img") && i.addClass("has-file"), i.on("click", function(e) {
                    e.preventDefault(), o.trigger("click")
                }), (a = new FileReader).onloadstart = function() {
                    i.removeClass("has-file")
                }, a.onload = function(e) {
                    i.find(".file-preview-image").empty().html('<img src="' + e.target.result + '" alt="" />'), i.addClass("has-file")
                }, o.on("change.imageField", function() {
                    var e = this.files ? this.files : this.currentTarget.files;
                    e.length ? a.readAsDataURL(e[0]) : i.removeClass("has-file").find(".file-preview-image").empty()
                });
                var n = i.closest("form");
                n.length && n.data("imageFields", (n.data("imageFields") || h([])).add(o)).off(".imageFields").on("reset.imageFields", function() {
                    var e = h(this);
                    setTimeout(function() {
                        e.data("imageFields").each(function(e, t) {
                            h(t).find('input[type="file"]').triggerHandler("change.imageField")
                        })
                    })
                })
            });
            h("[data-theme-accordion] .entity-expand-head").on("click", function(e) {
                e.preventDefault();
                var t = h(this).closest("[data-theme-accordion]"),
                    i = t.data("themeAccordion");
                h('.active[data-theme-accordion="' + i + '"]').not(t).removeClass("active"), t.toggleClass("active")
            }), h("[data-size").each(function(e, t) {
                var i, a = h(t),
                    o = h(t).data("size"),
                    n = typeof o,
                    s = {};
                switch (n) {
                    case "string":
                        0 < (o = o.split(";")).length && (i = o[0].trim()) && (s.width = i), 1 < o.length && (i = o[1].trim()) && (s.height = i);
                        break;
                    case "number":
                        s.width = o
                }
                a.css(s)
            });
            var f = function(e, t, i) {
                    var a = t.trim().split(" "),
                        o = i,
                        n = 0;
                    switch (a[0].trim()) {
                        case "left":
                        case "top":
                        case "right":
                        case "bottom":
                            o = a[0].trim();
                            break;
                        case "bot":
                            o = "bottom";
                            break;
                        default:
                            n = a[0].trim()
                    }
                    1 < a.length && (n = a[1].trim() || "0"), e[o] = n
                },
                o = h("[data-cursor-move");
            o.each(function(e, t) {
                var i = h(t),
                    a = i.data("cursorMove"),
                    o = h.extend({
                        xD: "Left",
                        yD: "Top",
                        xM: 1,
                        yM: 1,
                        x: .015,
                        y: .015
                    }, i.data("cursParallax") || {});
                switch (typeof a) {
                    case "string":
                        0 < (a = a.split(";")).length && (o.x = parseFloat(a[0]), o.y = 1 < a.length ? parseFloat(a[1]) : o.x);
                        break;
                    case "number":
                        o.x = a, o.y = a
                }
                i.data("cursParallax", o)
            }), h(window).on("mousemove.cursparallax", function(e) {
                var n = {
                    x: -(e.clientX - window.innerWidth / 2),
                    y: -(e.clientY - window.innerHeight / 2)
                };
                o.each(function(e, t) {
                    var i = h(t),
                        a = i.data("cursParallax"),
                        o = {};
                    o["margin" + a.xD] = a.xM * n.x * a.x, o["margin" + a.yD] = a.yM * n.y * a.y, i.css(o)
                })
            }), h("[data-bg").each(function(e, t) {
                var i = h(t);
                i.css("backgroundColor", i.data("bg"))
            }), h("[data-at").each(function(e, t) {
                var i, a = h(t),
                    o = h(t).data("at"),
                    n = typeof o,
                    s = {
                        position: "absolute",
                        transformOrigin: "50% 50%"
                    },
                    r = "-50%",
                    l = "-50%",
                    c = [],
                    d = a.data("cursParallax") || {};
                switch (n) {
                    case "string":
                        0 < (o = o.split(";")).length && f(s, o[0], "left"), 1 < o.length && f(s, o[1], "top"), 2 < o.length && (i = o[2].trim()) && c.push("rotate(" + i + ")");
                        break;
                    case "number":
                        s.left = o
                }
                s.hasOwnProperty("bottom") && (l = "50%", d.yD = "Bottom", d.xM = -1), s.hasOwnProperty("right") && (r = "50%", d.xD = "Right", d.xM = -1), c.push("translate(" + r + ", " + l + ")"), s.transform = c.join(" "), a.css(s), a.data("cursParallax", d)
            });
            var n = function(e, t) {
                    var i = "hide" === t ? "hide" : "show",
                        a = e.data(i + "BlockClass"),
                        o = e.data(("hide" === t ? "show" : "hide") + "BlockClass");
                    a ? e.addClass(a) : e[i](), o && e.removeClass(o)
                },
                s = {
                    find: function(e) {
                        if (e instanceof h) return e;
                        for (var t = (e + "").split(";"), i = h([]), a = 0; a < t.length; a++) i = i.add(h('[data-block="' + t[a] + '"]'));
                        return i
                    },
                    hide: function(e) {
                        var t = s.find(e);
                        return t.each(function(e, t) {
                            n(h(t), "hide")
                        }), s
                    },
                    show: function(e) {
                        var t = s.find(e);
                        return t.each(function(e, t) {
                            n(h(t), "show")
                        }), s
                    },
                    action: function(e, t) {
                        return s.hasOwnProperty(t) ? s[t](e) : s
                    }
                };
            h("[data-show-block]").each(function(e, t) {
                h(t).off(".showBlock").on("click.showBlock", function(e) {
                    e.preventDefault(), s.show(h(this).data("showBlock"))
                })
            }), h("[data-hide-block]").each(function(e, t) {
                h(t).off(".hideBlock").on("click.hideBlock", function(e) {
                    e.preventDefault(), s.hide(h(this).data("hideBlock"))
                })
            }), h("[data-close-block]").each(function(e, t) {
                h(t).off(".closeBlock").on("click.closeBlock", function(e) {
                    e.preventDefault(), s.hide(h(this).closest("[data-block]"))
                })
            }), gMapStyles = "undefined" == typeof gMapStyles ? {} : gMapStyles, initMap = function() {
                var f = {};
                h.each(gMapStyles, function(e, t) {
                    f[e] = new google.maps.StyledMapType(t.styles, t.options)
                }), h(".gmap").each(function(e, t) {
                    var i = h(t),
                        a = i.data(),
                        o = {
                            lat: a.lat,
                            lng: a.lng
                        },
                        n = {
                            lat: a.centerLat || o.lat,
                            lng: a.centerLng || o.lng
                        },
                        s = a.controlPosition || "LEFT_BOTTOM",
                        r = a.mapTypePosition || "TOP_LEFT",
                        l = new google.maps.Map(t, {
                            center: 768 <= h(window).width() ? n : o,
                            zoom: a.zoom || 15,
                            scrollwheel: !1,
                            zoomControl: !0,
                            zoomControlOptions: {
                                position: google.maps.ControlPosition.LEFT_CENTER
                            },
                            streetViewControl: !0,
                            streetViewControlOptions: {
                                position: google.maps.ControlPosition[s]
                            },
                            mapTypeControlOptions: {
                                mapTypeIds: ["roadmap", "satellite", "hybrid", "terrain", "styled_map"],
                                position: google.maps.ControlPosition[r],
                                style: google.maps.MapTypeControlStyle.DEFAULT
                            },
                            fullscreenControl: !0
                        }),
                        c = a.mapStyle && f[a.mapStyle] ? a.mapStyle : "default",
                        d = !!f[c] && f[c];
                    new google.maps.Marker({
                        position: o,
                        map: l,
                        icon: a.marker || "./assets/images/parts/map-marker.png"
                    }), d && (l.mapTypes.set(c, d), l.setMapTypeId(c)), h(window).on("resize", function() {
                        google.maps.event.trigger(l, "resize"), l.setCenter(768 <= h(window).width() ? n : o)
                    })
                })
            }
        }(jQuery)
    }();