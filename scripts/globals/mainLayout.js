const loadLayout = () => {
  fetch("../../views/globals/sidebar/sidebar.html")
    .then((response) => response.text())
    .then((html) => {
      document.getElementById("sidebar").innerHTML = html;
      requestAnimationFrame(() => {
        initSidebar();
      });
    })
    .catch((error) => {
      console.error("Error loading sidebar:", error);
    });

  fetch("../../views/globals/navbar/navbar.html")
    .then((response) => response.text())
    .then((html) => {
      document.getElementById("navbar").innerHTML = html;
    })
    .catch((error) => {
      console.error("Error loading navbar:", error);
    });
};

loadLayout();
