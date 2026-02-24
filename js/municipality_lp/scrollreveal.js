$(function () {
ScrollReveal().reveal('.textTop', { 
  duration: 1600,
  origin: 'top', 
  reset: false,
  distance: '50px',
});
ScrollReveal().reveal('.textLeft', { 
  duration: 800,
  origin: 'left', 
  reset: false,
  distance: '200px',
});
ScrollReveal().reveal('.textRight_top', { 
  duration: 1600,
  origin: 'right', 
  distance: '200px',
  reset: false
});
ScrollReveal().reveal('.textRight', { 
  duration: 800,
  origin: 'right', 
  distance: '200px',
  reset: false
});
ScrollReveal().reveal('.textBottom', { 
  duration: 800,
  origin: 'bottom', 
  distance: '100px',
  reset: false
});
});
ScrollReveal().reveal('.slow', { 
  duration: 2000, // デュレーション
  reset: false   // 何回もアニメーション表示
  });