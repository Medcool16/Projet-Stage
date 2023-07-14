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
      window.removeEventListener('scroll', handleScroll); // Remove the event listener after triggering the animation
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

countUp('clientsCount', 0, 1000, 3); 
countUp('carStockCount', 0, 500, 5);
countUp('reservationCount', 0, 200, 5);

