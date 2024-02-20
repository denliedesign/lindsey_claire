(() => {
    function pe() {
        "use strict";

        function e(o, m, g) {
            "addEventListener" in window ? o.addEventListener(m, g, !1) : "attachEvent" in window && o.attachEvent("on" + m, g)
        }

        function i() {
            var o, m = ["moz", "webkit", "o", "ms"];
            for (o = 0; o < m.length && !E; o += 1) E = window[m[o] + "RequestAnimationFrame"];
            E || n(" RequestAnimationFrame not supported")
        }

        function t() {
            var o = "Host page";
            return window.top !== window.self && (o = window.parentIFrame ? window.parentIFrame.getId() : "Nested host page"), o
        }

        function a(o) {
            return U + "[" + t() + "]" + o
        }

        function n(o) {
            l.log && typeof window.console == "object" && console.log(a(o))
        }

        function c(o) {
            typeof window.console == "object" && console.warn(a(o))
        }

        function f(o) {
            function m() {
                function u() {
                    s(w), p(), l.resizedCallback(w)
                }

                F("Height"), F("Width"), k(u, w, "resetPage")
            }

            function g(u) {
                var v = u.id;
                n(" Removing iFrame: " + v), u.parentNode.removeChild(u), l.closedCallback(v), n(" --")
            }

            function x() {
                var u = H.substr(T).split(":");
                return {iframe: document.getElementById(u[0]), id: u[0], height: u[1], width: u[2], type: u[3]}
            }

            function F(u) {
                var v = Number(l["max" + u]), N = Number(l["min" + u]), z = u.toLowerCase(), $ = Number(w[z]);
                if (N > v) throw new Error("Value for min" + u + " can not be greater than max" + u);
                n(" Checking " + z + " is in range " + N + "-" + v), N > $ && ($ = N, n(" Set " + z + " to min value")), $ > v && ($ = v, n(" Set " + z + " to max value")), w[z] = "" + $
            }

            function B() {
                var u = w.iframe.src;
                !u && w.iframe.getAttribute("data-src") && (u = w.iframe.getAttribute("data-src"));
                var v = o.origin, N = u.split("/").slice(0, 3).join("/");
                if (l.checkOrigin && (n(" Checking connection is from: " + N), "" + v != "null" && v !== N)) throw new Error("Unexpected message received from: " + v + " for " + w.iframe.id + ". Message was: " + o.data + ". This error can be disabled by adding the checkOrigin: false option.");
                return !0
            }

            function S() {
                return U === ("" + H).substr(0, T)
            }

            function Y() {
                var u = w.type in {true: 1, false: 1};
                return u && n(" Ignoring init message from meta parent page"), u
            }

            function I(u) {
                return H.substr(H.indexOf(":") + ie + u)
            }

            function A(u) {
                n(" MessageCallback passed: {iframe: " + w.iframe.id + ", message: " + u + "}"), l.messageCallback({
                    iframe: w.iframe,
                    message: JSON.parse(u)
                }), n(" --")
            }

            function ge() {
                if (w.iframe === null) throw new Error("iFrame (" + w.id + ") does not exist on " + O);
                return !0
            }

            function le(u) {
                var v = u.getBoundingClientRect();
                return r(), {x: parseInt(v.left, 10) + parseInt(h.x, 10), y: parseInt(v.top, 10) + parseInt(h.y, 10)}
            }

            function ce(u) {
                function v() {
                    h = $, me(), n(" --")
                }

                function N() {
                    return {x: Number(w.width) + z.x, y: Number(w.height) + z.y}
                }

                var z = u ? le(w.iframe) : {x: 0, y: 0}, $ = N();
                n(" Reposition requested from iFrame (offset x:" + z.x + " y:" + z.y + ")"), window.top !== window.self ? window.parentIFrame ? u ? parentIFrame.scrollToOffset($.x, $.y) : parentIFrame.scrollTo(w.width, w.height) : c(" Unable to scroll to requested position, window.parentIFrame not found") : v()
            }

            function me() {
                l.scrollCallback(h) !== !1 && p()
            }

            function he(u) {
                function v(we) {
                    var G = le(we);
                    n(" Moving to in page link (#" + N + ") at x: " + G.x + " y: " + G.y), h = {
                        x: G.x,
                        y: G.y
                    }, me(), n(" --")
                }

                var N = u.split("#")[1] || "", z = decodeURIComponent(N),
                    $ = document.getElementById(z) || document.getElementsByName(z)[0];
                window.top !== window.self ? window.parentIFrame ? parentIFrame.moveToAnchor(N) : n(" In page link #" + N + " not found and window.parentIFrame not found") : $ ? v($) : n(" In page link #" + N + " not found")
            }

            function ye() {
                switch (w.type) {
                    case"close":
                        g(w.iframe), l.resizedCallback(w);
                        break;
                    case"message":
                        A(I(6));
                        break;
                    case"scrollTo":
                        ce(!1);
                        break;
                    case"scrollToOffset":
                        ce(!0);
                        break;
                    case"inPageLink":
                        he(I(9));
                        break;
                    case"reset":
                        d(w);
                        break;
                    case"init":
                        m(), l.initCallback(w.iframe);
                        break;
                    default:
                        m()
                }
            }

            var H = o.data, w = {};
            S() && (n(" Received: " + H), w = x(), !Y() && ge() && B() && (ye(), D = !1))
        }

        function r() {
            h === null && (h = {
                x: window.pageXOffset !== void 0 ? window.pageXOffset : document.documentElement.scrollLeft,
                y: window.pageYOffset !== void 0 ? window.pageYOffset : document.documentElement.scrollTop
            }, n(" Get page position: " + h.x + "," + h.y))
        }

        function p() {
            h !== null && (window.scrollTo(h.x, h.y), n(" Set page position: " + h.x + "," + h.y), h = null)
        }

        function d(o) {
            function m() {
                s(o), C("reset", "reset", o.iframe)
            }

            n(" Size reset requested by " + (o.type === "init" ? "host page" : "iFrame")), r(), k(m, o, "init")
        }

        function s(o) {
            function m(g) {
                o.iframe.style[g] = o[g] + "px", n(" IFrame (" + o.iframe.id + ") " + g + " set to " + o[g] + "px")
            }

            l.sizeHeight && m("height"), l.sizeWidth && m("width")
        }

        function k(o, m, g) {
            g !== m.type && E ? (n(" Requesting animation frame"), E(o)) : o()
        }

        function C(o, m, g) {
            n("[" + o + "] Sending msg to iframe (" + m + ")"), g.contentWindow.postMessage(U + m, "*")
        }

        function R() {
            function o() {
                function I(A) {
                    1 / 0 !== l[A] && l[A] !== 0 && (S.style[A] = l[A] + "px", n(" Set " + A + " = " + l[A] + "px"))
                }

                I("maxHeight"), I("minHeight"), I("maxWidth"), I("minWidth")
            }

            function m(I) {
                return I === "" && (S.id = I = "iFrameResizer" + ee++, n(" Added missing iframe ID: " + I + " (" + S.src + ")")), I
            }

            function g() {
                n(" IFrame scrolling " + (l.scrolling ? "enabled" : "disabled") + " for " + Y), S.style.overflow = l.scrolling === !1 ? "hidden" : "auto", S.scrolling = l.scrolling === !1 ? "no" : "yes"
            }

            function x() {
                (typeof l.bodyMargin == "number" || l.bodyMargin === "0") && (l.bodyMarginV1 = l.bodyMargin, l.bodyMargin = "" + l.bodyMargin + "px")
            }

            function F() {
                return Y + ":" + l.bodyMarginV1 + ":" + l.sizeWidth + ":" + l.log + ":" + l.interval + ":" + l.enablePublicMethods + ":" + l.autoResize + ":" + l.bodyMargin + ":" + l.heightCalculationMethod + ":" + l.bodyBackground + ":" + l.bodyPadding + ":" + l.tolerance
            }

            function B(I) {
                e(S, "load", function () {
                    var A = D;
                    C("iFrame.onload", I, S), !A && l.heightCalculationMethod in Q && d({
                        iframe: S,
                        height: 0,
                        width: 0,
                        type: "init"
                    })
                }), C("init", I, S)
            }

            var S = this, Y = m(S.id);
            g(), o(), x(), B(F())
        }

        function Z(o) {
            if (typeof o != "object") throw new TypeError("Options is not an object.")
        }

        function W(o) {
            o = o || {}, Z(o);
            for (var m in y) y.hasOwnProperty(m) && (l[m] = o.hasOwnProperty(m) ? o[m] : y[m])
        }

        function q() {
            function o(m) {
                if (!m.tagName) throw new TypeError("Object is not a valid DOM element");
                if (m.tagName.toUpperCase() !== "IFRAME") throw new TypeError("Expected <IFRAME> tag, found <" + m.tagName + ">.");
                R.call(m)
            }

            return function (m, g) {
                switch (W(m), typeof g) {
                    case"undefined":
                    case"string":
                        Array.prototype.forEach.call(document.querySelectorAll(g || "iframe"), o);
                        break;
                    case"object":
                        o(g);
                        break;
                    default:
                        throw new TypeError("Unexpected data type (" + typeof g + ").")
                }
            }
        }

        function se(o) {
            o.fn.iFrameResize = function (m) {
                return W(m), this.filter("iframe").each(R).end()
            }
        }

        var ee = 0, D = !0, te = "message", ie = te.length, U = "[iFrameSizer]", T = U.length, O = "", h = null,
            E = window.requestAnimationFrame, Q = {max: 1, scroll: 1, bodyScroll: 1, documentElementScroll: 1}, l = {},
            y = {
                autoResize: !0,
                bodyBackground: null,
                bodyMargin: null,
                bodyMarginV1: 8,
                bodyPadding: null,
                checkOrigin: !0,
                enablePublicMethods: !1,
                heightCalculationMethod: "offset",
                interval: 32,
                log: !1,
                maxHeight: 1 / 0,
                maxWidth: 1 / 0,
                minHeight: 0,
                minWidth: 0,
                scrolling: !1,
                sizeHeight: !0,
                sizeWidth: !1,
                tolerance: 0,
                closedCallback: function () {
                },
                initCallback: function () {
                },
                messageCallback: function () {
                },
                resizedCallback: function () {
                },
                scrollCallback: function () {
                    return !0
                }
            };
        i(), e(window, "message", f), window.jQuery && se(jQuery), typeof define == "function" && define.amd ? define([], q) : typeof exports == "object" ? module.exports = q() : window.iFrameResize = q()
    }

    pe();

    function ne() {
        "use strict";
        var e = {
            createWidget: function () {
                iFrameResize({
                    log: !1, checkOrigin: !1, enablePublicMethods: !0, resizedCallback: function (i) {
                        for (var t = document.getElementsByClassName("containerModal"), a = 0; a < t.length; a++) t[a].getElementsByTagName("iframe").length > 0 && (t[a].style.position = "absolute")
                    }
                })
            }
        };
        window.onload = function () {
            e.createWidget()
        }, e.createWidget()
    }

    ne();
    var be = e => {
        let {shadow: i} = e;
        return `${i?.horizontal}px ${i?.vertical}px ${i?.blur}px ${i?.spread}px #${i?.color}`
    };

    function J(e) {
        try {
            return decodeURIComponent(e)
        } catch {
        }
    }

    function xe(e) {
        for (var i = e.split("&"), t = {}, a = 0; a < i.length; a++) {
            var n = i[a].split("="), c = J(n[0]), f = J(n[1]);
            if (typeof t[c] > "u") t[c] = J(f); else if (typeof t[c] == "string") {
                var r = [t[c], J(f)];
                t[c] = r
            } else t[c].push(J(f))
        }
        return t
    }

    var K = document.getElementsByTagName("iframe"), oe = [];
    for (let e = 0; e < K.length; e++) K[e].id && !oe.includes(K[e].id) && oe.push(K[e].id);

    function ve(e) {
        try {
            let i = window[e], t = "__storage_test__";
            return i.setItem(t, t), i.removeItem(t), !0
        } catch {
            return !1
        }
    }

    function Ie(e) {
        if (!ve("localStorage")) return;
        let i = localStorage.getItem(e);
        if (!i) return null;
        let t = JSON.parse(i);
        return new Date().getTime() > t.expiry ? (localStorage.removeItem(e), null) : t.value
    }

    if (!document.getElementById("embeddedIframes")) {
        let e = i => {
            let t = document.createElement("style");
            return t.type = "text/css", t.innerText = i, t.id = "embeddedIframes", document.head.appendChild(t), t
        };
        fe = ".ep-header,.ep-iFrameContainer,.ep-overlay{display:none}.ep-iFrame{border:none}.ep-iFrameLarge{height:500px;overflow:auto}.ep-overflow{overflow:unset}.ep-overlay{z-index:10000;position:fixed;top:0;bottom:0;left:0;right:0;background:rgba(0,0,0,.5);transition:opacity .2s;width:100%;justify-content:center;align-items:center}.ep-wrapper{width:100%}.ep-header{justify-content:flex-end;position:fixed;border-radius:5px;z-index:1}.ep-close-icon,.ep-minimize-icon{background:#e8e8e8;width:23px;height:23px;margin:3px 6px 0 0;z-index:999;color:#4a4a4a;transition:background .25s;text-align:center;cursor:pointer}.ep-minimize-icon{border-radius:50%;line-height:.3ch;font-size:22px;border:1px solid #ccc;font-family:sans-serif}.ep-close-icon{border-radius:50%;line-height:1.5ch;font-size:20px;border:1px solid #ccc;font-family:Montserrat}.ep-minimize-text-container{height:100%;text-align:center}.ep-minimize-tc-sticky{writing-mode:vertical-lr;justify-content:center}.ep-minimize-tc-sticky-left{transform:rotate(360deg)}.ep-minimize-tc-sticky-right{transform:rotate(180deg)}.ep-minimize-tc-polite{align-items:end;width:100%}.ep-minimize-tc-polite-left{justify-content:start}.ep-minimize-tc-polite-right{justify-content:end}.ep-minimize-text{background-color:#000;cursor:pointer;color:#fff;white-space:nowrap;overflow:hidden;max-width:380px;text-overflow:ellipsis}.ep-minimize-text-polite{margin-bottom:8px}.ep-minimize-text-polite-left{margin-left:25px;margin-right:8px}.ep-minimize-text-polite-right{margin-left:8px;margin-right:25px}.ep-sticky-sidebar{top:50%;z-index:9999;position:fixed}.ep-height,.ep-sticky-sidebar .ep-wrapper{height:100%}.ep-polite-slide-in{z-index:9999;position:fixed}.ep-inline,.ep-popup{position:relative;margin:auto}.ep-polite-slide-in .ep-wrapper{position:absolute}.ep-popup{z-index:9999}.ep-inline{overflow:unset;boxshadow:none}.ep-right{right:15px}.ep-left{left:15px}.ep-bottom{bottom:15px}@media only screen and (max-width:550px){.ep-iFrame,.ep-iFrameContainer{width:100%}.ep-popup{width:100%!important}.ep-right{right:0}.ep-left{left:0}.ep-bottom{bottom:0}}", e(fe)
    }
    var fe, X = {}, L = {}, V = !1, de = {}, P = "STICKY_SIDEBAR", j = "POLITE_SLIDE_IN", M = "POPUP", _ = "INLINE",
        b = {};

    function Ne({id: e, borderRadius: i, boxShadow: t, height: a, layout: n}) {
        let c = document.createElement("div");
        return c.setAttribute("id", `${e}-div`), c.className = "ep-iFrameContainer", c.style.cssText = `border-radius: ${i}px; box-shadow: ${t};`, c
    }

    function ze({id: e, iFrame: i, iFrameContainer: t}) {
        let a = document.getElementById(`${e}-overlay`);
        a = document.createElement("div"), a.setAttribute("id", `${e}-overlay`), a.className = "ep-overlay";
        let n = i.parentNode;
        return n ? n.appendChild(a) : document.body.appendChild(a), a.appendChild(t), a
    }

    function ke({id: e}) {
        let i = document.createElement("div");
        return i.setAttribute("id", `${e}-header`), i.className = "ep-header", i
    }

    function Ee({id: e, layout: i, width: t, triggerType: a, triggerValue: n, height: c, background: f}) {
        let r, p = document.getElementById(`${e}-header`);
        if (de[e]) {
            p && (p.style.display = i.id === _ ? "none" : "flex", p.style.width = window.matchMedia(`(max-width: ${t}px)`).matches ? "100%" : `${t}px`);
            let d = document.getElementById(`${e}-div`), s = document.getElementById(`${e}-overlay`),
                k = document.getElementById(`${e}`);
            i.id !== _ && (d.style.background = `#${f}`, Number(c) >= 500 ? d.classList.add("ep-iFrameLarge") : (i.id !== M && (d.style.height = `${Number(c)}px`), d.classList.add("ep-overflow"))), a === "showAfter" && Number(n) && (!Object.keys(L).length || !L[e]) && (r = setTimeout(() => {
                clearTimeout(r), i.id === M && s && (s.style.display = "flex"), d.style.display = "block", k.style.display = "block", i.id !== _ && (Number(c) >= 500 ? d.classList.add("ep-iFrameLarge") : (d.style.height = `${Number(c)}px`, d.classList.add("ep-overflow")))
            }, Number(n * 1e3)))
        }
    }

    function Se({id: e, layout: i}) {
        let t = document.getElementById(`${e}-minimize-icon`);
        return i.id !== M && (t = document.createElement("div"), t.setAttribute("id", `${e}-minimize-icon`), t.innerText = "_", t.className = "ep-minimize-icon"), t
    }

    function $e({id: e, layout: i}) {
        let t = document.getElementById(`${e}-close-icon`);
        return (i.id === M || i.id !== M && !i.allowMinimize) && (t = document.createElement("div"), t.setAttribute("id", `${e}-close-icon`), t.innerText = "x", t.className = "ep-close-icon"), t
    }

    function Le({id: e, layout: i}) {
        let t = document.createElement("div");
        return t.setAttribute("id", `${e}-minimize-text`), t.className = "ep-minimize-text-container", t.style.display = "none", i.id === P ? (t.classList.add("ep-minimize-tc-sticky"), i.isLeftAligned ? t.classList.add("ep-minimize-tc-sticky-left") : t.classList.add("ep-minimize-tc-sticky-right")) : i.id === j && (t.classList.add("ep-minimize-tc-polite"), i.isLeftAligned ? t.classList.add("ep-minimize-tc-polite-left") : t.classList.add("ep-minimize-tc-polite-right")), t
    }

    function Me({id: e, formName: i, layout: t}) {
        let a = document.createElement("span");
        return a.setAttribute("id", `${e}-minimize-text-span-`), a.innerText = t.minimizedTitle || i, a.className = "ep-minimize-text", a.title = t.minimizedTitle || i, a.style.padding = t.id === P ? "20px 10px" : "10px 30px", t.id === j && (a.classList.add("ep-minimize-text-polite"), t.isLeftAligned ? a.classList.add("ep-minimize-text-polite-left") : a.classList.add("ep-minimize-text-polite-right")), a
    }

    function Te({iFrameContainer: e, wrapperDiv: i, height: t, layout: a, width: n}) {
        e.classList.add("ep-sticky-sidebar"), a.isRightAligned ? e.classList.add("ep-right") : e.classList.add("ep-left"), Number(t) >= 500 ? e.style.marginTop = "-250px" : e.style.marginTop = `-${t / 2}px`
    }

    function Ae({iFrameContainer: e, wrapperDiv: i, width: t, layout: a}) {
        a.isRightAligned ? e.classList.add("ep-right", "ep-polite-slide-in", "ep-bottom") : e.classList.add("ep-left", "ep-polite-slide-in", "ep-bottom")
    }

    function Ce({iFrameContainer: e, iFrame: i, width: t}) {
        e.style.width = window.matchMedia(`(max-width: ${t}px)`).matches ? "100%" : `${t}px`, e.classList.add("ep-popup")
    }

    function _e({activationType: e, getIframeDetails: i, activationValue: t, deactivationType: a, deactivationValue: n, id: c}) {
        e === "activateOnVisit" && Number(t) ? (V = i.visit >= Number(t), a === "leadCollected" && i.leadCollected || V && a === "deactivateAfter" && i.visit - Number(t) >= Number(n) ? L[c] = !0 : V || (L[c] = !0)) : a === "leadCollected" && i.leadCollected ? L[c] = !0 : a === "deactivateAfter" && (L[c] = i.visit > Number(n))
    }

    function Oe({triggerValue: e, activationType: i, iframeActivated: t, layout: a, overlay: n, header: c, iFrameContainer: f, iFrame: r, height: p, id: d}) {
        window.addEventListener("scroll", () => {
            (a.id === _ || document.getElementById(`${d}-minimize-text`)?.style.display === "none") && !L[d] && Number(e) && (i === "alwaysActivated" || t) && (document.body.offsetHeight - window.innerHeight) * (Number(e) / 100) <= Math.round(window.scrollY) && (a.id === M && (n.style.display = "flex"), f.style.display = "block", a.id !== _ && (c.style.display = "flex", Number(p) >= 500 ? f.classList.add("ep-iFrameLarge") : (f.style.height = `${Number(p)}px`, f.classList.add("ep-overflow"))), r.style.display = "block")
        })
    }

    function Fe({iFrameContainer: e, iFrame: i, header: t, width: a, border: n, layout: c, id: f, height: r}) {
        window.matchMedia(`(max-width: ${a}px)`).addListener(d => {
            d.matches ? (document.getElementById(`${f}-minimize-text`)?.style.display === "none" ? (e.style.width = "100%", i.style.width = "100%") : c.id === j && (e.style.width = "50%"), t.style.width = "100%") : (document.getElementById(`${f}-minimize-text`)?.style.display === "none" ? e.style.width = `${a}px` : (e.style.marginTop = Number(r) >= 500 ? "-250px" : `-${r / 2}px`, c.id === P && (e.style.width = "50px")), t.style.width = `${a}px`)
        })
    }

    function Be({closeIconEle: e, iFrameContainer: i, overlay: t, layout: a, id: n}) {
        e.addEventListener("click", () => {
            i.style.display = "none", a.id === M && (t.style.display = "none"), L = {...L, [n]: !0}
        })
    }

    function Re({minimizeIconEle: e, iFrame: i, header: t, height: a, wrapperDiv: n, iFrameContainer: c, minimizeTextEle: f, layout: r, width: p}) {
        e.addEventListener("click", () => {
            i.style.display = "none", t.style.display = "none", c.style.boxShadow = "none", c.style.background = "transparent", r.id === j && (c.style.height = "50px", c.style.width = "50%"), r.id === P && (Number(a) <= 500 && (n.style.height = "100%"), c.style.width = "50px"), f.style.display = "flex", f.firstChild.style.borderRadius = r.id === P ? "0px 8px 8px 0px" : "8px 8px 0px 0px", c.style.border = "none"
        })
    }

    function Pe({minimizeTextEle: e, iFrame: i, iFrameContainer: t, header: a, styles: n, height: c, width: f, formId: r, shadow: p}) {
        e.firstChild.addEventListener("click", () => {
            i.style.display = "block", t.style.boxShadow = p, e.style.display = "none", window.matchMedia(`(max-width: ${f}px)`).matches ? (t.style.width = "100%", i.style.width = "100%") : t.style.width = `${f}px`, window.matchMedia(`(max-width: ${f}px)`).matches && (t.style.marginTop = `-${c / 2}px`), t.style.height = Number(c) >= 500 ? "500px" : `${Number(c)}px`, t.style.background = `#${n[r]}`, a.style.display = "flex"
        })
    }

    var ue = [];

    function je(e) {
        if (!e) return;
        let i = new URL(e), t = new URLSearchParams(window.location.search);
        for (let [a, n] of t) i.searchParams.append(a, n);
        return i.href
    }

    function re(e) {
        return e?.src.includes("/form") || e?.src.includes("/survey") || e?.src.includes("/booking") || e?.src.includes("/group")
    }

    function ae(e) {
        if (!!e) return e.includes("'") && !e.includes('"') ? e = JSON.parse(e.replace(/'/g, '"')) : e = JSON.parse(e), e
    }

    window.onmessage = function (e) {
        if (e.data[0] === "iframeLoaded" && ne(), e.data[0] == "fetch-query-params") {
            let n;
            e.data[4] && (n = JSON.parse(e.data[4]), b = {
                ...b,
                [e.data[3]]: {
                    background: n.background,
                    width: n.width,
                    height: n.ac_branding ? n.height + (n.headerImageSrc ? 430 : 155) : n.height + (n.headerImageSrc ? 310 : 35),
                    border: n.border,
                    boxShadow: be(n)
                }
            });
            var i = location.search.substring(1), t = Ie(`v3_first_session_event_${e.data[2]}`);
            X = xe(i);
            var a = new URL(document.location.href);
            t && t.url_params && Object.keys(t.url_params).forEach(function (f) {
                f && t.url_params[f] && a.searchParams.append(f, t.url_params[f])
            });
            let c = document.querySelectorAll("iframe[id]");
            for (let f of c) {
                let r = f, p = r.id, d = r?.dataset?.formId, s = r?.dataset?.layout;
                if (re(f) && r.contentWindow.postMessage(["query-params", X, a.toString(), t?.referrer ? t?.referrer : document.referrer, p], "*"), ue.includes(r.id) || re(r) && (window.location.search && r.setAttribute("src", je(f.src)), ue.push(r.id), r.setAttribute("class", "ep-iFrame")), !re(r)) continue;
                let k = r?.dataset?.triggerType, C = r?.dataset?.triggerValue, R = r?.dataset?.activationType,
                    Z = r?.dataset?.activationValue, W = r?.dataset?.deactivationType,
                    q = r?.dataset?.deactivationValue, se = r?.dataset?.isSurvey, ee = b[d]?.border.border,
                    D = b[d]?.border?.radius, te = b[d]?.boxShadow, ie = r?.dataset?.formName;
                if (!s) continue;
                if (s && (s = ae(s)), r.parentNode?.id === `${p}-wrapper`) return r.contentWindow.postMessage(["query-params", X, a.toString(), t?.referrer ? t?.referrer : document.referrer, `${r?.dataset?.layoutIframeId}`], "*");
                let T = localStorage.getItem(`embedded_iframe_${p}`);
                T ? (T = JSON.parse(T), T.visit = T.visit + 1, localStorage.setItem(`embedded_iframe_${p}`, JSON.stringify(T))) : (localStorage.setItem(`embedded_iframe_${p}`, JSON.stringify({
                    id: p,
                    visit: 1,
                    layout: s
                })), T = {id: p, visit: 1});
                let O, h, E, Q, l = b[d]?.height || r?.dataset?.height,
                    y = Ne({id: p, borderRadius: D, boxShadow: te, height: l, layout: s}), o = $e({id: p, layout: s}),
                    m = Se({id: p, layout: s}), g = document.createElement("div");
                if (g.setAttribute("id", `${p}-wrapper`), g.className = "ep-wrapper", g.style.cssText = `border-radius: ${D}px`, s.id !== _) {
                    if (r.style.border = "none", s.id === M ? r.style.position = null : (r.style.height = `${l}px`, r.style.position = s.id === j ? "relative" : "absolute"), s.id === M) O = ze({
                        id: p,
                        iFrame: r,
                        iFrameContainer: y
                    }); else {
                        let x = r.parentNode;
                        x ? x.appendChild(y) : document.body.appendChild(y)
                    }
                    g?.appendChild(r), y.appendChild(g), s.id === P && Te({
                        iFrameContainer: y,
                        wrapperDiv: g,
                        height: l,
                        width: b[d]?.width,
                        layout: s
                    }), s.id === j && Ae({
                        iFrameContainer: y,
                        wrapperDiv: g,
                        width: b[d]?.width,
                        layout: s
                    }), s.id === M && Ce({
                        iFrameContainer: y,
                        iFrame: r,
                        width: b[d]?.width
                    }), h = ke({id: p}), g.insertBefore(h, r), y.style.width = window.matchMedia(`(max-width: ${b[d]?.width}px)`).matches ? "100%" : `${b[d]?.width}px`, r.style.width = window.matchMedia(`(max-width: ${b[d]?.width}px)`).matches ? "100%" : `${b[d]?.width}px`, h.style.width = window.matchMedia(`(max-width: ${b[d]?.width}px)`).matches ? "100%" : `${b[d]?.width}px`, Fe({
                        iFrameContainer: y,
                        iFrame: r,
                        header: h,
                        width: b[d]?.width,
                        border: ee,
                        layout: s,
                        id: p,
                        height: l
                    }), m && (s.allowMinimize || (m.style.display = "none"), h.appendChild(m)), o && h.appendChild(o), E = Le({
                        id: p,
                        layout: s
                    }), Q = Me({id: p, formName: ie, layout: s}), E.appendChild(Q), g.insertBefore(E, r)
                } else {
                    let x = r.parentNode;
                    x ? x.appendChild(y) : document.body.appendChild(y), g?.appendChild(r), y.appendChild(g)
                }
                _e({
                    activationType: R,
                    getIframeDetails: T,
                    activationValue: Z,
                    deactivationType: W,
                    deactivationValue: q,
                    id: p
                }), L[p] && W !== "neverDeactivate" ? (r.style.display = "none", y.style.display = "none", O && (O.style.display = "none")) : k === "showOnScrolling" && Number(C) ? Oe({
                    triggerValue: C,
                    activationType: R,
                    iframeActivated: V,
                    layout: s,
                    overlay: O,
                    header: h,
                    iFrameContainer: y,
                    iFrame: r,
                    height: l,
                    id: p
                }) : !Number(C) && (R === "alwaysActivated" || V) && (s.id !== _ && (Number(l) >= 500 ? y.classList.add("ep-iFrameLarge") : (s.id !== M && (y.style.height = `${Number(l)}px`), y.classList.add("ep-overflow"))), s.id === M && (O.style.display = "flex"), y.style.display = "block", r.style.display = "block"), s.id !== _ && (o && Be({
                    closeIconEle: o,
                    iFrameContainer: y,
                    overlay: O,
                    layout: s,
                    id: p
                }), m && Re({
                    minimizeIconEle: m,
                    iFrame: r,
                    header: h,
                    height: l,
                    wrapperDiv: g,
                    iFrameContainer: y,
                    minimizeTextEle: E,
                    layout: s,
                    width: b[d]?.width
                }), E && Pe({
                    minimizeTextEle: E,
                    iFrame: r,
                    iFrameContainer: y,
                    header: h,
                    styles: b,
                    height: l,
                    width: b[d]?.width,
                    formId: d,
                    shadow: b[d]?.boxShadow
                })), r.contentWindow.postMessage(["query-params", X, a.toString(), t?.referrer ? t?.referrer : document.referrer, `${r?.dataset?.layoutIframeId}`], "*"), c.forEach(x => {
                    if (x.src.includes("/form")) {
                        let F = x.dataset.formId;
                        x.onload = function () {
                            let B;
                            B = ae(x?.dataset?.layout), B && (de = {
                                ...de,
                                [x.dataset.layoutIframeId]: !0
                            }, Ee({
                                id: x.dataset.layoutIframeId,
                                layout: B,
                                width: b[F]?.width,
                                height: b[F]?.height || x.dataset.height,
                                triggerValue: x.dataset.triggerValue,
                                triggerType: x.dataset.triggerType,
                                background: b[F]?.background
                            }))
                        }
                    }
                })
            }
        } else if (e.data[0] == "fetch-sticky-contacts") {
            let n = d => {
                let s;
                if (typeof localStorage < "u") try {
                    s = localStorage.getItem(d)
                } catch {
                }
                return s
            }, c = d => {
                try {
                    let s;
                    return typeof localStorage !== void 0 && (s = localStorage.getItem("_ud")), s
                } catch {
                    return null
                }
            }, f = d => {
                let s = d;
                return d && typeof s == "string" && (s = JSON.parse(s)), s
            }, r = d => {
                let s = c(d), k = f(s);
                if (k && "location_id" in k) {
                    let {location_id: C} = k;
                    return C === d ? k : null
                }
                return null
            };
            document.querySelectorAll("iframe[id]").forEach(d => {
                d?.contentWindow.postMessage(["sticky-contacts", r(e.data[1]), n(e.data[1])], "*")
            })
        } else if (e.data[0] == "set-sticky-contacts" && typeof localStorage < "u") try {
            if (e.data[1] && e.data[2]) if (e.data[1] === `embedded_iframe_${e.data[2]}`) {
                let n = localStorage.getItem(`embedded_iframe_${e.data[2]}`), c = 5e3, f,
                    r = ae(document.getElementById(oe[0]).dataset.layout);
                if (n) {
                    n = JSON.parse(n), localStorage.setItem(`embedded_iframe_${e.data[2]}`, JSON.stringify({
                        ...n,
                        leadCollected: !0
                    }));
                    let p = document.getElementById(`${e.data[2]}-overlay`),
                        d = document.getElementById(`${e.data[2]}-div`);
                    r.id !== _ && (f = setTimeout(() => {
                        clearTimeout(f), p && (p.style.display = "none"), d && (d.style.display = "none", L[e.data[2]] = !0)
                    }, c))
                }
            } else localStorage.setItem(e.data[1], e.data[2]);
            e.data[3] && e.data[4] && localStorage.setItem(e.data[3], e.data[4])
        } catch (n) {
            console.error(n)
        }
    };
})();
