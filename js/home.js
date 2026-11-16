document.addEventListener("DOMContentLoaded", () => {
  const items = document.querySelectorAll(".kp-faq-block .kp-faq-item");

  function setIcon(item) {
    const btn = item.querySelector(".kp-faq-question");
    const icon = btn ? btn.querySelector("span:last-child") : null;
    if (!icon) return;
    icon.textContent = item.classList.contains("active") ? "−" : "+";
  }

 
  items.forEach(setIcon);

  
  items.forEach((item) => {
    const btn = item.querySelector(".kp-faq-question");
    if (!btn) return;

    btn.addEventListener("click", () => {
      const isOpen = item.classList.contains("active");

    
      items.forEach((el) => {
        el.classList.remove("active");
        setIcon(el);
      });

      
      if (!isOpen) {
        item.classList.add("active");
        setIcon(item);
      }
    });
  });
});



const barSpans = document.querySelectorAll(".kp-bar-line span");

const io = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (!entry.isIntersecting) return;

      setTimeout(() => {
        barSpans.forEach((s) => s.classList.add("is-fill"));
      }, 100);

      io.disconnect(); 
    });
  },
  { threshold: 0.35 }
);

const barsWrap = document.querySelector(".kp-faq-bars");
if (barsWrap) io.observe(barsWrap);
