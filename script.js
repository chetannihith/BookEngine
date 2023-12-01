function displayPassword() {
  var password = document.getElementById("password");
  var displayPass = document.getElementById("display-pass");
  var hidenPass = document.getElementById("hiden-pass");

  if (password.type === "password") {
    password.type = "text";
    displayPass.style.display = "block";
    hidenPass.style.display = "none";
  } else {
    password.type = "password";
    displayPass.style.display = "none";
    hidenPass.style.display = "block";
  }
}

function displayPasswordConfirm() {
  var passConfirm = document.getElementById("passwordConfirm");
  var displayPassConfirm = document.getElementById("display-passConfirm");
  var hidenPassConfirm = document.getElementById("hiden-passConfirm");

  if (passConfirm.type === "password") {
    console.log("click if");
    passConfirm.type = "text";
    displayPassConfirm.style.display = "block";
    hidenPassConfirm.style.display = "none";
  } else {
    console.log("click else");
    passConfirm.type = "password";
    displayPassConfirm.style.display = "none";
    hidenPassConfirm.style.display = "block";
  }
}

searchForm = document.querySelector(".search-form");

document.querySelector("#search-btn").onclick = () => {
  searchForm.classList.toggle("active");
};

var navLinks = document.querySelectorAll("header .navbar a");
var section = document.querySelectorAll("section");

window.onscroll = () => {
  searchForm.classList.remove("active");

  section.forEach((sec) => {
    var top = window.scrollY;
    var height = sec.offsetHeight;
    var offset = sec.offsetTop - 150;
    var id = sec.getAttribute("id");

    if (top >= offset && top < offset + height) {
      navLinks.forEach((links) => {
        links.classList.remove("active");
        document
          .querySelector("header .navbar a[href *= " + id + "]")
          .classList.add("active");
      });
    }
  });

  if (window.scrollY > 80) {
    document.querySelector(".header .header-2").classList.add("active");
  } else {
    document.querySelector(".header .header-2").classList.remove("active");
  }
};
function loader() {
  document.querySelector(".loader-container").classList.add("active");
}
function fadeOut() {
  setTimeout(loader, 4000);
}
window.onload = () => {
  if (window.scrollY > 80) {
    document.querySelector(".header .header-2").classList.add("active");
  } else {
    document.querySelector(".header .header-2").classList.remove("active");
  }
  fadeOut();
};

var swiper = new Swiper(".books-slider", {
  loop: true,
  centeredSlides: true,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});

var swiper = new Swiper(".populer-slider", {
  spaceBetween: 10,
  loop: true,
  centeredSlides: true,
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    450: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 3,
    },
    1024: {
      slidesPerView: 4,
    },
  },
});

var swiper = new Swiper(".new-slider", {
  spaceBetween: 10,
  loop: true,
  centeredSlides: true,
  autoplay: {
    delay: 3500,
    disableOnInteraction: false,
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});

var swiper = new Swiper(".new-slider-2", {
  spaceBetween: 10,
  loop: true,
  centeredSlides: true,
  autoplay: {
    delay: 6000,
    disableOnInteraction: false,
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});

var swiper = new Swiper(".reviews-slider", {
  spaceBetween: 10,
  grabCursor: true,
  loop: true,
  centeredSlides: true,
  autoplay: {
    delay: 33500,
    disableOnInteraction: false,
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});

let loadMoreBtn = document.querySelector("#load-more");
let currentItem = 3;

loadMoreBtn.onclick = () => {
  let boxes = [...document.querySelectorAll(".container .box-container .box")];
  for (var i = currentItem; i < currentItem + 3; i++) {
    boxes[i].style.display = "inline-block";
  }
  currentItem += 3;

  if (currentItem >= boxes.length) {
    loadMoreBtn.style.display = "none";
  }
};


document.addEventListener("DOMContentLoaded", function () {
  // Get all Add to Cart buttons
  var addToCartButtons = document.querySelectorAll(".populer-slider .btn");

  // Add click event listener to each button
  addToCartButtons.forEach(function (button, index) {
    button.addEventListener("click", function () {
      // Get product information
      var item = {
        name: document.querySelectorAll(".populer-slider h3")[index].textContent,
        price: document.querySelectorAll(".populer-slider .price")[index].textContent,
        image: document.querySelectorAll(".populer-slider img")[index].getAttribute("src"),
      };
      // Check if there's already cart data in localStorage
      var cart = JSON.parse(localStorage.getItem("cart")) || [];

      // Add the current product to the cart
      cart.push(item);

      // Save the updated cart back to localStorage
      localStorage.setItem("cart", JSON.stringify(cart));

      // Optionally, you can provide feedback to the user (e.g., show a message or update a cart icon)
      alert("Product added to cart!");

      // You can also redirect to the cart page if needed
       window.location.href = "cart.php";
    });
  });
});