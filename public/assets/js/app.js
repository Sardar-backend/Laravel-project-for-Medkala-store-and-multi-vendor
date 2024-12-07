if (
  (document.addEventListener("DOMContentLoaded", function () {
    let e = document.getElementById("desktopMegamenuWrapper"),
      t = document.getElementById("desktopMegamenu"),
      a = document.getElementById("header-overlay"),
      n = !1;
    if (e && t && a) {
      let r = (e) => {
        (n = "mouseenter" === e.type),
          t.classList.toggle("hidden", !n),
          a.classList.toggle("hidden", !n);
      };
      e.addEventListener("mouseenter", r), e.addEventListener("mouseleave", r);
    }
    let s = !1,
      l = document.getElementById("mobile-header-bottom"),
      i = document.getElementById("desktop-header-bottom"),
      o = !1,
      c = window.pageYOffset || document.documentElement.scrollTop;
    if (l && i) {
      let d = () => {
        let e = window.pageYOffset || document.documentElement.scrollTop;
        e > 100 && e > c
          ? o || n || s || (i.classList.add("-translate-y-full"), (o = !0))
          : (l.classList.remove("-translate-y-full"),
            i.classList.remove("-translate-y-full"),
            (o = !1)),
          (c = e);
      };
      window.addEventListener("scroll", d);
    }
    let u = document.querySelectorAll("#mega-menu-parents li a"),
      m = document.querySelectorAll(
        "#mega-menu-childs > div[data-category-child]"
      );
    u.length > 0 &&
      (u[0].classList.add("mega-menu-active"),
      m[0].classList.remove("hidden"),
      u.forEach((e) => {
        e.addEventListener("mouseenter", () => {
          u.forEach((e) => e.classList.remove("mega-menu-active")),
            m.forEach((e) => e.classList.add("hidden")),
            e.classList.add("mega-menu-active"),
            document
              .querySelector(
                `div[data-category-child="${e.getAttribute(
                  "data-category-parent"
                )}"]`
              )
              .classList.remove("hidden");
        });
      }));
    let g = (e) => {
      document.querySelectorAll(".border-gradient").forEach((t) => {
        let { left: a, top: n } = t.getBoundingClientRect(),
          { clientX: r, clientY: s } = e;
        t.style.setProperty("--x", `${r - a}px`),
          t.style.setProperty("--y", `${s - n}px`);
      });
    };
    document.addEventListener("mousemove", g);
    let $ = document.querySelectorAll("#shop-price-slider"),
      y = document.querySelectorAll("#shop-price-slider-min"),
      b = document.querySelectorAll("#shop-price-slider-max");
    function h(e, t, n, r) {
      let l = document.getElementById(e),
        i = document.getElementById(t),
        o = document.getElementById(n),
        c = document.getElementById(r);
      if (l && i && o && c)
        return (
          o.addEventListener("focus", () => {
            i.classList.add(
              "border",
              "bg-white",
              "dark:bg-zinc-900",
              "rounded-b-none"
            ),
              i.classList.remove("bg-gray-100", "dark:bg-black"),
              o.classList.add("bg-white", "dark:bg-zinc-900"),
              o.classList.remove("bg-gray-100", "dark:bg-black"),
              a.classList.remove("hidden"),
              c.classList.remove("hidden"),
              (s = !0);
          }),
          {
            base: l,
            hideSearchResults: function e() {
              i.classList.remove(
                "border",
                "bg-white",
                "dark:bg-zinc-900",
                "rounded-b-none"
              ),
                i.classList.add("bg-gray-100", "dark:bg-black"),
                o.classList.remove("bg-white", "dark:bg-zinc-900"),
                o.classList.add("bg-gray-100", "dark:bg-black"),
                i.classList.remove("rounded-b-none"),
                a.classList.add("hidden"),
                c.classList.add("hidden"),
                (s = !1);
            },
          }
        );
    }
    $.forEach((e) => {
      noUiSlider.create(e, {
        cssPrefix: "range-slider-",
        start: [0, 1e8],
        direction: "rtl",
        margin: 1,
        connect: !0,
        range: { min: 0, max: 1e8 },
        format: {
          to: function (e) {
            return e.toLocaleString("en-US", {
              style: "decimal",
              maximumFractionDigits: 0,
            });
          },
          from: function (e) {
            return parseFloat(e.replace(/,/g, ""));
          },
        },
      }),
        e.noUiSlider.on("update", function (e, t) {
          t
            ? b.forEach((a) => {
                a.innerHTML = e[t];
              })
            : y.forEach((a) => {
                a.innerHTML = e[t];
              });
        });
    });
    let v = h(
        "desktopHeaderSearchBase",
        "desktopHeaderSearchWrapper",
        "desktopHeaderSearch",
        "desktopHeaderSearchResult"
      ),
      p = h(
        "mobileHeaderSearchBase",
        "mobileHeaderSearchWrapper",
        "mobileHeaderSearch",
        "mobileHeaderSearchResult"
      );
    if (v && p) {
      let { base: f, hideSearchResults: E } = v,
        { base: L, hideSearchResults: S } = p;
      document.addEventListener("mousedown", (e) => {
        f && L && !f.contains(e.target) && !L.contains(e.target) && (E(), S());
      });
    }
    function B(e) {
      let t = e.target.parentNode.parentElement.querySelector(
          'button[data-action="increment"]'
        ),
        a = t.nextElementSibling,
        n = Number(a.value);
      1 != n && (n--, (a.value = n));
    }
    function k(e) {
      let t = e.target.parentNode.parentElement.querySelector(
          'button[data-action="increment"]'
        ),
        a = t.nextElementSibling,
        n = Number(a.value);
      n++, (a.value = n);
    }
    let I = document.querySelectorAll('button[data-action="decrement"]'),
      T = document.querySelectorAll('button[data-action="increment"]');
    I.forEach((e) => {
      e.addEventListener("click", B);
    }),
      T.forEach((e) => {
        e.addEventListener("click", k);
      });
  }),
  document.addEventListener("readystatechange", (e) => {
    if ("complete" === e.target.readyState) {
      for (
        var t = document.getElementsByClassName("clockdiv"), a = [], n = 0;
        n < t.length;
        n++
      )
        (a[n] = []),
          (a[n].el = t[n]),
          (a[n].time = new Date(t[n].getAttribute("data-date")).getTime()),
          (a[n].hours = 0),
          (a[n].seconds = 0),
          (a[n].minutes = 0);
      var r = setInterval(function () {
        for (var e = 0; e < a.length; e++) {
          var t = new Date().getTime(),
            n = a[e].time - t;
          (a[e].hours = Math.floor((n % 864e5) / 36e5)),
            (a[e].minutes = Math.floor((n % 36e5) / 6e4)),
            (a[e].seconds = Math.floor((n % 6e4) / 1e3)),
            n < 0
              ? ((a[e].el.querySelector(".hours").innerHTML = 0),
                (a[e].el.querySelector(".minutes").innerHTML = 0),
                (a[e].el.querySelector(".seconds").innerHTML = 0))
              : ((a[e].el.querySelector(".hours").innerHTML = a[e].hours),
                (a[e].el.querySelector(".minutes").innerHTML = a[e].minutes),
                (a[e].el.querySelector(".seconds").innerHTML = a[e].seconds));
        }
      }, 1e3);
    }
  }),
  document.getElementById("btn-back-to-top"))
) 

