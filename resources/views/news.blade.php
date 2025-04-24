<!doctype html>
<html dir="ltr" lang="en-US" prefix="og: https://ogp.me/ns#">

<head>
    <meta charset="UTF-8">
    <script>if (navigator.userAgent.match(/MSIE|Internet Explorer/i) || navigator.userAgent.match(/Trident\/7\..*?rv:11/i)) { var href = document.location.href; if (!href.match(/[?&]nowprocket/)) { if (href.indexOf("?") == -1) { if (href.indexOf("#") == -1) { document.location.href = href + "?nowprocket=1" } else { document.location.href = href.replace("#", "?nowprocket=1#") } } else { if (href.indexOf("#") == -1) { document.location.href = href + "&nowprocket=1" } else { document.location.href = href.replace("#", "&nowprocket=1#") } } } }</script>
    <script>(() => { class RocketLazyLoadScripts { constructor() { this.v = "2.0.3", this.userEvents = ["keydown", "keyup", "mousedown", "mouseup", "mousemove", "mouseover", "mouseenter", "mouseout", "mouseleave", "touchmove", "touchstart", "touchend", "touchcancel", "wheel", "click", "dblclick", "input", "visibilitychange"], this.attributeEvents = ["onblur", "onclick", "oncontextmenu", "ondblclick", "onfocus", "onmousedown", "onmouseenter", "onmouseleave", "onmousemove", "onmouseout", "onmouseover", "onmouseup", "onmousewheel", "onscroll", "onsubmit"] } async t() { this.i(), this.o(), /iP(ad|hone)/.test(navigator.userAgent) && this.h(), this.u(), this.l(this), this.m(), this.k(this), this.p(this), this._(), await Promise.all([this.R(), this.L()]), this.lastBreath = Date.now(), this.S(this), this.P(), this.D(), this.O(), this.M(), await this.C(this.delayedScripts.normal), await this.C(this.delayedScripts.defer), await this.C(this.delayedScripts.async), this.F("domReady"), await this.T(), await this.j(), await this.I(), this.F("windowLoad"), await this.A(), window.dispatchEvent(new Event("rocket-allScriptsLoaded")), this.everythingLoaded = !0, this.lastTouchEnd && await new Promise((t => setTimeout(t, 500 - Date.now() + this.lastTouchEnd))), this.H(), this.F("all"), this.U(), this.W() } i() { this.CSPIssue = sessionStorage.getItem("rocketCSPIssue"), document.addEventListener("securitypolicyviolation", (t => { this.CSPIssue || "script-src-elem" !== t.violatedDirective || "data" !== t.blockedURI || (this.CSPIssue = !0, sessionStorage.setItem("rocketCSPIssue", !0)) }), { isRocket: !0 }) } o() { window.addEventListener("pageshow", (t => { this.persisted = t.persisted, this.realWindowLoadedFired = !0 }), { isRocket: !0 }), window.addEventListener("pagehide", (() => { this.onFirstUserAction = null }), { isRocket: !0 }) } h() { let t; function e(e) { t = e } window.addEventListener("touchstart", e, { isRocket: !0 }), window.addEventListener("touchend", (function i(o) { Math.abs(o.changedTouches[0].pageX - t.changedTouches[0].pageX) < 10 && Math.abs(o.changedTouches[0].pageY - t.changedTouches[0].pageY) < 10 && o.timeStamp - t.timeStamp < 200 && (o.target.dispatchEvent(new PointerEvent("click", { target: o.target, bubbles: !0, cancelable: !0, detail: 1 })), event.preventDefault(), window.removeEventListener("touchstart", e, { isRocket: !0 }), window.removeEventListener("touchend", i, { isRocket: !0 })) }), { isRocket: !0 }) } q(t) { this.userActionTriggered || ("mousemove" !== t.type || this.firstMousemoveIgnored ? "keyup" === t.type || "mouseover" === t.type || "mouseout" === t.type || (this.userActionTriggered = !0, this.onFirstUserAction && this.onFirstUserAction()) : this.firstMousemoveIgnored = !0), "click" === t.type && t.preventDefault(), this.savedUserEvents.length > 0 && (t.stopPropagation(), t.stopImmediatePropagation()), "touchstart" === this.lastEvent && "touchend" === t.type && (this.lastTouchEnd = Date.now()), "click" === t.type && (this.lastTouchEnd = 0), this.lastEvent = t.type, this.savedUserEvents.push(t) } u() { this.savedUserEvents = [], this.userEventHandler = this.q.bind(this), this.userEvents.forEach((t => window.addEventListener(t, this.userEventHandler, { passive: !1, isRocket: !0 }))) } U() { this.userEvents.forEach((t => window.removeEventListener(t, this.userEventHandler, { passive: !1, isRocket: !0 }))), this.savedUserEvents.forEach((t => { t.target.dispatchEvent(new window[t.constructor.name](t.type, t)) })) } m() { this.eventsMutationObserver = new MutationObserver((t => { const e = "return false"; for (const i of t) { if ("attributes" === i.type) { const t = i.target.getAttribute(i.attributeName); t && t !== e && (i.target.setAttribute("data-rocket-" + i.attributeName, t), i.target["rocket" + i.attributeName] = new Function("event", t), i.target.setAttribute(i.attributeName, e)) } "childList" === i.type && i.addedNodes.forEach((t => { if (t.nodeType === Node.ELEMENT_NODE) for (const i of t.attributes) this.attributeEvents.includes(i.name) && i.value && "" !== i.value && (t.setAttribute("data-rocket-" + i.name, i.value), t["rocket" + i.name] = new Function("event", i.value), t.setAttribute(i.name, e)) })) } })), this.eventsMutationObserver.observe(document, { subtree: !0, childList: !0, attributeFilter: this.attributeEvents }) } H() { this.eventsMutationObserver.disconnect(), this.attributeEvents.forEach((t => { document.querySelectorAll("[data-rocket-" + t + "]").forEach((e => { e.setAttribute(t, e.getAttribute("data-rocket-" + t)), e.removeAttribute("data-rocket-" + t) })) })) } k(t) { Object.defineProperty(HTMLElement.prototype, "onclick", { get() { return this.rocketonclick || null }, set(e) { this.rocketonclick = e, this.setAttribute(t.everythingLoaded ? "onclick" : "data-rocket-onclick", "this.rocketonclick(event)") } }) } S(t) { function e(e, i) { let o = e[i]; e[i] = null, Object.defineProperty(e, i, { get: () => o, set(s) { t.everythingLoaded ? o = s : e["rocket" + i] = o = s } }) } e(document, "onreadystatechange"), e(window, "onload"), e(window, "onpageshow"); try { Object.defineProperty(document, "readyState", { get: () => t.rocketReadyState, set(e) { t.rocketReadyState = e }, configurable: !0 }), document.readyState = "loading" } catch (t) { console.log("WPRocket DJE readyState conflict, bypassing") } } l(t) { this.originalAddEventListener = EventTarget.prototype.addEventListener, this.originalRemoveEventListener = EventTarget.prototype.removeEventListener, this.savedEventListeners = [], EventTarget.prototype.addEventListener = function (e, i, o) { o && o.isRocket || !t.B(e, this) && !t.userEvents.includes(e) || t.B(e, this) && !t.userActionTriggered || e.startsWith("rocket-") || t.everythingLoaded ? t.originalAddEventListener.call(this, e, i, o) : t.savedEventListeners.push({ target: this, remove: !1, type: e, func: i, options: o }) }, EventTarget.prototype.removeEventListener = function (e, i, o) { o && o.isRocket || !t.B(e, this) && !t.userEvents.includes(e) || t.B(e, this) && !t.userActionTriggered || e.startsWith("rocket-") || t.everythingLoaded ? t.originalRemoveEventListener.call(this, e, i, o) : t.savedEventListeners.push({ target: this, remove: !0, type: e, func: i, options: o }) } } F(t) { "all" === t && (EventTarget.prototype.addEventListener = this.originalAddEventListener, EventTarget.prototype.removeEventListener = this.originalRemoveEventListener), this.savedEventListeners = this.savedEventListeners.filter((e => { let i = e.type, o = e.target || window; return "domReady" === t && "DOMContentLoaded" !== i && "readystatechange" !== i || ("windowLoad" === t && "load" !== i && "readystatechange" !== i && "pageshow" !== i || (this.B(i, o) && (i = "rocket-" + i), e.remove ? o.removeEventListener(i, e.func, e.options) : o.addEventListener(i, e.func, e.options), !1)) })) } p(t) { let e; function i(e) { return t.everythingLoaded ? e : e.split(" ").map((t => "load" === t || t.startsWith("load.") ? "rocket-jquery-load" : t)).join(" ") } function o(o) { function s(e) { const s = o.fn[e]; o.fn[e] = o.fn.init.prototype[e] = function () { return this[0] === window && t.userActionTriggered && ("string" == typeof arguments[0] || arguments[0] instanceof String ? arguments[0] = i(arguments[0]) : "object" == typeof arguments[0] && Object.keys(arguments[0]).forEach((t => { const e = arguments[0][t]; delete arguments[0][t], arguments[0][i(t)] = e }))), s.apply(this, arguments), this } } if (o && o.fn && !t.allJQueries.includes(o)) { const e = { DOMContentLoaded: [], "rocket-DOMContentLoaded": [] }; for (const t in e) document.addEventListener(t, (() => { e[t].forEach((t => t())) }), { isRocket: !0 }); o.fn.ready = o.fn.init.prototype.ready = function (i) { function s() { parseInt(o.fn.jquery) > 2 ? setTimeout((() => i.bind(document)(o))) : i.bind(document)(o) } return t.realDomReadyFired ? !t.userActionTriggered || t.fauxDomReadyFired ? s() : e["rocket-DOMContentLoaded"].push(s) : e.DOMContentLoaded.push(s), o([]) }, s("on"), s("one"), s("off"), t.allJQueries.push(o) } e = o } t.allJQueries = [], o(window.jQuery), Object.defineProperty(window, "jQuery", { get: () => e, set(t) { o(t) } }) } P() { const t = new Map; document.write = document.writeln = function (e) { const i = document.currentScript, o = document.createRange(), s = i.parentElement; let n = t.get(i); void 0 === n && (n = i.nextSibling, t.set(i, n)); const c = document.createDocumentFragment(); o.setStart(c, 0), c.appendChild(o.createContextualFragment(e)), s.insertBefore(c, n) } } async R() { return new Promise((t => { this.userActionTriggered ? t() : this.onFirstUserAction = t })) } async L() { return new Promise((t => { document.addEventListener("DOMContentLoaded", (() => { this.realDomReadyFired = !0, t() }), { isRocket: !0 }) })) } async I() { return this.realWindowLoadedFired ? Promise.resolve() : new Promise((t => { window.addEventListener("load", t, { isRocket: !0 }) })) } M() { this.pendingScripts = []; this.scriptsMutationObserver = new MutationObserver((t => { for (const e of t) e.addedNodes.forEach((t => { "SCRIPT" !== t.tagName || t.noModule || t.isWPRocket || this.pendingScripts.push({ script: t, promise: new Promise((e => { const i = () => { const i = this.pendingScripts.findIndex((e => e.script === t)); i >= 0 && this.pendingScripts.splice(i, 1), e() }; t.addEventListener("load", i, { isRocket: !0 }), t.addEventListener("error", i, { isRocket: !0 }), setTimeout(i, 1e3) })) }) })) })), this.scriptsMutationObserver.observe(document, { childList: !0, subtree: !0 }) } async j() { await this.J(), this.pendingScripts.length ? (await this.pendingScripts[0].promise, await this.j()) : this.scriptsMutationObserver.disconnect() } D() { this.delayedScripts = { normal: [], async: [], defer: [] }, document.querySelectorAll("script[type$=rocketlazyloadscript]").forEach((t => { t.hasAttribute("data-rocket-src") ? t.hasAttribute("async") && !1 !== t.async ? this.delayedScripts.async.push(t) : t.hasAttribute("defer") && !1 !== t.defer || "module" === t.getAttribute("data-rocket-type") ? this.delayedScripts.defer.push(t) : this.delayedScripts.normal.push(t) : this.delayedScripts.normal.push(t) })) } async _() { await this.L(); let t = []; document.querySelectorAll("script[type$=rocketlazyloadscript][data-rocket-src]").forEach((e => { let i = e.getAttribute("data-rocket-src"); if (i && !i.startsWith("data:")) { i.startsWith("//") && (i = location.protocol + i); try { const o = new URL(i).origin; o !== location.origin && t.push({ src: o, crossOrigin: e.crossOrigin || "module" === e.getAttribute("data-rocket-type") }) } catch (t) { } } })), t = [...new Map(t.map((t => [JSON.stringify(t), t]))).values()], this.N(t, "preconnect") } async $(t) { if (await this.G(), !0 !== t.noModule || !("noModule" in HTMLScriptElement.prototype)) return new Promise((e => { let i; function o() { (i || t).setAttribute("data-rocket-status", "executed"), e() } try { if (navigator.userAgent.includes("Firefox/") || "" === navigator.vendor || this.CSPIssue) i = document.createElement("script"), [...t.attributes].forEach((t => { let e = t.nodeName; "type" !== e && ("data-rocket-type" === e && (e = "type"), "data-rocket-src" === e && (e = "src"), i.setAttribute(e, t.nodeValue)) })), t.text && (i.text = t.text), t.nonce && (i.nonce = t.nonce), i.hasAttribute("src") ? (i.addEventListener("load", o, { isRocket: !0 }), i.addEventListener("error", (() => { i.setAttribute("data-rocket-status", "failed-network"), e() }), { isRocket: !0 }), setTimeout((() => { i.isConnected || e() }), 1)) : (i.text = t.text, o()), i.isWPRocket = !0, t.parentNode.replaceChild(i, t); else { const i = t.getAttribute("data-rocket-type"), s = t.getAttribute("data-rocket-src"); i ? (t.type = i, t.removeAttribute("data-rocket-type")) : t.removeAttribute("type"), t.addEventListener("load", o, { isRocket: !0 }), t.addEventListener("error", (i => { this.CSPIssue && i.target.src.startsWith("data:") ? (console.log("WPRocket: CSP fallback activated"), t.removeAttribute("src"), this.$(t).then(e)) : (t.setAttribute("data-rocket-status", "failed-network"), e()) }), { isRocket: !0 }), s ? (t.fetchPriority = "high", t.removeAttribute("data-rocket-src"), t.src = s) : t.src = "data:text/javascript;base64," + window.btoa(unescape(encodeURIComponent(t.text))) } } catch (i) { t.setAttribute("data-rocket-status", "failed-transform"), e() } })); t.setAttribute("data-rocket-status", "skipped") } async C(t) { const e = t.shift(); return e ? (e.isConnected && await this.$(e), this.C(t)) : Promise.resolve() } O() { this.N([...this.delayedScripts.normal, ...this.delayedScripts.defer, ...this.delayedScripts.async], "preload") } N(t, e) { this.trash = this.trash || []; let i = !0; var o = document.createDocumentFragment(); t.forEach((t => { const s = t.getAttribute && t.getAttribute("data-rocket-src") || t.src; if (s && !s.startsWith("data:")) { const n = document.createElement("link"); n.href = s, n.rel = e, "preconnect" !== e && (n.as = "script", n.fetchPriority = i ? "high" : "low"), t.getAttribute && "module" === t.getAttribute("data-rocket-type") && (n.crossOrigin = !0), t.crossOrigin && (n.crossOrigin = t.crossOrigin), t.integrity && (n.integrity = t.integrity), t.nonce && (n.nonce = t.nonce), o.appendChild(n), this.trash.push(n), i = !1 } })), document.head.appendChild(o) } W() { this.trash.forEach((t => t.remove())) } async T() { try { document.readyState = "interactive" } catch (t) { } this.fauxDomReadyFired = !0; try { await this.G(), document.dispatchEvent(new Event("rocket-readystatechange")), await this.G(), document.rocketonreadystatechange && document.rocketonreadystatechange(), await this.G(), document.dispatchEvent(new Event("rocket-DOMContentLoaded")), await this.G(), window.dispatchEvent(new Event("rocket-DOMContentLoaded")) } catch (t) { console.error(t) } } async A() { try { document.readyState = "complete" } catch (t) { } try { await this.G(), document.dispatchEvent(new Event("rocket-readystatechange")), await this.G(), document.rocketonreadystatechange && document.rocketonreadystatechange(), await this.G(), window.dispatchEvent(new Event("rocket-load")), await this.G(), window.rocketonload && window.rocketonload(), await this.G(), this.allJQueries.forEach((t => t(window).trigger("rocket-jquery-load"))), await this.G(); const t = new Event("rocket-pageshow"); t.persisted = this.persisted, window.dispatchEvent(t), await this.G(), window.rocketonpageshow && window.rocketonpageshow({ persisted: this.persisted }) } catch (t) { console.error(t) } } async G() { Date.now() - this.lastBreath > 45 && (await this.J(), this.lastBreath = Date.now()) } async J() { return document.hidden ? new Promise((t => setTimeout(t))) : new Promise((t => requestAnimationFrame(t))) } B(t, e) { return e === document && "readystatechange" === t || (e === document && "DOMContentLoaded" === t || (e === window && "DOMContentLoaded" === t || (e === window && "load" === t || e === window && "pageshow" === t))) } static run() { (new RocketLazyLoadScripts).t() } } RocketLazyLoadScripts.run() })();</script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <title>News &amp; Events - Mayani</title>
    <link rel="preload" data-rocket-preload as="font"
        href="https://mayani.ph/wp-content/uploads/2023/07/Gilroy-ExtraBold.ttf" crossorigin>
    <link rel="preload" data-rocket-preload as="font"
        href="https://mayani.ph/wp-content/uploads/2023/07/Gilroy-Bold.ttf" crossorigin>
    <link rel="preload" data-rocket-preload as="font"
        href="https://mayani.ph/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.woff2?5.32.0" crossorigin>
    <link rel="preload" data-rocket-preload as="font"
        href="https://mayani.ph/wp-content/plugins/elementor/assets/lib/font-awesome/webfonts/fa-brands-400.woff2"
        crossorigin>
    <link rel="preload" data-rocket-preload as="font"
        href="https://mayani.ph/wp-content/plugins/elementor/assets/lib/font-awesome/webfonts/fa-solid-900.woff2"
        crossorigin>
    <link rel="preload" data-rocket-preload as="font"
        href="https://fonts.gstatic.com/s/raleway/v34/1Ptug8zYS_SKggPNyC0ITw.woff2" crossorigin>
    <style id="wpr-usedcss">
        input:-webkit-autofill {
            -webkit-box-shadow: 0 0 0 30px #fff inset
        }

        @keyframes spin {
            0% {
                transform: rotate(0)
            }

            100% {
                transform: rotate(360deg)
            }
        }

        :root {
            --ss-primary-color: #5897fb;
            --ss-bg-color: #ffffff;
            --ss-font-color: #4d4d4d;
            --ss-font-placeholder-color: #8d8d8d;
            --ss-disabled-color: #dcdee2;
            --ss-border-color: #dcdee2;
            --ss-highlight-color: #fffb8c;
            --ss-success-color: #00b755;
            --ss-error-color: #dc3545;
            --ss-focus-color: #5897fb;
            --ss-main-height: 30px;
            --ss-content-height: 300px;
            --ss-spacing-l: 7px;
            --ss-spacing-m: 5px;
            --ss-spacing-s: 3px;
            --ss-animation-timing: 0.2s;
            --ss-border-radius: 4px
        }

        .premium-blog-thumb-effect-wrapper {
            position: relative;
            overflow: hidden
        }

        .premium-blog-thumb-effect-wrapper span {
            display: none
        }

        .premium-blog-thumb-effect-wrapper:hover .premium-blog-thumbnail-overlay {
            opacity: 1
        }

        .premium-blog-wrap .premium-blog-thumbnail-container {
            overflow: hidden
        }

        .premium-blog-wrap .premium-blog-thumbnail-container img {
            width: 100%;
            height: 100%;
            margin: 0 !important;
            -webkit-transition: .4s ease-in-out;
            transition: all .4s ease-in-out;
            display: block
        }

        .premium-blog-thumbnail-overlay {
            opacity: 0
        }

        .premium-blog-post-container {
            overflow: hidden
        }

        .premium-blog-post-container .premium-blog-inner-container {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column
        }

        .premium-blog-post-container .premium-blog-post-content {
            line-height: 1.5em;
            color: #777;
            font-size: 14px;
            margin-bottom: 10px
        }

        .premium-blog-post-container .premium-blog-entry-title {
            font-size: 18px;
            margin-bottom: 5px
        }

        .premium-blog-post-container .premium-blog-content-wrapper {
            background-color: #f5f5f5;
            padding: 30px
        }

        .premium-blog-post-container:not(.premium-blog-skin-classic):not(.premium-blog-skin-side):not(.premium-blog-skin-banner) .premium-blog-thumbnail-container:after,
        .premium-blog-post-container:not(.premium-blog-skin-classic):not(.premium-blog-skin-side):not(.premium-blog-skin-banner) .premium-blog-thumbnail-container:before {
            position: absolute;
            content: "";
            z-index: 1;
            top: 50%;
            left: 50%;
            opacity: 0;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            -webkit-transition: .4s linear;
            transition: all .4s linear 0s;
            height: 1px;
            width: 100%;
            background-color: #fff
        }

        .premium-blog-post-container:not(.premium-blog-skin-classic):not(.premium-blog-skin-side):not(.premium-blog-skin-banner) .premium-blog-thumbnail-container:before {
            width: 1px;
            height: 100%
        }

        .premium-blog-post-container:not(.premium-blog-skin-classic):not(.premium-blog-skin-side):not(.premium-blog-skin-banner):hover .premium-blog-thumbnail-container:after {
            width: 20px;
            opacity: 1
        }

        .premium-blog-post-container:not(.premium-blog-skin-classic):not(.premium-blog-skin-side):not(.premium-blog-skin-banner):hover .premium-blog-thumbnail-container:before {
            height: 20px;
            opacity: 1
        }

        .premium-blog-post-container:not(.premium-blog-skin-classic):not(.premium-blog-skin-side):not(.premium-blog-skin-banner) .premium-blog-content-wrapper {
            margin: 0 10px 20px;
            clear: both
        }

        .premium-blog-post-container.premium-blog-skin-side .premium-blog-thumbnail-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            -webkit-transition: .3s ease-in-out;
            transition: all .3s ease-in-out
        }

        .premium-blog-post-container.premium-blog-skin-side .premium-blog-thumbnail-overlay a {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            width: 100%;
            height: 100%
        }

        .premium-blog-post-container.premium-blog-skin-side .premium-blog-thumbnail-overlay i,
        .premium-blog-post-container.premium-blog-skin-side .premium-blog-thumbnail-overlay span {
            -webkit-transition: .3s ease-in-out;
            transition: all .3s ease-in-out
        }

        .premium-blog-post-container.premium-blog-skin-side {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex
        }

        .premium-blog-post-container.premium-blog-skin-side .premium-blog-thumbnail-container {
            height: 100%
        }

        .premium-blog-post-container.premium-blog-skin-side .premium-blog-content-wrapper {
            -webkit-flex: 1;
            -ms-flex: 1;
            flex: 1
        }

        .premium-blog-entry-meta {
            line-height: 1.3em;
            font-size: 12px;
            margin-bottom: 13px;
            color: #adadad
        }

        .premium-blog-entry-meta i {
            margin-right: 3px;
            -webkit-transition: .3s ease-in-out;
            transition: all .3s ease-in-out
        }

        .premium-blog-meta-data {
            display: inline-block
        }

        .premium-blog-meta-data .premium-blog-meta-separator {
            margin: 0 5px
        }

        .premium-blog-meta-data a,
        .premium-blog-meta-data span {
            color: inherit;
            -webkit-transition: .3s ease-in-out;
            transition: all .3s ease-in-out
        }

        .premium-blog-entry-title a {
            -webkit-transition: .3s ease-in-out;
            transition: all .3s ease-in-out
        }

        .premium-blog-align-left .premium-blog-inner-container {
            -webkit-align-items: flex-start;
            -ms-flex-align: start;
            align-items: flex-start
        }

        .premium-blog-wrap .premium-loading-feed {
            display: block;
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            background: rgba(255, 255, 255, .2);
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            z-index: 99
        }

        .premium-blog-wrap {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap
        }

        .premium-blog-wrap ul.slick-dots {
            width: 100%
        }

        .premium-blog-pagination-container {
            text-align: right
        }

        .premium-blog-pagination-container span {
            cursor: default
        }

        .premium-blog-pagination-container .page-numbers {
            display: inline-block;
            border: none;
            color: #000;
            line-height: 1;
            font-size: 1em;
            font-weight: 400;
            text-decoration: none;
            padding: .75em;
            margin: 0 .4em .4em 0;
            -webkit-transition: .3s ease-in-out;
            transition: all .3s ease-in-out
        }

        .premium-blog-even .premium-blog-post-container {
            height: 100%
        }

        .premium-blog-even .slick-track {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex
        }

        .premium-blog-even .slick-slide {
            height: inherit !important
        }

        .premium-blog-filter {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center
        }

        .premium-blog-filter .premium-blog-filters-container li a.category {
            outline: 0;
            text-decoration: none;
            border-radius: 75px;
            margin: 15px 5px 20px;
            padding: 7px 20px;
            -webkit-transition: .3s ease-in-out;
            transition: all .3s ease-in-out
        }

        .premium-blog-filter ul.premium-blog-filters-container {
            text-align: center;
            margin: 0;
            padding: 0
        }

        .premium-blog-filter .premium-blog-filters-container li {
            list-style: none;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex
        }

        @media (max-width:768px) {
            .premium-blog-post-container:not(.premium-blog-skin-banner) .premium-blog-content-wrapper {
                top: 0;
                margin: 0;
                padding: 15px
            }

            .premium-blog-skin-side {
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column
            }
        }

        .premium-loader {
            border: 3px solid #f3f3f3;
            border-top-width: 3px;
            border-top-style: solid;
            border-top-color: #f3f3f3;
            border-radius: 50%;
            border-top: 3px solid;
            border-top-color: #bbb;
            width: 30px;
            height: 30px;
            -webkit-animation: 2s linear infinite spin;
            animation: 2s linear infinite spin;
            margin: 0 auto
        }

        @-webkit-keyframes spin {
            0% {
                -webkit-transform: rotate(0);
                transform: rotate(0)
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }

        @keyframes spin {
            0% {
                -webkit-transform: rotate(0);
                transform: rotate(0)
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }

        .premium-error-notice {
            width: 100%;
            padding: 10px;
            color: #b94a48;
            background-color: #f2dede;
            border-color: #eed3d7;
            text-align: center
        }

        .premium-error-notice a {
            color: #252c59
        }

        .fa {
            display: inline-block;
            font: 14px/1 FontAwesome;
            font-size: inherit;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .fa-calendar:before {
            content: "\f073"
        }

        .fa-linkedin:before {
            content: "\f0e1"
        }

        .swiper-pagination-bullet {
            width: var(--swiper-pagination-bullet-width, var(--swiper-pagination-bullet-size, 8px));
            height: var(--swiper-pagination-bullet-height, var(--swiper-pagination-bullet-size, 8px));
            display: inline-block;
            border-radius: 50%;
            background: var(--swiper-pagination-bullet-inactive-color, #000);
            opacity: var(--swiper-pagination-bullet-inactive-opacity, .2)
        }

        .sp-pcp-section {
            color: #444
        }

        .sp-pcp-section a {
            text-decoration: none;
            transition: all .33s
        }

        .sp-pcp-section img {
            max-width: 100%;
            vertical-align: middle
        }

        .sp-pcp-section * {
            box-sizing: border-box
        }

        .sp-pcp-section .swiper-container {
            position: initial
        }

        .sp-pcp-section .swiper-container.sp-pcp-carousel.top_right {
            position: relative
        }

        .sp-pcp-post .sp-pcp-thumb img:focus,
        .sp-pcp-post .sp-pcp-thumb img:hover,
        .sp-pcp-post .sp-pcp-thumb:focus,
        .sp-pcp-post .sp-pcp-thumb:hover {
            outline: 0;
            text-decoration: none;
            outline-offset: 0;
            color: transparent;
            border: none
        }

        .sp-pcp-post {
            display: -webkit-flex;
            display: flex;
            flex-direction: column;
            overflow: hidden
        }

        .sp-pcp-post a {
            text-decoration: none
        }

        .sp-pcp-post .pcp-post-thumb-wrapper {
            overflow: hidden;
            display: block;
            margin-bottom: 11px
        }

        .sp-pcp-post .sp-pcp-post-thumb-area {
            position: relative
        }

        .sp-pcp-post .sp-pcp-post-thumb-area img {
            max-width: 100%;
            transition: ease all .3s;
            height: 100%
        }

        .sp-pcp-post .sp-pcp-title {
            margin: 0;
            font-size: 15px
        }

        .sp-pcp-post .sp-pcp-title {
            margin: 0 0 9px
        }

        .sp-pcp-post .sp-pcp-title,
        .sp-pcp-post .sp-pcp-title a {
            text-transform: none;
            font-size: 20px;
            line-height: 24px;
            color: #111;
            font-weight: 400;
            text-decoration: none
        }

        .sp-pcp-post .sp-pcp-post-meta {
            margin: 0 0 9px;
            text-align: left
        }

        .sp-pcp-post .sp-pcp-post-meta ul {
            list-style: none;
            margin: 0;
            padding: 0;
            line-height: 1
        }

        .sp-pcp-post .sp-pcp-post-meta ul li {
            display: inline-block;
            margin: 0 5px 5px 0
        }

        .sp-pcp-post .sp-pcp-post-meta ul li .fa {
            margin-right: 3px
        }

        .sp-pcp-post .sp-pcp-post-meta ul li a {
            display: inline-block;
            text-decoration: none;
            box-shadow: none
        }

        .sp-pcp-post .sp-pcp-post-meta li,
        .sp-pcp-post .sp-pcp-post-meta li a,
        .sp-pcp-post .sp-pcp-post-meta ul {
            text-transform: none;
            font-size: 14px;
            line-height: 16px;
            letter-spacing: 0;
            color: #888
        }

        .sp-pcp-post .sp-pcp-post-content {
            text-transform: none;
            font-size: 16px;
            line-height: 20px;
            letter-spacing: 0;
            margin: 0 0 17px;
            color: #444
        }

        .sp-pcp-post .sp-pcp-post-content p:first-of-type {
            margin-top: 0
        }

        .sp-pcp-post .sp-pcp-post-content p:last-of-type {
            margin-bottom: 0
        }

        .sp-pcp-post .sp-pcp-post-content .sp-pcp-readmore {
            margin-top: 15px
        }

        .sp-pcp-post .sp-pcp-post-content .sp-pcp-readmore a {
            display: inline-block;
            border: 1px solid #888;
            padding: 7px 12px;
            box-shadow: 0 0 0;
            text-transform: uppercase;
            font-size: 12px;
            line-height: 18px;
            letter-spacing: 0;
            background: 0 0;
            color: #111;
            border-color: #888;
            border-radius: 0
        }

        .pcp-carousel-wrapper .sp-pcp-carousel {
            padding-bottom: 60px;
            padding-top: 60px
        }

        .pcp-carousel-wrapper {
            position: relative
        }

        .pcp-carousel-wrapper .pcp-button-next,
        .pcp-carousel-wrapper .pcp-button-prev {
            background-image: none;
            background-size: auto;
            font-size: 25px;
            height: 33px;
            width: 33px;
            margin-top: 16px;
            text-align: center;
            line-height: 31px;
            -webkit-transition: .3s
        }

        .pcp-carousel-wrapper .pcp-button-next.top_right,
        .pcp-carousel-wrapper .pcp-button-prev.top_right {
            top: 0;
            right: 0
        }

        .pcp-carousel-wrapper .pcp-button-prev.top_right {
            right: 42px;
            left: auto
        }

        .pcp-carousel-wrapper .swiper-button-next::after,
        .pcp-carousel-wrapper .swiper-button-prev::after {
            display: none
        }

        .pcp-carousel-wrapper.center .swiper-slide .sp-pcp-post {
            transform: scale(.9);
            opacity: .8;
            transition: .22s all
        }

        .pcp-carousel-wrapper.center .swiper-slide.swiper-slide-active .sp-pcp-post {
            transform: scale(1.1);
            opacity: 1
        }

        .sp-pcp-post {
            direction: ltr
        }

        html[dir=rtl] .sp-pcp-post {
            direction: rtl
        }

        .pcp-carousel-wrapper .swiper-pagination-bullets.dots .swiper-pagination-bullet {
            width: 11px;
            height: 11px;
            opacity: 1;
            margin: 0 4px
        }

        .pcp-carousel-wrapper .swiper-pagination-bullets.number .swiper-pagination-bullet {
            margin: 0 4px;
            background: #444;
            padding: 5px 10px;
            border-radius: 0;
            opacity: 1;
            height: auto;
            color: #fff;
            width: auto;
            margin: 3px;
            display: inline-block;
            font-size: 14px
        }

        .sp-pcp-container {
            width: 100%;
            margin-right: auto;
            margin-left: auto;
            position: relative;
            overflow: hidden
        }

        .pcp-carousel-wrapper.standard .sp-pcp-carousel:not(.swiper-initialized, .swiper-container-initialized) .swiper-wrapper {
            display: flex;
            width: unset
        }

        @media screen and (min-width:992px) {
            .pcp-carousel-wrapper.standard .sp-pcp-carousel:not(.swiper-initialized, .swiper-container-initialized) .swiper-wrapper {
                margin-left: -20px
            }

            .pcp-carousel-wrapper.standard .sp-pcp-carousel:not(.swiper-initialized, .swiper-container-initialized) .swiper-wrapper>.swiper-slide {
                width: 25%;
                min-width: 25%;
                padding-left: 20px
            }
        }

        .pcp-preloader {
            background-color: #fff;
            background-image: var(--wpr-bg-95447fef-d954-44ac-9629-53c9f16fb161);
            background-repeat: no-repeat;
            background-position: center center;
            position: absolute;
            z-index: 9999;
            width: 100%;
            height: 100%;
            visibility: visible
        }

        .elementor-default .sp-pcp-section .swiper-container:not(.swiper-container-initialized) .swiper-wrapper,
        .elementor-default .sp-pcp-section .swiper:not(.swiper-initialized) .swiper-wrapper {
            overflow: initial
        }

        :root {
            --tec-grid-gutter: 48px;
            --tec-grid-gutter-negative: calc(var(--tec-grid-gutter)*-1);
            --tec-grid-gutter-half: calc(var(--tec-grid-gutter)/2);
            --tec-grid-gutter-half-negative: calc(var(--tec-grid-gutter-half)*-1);
            --tec-grid-gutter-small: 42px;
            --tec-grid-gutter-small-negative: calc(var(--tec-grid-gutter-small)*-1);
            --tec-grid-gutter-small-half: calc(var(--tec-grid-gutter-small)/2);
            --tec-grid-gutter-small-half-negative: calc(var(--tec-grid-gutter-small-half)*-1);
            --tec-grid-gutter-page: 42px;
            --tec-grid-gutter-page-small: 19.5px;
            --tec-grid-width-default: 1176px;
            --tec-grid-width-min: 320px;
            --tec-grid-width: calc(var(--tec-grid-width-default) + var(--tec-grid-gutter-page)*2);
            --tec-grid-width-1-of-2: 50%;
            --tec-grid-width-1-of-3: 33.333%;
            --tec-grid-width-1-of-4: 25%;
            --tec-grid-width-1-of-5: 20%;
            --tec-grid-width-1-of-7: 14.285%;
            --tec-grid-width-1-of-8: 12.5%;
            --tec-grid-width-1-of-9: 11.111%;
            --tec-spacer-0: 4px;
            --tec-spacer-1: 8px;
            --tec-spacer-2: 12px;
            --tec-spacer-3: 16px;
            --tec-spacer-4: 20px;
            --tec-spacer-5: 24px;
            --tec-spacer-6: 28px;
            --tec-spacer-7: 32px;
            --tec-spacer-8: 40px;
            --tec-spacer-9: 48px;
            --tec-spacer-10: 56px;
            --tec-spacer-11: 64px;
            --tec-spacer-12: 80px;
            --tec-spacer-13: 96px;
            --tec-spacer-14: 160px;
            --tec-z-index-spinner-container: 100;
            --tec-z-index-views-selector: 30;
            --tec-z-index-dropdown: 30;
            --tec-z-index-events-bar-button: 20;
            --tec-z-index-search: 10;
            --tec-z-index-filters: 9;
            --tec-z-index-scroller: 7;
            --tec-z-index-week-event-hover: 5;
            --tec-z-index-map-event-hover: 5;
            --tec-z-index-map-event-hover-actions: 6;
            --tec-z-index-multiday-event: 5;
            --tec-z-index-multiday-event-bar: 2;
            --tec-color-text-primary: #141827;
            --tec-color-text-primary-light: rgba(20, 24, 39, .62);
            --tec-color-text-secondary: #5d5d5d;
            --tec-color-text-disabled: #d5d5d5;
            --tec-color-text-events-title: var(--tec-color-text-primary);
            --tec-color-text-event-title: var(--tec-color-text-events-title);
            --tec-color-text-event-date: var(--tec-color-text-primary);
            --tec-color-text-secondary-event-date: var(--tec-color-text-secondary);
            --tec-color-icon-primary: #5d5d5d;
            --tec-color-icon-primary-alt: #757575;
            --tec-color-icon-secondary: #bababa;
            --tec-color-icon-active: #141827;
            --tec-color-icon-disabled: #d5d5d5;
            --tec-color-icon-focus: #334aff;
            --tec-color-icon-error: #da394d;
            --tec-color-event-icon: #141827;
            --tec-color-event-icon-hover: #334aff;
            --tec-color-accent-primary: #334aff;
            --tec-color-accent-primary-hover: rgba(51, 74, 255, .8);
            --tec-color-accent-primary-active: rgba(51, 74, 255, .9);
            --tec-color-accent-primary-background: rgba(51, 74, 255, .07);
            --tec-color-accent-secondary: #141827;
            --tec-color-accent-secondary-hover: rgba(20, 24, 39, .8);
            --tec-color-accent-secondary-active: rgba(20, 24, 39, .9);
            --tec-color-accent-secondary-background: rgba(20, 24, 39, .07);
            --tec-color-button-primary: var(--tec-color-accent-primary);
            --tec-color-button-primary-hover: var(--tec-color-accent-primary-hover);
            --tec-color-button-primary-active: var(--tec-color-accent-primary-active);
            --tec-color-button-primary-background: var(--tec-color-accent-primary-background);
            --tec-color-button-secondary: var(--tec-color-accent-secondary);
            --tec-color-button-secondary-hover: var(--tec-color-accent-secondary-hover);
            --tec-color-button-secondary-active: var(--tec-color-accent-secondary-active);
            --tec-color-button-secondary-background: var(--tec-color-accent-secondary-background);
            --tec-color-link-primary: var(--tec-color-text-primary);
            --tec-color-link-accent: var(--tec-color-accent-primary);
            --tec-color-link-accent-hover: rgba(51, 74, 255, .8);
            --tec-color-border-default: #d5d5d5;
            --tec-color-border-secondary: #e4e4e4;
            --tec-color-border-tertiary: #7d7d7d;
            --tec-color-border-hover: #5d5d5d;
            --tec-color-border-active: #141827;
            --tec-color-background: #fff;
            --tec-color-background-events: transparent;
            --tec-color-background-transparent: hsla(0, 0%, 100%, .6);
            --tec-color-background-secondary: #f7f6f6;
            --tec-color-background-messages: rgba(20, 24, 39, .07);
            --tec-color-background-secondary-hover: #f0eeee;
            --tec-color-background-error: rgba(218, 57, 77, .08);
            --tec-color-box-shadow: rgba(0, 0, 0, .14);
            --tec-color-box-shadow-secondary: rgba(0, 0, 0, .1);
            --tec-color-scroll-track: rgba(0, 0, 0, .25);
            --tec-color-scroll-bar: rgba(0, 0, 0, .5);
            --tec-color-background-primary-multiday: rgba(51, 74, 255, .24);
            --tec-color-background-primary-multiday-hover: rgba(51, 74, 255, .34);
            --tec-color-background-secondary-multiday: rgba(20, 24, 39, .24);
            --tec-color-background-secondary-multiday-hover: rgba(20, 24, 39, .34);
            --tec-color-accent-primary-week-event: rgba(51, 74, 255, .1);
            --tec-color-accent-primary-week-event-hover: rgba(51, 74, 255, .2);
            --tec-color-accent-primary-week-event-featured: rgba(51, 74, 255, .04);
            --tec-color-accent-primary-week-event-featured-hover: rgba(51, 74, 255, .14);
            --tec-color-background-secondary-datepicker: var(--tec-color-background-secondary);
            --tec-color-accent-primary-background-datepicker: var(--tec-color-accent-primary-background)
        }

        :root {
            --tec-grid-gutter: 48px;
            --tec-grid-gutter-negative: calc(var(--tec-grid-gutter)*-1);
            --tec-grid-gutter-half: calc(var(--tec-grid-gutter)/2);
            --tec-grid-gutter-half-negative: calc(var(--tec-grid-gutter-half)*-1);
            --tec-grid-gutter-small: 42px;
            --tec-grid-gutter-small-negative: calc(var(--tec-grid-gutter-small)*-1);
            --tec-grid-gutter-small-half: calc(var(--tec-grid-gutter-small)/2);
            --tec-grid-gutter-small-half-negative: calc(var(--tec-grid-gutter-small-half)*-1);
            --tec-grid-gutter-page: 42px;
            --tec-grid-gutter-page-small: 19.5px;
            --tec-grid-width-default: 1176px;
            --tec-grid-width-min: 320px;
            --tec-grid-width: calc(var(--tec-grid-width-default) + var(--tec-grid-gutter-page)*2);
            --tec-grid-width-1-of-2: 50%;
            --tec-grid-width-1-of-3: 33.333%;
            --tec-grid-width-1-of-4: 25%;
            --tec-grid-width-1-of-5: 20%;
            --tec-grid-width-1-of-7: 14.285%;
            --tec-grid-width-1-of-8: 12.5%;
            --tec-grid-width-1-of-9: 11.111%;
            --tec-spacer-0: 4px;
            --tec-spacer-1: 8px;
            --tec-spacer-2: 12px;
            --tec-spacer-3: 16px;
            --tec-spacer-4: 20px;
            --tec-spacer-5: 24px;
            --tec-spacer-6: 28px;
            --tec-spacer-7: 32px;
            --tec-spacer-8: 40px;
            --tec-spacer-9: 48px;
            --tec-spacer-10: 56px;
            --tec-spacer-11: 64px;
            --tec-spacer-12: 80px;
            --tec-spacer-13: 96px;
            --tec-spacer-14: 160px;
            --tec-z-index-spinner-container: 100;
            --tec-z-index-views-selector: 30;
            --tec-z-index-dropdown: 30;
            --tec-z-index-events-bar-button: 20;
            --tec-z-index-search: 10;
            --tec-z-index-filters: 9;
            --tec-z-index-scroller: 7;
            --tec-z-index-week-event-hover: 5;
            --tec-z-index-map-event-hover: 5;
            --tec-z-index-map-event-hover-actions: 6;
            --tec-z-index-multiday-event: 5;
            --tec-z-index-multiday-event-bar: 2;
            --tec-color-text-primary: #141827;
            --tec-color-text-primary-light: rgba(20, 24, 39, .62);
            --tec-color-text-secondary: #5d5d5d;
            --tec-color-text-disabled: #d5d5d5;
            --tec-color-text-events-title: var(--tec-color-text-primary);
            --tec-color-text-event-title: var(--tec-color-text-events-title);
            --tec-color-text-event-date: var(--tec-color-text-primary);
            --tec-color-text-secondary-event-date: var(--tec-color-text-secondary);
            --tec-color-icon-primary: #5d5d5d;
            --tec-color-icon-primary-alt: #757575;
            --tec-color-icon-secondary: #bababa;
            --tec-color-icon-active: #141827;
            --tec-color-icon-disabled: #d5d5d5;
            --tec-color-icon-focus: #334aff;
            --tec-color-icon-error: #da394d;
            --tec-color-event-icon: #141827;
            --tec-color-event-icon-hover: #334aff;
            --tec-color-accent-primary: #334aff;
            --tec-color-accent-primary-hover: rgba(51, 74, 255, .8);
            --tec-color-accent-primary-active: rgba(51, 74, 255, .9);
            --tec-color-accent-primary-background: rgba(51, 74, 255, .07);
            --tec-color-accent-secondary: #141827;
            --tec-color-accent-secondary-hover: rgba(20, 24, 39, .8);
            --tec-color-accent-secondary-active: rgba(20, 24, 39, .9);
            --tec-color-accent-secondary-background: rgba(20, 24, 39, .07);
            --tec-color-button-primary: var(--tec-color-accent-primary);
            --tec-color-button-primary-hover: var(--tec-color-accent-primary-hover);
            --tec-color-button-primary-active: var(--tec-color-accent-primary-active);
            --tec-color-button-primary-background: var(--tec-color-accent-primary-background);
            --tec-color-button-secondary: var(--tec-color-accent-secondary);
            --tec-color-button-secondary-hover: var(--tec-color-accent-secondary-hover);
            --tec-color-button-secondary-active: var(--tec-color-accent-secondary-active);
            --tec-color-button-secondary-background: var(--tec-color-accent-secondary-background);
            --tec-color-link-primary: var(--tec-color-text-primary);
            --tec-color-link-accent: var(--tec-color-accent-primary);
            --tec-color-link-accent-hover: rgba(51, 74, 255, .8);
            --tec-color-border-default: #d5d5d5;
            --tec-color-border-secondary: #e4e4e4;
            --tec-color-border-tertiary: #7d7d7d;
            --tec-color-border-hover: #5d5d5d;
            --tec-color-border-active: #141827;
            --tec-color-background: #fff;
            --tec-color-background-events: transparent;
            --tec-color-background-transparent: hsla(0, 0%, 100%, .6);
            --tec-color-background-secondary: #f7f6f6;
            --tec-color-background-messages: rgba(20, 24, 39, .07);
            --tec-color-background-secondary-hover: #f0eeee;
            --tec-color-background-error: rgba(218, 57, 77, .08);
            --tec-color-box-shadow: rgba(0, 0, 0, .14);
            --tec-color-box-shadow-secondary: rgba(0, 0, 0, .1);
            --tec-color-scroll-track: rgba(0, 0, 0, .25);
            --tec-color-scroll-bar: rgba(0, 0, 0, .5);
            --tec-color-background-primary-multiday: rgba(51, 74, 255, .24);
            --tec-color-background-primary-multiday-hover: rgba(51, 74, 255, .34);
            --tec-color-background-secondary-multiday: rgba(20, 24, 39, .24);
            --tec-color-background-secondary-multiday-hover: rgba(20, 24, 39, .34);
            --tec-color-accent-primary-week-event: rgba(51, 74, 255, .1);
            --tec-color-accent-primary-week-event-hover: rgba(51, 74, 255, .2);
            --tec-color-accent-primary-week-event-featured: rgba(51, 74, 255, .04);
            --tec-color-accent-primary-week-event-featured-hover: rgba(51, 74, 255, .14);
            --tec-color-background-secondary-datepicker: var(--tec-color-background-secondary);
            --tec-color-accent-primary-background-datepicker: var(--tec-color-accent-primary-background);
            --tec-border-radius-default: 4px;
            --tec-border-width-week-event: 2px;
            --tec-box-shadow-default: 0 2px 5px 0 var(--tec-color-box-shadow);
            --tec-box-shadow-tooltip: 0 2px 12px 0 var(--tec-color-box-shadow);
            --tec-box-shadow-card: 0 1px 6px 2px var(--tec-color-box-shadow);
            --tec-box-shadow-multiday: 16px 6px 6px -2px var(--tec-color-box-shadow-secondary);
            --tec-form-color-background: var(--tec-color-background);
            --tec-form-color-border-default: var(--tec-color-text-primary);
            --tec-form-color-border-active: var(--tec-color-accent-secondary);
            --tec-form-color-border-secondary: var(--tec-color-border-tertiary);
            --tec-form-color-accent-primary: var(--tec-color-accent-primary);
            --tec-form-box-shadow-default: var(--tec-box-shadow-default);
            --tec-opacity-background: 0.07;
            --tec-opacity-select-highlighted: 0.3;
            --tec-opacity-icon-hover: 0.8;
            --tec-opacity-icon-active: 0.9;
            --tec-opacity-default: 1;
            --tec-transition: all 0.2s ease;
            --tec-transition-background-color: background-color 0.2s ease;
            --tec-transition-color-border-color: color 0.2s ease, border-color 0.2s ease;
            --tec-transition-transform: transform 0.2s ease;
            --tec-transition-border-color: border-color 0.2s ease;
            --tec-transition-color: color 0.2s ease;
            --tec-transition-opacity: opacity 0.2s ease;
            --tec-font-family-sans-serif: "Helvetica Neue", Helvetica, -apple-system, BlinkMacSystemFont, Roboto, Arial, sans-serif;
            --tec-font-weight-regular: 400;
            --tec-font-weight-bold: 700;
            --tec-font-size-0: 11px;
            --tec-font-size-1: 12px;
            --tec-font-size-2: 14px;
            --tec-font-size-3: 16px;
            --tec-font-size-4: 18px;
            --tec-font-size-5: 20px;
            --tec-font-size-6: 22px;
            --tec-font-size-7: 24px;
            --tec-font-size-8: 28px;
            --tec-font-size-9: 32px;
            --tec-font-size-10: 42px;
            --tec-line-height-0: 1.38;
            --tec-line-height-1: 1.42;
            --tec-line-height-2: 1.5;
            --tec-line-height-3: 1.62
        }

        .is-menu a,
        .is-menu a:focus,
        .is-menu a:hover,
        .is-menu:hover>a {
            background: 0 0 !important;
            outline: 0
        }

        .is-menu,
        form .is-link-container {
            position: relative
        }

        .is-menu a {
            line-height: 1
        }

        .is-menu a::after,
        .is-menu a::before {
            display: none !important
        }

        .is-menu.default form {
            max-width: 310px
        }

        .is-menu.is-dropdown form {
            display: none;
            min-width: 310px;
            max-width: 100%;
            position: absolute;
            right: 0;
            top: 100%;
            z-index: 9
        }

        .is-menu.full-width-menu form,
        .is-menu.sliding form {
            min-width: 0 !important;
            overflow: hidden;
            position: absolute;
            right: 0;
            top: 25%;
            width: 0;
            z-index: 99;
            padding: 0;
            margin: 0
        }

        .is-menu.full-width-menu form:not(.is-search-form) input[type=search],
        .is-menu.full-width-menu form:not(.is-search-form) input[type=text],
        .is-menu.is-dropdown form:not(.is-search-form) input[type=search],
        .is-menu.is-dropdown form:not(.is-search-form) input[type=text],
        .is-menu.sliding form:not(.is-search-form) input[type=search],
        .is-menu.sliding form:not(.is-search-form) input[type=text] {
            background: #fff;
            color: #000
        }

        .is-menu.is-first form {
            right: auto;
            left: 0
        }

        .is-menu.full-width-menu.open .search-close,
        .is-menu.full-width-menu:not(.open) form,
        .is-menu.sliding.open .search-close,
        .is-menu.sliding:not(.open) form,
        form:hover+.is-link-container,
        form:hover>.is-link-container {
            display: block
        }

        .is-link-container,
        .is-menu form .screen-reader-text,
        .search-close {
            display: none
        }

        .is-menu form label {
            margin: 0;
            padding: 0
        }

        .is-menu-wrapper {
            display: none;
            position: absolute;
            right: 5px;
            top: 5px;
            width: auto;
            z-index: 9999
        }

        .popup-search-close,
        .search-close {
            cursor: pointer;
            width: 20px;
            height: 20px
        }

        .is-menu-wrapper.is-expanded {
            width: 100%
        }

        .is-menu-wrapper .is-menu {
            float: right
        }

        .is-menu-wrapper .is-menu form {
            right: 0;
            left: auto
        }

        .search-close {
            position: absolute;
            right: -22px;
            top: 33%;
            z-index: 99999
        }

        .is-menu.is-first .search-close {
            right: auto;
            left: -22px
        }

        .is-menu.is-dropdown .search-close {
            top: calc(100% + 7px)
        }

        .popup-search-close {
            z-index: 99999;
            float: right;
            position: relative;
            margin: 20px 20px 0 0
        }

        #is-popup-wrapper {
            width: 100%;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            background: rgba(4, 4, 4, .91);
            z-index: 999999
        }

        .popup-search-close:after,
        .search-close:after {
            border-left: 2px solid #848484;
            content: '';
            height: 20px;
            left: 9px;
            position: absolute;
            -webkit-transform: rotate(45deg);
            -moz-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            -o-transform: rotate(45deg);
            transform: rotate(45deg)
        }

        .popup-search-close:before,
        .search-close:before {
            border-left: 2px solid #848484;
            content: '';
            height: 20px;
            left: 9px;
            position: absolute;
            -webkit-transform: rotate(-45deg);
            -moz-transform: rotate(-45deg);
            -ms-transform: rotate(-45deg);
            -o-transform: rotate(-45deg);
            transform: rotate(-45deg)
        }

        @media screen and (max-width:910px) {
            .is-menu form {
                left: 0;
                min-width: 50%;
                right: auto
            }

            .is-menu.default form {
                max-width: 100%
            }

            .is-menu.full-width-menu.active-search {
                position: relative
            }

            .is-menu-wrapper {
                display: block
            }
        }

        .is-menu.full-width-menu.is-first button.is-search-submit,
        .is-menu.sliding.is-first button.is-search-submit {
            display: inline-block !important
        }

        form .is-link-container div {
            position: absolute;
            width: 200px;
            bottom: -25px;
            left: 5px;
            z-index: 99999;
            height: auto;
            line-height: 14px;
            padding: 10px 15px
        }

        form .is-link-container a {
            text-decoration: none;
            font-size: 14px;
            font-weight: 100;
            font-family: arial;
            box-shadow: none
        }

        form .is-link-container a:hover {
            text-decoration: underline
        }

        .is-menu.full-width-menu.is-first button.is-search-submit:not([style="display: inline-block;"]),
        .is-menu.sliding.is-first button.is-search-submit:not([style="display: inline-block;"]) {
            visibility: hidden
        }

        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        *,
        :after,
        :before {
            box-sizing: border-box
        }

        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, 'Noto Sans', sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #333;
            background-color: #fff;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        h1,
        h2,
        h3,
        h4 {
            -webkit-margin-before: .5rem;
            margin-block-start: .5rem;
            -webkit-margin-after: 1rem;
            margin-block-end: 1rem;
            font-family: inherit;
            font-weight: 500;
            line-height: 1.2;
            color: inherit
        }

        h1 {
            font-size: 2.5rem
        }

        h2 {
            font-size: 2rem
        }

        h3 {
            font-size: 1.75rem
        }

        h4 {
            font-size: 1.5rem
        }

        p {
            -webkit-margin-before: 0;
            margin-block-start: 0;
            -webkit-margin-after: .9rem;
            margin-block-end: .9rem
        }

        a {
            background-color: transparent;
            text-decoration: none;
            color: #c36
        }

        a:active,
        a:hover {
            color: #336
        }

        a:not([href]):not([tabindex]),
        a:not([href]):not([tabindex]):focus,
        a:not([href]):not([tabindex]):hover {
            color: inherit;
            text-decoration: none
        }

        a:not([href]):not([tabindex]):focus {
            outline: 0
        }

        code {
            font-family: monospace, monospace;
            font-size: 1em
        }

        sub {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sub {
            bottom: -.25em
        }

        img {
            border-style: none;
            height: auto;
            max-width: 100%
        }

        [hidden],
        template {
            display: none
        }

        @media print {

            *,
            :after,
            :before {
                background: 0 0 !important;
                color: #000 !important;
                box-shadow: none !important;
                text-shadow: none !important
            }

            a,
            a:visited {
                text-decoration: underline
            }

            a[href]:after {
                content: " (" attr(href) ")"
            }

            a[href^="#"]:after,
            a[href^="javascript:"]:after {
                content: ""
            }

            img,
            tr {
                -moz-column-break-inside: avoid;
                break-inside: avoid
            }

            h2,
            h3,
            p {
                orphans: 3;
                widows: 3
            }

            h2,
            h3 {
                -moz-column-break-after: avoid;
                break-after: avoid
            }
        }

        label {
            display: inline-block;
            line-height: 1;
            vertical-align: middle
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-size: 1rem;
            line-height: 1.5;
            margin: 0
        }

        input[type=email],
        input[type=number],
        input[type=password],
        input[type=search],
        input[type=text],
        input[type=url],
        select,
        textarea {
            width: 100%;
            border: 1px solid #666;
            border-radius: 3px;
            padding: .5rem 1rem;
            transition: all .3s
        }

        input[type=email]:focus,
        input[type=number]:focus,
        input[type=password]:focus,
        input[type=search]:focus,
        input[type=text]:focus,
        input[type=url]:focus,
        select:focus,
        textarea:focus {
            border-color: #333
        }

        button,
        input {
            overflow: visible
        }

        button,
        select {
            text-transform: none
        }

        [type=button],
        [type=reset],
        [type=submit],
        button {
            width: auto;
            -webkit-appearance: button
        }

        [type=button]::-moz-focus-inner,
        [type=reset]::-moz-focus-inner,
        [type=submit]::-moz-focus-inner,
        button::-moz-focus-inner {
            border-style: none;
            padding: 0
        }

        [type=button]:-moz-focusring,
        [type=reset]:-moz-focusring,
        [type=submit]:-moz-focusring,
        button:-moz-focusring {
            outline: ButtonText dotted 1px
        }

        [type=button],
        [type=submit],
        button {
            display: inline-block;
            font-weight: 400;
            color: #c36;
            text-align: center;
            white-space: nowrap;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
            background-color: transparent;
            border: 1px solid #c36;
            padding: .5rem 1rem;
            font-size: 1rem;
            border-radius: 3px;
            transition: all .3s
        }

        [type=button]:focus,
        [type=submit]:focus,
        button:focus {
            outline: -webkit-focus-ring-color auto 5px
        }

        [type=button]:focus,
        [type=button]:hover,
        [type=submit]:focus,
        [type=submit]:hover,
        button:focus,
        button:hover {
            color: #fff;
            background-color: #c36;
            text-decoration: none
        }

        [type=button]:not(:disabled),
        [type=submit]:not(:disabled),
        button:not(:disabled) {
            cursor: pointer
        }

        fieldset {
            padding: .35em .75em .625em
        }

        legend {
            box-sizing: border-box;
            color: inherit;
            display: table;
            max-width: 100%;
            padding: 0;
            white-space: normal
        }

        progress {
            vertical-align: baseline
        }

        textarea {
            overflow: auto;
            resize: vertical
        }

        [type=checkbox],
        [type=radio] {
            box-sizing: border-box;
            padding: 0
        }

        [type=number]::-webkit-inner-spin-button,
        [type=number]::-webkit-outer-spin-button {
            height: auto
        }

        [type=search] {
            -webkit-appearance: textfield;
            outline-offset: -2px
        }

        [type=search]::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        select {
            display: block
        }

        table {
            background-color: transparent;
            width: 100%;
            -webkit-margin-after: 15px;
            margin-block-end: 15px;
            font-size: .9em;
            border-spacing: 0;
            border-collapse: collapse
        }

        table tbody+tbody {
            -webkit-border-before: 2px solid hsla(0, 0%, 50.2%, .5019607843);
            border-block-start: 2px solid hsla(0, 0%, 50.2%, .5019607843)
        }

        dl,
        dt,
        li,
        ul {
            -webkit-margin-before: 0;
            margin-block-start: 0;
            -webkit-margin-after: 0;
            margin-block-end: 0;
            border: 0;
            outline: 0;
            font-size: 100%;
            vertical-align: baseline;
            background: 0 0
        }

        .page-content a {
            text-decoration: underline
        }

        .pagination {
            margin: 20px auto
        }

        .sticky {
            position: relative;
            display: block
        }

        .hide {
            display: none !important
        }

        .screen-reader-text {
            clip: rect(1px, 1px, 1px, 1px);
            height: 1px;
            overflow: hidden;
            position: absolute !important;
            width: 1px;
            word-wrap: normal !important
        }

        .screen-reader-text:focus {
            background-color: #eee;
            clip: auto !important;
            -webkit-clip-path: none;
            clip-path: none;
            color: #333;
            display: block;
            font-size: 1rem;
            height: auto;
            left: 5px;
            line-height: normal;
            padding: 15px 23px 14px;
            text-decoration: none;
            top: 5px;
            width: auto;
            z-index: 100000
        }

        .site-header {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            -webkit-padding-before: 1rem;
            padding-block-start: 1rem;
            -webkit-padding-after: 1rem;
            padding-block-end: 1rem;
            position: relative
        }

        .post .entry-title a {
            text-decoration: none
        }

        .site-navigation-toggle-holder {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            flex-grow: 1;
            max-width: 20%;
            padding: 8px 15px
        }

        .site-navigation-toggle-holder .site-navigation-toggle {
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            padding: .25em;
            cursor: pointer;
            border: 0 solid;
            border-radius: 3px;
            background-color: rgba(0, 0, 0, .05);
            color: #494c4f
        }

        .site-navigation-toggle-holder.elementor-active .site-navigation-toggle i:before {
            content: "\e87f"
        }

        .site-navigation-dropdown {
            -webkit-margin-before: 10px;
            margin-block-start: 10px;
            transition: max-height .3s, transform .3s;
            transform-origin: top;
            position: absolute;
            bottom: 0;
            left: 0;
            z-index: 10000;
            width: 100%
        }

        .site-navigation-toggle-holder:not(.elementor-active)+.site-navigation-dropdown {
            transform: scaleY(0);
            max-height: 0
        }

        .site-navigation-toggle-holder.elementor-active+.site-navigation-dropdown {
            transform: scaleY(1);
            max-height: 100vh
        }

        .site-navigation-dropdown ul {
            padding: 0
        }

        .site-navigation-dropdown ul.menu {
            position: absolute;
            width: 100%;
            padding: 0;
            margin: 0;
            background: #fff
        }

        .site-navigation-dropdown ul.menu li {
            display: block;
            width: 100%;
            position: relative
        }

        .site-navigation-dropdown ul.menu li a {
            display: block;
            padding: 20px;
            background: #fff;
            color: #55595c;
            box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .1019607843)
        }

        .site-navigation-dropdown ul.menu li.current-menu-item a {
            color: #fff;
            background: #55595c
        }

        .site-navigation-dropdown ul.menu>li li {
            transition: max-height .3s, transform .3s;
            transform-origin: top;
            transform: scaleY(0);
            max-height: 0
        }

        .site-navigation-dropdown ul.menu li.elementor-active>ul>li {
            transform: scaleY(1);
            max-height: 100vh
        }

        .page-header .entry-title,
        .site-header:not(.dynamic-header),
        body:not([class*=elementor-page-]) .site-main {
            -webkit-margin-start: auto;
            margin-inline-start: auto;
            -webkit-margin-end: auto;
            margin-inline-end: auto;
            width: 100%
        }

        @media (max-width:575px) {

            .page-header .entry-title,
            .site-header:not(.dynamic-header),
            body:not([class*=elementor-page-]) .site-main {
                -webkit-padding-start: 10px;
                padding-inline-start: 10px;
                -webkit-padding-end: 10px;
                padding-inline-end: 10px
            }
        }

        @media (min-width:576px) {

            .page-header .entry-title,
            .site-header:not(.dynamic-header),
            body:not([class*=elementor-page-]) .site-main {
                max-width: 500px
            }
        }

        @media (min-width:768px) {

            .page-header .entry-title,
            .site-header:not(.dynamic-header),
            body:not([class*=elementor-page-]) .site-main {
                max-width: 600px
            }
        }

        @media (min-width:992px) {

            .page-header .entry-title,
            .site-header:not(.dynamic-header),
            body:not([class*=elementor-page-]) .site-main {
                max-width: 800px
            }
        }

        @media (min-width:1200px) {

            .page-header .entry-title,
            .site-header:not(.dynamic-header),
            body:not([class*=elementor-page-]) .site-main {
                max-width: 1140px
            }
        }

        .site-header+.elementor {
            min-height: calc(100vh - 320px)
        }

        .elementor-screen-only,
        .screen-reader-text,
        .screen-reader-text span {
            position: absolute;
            top: -10000em;
            width: 1px;
            height: 1px;
            margin: -1px;
            padding: 0;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            border: 0
        }

        .elementor *,
        .elementor :after,
        .elementor :before {
            box-sizing: border-box
        }

        .elementor a {
            box-shadow: none;
            text-decoration: none
        }

        .elementor img {
            height: auto;
            max-width: 100%;
            border: none;
            border-radius: 0;
            box-shadow: none
        }

        .elementor iframe,
        .elementor object,
        .elementor video {
            max-width: 100%;
            width: 100%;
            margin: 0;
            line-height: 1;
            border: none
        }

        .elementor .elementor-background-video-container {
            height: 100%;
            width: 100%;
            top: 0;
            left: 0;
            position: absolute;
            overflow: hidden;
            z-index: 0;
            direction: ltr
        }

        .elementor .elementor-background-video-container {
            transition: opacity 1s;
            pointer-events: none
        }

        .elementor .elementor-background-video-container.elementor-loading {
            opacity: 0
        }

        .elementor .elementor-background-video-embed {
            max-width: none
        }

        .elementor .elementor-background-video-embed,
        .elementor .elementor-background-video-hosted {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%)
        }

        .elementor .elementor-background-slideshow {
            height: 100%;
            width: 100%;
            top: 0;
            left: 0;
            position: absolute
        }

        .elementor .elementor-background-slideshow {
            z-index: 0
        }

        .elementor .elementor-background-slideshow__slide__image {
            width: 100%;
            height: 100%;
            background-position: 50%;
            background-size: cover
        }

        .elementor-widget-wrap .elementor-element.elementor-widget__width-initial {
            max-width: 100%
        }

        .elementor-element {
            --flex-direction: initial;
            --flex-wrap: initial;
            --justify-content: initial;
            --align-items: initial;
            --align-content: initial;
            --gap: initial;
            --flex-basis: initial;
            --flex-grow: initial;
            --flex-shrink: initial;
            --order: initial;
            --align-self: initial;
            flex-basis: var(--flex-basis);
            flex-grow: var(--flex-grow);
            flex-shrink: var(--flex-shrink);
            order: var(--order);
            align-self: var(--align-self)
        }

        .elementor-element:where(.e-con-full, .elementor-widget) {
            flex-direction: var(--flex-direction);
            flex-wrap: var(--flex-wrap);
            justify-content: var(--justify-content);
            align-items: var(--align-items);
            align-content: var(--align-content);
            gap: var(--gap)
        }

        .elementor-invisible {
            visibility: hidden
        }

        .elementor-ken-burns {
            transition-property: transform;
            transition-duration: 10s;
            transition-timing-function: linear
        }

        .elementor-ken-burns--out {
            transform: scale(1.3)
        }

        .elementor-ken-burns--active {
            transition-duration: 20s
        }

        .elementor-ken-burns--active.elementor-ken-burns--out {
            transform: scale(1)
        }

        .elementor-ken-burns--active.elementor-ken-burns--in {
            transform: scale(1.3)
        }

        :root {
            --page-title-display: block
        }

        .elementor-section {
            position: relative
        }

        .elementor-section .elementor-container {
            display: flex;
            margin-right: auto;
            margin-left: auto;
            position: relative
        }

        @media (max-width:1024px) {
            .elementor-section .elementor-container {
                flex-wrap: wrap
            }

            .elementor-grid-tablet-4 .elementor-grid {
                grid-template-columns: repeat(4, 1fr)
            }
        }

        .elementor-section.elementor-section-stretched {
            position: relative;
            width: 100%
        }

        .elementor-widget-wrap {
            position: relative;
            width: 100%;
            flex-wrap: wrap;
            align-content: flex-start
        }

        .elementor:not(.elementor-bc-flex-widget) .elementor-widget-wrap {
            display: flex
        }

        .elementor-widget-wrap>.elementor-element {
            width: 100%
        }

        .elementor-widget-wrap.e-swiper-container {
            width: calc(100% - (var(--e-column-margin-left, 0px) + var(--e-column-margin-right, 0px)))
        }

        .elementor-widget {
            position: relative
        }

        .elementor-widget:not(:last-child) {
            margin-bottom: 20px
        }

        .elementor-widget:not(:last-child).elementor-widget__width-initial {
            margin-bottom: 0
        }

        .elementor-column {
            position: relative;
            min-height: 1px;
            display: flex
        }

        .elementor-column-gap-default>.elementor-column>.elementor-element-populated {
            padding: 10px
        }

        @media (min-width:768px) {
            .elementor-column.elementor-col-12 {
                width: 12.5%
            }

            .elementor-column.elementor-col-20 {
                width: 20%
            }

            .elementor-column.elementor-col-25 {
                width: 25%
            }

            .elementor-column.elementor-col-33 {
                width: 33.333%
            }

            .elementor-column.elementor-col-50 {
                width: 50%
            }

            .elementor-column.elementor-col-100 {
                width: 100%
            }
        }

        .elementor-grid {
            display: grid;
            grid-column-gap: var(--grid-column-gap);
            grid-row-gap: var(--grid-row-gap)
        }

        .elementor-grid .elementor-grid-item {
            min-width: 0
        }

        .elementor-grid-0 .elementor-grid {
            display: inline-block;
            width: 100%;
            word-spacing: var(--grid-column-gap);
            margin-bottom: calc(-1 * var(--grid-row-gap))
        }

        .elementor-grid-0 .elementor-grid .elementor-grid-item {
            display: inline-block;
            margin-bottom: var(--grid-row-gap);
            word-break: break-word
        }

        .elementor-grid-4 .elementor-grid {
            grid-template-columns: repeat(4, 1fr)
        }

        @media (min-width:1401px) {
            #elementor-device-mode:after {
                content: "desktop"
            }
        }

        @media (min-width:2400px) {
            #elementor-device-mode:after {
                content: "widescreen"
            }
        }

        @media (max-width:1400px) {
            #elementor-device-mode:after {
                content: "laptop"
            }
        }

        @media (max-width:1200px) {
            #elementor-device-mode:after {
                content: "tablet_extra"
            }
        }

        @media (max-width:1024px) {
            #elementor-device-mode:after {
                content: "tablet"
            }
        }

        @media (max-width:-1) {
            #elementor-device-mode:after {
                content: "mobile_extra"
            }
        }

        @media (max-width:767px) {
            table table {
                font-size: .8em
            }

            .elementor-column {
                width: 100%
            }

            #elementor-device-mode:after {
                content: "mobile"
            }
        }

        @media (prefers-reduced-motion:no-preference) {
            html {
                scroll-behavior: smooth
            }
        }

        .e-con {
            --border-radius: 0;
            --border-top-width: 0px;
            --border-right-width: 0px;
            --border-bottom-width: 0px;
            --border-left-width: 0px;
            --border-style: initial;
            --border-color: initial;
            --container-widget-width: 100%;
            --container-widget-height: initial;
            --container-widget-flex-grow: 0;
            --container-widget-align-self: initial;
            --content-width: min(100%, var(--container-max-width, 1140px));
            --width: 100%;
            --min-height: initial;
            --height: auto;
            --text-align: initial;
            --margin-top: 0px;
            --margin-right: 0px;
            --margin-bottom: 0px;
            --margin-left: 0px;
            --padding-top: var(--container-default-padding-top, 10px);
            --padding-right: var(--container-default-padding-right, 10px);
            --padding-bottom: var(--container-default-padding-bottom, 10px);
            --padding-left: var(--container-default-padding-left, 10px);
            --position: relative;
            --z-index: revert;
            --overflow: visible;
            --gap: var(--widgets-spacing, 20px);
            --overlay-mix-blend-mode: initial;
            --overlay-opacity: 1;
            --overlay-transition: 0.3s;
            --e-con-grid-template-columns: repeat(3, 1fr);
            --e-con-grid-template-rows: repeat(2, 1fr);
            position: var(--position);
            width: var(--width);
            min-width: 0;
            min-height: var(--min-height);
            height: var(--height);
            border-radius: var(--border-radius);
            z-index: var(--z-index);
            overflow: var(--overflow);
            transition: background var(--background-transition, .3s), border var(--border-transition, .3s), box-shadow var(--border-transition, .3s), transform var(--e-con-transform-transition-duration, .4s);
            --flex-wrap-mobile: wrap;
            margin-block-start: var(--margin-block-start);
            margin-inline-end: var(--margin-inline-end);
            margin-block-end: var(--margin-block-end);
            margin-inline-start: var(--margin-inline-start);
            padding-inline-start: var(--padding-inline-start);
            padding-inline-end: var(--padding-inline-end);
            --margin-block-start: var(--margin-top);
            --margin-block-end: var(--margin-bottom);
            --margin-inline-start: var(--margin-left);
            --margin-inline-end: var(--margin-right);
            --padding-inline-start: var(--padding-left);
            --padding-inline-end: var(--padding-right);
            --padding-block-start: var(--padding-top);
            --padding-block-end: var(--padding-bottom);
            --border-block-start-width: var(--border-top-width);
            --border-block-end-width: var(--border-bottom-width);
            --border-inline-start-width: var(--border-left-width);
            --border-inline-end-width: var(--border-right-width)
        }

        body.rtl .e-con {
            --padding-inline-start: var(--padding-right);
            --padding-inline-end: var(--padding-left);
            --margin-inline-start: var(--margin-right);
            --margin-inline-end: var(--margin-left);
            --border-inline-start-width: var(--border-right-width);
            --border-inline-end-width: var(--border-left-width)
        }

        .e-con>.e-con-inner {
            text-align: var(--text-align);
            padding-block-start: var(--padding-block-start);
            padding-block-end: var(--padding-block-end)
        }

        .e-con,
        .e-con>.e-con-inner {
            display: var(--display)
        }

        .e-con>.e-con-inner {
            gap: var(--gap);
            width: 100%;
            max-width: var(--content-width);
            margin: 0 auto;
            padding-inline-start: 0;
            padding-inline-end: 0;
            height: 100%
        }

        :is(.elementor-section-wrap, [data-elementor-id])>.e-con {
            --margin-left: auto;
            --margin-right: auto;
            max-width: min(100%, var(--width))
        }

        .e-con .elementor-widget.elementor-widget {
            margin-block-end: 0
        }

        .e-con:before,
        .e-con>.elementor-background-slideshow:before,
        .e-con>.elementor-motion-effects-container>.elementor-motion-effects-layer:before,
        :is(.e-con, .e-con>.e-con-inner)>.elementor-background-video-container:before {
            content: var(--background-overlay);
            display: block;
            position: absolute;
            mix-blend-mode: var(--overlay-mix-blend-mode);
            opacity: var(--overlay-opacity);
            transition: var(--overlay-transition, .3s);
            border-radius: var(--border-radius);
            border-style: var(--border-style);
            border-color: var(--border-color);
            border-block-start-width: var(--border-block-start-width);
            border-inline-end-width: var(--border-inline-end-width);
            border-block-end-width: var(--border-block-end-width);
            border-inline-start-width: var(--border-inline-start-width);
            top: calc(0px - var(--border-top-width));
            left: calc(0px - var(--border-left-width));
            width: max(100% + var(--border-left-width) + var(--border-right-width), 100%);
            height: max(100% + var(--border-top-width) + var(--border-bottom-width), 100%)
        }

        .e-con:before {
            transition: background var(--overlay-transition, .3s), border-radius var(--border-transition, .3s), opacity var(--overlay-transition, .3s)
        }

        .e-con>.elementor-background-slideshow,
        :is(.e-con, .e-con>.e-con-inner)>.elementor-background-video-container {
            border-radius: var(--border-radius);
            border-style: var(--border-style);
            border-color: var(--border-color);
            border-block-start-width: var(--border-block-start-width);
            border-inline-end-width: var(--border-inline-end-width);
            border-block-end-width: var(--border-block-end-width);
            border-inline-start-width: var(--border-inline-start-width);
            top: calc(0px - var(--border-top-width));
            left: calc(0px - var(--border-left-width));
            width: max(100% + var(--border-left-width) + var(--border-right-width), 100%);
            height: max(100% + var(--border-top-width) + var(--border-bottom-width), 100%)
        }

        @media (max-width:767px) {
            :is(.e-con, .e-con>.e-con-inner)>.elementor-background-video-container.elementor-hidden-mobile {
                display: none
            }

            .elementor .elementor-hidden-mobile {
                display: none
            }
        }

        :is(.e-con, .e-con>.e-con-inner)>.elementor-background-video-container:before {
            z-index: 1
        }

        :is(.e-con, .e-con>.e-con-inner)>.elementor-background-slideshow:before {
            z-index: 2
        }

        .e-con .elementor-widget {
            min-width: 0
        }

        .e-con .elementor-widget.e-widget-swiper {
            width: 100%
        }

        .e-con>.e-con-inner>.elementor-widget>.elementor-widget-container,
        .e-con>.elementor-widget>.elementor-widget-container {
            height: 100%
        }

        .e-con.e-con>.e-con-inner>.elementor-widget,
        .elementor.elementor .e-con>.elementor-widget {
            max-width: 100%
        }

        .elementor-element .elementor-widget-container {
            transition: background .3s, border .3s, border-radius .3s, box-shadow .3s, transform var(--e-transform-transition-duration, .4s)
        }

        .elementor-heading-title {
            padding: 0;
            margin: 0;
            line-height: 1
        }

        .elementor-icon {
            display: inline-block;
            line-height: 1;
            transition: all .3s;
            color: #69727d;
            font-size: 50px;
            text-align: center
        }

        .elementor-icon:hover {
            color: #69727d
        }

        .elementor-icon i,
        .elementor-icon svg {
            width: 1em;
            height: 1em;
            position: relative;
            display: block
        }

        .elementor-icon i:before,
        .elementor-icon svg:before {
            position: absolute;
            left: 50%;
            transform: translateX(-50%)
        }

        .elementor-shape-circle .elementor-icon {
            border-radius: 50%
        }

        .animated {
            animation-duration: 1.25s
        }

        .animated.reverse {
            animation-direction: reverse;
            animation-fill-mode: forwards
        }

        @media (prefers-reduced-motion:reduce) {
            .animated {
                animation: none
            }
        }

        .elementor-post__thumbnail__link {
            transition: none
        }

        @media (min-width:768px) and (max-width:1024px) {
            .elementor .elementor-hidden-tablet {
                display: none
            }
        }

        @media (min-width:1025px) and (max-width:1200px) {
            .elementor .elementor-hidden-tablet_extra {
                display: none
            }
        }

        @media (min-width:1201px) and (max-width:1400px) {
            .elementor .elementor-hidden-laptop {
                display: none
            }
        }

        @media (min-width:1401px) and (max-width:2399px) {
            .elementor .elementor-hidden-desktop {
                display: none
            }
        }

        @media (min-width:2400px) {
            .elementor .elementor-hidden-widescreen {
                display: none
            }
        }

        .elementor-kit-5 {
            --e-global-color-primary: #42B131;
            --e-global-color-secondary: #10594E;
            --e-global-color-text: #333333;
            --e-global-color-accent: #FFFFFF;
            --e-global-color-b83a58a: #00584E;
            --e-global-color-4558145: #319B21;
            --e-global-typography-primary-font-family: "Gilroy";
            --e-global-typography-primary-font-size: 2.5em;
            --e-global-typography-primary-font-weight: 800;
            --e-global-typography-primary-line-height: 1.2em;
            --e-global-typography-secondary-font-family: "Gilroy";
            --e-global-typography-secondary-font-size: 2em;
            --e-global-typography-secondary-font-weight: 800;
            --e-global-typography-secondary-line-height: 1.1em;
            --e-global-typography-text-font-family: "Raleway";
            --e-global-typography-text-font-size: 40px;
            --e-global-typography-text-font-weight: 800;
            --e-global-typography-text-line-height: 44px;
            --e-global-typography-accent-font-family: "Raleway";
            --e-global-typography-accent-font-size: 1.1em;
            --e-global-typography-accent-font-weight: 500;
            --e-global-typography-accent-line-height: 1.7em;
            --e-global-typography-6063358-font-family: "Gilroy";
            --e-global-typography-6063358-font-size: 1.7em;
            --e-global-typography-6063358-font-weight: 700;
            --e-global-typography-6063358-line-height: 1em;
            --e-global-typography-6e094a5-font-family: "Raleway";
            --e-global-typography-6e094a5-font-size: 15px;
            --e-global-typography-c38e794-font-family: "Raleway";
            --e-global-typography-c38e794-font-size: 13px;
            --e-global-typography-0878311-font-family: "Gilroy";
            --e-global-typography-0878311-font-size: 1.2em;
            --e-global-typography-0878311-font-weight: 700;
            --e-global-typography-0878311-font-style: normal;
            --e-global-typography-0878311-line-height: 1.4em;
            --e-global-typography-f2f7a8c-font-family: "Gilroy";
            --e-global-typography-f2f7a8c-font-size: 1.3em;
            --e-global-typography-f2f7a8c-font-weight: 600;
            --e-global-typography-f2f7a8c-font-style: normal;
            --e-global-typography-f2f7a8c-line-height: 1.1em;
            --e-global-typography-37ac997-font-family: "Raleway";
            --e-global-typography-37ac997-font-size: 21px;
            --e-global-typography-37ac997-font-weight: 600;
            --e-global-typography-37ac997-font-style: italic;
            --e-global-typography-37ac997-text-decoration: underline;
            --e-global-typography-37ac997-line-height: 32px;
            --e-global-typography-9ac8bb4-font-family: "Raleway";
            --e-global-typography-9ac8bb4-font-size: 1.1em;
            --e-global-typography-9ac8bb4-font-weight: 800;
            --e-global-typography-9ac8bb4-line-height: 1.7em;
            --e-global-typography-b624043-font-family: "Gilroy";
            --e-global-typography-b624043-font-size: 40px;
            --e-global-typography-b624043-font-weight: 700;
            --e-global-typography-b624043-line-height: 44px;
            --e-global-typography-913cd20-font-family: "Gilroy";
            --e-global-typography-913cd20-font-size: 1.5em;
            --e-global-typography-913cd20-font-weight: 400;
            --e-global-typography-913cd20-line-height: 1.1em;
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-size: var(--e-global-typography-accent-font-size);
            font-weight: var(--e-global-typography-accent-font-weight);
            line-height: var(--e-global-typography-accent-line-height)
        }

        .elementor-kit-5 button,
        .elementor-kit-5 input[type=button],
        .elementor-kit-5 input[type=submit] {
            background-color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-0878311-font-family), Sans-serif;
            font-size: var(--e-global-typography-0878311-font-size);
            font-weight: var(--e-global-typography-0878311-font-weight);
            font-style: var(--e-global-typography-0878311-font-style);
            line-height: var(--e-global-typography-0878311-line-height);
            color: var(--e-global-color-accent);
            border-radius: 20px 20px 20px 20px;
            padding: 15px 40px
        }

        .elementor-kit-5 button:focus,
        .elementor-kit-5 button:hover,
        .elementor-kit-5 input[type=button]:focus,
        .elementor-kit-5 input[type=button]:hover,
        .elementor-kit-5 input[type=submit]:focus,
        .elementor-kit-5 input[type=submit]:hover {
            background-color: var(--e-global-color-4558145);
            color: var(--e-global-color-accent);
            border-radius: 20px 20px 20px 20px
        }

        .elementor-kit-5 a {
            color: var(--e-global-color-accent);
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-size: var(--e-global-typography-accent-font-size);
            font-weight: var(--e-global-typography-accent-font-weight);
            line-height: var(--e-global-typography-accent-line-height)
        }

        .elementor-kit-5 a:hover {
            color: var(--e-global-color-accent);
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-size: var(--e-global-typography-accent-font-size);
            font-weight: var(--e-global-typography-accent-font-weight);
            line-height: var(--e-global-typography-accent-line-height)
        }

        .elementor-kit-5 h1 {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-size: var(--e-global-typography-primary-font-size);
            font-weight: var(--e-global-typography-primary-font-weight);
            line-height: var(--e-global-typography-primary-line-height)
        }

        .elementor-kit-5 h2 {
            font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
            font-size: var(--e-global-typography-secondary-font-size);
            font-weight: var(--e-global-typography-secondary-font-weight);
            line-height: var(--e-global-typography-secondary-line-height)
        }

        .elementor-kit-5 h3 {
            font-family: var(--e-global-typography-6063358-font-family), Sans-serif;
            font-size: var(--e-global-typography-6063358-font-size);
            font-weight: var(--e-global-typography-6063358-font-weight);
            line-height: var(--e-global-typography-6063358-line-height)
        }

        .elementor-kit-5 h4 {
            font-family: var(--e-global-typography-913cd20-font-family), Sans-serif;
            font-size: var(--e-global-typography-913cd20-font-size);
            font-weight: var(--e-global-typography-913cd20-font-weight);
            line-height: var(--e-global-typography-913cd20-line-height)
        }

        .elementor-section.elementor-section-boxed>.elementor-container {
            max-width: 1140px
        }

        .e-con {
            --container-max-width: 1140px
        }

        .elementor-widget:not(:last-child) {
            margin-block-end: 20px
        }

        .elementor-element {
            --widgets-spacing: 20px 20px
        }

        h1.entry-title {
            display: var(--page-title-display)
        }

        .site-header {
            padding-inline-end: 0px;
            padding-inline-start: 0px
        }

        @media(min-width:2400px) {
            .elementor-kit-5 {
                --e-global-typography-primary-font-size: 2.5em;
                --e-global-typography-primary-line-height: 1.2em;
                --e-global-typography-secondary-font-size: 2em;
                --e-global-typography-secondary-line-height: 1.1em;
                --e-global-typography-accent-font-size: 1.1em;
                --e-global-typography-accent-line-height: 1.7em;
                --e-global-typography-6063358-font-size: 1.7em;
                --e-global-typography-6063358-line-height: 1em;
                --e-global-typography-0878311-font-size: 1.2em;
                --e-global-typography-0878311-line-height: 1.4em;
                --e-global-typography-f2f7a8c-font-size: 1.3em;
                --e-global-typography-f2f7a8c-line-height: 1.1em;
                --e-global-typography-9ac8bb4-font-size: 1.1em;
                --e-global-typography-9ac8bb4-line-height: 1.7em;
                --e-global-typography-913cd20-font-size: 1.5em;
                --e-global-typography-913cd20-line-height: 1.1em;
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-kit-5 a {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-kit-5 a:hover {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-kit-5 h1 {
                font-size: var(--e-global-typography-primary-font-size);
                line-height: var(--e-global-typography-primary-line-height)
            }

            .elementor-kit-5 h2 {
                font-size: var(--e-global-typography-secondary-font-size);
                line-height: var(--e-global-typography-secondary-line-height)
            }

            .elementor-kit-5 h3 {
                font-size: var(--e-global-typography-6063358-font-size);
                line-height: var(--e-global-typography-6063358-line-height)
            }

            .elementor-kit-5 h4 {
                font-size: var(--e-global-typography-913cd20-font-size);
                line-height: var(--e-global-typography-913cd20-line-height)
            }

            .elementor-kit-5 button,
            .elementor-kit-5 input[type=button],
            .elementor-kit-5 input[type=submit] {
                font-size: var(--e-global-typography-0878311-font-size);
                line-height: var(--e-global-typography-0878311-line-height)
            }
        }

        @media(max-width:1400px) {
            .elementor-kit-5 {
                --e-global-typography-primary-font-size: 2.5em;
                --e-global-typography-primary-line-height: 1.2em;
                --e-global-typography-secondary-font-size: 2em;
                --e-global-typography-secondary-line-height: 1.1em;
                --e-global-typography-accent-font-size: 1.1em;
                --e-global-typography-accent-line-height: 1.7em;
                --e-global-typography-6063358-font-size: 1.7em;
                --e-global-typography-6063358-line-height: 1em;
                --e-global-typography-0878311-font-size: 1.2em;
                --e-global-typography-0878311-line-height: 1.4em;
                --e-global-typography-f2f7a8c-font-size: 1.2em;
                --e-global-typography-f2f7a8c-line-height: 1.1em;
                --e-global-typography-9ac8bb4-font-size: 1.1em;
                --e-global-typography-9ac8bb4-line-height: 1.7em;
                --e-global-typography-913cd20-font-size: 1.5em;
                --e-global-typography-913cd20-line-height: 1.1em;
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-kit-5 a {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-kit-5 a:hover {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-kit-5 h1 {
                font-size: var(--e-global-typography-primary-font-size);
                line-height: var(--e-global-typography-primary-line-height)
            }

            .elementor-kit-5 h2 {
                font-size: var(--e-global-typography-secondary-font-size);
                line-height: var(--e-global-typography-secondary-line-height)
            }

            .elementor-kit-5 h3 {
                font-size: var(--e-global-typography-6063358-font-size);
                line-height: var(--e-global-typography-6063358-line-height)
            }

            .elementor-kit-5 h4 {
                font-size: var(--e-global-typography-913cd20-font-size);
                line-height: var(--e-global-typography-913cd20-line-height)
            }

            .elementor-kit-5 button,
            .elementor-kit-5 input[type=button],
            .elementor-kit-5 input[type=submit] {
                font-size: var(--e-global-typography-0878311-font-size);
                line-height: var(--e-global-typography-0878311-line-height)
            }
        }

        @media(max-width:1200px) {
            .elementor-kit-5 {
                --e-global-typography-primary-font-size: 2.5em;
                --e-global-typography-primary-line-height: 1.2em;
                --e-global-typography-secondary-font-size: 2em;
                --e-global-typography-secondary-line-height: 1.1em;
                --e-global-typography-accent-font-size: 1.1em;
                --e-global-typography-accent-line-height: 1.7em;
                --e-global-typography-6063358-font-size: 1.7em;
                --e-global-typography-6063358-line-height: 1em;
                --e-global-typography-0878311-font-size: 1.2em;
                --e-global-typography-0878311-line-height: 1.4em;
                --e-global-typography-f2f7a8c-font-size: 1.3em;
                --e-global-typography-f2f7a8c-line-height: 1.1em;
                --e-global-typography-37ac997-font-size: 21px;
                --e-global-typography-37ac997-line-height: 32px;
                --e-global-typography-9ac8bb4-font-size: 1.1em;
                --e-global-typography-9ac8bb4-line-height: 1.7em;
                --e-global-typography-913cd20-font-size: 1.5em;
                --e-global-typography-913cd20-line-height: 1.1em
            }
        }

        @media(max-width:1024px) {
            .elementor-kit-5 {
                --e-global-typography-primary-font-size: 2.5em;
                --e-global-typography-primary-line-height: 1.2em;
                --e-global-typography-secondary-font-size: 2em;
                --e-global-typography-secondary-line-height: 1.1em;
                --e-global-typography-accent-font-size: 1.1em;
                --e-global-typography-accent-line-height: 1.7em;
                --e-global-typography-6063358-font-size: 1.7em;
                --e-global-typography-6063358-line-height: 1px;
                --e-global-typography-0878311-font-size: 1.2em;
                --e-global-typography-0878311-line-height: 1.4em;
                --e-global-typography-f2f7a8c-font-size: 1.3em;
                --e-global-typography-f2f7a8c-line-height: 1.1em;
                --e-global-typography-9ac8bb4-font-size: 1.1em;
                --e-global-typography-9ac8bb4-line-height: 1.7em;
                --e-global-typography-913cd20-font-size: 1.5em;
                --e-global-typography-913cd20-line-height: 1.1em;
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-kit-5 a {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-kit-5 a:hover {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-kit-5 h1 {
                font-size: var(--e-global-typography-primary-font-size);
                line-height: var(--e-global-typography-primary-line-height)
            }

            .elementor-kit-5 h2 {
                font-size: var(--e-global-typography-secondary-font-size);
                line-height: var(--e-global-typography-secondary-line-height)
            }

            .elementor-kit-5 h3 {
                font-size: var(--e-global-typography-6063358-font-size);
                line-height: var(--e-global-typography-6063358-line-height)
            }

            .elementor-kit-5 h4 {
                font-size: var(--e-global-typography-913cd20-font-size);
                line-height: var(--e-global-typography-913cd20-line-height)
            }

            .elementor-kit-5 button,
            .elementor-kit-5 input[type=button],
            .elementor-kit-5 input[type=submit] {
                font-size: var(--e-global-typography-0878311-font-size);
                line-height: var(--e-global-typography-0878311-line-height)
            }

            .elementor-section.elementor-section-boxed>.elementor-container {
                max-width: 1024px
            }

            .e-con {
                --container-max-width: 1024px
            }
        }

        @media(max-width:767px) {
            .elementor-kit-5 {
                --e-global-typography-primary-font-size: 2.5em;
                --e-global-typography-primary-line-height: 1.2em;
                --e-global-typography-secondary-font-size: 2em;
                --e-global-typography-secondary-line-height: 1.1em;
                --e-global-typography-accent-font-size: 1.1em;
                --e-global-typography-accent-line-height: 1.7em;
                --e-global-typography-6063358-font-size: 1.7em;
                --e-global-typography-6063358-line-height: 1em;
                --e-global-typography-0878311-font-size: 1.2em;
                --e-global-typography-0878311-line-height: 1.4em;
                --e-global-typography-f2f7a8c-font-size: 1.3em;
                --e-global-typography-f2f7a8c-line-height: 1.1em;
                --e-global-typography-9ac8bb4-font-size: 1.1em;
                --e-global-typography-9ac8bb4-line-height: 1.7em;
                --e-global-typography-913cd20-font-size: 1.5em;
                --e-global-typography-913cd20-line-height: 1.1em;
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-kit-5 a {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-kit-5 a:hover {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-kit-5 h1 {
                font-size: var(--e-global-typography-primary-font-size);
                line-height: var(--e-global-typography-primary-line-height)
            }

            .elementor-kit-5 h2 {
                font-size: var(--e-global-typography-secondary-font-size);
                line-height: var(--e-global-typography-secondary-line-height)
            }

            .elementor-kit-5 h3 {
                font-size: var(--e-global-typography-6063358-font-size);
                line-height: var(--e-global-typography-6063358-line-height)
            }

            .elementor-kit-5 h4 {
                font-size: var(--e-global-typography-913cd20-font-size);
                line-height: var(--e-global-typography-913cd20-line-height)
            }

            .elementor-kit-5 button,
            .elementor-kit-5 input[type=button],
            .elementor-kit-5 input[type=submit] {
                font-size: var(--e-global-typography-0878311-font-size);
                line-height: var(--e-global-typography-0878311-line-height)
            }

            .elementor-section.elementor-section-boxed>.elementor-container {
                max-width: 767px
            }

            .e-con {
                --container-max-width: 767px
            }
        }

        @font-face {
            font-family: Gilroy;
            font-style: normal;
            font-weight: 800;
            font-display: swap;
            src: url('https://mayani.ph/wp-content/uploads/2023/07/Gilroy-ExtraBold.ttf') format('truetype')
        }

        @font-face {
            font-family: Gilroy;
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url('https://mayani.ph/wp-content/uploads/2023/07/Gilroy-Bold.ttf') format('truetype')
        }

        .elementor-widget-image {
            text-align: center
        }

        .elementor-widget-image a {
            display: inline-block
        }

        .elementor-widget-image a img[src$=".svg"] {
            width: 48px
        }

        .elementor-widget-image img {
            vertical-align: middle;
            display: inline-block
        }

        .elementor-item:after,
        .elementor-item:before {
            display: block;
            position: absolute;
            transition: .3s;
            transition-timing-function: cubic-bezier(.58, .3, .005, 1)
        }

        .elementor-item:not(:hover):not(:focus):not(.elementor-item-active):not(.highlighted):after,
        .elementor-item:not(:hover):not(:focus):not(.elementor-item-active):not(.highlighted):before {
            opacity: 0
        }

        .elementor-item-active:after,
        .elementor-item-active:before,
        .elementor-item.highlighted:after,
        .elementor-item.highlighted:before,
        .elementor-item:focus:after,
        .elementor-item:focus:before,
        .elementor-item:hover:after,
        .elementor-item:hover:before {
            transform: scale(1)
        }

        .elementor-nav-menu--main .elementor-nav-menu a {
            transition: .4s
        }

        .elementor-nav-menu--main .elementor-nav-menu a,
        .elementor-nav-menu--main .elementor-nav-menu a.highlighted,
        .elementor-nav-menu--main .elementor-nav-menu a:focus,
        .elementor-nav-menu--main .elementor-nav-menu a:hover {
            padding: 13px 20px
        }

        .elementor-nav-menu--main .elementor-nav-menu a.current {
            background: #1f2124;
            color: #fff
        }

        .elementor-nav-menu--main .elementor-nav-menu a.disabled {
            background: #3f444b;
            color: #88909b
        }

        .elementor-nav-menu--main .elementor-nav-menu ul {
            border-style: solid;
            border-width: 0;
            padding: 0;
            position: absolute;
            width: 12em
        }

        .elementor-nav-menu--main .elementor-nav-menu span.scroll-down,
        .elementor-nav-menu--main .elementor-nav-menu span.scroll-up {
            background: #fff;
            display: none;
            height: 20px;
            overflow: hidden;
            position: absolute;
            visibility: hidden
        }

        .elementor-nav-menu--main .elementor-nav-menu span.scroll-down-arrow,
        .elementor-nav-menu--main .elementor-nav-menu span.scroll-up-arrow {
            border: 8px dashed transparent;
            border-bottom: 8px solid #33373d;
            height: 0;
            left: 50%;
            margin-inline-start: -8px;
            overflow: hidden;
            position: absolute;
            top: -2px;
            width: 0
        }

        .elementor-nav-menu--main .elementor-nav-menu span.scroll-down-arrow {
            border-color: #33373d transparent transparent;
            border-style: solid dashed dashed;
            top: 6px
        }

        .elementor-nav-menu--main .elementor-nav-menu--dropdown .sub-arrow .e-font-icon-svg,
        .elementor-nav-menu--main .elementor-nav-menu--dropdown .sub-arrow i {
            transform: rotate(-90deg)
        }

        .elementor-nav-menu--main .elementor-nav-menu--dropdown .sub-arrow .e-font-icon-svg {
            fill: currentColor;
            height: 1em;
            width: 1em
        }

        .elementor-nav-menu--layout-horizontal {
            display: flex
        }

        .elementor-nav-menu--layout-horizontal .elementor-nav-menu {
            display: flex;
            flex-wrap: wrap
        }

        .elementor-nav-menu--layout-horizontal .elementor-nav-menu a {
            flex-grow: 1;
            white-space: nowrap
        }

        .elementor-nav-menu--layout-horizontal .elementor-nav-menu>li {
            display: flex
        }

        .elementor-nav-menu--layout-horizontal .elementor-nav-menu>li ul,
        .elementor-nav-menu--layout-horizontal .elementor-nav-menu>li>.scroll-down {
            top: 100% !important
        }

        .elementor-nav-menu--layout-horizontal .elementor-nav-menu>li:not(:first-child)>a {
            margin-inline-start: var(--e-nav-menu-horizontal-menu-item-margin)
        }

        .elementor-nav-menu--layout-horizontal .elementor-nav-menu>li:not(:first-child)>.scroll-down,
        .elementor-nav-menu--layout-horizontal .elementor-nav-menu>li:not(:first-child)>.scroll-up,
        .elementor-nav-menu--layout-horizontal .elementor-nav-menu>li:not(:first-child)>ul {
            left: var(--e-nav-menu-horizontal-menu-item-margin) !important
        }

        .elementor-nav-menu--layout-horizontal .elementor-nav-menu>li:not(:last-child)>a {
            margin-inline-end: var(--e-nav-menu-horizontal-menu-item-margin)
        }

        .elementor-nav-menu--layout-horizontal .elementor-nav-menu>li:not(:last-child):after {
            align-self: center;
            border-color: var(--e-nav-menu-divider-color, #000);
            border-left-style: var(--e-nav-menu-divider-style, solid);
            border-left-width: var(--e-nav-menu-divider-width, 2px);
            content: var(--e-nav-menu-divider-content, none);
            height: var(--e-nav-menu-divider-height, 35%)
        }

        .elementor-widget-nav-menu:not(.elementor-nav-menu--toggle) .elementor-menu-toggle {
            display: none
        }

        .elementor-widget-nav-menu .elementor-widget-container {
            display: flex;
            flex-direction: column
        }

        .elementor-nav-menu {
            position: relative;
            z-index: 2
        }

        .elementor-nav-menu:after {
            clear: both;
            content: " ";
            display: block;
            font: 0/0 serif;
            height: 0;
            overflow: hidden;
            visibility: hidden
        }

        .elementor-nav-menu,
        .elementor-nav-menu li,
        .elementor-nav-menu ul {
            display: block;
            line-height: normal;
            list-style: none;
            margin: 0;
            padding: 0;
            -webkit-tap-highlight-color: transparent
        }

        .elementor-nav-menu ul {
            display: none
        }

        .elementor-nav-menu ul ul a,
        .elementor-nav-menu ul ul a:active,
        .elementor-nav-menu ul ul a:focus,
        .elementor-nav-menu ul ul a:hover {
            border-left: 16px solid transparent
        }

        .elementor-nav-menu ul ul ul a,
        .elementor-nav-menu ul ul ul a:active,
        .elementor-nav-menu ul ul ul a:focus,
        .elementor-nav-menu ul ul ul a:hover {
            border-left: 24px solid transparent
        }

        .elementor-nav-menu ul ul ul ul a,
        .elementor-nav-menu ul ul ul ul a:active,
        .elementor-nav-menu ul ul ul ul a:focus,
        .elementor-nav-menu ul ul ul ul a:hover {
            border-left: 32px solid transparent
        }

        .elementor-nav-menu ul ul ul ul ul a,
        .elementor-nav-menu ul ul ul ul ul a:active,
        .elementor-nav-menu ul ul ul ul ul a:focus,
        .elementor-nav-menu ul ul ul ul ul a:hover {
            border-left: 40px solid transparent
        }

        .elementor-nav-menu a,
        .elementor-nav-menu li {
            position: relative
        }

        .elementor-nav-menu li {
            border-width: 0
        }

        .elementor-nav-menu a {
            align-items: center;
            display: flex
        }

        .elementor-nav-menu a,
        .elementor-nav-menu a:focus,
        .elementor-nav-menu a:hover {
            line-height: 20px;
            padding: 10px 20px
        }

        .elementor-nav-menu a.current {
            background: #1f2124;
            color: #fff
        }

        .elementor-nav-menu a.disabled {
            color: #88909b;
            cursor: not-allowed
        }

        .elementor-nav-menu .sub-arrow {
            align-items: center;
            display: flex;
            line-height: 1;
            margin-block-end: -10px;
            margin-block-start: -10px;
            padding: 10px;
            padding-inline-end: 0
        }

        .elementor-nav-menu .sub-arrow i {
            pointer-events: none
        }

        .elementor-nav-menu .sub-arrow .e-font-icon-svg {
            height: 1em;
            width: 1em
        }

        .elementor-nav-menu--dropdown .elementor-item.elementor-item-active,
        .elementor-nav-menu--dropdown .elementor-item.highlighted,
        .elementor-nav-menu--dropdown .elementor-item:focus,
        .elementor-nav-menu--dropdown .elementor-item:hover,
        .elementor-sub-item.elementor-item-active,
        .elementor-sub-item.highlighted,
        .elementor-sub-item:focus,
        .elementor-sub-item:hover {
            background-color: #3f444b;
            color: #fff
        }

        .elementor-menu-toggle {
            align-items: center;
            background-color: rgba(0, 0, 0, .05);
            border: 0 solid;
            border-radius: 3px;
            color: #33373d;
            cursor: pointer;
            display: flex;
            font-size: var(--nav-menu-icon-size, 22px);
            justify-content: center;
            padding: .25em
        }

        .elementor-menu-toggle.elementor-active .elementor-menu-toggle__icon--open,
        .elementor-menu-toggle:not(.elementor-active) .elementor-menu-toggle__icon--close {
            display: none
        }

        .elementor-menu-toggle .e-font-icon-svg {
            fill: #33373d;
            height: 1em;
            width: 1em
        }

        .elementor-menu-toggle svg {
            height: auto;
            width: 1em;
            fill: var(--nav-menu-icon-color, currentColor)
        }

        span.elementor-menu-toggle__icon--close,
        span.elementor-menu-toggle__icon--open {
            line-height: 1
        }

        .elementor-nav-menu--dropdown {
            background-color: #fff;
            font-size: 13px
        }

        .elementor-nav-menu--dropdown.elementor-nav-menu__container {
            margin-top: 10px;
            overflow-x: hidden;
            overflow-y: auto;
            transform-origin: top;
            transition: max-height .3s, transform .3s
        }

        .elementor-nav-menu--dropdown.elementor-nav-menu__container .elementor-sub-item {
            font-size: .85em
        }

        .elementor-nav-menu--dropdown a {
            color: #33373d
        }

        .elementor-nav-menu--dropdown a.current {
            background: #1f2124;
            color: #fff
        }

        .elementor-nav-menu--dropdown a.disabled {
            color: #b3b3b3
        }

        ul.elementor-nav-menu--dropdown a,
        ul.elementor-nav-menu--dropdown a:focus,
        ul.elementor-nav-menu--dropdown a:hover {
            border-inline-start: 8px solid transparent;
            text-shadow: none
        }

        .elementor-nav-menu--toggle {
            --menu-height: 100vh
        }

        .elementor-nav-menu--toggle .elementor-menu-toggle:not(.elementor-active)+.elementor-nav-menu__container {
            max-height: 0;
            overflow: hidden;
            transform: scaleY(0)
        }

        .elementor-nav-menu--toggle .elementor-menu-toggle.elementor-active+.elementor-nav-menu__container {
            animation: .3s backwards hide-scroll;
            max-height: var(--menu-height);
            transform: scaleY(1)
        }

        .elementor-nav-menu--stretch .elementor-nav-menu__container.elementor-nav-menu--dropdown {
            position: absolute;
            z-index: 9997
        }

        @media (max-width:1024px) {
            .elementor-nav-menu--dropdown-tablet .elementor-nav-menu--main {
                display: none
            }
        }

        @media (min-width:1025px) {

            .elementor-nav-menu--dropdown-tablet .elementor-menu-toggle,
            .elementor-nav-menu--dropdown-tablet .elementor-nav-menu--dropdown {
                display: none
            }

            .elementor-nav-menu--dropdown-tablet nav.elementor-nav-menu--dropdown.elementor-nav-menu__container {
                overflow-y: hidden
            }
        }

        @keyframes hide-scroll {

            0%,
            to {
                overflow: hidden
            }
        }

        .elementor-column .elementor-spacer-inner {
            height: var(--spacer-size)
        }

        .e-con {
            --container-widget-width: 100%
        }

        .e-con-inner>.elementor-widget-spacer,
        .e-con>.elementor-widget-spacer {
            width: var(--container-widget-width, var(--spacer-size));
            --align-self: var(--container-widget-align-self, initial);
            --flex-shrink: 0
        }

        .e-con-inner>.elementor-widget-spacer>.elementor-widget-container,
        .e-con>.elementor-widget-spacer>.elementor-widget-container {
            height: 100%;
            width: 100%
        }

        .e-con-inner>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer,
        .e-con>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer {
            height: 100%
        }

        .e-con-inner>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer>.elementor-spacer-inner,
        .e-con>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer>.elementor-spacer-inner {
            height: var(--container-widget-height, var(--spacer-size))
        }

        .elementor-widget-social-icons.elementor-grid-0 .elementor-widget-container {
            line-height: 1;
            font-size: 0
        }

        .elementor-widget-social-icons:not(.elementor-grid-0):not(.elementor-grid-tablet-0):not(.elementor-grid-mobile-0) .elementor-grid {
            display: inline-grid
        }

        .elementor-widget-social-icons .elementor-grid {
            grid-column-gap: var(--grid-column-gap, 5px);
            grid-row-gap: var(--grid-row-gap, 5px);
            grid-template-columns: var(--grid-template-columns);
            justify-content: var(--justify-content, center);
            justify-items: var(--justify-content, center)
        }

        .elementor-icon.elementor-social-icon {
            font-size: var(--icon-size, 25px);
            line-height: var(--icon-size, 25px);
            width: calc(var(--icon-size, 25px) + 2 * var(--icon-padding, .5em));
            height: calc(var(--icon-size, 25px) + 2 * var(--icon-padding, .5em))
        }

        .elementor-social-icon {
            --e-social-icon-icon-color: #fff;
            display: inline-flex;
            background-color: #69727d;
            align-items: center;
            justify-content: center;
            text-align: center;
            cursor: pointer
        }

        .elementor-social-icon i {
            color: var(--e-social-icon-icon-color)
        }

        .elementor-social-icon svg {
            fill: var(--e-social-icon-icon-color)
        }

        .elementor-social-icon:last-child {
            margin: 0
        }

        .elementor-social-icon:hover {
            opacity: .9;
            color: #fff
        }

        .elementor-social-icon-facebook {
            background-color: #3b5998
        }

        .elementor-social-icon-instagram {
            background-color: #262626
        }

        .elementor-social-icon-linkedin {
            background-color: #0077b5
        }

        .elementor-social-icon-youtube {
            background-color: #cd201f
        }

        .elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a {
            color: inherit;
            font-size: inherit;
            line-height: inherit
        }

        @font-face {
            font-display: swap;
            font-family: eicons;
            src: url(https://mayani.ph/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.eot?5.32.0);
            src: url(https://mayani.ph/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.eot?5.32.0#iefix) format("embedded-opentype"), url(https://mayani.ph/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.woff2?5.32.0) format("woff2"), url(https://mayani.ph/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.woff?5.32.0) format("woff"), url(https://mayani.ph/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.ttf?5.32.0) format("truetype"), url(https://mayani.ph/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.svg?5.32.0#eicon) format("svg");
            font-weight: 400;
            font-style: normal
        }

        [class*=" eicon-"],
        [class^=eicon] {
            display: inline-block;
            font-family: eicons;
            font-size: inherit;
            font-weight: 400;
            font-style: normal;
            font-variant: normal;
            line-height: 1;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .eicon-menu-bar:before {
            content: "\e816"
        }

        .eicon-close:before {
            content: "\e87f"
        }

        .eicon-edit:before {
            content: "\e89a"
        }

        .eicon-arrow-left:before {
            content: "\e8bf"
        }

        :root {
            --swiper-theme-color: #007aff
        }

        .swiper {
            margin-left: auto;
            margin-right: auto;
            position: relative;
            overflow: hidden;
            list-style: none;
            padding: 0;
            z-index: 1
        }

        .swiper-wrapper {
            position: relative;
            width: 100%;
            height: 100%;
            z-index: 1;
            display: flex;
            transition-property: transform;
            box-sizing: content-box
        }

        .swiper-wrapper {
            transform: translate3d(0, 0, 0)
        }

        .swiper-pointer-events {
            touch-action: pan-y
        }

        .swiper-slide {
            flex-shrink: 0;
            width: 100%;
            height: 100%;
            position: relative;
            transition-property: transform
        }

        .swiper-slide-invisible-blank {
            visibility: hidden
        }

        :root {
            --swiper-navigation-size: 44px
        }

        .swiper-button-next,
        .swiper-button-prev {
            position: absolute;
            top: 50%;
            width: calc(var(--swiper-navigation-size)/ 44 * 27);
            height: var(--swiper-navigation-size);
            margin-top: calc(0px - (var(--swiper-navigation-size)/ 2));
            z-index: 10;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--swiper-navigation-color, var(--swiper-theme-color))
        }

        .swiper-button-next.swiper-button-disabled,
        .swiper-button-prev.swiper-button-disabled {
            opacity: .35;
            cursor: auto;
            pointer-events: none
        }

        .swiper-button-next.swiper-button-hidden,
        .swiper-button-prev.swiper-button-hidden {
            opacity: 0;
            cursor: auto;
            pointer-events: none
        }

        .swiper-navigation-disabled .swiper-button-next,
        .swiper-navigation-disabled .swiper-button-prev {
            display: none !important
        }

        .swiper-button-next:after,
        .swiper-button-prev:after {
            font-family: swiper-icons;
            font-size: var(--swiper-navigation-size);
            text-transform: none !important;
            letter-spacing: 0;
            font-variant: initial;
            line-height: 1
        }

        .swiper-button-prev {
            left: 10px;
            right: auto
        }

        .swiper-button-prev:after {
            content: 'prev'
        }

        .swiper-button-next {
            right: 10px;
            left: auto
        }

        .swiper-button-next:after {
            content: 'next'
        }

        .swiper-button-lock {
            display: none
        }

        .swiper-pagination {
            position: absolute;
            text-align: center;
            transition: .3s opacity;
            transform: translate3d(0, 0, 0);
            z-index: 10
        }

        .swiper-horizontal>.swiper-pagination-bullets {
            bottom: 10px;
            left: 0;
            width: 100%
        }

        .swiper-pagination-bullet {
            width: var(--swiper-pagination-bullet-width, var(--swiper-pagination-bullet-size, 8px));
            height: var(--swiper-pagination-bullet-height, var(--swiper-pagination-bullet-size, 8px));
            display: inline-block;
            border-radius: 50%;
            background: var(--swiper-pagination-bullet-inactive-color, #000);
            opacity: var(--swiper-pagination-bullet-inactive-opacity, .2)
        }

        button.swiper-pagination-bullet {
            border: none;
            margin: 0;
            padding: 0;
            box-shadow: none;
            -webkit-appearance: none;
            appearance: none
        }

        .swiper-pagination-bullet:only-child {
            display: none !important
        }

        .swiper-horizontal>.swiper-pagination-bullets .swiper-pagination-bullet {
            margin: 0 var(--swiper-pagination-bullet-horizontal-gap, 4px)
        }

        .swiper-scrollbar {
            border-radius: 10px;
            position: relative;
            -ms-touch-action: none;
            background: rgba(0, 0, 0, .1)
        }

        .swiper-scrollbar-disabled>.swiper-scrollbar,
        .swiper-scrollbar.swiper-scrollbar-disabled {
            display: none !important
        }

        .swiper-horizontal>.swiper-scrollbar,
        .swiper-scrollbar.swiper-scrollbar-horizontal {
            position: absolute;
            left: 1%;
            bottom: 3px;
            z-index: 50;
            height: 5px;
            width: 98%
        }

        .swiper-scrollbar.swiper-scrollbar-vertical {
            position: absolute;
            right: 3px;
            top: 1%;
            z-index: 50;
            width: 5px;
            height: 98%
        }

        .swiper-scrollbar-drag {
            height: 100%;
            width: 100%;
            position: relative;
            background: rgba(0, 0, 0, .5);
            border-radius: 10px;
            left: 0;
            top: 0
        }

        .swiper-scrollbar-lock {
            display: none
        }

        .swiper-zoom-container {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center
        }

        .swiper-zoom-container>canvas,
        .swiper-zoom-container>img,
        .swiper-zoom-container>svg {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain
        }

        .swiper-slide-zoomed {
            cursor: move
        }

        .swiper-lazy-preloader {
            width: 42px;
            height: 42px;
            position: absolute;
            left: 50%;
            top: 50%;
            margin-left: -21px;
            margin-top: -21px;
            z-index: 10;
            transform-origin: 50%;
            box-sizing: border-box;
            border: 4px solid var(--swiper-preloader-color, var(--swiper-theme-color));
            border-radius: 50%;
            border-top-color: transparent
        }

        .swiper:not(.swiper-watch-progress) .swiper-lazy-preloader {
            animation: 1s linear infinite swiper-preloader-spin
        }

        @keyframes swiper-preloader-spin {
            0% {
                transform: rotate(0)
            }

            100% {
                transform: rotate(360deg)
            }
        }

        .swiper .swiper-notification {
            position: absolute;
            left: 0;
            top: 0;
            pointer-events: none;
            opacity: 0;
            z-index: -1000
        }

        .elementor-element {
            --swiper-theme-color: #000;
            --swiper-navigation-size: 44px;
            --swiper-pagination-bullet-size: 6px;
            --swiper-pagination-bullet-horizontal-gap: 6px
        }

        .elementor-element .swiper .elementor-swiper-button,
        .elementor-element .swiper-container .elementor-swiper-button,
        .elementor-element .swiper-container~.elementor-swiper-button,
        .elementor-element .swiper~.elementor-swiper-button {
            position: absolute;
            display: inline-flex;
            z-index: 1;
            cursor: pointer;
            font-size: 25px;
            color: hsla(0, 0%, 93.3%, .9);
            top: 50%;
            transform: translateY(-50%)
        }

        .elementor-element .swiper .elementor-swiper-button svg,
        .elementor-element .swiper-container .elementor-swiper-button svg,
        .elementor-element .swiper-container~.elementor-swiper-button svg,
        .elementor-element .swiper~.elementor-swiper-button svg {
            fill: hsla(0, 0%, 93.3%, .9);
            height: 1em;
            width: 1em
        }

        .elementor-element .swiper .elementor-swiper-button-prev,
        .elementor-element .swiper-container .elementor-swiper-button-prev,
        .elementor-element .swiper-container~.elementor-swiper-button-prev,
        .elementor-element .swiper~.elementor-swiper-button-prev {
            left: 10px
        }

        .elementor-element .swiper .elementor-swiper-button-next,
        .elementor-element .swiper-container .elementor-swiper-button-next,
        .elementor-element .swiper-container~.elementor-swiper-button-next,
        .elementor-element .swiper~.elementor-swiper-button-next {
            right: 10px
        }

        .elementor-element .swiper .elementor-swiper-button.swiper-button-disabled,
        .elementor-element .swiper-container .elementor-swiper-button.swiper-button-disabled,
        .elementor-element .swiper-container~.elementor-swiper-button.swiper-button-disabled,
        .elementor-element .swiper~.elementor-swiper-button.swiper-button-disabled {
            opacity: .3
        }

        .elementor-element .swiper .swiper-horizontal>.swiper-pagination-bullets,
        .elementor-element .swiper-container .swiper-horizontal>.swiper-pagination-bullets {
            bottom: 5px
        }

        .elementor-element :where(.swiper-container-horizontal)~.swiper-pagination-bullets {
            bottom: 5px;
            left: 0;
            width: 100%
        }

        .elementor-element :where(.swiper-container-horizontal)~.swiper-pagination-bullets .swiper-pagination-bullet {
            margin: 0 var(--swiper-pagination-bullet-horizontal-gap, 4px)
        }

        [data-elementor-type=popup]:not(.elementor-edit-area) {
            display: none
        }

        .elementor-popup-modal {
            background-color: transparent;
            display: flex;
            pointer-events: none;
            -webkit-user-select: auto;
            -moz-user-select: auto;
            user-select: auto
        }

        .elementor-popup-modal .dialog-buttons-wrapper,
        .elementor-popup-modal .dialog-header {
            display: none
        }

        .elementor-popup-modal .dialog-close-button {
            display: none;
            inset-inline-end: 20px;
            margin-top: 0;
            opacity: 1;
            pointer-events: all;
            top: 20px;
            z-index: 9999
        }

        .elementor-popup-modal .dialog-close-button svg {
            fill: #1f2124;
            height: 1em;
            width: 1em
        }

        .elementor-popup-modal .dialog-widget-content {
            background-color: #fff;
            border-radius: 0;
            box-shadow: none;
            max-height: 100%;
            max-width: 100%;
            overflow: visible;
            pointer-events: all;
            width: auto
        }

        .elementor-popup-modal .dialog-message {
            display: flex;
            max-height: 100vh;
            max-width: 100vw;
            overflow: auto;
            padding: 0;
            width: 640px
        }

        .elementor-popup-modal .elementor {
            width: 100%
        }

        @font-face {
            font-family: "Font Awesome 5 Brands";
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://mayani.ph/wp-content/plugins/elementor/assets/lib/font-awesome/webfonts/fa-brands-400.eot);
            src: url(https://mayani.ph/wp-content/plugins/elementor/assets/lib/font-awesome/webfonts/fa-brands-400.eot?#iefix) format("embedded-opentype"), url(https://mayani.ph/wp-content/plugins/elementor/assets/lib/font-awesome/webfonts/fa-brands-400.woff2) format("woff2"), url(https://mayani.ph/wp-content/plugins/elementor/assets/lib/font-awesome/webfonts/fa-brands-400.woff) format("woff"), url(https://mayani.ph/wp-content/plugins/elementor/assets/lib/font-awesome/webfonts/fa-brands-400.ttf) format("truetype"), url(https://mayani.ph/wp-content/plugins/elementor/assets/lib/font-awesome/webfonts/fa-brands-400.svg#fontawesome) format("svg")
        }

        .fab {
            font-family: "Font Awesome 5 Brands"
        }

        .fab,
        .far {
            font-weight: 400
        }

        @font-face {
            font-family: "Font Awesome 5 Free";
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(https://mayani.ph/wp-content/plugins/elementor/assets/lib/font-awesome/webfonts/fa-solid-900.eot);
            src: url(https://mayani.ph/wp-content/plugins/elementor/assets/lib/font-awesome/webfonts/fa-solid-900.eot?#iefix) format("embedded-opentype"), url(https://mayani.ph/wp-content/plugins/elementor/assets/lib/font-awesome/webfonts/fa-solid-900.woff2) format("woff2"), url(https://mayani.ph/wp-content/plugins/elementor/assets/lib/font-awesome/webfonts/fa-solid-900.woff) format("woff"), url(https://mayani.ph/wp-content/plugins/elementor/assets/lib/font-awesome/webfonts/fa-solid-900.ttf) format("truetype"), url(https://mayani.ph/wp-content/plugins/elementor/assets/lib/font-awesome/webfonts/fa-solid-900.svg#fontawesome) format("svg")
        }

        .fa,
        .far,
        .fas {
            font-family: "Font Awesome 5 Free"
        }

        .fa,
        .fas {
            font-weight: 900
        }

        .slick-slider {
            position: relative;
            display: block;
            box-sizing: border-box;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -ms-touch-action: pan-y;
            touch-action: pan-y;
            -webkit-tap-highlight-color: transparent
        }

        .premium-post-ticker__posts-wrapper.slick-slider[dir=rtl] .slick-slide {
            float: right
        }

        .slick-list {
            position: relative;
            overflow: hidden;
            display: block;
            margin: 0;
            padding: 0
        }

        .slick-list:focus {
            outline: 0
        }

        .slick-list.dragging {
            cursor: pointer
        }

        .slick-slider .slick-list,
        .slick-slider .slick-track {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }

        .slick-track {
            position: relative;
            left: 0;
            top: 0;
            display: block
        }

        .slick-track:after,
        .slick-track:before {
            content: "";
            display: table
        }

        .slick-track:after {
            clear: both
        }

        .slick-loading .slick-track {
            visibility: hidden
        }

        .slick-slide {
            float: left;
            height: 100%;
            min-height: 1px;
            display: none
        }

        .elementor-slick-slider[dir=rtl] .slick-slide {
            float: right
        }

        .slick-slide.slick-loading img {
            display: none
        }

        .slick-slide.dragging img {
            pointer-events: none
        }

        .slick-initialized .slick-slide {
            display: block
        }

        .slick-loading .slick-slide {
            visibility: hidden
        }

        .slick-vertical .slick-slide {
            display: block;
            height: auto;
            border: 1px solid transparent
        }

        .slick-arrow.slick-hidden {
            display: none
        }

        .premium-blog-wrap a.carousel-arrow {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            width: 2em;
            height: 2em;
            line-height: 0;
            text-align: center;
            position: absolute;
            z-index: 99;
            cursor: pointer;
            -webkit-transition: .3s ease-in-out;
            transition: all .3s ease-in-out;
            -webkit-appearance: inherit;
            border: none;
            box-shadow: none
        }

        div[class^=premium-] .slick-arrow i {
            display: block
        }

        .premium-blog-wrap a.carousel-arrow {
            top: 50%;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
            text-decoration: none
        }

        a.carousel-arrow.carousel-next {
            left: auto;
            right: -20px
        }

        a.carousel-arrow.carousel-prev {
            left: -20px;
            right: auto
        }

        .premium-blog-wrap ul.slick-dots,
        .premium-carousel-dots-below ul.slick-dots,
        .premium-fb-rev-reviews ul.slick-dots,
        .premium-pinterest-feed__pins-wrapper ul.slick-dots,
        .premium-search__query-wrap ul.slick-dots,
        .premium-tcloud-container ul.slick-dots,
        .premium-tiktok-feed__videos-wrapper ul.slick-dots,
        .premium-woo-cats__list-wrap ul.slick-dots,
        .premium-woocommerce ul.slick-dots {
            position: relative;
            bottom: 0;
            list-style: none;
            text-align: center;
            margin: 0;
            padding: 0
        }

        ul.slick-dots li {
            font-size: 10px;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            margin: 5px;
            width: 20px;
            height: 20px;
            cursor: pointer
        }

        .premium-carousel-hidden {
            opacity: 0;
            visibility: hidden
        }

        .elementor-widget-premium-weather .slick-list,
        .elementor-widget-premium-weather .slick-track {
            display: -webkit-flex !important;
            display: -ms-flexbox !important;
            display: flex !important
        }

        .elementor-search-form {
            display: block;
            transition: .2s
        }

        .elementor-search-form button,
        .elementor-search-form input[type=search] {
            -webkit-appearance: none;
            -moz-appearance: none;
            background: 0 0;
            border: 0;
            display: inline-block;
            font-size: 15px;
            line-height: 1;
            margin: 0;
            min-width: 0;
            padding: 0;
            vertical-align: middle;
            white-space: normal
        }

        .elementor-search-form button:focus,
        .elementor-search-form input[type=search]:focus {
            color: inherit;
            outline: 0
        }

        .elementor-search-form button {
            background-color: #69727d;
            border-radius: 0;
            color: #fff;
            font-size: var(--e-search-form-submit-icon-size, 16px)
        }

        .elementor-search-form__container {
            border: 0 solid transparent;
            display: flex;
            min-height: 50px;
            overflow: hidden;
            transition: .2s
        }

        .elementor-search-form__container:not(.elementor-search-form--full-screen) {
            background: #f1f2f3
        }

        .elementor-search-form__input {
            color: #3f444b;
            flex-basis: 100%;
            transition: color .2s
        }

        .elementor-search-form__input::-moz-placeholder {
            color: inherit;
            font-family: inherit;
            opacity: .6
        }

        .elementor-search-form__input::placeholder {
            color: inherit;
            font-family: inherit;
            opacity: .6
        }

        .elementor-search-form--skin-minimal .elementor-search-form__icon {
            align-items: center;
            color: #3f444b;
            display: flex;
            justify-content: flex-end;
            opacity: .6;
            fill: #3f444b;
            font-size: var(--e-search-form-icon-size-minimal, 15px)
        }

        .elementor-search-form--skin-minimal .elementor-search-form__icon svg {
            height: var(--e-search-form-icon-size-minimal, 15px);
            width: var(--e-search-form-icon-size-minimal, 15px)
        }

        .elementor-search-form--skin-minimal:focus-within {
            outline-style: solid;
            outline-width: 2px
        }

        .elementor-search-form--skin-full_screen .elementor-search-form__container:not(.elementor-search-form--full-screen) .dialog-lightbox-close-button {
            display: none
        }

        .fa,
        .fab,
        .far,
        .fas {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            display: inline-block;
            font-style: normal;
            font-variant: normal;
            text-rendering: auto;
            line-height: 1
        }

        .fa-angle-left:before {
            content: "\f104"
        }

        .fa-angle-right:before {
            content: "\f105"
        }

        .fa-calendar:before {
            content: "\f133"
        }

        .fa-calendar-alt:before {
            content: "\f073"
        }

        .fa-circle:before {
            content: "\f111"
        }

        .fa-facebook:before {
            content: "\f09a"
        }

        .fa-instagram:before {
            content: "\f16d"
        }

        .fa-linkedin:before {
            content: "\f08c"
        }

        .fa-search:before {
            content: "\f002"
        }

        .fa-user:before {
            content: "\f007"
        }

        .fa-youtube:before {
            content: "\f167"
        }

        .fa,
        .fas {
            font-family: "Font Awesome 5 Free";
            font-weight: 900
        }

        .elementor-43 .elementor-element.elementor-element-b8346b6 {
            --spacer-size: 50px
        }

        .elementor-43 .elementor-element.elementor-element-7ca84d1 .premium-blog-post-outer-container {
            width: 100%;
            margin-bottom: 25px;
            padding-right: calc(0px/2);
            padding-left: calc(0px/2)
        }

        .elementor-43 .elementor-element.elementor-element-7ca84d1 .premium-blog-content-wrapper {
            text-align: left;
            background-color: #fff
        }

        .elementor-43 .elementor-element.elementor-element-7ca84d1 .premium-blog-thumb-effect-wrapper {
            flex-basis: 50%
        }

        .elementor-43 .elementor-element.elementor-element-7ca84d1 .premium-blog-thumbnail-container img {
            object-fit: cover
        }

        .elementor-43 .elementor-element.elementor-element-7ca84d1 .premium-blog-wrap {
            margin-left: calc(0px/2);
            margin-right: calc(0px/2)
        }

        .elementor-43 .elementor-element.elementor-element-7ca84d1 .premium-blog-pagination-container {
            text-align: left
        }

        .elementor-43 .elementor-element.elementor-element-7ca84d1 .premium-blog-entry-title,
        .elementor-43 .elementor-element.elementor-element-7ca84d1 .premium-blog-entry-title a {
            font-family: Gilroy, Sans-serif;
            font-size: 1.5em;
            font-weight: 800;
            line-height: 1.1em
        }

        .elementor-43 .elementor-element.elementor-element-7ca84d1 .premium-blog-entry-title a {
            color: var(--e-global-color-secondary)
        }

        .elementor-43 .elementor-element.elementor-element-7ca84d1 .premium-blog-entry-title:hover a {
            color: var(--e-global-color-primary)
        }

        .elementor-43 .elementor-element.elementor-element-7ca84d1 .premium-blog-meta-data {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-size: var(--e-global-typography-accent-font-size);
            font-weight: var(--e-global-typography-accent-font-weight);
            line-height: var(--e-global-typography-accent-line-height)
        }

        .elementor-43 .elementor-element.elementor-element-7ca84d1 .premium-blog-meta-data>* {
            color: #818181
        }

        .elementor-43 .elementor-element.elementor-element-7ca84d1 .premium-blog-post-content {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-size: var(--e-global-typography-accent-font-size);
            font-weight: var(--e-global-typography-accent-font-weight);
            line-height: var(--e-global-typography-accent-line-height);
            color: var(--e-global-color-text)
        }

        .elementor-43 .elementor-element.elementor-element-7ca84d1 .premium-blog-post-container {
            background-color: #f5f5f5;
            border-style: none;
            border-radius: 15px
        }

        .elementor-43 .elementor-element.elementor-element-7ca84d1 .premium-blog-pagination-container>.page-numbers {
            font-family: var(--e-global-typography-9ac8bb4-font-family), Sans-serif;
            font-size: var(--e-global-typography-9ac8bb4-font-size);
            font-weight: var(--e-global-typography-9ac8bb4-font-weight);
            line-height: var(--e-global-typography-9ac8bb4-line-height)
        }

        .elementor-43 .elementor-element.elementor-element-7ca84d1 .premium-blog-pagination-container .page-numbers {
            color: var(--e-global-color-secondary)
        }

        .elementor-43 .elementor-element.elementor-element-7ca84d1 .premium-blog-pagination-container .page-numbers:hover {
            color: var(--e-global-color-primary)
        }

        .elementor-43 .elementor-element.elementor-element-7ca84d1 .premium-blog-pagination-container span.current {
            color: var(--e-global-color-primary)
        }

        .elementor-43 .elementor-element.elementor-element-c1deda4:not(.elementor-motion-effects-element-type-background)>.elementor-widget-wrap,
        .elementor-43 .elementor-element.elementor-element-c1deda4>.elementor-widget-wrap>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #f1f1f1
        }

        .elementor-43 .elementor-element.elementor-element-c1deda4>.elementor-background-slideshow,
        .elementor-43 .elementor-element.elementor-element-c1deda4>.elementor-element-populated {
            border-radius: 20px 0 0 20px
        }

        .elementor-43 .elementor-element.elementor-element-c1deda4>.elementor-element-populated {
            transition: background .3s, border .3s, border-radius .3s, box-shadow .3s
        }

        .elementor-43 .elementor-element.elementor-element-365bf84>.elementor-widget-container {
            padding: 5% 5% 0
        }

        .elementor-43 .elementor-element.elementor-element-365bf84 .elementor-search-form__container {
            min-height: 50px
        }

        body:not(.rtl) .elementor-43 .elementor-element.elementor-element-365bf84 .elementor-search-form__icon {
            padding-left: calc(50px / 3)
        }

        body.rtl .elementor-43 .elementor-element.elementor-element-365bf84 .elementor-search-form__icon {
            padding-right: calc(50px / 3)
        }

        .elementor-43 .elementor-element.elementor-element-365bf84 .elementor-search-form__input {
            padding-left: calc(50px / 3);
            padding-right: calc(50px / 3)
        }

        .elementor-43 .elementor-element.elementor-element-365bf84 input[type=search].elementor-search-form__input {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-size: var(--e-global-typography-accent-font-size);
            font-weight: var(--e-global-typography-accent-font-weight);
            line-height: var(--e-global-typography-accent-line-height)
        }

        .elementor-43 .elementor-element.elementor-element-365bf84 .elementor-lightbox .dialog-lightbox-close-button,
        .elementor-43 .elementor-element.elementor-element-365bf84 .elementor-lightbox .dialog-lightbox-close-button:hover,
        .elementor-43 .elementor-element.elementor-element-365bf84 .elementor-search-form__icon,
        .elementor-43 .elementor-element.elementor-element-365bf84 .elementor-search-form__input {
            color: var(--e-global-color-primary);
            fill: var(--e-global-color-primary)
        }

        .elementor-43 .elementor-element.elementor-element-365bf84:not(.elementor-search-form--skin-full_screen) .elementor-search-form__container {
            background-color: #02010100;
            border-color: var(--e-global-color-primary);
            border-width: 0 0 3px;
            border-radius: 0
        }

        .elementor-43 .elementor-element.elementor-element-365bf84 .elementor-lightbox .dialog-lightbox-close-button:hover {
            color: var(--e-global-color-secondary);
            fill: var(--e-global-color-secondary)
        }

        .elementor-43 .elementor-element.elementor-element-c5ef035>.elementor-widget-container {
            margin: 0 10% 0 0;
            padding: 5% 5% 0
        }

        .elementor-43 .elementor-element.elementor-element-24388d6 .ectbe-wrapper {
            --e-ectbe-date-area-color: var(--e-global-color-secondary);
            --e-ectbe-evt-title-color: var(--e-global-color-text);
            --e-ectbe-evt-read-more-color: var(--e-global-color-primary)
        }

        .elementor-43 .elementor-element.elementor-element-fc42155 .premium-blog-post-outer-container {
            width: 100%;
            margin-bottom: 25px;
            padding-right: calc(0px/2);
            padding-left: calc(0px/2)
        }

        .elementor-43 .elementor-element.elementor-element-fc42155 .premium-blog-content-wrapper {
            text-align: left;
            background-color: #fffFFF00;
            margin: -10px 0 0;
            padding: 0 0 0 30px
        }

        .elementor-43 .elementor-element.elementor-element-fc42155>.elementor-widget-container {
            padding: 5%
        }

        .elementor-43 .elementor-element.elementor-element-fc42155 .premium-blog-thumb-effect-wrapper {
            flex-basis: 30%
        }

        .elementor-43 .elementor-element.elementor-element-fc42155 .premium-blog-thumbnail-container img {
            height: 100px;
            object-fit: cover
        }

        .elementor-43 .elementor-element.elementor-element-fc42155 .premium-blog-wrap {
            margin-left: calc(0px/2);
            margin-right: calc(0px/2)
        }

        .elementor-43 .elementor-element.elementor-element-fc42155 .premium-blog-pagination-container {
            text-align: left
        }

        .elementor-43 .elementor-element.elementor-element-fc42155 .premium-blog-entry-title,
        .elementor-43 .elementor-element.elementor-element-fc42155 .premium-blog-entry-title a {
            font-family: Gilroy, Sans-serif;
            font-size: 1.3em;
            font-weight: 700;
            line-height: 1.1em
        }

        .elementor-43 .elementor-element.elementor-element-fc42155 .premium-blog-entry-title a {
            color: var(--e-global-color-text)
        }

        .elementor-43 .elementor-element.elementor-element-fc42155 .premium-blog-entry-title:hover a {
            color: var(--e-global-color-primary)
        }

        .elementor-43 .elementor-element.elementor-element-fc42155 .premium-blog-meta-data {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-size: var(--e-global-typography-accent-font-size);
            font-weight: var(--e-global-typography-accent-font-weight);
            line-height: var(--e-global-typography-accent-line-height)
        }

        .elementor-43 .elementor-element.elementor-element-fc42155 .premium-blog-meta-data>* {
            color: #818181
        }

        .elementor-43 .elementor-element.elementor-element-fc42155 .premium-blog-post-content {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-size: var(--e-global-typography-accent-font-size);
            font-weight: var(--e-global-typography-accent-font-weight);
            line-height: var(--e-global-typography-accent-line-height);
            color: var(--e-global-color-text)
        }

        .elementor-43 .elementor-element.elementor-element-fc42155 .premium-blog-post-container {
            background-color: #f5f5F500;
            border-style: none;
            border-radius: 0;
            padding: 0
        }

        .elementor-43 .elementor-element.elementor-element-fc42155 .premium-blog-pagination-container>.page-numbers {
            font-family: var(--e-global-typography-9ac8bb4-font-family), Sans-serif;
            font-size: var(--e-global-typography-9ac8bb4-font-size);
            font-weight: var(--e-global-typography-9ac8bb4-font-weight);
            line-height: var(--e-global-typography-9ac8bb4-line-height)
        }

        .elementor-43 .elementor-element.elementor-element-fc42155 .premium-blog-pagination-container .page-numbers {
            color: var(--e-global-color-secondary)
        }

        .elementor-43 .elementor-element.elementor-element-9479405>.elementor-widget-container {
            padding: 0
        }

        .elementor-43 .elementor-element.elementor-element-9479405 {
            text-align: center
        }

        .elementor-43 .elementor-element.elementor-element-9479405 .elementor-heading-title {
            color: var(--e-global-color-secondary);
            font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
            font-size: var(--e-global-typography-secondary-font-size);
            font-weight: var(--e-global-typography-secondary-font-weight);
            line-height: var(--e-global-typography-secondary-line-height)
        }

        .elementor-43 .elementor-element.elementor-element-b32aa1f {
            --spacer-size: 50px
        }

        .elementor-43 .elementor-element.elementor-element-15725af:not(.elementor-motion-effects-element-type-background)>.elementor-widget-wrap,
        .elementor-43 .elementor-element.elementor-element-15725af>.elementor-widget-wrap>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #f1f1f1
        }

        .elementor-43 .elementor-element.elementor-element-15725af>.elementor-background-slideshow,
        .elementor-43 .elementor-element.elementor-element-15725af>.elementor-element-populated {
            border-radius: 20px 0 0 20px
        }

        .elementor-43 .elementor-element.elementor-element-15725af>.elementor-element-populated {
            transition: background .3s, border .3s, border-radius .3s, box-shadow .3s
        }

        .elementor-43 .elementor-element.elementor-element-f1318fa>.elementor-widget-container {
            padding: 5% 5% 0
        }

        .elementor-43 .elementor-element.elementor-element-f1318fa .elementor-search-form__container {
            min-height: 50px
        }

        body:not(.rtl) .elementor-43 .elementor-element.elementor-element-f1318fa .elementor-search-form__icon {
            padding-left: calc(50px / 3)
        }

        body.rtl .elementor-43 .elementor-element.elementor-element-f1318fa .elementor-search-form__icon {
            padding-right: calc(50px / 3)
        }

        .elementor-43 .elementor-element.elementor-element-f1318fa .elementor-search-form__input {
            padding-left: calc(50px / 3);
            padding-right: calc(50px / 3)
        }

        .elementor-43 .elementor-element.elementor-element-f1318fa input[type=search].elementor-search-form__input {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-size: var(--e-global-typography-accent-font-size);
            font-weight: var(--e-global-typography-accent-font-weight);
            line-height: var(--e-global-typography-accent-line-height)
        }

        .elementor-43 .elementor-element.elementor-element-f1318fa .elementor-lightbox .dialog-lightbox-close-button,
        .elementor-43 .elementor-element.elementor-element-f1318fa .elementor-lightbox .dialog-lightbox-close-button:hover,
        .elementor-43 .elementor-element.elementor-element-f1318fa .elementor-search-form__icon,
        .elementor-43 .elementor-element.elementor-element-f1318fa .elementor-search-form__input {
            color: var(--e-global-color-primary);
            fill: var(--e-global-color-primary)
        }

        .elementor-43 .elementor-element.elementor-element-f1318fa:not(.elementor-search-form--skin-full_screen) .elementor-search-form__container {
            background-color: #02010100;
            border-color: var(--e-global-color-primary);
            border-width: 0 0 3px;
            border-radius: 0
        }

        .elementor-43 .elementor-element.elementor-element-f1318fa .elementor-lightbox .dialog-lightbox-close-button:hover {
            color: var(--e-global-color-secondary);
            fill: var(--e-global-color-secondary)
        }

        .elementor-43 .elementor-element.elementor-element-79f2493>.elementor-widget-container {
            padding: 0
        }

        .elementor-43 .elementor-element.elementor-element-79f2493 {
            text-align: center
        }

        .elementor-43 .elementor-element.elementor-element-79f2493 .elementor-heading-title {
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
            font-size: var(--e-global-typography-secondary-font-size);
            font-weight: var(--e-global-typography-secondary-font-weight);
            line-height: var(--e-global-typography-secondary-line-height)
        }

        .elementor-43 .elementor-element.elementor-element-3554657 .premium-blog-post-outer-container {
            margin-bottom: 25px
        }

        .elementor-43 .elementor-element.elementor-element-3554657 .premium-blog-content-wrapper {
            text-align: left;
            background-color: #fffFFF00
        }

        .elementor-43 .elementor-element.elementor-element-3554657>.elementor-widget-container {
            padding: 5%
        }

        .elementor-43 .elementor-element.elementor-element-3554657 .premium-blog-thumb-effect-wrapper {
            flex-basis: 30%
        }

        .elementor-43 .elementor-element.elementor-element-3554657 .premium-blog-thumbnail-container img {
            object-fit: cover
        }

        .elementor-43 .elementor-element.elementor-element-3554657 .premium-blog-pagination-container {
            text-align: left
        }

        .elementor-43 .elementor-element.elementor-element-3554657 .premium-blog-entry-title,
        .elementor-43 .elementor-element.elementor-element-3554657 .premium-blog-entry-title a {
            font-family: Gilroy, Sans-serif;
            font-size: 1.3em;
            font-weight: 700
        }

        .elementor-43 .elementor-element.elementor-element-3554657 .premium-blog-entry-title a {
            color: var(--e-global-color-text)
        }

        .elementor-43 .elementor-element.elementor-element-3554657 .premium-blog-entry-title:hover a {
            color: var(--e-global-color-primary)
        }

        .elementor-43 .elementor-element.elementor-element-3554657 .premium-blog-meta-data {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-size: var(--e-global-typography-accent-font-size);
            font-weight: var(--e-global-typography-accent-font-weight);
            line-height: var(--e-global-typography-accent-line-height)
        }

        .elementor-43 .elementor-element.elementor-element-3554657 .premium-blog-meta-data>* {
            color: #818181
        }

        .elementor-43 .elementor-element.elementor-element-3554657 .premium-blog-post-content {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-size: var(--e-global-typography-accent-font-size);
            font-weight: var(--e-global-typography-accent-font-weight);
            line-height: var(--e-global-typography-accent-line-height);
            color: var(--e-global-color-text)
        }

        .elementor-43 .elementor-element.elementor-element-3554657 .premium-blog-post-container {
            background-color: #f5f5F500;
            border-style: none;
            border-radius: 0
        }

        .elementor-43 .elementor-element.elementor-element-3554657 .premium-blog-pagination-container>.page-numbers {
            font-family: var(--e-global-typography-9ac8bb4-font-family), Sans-serif;
            font-size: var(--e-global-typography-9ac8bb4-font-size);
            font-weight: var(--e-global-typography-9ac8bb4-font-weight);
            line-height: var(--e-global-typography-9ac8bb4-line-height)
        }

        .elementor-43 .elementor-element.elementor-element-3554657 .premium-blog-pagination-container .page-numbers {
            color: var(--e-global-color-secondary)
        }

        .elementor-43 .elementor-element.elementor-element-a4f2dce .ectbe-wrapper {
            --e-ectbe-date-area-color: var(--e-global-color-secondary);
            --e-ectbe-evt-title-color: var(--e-global-color-text);
            --e-ectbe-evt-read-more-color: var(--e-global-color-primary)
        }

        @media(min-width:768px) {
            .elementor-43 .elementor-element.elementor-element-91cfbe6 {
                width: 5%
            }

            .elementor-43 .elementor-element.elementor-element-8911af2 {
                width: 55%
            }

            .elementor-43 .elementor-element.elementor-element-85c23a6 {
                width: 5%
            }

            .elementor-43 .elementor-element.elementor-element-c1deda4 {
                width: 35%
            }
        }

        @media(max-width:1200px) and (min-width:768px) {
            .elementor-43 .elementor-element.elementor-element-3276d83 {
                width: 10%
            }

            .elementor-43 .elementor-element.elementor-element-8b34fa5 {
                width: 80%
            }

            .elementor-43 .elementor-element.elementor-element-256988d {
                width: 10%
            }
        }

        @media(min-width:2400px) {
            .elementor-43 .elementor-element.elementor-element-7ca84d1 .premium-blog-meta-data {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-43 .elementor-element.elementor-element-7ca84d1 .premium-blog-post-content {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-43 .elementor-element.elementor-element-7ca84d1 .premium-blog-pagination-container>.page-numbers {
                font-size: var(--e-global-typography-9ac8bb4-font-size);
                line-height: var(--e-global-typography-9ac8bb4-line-height)
            }

            .elementor-43 .elementor-element.elementor-element-365bf84 input[type=search].elementor-search-form__input {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-43 .elementor-element.elementor-element-fc42155 .premium-blog-meta-data {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-43 .elementor-element.elementor-element-fc42155 .premium-blog-post-content {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-43 .elementor-element.elementor-element-fc42155 .premium-blog-pagination-container>.page-numbers {
                font-size: var(--e-global-typography-9ac8bb4-font-size);
                line-height: var(--e-global-typography-9ac8bb4-line-height)
            }

            .elementor-43 .elementor-element.elementor-element-9479405>.elementor-widget-container {
                padding: 0 0 0 5%
            }

            .elementor-43 .elementor-element.elementor-element-9479405 .elementor-heading-title {
                font-size: var(--e-global-typography-secondary-font-size);
                line-height: var(--e-global-typography-secondary-line-height)
            }

            .elementor-43 .elementor-element.elementor-element-f1318fa input[type=search].elementor-search-form__input {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-43 .elementor-element.elementor-element-79f2493>.elementor-widget-container {
                padding: 0 0 0 5%
            }

            .elementor-43 .elementor-element.elementor-element-79f2493 .elementor-heading-title {
                font-size: var(--e-global-typography-secondary-font-size);
                line-height: var(--e-global-typography-secondary-line-height)
            }

            .elementor-43 .elementor-element.elementor-element-3554657 .premium-blog-meta-data {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-43 .elementor-element.elementor-element-3554657 .premium-blog-post-content {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-43 .elementor-element.elementor-element-3554657 .premium-blog-pagination-container>.page-numbers {
                font-size: var(--e-global-typography-9ac8bb4-font-size);
                line-height: var(--e-global-typography-9ac8bb4-line-height)
            }
        }

        @media(max-width:1400px) {
            .elementor-43 .elementor-element.elementor-element-7ca84d1 .premium-blog-meta-data {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-43 .elementor-element.elementor-element-7ca84d1 .premium-blog-post-content {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-43 .elementor-element.elementor-element-7ca84d1 .premium-blog-pagination-container>.page-numbers {
                font-size: var(--e-global-typography-9ac8bb4-font-size);
                line-height: var(--e-global-typography-9ac8bb4-line-height)
            }

            .elementor-43 .elementor-element.elementor-element-365bf84 input[type=search].elementor-search-form__input {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-43 .elementor-element.elementor-element-fc42155 .premium-blog-meta-data {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-43 .elementor-element.elementor-element-fc42155 .premium-blog-post-content {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-43 .elementor-element.elementor-element-fc42155 .premium-blog-pagination-container>.page-numbers {
                font-size: var(--e-global-typography-9ac8bb4-font-size);
                line-height: var(--e-global-typography-9ac8bb4-line-height)
            }

            .elementor-43 .elementor-element.elementor-element-9479405 .elementor-heading-title {
                font-size: var(--e-global-typography-secondary-font-size);
                line-height: var(--e-global-typography-secondary-line-height)
            }

            .elementor-43 .elementor-element.elementor-element-f1318fa input[type=search].elementor-search-form__input {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-43 .elementor-element.elementor-element-79f2493 .elementor-heading-title {
                font-size: var(--e-global-typography-secondary-font-size);
                line-height: var(--e-global-typography-secondary-line-height)
            }

            .elementor-43 .elementor-element.elementor-element-3554657 .premium-blog-meta-data {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-43 .elementor-element.elementor-element-3554657 .premium-blog-post-content {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-43 .elementor-element.elementor-element-3554657 .premium-blog-pagination-container>.page-numbers {
                font-size: var(--e-global-typography-9ac8bb4-font-size);
                line-height: var(--e-global-typography-9ac8bb4-line-height)
            }
        }

        @media(max-width:1200px) {

            .elementor-43 .elementor-element.elementor-element-7ca84d1 .premium-blog-entry-title,
            .elementor-43 .elementor-element.elementor-element-7ca84d1 .premium-blog-entry-title a {
                font-size: 32px
            }

            .elementor-43 .elementor-element.elementor-element-b32aa1f {
                --spacer-size: 25px
            }

            .elementor-43 .elementor-element.elementor-element-85ee149>.elementor-widget-container {
                padding: 0 10%
            }

            .elementor-43 .elementor-element.elementor-element-15725af>.elementor-background-slideshow,
            .elementor-43 .elementor-element.elementor-element-15725af>.elementor-element-populated {
                border-radius: 0 0 0 0
            }

            .elementor-43 .elementor-element.elementor-element-79f2493>.elementor-widget-container {
                padding: 5% 5% 0
            }

            .elementor-43 .elementor-element.elementor-element-79f2493 {
                text-align: left
            }
        }

        @media(max-width:1024px) {
            .elementor-43 .elementor-element.elementor-element-7ca84d1 .premium-blog-post-outer-container {
                width: 50%
            }

            .elementor-43 .elementor-element.elementor-element-7ca84d1 .premium-blog-meta-data {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-43 .elementor-element.elementor-element-7ca84d1 .premium-blog-post-content {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-43 .elementor-element.elementor-element-7ca84d1 .premium-blog-pagination-container>.page-numbers {
                font-size: var(--e-global-typography-9ac8bb4-font-size);
                line-height: var(--e-global-typography-9ac8bb4-line-height)
            }

            .elementor-43 .elementor-element.elementor-element-365bf84 input[type=search].elementor-search-form__input {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-43 .elementor-element.elementor-element-fc42155 .premium-blog-post-outer-container {
                width: 50%
            }

            .elementor-43 .elementor-element.elementor-element-fc42155 .premium-blog-meta-data {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-43 .elementor-element.elementor-element-fc42155 .premium-blog-post-content {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-43 .elementor-element.elementor-element-fc42155 .premium-blog-pagination-container>.page-numbers {
                font-size: var(--e-global-typography-9ac8bb4-font-size);
                line-height: var(--e-global-typography-9ac8bb4-line-height)
            }

            .elementor-43 .elementor-element.elementor-element-9479405 .elementor-heading-title {
                font-size: var(--e-global-typography-secondary-font-size);
                line-height: var(--e-global-typography-secondary-line-height)
            }

            .elementor-43 .elementor-element.elementor-element-85ee149>.elementor-widget-container {
                margin: -10% 0 0
            }

            .elementor-43 .elementor-element.elementor-element-f1318fa input[type=search].elementor-search-form__input {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-43 .elementor-element.elementor-element-79f2493 .elementor-heading-title {
                font-size: var(--e-global-typography-secondary-font-size);
                line-height: var(--e-global-typography-secondary-line-height)
            }

            .elementor-43 .elementor-element.elementor-element-3554657 .premium-blog-meta-data {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-43 .elementor-element.elementor-element-3554657 .premium-blog-post-content {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-43 .elementor-element.elementor-element-3554657 .premium-blog-pagination-container>.page-numbers {
                font-size: var(--e-global-typography-9ac8bb4-font-size);
                line-height: var(--e-global-typography-9ac8bb4-line-height)
            }
        }

        @media(max-width:767px) {
            .elementor-43 .elementor-element.elementor-element-b8346b6 {
                --spacer-size: 25px
            }

            .elementor-43 .elementor-element.elementor-element-7ca84d1 .premium-blog-post-outer-container {
                width: 100%
            }

            .elementor-43 .elementor-element.elementor-element-7ca84d1 .premium-blog-meta-data {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-43 .elementor-element.elementor-element-7ca84d1 .premium-blog-post-content {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-43 .elementor-element.elementor-element-7ca84d1 .premium-blog-pagination-container>.page-numbers {
                font-size: var(--e-global-typography-9ac8bb4-font-size);
                line-height: var(--e-global-typography-9ac8bb4-line-height)
            }

            .elementor-43 .elementor-element.elementor-element-365bf84 input[type=search].elementor-search-form__input {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-43 .elementor-element.elementor-element-fc42155 .premium-blog-post-outer-container {
                width: 100%
            }

            .elementor-43 .elementor-element.elementor-element-fc42155 .premium-blog-meta-data {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-43 .elementor-element.elementor-element-fc42155 .premium-blog-post-content {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-43 .elementor-element.elementor-element-fc42155 .premium-blog-pagination-container>.page-numbers {
                font-size: var(--e-global-typography-9ac8bb4-font-size);
                line-height: var(--e-global-typography-9ac8bb4-line-height)
            }

            .elementor-43 .elementor-element.elementor-element-9479405 .elementor-heading-title {
                font-size: var(--e-global-typography-secondary-font-size);
                line-height: var(--e-global-typography-secondary-line-height)
            }

            .elementor-43 .elementor-element.elementor-element-b32aa1f {
                --spacer-size: 5px
            }

            .elementor-43 .elementor-element.elementor-element-85ee149>.elementor-widget-container {
                margin: -25% 0 0
            }

            .elementor-43 .elementor-element.elementor-element-f1318fa input[type=search].elementor-search-form__input {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-43 .elementor-element.elementor-element-79f2493 .elementor-heading-title {
                font-size: var(--e-global-typography-secondary-font-size);
                line-height: var(--e-global-typography-secondary-line-height)
            }

            .elementor-43 .elementor-element.elementor-element-3554657 .premium-blog-entry-title,
            .elementor-43 .elementor-element.elementor-element-3554657 .premium-blog-entry-title a {
                line-height: 1em
            }

            .elementor-43 .elementor-element.elementor-element-3554657 .premium-blog-meta-data {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-43 .elementor-element.elementor-element-3554657 .premium-blog-post-content {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-43 .elementor-element.elementor-element-3554657 .premium-blog-pagination-container>.page-numbers {
                font-size: var(--e-global-typography-9ac8bb4-font-size);
                line-height: var(--e-global-typography-9ac8bb4-line-height)
            }
        }

        .elementor-43 .elementor-element.elementor-element-7ca84d1 .premium-blog-thumbnail-container img {
            border-radius: 20px
        }

        .ectbe-month-header.ectbe-featured-event,
        .style-2 #ectbe-date {
            display: none
        }

        .ectbe-list-wrapper.style-2 .ectbe-featured-event .ectbe-content-box,
        .style-2 .ectbe-inner-wrapper.ectbe-featured-event {
            border: none !important
        }

        .style-2 span.ectbe-ev-day {
            font-size: 20px !important;
            font-weight: 600 !important
        }

        .ectbe-evt-img,
        .ectbe-list-wrapper.style-2 .ectbe-content-box {
            padding: 0 3% !important
        }

        .ectbe-wrapper .ectbe-evt-read-more:hover {
            color: #10594e;
            font-size: 14px
        }

        .ectbe-list-wrapper.style-2 .ectbe-featured-event .ectbe-content-box {
            justify-content: center !important
        }

        .elementor-43 .elementor-element.elementor-element-c1deda4 {
            height: 50% !important
        }

        .elementor-43 .elementor-element.elementor-element-3554657 .premium-blog-meta-data,
        .elementor-43 .elementor-element.elementor-element-7ca84d1 .premium-blog-meta-data,
        .elementor-43 .elementor-element.elementor-element-7ca84d1 .premium-blog-pagination-container>.page-numbers,
        .elementor-43 .elementor-element.elementor-element-fc42155 .premium-blog-meta-data,
        .premium-blog-pagination-container .page-numbers {
            font-size: 1.5em !important
        }

        .sp-pcp-post .sp-pcp-post-thumb-area img {
            width: 100%;
            height: 250px !important;
            object-fit: cover
        }

        .sp-pcp-post .sp-pcp-post-meta ul li .fa {
            display: none
        }

        .sp-pcp-post .sp-pcp-title,
        .sp-pcp-post .sp-pcp-title a {
            font-family: Gilroy;
            font-size: 32px !important;
            font-weight: 700;
            padding: 3%
        }

        .sp-pcp-post .sp-pcp-post-meta li,
        .sp-pcp-post .sp-pcp-post-meta li a,
        .sp-pcp-post .sp-pcp-post-meta ul {
            font-family: Raleway;
            font-size: 20px !important;
            font-weight: 600;
            padding: 0 3%
        }

        #pcp_wrapper-2011 .pcp-readmore-link {
            font-size: 21px;
            padding: 0 5%;
            font-weight: 600;
            font-style: italic;
            float: right;
            text-decoration: underline
        }

        #pcp_wrapper-2011.pcp-carousel-wrapper .sp-pcp-post {
            box-shadow: 0 4px 4px 0 rgba(0, 0, 0, .25)
        }

        #pcp_wrapper-2011 .pcp-button-next,
        #pcp_wrapper-2011 .pcp-button-prev {
            top: 40% !important;
            font-size: 45px;
            padding: 5%
        }

        @media screen and (max-width:370px) and (min-width:300px) {

            #pcp_wrapper-2011 .pcp-button-next,
            #pcp_wrapper-2011 .pcp-button-prev {
                top: 35% !important;
                font-size: 45px;
                padding: 5%
            }
        }

        .pcp-carousel-wrapper .pcp-button-prev.top_right {
            left: 0 !important;
            right: 0 !important
        }

        .pcp-carousel-wrapper .pcp-button-next.top_right {
            right: 0
        }

        @media screen and (max-width:1200px) and (min-width:750px) {
            .sp-pcp-post .sp-pcp-post-thumb-area img {
                width: 100%;
                height: 350px;
                object-fit: cover
            }
        }

        @media screen and (max-width:1300px) and (min-width:350px) {

            .sp-pcp-post .sp-pcp-title,
            .sp-pcp-post .sp-pcp-title a {
                font-size: 24px !important
            }

            .sp-pcp-post .sp-pcp-post-meta li,
            .sp-pcp-post .sp-pcp-post-meta li a,
            .sp-pcp-post .sp-pcp-post-meta ul {
                font-family: Raleway;
                font-size: 18px !important
            }

            #pcp_wrapper-2011 .pcp-readmore-link {
                font-size: 16px
            }
        }

        .sp-pcp-post .sp-pcp-post-content p:last-of-type {
            padding: 0 20px
        }

        .sp-pcp-post .sp-pcp-post-meta {
            margin: 0 20px 9px 10px !important
        }

        #pcp_wrapper-2011 .pcp-readmore-link {
            padding: 0 20px
        }

        .pcp-carousel-wrapper .pcp-button-next.top_right,
        .pcp-carousel-wrapper .pcp-button-prev.top_right {
            top: 40% !important
        }

        .pcp-carousel-wrapper .pcp-button-prev.top_right {
            left: 10px !important
        }

        #pcp_wrapper-2011 .pcp-button-next,
        #pcp_wrapper-2011 .pcp-button-next:hover,
        #pcp_wrapper-2011 .pcp-button-prev,
        #pcp_wrapper-2011 .pcp-button-prev:hover {
            background-color: transparent !important;
            border-color: transparent !important
        }

        #pcp_wrapper-2011 .pcp-button-next .fa,
        #pcp_wrapper-2011 .pcp-button-prev .fa {
            background-color: #10594e;
            border-radius: 10px;
            padding: 5px
        }

        #pcp_wrapper-2011 .pcp-button-next .fa:hover,
        #pcp_wrapper-2011 .pcp-button-prev .fa:hover {
            background-color: #fff;
            border-radius: 10px;
            padding: 5px
        }

        .elementor-12 .elementor-element.elementor-element-4f9821c:not(.elementor-motion-effects-element-type-background),
        .elementor-12 .elementor-element.elementor-element-4f9821c>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: var(--e-global-color-accent)
        }

        .elementor-12 .elementor-element.elementor-element-4f9821c {
            box-shadow: 0 4px 4px 0 rgba(0, 0, 0, .25);
            transition: background .3s, border .3s, border-radius .3s, box-shadow .3s
        }

        .elementor-12 .elementor-element.elementor-element-dbb059f.elementor-column.elementor-element[data-element_type=column]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center
        }

        .elementor-12 .elementor-element.elementor-element-69c2a97 {
            text-align: left
        }

        .elementor-12 .elementor-element.elementor-element-69c2a97 img {
            max-width: 80%
        }

        .elementor-12 .elementor-element.elementor-element-10b9ec1.elementor-column.elementor-element[data-element_type=column]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center
        }

        .elementor-12 .elementor-element.elementor-element-acdbecf .elementor-menu-toggle {
            margin: 0 auto
        }

        .elementor-12 .elementor-element.elementor-element-acdbecf .elementor-nav-menu .elementor-item {
            font-family: Gilroy, Sans-serif;
            font-size: 1em;
            font-weight: 600;
            font-style: normal;
            line-height: 1.1em
        }

        .elementor-12 .elementor-element.elementor-element-acdbecf .elementor-nav-menu--main .elementor-item {
            color: var(--e-global-color-text);
            fill: var(--e-global-color-text)
        }

        .elementor-12 .elementor-element.elementor-element-acdbecf .elementor-nav-menu--main .elementor-item.elementor-item-active,
        .elementor-12 .elementor-element.elementor-element-acdbecf .elementor-nav-menu--main .elementor-item.highlighted,
        .elementor-12 .elementor-element.elementor-element-acdbecf .elementor-nav-menu--main .elementor-item:focus,
        .elementor-12 .elementor-element.elementor-element-acdbecf .elementor-nav-menu--main .elementor-item:hover {
            color: var(--e-global-color-primary);
            fill: var(--e-global-color-primary)
        }

        .elementor-12 .elementor-element.elementor-element-acdbecf .elementor-nav-menu--main .elementor-item.elementor-item-active {
            color: var(--e-global-color-primary)
        }

        .elementor-12 .elementor-element.elementor-element-acdbecf .elementor-menu-toggle,
        .elementor-12 .elementor-element.elementor-element-acdbecf .elementor-nav-menu--dropdown a {
            color: var(--e-global-color-accent)
        }

        .elementor-12 .elementor-element.elementor-element-acdbecf .elementor-nav-menu--dropdown {
            background-color: var(--e-global-color-secondary);
            border-style: solid;
            border-width: 7px 0 0;
            border-color: var(--e-global-color-primary)
        }

        .elementor-12 .elementor-element.elementor-element-acdbecf .elementor-menu-toggle:hover,
        .elementor-12 .elementor-element.elementor-element-acdbecf .elementor-nav-menu--dropdown a.elementor-item-active,
        .elementor-12 .elementor-element.elementor-element-acdbecf .elementor-nav-menu--dropdown a.highlighted,
        .elementor-12 .elementor-element.elementor-element-acdbecf .elementor-nav-menu--dropdown a:hover {
            color: var(--e-global-color-accent)
        }

        .elementor-12 .elementor-element.elementor-element-acdbecf .elementor-nav-menu--dropdown a.elementor-item-active,
        .elementor-12 .elementor-element.elementor-element-acdbecf .elementor-nav-menu--dropdown a.highlighted,
        .elementor-12 .elementor-element.elementor-element-acdbecf .elementor-nav-menu--dropdown a:hover {
            background-color: var(--e-global-color-primary)
        }

        .elementor-12 .elementor-element.elementor-element-acdbecf .elementor-nav-menu--dropdown a.elementor-item-active {
            color: var(--e-global-color-accent);
            background-color: var(--e-global-color-primary)
        }

        .elementor-12 .elementor-element.elementor-element-acdbecf .elementor-nav-menu--dropdown .elementor-item,
        .elementor-12 .elementor-element.elementor-element-acdbecf .elementor-nav-menu--dropdown .elementor-sub-item {
            font-family: var(--e-global-typography-f2f7a8c-font-family), Sans-serif;
            font-size: var(--e-global-typography-f2f7a8c-font-size);
            font-weight: var(--e-global-typography-f2f7a8c-font-weight);
            font-style: var(--e-global-typography-f2f7a8c-font-style)
        }

        .elementor-12 .elementor-element.elementor-element-2885417:not(.elementor-motion-effects-element-type-background),
        .elementor-12 .elementor-element.elementor-element-2885417>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: var(--e-global-color-accent)
        }

        .elementor-12 .elementor-element.elementor-element-2885417 {
            box-shadow: 0 4px 4px 0 rgba(0, 0, 0, .25);
            transition: background .3s, border .3s, border-radius .3s, box-shadow .3s
        }

        .elementor-12 .elementor-element.elementor-element-4e8bc13.elementor-column.elementor-element[data-element_type=column]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center
        }

        .elementor-12 .elementor-element.elementor-element-68608bd.elementor-column.elementor-element[data-element_type=column]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center
        }

        .elementor-12 .elementor-element.elementor-element-09eff15 .elementor-menu-toggle {
            margin: 0 auto;
            background-color: #02010100
        }

        .elementor-12 .elementor-element.elementor-element-09eff15 .elementor-menu-toggle,
        .elementor-12 .elementor-element.elementor-element-09eff15 .elementor-nav-menu--dropdown a {
            color: var(--e-global-color-text)
        }

        .elementor-12 .elementor-element.elementor-element-09eff15 .elementor-nav-menu--dropdown {
            background-color: var(--e-global-color-accent)
        }

        .elementor-12 .elementor-element.elementor-element-09eff15 .elementor-menu-toggle:hover,
        .elementor-12 .elementor-element.elementor-element-09eff15 .elementor-nav-menu--dropdown a.elementor-item-active,
        .elementor-12 .elementor-element.elementor-element-09eff15 .elementor-nav-menu--dropdown a.highlighted,
        .elementor-12 .elementor-element.elementor-element-09eff15 .elementor-nav-menu--dropdown a:hover {
            color: var(--e-global-color-primary)
        }

        .elementor-12 .elementor-element.elementor-element-09eff15 .elementor-nav-menu--dropdown a.elementor-item-active,
        .elementor-12 .elementor-element.elementor-element-09eff15 .elementor-nav-menu--dropdown a.highlighted,
        .elementor-12 .elementor-element.elementor-element-09eff15 .elementor-nav-menu--dropdown a:hover {
            background-color: #fffFFF00
        }

        .elementor-12 .elementor-element.elementor-element-09eff15 .elementor-nav-menu--dropdown a.elementor-item-active {
            color: var(--e-global-color-primary);
            background-color: #02010100
        }

        .elementor-12 .elementor-element.elementor-element-09eff15 .elementor-nav-menu--dropdown .elementor-item,
        .elementor-12 .elementor-element.elementor-element-09eff15 .elementor-nav-menu--dropdown .elementor-sub-item {
            font-family: var(--e-global-typography-f2f7a8c-font-family), Sans-serif;
            font-size: var(--e-global-typography-f2f7a8c-font-size);
            font-weight: var(--e-global-typography-f2f7a8c-font-weight);
            font-style: var(--e-global-typography-f2f7a8c-font-style)
        }

        .elementor-12 .elementor-element.elementor-element-09eff15 .elementor-nav-menu--main .elementor-nav-menu--dropdown,
        .elementor-12 .elementor-element.elementor-element-09eff15 .elementor-nav-menu__container.elementor-nav-menu--dropdown {
            box-shadow: 0 4px 4px 0 rgba(0, 0, 0, .5)
        }

        .elementor-12 .elementor-element.elementor-element-09eff15 div.elementor-menu-toggle {
            color: var(--e-global-color-primary)
        }

        .elementor-12 .elementor-element.elementor-element-09eff15 div.elementor-menu-toggle svg {
            fill: var(--e-global-color-primary)
        }

        @media(min-width:768px) {
            .elementor-12 .elementor-element.elementor-element-4d48039 {
                width: 10%
            }

            .elementor-12 .elementor-element.elementor-element-dbb059f {
                width: 15%
            }

            .elementor-12 .elementor-element.elementor-element-10b9ec1 {
                width: 65%
            }

            .elementor-12 .elementor-element.elementor-element-c4fff95 {
                width: 10%
            }
        }

        @media(max-width:1400px) and (min-width:768px) {
            .elementor-12 .elementor-element.elementor-element-4d48039 {
                width: 10%
            }

            .elementor-12 .elementor-element.elementor-element-dbb059f {
                width: 14%
            }

            .elementor-12 .elementor-element.elementor-element-10b9ec1 {
                width: 80%
            }

            .elementor-12 .elementor-element.elementor-element-c4fff95 {
                width: 3%
            }

            .elementor-12 .elementor-element.elementor-element-4e8bc13 {
                width: 25%
            }

            .elementor-12 .elementor-element.elementor-element-68608bd {
                width: 45%
            }
        }

        @media(max-width:1200px) and (min-width:768px) {
            .elementor-12 .elementor-element.elementor-element-dbb059f {
                width: 10%
            }

            .elementor-12 .elementor-element.elementor-element-10b9ec1 {
                width: 80%
            }

            .elementor-12 .elementor-element.elementor-element-68608bd {
                width: 60%
            }
        }

        @media(max-width:1024px) and (min-width:768px) {
            .elementor-12 .elementor-element.elementor-element-4e8bc13 {
                width: 80%
            }

            .elementor-12 .elementor-element.elementor-element-68608bd {
                width: 20%
            }
        }

        @media(min-width:2400px) {
            .elementor-12 .elementor-element.elementor-element-10b9ec1 {
                width: 75%
            }

            .elementor-12 .elementor-element.elementor-element-acdbecf .elementor-nav-menu .elementor-item {
                font-size: 1.3em;
                line-height: 1.1em
            }

            .elementor-12 .elementor-element.elementor-element-acdbecf .elementor-nav-menu--dropdown .elementor-item,
            .elementor-12 .elementor-element.elementor-element-acdbecf .elementor-nav-menu--dropdown .elementor-sub-item {
                font-size: var(--e-global-typography-f2f7a8c-font-size)
            }

            .elementor-12 .elementor-element.elementor-element-09eff15 .elementor-nav-menu--dropdown .elementor-item,
            .elementor-12 .elementor-element.elementor-element-09eff15 .elementor-nav-menu--dropdown .elementor-sub-item {
                font-size: var(--e-global-typography-f2f7a8c-font-size)
            }
        }

        @media(max-width:1400px) {
            .elementor-12 .elementor-element.elementor-element-acdbecf .elementor-nav-menu .elementor-item {
                font-size: .7em;
                line-height: 1.1em
            }

            .elementor-12 .elementor-element.elementor-element-acdbecf .elementor-nav-menu--dropdown .elementor-item,
            .elementor-12 .elementor-element.elementor-element-acdbecf .elementor-nav-menu--dropdown .elementor-sub-item {
                font-size: var(--e-global-typography-f2f7a8c-font-size)
            }

            .elementor-12 .elementor-element.elementor-element-09eff15 .elementor-nav-menu--dropdown .elementor-item,
            .elementor-12 .elementor-element.elementor-element-09eff15 .elementor-nav-menu--dropdown .elementor-sub-item {
                font-size: var(--e-global-typography-f2f7a8c-font-size)
            }
        }

        @media(max-width:1200px) {
            .elementor-12 .elementor-element.elementor-element-10b9ec1.elementor-column.elementor-element[data-element_type=column]>.elementor-widget-wrap.elementor-element-populated {
                align-content: center;
                align-items: center
            }

            .elementor-12 .elementor-element.elementor-element-acdbecf .elementor-nav-menu .elementor-item {
                font-size: .61em;
                line-height: 1.1em
            }

            .elementor-12 .elementor-element.elementor-element-68608bd.elementor-column.elementor-element[data-element_type=column]>.elementor-widget-wrap.elementor-element-populated {
                align-content: center;
                align-items: center
            }
        }

        @media(max-width:1024px) {
            .elementor-12 .elementor-element.elementor-element-acdbecf .elementor-nav-menu .elementor-item {
                font-size: 1.3em;
                line-height: 1.1em
            }

            .elementor-12 .elementor-element.elementor-element-acdbecf .elementor-nav-menu--dropdown .elementor-item,
            .elementor-12 .elementor-element.elementor-element-acdbecf .elementor-nav-menu--dropdown .elementor-sub-item {
                font-size: var(--e-global-typography-f2f7a8c-font-size)
            }

            .elementor-12 .elementor-element.elementor-element-4e8bc13.elementor-column>.elementor-widget-wrap {
                justify-content: center
            }

            .elementor-12 .elementor-element.elementor-element-cea616f>.elementor-widget-container {
                padding: 0 0 0 20px
            }

            .elementor-12 .elementor-element.elementor-element-cea616f {
                text-align: left
            }

            .elementor-12 .elementor-element.elementor-element-cea616f img {
                width: 70%
            }

            .elementor-12 .elementor-element.elementor-element-09eff15 .elementor-nav-menu--dropdown .elementor-item,
            .elementor-12 .elementor-element.elementor-element-09eff15 .elementor-nav-menu--dropdown .elementor-sub-item {
                font-size: var(--e-global-typography-f2f7a8c-font-size)
            }

            .elementor-12 .elementor-element.elementor-element-09eff15 .elementor-nav-menu--dropdown {
                border-radius: 0 0 30px 30px
            }

            .elementor-12 .elementor-element.elementor-element-09eff15 .elementor-nav-menu--dropdown li:first-child a {
                border-top-left-radius: 0;
                border-top-right-radius: 0
            }

            .elementor-12 .elementor-element.elementor-element-09eff15 .elementor-nav-menu--dropdown li:last-child a {
                border-bottom-right-radius: 30px;
                border-bottom-left-radius: 30px
            }

            .elementor-12 .elementor-element.elementor-element-09eff15 .elementor-nav-menu--dropdown a {
                padding-left: 40px;
                padding-right: 40px;
                padding-top: 20px;
                padding-bottom: 20px
            }

            .elementor-12 .elementor-element.elementor-element-09eff15 {
                --nav-menu-icon-size: 40px
            }
        }

        @media(max-width:767px) {
            .elementor-12 .elementor-element.elementor-element-acdbecf .elementor-nav-menu .elementor-item {
                font-size: 1.3em;
                line-height: 1.1em
            }

            .elementor-12 .elementor-element.elementor-element-acdbecf .elementor-nav-menu--dropdown .elementor-item,
            .elementor-12 .elementor-element.elementor-element-acdbecf .elementor-nav-menu--dropdown .elementor-sub-item {
                font-size: var(--e-global-typography-f2f7a8c-font-size)
            }

            .elementor-12 .elementor-element.elementor-element-4e8bc13 {
                width: 70%
            }

            .elementor-12 .elementor-element.elementor-element-68608bd {
                width: 30%
            }

            .elementor-12 .elementor-element.elementor-element-09eff15 .elementor-nav-menu--dropdown .elementor-item,
            .elementor-12 .elementor-element.elementor-element-09eff15 .elementor-nav-menu--dropdown .elementor-sub-item {
                font-size: var(--e-global-typography-f2f7a8c-font-size)
            }

            .elementor-12 .elementor-element.elementor-element-09eff15 .elementor-nav-menu--dropdown a {
                padding-top: 20px;
                padding-bottom: 20px
            }
        }

        @media screen and (max-width:1500px) and (min-width:1400px) {
            .elementor-12 .elementor-element.elementor-element-10b9ec1 {
                width: 75% !important
            }
        }

        .ectbe-list-wrapper .ectbe-inner-wrapper {
            border-radius: 4px;
            margin-top: 15px;
            overflow: hidden;
            display: var(--e-ectbe-list-layout-flex);
            align-items: var(--e-ectbe-list-layout-align);
            word-break: break-word
        }

        .ectbe-wrapper.ectbe-list-wrapper .ectbe-date-area {
            min-width: var(--e-ectbe-date-area-width);
            color: var(--e-ectbe-date-area-color);
            padding: var(--e-ectbe-date-area-padding);
            display: var(--e-ectbe-date-area-flex);
            flex-direction: var(--e-ectbe-date-area-direction);
            justify-content: var(--e-ectbe-date-area-justify);
            line-height: initial;
            font-weight: 600
        }

        .ectbe-wrapper.ectbe-list-wrapper .ectbe-evt-more-box {
            --e-ectbe-evt-read-more-transform: uppercase;
            min-width: var(--e-ectbe-evt-details-width);
            display: var(--e-ectbe-evt-details-flex);
            align-items: var(--e-ectbe-evt-details-align)
        }

        .ectbe-wrapper.ectbe-list-wrapper.style-2 .ectbe-date-area {
            font-size: 20px
        }

        .ectbe-month-header:after {
            background-color: #d5d5d5;
            content: "";
            display: block;
            flex: auto;
            height: 2px;
            margin-left: 8px
        }

        .ectbe-month-header {
            display: flex;
            align-items: center;
            margin-bottom: 5px;
            margin-top: 5px;
            font-size: 20px;
            font-weight: 600
        }

        .ectbe-month-header.ectbe-featured-event:after {
            background-color: var(--ectbe-featd-evt-color)
        }

        .ectbe-month-header.ectbe-featured-event {
            color: var(--ectbe-featd-evt-color)
        }

        .ectbe-list-wrapper.style-2 .ectbe-content-box .ectbe-date-area {
            display: block;
            padding-left: 0;
            padding-bottom: 0
        }

        .style-2 #ectbe-date .ectbe-ev-mo,
        .style-2 span.ectbe-ev-day {
            text-transform: uppercase;
            font-weight: 600;
            margin: 0;
            font-size: 16px
        }

        .style-2 span.ectbe-ev-day {
            font-size: 24px;
            line-height: 1.42;
            font-weight: 700
        }

        .ectbe-list-wrapper.style-2 .ectbe-content-box {
            --e-ectbe-content-box-padding: 0 30px 0 30px;
            border-left: 0
        }

        .ectbe-list-wrapper.style-2 .ectbe-featured-event .ectbe-content-box {
            border-left: var(--ectbe-cbx-left-bd-width) var(--ectbe-cbx-left-bd-style) var(--ectbe-featd-evt-bg-color)
        }

        .style-2 #ectbe-date {
            padding: 25px;
            --e-ectbe-date-area-width: 100px;
            --e-ectbe-evt-read-more-size: 12px;
            --e-ectbe-date-area-justify: flex-start
        }

        @media screen and (max-width:767px) {
            .ectbe-list-wrapper.style-2 .ectbe-content-box .ectbe-date-area {
                display: flex;
                flex-direction: row;
                text-align: center;
                align-items: center;
                justify-content: flex-start
            }

            .style-2 #ectbe-date {
                padding: 30px;
                padding-bottom: 15px
            }

            .ectbe-list-wrapper.style-2 .ectbe-inner-wrapper .ectbe-content-box {
                --ectbe-cbx-left-bd-width: 0px;
                border-left: var(--ectbe-cbx-left-bd-width)
            }

            .style-2 .ectbe-inner-wrapper.ectbe-featured-event {
                border-radius: 0;
                border-left: var(--ectbe-cbx-left-bd-width) var(--ectbe-cbx-left-bd-style) var(--ectbe-featd-evt-bg-color)
            }
        }

        .ectbe-wrapper {
            --e-ectbe-evt-venue-margin: 3px 0 7px 2px;
            --e-ectbe-evt-title-margin: 3px 0 7px 2px;
            --e-ectbe-minimal-list-layout-flex: flex;
            --ectbe-featd-evt-border-color: #eda264;
            --ectbe-featd-evt-bg-color: #eda264;
            --ectbe-featd-evt-color: #3a2201;
            --e-ectbe-list-layout-scroll: auto;
            --e-ectbe-each-cate-color: #002e3f;
            --e-ectbe-date-area-background: #9cdff3;
            --e-ectbe-date-area-width: 180px;
            --e-ectbe-date-area-text-size: 1em;
            --e-ectbe-week-day-text-size: 0.45em;
            --e-ectbe-date-area-color: #00445e;
            --e-ectbe-evt-title-color: #00445e;
            --e-ectbe-evt-title-size: 18px;
            --e-ectbe-evt-time-size: 14px;
            --e-ectbe-evt-venue-color: #515d64;
            --e-ectbe-evt-venue-size: 14px;
            --e-ectbe-evt-description-color: #515d64;
            --e-ectbe-evt-description-size: 14px;
            --e-ectbe-content-box-background: #f4fcff;
            --e-ectbe-content-box-width: 100%;
            --e-ectbe-content-box-padding: 10px 30px 10px 30px;
            --e-ectbe-evt-details-width: 200px;
            --e-ectbe-evt-read-more-color: #008cff;
            --e-ectbe-evt-read-more-size: 14px;
            --e-ectbe-cate-single-padding: 1px 3px 3px 3px;
            --e-ectbe-cate-single-border-radius: 3px;
            --e-ectbe-each-cate-text-size: 12px;
            --e-ectbe-ev-day-padding: 0px 0px 0px 0px;
            --e-ectbe-ev-day-margin: 0px 0px 0px 0px;
            --e-ectbe-week-day-margin: 5px 0 5px 0;
            --e-ectbe-ev-mo-margin: 5px 0 5px 0;
            --e-ectbe-evt-read-more-padding: 5px 5px 5px 5px;
            --e-ectbe-date-area-justify: center;
            --e-ectbe-date-area-flex: flex;
            --e-ectbe-date-area-direction: column;
            --e-ectbe-date-area-padding: 10px;
            --e-ectbe-evt-details-align: center;
            --e-ectbe-evt-details-justify: center;
            --e-ectbe-evt-details-flex: flex;
            --e-ectbe-evt-img-height: 100%;
            --e-ectbe-evt-img-object-fit: cover;
            --e-ectbe-content-box-flex: flex;
            --e-ectbe-content-box-direction: column;
            --e-ectbe-evt-category-flex: flex;
            --e-ectbe-list-layout-align: stretch;
            --e-ectbe-list-layout-flex: flex;
            --e-ectbe-evt-venue-flex: flex;
            --e-ectbe-date-area-text-align: center;
            --ectbe-cbx-left-bd-width: 3px;
            --ectbe-cbx-left-bd-style: solid;
            --ectbe-cbx-left-bd-color: #00445e;
            --e-ectbe-evt-img-padding: 0px 30px 0px 30px;
            --e-ectbe-list-wrp-padding: 10px 20px 10px 20px;
            padding: var(--e-ectbe-list-wrp-padding)
        }

        .ectbe-content-box {
            width: var(--e-ectbe-content-box-width);
            display: var(--e-ectbe-content-box-flex);
            flex-direction: var(--e-ectbe-content-box-direction);
            padding: var(--e-ectbe-content-box-padding)
        }

        .ectbe-wrapper .ectbe-evt-title .ectbe-evt-url {
            font-size: var(--e-ectbe-evt-title-size);
            color: var(--e-ectbe-evt-title-color);
            font-weight: 700;
            cursor: pointer
        }

        .ectbe-wrapper .ectbe-evt-title {
            margin: var(--e-ectbe-evt-title-margin)
        }

        .ectbe-ev-day,
        .ectbe-ev-mo,
        .ectbe-ev-yr {
            color: var(--e-ectbe-date-area-color)
        }

        .ectbe-wrapper .ectbe-evt-read-more {
            color: var(--e-ectbe-evt-read-more-color);
            font-size: var(--e-ectbe-evt-read-more-size);
            padding: var(--e-ectbe-evt-read-more-padding)
        }

        .ectbe-list-wrapper.style-2 .ectbe-featured-event #ectbe-date span,
        .ectbe-month-header.ectbe-featured-event,
        .ectbe-month-header.ectbe-featured-event:after {
            color: var(--ectbe-featd-evt-color)
        }

        @media screen and (max-width:1200px) {
            .ectbe-list-wrapper .ectbe-inner-wrapper {
                overflow-x: var(--e-ectbe-list-layout-scroll)
            }
        }

        @media screen and (max-width:767px) {
            .ectbe-list-wrapper .ectbe-inner-wrapper {
                display: flex;
                flex-direction: column;
                margin-top: 0;
                margin-bottom: 15px
            }

            .ectbe-list-wrapper.style-2 .ectbe-content-box .ectbe-date-area span {
                margin-right: 5px
            }

            .ectbe-list-wrapper.style-2 .ectbe-content-box .ectbe-date-area {
                flex-wrap: wrap
            }

            .ectbe-content-box {
                order: 3
            }

            .ectbe-evt-img {
                --e-ectbe-evt-img-width: 100%;
                width: var(--e-ectbe-evt-img-width);
                order: 2;
                padding: var(--e-ectbe-evt-img-padding)
            }

            .ectbe-evt-more-box {
                order: 4;
                text-transform: uppercase
            }
        }

        .elementor-5482 .elementor-element.elementor-element-ad0cb3e:not(.elementor-motion-effects-element-type-background),
        .elementor-5482 .elementor-element.elementor-element-ad0cb3e>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: transparent;
            background-image: linear-gradient(180deg, #1f60ad 0%, var(--e-global-color-primary) 100%)
        }

        .elementor-5482 .elementor-element.elementor-element-ad0cb3e {
            border-style: solid;
            border-width: 2px 0 0;
            border-color: var(--e-global-color-primary);
            transition: background .3s, border .3s, border-radius .3s, box-shadow .3s
        }

        .elementor-5482 .elementor-element.elementor-element-28f4dbe8 {
            --spacer-size: 50px
        }

        .elementor-5482 .elementor-element.elementor-element-68a58a3b {
            text-align: left
        }

        .elementor-5482 .elementor-element.elementor-element-68a58a3b img {
            width: 100%;
            max-width: 80%
        }

        .elementor-5482 .elementor-element.elementor-element-782270d8 {
            color: var(--e-global-color-accent);
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-size: var(--e-global-typography-accent-font-size);
            font-weight: var(--e-global-typography-accent-font-weight);
            line-height: var(--e-global-typography-accent-line-height)
        }

        .elementor-5482 .elementor-element.elementor-element-6a4710ae .elementor-repeater-item-eec9c4e.elementor-social-icon {
            background-color: var(--e-global-color-4558145)
        }

        .elementor-5482 .elementor-element.elementor-element-6a4710ae .elementor-repeater-item-eec9c4e.elementor-social-icon i {
            color: var(--e-global-color-accent)
        }

        .elementor-5482 .elementor-element.elementor-element-6a4710ae .elementor-repeater-item-eec9c4e.elementor-social-icon svg {
            fill: var(--e-global-color-accent)
        }

        .elementor-5482 .elementor-element.elementor-element-6a4710ae .elementor-repeater-item-ebdef61.elementor-social-icon {
            background-color: var(--e-global-color-4558145)
        }

        .elementor-5482 .elementor-element.elementor-element-6a4710ae .elementor-repeater-item-ebdef61.elementor-social-icon i {
            color: var(--e-global-color-accent)
        }

        .elementor-5482 .elementor-element.elementor-element-6a4710ae .elementor-repeater-item-ebdef61.elementor-social-icon svg {
            fill: var(--e-global-color-accent)
        }

        .elementor-5482 .elementor-element.elementor-element-6a4710ae .elementor-repeater-item-244bd2b.elementor-social-icon {
            background-color: var(--e-global-color-4558145)
        }

        .elementor-5482 .elementor-element.elementor-element-6a4710ae .elementor-repeater-item-244bd2b.elementor-social-icon i {
            color: var(--e-global-color-accent)
        }

        .elementor-5482 .elementor-element.elementor-element-6a4710ae .elementor-repeater-item-244bd2b.elementor-social-icon svg {
            fill: var(--e-global-color-accent)
        }

        .elementor-5482 .elementor-element.elementor-element-6a4710ae .elementor-repeater-item-4acf570.elementor-social-icon {
            background-color: var(--e-global-color-4558145)
        }

        .elementor-5482 .elementor-element.elementor-element-6a4710ae .elementor-repeater-item-4acf570.elementor-social-icon i {
            color: var(--e-global-color-accent)
        }

        .elementor-5482 .elementor-element.elementor-element-6a4710ae .elementor-repeater-item-4acf570.elementor-social-icon svg {
            fill: var(--e-global-color-accent)
        }

        .elementor-5482 .elementor-element.elementor-element-6a4710ae {
            --grid-template-columns: repeat(4, auto);
            --icon-size: 30px;
            --grid-column-gap: 5px;
            --grid-row-gap: 0px
        }

        .elementor-5482 .elementor-element.elementor-element-6a4710ae .elementor-widget-container {
            text-align: left
        }

        .elementor-5482 .elementor-element.elementor-element-1d1fa84 {
            --spacer-size: 50px
        }

        .elementor-5482 .elementor-element.elementor-element-fc35115 {
            --spacer-size: 50px
        }

        .elementor-5482 .elementor-element.elementor-element-74374e2a {
            text-align: left
        }

        .elementor-5482 .elementor-element.elementor-element-74374e2a .elementor-heading-title {
            color: var(--e-global-color-accent);
            font-family: var(--e-global-typography-6063358-font-family), Sans-serif;
            font-size: var(--e-global-typography-6063358-font-size);
            font-weight: var(--e-global-typography-6063358-font-weight);
            line-height: var(--e-global-typography-6063358-line-height)
        }

        .elementor-5482 .elementor-element.elementor-element-1ec2cd94 {
            width: var(--container-widget-width, 106.327%);
            max-width: 106.327%;
            --container-widget-width: 106.327%;
            --container-widget-flex-grow: 0;
            color: var(--e-global-color-accent);
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-size: var(--e-global-typography-accent-font-size);
            font-weight: var(--e-global-typography-accent-font-weight);
            line-height: var(--e-global-typography-accent-line-height)
        }

        .elementor-5482 .elementor-element.elementor-element-1b9141ca {
            --spacer-size: 50px
        }

        .elementor-5482 .elementor-element.elementor-element-bb3ee1d {
            text-align: left
        }

        .elementor-5482 .elementor-element.elementor-element-bb3ee1d .elementor-heading-title {
            color: var(--e-global-color-accent);
            font-family: var(--e-global-typography-9ac8bb4-font-family), Sans-serif;
            font-size: var(--e-global-typography-9ac8bb4-font-size);
            font-weight: var(--e-global-typography-9ac8bb4-font-weight);
            line-height: var(--e-global-typography-9ac8bb4-line-height)
        }

        .elementor-5482 .elementor-element.elementor-element-18f09ab9 {
            width: var(--container-widget-width, 106.327%);
            max-width: 106.327%;
            --container-widget-width: 106.327%;
            --container-widget-flex-grow: 0;
            color: var(--e-global-color-accent);
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-size: var(--e-global-typography-accent-font-size);
            font-weight: var(--e-global-typography-accent-font-weight);
            line-height: var(--e-global-typography-accent-line-height)
        }

        .elementor-5482 .elementor-element.elementor-element-54f4b4cb {
            --spacer-size: 50px
        }

        .elementor-5482 .elementor-element.elementor-element-62521ee5 {
            text-align: left
        }

        .elementor-5482 .elementor-element.elementor-element-62521ee5 .elementor-heading-title {
            color: var(--e-global-color-accent);
            font-family: var(--e-global-typography-6063358-font-family), Sans-serif;
            font-size: var(--e-global-typography-6063358-font-size);
            font-weight: var(--e-global-typography-6063358-font-weight);
            line-height: var(--e-global-typography-6063358-line-height)
        }

        .elementor-5482 .elementor-element.elementor-element-6d9c44db {
            width: var(--container-widget-width, 106.327%);
            max-width: 106.327%;
            --container-widget-width: 106.327%;
            --container-widget-flex-grow: 0;
            color: var(--e-global-color-accent);
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-size: var(--e-global-typography-accent-font-size);
            font-weight: var(--e-global-typography-accent-font-weight);
            line-height: var(--e-global-typography-accent-line-height)
        }

        .elementor-5482 .elementor-element.elementor-element-78e6727e {
            --spacer-size: 50px
        }

        .elementor-5482 .elementor-element.elementor-element-70a6f609 {
            text-align: left
        }

        .elementor-5482 .elementor-element.elementor-element-70a6f609 .elementor-heading-title {
            color: var(--e-global-color-accent);
            font-family: var(--e-global-typography-6063358-font-family), Sans-serif;
            font-size: var(--e-global-typography-6063358-font-size);
            font-weight: var(--e-global-typography-6063358-font-weight);
            line-height: var(--e-global-typography-6063358-line-height)
        }

        .elementor-5482 .elementor-element.elementor-element-35af8f81 {
            width: var(--container-widget-width, 106.327%);
            max-width: 106.327%;
            --container-widget-width: 106.327%;
            --container-widget-flex-grow: 0;
            color: var(--e-global-color-accent);
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-size: var(--e-global-typography-accent-font-size);
            font-weight: var(--e-global-typography-accent-font-weight);
            line-height: var(--e-global-typography-accent-line-height)
        }

        .elementor-5482 .elementor-element.elementor-element-1ab9339c .elementor-heading-title {
            color: var(--e-global-color-accent);
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-size: var(--e-global-typography-accent-font-size);
            font-weight: var(--e-global-typography-accent-font-weight);
            line-height: var(--e-global-typography-accent-line-height)
        }

        .elementor-5482 .elementor-element.elementor-element-64f3e363:not(.elementor-motion-effects-element-type-background),
        .elementor-5482 .elementor-element.elementor-element-64f3e363>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: var(--e-global-color-secondary)
        }

        .elementor-5482 .elementor-element.elementor-element-64f3e363 {
            transition: background .3s, border .3s, border-radius .3s, box-shadow .3s
        }

        .elementor-5482 .elementor-element.elementor-element-6b664d68.elementor-column.elementor-element[data-element_type=column]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center
        }

        .elementor-5482 .elementor-element.elementor-element-6b664d68.elementor-column>.elementor-widget-wrap {
            justify-content: center
        }

        .elementor-5482 .elementor-element.elementor-element-355dc4d2 {
            color: var(--e-global-color-primary);
            font-family: Raleway, Sans-serif;
            font-size: 1.1em;
            font-weight: 500;
            text-decoration: underline;
            line-height: 1.7em
        }

        .elementor-5482 .elementor-element.elementor-element-697c447d.elementor-column.elementor-element[data-element_type=column]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center
        }

        .elementor-5482 .elementor-element.elementor-element-2ad8eab9 {
            text-align: right;
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-size: var(--e-global-typography-accent-font-size);
            font-weight: var(--e-global-typography-accent-font-weight);
            line-height: var(--e-global-typography-accent-line-height)
        }

        .elementor-5482 .elementor-element.elementor-element-1b017a00:not(.elementor-motion-effects-element-type-background),
        .elementor-5482 .elementor-element.elementor-element-1b017a00>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: transparent;
            background-image: linear-gradient(180deg, #1f60ad 0%, var(--e-global-color-primary) 100%)
        }

        .elementor-5482 .elementor-element.elementor-element-1b017a00 {
            transition: background .3s, border .3s, border-radius .3s, box-shadow .3s
        }

        .elementor-5482 .elementor-element.elementor-element-6f09db27 {
            --spacer-size: 50px
        }

        .elementor-5482 .elementor-element.elementor-element-32755011 {
            text-align: left
        }

        .elementor-5482 .elementor-element.elementor-element-45969579 {
            color: var(--e-global-color-accent);
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-size: var(--e-global-typography-accent-font-size);
            font-weight: var(--e-global-typography-accent-font-weight);
            line-height: var(--e-global-typography-accent-line-height)
        }

        .elementor-5482 .elementor-element.elementor-element-5ce36426 .elementor-repeater-item-eec9c4e.elementor-social-icon {
            background-color: var(--e-global-color-4558145)
        }

        .elementor-5482 .elementor-element.elementor-element-5ce36426 .elementor-repeater-item-eec9c4e.elementor-social-icon i {
            color: var(--e-global-color-accent)
        }

        .elementor-5482 .elementor-element.elementor-element-5ce36426 .elementor-repeater-item-eec9c4e.elementor-social-icon svg {
            fill: var(--e-global-color-accent)
        }

        .elementor-5482 .elementor-element.elementor-element-5ce36426 .elementor-repeater-item-ebdef61.elementor-social-icon {
            background-color: var(--e-global-color-4558145)
        }

        .elementor-5482 .elementor-element.elementor-element-5ce36426 .elementor-repeater-item-ebdef61.elementor-social-icon i {
            color: var(--e-global-color-accent)
        }

        .elementor-5482 .elementor-element.elementor-element-5ce36426 .elementor-repeater-item-ebdef61.elementor-social-icon svg {
            fill: var(--e-global-color-accent)
        }

        .elementor-5482 .elementor-element.elementor-element-5ce36426 .elementor-repeater-item-244bd2b.elementor-social-icon {
            background-color: var(--e-global-color-4558145)
        }

        .elementor-5482 .elementor-element.elementor-element-5ce36426 .elementor-repeater-item-244bd2b.elementor-social-icon i {
            color: var(--e-global-color-accent)
        }

        .elementor-5482 .elementor-element.elementor-element-5ce36426 .elementor-repeater-item-244bd2b.elementor-social-icon svg {
            fill: var(--e-global-color-accent)
        }

        .elementor-5482 .elementor-element.elementor-element-5ce36426 .elementor-repeater-item-4acf570.elementor-social-icon {
            background-color: var(--e-global-color-4558145)
        }

        .elementor-5482 .elementor-element.elementor-element-5ce36426 .elementor-repeater-item-4acf570.elementor-social-icon i {
            color: var(--e-global-color-accent)
        }

        .elementor-5482 .elementor-element.elementor-element-5ce36426 .elementor-repeater-item-4acf570.elementor-social-icon svg {
            fill: var(--e-global-color-accent)
        }

        .elementor-5482 .elementor-element.elementor-element-5ce36426 {
            --grid-template-columns: repeat(0, auto);
            --icon-size: 30px;
            --grid-column-gap: 5px;
            --grid-row-gap: 0px
        }

        .elementor-5482 .elementor-element.elementor-element-5ce36426 .elementor-widget-container {
            text-align: left
        }

        .elementor-5482 .elementor-element.elementor-element-56a491f3:not(.elementor-motion-effects-element-type-background),
        .elementor-5482 .elementor-element.elementor-element-56a491f3>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: var(--e-global-color-primary)
        }

        .elementor-5482 .elementor-element.elementor-element-56a491f3 {
            border-style: solid;
            border-color: var(--e-global-color-primary);
            transition: background .3s, border .3s, border-radius .3s, box-shadow .3s
        }

        .elementor-5482 .elementor-element.elementor-element-25ea70c0 {
            --spacer-size: 50px
        }

        .elementor-5482 .elementor-element.elementor-element-7b1aca5d {
            text-align: left
        }

        .elementor-5482 .elementor-element.elementor-element-7b1aca5d .elementor-heading-title {
            color: var(--e-global-color-accent);
            font-family: var(--e-global-typography-6063358-font-family), Sans-serif;
            font-size: var(--e-global-typography-6063358-font-size);
            font-weight: var(--e-global-typography-6063358-font-weight);
            line-height: var(--e-global-typography-6063358-line-height)
        }

        .elementor-5482 .elementor-element.elementor-element-1536bd6a {
            width: var(--container-widget-width, 106.327%);
            max-width: 106.327%;
            --container-widget-width: 106.327%;
            --container-widget-flex-grow: 0;
            color: var(--e-global-color-accent);
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-size: var(--e-global-typography-accent-font-size);
            font-weight: var(--e-global-typography-accent-font-weight);
            line-height: var(--e-global-typography-accent-line-height)
        }

        .elementor-5482 .elementor-element.elementor-element-4c341ee9 {
            --spacer-size: 50px
        }

        .elementor-5482 .elementor-element.elementor-element-5c45a3af {
            --spacer-size: 50px
        }

        .elementor-5482 .elementor-element.elementor-element-505502a2 {
            text-align: left
        }

        .elementor-5482 .elementor-element.elementor-element-505502a2 .elementor-heading-title {
            color: var(--e-global-color-accent);
            font-family: var(--e-global-typography-9ac8bb4-font-family), Sans-serif;
            font-size: var(--e-global-typography-9ac8bb4-font-size);
            font-weight: var(--e-global-typography-9ac8bb4-font-weight);
            line-height: var(--e-global-typography-9ac8bb4-line-height)
        }

        .elementor-5482 .elementor-element.elementor-element-7b3eccdf {
            width: var(--container-widget-width, 106.327%);
            max-width: 106.327%;
            --container-widget-width: 106.327%;
            --container-widget-flex-grow: 0;
            color: var(--e-global-color-accent);
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-size: var(--e-global-typography-accent-font-size);
            font-weight: var(--e-global-typography-accent-font-weight);
            line-height: var(--e-global-typography-accent-line-height)
        }

        .elementor-5482 .elementor-element.elementor-element-3c00c15d:not(.elementor-motion-effects-element-type-background),
        .elementor-5482 .elementor-element.elementor-element-3c00c15d>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: var(--e-global-color-primary)
        }

        .elementor-5482 .elementor-element.elementor-element-3c00c15d {
            border-style: solid;
            border-color: var(--e-global-color-primary);
            transition: background .3s, border .3s, border-radius .3s, box-shadow .3s
        }

        .elementor-5482 .elementor-element.elementor-element-5a20cce6 {
            text-align: left
        }

        .elementor-5482 .elementor-element.elementor-element-5a20cce6 .elementor-heading-title {
            color: var(--e-global-color-accent);
            font-family: var(--e-global-typography-6063358-font-family), Sans-serif;
            font-size: var(--e-global-typography-6063358-font-size);
            font-weight: var(--e-global-typography-6063358-font-weight);
            line-height: var(--e-global-typography-6063358-line-height)
        }

        .elementor-5482 .elementor-element.elementor-element-ab88136 {
            width: var(--container-widget-width, 106.327%);
            max-width: 106.327%;
            --container-widget-width: 106.327%;
            --container-widget-flex-grow: 0;
            color: var(--e-global-color-accent);
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-size: var(--e-global-typography-accent-font-size);
            font-weight: var(--e-global-typography-accent-font-weight);
            line-height: var(--e-global-typography-accent-line-height)
        }

        .elementor-5482 .elementor-element.elementor-element-275266bb {
            --spacer-size: 50px
        }

        .elementor-5482 .elementor-element.elementor-element-56b668b3 {
            text-align: left
        }

        .elementor-5482 .elementor-element.elementor-element-56b668b3 .elementor-heading-title {
            color: var(--e-global-color-accent);
            font-family: var(--e-global-typography-6063358-font-family), Sans-serif;
            font-size: var(--e-global-typography-6063358-font-size);
            font-weight: var(--e-global-typography-6063358-font-weight);
            line-height: var(--e-global-typography-6063358-line-height)
        }

        .elementor-5482 .elementor-element.elementor-element-14a1a77f {
            width: var(--container-widget-width, 106.327%);
            max-width: 106.327%;
            --container-widget-width: 106.327%;
            --container-widget-flex-grow: 0;
            color: var(--e-global-color-accent);
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-size: var(--e-global-typography-accent-font-size);
            font-weight: var(--e-global-typography-accent-font-weight);
            line-height: var(--e-global-typography-accent-line-height)
        }

        .elementor-5482 .elementor-element.elementor-element-7f9b773e .elementor-heading-title {
            color: var(--e-global-color-accent);
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-size: var(--e-global-typography-accent-font-size);
            font-weight: var(--e-global-typography-accent-font-weight);
            line-height: var(--e-global-typography-accent-line-height)
        }

        .elementor-5482 .elementor-element.elementor-element-1a78f33a:not(.elementor-motion-effects-element-type-background),
        .elementor-5482 .elementor-element.elementor-element-1a78f33a>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: var(--e-global-color-secondary)
        }

        .elementor-5482 .elementor-element.elementor-element-1a78f33a {
            transition: background .3s, border .3s, border-radius .3s, box-shadow .3s
        }

        .elementor-5482 .elementor-element.elementor-element-702601a4.elementor-column.elementor-element[data-element_type=column]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center
        }

        .elementor-5482 .elementor-element.elementor-element-702601a4.elementor-column>.elementor-widget-wrap {
            justify-content: center
        }

        .elementor-5482 .elementor-element.elementor-element-2d73f844 {
            color: var(--e-global-color-primary);
            font-family: Raleway, Sans-serif;
            font-size: 1.1em;
            font-weight: 500;
            text-decoration: underline;
            line-height: 1.7em
        }

        .elementor-5482 .elementor-element.elementor-element-dfddbb9 {
            text-align: right;
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-size: var(--e-global-typography-accent-font-size);
            font-weight: var(--e-global-typography-accent-font-weight);
            line-height: var(--e-global-typography-accent-line-height)
        }

        .elementor-location-footer:before,
        .elementor-location-header:before {
            content: "";
            display: table;
            clear: both
        }

        @media(max-width:1400px) and (min-width:768px) {
            .elementor-5482 .elementor-element.elementor-element-76c07106 {
                width: 8%
            }

            .elementor-5482 .elementor-element.elementor-element-697c447d {
                width: 43%
            }
        }

        @media(max-width:1400px) {
            .elementor-5482 .elementor-element.elementor-element-782270d8 {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-74374e2a .elementor-heading-title {
                font-size: var(--e-global-typography-6063358-font-size);
                line-height: var(--e-global-typography-6063358-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-1ec2cd94 {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-bb3ee1d .elementor-heading-title {
                font-size: var(--e-global-typography-9ac8bb4-font-size);
                line-height: var(--e-global-typography-9ac8bb4-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-18f09ab9 {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-62521ee5 .elementor-heading-title {
                font-size: var(--e-global-typography-6063358-font-size);
                line-height: var(--e-global-typography-6063358-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-6d9c44db {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-70a6f609 .elementor-heading-title {
                font-size: var(--e-global-typography-6063358-font-size);
                line-height: var(--e-global-typography-6063358-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-35af8f81 {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-1ab9339c .elementor-heading-title {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-2ad8eab9 {
                text-align: right;
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-45969579 {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-7b1aca5d .elementor-heading-title {
                font-size: var(--e-global-typography-6063358-font-size);
                line-height: var(--e-global-typography-6063358-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-1536bd6a {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-505502a2 .elementor-heading-title {
                font-size: var(--e-global-typography-9ac8bb4-font-size);
                line-height: var(--e-global-typography-9ac8bb4-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-7b3eccdf {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-5a20cce6 .elementor-heading-title {
                font-size: var(--e-global-typography-6063358-font-size);
                line-height: var(--e-global-typography-6063358-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-ab88136 {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-56b668b3 .elementor-heading-title {
                font-size: var(--e-global-typography-6063358-font-size);
                line-height: var(--e-global-typography-6063358-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-14a1a77f {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-7f9b773e .elementor-heading-title {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-2d73f844 {
                font-size: 1.1em;
                line-height: 1.7em
            }

            .elementor-5482 .elementor-element.elementor-element-dfddbb9 {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }
        }

        @media(max-width:1200px) {
            .elementor-5482 .elementor-element.elementor-element-355dc4d2 {
                font-size: 21px;
                line-height: 35px
            }

            .elementor-5482 .elementor-element.elementor-element-32755011 img {
                width: 40%;
                max-width: 40%
            }

            .elementor-5482 .elementor-element.elementor-element-5ce36426 .elementor-widget-container {
                text-align: left
            }

            .elementor-5482 .elementor-element.elementor-element-5ce36426 {
                --icon-size: 40px;
                --grid-column-gap: 40px
            }

            .elementor-5482 .elementor-element.elementor-element-2d73f844 {
                text-align: center;
                font-size: 1.1em;
                line-height: 1.7em
            }

            .elementor-5482 .elementor-element.elementor-element-dfddbb9 {
                text-align: center
            }
        }

        @media(max-width:1024px) {
            .elementor-5482 .elementor-element.elementor-element-782270d8 {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-74374e2a .elementor-heading-title {
                font-size: var(--e-global-typography-6063358-font-size);
                line-height: var(--e-global-typography-6063358-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-1ec2cd94 {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-bb3ee1d .elementor-heading-title {
                font-size: var(--e-global-typography-9ac8bb4-font-size);
                line-height: var(--e-global-typography-9ac8bb4-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-18f09ab9 {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-62521ee5 .elementor-heading-title {
                font-size: var(--e-global-typography-6063358-font-size);
                line-height: var(--e-global-typography-6063358-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-6d9c44db {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-70a6f609 .elementor-heading-title {
                font-size: var(--e-global-typography-6063358-font-size);
                line-height: var(--e-global-typography-6063358-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-35af8f81 {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-1ab9339c .elementor-heading-title {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-2ad8eab9 {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-32755011 img {
                width: 40%;
                max-width: 40%
            }

            .elementor-5482 .elementor-element.elementor-element-45969579 {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-5ce36426 {
                --grid-template-columns: repeat(4, auto);
                --icon-size: 40px;
                --grid-column-gap: 40px;
                --grid-row-gap: 0px
            }

            .elementor-5482 .elementor-element.elementor-element-5ce36426 .elementor-widget-container {
                text-align: left
            }

            .elementor-5482 .elementor-element.elementor-element-7b1aca5d .elementor-heading-title {
                font-size: var(--e-global-typography-6063358-font-size);
                line-height: var(--e-global-typography-6063358-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-1536bd6a {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-4c341ee9 {
                --spacer-size: 50px
            }

            .elementor-5482 .elementor-element.elementor-element-505502a2 .elementor-heading-title {
                font-size: var(--e-global-typography-9ac8bb4-font-size);
                line-height: var(--e-global-typography-9ac8bb4-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-7b3eccdf {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-5a20cce6 .elementor-heading-title {
                font-size: var(--e-global-typography-6063358-font-size);
                line-height: var(--e-global-typography-6063358-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-ab88136 {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-56b668b3 .elementor-heading-title {
                font-size: var(--e-global-typography-6063358-font-size);
                line-height: var(--e-global-typography-6063358-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-14a1a77f {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-7f9b773e .elementor-heading-title {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-2d73f844 {
                text-align: center;
                font-size: 1.1em;
                line-height: 1.7em
            }

            .elementor-5482 .elementor-element.elementor-element-dfddbb9 {
                text-align: center;
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }
        }

        @media(max-width:767px) {
            .elementor-5482 .elementor-element.elementor-element-782270d8 {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-74374e2a .elementor-heading-title {
                font-size: var(--e-global-typography-6063358-font-size);
                line-height: var(--e-global-typography-6063358-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-1ec2cd94>.elementor-widget-container {
                padding: 0 0 0 5%
            }

            .elementor-5482 .elementor-element.elementor-element-1ec2cd94 {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-bb3ee1d .elementor-heading-title {
                font-size: var(--e-global-typography-9ac8bb4-font-size);
                line-height: var(--e-global-typography-9ac8bb4-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-18f09ab9>.elementor-widget-container {
                padding: 0 0 0 5%
            }

            .elementor-5482 .elementor-element.elementor-element-18f09ab9 {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-62521ee5 .elementor-heading-title {
                font-size: var(--e-global-typography-6063358-font-size);
                line-height: var(--e-global-typography-6063358-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-6d9c44db>.elementor-widget-container {
                padding: 0 0 0 5%
            }

            .elementor-5482 .elementor-element.elementor-element-6d9c44db {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-70a6f609 .elementor-heading-title {
                font-size: var(--e-global-typography-6063358-font-size);
                line-height: var(--e-global-typography-6063358-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-35af8f81>.elementor-widget-container {
                padding: 0 0 0 5%
            }

            .elementor-5482 .elementor-element.elementor-element-35af8f81 {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-1ab9339c .elementor-heading-title {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-2ad8eab9 {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-32755011>.elementor-widget-container {
                padding: 0 5%
            }

            .elementor-5482 .elementor-element.elementor-element-32755011 img {
                width: 75%;
                max-width: 75%
            }

            .elementor-5482 .elementor-element.elementor-element-45969579>.elementor-widget-container {
                padding: 0 5%
            }

            .elementor-5482 .elementor-element.elementor-element-45969579 {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-5ce36426 {
                --icon-size: 1.3rem;
                --grid-column-gap: 25px
            }

            .elementor-5482 .elementor-element.elementor-element-56a491f3 {
                border-width: 2px 0 0;
                margin-top: -2px;
                margin-bottom: 0
            }

            .elementor-5482 .elementor-element.elementor-element-38c057ab {
                width: 52%
            }

            .elementor-5482 .elementor-element.elementor-element-7b1aca5d>.elementor-widget-container {
                padding: 0 0 0 10%
            }

            .elementor-5482 .elementor-element.elementor-element-7b1aca5d .elementor-heading-title {
                font-size: var(--e-global-typography-6063358-font-size);
                line-height: var(--e-global-typography-6063358-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-1536bd6a>.elementor-widget-container {
                padding: 0 0 0 10%
            }

            .elementor-5482 .elementor-element.elementor-element-1536bd6a {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-4b950daf {
                width: 48%
            }

            .elementor-5482 .elementor-element.elementor-element-505502a2>.elementor-widget-container {
                padding: 0 0 0 10%
            }

            .elementor-5482 .elementor-element.elementor-element-505502a2 .elementor-heading-title {
                font-size: var(--e-global-typography-9ac8bb4-font-size);
                line-height: var(--e-global-typography-9ac8bb4-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-7b3eccdf>.elementor-widget-container {
                padding: 0 0 0 10%
            }

            .elementor-5482 .elementor-element.elementor-element-7b3eccdf {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-3c00c15d {
                border-width: 2px 0 0;
                margin-top: -2px;
                margin-bottom: 0
            }

            .elementor-5482 .elementor-element.elementor-element-45df72c2 {
                width: 52%
            }

            .elementor-5482 .elementor-element.elementor-element-5a20cce6>.elementor-widget-container {
                padding: 0 0 0 10%
            }

            .elementor-5482 .elementor-element.elementor-element-5a20cce6 .elementor-heading-title {
                font-size: var(--e-global-typography-6063358-font-size);
                line-height: var(--e-global-typography-6063358-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-ab88136>.elementor-widget-container {
                padding: 0 0 0 10%
            }

            .elementor-5482 .elementor-element.elementor-element-ab88136 {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-7f3bdb4b {
                width: 48%
            }

            .elementor-5482 .elementor-element.elementor-element-56b668b3>.elementor-widget-container {
                padding: 0 0 0 10%
            }

            .elementor-5482 .elementor-element.elementor-element-56b668b3 .elementor-heading-title {
                font-size: var(--e-global-typography-6063358-font-size);
                line-height: var(--e-global-typography-6063358-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-14a1a77f>.elementor-widget-container {
                padding: 0 0 0 10%
            }

            .elementor-5482 .elementor-element.elementor-element-14a1a77f {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-7f9b773e>.elementor-widget-container {
                padding: 0 0 0 10%
            }

            .elementor-5482 .elementor-element.elementor-element-7f9b773e .elementor-heading-title {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-2d73f844 {
                font-size: 1.1em;
                line-height: 1.7em
            }

            .elementor-5482 .elementor-element.elementor-element-dfddbb9 {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }
        }

        @media(min-width:768px) {
            .elementor-5482 .elementor-element.elementor-element-436224bc {
                width: 10%
            }

            .elementor-5482 .elementor-element.elementor-element-76b7ebdb {
                width: 28.14%
            }

            .elementor-5482 .elementor-element.elementor-element-59de423e {
                width: 5%
            }

            .elementor-5482 .elementor-element.elementor-element-10bff3ad {
                width: 10%
            }

            .elementor-5482 .elementor-element.elementor-element-126940b9 {
                width: 12%
            }

            .elementor-5482 .elementor-element.elementor-element-36e53be3 {
                width: 13%
            }

            .elementor-5482 .elementor-element.elementor-element-2b31275f {
                width: 10.097%
            }

            .elementor-5482 .elementor-element.elementor-element-677fd1ff {
                width: 10%
            }

            .elementor-5482 .elementor-element.elementor-element-2cc08c65 {
                width: 10%
            }

            .elementor-5482 .elementor-element.elementor-element-6b664d68 {
                width: 29.999%
            }

            .elementor-5482 .elementor-element.elementor-element-76c07106 {
                width: 7.209%
            }

            .elementor-5482 .elementor-element.elementor-element-697c447d {
                width: 42.79%
            }

            .elementor-5482 .elementor-element.elementor-element-1ff68e37 {
                width: 10%
            }
        }

        @media(max-width:1200px) and (min-width:768px) {
            .elementor-5482 .elementor-element.elementor-element-1bba003f {
                width: 10%
            }

            .elementor-5482 .elementor-element.elementor-element-21f447b6 {
                width: 80%
            }

            .elementor-5482 .elementor-element.elementor-element-532356df {
                width: 10%
            }

            .elementor-5482 .elementor-element.elementor-element-6888dd22 {
                width: 10%
            }

            .elementor-5482 .elementor-element.elementor-element-38c057ab {
                width: 40%
            }

            .elementor-5482 .elementor-element.elementor-element-4b950daf {
                width: 40%
            }

            .elementor-5482 .elementor-element.elementor-element-4eabb42e {
                width: 10%
            }

            .elementor-5482 .elementor-element.elementor-element-42c3503e {
                width: 10%
            }

            .elementor-5482 .elementor-element.elementor-element-45df72c2 {
                width: 40%
            }

            .elementor-5482 .elementor-element.elementor-element-7f3bdb4b {
                width: 40%
            }

            .elementor-5482 .elementor-element.elementor-element-672d04c8 {
                width: 10%
            }

            .elementor-5482 .elementor-element.elementor-element-701d9c21 {
                width: 10%
            }

            .elementor-5482 .elementor-element.elementor-element-702601a4 {
                width: 80%
            }

            .elementor-5482 .elementor-element.elementor-element-6a228f9c {
                width: 10%
            }
        }

        @media(max-width:1024px) and (min-width:768px) {
            .elementor-5482 .elementor-element.elementor-element-1bba003f {
                width: 10%
            }

            .elementor-5482 .elementor-element.elementor-element-21f447b6 {
                width: 80%
            }

            .elementor-5482 .elementor-element.elementor-element-532356df {
                width: 10%
            }

            .elementor-5482 .elementor-element.elementor-element-6888dd22 {
                width: 10%
            }

            .elementor-5482 .elementor-element.elementor-element-38c057ab {
                width: 40%
            }

            .elementor-5482 .elementor-element.elementor-element-4b950daf {
                width: 40%
            }

            .elementor-5482 .elementor-element.elementor-element-4eabb42e {
                width: 10%
            }

            .elementor-5482 .elementor-element.elementor-element-42c3503e {
                width: 10%
            }

            .elementor-5482 .elementor-element.elementor-element-45df72c2 {
                width: 40%
            }

            .elementor-5482 .elementor-element.elementor-element-7f3bdb4b {
                width: 40%
            }

            .elementor-5482 .elementor-element.elementor-element-672d04c8 {
                width: 10%
            }

            .elementor-5482 .elementor-element.elementor-element-701d9c21 {
                width: 10%
            }

            .elementor-5482 .elementor-element.elementor-element-702601a4 {
                width: 80%
            }

            .elementor-5482 .elementor-element.elementor-element-6a228f9c {
                width: 10%
            }
        }

        @media(min-width:2400px) {
            .elementor-5482 .elementor-element.elementor-element-782270d8 {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-74374e2a .elementor-heading-title {
                font-size: var(--e-global-typography-6063358-font-size);
                line-height: var(--e-global-typography-6063358-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-1ec2cd94 {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-bb3ee1d .elementor-heading-title {
                font-size: var(--e-global-typography-9ac8bb4-font-size);
                line-height: var(--e-global-typography-9ac8bb4-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-18f09ab9 {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-62521ee5 .elementor-heading-title {
                font-size: var(--e-global-typography-6063358-font-size);
                line-height: var(--e-global-typography-6063358-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-6d9c44db {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-70a6f609 .elementor-heading-title {
                font-size: var(--e-global-typography-6063358-font-size);
                line-height: var(--e-global-typography-6063358-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-35af8f81 {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-1ab9339c .elementor-heading-title {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-2ad8eab9 {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-45969579 {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-7b1aca5d .elementor-heading-title {
                font-size: var(--e-global-typography-6063358-font-size);
                line-height: var(--e-global-typography-6063358-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-1536bd6a {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-505502a2 .elementor-heading-title {
                font-size: var(--e-global-typography-9ac8bb4-font-size);
                line-height: var(--e-global-typography-9ac8bb4-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-7b3eccdf {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-5a20cce6 .elementor-heading-title {
                font-size: var(--e-global-typography-6063358-font-size);
                line-height: var(--e-global-typography-6063358-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-ab88136 {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-56b668b3 .elementor-heading-title {
                font-size: var(--e-global-typography-6063358-font-size);
                line-height: var(--e-global-typography-6063358-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-14a1a77f {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-7f9b773e .elementor-heading-title {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }

            .elementor-5482 .elementor-element.elementor-element-2d73f844 {
                font-size: 1.1em;
                line-height: 1.7em
            }

            .elementor-5482 .elementor-element.elementor-element-dfddbb9 {
                font-size: var(--e-global-typography-accent-font-size);
                line-height: var(--e-global-typography-accent-line-height)
            }
        }

        .hee {
            opacity: 0;
            visibility: hidden
        }

        .link2,
        .link2:hover {
            color: #42b131 !important
        }

        .elementor-lightbox .dialog-widget-content {
            width: 100%;
            height: 100%
        }

        .eael-widget-otea-active .elementor-element:hover>.elementor-element-overlay {
            display: initial !important
        }

        .eael-onpage-edit-template-wrapper {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: none;
            border: 2px solid #5eead4
        }

        .eael-onpage-edit-template-wrapper::after {
            position: absolute;
            content: "";
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 2;
            background: #5eead4;
            opacity: .3
        }

        .eael-onpage-edit-template-wrapper.eael-onpage-edit-activate {
            display: block
        }

        .eael-onpage-edit-template-wrapper.eael-onpage-edit-activate::after {
            display: none
        }

        .eael-onpage-edit-template-wrapper .eael-onpage-edit-template {
            background: #5eead4;
            color: #000;
            width: 150px;
            text-align: center;
            height: 30px;
            line-height: 30px;
            font-size: 12px;
            cursor: pointer;
            position: relative;
            z-index: 3;
            left: 50%;
            -webkit-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            transform: translateX(-50%)
        }

        .eael-onpage-edit-template-wrapper .eael-onpage-edit-template::before {
            content: "";
            border-top: 30px solid #5eead4;
            border-right: 0;
            border-bottom: 0;
            border-left: 14px solid transparent;
            right: 100%;
            position: absolute
        }

        .eael-onpage-edit-template-wrapper .eael-onpage-edit-template::after {
            content: "";
            border-top: 0;
            border-right: 0;
            border-bottom: 30px solid transparent;
            border-left: 14px solid #5eead4;
            left: 100%;
            position: absolute
        }

        .eael-onpage-edit-template-wrapper .eael-onpage-edit-template>i {
            margin-right: 8px
        }

        .fab {
            font-family: "Font Awesome 5 Brands";
            font-weight: 400
        }

        #elementor-popup-modal-3015 .dialog-widget-content {
            background-color: #02010100;
            box-shadow: 2px 8px 23px 3px rgba(0, 0, 0, .2)
        }

        #elementor-popup-modal-3015 {
            background-color: rgba(0, 0, 0, .8);
            justify-content: center;
            align-items: center;
            pointer-events: all
        }

        #elementor-popup-modal-3015 .dialog-message {
            width: 640px;
            height: auto
        }

        #elementor-popup-modal-3015 .dialog-close-button {
            display: flex
        }

        #elementor-popup-modal-3015 .dialog-close-button i {
            color: var(--e-global-color-4558145)
        }

        #elementor-popup-modal-3015 .dialog-close-button svg {
            fill: var(--e-global-color-4558145)
        }

        .elementor-sticky--active {
            z-index: 99
        }

        .e-con.elementor-sticky--active {
            z-index: var(--z-index, 99)
        }

        img:is([sizes=auto i], [sizes^="auto," i]) {
            contain-intrinsic-size: 3000px 1500px
        }

        :root {
            --wp--preset--aspect-ratio--square: 1;
            --wp--preset--aspect-ratio--4-3: 4/3;
            --wp--preset--aspect-ratio--3-4: 3/4;
            --wp--preset--aspect-ratio--3-2: 3/2;
            --wp--preset--aspect-ratio--2-3: 2/3;
            --wp--preset--aspect-ratio--16-9: 16/9;
            --wp--preset--aspect-ratio--9-16: 9/16;
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, .2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, .4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, .2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1)
        }

        :where(.is-layout-flex) {
            gap: .5em
        }

        :where(.is-layout-grid) {
            gap: .5em
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em
        }

        :root :where(.wp-block-pullquote) {
            font-size: 1.5em;
            line-height: 1.6
        }

        .pcp-wrapper-2011 .sp-pcp-title a {
            color: #10594e;
            display: inherit
        }

        .pcp-wrapper-2011 .sp-pcp-title a:hover {
            color: #42b131
        }

        #pcp_wrapper-2011 .dots .swiper-pagination-bullet {
            background: #ccc
        }

        #pcp_wrapper-2011 .pcp-button-next,
        #pcp_wrapper-2011 .pcp-button-prev {
            background-image: none;
            background-size: auto;
            background-color: rgba(255, 255, 255, 0);
            height: 33px;
            width: 33px;
            margin-top: 8px;
            border: 1px solid rgba(170, 170, 170, 0);
            text-align: center;
            line-height: 30px;
            -webkit-transition: .3s;
            border-radius: 3px
        }

        #pcp_wrapper-2011 .pcp-button-next:hover,
        #pcp_wrapper-2011 .pcp-button-prev:hover {
            background-color: rgba(255, 255, 255, 0);
            border-color: rgba(214, 66, 36, 0)
        }

        #pcp_wrapper-2011 .pcp-button-next .fa,
        #pcp_wrapper-2011 .pcp-button-prev .fa {
            color: #fff
        }

        #pcp_wrapper-2011 .pcp-button-next:hover .fa,
        #pcp_wrapper-2011 .pcp-button-prev:hover .fa {
            color: #10594e
        }

        #pcp_wrapper-2011.pcp-carousel-wrapper .sp-pcp-post {
            margin-top: 0
        }

        #pcp_wrapper-2011 .sp-pcp-post {
            padding: 0
        }

        #pcp_wrapper-2011 .sp-pcp-post {
            border: 0 solid #e2e2e2;
            border-radius: 10px
        }

        #pcp_wrapper-2011 .sp-pcp-post {
            background-color: #fff
        }

        #pcp_wrapper-2011 .pcp-post-thumb-wrapper {
            border: 0 solid #ddd;
            border-radius: 0
        }

        .pcp-wrapper-2011 .sp-pcp-post-meta li,
        .pcp-wrapper-2011 .sp-pcp-post-meta li a,
        .pcp-wrapper-2011 .sp-pcp-post-meta ul {
            color: #333
        }

        .pcp-wrapper-2011 .sp-pcp-post-meta li a:hover {
            color: #333
        }

        #pcp_wrapper-2011 .pcp-readmore-link {
            background: 0 0;
            color: #42b131;
            border: 1px solid rgba(136, 136, 136, 0);
            border-radius: 0
        }

        #pcp_wrapper-2011 .pcp-readmore-link:hover {
            background-color: rgba(225, 98, 75, 0);
            color: #42b131;
            border-color: rgba(225, 98, 75, 0)
        }

        @font-face {
            font-family: Raleway;
            font-style: normal;
            font-weight: 100;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/raleway/v34/1Ptug8zYS_SKggPNyC0ITw.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: Raleway;
            font-style: normal;
            font-weight: 200;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/raleway/v34/1Ptug8zYS_SKggPNyC0ITw.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: Raleway;
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/raleway/v34/1Ptug8zYS_SKggPNyC0ITw.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: Raleway;
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/raleway/v34/1Ptug8zYS_SKggPNyC0ITw.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: Raleway;
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/raleway/v34/1Ptug8zYS_SKggPNyC0ITw.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: Raleway;
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/raleway/v34/1Ptug8zYS_SKggPNyC0ITw.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: Raleway;
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/raleway/v34/1Ptug8zYS_SKggPNyC0ITw.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: Raleway;
            font-style: normal;
            font-weight: 800;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/raleway/v34/1Ptug8zYS_SKggPNyC0ITw.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: Raleway;
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/raleway/v34/1Ptug8zYS_SKggPNyC0ITw.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        .no-js img.lazyload {
            display: none
        }

        .lazyload {
            opacity: 0
        }

        .lazyloading {
            border: 0 !important;
            opacity: 1;
            background: var(--wpr-bg-ddb4f07b-061f-4101-8784-203cffa5478f) center no-repeat rgba(255, 255, 255, 0) !important;
            background-size: 16px auto !important;
            min-width: 16px
        }

        .lazyload,
        .lazyloading {
            --smush-placeholder-width: 100px;
            --smush-placeholder-aspect-ratio: 1/1;
            width: var(--smush-placeholder-width) !important;
            aspect-ratio: var(--smush-placeholder-aspect-ratio) !important
        }

        .page-header {
            display: none
        }
    </style>
    <link rel="preload" data-rocket-preload as="image"
        href="https://mayani.ph/wp-content/uploads/2025/04/1742983869567-e1744768828835.jpeg"
        imagesrcset="https://mayani.ph/wp-content/uploads/2025/04/1742983869567-e1744768828835.jpeg 1880w, https://mayani.ph/wp-content/uploads/2025/04/1742983869567-e1744768828835-300x218.jpeg 300w, https://mayani.ph/wp-content/uploads/2025/04/1742983869567-e1744768828835-1024x743.jpeg 1024w, https://mayani.ph/wp-content/uploads/2025/04/1742983869567-e1744768828835-768x558.jpeg 768w, https://mayani.ph/wp-content/uploads/2025/04/1742983869567-e1744768828835-1536x1115.jpeg 1536w"
        imagesizes="(max-width: 1880px) 100vw, 1880px" fetchpriority="high">
    <style></style>

    <!-- All in One SEO 4.8.1.1 - aioseo.com -->
    <meta name="description"
        content="Mayani In The News Farm clustering and consolidation’s role in agri dev’t highlighted in 2nd F2C2 Summit Farm clustering and consolidation’s role in agri dev’t highlighted in 2nd F2C2 Summit • June 1, 2024 The importance of farm clustering and consolidation in enhancing the competitiveness and resilience of the agricultural sector while supporting agricultural development" />
    <meta name="robots" content="max-image-preview:large" />
    <link rel="canonical" href="{{ route('news-events') }}" />
    <meta name="generator" content="All in One SEO (AIOSEO) 4.8.1.1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:site_name"
        content="Mayani - Mayani is on a mission to uplift the lives of Filipino farmers and fisherfolk by harnessing the transformative power of technology. Our innovative solutions empower our local communities and enable them to thrive in a rapidly evolving agricultural landscape." />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="News &amp; Events - Mayani" />
    <meta property="og:description"
        content="Mayani In The News Farm clustering and consolidation’s role in agri dev’t highlighted in 2nd F2C2 Summit Farm clustering and consolidation’s role in agri dev’t highlighted in 2nd F2C2 Summit • June 1, 2024 The importance of farm clustering and consolidation in enhancing the competitiveness and resilience of the agricultural sector while supporting agricultural development" />
    <meta property="og:url" content="https://mayani.ph/news-events/" />
    <meta property="og:image" content="https://mayani.ph/wp-content/uploads/2023/09/MayaniWeb.jpg" />
    <meta property="og:image:secure_url" content="https://mayani.ph/wp-content/uploads/2023/09/MayaniWeb.jpg" />
    <meta property="og:image:width" content="960" />
    <meta property="og:image:height" content="540" />
    <meta property="article:published_time" content="2023-07-19T07:47:51+00:00" />
    <meta property="article:modified_time" content="2024-09-16T02:43:55+00:00" />
    <meta property="article:publisher" content="https://facebook.com/mayaniph" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="News &amp; Events - Mayani" />
    <meta name="twitter:description"
        content="Mayani In The News Farm clustering and consolidation’s role in agri dev’t highlighted in 2nd F2C2 Summit Farm clustering and consolidation’s role in agri dev’t highlighted in 2nd F2C2 Summit • June 1, 2024 The importance of farm clustering and consolidation in enhancing the competitiveness and resilience of the agricultural sector while supporting agricultural development" />
    <meta name="twitter:image" content="https://mayani.ph/wp-content/uploads/2023/09/MayaniWeb.jpg" />
    <script type="application/ld+json" class="aioseo-schema">
			{"@context":"https:\/\/schema.org","@graph":[{"@type":"BreadcrumbList","@id":"https:\/\/mayani.ph\/news-events\/#breadcrumblist","itemListElement":[{"@type":"ListItem","@id":"https:\/\/mayani.ph\/#listItem","position":1,"name":"Home","item":"https:\/\/mayani.ph\/","nextItem":{"@type":"ListItem","@id":"https:\/\/mayani.ph\/news-events\/#listItem","name":"News & Events"}},{"@type":"ListItem","@id":"https:\/\/mayani.ph\/news-events\/#listItem","position":2,"name":"News & Events","previousItem":{"@type":"ListItem","@id":"https:\/\/mayani.ph\/#listItem","name":"Home"}}]},{"@type":"Organization","@id":"https:\/\/mayani.ph\/#organization","name":"Mayani","description":"Mayani is on a mission to uplift the lives of Filipino farmers and fisherfolk by harnessing the transformative power of technology. Our innovative solutions empower our local communities and enable them to thrive in a rapidly evolving agricultural landscape.","url":"https:\/\/mayani.ph\/","logo":{"@type":"ImageObject","url":"https:\/\/mayani.ph\/wp-content\/uploads\/2023\/07\/Mayani-Logo_Horizontal-Logo.png","@id":"https:\/\/mayani.ph\/news-events\/#organizationLogo","width":7500,"height":3369},"image":{"@id":"https:\/\/mayani.ph\/news-events\/#organizationLogo"},"sameAs":["https:\/\/facebook.com\/mayaniph"]},{"@type":"WebPage","@id":"https:\/\/mayani.ph\/news-events\/#webpage","url":"https:\/\/mayani.ph\/news-events\/","name":"News & Events - Mayani","description":"Mayani In The News Farm clustering and consolidation\u2019s role in agri dev\u2019t highlighted in 2nd F2C2 Summit Farm clustering and consolidation\u2019s role in agri dev\u2019t highlighted in 2nd F2C2 Summit \u2022 June 1, 2024 The importance of farm clustering and consolidation in enhancing the competitiveness and resilience of the agricultural sector while supporting agricultural development","inLanguage":"en-US","isPartOf":{"@id":"https:\/\/mayani.ph\/#website"},"breadcrumb":{"@id":"https:\/\/mayani.ph\/news-events\/#breadcrumblist"},"datePublished":"2023-07-19T07:47:51+08:00","dateModified":"2024-09-16T10:43:55+08:00"},{"@type":"WebSite","@id":"https:\/\/mayani.ph\/#website","url":"https:\/\/mayani.ph\/","name":"Mayani","description":"Mayani is on a mission to uplift the lives of Filipino farmers and fisherfolk by harnessing the transformative power of technology. Our innovative solutions empower our local communities and enable them to thrive in a rapidly evolving agricultural landscape.","inLanguage":"en-US","publisher":{"@id":"https:\/\/mayani.ph\/#organization"}}]}
		</script>
    <!-- All in One SEO -->


    <link rel="alternate" type="application/rss+xml" title="Mayani &raquo; Feed" href="https://mayani.ph/feed/" />
    <link rel="alternate" type="application/rss+xml" title="Mayani &raquo; Comments Feed"
        href="https://mayani.ph/comments/feed/" />
    <link rel="alternate" type="text/calendar" title="Mayani &raquo; iCal Feed"
        href="https://mayani.ph/events/?ical=1" />
    <!-- This site uses the Google Analytics by MonsterInsights plugin v9.4.1 - Using Analytics tracking - https://www.monsterinsights.com/ -->
    <!-- Note: MonsterInsights is not currently configured on this site. The site owner needs to authenticate with Google Analytics in the MonsterInsights settings panel. -->
    <!-- No tracking code set -->
    <!-- / Google Analytics by MonsterInsights -->


    <style id='global-styles-inline-css'></style>




    <style id='pcp-style-inline-css'></style>
































    <script type="rocketlazyloadscript"
        data-rocket-src="https://mayani.ph/wp-includes/js/jquery/jquery.min.js?ver=3.7.1" id="jquery-core-js"
        data-rocket-defer defer></script>
    <script type="rocketlazyloadscript"
        data-rocket-src="https://mayani.ph/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1" id="jquery-migrate-js"
        data-rocket-defer defer></script>
    <link rel="https://api.w.org/" href="https://mayani.ph/wp-json/" />
    <link rel="alternate" title="JSON" type="application/json" href="https://mayani.ph/wp-json/wp/v2/pages/43" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://mayani.ph/xmlrpc.php?rsd" />
    <meta name="generator" content="WordPress 6.8" />
    <link rel='shortlink' href='https://mayani.ph/?p=43' />
    <link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed"
        href="https://mayani.ph/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fmayani.ph%2Fnews-events%2F" />
    <link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed"
        href="https://mayani.ph/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fmayani.ph%2Fnews-events%2F&#038;format=xml" />
    <script type="rocketlazyloadscript">document.documentElement.className += " js";</script>
    <meta name="tec-api-version" content="v1">
    <meta name="tec-api-origin" content="https://mayani.ph">
    <link rel="alternate" href="https://mayani.ph/wp-json/tribe/events/v1/" />
    <script type="rocketlazyloadscript">
			document.documentElement.className = document.documentElement.className.replace('no-js', 'js');
		</script>
    <style></style>
    <meta name="generator"
        content="Elementor 3.28.3; features: additional_custom_breakpoints, e_local_google_fonts; settings: css_print_method-external, google_font-enabled, font_display-swap">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-1HQ573MBSJ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-1HQ573MBSJ');
    </script>
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-K88CZ837');</script>
    <!-- End Google Tag Manager -->
    <style></style>
    <link rel="icon" href="https://mayani.ph/wp-content/uploads/2024/12/cropped-favicon-32x32.png" sizes="32x32" />
    <link rel="icon" href="https://mayani.ph/wp-content/uploads/2024/12/cropped-favicon-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="https://mayani.ph/wp-content/uploads/2024/12/cropped-favicon-180x180.png" />
    <meta name="msapplication-TileImage"
        content="https://mayani.ph/wp-content/uploads/2024/12/cropped-favicon-270x270.png" />
    <style id="wp-custom-css"></style>
    <style type="text/css"></style>
    <style id="wpr-lazyload-bg-container"></style>
    <style id="wpr-lazyload-bg-exclusion"></style>
    <noscript>
        <style id="wpr-lazyload-bg-nostyle">
            .lazyloading {
                --wpr-bg-ddb4f07b-061f-4101-8784-203cffa5478f: url('https://mayani.ph/wp-content/plugins/wp-smushit/app/assets/images/smush-lazyloader-2.gif');
            }

            .pcp-preloader {
                --wpr-bg-95447fef-d954-44ac-9629-53c9f16fb161: url('https://mayani.ph/wp-content/plugins/post-carousel/public/assets/img/preloader.svg');
            }
        </style>
    </noscript>
    <script
        type="application/javascript">const rocket_pairs = [{ "selector": ".lazyloading", "style": ".lazyloading{--wpr-bg-ddb4f07b-061f-4101-8784-203cffa5478f: url('https:\/\/mayani.ph\/wp-content\/plugins\/wp-smushit\/app\/assets\/images\/smush-lazyloader-2.gif');}", "hash": "ddb4f07b-061f-4101-8784-203cffa5478f", "url": "https:\/\/mayani.ph\/wp-content\/plugins\/wp-smushit\/app\/assets\/images\/smush-lazyloader-2.gif" }, { "selector": ".pcp-preloader", "style": ".pcp-preloader{--wpr-bg-95447fef-d954-44ac-9629-53c9f16fb161: url('https:\/\/mayani.ph\/wp-content\/plugins\/post-carousel\/public\/assets\/img\/preloader.svg');}", "hash": "95447fef-d954-44ac-9629-53c9f16fb161", "url": "https:\/\/mayani.ph\/wp-content\/plugins\/post-carousel\/public\/assets\/img\/preloader.svg" }]; const rocket_excluded_pairs = [];</script>
    <meta name="generator" content="WP Rocket 3.18.3"
        data-wpr-features="wpr_lazyload_css_bg_img wpr_remove_unused_css wpr_delay_js wpr_defer_js wpr_minify_js wpr_oci wpr_image_dimensions wpr_minify_css wpr_preload_links wpr_desktop" />
</head>

<body
    class="wp-singular page-template-default page page-id-43 wp-custom-logo wp-embed-responsive wp-theme-hello-elementor wp-child-theme-hello-elementor-child tribe-no-js hello-elementor theme-default elementor-default elementor-kit-5 elementor-page elementor-page-43">

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K88CZ837" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <a class="skip-link screen-reader-text" href="#content">Skip to content</a>

    <div data-elementor-type="header" data-elementor-id="12" class="elementor elementor-12 elementor-location-header"
        data-elementor-post-type="elementor_library">
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-4f9821c elementor-section-full_width elementor-hidden-tablet elementor-hidden-mobile elementor-section-height-default elementor-section-height-default"
            data-id="4f9821c" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;sticky&quot;:&quot;top&quot;,&quot;sticky_on&quot;:[&quot;widescreen&quot;,&quot;desktop&quot;,&quot;laptop&quot;,&quot;tablet_extra&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_offset&quot;:0,&quot;sticky_effects_offset&quot;:0,&quot;sticky_anchor_link_offset&quot;:0}">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-4d48039"
                    data-id="4d48039" data-element_type="column">
                    <div class="elementor-widget-wrap">
                    </div>
                </div>
                <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-dbb059f"
                    data-id="dbb059f" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-69c2a97 elementor-widget elementor-widget-theme-site-logo elementor-widget-image"
                            data-id="69c2a97" data-element_type="widget" data-widget_type="theme-site-logo.default">
                            <div class="elementor-widget-container">
                                <a href="https://mayani.ph">
                                    <img fetchpriority="high" width="7500" height="3369"
                                        src="{{ asset('images/logo.png') }}"
                                        class="attachment-full size-full wp-image-5452" alt="Vegseas Logo" srcset="
        {{ asset('images/logo.png') }} 7500w,
        {{ asset('images/logo.png') }} 300w,
        {{ asset('images/logo.png') }} 1024w,
        {{ asset('images/logo.png') }} 768w,
        {{ asset('images/logo.png') }} 1536w,
        {{ asset('images/logo.png') }} 2048w" sizes="(max-width: 7500px) 100vw, 7500px" /> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-10b9ec1"
                    data-id="10b9ec1" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-acdbecf elementor-nav-menu--stretch elementor-nav-menu--dropdown-tablet elementor-nav-menu__text-align-aside elementor-nav-menu--toggle elementor-nav-menu--burger elementor-widget elementor-widget-nav-menu"
                            data-id="acdbecf" data-element_type="widget"
                            data-settings="{&quot;full_width&quot;:&quot;stretch&quot;,&quot;layout&quot;:&quot;horizontal&quot;,&quot;submenu_icon&quot;:{&quot;value&quot;:&quot;&lt;i class=\&quot;fas fa-caret-down\&quot;&gt;&lt;\/i&gt;&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;toggle&quot;:&quot;burger&quot;}"
                            data-widget_type="nav-menu.default">
                            <div class="elementor-widget-container">
                                <nav aria-label="Menu"
                                    class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-horizontal e--pointer-none">
                                    <ul id="menu-1-acdbecf" class="elementor-nav-menu">
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-53">
                                            <a href="https://mayani.ph/" class="elementor-item">Home</a></li>
                                        <li
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-54">
                                            <a class="elementor-item">Our Company</a>
                                            <ul class="sub-menu elementor-nav-menu--dropdown">
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-52">
                                                    <a href="https://mayani.ph/about-us/"
                                                        class="elementor-sub-item">About Us</a></li>
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-51">
                                                    <a href="https://mayani.ph/meet-the-team/"
                                                        class="elementor-sub-item">Meet the Team</a></li>
                                            </ul>
                                        </li>
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-50">
                                            <a href="https://mayani.ph/partner-with-us/" class="elementor-item">Partner
                                                With Us</a></li>
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-49">
                                            <a href="https://mayani.ph/become-a-reseller/" class="elementor-item">Become
                                                a Ka-Farmilya</a></li>
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-43 current_page_item menu-item-48">
                                            <a href="{{ route('news-events') }}" aria-current="page"
                                                class="elementor-item elementor-item-active">News &#038; Events</a></li>
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-47">
                                            <a href="https://mayani.ph/contact-us/" class="elementor-item">Contact
                                                Us</a></li>
                                    </ul>
                                </nav>
                                <div class="elementor-menu-toggle" role="button" tabindex="0" aria-label="Menu Toggle"
                                    aria-expanded="false">
                                    <i aria-hidden="true" role="presentation"
                                        class="elementor-menu-toggle__icon--open eicon-menu-bar"></i><i
                                        aria-hidden="true" role="presentation"
                                        class="elementor-menu-toggle__icon--close eicon-close"></i> <span
                                        class="elementor-screen-only">Menu</span>
                                </div>
                                <nav class="elementor-nav-menu--dropdown elementor-nav-menu__container"
                                    aria-hidden="true">
                                    <ul id="menu-2-acdbecf" class="elementor-nav-menu">
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-53">
                                            <a href="https://mayani.ph/" class="elementor-item" tabindex="-1">Home</a>
                                        </li>
                                        <li
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-54">
                                            <a class="elementor-item" tabindex="-1">Our Company</a>
                                            <ul class="sub-menu elementor-nav-menu--dropdown">
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-52">
                                                    <a href="https://mayani.ph/about-us/" class="elementor-sub-item"
                                                        tabindex="-1">About Us</a></li>
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-51">
                                                    <a href="https://mayani.ph/meet-the-team/"
                                                        class="elementor-sub-item" tabindex="-1">Meet the Team</a></li>
                                            </ul>
                                        </li>
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-50">
                                            <a href="https://mayani.ph/partner-with-us/" class="elementor-item"
                                                tabindex="-1">Partner With Us</a></li>
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-49">
                                            <a href="https://mayani.ph/become-a-reseller/" class="elementor-item"
                                                tabindex="-1">Become a Ka-Farmilya</a></li>
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-43 current_page_item menu-item-48">
                                            <a href="{{ route('news-events') }}" aria-current="page"
                                                class="elementor-item elementor-item-active" tabindex="-1">News &#038;
                                                Events</a></li>
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-47">
                                            <a href="https://mayani.ph/contact-us/" class="elementor-item"
                                                tabindex="-1">Contact Us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-c4fff95"
                    data-id="c4fff95" data-element_type="column">
                    <div class="elementor-widget-wrap">
                    </div>
                </div>
            </div>
        </section>
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-2885417 elementor-section-full_width elementor-hidden-widescreen elementor-hidden-desktop elementor-hidden-laptop elementor-hidden-tablet_extra elementor-section-height-default elementor-section-height-default"
            data-id="2885417" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;sticky&quot;:&quot;top&quot;,&quot;sticky_on&quot;:[&quot;widescreen&quot;,&quot;desktop&quot;,&quot;laptop&quot;,&quot;tablet_extra&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_offset&quot;:0,&quot;sticky_effects_offset&quot;:0,&quot;sticky_anchor_link_offset&quot;:0}">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-4e8bc13"
                    data-id="4e8bc13" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-cea616f elementor-widget elementor-widget-theme-site-logo elementor-widget-image"
                            data-id="cea616f" data-element_type="widget" data-widget_type="theme-site-logo.default">
                            <div class="elementor-widget-container">
                                <a href="https://mayani.ph">
                                    <img fetchpriority="high" width="7500" height="3369"
                                        src="https://mayani.ph/wp-content/uploads/2023/07/Mayani-Logo_Horizontal-Logo.png"
                                        class="attachment-full size-full wp-image-5452" alt=""
                                        srcset="https://mayani.ph/wp-content/uploads/2023/07/Mayani-Logo_Horizontal-Logo.png 7500w, https://mayani.ph/wp-content/uploads/2023/07/Mayani-Logo_Horizontal-Logo-300x135.png 300w, https://mayani.ph/wp-content/uploads/2023/07/Mayani-Logo_Horizontal-Logo-1024x460.png 1024w, https://mayani.ph/wp-content/uploads/2023/07/Mayani-Logo_Horizontal-Logo-768x345.png 768w, https://mayani.ph/wp-content/uploads/2023/07/Mayani-Logo_Horizontal-Logo-1536x690.png 1536w, https://mayani.ph/wp-content/uploads/2023/07/Mayani-Logo_Horizontal-Logo-2048x920.png 2048w"
                                        sizes="(max-width: 7500px) 100vw, 7500px" /> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-68608bd"
                    data-id="68608bd" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-09eff15 elementor-nav-menu--stretch elementor-nav-menu__text-align-aside elementor-nav-menu--toggle elementor-nav-menu--burger elementor-widget elementor-widget-nav-menu"
                            data-id="09eff15" data-element_type="widget"
                            data-settings="{&quot;full_width&quot;:&quot;stretch&quot;,&quot;layout&quot;:&quot;dropdown&quot;,&quot;submenu_icon&quot;:{&quot;value&quot;:&quot;&lt;i class=\&quot;fas fa-caret-down\&quot;&gt;&lt;\/i&gt;&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;toggle&quot;:&quot;burger&quot;}"
                            data-widget_type="nav-menu.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-menu-toggle" role="button" tabindex="0" aria-label="Menu Toggle"
                                    aria-expanded="false">
                                    <i aria-hidden="true" role="presentation"
                                        class="elementor-menu-toggle__icon--open eicon-menu-bar"></i><i
                                        aria-hidden="true" role="presentation"
                                        class="elementor-menu-toggle__icon--close eicon-close"></i> <span
                                        class="elementor-screen-only">Menu</span>
                                </div>
                                <nav class="elementor-nav-menu--dropdown elementor-nav-menu__container"
                                    aria-hidden="true">
                                    <ul id="menu-2-09eff15" class="elementor-nav-menu">
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-66">
                                            <a href="https://mayani.ph/" class="elementor-item" tabindex="-1">Home</a>
                                        </li>
                                        <li
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-67">
                                            <a class="elementor-item" tabindex="-1">Our Company</a>
                                            <ul class="sub-menu elementor-nav-menu--dropdown">
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-65">
                                                    <a href="https://mayani.ph/about-us/" class="elementor-sub-item"
                                                        tabindex="-1">About Us</a></li>
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-64">
                                                    <a href="https://mayani.ph/meet-the-team/"
                                                        class="elementor-sub-item" tabindex="-1">Meet the Team</a></li>
                                            </ul>
                                        </li>
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-63">
                                            <a href="https://mayani.ph/partner-with-us/" class="elementor-item"
                                                tabindex="-1">Partner With Us</a></li>
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-62">
                                            <a href="https://mayani.ph/become-a-reseller/" class="elementor-item"
                                                tabindex="-1">Become a Ka-Farmilya</a></li>
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-43 current_page_item menu-item-61">
                                            <a href="{{ route('news-events') }}" aria-current="page"
                                                class="elementor-item elementor-item-active" tabindex="-1">News &#038;
                                                Events</a></li>
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-60">
                                            <a href="https://mayani.ph/contact-us/" class="elementor-item"
                                                tabindex="-1">Contact Us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <main id="content" class="site-main post-43 page type-page status-publish hentry">

        <div class="page-header">
            <h1 class="entry-title">News &#038; Events</h1>
        </div>

        <div class="page-content">
            <div data-elementor-type="wp-page" data-elementor-id="43" class="elementor elementor-43"
                data-elementor-post-type="page">
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-e8ff8ce elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="e8ff8ce" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8708ac2"
                            data-id="8708ac2" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-b8346b6 elementor-widget elementor-widget-spacer"
                                    data-id="b8346b6" data-element_type="widget" data-widget_type="spacer.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-spacer">
                                            <div class="elementor-spacer-inner"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-c51bdea elementor-section-full_width elementor-hidden-tablet_extra elementor-hidden-tablet elementor-hidden-mobile elementor-section-height-default elementor-section-height-default"
                    data-id="c51bdea" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-91cfbe6"
                            data-id="91cfbe6" data-element_type="column">
                            <div class="elementor-widget-wrap">
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-8911af2"
                            data-id="8911af2" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-789ff44 elementor-widget elementor-widget-heading"
                                    data-id="789ff44" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default"><span
                                                style="color:#42B131;">Mayani</span> In The News</h2>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-7ca84d1 premium-blog-align-left elementor-widget elementor-widget-premium-addon-blog"
                                    data-id="7ca84d1" data-element_type="widget"
                                    data-settings="{&quot;premium_blog_columns_number&quot;:&quot;100%&quot;,&quot;premium_blog_grid&quot;:&quot;yes&quot;,&quot;premium_blog_layout&quot;:&quot;even&quot;,&quot;premium_blog_columns_number_tablet&quot;:&quot;50%&quot;,&quot;premium_blog_columns_number_mobile&quot;:&quot;100%&quot;,&quot;scroll_to_offset&quot;:&quot;yes&quot;}"
                                    data-widget_type="premium-addon-blog.default">
                                    <div class="elementor-widget-container">

                                        <div class="premium-blog-wrap  premium-blog-even" data-page="43"
                                            data-pagination="true">
                                            <div class="premium-blog-post-outer-container" data-total="9">
                                                <div class="premium-blog-post-container premium-blog-skin-side">
                                                    <div class="premium-blog-thumb-effect-wrapper">
                                                        <div
                                                            class="premium-blog-thumbnail-container premium-blog-none-effect">
                                                            <img decoding="async" width="855" height="1065"
                                                                data-src="https://mayani.ph/wp-content/uploads/2025/04/AIM.jpeg"
                                                                class="attachment-full size-full wp-image-5621 lazyload"
                                                                alt=""
                                                                data-srcset="https://mayani.ph/wp-content/uploads/2025/04/AIM.jpeg 855w, https://mayani.ph/wp-content/uploads/2025/04/AIM-241x300.jpeg 241w, https://mayani.ph/wp-content/uploads/2025/04/AIM-822x1024.jpeg 822w, https://mayani.ph/wp-content/uploads/2025/04/AIM-768x957.jpeg 768w"
                                                                data-sizes="(max-width: 855px) 100vw, 855px"
                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                style="--smush-placeholder-width: 855px; --smush-placeholder-aspect-ratio: 855/1065;" />
                                                        </div>
                                                        <div class="premium-blog-thumbnail-overlay">
                                                            <a class="elementor-icon"
                                                                href="https://mayani.ph/mayanis-jeff-barreiro-completes-southeast-asia-acumen-fellowship/"
                                                                target="_blank"><span>Mayani’s Jeff Barreiro completes
                                                                    Southeast Asia Acumen Fellowship</span></a>
                                                        </div>

                                                    </div>
                                                    <div class="premium-blog-content-wrapper ">

                                                        <div class="premium-blog-inner-container">

                                                            <h2 class="premium-blog-entry-title">
                                                                <a href="https://mayani.ph/mayanis-jeff-barreiro-completes-southeast-asia-acumen-fellowship/"
                                                                    target="_blank">
                                                                    Mayani’s Jeff Barreiro completes Southeast Asia
                                                                    Acumen Fellowship </a>
                                                            </h2>
                                                            <div class="premium-blog-entry-meta">

                                                                <span class="premium-blog-meta-separator">•</span>
                                                                <div
                                                                    class="premium-blog-post-time premium-blog-meta-data">
                                                                    <i class="fa fa-calendar-alt"
                                                                        aria-hidden="true"></i>
                                                                    <span>April 23, 2025</span>
                                                                </div>


                                                            </div>

                                                        </div>

                                                        <div class="premium-blog-content-inner-wrapper">
                                                            <p class="premium-blog-post-content">Honored and grateful!

                                                                Our very own Jeff Barreiro has completed the Southeast
                                                                Asia Acumen Fellowship — a powerful journey of
                                                                purpose-driven leadership. Excited to bring the
                                                                learnings back to the fields, the coasts, and the
                                                                communities we serve. Here’s to scaling impact with
                                                                dignity.</p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="premium-blog-post-outer-container" data-total="9">
                                                <div class="premium-blog-post-container premium-blog-skin-side">
                                                    <div class="premium-blog-thumb-effect-wrapper">
                                                        <div
                                                            class="premium-blog-thumbnail-container premium-blog-none-effect">
                                                            <img fetchpriority="high" decoding="async" width="1880"
                                                                height="1365"
                                                                src="https://mayani.ph/wp-content/uploads/2025/04/1742983869567-e1744768828835.jpeg"
                                                                class="attachment-full size-full wp-image-5613" alt=""
                                                                srcset="https://mayani.ph/wp-content/uploads/2025/04/1742983869567-e1744768828835.jpeg 1880w, https://mayani.ph/wp-content/uploads/2025/04/1742983869567-e1744768828835-300x218.jpeg 300w, https://mayani.ph/wp-content/uploads/2025/04/1742983869567-e1744768828835-1024x743.jpeg 1024w, https://mayani.ph/wp-content/uploads/2025/04/1742983869567-e1744768828835-768x558.jpeg 768w, https://mayani.ph/wp-content/uploads/2025/04/1742983869567-e1744768828835-1536x1115.jpeg 1536w"
                                                                sizes="(max-width: 1880px) 100vw, 1880px" />
                                                        </div>
                                                        <div class="premium-blog-thumbnail-overlay">
                                                            <a class="elementor-icon"
                                                                href="https://mayani.ph/empowering-the-future-of-foods/"
                                                                target="_blank"><span>Empowering the future of
                                                                    Foods</span></a>
                                                        </div>

                                                    </div>
                                                    <div class="premium-blog-content-wrapper ">

                                                        <div class="premium-blog-inner-container">

                                                            <h2 class="premium-blog-entry-title">
                                                                <a href="https://mayani.ph/empowering-the-future-of-foods/"
                                                                    target="_blank">
                                                                    Empowering the future of Foods </a>
                                                            </h2>
                                                            <div class="premium-blog-entry-meta">

                                                                <span class="premium-blog-meta-separator">•</span>
                                                                <div
                                                                    class="premium-blog-post-time premium-blog-meta-data">
                                                                    <i class="fa fa-calendar-alt"
                                                                        aria-hidden="true"></i>
                                                                    <span>April 17, 2025</span>
                                                                </div>


                                                            </div>

                                                        </div>

                                                        <div class="premium-blog-content-inner-wrapper">
                                                            <p class="premium-blog-post-content">Empowering the future
                                                                of food: At Seeding the Future, Mayani shared how their
                                                                agri-tech platform is transforming the lives of rural
                                                                farmers and fisherfolk in the Philippines—one harvest at
                                                                a time. 🌾</p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="premium-blog-post-outer-container" data-total="9">
                                                <div class="premium-blog-post-container premium-blog-skin-side">
                                                    <div class="premium-blog-thumb-effect-wrapper">
                                                        <div
                                                            class="premium-blog-thumbnail-container premium-blog-none-effect">
                                                            <img decoding="async" width="960" height="540"
                                                                data-src="https://mayani.ph/wp-content/uploads/2023/09/MayaniWeb.jpg"
                                                                class="attachment-full size-full wp-image-4104 lazyload"
                                                                alt=""
                                                                data-srcset="https://mayani.ph/wp-content/uploads/2023/09/MayaniWeb.jpg 960w, https://mayani.ph/wp-content/uploads/2023/09/MayaniWeb-300x169.jpg 300w, https://mayani.ph/wp-content/uploads/2023/09/MayaniWeb-768x432.jpg 768w"
                                                                data-sizes="(max-width: 960px) 100vw, 960px"
                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                style="--smush-placeholder-width: 960px; --smush-placeholder-aspect-ratio: 960/540;" />
                                                        </div>
                                                        <div class="premium-blog-thumbnail-overlay">
                                                            <a class="elementor-icon"
                                                                href="https://mayani.ph/solving-malnutrition-is-also-an-agricultural-concern/"
                                                                target="_blank"><span>Solving malnutrition is also an
                                                                    agricultural concern</span></a>
                                                        </div>

                                                    </div>
                                                    <div class="premium-blog-content-wrapper ">

                                                        <div class="premium-blog-inner-container">

                                                            <h2 class="premium-blog-entry-title">
                                                                <a href="https://mayani.ph/solving-malnutrition-is-also-an-agricultural-concern/"
                                                                    target="_blank">
                                                                    Solving malnutrition is also an agricultural concern
                                                                </a>
                                                            </h2>
                                                            <div class="premium-blog-entry-meta">

                                                                <span class="premium-blog-meta-separator">•</span>
                                                                <div
                                                                    class="premium-blog-post-time premium-blog-meta-data">
                                                                    <i class="fa fa-calendar-alt"
                                                                        aria-hidden="true"></i>
                                                                    <span>April 15, 2025</span>
                                                                </div>


                                                            </div>

                                                        </div>

                                                        <div class="premium-blog-content-inner-wrapper">
                                                            <p class="premium-blog-post-content">For a country that
                                                                continues to grapple with food insecurity and community
                                                                malnutrition, ensuring broad, sustainable access to
                                                                nutrient-rich produce sits as the heart of what MAYANI
                                                                does. In collaboration with key partners JCI Manila and
                                                                Scholars Of Sustenance Philippines - SOS Philippines, we
                                                                harnessed our shared vision of uplifting both ends of
                                                                the Philippine agrifood value chain: our smallholder
                                                                farmers' rural livelihoods and the urban nourishment
                                                                needs of those most at risk.</p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="premium-blog-post-outer-container" data-total="9">
                                                <div class="premium-blog-post-container premium-blog-skin-side">
                                                    <div class="premium-blog-thumb-effect-wrapper">
                                                        <div
                                                            class="premium-blog-thumbnail-container premium-blog-none-effect">
                                                            <img decoding="async" width="2048" height="1071"
                                                                data-src="https://mayani.ph/wp-content/uploads/2025/04/viber_image_2025-04-03_09-03-31-605.jpg"
                                                                class="attachment-full size-full wp-image-5588 lazyload"
                                                                alt=""
                                                                data-srcset="https://mayani.ph/wp-content/uploads/2025/04/viber_image_2025-04-03_09-03-31-605.jpg 2048w, https://mayani.ph/wp-content/uploads/2025/04/viber_image_2025-04-03_09-03-31-605-300x157.jpg 300w, https://mayani.ph/wp-content/uploads/2025/04/viber_image_2025-04-03_09-03-31-605-1024x536.jpg 1024w, https://mayani.ph/wp-content/uploads/2025/04/viber_image_2025-04-03_09-03-31-605-768x402.jpg 768w, https://mayani.ph/wp-content/uploads/2025/04/viber_image_2025-04-03_09-03-31-605-1536x803.jpg 1536w"
                                                                data-sizes="(max-width: 2048px) 100vw, 2048px"
                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                style="--smush-placeholder-width: 2048px; --smush-placeholder-aspect-ratio: 2048/1071;" />
                                                        </div>
                                                        <div class="premium-blog-thumbnail-overlay">
                                                            <a class="elementor-icon"
                                                                href="https://mayani.ph/mayani-featured-in-seeding-the-future-report-by-ciip/"
                                                                target="_blank"><span>Mayani Featured in “Seeding the
                                                                    Future” Report by CIIP</span></a>
                                                        </div>

                                                    </div>
                                                    <div class="premium-blog-content-wrapper ">

                                                        <div class="premium-blog-inner-container">

                                                            <h2 class="premium-blog-entry-title">
                                                                <a href="https://mayani.ph/mayani-featured-in-seeding-the-future-report-by-ciip/"
                                                                    target="_blank">
                                                                    Mayani Featured in “Seeding the Future” Report by
                                                                    CIIP </a>
                                                            </h2>
                                                            <div class="premium-blog-entry-meta">

                                                                <span class="premium-blog-meta-separator">•</span>
                                                                <div
                                                                    class="premium-blog-post-time premium-blog-meta-data">
                                                                    <i class="fa fa-calendar-alt"
                                                                        aria-hidden="true"></i>
                                                                    <span>April 4, 2025</span>
                                                                </div>


                                                            </div>

                                                        </div>

                                                        <div class="premium-blog-content-inner-wrapper">
                                                            <p class="premium-blog-post-content">Another big
                                                                congratulations to us, Mayani, on being featured in the
                                                                'Seeding the Future' report by CIIP, Wavemaker Impact,
                                                                and Philanthropy Asia Alliance!🌾

                                                                Representing the Philippines with excellence!</p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="premium-blog-footer">
                                            <nav class="premium-blog-pagination-container" role="navigation"
                                                aria-label="Pagination">
                                                <span aria-current="page" class="page-numbers current">1</span>
                                                <a class="page-numbers"
                                                    href="https://mayani.ph/news-events/page/2/">2</a>
                                                <a class="page-numbers"
                                                    href="https://mayani.ph/news-events/page/3/">3</a>
                                                <span class="page-numbers dots">&hellip;</span>
                                                <a class="page-numbers"
                                                    href="https://mayani.ph/news-events/page/5/">5</a>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-85c23a6"
                            data-id="85c23a6" data-element_type="column">
                            <div class="elementor-widget-wrap">
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-c1deda4"
                            data-id="c1deda4" data-element_type="column"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-365bf84 elementor-search-form--skin-minimal elementor-widget elementor-widget-search-form"
                                    data-id="365bf84" data-element_type="widget"
                                    data-settings="{&quot;skin&quot;:&quot;minimal&quot;}"
                                    data-widget_type="search-form.default">
                                    <div class="elementor-widget-container">
                                        <search role="search">
                                            <form class="elementor-search-form" action="https://mayani.ph" method="get">
                                                <div class="elementor-search-form__container">
                                                    <label class="elementor-screen-only"
                                                        for="elementor-search-form-365bf84">Search</label>

                                                    <div class="elementor-search-form__icon">
                                                        <i aria-hidden="true" class="fas fa-search"></i> <span
                                                            class="elementor-screen-only">Search</span>
                                                    </div>

                                                    <input id="elementor-search-form-365bf84" placeholder="Search..."
                                                        class="elementor-search-form__input" type="search" name="s"
                                                        value="">


                                                </div>
                                            </form>
                                        </search>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-c5ef035 elementor-widget elementor-widget-heading"
                                    data-id="c5ef035" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">Events</h2>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-24388d6 elementor-widget elementor-widget-the-events-calendar-addon"
                                    data-id="24388d6" data-element_type="widget"
                                    data-widget_type="the-events-calendar-addon.default">
                                    <div class="elementor-widget-container">
                                        <!=========Events list Template 1.6.15=========>
                                            <div id="ectbe-wrapper-24388d6"
                                                class="ectbe-wrapper ectbe-list-wrapper style-2">
                                                <div class="ectbe-month-header ectbe-featured-event">November 2024</div>
                                                <div id="event-5444" class="ectbe-inner-wrapper ectbe-featured-event">
                                                    <div id="ectbe-date" class="ectbe-date-area">
                                                        <span class="ectbe-ev-mo">Nov</span>
                                                        <span class="ectbe-ev-day">28</span>
                                                    </div>
                                                    <div class="ectbe-content-box">
                                                        <div class="ectbe-date-area">
                                                            <span class="ectbe-ev-mo">Nov</span>
                                                            <span class="ectbe-ev-day">28, </span>
                                                            <span class="ectbe-ev-yr">2024</span>
                                                        </div>
                                                        <div class="ectbe-evt-title"><a class="ectbe-evt-url"
                                                                href="https://tinyurl.com/2p3acb3c#new_tab/">Online
                                                                workshop exclusively for BPSU SINAG ATBI incubatees</a>
                                                        </div>
                                                        <div class="ectbe-evt-more-box"><a class="ectbe-evt-read-more"
                                                                href="https://tinyurl.com/2p3acb3c#new_tab/">Find out
                                                                more</a></div>
                                                    </div>
                                                    <div class="ectbe-evt-img"><img width="1024" height="1024"
                                                            decoding="async"
                                                            data-src="https://mayani.ph/wp-content/uploads/2024/11/468147565_573028638813605_4155388090015820411_n-1024x1024.jpg"
                                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                            class="lazyload"
                                                            style="--smush-placeholder-width: 1024px; --smush-placeholder-aspect-ratio: 1024/1024;" />
                                                    </div>
                                                </div>
                                                <div class="ectbe-month-header ectbe-featured-event">September 2024
                                                </div>
                                                <div id="event-4781" class="ectbe-inner-wrapper ectbe-featured-event">
                                                    <div id="ectbe-date" class="ectbe-date-area">
                                                        <span class="ectbe-ev-mo">Sep</span>
                                                        <span class="ectbe-ev-day">17</span>
                                                    </div>
                                                    <div class="ectbe-content-box">
                                                        <div class="ectbe-date-area">
                                                            <span class="ectbe-ev-mo">Sep</span>
                                                            <span class="ectbe-ev-day">17, </span>
                                                            <span class="ectbe-ev-yr">2024</span>
                                                        </div>
                                                        <div class="ectbe-evt-title"><a class="ectbe-evt-url"
                                                                href="https://www.facebook.com/PhilippineSTAR/posts/951053753725171#new_tab/">Project
                                                                KaLIKHAsan’s Grow &amp; Glow Plantita Fair</a></div>
                                                        <div class="ectbe-evt-more-box"><a class="ectbe-evt-read-more"
                                                                href="https://www.facebook.com/PhilippineSTAR/posts/951053753725171#new_tab/">Find
                                                                out more</a></div>
                                                    </div>
                                                    <div class="ectbe-evt-img"><img width="1024" height="1024"
                                                            decoding="async"
                                                            data-src="https://mayani.ph/wp-content/uploads/2024/09/460082064_951053777058502_2114494356669242913_n-1024x1024.jpg"
                                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                            class="lazyload"
                                                            style="--smush-placeholder-width: 1024px; --smush-placeholder-aspect-ratio: 1024/1024;" />
                                                    </div>
                                                </div>
                                                <div class="ectbe-month-header ectbe-featured-event">May 2024</div>
                                                <div id="event-4652" class="ectbe-inner-wrapper ectbe-featured-event">
                                                    <div id="ectbe-date" class="ectbe-date-area">
                                                        <span class="ectbe-ev-mo">May</span>
                                                        <span class="ectbe-ev-day">08</span>
                                                    </div>
                                                    <div class="ectbe-content-box">
                                                        <div class="ectbe-date-area">
                                                            <span class="ectbe-ev-mo">May</span>
                                                            <span class="ectbe-ev-day">08, </span>
                                                            <span class="ectbe-ev-yr">2024</span>
                                                        </div>
                                                        <div class="ectbe-evt-title"><a class="ectbe-evt-url"
                                                                href="https://www.facebook.com/photo/?fbid=722975023385154#038;set=a.534833955532596#new_tab/">Aquaculture
                                                                Roadshow</a></div>
                                                        <div class="ectbe-evt-more-box"><a class="ectbe-evt-read-more"
                                                                href="https://www.facebook.com/photo/?fbid=722975023385154#038;set=a.534833955532596#new_tab/">Find
                                                                out more</a></div>
                                                    </div>
                                                    <div class="ectbe-evt-img"><img width="1024" height="1024"
                                                            decoding="async"
                                                            data-src="https://mayani.ph/wp-content/uploads/2024/04/439407268_722956370053686_1489076586941018438_n-1024x1024.jpg"
                                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                            class="lazyload"
                                                            style="--smush-placeholder-width: 1024px; --smush-placeholder-aspect-ratio: 1024/1024;" />
                                                    </div>
                                                </div>
                                                <div class="ectbe-month-header ectbe-featured-event">April 2024</div>
                                                <div id="event-4447" class="ectbe-inner-wrapper ectbe-featured-event">
                                                    <div id="ectbe-date" class="ectbe-date-area">
                                                        <span class="ectbe-ev-mo">Apr</span>
                                                        <span class="ectbe-ev-day">25</span>
                                                    </div>
                                                    <div class="ectbe-content-box">
                                                        <div class="ectbe-date-area">
                                                            <span class="ectbe-ev-mo">Apr</span>
                                                            <span class="ectbe-ev-day">25, </span>
                                                            <span class="ectbe-ev-yr">2024</span>
                                                        </div>
                                                        <div class="ectbe-evt-title"><a class="ectbe-evt-url"
                                                                href="https://www.facebook.com/photo/?fbid=745645941084282#038;set=a.570349061947305#new_tab/">How
                                                                Startup Founders Turn Their Potential Ideas into
                                                                Profitable Enterprises</a></div>
                                                        <div class="ectbe-evt-more-box"><a class="ectbe-evt-read-more"
                                                                href="https://www.facebook.com/photo/?fbid=745645941084282#038;set=a.570349061947305#new_tab/">Find
                                                                out more</a></div>
                                                    </div>
                                                    <div class="ectbe-evt-img"><img width="1024" height="1024"
                                                            decoding="async"
                                                            data-src="https://mayani.ph/wp-content/uploads/2024/04/435489634_745645937750949_3494831006350401838_n-1024x1024.jpg"
                                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                            class="lazyload"
                                                            style="--smush-placeholder-width: 1024px; --smush-placeholder-aspect-ratio: 1024/1024;" />
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-fc42155 elementor-hidden-widescreen elementor-hidden-desktop elementor-hidden-laptop elementor-hidden-tablet_extra elementor-hidden-tablet elementor-hidden-mobile premium-blog-align-left elementor-widget elementor-widget-premium-addon-blog"
                                    data-id="fc42155" data-element_type="widget"
                                    data-settings="{&quot;premium_blog_columns_number&quot;:&quot;100%&quot;,&quot;premium_blog_grid&quot;:&quot;yes&quot;,&quot;premium_blog_layout&quot;:&quot;even&quot;,&quot;premium_blog_columns_number_tablet&quot;:&quot;50%&quot;,&quot;premium_blog_columns_number_mobile&quot;:&quot;100%&quot;,&quot;scroll_to_offset&quot;:&quot;yes&quot;}"
                                    data-widget_type="premium-addon-blog.default">
                                    <div class="elementor-widget-container">
                                        <div class="premium-error-notice">
                                            The current query has no posts. Please make sure you have published items
                                            matching your query. </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-97f9bc5 elementor-section-full_width elementor-hidden-widescreen elementor-hidden-desktop elementor-hidden-laptop elementor-section-height-default elementor-section-height-default"
                    data-id="97f9bc5" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-3276d83"
                            data-id="3276d83" data-element_type="column">
                            <div class="elementor-widget-wrap">
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-8b34fa5"
                            data-id="8b34fa5" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-9479405 elementor-widget elementor-widget-heading"
                                    data-id="9479405" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default"><span
                                                style="color:#42B131;">Mayani</span> In The News</h2>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-b32aa1f elementor-widget elementor-widget-spacer"
                                    data-id="b32aa1f" data-element_type="widget" data-widget_type="spacer.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-spacer">
                                            <div class="elementor-spacer-inner"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-85ee149 elementor-widget elementor-widget-shortcode"
                                    data-id="85ee149" data-element_type="widget" data-widget_type="shortcode.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-shortcode"><!-- Markup Starts -->
                                            <div id="pcp_wrapper-2011"
                                                class="sp-pcp-section sp-pcp-container pcp-wrapper-2011 pcp-carousel-wrapper standard sp-carousel_layout"
                                                data-sid="2011">
                                                <div id="sp-pcp-id-2011"
                                                    class="swiper-container sp-pcp-carousel top_right" dir="ltr"
                                                    data-carousel='{ "speed":600, "items":1, "spaceBetween":20, "navigation":true, "pagination": false, "autoplay": true, "autoplay_speed": 2000, "loop": false, "autoHeight": false, "lazy":  true, "simulateTouch": true, "freeMode": false, "slider_mouse_wheel": false,"allowTouchMove": true, "slidesPerView": {"lg_desktop": 1, "desktop": 1, "tablet": 1, "mobile_landscape": 1, "mobile": 1}, "navigation_mobile": true, "pagination_mobile": false, "stop_onHover": true, "enabled": true, "prevSlideMessage": "Previous slide", "nextSlideMessage": "Next slide", "firstSlideMessage": "This is the first slide", "lastSlideMessage": "This is the last slide", "keyboard": "true", "paginationBulletMessage": "Go to slide @{{index}}" }'>
                                                    <div class="swiper-wrapper">
                                                        <div class=" swiper-slide swiper-lazy">
                                                            <div class="sp-pcp-post pcp-item-5620" data-id="5620">
                                                                <div class="pcp-post-thumb-wrapper">
                                                                    <div class="sp-pcp-post-thumb-area">
                                                                        <a class="sp-pcp-thumb"
                                                                            href="https://mayani.ph/mayanis-jeff-barreiro-completes-southeast-asia-acumen-fellowship/"
                                                                            target="_self">
                                                                            <img decoding="async"
                                                                                data-src="https://mayani.ph/wp-content/uploads/2025/04/AIM.jpeg"
                                                                                width="855" height="1065" alt=""
                                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                                class="lazyload"
                                                                                style="--smush-placeholder-width: 855px; --smush-placeholder-aspect-ratio: 855/1065;">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <h2 class="sp-pcp-title">
                                                                    <a href="https://mayani.ph/mayanis-jeff-barreiro-completes-southeast-asia-acumen-fellowship/"
                                                                        target="_self">Mayani’s Jeff Barreiro completes
                                                                        Southeast Asia Acumen Fellowship</a>
                                                                </h2>
                                                                <div class="sp-pcp-post-meta">
                                                                    <ul>
                                                                        <li> <i class="fa fa-calendar"></i>
                                                                            <time
                                                                                class="entry-date published updated">April
                                                                                23, 2025</time>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="sp-pcp-post-content">
                                                                    <div class="sp-pcp-readmore">
                                                                        <a class="pcp-readmore-link" target="_self"
                                                                            href="https://mayani.ph/mayanis-jeff-barreiro-completes-southeast-asia-acumen-fellowship/">
                                                                            Read More </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=" swiper-slide swiper-lazy">
                                                            <div class="sp-pcp-post pcp-item-5607" data-id="5607">
                                                                <div class="pcp-post-thumb-wrapper">
                                                                    <div class="sp-pcp-post-thumb-area">
                                                                        <a class="sp-pcp-thumb"
                                                                            href="https://mayani.ph/empowering-the-future-of-foods/"
                                                                            target="_self">
                                                                            <img decoding="async"
                                                                                data-src="https://mayani.ph/wp-content/uploads/2025/04/1742983869567-e1744768828835.jpeg"
                                                                                width="1880" height="1365" alt=""
                                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                                class="lazyload"
                                                                                style="--smush-placeholder-width: 1880px; --smush-placeholder-aspect-ratio: 1880/1365;">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <h2 class="sp-pcp-title">
                                                                    <a href="https://mayani.ph/empowering-the-future-of-foods/"
                                                                        target="_self">Empowering the future of
                                                                        Foods</a>
                                                                </h2>
                                                                <div class="sp-pcp-post-meta">
                                                                    <ul>
                                                                        <li> <i class="fa fa-calendar"></i>
                                                                            <time
                                                                                class="entry-date published updated">April
                                                                                17, 2025</time>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="sp-pcp-post-content">
                                                                    <div class="sp-pcp-readmore">
                                                                        <a class="pcp-readmore-link" target="_self"
                                                                            href="https://mayani.ph/empowering-the-future-of-foods/">
                                                                            Read More </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=" swiper-slide swiper-lazy">
                                                            <div class="sp-pcp-post pcp-item-5593" data-id="5593">
                                                                <div class="pcp-post-thumb-wrapper">
                                                                    <div class="sp-pcp-post-thumb-area">
                                                                        <a class="sp-pcp-thumb"
                                                                            href="https://mayani.ph/solving-malnutrition-is-also-an-agricultural-concern/"
                                                                            target="_self">
                                                                            <img decoding="async"
                                                                                data-src="https://mayani.ph/wp-content/uploads/2023/09/MayaniWeb.jpg"
                                                                                width="960" height="540" alt=""
                                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                                class="lazyload"
                                                                                style="--smush-placeholder-width: 960px; --smush-placeholder-aspect-ratio: 960/540;">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <h2 class="sp-pcp-title">
                                                                    <a href="https://mayani.ph/solving-malnutrition-is-also-an-agricultural-concern/"
                                                                        target="_self">Solving malnutrition is also an
                                                                        agricultural concern</a>
                                                                </h2>
                                                                <div class="sp-pcp-post-meta">
                                                                    <ul>
                                                                        <li> <i class="fa fa-calendar"></i>
                                                                            <time
                                                                                class="entry-date published updated">April
                                                                                15, 2025</time>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="sp-pcp-post-content">
                                                                    <div class="sp-pcp-readmore">
                                                                        <a class="pcp-readmore-link" target="_self"
                                                                            href="https://mayani.ph/solving-malnutrition-is-also-an-agricultural-concern/">
                                                                            Read More </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=" swiper-slide swiper-lazy">
                                                            <div class="sp-pcp-post pcp-item-5587" data-id="5587">
                                                                <div class="pcp-post-thumb-wrapper">
                                                                    <div class="sp-pcp-post-thumb-area">
                                                                        <a class="sp-pcp-thumb"
                                                                            href="https://mayani.ph/mayani-featured-in-seeding-the-future-report-by-ciip/"
                                                                            target="_self">
                                                                            <img decoding="async"
                                                                                data-src="https://mayani.ph/wp-content/uploads/2025/04/viber_image_2025-04-03_09-03-31-605.jpg"
                                                                                width="2048" height="1071" alt=""
                                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                                class="lazyload"
                                                                                style="--smush-placeholder-width: 2048px; --smush-placeholder-aspect-ratio: 2048/1071;">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <h2 class="sp-pcp-title">
                                                                    <a href="https://mayani.ph/mayani-featured-in-seeding-the-future-report-by-ciip/"
                                                                        target="_self">Mayani Featured in “Seeding the
                                                                        Future” Report by CIIP</a>
                                                                </h2>
                                                                <div class="sp-pcp-post-meta">
                                                                    <ul>
                                                                        <li> <i class="fa fa-calendar"></i>
                                                                            <time
                                                                                class="entry-date published updated">April
                                                                                4, 2025</time>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="sp-pcp-post-content">
                                                                    <div class="sp-pcp-readmore">
                                                                        <a class="pcp-readmore-link" target="_self"
                                                                            href="https://mayani.ph/mayani-featured-in-seeding-the-future-report-by-ciip/">
                                                                            Read More </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=" swiper-slide swiper-lazy">
                                                            <div class="sp-pcp-post pcp-item-5580" data-id="5580">
                                                                <div class="pcp-post-thumb-wrapper">
                                                                    <div class="sp-pcp-post-thumb-area">
                                                                        <a class="sp-pcp-thumb"
                                                                            href="https://mayani.ph/mayani-philippines-banks-on-pre-cooling-facilities/"
                                                                            target="_self">
                                                                            <img decoding="async"
                                                                                data-src="https://mayani.ph/wp-content/uploads/2025/04/4_2025-03-29_17-49-21.jpg"
                                                                                width="800" height="533" alt=""
                                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                                class="lazyload"
                                                                                style="--smush-placeholder-width: 800px; --smush-placeholder-aspect-ratio: 800/533;">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <h2 class="sp-pcp-title">
                                                                    <a href="https://mayani.ph/mayani-philippines-banks-on-pre-cooling-facilities/"
                                                                        target="_self">Mayani Philippines banks on
                                                                        pre-cooling facilities</a>
                                                                </h2>
                                                                <div class="sp-pcp-post-meta">
                                                                    <ul>
                                                                        <li> <i class="fa fa-calendar"></i>
                                                                            <time
                                                                                class="entry-date published updated">April
                                                                                3, 2025</time>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="sp-pcp-post-content">
                                                                    <div class="sp-pcp-readmore">
                                                                        <a class="pcp-readmore-link" target="_self"
                                                                            href="https://mayani.ph/mayani-philippines-banks-on-pre-cooling-facilities/">
                                                                            Read More </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=" swiper-slide swiper-lazy">
                                                            <div class="sp-pcp-post pcp-item-5557" data-id="5557">
                                                                <div class="pcp-post-thumb-wrapper">
                                                                    <div class="sp-pcp-post-thumb-area">
                                                                        <a class="sp-pcp-thumb"
                                                                            href="https://mayani.ph/big-win-for-mayani/"
                                                                            target="_self">
                                                                            <img decoding="async"
                                                                                data-src="https://mayani.ph/wp-content/uploads/2025/03/viber_image_2025-02-26_16-31-29-962.jpg"
                                                                                width="843" height="842" alt=""
                                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                                class="lazyload"
                                                                                style="--smush-placeholder-width: 843px; --smush-placeholder-aspect-ratio: 843/842;">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <h2 class="sp-pcp-title">
                                                                    <a href="https://mayani.ph/big-win-for-mayani/"
                                                                        target="_self">Big Win for Mayani!</a>
                                                                </h2>
                                                                <div class="sp-pcp-post-meta">
                                                                    <ul>
                                                                        <li> <i class="fa fa-calendar"></i>
                                                                            <time
                                                                                class="entry-date published updated">February
                                                                                28, 2025</time>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="sp-pcp-post-content">
                                                                    <div class="sp-pcp-readmore">
                                                                        <a class="pcp-readmore-link" target="_self"
                                                                            href="https://mayani.ph/big-win-for-mayani/">
                                                                            Read More </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=" swiper-slide swiper-lazy">
                                                            <div class="sp-pcp-post pcp-item-5524" data-id="5524">
                                                                <div class="pcp-post-thumb-wrapper">
                                                                    <div class="sp-pcp-post-thumb-area">
                                                                        <a class="sp-pcp-thumb"
                                                                            href="https://mayani.ph/forging-stronger-agri-tech-partnerships/"
                                                                            target="_self">
                                                                            <img decoding="async"
                                                                                data-src="https://mayani.ph/wp-content/uploads/2025/02/viber_image_2025-02-21_15-15-22-003.png"
                                                                                width="1974" height="1698" alt=""
                                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                                class="lazyload"
                                                                                style="--smush-placeholder-width: 1974px; --smush-placeholder-aspect-ratio: 1974/1698;">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <h2 class="sp-pcp-title">
                                                                    <a href="https://mayani.ph/forging-stronger-agri-tech-partnerships/"
                                                                        target="_self">Forging Stronger Agri-Tech
                                                                        Partnerships!</a>
                                                                </h2>
                                                                <div class="sp-pcp-post-meta">
                                                                    <ul>
                                                                        <li> <i class="fa fa-calendar"></i>
                                                                            <time
                                                                                class="entry-date published updated">February
                                                                                24, 2025</time>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="sp-pcp-post-content">
                                                                    <div class="sp-pcp-readmore">
                                                                        <a class="pcp-readmore-link" target="_self"
                                                                            href="https://mayani.ph/forging-stronger-agri-tech-partnerships/">
                                                                            Read More </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=" swiper-slide swiper-lazy">
                                                            <div class="sp-pcp-post pcp-item-5532" data-id="5532">
                                                                <div class="pcp-post-thumb-wrapper">
                                                                    <div class="sp-pcp-post-thumb-area">
                                                                        <a class="sp-pcp-thumb"
                                                                            href="https://mayani.ph/dax-our-farmer-engagement-manager-is-at-adamson-university-inspiring-the-future-of-agriculture%f0%9f%8c%b1/"
                                                                            target="_self">
                                                                            <img decoding="async"
                                                                                data-src="https://mayani.ph/wp-content/uploads/2025/02/viber_image_2025-02-21_15-12-55-107.jpg"
                                                                                width="1600" height="901" alt=""
                                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                                class="lazyload"
                                                                                style="--smush-placeholder-width: 1600px; --smush-placeholder-aspect-ratio: 1600/901;">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <h2 class="sp-pcp-title">
                                                                    <a href="https://mayani.ph/dax-our-farmer-engagement-manager-is-at-adamson-university-inspiring-the-future-of-agriculture%f0%9f%8c%b1/"
                                                                        target="_self">Dax, our Farmer Engagement
                                                                        Manager is at Adamson University: Inspiring the
                                                                        Future of Agriculture!🌱</a>
                                                                </h2>
                                                                <div class="sp-pcp-post-meta">
                                                                    <ul>
                                                                        <li> <i class="fa fa-calendar"></i>
                                                                            <time
                                                                                class="entry-date published updated">February
                                                                                21, 2025</time>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="sp-pcp-post-content">
                                                                    <div class="sp-pcp-readmore">
                                                                        <a class="pcp-readmore-link" target="_self"
                                                                            href="https://mayani.ph/dax-our-farmer-engagement-manager-is-at-adamson-university-inspiring-the-future-of-agriculture%f0%9f%8c%b1/">
                                                                            Read More </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=" swiper-slide swiper-lazy">
                                                            <div class="sp-pcp-post pcp-item-5437" data-id="5437">
                                                                <div class="pcp-post-thumb-wrapper">
                                                                    <div class="sp-pcp-post-thumb-area">
                                                                        <a class="sp-pcp-thumb"
                                                                            href="https://mayani.ph/transforming-southeast-asias-agri-food-system-for-a-sustainable-future/"
                                                                            target="_self">
                                                                            <img decoding="async"
                                                                                data-src="https://mayani.ph/wp-content/uploads/2024/11/Screenshot-2024-11-22-172337.png"
                                                                                width="607" height="238" alt=""
                                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                                class="lazyload"
                                                                                style="--smush-placeholder-width: 607px; --smush-placeholder-aspect-ratio: 607/238;">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <h2 class="sp-pcp-title">
                                                                    <a href="https://mayani.ph/transforming-southeast-asias-agri-food-system-for-a-sustainable-future/"
                                                                        target="_self">Transforming Southeast Asia’s
                                                                        Agri-Food System for a Sustainable Future</a>
                                                                </h2>
                                                                <div class="sp-pcp-post-meta">
                                                                    <ul>
                                                                        <li> <i class="fa fa-calendar"></i>
                                                                            <time
                                                                                class="entry-date published updated">November
                                                                                22, 2024</time>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="sp-pcp-post-content">
                                                                    <div class="sp-pcp-readmore">
                                                                        <a class="pcp-readmore-link" target="_self"
                                                                            href="https://mayani.ph/transforming-southeast-asias-agri-food-system-for-a-sustainable-future/">
                                                                            Read More </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=" swiper-slide swiper-lazy">
                                                            <div class="sp-pcp-post pcp-item-5431" data-id="5431">
                                                                <div class="pcp-post-thumb-wrapper">
                                                                    <div class="sp-pcp-post-thumb-area">
                                                                        <a class="sp-pcp-thumb"
                                                                            href="https://mayani.ph/exciting-news-endeavor-announces-2024-scale-up-program-startups-in-the-philippines/"
                                                                            target="_self">
                                                                            <img decoding="async"
                                                                                data-src="https://mayani.ph/wp-content/uploads/2024/10/01_Endeavor_02.webp"
                                                                                width="1595" height="907" alt=""
                                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                                class="lazyload"
                                                                                style="--smush-placeholder-width: 1595px; --smush-placeholder-aspect-ratio: 1595/907;">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <h2 class="sp-pcp-title">
                                                                    <a href="https://mayani.ph/exciting-news-endeavor-announces-2024-scale-up-program-startups-in-the-philippines/"
                                                                        target="_self">Exciting News: Endeavor Announces
                                                                        2024 Scale Up Program Startups in the
                                                                        Philippines</a>
                                                                </h2>
                                                                <div class="sp-pcp-post-meta">
                                                                    <ul>
                                                                        <li> <i class="fa fa-calendar"></i>
                                                                            <time
                                                                                class="entry-date published updated">October
                                                                                18, 2024</time>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="sp-pcp-post-content">
                                                                    <div class="sp-pcp-readmore">
                                                                        <a class="pcp-readmore-link" target="_self"
                                                                            href="https://mayani.ph/exciting-news-endeavor-announces-2024-scale-up-program-startups-in-the-philippines/">
                                                                            Read More </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=" swiper-slide swiper-lazy">
                                                            <div class="sp-pcp-post pcp-item-4707" data-id="4707">
                                                                <div class="pcp-post-thumb-wrapper">
                                                                    <div class="sp-pcp-post-thumb-area">
                                                                        <a class="sp-pcp-thumb"
                                                                            href="https://mayani.ph/farm-clustering-and-consolidations-role-in-agri-devt-highlighted-in-2nd-f2c2-summit/"
                                                                            target="_self">
                                                                            <img decoding="async"
                                                                                data-src="https://mayani.ph/wp-content/uploads/2024/06/Tsong_Gian-F2C263-1536x1024-1.jpg"
                                                                                width="1536" height="1024" alt=""
                                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                                class="lazyload"
                                                                                style="--smush-placeholder-width: 1536px; --smush-placeholder-aspect-ratio: 1536/1024;">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <h2 class="sp-pcp-title">
                                                                    <a href="https://mayani.ph/farm-clustering-and-consolidations-role-in-agri-devt-highlighted-in-2nd-f2c2-summit/"
                                                                        target="_self">Farm clustering and
                                                                        consolidation’s role in agri dev’t highlighted
                                                                        in 2nd F2C2 Summit</a>
                                                                </h2>
                                                                <div class="sp-pcp-post-meta">
                                                                    <ul>
                                                                        <li> <i class="fa fa-calendar"></i>
                                                                            <time
                                                                                class="entry-date published updated">June
                                                                                1, 2024</time>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="sp-pcp-post-content">
                                                                    <div class="sp-pcp-readmore">
                                                                        <a class="pcp-readmore-link" target="_self"
                                                                            href="https://mayani.ph/farm-clustering-and-consolidations-role-in-agri-devt-highlighted-in-2nd-f2c2-summit/">
                                                                            Read More </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=" swiper-slide swiper-lazy">
                                                            <div class="sp-pcp-post pcp-item-4702" data-id="4702">
                                                                <div class="pcp-post-thumb-wrapper">
                                                                    <div class="sp-pcp-post-thumb-area">
                                                                        <a class="sp-pcp-thumb"
                                                                            href="https://mayani.ph/un-special-advocate-queen-maxima-commends-gcash-for-helping-advance-financial-inclusion-in-the-philippines-2/"
                                                                            target="_self">
                                                                            <img decoding="async"
                                                                                data-src="https://mayani.ph/wp-content/uploads/2024/05/viber_image_2024-05-27_10-28-15-796.jpg"
                                                                                width="854" height="640" alt=""
                                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                                class="lazyload"
                                                                                style="--smush-placeholder-width: 854px; --smush-placeholder-aspect-ratio: 854/640;">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <h2 class="sp-pcp-title">
                                                                    <a href="https://mayani.ph/un-special-advocate-queen-maxima-commends-gcash-for-helping-advance-financial-inclusion-in-the-philippines-2/"
                                                                        target="_self">UN Special Advocate Queen Máxima
                                                                        commends GCash for helping advance financial
                                                                        inclusion in the Philippines</a>
                                                                </h2>
                                                                <div class="sp-pcp-post-meta">
                                                                    <ul>
                                                                        <li> <i class="fa fa-calendar"></i>
                                                                            <time
                                                                                class="entry-date published updated">May
                                                                                29, 2024</time>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="sp-pcp-post-content">
                                                                    <div class="sp-pcp-readmore">
                                                                        <a class="pcp-readmore-link" target="_self"
                                                                            href="https://mayani.ph/un-special-advocate-queen-maxima-commends-gcash-for-helping-advance-financial-inclusion-in-the-philippines-2/">
                                                                            Read More </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=" swiper-slide swiper-lazy">
                                                            <div class="sp-pcp-post pcp-item-4686" data-id="4686">
                                                                <div class="pcp-post-thumb-wrapper">
                                                                    <div class="sp-pcp-post-thumb-area">
                                                                        <a class="sp-pcp-thumb"
                                                                            href="https://mayani.ph/un-special-advocate-queen-maxima-commends-gcash-for-helping-advance-financial-inclusion-in-the-philippines/"
                                                                            target="_self">
                                                                            <img decoding="async"
                                                                                data-src="https://mayani.ph/wp-content/uploads/2024/05/viber_image_2024-05-27_10-28-15-796.jpg"
                                                                                width="854" height="640" alt=""
                                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                                class="lazyload"
                                                                                style="--smush-placeholder-width: 854px; --smush-placeholder-aspect-ratio: 854/640;">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <h2 class="sp-pcp-title">
                                                                    <a href="https://mayani.ph/un-special-advocate-queen-maxima-commends-gcash-for-helping-advance-financial-inclusion-in-the-philippines/"
                                                                        target="_self">UN Special Advocate Queen Máxima
                                                                        Commends GCash for Helping Advance Financial
                                                                        Inclusion in the Philippines</a>
                                                                </h2>
                                                                <div class="sp-pcp-post-meta">
                                                                    <ul>
                                                                        <li> <i class="fa fa-calendar"></i>
                                                                            <time
                                                                                class="entry-date published updated">May
                                                                                27, 2024</time>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="sp-pcp-post-content">
                                                                    <div class="sp-pcp-readmore">
                                                                        <a class="pcp-readmore-link" target="_self"
                                                                            href="https://mayani.ph/un-special-advocate-queen-maxima-commends-gcash-for-helping-advance-financial-inclusion-in-the-philippines/">
                                                                            Read More </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=" swiper-slide swiper-lazy">
                                                            <div class="sp-pcp-post pcp-item-4655" data-id="4655">
                                                                <div class="pcp-post-thumb-wrapper">
                                                                    <div class="sp-pcp-post-thumb-area">
                                                                        <a class="sp-pcp-thumb"
                                                                            href="https://mayani.ph/mayani-suppports-barako-publishing-launch-on-the-legacy-book-entitled-barako-77-the-story-of-environmental-activism/"
                                                                            target="_self">
                                                                            <img decoding="async"
                                                                                data-src="https://mayani.ph/wp-content/uploads/2024/05/1-scaled.jpg"
                                                                                width="2560" height="1709" alt=""
                                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                                class="lazyload"
                                                                                style="--smush-placeholder-width: 2560px; --smush-placeholder-aspect-ratio: 2560/1709;">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <h2 class="sp-pcp-title">
                                                                    <a href="https://mayani.ph/mayani-suppports-barako-publishing-launch-on-the-legacy-book-entitled-barako-77-the-story-of-environmental-activism/"
                                                                        target="_self">Mayani suppports Barako
                                                                        Publishing launch on the legacy book entitled
                                                                        Barako 77: The Story of Environmental
                                                                        Activism</a>
                                                                </h2>
                                                                <div class="sp-pcp-post-meta">
                                                                    <ul>
                                                                        <li> <i class="fa fa-calendar"></i>
                                                                            <time
                                                                                class="entry-date published updated">May
                                                                                3, 2024</time>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="sp-pcp-post-content">
                                                                    <div class="sp-pcp-readmore">
                                                                        <a class="pcp-readmore-link" target="_self"
                                                                            href="https://mayani.ph/mayani-suppports-barako-publishing-launch-on-the-legacy-book-entitled-barako-77-the-story-of-environmental-activism/">
                                                                            Read More </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=" swiper-slide swiper-lazy">
                                                            <div class="sp-pcp-post pcp-item-4620" data-id="4620">
                                                                <div class="pcp-post-thumb-wrapper">
                                                                    <div class="sp-pcp-post-thumb-area">
                                                                        <a class="sp-pcp-thumb"
                                                                            href="https://mayani.ph/mayani-eyes-overseas-market-with-phl-law-boosting-exports/"
                                                                            target="_self">
                                                                            <img decoding="async"
                                                                                data-src="https://mayani.ph/wp-content/uploads/2024/04/farming.jpg"
                                                                                width="1084" height="720" alt=""
                                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                                class="lazyload"
                                                                                style="--smush-placeholder-width: 1084px; --smush-placeholder-aspect-ratio: 1084/720;">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <h2 class="sp-pcp-title">
                                                                    <a href="https://mayani.ph/mayani-eyes-overseas-market-with-phl-law-boosting-exports/"
                                                                        target="_self">Mayani eyes overseas market with
                                                                        PHL law boosting exports</a>
                                                                </h2>
                                                                <div class="sp-pcp-post-meta">
                                                                    <ul>
                                                                        <li> <i class="fa fa-calendar"></i>
                                                                            <time
                                                                                class="entry-date published updated">May
                                                                                2, 2024</time>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="sp-pcp-post-content">
                                                                    <div class="sp-pcp-readmore">
                                                                        <a class="pcp-readmore-link" target="_self"
                                                                            href="https://mayani.ph/mayani-eyes-overseas-market-with-phl-law-boosting-exports/">
                                                                            Read More </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=" swiper-slide swiper-lazy">
                                                            <div class="sp-pcp-post pcp-item-4639" data-id="4639">
                                                                <div class="pcp-post-thumb-wrapper">
                                                                    <div class="sp-pcp-post-thumb-area">
                                                                        <a class="sp-pcp-thumb"
                                                                            href="https://mayani.ph/deals-in-brief-temasek-trust-entities-fund-five-startups-under-amplifier-program-pathgen-scores-funding-diagnos-acquires-asa-ren-and-more/"
                                                                            target="_self">
                                                                            <img decoding="async"
                                                                                data-src="https://mayani.ph/wp-content/uploads/2024/04/amplifier-0028-scaled.webp"
                                                                                width="2560" height="1707" alt=""
                                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                                class="lazyload"
                                                                                style="--smush-placeholder-width: 2560px; --smush-placeholder-aspect-ratio: 2560/1707;">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <h2 class="sp-pcp-title">
                                                                    <a href="https://mayani.ph/deals-in-brief-temasek-trust-entities-fund-five-startups-under-amplifier-program-pathgen-scores-funding-diagnos-acquires-asa-ren-and-more/"
                                                                        target="_self">Deals in brief: Temasek Trust
                                                                        entities fund five startups under Amplifier
                                                                        program, Pathgen scores funding, Diagnos
                                                                        acquires Asa Ren, and more</a>
                                                                </h2>
                                                                <div class="sp-pcp-post-meta">
                                                                    <ul>
                                                                        <li> <i class="fa fa-calendar"></i>
                                                                            <time
                                                                                class="entry-date published updated">April
                                                                                30, 2024</time>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="sp-pcp-post-content">
                                                                    <div class="sp-pcp-readmore">
                                                                        <a class="pcp-readmore-link" target="_self"
                                                                            href="https://mayani.ph/deals-in-brief-temasek-trust-entities-fund-five-startups-under-amplifier-program-pathgen-scores-funding-diagnos-acquires-asa-ren-and-more/">
                                                                            Read More </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=" swiper-slide swiper-lazy">
                                                            <div class="sp-pcp-post pcp-item-4603" data-id="4603">
                                                                <div class="pcp-post-thumb-wrapper">
                                                                    <div class="sp-pcp-post-thumb-area">
                                                                        <a class="sp-pcp-thumb"
                                                                            href="https://mayani.ph/agritech-startup-mayani-named-one-of-climate-and-nature-impact-innovators/"
                                                                            target="_self">
                                                                            <img decoding="async"
                                                                                data-src="https://mayani.ph/wp-content/uploads/2024/04/amplifier-0028-scaled.webp"
                                                                                width="2560" height="1707" alt=""
                                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                                class="lazyload"
                                                                                style="--smush-placeholder-width: 2560px; --smush-placeholder-aspect-ratio: 2560/1707;">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <h2 class="sp-pcp-title">
                                                                    <a href="https://mayani.ph/agritech-startup-mayani-named-one-of-climate-and-nature-impact-innovators/"
                                                                        target="_self">Agritech startup Mayani named one
                                                                        of ‘climate and nature impact innovators’</a>
                                                                </h2>
                                                                <div class="sp-pcp-post-meta">
                                                                    <ul>
                                                                        <li> <i class="fa fa-calendar"></i>
                                                                            <time
                                                                                class="entry-date published updated">April
                                                                                28, 2024</time>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="sp-pcp-post-content">
                                                                    <div class="sp-pcp-readmore">
                                                                        <a class="pcp-readmore-link" target="_self"
                                                                            href="https://mayani.ph/agritech-startup-mayani-named-one-of-climate-and-nature-impact-innovators/">
                                                                            Read More </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=" swiper-slide swiper-lazy">
                                                            <div class="sp-pcp-post pcp-item-4570" data-id="4570">
                                                                <div class="pcp-post-thumb-wrapper">
                                                                    <div class="sp-pcp-post-thumb-area">
                                                                        <a class="sp-pcp-thumb"
                                                                            href="https://mayani.ph/phl-startup-mayani-selected-for-temasek-trusts-mentorship-program/"
                                                                            target="_self">
                                                                            <img decoding="async"
                                                                                data-src="https://mayani.ph/wp-content/uploads/2024/04/Dawn-Chan.jpg"
                                                                                width="1080" height="720" alt=""
                                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                                class="lazyload"
                                                                                style="--smush-placeholder-width: 1080px; --smush-placeholder-aspect-ratio: 1080/720;">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <h2 class="sp-pcp-title">
                                                                    <a href="https://mayani.ph/phl-startup-mayani-selected-for-temasek-trusts-mentorship-program/"
                                                                        target="_self">PHL startup Mayani selected for
                                                                        Temasek Trust’s mentorship program</a>
                                                                </h2>
                                                                <div class="sp-pcp-post-meta">
                                                                    <ul>
                                                                        <li> <i class="fa fa-calendar"></i>
                                                                            <time
                                                                                class="entry-date published updated">April
                                                                                24, 2024</time>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="sp-pcp-post-content">
                                                                    <div class="sp-pcp-readmore">
                                                                        <a class="pcp-readmore-link" target="_self"
                                                                            href="https://mayani.ph/phl-startup-mayani-selected-for-temasek-trusts-mentorship-program/">
                                                                            Read More </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=" swiper-slide swiper-lazy">
                                                            <div class="sp-pcp-post pcp-item-4408" data-id="4408">
                                                                <div class="pcp-post-thumb-wrapper">
                                                                    <div class="sp-pcp-post-thumb-area">
                                                                        <a class="sp-pcp-thumb"
                                                                            href="https://mayani.ph/centre-for-impact-investing-and-practices-and-philanthropy-asia-alliance-unveil-amplifier-programmes-first-cohort-of-five-climate-and-nature-impact-innovators/"
                                                                            target="_self">
                                                                            <img decoding="async"
                                                                                data-src="https://mayani.ph/wp-content/uploads/2024/04/amplifier-0028-scaled.webp"
                                                                                width="2560" height="1707" alt=""
                                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                                class="lazyload"
                                                                                style="--smush-placeholder-width: 2560px; --smush-placeholder-aspect-ratio: 2560/1707;">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <h2 class="sp-pcp-title">
                                                                    <a href="https://mayani.ph/centre-for-impact-investing-and-practices-and-philanthropy-asia-alliance-unveil-amplifier-programmes-first-cohort-of-five-climate-and-nature-impact-innovators/"
                                                                        target="_self">Centre for Impact Investing and
                                                                        Practices and Philanthropy Asia Alliance Unveil
                                                                        Amplifier Programme’s First Cohort of Five
                                                                        Climate and Nature Impact Innovators</a>
                                                                </h2>
                                                                <div class="sp-pcp-post-meta">
                                                                    <ul>
                                                                        <li> <i class="fa fa-calendar"></i>
                                                                            <time
                                                                                class="entry-date published updated">April
                                                                                23, 2024</time>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="sp-pcp-post-content">
                                                                    <div class="sp-pcp-readmore">
                                                                        <a class="pcp-readmore-link" target="_self"
                                                                            href="https://mayani.ph/centre-for-impact-investing-and-practices-and-philanthropy-asia-alliance-unveil-amplifier-programmes-first-cohort-of-five-climate-and-nature-impact-innovators/">
                                                                            Read More </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=" swiper-slide swiper-lazy">
                                                            <div class="sp-pcp-post pcp-item-4397" data-id="4397">
                                                                <div class="pcp-post-thumb-wrapper">
                                                                    <div class="sp-pcp-post-thumb-area">
                                                                        <a class="sp-pcp-thumb"
                                                                            href="https://mayani.ph/walmart-backed-ninjacart-makes-strategic-investment-in-philippine-agritech-firm-mayani/"
                                                                            target="_self">
                                                                            <img decoding="async"
                                                                                data-src="https://mayani.ph/wp-content/uploads/2023/09/MayaniWeb.jpg"
                                                                                width="960" height="540" alt=""
                                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                                class="lazyload"
                                                                                style="--smush-placeholder-width: 960px; --smush-placeholder-aspect-ratio: 960/540;">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <h2 class="sp-pcp-title">
                                                                    <a href="https://mayani.ph/walmart-backed-ninjacart-makes-strategic-investment-in-philippine-agritech-firm-mayani/"
                                                                        target="_self">Walmart-Backed Ninjacart Makes
                                                                        Strategic Investment In Philippine Agritech Firm
                                                                        Mayani</a>
                                                                </h2>
                                                                <div class="sp-pcp-post-meta">
                                                                    <ul>
                                                                        <li> <i class="fa fa-calendar"></i>
                                                                            <time
                                                                                class="entry-date published updated">April
                                                                                19, 2024</time>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="sp-pcp-post-content">
                                                                    <div class="sp-pcp-readmore">
                                                                        <a class="pcp-readmore-link" target="_self"
                                                                            href="https://mayani.ph/walmart-backed-ninjacart-makes-strategic-investment-in-philippine-agritech-firm-mayani/">
                                                                            Read More </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=" swiper-slide swiper-lazy">
                                                            <div class="sp-pcp-post pcp-item-4392" data-id="4392">
                                                                <div class="pcp-post-thumb-wrapper">
                                                                    <div class="sp-pcp-post-thumb-area">
                                                                        <a class="sp-pcp-thumb"
                                                                            href="https://mayani.ph/ninjacart-invests-in-philippine-agritech-firm-mayani/"
                                                                            target="_self">
                                                                            <img decoding="async"
                                                                                data-src="https://mayani.ph/wp-content/uploads/2024/04/Website-featured-8-topaz-high-compression-1x-faceai-Copy.webp"
                                                                                width="1280" height="720" alt=""
                                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                                class="lazyload"
                                                                                style="--smush-placeholder-width: 1280px; --smush-placeholder-aspect-ratio: 1280/720;">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <h2 class="sp-pcp-title">
                                                                    <a href="https://mayani.ph/ninjacart-invests-in-philippine-agritech-firm-mayani/"
                                                                        target="_self">Ninjacart invests in Philippine
                                                                        agritech firm Mayani</a>
                                                                </h2>
                                                                <div class="sp-pcp-post-meta">
                                                                    <ul>
                                                                        <li> <i class="fa fa-calendar"></i>
                                                                            <time
                                                                                class="entry-date published updated">April
                                                                                19, 2024</time>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="sp-pcp-post-content">
                                                                    <div class="sp-pcp-readmore">
                                                                        <a class="pcp-readmore-link" target="_self"
                                                                            href="https://mayani.ph/ninjacart-invests-in-philippine-agritech-firm-mayani/">
                                                                            Read More </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=" swiper-slide swiper-lazy">
                                                            <div class="sp-pcp-post pcp-item-4386" data-id="4386">
                                                                <div class="pcp-post-thumb-wrapper">
                                                                    <div class="sp-pcp-post-thumb-area">
                                                                        <a class="sp-pcp-thumb"
                                                                            href="https://mayani.ph/ninjacart-makes-strategic-investment-in-the-philippines-based-agritech-firm-mayani/"
                                                                            target="_self">
                                                                            <img decoding="async"
                                                                                data-src="https://mayani.ph/wp-content/uploads/2024/04/Website-featured-8-topaz-high-compression-1x-faceai-Copy.webp"
                                                                                width="1280" height="720" alt=""
                                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                                class="lazyload"
                                                                                style="--smush-placeholder-width: 1280px; --smush-placeholder-aspect-ratio: 1280/720;">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <h2 class="sp-pcp-title">
                                                                    <a href="https://mayani.ph/ninjacart-makes-strategic-investment-in-the-philippines-based-agritech-firm-mayani/"
                                                                        target="_self">Ninjacart makes strategic
                                                                        investment in the Philippines-based agritech
                                                                        firm Mayani</a>
                                                                </h2>
                                                                <div class="sp-pcp-post-meta">
                                                                    <ul>
                                                                        <li> <i class="fa fa-calendar"></i>
                                                                            <time
                                                                                class="entry-date published updated">April
                                                                                19, 2024</time>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="sp-pcp-post-content">
                                                                    <div class="sp-pcp-readmore">
                                                                        <a class="pcp-readmore-link" target="_self"
                                                                            href="https://mayani.ph/ninjacart-makes-strategic-investment-in-the-philippines-based-agritech-firm-mayani/">
                                                                            Read More </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=" swiper-slide swiper-lazy">
                                                            <div class="sp-pcp-post pcp-item-4402" data-id="4402">
                                                                <div class="pcp-post-thumb-wrapper">
                                                                    <div class="sp-pcp-post-thumb-area">
                                                                        <a class="sp-pcp-thumb"
                                                                            href="https://mayani.ph/mayani-hosts-usaids-fish-right-program-responsible-seafood-sourcing-rss-technical-working-group-workshop/"
                                                                            target="_self">
                                                                            <img decoding="async"
                                                                                data-src="https://mayani.ph/wp-content/uploads/2024/04/434604347_744383827877160_5035663385748877256_n.jpg"
                                                                                width="2048" height="2048" alt=""
                                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                                class="lazyload"
                                                                                style="--smush-placeholder-width: 2048px; --smush-placeholder-aspect-ratio: 2048/2048;">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <h2 class="sp-pcp-title">
                                                                    <a href="https://mayani.ph/mayani-hosts-usaids-fish-right-program-responsible-seafood-sourcing-rss-technical-working-group-workshop/"
                                                                        target="_self">Mayani hosts USAID&#8217;s Fish
                                                                        Right Program Responsible Seafood Sourcing (RSS)
                                                                        Technical Working Group Workshop</a>
                                                                </h2>
                                                                <div class="sp-pcp-post-meta">
                                                                    <ul>
                                                                        <li> <i class="fa fa-calendar"></i>
                                                                            <time
                                                                                class="entry-date published updated">April
                                                                                8, 2024</time>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="sp-pcp-post-content">
                                                                    <div class="sp-pcp-readmore">
                                                                        <a class="pcp-readmore-link" target="_self"
                                                                            href="https://mayani.ph/mayani-hosts-usaids-fish-right-program-responsible-seafood-sourcing-rss-technical-working-group-workshop/">
                                                                            Read More </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=" swiper-slide swiper-lazy">
                                                            <div class="sp-pcp-post pcp-item-4328" data-id="4328">
                                                                <div class="pcp-post-thumb-wrapper">
                                                                    <div class="sp-pcp-post-thumb-area">
                                                                        <a class="sp-pcp-thumb"
                                                                            href="https://mayani.ph/glenfiddich-to-fund-ph-agri-tech-startup/"
                                                                            target="_self">
                                                                            <img decoding="async"
                                                                                data-src="https://mayani.ph/wp-content/uploads/2024/01/BEX08475-scaled.jpg"
                                                                                width="2560" height="1707" alt=""
                                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                                class="lazyload"
                                                                                style="--smush-placeholder-width: 2560px; --smush-placeholder-aspect-ratio: 2560/1707;">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <h2 class="sp-pcp-title">
                                                                    <a href="https://mayani.ph/glenfiddich-to-fund-ph-agri-tech-startup/"
                                                                        target="_self">Glenfiddich to fund PH agri-tech
                                                                        startup</a>
                                                                </h2>
                                                                <div class="sp-pcp-post-meta">
                                                                    <ul>
                                                                        <li> <i class="fa fa-calendar"></i>
                                                                            <time
                                                                                class="entry-date published updated">January
                                                                                17, 2024</time>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="sp-pcp-post-content">
                                                                    <div class="sp-pcp-readmore">
                                                                        <a class="pcp-readmore-link" target="_self"
                                                                            href="https://mayani.ph/glenfiddich-to-fund-ph-agri-tech-startup/">
                                                                            Read More </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=" swiper-slide swiper-lazy">
                                                            <div class="sp-pcp-post pcp-item-4313" data-id="4313">
                                                                <div class="pcp-post-thumb-wrapper">
                                                                    <div class="sp-pcp-post-thumb-area">
                                                                        <a class="sp-pcp-thumb"
                                                                            href="https://mayani.ph/mayani-surfed-the-tech-waves-at-geeks-on-a-beach/"
                                                                            target="_self">
                                                                            <img decoding="async"
                                                                                data-src="https://mayani.ph/wp-content/uploads/2024/01/407093595_401262152223923_5532581468626049158_n.jpg"
                                                                                width="1512" height="1134" alt=""
                                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                                class="lazyload"
                                                                                style="--smush-placeholder-width: 1512px; --smush-placeholder-aspect-ratio: 1512/1134;">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <h2 class="sp-pcp-title">
                                                                    <a href="https://mayani.ph/mayani-surfed-the-tech-waves-at-geeks-on-a-beach/"
                                                                        target="_self">MAYANI surfed the tech waves at
                                                                        Geeks on a Beach</a>
                                                                </h2>
                                                                <div class="sp-pcp-post-meta">
                                                                    <ul>
                                                                        <li> <i class="fa fa-calendar"></i>
                                                                            <time
                                                                                class="entry-date published updated">December
                                                                                7, 2023</time>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="sp-pcp-post-content">
                                                                    <div class="sp-pcp-readmore">
                                                                        <a class="pcp-readmore-link" target="_self"
                                                                            href="https://mayani.ph/mayani-surfed-the-tech-waves-at-geeks-on-a-beach/">
                                                                            Read More </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=" swiper-slide swiper-lazy">
                                                            <div class="sp-pcp-post pcp-item-4192" data-id="4192">
                                                                <div class="pcp-post-thumb-wrapper">
                                                                    <div class="sp-pcp-post-thumb-area">
                                                                        <a class="sp-pcp-thumb"
                                                                            href="https://mayani.ph/mayani-founder-spotlight-ochie-san-juan/"
                                                                            target="_self">
                                                                            <img decoding="async"
                                                                                data-src="https://mayani.ph/wp-content/uploads/2023/11/Founder-Spotlight-1.jpeg"
                                                                                width="960" height="960" alt=""
                                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                                class="lazyload"
                                                                                style="--smush-placeholder-width: 960px; --smush-placeholder-aspect-ratio: 960/960;">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <h2 class="sp-pcp-title">
                                                                    <a href="https://mayani.ph/mayani-founder-spotlight-ochie-san-juan/"
                                                                        target="_self">Mayani Founder Spotlight: Ochie
                                                                        San Juan</a>
                                                                </h2>
                                                                <div class="sp-pcp-post-meta">
                                                                    <ul>
                                                                        <li> <i class="fa fa-calendar"></i>
                                                                            <time
                                                                                class="entry-date published updated">November
                                                                                8, 2023</time>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="sp-pcp-post-content">
                                                                    <div class="sp-pcp-readmore">
                                                                        <a class="pcp-readmore-link" target="_self"
                                                                            href="https://mayani.ph/mayani-founder-spotlight-ochie-san-juan/">
                                                                            Read More </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=" swiper-slide swiper-lazy">
                                                            <div class="sp-pcp-post pcp-item-4184" data-id="4184">
                                                                <div class="pcp-post-thumb-wrapper">
                                                                    <div class="sp-pcp-post-thumb-area">
                                                                        <a class="sp-pcp-thumb"
                                                                            href="https://mayani.ph/mayani-dives-into-financial-literacy-topics-at-the-gcash-financial-literacy-seminar/"
                                                                            target="_self">
                                                                            <img decoding="async"
                                                                                data-src="https://mayani.ph/wp-content/uploads/2023/11/Mayani-dives-into-financial-literacy-topics-at-the-GCash-Financial-Literacy-Seminar-1.jpeg"
                                                                                width="2048" height="1536" alt=""
                                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                                class="lazyload"
                                                                                style="--smush-placeholder-width: 2048px; --smush-placeholder-aspect-ratio: 2048/1536;">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <h2 class="sp-pcp-title">
                                                                    <a href="https://mayani.ph/mayani-dives-into-financial-literacy-topics-at-the-gcash-financial-literacy-seminar/"
                                                                        target="_self">Mayani dives into financial
                                                                        literacy topics at the GCash Financial Literacy
                                                                        Seminar</a>
                                                                </h2>
                                                                <div class="sp-pcp-post-meta">
                                                                    <ul>
                                                                        <li> <i class="fa fa-calendar"></i>
                                                                            <time
                                                                                class="entry-date published updated">November
                                                                                8, 2023</time>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="sp-pcp-post-content">
                                                                    <div class="sp-pcp-readmore">
                                                                        <a class="pcp-readmore-link" target="_self"
                                                                            href="https://mayani.ph/mayani-dives-into-financial-literacy-topics-at-the-gcash-financial-literacy-seminar/">
                                                                            Read More </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=" swiper-slide swiper-lazy">
                                                            <div class="sp-pcp-post pcp-item-4112" data-id="4112">
                                                                <div class="pcp-post-thumb-wrapper">
                                                                    <div class="sp-pcp-post-thumb-area">
                                                                        <a class="sp-pcp-thumb"
                                                                            href="https://mayani.ph/bridging-agri-tech-with-collaborative-vision/"
                                                                            target="_self">
                                                                            <img decoding="async"
                                                                                data-src="https://mayani.ph/wp-content/uploads/2023/10/Bridging-Agri-Tech-with-Collaborative-Vision1.jpeg"
                                                                                width="900" height="1600" alt=""
                                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                                class="lazyload"
                                                                                style="--smush-placeholder-width: 900px; --smush-placeholder-aspect-ratio: 900/1600;">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <h2 class="sp-pcp-title">
                                                                    <a href="https://mayani.ph/bridging-agri-tech-with-collaborative-vision/"
                                                                        target="_self">Bridging Agri-Tech with
                                                                        Collaborative Vision</a>
                                                                </h2>
                                                                <div class="sp-pcp-post-meta">
                                                                    <ul>
                                                                        <li> <i class="fa fa-calendar"></i>
                                                                            <time
                                                                                class="entry-date published updated">October
                                                                                4, 2023</time>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="sp-pcp-post-content">
                                                                    <div class="sp-pcp-readmore">
                                                                        <a class="pcp-readmore-link" target="_self"
                                                                            href="https://mayani.ph/bridging-agri-tech-with-collaborative-vision/">
                                                                            Read More </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=" swiper-slide swiper-lazy">
                                                            <div class="sp-pcp-post pcp-item-3939" data-id="3939">
                                                                <div class="pcp-post-thumb-wrapper">
                                                                    <div class="sp-pcp-post-thumb-area">
                                                                        <a class="sp-pcp-thumb"
                                                                            href="https://mayani.ph/mayani-teams-up-with-usaid-at-the-1st-responsible-seafood-summit/"
                                                                            target="_self">
                                                                            <img decoding="async"
                                                                                data-src="https://mayani.ph/wp-content/uploads/2023/09/ResponsibleSeafoodSummit1.jpeg"
                                                                                width="1600" height="1200" alt=""
                                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                                class="lazyload"
                                                                                style="--smush-placeholder-width: 1600px; --smush-placeholder-aspect-ratio: 1600/1200;">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <h2 class="sp-pcp-title">
                                                                    <a href="https://mayani.ph/mayani-teams-up-with-usaid-at-the-1st-responsible-seafood-summit/"
                                                                        target="_self">Mayani teams up with USAID at the
                                                                        1st Responsible Seafood Summit</a>
                                                                </h2>
                                                                <div class="sp-pcp-post-meta">
                                                                    <ul>
                                                                        <li> <i class="fa fa-calendar"></i>
                                                                            <time
                                                                                class="entry-date published updated">September
                                                                                21, 2023</time>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="sp-pcp-post-content">
                                                                    <div class="sp-pcp-readmore">
                                                                        <a class="pcp-readmore-link" target="_self"
                                                                            href="https://mayani.ph/mayani-teams-up-with-usaid-at-the-1st-responsible-seafood-summit/">
                                                                            Read More </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=" swiper-slide swiper-lazy">
                                                            <div class="sp-pcp-post pcp-item-3950" data-id="3950">
                                                                <div class="pcp-post-thumb-wrapper">
                                                                    <div class="sp-pcp-post-thumb-area">
                                                                        <a class="sp-pcp-thumb"
                                                                            href="https://mayani.ph/mayani-using-technology-to-create-a-sustainable-pathway-from-farms-to-tables/"
                                                                            target="_self">
                                                                            <img decoding="async"
                                                                                data-src="https://mayani.ph/wp-content/uploads/2023/09/UsingTechnologytoCreateSustainabilePathway.jpg"
                                                                                width="1920" height="1079" alt=""
                                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                                class="lazyload"
                                                                                style="--smush-placeholder-width: 1920px; --smush-placeholder-aspect-ratio: 1920/1079;">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <h2 class="sp-pcp-title">
                                                                    <a href="https://mayani.ph/mayani-using-technology-to-create-a-sustainable-pathway-from-farms-to-tables/"
                                                                        target="_self">Mayani: Using Technology to
                                                                        Create A Sustainable Pathway From Farms to
                                                                        Tables</a>
                                                                </h2>
                                                                <div class="sp-pcp-post-meta">
                                                                    <ul>
                                                                        <li> <i class="fa fa-calendar"></i>
                                                                            <time
                                                                                class="entry-date published updated">September
                                                                                13, 2023</time>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="sp-pcp-post-content">
                                                                    <div class="sp-pcp-readmore">
                                                                        <a class="pcp-readmore-link" target="_self"
                                                                            href="https://mayani.ph/mayani-using-technology-to-create-a-sustainable-pathway-from-farms-to-tables/">
                                                                            Read More </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=" swiper-slide swiper-lazy">
                                                            <div class="sp-pcp-post pcp-item-3957" data-id="3957">
                                                                <div class="pcp-post-thumb-wrapper">
                                                                    <div class="sp-pcp-post-thumb-area">
                                                                        <a class="sp-pcp-thumb"
                                                                            href="https://mayani.ph/companions-on-a-journey-of-compassion/"
                                                                            target="_self">
                                                                            <img decoding="async"
                                                                                data-src="https://mayani.ph/wp-content/uploads/2023/09/CompanionsOnAJourneyOfCompassion.jpeg"
                                                                                width="1080" height="809" alt=""
                                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                                class="lazyload"
                                                                                style="--smush-placeholder-width: 1080px; --smush-placeholder-aspect-ratio: 1080/809;">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <h2 class="sp-pcp-title">
                                                                    <a href="https://mayani.ph/companions-on-a-journey-of-compassion/"
                                                                        target="_self">Companions on a Journey of
                                                                        Compassion</a>
                                                                </h2>
                                                                <div class="sp-pcp-post-meta">
                                                                    <ul>
                                                                        <li> <i class="fa fa-calendar"></i>
                                                                            <time
                                                                                class="entry-date published updated">September
                                                                                5, 2023</time>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="sp-pcp-post-content">
                                                                    <div class="sp-pcp-readmore">
                                                                        <a class="pcp-readmore-link" target="_self"
                                                                            href="https://mayani.ph/companions-on-a-journey-of-compassion/">
                                                                            Read More </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=" swiper-slide swiper-lazy">
                                                            <div class="sp-pcp-post pcp-item-3963" data-id="3963">
                                                                <div class="pcp-post-thumb-wrapper">
                                                                    <div class="sp-pcp-post-thumb-area">
                                                                        <a class="sp-pcp-thumb"
                                                                            href="https://mayani.ph/mayani-collaborates-with-jica-and-da-for-market-driven-enhancement-of-vegetable-value-chain-in-the-philippines-mv2c-pilot/"
                                                                            target="_self">
                                                                            <img decoding="async"
                                                                                data-src="https://mayani.ph/wp-content/uploads/2023/09/Mayani-Collaborates-with-JICA-and-DA2.jpeg"
                                                                                width="1478" height="1108" alt=""
                                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                                class="lazyload"
                                                                                style="--smush-placeholder-width: 1478px; --smush-placeholder-aspect-ratio: 1478/1108;">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <h2 class="sp-pcp-title">
                                                                    <a href="https://mayani.ph/mayani-collaborates-with-jica-and-da-for-market-driven-enhancement-of-vegetable-value-chain-in-the-philippines-mv2c-pilot/"
                                                                        target="_self">Mayani Collaborates with JICA and
                                                                        DA for Market-Driven Enhancement of Vegetable
                                                                        Value Chain in the Philippines (MV2C) Pilot</a>
                                                                </h2>
                                                                <div class="sp-pcp-post-meta">
                                                                    <ul>
                                                                        <li> <i class="fa fa-calendar"></i>
                                                                            <time
                                                                                class="entry-date published updated">August
                                                                                19, 2023</time>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="sp-pcp-post-content">
                                                                    <div class="sp-pcp-readmore">
                                                                        <a class="pcp-readmore-link" target="_self"
                                                                            href="https://mayani.ph/mayani-collaborates-with-jica-and-da-for-market-driven-enhancement-of-vegetable-value-chain-in-the-philippines-mv2c-pilot/">
                                                                            Read More </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=" swiper-slide swiper-lazy">
                                                            <div class="sp-pcp-post pcp-item-3970" data-id="3970">
                                                                <div class="pcp-post-thumb-wrapper">
                                                                    <div class="sp-pcp-post-thumb-area">
                                                                        <a class="sp-pcp-thumb"
                                                                            href="https://mayani.ph/mayani-receives-technical-support-under-quality-champions-initiative/"
                                                                            target="_self">
                                                                            <img decoding="async"
                                                                                data-src="https://mayani.ph/wp-content/uploads/2023/09/Mayani-Receives-Technical-Support-Under-Quality-Champions-Initiative4.jpeg"
                                                                                width="1478" height="1108" alt=""
                                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                                class="lazyload"
                                                                                style="--smush-placeholder-width: 1478px; --smush-placeholder-aspect-ratio: 1478/1108;">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <h2 class="sp-pcp-title">
                                                                    <a href="https://mayani.ph/mayani-receives-technical-support-under-quality-champions-initiative/"
                                                                        target="_self">Mayani Receives Technical Support
                                                                        Under Quality Champions Initiative</a>
                                                                </h2>
                                                                <div class="sp-pcp-post-meta">
                                                                    <ul>
                                                                        <li> <i class="fa fa-calendar"></i>
                                                                            <time
                                                                                class="entry-date published updated">July
                                                                                19, 2023</time>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="sp-pcp-post-content">
                                                                    <div class="sp-pcp-readmore">
                                                                        <a class="pcp-readmore-link" target="_self"
                                                                            href="https://mayani.ph/mayani-receives-technical-support-under-quality-champions-initiative/">
                                                                            Read More </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=" swiper-slide swiper-lazy">
                                                            <div class="sp-pcp-post pcp-item-3979" data-id="3979">
                                                                <div class="pcp-post-thumb-wrapper">
                                                                    <div class="sp-pcp-post-thumb-area">
                                                                        <a class="sp-pcp-thumb"
                                                                            href="https://mayani.ph/mayani-collaborates-with-pasig-nutrition-committee-for-hakot-challenge/"
                                                                            target="_self">
                                                                            <img decoding="async"
                                                                                data-src="https://mayani.ph/wp-content/uploads/2023/09/Mayani-collaborates-with-Pasig-Nutrition-Committee-for-Hakot-Challenge1.jpeg"
                                                                                width="1600" height="1200" alt=""
                                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                                class="lazyload"
                                                                                style="--smush-placeholder-width: 1600px; --smush-placeholder-aspect-ratio: 1600/1200;">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <h2 class="sp-pcp-title">
                                                                    <a href="https://mayani.ph/mayani-collaborates-with-pasig-nutrition-committee-for-hakot-challenge/"
                                                                        target="_self">Mayani collaborates with Pasig
                                                                        Nutrition Committee for “Hakot Challenge”</a>
                                                                </h2>
                                                                <div class="sp-pcp-post-meta">
                                                                    <ul>
                                                                        <li> <i class="fa fa-calendar"></i>
                                                                            <time
                                                                                class="entry-date published updated">July
                                                                                18, 2023</time>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="sp-pcp-post-content">
                                                                    <div class="sp-pcp-readmore">
                                                                        <a class="pcp-readmore-link" target="_self"
                                                                            href="https://mayani.ph/mayani-collaborates-with-pasig-nutrition-committee-for-hakot-challenge/">
                                                                            Read More </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=" swiper-slide swiper-lazy">
                                                            <div class="sp-pcp-post pcp-item-3986" data-id="3986">
                                                                <div class="pcp-post-thumb-wrapper">
                                                                    <div class="sp-pcp-post-thumb-area">
                                                                        <a class="sp-pcp-thumb"
                                                                            href="https://mayani.ph/mayani-and-inspiro-join-forces-for-palengke-day/"
                                                                            target="_self">
                                                                            <img decoding="async"
                                                                                data-src="https://mayani.ph/wp-content/uploads/2023/09/Mayani-and-inspiro-Join-Forces-for-Palengke-Day1.jpeg"
                                                                                width="482" height="854" alt=""
                                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                                class="lazyload"
                                                                                style="--smush-placeholder-width: 482px; --smush-placeholder-aspect-ratio: 482/854;">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <h2 class="sp-pcp-title">
                                                                    <a href="https://mayani.ph/mayani-and-inspiro-join-forces-for-palengke-day/"
                                                                        target="_self">Mayani and Inspiro Join Forces
                                                                        for Palengke Day!</a>
                                                                </h2>
                                                                <div class="sp-pcp-post-meta">
                                                                    <ul>
                                                                        <li> <i class="fa fa-calendar"></i>
                                                                            <time
                                                                                class="entry-date published updated">June
                                                                                19, 2023</time>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="sp-pcp-post-content">
                                                                    <div class="sp-pcp-readmore">
                                                                        <a class="pcp-readmore-link" target="_self"
                                                                            href="https://mayani.ph/mayani-and-inspiro-join-forces-for-palengke-day/">
                                                                            Read More </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=" swiper-slide swiper-lazy">
                                                            <div class="sp-pcp-post pcp-item-3993" data-id="3993">
                                                                <div class="pcp-post-thumb-wrapper">
                                                                    <div class="sp-pcp-post-thumb-area">
                                                                        <a class="sp-pcp-thumb"
                                                                            href="https://mayani.ph/mayani-nurtures-financial-health-with-assist-and-prulife-uk-philippines/"
                                                                            target="_self">
                                                                            <img decoding="async"
                                                                                data-src="https://mayani.ph/wp-content/uploads/2023/09/MayaniNurturesFinancialHealth1.jpeg"
                                                                                width="1600" height="863" alt=""
                                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                                class="lazyload"
                                                                                style="--smush-placeholder-width: 1600px; --smush-placeholder-aspect-ratio: 1600/863;">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <h2 class="sp-pcp-title">
                                                                    <a href="https://mayani.ph/mayani-nurtures-financial-health-with-assist-and-prulife-uk-philippines/"
                                                                        target="_self">Mayani Nurtures Financial Health
                                                                        with ASSIST and PruLife UK Philippines</a>
                                                                </h2>
                                                                <div class="sp-pcp-post-meta">
                                                                    <ul>
                                                                        <li> <i class="fa fa-calendar"></i>
                                                                            <time
                                                                                class="entry-date published updated">March
                                                                                19, 2023</time>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="sp-pcp-post-content">
                                                                    <div class="sp-pcp-readmore">
                                                                        <a class="pcp-readmore-link" target="_self"
                                                                            href="https://mayani.ph/mayani-nurtures-financial-health-with-assist-and-prulife-uk-philippines/">
                                                                            Read More </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="pcp-button-next swiper-button-next top_right"><i
                                                            class="fa fa-angle-right"></i></div>
                                                    <div class="pcp-button-prev swiper-button-prev top_right"><i
                                                            class="fa fa-angle-left"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-256988d"
                            data-id="256988d" data-element_type="column">
                            <div class="elementor-widget-wrap">
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-b774560 elementor-section-full_width elementor-hidden-widescreen elementor-hidden-desktop elementor-hidden-laptop elementor-section-height-default elementor-section-height-default"
                    data-id="b774560" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-15725af"
                            data-id="15725af" data-element_type="column"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-f1318fa elementor-search-form--skin-minimal elementor-widget elementor-widget-search-form"
                                    data-id="f1318fa" data-element_type="widget"
                                    data-settings="{&quot;skin&quot;:&quot;minimal&quot;}"
                                    data-widget_type="search-form.default">
                                    <div class="elementor-widget-container">
                                        <search role="search">
                                            <form class="elementor-search-form" action="https://mayani.ph" method="get">
                                                <div class="elementor-search-form__container">
                                                    <label class="elementor-screen-only"
                                                        for="elementor-search-form-f1318fa">Search</label>

                                                    <div class="elementor-search-form__icon">
                                                        <i aria-hidden="true" class="fas fa-search"></i> <span
                                                            class="elementor-screen-only">Search</span>
                                                    </div>

                                                    <input id="elementor-search-form-f1318fa" placeholder="Search..."
                                                        class="elementor-search-form__input" type="search" name="s"
                                                        value="">


                                                </div>
                                            </form>
                                        </search>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-79f2493 elementor-widget elementor-widget-heading"
                                    data-id="79f2493" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">Events</h2>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-3554657 elementor-hidden-widescreen elementor-hidden-desktop elementor-hidden-laptop elementor-hidden-tablet_extra elementor-hidden-tablet elementor-hidden-mobile premium-blog-align-left elementor-widget elementor-widget-premium-addon-blog"
                                    data-id="3554657" data-element_type="widget"
                                    data-settings="{&quot;scroll_to_offset&quot;:&quot;yes&quot;}"
                                    data-widget_type="premium-addon-blog.default">
                                    <div class="elementor-widget-container">
                                        <div class="premium-error-notice">
                                            The current query has no posts. Please make sure you have published items
                                            matching your query. </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-a4f2dce elementor-widget elementor-widget-the-events-calendar-addon"
                                    data-id="a4f2dce" data-element_type="widget"
                                    data-widget_type="the-events-calendar-addon.default">
                                    <div class="elementor-widget-container">
                                        <!=========Events list Template 1.6.15=========>
                                            <div id="ectbe-wrapper-a4f2dce"
                                                class="ectbe-wrapper ectbe-list-wrapper style-2">
                                                <div class="ectbe-month-header ectbe-featured-event">November 2024</div>
                                                <div id="event-5444" class="ectbe-inner-wrapper ectbe-featured-event">
                                                    <div id="ectbe-date" class="ectbe-date-area">
                                                        <span class="ectbe-ev-mo">Nov</span>
                                                        <span class="ectbe-ev-day">28</span>
                                                    </div>
                                                    <div class="ectbe-content-box">
                                                        <div class="ectbe-date-area">
                                                            <span class="ectbe-ev-mo">Nov</span>
                                                            <span class="ectbe-ev-day">28, </span>
                                                            <span class="ectbe-ev-yr">2024</span>
                                                        </div>
                                                        <div class="ectbe-evt-title"><a class="ectbe-evt-url"
                                                                href="https://tinyurl.com/2p3acb3c#new_tab/">Online
                                                                workshop exclusively for BPSU SINAG ATBI incubatees</a>
                                                        </div>
                                                        <div class="ectbe-evt-more-box"><a class="ectbe-evt-read-more"
                                                                href="https://tinyurl.com/2p3acb3c#new_tab/">Find out
                                                                more</a></div>
                                                    </div>
                                                    <div class="ectbe-evt-img"><img width="1024" height="1024"
                                                            decoding="async"
                                                            data-src="https://mayani.ph/wp-content/uploads/2024/11/468147565_573028638813605_4155388090015820411_n-1024x1024.jpg"
                                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                            class="lazyload"
                                                            style="--smush-placeholder-width: 1024px; --smush-placeholder-aspect-ratio: 1024/1024;" />
                                                    </div>
                                                </div>
                                                <div class="ectbe-month-header ectbe-featured-event">September 2024
                                                </div>
                                                <div id="event-4781" class="ectbe-inner-wrapper ectbe-featured-event">
                                                    <div id="ectbe-date" class="ectbe-date-area">
                                                        <span class="ectbe-ev-mo">Sep</span>
                                                        <span class="ectbe-ev-day">17</span>
                                                    </div>
                                                    <div class="ectbe-content-box">
                                                        <div class="ectbe-date-area">
                                                            <span class="ectbe-ev-mo">Sep</span>
                                                            <span class="ectbe-ev-day">17, </span>
                                                            <span class="ectbe-ev-yr">2024</span>
                                                        </div>
                                                        <div class="ectbe-evt-title"><a class="ectbe-evt-url"
                                                                href="https://www.facebook.com/PhilippineSTAR/posts/951053753725171#new_tab/">Project
                                                                KaLIKHAsan’s Grow &amp; Glow Plantita Fair</a></div>
                                                        <div class="ectbe-evt-more-box"><a class="ectbe-evt-read-more"
                                                                href="https://www.facebook.com/PhilippineSTAR/posts/951053753725171#new_tab/">Find
                                                                out more</a></div>
                                                    </div>
                                                    <div class="ectbe-evt-img"><img width="1024" height="1024"
                                                            decoding="async"
                                                            data-src="https://mayani.ph/wp-content/uploads/2024/09/460082064_951053777058502_2114494356669242913_n-1024x1024.jpg"
                                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                            class="lazyload"
                                                            style="--smush-placeholder-width: 1024px; --smush-placeholder-aspect-ratio: 1024/1024;" />
                                                    </div>
                                                </div>
                                                <div class="ectbe-month-header ectbe-featured-event">May 2024</div>
                                                <div id="event-4652" class="ectbe-inner-wrapper ectbe-featured-event">
                                                    <div id="ectbe-date" class="ectbe-date-area">
                                                        <span class="ectbe-ev-mo">May</span>
                                                        <span class="ectbe-ev-day">08</span>
                                                    </div>
                                                    <div class="ectbe-content-box">
                                                        <div class="ectbe-date-area">
                                                            <span class="ectbe-ev-mo">May</span>
                                                            <span class="ectbe-ev-day">08, </span>
                                                            <span class="ectbe-ev-yr">2024</span>
                                                        </div>
                                                        <div class="ectbe-evt-title"><a class="ectbe-evt-url"
                                                                href="https://www.facebook.com/photo/?fbid=722975023385154#038;set=a.534833955532596#new_tab/">Aquaculture
                                                                Roadshow</a></div>
                                                        <div class="ectbe-evt-more-box"><a class="ectbe-evt-read-more"
                                                                href="https://www.facebook.com/photo/?fbid=722975023385154#038;set=a.534833955532596#new_tab/">Find
                                                                out more</a></div>
                                                    </div>
                                                    <div class="ectbe-evt-img"><img width="1024" height="1024"
                                                            decoding="async"
                                                            data-src="https://mayani.ph/wp-content/uploads/2024/04/439407268_722956370053686_1489076586941018438_n-1024x1024.jpg"
                                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                            class="lazyload"
                                                            style="--smush-placeholder-width: 1024px; --smush-placeholder-aspect-ratio: 1024/1024;" />
                                                    </div>
                                                </div>
                                                <div class="ectbe-month-header ectbe-featured-event">April 2024</div>
                                                <div id="event-4447" class="ectbe-inner-wrapper ectbe-featured-event">
                                                    <div id="ectbe-date" class="ectbe-date-area">
                                                        <span class="ectbe-ev-mo">Apr</span>
                                                        <span class="ectbe-ev-day">25</span>
                                                    </div>
                                                    <div class="ectbe-content-box">
                                                        <div class="ectbe-date-area">
                                                            <span class="ectbe-ev-mo">Apr</span>
                                                            <span class="ectbe-ev-day">25, </span>
                                                            <span class="ectbe-ev-yr">2024</span>
                                                        </div>
                                                        <div class="ectbe-evt-title"><a class="ectbe-evt-url"
                                                                href="https://www.facebook.com/photo/?fbid=745645941084282#038;set=a.570349061947305#new_tab/">How
                                                                Startup Founders Turn Their Potential Ideas into
                                                                Profitable Enterprises</a></div>
                                                        <div class="ectbe-evt-more-box"><a class="ectbe-evt-read-more"
                                                                href="https://www.facebook.com/photo/?fbid=745645941084282#038;set=a.570349061947305#new_tab/">Find
                                                                out more</a></div>
                                                    </div>
                                                    <div class="ectbe-evt-img"><img width="1024" height="1024"
                                                            decoding="async"
                                                            data-src="https://mayani.ph/wp-content/uploads/2024/04/435489634_745645937750949_3494831006350401838_n-1024x1024.jpg"
                                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                            class="lazyload"
                                                            style="--smush-placeholder-width: 1024px; --smush-placeholder-aspect-ratio: 1024/1024;" />
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>


        </div>


    </main>

    <div data-elementor-type="footer" data-elementor-id="5482"
        class="elementor elementor-5482 elementor-location-footer" data-elementor-post-type="elementor_library">
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-ad0cb3e elementor-section-full_width elementor-hidden-tablet_extra elementor-hidden-tablet elementor-hidden-mobile elementor-section-height-default elementor-section-height-default"
            data-id="ad0cb3e" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-12 elementor-top-column elementor-element elementor-element-436224bc"
                    data-id="436224bc" data-element_type="column">
                    <div class="elementor-widget-wrap">
                    </div>
                </div>
                <div class="elementor-column elementor-col-12 elementor-top-column elementor-element elementor-element-76b7ebdb"
                    data-id="76b7ebdb" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-28f4dbe8 elementor-widget elementor-widget-spacer"
                            data-id="28f4dbe8" data-element_type="widget" data-widget_type="spacer.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner"></div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-68a58a3b elementor-widget elementor-widget-image"
                            data-id="68a58a3b" data-element_type="widget" data-widget_type="image.default">
                            <div class="elementor-widget-container">
                                <img width="800" height="359"
                                    data-src="https://mayani.ph/wp-content/uploads/2024/12/Mayani-Logo-White_Horizontal-Logo-1024x460.png"
                                    class="attachment-large size-large wp-image-5484 lazyload" alt=""
                                    data-srcset="https://mayani.ph/wp-content/uploads/2024/12/Mayani-Logo-White_Horizontal-Logo-1024x460.png 1024w, https://mayani.ph/wp-content/uploads/2024/12/Mayani-Logo-White_Horizontal-Logo-300x135.png 300w, https://mayani.ph/wp-content/uploads/2024/12/Mayani-Logo-White_Horizontal-Logo-768x345.png 768w, https://mayani.ph/wp-content/uploads/2024/12/Mayani-Logo-White_Horizontal-Logo-1536x690.png 1536w, https://mayani.ph/wp-content/uploads/2024/12/Mayani-Logo-White_Horizontal-Logo-2048x920.png 2048w"
                                    data-sizes="(max-width: 800px) 100vw, 800px"
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    style="--smush-placeholder-width: 800px; --smush-placeholder-aspect-ratio: 800/359;" />
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-782270d8 elementor-widget elementor-widget-text-editor"
                            data-id="782270d8" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <p>The Philippines&#8217; fastest-growing, impact-driven agri-tech platform empowering
                                    smallholder farmers and fisherfolks across the archipelago through sustainable
                                    access to market, inputs, and credit. Trusted by a solid portfolio of B2B buyers.
                                </p>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-6a4710ae elementor-shape-circle e-grid-align-left elementor-grid-4 elementor-widget elementor-widget-social-icons"
                            data-id="6a4710ae" data-element_type="widget" data-widget_type="social-icons.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-social-icons-wrapper elementor-grid">
                                    <span class="elementor-grid-item">
                                        <a class="elementor-icon elementor-social-icon elementor-social-icon-linkedin elementor-repeater-item-eec9c4e"
                                            href="https://www.linkedin.com/company/mayani/" target="_blank">
                                            <span class="elementor-screen-only">Linkedin</span>
                                            <i class="fab fa-linkedin"></i> </a>
                                    </span>
                                    <span class="elementor-grid-item">
                                        <a class="elementor-icon elementor-social-icon elementor-social-icon-facebook elementor-repeater-item-ebdef61"
                                            href="https://www.facebook.com/mayaniph" target="_blank">
                                            <span class="elementor-screen-only">Facebook</span>
                                            <i class="fab fa-facebook"></i> </a>
                                    </span>
                                    <span class="elementor-grid-item">
                                        <a class="elementor-icon elementor-social-icon elementor-social-icon-instagram elementor-repeater-item-244bd2b"
                                            href="https://www.instagram.com/mayaniph" target="_blank">
                                            <span class="elementor-screen-only">Instagram</span>
                                            <i class="fab fa-instagram"></i> </a>
                                    </span>
                                    <span class="elementor-grid-item">
                                        <a class="elementor-icon elementor-social-icon elementor-social-icon-youtube elementor-repeater-item-4acf570"
                                            href="https://www.youtube.com/@MayaniPH" target="_blank">
                                            <span class="elementor-screen-only">Youtube</span>
                                            <i class="fab fa-youtube"></i> </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-1d1fa84 elementor-widget elementor-widget-spacer"
                            data-id="1d1fa84" data-element_type="widget" data-widget_type="spacer.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-12 elementor-top-column elementor-element elementor-element-59de423e"
                    data-id="59de423e" data-element_type="column">
                    <div class="elementor-widget-wrap">
                    </div>
                </div>
                <div class="elementor-column elementor-col-12 elementor-top-column elementor-element elementor-element-10bff3ad"
                    data-id="10bff3ad" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-fc35115 elementor-widget elementor-widget-spacer"
                            data-id="fc35115" data-element_type="widget" data-widget_type="spacer.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner"></div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-74374e2a elementor-widget elementor-widget-heading"
                            data-id="74374e2a" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h3 class="elementor-heading-title elementor-size-default">Shop</h3>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-1ec2cd94 elementor-widget__width-initial elementor-widget elementor-widget-text-editor"
                            data-id="1ec2cd94" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <p><a href="https://shop.mayani.ph/pages/pakyawan">Pakyawan</a></p>
                                <p><a href="https://shop.mayani.ph/collections/vegetables">Vegetables</a></p>
                                <p><a href="https://shop.mayani.ph/collections/fruits">Fruits</a></p>
                                <p><a href="https://shop.mayani.ph/pages/frozen-goods">Frozen Meat</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-12 elementor-top-column elementor-element elementor-element-126940b9"
                    data-id="126940b9" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-1b9141ca elementor-widget elementor-widget-spacer"
                            data-id="1b9141ca" data-element_type="widget" data-widget_type="spacer.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner"></div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-bb3ee1d hee elementor-widget elementor-widget-heading"
                            data-id="bb3ee1d" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h4 class="elementor-heading-title elementor-size-default">Shop</h4>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-18f09ab9 elementor-widget__width-initial elementor-widget elementor-widget-text-editor"
                            data-id="18f09ab9" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <p><a href="https://shop.mayani.ph/collections/plant-based-options">Plant based Meat</a>
                                </p>
                                <p><a href="https://shop.mayani.ph/pages/imperfect-crops">Imperfect Crops</a></p>
                                <p><a href="https://shop.mayani.ph/collections/fruitsandsalad">Bundles</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-12 elementor-top-column elementor-element elementor-element-36e53be3"
                    data-id="36e53be3" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-54f4b4cb elementor-widget elementor-widget-spacer"
                            data-id="54f4b4cb" data-element_type="widget" data-widget_type="spacer.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner"></div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-62521ee5 elementor-widget elementor-widget-heading"
                            data-id="62521ee5" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h4 class="elementor-heading-title elementor-size-default">About Mayani</h4>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-6d9c44db elementor-widget__width-initial elementor-widget elementor-widget-text-editor"
                            data-id="6d9c44db" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <p><a href="/about-us">About Us</a></p>
                                <p><a href="/meet-the-team">Meet the Team</a></p>
                                <p><a href="/partner-with-us/">Partner with Us</a></p>
                                <p><a href="/become-a-reseller">Become a Reseller</a></p>
                                <p><a href="{{ route('news-events') }}">News and Events</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-12 elementor-top-column elementor-element elementor-element-2b31275f"
                    data-id="2b31275f" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-78e6727e elementor-widget elementor-widget-spacer"
                            data-id="78e6727e" data-element_type="widget" data-widget_type="spacer.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner"></div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-70a6f609 elementor-widget elementor-widget-heading"
                            data-id="70a6f609" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h4 class="elementor-heading-title elementor-size-default">Contact</h4>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-35af8f81 elementor-widget__width-initial elementor-widget elementor-widget-text-editor"
                            data-id="35af8f81" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <p><a href="/contact-us">Contact Us</a></p>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-1ab9339c elementor-widget elementor-widget-heading"
                            data-id="1ab9339c" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default"><a
                                        href="#elementor-action%3Aaction%3Dpopup%3Aopen%26settings%3DeyJpZCI6IjMwMTUiLCJ0b2dnbGUiOmZhbHNlfQ%3D%3D">Viber</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-12 elementor-top-column elementor-element elementor-element-677fd1ff"
                    data-id="677fd1ff" data-element_type="column">
                    <div class="elementor-widget-wrap">
                    </div>
                </div>
            </div>
        </section>
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-64f3e363 elementor-section-full_width elementor-hidden-tablet_extra elementor-hidden-tablet elementor-hidden-mobile elementor-section-height-default elementor-section-height-default"
            data-id="64f3e363" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-2cc08c65"
                    data-id="2cc08c65" data-element_type="column">
                    <div class="elementor-widget-wrap">
                    </div>
                </div>
                <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-6b664d68"
                    data-id="6b664d68" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-355dc4d2 elementor-widget elementor-widget-text-editor"
                            data-id="355dc4d2" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <p><a class="link2" href="/return-and-refund-policy/">Return &amp; Refund Policy</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-76c07106"
                    data-id="76c07106" data-element_type="column">
                    <div class="elementor-widget-wrap">
                    </div>
                </div>
                <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-697c447d"
                    data-id="697c447d" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-2ad8eab9 elementor-widget elementor-widget-text-editor"
                            data-id="2ad8eab9" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <p>Copyright © 2023 mayani.ph. All Rights Reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-1ff68e37"
                    data-id="1ff68e37" data-element_type="column">
                    <div class="elementor-widget-wrap">
                    </div>
                </div>
            </div>
        </section>
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-1b017a00 elementor-section-full_width elementor-hidden-widescreen elementor-hidden-desktop elementor-hidden-laptop elementor-section-height-default elementor-section-height-default"
            data-id="1b017a00" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-1bba003f"
                    data-id="1bba003f" data-element_type="column">
                    <div class="elementor-widget-wrap">
                    </div>
                </div>
                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-21f447b6"
                    data-id="21f447b6" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-6f09db27 elementor-widget elementor-widget-spacer"
                            data-id="6f09db27" data-element_type="widget" data-widget_type="spacer.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner"></div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-32755011 elementor-widget elementor-widget-image"
                            data-id="32755011" data-element_type="widget" data-widget_type="image.default">
                            <div class="elementor-widget-container">
                                <img width="800" height="359"
                                    data-src="https://mayani.ph/wp-content/uploads/2024/12/Mayani-Logo-White_Horizontal-Logo-1024x460.png"
                                    class="attachment-large size-large wp-image-5484 lazyload" alt=""
                                    data-srcset="https://mayani.ph/wp-content/uploads/2024/12/Mayani-Logo-White_Horizontal-Logo-1024x460.png 1024w, https://mayani.ph/wp-content/uploads/2024/12/Mayani-Logo-White_Horizontal-Logo-300x135.png 300w, https://mayani.ph/wp-content/uploads/2024/12/Mayani-Logo-White_Horizontal-Logo-768x345.png 768w, https://mayani.ph/wp-content/uploads/2024/12/Mayani-Logo-White_Horizontal-Logo-1536x690.png 1536w, https://mayani.ph/wp-content/uploads/2024/12/Mayani-Logo-White_Horizontal-Logo-2048x920.png 2048w"
                                    data-sizes="(max-width: 800px) 100vw, 800px"
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    style="--smush-placeholder-width: 800px; --smush-placeholder-aspect-ratio: 800/359;" />
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-45969579 elementor-widget elementor-widget-text-editor"
                            data-id="45969579" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <p>The Philippines&#8217; fastest-growing, impact-driven agri-tech platform empowering
                                    smallholder farmers and fisherfolks across the archipelago through sustainable
                                    access to market, inputs, and credit. Trusted by a solid portfolio of B2B buyers.
                                </p>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-5ce36426 elementor-shape-circle elementor-grid-tablet-4 e-grid-align-left e-grid-align-tablet-left e-grid-align-tablet_extra-left elementor-grid-0 elementor-widget elementor-widget-social-icons"
                            data-id="5ce36426" data-element_type="widget" data-widget_type="social-icons.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-social-icons-wrapper elementor-grid">
                                    <span class="elementor-grid-item">
                                        <a class="elementor-icon elementor-social-icon elementor-social-icon-linkedin elementor-repeater-item-eec9c4e"
                                            href="https://www.linkedin.com/company/mayani/" target="_blank">
                                            <span class="elementor-screen-only">Linkedin</span>
                                            <i class="fab fa-linkedin"></i> </a>
                                    </span>
                                    <span class="elementor-grid-item">
                                        <a class="elementor-icon elementor-social-icon elementor-social-icon-facebook elementor-repeater-item-ebdef61"
                                            href="https://www.facebook.com/mayaniph" target="_blank">
                                            <span class="elementor-screen-only">Facebook</span>
                                            <i class="fab fa-facebook"></i> </a>
                                    </span>
                                    <span class="elementor-grid-item">
                                        <a class="elementor-icon elementor-social-icon elementor-social-icon-instagram elementor-repeater-item-244bd2b"
                                            href="https://www.instagram.com/mayaniph" target="_blank">
                                            <span class="elementor-screen-only">Instagram</span>
                                            <i class="fab fa-instagram"></i> </a>
                                    </span>
                                    <span class="elementor-grid-item">
                                        <a class="elementor-icon elementor-social-icon elementor-social-icon-youtube elementor-repeater-item-4acf570"
                                            href="https://www.youtube.com/@MayaniPH" target="_blank">
                                            <span class="elementor-screen-only">Youtube</span>
                                            <i class="fab fa-youtube"></i> </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-532356df"
                    data-id="532356df" data-element_type="column">
                    <div class="elementor-widget-wrap">
                    </div>
                </div>
            </div>
        </section>
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-56a491f3 elementor-section-full_width elementor-hidden-widescreen elementor-hidden-desktop elementor-hidden-laptop elementor-section-height-default elementor-section-height-default"
            data-id="56a491f3" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-6888dd22"
                    data-id="6888dd22" data-element_type="column">
                    <div class="elementor-widget-wrap">
                    </div>
                </div>
                <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-38c057ab"
                    data-id="38c057ab" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-25ea70c0 elementor-widget elementor-widget-spacer"
                            data-id="25ea70c0" data-element_type="widget" data-widget_type="spacer.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner"></div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-7b1aca5d elementor-widget elementor-widget-heading"
                            data-id="7b1aca5d" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h3 class="elementor-heading-title elementor-size-default">Shop</h3>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-1536bd6a elementor-widget__width-initial elementor-widget elementor-widget-text-editor"
                            data-id="1536bd6a" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <p><a href="https://shop.mayani.ph/pages/pakyawan">Pakyawan</a></p>
                                <p><a href="https://shop.mayani.ph/collections/vegetables">Vegetables</a></p>
                                <p><a href="https://shop.mayani.ph/collections/fruits">Fruits</a></p>
                                <p><a href="https://shop.mayani.ph/pages/frozen-goods">Frozen Meat</a></p>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-4c341ee9 elementor-widget elementor-widget-spacer"
                            data-id="4c341ee9" data-element_type="widget" data-widget_type="spacer.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-4b950daf"
                    data-id="4b950daf" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-5c45a3af elementor-widget elementor-widget-spacer"
                            data-id="5c45a3af" data-element_type="widget" data-widget_type="spacer.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner"></div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-505502a2 hee elementor-widget elementor-widget-heading"
                            data-id="505502a2" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h4 class="elementor-heading-title elementor-size-default">Shop</h4>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-7b3eccdf elementor-widget__width-initial elementor-widget elementor-widget-text-editor"
                            data-id="7b3eccdf" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <p><a href="https://shop.mayani.ph/collections/plant-based-options">Plant based Meat</a>
                                </p>
                                <p><a href="https://shop.mayani.ph/pages/imperfect-crops">Imperfect Crops</a></p>
                                <p><a href="https://shop.mayani.ph/collections/fruitsandsalad">Bundles</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-4eabb42e"
                    data-id="4eabb42e" data-element_type="column">
                    <div class="elementor-widget-wrap">
                    </div>
                </div>
            </div>
        </section>
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-3c00c15d elementor-section-full_width elementor-hidden-widescreen elementor-hidden-desktop elementor-hidden-laptop elementor-section-height-default elementor-section-height-default"
            data-id="3c00c15d" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-42c3503e"
                    data-id="42c3503e" data-element_type="column">
                    <div class="elementor-widget-wrap">
                    </div>
                </div>
                <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-45df72c2"
                    data-id="45df72c2" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-5a20cce6 elementor-widget elementor-widget-heading"
                            data-id="5a20cce6" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h3 class="elementor-heading-title elementor-size-default">About Mayani</h3>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-ab88136 elementor-widget__width-initial elementor-widget elementor-widget-text-editor"
                            data-id="ab88136" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <p><a href="/about-us">About Us</a></p>
                                <p><a href="/meet-the-team">Meet the Team</a></p>
                                <p><a href="/partner-with-us/">Partner with Us</a></p>
                                <p><a href="/become-a-reseller">Become a Reseller</a></p>
                                <p><a href="{{ route('news-events') }}">News and Events</a></p>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-275266bb elementor-widget elementor-widget-spacer"
                            data-id="275266bb" data-element_type="widget" data-widget_type="spacer.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-7f3bdb4b"
                    data-id="7f3bdb4b" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-56b668b3 elementor-widget elementor-widget-heading"
                            data-id="56b668b3" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h3 class="elementor-heading-title elementor-size-default">Contact</h3>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-14a1a77f elementor-widget__width-initial elementor-widget elementor-widget-text-editor"
                            data-id="14a1a77f" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <p><a href="/contact-us">Contact Us</a></p>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-7f9b773e elementor-widget elementor-widget-heading"
                            data-id="7f9b773e" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default"><a
                                        href="#elementor-action%3Aaction%3Dpopup%3Aopen%26settings%3DeyJpZCI6IjMwMTUiLCJ0b2dnbGUiOmZhbHNlfQ%3D%3D">Viber</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-672d04c8"
                    data-id="672d04c8" data-element_type="column">
                    <div class="elementor-widget-wrap">
                    </div>
                </div>
            </div>
        </section>
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-1a78f33a elementor-section-full_width elementor-hidden-widescreen elementor-hidden-desktop elementor-hidden-laptop elementor-section-height-default elementor-section-height-default"
            data-id="1a78f33a" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-701d9c21"
                    data-id="701d9c21" data-element_type="column">
                    <div class="elementor-widget-wrap">
                    </div>
                </div>
                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-702601a4"
                    data-id="702601a4" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-2d73f844 elementor-widget elementor-widget-text-editor"
                            data-id="2d73f844" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <p><a class="link2" href="/return-and-refund-policy/">Return &amp; Refund Policy</a></p>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-dfddbb9 elementor-widget elementor-widget-text-editor"
                            data-id="dfddbb9" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <p>Copyright © 2023 mayani.ph. All Rights Reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-6a228f9c"
                    data-id="6a228f9c" data-element_type="column">
                    <div class="elementor-widget-wrap">
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script type="speculationrules">
{"prefetch":[{"source":"document","where":{"and":[{"href_matches":"\/*"},{"not":{"href_matches":["\/wp-*.php","\/wp-admin\/*","\/wp-content\/uploads\/*","\/wp-content\/*","\/wp-content\/plugins\/*","\/wp-content\/themes\/hello-elementor-child\/*","\/wp-content\/themes\/hello-elementor\/*","\/*\\?(.+)"]}},{"not":{"selector_matches":"a[rel~=\"nofollow\"]"}},{"not":{"selector_matches":".no-prefetch, .no-prefetch a"}}]},"eagerness":"conservative"}]}
</script>
    <script type="rocketlazyloadscript">
		( function ( body ) {
			'use strict';
			body.className = body.className.replace( /\btribe-no-js\b/, 'tribe-js' );
		} )( document.body );
		</script>
    <div data-elementor-type="popup" data-elementor-id="3015" class="elementor elementor-3015 elementor-location-popup"
        data-elementor-settings="{&quot;a11y_navigation&quot;:&quot;yes&quot;,&quot;timing&quot;:[]}"
        data-elementor-post-type="elementor_library">
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-7cbaff5 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="7cbaff5" data-element_type="section">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c9e1f9c"
                    data-id="c9e1f9c" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-3e0e01f elementor-widget elementor-widget-image"
                            data-id="3e0e01f" data-element_type="widget" data-widget_type="image.default">
                            <div class="elementor-widget-container">
                                <img width="800" height="800"
                                    data-src="https://mayani.ph/wp-content/uploads/2023/08/Mayani-Viber-Commmunity-Updated-1024x1024.jpg"
                                    class="attachment-large size-large wp-image-3016 lazyload" alt=""
                                    data-srcset="https://mayani.ph/wp-content/uploads/2023/08/Mayani-Viber-Commmunity-Updated-1024x1024.jpg 1024w, https://mayani.ph/wp-content/uploads/2023/08/Mayani-Viber-Commmunity-Updated-300x300.jpg 300w, https://mayani.ph/wp-content/uploads/2023/08/Mayani-Viber-Commmunity-Updated-150x150.jpg 150w, https://mayani.ph/wp-content/uploads/2023/08/Mayani-Viber-Commmunity-Updated-768x768.jpg 768w, https://mayani.ph/wp-content/uploads/2023/08/Mayani-Viber-Commmunity-Updated.jpg 1080w"
                                    data-sizes="(max-width: 800px) 100vw, 800px"
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    style="--smush-placeholder-width: 800px; --smush-placeholder-aspect-ratio: 800/800;" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script
        type="rocketlazyloadscript"> /* <![CDATA[ */var tribe_l10n_datatables = {"aria":{"sort_ascending":": activate to sort column ascending","sort_descending":": activate to sort column descending"},"length_menu":"Show _MENU_ entries","empty_table":"No data available in table","info":"Showing _START_ to _END_ of _TOTAL_ entries","info_empty":"Showing 0 to 0 of 0 entries","info_filtered":"(filtered from _MAX_ total entries)","zero_records":"No matching records found","search":"Search:","all_selected_text":"All items on this page were selected. ","select_all_link":"Select all pages","clear_selection":"Clear Selection.","pagination":{"all":"All","next":"Next","previous":"Previous"},"select":{"rows":{"0":"","_":": Selected %d rows","1":": Selected 1 row"}},"datepicker":{"dayNames":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"dayNamesShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"dayNamesMin":["S","M","T","W","T","F","S"],"monthNames":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthNamesShort":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthNamesMin":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"nextText":"Next","prevText":"Prev","currentText":"Today","closeText":"Done","today":"Today","clear":"Clear"}};/* ]]> */ </script>
    <script type="rocketlazyloadscript">
				const lazyloadRunObserver = () => {
					const lazyloadBackgrounds = document.querySelectorAll( `.e-con.e-parent:not(.e-lazyloaded)` );
					const lazyloadBackgroundObserver = new IntersectionObserver( ( entries ) => {
						entries.forEach( ( entry ) => {
							if ( entry.isIntersecting ) {
								let lazyloadBackground = entry.target;
								if( lazyloadBackground ) {
									lazyloadBackground.classList.add( 'e-lazyloaded' );
								}
								lazyloadBackgroundObserver.unobserve( entry.target );
							}
						});
					}, { rootMargin: '200px 0px 200px 0px' } );
					lazyloadBackgrounds.forEach( ( lazyloadBackground ) => {
						lazyloadBackgroundObserver.observe( lazyloadBackground );
					} );
				};
				const events = [
					'DOMContentLoaded',
					'elementor/lazyload/observe',
				];
				events.forEach( ( event ) => {
					document.addEventListener( event, lazyloadRunObserver );
				} );
			</script>




    <script id="pa-frontend-js-extra">
        var PremiumSettings = { "ajaxurl": "https:\/\/mayani.ph\/wp-admin\/admin-ajax.php", "nonce": "bb9414839a" };
    </script>
    <script type="rocketlazyloadscript"
        data-rocket-src="https://mayani.ph/wp-content/uploads/premium-addons-elementor/pa-frontend-a86f4d4e5.min.js?ver=1745431584"
        id="pa-frontend-js" data-rocket-defer defer></script>
    <script type="rocketlazyloadscript" id="rocket-browser-checker-js-after">
"use strict";var _createClass=function(){function defineProperties(target,props){for(var i=0;i<props.length;i++){var descriptor=props[i];descriptor.enumerable=descriptor.enumerable||!1,descriptor.configurable=!0,"value"in descriptor&&(descriptor.writable=!0),Object.defineProperty(target,descriptor.key,descriptor)}}return function(Constructor,protoProps,staticProps){return protoProps&&defineProperties(Constructor.prototype,protoProps),staticProps&&defineProperties(Constructor,staticProps),Constructor}}();function _classCallCheck(instance,Constructor){if(!(instance instanceof Constructor))throw new TypeError("Cannot call a class as a function")}var RocketBrowserCompatibilityChecker=function(){function RocketBrowserCompatibilityChecker(options){_classCallCheck(this,RocketBrowserCompatibilityChecker),this.passiveSupported=!1,this._checkPassiveOption(this),this.options=!!this.passiveSupported&&options}return _createClass(RocketBrowserCompatibilityChecker,[{key:"_checkPassiveOption",value:function(self){try{var options={get passive(){return!(self.passiveSupported=!0)}};window.addEventListener("test",null,options),window.removeEventListener("test",null,options)}catch(err){self.passiveSupported=!1}}},{key:"initRequestIdleCallback",value:function(){!1 in window&&(window.requestIdleCallback=function(cb){var start=Date.now();return setTimeout(function(){cb({didTimeout:!1,timeRemaining:function(){return Math.max(0,50-(Date.now()-start))}})},1)}),!1 in window&&(window.cancelIdleCallback=function(id){return clearTimeout(id)})}},{key:"isDataSaverModeOn",value:function(){return"connection"in navigator&&!0===navigator.connection.saveData}},{key:"supportsLinkPrefetch",value:function(){var elem=document.createElement("link");return elem.relList&&elem.relList.supports&&elem.relList.supports("prefetch")&&window.IntersectionObserver&&"isIntersecting"in IntersectionObserverEntry.prototype}},{key:"isSlowConnection",value:function(){return"connection"in navigator&&"effectiveType"in navigator.connection&&("2g"===navigator.connection.effectiveType||"slow-2g"===navigator.connection.effectiveType)}}]),RocketBrowserCompatibilityChecker}();
</script>
    <script id="rocket-preload-links-js-extra">
        var RocketPreloadLinksConfig = { "excludeUris": "\/(?:.+\/)?feed(?:\/(?:.+\/?)?)?$|\/(?:.+\/)?embed\/|\/(index.php\/)?(.*)wp-json(\/.*|$)|\/refer\/|\/go\/|\/recommend\/|\/recommends\/", "usesTrailingSlash": "1", "imageExt": "jpg|jpeg|gif|png|tiff|bmp|webp|avif|pdf|doc|docx|xls|xlsx|php", "fileExt": "jpg|jpeg|gif|png|tiff|bmp|webp|avif|pdf|doc|docx|xls|xlsx|php|html|htm", "siteUrl": "https:\/\/mayani.ph", "onHoverDelay": "100", "rateThrottle": "3" };
    </script>
    <script type="rocketlazyloadscript" id="rocket-preload-links-js-after">
(function() {
"use strict";var r="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},e=function(){function i(e,t){for(var n=0;n<t.length;n++){var i=t[n];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}return function(e,t,n){return t&&i(e.prototype,t),n&&i(e,n),e}}();function i(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}var t=function(){function n(e,t){i(this,n),this.browser=e,this.config=t,this.options=this.browser.options,this.prefetched=new Set,this.eventTime=null,this.threshold=1111,this.numOnHover=0}return e(n,[{key:"init",value:function(){!this.browser.supportsLinkPrefetch()||this.browser.isDataSaverModeOn()||this.browser.isSlowConnection()||(this.regex={excludeUris:RegExp(this.config.excludeUris,"i"),images:RegExp(".("+this.config.imageExt+")$","i"),fileExt:RegExp(".("+this.config.fileExt+")$","i")},this._initListeners(this))}},{key:"_initListeners",value:function(e){-1<this.config.onHoverDelay&&document.addEventListener("mouseover",e.listener.bind(e),e.listenerOptions),document.addEventListener("mousedown",e.listener.bind(e),e.listenerOptions),document.addEventListener("touchstart",e.listener.bind(e),e.listenerOptions)}},{key:"listener",value:function(e){var t=e.target.closest("a"),n=this._prepareUrl(t);if(null!==n)switch(e.type){case"mousedown":case"touchstart":this._addPrefetchLink(n);break;case"mouseover":this._earlyPrefetch(t,n,"mouseout")}}},{key:"_earlyPrefetch",value:function(t,e,n){var i=this,r=setTimeout(function(){if(r=null,0===i.numOnHover)setTimeout(function(){return i.numOnHover=0},1e3);else if(i.numOnHover>i.config.rateThrottle)return;i.numOnHover++,i._addPrefetchLink(e)},this.config.onHoverDelay);t.addEventListener(n,function e(){t.removeEventListener(n,e,{passive:!0}),null!==r&&(clearTimeout(r),r=null)},{passive:!0})}},{key:"_addPrefetchLink",value:function(i){return this.prefetched.add(i.href),new Promise(function(e,t){var n=document.createElement("link");n.rel="prefetch",n.href=i.href,n.onload=e,n.onerror=t,document.head.appendChild(n)}).catch(function(){})}},{key:"_prepareUrl",value:function(e){if(null===e||"object"!==(void 0===e?"undefined":r(e))||!1 in e||-1===["http:","https:"].indexOf(e.protocol))return null;var t=e.href.substring(0,this.config.siteUrl.length),n=this._getPathname(e.href,t),i={original:e.href,protocol:e.protocol,origin:t,pathname:n,href:t+n};return this._isLinkOk(i)?i:null}},{key:"_getPathname",value:function(e,t){var n=t?e.substring(this.config.siteUrl.length):e;return n.startsWith("/")||(n="/"+n),this._shouldAddTrailingSlash(n)?n+"/":n}},{key:"_shouldAddTrailingSlash",value:function(e){return this.config.usesTrailingSlash&&!e.endsWith("/")&&!this.regex.fileExt.test(e)}},{key:"_isLinkOk",value:function(e){return null!==e&&"object"===(void 0===e?"undefined":r(e))&&(!this.prefetched.has(e.href)&&e.origin===this.config.siteUrl&&-1===e.href.indexOf("?")&&-1===e.href.indexOf("#")&&!this.regex.excludeUris.test(e.href)&&!this.regex.images.test(e.href))}}],[{key:"run",value:function(){"undefined"!=typeof RocketPreloadLinksConfig&&new n(new RocketBrowserCompatibilityChecker({capture:!0,passive:!0}),RocketPreloadLinksConfig).init()}}]),n}();t.run();
}());
</script>
    <script id="rocket_lazyload_css-js-extra">
        var rocket_lazyload_css_data = { "threshold": "300" };
    </script>
    <script id="rocket_lazyload_css-js-after">
        !function o(n, c, a) { function u(t, e) { if (!c[t]) { if (!n[t]) { var r = "function" == typeof require && require; if (!e && r) return r(t, !0); if (s) return s(t, !0); throw (e = new Error("Cannot find module '" + t + "'")).code = "MODULE_NOT_FOUND", e } r = c[t] = { exports: {} }, n[t][0].call(r.exports, function (e) { return u(n[t][1][e] || e) }, r, r.exports, o, n, c, a) } return c[t].exports } for (var s = "function" == typeof require && require, e = 0; e < a.length; e++)u(a[e]); return u }({ 1: [function (e, t, r) { "use strict"; { const c = "undefined" == typeof rocket_pairs ? [] : rocket_pairs, a = (("undefined" == typeof rocket_excluded_pairs ? [] : rocket_excluded_pairs).map(t => { var e = t.selector; document.querySelectorAll(e).forEach(e => { e.setAttribute("data-rocket-lazy-bg-" + t.hash, "excluded") }) }), document.querySelector("#wpr-lazyload-bg-container")); var o = rocket_lazyload_css_data.threshold || 300; const u = new IntersectionObserver(e => { e.forEach(t => { t.isIntersecting && c.filter(e => t.target.matches(e.selector)).map(t => { var e; t && ((e = document.createElement("style")).textContent = t.style, a.insertAdjacentElement("afterend", e), t.elements.forEach(e => { u.unobserve(e), e.setAttribute("data-rocket-lazy-bg-" + t.hash, "loaded") })) }) }) }, { rootMargin: o + "px" }); function n() { 0 < (0 < arguments.length && void 0 !== arguments[0] ? arguments[0] : []).length && c.forEach(t => { try { document.querySelectorAll(t.selector).forEach(e => { "loaded" !== e.getAttribute("data-rocket-lazy-bg-" + t.hash) && "excluded" !== e.getAttribute("data-rocket-lazy-bg-" + t.hash) && (u.observe(e), (t.elements ||= []).push(e)) }) } catch (e) { console.error(e) } }) } n(), function () { const r = window.MutationObserver; return function (e, t) { if (e && 1 === e.nodeType) return (t = new r(t)).observe(e, { attributes: !0, childList: !0, subtree: !0 }), t } }()(document.querySelector("body"), n) } }, {}] }, {}, [1]);
    </script>
    <script type="rocketlazyloadscript"
        data-rocket-src="https://mayani.ph/wp-content/themes/hello-elementor/assets/js/hello-frontend.min.js?ver=3.3.0"
        id="hello-theme-frontend-js" data-rocket-defer defer></script>
    <script type="rocketlazyloadscript"
        data-rocket-src="https://mayani.ph/wp-content/plugins/elementor-pro/assets/lib/smartmenus/jquery.smartmenus.min.js?ver=1.2.1"
        id="smartmenus-js" data-rocket-defer defer></script>
    <script type="rocketlazyloadscript"
        data-rocket-src="https://mayani.ph/wp-content/plugins/elementor-pro/assets/lib/sticky/jquery.sticky.min.js?ver=3.25.4"
        id="e-sticky-js" data-rocket-defer defer></script>
    <script type="rocketlazyloadscript" data-rocket-src="https://mayani.ph/wp-includes/js/imagesloaded.min.js?ver=5.0.0"
        id="imagesloaded-js" data-rocket-defer defer></script>
    <script type="rocketlazyloadscript"
        data-rocket-src="https://mayani.ph/wp-content/plugins/premium-addons-for-elementor/assets/frontend/min-js/isotope.min.js?ver=4.11.2"
        id="isotope-js-js" data-rocket-defer defer></script>
    <script type="rocketlazyloadscript"
        data-rocket-src="https://mayani.ph/wp-content/plugins/premium-addons-for-elementor/assets/frontend/min-js/slick.min.js?ver=4.11.2"
        id="pa-slick-js" data-rocket-defer defer></script>
    <script type="rocketlazyloadscript" data-minify="1"
        data-rocket-src="https://mayani.ph/wp-content/cache/min/1/wp-content/plugins/page-links-to/dist/new-tab.js?ver=1745391098"
        id="page-links-to-js" data-rocket-defer defer></script>
    <script src="https://mayani.ph/wp-content/plugins/wp-smushit/app/assets/js/smush-lazy-load.min.js?ver=3.18.0"
        id="smush-lazy-load-js" data-rocket-defer defer></script>
    <script id="eael-general-js-extra">
        var localize = { "ajaxurl": "https:\/\/mayani.ph\/wp-admin\/admin-ajax.php", "nonce": "477d27a23c", "i18n": { "added": "Added ", "compare": "Compare", "loading": "Loading..." }, "eael_translate_text": { "required_text": "is a required field", "invalid_text": "Invalid", "billing_text": "Billing", "shipping_text": "Shipping", "fg_mfp_counter_text": "of" }, "page_permalink": "https:\/\/mayani.ph\/news-events\/", "cart_redirectition": "", "cart_page_url": "", "el_breakpoints": { "mobile": { "label": "Mobile Portrait", "value": 767, "default_value": 767, "direction": "max", "is_enabled": true }, "mobile_extra": { "label": "Mobile Landscape", "value": 880, "default_value": 880, "direction": "max", "is_enabled": false }, "tablet": { "label": "Tablet Portrait", "value": 1024, "default_value": 1024, "direction": "max", "is_enabled": true }, "tablet_extra": { "label": "Tablet Landscape", "value": 1200, "default_value": 1200, "direction": "max", "is_enabled": true }, "laptop": { "label": "Laptop", "value": 1400, "default_value": 1366, "direction": "max", "is_enabled": true }, "widescreen": { "label": "Widescreen", "value": 2400, "default_value": 2400, "direction": "min", "is_enabled": true } } };
    </script>
    <script type="rocketlazyloadscript"
        data-rocket-src="https://mayani.ph/wp-content/plugins/essential-addons-for-elementor-lite/assets/front-end/js/view/general.min.js?ver=6.1.10"
        id="eael-general-js" data-rocket-defer defer></script>
    <script id="ivory-search-scripts-js-extra">
        var IvorySearchVars = { "is_analytics_enabled": "1" };
    </script>
    <script type="rocketlazyloadscript"
        data-rocket-src="https://mayani.ph/wp-content/plugins/add-search-to-menu/public/js/ivory-search.min.js?ver=5.5.9"
        id="ivory-search-scripts-js" data-rocket-defer defer></script>
    <script id="pcp_script-js-extra">
        var pcp_vars = { "swiperEnqueue": "1" };
    </script>
    <script type="rocketlazyloadscript"
        data-rocket-src="https://mayani.ph/wp-content/plugins/post-carousel/public/assets/js/scripts.min.js?ver=3.0.6"
        id="pcp_script-js" data-rocket-defer defer></script>
    <script type="rocketlazyloadscript"
        data-rocket-src="https://mayani.ph/wp-content/plugins/post-carousel/public/assets/js/swiper-bundle.min.js?ver=3.0.6"
        id="pcp_swiper-js" data-rocket-defer defer></script>
    <script type="rocketlazyloadscript"
        data-rocket-src="https://mayani.ph/wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.min.js?ver=3.25.4"
        id="elementor-pro-webpack-runtime-js" data-rocket-defer defer></script>
    <script type="rocketlazyloadscript"
        data-rocket-src="https://mayani.ph/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.28.3"
        id="elementor-webpack-runtime-js" data-rocket-defer defer></script>
    <script type="rocketlazyloadscript"
        data-rocket-src="https://mayani.ph/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.28.3"
        id="elementor-frontend-modules-js" data-rocket-defer defer></script>
    <script type="rocketlazyloadscript"
        data-rocket-src="https://mayani.ph/wp-includes/js/dist/hooks.min.js?ver=4d63a3d491d11ffd8ac6"
        id="wp-hooks-js"></script>
    <script type="rocketlazyloadscript"
        data-rocket-src="https://mayani.ph/wp-includes/js/dist/i18n.min.js?ver=5e580eb46a90c2b997e6"
        id="wp-i18n-js"></script>
    <script type="rocketlazyloadscript" id="wp-i18n-js-after">
wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );
</script>
    <script type="rocketlazyloadscript" id="elementor-pro-frontend-js-before">
var ElementorProFrontendConfig = {"ajaxurl":"https:\/\/mayani.ph\/wp-admin\/admin-ajax.php","nonce":"7c388447fc","urls":{"assets":"https:\/\/mayani.ph\/wp-content\/plugins\/elementor-pro\/assets\/","rest":"https:\/\/mayani.ph\/wp-json\/"},"settings":{"lazy_load_background_images":true},"popup":{"hasPopUps":true},"shareButtonsNetworks":{"facebook":{"title":"Facebook","has_counter":true},"twitter":{"title":"Twitter"},"linkedin":{"title":"LinkedIn","has_counter":true},"pinterest":{"title":"Pinterest","has_counter":true},"reddit":{"title":"Reddit","has_counter":true},"vk":{"title":"VK","has_counter":true},"odnoklassniki":{"title":"OK","has_counter":true},"tumblr":{"title":"Tumblr"},"digg":{"title":"Digg"},"skype":{"title":"Skype"},"stumbleupon":{"title":"StumbleUpon","has_counter":true},"mix":{"title":"Mix"},"telegram":{"title":"Telegram"},"pocket":{"title":"Pocket","has_counter":true},"xing":{"title":"XING","has_counter":true},"whatsapp":{"title":"WhatsApp"},"email":{"title":"Email"},"print":{"title":"Print"},"x-twitter":{"title":"X"},"threads":{"title":"Threads"}},"facebook_sdk":{"lang":"en_US","app_id":""},"lottie":{"defaultAnimationUrl":"https:\/\/mayani.ph\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"}};
</script>
    <script type="rocketlazyloadscript"
        data-rocket-src="https://mayani.ph/wp-content/plugins/elementor-pro/assets/js/frontend.min.js?ver=3.25.4"
        id="elementor-pro-frontend-js" data-rocket-defer defer></script>
    <script type="rocketlazyloadscript"
        data-rocket-src="https://mayani.ph/wp-includes/js/jquery/ui/core.min.js?ver=1.13.3" id="jquery-ui-core-js"
        data-rocket-defer defer></script>
    <script type="rocketlazyloadscript" id="elementor-frontend-js-before">
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close","a11yCarouselPrevSlideMessage":"Previous slide","a11yCarouselNextSlideMessage":"Next slide","a11yCarouselFirstSlideMessage":"This is the first slide","a11yCarouselLastSlideMessage":"This is the last slide","a11yCarouselPaginationBulletMessage":"Go to slide"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile Portrait","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Landscape","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet Portrait","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Landscape","value":1200,"default_value":1200,"direction":"max","is_enabled":true},"laptop":{"label":"Laptop","value":1400,"default_value":1366,"direction":"max","is_enabled":true},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":true}},"hasCustomBreakpoints":true},"version":"3.28.3","is_static":false,"experimentalFeatures":{"additional_custom_breakpoints":true,"e_local_google_fonts":true,"theme_builder_v2":true,"hello-theme-header-footer":true,"editor_v2":true,"home_screen":true},"urls":{"assets":"https:\/\/mayani.ph\/wp-content\/plugins\/elementor\/assets\/","ajaxurl":"https:\/\/mayani.ph\/wp-admin\/admin-ajax.php","uploadUrl":"https:\/\/mayani.ph\/wp-content\/uploads"},"nonces":{"floatingButtonsClickTracking":"a657048b91"},"swiperClass":"swiper","settings":{"page":[],"editorPreferences":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_tablet","viewport_tablet_extra","viewport_laptop","viewport_widescreen"],"viewport_tablet":1024,"viewport_tablet_extra":1200,"viewport_laptop":1400,"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description","hello_header_logo_type":"logo","hello_header_menu_layout":"horizontal","hello_footer_logo_type":"logo"},"post":{"id":43,"title":"News%20%26%20Events%20-%20Mayani","excerpt":"","featuredImage":false}};
</script>
    <script type="rocketlazyloadscript"
        data-rocket-src="https://mayani.ph/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.28.3"
        id="elementor-frontend-js" data-rocket-defer defer></script>
    <script type="rocketlazyloadscript"
        data-rocket-src="https://mayani.ph/wp-content/plugins/elementor-pro/assets/js/elements-handlers.min.js?ver=3.25.4"
        id="pro-elements-handlers-js" data-rocket-defer defer></script>

    <script>(() => { class RocketElementorPreload { constructor() { this.deviceMode = document.createElement("span"), this.deviceMode.id = "elementor-device-mode-wpr", this.deviceMode.setAttribute("class", "elementor-screen-only"), document.body.appendChild(this.deviceMode) } t() { let t = getComputedStyle(this.deviceMode, ":after").content.replace(/"/g, ""); this.animationSettingKeys = this.i(t), document.querySelectorAll(".elementor-invisible[data-settings]").forEach((t => { const e = t.getBoundingClientRect(); if (e.bottom >= 0 && e.top <= window.innerHeight) try { this.o(t) } catch (t) { } })) } o(t) { const e = JSON.parse(t.dataset.settings), i = e.m || e.animation_delay || 0, n = e[this.animationSettingKeys.find((t => e[t]))]; if ("none" === n) return void t.classList.remove("elementor-invisible"); t.classList.remove(n), this.currentAnimation && t.classList.remove(this.currentAnimation), this.currentAnimation = n; let o = setTimeout((() => { t.classList.remove("elementor-invisible"), t.classList.add("animated", n), this.l(t, e) }), i); window.addEventListener("rocket-startLoading", (function () { clearTimeout(o) })) } i(t = "mobile") { const e = [""]; switch (t) { case "mobile": e.unshift("_mobile"); case "tablet": e.unshift("_tablet"); case "desktop": e.unshift("_desktop") }const i = []; return ["animation", "_animation"].forEach((t => { e.forEach((e => { i.push(t + e) })) })), i } l(t, e) { this.i().forEach((t => delete e[t])), t.dataset.settings = JSON.stringify(e) } static run() { const t = new RocketElementorPreload; requestAnimationFrame(t.t.bind(t)) } } document.addEventListener("DOMContentLoaded", RocketElementorPreload.run) })();</script>
</body>

</html>