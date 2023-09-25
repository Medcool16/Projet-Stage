  let cars = document.getElementById('count_cars').value;
  let clients = document.getElementById('count_clients').value;
  let res = document.getElementById('count_res').value;


function countUp(targetElementId, startValue, endValue, duration) {
  let startTime = null;
  let isAnimating = false;
  const targetElement = document.getElementById(targetElementId);

  function animateCount(timestamp) {
    if (!startTime) startTime = timestamp;
    const progress = timestamp - startTime;
    const increment = (endValue - startValue) * (progress / (duration * 1000));
    const currentCount = Math.round(startValue + increment);

    targetElement.textContent = currentCount;

    if (progress < duration * 1000) {
      requestAnimationFrame(animateCount);
    } else {
      targetElement.textContent = endValue;
      isAnimating = false;
    }
  }

  function handleScroll() {
    if (isElementInViewport(targetElement) && !isAnimating) {
      isAnimating = true;
      startTime = null;
      animateCount(null);
      window.removeEventListener('scroll', handleScroll);
    }
  }

  function isElementInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
  }

  window.addEventListener('scroll', handleScroll);
}

countUp('clientsCount', 0, clients, 2); 
countUp('carStockCount', 0, cars, 2);
countUp('reservationCount', 0, res, 2);




  document.addEventListener("DOMContentLoaded", function() {
    const userDropdown = document.getElementById("user-dropdown");
    const userMenuButton = document.getElementById("user-menu-button");

    userMenuButton.addEventListener("click", function() {
      const expanded = userMenuButton.getAttribute("aria-expanded") === "true";
      userMenuButton.setAttribute("aria-expanded", !expanded);
      userDropdown.style.display = expanded ? "none" : "block";
    });
  });


  // --------------------------------------------------------------------------------------



  // Section 3
function isElementInVie(element) {
  var rect = element.getBoundingClientRect();
  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
}

// Function to handle the animation
function handle() {
  const animatedSection = document.querySelector("#specials");

  if (isElementInVie(animatedSection)) {
    animatedSection.classList.add("specials");
    window.removeEventListener("scroll", handle);
  }
}

// Attach the scroll event listener
window.addEventListener("scroll", handle);
