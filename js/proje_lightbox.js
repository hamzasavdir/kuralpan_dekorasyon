document.addEventListener("DOMContentLoaded", () => {
  const lb = document.getElementById("kpLightbox");
  const img = document.getElementById("kpLightboxImg");
  if (!lb || !img) return;

  function open(src) {
    img.src = src;
    lb.classList.add("is-open");
    lb.setAttribute("aria-hidden", "false");
    document.body.style.overflow = "hidden";
  }

  function close() {
    lb.classList.remove("is-open");
    lb.setAttribute("aria-hidden", "true");
    img.src = "";
    document.body.style.overflow = "";
  }

 
  document.addEventListener("click", (e) => {
    const a = e.target.closest("[data-kp-lightbox]");
    if (a) {
      e.preventDefault();
      open(a.getAttribute("href"));
      return;
    }

    if (e.target.closest("[data-kp-lb-close='1']")) {
      e.preventDefault();
      close();
    }
  });

  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape" && lb.classList.contains("is-open")) close();
  });
});