{
  console.log("ggg");
  function e() {
    (document.body.scrollTop = 0), (document.documentElement.scrollTop = 0);
  }
  document.getElementById("btn-back-to-top").addEventListener("click", e);
}
function currentDiv(e) {
  showDivs((slideIndex = e));
}
function showDivs(e) {
  var t,
    a = document.getElementsByClassName("mySlides"),
    n = document.getElementsByClassName("demo");
  for (
    e > a.length && (slideIndex = 1), e < 1 && (slideIndex = a.length), t = 0;
    t < a.length;
    t++
  )
    a[t].style.display = "none";
  for (t = 0; t < n.length; t++)
    n[t].className = n[t].className.replace(" w3-opacity-off", "");
  (a[slideIndex - 1].style.display = "block"),
    (n[slideIndex - 1].className += " w3-opacity-off");
}
const button = document.querySelector("button");
let arrayInputs = [];
(arrayInputs = document.querySelectorAll(".inputVerify")).forEach((e, t) => {
  e.addEventListener("keyup", (a) => {
    let n = e,
      r = e.nextElementSibling,
      s = e.previousElementSibling;
    if (n.value.length > 1) {
      n.value = "";
      return;
    }
    if (
      (r &&
        r.hasAttribute("disabled") &&
        "" !== n.value &&
        (r.removeAttribute("disabled"), r.focus()),
      "Backspace" === a.key &&
        arrayInputs.forEach((e, a) => {
          t <= a &&
            s &&
            (e.setAttribute("disabled", !0), (e.value = ""), s.focus());
        }),
      !arrayInputs[3].disabled && "" !== arrayInputs[3].value)
    ) {
      button.classList.add("active");
      return;
    }
    button.classList.remove("active");
  });
}),
  window.addEventListener("load", () => arrayInputs[0].focus());
var currentTab = 0;
function showTab(e) {
  var t = document.getElementsByClassName("step");
  (t[e].style.display = "block"),
    0 == e
      ? (document.getElementById("prevBtn").style.display = "none")
      : (document.getElementById("prevBtn").style.display = "inline"),
    e == t.length - 1
      ? (document.getElementById("nextBtn").innerHTML = "ثبت اطلاعات")
      : (document.getElementById("nextBtn").innerHTML = "بعدی"),
    fixStepIndicator(e);
}
function nextPrev(e) {
  var t = document.getElementsByClassName("step");
  return (
    !!(1 != e || validateForm()) &&
    (((t[currentTab].style.display = "none"), (currentTab += e) >= t.length)
      ? (document.getElementById("signUpForm").submit(), !1)
      : void showTab(currentTab))
  );
}
function validateForm() {
  var e,
    t,
    a,
    n = !0;
  for (
    a = 0,
      t = (e = document.getElementsByClassName("step"))[
        currentTab
      ].getElementsByTagName("input");
    a < t.length;
    a++
  )
    "" == t[a].value && ((t[a].className += " invalid"), (n = !1));
  return (
    n &&
      (document.getElementsByClassName("stepIndicator")[currentTab].className +=
        " finish"),
    n
  );
}
function fixStepIndicator(e) {
  var t,
    a = document.getElementsByClassName("stepIndicator");
  for (t = 0; t < a.length; t++)
    a[t].className = a[t].className.replace(" active", "");
  a[e].className += " active";
}
function showNavbar() {
  let e = document.getElementById("navbar");
  e.classList.toggle("-right-full"), e.classList.toggle("-right-2");
}
function bgNavbar() {
  let e = document.getElementById("navbar");
  e.classList.toggle("-right-full"), e.classList.toggle("-right-2");
}
showTab(currentTab);
