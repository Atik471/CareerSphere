function initSidebar() {
  const handleToggle = () => {
    const sidebar = document.getElementById("sidebar");
    const toggleBtn = document.getElementById("toggle-btn");
    const main = document.getElementById("main");

    const isCollapsed = sidebar.classList.contains("collapsed");

    if (isCollapsed) {
      sidebar.classList.remove("collapsed");
      sidebar.classList.add("expanded");
      main.style.marginLeft = 250 + "px";
    } else {
      sidebar.classList.remove("expanded");
      sidebar.classList.add("collapsed");
      main.style.marginLeft = 100 + "px";
    }
  };

  const toggleBtn = document.getElementById("toggle-btn");
  toggleBtn.addEventListener("click", handleToggle);
}

window.initSidebar = initSidebar;