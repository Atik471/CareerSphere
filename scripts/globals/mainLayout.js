fetch("../../views/globals/sidebar/sidebar.html")
  .then((response) => response.text())
  .then((html) => {
    document.getElementById("sidebar").innerHTML = html;
    requestAnimationFrame(() => {
        initSidebar();
      });
    
  })
  .catch((error) => {
    console.error("Error loading dashboard:", error);
  });