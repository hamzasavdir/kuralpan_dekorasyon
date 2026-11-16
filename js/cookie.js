console.log("cookie.js çalıştı");

(function () {
  function setCookie(name, value, days) {
    const d = new Date();
    d.setTime(d.getTime() + (days * 24 * 60 * 60 * 1000));
    document.cookie =
      name +
      "=" +
      encodeURIComponent(value) +
      ";expires=" +
      d.toUTCString() +
      ";path=/;SameSite=Lax";
  }

  function getCookie(name) {
    const n = name + "=";
    for (let p of document.cookie.split(";")) {
      p = p.trim();
      if (p.indexOf(n) === 0) return decodeURIComponent(p.substring(n.length));
    }
    return null;
  }

  function ready(fn) {
    if (document.readyState === "loading") document.addEventListener("DOMContentLoaded", fn);
    else fn();
  }

  ready(function () {
    const modal = document.getElementById("kpCookieModal");
    const bar = document.getElementById("kpCookieBar");

    if (!modal) {
      console.warn("kpCookieModal yok. cookie_banner.php include edilmemiş olabilir.");
      return;
    }

    const openBtn = document.getElementById("kpOpenCookieModal");
    const closeBtn = document.getElementById("kpCloseCookieModal");

    function openModal(tabKey) {
      modal.classList.add("is-open");
      modal.setAttribute("aria-hidden", "false");
      document.documentElement.style.overflow = "hidden";

      if (tabKey) setTab(tabKey);

      const dlg = modal.querySelector(".kp-cmodal__dialog");
      if (dlg) dlg.focus();
    }

    function closeModal() {
      modal.classList.remove("is-open");
      modal.setAttribute("aria-hidden", "true");
      document.documentElement.style.overflow = "";
    }

    function hideBar() {
      if (bar) bar.remove();
    }

   
    window.kpOpenCookieSettings = function (tabKey) {
      openModal(tabKey || "consent");
    };

  
    const card = modal.querySelector(".kp-ccard");
    const tabs = card ? Array.from(card.querySelectorAll(".kp-ctab")) : [];
    const panels = card ? Array.from(card.querySelectorAll(".kp-panel")) : [];

    function setTab(key) {
      tabs.forEach((t) => t.classList.toggle("is-active", t.dataset.kpTab === key));
      panels.forEach((p) => p.classList.toggle("is-active", p.dataset.kpPanel === key));
    }

    tabs.forEach((t) => t.addEventListener("click", () => setTab(t.dataset.kpTab)));

    
    if (card) {
      Array.from(card.querySelectorAll(".kp-cat")).forEach((cat) => {
        const head = cat.querySelector(".kp-cat__head");
        if (!head) return;
        head.addEventListener("click", (e) => {
          if (e.target.closest(".kp-switch") || e.target.tagName === "INPUT") return;
          cat.classList.toggle("is-open");
        });
      });

     
      Array.from(card.querySelectorAll(".kp-provider")).forEach((p) => {
        const head = p.querySelector(".kp-provider__head");
        if (!head) return;
        head.addEventListener("click", () => p.classList.toggle("is-open"));
      });
    }

   
    function applyConsent(consentValue, prefs) {
      setCookie("kp_cookie_consent", consentValue, 180);
      setCookie("kp_cookie_prefs", JSON.stringify(prefs), 180);
      hideBar();
      closeModal();
    }

    function acceptAll() {
      applyConsent("accept", { necessary: true, preferences: true, analytics: true });
    }
    function rejectAll() {
      applyConsent("reject", { necessary: true, preferences: false, analytics: false });
    }
    function saveCustom() {
      const pref = document.getElementById("kpPref");
      const analytics = document.getElementById("kpAnalytics");
      applyConsent("custom", {
        necessary: true,
        preferences: !!(pref && pref.checked),
        analytics: !!(analytics && analytics.checked),
      });
    }

   
    document.addEventListener("click", function (e) {
      const btn = e.target.closest("[data-kp-action]");
      if (!btn) return;

      const action = btn.getAttribute("data-kp-action");
      if (action === "acceptAll") return acceptAll();
      if (action === "rejectAll") return rejectAll();
      if (action === "save") return saveCustom();
    });

   
    if (openBtn) openBtn.addEventListener("click", (e) => { e.preventDefault(); openModal("consent"); });
    if (closeBtn) closeBtn.addEventListener("click", (e) => { e.preventDefault(); closeModal(); });

   
    modal.addEventListener("click", (e) => {
      if (e.target && e.target.getAttribute("data-kp-close") === "1") closeModal();
    });

   
    document.addEventListener("keydown", (e) => {
      if (e.key === "Escape" && modal.classList.contains("is-open")) closeModal();
    });

  
    const prefsRaw = getCookie("kp_cookie_prefs");
    if (prefsRaw) {
      try {
        const prefs = JSON.parse(prefsRaw);
        const pref = document.getElementById("kpPref");
        const analytics = document.getElementById("kpAnalytics");
        if (pref) pref.checked = !!prefs.preferences;
        if (analytics) analytics.checked = !!prefs.analytics;
      } catch (_) {}
    }

   
    try {
      const url = new URL(window.location.href);
      const tab = url.searchParams.get("tab");
      if (tab && ["consent", "info", "about"].includes(tab)) setTab(tab);
    } catch (_) {}

   
    closeModal();
  });
})();
